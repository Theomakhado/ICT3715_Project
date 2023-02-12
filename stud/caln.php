<?php 
$title = "Student Calendar";
include('header.php');
?>

<!-- intro area -->
<div id="intro">
<br><br><br>
<br><br>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="brand">
<div class="text-center" style="font-size: 14pt; color: black;">
<h3>Student Calendar</h3>
<div class="shadow"></div>
<div class="hideSkipLink">
</div>
<div class="main">

<div class="space"></div>

<div id="dp"></div>

<script type="text/javascript">
var dp = new DayPilot.Month("dp");

// view
dp.startDate = new DayPilot.Date("2023-02-01");  
dp.moveBy = 'Full';
dp.showToolTip = false;

// bubble, with async loading
dp.bubble = new DayPilot.Bubble({
onLoad: function(args) {
var ev = args.source;
args.async = true;  // notify manually using .loaded()

// simulating slow server-side load
setTimeout(function() {
args.html = "<div style='font-weight:bold'>" + ev.text() + "</div><div>Start: " + ev.start().toString("MM/dd/yyyy HH:mm") + "</div><div>End: " + ev.end().toString("MM/dd/yyyy HH:mm") + "</div><div>Id: " + ev.id() + "</div>";
args.loaded();
}, 500);

}
});

// no events at startup, we will load them later using loadEvents()
//dp.events.list = [];

dp.onBeforeEventRender = function(args) {
};

dp.onBeforeCellRender = function(args) {
if (args.cell.start.getDayOfWeek() === 6 || args.cell.start.getDayOfWeek() === 0) {
args.cell.backColor = "#eee";
}
};

dp.onEventMoved = function (args) {
$.post("backend_move.php",
{
id: args.e.id(),
start: args.newStart.toString(),
end: args.newEnd.toString()
},
function(data) {
dp.message("Moved: " + data.message);
}
);        
};

dp.onEventResized = function (args) {
$.post("backend_move.php",
{
id: args.e.id(),
start: args.newStart.toString(),
end: args.newEnd.toString()
},
function(data) {
dp.message("Moved: " + data.message);
}
);        
};

// event creating
dp.onTimeRangeSelected = function (args) {
var name = prompt("New event name:", "Event");
dp.clearSelection();
if (!name) return;

$.post("backend_create.php", 
{
start: args.start.toString(),
end: args.end.toString(),
name: name
}, 
function(data) {
var e = new DayPilot.Event({
start: args.start,
end: args.end,
id: data.id,
text: name
});
dp.events.add(e);

dp.message(data.message);
});
};

dp.onEventClick = function(args) {
alert("clicked: " + args.e.id());
};

dp.init();

loadEvents();

function loadEvents() {
$.post("backend_events.php", 
function(data) {
dp.events.list = data;
dp.update();
}
);
}
</script>

</div>
<div class="clear">	
<br><br>
</div></div>
</div>
</div>
</div>
<br><br> 
</div>
</div>

<?php include('footer.php');?>