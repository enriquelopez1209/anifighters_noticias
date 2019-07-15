<header>
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
$iPad=stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)) || $iPad){}
else{
?>
<video class="video-background" autoplay muted loop>
  <source src="video/portada.mp4" type="video/mp4" />
</video>
<?php
}
?>
<div class="logo-container">
<a href="http://www.anifighters.com"><img id="logo" src="img/logoAF_transp.png"></a>
</div>
<div class='hamburger'>
  <div class='line line-1'></div>
  <div class='line line-2'></div>
  <div class='line line-3'></div>
</div>
<div class='menu'>
	<div class="items-wrapper">
	  <a href="http://www.anifighters.com" class="nav-link"><div class='menu-item'>Inicio</div></a>
	  <a href="/forum" class="nav-link"><div class='menu-item'>Foro</div></a>
	  <div class='menu-item'><span>Chat 》</span>
		<div class="submenu-mobile">
		  <a href="https://discord.gg/k2y3jpy" class="nav-link"><li class="submenu-mobile">Registrar</li></a>
		  <hr>
		  <a href="https://discordapp.com/channels/131477910019244032/131477910019244032" class="nav-link"><li class="submenu-mobile">Entrar</li></a>
		  <hr>
		</div>
		</div>
	  <div class='menu-item'><span>Estrategia General 》</span>
		<div class="submenu-mobile">
		  <a href="diccionario.php" class="nav-link"><li class="submenu-mobile">Diccionario juegos de pelea</li></a>
		  <hr>
		  <a href="tiers.php" class="nav-link"><li class="submenu-mobile">Tier list</li></a>
		  <hr>
		</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
  
	var menu = $(".menu");
	var hamburger = $(".hamburger");
	var line = $(".line");
	var menuOpen;

	function openMenu(){
		menu.css("left", "0px");
		line.css("background", "#ffffff");
		hamburger.css("position", "fixed");
		menuOpen = true;
	}

	function closeMenu(){
		menu.css("left", "-320px");
		line.css("background", "#ffffff");
		hamburger.css("position", "absolute");
		menuOpen = false;
	}

	function toggleMenu(){
		if (menuOpen) {
		closeMenu();
		} 
		else {
			openMenu();
		}
	}

	hamburger.on({
		click: function(){
			toggleMenu();
		}
	})

	hamburger.click(function() {
		hamburger.toggleClass('active');
		return false;
	});
	
	//Cerrar menu al dar click en el documento
	$(document).on("click", function(e){ 
		var target = e.target;

		if (menuOpen && !$(target).is(menu) && !$(target).parents().is(menu)) {
			$(".hamburger").click();
		}else{}
	});
	
	$(".menu-item").click(function(){
		var subMenu=$(this).find(".submenu-mobile");
		if(!$(subMenu).is(":visible")){
			$(this).find(".submenu-mobile").css("display", "block");
		}
		else{
			$(this).find(".submenu-mobile").css("display", "none");
		}
	});
	  
});
</script>
</header>
