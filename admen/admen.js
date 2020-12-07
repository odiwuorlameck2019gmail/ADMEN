animating_all_anchors=document.querySelectorAll("a");
var colors=["red","green","blue","black","white"];
function changecolor()
{ 
    
    for(var i=0;i<=colors.length;i++)
    {
        animating_all_anchors.style(colors[i]);

    }
}
function count_color()
{
    setInterval(changecolor,2000);
}