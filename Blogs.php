<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if not logged in
    header('Location: login.php');
    exit();
}

// Access user information
$userId = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swissaround</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="main" style="background-image: none;">

        <div class="nav_bar">

            <div class="logo">
                <img src="Img/logo.png" alt="">
                <h2>Swissaround</h2>
            </div>

            <div class="sidebar">
                
                <ul>
                    <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="Places.php">Places</a></li>
                    <li><a href="Blogs.php">Blogs</a></li>
                    <li><a href="Book.php">Book</a></li>
                    <li><a href="Services.php">Services</a></li>
                    <li><a href="Gallery.php">Gallery</a></li>
                    <li><a href="Login.php"><button>Log in</button></a></li>
                    <li><input type="search" placeholder="Search places"><a href=""><button>Search</button></a></li>
                </ul>
                
            </div>

            <div>
                <ul class="nav_link">
                    <li class="link"><a href="home.php">Home</a></li>
                    <li class="link"><a href="Places.php">Places</a></li>
                    <li class="link"><a href="Blogs.php">Blogs</a></li>
                    <li class="link"><a href="Book.php">Book</a></li>
                    <li class="link"><a href="Services.php">Services</a></li>
                    <li class="link"><a href="Gallery.php">Gallery</a></li>
                </ul>
            </div>

            <div class="login">
                <a href="Login.php"><button>Log in</button></a>
            </div>

            <div class="search">
                <input class="srch" type="search" placeholder="Search places">
                <a href=""><button>Search</button></a>
            </div>

            <div class="menu_icon">
                <ul>
                    <li onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
                </ul>
            </div>

        </div>

        <div class="blogs" id="blogs">
            <h1 class="heading">
                <span>B</span>
                <span>L</span>
                <span>O</span>
                <span>G</span>
                <span>S</span>
            </h1>
            <div class="blogs-container">

                <div class="blog-box">
                    <div class="blog-img">
                        <img src="Img/vistit.png" alt="">
                    </div>
                    <div class="blog-text">
                        <span>21 October 2023</span>
                        <a href="" class="blog-title">Why visit Switzerland?</a>
                        <p>Switzerland is home to some of the most beautiful lakes in Europe, with crystal clear waters surrounded by 
                            breathtaking mountain scenery. Lake Geneva, Lake Zurich, and Lake Lucerne are just a few examples of the many 
                            lakes that offer a wide range of summer activities, from swimming and boating to relaxing on the shore. 
                            Switzerland is geographically divided among the Swiss Plateau, the Alps and the Jura; the Alps occupy the 
                            greater part of the territory, whereas most of the country's population of 9 million are concentrated on the 
                            plateau, which hosts the largest cities and economic centres, including Zürich, Geneva and Basel.</p>
                        <a href="">Read more</a>
                    </div>
                </div>

                <div class="blog-box">
                    <div class="blog-img">
                        <img src="Img/placesToVisit.png" alt="">
                    </div>
                    <div class="blog-text">
                        <span>19 July 2023</span>
                        <a href="" class="blog-title">Top 10 destinations</a>
                        <p>1. Interlaken - The best place for top day trips
                        2. Zurich - Holidays in the biggest city of switzerland
                        3. Murren - Gimmelwald holidays at 1650meters
                        4. Lauterbrunnen - Holidays with an impressive landscape.
                        5. Iseltwald - Holidays in the fishing village directly at the lake of brienz
                        6. Fälensee - Holidays for hikers directly at the lake Fälensee
                        7. Seealpsee - Holidays at the beautiful lake seealpsee
                        8. Lugano - Holidays with Italian and Mediterranean Touch
                        9. Gruyères - Holidays for cheese lovers
                        10. Grindelwald
                        </p>
                        <a href="">Read more</a>
                    </div>
                </div>

                <div class="blog-box">
                    <div class="blog-img">
                        <img src="Img/weather.png" alt="">
                    </div>
                    <div class="blog-text">
                        <span>15 June 2023</span>
                        <a href="" class="blog-title">Weather guide</a>
                        <p>In Switzerland, the climate is moderately continental on the plateau, with cold, dull 
                            winters and warm summers, during which thunderstorms can break out in the afternoon.
                            The Canton of Ticino, located on the south-facing side, has a milder and sunnier climate,
                            though it is very rainy, with afternoon thunderstorms in summer and heavy rains in 
                            autumn.In the mountains, the climate becomes colder with increasing altitude, but in 
                            winter, they are located above the blanket of fog and low clouds that often covers the 
                            plateau, so they are also sunnier in this season.</p>
                        <a href="">Read more</a>
                    </div>
                </div>
                <div class="blog-box">
                    <div class="blog-img">
                        <img src="Img/hikes.png" alt="">
                    </div>
                    <div class="blog-text">
                        <span>10 March 2023</span>
                        <a href="" class="blog-title">Hikes</a>
                        <p>Everyone knows the famous Albula Pass in the canton of Grisons. However, not the colored 
                            mountain lake located above the train station Preda, which lies at an altitude of over 
                            1900 meters. A beautiful circular hike that is not only beautiful in summer but also 
                            worth a top excursion in autumn. Because here you can find larches that turn gold money 
                            in autumn. <br>Beautiful and unique hike directly along the glacier. Did you know that the 
                            Aletsch glacier in the canton of Valais is the largest and longest glacier in the Alps? 
                            The length of the glacier is 23km, and it has a height of 900 meters of eternal ice. 
                            Unfortunately, the glacier melts every year by 50-80 meters, researchers predict that 
                            by the end of 2100 the whole glacier will have disappeared. That is, save this hike and 
                            watch it before the glacier is gone</p>
                        <a href="">Read more</a>
                    </div>
                </div>

                <div class="blog-box">
                    <div class="blog-img">
                        <img src="Img/blog-bern.png" alt="">
                    </div>
                    <div class="blog-text">
                        <span>28 February 2023</span>
                        <a href="" class="blog-title">Bern</a>
                        <p>Not many cities have managed to retain their historic features quite as successfully as 
                            Bern, the capital of Switzerland. The old town of Bern is a UNESCO World Heritage Site 
                            and thanks to its 6 kilometres of arcades - the locals refer to them as 'Lauben' - 
                            boasts on of the longest weather-sheltered shopping promenades in Europe.</p>
                        <a href="">Read more</a>
                    </div>
                </div>
                

            </div>
        </div>
        <div class="previousNext">
            <button class="previous"><a href="">Previous</a></button>
            <button class="next"><a href="">Next</a></button>
        </div>

        <footer>
            <div class="main-content">
    
                <div class="left box">
                    <h2>Company</h2>   
                    <div class="company">
                        <br>
                        <p><a href="#">Home</a></p>
                        <br>
                        <p><a href="#">About Us</a></p>
                        <br>
                        <p><a href="#">Privacy and Policy</a></p>
                        <br>
                        <p><a href="#">Terms & Conditions</a></p>
                        <br>
                        <p><a href="#">Contact Us</a></p>
                    </div>
                </div>
                <div class="center box">
    
                    <h2>Contact Us</h2>
                    <div class="contact">
                        <div class="phone">
                            <span class='bx bxs-phone'></span>
                            <i class="text">Phone:+134-64381-236419</i>
                        </div>
    
                        <div class="viber">
                            <span class='bx bxs-phone-call'></span>
                            <i class="text">Viber:+133-78432-211987</i>
                        </div>
                        <div class="email">
                            <span class='bx bxs-envelope' ></span>
                            <i class="text">Email:swissaround@gmail.com</i>
                        </div>
                    </div> 
                </div>
                <div class="right box">
                    <h2>Follow Us</h2>
                    <div class="social">
                        <br>
                        <a href="#"><span class='bx bxl-facebook-circle'></span></a>
                        <a href="#"><span class='bx bxl-instagram' ></span></a>
                        <a href="#"><span class='bx bxl-twitter' ></span></a>
                        <a href="#"><span class='bx bxl-linkedin' ></span></a>
                    </div>
                </div>   
            </div>
            <hr>
            <div class="copyright">
                <p>© All rights reserved 2023 Swissaround</p>
            </div>
    
        </footer>
    </div>
    <script>
        function showSidebar(){
            const sidebar = document.querySelector('.sidebar');
            sidebar.style.display = 'flex';
        }
        function hideSidebar(){
            const sidebar = document.querySelector('.sidebar');
            sidebar.style.display = 'none';
        }
    </script>
    
</body>
</html>