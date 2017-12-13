<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
function recp(id) {
  $('#myStyle').load('hello.php?id=' + id);
}
</script>



<div id='myStyle'>
	<a href="#" onClick="recp(1)" > One   </a><br>
<a href="#" onClick="recp(2)" > Two   </a><br>
<a href="#" onClick="recp(3)" > Three </a><br>	
</div>

</body>
</html> -->

         <html>
          <head>
          <script language="javascript" type="text/javascript">
          function showentry()
             {
             if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                }
             else
                {// code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
            xmlhttp.onreadystatechange=function()
                {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                   {
                      document.getElementById("right").innerHTML=xmlhttp.responseText;
                   }
                }
            xmlhttp.open("GET","hello.php",true);//whatever the contents of file                                       details.php displayed in right div
            xmlhttp.send();
            }
             </script>
             <style type="text/css">
                #left{width:500px;height:100%; float:left;}
                #right{width:500px; float:left;}
             </style>
           </head>
       <div id="left">
      <input type="button" name="GET" value="show" onclick="showentry()"/>
        </div>
        <div id="right">
        </div>
        </html>