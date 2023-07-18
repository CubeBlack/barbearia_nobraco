function getConteudo(url){
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", url, false ); // false for synchronous request
    xmlHttp.send( null );
    ;

    document.getElementById('conteudo').innerHTML = xmlHttp.responseText;
}