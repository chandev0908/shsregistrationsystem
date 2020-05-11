<div id="dvCountDown" style = "display:none">
  <h1>Your Sucessfully Registered</h1>
You will be redirected after <span id = "lblCount"></span>&nbsp;seconds.
</div>
<script type="text/javascript">
function DelayRedirect() {
    var seconds = 5;
    var dvCountDown = document.getElementById("dvCountDown");
    var lblCount = document.getElementById("lblCount");
    dvCountDown.style.display = "block";
    lblCount.innerHTML = seconds;
    setInterval(function () {
        seconds--;
        lblCount.innerHTML = seconds;
        if (seconds == 0) {
            dvCountDown.style.display = "none";
            window.location = "./index.php";

        }
    }, 1000);
}
window.onload = DelayRedirect;
</script>
