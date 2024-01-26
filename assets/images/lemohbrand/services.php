<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assets/resources/images/lemohbrand/LG Logo-01-01.png">
    <title>Lemoh Graphics Services </title>
    <!-- Bootstrap css starts here -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/3852bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/resources/css/bootstrap/bootstrap.min.css">
    <!-- Bootstrap css ends here -->

    <!-- custom css starts here -->
    <link rel="stylesheet" href="./assets/resources/css/custom.css">
    <!-- custom css ends here -->
  </head>
<body>
  <header>
    <?php include "assets/includes/header.php"?>
  </header>
  <main>
    <section class="container-fluid">
      <div class="services-heading">
        <h1>OUR SERVICES</h1>
      </div>
      <div class="card text-center mb-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Company Profile</h5>
          <img src="./assets/resources/images/A4_Brochure_Mockup_1.jpg" alt="" srcset="" width="100%" height="100%">
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-theme">Readmore</a>
        </div>
      </div>
      
      <div class="card text-center mb-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Logo Design</h5>
          <img src="./assets/resources/images/A4_Brochure_Mockup_1.jpg" alt="" srcset="" width="100%" height="100%">
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-theme">Readmore</a>
        </div>
      </div>

      <div class="card text-center mb-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Social Media Design</h5>
          <img src="./assets/resources/images/A4_Brochure_Mockup_1.jpg" alt="" srcset="" width="100%" height="100%">
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-theme">Readmore</a>
        </div>
      </div>
      <div class="card text-center mb-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Business Cards</h5>
          <img src="./assets/resources/images/A4_Brochure_Mockup_1.jpg" alt="" srcset="" width="100%" height="100%">
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-theme">Readmore</a>
        </div>
      </div>
      <div class="card text-center mb-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Branding</h5>
          <img src="./assets/resources/images/A4_Brochure_Mockup_1.jpg" alt="" srcset="" width="100%" height="100%">
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-theme">Readmore</a>
        </div>
      </div>
        
    </section>

    <section>

    </section>
    
  
  </main>
    
  <script src="assets/resources/js/bootstrap.bundle.js"></script>

  <script src="./assets/resources/js/script.js"></script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>