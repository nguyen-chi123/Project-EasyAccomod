<!DOCTYPE html>
<html>

<head>
    <title>Đăng ký</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta content="INDEX,FOLLOW" name="robots">
    <meta name="keywords" content="Queer Signup form a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <link href="{{asset('asset/css/style.css')}}" rel='stylesheet' type='text/css' />
    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">
    <!--//webfonts-->

</head>

<body>

    <div class="w3_frm">
        <!---728x90--->
        <form action="" method="post">
            @csrf
            <h3>Đăng ký</h3>
            <div class="field-w3-agile-grid leftf">
                <input type="text" name="hoten" placeholder="Họ tên" required="" />
            </div>
            <div class="field-w3-agile-grid leftf">
                <input type="text" name="sodienthoai" placeholder="Số điện thoại" required="" />
            </div>
            <div class="field-w3-agile-grid leftf">
                <input type="text" name="email" placeholder="Email" required="" />
            </div>
            <!---728x90--->
            <div class="field-w3-agile-grid leftf">
                <input type="text" name="socmnd" placeholder="Số căn cước công dân" required="" />
            </div>
            <div class="field-w3-agile-grid leftf">
                <input type="text" name="diachi" placeholder="Địa chỉ thường chú" required="" />
            </div>
            <div class="w3l_gen">
                <h5>Đối tượng:</h5>
                <div class="w3_ml">
                    <!---728x90--->
                    <input type="radio" name="doituong" value="Người thuê trọ">
                    <label for="brand"><span></span>Người thuê trọ</label>
                </div>

                <div class="w3_fl">
                    <input type="radio" name="doituong" value="Chủ nhà trọ">
                    <label for="brand"><span></span>Chủ nhà trọ</label>
                </div>
            </div>
            <div class="field-w3-agile-grid leftf">
                <input type="text" name="tendangnhap" placeholder="Tên đăng nhập" required="" />
            </div>
            <div class="field-w3-agile-grid rightf">
                <input type="password" name="matkhau" placeholder="Mật khẩu" required="" />
            </div>
            <div class="field-w3-agile-grid rightf">
                <input type="password" name="nhaplaimatkhau" placeholder="Nhập lại mật khẩu" required="" />
            </div>
            <div class="field-w3-agile-grid rem">
                <input type="checkbox" value="">
                <label for="brand"><span></span>Tôi chấp nhận với các điều khoản và dịch vụ</label>
            </div>
            <div class="button-center">
                <input type="reset" value="Trở lại">
                <input type="submit" value="Đăng ký">
            </div>
        </form>


    </div>
</body>

</html>

