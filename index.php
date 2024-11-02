<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Untitled-1.css">
    <link rel="stylesheet" href="style.css">
    <link rel="php" href="index.php">
    <link rel="php" href="index.php">
    <title>Burger Hut</title>
</head>


<body>
<header>
    <div>
        <img src="iconlogo.png" alt="Berger Hut Logo" height="50px" width="50px">
    </div>
    <div class="container">
        <div class="logo">
            <h1>Berger Hut</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#reservations">Reservations</a></li>
                <li><a href="#contact">Contact</a></li>
                
                <?php if(isset($_COOKIE['user_logged_in'])): ?>
                    <!-- Display when user is logged in -->
                    <li><a href="#profile">Profile</a></li>
                    <li><a href="#cart">Cart</a></li>
                    <li><a href="login/logout.php">Logout</a></li>
                <?php else: ?>
                    <!-- Display when user is not logged in -->
                    <li><a href="login/index.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <div class="cta">
            <a href="#reservations" class="cta-button">Book Now</a>
        </div>
    </div>
</header>

    
    
    <section class="hero">
        <div class="hero-content">
            <h2>Experience Nature Like Never Before</h2>
            <p>Relax and unwind in our serene hut amidst lush greenery.</p>
            <a href="#reservations" class="hero-cta">Explore Our Hut</a>
        </div>
    </section>
    <section class="about dark-theme">
        <div class="about-content" id="about">
            <h2>About Berger Hut</h2>
            <p>Welcome to Berger Hut, your perfect escape into nature’s embrace. Nestled amidst the serene landscapes, 
                our cozy hut offers a unique blend of rustic charm and modern comfort, creating an ideal retreat for nature lovers and 
                adventure seekers alike.

                <br><br>At Berger Hut, we believe that a true getaway should feel like a home away from home. 
                Our hut features thoughtfully designed accommodations that prioritize comfort and relaxation, 
                allowing you to unwind after a day of exploration. Whether you’re enjoying the tranquility of the surrounding forest or 
                gazing at the stars from your private balcony, every moment spent here is a chance to reconnect with nature.</br></br></p>
            <a href="#reservations" class="hero-cta">Explore Our Hut</a>
        </div>
        <div class="about-image">
            <img src="about.png" alt="About Image" height="450px" width="450px">
        </div>
    </section>
    <section>
        <section class="menu" id="menu">
            <h2> Our menu</h2>
            <div class="menu-items">
                <div class="menu-item">
                    <img src="burger1.jpg" alt="burger" class="zoom-image">
                    <h3>Classic Cheeseburger</h3>
                    <p>A juicy beef patty topped with melted cheese, fresh
                         lettuce,tomato,and our special sauce. 
                         served with a side 
                        of crispy fries.
                    </p>
                 </div>
                 <div class="menu-item">
                    <img src="burger2.jpg" alt="veggie burger" class="zoom-image">
                    <h3>Veggie Delight</h3>
                    <p>A delicious veggie patty made from a blend of fresh vegetables and spices. Topped with avocado, sprouts, and tangy mayo. Served with a side of sweet potato fries.</p>
                  </div>
                  <div class="menu-item">
                    <img src="burger3.jpg" alt="bbq burger" class="zoom-image">
                    <h3>Spicy BBQ Burger</h3>
                    <p>A firey burger packed with flavor! Grilled chicken breast smothered in spicy BBQ sauce
                        topped with jalapenos,crispy onion rings,and chipotle mayo. Served with side of 
                        coleslaw.
                    </p>
                  </div>
                </section>
                <section class="reservations" id="reservation">
                    <div class="reservation-form" id="reservation">
                        <h2>Make a reservation</h2>
                        <form>
                            <input type="text" name="name"placeholder="Your name" required>
                            <input type="email"name="email"placeholder="your email"required>
                            <input type="tel" name="phone"placeholder="phone number"required>
                            <input type="date" name="date" required>
                            <input type="time" name="time" required>
                            <textarea name="message" placeholder="Additional Message" rows="5"></textarea>
                            <button type="submit">submit</button>
                        </form>
                    </div>
                </section>
                <section class="testimonials" id="testimonial">
                    <h2>What our customer say</h2>
                    <div class="testimonial">
                        <img src="testimonial1.jpg" alt="customer1" class="zoom-image">
                        <p>"The burgers at Berger Hut are simply amazing! The flavors are rich, and the
                             ingredients are always fresh. It's my go-to place whenever 
                             I'm craving a delicious meal."</p>
                             <h4>Paul Brightson</h4>
                    <div class="testimonial">
                        <img src="testimonial2 (1).jpg" alt="customer2" class="zoom-image">
                        <p>Berger Hut never disappoints! The quality of their burgers and the friendly 
                            service make it a top-notch dining experience. 
                            I highly recommend it to all burger lovers!"</p>
                            <h4>Sreekar Tulluri</h4>
                    </div>
                </section>
        <section class="gallery" id="gallery">
            <h2>Gallery</h2>
            <div class="image-grid">
                <div class="image-container">
                    <img src="gallery1.jpg" alt="gallery" height="200px" width="200px" class="zoom-image">
                </div>
                <div class="image-container">
                    <img src="gallery2.jpg" alt="gallery" height="200px"width="200px" class="zoom-image">
                </div>
                <div class="image-container">
                    <img src="gallery3.jpg" alt="gallery" height="200px"width="200px" class="zoom-image">
                </div>
                <div class="image-container">
                    <img src="burger1.jpg" alt="gallery" height="200px" width="200px" class="zoom-image">
                </div>
            </div>
        </section>
        
    <section class="contact">
        <div class="contact-container" id="contact">
            <h2>Contact Us</h2>
            <div class="Contact info">
                <i class="fas fa-map-marker-alt"></i>
                <p>123 main street chennai,india</p>
            </div>
        <div class="info-item">
            <i class="fas fa-phone-alt"></i>
            <p>+91 86107 62184</p>
        </div>
        <div class="info-item">
            <i class="fas fa-envelope"></i>
            <p>burgerhut@gmail.com</p>
        </div>
        <form class="contact-form">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email"placeholder="Your Email" required>
            <textarea name="message"placeholder="Your message" rows="5" required></textarea>
            <button type="submit">Send message</button>
        </form>
    </section>
    
</div>
<footer class="footer">
    <div class="footer-content">
        <div class="footer-logo">
            <img src="iconlogo.png" alt="logo">
        </div>
        <nav class="footer-links">
            <a href="file:///C:/Users/yoges/OneDrive/Desktop/website%20sample/index.html">Home</a>
            <a href="file:///C:/Users/yoges/OneDrive/Desktop/website%20sample/index.html#about">About</a>
            <a href="file:///C:/Users/yoges/OneDrive/Desktop/website%20sample/index.html#menu">Menu</a>
            <a href="file:///C:/Users/yoges/OneDrive/Desktop/website%20sample/index.html#reservations">Reservations</a>
            <a href="testimonials">Testimonials</a>
            <a href="gallery">Gallery</a>
            <a href="file:///C:/Users/yoges/OneDrive/Desktop/website%20sample/index.html#contact">Contact</a>
        </nav>
        <div class="footer-social">
            <a href="www.facebook.com"><i class="fab fa-facebook"></i></a>
            <a href="www.twitter.com"><i class="fab fa-twitter"></i></a>
            <a href="www.instagram.com"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <p class="footer-text">&copy; 2024 BergerHut.All rights reserved.</p>
</footer>

</body>
</html>
