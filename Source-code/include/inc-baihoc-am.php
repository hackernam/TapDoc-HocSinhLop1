<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
function triggerAudio(abc) {
    var playid = abc.id.substring(4);
    document.getElementById("audio"+playid).play();
}


$(document).ready(function() {
	$("#results" ).load( "process/xuly_a_load_content.php"); //load initial records
	
	//executes code below when user click on pagination links
	$("#results").on( "click", ".pagination a", function (e){
		e.preventDefault();
		//$(".loading-div").show(); //show loading element
		var page = $(this).attr("data-page"); //get page number from link
		$("#results").load("process/xuly_a_load_content.php",{"page":page}, function(){ //get content from PHP page
			//$(".loading-div").hide(); //once done, hide loading element
		});
		
	});
});
</script>
<div id="results"><!-- content will be loaded here --></div>
