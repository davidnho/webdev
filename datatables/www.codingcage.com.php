<!-- http://www.codingcage.com/2015/10/how-to-use-jquery-bootstrap-datatables.html -->
<!DOCTYPE html>
<html lang="en">
<head>
       
<title>How to use jQuery Bootstrap DataTables</title>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
<style>
td
{
 font-family:Verdana, Geneva, sans-serif;
}
</style>
</head>
   
<body>
    
    <br />
                                
   <div class="container">a
   <table id="example"></table>
   </div>                             
               
         
<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
<script type="text/javascript" charset="utf-8">
$(document).ready(function() 
{
 $('#example').dataTable( {
        "aaData": [
   ["PHP Data Object | PDO","http://www.codingcage.com/search/label/PDO"],
   ["Object Oriented PHP","http://www.codingcage.com/search/label/PHP OOP"],
   ["jQuery Tutorials","http://www.codingcage.com/search/label/jQuery"],
   ["Ajax Tutorials","http://www.codingcage.com/search/label/Ajax"],
   ["CRUD Tutorials","http://www.codingcage.com/search/label/CRUD"],
   ["Pagination Tutorials","http://www.codingcage.com/search/label/Pagination"],
   ["PHP MySQLi Tutorials","http://www.codingcage.com/search/label/MySQLi"],
   ["HTML5 Tutorials","http://www.codingcage.com/search/label/HTML5"],
   ["Pagination Tutorials","http://www.codingcage.com/search/label/Pagination"],
   ["PHP MySQLi Tutorials","http://www.codingcage.com/search/label/MySQLi"],
   ["HTML5 Tutorials","http://www.codingcage.com/search/label/HTML5"]
   ],
        "columns": [
            { "title": "Article Title" },
            { "title": "Tutorial Link" }
        ]
    } );   
});
</script>
        
<script type="text/javascript">
  $('#example')
 .addClass('table table-striped table-bordered');
</script>


</body>
</html>