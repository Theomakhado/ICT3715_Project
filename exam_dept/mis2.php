<?php
$title = "MIS Report 2";
include('header.php');
?>

<script type="text/javascript">
//STEP 2 - Chart Data
const chartData = [{
"label": "MAT2612",
"value": "290"
}, {
"label": "ICT3722",
"value": "260"
}, {
"label": "CHE2613",
"value": "180"
}, {
"label": "ELE2561",
"value": "140"
}, {
"label": "ICT1117",
"value": "115"
}, {
"label": "ENG1017",
"value": "100"
}, {
"label": "ENG1012",
"value": "30"
}, {
"label": "ICT1120",
"value": "30"
}];

//STEP 3 - Chart Configurations
const chartConfig = {
type: 'column2d',
renderAt: 'chart-container',
width: '100%',
height: '700',
dataFormat: 'json',
dataSource: {
// Chart Configuration
"chart": {
"caption": "Top Module Submissions",
"xAxisName": "Module",
"yAxisName": "File Uploads",
"numberSuffix": "",
"theme": "gammel",
},
// Chart Data
"data": chartData
}
};
FusionCharts.ready(function(){
var fusioncharts = new FusionCharts(chartConfig);
fusioncharts.render();
});

</script>


<!-- intro area -->
<div id="intro">
<br><br><br>
<br><br>
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="brand">
<div class="text-center" style="color: black;">
<h1>MIS Report 2</h1>
<div id="printSection" >
<div id='chart-container'>
My Chart will show up here!!!
</div>
<p><br><br><br>
<input class="btn btn-default btn-lg" type='button' value='Print Data' onclick="PrintDoc();"/>
<input class="btn btn-default btn-lg" type='button' value='Print Preview' onclick="PrintPreview();"/></p>
</div>
</div>
</div>
</div>
</div>
</div>

<?php include('footer.php');?>