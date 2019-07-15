<div id="recent-widget"></div>
<script type="text/javascript">
httpRequest("recent-widget.php", showrecent);
function showrecent(WIDGET){
 d = document.getElementById('recent-widget');
 d.innerHTML = WIDGET;
}

function httpRequest(url, callback) {
  var httpObj = false;
  if (typeof XMLHttpRequest != 'undefined') {
    httpObj = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    try{
      httpObj = new ActiveXObject('Msxml2.XMLHTTP');
    } catch(e) {
      try{
        httpObj = new ActiveXObject('iMicrosoft.XMLHTTP');
      } catch(e) {}
    }
  }
  if (!httpObj) return;
  httpObj.onreadystatechange = function() {
    if (httpObj.readyState == 4) { // when request is complete
      callback(httpObj.responseText);
    }
  };
  httpObj.open('GET', url, true);
  httpObj.send(null);
}
</script>