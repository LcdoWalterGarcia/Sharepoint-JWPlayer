<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Sharepoint Ondrive</title>
<link rel="shortcut icon" href="https://images.vexels.com/media/users/3/137425/isolated/preview/f2ea1ded4d037633f687ee389a571086-logotipo-de-youtube-icono-by-vexels.png" type="image/x-icon" />
<meta http-equiv="cache-control" content="max-age=0"/>
<meta http-equiv="cache-control" content="no-cache"/>
<meta name="referrer" content="no-referrer"/>
<meta http-equiv="expires" content="0"/>
<meta name="referrer" content="never"/>
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT"/>
<meta http-equiv="pragma" content="no-cache"/>
<meta name="robots" content="noindex,nofollow"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<script type="text/javascript" src="https://cdn.rawgit.com/ufilestorage/a/master/jquery-2.2.3.min.js"></script>
<script src="https://ssl.p.jwpcdn.com/player/v/8.6.2/jwplayer.js"></script>
<script>jwplayer.key="cLGMn8T20tGvW+0eXPhq4NNmLB57TrscPjd1IyJF84o=";</script>
<link rel="stylesheet" href="https://compuphd.com/trailer/panel/mp4/assets/js/style.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css'><link rel="stylesheet" href="https://compuphd.com/trailer/panel/mp4/assets/js/style2.css">
<style type="text/css">body,html{margin:0;padding:0}#compuphd{position:absolute;width:100%important!;height:100%important!;border:none;overflow:hidden;}</style>
</head>
<body>
<div id="compuphd"></div>
<script type="text/javascript">
var videoPlayer = jwplayer("compuphd");
videoPlayer.setup({
sources: [{file:"<?=$_GET['link']?>?download=1",type: "video/mp4"}],
width: "100%",
height: "100%",
controls: true,
displaytitle: false,
flashplayer: "https://p.jwpcdn.com/player/v/7.12.8/jwplayer.flash.swf",
stretching: "uniform",
fullscreen: "true",
primary: "html5",
autostart: false,
image:'<?=$imagen;?>',
tracks: [{
			file: "<?php echo $sub;?>",
			label: "Subs",
			kind:  "captions",
			default: "true",
			}],
			captions: {
			color: "#FFFF00",
			fontSize: 14,
			edgeStyle: "uniform",
			backgroundOpacity: 0,
			},
			skin: {
        name: "netflix"
    },
 logo: {
			file: "",
			logoBar: "",
			position: "top-left",
			link: ""
		},
			aboutlink:"",
			abouttext:"WGTutoriales",
sharing: {
		//code: encodeURI("<iframe width=\"640\" height=\"380\" src=\"empty-url\" frameborder=\"0\" scrolling=\"no\"></iframe>"),
	},
});
videoPlayer.on("ready",function() {
		jwLogoBar.addLogo(videoPlayer);
	});
videoPlayer.addButton(
"http://demo.tutorialspots.com/jwplayer/icon-download.png",
"Download Video",
function() {
window.open(
"<?=$_GET['link']?>?download=1",
"_blank"
);
},
"download"
);
</script>
</body>
</html>