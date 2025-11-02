$(document).ready(function () {

    $('#register-form').on('submit', function (e) {
        e.preventDefault(); // luôn chặn gửi trước

        let name = $('input[name="name"]').val()?.trim() || '';
        let email = $('input[name="email"]').val()?.trim() || '';
        let password = $('input[name="password"]').val() || '';
        let confirmPassword = $('input[name="confirmPassword"]').val() || '';
        let checkbox1 = $('input[name="checkbox1"]').is(':checked');
        let checkbox2 = $('input[name="checkbox2"]').is(':checked');

        let errorMessage = '';

        if (name.length < 3) {
            errorMessage += 'Họ và tên phải có ít nhất 3 ký tự.<br>';
        }

        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailRegex.test(email)) {
            errorMessage += 'Email không hợp lệ.<br>';
        }

        if (password.length < 6) {
            errorMessage += 'Mật khẩu phải có ít nhất 6 ký tự.<br>';
        }

        if (password !== confirmPassword) {
            errorMessage += 'Mật khẩu xác nhận không khớp.<br>';
        }

        if (!checkbox1 || !checkbox2) {
            errorMessage += 'Bạn phải đồng ý các điều khoản để có thể tạo tài khoản.<br>';
        }

        // ✅ Nếu có lỗi thì hiện toastr.error
        if (errorMessage !== '') {
            toastr.error(errorMessage, 'Lỗi');
            e.preventDefault();
        }
    });
});
