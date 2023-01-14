https://kawalcovid19.harippe.id/api/summary

<?php

$data = file_get_contents('https://kawalcovid19.harippe.id/api/summary');
$data_js = json_decode($data, true);


$confirmed = implode(" ", $data_js['confirmed']);
$recovered = implode(" ", $data_js['recovered']);
$deaths = implode(" ", $data_js['deaths']);
$activeCare = implode(" ", $data_js['activeCare']);
$metadata = implode(" ", $data_js['metadata']);

echo "<br>";
echo "<br>";
echo $confirmed;
echo "<br>";
echo $recovered;
echo "<br>";
echo $deaths;
echo "<br>";
echo $activeCare;
echo "<br>";
echo $metadata;
echo "<br>";


echo "<br>";
echo "<br>";

foreach ($data_js['confirmed'] as $d) {
	echo 'confirmed = '.$d.'<br>';
}
foreach ($data_js['recovered'] as $d) {
	echo 'recovered = '.$d.'<br>';
}
foreach ($data_js['deaths'] as $d) {
	echo 'deaths = '.$d.'<br>';
}
foreach ($data_js['activeCare'] as $d) {
	echo 'activeCare = '.$d.'<br>';
}
foreach ($data_js['metadata'] as $d) {
	echo 'lastUpdatedAt = '.$d.'<br>';
}



?>

<div id="data">
	
</div>



<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript">
	$.getJSON("https://kawalcovid19.harippe.id/api/summary",function(data){
		console.log(data);
		var confirmed = data.confirmed.value;
		var recovered = data.recovered.value;
		var deaths = data.deaths.value;
		var activeCare = data.activeCare.value;
		var metadata = data.metadata.value;

	$('#data').append(`
		`+data.confirmed.value+`
		`+data.recovered.value+`
		`+data.deaths.value+`
		`+data.activeCare.value+`
		`+data.metadata.lastUpdatedAt+`
	`);


	});
</script>