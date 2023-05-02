<?php
  class Pages extends Controller {
    public function __construct(){ //Constructor
     
    }
    
    public function index(){
      if(isLoggedIn()){
        redirect('posts'); //Phân quyền cho người chưa đăng nhập và người đã đăng nhập
      }
      $data = [ //Truyền data và hiển thị ra site
        'title' => 'SharePosts',
        'description' => 'Simple social network built on the Emmizy MVC framework',
        'info' => 'You can contact me with the following details below if you like my program and willing to offer me a contract and work on your project',
        'name' => 'Omonzebaguan Emmanuel',
        'location' => 'Nigeria, Edo State',
        'contact' => '+2348147534847',
        'mail' => 'emmizy2015@gmail.com'
      ];
     
      $this->view('pages/index', $data); //Gọi làm view và truyền biến data chứa dữ liệu ở trang web mặc định
    }

    public function about(){ //Hiển thị cho trang about us
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];

      $this->view('pages/about', $data);
    }

    public function contact(){ //Hiển thị cho trang contact
      $data = [
          'title' => 'Contact Us',
          'description' => 'You can contact us through this medium',
          'info' => 'You can contact me with the following details below if you like my program and willing to offer me a contract and work on your project',
          'name' => 'Omonzebaguan Emmanuel',
          'location' => 'Nigeria, Edo State',
          'contact' => '+2348147534847',
          'mail' => 'emmizy2015@gmail.com'
      ];

      $this->view('pages/contact', $data);
    }
  }