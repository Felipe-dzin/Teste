<meta charset="utf-8">

<h2>Cotação do Dólar no momento</h2>

<div>
	<button id="cotar">Valor neste momento</button>
</div>

<div>
	<p>Compra: <span id="compra"></span></p>
	<p>Venda: <span id="venda"></span></p>
	<p>Valor Máximo: <span id="maximo"></span></p>
	<p>Valor Mínimo: <span id="minimo"></span></p>
</div>

<script>
	

	document.querySelector("#cotar").addEventListerner('click',function () {
		const opcoes = {
			method: "GET",
			node:"cors",
			cache:"default"
		}
		fetch(`https://economia.awesomeapi.com.br/json/last/USD-BRL`, opcoes)
		.then(
			response => { response.json()
				.then(data => {
				document.querySelector("#compra").textContent = data['USDBRL']['bid'];
				document.querySelector("#venda").textContent = data['USDBRL']['ask'];
				document.querySelector("#maximo").textContent = data['USDBRL']['high'];
				document.querySelector("#minimo").textContent = data['USDBRL']['low'];	
				});
			}
			)
	})
</script>