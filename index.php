<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Detailed Academy</title>
    <link rel="stylesheet" href="homepage.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<header>
    <nav class="mainNav">
        <a href="login.php" class="logo">Detailed Academy</a>
        <div class="nav-right">
        <ul>
            <li><a href="login.php" class="active">Home</a></li>
            <li><a href="login.php">Coaches</a></li>
            <li><a href="login.php">About Us</a></li>
            <li><a href="login.php">Register</a></li>
          </ul>
          <div class="user-dropdown">
            <img src="images/user.png" alt="User Icon" class="user-icon">
                <div class="dropdown-content">
                    <?php if (isset($_SESSION['email'])): ?>
                <form action="logout.php" method="POST">
                    <button type="submit" class="logout-button">Logout</button>
                </form>
                    <?php else: ?>
                <form action="login.php" method="GET">
                    <button type="submit" class="login-button">Login</button>
                </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</header>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const userDropdown = document.querySelector('.user-dropdown');
    const userIcon = document.querySelector('.user-icon');

    if (userDropdown && userIcon) {
      userIcon.addEventListener('click', function(e) {
        e.stopPropagation();
        userDropdown.classList.toggle('open');
      });

      
      document.addEventListener('click', function(e) {
        if (!userDropdown.contains(e.target)) {
          userDropdown.classList.remove('open');
        }
      });
    }
  });
</script>

<body>
    
    <div class="section-1">
        <h1 class="intro-text">Detailed Academy</h1>
        <h2 class="sub-header">Master the Game, One Detail at a Time.</h2>
    </div>

    <div class="section-2">
        <h1 class="section-title">COACHES</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/Sroom1.jpg" alt="Image 1" class="box-image">
                <h3>Standard</h3>
                <p> Experience comfort and convenience in our cozy Standard Room, perfect for solo travelers or couples. 
                    This room features a plush queen-size bed, modern furnishings, air conditioning, and a private bathroom with complimentary toiletries. 
                    Enjoy amenities such as free Wi-Fi, a flat-screen TV, a work desk, and a mini refrigerator. 
                    Ideal for short stays or business trips, the Standard Room offers everything you need for a relaxing and hassle-free visit.</p>
                    <a href="login.php" class="view-button">See more</a>
            </div>
            <div class="box">
                <img src="images/Droom1.jpg" alt="Image 2" class="box-image">
                <h3>Deluxe</h3>
                <p> Upgrade your stay with our spacious and stylish Deluxe Room, designed for guests who appreciate extra comfort and elegance. 
                    Featuring a king-size bed, modern interiors, and a relaxing ambiance, this room is perfect for couples, small families, or business travelers. 
                    Enjoy premium amenities including a private balcony (in select rooms), a seating area, fast Wi-Fi, and a smart TV. 
                    The Deluxe Room offers the perfect balance of luxury and value for a more indulgent experience.</p>
                    <a href="login.php" class="view-button">See more</a>
            </div>
            <div class="box">
                <img src="images/Froom1.jpeg" alt="Image 1" class="box-image">
                <h3>Family</h3>
                <p> Perfect for group getaways or family vacations, our Family Room offers plenty of space and comfort for everyone. 
                    This room features multiple beds—typically one queen-size and two single beds—or a combination that suits your group's needs. 
                    With warm and inviting interiors, the Family Room includes a private bathroom, air conditioning, and a range of amenities to make your stay relaxing and convenient. 
                    It's the ideal choice for travelers looking to stay together without compromising on comfort.</p>
                    <a href="login.php" class="view-button">See more</a>
            </div>
            <div class="box">
                <img src="images/Sproom1.jpg" alt="Image 2" class="box-image">
                <h3>Special</h3>
                <p> Make the most of your stay with our exclusive deals and limited-time promotions! 
                    Whether you're booking a quick getaway, a family vacation, or a long-term stay, our Special Offers are designed to give you the best value for your money. 
                    Enjoy discounted rates, free upgrades, complimentary meals, and more when you book directly through our website.</p>
                    <a href="login.php" class="view-button">See more</a>
            </div>
        </div>
    </div>

   <div class="section-3">
        <div class="booking-preview booking-flex">
            <div class="booking-info">
                <h2 class="booking-title">Ready to Book Your Stay?</h2>
                <p class="booking-desc">
                    Reserve your room now and experience comfort and convenience at StayFirst Hotel. Fast, easy, and secure booking!
                </p>
                <a href="login.php" class="booking-button">Book Now</a>
                <p class="no-account-text" style="margin-top:20px; margin-bottom:4px; color:#e0e0e0; font-family:'Roboto',sans-serif; font-size:1rem;">
                    Don't have an account yet?
                </p>
                <a href="login.php" class="booking-create-account">Create Account</a>
            </div>
                <div class="mini-slideshow">
                <img src="images/SLroom1.png" class="slide-img active" alt="Room 1">
                <img src="images/SLroom2.jpg" class="slide-img" alt="Room 2">
                <img src="images/bg1.jpg" class="slide-img" alt="Room 3">
                    <div class="slideshow-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

const slides = document.querySelectorAll('.slide-img');
const dots = document.querySelectorAll('.dot');
let currentSlide = 0;
let slideInterval = setInterval(nextSlide, 3000);

function showSlide(idx) {
  slides.forEach((img, i) => {
    img.classList.toggle('active', i === idx);
    dots[i].classList.toggle('active', i === idx);
  });
  currentSlide = idx;
}

function nextSlide() {
  let next = (currentSlide + 1) % slides.length;
  showSlide(next);
}

dots.forEach((dot, idx) => {
  dot.addEventListener('click', () => {
    showSlide(idx);
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, 3000);
  });
});

showSlide(0);
</script>
    
    <div class="section-4">
        <div class="about-container">
            <h2 class="about-title">STAYFIRST</h2>
            <div class="about-details-container">
                <p class="about-details">2025 Intramuros, Manila</p>
                <p class="about-details">+63 (0)9123456789</p>
                <p class="about-details">stayfirst@gmail.com</p>
            </div>
            <div class="divider"></div>
            <a href="login.php" class="about-link">Learn more about us</a>
            <p class="footer-text">&copy; 2025 StayFirst. All rights reserved.</p>
        </div>
    </div>
    
    

</body>
</html>