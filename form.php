<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact Form</title>
    </head>
    <body>
        <main>
            <form class="contact-form" action="contactForm.php" method="post">
                <input type="text" name="name" placeholder="full name"> 
                <input type="text" name="email" placeholder="email">
                <input type="text" name="subject" placeholder="Subject">
                <textarea name="message" placeholder="Message"></textarea>
                <button type="submit" name="submit">Send Message</button>
            </form>
        </main>
    </body>
</html>