<?php 
    define('__CONFIG__', true);
    require_once("inc/config.php"); 
    require_once("inc/header.php");
?>

<div class="uk-section uk-container">
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
        <form class="uk-form-stacked js-login" method="POST">
            <h1>Login</h1>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Email</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="email" placeholder="Email" required>
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text2">Password</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text2" type="password" placeholder="Password" required>
                </div>
            </div>            

            <div class="uk-margin">
                <button class="uk-button uk-button-default" type="submit">Login</button>
            </div>
        </form>
    </div>
</div>

<?php require_once("inc/footer.php"); ?>