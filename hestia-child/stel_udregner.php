<!DOCTYPE html>
<html>
  <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styletilmelding.css">
  </head>
  <body onload="beregnerform.reset();">

<!--udfyldning af beregninger-->
<section class="beregning">
	
    <form id="beregnerform">
      <input id="skridtlaengde">
      <button type="button" onclick="showsize()" id="knap">Find min størrelse</button>
	</form>
	
</section>

	<!--Resultat af beregningen der er blevet indtastet-->

    <output name="result" id="stelstorrelse_output"></output>

	<!--SVG kode til cykel og lineal-->

<svg version="1.1" id="bike_x5F_measure" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="0 0 1380.04 1067.8" style="enable-background:new 0 0 1380.04 1067.8;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#002E7B;}
	.st1{fill:#00225C;}
	.st2{fill:#FFFFFF;}
	.st3{fill:#B50720;}
</style>
<g id="bike">
	<g>
		<path class="st0" d="M945.96,521.03c-140.52,0-254.85,114.33-254.85,254.85s114.33,254.84,254.85,254.84
			s254.85-114.32,254.85-254.84S1086.48,521.03,945.96,521.03z M945.96,955.37c-98.97,0-179.49-80.52-179.49-179.49
			c0-98.98,80.52-179.5,179.49-179.5c98.98,0,179.5,80.52,179.5,179.5C1125.46,874.85,1044.94,955.37,945.96,955.37z"/>
	</g>
	<g>
		<path class="st0" d="M254.85,1030.73C114.33,1030.73,0,916.41,0,775.88c0-140.53,114.33-254.85,254.85-254.85
			S509.7,635.36,509.7,775.88C509.7,916.41,395.38,1030.73,254.85,1030.73z M254.85,596.39c-98.97,0-179.49,80.52-179.49,179.49
			c0,98.97,80.52,179.49,179.49,179.49s179.49-80.52,179.49-179.49C434.34,676.91,353.82,596.39,254.85,596.39z"/>
	</g>
	<g>
		<path class="st1" d="M945.96,555.92C824.67,555.92,726,654.6,726,775.89c0,121.28,98.67,219.95,219.96,219.95
			s219.96-98.67,219.96-219.95C1165.92,654.6,1067.25,555.92,945.96,555.92z M945.96,955.37c-98.97,0-179.49-80.52-179.49-179.49
			c0-98.98,80.52-179.5,179.49-179.5c98.98,0,179.5,80.52,179.5,179.5C1125.46,874.85,1044.94,955.37,945.96,955.37z"/>
	</g>
	<g>
		<path class="st1" d="M255.34,555.92c-121.29,0-219.96,98.67-219.96,219.96c0,121.28,98.67,219.95,219.96,219.95
			S475.3,897.17,475.3,775.89C475.3,654.6,376.63,555.92,255.34,555.92z M255.34,955.37c-98.97,0-179.49-80.52-179.49-179.49
			c0-98.98,80.52-179.5,179.49-179.5c98.98,0,179.5,80.52,179.5,179.5C434.83,874.85,354.31,955.37,255.34,955.37z"/>
	</g>
	<g>
		<polygon class="st0" points="561.87,797.88 490.16,821.07 386.98,501.91 458.68,478.73 466.69,503.5 556.56,781.46 		"/>
	</g>
	<g>

			<rect x="490.68" y="499.72" transform="matrix(0.9515 -0.3075 0.3075 0.9515 -174.2941 185.4898)" class="st1" width="21.46" height="292.13"/>
	</g>
	<g>
		<g>
			<polygon class="st0" points="456.41,476.76 384.44,499.08 340.04,355.89 389.71,340.5 412.02,333.58 454.77,471.43 			"/>
		</g>
	</g>
	<g>
		<g>
			<polygon class="st1" points="454.77,471.43 432.44,478.35 389.71,340.5 412.02,333.58 			"/>
		</g>
	</g>
	<g>
		<path class="st0" d="M843.48,425.09l-4.67-15.17l-0.27-0.91l-77.29,7.58l-0.35,0.03l-387.88,38.08l29.43,114.77l-245.25,233.7
			l382.32,49.12l349.21-280.2L843.48,425.09z M517.33,773.46l-193.61-24.88l162.69-155.05l-18.56-72.41l316.77-31.09l17.02,55.3
			L517.33,773.46z"/>
	</g>
	<g>
		<g>
			<g>
				<path class="st0" d="M857.68,517.73l-14.21-74.01c31.39-6.03,45.56-19.04,47.85-23.89c-0.25-0.43-0.69-1.07-1.39-1.9
					l-45.99,9.52l3.39,10.17l-71.5,23.83l-30.2-90.62l160.44-33.2l12.68,7.71c51.01,31.03,49.85,71.33,46.99,87.21
					C958.31,473.72,916.91,506.35,857.68,517.73z"/>
			</g>
		</g>
		<g>
			<g>
				<path class="st0" d="M926.02,412.64l-6.39-29.06c-2.42-11.02,3.57-22.06,14.04-26.29c8.25-3.34,15.34-7.56,21.45-12.76
					c8-6.82,19.63-7.28,28.18-1.17l24.52,17.52c11.67,8.34,12.94,25.26,2.59,35.19c-15.04,14.43-33.14,25.54-54.15,33.23
					C943.24,434.06,929,426.18,926.02,412.64z"/>
			</g>
		</g>
	</g>
	<g>
		<path class="st0" d="M217.85,301.4c6.85,31.79,49.19,52.4,102.9,69.43c0.26,0.08,0.53,0.16,0.79,0.22
			c43.93,10.6,83.29,1.49,120.34-17.56c0.3-0.16,0.6-0.33,0.89-0.52c26.55-17.71,56.19-22.78,82.17-36.78
			c7.32-3.95,6.23-14.78-1.69-17.31c-58.09-18.59-166.68-1.94-295.6-8.99C221.36,289.54,216.52,295.26,217.85,301.4z"/>
	</g>
	<g>
		<path class="st1" d="M797.15,469.14l-360.76,34.5l21.77,83.89L276.73,758.36L529.85,791l294.58-235.66L797.15,469.14z
			 M517.33,773.46l-193.61-24.88l162.69-155.05l-18.56-72.41l316.77-31.09l17.02,55.3L517.33,773.46z"/>
	</g>
	<g>
		<g>
			<g>
				<path class="st1" d="M966.67,425.08c-0.21,2.86-0.56,5.38-0.93,7.47c-7.43,41.16-48.83,73.81-108.07,85.18l-14.21-74.02
					c1.17-0.22,2.3-0.46,3.43-0.71l10.78,56.18c52.85-10.15,91.52-37.23,104.5-72.19C963.69,426.39,965.18,425.74,966.67,425.08z"/>
				<path class="st1" d="M966.67,425.08c-1.48,0.67-2.98,1.31-4.5,1.91c1.57-4.21,2.77-8.55,3.57-12.98
					c0.19-1.04,0.37-2.18,0.53-3.43C966.95,415.99,966.96,420.9,966.67,425.08z"/>
			</g>
		</g>
		<g>
			<g>
				<path class="st1" d="M1010.41,396.07c-12.5,11.98-27.11,21.68-43.74,29.01c0.29-4.18,0.28-9.09-0.39-14.5
					c0.15-1.25,0.29-2.61,0.39-4.05c16.63-7.33,31.24-17.03,43.74-29.01c2.23-2.14,3.92-4.6,5.07-7.23
					C1019.2,378.75,1017.64,389.12,1010.41,396.07z"/>
				<path class="st1" d="M966.67,406.53c-0.1,1.44-0.24,2.79-0.39,4.05c-0.15-1.19-0.34-2.4-0.56-3.63
					C966.03,406.82,966.35,406.68,966.67,406.53z"/>
				<path class="st1" d="M966.67,425.08c-1.48,0.67-2.98,1.31-4.5,1.91c1.57-4.21,2.77-8.55,3.57-12.98
					c0.19-1.04,0.37-2.18,0.53-3.43C966.95,415.99,966.96,420.9,966.67,425.08z"/>
			</g>
		</g>
	</g>
	<g>
		<path class="st1" d="M524.93,316.18c-25.98,14.01-55.62,19.07-82.18,36.78c-0.28,0.2-0.58,0.37-0.88,0.52
			c-37.05,19.06-76.4,28.17-120.33,17.57c-0.27-0.07-0.53-0.14-0.8-0.22c-53.71-17.03-96.04-37.64-102.9-69.42
			c-0.83-3.81,0.72-7.45,3.5-9.59c12.75,26.21,51.56,44.21,99.39,59.37c0.26,0.08,0.52,0.15,0.8,0.22
			c43.92,10.6,83.28,1.49,120.33-17.57c0.31-0.15,0.6-0.33,0.88-0.52c25.39-16.93,53.6-22.3,78.73-34.99
			c0.59,0.17,1.18,0.36,1.76,0.55C531.16,301.41,532.25,312.24,524.93,316.18z"/>
	</g>
</g>
<g id="ruler">
	<rect x="1216.05" width="78.67" height="1029.93"/>
	<g id="ruler_x5F_indicators">
		<rect x="1242.31" y="970.93" class="st2" width="52.02" height="5.89"/>
		<rect x="1265.87" y="983.69" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="996.45" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="1009.21" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="1021.97" class="st2" width="28.47" height="5.89"/>
		<rect x="1242.31" y="906.76" class="st2" width="52.02" height="5.89"/>
		<rect x="1265.87" y="919.52" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="932.28" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="945.04" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="957.8" class="st2" width="28.47" height="5.89"/>
		<rect x="1242.31" y="842.58" class="st2" width="52.02" height="5.89"/>
		<rect x="1265.87" y="855.34" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="868.1" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="880.86" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="893.62" class="st2" width="28.47" height="5.89"/>
		<rect x="1242.31" y="778.4" class="st2" width="52.02" height="5.89"/>
		<rect x="1265.87" y="791.16" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="803.92" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="816.68" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="829.44" class="st2" width="28.47" height="5.89"/>
		<rect x="1242.31" y="714.23" class="st2" width="52.02" height="5.89"/>
		<rect x="1265.87" y="726.99" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="739.75" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="752.51" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="765.27" class="st2" width="28.47" height="5.89"/>
		<rect x="1242.31" y="650.05" class="st2" width="52.02" height="5.89"/>
		<rect x="1265.87" y="662.81" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="675.57" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="688.33" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="701.09" class="st2" width="28.47" height="5.89"/>
		<rect x="1242.31" y="585.87" class="st2" width="52.02" height="5.89"/>
		<rect x="1265.87" y="598.63" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="611.39" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="624.15" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="636.91" class="st2" width="28.47" height="5.89"/>
		<rect x="1242.31" y="521.69" class="st2" width="52.02" height="5.89"/>
		<rect x="1265.87" y="534.46" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="547.22" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="559.98" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="572.74" class="st2" width="28.47" height="5.89"/>
		<rect x="1242.31" y="457.52" class="st2" width="52.02" height="5.89"/>
		<rect x="1265.87" y="470.28" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="483.04" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="495.8" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="508.56" class="st2" width="28.47" height="5.89"/>
		<rect x="1242.31" y="393.34" class="st2" width="52.02" height="5.89"/>
		<rect x="1265.87" y="406.1" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="418.86" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="431.62" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="444.38" class="st2" width="28.47" height="5.89"/>
		<rect x="1242.31" y="329.16" class="st2" width="52.02" height="5.89"/>
		<rect x="1265.87" y="341.92" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="354.69" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="367.45" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="380.21" class="st2" width="28.47" height="5.89"/>
		<rect x="1242.31" y="264.99" class="st2" width="52.02" height="5.89"/>
		<rect x="1265.87" y="277.75" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="290.51" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="303.27" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="316.03" class="st2" width="28.47" height="5.89"/>
		<rect x="1242.31" y="200.81" class="st2" width="52.02" height="5.89"/>
		<rect x="1265.87" y="213.57" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="226.33" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="239.09" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="251.85" class="st2" width="28.47" height="5.89"/>
		<rect x="1242.31" y="136.63" class="st2" width="52.02" height="5.89"/>
		<rect x="1265.87" y="149.39" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="162.16" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="174.92" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="187.68" class="st2" width="28.47" height="5.89"/>
		<rect x="1242.31" y="72.46" class="st2" width="52.02" height="5.89"/>
		<rect x="1265.87" y="85.22" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="97.98" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="110.74" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="123.5" class="st2" width="28.47" height="5.89"/>
		<rect x="1242.31" y="8.28" class="st2" width="52.02" height="5.89"/>
		<rect x="1265.87" y="21.04" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="33.8" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="46.56" class="st2" width="28.47" height="5.89"/>
		<rect x="1265.87" y="59.32" class="st2" width="28.47" height="5.89"/>
	</g>
</g>
<polygon id="indicator" class="st3" points="1310.21,1027.49 1380.04,1067.8 1380.04,987.17 "/>
</svg>
  </body>

<!--Scriptet til vores udregner--> 

   <script>
   
   function showsize() {
  var skridtlaengde = document.getElementById("skridtlaengde").value;
  var stelstorrelse = 0.66 * skridtlaengde;
  var hojde = stelstorrelse * -12.7604;
  var placering = "translate(0px, " + hojde + "px)";
  
  document.getElementById("indicator").style.transform = placering;
  document.getElementById("stelstorrelse_output").innerHTML = "Din stelstørelse er " + Math.round(stelstorrelse) + " cm";
}

   
   </script>

</html>
