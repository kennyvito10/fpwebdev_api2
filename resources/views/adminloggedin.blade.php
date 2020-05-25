<!doctype html>
<html>

<head>

<link rel="stylesheet" type="text/css" href="{{ url('styles/bootstrap4/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{url('styles/tabs_style.css')}}">
<script>
 function change_tab(id)
 {
   document.getElementById("page_content").innerHTML=document.getElementById(id+"_desc").innerHTML;
   document.getElementById("page1").className="notselected";
   document.getElementById("page2").className="notselected";
   document.getElementById("page3").className="notselected";
   document.getElementById(id).className="selected";
 }
</script>
</head>
<body>
  <a href="{{ url('/logout') }}"><button  class="btn btn-primary">Logout</button></a>
  <div id="main_content">

 <li class="selected" id="page1" onclick="change_tab(this.id);">Page1</li>
 <li class="notselected" id="page2" onclick="change_tab(this.id);">Page2</li>
 <li class="notselected" id="page3" onclick="change_tab(this.id);">Page3</li>
 
 <div class='hidden_desc' id="page1_desc">
 <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
</div>

 <div class='hidden_desc' id="page2_desc">
  <h2>Page 2</h2>
  Hello this is Page 2 description and this is just a sample text .This is the demo of Multiple Tab In Single Page Using JavaScript and CSS.
 </div>
 
 <div class='hidden_desc' id="page3_desc">
  <h2>Page 3</h2>
  Hello this is Page 3 description and this is just a sample text .This is the demo of Multiple Tab In Single Page Using JavaScript and CSS. 
  Hello this is Page 3 description and this is just a sample text .This is the demo of Multiple Tab In Single Page Using JavaScript and CSS.

</div>
 
 <div id="page_content">
 <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
 </div>
 
</div>
 
</body>
</html>