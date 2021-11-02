<section class='games'>

        <div>
            <span onclick="displayIframe()"> 
                <img src="../assets/icons/ico-bomb.svg" alt="" srcset="">
            </span>
            <span onclick="displayIframe()">
                <p >Titre du jeu</p>
            </span>
            <span  onclick ="removeIFrame()">X</span>
        </div>
        <div>
            <span>
            <img src="../assets/icons/ico-jeux.svg" alt="" srcset="">
            </span>
        
        <span><p>Titre du jeu</p></span>
        </div>
       
</section>


<script>

function displayIframe() {
        let frame = document.getElementById("iframeDisplay");
        document.getElementById("iframeDisplay").innerHTML = "<iframe src=\"https://williamsc.promo-68.codeur.online/wolfenbomberstein/\" height=\"100%\" width=\"100%\" ></iframe>";
            frame.style.display ='block'}
function removeIFrame() {
      let frame = document.getElementById("iframeDisplay");
      frame.style.display ='none';
}
</script>