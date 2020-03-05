<?php
class Login extends Controller
{

    // Hàm defaut sẻ được gọi khi địa chỉ URL gọi Login
    function default() {
        // Show thử để test
        echo "This is default function of login page for testing.<br>";

        // Gọi 1 model vào
        // Tạo một biến để hứng
        $XuLyLogin = $this->model("XuLyLogin");

        // Gọi hàm testing của model XuLyLogin
        $XuLyLogin->testing();
        //Chạy test
    }

//     Hàm xử lý công việc khác
    public function xuLyCaiGiDo()
    {
//         echo "This is a xuLyCaiGiDo";
        //         Muốn gọi nó mình chỉ cần nhập vào địa chỉ URL

// set Views cho 1 controllers
        $test = "This is a variable test";
        // Tạo một biến để truyền vào view (có or không có cũng đc)
        // set view
        $view = $this->view("home", $test);
    }
}