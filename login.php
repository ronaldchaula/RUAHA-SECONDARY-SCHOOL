
<section class="contact-us" >
    <div class="row" style="display: flex;justify-content: center">
        <div class="contact-col">

            <form action="alumni.php" method="POST" id="form">
                <h2 style="margin: 5% auto;text-align:center;color:rgba(68, 148, 68, 0.62)">ENTER YOUR DETAILS TO LOGIN</h2>

                <div>
                    <?php if ($_SESSION['message']):?>
                        <p style="color: red;">
                            <?= $_SESSION['message']?>
                        </p>
                    <?php elseif($_GET['success']): ?>
                    <p style="color:forestgreen">
                        Your have successfully created account login
                    </p>
                    <?php endif; ?>
                </div>
                <input type="text" name="username" id="username" required placeholder="Enter username..">
                <input type="password" name="password" id="password" required placeholder="Enter password..">

                <button style=" width: 100%;" type="submit" class="visit-button about-button send" name="submit" id="submit" onclick="ValidateEmail(document.form.text)">LOGIN</button>
                <div>
                    <p style="text-align:right; margin-right: 5%">Don't have an account? <a href="register.php">Register Here.!</a></p>
                </div>

<!--                pattern="[A-Za-z\d@$!%*#?&]{8,}$"-->


            </form>

        </div>

    </div>
</section>
