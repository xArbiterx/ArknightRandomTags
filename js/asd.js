var checked = 0;
let tags = [];

function loadSy()
{
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200)
        {
            var sz = this.responseText;
            sz = JSON.parse(sz);
            document.getElementById("bt1").innerHTML=sz[0];
            document.getElementById("bt2").innerHTML=sz[1];
            document.getElementById("bt3").innerHTML=sz[2];
            document.getElementById("bt4").innerHTML=sz[3];
            document.getElementById("bt5").innerHTML=sz[4];

        }
    };
    xhttp.open("POST","tags.php",true);
    xhttp.send();
    $('.gck').removeClass('btn-success').removeClass('active').addClass('btn-default');
    checkedTags=[];
}



let checkedTags = [];
$(document).on("click", ".gck", function () {
    let checked = $(this).hasClass("btn-success");
    let tag = $(this).text();
    
    if (checked) {
        checkedTags = checkedTags.filter(function (v, _, __) {
            return v !== tag;
        });
    } else {
        if (checkedTags.length >= 3) {
        //    alert("无法选择更多标签：最多3个。");
            $this.removeClass('active');//故意报错让按钮弹出 无意义
            return;
        } else {
            checkedTags.push(tag);
        }
    }
    $(this).toggleClass("btn-default btn-success");
});

/*<div id="err" class="alert alert-warning alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
</div> 备用 */
function goSy()
{
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200)
        {
            var gy = this.responseText;
        //    gy = JSON.parse(gy);
            alert(gy);
        }
    };
    xhttp.open("POST","zuosi.php",true);
    xhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');//响应报头
    var yashi = "yashi="+JSON.stringify(checkedTags);
    xhttp.send(yashi);
}
