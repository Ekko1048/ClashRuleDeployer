<?php
// public/admin.php
session_start();

require_once __DIR__ . '/../app/EnvLoader.php';
require_once __DIR__ . '/../app/FetchManager.php';
require_once __DIR__ . '/../app/GitManager.php';
require_once __DIR__ . '/../app/LogManager.php';

EnvLoader::load(__DIR__ . '/../.env');

function checkPassword($password) {
    $hash = getenv('ADMIN_PASSWORD_HASH');
    if (!$hash) {
        // 第一次登录时，保存密码Hash到环境变量里
        $newHash = password_hash($password, PASSWORD_DEFAULT);
        file_put_contents(__DIR__ . '/../.env', preg_replace('/ADMIN_PASSWORD=".*"/', 'ADMIN_PASSWORD_HASH="'.$newHash.'"', file_get_contents(__DIR__ . '/../.env')));
        putenv('ADMIN_PASSWORD_HASH='.$newHash);
        return true;
    }
    return password_verify($password, $hash);
}

if (isset($_POST['action']) && $_POST['action'] === 'login') {
    if (checkPassword($_POST['password'] ?? '')) {
        $_SESSION['admin_logged_in'] = true;
    } else {
        $error = '密码错误';
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ./admin.php');
    exit;
}

if (empty($_SESSION['admin_logged_in'])) {
    ?>
    <!DOCTYPE html>
    <html lang="zh">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>后台登录 - ClashRuleDeployer</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    </head>
    <body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <form method="POST" class="bg-white p-8 rounded shadow-md w-full max-w-sm space-y-4">
        <h1 class="text-2xl font-bold mb-6 text-center">后台登录</h1>
        <?php if (!empty($error)): ?>
        <p class="text-red-600 text-center"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
        <input type="password" name="password" placeholder="请输入密码" required
            class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600" />
        <button type="submit" name="action" value="login"
            class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">登录</button>
    </form>
    </body>
    </html>
    <?php
    exit;
}

$logFile = __DIR__ . '/../log.txt';
$log = new LogManager($logFile);

if (isset($_POST['action']) && $_POST['action'] === 'fetch_and_push') {
    $fetcher = new FetchManager(__DIR__ . '/../url.txt', __DIR__ . '/../');
    $git = new GitManager(getenv('GIT_REMOTE'), getenv('GIT_BRANCH'), getenv('GIT_USERNAME'), getenv('GIT_EMAIL'));

    $log->clear();
    $log->append("=== 开始执行抓取和推送任务 ===");

    try {
        $fetcher->run($log);
        $log->append("抓取规则完成，开始 Git 提交...");
        $git->commitAndPush($log);
        $log->append("Git 推送成功！");
    } catch (Exception $e) {
        $log->append("错误：" . $e->getMessage());
    }
}

$logContent = $log->read();

?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>后台管理 - ClashRuleDeployer</title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-50 min-h-screen p-6">
<div class="max-w-4xl mx-auto">
    <header class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">ClashRuleDeployer 管理后台</h1>
    <a href="?logout=1" class="text-blue-600 hover:underline">退出登录</a>
    </header>

    <form method="POST" class="mb-6">
    <button type="submit" name="action" value="fetch_and_push"
        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">抓取规则并推送 Git</button>
    </form>

    <section>
    <h2 class="text-xl font-semibold mb-2">执行日志</h2>
    <pre class="bg-white p-4 rounded border max-h-96 overflow-auto text-sm"><?= htmlspecialchars($logContent) ?></pre>
    </section>
</div>
</body>
</html>
