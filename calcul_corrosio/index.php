<!doctype html><html><head>
	<meta charset=utf8>
	<title>Càlcul corrosió</title>
	<script>
		function init(){
			in_out();
		}

		function in_out() {
			//llegeix inputs i escriu output
			var H2S = parseFloat(document.querySelector('#H2S').value);
			var H = parseFloat(document.querySelector('#H').value);
			var T = parseFloat(document.querySelector('#T').value);
			var C = calcula_corrosio(H2S,H,T);
			document.querySelector('#resultat').innerHTML=format(C,10);//6 decimals
		}

		/*
			H2S: concentracio H2S (ppm)
			H: humitat relativa (-)
			T: temperatura (K)
		*/
		function calcula_corrosio(H2S,H,T) {
			var A = 207750; // unitless
			var R = 8.314472;  // J/(K·mol)
			var corrosio = A * Math.sqrt(H2S) * ((0.1602*H-0.1355)/(1-0.977*H)) * Math.exp(-45000/(R*T));
			return corrosio;
		}

		/* return 3.999,4 instead of 3999.4 */
		function format(number,decimals) {
			decimals=decimals||2;
			var str=new Intl.NumberFormat('en-EN',{maximumFractionDigits:decimals}).format(number);
			return str;
		}
	</script>
	<style>
		#root {
			padding-left:10px;
		}
		#root b.input {
			display:inline-block;
			width:200px;
		}
		#root #inputs {
			font-size:18px;
		}
		#root #inputs input {
			padding:0.5em;
			font-size:20px;
			width:100px;
		}
		button#calcula {
			padding:0.5em 100px;
			display:block;
			width:100%;
			max-width:400px;
			font-size:20px;
		}
		#resultat_container {
			font-size:32px;
			padding:1em 0;
		}
		#formula {
			border:1px solid #ccc;
			padding:2px;
		}
	</style>
</head><body onload=init()>
<h1>Càlcul corrosió</h1>

<div id=root>

<ul id=inputs>
	<li>
		<b class=input> [H<sub>2</sub>S] (ppm)</b> <input id=H2S value=125 type=number step=1 min=0 onchange=in_out()>
	</li>
	<li>
		<b class=input> Humitat (-)</b> <input id=H value=0.96 type=number max=1 step=0.01 min=0 onchange=in_out()>
	</li>
	<li>
		<b class=input> Temperatura (K)</b> <input id=T value=299 type=number step=1 min=0 onchange=in_out()>
	</li>
</ul>

<div>
	<div>
		<button id=calcula onclick=in_out()>Calcula</button>
	</div>
	<div id=resultat_container>
		Corrosió: <span id=resultat>0</span> mm/any
	</div>
</div>

<div id=formula>
	<div> Fórmula: </div>
	<div style="background:#eee">
		C = A·[H<sub>2</sub>S]<sup>0.5</sup> · (0.1602·H-0.1355)/(1-0.977·H) · e<sup>(-45000/(R·T))</sup>
	</div>
	<div> on: </div>
	<ul>
		<li>C: corrosió (mm/any)
		<li>A: 207750 constant empírica (no unitat)
		<li>[H<sub>2</sub>S]: concentració àcid sulfhídric (ppm)
		<li>H: humitat relativa (-)
		<li>R: 8.314472 constant dels gasos (J/(mol·K))
		<li>T: Temperatura (K)
	</ul>
</div>

</div>
