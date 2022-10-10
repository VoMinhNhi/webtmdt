<?php
include_once(__DIR__  . '/../../dbconnect.php');
session_start();
//nhan bien
//yeu thichs
$yeuthich = null;
if (isset($_GET['yeuthich'])) {
    $yeuthich = $_GET['yeuthich'];
    $_SESSION['yeuthich'] = $yeuthich;
    // header('location: /website_tmdt/customer/favorite.php');
} else {
    $_SESSION['yeuthich'] = $yeuthich;
}
//gio hang
$giohang = null;
if (isset($_GET['giohang'])) {
    $giohang = $_GET['giohang'];
    $_SESSION['giohang'] = $giohang;
} else {
    $_SESSION['giohang'] = $giohang;
}
//them gio hang
$themgiohang = null;
if (isset($_GET['themgiohang'])) {
    $themgiohang = $_GET['themgiohang'];
    $_SESSION['themgiohang'] = $themgiohang;
} else {
    $_SESSION['$themgiohang'] = $themgiohang;
}
//sanpham
$masp = null;
if (isset($_GET['masp'])) {
    $masp = $_GET['masp'];
    $_SESSION['masp'] = $masp;
}
//math
$math = null;
if (isset($_GET['math'])) {
    $math = $_GET['math'];
    $_SESSION['math'] = $math;
}
//kiem tra trong cookie
if (isset($_SESSION['makh'])) {
    header('location: /website_tmdt/index.php');
}
//lay danh sach khach hang
$sqlKh = "select * from khachhang";
$resultKh = mysqli_query($conn, $sqlKh);
$listkh = [];
while ($row = mysqli_fetch_array($resultKh, MYSQLI_ASSOC)) {
    $listkh[] = array(
        'makh' => $row['makh'],
        'tenkh' => $row['tenkh'],
        'diachi' => $row['diachi'],
        'email' => $row['email'],
        'dienthoai' => $row['dienthoai'],
        'gioitinh' => $row['gioitinh'],
        'password' => $row['password'],
        'hinhanhkh' => $row['hinhanhkh']
    );
}

//login
if (isset($_POST['dangnhap'])) {
    $check = false;
    $getIdkh = null;
    $noidung = "sai tài khoản hoặc mật khẩu";
    $email = $_POST['email'];
    $password = $_POST['password'];
    foreach ($listkh as $khachhang) {
        if ($email == $khachhang['email'] && md5($password) == $khachhang['password']) {
            $check = true;
            $getIdkh = $khachhang['makh'];
            break;
        }
    }
    if ($check == true) {
        $_SESSION['makh'] = $getIdkh;
        if ($_SESSION['yeuthich'] == 'yeuthich') {
            unset($_SESSION['yeuthich']);
            unset($_SESSION['giohang']);
            unset($_SESSION['themgiohang']);
            //echo '<script type="text/javascript">alert("Dang nhap thành công !") </script>';
            header('location: /website_tmdt/customer/product_like.php');
        } else if ($_SESSION['giohang'] == 'giohang') {
            unset($_SESSION['yeuthich']);
            unset($_SESSION['giohang']);
            unset($_SESSION['themgiohang']);
            header('location: /website_tmdt/customer/giohang.php');
        } else if (isset($_SESSION['masp'])) {
            unset($_SESSION['yeuthich']);
            unset($_SESSION['giohang']);
            unset($_SESSION['themgiohang']);
            $masp_send = $_SESSION['masp'];
            $math_send = $_SESSION['math'];
            echo "<script>window.location='/website_TMDT/page_main/detail_product.php?masp=$masp_send&math=$math_send'</script>";
        } else if (($_SESSION['themgiohang'] == 'themgiohang')) {
            header('location: /website_tmdt/index.php');
        } else {
            header('location: /website_tmdt/index.php');
        }
    } else {
        echo $noidung;
    }
}
//register

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhâp - Đăng ký</title>
  <style>
  body {
    margin: 0;
    color: #6a6f8c;
    background: #c8c8c8;
    font: 600 16px/18px 'Open Sans', sans-serif;
  }

  *,
  :after,
  :before {
    box-sizing: border-box
  }

  .clearfix:after,
  .clearfix:before {
    content: '';
    display: table
  }

  .clearfix:after {
    clear: both;
    display: block
  }

  a {
    color: inherit;
    text-decoration: none
  }

  .login-wrap {
    margin-top: 34px;
    width: 100%;
    margin: auto;
    max-width: 525px;
    min-height: 670px;
    position: relative;
    background: url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;
    box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19);
  }

  .login-html {
    width: 100%;
    height: 100%;
    position: absolute;
    padding: 90px 70px 50px 70px;
    background: rgba(40, 57, 101, .9);
  }

  .login-html .sign-in-htm,
  .login-html .sign-up-htm {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    position: absolute;
    transform: rotateY(180deg);
    backface-visibility: hidden;
    transition: all .4s linear;
  }

  .login-html .sign-in,
  .login-html .sign-up,
  .login-form .group .check {
    display: none;
  }

  .login-html .tab,
  .login-form .group .label,
  .login-form .group .button {
    text-transform: uppercase;
  }

  .login-html .tab {
    font-size: 22px;
    margin-right: 15px;
    padding-bottom: 5px;
    margin: 0 15px 10px 0;
    display: inline-block;
    border-bottom: 2px solid transparent;
  }

  .login-html .sign-in:checked+.tab,
  .login-html .sign-up:checked+.tab {
    color: #fff;
    border-color: #1161ee;
  }

  .login-form {
    min-height: 345px;
    position: relative;
    perspective: 1000px;
    transform-style: preserve-3d;
  }

  .login-form .group {
    margin-bottom: 15px;
  }

  .login-form .group .label,
  .login-form .group .input,
  .login-form .group .button {
    width: 100%;
    color: #fff;
    display: block;
  }

  .login-form .group .input,
  .login-form .group .button {
    border: none;
    padding: 15px 20px;
    border-radius: 25px;
    background: rgba(255, 255, 255, .1);
  }

  .login-form .group input[data-type="password"] {
    text-security: circle;
    -webkit-text-security: circle;
  }

  .login-form .group .label {
    color: #aaa;
    font-size: 12px;
  }

  .login-form .group .button {
    background: #1161ee;
  }

  .login-form .group label .icon {
    width: 15px;
    height: 15px;
    border-radius: 2px;
    position: relative;
    display: inline-block;
    background: rgba(255, 255, 255, .1);
  }

  .login-form .group label .icon:before,
  .login-form .group label .icon:after {
    content: '';
    width: 10px;
    height: 2px;
    background: #fff;
    position: absolute;
    transition: all .2s ease-in-out 0s;
  }

  .login-form .group label .icon:before {
    left: 3px;
    width: 5px;
    bottom: 6px;
    transform: scale(0) rotate(0);
  }

  .login-form .group label .icon:after {
    top: 6px;
    right: 0;
    transform: scale(0) rotate(0);
  }

  .login-form .group .check:checked+label {
    color: #fff;
  }

  .login-form .group .check:checked+label .icon {
    background: #1161ee;
  }

  .login-form .group .check:checked+label .icon:before {
    transform: scale(1) rotate(45deg);
  }

  .login-form .group .check:checked+label .icon:after {
    transform: scale(1) rotate(-45deg);
  }

  .login-html .sign-in:checked+.tab+.sign-up+.tab+.login-form .sign-in-htm {
    transform: rotate(0);
  }

  .login-html .sign-up:checked+.tab+.login-form .sign-up-htm {
    transform: rotate(0);
  }

  .hr {
    height: 2px;
    margin: 60px 0 50px 0;
    background: rgba(255, 255, 255, .2);
  }

  .foot-lnk {
    text-align: center;
  }
  </style>
</head>

<body>
  <div class="login-wrap">
    <div class="login-html">
      <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
      <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
      <div class="login-form">
        <form action="" method="post">
          <div class="sign-in-htm">
            <div class="group">
              <label for="email" class="label">Email</label>
              <input name="email" id="email" type="email" class="input" placeholder="Email">
            </div>
            <div class="group">
              <label for="password" class="label">Password</label>
              <input name="password" id="password" type="password" class="input" data-type="password"
                placeholder="Password">
            </div>
            <div class="group">
              <input id="check" type="checkbox" class="check" checked>
              <label for="check"><span class="icon"></span> Keep me Signed in</label>
            </div>
            <div class="group">
              <input name="dangnhap" type="submit" class="button" value="Sign In">
            </div>
            <div class="hr"></div>
          </div>
        </form>
        <form action="" method="post">
          <div class="sign-up-htm">
            <div class="group">
              <label for="email" class="label">Email</label>
              <input name="email" id="email" type="email" class="input">
            </div>
            <div class="group">
              <label for="password" class="label">Password</label>
              <input name="password" id="password" type="password" class="input" data-type="password">
            </div>
            <div class="group">
              <label for="tenkh" class="label">Tên người dùng</label>
              <input name="tenkh" id="tenkh" type="text" class="input">
            </div>
            <div class="group">
              <label for="diachi" class="label">Địa chỉ</label>
              <input name="diachi" id="diachi" type="text" class="input">
            </div>
            <div class="group">
              <label for="dienthoai" class="label">Điện thoại</label>
              <input name="dienthoai" id="dienthoai" type="text" class="input">
            </div>
            <div class="group">
              <input name="dangky" type="submit" class="button" value="Sign Up">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <label for="tab-1">Already Member?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Script -->
  <script>

  </script>
</body>

</html>

<?php
include_once(__DIR__ . '/../../dbconnect.php');

if (isset($_POST['dangky'])) {
    // 1. Thu thập dữ liệu từ người dùng gửi đên
    $tenkh = $_POST['tenkh'];
    $email = $_POST['email'];
	$dienthoai = $_POST['dienthoai'];
	$diachi = $_POST['diachi'];
    $password = $_POST['password'];

    $errors = [];


    // Calidate Tên 
    // Rule1: Required
    if (empty($tenkh)) {
        $errors['tenkh'][] = [
            'rule' => 'required',
            'rule_value' => true,
            'value' => $tenkh,
            'msg' => 'Vui lòng nhập tên'
        ];
    }
    // Rule2: min 3 ký tự
    else if (strlen($tenkh) < 3) {
        $errors['tenkh'][] = [
            'rule' => 'min',
            'rule_value' => 3,
            'value' => $tenkh,
            'msg' => 'Vui lòng nhập tên khách hàng 3 kí tự'
        ];
    }
	foreach($listkh as $kh_check){
		if($kh_check['email'] == $email){
			$errors['email'][] = [
				'rule' => 'min',
				'rule_value' => 3,
				'value' => $email,
				'msg' => 'Email đã được đăng ký'
			];
			break;
		}
	}

    // Calidate đơn vị tính
    // Rule1: Required
    if (empty($email)) {
        $errors['email'][] = [
            'rule' => 'required',
            'rule_value' => true,
            'value' => $email,
            'msg' => 'Vui lòng nhập email'
        ];
    }
	if (empty($dienthoai)) {
        $errors['dienthoai'][] = [
            'rule' => 'required',
            'rule_value' => true,
            'value' => $dienthoai,
            'msg' => 'Vui lòng nhập số điện thoại'
        ];
    }
	if (empty($diachi)) {
        $errors['diachi'][] = [
            'rule' => 'required',
            'rule_value' => true,
            'value' => $diachi,
            'msg' => 'Vui lòng nhập địa chỉ'
        ];
    }

    // Kiểm tra validation về file
    // Kiểm tra xem người dùng có chọn file không?
    if (isset($_FILES['hinhanhkh'])) {
        // Đối với mỗi file, sẽ có các thuộc tính như sau:
        // $_FILES['hinhsp']['name']     : Tên của file chúng ta upload
        // $_FILES['hinhsp']['type']     : Kiểu file mà chúng ta upload (hình ảnh, word, excel, pdf, txt, ...)
        // $_FILES['hinhsp']['tmp_name'] : Đường dẫn đến file tạm trên web server
        // $_FILES['hinhsp']['error']    : Trạng thái của file chúng ta upload, 0 => không có lỗi
        // $_FILES['hinhsp']['size']     : Kích thước của file chúng ta upload
        // -- Validate trường hợp file Upload lên Server bị lỗi
        // Nếu file upload bị lỗi, tức là thuộc tính error > 0
        if ($_FILES['hinhanhkh']['error'] > 0) {
            // File Upload Bị Lỗi
            $fileError = $_FILES["hinhanhkh"]["error"];

            // Tùy thuộc vào giá trị lỗi mà chúng ta sẽ trả về câu thông báo lỗi thân thiện cho người dùng...
            switch ($fileError) {
                case UPLOAD_ERR_OK: // 0
                    break;
                case UPLOAD_ERR_INI_SIZE:
                    // Exceeds max size in php.ini
                    $errors['hinhanhkh'][] = [
                        'rule' => 'max_size',
                        'rule_value' => '5Mb',
                        'value' => $_FILES["hinhanhkh"]["tmp_name"],
                        'msg' => 'File bạn upload có dung lượng quá lớn. Vui lòng upload file không vượt quá 5Mb...'
                    ];
                    break;
                case UPLOAD_ERR_PARTIAL:
                    // Exceeds max size in html form
                    $errors['hinhanhkh'][] = [
                        'rule' => 'max_size',
                        'rule_value' => '5Mb',
                        'value' => $_FILES["hinhanhkh"]["tmp_name"],
                        'msg' => 'File bạn upload có dung lượng quá lớn. Vui lòng upload file không vượt quá 5Mb...'
                    ];
                    break;
                case UPLOAD_ERR_NO_FILE:
                    // No file was uploaded
                    $errors['hinhanhkh'][] = [
                        'rule' => 'no_file',
                        'rule_value' => true,
                        'value' => $_FILES["hinhanhkh"]["tmp_name"],
                        'msg' => 'Bạn chưa chọn file để upload...'
                    ];
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    // No /tmp dir to write to
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    // Error writing to disk
                    break;
                case UPLOAD_ERR_EXTENSION:
                    // A PHP extension stopped the file upload
                    break;
                default:
                    // No error was faced! Phew!
                    break;
            }
        } else {
            // -- Validate trường hợp file Upload lên Server thành công mà bị sai về Loại file (file types)
            // Nếu người dùng upload file khác *.jpg, *.jpeg, *.png, *.gif
            // thì báo lỗi
            $file_extension = pathinfo($_FILES['hinhanhkh']["name"], PATHINFO_EXTENSION); // Lấy đuôi file (file extension) để so sánh
            if (!($file_extension == 'jpg' || $file_extension == 'jpeg'
                || $file_extension == 'png' || $file_extension == 'gif'
            )) {
                $errors['hinhanhkh'][] = [
                    'rule' => 'file_extension',
                    'rule_value' => '.jpg, .jpeg, .png, .gif',
                    'value' => $_FILES['hinhanhkh']["name"],
                    'msg' => 'Chỉ cho phép upload các định dạng (*.jpg, *.jpeg, *.png, *.gif)...'
                ];
            }

            // -- Validate trường hợp file Upload lên Server thành công mà kích thước file quá lớn
            $file_size = $_FILES['hinhanhkh']["size"];
            if ($file_size > (1024 * 1024 * 10)) { // 1 Mb = 1024 Kb = 1024 * 1024 Byte
                $errors['hinhanhkh'][] = [
                    'rule' => 'file_size',
                    'rule_value' => (1024 * 1024 * 10),
                    'value' => $_FILES['hinhanhkh']["name"],
                    'msg' => 'Chỉ cho phép upload file nhỏ hơn 10Mb...'
                ];
            }
        }
    }
}
?>

<?php
if (isset($_POST['dangky']) && !empty($errors)) :
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <ul>
    <?php foreach ($errors as $fields) : ?>
    <?php foreach ($fields as $fields) : ?>
    <li class="alert alert-success"><?= $fields['msg'] ?></li>
    <?php endforeach; ?>
    <?php endforeach; ?>
  </ul>
</div>
<?php endif; ?>

<?php
if (isset($_POST['dangky']) && empty($errors)) {
    $uploads_dir = __DIR__ .  "/../../assets/uploads/khachhang/";
	
    $tentaptin = date('YmdHis') . '_' . $_FILES['hinhanhkh']['name'];

    move_uploaded_file(
        $_FILES['hinhanhkh']['tmp_name'],
        $uploads_dir . $tentaptin
    );

    //1. Mở kết nối

    //2. Câu lệnh
    $sqlInsert = "INSERT INTO khachhang (tenkh, email, password, hinhanhkh,dienthoai,diachi)
    VALUES ('$tenkh','$email',md5('$password'),'avata.png','$dienthoai','$diachi')";

    //3. Thực thi câu lệnh
    mysqli_query($conn, $sqlInsert);
    echo "<script>window.open('dangnhap_dangky.php','_self')</script>";
}
?>