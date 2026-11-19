<script class="text/javascript">
    $(document).ready(function(){
        $('#inputnmAmount,#inputnmRequestAmount').keyup(function(event) {

		  	$(this).val(function(index, value) {
		      	value = value.replace(/,/g,'');
		      	return numberWithCommas(value);
		  	});
		});

		function numberWithCommas(x){
		    var parts = x.toString().split(".");
		    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		    return parts.join(".");
		}
    })
</script>