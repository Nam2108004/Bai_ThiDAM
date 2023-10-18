<header>
   <style>
      .header{
         display: flex;
         justify-content: space-between;
         align-items: center;
         margin-bottom: 0px;
      }
      .header .input {
         height: 35px;
         width: 400px;
         border: none;
         padding: 1rem;
         border-radius: 1rem;
         background: #e8e8e8;
         box-shadow: 20px 20px 60px #c5c5c5,
               -20px -20px 60px #ffffff;
         transition: 0.3s;
         }

         .header .input:focus {
         outline-color: #e8e8e8;
         background: #e8e8e8;
         box-shadow: inset 20px 20px 60px #c5c5c5,
               inset -20px -20px 60px #ffffff;
         transition: 0.3s;
         }
      .header .link ul li{
         list-style: none;
         display: inline-block;
         line-height: 85px;
         margin-right: 40px;
      }
      .header .link ul li a{
         color: #fff;
         text-decoration: none;
      }
   </style>
        <div class=" header">
            <div class="logo">
               <img style="width: 150px; height: 70px; border-radius: 15px;" src="data:image/png;base64,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" alt="logo">
            </div>
            <div class="link">
               <ul>
                  <li><a href="#">Thông tin</a></li>
                  <li><a href="?url=login">Đăng nhập</a></li>
                  <li><a href="#"><i class='bx bxs-cart'></i></a></li>
               </ul>
            </div>
            
        </div>
        <div class=" menu">
            <ul>
                
                <li class="dropdown">
                  <a class="dropdownbtn" href="?url=/">Dashboard</a>

                <li class="dropdown">
                  <a class="dropdownbtn" href="?url=list-category">Quản Lí Danh mục</a>
                  
                  
                  <li class="dropdown">
                  <a class="dropdownbtn" href="quanlysanpham.php">Quản Lí Bình Luận</a>

                

            </ul>
        </div>
       </header>