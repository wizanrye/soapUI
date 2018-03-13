<html>
	<head>
		<title>Soap Tutorial - Currency Converter</title>
		<script src="<?php echo base_url('assets/jquery.min.js'); ?>"></script>
	</head>
	<body>
		<marquee behavior="alternate"><h1>Hi to my Soap Ui Study Notes !</h1></marquee>
		<?php //echo form_open("soap/convert1") ?>
		<form id="theForm" name="theForm" method="post" action="">
			<center>
				<h2>Currency Converter (Outdated Currency Converter)</h2>
				<table cellpadding="2" cellspacing="2" border="0">
					<tr>
						<td>From</td>
						<td><input type="text" name="conv1" id="conv1"></td>
					</tr>
					<tr>
						<td>To</td>
						<td><input type="text" name="conv2" id="conv2"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="submit1" id="submit1"></td>
					</tr>
					<tr>
						<td>Result:</td>
						<td id="resultVar"><?php //echo isset($result) ? $result : ''; ?></td>
					</tr>
				</table>
			</center>
		</form>

		<form id="theForm2" name="theForm2" method="post" action="">
			<center>
				<h2>Currency Converter (Free Trial)</h2>
				<table cellpadding="2" cellspacing="2" border="0">
					<tr>
						<td>From</td>
						<td><input type="text" name="conv12" id="conv12"></td>
					</tr>
					<tr>
						<td>To</td>
						<td><input type="text" name="conv22" id="conv22"></td>
					</tr>
					<tr>
						<td>Amount</td>
						<td><input type="text" name="conv32" id="conv32"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="submit12" id="submit12"></td>
					</tr>
					<tr>
						<td>Result:</td>
						<td id="resultVar2"><?php //echo isset($result) ? $result : ''; ?></td>
					</tr>
				</table>
			</center>
		</form>

		<form id="theForm3" name="theForm3" method="post" action="">
			<center>
				<h2>Currency Converter (Free with No Trial)</h2>
				<table cellpadding="2" cellspacing="2" border="0">
					<tr>
						<td>From</td>
						<td><input type="text" name="conva" id="conva"></td>
					</tr>
					<tr>
						<td>To</td>
						<td><input type="text" name="convb" id="convb"></td>
					</tr>
					<tr>
						<td>Date</td>
						<td><input type="date" name="convc" id="convc"></td>
					</tr>
					<tr>
						<td>Amount</td>
						<td><input type="number" name="convd" id="convd"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="submite" id="submite"></td>
					</tr>
					<tr>
						<td>Result:</td>
						<td id="resultVar3"><?php //echo isset($result) ? $result : ''; ?></td>
					</tr>
				</table>
			</center>
		</form>
		<?php //echo form_close(); ?>
		<hr>
		<p style="text-align: center;"><b>Note:</b>&nbsp;Kindly uncomment the extension=php_soap.dll on php.ini to make the soap workable</p>
		<p style="text-align: center;"><b>Note:</b>&nbsp;If the web service does not display correct data it means web service not available</p>

		<script>
			/*Using Javascript JQuery AJAX To fetch data*/
			$("#theForm").submit(function(e){
    		e.preventDefault();

    			var a = $('#conv1').val();
    			var b = $('#conv2').val();

	    	//	var url = "<?php //echo base_url('index.php/soap/convert1'); ?>/";
	    		var data = 'conv1='+a+'&conv2='+b;
	    		$('#resultVar').html("Loading...");

	    		$.post('<?php echo base_url("index.php/soap/convert1"); ?>',data+'&action=submit&ajaxerequest=1',
	    			function(msg){
	    				if(msg){
	    					$('#resultVar').html(msg);
	    				}
	    				else{
	    					alert('Something went wrong !');
	    					('#resultVar').html("Something went wrong!");
	    				}
	    			}
	    		);

	    		return false;
			});

			$("#theForm2").submit(function(e){
    		e.preventDefault();

    			var a = $('#conv12').val();
    			var b = $('#conv22').val();
    			var c = $('#conv32').val();

	    	//	var url = "<?php //echo base_url('index.php/soap/convert1'); ?>/";
	    		var data = 'conv12='+a+'&conv22='+b+'&conv32='+c;
	    		$('#resultVar2').html("Loading...");

	    		$.post('<?php echo base_url("index.php/soap/convert2"); ?>',data+'&action=submit&ajaxerequest=1',
	    			function(msg){
	    				if(msg){
	    					var n = msg.Result;
	    					$('#resultVar2').html(n.toFixed(2));
	    				}
	    				else{
	    					alert('Something went wrong !');
	    					('#resultVar2').html("Something went wrong!");
	    				}
	    			},
	    			"json"
	    		);

	    		return false;
			});

			$("#theForm3").submit(function(e){
    		e.preventDefault();

    			var a = $('#conva').val();
    			var b = $('#convb').val();
    			var c = $('#convc').val();
    			var d = $('#convd').val();

	    	//	var url = "<?php //echo base_url('index.php/soap/convert1'); ?>/";
	    		var data = 'conva='+a+'&convb='+b+'&convc='+c+'&convd='+d;
	    		$('#resultVar3').html("Loading...");

	    		$.post('<?php echo base_url("index.php/soap/convert3"); ?>',data+'&action=submit&ajaxerequest=1',
	    			function(msg){
	    				if(msg){    			
	    					var a = parseInt(msg);
	    					$('#resultVar3').html(a.toFixed(2));
	    				}
	    				else{
	    					alert('Something went wrong !');
	    					('#resultVar3').html("Something went wrong!");
	    				}
	    			},
	    			"json"
	    		);

	    		return false;
			});
		</script>
	</body>
</html>