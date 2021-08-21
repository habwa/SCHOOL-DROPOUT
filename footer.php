<div class="footer">
        <footer>
            <div class="about">
                <p><h3>about Us</h3></p>
                <p>Posted by: Habwa</p>
                <p>Contact information: <a href="habwa@gmail.com">habwikuzoh@gmail.com</a>.</p>
                <p>telephone: +250782688362</p>
                <p>twitter: habwa</p>
                <p>Instragram: habwa</p>
            </div>

            <div class="contact_us">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <h3>Feedback</h3>
                    <input type="email" name="f_mail" placeholder="Enter your email" required><br>
                    <textarea name="mytext" name="f_mssg" cols="30" rows="4" placeholder="your message..." required></textarea><br>
                    <input type="submit" name="feedback" value="send">
                </form>
            </div>
        </footer>
</div>
