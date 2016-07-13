<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
   <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="author" content="Unimedios" />
      <meta name="DC.Creator" content="Unimedios" />
      <meta name="distribution" content="all" />
      <meta name="revisit" content="1 days" />
      <meta name="robots" content="all" />
      <meta http-equiv="pragma" content="no-cache"/>
      <meta http-equiv="cache-control" content="no-cache, must-revalidate"/>
      <meta http-equiv="expires" content="0"/>
      <meta http-equiv="last-modified" content=""/>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <link href="css/allCSS.css" rel="stylesheet" type="text/css" />
      <link href="css/newstyle.css" rel="stylesheet" type="text/css" />
	  <script type="text/javascript" src="js/jssor.slider.min.js"></script>
      <title>Universidad Nacional de Colombia</title>
   <body>
      <div id="contenedor_info">
	  <?php include_once 'scripts/cabeceraUnal.html';
			include_once 'scripts/cabeceraSepro.html';
      ?>
	  
	 <script>
        jssor_1_slider_init = function() {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1000,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1000,x:-1,y:2,$Rows:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.85}},
              {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1000,x:4,y:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}},
              {$Duration:1000,x:-3,y:1,$Rows:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1200,y:-1,$Cols:8,$Rows:4,$Clip:15,$During:{$Top:[0.5,0.5],$Clip:[0,0.5]},$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12},$ScaleClip:0.5},
              {$Duration:1000,x:0.5,y:0.5,$Zoom:1,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1200,x:-0.6,y:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1500,y:-0.5,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Easing:$Jease$.$InWave,$Round:{$Top:1.5}},
              {$Duration:1000,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:$Jease$.$InQuad},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];
            
            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-1},{b:0,d:1200,y:300,o:1,e:{y:24,o:6}},{b:5600,d:400,y:-200,o:-1,e:{y:17}}],
              [{b:-1,d:1,o:-1},{b:400,d:800,x:200,o:1,e:{x:27,o:6}},{b:5600,d:400,x:-200,o:-1,e:{x:17}}],
              [{b:-1,d:1,o:-1},{b:400,d:800,x:-200,o:1,e:{x:27,o:6}},{b:5600,d:400,x:200,o:-1,e:{x:17}}],
              [{b:-1,d:1,o:-1,sX:-1,sY:-1},{b:1600,d:600,x:200,y:-200,o:1,sX:1,sY:1},{b:5600,d:400,o:-1}],
              [{b:4600,d:960,x:-204}],
              [{b:-1,d:1,sX:-1,sY:-1},{b:3400,d:400,sX:1,sY:1},{b:4000,d:300,o:-1,sX:0.1,sY:0.1}],
              [{b:-1,d:1,sX:-1,sY:-1},{b:3520,d:400,sX:1,sY:1},{b:3920,d:300,o:-1,sX:0.1,sY:0.1}],
              [{b:-1,d:1,o:-1},{b:2200,d:1200,x:-135,y:-24,o:1,e:{x:7,y:7}},{b:4600,d:640,x:-130}],
              [{b:-1,d:1,o:-1},{b:4600,d:240,x:-75,o:1,e:{x:1}},{b:4840,d:480,x:-150,e:{x:1}},{b:5320,d:240,x:-75,o:-1,e:{x:1}}],
              [{b:2000,d:600,y:50,sX:-0.2,sY:-0.2,e:{y:5}},{b:5000,d:400,o:-1,rX:10,rY:-10}],
              [{b:0,d:600,x:-742,sX:4,sY:4,e:{x:6}},{b:900,d:600,sX:-4,sY:-4}],
              [{b:-1,d:1,o:-1},{b:400,d:500,o:1,e:{o:5}}],
              [{b:-1,d:1,o:-1,r:-180},{b:250,d:750,o:1,r:180,e:{r:0}}],
              [{b:-1,d:1,o:-1,r:180},{b:500,d:750,o:1,r:-180,e:{r:0}}],
              [{b:2800,d:600,y:-270,e:{y:6}}],
              [{b:6000,d:600,y:-100,r:-10,e:{y:6}},{b:7000,d:400,o:-1,rX:-10,rY:10}],
              [{b:-1,d:1,sX:-1,sY:-1},{b:3400,d:400,sX:1.33,sY:1.33,e:{sX:7,sY:7}},{b:4000,d:200,sX:-0.33,sY:-0.33,e:{sX:16,sY:16}}],
              [{b:-1,d:1,o:-1},{b:3400,d:600,o:1},{b:4000,d:1000,r:360,e:{r:1}}],
              [{b:-1,d:1,o:-1},{b:3400,d:600,y:-70,o:1,e:{y:27}}],
              [{b:-1,d:1,sX:-1,sY:-1},{b:3700,d:400,sX:1.33,sY:1.33,e:{sX:7,sY:7}},{b:4100,d:200,sX:-0.33,sY:-0.33,e:{sX:16,sY:16}}],
              [{b:-1,d:1,o:-1},{b:3700,d:600,o:1},{b:4300,d:1000,r:360}],
              [{b:-1,d:1,o:-1},{b:3700,d:600,x:-150,o:1,e:{x:27}}],
              [{b:-1,d:1,sX:-1,sY:-1},{b:4000,d:400,sX:1.33,sY:1.33,e:{sX:7,sY:7}},{b:4400,d:200,sX:-0.33,sY:-0.33,e:{sX:16,sY:16}}],
              [{b:-1,d:1,o:-1},{b:4000,d:600,o:1},{b:4600,d:1000,r:360}],
              [{b:-1,d:1,o:-1},{b:4000,d:600,x:150,o:1,e:{x:27}}],
              [{b:9300,d:600,o:-1,r:540,sX:-0.5,sY:-0.5,e:{r:5}}],
              [{b:-1,d:1,o:-1,sX:2,sY:2},{b:6880,d:20,o:1},{b:6900,d:300,sX:-2.08,sY:-2.08,e:{sX:27,sY:27}},{b:7200,d:240,sX:0.08,sY:0.08}],
              [{b:-1,d:1,o:-1,sX:5,sY:5},{b:6300,d:600,o:1,sX:-5,sY:-5}],
              [{b:-1,d:1,o:-1},{b:7200,d:440,o:1}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:7420,d:20,o:1},{b:7440,d:200,r:180,sX:0.4,sY:0.4},{b:7640,d:200,r:180,sX:0.5,sY:0.5}],
              [{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:7620,d:20,o:1},{b:7640,d:300,r:60,sX:1.1,sY:1.1},{b:7940,d:160,sX:-0.2,sY:-0.2}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:7920,d:20,o:1},{b:7940,d:300,sX:1.4,sY:1.4},{b:8240,d:160,sX:-0.5,sY:-0.5}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:7620,d:20,o:1},{b:7640,d:200,r:180,sX:0.4,sY:0.4},{b:7840,d:200,r:180,sX:0.5,sY:0.5}],
              [{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:7820,d:20,o:1},{b:7840,d:300,r:60,sX:1.1,sY:1.1},{b:8140,d:160,sX:-0.2,sY:-0.2}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8120,d:20,o:1},{b:8140,d:300,sX:1.4,sY:1.4},{b:8440,d:160,sX:-0.5,sY:-0.5}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:7820,d:20,o:1},{b:7840,d:200,r:180,sX:0.4,sY:0.4},{b:8040,d:200,r:180,sX:0.5,sY:0.5}],
              [{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:8020,d:20,o:1},{b:8040,d:300,r:60,sX:1.1,sY:1.1},{b:8340,d:160,sX:-0.2,sY:-0.2}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8320,d:20,o:1},{b:8340,d:300,sX:1.4,sY:1.4},{b:8640,d:160,sX:-0.5,sY:-0.5}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8020,d:20,o:1},{b:8040,d:200,r:180,sX:0.4,sY:0.4},{b:8240,d:200,r:180,sX:0.5,sY:0.5}],
              [{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:8220,d:20,o:1},{b:8240,d:300,r:60,sX:1.1,sY:1.1},{b:8540,d:160,sX:-0.2,sY:-0.2}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8520,d:20,o:1},{b:8540,d:300,sX:1.4,sY:1.4},{b:8840,d:160,sX:-0.5,sY:-0.5}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8220,d:20,o:1},{b:8240,d:200,r:180,sX:0.4,sY:0.4},{b:8440,d:200,r:180,sX:0.5,sY:0.5}],
              [{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:8420,d:20,o:1},{b:8440,d:300,r:60,sX:1.1,sY:1.1},{b:8740,d:160,sX:-0.2,sY:-0.2}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8720,d:20,o:1},{b:8740,d:300,sX:1.4,sY:1.4},{b:9040,d:160,sX:-0.5,sY:-0.5}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8220,d:20,o:1},{b:8240,d:200,r:180,sX:0.4,sY:0.4},{b:8440,d:200,r:180,sX:0.5,sY:0.5}],
              [{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:8420,d:20,o:1},{b:8440,d:300,r:60,sX:1.1,sY:1.1},{b:8740,d:160,sX:-0.2,sY:-0.2}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8720,d:20,o:1},{b:8740,d:300,sX:1.4,sY:1.4},{b:9040,d:160,sX:-0.5,sY:-0.5}],
              [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:0,d:400,y:330},{b:900,d:400,y:50,rX:80},{b:21000,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:23000,d:600,y:25,rX:60},{b:24700,d:400,o:-1,rX:30,e:{rX:5}}],
              [{b:-1,d:1,o:-0.5},{b:900,d:400,o:-0.5}],
              [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:1700,d:400,y:310},{b:2600,d:400,y:50,rX:80},{b:20000,d:1000,y:20},{b:21000,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:23000,d:600,y:25,rX:60},{b:24700,d:400,o:-1}],
              [{b:20000,d:1000,o:-1}],
              [{b:-1,d:1,o:-0.5},{b:2600,d:400,o:-0.5}],
              [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:3400,d:400,y:290},{b:5100,d:400,y:50,rX:80},{b:20000,d:1000,y:40},{b:21000,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:23000,d:600,y:25,rX:60},{b:24700,d:400,o:-1}],
              [{b:20000,d:1000,o:-1}],
              [{b:-1,d:1,c:{t:-280}},{b:3880,d:20,c:{t:50.40}},{b:3950,d:20,c:{t:33.60}},{b:4080,d:20,c:{t:30.80}},{b:4180,d:20,c:{t:30.80}},{b:4280,d:20,c:{t:33.60}},{b:4400,d:20,c:{t:22.40}},{b:4480,d:20,c:{t:28.00}},{b:4580,d:20,c:{t:50.40}}],
              [{b:-1,d:1,o:-0.5},{b:5100,d:400,o:-0.5}],
              [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:6000,d:400,y:270},{b:6900,d:400,y:50,rX:40},{b:15000,d:500,rX:40},{b:20000,d:1000,y:60},{b:21000,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:23000,d:600,y:25,rX:60},{b:24700,d:400,o:-1}],
              [{b:20000,d:1000,o:-1}],
              [{b:6900,d:400,o:-0.2},{b:15000,d:500,o:-0.8}],
              [{b:-1,d:1,o:-0.5},{b:15000,d:500,o:-0.5}],
              [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:7800,d:400,y:270},{b:8700,d:400,y:50,rX:40},{b:15000,d:500,rX:40},{b:20000,d:1000,y:60},{b:21000,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:23000,d:600,y:25,rX:60},{b:24700,d:400,o:-1}],
              [{b:8700,d:400,o:-1}],
              [{b:-1,d:1,o:-0.5},{b:8700,d:400,o:-0.5}],
              [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:9600,d:400,y:270},{b:10500,d:400,y:50,rX:40},{b:15000,d:500,rX:40},{b:20000,d:1000,y:60},{b:21000,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:23000,d:600,y:25,rX:60},{b:24700,d:400,o:-1}],
              [{b:10500,d:400,o:-1}],
              [{b:-1,d:1,o:-0.5},{b:10500,d:400,o:-0.5}],
              [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:11400,d:400,y:270},{b:12300,d:400,y:50,rX:40},{b:15000,d:500,rX:40},{b:20000,d:1000,y:60},{b:21000,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:23000,d:600,y:25,rX:60},{b:24700,d:400,o:-1}],
              [{b:12300,d:400,o:-1}],
              [{b:-1,d:1,o:-0.5},{b:12300,d:400,o:-0.5}],
              [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:13200,d:400,y:270},{b:14100,d:400,y:50,rX:40},{b:15000,d:500,rX:40},{b:20000,d:1000,y:60},{b:21000,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:23000,d:600,y:25,rX:60},{b:24700,d:400,o:-1}],
              [{b:14100,d:400,o:-1}],
              [{b:-1,d:1,o:-0.5},{b:14100,d:400,o:-0.5}],
              [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:16000,d:400,y:270},{b:19100,d:400,y:30,rX:80},{b:20000,d:1000,y:80},{b:21000,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:23000,d:600,y:25,rX:60},{b:24700,d:400,o:-1}],
              [{b:20000,d:1000,o:-1}],
              [{b:-1,d:1,o:-0.5},{b:19100,d:400,o:-0.5}],
              [{b:-1,d:1,o:-1},{b:16400,d:300,o:1},{b:16700,d:500,x:-238}],
              [{b:-1,d:1,o:-1},{b:16400,d:300,o:1},{b:16700,d:500,x:238}],
              [{b:-1,d:1,o:-1},{b:17000,d:400,y:200,o:1,e:{y:2,o:6}},{b:17400,d:300,y:-28,e:{y:3}},{b:17700,d:300,y:28,e:{y:2}}],
              [{b:-1,d:1,o:-1},{b:17200,d:400,y:200,o:1,e:{y:2,o:6}},{b:17600,d:300,y:-28,e:{y:3}},{b:17900,d:300,y:28,e:{y:2}}],
              [{b:-1,d:1,o:-1},{b:17400,d:400,y:200,o:1,e:{y:2,o:6}},{b:17800,d:300,y:-28,e:{y:3}},{b:18100,d:300,y:28,e:{y:2}}],
              [{b:-1,d:1,o:-1},{b:17600,d:400,y:200,o:1,e:{y:2,o:6}},{b:18000,d:300,y:-28,e:{y:3}},{b:18300,d:300,y:28,e:{y:2}}],
              [{b:-1,d:1,c:{x:125.0,t:-125.0}},{b:23600,d:400,c:{x:-125.0,t:125.0},e:{c:{x:18,t:18}}},{b:24700,d:400,x:-470,e:{x:18}}],
              [{b:-1,d:1,c:{x:125.0,t:-125.0}},{b:24200,d:400,c:{x:-125.0,t:125.0},e:{c:{x:18,t:18}}},{b:24700,d:400,x:470,e:{x:18}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                  [{d:2000,b:500,t:2}],
                  [{d:100,b:500,t:2}],
				  [{d:100,b:500,t:2}],
				  [{d:100,b:500,t:2}],
				  [{d:100,b:500,t:2}],
                  [{d:100,b:500}]
                ]
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 950);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>
	<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 950px; height: 400px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('images/jssor/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 950px; height: 400px; overflow: hidden;">
            <div data-b="0" data-p="170.00" style="display: none;">
                <img data-u="image" src="images/jssor/sepro.jpg" />
            </div>
            <div data-b="1" data-p="170.00" style="display: none;">
                <img data-u="image" src="images/jssor/02.jpg" />
                <div data-u="caption" data-t="9" data-3d="1" style="position: absolute; top: 250px; left: -360px; width: 950px; height: 150px;">
                    
                    <div data-u="caption" data-t="12" data-to="0% 50%" style="position: absolute; top: 0px; left: 360px; width: 220px; height: 50px; background-color: #327502; font-size: 36px; color: #ffffff; line-height: 50px; text-align: center;">Logística
                        
                    </div>
                    <div data-u="caption" data-t="13" data-to="0% 50%" style="position: absolute; top: 0px; left: 560px; width: 230px; height: 50px; background-color: #327502; font-size: 36px; color: #ffffff; line-height: 50px; text-align: left;">Institucional
                      </div>  
                    
    
            </div>
			</div>
			
             <div data-b="2" data-p="170.00" style="display: none;">
                <img data-u="image" src="images/jssor/01.jpg" />
                <div data-u="caption" data-t="9" data-3d="1" style="position: absolute; top: 250px; left: -360px; width: 950px; height: 150px;">
                    
                    <div data-u="caption" data-t="12" data-to="0% 50%" style="position: absolute; top: 0px; left: 360px; width: 220px; height: 50px; background-color: #235201; font-size: 36px; color: #ffffff; line-height: 50px; text-align: center;">Logística
                        
                    </div>
                    <div data-u="caption" data-t="13" data-to="0% 50%" style="position: absolute; top: 0px; left: 560px; width: 180px; height: 50px; background-color: #235201; font-size: 36px; color: #ffffff; line-height: 50px; text-align: left;">Regional
                      </div>  
                    
    
            </div>
			</div>
			<div data-b="3" data-p="170.00" style="display: none;">
                <img data-u="image" src="images/jssor/03.jpg" />
                <div data-u="caption" data-t="9" data-3d="1" style="position: absolute; top: 250px; left: -360px; width: 950px; height: 150px;">
                    
                    <div data-u="caption" data-t="12" data-to="0% 50%" style="position: absolute; top: 0px; left: 360px; width: 220px; height: 50px; background-color: #327502; font-size: 36px; color: #ffffff; line-height: 50px; text-align: center;">Logística
                        
                    </div>
                    <div data-u="caption" data-t="13" data-to="0% 50%" style="position: absolute; top: 0px; left: 560px; width: 230px; height: 50px; background-color: #327502; font-size: 36px; color: #ffffff; line-height: 50px; text-align: left;">Humanitaria
                      </div>  
                    
    
            </div>
			</div>
			<div data-b="4" data-p="170.00" style="display: none;">
                <img data-u="image" src="images/jssor/04.jpg" />
                <div data-u="caption" data-t="9" data-3d="1" style="position: absolute; top: 250px; left: -360px; width: 950px; height: 150px;">
                    
                    <div data-u="caption" data-t="12" data-to="0% 50%" style="position: absolute; top: 0px; left: 360px; width: 220px; height: 50px; background-color: #F68121; font-size: 36px; color: #ffffff; line-height: 50px; text-align: center;">Logística
                        
                    </div>
                    <div data-u="caption" data-t="13" data-to="0% 50%" style="position: absolute; top: 0px; left: 560px; width: 170px; height: 50px; background-color: #F68121; font-size: 36px; color: #ffffff; line-height: 50px; text-align: left;">Urbana
                      </div>  
                    
    
            </div>
			</div>
			<div data-b="5" data-p="170.00" style="display: none;">
                <img data-u="image" src="images/jssor/05.jpg" />
                <div data-u="caption" data-t="9" data-3d="1" style="position: absolute; top: 250px; left: -360px; width: 950px; height: 150px;">
                    
                    <div data-u="caption" data-t="12" data-to="0% 50%" style="position: absolute; top: 0px; left: 360px; width: 220px; height: 50px; background-color: #327502; font-size: 36px; color: #ffffff; line-height: 50px; text-align: center;">Sistemas
                        
                    </div>
                    <div data-u="caption" data-t="13" data-to="0% 50%" style="position: absolute; top: 0px; left: 560px; width: 280px; height: 50px; background-color: #327502; font-size: 36px; color: #ffffff; line-height: 50px; text-align: left;">Agroindustriales
                      </div>  
                    
    
            </div>
			</div>
			<div data-b="5" data-p="170.00" style="display: none;">
                <img data-u="image" src="images/jssor/06.jpg" />
                <div data-u="caption" data-t="9" data-3d="1" style="position: absolute; top: 250px; left: -360px; width: 950px; height: 150px;">
                    
                    <div data-u="caption" data-t="12" data-to="0% 50%" style="position: absolute; top: 0px; left: 360px; width: 220px; height: 50px; background-color: #F68121; font-size: 36px; color: #ffffff; line-height: 50px; text-align: center;">Investigación 
                        
                    </div>
                    <div data-u="caption" data-t="13" data-to="0% 50%" style="position: absolute; top: 0px; left: 575px; width: 230px; height: 50px; background-color: #F68121; font-size: 36px; color: #ffffff; line-height: 50px; text-align: left;"> &nbsp; y Desarrollo
                      </div>  
                    
    
            </div>
			</div>
        
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:10px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:10px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <script>
        jssor_1_slider_init();
    </script>
      <div id="Contenido_UN">
      <?php include_once 'scripts/pie_pagina.html';?>
  
      </div>
	  </div>
	  <script>
	  document.getElementById("inicio").className = "active";
	  </script>
   </body>
</html>