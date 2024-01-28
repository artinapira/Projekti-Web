<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if not logged in
    header('Location: Login.php');
    exit();
}
include_once __DIR__ . '../controller/placesController.php';
include_once __DIR__ . '../repository/placesRepository.php';

$userId = $_SESSION['user_id'];
$username = $_SESSION['username'];

$placesRepository = new PlacesRepository();
$places = $placesRepository->getAllPlaces();

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

        <div class="places" id="places">
            <h1 class="heading">
                <span>P</span>
                <span>L</span>
                <span>A</span>
                <span>C</span>
                <span>E</span>
                <span>S</span>
            </h1>
        

            <div class="box-container">
                <div class="box">
                    <img src="Img/zurich.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Zurich</h3>
                        <p>“Zurich is a small gem with only 450,000 inhabitants, yet it's the largest and most vibrant city in 
                            Switzerland,” Straub shared. Zurich may be best known for its banking and shopping, but, as Staub noted, 
                            it “actually has a rich history dating back to the Romans.” Staub recommends seeing it all and learning 
                            everything you can on a walking tour with a local like her.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Img/brienz.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Brienz</h3>
                        <p>Brienz shines its beauty with its collection of dark-timber chalets sprouting red geraniums, tooting steam train and views across
                            the startlingly turquoisewaters of its namesake lake to high mountains and thick forests beyond. The deeply 
                            traditional village has a stuck-in-time feel with woodcarving workshops and a lakefront promenade</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="Img/interlaken.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Interlaken</h3>
                        <p>Tucked between Lake Thun and Lake Brienz, travelers can find the town of Interlaken. It’s well known as 
                            an adventure-lovers paradise, offering the chance to hike, ski, paraglide, skydive, and more through the 
                            majestic mountain range surrounding the town.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                
                <div class="box">
                    <img src="Img/st.moritz.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>St.Moritz</h3>
                        <p>Find a little slice of luxury in St. Mortiz. The high-end town marries some of the best skiing in the world 
                            with some of the best shopping. It’s got glitz, glamour, and plenty of bona fides to back up its reputation 
                            as a winter sports heaven; St. Moritz hosted the 1928 and 1948 Winter Olympic Games.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Img/ticino.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Ticino</h3>
                        <p>History lovers, this one is for you. Ticino, a town in southern Switzerland, is home to not one but two UNESCO 
                            World Heritage Sites — the Bellinzona castles and Monte San Giorgio. Come explore them all year long, dive in 
                            the lake in summer, or take to the mountains for a ski trip in winter.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Img/swiss national park.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Swiss National Park</h3>
                        <p>Get one more taste of Switzerland’s incredible natural beauty with a visit to Swiss National Park, located in 
                            the Engadin Valley. The park encompasses 68 square miles, making it a fantastic place to explore. While on a 
                            hike, see how many animals you can spot, including the park’s resident marmots, ibexes, and golden eagles.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                
                <div class="box">
                    <img src="Img/quinten.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Quinten</h3>
                        <p>Quinten, which sits on the shores of Lake Walen, is the place to be for those who love to see everything on 
                            foot. The entire community is car-free and offers spectacular views throughout its terraced neighborhoods 
                            lined with vineyards overlooking the Churfirsten mountain range.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="Img/lake lucerne.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Lake Lucerne</h3>
                        <p>Lake Lucerne offers some of Switzerland’s most fantastic views. The glittering lake stretches on for 43 
                            square miles, offering visitors the chance to hike around it, boat through it, or stay at any number of 
                            fantastic hotels lining its shores to enjoy the view.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Img/rapperswil.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Rapperswil</h3>
                        <p>Make your way about an hour northeast of Lake Lucerne to the town of Rapperswil, which sits on Lake Zurich. 
                            The town is known for its abundant roses in the spring and summer and for its medieval architecture, including
                            its very own castle.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                
                <div class="box">
                    <img src="Img/mount rigri kulm.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Mount Rigri Kulm</h3>
                        <p>Make your way to the top of Mount Rigi to get a view of three countries at once. The mountain, located between 
                            Lake Lucerne and Lake Zug, offers views of Switzerland, France, and Germany at the top, which you can reach by
                            taking a train or hiking all the way.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Img/montreux.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Montreux</h3>
                        <p>Montreux, positioned on the shores of Lake Geneva, is loved for its palm-lined promenade, castles, and gorgeous
                            alpine vistas. It’s also the place to be over the summer when it hosts the annual Montreux Jazz Festival, 
                            which is worthy of planning an entire trip around.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Img/rhine falls.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Rhine Falls</h3>
                        <p>Feel the power of Mother Nature at Rhine Falls, Europe's largest waterfall. Visitors can marvel at the 
                            thunderous waters from viewing platforms, and those feeling more adventurous can take boat trips for a closer
                            experience. Just make sure to wear something waterproof.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Img/oeschinen lake.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Oeschinen Lake</h3>
                        <p>Explore another UNESCO World Heritage Site in Switzerland with a visit to the glacial Oeschinen Lake. Like many
                            places in Switzerland, this lake comes flanked by snow-capped peaks and alpine meadows, and it offers more 
                            than its fair share of outdoor fun, including everything from hiking and biking to ice fishing in the winter.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Img/geneva.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Geneva</h3>
                        <p>Geneva, the second-largest city in Switzerland, is renowned for its international organizations like the United
                            Nations European headquarters and the International Committee of the Red Cross. It’s also a spot where travelers 
                            can find luxuries galore, including high-end watch shops selling some of the most exclusive pieces on Earth.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Img/zermatt.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Zermatt</h3>
                        <p>Zermatt, which sits in the shadow of the Matterhorn, is one more car-free village that combines rustic charm 
                            with high-end amenities, including some of the best skiing in Europe. Of course, guests can explore the 
                            mountains all spring, summer, and fall by hiking and biking, or just enjoy the town’s fantastic (year-round) 
                            shopping opportunities.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                
                <div class="box">
                    <img src="Img/appenzell.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Appenzell</h3>
                        <p>Want another car-free adventure? Head to the picturesque town of Appenzell in northeast Switzerland. The small 
                            community of just 7,000 full-time residents is known for its hand-made cheeses, best enjoyed with a picnic 
                            out in the rolling green pastures.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Img/bern.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Bern</h3>
                        <p>Bern, Switzerland's capital, offers an enticing mix of old and new. The city has retained much of its medieval 
                            architecture and cobblestone streets, now the setting for world-class dining venues, boutiques, and beer 
                            gardens, all worthy of visiting on your next trip.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Img/gruyeres.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Gruyères</h3>
                        <p>If you’re into cheese, you’ve likely heard the name Gruyère before. Visit its namesake town, located in 
                            southwest Switzerland, to dig into the cheese-making tradition and to visit its fairy-tale streets surrounded 
                            by a positively bucolic landscape.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Img/lavaux vineyard.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Lavaux Vineyard</h3>
                        <p>Wine lovers will adore visiting Lavaux Vineyard, the nation’s largest contiguous vineyard area that goes on for
                            nearly 2,000 acres. The vineyard is yet another one of Switzerland’s UNESCO World Heritage Sites, which comes 
                            with the added bonus of nice views and divine wine tastings.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Img/lugano.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Lugano</h3>
                        <p>Find a little taste of Italy in Lugano, the largest Italian-speaking city in Switzerland (which counts Italian 
                            among its four official languages). The Swiss city offers more gorgeous promenades to stroll, along with 
                            delicious Italian-influenced restaurants and an art scene that can't be beaten.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Img/stoos.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Stoos</h3>
                        <p>Want to feel like you’re on top of the world? Head to Stoos, a town located at 4,265 feet. The entire 
                            (car-free) town is adorable, but the coolest part is its funicular railway — which holds the record as the 
                            steepest on Earth — that takes guests some 2,400 feet high in under 10 minutes.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Img/lej nair.png" alt="" class="img">
                    <div class="places_container">
                        <h3><i class="fas fa-map-marker-alt"></i>Lej Nair</h3>
                        <p>In the picturesque surroundings of St. Moritz, where Lake Staz is considered the jewel of the region, 
                            hides an insider tip - Lej Nair, also known as Schwarzsee. Especially in autumn, when the larches turn 
                            a bright golden yellow, Graubünden shines in a magnificent blaze of color. Surprisingly, the hidden Lej Nair 
                            is only a few minutes away from the famous Lake Staz.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">$90.00 <span>$120.00</span></div>
                        <a href="Book.php"><input type="submit" class="submit" value="Book"></a>
                    </div>
                </div>
                
            </div>
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