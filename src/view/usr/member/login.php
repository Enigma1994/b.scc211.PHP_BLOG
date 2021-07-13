<?php
$pageTitleIcon = '<i class="fas fa-sign-in-alt"></i>';
$pageTitle = "로그인";
?>
<?php require_once __DIR__ . "/../head.php"; ?>


<section class="secion-login">
  <div class="container mx-auto">
    <div class="con-pad">
      <form action="doLogin" method="POST">
        <div class="form-control">
          <label class="label">
            <span class="label-text">아이디</span>
          </label>
          <input class="input input-bordered" required placeholder="로그인 아이디" type="text" name="loginId">
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">비밀번호</span>
          </label>
          <input class="input input-bordered" required placeholder="로그인 비밀번호" type="password" name="loginPw">
        </div>
        <div>
          <div class="btns">
            <button type="submit" class="btn btn-link">로그인</button>
            <button onclick="history.back();" type="button" class="btn btn-link">취소</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>




<!-- <section class="section-login">
  <div class="container mx-auto">
    <form action="doLogin" method="POST">
      <div>
        <input required placeholder="Id" type="text" name="loginId"> 
      </div>
      <div>
        <input required placeholder="Password" type="password" name="loginPw"> 
      </div>
      <div>
        <input type="submit" value="Log In">
      </div>
    </form>
  </div>
</section> -->









<!--
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<section class="section-login">
  <div class = "container">
    <div class="wrapper">
      <form action="doLogin" method="post" name="Login_Form" class="form-signin">       
          
          <input required placeholder="Username" type="text" name="loginId" class="form-control"/><br>
          <input required placeholder="Password" type="password" name="loginPw" class="form-control"/><br>     		  
          <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  

      </form>			
    </div>
  </div>
</section>
-->


<!--
<section class="section-login">
  <div class="login-box w-1/2 mx-auto">
    <form action="doLogin" method="POST">
    <div class="input-text">             
      <span>아이디</span>
      <input class= "w-full p-2" type="text" name="loginId" placeholder="아이디를 입력해주세요" style="background-color: #e2e2e2;" >
      </div>
        <span>비밀번호</span>
        <input class="w-full p-2" type="password" name="loginPw" placeholder="비밀번호를 입력해주세요" style="background-color: #e2e2e2;"> 
      </div>
      <hr>
      <div class = "text-center">
        <input type="submit" class = "btn btn-info" value="로그인">        
      </div>
    </form>
  </div>
</section>
-->



<?php require_once __DIR__ . "/../foot.php"; ?>