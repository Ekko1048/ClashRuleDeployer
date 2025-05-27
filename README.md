---

# 自动抓取规则并推送 Git 系统

## 简介

这是一个用 PHP 编写的自动抓取规则文件（如 Clash 规则、代理配置等）并推送到 Git 仓库的轻量工具。
支持从 `url.txt` 读取规则源地址，分类抓取保存，并自动提交推送。

适合需要自动同步规则文件并托管于 Git 的场景。

---

## 环境要求

* PHP 7.4 及以上（建议 8.0+）
* cURL 扩展开启
* 服务器支持执行 shell 命令（`exec`）
* Git 已安装并配置好（支持 SSH Key 或 HTTPS 令牌）
* Apache/Nginx 服务器，支持 `.htaccess` 或相应目录访问规则

---

## 目录结构

```
项目根目录/
├── app/                # 程序核心类
│   ├── ConfigManager.php
│   ├── FetchManager.php
│   ├── GitManager.php
│   ├── LogManager.php
│   └── EnvManager.php
├── public/             # 对外访问入口
│   ├── index.php       # 伪装首页，显示维护中
│   └── admin.php       # 后台管理页
├── rules/              # 抓取规则保存目录（自动生成）
├── url.txt             # 规则地址列表，需自己填写
├── .env                # 配置文件（自动生成，不要手动修改）
├── .htaccess           # 安全与重写规则
├── install.php         # 安装向导，生成 .env
├── log.txt             # 日志文件
├── README.md           # 说明文档
```

---

## 安装步骤

1. **上传代码到服务器**

   将项目文件上传至支持 PHP 的服务器目录。

2. **访问安装页面**

   浏览器打开 `http(s)://你的域名/install.php`。

3. **填写配置信息**

   * Git 仓库地址（支持 HTTPS 或 SSH）
   * Git 分支（默认为 main）
   * Git 用户名和邮箱（提交时使用）
   * 后台管理密码（访问 `admin.php` 时登录用）

4. **提交生成 `.env`**

   安装成功后，`.env` 文件会生成，包含你的配置信息。

5. **准备 `url.txt`**

   编辑根目录 `url.txt` 文件，每行写一个规则文件的 URL 地址。例如：

   ```
   https://example.com/providers.yaml
   https://example.com/rules.yaml
   https://example.com/config.yaml
   ```

6. **访问后台管理**

   访问 `http(s)://你的域名/public/admin.php`，输入安装时设置的密码登录。

---

## 使用说明

### 后台管理页面功能

* **查看日志**：显示抓取和 Git 操作日志，方便调试。
* **手动触发抓取**：点击按钮，程序会根据 `url.txt` 自动抓取规则，分类保存，并推送至 Git。
* **查看当前抓取结果**：后台页面会显示抓取结果文件的列表。

### 自动抓取规则

* 程序读取 `url.txt`，逐条抓取规则文件内容。
* 根据 URL 中关键词分类（providers、rules、config、proxy），文件保存在 `rules/` 目录对应分类。
* 同类旧文件自动删除，只保留最新。
* 使用 Git 提交并推送变更。

---

## 安全建议

* `.env` 和日志文件 `log.txt` 已通过 `.htaccess` 保护，不可外部访问，请确认服务器支持 `.htaccess`。
* `app/` 目录禁止直接访问。
* 后台管理页面密码请设置强密码。
* 服务器执行 `exec` 权限确保安全，避免被滥用。

---

## 常见问题

* **抓取失败？**

  检查服务器网络连接，确认规则 URL 可访问。

* **Git 推送失败？**

  确认服务器 Git 配置，SSH Key 或 HTTPS Token 有效，且有推送权限。

* **日志为空？**

  确认程序有写权限，日志文件 `log.txt` 可写。

---

## 后续扩展

* 支持定时任务（crontab）自动抓取。
* 增加更灵活的规则分类和文件命名。
* UI 美化，支持多用户管理。

---

