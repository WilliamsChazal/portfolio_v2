<section class='games'>

        <div>
            <span> 
                <img src="../assets/icons/ico-jeux.svg" alt="" srcset="">
            </span>
            <span>
                <p onclick="displayIframe()">Titre du jeu</p>
            </span>
        </div>
        <div>
            <span>
            <img src="../assets/icons/ico-bomb.svg" alt="" srcset="">
            </span>
        
        <span><p>Titre du jeu</p></span>
        </div>
       
</section>


<script>

function displayIframe() {
        document.getElementById("iframeDisplay").innerHTML = "<iframe src=\"https://williamsc.promo-68.codeur.online/wolfenbomberstein/\" height=\"100%\" width=\"100%\" ></iframe>";
}
function removeIFrame() {
      var frame = document.getElementById("iframeDisplay");
      frame.parentNode.removeChild(frame);
}
</script>