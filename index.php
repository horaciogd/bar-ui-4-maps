<?php
echo "<!DOCTYPE html>
	<head>
		<meta charset=\"UTF-8\" />
		<title>SoundManager 2: Bar UI Player (prototype)</title>
		<meta name=\"robots\" content=\"noindex\" />
		<script type=\"text/javascript\" src=\"script/soundmanager2.js\"></script>
		<script src=\"script/bar-ui.js\"></script>
		<link rel=\"stylesheet\" href=\"css/bar-ui.css\" />
		<script src=\"script/demo.js\"></script>
		<link rel=\"stylesheet\" href=\"css/demo.css\" />
	</head>
	<body>
	<div class=\"sm2-bar-ui compact\">
		<div class=\"bd sm2-main-controls\">
			<div class=\"sm2-inline-texture\"></div>
  			<div class=\"sm2-inline-gradient\"></div>
			<div class=\"sm2-inline-element sm2-button-element\">
				<div class=\"sm2-button-bd\">
					<a href=\"#play\" class=\"sm2-inline-button play-pause\">Play / pause</a>
				</div>
			</div>
			<div class=\"sm2-inline-element sm2-inline-status\">
				<div class=\"sm2-playlist\">
					<div class=\"sm2-playlist-target\">
     					<!-- playlist <ul> + <li> markup will be injected here -->
     					<!-- if you want default / non-JS content, you can put that here. -->
						<noscript><p>JavaScript is required.</p></noscript>
    				</div>
   				</div>
				<div class=\"sm2-progress\">
    				<div class=\"sm2-row\">
    					<div class=\"sm2-inline-time\">0:00</div>
     					<div class=\"sm2-progress-bd\">
     			 			<div class=\"sm2-progress-track\">
       							<div class=\"sm2-progress-bar\"></div>
       							<div class=\"sm2-progress-ball\">
       								<div class=\"icon-overlay\"></div>
       							</div>
      						</div>
     					</div>
     					<div class=\"sm2-inline-duration\">0:00</div>
    				</div>
   				</div>
			</div>
			<div class=\"sm2-inline-element sm2-button-element sm2-volume\">
				<div class=\"sm2-button-bd\">
					<span class=\"sm2-inline-button sm2-volume-control volume-shade\"></span>
					<a href=\"#volume\" class=\"sm2-inline-button sm2-volume-control\">volume</a>
				</div>
			</div>
		</div>
		<div class=\"bd sm2-playlist-drawer sm2-element\">
			<div class=\"sm2-inline-texture\">
   				<div class=\"sm2-box-shadow\"></div>
  			</div>
			<!-- playlist content is mirrored here -->
			<div class=\"sm2-playlist-wrapper\">
    			<ul class=\"sm2-playlist-bd\">
    			";
    			$files = explode(',',$_GET["file"]);
for ($i = 0; $i<count($files); $i ++) {
	$file = explode('::',$files[$i]);
	echo "<li><a href=\"".$file[0]."\">".$file[1]."</a></li>";
}
echo "
     				<!-- <li><a href=\"\">Ave Maria</a></li> -->
    			</ul>
  			</div>
		</div>
	</div>
	</body>
</html>";
?>

