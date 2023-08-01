<pre>
<?php
$DtInicio = date("m-d-Y", strtotime("-7 days"));
$DtFinal = date("m-d-Y");

$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $DtInicio . '\'&@dataFinalCotacao=\'' . $DtFinal . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url), true);

//var_dump($dados);

$cotacao = $dados["value"][0]["cotacaoCompra"];

echo "A cotação foi $cotacao";
?>
</pre>