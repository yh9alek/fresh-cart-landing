<?php require_once "header.php"; ?>
<section class="signup__section">
    <div class="signup__container container">
        <figure>
            <img src="https://freshcart.codescandy.com/assets/images/svg-graphics/signin-g.svg">
        </figure>
        <form action="" method="post">
            <h3>Sign in to FreshCart</h3>
            <p>Welcome back to FreshCart! Enter your email to get started.</p>
            <input name="email" type="email" placeholder="Email" class="form__control">
            <div>
                <input name="pass" type="password" placeholder="*****" class="form__control">
                <button class="view__button"><i class="bi bi-eye-slash"></i></button>
                <div>
                    <div>
                        <label for="remember" class="p">Remember me</label>
                        <input type="checkbox" name="remember" id="remember">
                    </div>
                    <p class="forgot">Forgot password? <a href="/reset">Reset It</a></p>
                </div>
            </div>
            <input type="submit" value="Sign In" class="form__control">
            <p>Don’t have an account? <a href="/signup"><span>Sign Up</span></a></p>
        </form>
    </div>
</section>