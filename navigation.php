<?php require_once 'includes/initialize.php'; ?>
<?php require_once 'includes/session.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <!-- What it tries to add as homepage app name -->
  	<title>Navigation Souvinear</title>
  	<!-- META -->
  	<meta charset="utf-8">
  	<!-- Enabling our application to be able to work mobiley -->
  	<meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width, maximum-scale=1.0">
  	<meta name="apple-mobile-web-app-capable" content="yes">
  	<meta name="apple-mobile-web-app-status-bar-style" content="black">

  	<!-- Make the app title different from the web page title -->
  	<meta name="apple-mobile-web-app-title" content="myReel">

  	<!-- Disable auto phone number detection -->
  	<meta name="format-detection" content="telephone=no">

  	<!-- CSS -->
  	<link rel="stylesheet" href="css/normalize.css">
  	<!-- Add2Home Styling -->
  	<link rel="stylesheet" href="css/css-add2home.css">
  	<link rel="stylesheet" href="css/main.css">

  	<!-- ICONS -->
  	<!-- iPad retina icon -->
  	<link href="graphics/souvinear_icon-152x152.png" sizes="152x152" rel="apple-touch-icon">
  	<!-- iPad retina icon (iOS < 7) -->
  	<link href="graphics/souvinear_icon-144x144.png" sizes="144x144" rel="apple-touch-icon">
  	<!-- iPad non-retina icon -->
  	<link href="graphics/souvinear_icon-76x76.png" sizes="76x76" rel="apple-touch-icon">
  	<!-- iPad non-retina icon (iOS < 7) -->
  	<link href="graphics/souvinear_icon-72x72.png" sizes="72x72" rel="apple-touch-icon">

  	<!-- iPhone 6 Plus icon -->
  	<link href="graphics/souvinear_icon-180x180.png" sizes="180x180" rel="apple-touch-icon">
  	<!-- iPhone retina icon (iOS < 7) -->
  	<link href="graphics/souvinear_icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
  	<!-- iPhone non-retina icon (iOS < 7) -->
  	<link href="graphics/souvinear_icon-57x57.png" sizes="57x57" rel="apple-touch-icon">

  	<!-- HACKS -->
  	<!-- Prevent text size change on orientation change -->
  	<style>
  		html {
  			-webkit-text-size-adjust: 100%;
  		}
  	</style>

  </head>
  <body>
    <nav id='menu'>
      <a href="index.php">
      <div id="journal"class="btn">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1617 1101.889 35.556 50.111">
          <defs>
            <style>
              .cls-1 {
                fill: #381345;
                fill-rule: evenodd;
              }
            </style>
          </defs>
          <g id="Group-8-Copy" transform="translate(-1617 1101)">
            <path id="Rectangle-20" class="cls-1" d="M6,1H8.677V24.319c0,.84,2.758-7.773,3.342-7.773.454,0,3.342,7.983,3.342,7.773V1H25.556l-.623,50H6a6,6,0,0,1-6-6V7H0A6,6,0,0,1,6,1Z"/>
            <path id="Path-31" class="cls-1" d="M28.889,50.888v-50h.667a6,6,0,0,1,6,6v38h0a6,6,0,0,1-6,6h-.667Z"/>
          </g>
        </svg>

      </div>
      </a>
        <p>journal</p>
      <!-- <a href="journal-cover.html">journal</a> -->
        <a href="hotspot-map.html">
      <div id="hotspots" class="btn">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1619 962 44.224 57">
        <defs>
          <style>
            .cls-1 {
              fill: #381345;
            }

            .cls-1, .cls-2 {
              fill-rule: evenodd;
            }

            .cls-2 {
              fill: none;
              stroke: #381345;
              stroke-linecap: round;
              stroke-width: 2.5px;
            }
          </style>
        </defs>
        <g id="hotspot-icon" transform="translate(-1619 962)">
          <path id="Fill-4" class="cls-1" d="M21.876,4.4C12.5,4.291,4.715,11.54,4.585,20.5,4.454,29.57,12.1,36.92,21.787,37.024c9.306.1,17.186-7.182,17.3-15.983C39.2,11.823,31.64,4.512,21.876,4.4M11.855,2.431A21.834,21.834,0,0,1,25.53.292a21.682,21.682,0,0,1,15.634,10.06,19.886,19.886,0,0,1,3.014,12.231A36.224,36.224,0,0,1,38.6,39.339,64.42,64.42,0,0,1,22.564,56.8a.638.638,0,0,1-.935-.014A67.619,67.619,0,0,1,8.55,43.689,45.773,45.773,0,0,1,2.13,32.234,34.432,34.432,0,0,1,0,19.418C.279,12.758,4.109,6.449,11.855,2.431Z"/>
          <g id="music" transform="translate(8 11)">
            <path id="Fill-8" class="cls-1" d="M16.8,3.563c-1.7.655-3.392,1.321-5.094,1.962a.6.6,0,0,0-.447.673q.021,5.16.006,10.32a2.493,2.493,0,0,1-1.873,2.611,2.193,2.193,0,0,1-2.4-.955,2.558,2.558,0,0,1-.2-2.74,2.264,2.264,0,0,1,2.23-1.35c.138,0,.276.018.454.03.01-.17.027-.316.027-.461,0-3,.007-6,0-9a.5.5,0,0,1,.365-.571C12.779,3,15.683,1.892,18.59.794c.107-.04.218-.07.373-.12.009.177.021.31.021.443q0,6.313,0,12.627a2.506,2.506,0,0,1-1.968,2.645,2.427,2.427,0,0,1-2.791-2.238A2.507,2.507,0,0,1,16.5,11.322c.733-.02.733-.02.733-.809q0-3.289,0-6.578c0-.146-.015-.292-.026-.493C17.037,3.491,16.916,3.518,16.8,3.563Z"/>
            <path id="Line" class="cls-2" d="M.346,6.879H6.872"/>
            <path id="Line-Copy-6" class="cls-2" d="M21.258,6.879h4.481"/>
            <path id="Line-Copy" class="cls-2" d="M.346,10.81H6.872"/>
            <path id="Line-Copy-7" class="cls-2" d="M21.05,10.81h4.689"/>
            <path id="Line-Copy-2" class="cls-2" d="M.346,14.741H4.709"/>
            <path id="Line-Copy-8" class="cls-2" d="M21.05,14.741h4.689"/>
          </g>
        </g>
      </svg>

      </div>
      </a>
      <p>hotspots</p>
        <a href="swapbox.html">
      <div id="swapbox" class="btn">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1622.002 1233.039 47.983 51.882">
  <defs>
    <style>
      .cls-1, .cls-2 {
        fill: #381345;
      }

      .cls-2 {
        fill-rule: evenodd;
      }
    </style>
  </defs>
  <g id="Group-7-Copy-3" transform="translate(-1623 1233)">
    <rect id="Rectangle-19" class="cls-1" width="16.964" height="7.843" rx="1" transform="translate(15.964 44.078)"/>
    <path id="Combined-Shape" class="cls-2" d="M35.769,14.667c4.649,0,12.677-1.3,13.211,6.562V41.818a1,1,0,0,1-1,1H2a1,1,0,0,1-1-1V24.79c0-3.411-.38-10.581,9.416-10.4q2,.058,3.734.1h0a4.691,4.691,0,0,1,4.392,5.958h0c-1.277,4.55,1.952,9.222,5.942,9.222,4.937,0,6.5-3.222,7.476-6.789S31.12,14.667,35.769,14.667ZM4,39h6.039V25.417c0-1.667.037-6.45-3.285-6.45C4.865,18.967,4,20.841,4,24.617Z"/>
    <path id="Path-28-Copy" class="cls-2" d="M31.355,4.635,29.9,23.434h0a4.933,4.933,0,0,1-8.6,2.9h0c-2.816-3.164-.4-5.425,1.207-5.877a7.927,7.927,0,0,1,3.681.161h0A1,1,0,0,0,27.4,19.7L28.464.982h0A1,1,0,0,1,29.789.094l8.538,2.952h0A1,1,0,0,1,39,3.991V5.556h0a1,1,0,0,1-1.284.959Z"/>
  </g>
</svg>

      </div>

    </a>
    <p>swapbox</p>


    <a href="settings.html">
      <div id="settings" class="btn">


        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1620 1376 47 50">
    <defs>
      <style>
        .cls-1 {
          fill: #381345;
          fill-rule: evenodd;
        }
      </style>
    </defs>
    <path id="Combined-Shape-Copy-2" class="cls-1" d="M327.517,533a24.63,24.63,0,0,1-4.925-.495c-2.5-.511,2.069-3.351-3.644-8.235s-8.306,2.259-10.225,0a25.032,25.032,0,0,1-4.638-8.192c-.856-2.534,5.009-.386,5.009-8.078s-5.818-5.813-4.879-8.454a25.04,25.04,0,0,1,4.879-8.243c1.708-1.921,4.143,3.976,9.855,0s.468-7.07,2.9-7.645a24.731,24.731,0,0,1,10.937-.089c2.458.539-.989,4.227,3.772,7.824s7.651-2.051,9.458,0a25.042,25.042,0,0,1,4.891,8.415c.881,2.567-5.033.5-5.3,7.712s6.181,6.135,5.291,8.712a25.037,25.037,0,0,1-5.019,8.536c-1.627,1.817-3.6-4.026-9.792-.421-5.236,3.365-1.215,7.736-4.257,8.276A22.924,22.924,0,0,1,327.517,533Zm-.017-12A12.5,12.5,0,1,0,315,508.5,12.5,12.5,0,0,0,327.5,521Z" transform="translate(-1924 893)"/>
  </svg>

         </div>

      </a>
      <p>settings</p>

    </nav>

  </body>
</html>
