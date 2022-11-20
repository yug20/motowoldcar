	<!-- Footer -->
	<footer>
	    <div class="container">
	        <ul class="social">
	            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
	            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
	            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
	            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
	        </ul>
	        <ul class="menu">
	            <li><a href="#">Join</a></li>
	            <li><a href="#">Member login</a></li>
	            <li><a href="#">Press</a></li>
	            <li><a href="#">Stories</a></li>

	        </ul>
	    </div>
	</footer>

	<a onclick="topFunction()" id="myBtn" title="Go to top" style="display: block;"></a>

	<!-- Optional JavaScript -->
	<script src="https://pchen66.github.io/js/three/three.min.js"></script>
	<script src="https://rawgit.com/pchen66/panolens.js/dev/build/panolens.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/jquery.fancybox.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.4/jquery.fullPage.min.js"></script>

	
	<script src="assets/js/stats.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>
AOS.init();

document.addEventListener('DOMContentLoaded', function() {
    'use strict';
    var link = document.querySelector('[data-toggle-menu]');
    link.addEventListener('click', function() {
        if (link.classList.contains('toggle-menu--clicked')) {
            link.classList.remove('toggle-menu--clicked');
        } else {
            link.classList.add('toggle-menu--clicked');
        }
    }, false);
}, false);
	</script>
	<script>
$(document).ready(function() {
    $('[data-fancybox]').fancybox({
        youtube: {
            controls: 0,
            showinfo: 0
        },
        vimeo: {
            color: 'f00'
        }
    });
});
	</script>
	<script>
		var panorama, viewer, container, infospot;

container = document.querySelector("#container");

// panorama = new PANOLENS.ImagePanorama( ' https://assets.winfooz.com/panoramas/attachments/000/064/905/original/9099279739411339966.JPG' );

const img = new Image();
img.crossOrigin = "anonymous";

// panorama = new PANOLENS.ImagePanorama( ' https://assets.winfooz.com/panoramas/attachments/000/061/992/original/Image_1570485908230.JPG' );

panorama = new PANOLENS.ImagePanorama(
  " https://assets.winfooz.com/panoramas/attachments/000/061/902/original/Image_1570479297707.JPG"
);

var infospot = new PANOLENS.Infospot(
  700,
  "https://cdn2.iconfinder.com/data/icons/button-v1/30/13-512.png",
  true
);
infospot.position.set(-5000, -2452.93, 3244.14);

infospot.addHoverText("DAMAGE");
// infospot.setElementStyle('background-color':'red');

panorama.add(infospot);

viewer = new PANOLENS.Viewer({
  container: container,
  autoHideInfospot: false,
  autoRotate: true,
  autoRotateSpeed: 1,
  autoRotateActivationDuration: 5000
});
viewer.add(panorama);

viewer.addUpdateCallback(function () {});

$(".360sec").on("dblclick", function () {});

var count = 0;

$(".360sec").on("dblclick", function () {
  //console.log(viewer.getPosition());
  var myInfospot = new PANOLENS.Infospot(
    700,
    "https://cdn2.iconfinder.com/data/icons/button-v1/30/13-512.png",
    true
  );
  // myInfospot.material.color.set( 0xf6ac30 );

  let clickedPos = viewer.getPosition();
  myInfospot.position.set(clickedPos.x * -1, clickedPos.y, clickedPos.z);
  myInfospot.addHoverText("DAMAGE", count);
  myInfospot.onClick(
    console.warn("HALA MADRID", clickedPos.x * -1, clickedPos.y, clickedPos.z)
  );
  myInfospot.addEventListener("click", function (event) {
    console.warn(event.target);
  });
  panorama.add(myInfospot);
  myInfospot.name = count;
  panorama.toggleInfospotVisibility(true);
  count = ++count;
  viewer.autoHideInfospot = false;
  viewer.autoHideInfospot = true;
});

PANOLENS.Viewer.prototype.getPosition = function () {
  var intersects, point, panoramaWorldPosition, outputPosition;
  intersects = this.raycaster.intersectObject(this.panorama, true);

  if (intersects.length > 0) {
    point = intersects[0].point;
    panoramaWorldPosition = this.panorama.getWorldPosition();

    // Panorama is scaled -1 on X axis
    outputPosition = new THREE.Vector3(
      -(point.x - panoramaWorldPosition.x).toFixed(2),
      (point.y - panoramaWorldPosition.y).toFixed(2),
      (point.z - panoramaWorldPosition.z).toFixed(2)
    );
  }

  return outputPosition;
};

	</script>
	</body>

	</html>