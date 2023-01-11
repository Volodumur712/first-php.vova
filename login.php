<?php
  //require('partials/header.php');
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
  require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php');

  if(!empty($_POST)) {
        $sql = "SELECT * FROM `username` WHERE `email` = '" . $_POST['email'] . "' AND `password` = '" . $_POST['password'] . "' "; 
        //var_dump($sql);
        $result = mysqli_query($conn, $sql);  // видати результат зі змінних conn i sql
        $user = $result->fetch_assoc();
        // зробити старт сесії у хедері
        //var_dump($user);
        
        // знайти користувача у сесії через id

        /*if ($user) {
          // знайти у сесії через id
          $_SESSION['user_id']=$user['id'];
          // redirect
          header("Location: /index.php");
          // перевірка чи вибрався
           echo $user['id'];
        } else {
          $_SESSION['user_id'] = null;
        }*/

        // галочка запамятати через куккі.
        if ($user) {  
           var_dump($_POST);

          if(isset($_POST['remember'])) {
            setcookie('user_id', $user['id'], time()+60*60*24*30, '/');
            echo "<h2>" . $_COOKIE["user_id"] . "</h2>";
          } else {
            $_SESSION["user_id"] = $user['id'];
          }
          // redirect
          header("Location: /partials/main.php");
          // перевірка чи вибрався
           echo $user['id'];
        } else {
          $_SESSION["user_id"] = null;
          setcookie('user_id', '', time()+60*60*24*1, '/');  //  щоб знищити куккі , таймер 0 сек
        }
  }      
?>

<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Увійдіть</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" action="#" method="POST">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Дані для входу</h3>

            <div class="form-outline mb-4">
              <input type="email" id="form2Example18" class="form-control form-control-lg" name="email" />
              <label class="form-label" for="form2Example18">Email адреса</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form2Example28" class="form-control form-control-lg" name="password" />
              <label class="form-label" for="form2Example28">Пароль</label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember" value="1"> Запам'ятати
              </label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Ввійти</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Нагадати пароль?</a></p>
            <p>Ще немає аккаунта? <a href="register.php" class="link-info">Реєстрація тут</a></p>
          </form>
        </div>
      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
          alt="image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section> 

<?php
  //require('partials/footer.php');
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>