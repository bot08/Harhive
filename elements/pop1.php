
<div id="snackbar">Сайт использует куки</div>
  <script>
  $(document).ready(function(){
    var x = document.getElementById("snackbar");
    x.className = "show shadow";
    setTimeout(function(){ x.className = x.className.replace("show shadow", ""); }, 2970);
  });
  </script>