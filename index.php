<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Landmarks in Thailand</title>
<style type="text/css">
body {
    background-color: #B6DFFF;
    margin-left: 0px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
}
	
.button {
		background: white;
		border: none;
		width: 100%;
		height: 30px;
}
.search {
		border: none;
		width: 100%;
	height: 30px;
	}
	
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #04AA6D;
    color: white;
	}
</style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td bgcolor="#FFFFFF"><img src="banner.png" width="1519" height="350" alt=""/>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </tbody>
        </table>
        <table  width="70%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="white" id="customers">
          <tr>
          <th width="10%">รหัส</th>
          <th width="15%">ชื่อ</th>
          <th width="15%">จังหวัด</th>
          <th width="60%">รายละเอียด</th>
        </tr>
        <tbody id="table">
        </tbody>
    </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td><img src="footer.png" width="1519" height="150" alt=""/></td>
            </tr>
          </tbody>
      </table></td>
    </tr>
  </tbody>
</table>

<script>

        let xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              let data = JSON.parse(this.responseText);
              console.log(data);
						  for	(let i = 0; i < data.length; i++){
                document.getElementById("table").innerHTML +=`

<table align="center">
                <tr align="center">
      <td>${data[i].id}</td>
      <td>${data[i].name}</td>
      <td>${data[i].province}</td>
      <td>${data[i].detail}</td>
    </tr>
</table>
                `;
						}
                        }
            }
            xhttp.open("GET",'api.php',true);
            xhttp.send();
        
    </script>
</body>
</html>
