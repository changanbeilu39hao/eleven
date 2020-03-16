<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>注册确认链接</title>
</head>    
<body>
    <h1>感谢你在 Eleven 进行注册</h1>
    <p>
        请点击右方的按钮完成注册：
        <a href="{{ route('confirm_email', $user->activation_token) }}" class="btn btn-info">
        完成注册
        </a>
    </p>

    <p>
        如果这不是你本人的操作，请忽略此邮件。
    </p>
</body>
</html>