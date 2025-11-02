# 🟣 Tên dự án Laravel

> Mẫu README tiếng Việt — sạch, đẹp, dễ dùng, sẵn ảnh minh hoạ. Bạn chỉ cần thay **Tên dự án**, **mô tả**, và cập nhật ảnh trong thư mục `docs/screenshots/`.

<p align="center">
  <img src="docs/screenshots/cover.png" alt="Cover" width="800" />
</p>

<p align="center">
  <a href="#yeu-cau">Yêu cầu</a> •
  <a href="#bat-dau-nhanh">Bắt đầu nhanh</a> •
  <a href="#cau-hinh-env">Cấu hình .env</a> •
  <a href="#khoi-chay">Khởi chạy</a> •
  <a href="#lenh-thuong-dung">Lệnh thường dùng</a> •
  <a href="#anh-minh-hoa">Ảnh minh hoạ</a> •
  <a href="#deploy">Deploy</a> •
  <a href="#dong-gop">Đóng góp</a> •
  <a href="#giay-phep">Giấy phép</a>
</p>

---

## 🔎 Giới thiệu

Mô tả ngắn gọn về dự án: **dự án làm gì**, **giải quyết vấn đề nào**, **tính năng chính**.

* ✨ Tính năng 1
* ⚡ Tính năng 2
* 🔐 Tính năng 3

---

## 🧰 <a id="yeu-cau"></a>Yêu cầu

* PHP >= 8.1
* Composer >= 2.x
* MySQL/MariaDB hoặc PostgreSQL
* Node.js >= 18 (nếu có frontend build bằng Vite/NPM)
* Git

> Kiểm tra nhanh: `php -v`, `composer -V`, `node -v`, `npm -v`.

---

## 🚀 <a id="bat-dau-nhanh"></a>Bắt đầu nhanh

```bash
# 1) Clone mã nguồn
git clone https://github.com/ten_user/project.git
cd project

# 2) Cài đặt PHP dependencies
composer install

# 3) Sao chép file .env mẫu
dùng lệnh dưới tạo file .env để cấu hình
touch .env
sau đó sao chép các nội dung file .env ở phần cấu hình .ENV ở phần dưới vào
(Nếu có tồn tại file .env.example thì chạy lệnh cp .env.example .env )

# 4) Tạo APP_KEY
php artisan key:generate

# 5) Cấu hình database trong .env rồi chạy migrate (tùy chọn seed)
php artisan migrate --seed

# 6) (Nếu có frontend) Cài & build assets
npm install
npm run dev      # hoặc: npm run build

# 7) Chạy server dev
php artisan serve
```

> Mặc định `php artisan serve` chạy tại `http://127.0.0.1:8000`.

---

## ⚙️ <a id="cau-hinh-env"></a>Cấu hình `.env`

Ví dụ các biến quan trọng (hãy chỉnh theo môi trường của bạn):

```dotenv
APP_NAME="TenDuAn"
APP_ENV=local
APP_KEY=base64:... # sẽ tự sinh sau khi chạy key:generate
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ten_database
DB_USERNAME=root
DB_PASSWORD=secret

# Mail (nếu dùng)
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply@domain.test"
MAIL_FROM_NAME="TenDuAn"
```

> **Lưu ý:** Không commit file `.env` lên GitHub. `.env` đã nằm trong `.gitignore` của Laravel mặc định.

---

## ▶️ <a id="khoi-chay"></a>Khởi chạy dự án

### Cách 1: PHP built-in server

```bash
php artisan serve
```

### Cách 2: Valet/Docker (khuyến nghị cho team)

* **Valet:** trỏ thư mục dự án đến domain dev: `valet link ten-du-an`
* **Docker:** sử dụng `sail` hoặc `docker-compose.yml` (thêm hướng dẫn nếu có)

---

## 🧭 <a id="lenh-thuong-dung"></a>Lệnh thường dùng

```bash
# Migrate & seed
php artisan migrate         # tạo bảng
php artisan migrate:refresh # làm lại từ đầu
php artisan db:seed         # seed dữ liệu

# Cache & config
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Tạo key (nếu cần)
php artisan key:generate

# Storage link
php artisan storage:link
```

---

## 🖼️ <a id="anh-minh-hoa"></a>Ảnh minh hoạ (Screenshots)

Thêm ảnh vào thư mục `docs/screenshots/` rồi tham chiếu như dưới đây. Gợi ý các ảnh nên có:

<p align="center">
  <img src="docs/screenshots/home.png" alt="Trang chủ" width="800" />
  <br/><em>Hình 1: Trang chủ</em>
</p>

<p align="center">
  <img src="docs/screenshots/login.png" alt="Đăng nhập" width="600" />
  <br/><em>Hình 2: Màn hình đăng nhập</em>
</p>

> Mẹo: Chụp ảnh bằng độ phân giải 2x, đặt tên file-khong-dau, và nén ảnh trước khi commit.

---

## 🏗️ Cấu trúc thư mục (rút gọn)

```
project/
├─ app/
├─ bootstrap/
├─ config/
├─ database/
│  ├─ factories/
│  └─ seeders/
├─ public/
├─ resources/
│  ├─ js/
│  └─ views/
├─ routes/
├─ storage/
├─ tests/
└─ docs/
   └─ screenshots/
```

---

## 🚢 <a id="deploy"></a>Deploy

* Thiết lập biến môi trường `.env` theo server
* Chạy `php artisan migrate --force`
* Build assets: `npm run build`
* Tối ưu: `php artisan config:cache && php artisan route:cache && php artisan view:cache`
* Supervisor/Horizon/Queue (nếu có): cấu hình service chạy nền

> Tham khảo thêm: [Laravel Deploy Docs](https://laravel.com/docs/deployment)

---

## 🤝 <a id="dong-gop"></a>Đóng góp

1. Fork repo
2. Tạo nhánh tính năng: `git checkout -b feature/ten-tinh-nang`
3. Commit: `git commit -m "feat: mo ta ngan"`
4. Push: `git push origin feature/ten-tinh-nang`
5. Mở Pull Request

> Quy ước commit (khuyến nghị): `feat`, `fix`, `chore`, `docs`, `refactor`, `test`.

---

## 📜 <a id="giay-phep"></a>Giấy phép

Phát hành theo giấy phép **MIT** (hoặc giấy phép bạn chọn). Xem tệp `LICENSE`.

---

### ✅ Checklist trước khi up GitHub

* [ ] Cập nhật **tên dự án** và **mô tả**
* [ ] Hoàn thiện ảnh trong `docs/screenshots/`
* [ ] Kiểm tra `.gitignore` (đảm bảo không commit `.env`, `vendor/`, `node_modules/`)
* [ ] Chạy `composer install` & `npm ci` (nếu dùng) từ máy mới để chắc chắn hướng dẫn chính xác
* [ ] Thêm badge CI/CD (tuỳ chọn)

---

### 🧪 Badge mẫu (tuỳ chọn)

```md
![PHP](https://img.shields.io/badge/PHP-%5E8.1-blue)
![Laravel](https://img.shields.io/badge/Laravel-10-red)
![License: MIT](https://img.shields.io/badge/License-MIT-green)
```

---

> **Gợi ý**: Nếu muốn README song ngữ (VI/EN), có thể tạo `README.en.md` và liên kết qua lại ở đầu file.

