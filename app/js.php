
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://yastatic.net/jquery/3.3.1/jquery.min.js"></script>   
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->


<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>  -->
<script type="text/javascript">
$(document).ready(function()
{
$(".form-select").change(function()
{
var figure_id=$(this).val();
if (figure_id!='') {
$('.button_block').prop('disabled', false);
} else {
$('.button_block').prop('disabled', true);
};

var dataString = 'figure_id='+ figure_id;

$.ajax
({
type: "POST",
url: "params.php",
data: dataString,
cache: false,
success: function(html)
{
console.log(html);
$(".params").html(html);

} 
});

});

});
</script>

</script>
