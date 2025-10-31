    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Kích hoạt tài khoản</title>
    </head>

    <body>
        <h1>Xin chào, {{ $user->name }}</h1>
        <p>Cảm ơn đã đăng ký tại website của chúng tôi. Để kích hoạt tài khoản của bạn, xin hay nhấp vào liên kết dưới
            đây.
        </p>
        <a href="{{ url('/activate/' . $token) }}" style="padding: 10px 5px; background-color: green; color: white">Kích
            hoạt tài khoản</a>
        <p>Trân trọng</p>
        <p>Đội ngũ hỗ trợ khách hàng.</p>
    </body>

    </html>
