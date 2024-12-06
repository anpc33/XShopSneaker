## AdadisXShop

## Tổng quan

 > Dự án này là một nền tảng thương mại điện tử phát triển bằng PHP. Ứng dụng cho phép người dùng duyệt, mua và quản lý sản phẩm một cách hiệu quả. Ngoài ra, người quản trị có các công cụ để quản lý sản phẩm, đơn hàng, khách hàng và các chương trình khuyến mãi. Mục tiêu là mang đến trải nghiệm mua sắm thân thiện và mạnh mẽ.

## Tính năng

Dành cho khách hàng:

- Danh mục sản phẩm: Duyệt và tìm kiếm sản phẩm theo danh mục hoặc từ khóa.

- Giỏ hàng: Thêm, xóa, và chỉnh sửa sản phẩm trước khi thanh toán.

- Quy trình thanh toán: Thanh toán dễ dàng và bảo mật.

- Quản lý hồ sơ: Xem và cập nhật thông tin cá nhân.

- Theo dõi đơn hàng: Kiểm tra tình trạng đơn hàng đã đặt.
- ...

## Dành cho Admin:

- Quản lý sản phẩm: Thêm, sửa, xóa và quản lý tồn kho.

- Quản lý đơn hàng: Xem và cập nhật tình trạng đơn hàng.

- Quản lý khách hàng: Quản lý thông tin và lịch sử mua hàng.

- Khuyến mãi và giảm giá: Tạo và quản lý các mã giảm giá.

- Phân tích và báo cáo: Xem dữ liệu thống kê như doanh thu, số lượng đơn hàng, và sản phẩm bán chạy.
- ...

Công nghệ sử dụng
```
Backend: PHP (Core PHP hoặc kiến trúc MVC)

Frontend: HTML, CSS, JavaScript (Bootstrap cho giao diện responsive)

Cơ sở dữ liệu: MySQL

Dịch vụ Email: PHPMailer (ví dụ: khôi phục mật khẩu)

Biểu đồ: Thư viện những biểu đồ như Chart.js

Lưu trữ: XAMPP hoặc Laragon cho phát triển cục bộ
```
## Cài đặt và thiết lập

Yêu cầu:

- PHP 7.4 trở lên

- MySQL 5.7 trở lên

- Composer (tùy chọn, nếu quản lý thư viện)

- XAMPP, Laragon hoặc server local tương thích

Các bước:

- Clone repo: git clone https://github.com/anpc33/adadisXshop.git

>Thiết lập cơ sở dữ liệu:

- Import file database.sql trong thư mục /db vào MySQL.

- Cập nhật thông tin kết nối cơ sở dữ liệu trong file cấu hình (vd: config/database.php).

>Khởi động server local:

- Đặt thư mục dự án trong htdocs (XAMPP) hoặc www (Laragon).

- Mở server và truy cập http://localhost/adadisXshop.

## Cấu hình PHPMailer:

- Cập nhật thông tin SMTP trong file cấu hình email.

## Hướng dẫn sử dụng

>Khách hàng:

- Đăng ký tài khoản mới hoặc đăng nhập.

- Duyệt sản phẩm và thêm vào giỏ hàng.

- Tiến hành thanh toán.

- Xem lại lịch sử đơn hàng và chỉnh sửa hồ sơ.

>Admin:

- Đăng nhập với tài khoản admin.

- Quản lý sản phẩm, đơn hàng, khách hàng và chương trình khuyến mãi.

- Xem thông kê và báo cáo.

Cấu trúc thư mục
```
/adadisXshop
|-- /config           # Các file cấu hình (cơ sở dữ liệu, email, ...)
|-- /controllers      # Xử lý logic ứng dụng
|-- /models           # Tương tác cơ sở dữ liệu
|-- /views            # Giao diện frontend
|-- /public           # Tài nguyên công khai (CSS, JS, hình ảnh)
|-- /db               # Các file cơ sở dữ liệu
|-- /vendor           # Thư viện phụ thuộc (nếu sử dụng Composer)
|-- index.php         # Điểm bắt đầu của ứng dụng
|-- README.md         # Tài liệu dự án
```
## Dự kiến nâng cao trong tương lai

- Tích hợp các cổng thanh toán.

- Bổ sung tìm kiếm nâng cao với bộ lọc.

- Hỗ trợ đa ngôn ngữ và đa tiền tệ.

- Phát triển phiên bản app di động.

- Ứng dụng machine learning để gợi ý cá nhân hóa.

## Bản quyền

>Dự án này được cấp phép theo MIT License. Xem chi tiết trong file LICENSE.

## Nhóm phát triển

- [Nhóm 5] - Developer

- [Nhóm 5] - Designer

Hãy đóng góp cho dự án bằng cách gửi pull request hoặc báo lỗi.
