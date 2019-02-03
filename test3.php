<html>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
    <head>
        <script language="javascript">
            function show (text){
				if(document.getElementById('textbox').value!==""){
					alert(document.getElementById('textbox').value);
				}else{
					alert("โปรดทำการกรอกข้อมูลให้ครบ");
				}
            }
        </script>
    </head>
    <body>
		<form name="Frm_test" id="Frm_test" action="" method="post">
			<input type="textbox" name="textbox" id="textbox" autofocus/>
			<input type="submit" name="button" value="OK" onclick="show(document.getElementById('textbox').value)"/>
		<form>
    </body>
</html>