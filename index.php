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

        <!--Login Starts-->

        <div class="login-form">

            <i class="fas fa-times" id="form-close"></i>

            <form action="">
                <h3>Login</h3>
                <input type="email" class="box" placeholder="enter your email">
                <input type="password" class="box" placeholder="enter your password">
                <input type="submit" class="btnsubmit" >
                <input type="checkbox" id="remember">
                <label for="remember">Remember me</label>
                <p>forget password?<a href="#">Click Here</a></p>
                <p>Don't have an account<a href="#">Register Now</a></p>
            </form>

        </div>

        <!--Login Ends-->

        <!-- home section starts  -->
        <section class="home" id="home">
            <div class="content">
                <h3>adventure is worthwhile</h3>
                <p>dicover new places with us, adventure awaits</p>
                <a href="#" class="btn">discover more</a>
            </div>

            <div class="controls">
                <span class="vid-btn active" data-src="video/ethio2.mp4"></span>
                <span class="vid-btn" data-src="video/ethio.mp4"></span>
                <span class="vid-btn" data-src="video/ethio2.mp4"></span>
                <span class="vid-btn" data-src="video/ethio.mp4"></span>
                <span class="vid-btn" data-src="video/ethio2.mp4"></span>
            </div>
            <div class="video-container">
                <video src="video/ethio.mp4" id="video-slider" loop autoplay muted></video>
            </div>
        </section>
        <!-- home section ends -->

        <!-- gallery section starts  -->
        <section class="gallery" id="gallery">
            <h1 class="heading">
                <span>g</span>
                <span>a</span>
                <span>l</span>
                <span>l</span>
                <span>e</span>
                <span>r</span>
                <span>y</span>
            </h1>
            <div class="box-container">
                <div class="box">
                    <img src="image/g-1.jpg" alt="">
                    <div class="content">
                        <h3>amazing places</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                        <a href="#" class="btn">see more</a>
                    </div>
                </div>
                <div class="box">
                    <img src="image/g-2.png" alt="">
                    <div class="content">
                        <h3>amazing places</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                        <a href="#" class="btn">see more</a>
                    </div>
                </div>
                <div class="box">
                    <img src="image/g-3.jpg" alt="">
                    <div class="content">
                        <h3>amazing places</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                        <a href="#" class="btn">see more</a>
                    </div>
                </div>
                <div class="box">
                    <img src="image/g-4.jpg" alt="">
                    <div class="content">
                        <h3>amazing places</h3> 
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                        <a href="#" class="btn">see more</a>
                     </div>
                    </div>
                    <div class="box">
                        <img src="image/g-5.jpg" alt="">
                        <div class="content">
                            <h3>amazing places</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                            <a href="#" class="btn">see more</a>
                        </div>
                    </div>
                    <div class="box">
                        <img src="image/g-6.jpg" alt="">
                        <div class="content">
                            <h3>amazing places</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                            <a href="#" class="btn">see more</a>
                        </div>
                    </div>
                    <div class="box">
                        <img src="image/g-7.jpg" alt="">
                        <div class="content">
                            <h3>amazing places</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                            <a href="#" class="btn">see more</a>
                        </div>
                    </div>
                    <div class="box">
                        <img src="image/g-8.jpg" alt="">
                        <div class="content">
                            <h3>amazing places</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                            <a href="#" class="btn">see more</a>
                        </div>
                    </div>
                    <div class="box">
                        <img src="image/g-9.jpg" alt="">
                        <div class="content">
                            <h3>amazing places</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                            <a href="#" class="btn">see more</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- gallery section ends -->

        <?php include ("include/footer.php")?>
        <script src="js/script.js"></script>
    </body>
</html>