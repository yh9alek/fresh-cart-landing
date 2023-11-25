<?php require_once "header.php"; ?>
<section class="signup__section">
    <div class="signup__container container">
        <figure>
            <img src="https://freshcart.codescandy.com/assets/images/svg-graphics/signup-g.svg">
        </figure>
        <form action="" method="post">
            <h3>Get start Shopping</h3>
            <p>Welcome to FreshCart! Enter your email to get started.</p>
            <input name="user" type="text" placeholder="Write your username" class="form__control">
            <input name="email" type="email" placeholder="Email" class="form__control">
            <div>
                <input name="pass" type="password" placeholder="*****" class="form__control">
                <button class="view__button"><i class="bi bi-eye-slash"></i></button>
            </div>
            <input type="submit" value="Register" class="form__control">
            <p>By continuing, you agree to our <span>Terms of Service</span> & <span>Privacy Policy</span></p>
        </form>
    </div>
</section>
