<?php 
    $title = "OSHSPRING MULTIQUEST ENTERPRISES";
    include "load.php";
    include "header.php"; 
?> 

    <div class="social-links">
        <a href="https://www.facebook.com/kemirichy/"><img src="images/facebook.png" alt="facebook"></a>
        <a href="tel:08023704304"><img src="images/call.png" alt="call-us"></a>
        <a href="https://api.whatsapp.com/send?phone=2348023704304"><img src="images/whatsapp.png" alt="whatsapp"></a>
        <img src="images/address.png" alt="">
    </div>
    
    <div class="intro">
        <div>
            <h1>Oshspring Multiquest Enterprise</h1>
            <p>Our nature of business is Logistics, moving of Goods, Services, Auto Mobile, Car Sales & Repairs of Foreign used Vehicles.
            </p>
            <button><a href="#details">LEARN MORE</a></button>
        </div>
        <div style="background: url(images/bg.jpeg);
                    background-position: center; 
                    background-size: cover;
                    border-radius: .5rem;
                    height: 50vh;
                    width: 34rem;
        "> 
        </div>
    </div>

    <div class="details" id="details">
        <div>
            <h2>About Us</h2>
            <p>We plan, implement, and control the movement and storage of goods, services, or information within Nigeria. </p> 
            <p>Moving equipments/materials for your new House, Church, School or any other Organisations from one Location to other Locations safely is our Job.</p>
             <a href="tel:08023704304">CALL</a>
        </div>
        <div>
            <h2>Quick Tips</h2>
            <p>Satisfying customers with efficient and timely result is our main goal. <a href="#contact">Message us</a></p>
            <p>Our nature of business is  moving of Goods & Supply of Services, Auto Mobile, Car Sales & Repairs of Foreign used Vehicles</p>
            <a href="tel:08023704304">CALL</a>
        </div>
        <div>
            <h2>Quality Service</h2>
            <p>Generally, our services base on information, transportation, inventory, warehousing, material handling and packaging of items.</p>
            <a href="tel:09087338032">CALL</a>
        </div>
    </div>

    <div class="details-2">
        <p>We perform high-quality Transportation and delivery of Loads extensively, anywhere around NIGERIA</p>
        <center><a href="#contact"><button>BOOK NOW</button></a></center>
    </div>

    <div class="details-3">
        <div>
            <div>
                <h1>Prepare your goods/loads for a long road trip ????</h1>
            </div>
            <div class="checklist-wrapper">
                <div>
                    <div style="background: url('images/car.jpg');
                                background-size: contain;
                                border-radius: .5rem;
                                box-shadow: 4px 4px 19px #ddd;
                                height: 12rem;
                                width: 15rem;
                    "><!-- BACKGROUND IMGAGE --></div>
                    <div>
                        <h2>Accuracy</h2>
                        <p>We plan, implement, and control the movement and storage of goods, services, or information within Nigeria.</p>
                        <a href="https://api.whatsapp.com/send?phone=2348023704304">Whatsapp Us</a>
                    </div>
                </div>
                <div>
                    <div style="background: url('images/car.jpg');
                                background-size: contain;
                                border-radius: .5rem;
                                box-shadow: 4px 4px 19px #ddd;
                                height: 12rem;
                                width: 15rem;
                    "><!-- BACKGROUND IMGAGE --></div>
                    <div>
                        <h2>Features</h2>
                        <p>Moving equipments/materials for your new House, Church, School or any other Organisations from one Location to other Locations safely is our Job.</p>
                        <a href="https://api.whatsapp.com/send?phone=2348023704304">Whatsapp Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="details-4">
        <div>
            <h1> Why Choose our Service?</h1>
            <p> The main advantage of our cooperation centralizes on efficiency and accurate adherance with the value for money.</p>
        </div>
        <div>
            <button><a href="https://api.whatsapp.com/send?phone=2349087338032">09087338032</a></button>
        </div>
    </div>

    <div class="details-5" id="services">
        <div>
            <div>
                <h1>  High-quality Services and Maintanance</h1> 
            </div>
            <div class="car-brands">
                 
                <div>
                    <img src="images/transportation.jpg"><br>
                    <p>Transportation</p> 
                </div>
                <div>
                    <img src="images/warehousing.jpg"><br>
                    <p>Warehousing</p> 
                </div>

                <div>
                    <img src="images/information.png"><br>
                    <p>Information</p> 
                </div>
                <div>
                    <img src="images/inventory.jpg"><br>
                    <p>Inventory</p> 
                </div> 
            </div>
        </div>
    </div>

    <div class="form" id="contact">
        <form action="message-success.php" method="post">
            <h1>Send us Message</h1>
            <p>Feel free to drop a message below...</p>
            <input type="text" name="first_name" placeholder="First Name"><br>
            <input type="text" name="last_name" placeholder="Last Name"><br>
            <input type="text" name="email" placeholder="Email"><br>
            <textarea placeholder="Type your Message..." name="message"></textarea><br>
            <button type="submit" name="submit">SUBMIT</button>
        </form>
        <div>
            <div>
                <div>
                    <h1>You can find us here</h1>
                </div>
                <div>
                    <div>
                        <a href="tel:09087338032">
                            <img src="images/call.png">
                            <p>Call Us</p>
                            <p>09087338032</p>
                        </a>
                    </div>
                    <div> 
                            <img src="images/address.png">
                            <p>Address</p>
                            <p>Lagos, NIGERIA</p> 
                    </div>
                    <div>
                        <a href="https://www.facebook.com/kemirichy/">
                            <img src="images/facebook.png">
                            <p>Facebook</p>
                            <p>Kemi Richardson Osifala</p>
                        </a>
                    </div>
                    <div>
                        <a href="https://api.whatsapp.com/send?phone=2348023704304">
                            <img src="images/whatsapp.png">
                            <p>Whatsapp</p>
                            <p>08023704304</p>
                        </a>
                    </div>
                </div>
            </div>
        </div> 
    </div>

<?php
    include "footer.php";
?>
