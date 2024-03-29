<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Couples Tree</title>
        <link rel="icon" href="{{ asset('img') }}/logoicon.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>

   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>

   <script src="{{ asset('js') }}/rastercoords.js"></script>

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                height: 100%;
                margin: 0;
            }

            #bg 
            {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: row;
                position: relative;
                background-image: url("{{ asset('img') }}/barktile.jpg");

                /* background-size: cover; */
                background-repeat: repeat;
                background-position: center center;
                max-height: 200vh !important;
                /* overflow-y: auto !important; */
                width: 100%;
                height: 100vh;
                left: 0px;
                top: 0px;
            }
            .nav {
                top:0;
                left:0;
                height: 5vh;
                width: 60px;	
                overflow: hidden;
                position: absolute;
                background: #FFB6C1;
                color: #000000;
                border: 1px solid #ffffff;
            }
            .scroll-left {
                top:0;
                left:0;
                height: 5vh;
                width: 100%;	
                overflow: hidden;
                position: absolute;
                background: #FFB6C1;
                color: #000000;
                border: 1px solid #ffffff;
            }
            .scroll-left p {
                position: absolute;
                width: 100%;
                height: 100%;
                margin: 0;
                line-height: 50px;
                text-align: center;
                /* Starting position */
                transform:translateX(100%);
                /* Apply animation to this element */
                animation: scroll-left 18s linear infinite;
            }
            /* Move it (define the animation) */
            @keyframes scroll-left {
                0%   {
                transform: translateX(100%); 		
                }
                100% {
                transform: translateX(-100%); 
                }
            }

            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 5vh;
                background-color: #FFB6C1;
                color: #000000;
                text-align: center;
                border-style: solid;
                border-width: 2px;
            }

            @media only screen 
            and (max-width : 500px) {

                #homepageOptions a {
                    /* border:1px solid #fff; */
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-direction: column;
                    position:relative;
                    background-color:rgba(255, 182, 193,0.5);
                    border-style: solid;
                    border-width: 2px;
                    border-radius: 35px;

                    font-size: 5vw;
                    color: #000000;
                }
                .scroll-left p {
                position: absolute;
                width: 250%;
                height: 100%;
                margin: 0;
                line-height: 50px;
                text-align: center;
                /* Starting position */
                transform:translateX(100%);
                /* Apply animation to this element */
                animation: scroll-left 13s linear infinite;
            }
                
            }

            #mapid { height: 90%; width:100%; }

            .stretch {
                width:100%;
                height:100%;
                
            }

            #mapNewButton{
                border-radius: 10px;
                text-align: center;

            }

        </style>
    </head>
    <body>
    <div id="bg">
        <div class="scroll-left">
            <p>Eternalize your relationship with that special someone! Make an engraving on the Couples Tree for AS LOW AS <b>$1.00!</b></p>
        </div>
        <div id="mapid"></div>
        <div class="nav">
        <img src="{{ asset('img') }}/logoicon.png" class="stretch" alt="" />

        </div>
        <div class="footer">
            <p>© The Hansen Group - 2021</p>
        </div>

    </div>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60b5ec8e6699c7280daa066b/1f73a845s';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    </body>
</html>

<script>

//var mymap = L.map('mymap').setView([51.505, -0.09], 13);
// L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
//     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
//     maxZoom: 18,
//     id: 'mapbox/streets-v11',
//     tileSize: 512,
//     zoomOffset: -1,
//     accessToken: 'pk.eyJ1Ijoia3lsZWhhbnNlbjc1IiwiYSI6ImNrOHU1ODFzZTAxZmgzZXAzZWxwcGh0YTQifQ.YYF9trLXUCZ8fopHsqRulg'
// }).addTo(mymap);
// L.tileLayer('{{ asset("img") }}/tree/{z}/{x}/{y}.png',
// { 
  
// }).addTo(mymap);
var customControl =  L.Control.extend({

options: {
  position: 'topright'
},

onAdd: function (map) {
  var container = L.DomUtil.create('input');
  container.type="button";
  container.title="NEW ENGRAVING";
  container.value = "NEW ENGRAVING";
  container.style.backgroundColor = '#FFB6C1';
  container.id = "mapNewButton";

  //container.style.backgroundColor = 'white';     
//   container.style.backgroundImage = "url(https://t1.gstatic.com/images?q=tbn:ANd9GcR6FCUMW5bPn8C4PbKak2BJQQsmC-K9-mbYBeFZm1ZM2w2GRy40Ew)";
//   container.style.backgroundSize = "30px 30px";
  container.style.width = '200px';
  container.style.height = '30px';
  
  container.onmouseover = function(){
    container.style.backgroundColor = '#FFc6d1'; 
  }
  container.onmouseout = function(){
    container.style.backgroundColor = '#FFB6C1'; 
  }

  container.onclick = function(){
    window.location.href = "/engravings/create";
  }

  return container;
}
});


var minZoom = 3
    var maxZoom = 5
    var img = [
      {{$width}}, // original width of image `karta.jpg`
      {{$height}}  // original height of image
    ]

    // create the map
    var map = L.map('mapid', {
      minZoom: minZoom,
      maxZoom: maxZoom
    })

    // assign map and image dimensions
    var rc = new L.RasterCoords(map, img)

    // set the view on a marker ...
    map.setView(rc.unproject([1589, 1447]), 4)

    // add layer control object
    // L.control.layers({}, {
    //   'Polygon': layerPolygon(map, rc),
    //   'Countries': layerCountries(map, rc),
    //   'Bounds': layerBounds(map, rc, img),
    //   'Info': layerGeo(map, rc),
    //   'Circles': layerCircles(map, rc)
    // }).addTo(map)

    // the tile layer containing the image generated with gdal2tiles --leaflet ...
    L.tileLayer('{{ asset("img") }}/tree/{z}/{x}/{y}.png', {
      noWrap: true,
    }).addTo(map)
    map.addControl(new customControl());
</script>
