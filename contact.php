<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Travel Guide</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <?php include ("include/header.php")?>
        <!-- contact section starts  -->

        <section class="contact" id="contact">
            <h1 class="heading">
                <span>c</span>
                <span>o</span>
                <span>n</span>
                <span>t</span>
                <span>a</span>
                <span>c</span>
                <span>t</span>
                <span class="space"></span>
                <span>u</span>
                <span>s</span>
            </h1>
            <div class="row">

            <div class="image">
                <img src="image/contact.svg" alt="">
            </div>

            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="number">
                    <input type="text" placeholder="subject">
                </div>
                <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" value="send message">
            </form>
        </div>
    </section>
<!-- contact section ends -->
       
        <?php include ("include/footer.php")?>
        <script src="js/script.js"></script>
    </body>
</html>