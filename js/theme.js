

function btnThemeclick(estilo)
{
    debugger;
    var temacssLinkElem = $("#temacss");
    temacssLinkElem.remove();
    var nuevoTemacssLinkElem = loadCss("css/"+ estilo + ".css","temacss");
    var headsElem = document.getElementsByTagName("head");
    var headElem = headsElem[0];
    headElem.appendChild(nuevoTemacssLinkElem);

}

loadCss = function(filename,id) {
    var elem=document.createElement("link");
    elem.id=id;
    elem.rel="stylesheet";
    elem.type="text/css";
    elem.href=filename;
    return elem;
}
