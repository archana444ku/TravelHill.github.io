<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelHimalayas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="website weather css.css">
  
</head>
<body>
  <!-- nav bar Start -->
    <nav>
      <div class="menu-icon">
          <span class="fas fa-bars"></span>
      </div>
      <div class="logo">
        TravelHimalayas
      </div>
      <div class="nav-items">
          <li><a href="#">Home</a></li>
          <li><a href="website weather.html">Weather</a></li>
          <li><a href="suggestion.html">suggestion</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="Aboutus.html">About us</a></li>
          <li><a href="contactus1.html">Contact us</a></li>
      </div>
      <div class="search-icon">
          <span class="fas fa-search"></span>
      </div>
      <div class="cancel-icon">
          <span class="fas fa-times"></span>
          
      </div>
      <form action="#">
          <input type="search" class="search-data" placeholder="Search" required>
          <button type="submit" class="fas fa-search"></button>
      </form>
    </nav>

  <!-- nav bar End -->
    
    
   
    <div class="container"></div>

    <div class="a2">
        <h5>Build Your Next Holiday Trip With us </h5>
        <p><h1>Create<b>Your Tour</b></h1></p>
        <button type="button" class="btn btn-primary">Get in touch</button>
    </div>
    <!--<iframe width="860" height="500"  src="https://www.youtube.com/embed/CaqJ65CIoMw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <audio controls src="audio.mp3"></audio>-->
    <!-- section Start -->
    <section class="section">
        <div class="wrapper">
          
          <div class="card">
              <img src="home2.jpeg" alt="">
              <div class="info">
                
                  <h><b>Kedarnath</b></h></h1>
                  <p>Among the glorious mountain peaks that are covered with nothing but snowstorm, lies one of the holiest pilgrim sites of northern India -"Kedarnath". Famous for the ancient shrine devoted to Lord Shiva, it tenders an unflustered ambience with its colorful rhododendron woods, snow covered mountains and splendid sights of nature.</p>
                  <a href="#" class="btn">Read More</a>
              </div>
          </div>
          

          <div class="card">
            <img src="home3.jpeg" alt="">
              <div class="info">
                  <h1><b>Manali<b></h1>
                  <p>A gift of the Himalayas to the world, Manali is a beautiful township nestled in the picturesque Beas River valley. It is a rustic enclave known for its cool climate and snow-capped mountains, offering respite to tourists escaping scorching heat of the plains.30-Apr-2019A</p>
                  <a href="#" class="btn">Read More</a>
              </div>
          </div>

          <div class="card">
              <img src="map3.jpg" alt="">
              <div class="info">
                  <h1><b>Valley of flower</b></h1>
                  <p>Arisaema tortuosum, Arisaema propinquum, Arisaema jaquemontii, Valley of Flowers trek, Uttarakhand. Snake flower Arisaema consanguineum (Himalayan Cobra Lily).</p>
                  <a href="#" class="btn">Read More</a>

              </div>
          </div>
      </div>
    </section>
       <section class="section2">
        <div class="wrapper">
          <div class="card">
              <img src="ladhakpicks.jpg" alt="">
              <div class="info">
                  <h><b>Ladakh</b></h></h1>
                  <p>The word 'Ladakh,' known in Tibetan as 'La-dvags,' means 'the land of high passes. ' With an average height of more than ten thousand feet and numerous snow-capped peaks and glaciers, Ladakh is a high-altitude cold desert. The region boasts of a unique climatic condition..</p>
                  <a href="#" class="btn">Read More</a>
              </div>
          </div>

          <div class="card">
              <img src="MANALI.jpg" alt="">
              <div class="info">
                  <h1><b>Manali<b></h1>
                  <p>Manali is a high-altitude Himalayan resort town in India’s northern Himachal Pradesh state. It has a reputation as a backpacking center and honeymoon destination. Set on the Beas River, it’s a gateway for skiing in the Solang Valley and trekking in Parvati Valley. It's also a jumping-off point for paragliding, rafting and mountaineering in the Pir Panjal mountains, home to 4,000m-high Rohtang Pass.</p>
                  <a href="#" class="btn">Read More</a>
              </div>
          </div>

          <div class="card">
              <img src="valley1.jpg" alt="">
              <div class="info">
                  <h1><b>kashmir</b></h1>
                  <p>Kashmir is the northernmost geographical region of the Indian subcontinent. Until the mid-19th century, the term "Kashmir" denoted only the Kashmir Valley between the Great Himalayas and the Pir Panjal Range. </p>
                  <a href="#" class="btn">Read More</a>
              </div>
          </div>
      </div>
    </section>
    
    
    <!-- section End -->

		<footer>

			<div class="footer-right">
				<a href="#"><i class="fa-brands fa-facebook "></i></a>
				<a href="#"><i class="fa-brands fa-twitter"></i></a>
				<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
				<a href="#"><i class="fa-brands fa-github"></i></a>
			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a class="link-1" href="#">Home</a>
					<a href="#">Blog</a>
					<a href="#">Pricing</a>
					<a href="#">About</a>
					<a href="#">Faq</a>
					<a href="#">Contact</a>
				</p>

				<p>Company Name &copy; 2015</p>
			</div>
		</footer>
    
       <!--javasceript topics-->
    <!-- <script>
      const menuBtn = document.querySelector(".menu-icon span");
      const searchBtn = document.querySelector(".search-icon");
      const cancelBtn = document.querySelector(".cancel-icon");
      const items = document.querySelector(".nav-items");
      const form = document.querySelector("form");
      menuBtn.onclick = ()=>{
        items.classList.add("active");
        menuBtn.classList.add("hide");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
      }
      cancelBtn.onclick = ()=>{
        items.classList.remove("active");
        menuBtn.classList.remove("hide");
        searchBtn.classList.remove("hide");
        cancelBtn.classList.remove("show");
        form.classList.remove("active");
        cancelBtn.style.color = "#ff3d00";
      }
      searchBtn.onclick = ()=>{
        form.classList.add("active");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
      }
    </script> -->
    
</body>
</html>