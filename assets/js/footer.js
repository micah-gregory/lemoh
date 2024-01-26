const footerEl = document.querySelector("footer")
footerEl.innerHTML += `
<div id="footer">
<div class="footer-inner">
    <div class = "footer-title">
        <img src="assets/images/lemohbrand/LG Logo.png" alt="" srcset="" width ="90px">
        <h5 class="footer-about-title">Lemoh Graphics</h5>
    </div>
    <p class="footer-about-par">
        Lemoh Graphics is a full-service graphic design firm 
        that specializes in creating visually stunning 
        designs for businesses and organizations. 
        With over three years of experience in the industry, 
        we have worked with a wide range of clients from 
        small startups to large corporations, helping them 
        to effectively communicate their brand and 
        message through visually appealing graphics. 
    </p>
</div>
<div class="social-media">
    <h5 class="footer-socials-title">Our Socials</h5> 
    <a href="">
        <img src="assets/images/lemohbrand/lg logo-circle.png" alt="" srcset="">
    </a>
</div>
<div class="contact-quicklinks">
    <div class="quicklinks">
        <h5>QUICKLINKS</h5>
        <a href="#header">Home</a>
        <a href="">Services</a>
        <a href="">Portfolio</a>
        <a href="">About Us</a>
    </div>
    <div class="contact">
        <h5>CONTACT</h5>
        <p>Allsops - Ruaraka</p>
        <p>Nairobi Kenya</p>
        <p>Along Outering Road</p>
        <p style="font-weight: 800;">+254 775 201595</p>
    </div>
</div>

</div>
<div class="footer-bottom">
<div class="copyright">
    <p>&copy;Copyright Lemoh graphics <span id="current-year"></span> </p> 
</div>
</div>


`