<?php
// public/index.php
http_response_code(503);
?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>网站维护中</title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">
<div class="max-w-md p-8 text-center">
  <h1 class="text-3xl font-bold mb-4 text-gray-800">网站维护中</h1>
  <p class="text-gray-600 mb-6">抱歉，系统正在升级，请稍后访问。</p>
  <p class="text-gray-400 text-sm">如需管理，请访问 <a href="/public/admin.php" class="text-blue-600 underline">后台登录</a></p>
</div>
</body>
</html>
