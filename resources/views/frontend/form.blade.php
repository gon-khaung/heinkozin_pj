@extends('frontend.master')

@section('content')
<marquee>According to the Covid-19's warnings, you should stay apart 6 feet
    from other people.</marquee>
<div class="form col-md-8 col-sm-12 offset-sm-0 offset-md-2">
    <div class="signup fade-task" id="signUp">
        <h2 class="pt-5">Sign up</h2>
        <p>
            If you are already registered,
            <button onclick="login()">Sign in here.</button>
        </p>
        <form action="" method="post">
            <span>Name: </span>
            <input type="text" id="name" name="name" class="form-control" placeholder="Your name....." required />
            <span>Email: </span>
            <input type="email" id="email" name="email" class="form-control" placeholder="Your email....." required />
            <span>Password: </span>
            <input type="password" id="signUpPassword" name="password" class="form-control" placeholder="Your password....." required /><br />
            <span>Show password</span>
            <input type="checkbox" name="showpwd" id="showpwd" class="form-control" onclick="showPwdForSignup()" />
            <input type="submit" value="Sign up" />
        </form>
    </div>
    <div class="signin fade-task" id="signIn">
        <h2 class="pt-5">Sign in</h2>
        <p>
            If you are new to this site,
            <button onclick="register()">Sign up here.</button>
        </p>
        <form action="" method="post">
            <span>Email: </span>
            <input type="email" id="email" name="email" class="form-control" placeholder="Your email....." required />
            <span>Password: </span>
            <input type="password" id="loginPassword" name="password" class="form-control" placeholder="Your password....." required /><br />
            <span>Show password</span>
            <input type="checkbox" name="showpwd" id="showpwd" class="form-control" onclick="showPwdForLogin()" class="form-control" />
            <input type="submit" value="Sign in" />
        </form>
    </div>
</div>

<div class="footer container-fluid p-5 mt-5">
    <div class="col-12">
        Copyright © 2020 Cafe Shop | Developed By Hein Ko Zin
    </div>
</div>

<script type="text/javascript">
    var signIn = document.getElementById("signIn");
    var signUp = document.getElementById("signUp");
    var loginPassword = document.getElementById("loginPassword");
    var signUpPassword = document.getElementById("signUpPassword");

    function login() {
        signUp.style.display = "none";
        signIn.style.display = "block";
    }

    function register() {
        signIn.style.display = "none";
        signUp.style.display = "block";
    }

    function showPwdForLogin() {
        if (loginPassword.type === "password") {
            loginPassword.type = "text";
        } else {
            loginPassword.type = "password";
        }
    }

    function showPwdForSignup() {
        if (signUpPassword.type === "password") {
            signUpPassword.type = "text";
        } else {
            signUpPassword.type = "password";
        }
    }
</script>
@endsection