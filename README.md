# WordPressオリジナルテーマ（WordPress Original Theme）

![Screenshot](./wp/wp-content/themes/original-theme/screenshot.png)

## Overview
企業サイトを想定したWordPressオリジナルテーマです。  
デザインからWordPress組み込みまで一貫して実装しています。
保守性・再利用性を重視したBEM設計とSCSSレイヤー設計で構築しています。

## Website
**URL**
- https://dolzap.conohawing.com/lp/

## Features
- WordPressオリジナルテーマ
- カスタム投稿タイプ（制作事例）
- カスタムフィールド
- お問い合わせフォーム
- レスポンシブ対応
- カスタムページ（サンクス・404）
- BEM・FLOCSS（CSS設計）
- SCSSレイヤー設計
- tsParticles（FV背景）
- Swiper（制作事例）

## Plugins
- Advanced Custom Fields
- Contact Form 7
- SEO SIMPLE PACK
- Simple Page Ordering
- WPS Hide Login

## Stack
### Frontend
![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)
![SCSS](https://img.shields.io/badge/SCSS-CC6699?logo=sass&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=black)

### Backend
![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
![WordPress](https://img.shields.io/badge/WordPress-21759B?logo=wordpress&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white)

### Infrastructure
![Apache](https://img.shields.io/badge/Apache-D22128?logo=apache&logoColor=white)

### Others
![Git](https://img.shields.io/badge/Git-F05032?logo=git&logoColor=white)
![GitHub](https://img.shields.io/badge/GitHub-181717?logo=github&logoColor=white)

## Directory
```bash
original-theme/
├── assets/
│   ├── css/               # CSS
│   ├── js/                # JavaScript
│   ├── img/               # Images
│   ├── font/              # Fonts
│   └── vendor/            # Libraries
├── src/
│   └── scss/
│       ├── foundation/    # Foundation
│       ├── layout/        # Layout
│       ├── component/     # Components
│       ├── project/       # Project
│       └── style.scss     # Entry Point
├── inc/
│   ├── setup.php          # Theme Setup
│   ├── enqueue.php        # Asset Loader
│   └── common.php         # Common Functions
├── template-parts/
│   ├── layout/            # Layout Parts
│   └── section/           # Section Parts
├── index.php              # Fallback
├── front-page.php         # Front Page
├── page.php               # Default Page
├── page-thanks.php        # Thanks Page
├── 404.php                # 404 Page
├── header.php             # Header
├── footer.php             # Footer
├── functions.php          # Theme Functions
└── style.css              # Theme Information
```

## License
MIT
