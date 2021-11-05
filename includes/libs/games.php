<section class='games'>
    <div><h4 class='text-pop-up-top' >Mes Jeux</h4></div>
        <div>
            <span onclick="displayIframe()" class='heartbeat'> 
                <img src="../assets/icons/ico-bomb.svg" alt="" srcset="">
            </span>
            <span onclick="displayIframe()">
                <p>WolfenBomberSteinMan</p>
            </span>
            <span  onclick ="removeIFrame()"><i class="fa fa-times-circle" aria-hidden="true" id="close_games"></i></span>
        </div>
        <div>
            <span class='heartbeat'>
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