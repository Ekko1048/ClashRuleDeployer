# 简介

本项目生成适用于 [**Clash Premium 内核**](https://github.com/Dreamacro/clash/releases/tag/premium)的规则集（RULE-SET），同时适用于所有使用 Clash Premium 内核的 Clash 图形用户界面（GUI）客户端。使用 GitHub Actions 北京时间每天早上 6:30 自动构建，保证规则最新。

## 说明

本项目的规则集（RULE-SET）只适用于 Clash **Premium** 版本。Clash Premium 相对于普通版，增加了 ​**TUN 增强模式**​，能接管设备所有 TCP 和 UDP 流量。

### Clash Premium 各版本下载地址

> ⚠️ 由于 Clash 及其部分周边生态项目于 2023 年 11 月上旬删库跑路，现提供部分官方原版安装包、可执行文件，详情见 [**hidden**](https://github.com/Loyalsoldier/clash-rules/tree/hidden) 分支。

* Clash Premium **命令行**版：
  * [官方版](https://github.com/Loyalsoldier/clash-rules/tree/hidden/software/clash-premium)（适用于 Windows、macOS、Linux、OpenWRT 等多种平台）
  * [衍生版 Clash.Meta](https://github.com/MetaCubeX/Clash.Meta/releases)（适用于 Windows、macOS、Linux、OpenWRT 等多种平台）
* Clash Premium **图形用户界面**版：
  * [ClashN](https://github.com/2dust/clashN/releases)（适用于 Windows）
  * [ClashX Pro](https://github.com/Loyalsoldier/clash-rules/tree/hidden/software/clashx-pro)（适用于 macOS）
  * [Clash-verge](https://github.com/zzzgydi/clash-verge/releases)（适用于 Windows、macOS、Linux）
  * [Clash for Windows](https://github.com/Loyalsoldier/clash-rules/tree/hidden/software/clash-for-windows)（适用于 Windows、macOS、Linux）
  * [Clash for Android](https://apkpure.com/clash-for-android/com.github.kr328.clash/versions)（适用于 Android）

## 规则文件地址及使用方式

### 在线地址（URL）

> 如果无法访问域名 `raw.githubusercontent.com`，可以使用第二个地址（`cdn.jsdelivr.net`），但是内容更新会有 12 小时的延迟。以下地址填写在 Clash 配置文件里的 `rule-providers` 里的 `url` 配置项中。

### 使用方式

要想使用本项目的规则集，只需要在 Clash 配置文件中添加如下 `rule-providers` 和 `rules`。

#### Rule Providers 配置方式

```yaml
Google:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Google.yaml"
path: ./ruleset/Google.yaml
interval: 86400
GitHub:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/GitHub.yaml"
path: ./ruleset/GitHub.yaml
interval: 86400
Global:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Global.yaml"
path: ./ruleset/Global.yaml
interval: 86400
Telegram:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Telegram.yaml"
path: ./ruleset/Telegram.yaml
interval: 86400
PotatoChat:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/PotatoChat.yaml"
path: ./ruleset/PotatoChat.yaml
interval: 86400
KakaoTalk:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/KakaoTalk.yaml"
path: ./ruleset/KakaoTalk.yaml
interval: 86400
Line:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Line.yaml"
path: ./ruleset/Line.yaml
interval: 86400
Twitter:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Twitter.yaml"
path: ./ruleset/Twitter.yaml
interval: 86400
Facebook:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Facebook.yaml"
path: ./ruleset/Facebook.yaml
interval: 86400
Wikipedia:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Wikipedia.yaml"
path: ./ruleset/Wikipedia.yaml
interval: 86400
Discord:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Discord.yaml"
path: ./ruleset/Discord.yaml
interval: 86400
PayPal:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/PayPal.yaml"
path: ./ruleset/PayPal.yaml
interval: 86400
Amazon:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Amazon.yaml"
path: ./ruleset/Amazon.yaml
interval: 86400
Instagram:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Instagram.yaml"
path: ./ruleset/Instagram.yaml
interval: 86400
Whatsapp:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Whatsapp.yaml"
path: ./ruleset/Whatsapp.yaml
interval: 86400
Adobe:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Adobe.yaml"
path: ./ruleset/Adobe.yaml
interval: 86400
AmazonPrimeVideo:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/AmazonPrimeVideo.yaml"
path: ./ruleset/AmazonPrimeVideo.yaml
interval: 86400
Americasvoice:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Americasvoice.yaml"
path: ./ruleset/Americasvoice.yaml
interval: 86400
BoXun:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/BoXun.yaml"
path: ./ruleset/BoXun.yaml
interval: 86400
CBS:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/CBS.yaml"
path: ./ruleset/CBS.yaml
interval: 86400
CNN:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/CNN.yaml"
path: ./ruleset/CNN.yaml
interval: 86400
CableTV:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/CableTV.yaml"
path: ./ruleset/CableTV.yaml
interval: 86400
LineTV:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/LineTV.yaml"
path: ./ruleset/LineTV.yaml
interval: 86400
SoundCloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/SoundCloud.yaml"
path: ./ruleset/SoundCloud.yaml
interval: 86400
Vimeo:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Vimeo.yaml"
path: ./ruleset/Vimeo.yaml
interval: 86400
AOL:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/AOL.yaml"
path: ./ruleset/AOL.yaml
interval: 86400
Akamai:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Akamai.yaml"
path: ./ruleset/Akamai.yaml
interval: 86400
Buypass:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Buypass.yaml"
path: ./ruleset/Buypass.yaml
interval: 86400
Duckduckgo:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Duckduckgo.yaml"
path: ./ruleset/Duckduckgo.yaml
interval: 86400
GitBook:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/GitBook.yaml"
path: ./ruleset/GitBook.yaml
interval: 86400
GitLab:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/GitLab.yaml"
path: ./ruleset/GitLab.yaml
interval: 86400
Oracle:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Oracle.yaml"
path: ./ruleset/Oracle.yaml
interval: 86400
Opera:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Opera.yaml"
path: ./ruleset/Opera.yaml
interval: 86400
Pinterest:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Pinterest.yaml"
path: ./ruleset/Pinterest.yaml
interval: 86400
Pixiv:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Pixiv.yaml"
path: ./ruleset/Pixiv.yaml
interval: 86400
Reddit:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Reddit.yaml"
path: ./ruleset/Reddit.yaml
interval: 86400
Shopee:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Shopee.yaml"
path: ./ruleset/Shopee.yaml
interval: 86400
Shopify:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Shopify.yaml"
path: ./ruleset/Shopify.yaml
interval: 86400
Snap:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Snap.yaml"
path: ./ruleset/Snap.yaml
interval: 86400
Tumblr:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Tumblr.yaml"
path: ./ruleset/Tumblr.yaml
interval: 86400
Twitch:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Twitch.yaml"
path: ./ruleset/Twitch.yaml
interval: 86400
WIX:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/WIX.yaml"
path: ./ruleset/WIX.yaml
interval: 86400
Zendesk:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Zendesk.yaml"
path: ./ruleset/Zendesk.yaml
interval: 86400
eBay:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/eBay.yaml"
path: ./ruleset/eBay.yaml
interval: 86400
MOMOShop:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/MOMOShop.yaml"
path: ./ruleset/MOMOShop.yaml
interval: 86400
Binance:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Binance.yaml"
path: ./ruleset/Binance.yaml
interval: 86400
DigitalOcean:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/DigitalOcean.yaml"
path: ./ruleset/DigitalOcean.yaml
interval: 86400
OpenAI:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/OpenAI.yaml"
path: ./ruleset/OpenAI.yaml
interval: 86400
6park:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/6park.yaml"
path: ./ruleset/6park.yaml
interval: 86400
Gemini:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Gemini.yaml"
path: ./ruleset/Gemini.yaml
interval: 86400
AppleMusic:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/AppleMusic.yaml"
path: ./ruleset/AppleMusic.yaml
interval: 86400
AppleTV:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/AppleTV.yaml"
path: ./ruleset/AppleTV.yaml
interval: 86400
GlobalMedia:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/GlobalMedia.yaml"
path: ./ruleset/GlobalMedia.yaml
interval: 86400
Netflix:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Netflix.yaml"
path: ./ruleset/Netflix.yaml
interval: 86400
TikTok:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/TikTok.yaml"
path: ./ruleset/TikTok.yaml
interval: 86400
Disney:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Disney.yaml"
path: ./ruleset/Disney.yaml
interval: 86400
Spotify:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Spotify.yaml"
path: ./ruleset/Spotify.yaml
interval: 86400
Niconico:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Niconico.yaml"
path: ./ruleset/Niconico.yaml
interval: 86400
BBC:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/BBC.yaml"
path: ./ruleset/BBC.yaml
interval: 86400
AsianMedia:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/AsianMedia.yaml"
path: ./ruleset/AsianMedia.yaml
interval: 86400
Bahamut:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Bahamut.yaml"
path: ./ruleset/Bahamut.yaml
interval: 86400
Hulu:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Hulu.yaml"
path: ./ruleset/Hulu.yaml
interval: 86400
PandoraTV:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/PandoraTV.yaml"
path: ./ruleset/PandoraTV.yaml
interval: 86400
TVB:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/TVB.yaml"
path: ./ruleset/TVB.yaml
interval: 86400
HBOHK:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/HBOHK.yaml"
path: ./ruleset/HBOHK.yaml
interval: 86400
HBOUSA:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/HBOUSA.yaml"
path: ./ruleset/HBOUSA.yaml
interval: 86400
HuluJP:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/HuluJP.yaml"
path: ./ruleset/HuluJP.yaml
interval: 86400
HuluUSA:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/HuluUSA.yaml"
path: ./ruleset/HuluUSA.yaml
interval: 86400
FOX NOW:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/FOX NOW.yaml"
path: ./ruleset/FOX NOW.yaml
interval: 86400
FOXPlus:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/FOXPlus.yaml"
path: ./ruleset/FOXPlus.yaml
interval: 86400
KKTV:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/KKTV.yaml"
path: ./ruleset/KKTV.yaml
interval: 86400
NaverTV:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/NaverTV.yaml"
path: ./ruleset/NaverTV.yaml
interval: 86400
NowE:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/NowE.yaml"
path: ./ruleset/NowE.yaml
interval: 86400
ParamountPlus:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/ParamountPlus.yaml"
path: ./ruleset/ParamountPlus.yaml
interval: 86400
PrimeVideo:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/PrimeVideo.yaml"
path: ./ruleset/PrimeVideo.yaml
interval: 86400
TVer:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/TVer.yaml"
path: ./ruleset/TVer.yaml
interval: 86400
myTVSUPER:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/myTVSUPER.yaml"
path: ./ruleset/myTVSUPER.yaml
interval: 86400
HBOAsia:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/HBOAsia.yaml"
path: ./ruleset/HBOAsia.yaml
interval: 86400
BiliBiliIntl:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/BiliBiliIntl.yaml"
path: ./ruleset/BiliBiliIntl.yaml
interval: 86400
DiscoveryPlus:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/DiscoveryPlus.yaml"
path: ./ruleset/DiscoveryPlus.yaml
interval: 86400
Overcast:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Overcast.yaml"
path: ./ruleset/Overcast.yaml
interval: 86400
Peacock:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Peacock.yaml"
path: ./ruleset/Peacock.yaml
interval: 86400
Emby:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Emby.yaml"
path: ./ruleset/Emby.yaml
interval: 86400
Cake:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Cake.yaml"
path: ./ruleset/Cake.yaml
interval: 86400
BritboxUK:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/BritboxUK.yaml"
path: ./ruleset/BritboxUK.yaml
interval: 86400
HKOpenTV:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/HKOpenTV.yaml"
path: ./ruleset/HKOpenTV.yaml
interval: 86400
Abema:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Abema.yaml"
path: ./ruleset/Abema.yaml
interval: 86400
Acplay:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Acplay.yaml"
path: ./ruleset/Acplay.yaml
interval: 86400
UKMedia:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/UKMedia.yaml"
path: ./ruleset/UKMedia.yaml
interval: 86400
USMedia:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/USMedia.yaml"
path: ./ruleset/USMedia.yaml
interval: 86400
Lan:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/Lan.yaml"
path: ./ruleset/Lan.yaml
interval: 86400
PrivateTracker:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/PrivateTracker.yaml"
path: ./ruleset/PrivateTracker.yaml
interval: 86400
Developer:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/Developer.yaml"
path: ./ruleset/Developer.yaml
interval: 86400
Scholar:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/Scholar.yaml"
path: ./ruleset/Scholar.yaml
interval: 86400
Download:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/Download.yaml"
path: ./ruleset/Download.yaml
interval: 86400
AdGuardS DNS Filter Direct:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/AdGuardS DNS Filter Direct.yaml"
path: ./ruleset/AdGuardS DNS Filter Direct.yaml
interval: 86400
DNS:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/DNS.yaml"
path: ./ruleset/DNS.yaml
interval: 86400
NTPService:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/NTPService.yaml"
path: ./ruleset/NTPService.yaml
interval: 86400
360Cloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/360Cloud.yaml"
path: ./ruleset/360Cloud.yaml
interval: 86400
BaiduCloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/BaiduCloud.yaml"
path: ./ruleset/BaiduCloud.yaml
interval: 86400
HuaweiCloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/HuaweiCloud.yaml"
path: ./ruleset/HuaweiCloud.yaml
interval: 86400
JingDongCloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/JingDongCloud.yaml"
path: ./ruleset/JingDongCloud.yaml
interval: 86400
KingsoftCloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/KingsoftCloud.yaml"
path: ./ruleset/KingsoftCloud.yaml
interval: 86400
NeteaseCloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/NeteaseCloud.yaml"
path: ./ruleset/NeteaseCloud.yaml
interval: 86400
TencentCloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/TencentCloud.yaml"
path: ./ruleset/TencentCloud.yaml
interval: 86400
HiNet:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/HiNet.yaml"
path: ./ruleset/HiNet.yaml
interval: 86400
CloudCN:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/CloudCN.yaml"
path: ./ruleset/CloudCN.yaml
interval: 86400
CloudGlobal:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/CloudGlobal.yaml"
path: ./ruleset/CloudGlobal.yaml
interval: 86400
AmazonCloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/AmazonCloud.yaml"
path: ./ruleset/AmazonCloud.yaml
interval: 86400
AkamaiCloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/AkamaiCloud.yaml"
path: ./ruleset/AkamaiCloud.yaml
interval: 86400
Linux:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/Linux.yaml"
path: ./ruleset/Linux.yaml
interval: 86400
Atomdata:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/Atomdata.yaml"
path: ./ruleset/Atomdata.yaml
interval: 86400
STUN:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/STUN.yaml"
path: ./ruleset/STUN.yaml
interval: 86400
WeType:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/WeType.yaml"
path: ./ruleset/WeType.yaml
interval: 86400  Google:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Google.yaml"
path: ./ruleset/Google.yaml
interval: 86400
GitHub:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/GitHub.yaml"
path: ./ruleset/GitHub.yaml
interval: 86400
Global:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Global.yaml"
path: ./ruleset/Global.yaml
interval: 86400
Telegram:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Telegram.yaml"
path: ./ruleset/Telegram.yaml
interval: 86400
PotatoChat:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/PotatoChat.yaml"
path: ./ruleset/PotatoChat.yaml
interval: 86400
KakaoTalk:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/KakaoTalk.yaml"
path: ./ruleset/KakaoTalk.yaml
interval: 86400
Line:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Line.yaml"
path: ./ruleset/Line.yaml
interval: 86400
Twitter:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Twitter.yaml"
path: ./ruleset/Twitter.yaml
interval: 86400
Facebook:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Facebook.yaml"
path: ./ruleset/Facebook.yaml
interval: 86400
Wikipedia:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Wikipedia.yaml"
path: ./ruleset/Wikipedia.yaml
interval: 86400
Discord:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Discord.yaml"
path: ./ruleset/Discord.yaml
interval: 86400
PayPal:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/PayPal.yaml"
path: ./ruleset/PayPal.yaml
interval: 86400
Amazon:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Amazon.yaml"
path: ./ruleset/Amazon.yaml
interval: 86400
Instagram:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Instagram.yaml"
path: ./ruleset/Instagram.yaml
interval: 86400
Whatsapp:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Whatsapp.yaml"
path: ./ruleset/Whatsapp.yaml
interval: 86400
Adobe:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Adobe.yaml"
path: ./ruleset/Adobe.yaml
interval: 86400
AmazonPrimeVideo:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/AmazonPrimeVideo.yaml"
path: ./ruleset/AmazonPrimeVideo.yaml
interval: 86400
Americasvoice:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Americasvoice.yaml"
path: ./ruleset/Americasvoice.yaml
interval: 86400
BoXun:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/BoXun.yaml"
path: ./ruleset/BoXun.yaml
interval: 86400
CBS:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/CBS.yaml"
path: ./ruleset/CBS.yaml
interval: 86400
CNN:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/CNN.yaml"
path: ./ruleset/CNN.yaml
interval: 86400
CableTV:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/CableTV.yaml"
path: ./ruleset/CableTV.yaml
interval: 86400
LineTV:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/LineTV.yaml"
path: ./ruleset/LineTV.yaml
interval: 86400
SoundCloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/SoundCloud.yaml"
path: ./ruleset/SoundCloud.yaml
interval: 86400
Vimeo:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Vimeo.yaml"
path: ./ruleset/Vimeo.yaml
interval: 86400
AOL:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/AOL.yaml"
path: ./ruleset/AOL.yaml
interval: 86400
Akamai:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Akamai.yaml"
path: ./ruleset/Akamai.yaml
interval: 86400
Buypass:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Buypass.yaml"
path: ./ruleset/Buypass.yaml
interval: 86400
Duckduckgo:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Duckduckgo.yaml"
path: ./ruleset/Duckduckgo.yaml
interval: 86400
GitBook:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/GitBook.yaml"
path: ./ruleset/GitBook.yaml
interval: 86400
GitLab:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/GitLab.yaml"
path: ./ruleset/GitLab.yaml
interval: 86400
Oracle:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Oracle.yaml"
path: ./ruleset/Oracle.yaml
interval: 86400
Opera:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Opera.yaml"
path: ./ruleset/Opera.yaml
interval: 86400
Pinterest:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Pinterest.yaml"
path: ./ruleset/Pinterest.yaml
interval: 86400
Pixiv:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Pixiv.yaml"
path: ./ruleset/Pixiv.yaml
interval: 86400
Reddit:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Reddit.yaml"
path: ./ruleset/Reddit.yaml
interval: 86400
Shopee:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Shopee.yaml"
path: ./ruleset/Shopee.yaml
interval: 86400
Shopify:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Shopify.yaml"
path: ./ruleset/Shopify.yaml
interval: 86400
Snap:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Snap.yaml"
path: ./ruleset/Snap.yaml
interval: 86400
Tumblr:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Tumblr.yaml"
path: ./ruleset/Tumblr.yaml
interval: 86400
Twitch:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Twitch.yaml"
path: ./ruleset/Twitch.yaml
interval: 86400
WIX:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/WIX.yaml"
path: ./ruleset/WIX.yaml
interval: 86400
Zendesk:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Zendesk.yaml"
path: ./ruleset/Zendesk.yaml
interval: 86400
eBay:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/eBay.yaml"
path: ./ruleset/eBay.yaml
interval: 86400
MOMOShop:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/MOMOShop.yaml"
path: ./ruleset/MOMOShop.yaml
interval: 86400
Binance:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Binance.yaml"
path: ./ruleset/Binance.yaml
interval: 86400
DigitalOcean:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/DigitalOcean.yaml"
path: ./ruleset/DigitalOcean.yaml
interval: 86400
OpenAI:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/OpenAI.yaml"
path: ./ruleset/OpenAI.yaml
interval: 86400
6park:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/6park.yaml"
path: ./ruleset/6park.yaml
interval: 86400
Gemini:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Gemini.yaml"
path: ./ruleset/Gemini.yaml
interval: 86400
AppleMusic:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/AppleMusic.yaml"
path: ./ruleset/AppleMusic.yaml
interval: 86400
AppleTV:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/AppleTV.yaml"
path: ./ruleset/AppleTV.yaml
interval: 86400
GlobalMedia:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/GlobalMedia.yaml"
path: ./ruleset/GlobalMedia.yaml
interval: 86400
Netflix:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Netflix.yaml"
path: ./ruleset/Netflix.yaml
interval: 86400
TikTok:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/TikTok.yaml"
path: ./ruleset/TikTok.yaml
interval: 86400
Disney:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Disney.yaml"
path: ./ruleset/Disney.yaml
interval: 86400
Spotify:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Spotify.yaml"
path: ./ruleset/Spotify.yaml
interval: 86400
Niconico:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Niconico.yaml"
path: ./ruleset/Niconico.yaml
interval: 86400
BBC:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/BBC.yaml"
path: ./ruleset/BBC.yaml
interval: 86400
AsianMedia:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/AsianMedia.yaml"
path: ./ruleset/AsianMedia.yaml
interval: 86400
Bahamut:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Bahamut.yaml"
path: ./ruleset/Bahamut.yaml
interval: 86400
Hulu:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Hulu.yaml"
path: ./ruleset/Hulu.yaml
interval: 86400
PandoraTV:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/PandoraTV.yaml"
path: ./ruleset/PandoraTV.yaml
interval: 86400
TVB:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/TVB.yaml"
path: ./ruleset/TVB.yaml
interval: 86400
HBOHK:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/HBOHK.yaml"
path: ./ruleset/HBOHK.yaml
interval: 86400
HBOUSA:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/HBOUSA.yaml"
path: ./ruleset/HBOUSA.yaml
interval: 86400
HuluJP:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/HuluJP.yaml"
path: ./ruleset/HuluJP.yaml
interval: 86400
HuluUSA:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/HuluUSA.yaml"
path: ./ruleset/HuluUSA.yaml
interval: 86400
FOX NOW:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/FOX NOW.yaml"
path: ./ruleset/FOX NOW.yaml
interval: 86400
FOXPlus:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/FOXPlus.yaml"
path: ./ruleset/FOXPlus.yaml
interval: 86400
KKTV:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/KKTV.yaml"
path: ./ruleset/KKTV.yaml
interval: 86400
NaverTV:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/NaverTV.yaml"
path: ./ruleset/NaverTV.yaml
interval: 86400
NowE:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/NowE.yaml"
path: ./ruleset/NowE.yaml
interval: 86400
ParamountPlus:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/ParamountPlus.yaml"
path: ./ruleset/ParamountPlus.yaml
interval: 86400
PrimeVideo:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/PrimeVideo.yaml"
path: ./ruleset/PrimeVideo.yaml
interval: 86400
TVer:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/TVer.yaml"
path: ./ruleset/TVer.yaml
interval: 86400
myTVSUPER:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/myTVSUPER.yaml"
path: ./ruleset/myTVSUPER.yaml
interval: 86400
HBOAsia:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/HBOAsia.yaml"
path: ./ruleset/HBOAsia.yaml
interval: 86400
BiliBiliIntl:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/BiliBiliIntl.yaml"
path: ./ruleset/BiliBiliIntl.yaml
interval: 86400
DiscoveryPlus:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/DiscoveryPlus.yaml"
path: ./ruleset/DiscoveryPlus.yaml
interval: 86400
Overcast:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Overcast.yaml"
path: ./ruleset/Overcast.yaml
interval: 86400
Peacock:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Peacock.yaml"
path: ./ruleset/Peacock.yaml
interval: 86400
Emby:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Emby.yaml"
path: ./ruleset/Emby.yaml
interval: 86400
Cake:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Cake.yaml"
path: ./ruleset/Cake.yaml
interval: 86400
BritboxUK:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/BritboxUK.yaml"
path: ./ruleset/BritboxUK.yaml
interval: 86400
HKOpenTV:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/HKOpenTV.yaml"
path: ./ruleset/HKOpenTV.yaml
interval: 86400
Abema:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Abema.yaml"
path: ./ruleset/Abema.yaml
interval: 86400
Acplay:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Acplay.yaml"
path: ./ruleset/Acplay.yaml
interval: 86400
UKMedia:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/UKMedia.yaml"
path: ./ruleset/UKMedia.yaml
interval: 86400
USMedia:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/USMedia.yaml"
path: ./ruleset/USMedia.yaml
interval: 86400
Lan:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/Lan.yaml"
path: ./ruleset/Lan.yaml
interval: 86400
PrivateTracker:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/PrivateTracker.yaml"
path: ./ruleset/PrivateTracker.yaml
interval: 86400
Developer:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/Developer.yaml"
path: ./ruleset/Developer.yaml
interval: 86400
Scholar:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/Scholar.yaml"
path: ./ruleset/Scholar.yaml
interval: 86400
Download:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/Download.yaml"
path: ./ruleset/Download.yaml
interval: 86400
AdGuardS DNS Filter Direct:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/AdGuardS DNS Filter Direct.yaml"
path: ./ruleset/AdGuardS DNS Filter Direct.yaml
interval: 86400
DNS:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/DNS.yaml"
path: ./ruleset/DNS.yaml
interval: 86400
NTPService:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/NTPService.yaml"
path: ./ruleset/NTPService.yaml
interval: 86400
360Cloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/360Cloud.yaml"
path: ./ruleset/360Cloud.yaml
interval: 86400
BaiduCloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/BaiduCloud.yaml"
path: ./ruleset/BaiduCloud.yaml
interval: 86400
HuaweiCloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/HuaweiCloud.yaml"
path: ./ruleset/HuaweiCloud.yaml
interval: 86400
JingDongCloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/JingDongCloud.yaml"
path: ./ruleset/JingDongCloud.yaml
interval: 86400
KingsoftCloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/KingsoftCloud.yaml"
path: ./ruleset/KingsoftCloud.yaml
interval: 86400
NeteaseCloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/NeteaseCloud.yaml"
path: ./ruleset/NeteaseCloud.yaml
interval: 86400
TencentCloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/TencentCloud.yaml"
path: ./ruleset/TencentCloud.yaml
interval: 86400
HiNet:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/HiNet.yaml"
path: ./ruleset/HiNet.yaml
interval: 86400
CloudCN:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/CloudCN.yaml"
path: ./ruleset/CloudCN.yaml
interval: 86400
CloudGlobal:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/CloudGlobal.yaml"
path: ./ruleset/CloudGlobal.yaml
interval: 86400
AmazonCloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/AmazonCloud.yaml"
path: ./ruleset/AmazonCloud.yaml
interval: 86400
AkamaiCloud:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/AkamaiCloud.yaml"
path: ./ruleset/AkamaiCloud.yaml
interval: 86400
Linux:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/Linux.yaml"
path: ./ruleset/Linux.yaml
interval: 86400
Atomdata:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/Atomdata.yaml"
path: ./ruleset/Atomdata.yaml
interval: 86400
STUN:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/STUN.yaml"
path: ./ruleset/STUN.yaml
interval: 86400
WeType:
type: http
behavior: classical
url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/WeType.yaml"
path: ./ruleset/WeType.yaml
interval: 86400
```

#### 白名单模式 Rules 配置方式（推荐）

* 白名单模式，意为「​**没有命中规则的网络流量，统统使用代理**​」，适用于服务器线路网络质量稳定、快速，不缺服务器流量的用户。
* 以下配置中，除了 `DIRECT` 和 `REJECT` 是默认存在于 Clash 中的 policy（路由策略/流量处理策略），其余均为自定义 policy，对应配置文件中 `proxies` 或 `proxy-groups` 中的 `name`。如你直接使用下面的 `rules` 规则，则需要在 `proxies` 或 `proxy-groups` 中手动配置一个 `name` 为 `PROXY` 的 policy。
* 如你希望 Apple、iCloud 和 Google 列表中的域名使用代理，则把 policy 由 `DIRECT` 改为 `PROXY`，以此类推，举一反三。
* 如你不希望进行 DNS 解析，可在 `GEOIP` 规则的最后加上 `,no-resolve`，如 `GEOIP,CN,DIRECT,no-resolve`。

```yaml
rules:
  - RULE-SET,Google,🌏 Google
  - RULE-SET,GitHub,🌏 GitHub
  - RULE-SET,Global,🌏 Global
  - RULE-SET,Telegram,🌏 Telegram
  - RULE-SET,PotatoChat,🌏 PotatoChat
  - RULE-SET,KakaoTalk,🌏 KakaoTalk
  - RULE-SET,Line,🌏 Line
  - RULE-SET,Twitter,🌏 Twitter
  - RULE-SET,Facebook,🌏 Facebook
  - RULE-SET,Wikipedia,🌏 Wikipedia
  - RULE-SET,Discord,🌏 Discord
  - RULE-SET,PayPal,🌏 PayPal
  - RULE-SET,Amazon,🌏 Amazon
  - RULE-SET,Instagram,🌏 Instagram
  - RULE-SET,Whatsapp,🌏 Whatsapp
  - RULE-SET,Adobe,🌏 Adobe
  - RULE-SET,AmazonPrimeVideo,🌏 AmazonPrimeVideo
  - RULE-SET,Americasvoice,🌏 Americasvoice
  - RULE-SET,BoXun,🌏 BoXun
  - RULE-SET,CBS,🌏 CBS
  - RULE-SET,CNN,🌏 CNN
  - RULE-SET,CableTV,🌏 CableTV
  - RULE-SET,LineTV,🌏 LineTV
  - RULE-SET,SoundCloud,🌏 SoundCloud
  - RULE-SET,Vimeo,🌏 Vimeo
  - RULE-SET,AOL,🌏 AOL
  - RULE-SET,Akamai,🌏 Akamai
  - RULE-SET,Buypass,🌏 Buypass
  - RULE-SET,Duckduckgo,🌏 Duckduckgo
  - RULE-SET,GitBook,🌏 GitBook
  - RULE-SET,GitLab,🌏 GitLab
  - RULE-SET,Oracle,🌏 Oracle
  - RULE-SET,Opera,🌏 Opera
  - RULE-SET,Pinterest,🌏 Pinterest
  - RULE-SET,Pixiv,🌏 Pixiv
  - RULE-SET,Reddit,🌏 Reddit
  - RULE-SET,Shopee,🌏 Shopee
  - RULE-SET,Shopify,🌏 Shopify
  - RULE-SET,Snap,🌏 Snap
  - RULE-SET,Tumblr,🌏 Tumblr
  - RULE-SET,Twitch,🌏 Twitch
  - RULE-SET,WIX,🌏 WIX
  - RULE-SET,Zendesk,🌏 Zendesk
  - RULE-SET,eBay,🌏 eBay
  - RULE-SET,MOMOShop,🌏 MOMOShop
  - RULE-SET,Binance,🌏 Binance
  - RULE-SET,DigitalOcean,🌏 DigitalOcean
  - RULE-SET,OpenAI,🌏 OpenAI
  - RULE-SET,6park,🌏 6park
  - RULE-SET,Gemini,🌏 Gemini
  - RULE-SET,AppleMusic,🎬 AppleMusic
  - RULE-SET,AppleTV,🎬 AppleTV
  - RULE-SET,GlobalMedia,🎬 GlobalMedia
  - RULE-SET,Netflix,🎬 Netflix
  - RULE-SET,TikTok,🎬 TikTok
  - RULE-SET,Disney,🎬 Disney
  - RULE-SET,Spotify,🎬 Spotify
  - RULE-SET,Niconico,🎬 Niconico
  - RULE-SET,BBC,🎬 BBC
  - RULE-SET,AsianMedia,🎬 AsianMedia
  - RULE-SET,Bahamut,🎬 Bahamut
  - RULE-SET,Hulu,🎬 Hulu
  - RULE-SET,PandoraTV,🎬 PandoraTV
  - RULE-SET,TVB,🎬 TVB
  - RULE-SET,HBOHK,🎬 HBOHK
  - RULE-SET,HBOUSA,🎬 HBOUSA
  - RULE-SET,HuluJP,🎬 HuluJP
  - RULE-SET,HuluUSA,🎬 HuluUSA
  - RULE-SET,FOX NOW,🎬 FOX NOW
  - RULE-SET,FOXPlus,🎬 FOXPlus
  - RULE-SET,KKTV,🎬 KKTV
  - RULE-SET,NaverTV,🎬 NaverTV
  - RULE-SET,NowE,🎬 NowE
  - RULE-SET,ParamountPlus,🎬 ParamountPlus
  - RULE-SET,PrimeVideo,🎬 PrimeVideo
  - RULE-SET,TVer,🎬 TVer
  - RULE-SET,myTVSUPER,🎬 myTVSUPER
  - RULE-SET,HBOAsia,🎬 HBOAsia
  - RULE-SET,BiliBiliIntl,🎬 BiliBiliIntl
  - RULE-SET,DiscoveryPlus,🎬 DiscoveryPlus
  - RULE-SET,Overcast,🎬 Overcast
  - RULE-SET,Peacock,🎬 Peacock
  - RULE-SET,Emby,🎬 Emby
  - RULE-SET,Cake,🎬 Cake
  - RULE-SET,BritboxUK,🎬 BritboxUK
  - RULE-SET,HKOpenTV,🎬 HKOpenTV
  - RULE-SET,Abema,🎬 Abema
  - RULE-SET,Acplay,🎬 Acplay
  - RULE-SET,UKMedia,🎬 UKMedia
  - RULE-SET,USMedia,🎬 USMedia
  - RULE-SET,Lan,☁️ Lan
  - RULE-SET,PrivateTracker,☁️ PrivateTracker
  - RULE-SET,Developer,☁️ Developer
  - RULE-SET,Scholar,☁️ Scholar
  - RULE-SET,Download,☁️ Download
  - RULE-SET,AdGuardS DNS Filter Direct,☁️ AdGuardS DNS Filter Direct
  - RULE-SET,DNS,☁️ DNS
  - RULE-SET,NTPService,☁️ NTPService
  - RULE-SET,360Cloud,☁️ 360Cloud
  - RULE-SET,BaiduCloud,☁️ BaiduCloud
  - RULE-SET,HuaweiCloud,☁️ HuaweiCloud
  - RULE-SET,JingDongCloud,☁️ JingDongCloud
  - RULE-SET,KingsoftCloud,☁️ KingsoftCloud
  - RULE-SET,NeteaseCloud,☁️ NeteaseCloud
  - RULE-SET,TencentCloud,☁️ TencentCloud
  - RULE-SET,HiNet,☁️ HiNet
  - RULE-SET,CloudCN,☁️ CloudCN
  - RULE-SET,CloudGlobal,☁️ CloudGlobal
  - RULE-SET,AmazonCloud,☁️ AmazonCloud
  - RULE-SET,AkamaiCloud,☁️ AkamaiCloud
  - RULE-SET,Linux,☁️ Linux
  - RULE-SET,Atomdata,☁️ Atomdata
  - RULE-SET,STUN,☁️ STUN
  - RULE-SET,WeType,☁️ WeType
  - MATCH,🌏 Google
```

#### 黑名单模式 Rules 配置方式


* 黑名单模式，意为「​**只有命中规则的网络流量，才使用代理**​」，适用于服务器线路网络质量不稳定或不够快，或服务器流量紧缺的用户。通常也是软路由用户、家庭网关用户的常用模式。
* 以下配置中，除了 `DIRECT` 和 `REJECT` 是默认存在于 Clash 中的 policy（路由策略/流量处理策略），其余均为自定义 policy，对应配置文件中 `proxies` 或 `proxy-groups` 中的 `name`。如你直接使用下面的 `rules` 规则，则需要在 `proxies` 或 `proxy-groups` 中手动配置一个 `name` 为 `PROXY` 的 policy。

```yaml
rules:
  - RULE-SET,Google,🌏 Google
  - RULE-SET,GitHub,🌏 GitHub
  - RULE-SET,Global,🌏 Global
  - RULE-SET,Telegram,🌏 Telegram
  - RULE-SET,PotatoChat,🌏 PotatoChat
  - RULE-SET,KakaoTalk,🌏 KakaoTalk
  - RULE-SET,Line,🌏 Line
  - RULE-SET,Twitter,🌏 Twitter
  - RULE-SET,Facebook,🌏 Facebook
  - RULE-SET,Wikipedia,🌏 Wikipedia
  - RULE-SET,Discord,🌏 Discord
  - RULE-SET,PayPal,🌏 PayPal
  - RULE-SET,Amazon,🌏 Amazon
  - RULE-SET,Instagram,🌏 Instagram
  - RULE-SET,Whatsapp,🌏 Whatsapp
  - RULE-SET,Adobe,🌏 Adobe
  - RULE-SET,AmazonPrimeVideo,🌏 AmazonPrimeVideo
  - RULE-SET,Americasvoice,🌏 Americasvoice
  - RULE-SET,BoXun,🌏 BoXun
  - RULE-SET,CBS,🌏 CBS
  - RULE-SET,CNN,🌏 CNN
  - RULE-SET,CableTV,🌏 CableTV
  - RULE-SET,LineTV,🌏 LineTV
  - RULE-SET,SoundCloud,🌏 SoundCloud
  - RULE-SET,Vimeo,🌏 Vimeo
  - RULE-SET,AOL,🌏 AOL
  - RULE-SET,Akamai,🌏 Akamai
  - RULE-SET,Buypass,🌏 Buypass
  - RULE-SET,Duckduckgo,🌏 Duckduckgo
  - RULE-SET,GitBook,🌏 GitBook
  - RULE-SET,GitLab,🌏 GitLab
  - RULE-SET,Oracle,🌏 Oracle
  - RULE-SET,Opera,🌏 Opera
  - RULE-SET,Pinterest,🌏 Pinterest
  - RULE-SET,Pixiv,🌏 Pixiv
  - RULE-SET,Reddit,🌏 Reddit
  - RULE-SET,Shopee,🌏 Shopee
  - RULE-SET,Shopify,🌏 Shopify
  - RULE-SET,Snap,🌏 Snap
  - RULE-SET,Tumblr,🌏 Tumblr
  - RULE-SET,Twitch,🌏 Twitch
  - RULE-SET,WIX,🌏 WIX
  - RULE-SET,Zendesk,🌏 Zendesk
  - RULE-SET,eBay,🌏 eBay
  - RULE-SET,MOMOShop,🌏 MOMOShop
  - RULE-SET,Binance,🌏 Binance
  - RULE-SET,DigitalOcean,🌏 DigitalOcean
  - RULE-SET,OpenAI,🌏 OpenAI
  - RULE-SET,6park,🌏 6park
  - RULE-SET,Gemini,🌏 Gemini
  - RULE-SET,AppleMusic,🎬 AppleMusic
  - RULE-SET,AppleTV,🎬 AppleTV
  - RULE-SET,GlobalMedia,🎬 GlobalMedia
  - RULE-SET,Netflix,🎬 Netflix
  - RULE-SET,TikTok,🎬 TikTok
  - RULE-SET,Disney,🎬 Disney
  - RULE-SET,Spotify,🎬 Spotify
  - RULE-SET,Niconico,🎬 Niconico
  - RULE-SET,BBC,🎬 BBC
  - RULE-SET,AsianMedia,🎬 AsianMedia
  - RULE-SET,Bahamut,🎬 Bahamut
  - RULE-SET,Hulu,🎬 Hulu
  - RULE-SET,PandoraTV,🎬 PandoraTV
  - RULE-SET,TVB,🎬 TVB
  - RULE-SET,HBOHK,🎬 HBOHK
  - RULE-SET,HBOUSA,🎬 HBOUSA
  - RULE-SET,HuluJP,🎬 HuluJP
  - RULE-SET,HuluUSA,🎬 HuluUSA
  - RULE-SET,FOX NOW,🎬 FOX NOW
  - RULE-SET,FOXPlus,🎬 FOXPlus
  - RULE-SET,KKTV,🎬 KKTV
  - RULE-SET,NaverTV,🎬 NaverTV
  - RULE-SET,NowE,🎬 NowE
  - RULE-SET,ParamountPlus,🎬 ParamountPlus
  - RULE-SET,PrimeVideo,🎬 PrimeVideo
  - RULE-SET,TVer,🎬 TVer
  - RULE-SET,myTVSUPER,🎬 myTVSUPER
  - RULE-SET,HBOAsia,🎬 HBOAsia
  - RULE-SET,BiliBiliIntl,🎬 BiliBiliIntl
  - RULE-SET,DiscoveryPlus,🎬 DiscoveryPlus
  - RULE-SET,Overcast,🎬 Overcast
  - RULE-SET,Peacock,🎬 Peacock
  - RULE-SET,Emby,🎬 Emby
  - RULE-SET,Cake,🎬 Cake
  - RULE-SET,BritboxUK,🎬 BritboxUK
  - RULE-SET,HKOpenTV,🎬 HKOpenTV
  - RULE-SET,Abema,🎬 Abema
  - RULE-SET,Acplay,🎬 Acplay
  - RULE-SET,UKMedia,🎬 UKMedia
  - RULE-SET,USMedia,🎬 USMedia
  - RULE-SET,Lan,☁️ Lan
  - RULE-SET,PrivateTracker,☁️ PrivateTracker
  - RULE-SET,Developer,☁️ Developer
  - RULE-SET,Scholar,☁️ Scholar
  - RULE-SET,Download,☁️ Download
  - RULE-SET,AdGuardS DNS Filter Direct,☁️ AdGuardS DNS Filter Direct
  - RULE-SET,DNS,☁️ DNS
  - RULE-SET,NTPService,☁️ NTPService
  - RULE-SET,360Cloud,☁️ 360Cloud
  - RULE-SET,BaiduCloud,☁️ BaiduCloud
  - RULE-SET,HuaweiCloud,☁️ HuaweiCloud
  - RULE-SET,JingDongCloud,☁️ JingDongCloud
  - RULE-SET,KingsoftCloud,☁️ KingsoftCloud
  - RULE-SET,NeteaseCloud,☁️ NeteaseCloud
  - RULE-SET,TencentCloud,☁️ TencentCloud
  - RULE-SET,HiNet,☁️ HiNet
  - RULE-SET,CloudCN,☁️ CloudCN
  - RULE-SET,CloudGlobal,☁️ CloudGlobal
  - RULE-SET,AmazonCloud,☁️ AmazonCloud
  - RULE-SET,AkamaiCloud,☁️ AkamaiCloud
  - RULE-SET,Linux,☁️ Linux
  - RULE-SET,Atomdata,☁️ Atomdata
  - RULE-SET,STUN,☁️ STUN
  - RULE-SET,WeType,☁️ WeType
  - MATCH,DIRECT
```

## 整合完整：

```yaml
port: 7890
allow-lan: true
mode: rule
log-level: info
unified-delay: true
global-client-fingerprint: chrome
dns:
  enable: true
  listen: :53
  ipv6: true
  enhanced-mode: fake-ip
  fake-ip-range: 198.18.0.1/16
  default-nameserver: 
    - 114.114.114.114
    - 1.1.1.1
    - 8.8.8.8
  nameserver:
    - https://cloudflare-dns.com/dns-query
    - https://dns.google/dns-query
  fallback:
    - https://dns.google/dns-query
    - tls://1.1.1.1
  fallback-filter:
    geoip: true
    geoip-code: CN
    ipcidr:
      - 240.0.0.0/4
proxies:
proxy-groups:
  - { name: "♻️ 手动切换", type: select, proxies: [DIRECT] }
  - { name: "🌏 Google", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 GitHub", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Global", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Telegram", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 PotatoChat", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 KakaoTalk", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Line", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Twitter", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Facebook", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Wikipedia", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Discord", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 PayPal", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Amazon", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Instagram", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Whatsapp", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Adobe", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 AmazonPrimeVideo", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Americasvoice", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 BoXun", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 CBS", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 CNN", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 CableTV", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 LineTV", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 SoundCloud", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Vimeo", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 AOL", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Akamai", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Buypass", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Duckduckgo", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 GitBook", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 GitLab", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Oracle", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Opera", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Pinterest", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Pixiv", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Reddit", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Shopee", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Shopify", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Snap", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Tumblr", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Twitch", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 WIX", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Zendesk", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 eBay", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 MOMOShop", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Binance", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 DigitalOcean", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 OpenAI", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 6park", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🌏 Gemini", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 AppleMusic", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 AppleTV", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 GlobalMedia", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 Netflix", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 TikTok", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 Disney", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 Spotify", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 Niconico", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 BBC", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 AsianMedia", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 Bahamut", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 Hulu", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 PandoraTV", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 TVB", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 HBOHK", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 HBOUSA", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 HuluJP", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 HuluUSA", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 FOX NOW", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 FOXPlus", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 KKTV", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 NaverTV", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 NowE", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 ParamountPlus", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 PrimeVideo", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 TVer", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 myTVSUPER", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 HBOAsia", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 BiliBiliIntl", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 DiscoveryPlus", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 Overcast", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 Peacock", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 Emby", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 Cake", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 BritboxUK", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 HKOpenTV", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 Abema", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 Acplay", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 UKMedia", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "🎬 USMedia", type: select, proxies: ["♻️ 手动切换", DIRECT] }
  - { name: "☁️ Lan", type: select, proxies: [DIRECT] }
  - { name: "☁️ PrivateTracker", type: select, proxies: [DIRECT] }
  - { name: "☁️ Developer", type: select, proxies: [DIRECT] }
  - { name: "☁️ Scholar", type: select, proxies: [DIRECT] }
  - { name: "☁️ Download", type: select, proxies: [DIRECT] }
  - { name: "☁️ AdGuardS DNS Filter Direct", type: select, proxies: [DIRECT] }
  - { name: "☁️ DNS", type: select, proxies: [DIRECT] }
  - { name: "☁️ NTPService", type: select, proxies: [DIRECT] }
  - { name: "☁️ 360Cloud", type: select, proxies: [DIRECT] }
  - { name: "☁️ BaiduCloud", type: select, proxies: [DIRECT] }
  - { name: "☁️ HuaweiCloud", type: select, proxies: [DIRECT] }
  - { name: "☁️ JingDongCloud", type: select, proxies: [DIRECT] }
  - { name: "☁️ KingsoftCloud", type: select, proxies: [DIRECT] }
  - { name: "☁️ NeteaseCloud", type: select, proxies: [DIRECT] }
  - { name: "☁️ TencentCloud", type: select, proxies: [DIRECT] }
  - { name: "☁️ HiNet", type: select, proxies: [DIRECT] }
  - { name: "☁️ CloudCN", type: select, proxies: [DIRECT] }
  - { name: "☁️ CloudGlobal", type: select, proxies: [DIRECT] }
  - { name: "☁️ AmazonCloud", type: select, proxies: [DIRECT] }
  - { name: "☁️ AkamaiCloud", type: select, proxies: [DIRECT] }
  - { name: "☁️ Linux", type: select, proxies: [DIRECT] }
  - { name: "☁️ Atomdata", type: select, proxies: [DIRECT] }
  - { name: "☁️ STUN", type: select, proxies: [DIRECT] }
  - { name: "☁️ WeType", type: select, proxies: [DIRECT] }
  - { name: "🐟 漏网之鱼", type: select, proxies: [DIRECT, "♻️ 手动切换"] }
rule-providers:
  Google:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Google.yaml"
    path: ./ruleset/Google.yaml
    interval: 86400
  GitHub:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/GitHub.yaml"
    path: ./ruleset/GitHub.yaml
    interval: 86400
  Global:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Global.yaml"
    path: ./ruleset/Global.yaml
    interval: 86400
  Telegram:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Telegram.yaml"
    path: ./ruleset/Telegram.yaml
    interval: 86400
  PotatoChat:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/PotatoChat.yaml"
    path: ./ruleset/PotatoChat.yaml
    interval: 86400
  KakaoTalk:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/KakaoTalk.yaml"
    path: ./ruleset/KakaoTalk.yaml
    interval: 86400
  Line:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Line.yaml"
    path: ./ruleset/Line.yaml
    interval: 86400
  Twitter:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Twitter.yaml"
    path: ./ruleset/Twitter.yaml
    interval: 86400
  Facebook:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Facebook.yaml"
    path: ./ruleset/Facebook.yaml
    interval: 86400
  Wikipedia:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Wikipedia.yaml"
    path: ./ruleset/Wikipedia.yaml
    interval: 86400
  Discord:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Discord.yaml"
    path: ./ruleset/Discord.yaml
    interval: 86400
  PayPal:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/PayPal.yaml"
    path: ./ruleset/PayPal.yaml
    interval: 86400
  Amazon:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Amazon.yaml"
    path: ./ruleset/Amazon.yaml
    interval: 86400
  Instagram:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Instagram.yaml"
    path: ./ruleset/Instagram.yaml
    interval: 86400
  Whatsapp:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Whatsapp.yaml"
    path: ./ruleset/Whatsapp.yaml
    interval: 86400
  Adobe:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Adobe.yaml"
    path: ./ruleset/Adobe.yaml
    interval: 86400
  AmazonPrimeVideo:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/AmazonPrimeVideo.yaml"
    path: ./ruleset/AmazonPrimeVideo.yaml
    interval: 86400
  Americasvoice:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Americasvoice.yaml"
    path: ./ruleset/Americasvoice.yaml
    interval: 86400
  BoXun:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/BoXun.yaml"
    path: ./ruleset/BoXun.yaml
    interval: 86400
  CBS:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/CBS.yaml"
    path: ./ruleset/CBS.yaml
    interval: 86400
  CNN:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/CNN.yaml"
    path: ./ruleset/CNN.yaml
    interval: 86400
  CableTV:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/CableTV.yaml"
    path: ./ruleset/CableTV.yaml
    interval: 86400
  LineTV:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/LineTV.yaml"
    path: ./ruleset/LineTV.yaml
    interval: 86400
  SoundCloud:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/SoundCloud.yaml"
    path: ./ruleset/SoundCloud.yaml
    interval: 86400
  Vimeo:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Vimeo.yaml"
    path: ./ruleset/Vimeo.yaml
    interval: 86400
  AOL:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/AOL.yaml"
    path: ./ruleset/AOL.yaml
    interval: 86400
  Akamai:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Akamai.yaml"
    path: ./ruleset/Akamai.yaml
    interval: 86400
  Buypass:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Buypass.yaml"
    path: ./ruleset/Buypass.yaml
    interval: 86400
  Duckduckgo:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Duckduckgo.yaml"
    path: ./ruleset/Duckduckgo.yaml
    interval: 86400
  GitBook:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/GitBook.yaml"
    path: ./ruleset/GitBook.yaml
    interval: 86400
  GitLab:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/GitLab.yaml"
    path: ./ruleset/GitLab.yaml
    interval: 86400
  Oracle:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Oracle.yaml"
    path: ./ruleset/Oracle.yaml
    interval: 86400
  Opera:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Opera.yaml"
    path: ./ruleset/Opera.yaml
    interval: 86400
  Pinterest:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Pinterest.yaml"
    path: ./ruleset/Pinterest.yaml
    interval: 86400
  Pixiv:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Pixiv.yaml"
    path: ./ruleset/Pixiv.yaml
    interval: 86400
  Reddit:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Reddit.yaml"
    path: ./ruleset/Reddit.yaml
    interval: 86400
  Shopee:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Shopee.yaml"
    path: ./ruleset/Shopee.yaml
    interval: 86400
  Shopify:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Shopify.yaml"
    path: ./ruleset/Shopify.yaml
    interval: 86400
  Snap:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Snap.yaml"
    path: ./ruleset/Snap.yaml
    interval: 86400
  Tumblr:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Tumblr.yaml"
    path: ./ruleset/Tumblr.yaml
    interval: 86400
  Twitch:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Twitch.yaml"
    path: ./ruleset/Twitch.yaml
    interval: 86400
  WIX:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/WIX.yaml"
    path: ./ruleset/WIX.yaml
    interval: 86400
  Zendesk:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Zendesk.yaml"
    path: ./ruleset/Zendesk.yaml
    interval: 86400
  eBay:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/eBay.yaml"
    path: ./ruleset/eBay.yaml
    interval: 86400
  MOMOShop:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/MOMOShop.yaml"
    path: ./ruleset/MOMOShop.yaml
    interval: 86400
  Binance:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Binance.yaml"
    path: ./ruleset/Binance.yaml
    interval: 86400
  DigitalOcean:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/DigitalOcean.yaml"
    path: ./ruleset/DigitalOcean.yaml
    interval: 86400
  OpenAI:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/OpenAI.yaml"
    path: ./ruleset/OpenAI.yaml
    interval: 86400
  6park:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/6park.yaml"
    path: ./ruleset/6park.yaml
    interval: 86400
  Gemini:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GLOB/Gemini.yaml"
    path: ./ruleset/Gemini.yaml
    interval: 86400
  AppleMusic:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/AppleMusic.yaml"
    path: ./ruleset/AppleMusic.yaml
    interval: 86400
  AppleTV:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/AppleTV.yaml"
    path: ./ruleset/AppleTV.yaml
    interval: 86400
  GlobalMedia:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/GlobalMedia.yaml"
    path: ./ruleset/GlobalMedia.yaml
    interval: 86400
  Netflix:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Netflix.yaml"
    path: ./ruleset/Netflix.yaml
    interval: 86400
  TikTok:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/TikTok.yaml"
    path: ./ruleset/TikTok.yaml
    interval: 86400
  Disney:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Disney.yaml"
    path: ./ruleset/Disney.yaml
    interval: 86400
  Spotify:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Spotify.yaml"
    path: ./ruleset/Spotify.yaml
    interval: 86400
  Niconico:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Niconico.yaml"
    path: ./ruleset/Niconico.yaml
    interval: 86400
  BBC:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/BBC.yaml"
    path: ./ruleset/BBC.yaml
    interval: 86400
  AsianMedia:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/AsianMedia.yaml"
    path: ./ruleset/AsianMedia.yaml
    interval: 86400
  Bahamut:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Bahamut.yaml"
    path: ./ruleset/Bahamut.yaml
    interval: 86400
  Hulu:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Hulu.yaml"
    path: ./ruleset/Hulu.yaml
    interval: 86400
  PandoraTV:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/PandoraTV.yaml"
    path: ./ruleset/PandoraTV.yaml
    interval: 86400
  TVB:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/TVB.yaml"
    path: ./ruleset/TVB.yaml
    interval: 86400
  HBOHK:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/HBOHK.yaml"
    path: ./ruleset/HBOHK.yaml
    interval: 86400
  HBOUSA:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/HBOUSA.yaml"
    path: ./ruleset/HBOUSA.yaml
    interval: 86400
  HuluJP:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/HuluJP.yaml"
    path: ./ruleset/HuluJP.yaml
    interval: 86400
  HuluUSA:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/HuluUSA.yaml"
    path: ./ruleset/HuluUSA.yaml
    interval: 86400
  FOX NOW:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/FOX NOW.yaml"
    path: ./ruleset/FOX NOW.yaml
    interval: 86400
  FOXPlus:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/FOXPlus.yaml"
    path: ./ruleset/FOXPlus.yaml
    interval: 86400
  KKTV:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/KKTV.yaml"
    path: ./ruleset/KKTV.yaml
    interval: 86400
  NaverTV:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/NaverTV.yaml"
    path: ./ruleset/NaverTV.yaml
    interval: 86400
  NowE:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/NowE.yaml"
    path: ./ruleset/NowE.yaml
    interval: 86400
  ParamountPlus:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/ParamountPlus.yaml"
    path: ./ruleset/ParamountPlus.yaml
    interval: 86400
  PrimeVideo:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/PrimeVideo.yaml"
    path: ./ruleset/PrimeVideo.yaml
    interval: 86400
  TVer:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/TVer.yaml"
    path: ./ruleset/TVer.yaml
    interval: 86400
  myTVSUPER:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/myTVSUPER.yaml"
    path: ./ruleset/myTVSUPER.yaml
    interval: 86400
  HBOAsia:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/HBOAsia.yaml"
    path: ./ruleset/HBOAsia.yaml
    interval: 86400
  BiliBiliIntl:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/BiliBiliIntl.yaml"
    path: ./ruleset/BiliBiliIntl.yaml
    interval: 86400
  DiscoveryPlus:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/DiscoveryPlus.yaml"
    path: ./ruleset/DiscoveryPlus.yaml
    interval: 86400
  Overcast:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Overcast.yaml"
    path: ./ruleset/Overcast.yaml
    interval: 86400
  Peacock:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Peacock.yaml"
    path: ./ruleset/Peacock.yaml
    interval: 86400
  Emby:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Emby.yaml"
    path: ./ruleset/Emby.yaml
    interval: 86400
  Cake:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Cake.yaml"
    path: ./ruleset/Cake.yaml
    interval: 86400
  BritboxUK:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/BritboxUK.yaml"
    path: ./ruleset/BritboxUK.yaml
    interval: 86400
  HKOpenTV:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/HKOpenTV.yaml"
    path: ./ruleset/HKOpenTV.yaml
    interval: 86400
  Abema:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Abema.yaml"
    path: ./ruleset/Abema.yaml
    interval: 86400
  Acplay:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/Acplay.yaml"
    path: ./ruleset/Acplay.yaml
    interval: 86400
  UKMedia:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/UKMedia.yaml"
    path: ./ruleset/UKMedia.yaml
    interval: 86400
  USMedia:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/GOLB MED/USMedia.yaml"
    path: ./ruleset/USMedia.yaml
    interval: 86400
  Lan:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/Lan.yaml"
    path: ./ruleset/Lan.yaml
    interval: 86400
  PrivateTracker:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/PrivateTracker.yaml"
    path: ./ruleset/PrivateTracker.yaml
    interval: 86400
  Developer:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/Developer.yaml"
    path: ./ruleset/Developer.yaml
    interval: 86400
  Scholar:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/Scholar.yaml"
    path: ./ruleset/Scholar.yaml
    interval: 86400
  Download:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/Download.yaml"
    path: ./ruleset/Download.yaml
    interval: 86400
  AdGuardS DNS Filter Direct:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/AdGuardS DNS Filter Direct.yaml"
    path: ./ruleset/AdGuardS DNS Filter Direct.yaml
    interval: 86400
  DNS:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/DNS.yaml"
    path: ./ruleset/DNS.yaml
    interval: 86400
  NTPService:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/NTPService.yaml"
    path: ./ruleset/NTPService.yaml
    interval: 86400
  360Cloud:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/360Cloud.yaml"
    path: ./ruleset/360Cloud.yaml
    interval: 86400
  BaiduCloud:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/BaiduCloud.yaml"
    path: ./ruleset/BaiduCloud.yaml
    interval: 86400
  HuaweiCloud:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/HuaweiCloud.yaml"
    path: ./ruleset/HuaweiCloud.yaml
    interval: 86400
  JingDongCloud:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/JingDongCloud.yaml"
    path: ./ruleset/JingDongCloud.yaml
    interval: 86400
  KingsoftCloud:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/KingsoftCloud.yaml"
    path: ./ruleset/KingsoftCloud.yaml
    interval: 86400
  NeteaseCloud:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/NeteaseCloud.yaml"
    path: ./ruleset/NeteaseCloud.yaml
    interval: 86400
  TencentCloud:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/TencentCloud.yaml"
    path: ./ruleset/TencentCloud.yaml
    interval: 86400
  HiNet:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/HiNet.yaml"
    path: ./ruleset/HiNet.yaml
    interval: 86400
  CloudCN:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/CloudCN.yaml"
    path: ./ruleset/CloudCN.yaml
    interval: 86400
  CloudGlobal:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/CloudGlobal.yaml"
    path: ./ruleset/CloudGlobal.yaml
    interval: 86400
  AmazonCloud:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/AmazonCloud.yaml"
    path: ./ruleset/AmazonCloud.yaml
    interval: 86400
  AkamaiCloud:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/AkamaiCloud.yaml"
    path: ./ruleset/AkamaiCloud.yaml
    interval: 86400
  Linux:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/Linux.yaml"
    path: ./ruleset/Linux.yaml
    interval: 86400
  Atomdata:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/Atomdata.yaml"
    path: ./ruleset/Atomdata.yaml
    interval: 86400
  STUN:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/STUN.yaml"
    path: ./ruleset/STUN.yaml
    interval: 86400
  WeType:
    type: http
    behavior: classical
    url: "https://raw.githubusercontent.com/Ekko1048/ClashRuleDeployer/master/rules/Other/WeType.yaml"
    path: ./ruleset/WeType.yaml
    interval: 86400
rules:
  - RULE-SET,Google,🌏 Google
  - RULE-SET,GitHub,🌏 GitHub
  - RULE-SET,Global,🌏 Global
  - RULE-SET,Telegram,🌏 Telegram
  - RULE-SET,PotatoChat,🌏 PotatoChat
  - RULE-SET,KakaoTalk,🌏 KakaoTalk
  - RULE-SET,Line,🌏 Line
  - RULE-SET,Twitter,🌏 Twitter
  - RULE-SET,Facebook,🌏 Facebook
  - RULE-SET,Wikipedia,🌏 Wikipedia
  - RULE-SET,Discord,🌏 Discord
  - RULE-SET,PayPal,🌏 PayPal
  - RULE-SET,Amazon,🌏 Amazon
  - RULE-SET,Instagram,🌏 Instagram
  - RULE-SET,Whatsapp,🌏 Whatsapp
  - RULE-SET,Adobe,🌏 Adobe
  - RULE-SET,AmazonPrimeVideo,🌏 AmazonPrimeVideo
  - RULE-SET,Americasvoice,🌏 Americasvoice
  - RULE-SET,BoXun,🌏 BoXun
  - RULE-SET,CBS,🌏 CBS
  - RULE-SET,CNN,🌏 CNN
  - RULE-SET,CableTV,🌏 CableTV
  - RULE-SET,LineTV,🌏 LineTV
  - RULE-SET,SoundCloud,🌏 SoundCloud
  - RULE-SET,Vimeo,🌏 Vimeo
  - RULE-SET,AOL,🌏 AOL
  - RULE-SET,Akamai,🌏 Akamai
  - RULE-SET,Buypass,🌏 Buypass
  - RULE-SET,Duckduckgo,🌏 Duckduckgo
  - RULE-SET,GitBook,🌏 GitBook
  - RULE-SET,GitLab,🌏 GitLab
  - RULE-SET,Oracle,🌏 Oracle
  - RULE-SET,Opera,🌏 Opera
  - RULE-SET,Pinterest,🌏 Pinterest
  - RULE-SET,Pixiv,🌏 Pixiv
  - RULE-SET,Reddit,🌏 Reddit
  - RULE-SET,Shopee,🌏 Shopee
  - RULE-SET,Shopify,🌏 Shopify
  - RULE-SET,Snap,🌏 Snap
  - RULE-SET,Tumblr,🌏 Tumblr
  - RULE-SET,Twitch,🌏 Twitch
  - RULE-SET,WIX,🌏 WIX
  - RULE-SET,Zendesk,🌏 Zendesk
  - RULE-SET,eBay,🌏 eBay
  - RULE-SET,MOMOShop,🌏 MOMOShop
  - RULE-SET,Binance,🌏 Binance
  - RULE-SET,DigitalOcean,🌏 DigitalOcean
  - RULE-SET,OpenAI,🌏 OpenAI
  - RULE-SET,6park,🌏 6park
  - RULE-SET,Gemini,🌏 Gemini
  - RULE-SET,AppleMusic,🎬 AppleMusic
  - RULE-SET,AppleTV,🎬 AppleTV
  - RULE-SET,GlobalMedia,🎬 GlobalMedia
  - RULE-SET,Netflix,🎬 Netflix
  - RULE-SET,TikTok,🎬 TikTok
  - RULE-SET,Disney,🎬 Disney
  - RULE-SET,Spotify,🎬 Spotify
  - RULE-SET,Niconico,🎬 Niconico
  - RULE-SET,BBC,🎬 BBC
  - RULE-SET,AsianMedia,🎬 AsianMedia
  - RULE-SET,Bahamut,🎬 Bahamut
  - RULE-SET,Hulu,🎬 Hulu
  - RULE-SET,PandoraTV,🎬 PandoraTV
  - RULE-SET,TVB,🎬 TVB
  - RULE-SET,HBOHK,🎬 HBOHK
  - RULE-SET,HBOUSA,🎬 HBOUSA
  - RULE-SET,HuluJP,🎬 HuluJP
  - RULE-SET,HuluUSA,🎬 HuluUSA
  - RULE-SET,FOX NOW,🎬 FOX NOW
  - RULE-SET,FOXPlus,🎬 FOXPlus
  - RULE-SET,KKTV,🎬 KKTV
  - RULE-SET,NaverTV,🎬 NaverTV
  - RULE-SET,NowE,🎬 NowE
  - RULE-SET,ParamountPlus,🎬 ParamountPlus
  - RULE-SET,PrimeVideo,🎬 PrimeVideo
  - RULE-SET,TVer,🎬 TVer
  - RULE-SET,myTVSUPER,🎬 myTVSUPER
  - RULE-SET,HBOAsia,🎬 HBOAsia
  - RULE-SET,BiliBiliIntl,🎬 BiliBiliIntl
  - RULE-SET,DiscoveryPlus,🎬 DiscoveryPlus
  - RULE-SET,Overcast,🎬 Overcast
  - RULE-SET,Peacock,🎬 Peacock
  - RULE-SET,Emby,🎬 Emby
  - RULE-SET,Cake,🎬 Cake
  - RULE-SET,BritboxUK,🎬 BritboxUK
  - RULE-SET,HKOpenTV,🎬 HKOpenTV
  - RULE-SET,Abema,🎬 Abema
  - RULE-SET,Acplay,🎬 Acplay
  - RULE-SET,UKMedia,🎬 UKMedia
  - RULE-SET,USMedia,🎬 USMedia
  - RULE-SET,Lan,☁️ Lan
  - RULE-SET,PrivateTracker,☁️ PrivateTracker
  - RULE-SET,Developer,☁️ Developer
  - RULE-SET,Scholar,☁️ Scholar
  - RULE-SET,Download,☁️ Download
  - RULE-SET,AdGuardS DNS Filter Direct,☁️ AdGuardS DNS Filter Direct
  - RULE-SET,DNS,☁️ DNS
  - RULE-SET,NTPService,☁️ NTPService
  - RULE-SET,360Cloud,☁️ 360Cloud
  - RULE-SET,BaiduCloud,☁️ BaiduCloud
  - RULE-SET,HuaweiCloud,☁️ HuaweiCloud
  - RULE-SET,JingDongCloud,☁️ JingDongCloud
  - RULE-SET,KingsoftCloud,☁️ KingsoftCloud
  - RULE-SET,NeteaseCloud,☁️ NeteaseCloud
  - RULE-SET,TencentCloud,☁️ TencentCloud
  - RULE-SET,HiNet,☁️ HiNet
  - RULE-SET,CloudCN,☁️ CloudCN
  - RULE-SET,CloudGlobal,☁️ CloudGlobal
  - RULE-SET,AmazonCloud,☁️ AmazonCloud
  - RULE-SET,AkamaiCloud,☁️ AkamaiCloud
  - RULE-SET,Linux,☁️ Linux
  - RULE-SET,Atomdata,☁️ Atomdata
  - RULE-SET,STUN,☁️ STUN
  - RULE-SET,WeType,☁️ WeType
  - MATCH,🐟 漏网之鱼
```



