<?php
/**
 * Project: ClashRuleDeployer
 * File: install.php
 * Description: 安装引导脚本
 */

if (file_exists(__DIR__ . '/.env')) {
    header('Location: /public/');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $env = [
        'GIT_REMOTE' => $_POST['git_remote'] ?? '',
        'GIT_BRANCH' => $_POST['git_branch'] ?? 'main',
        'GIT_USERNAME' => $_POST['git_username'] ?? '',
        'GIT_EMAIL' => $_POST['git_email'] ?? '',
        'ADMIN_PASSWORD' => password_hash($_POST['admin_password'] ?? '', PASSWORD_DEFAULT),
    ];

    $content = "";
    foreach ($env as $key => $val) {
        $content .= "$key=\"$val\"\n";
    }

    file_put_contents(__DIR__ . '/.env', $content);
    header('Location: /public/');
    exit;
}

?><!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ClashRuleDeployer 安装</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <form method="POST" class="bg-white p-8 rounded shadow-md w-full max-w-lg space-y-4">
    <h1 class="text-2xl font-bold mb-4">ClashRuleDeployer 安装引导</h1>
    <input class="w-full border p-2" name="git_remote" placeholder="GitHub 仓库地址（含 Token）" required />
    <input class="w-full border p-2" name="git_branch" placeholder="分支名（如 main）" required />
    <input class="w-full border p-2" name="git_username" placeholder="Git 用户名" required />
    <input class="w-full border p-2" name="git_email" placeholder="Git 邮箱" required />
    <input class="w-full border p-2" name="admin_password" type="password" placeholder="后台登录密码" required />
    <button class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700">安装</button>
  </form>
</body>
</html>

