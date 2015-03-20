var xmlHttp

function showInfo() {
    var name
    var grade 
    name = document.getElementById("name").value 
    grade = document.getElementById("grade").value
    if (name.length == 0) {
        document.getElementById("result").innerHTML = ""
        return
    }
    xmlHttp = GetXmlHttpObject() 
    if (xmlHttp == null) {
        alert("浏览器不支持请求！！！") 
        return
    }
    var url = "search.php"
    url = url + "?name=" + name 
    url = url + "&grade=" + grade 
    url = url + "&sid=" + Math.random() 
    xmlHttp.onreadystatechange = stateChanged 
    xmlHttp.open("GET", url, true) 
    xmlHttp.send(null)
}

function stateChanged() {
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
        document.getElementById("result").innerHTML = xmlHttp.responseText
    }
}

function GetXmlHttpObject() {
    var xmlHttp = null;
    try {
        // Firefox, Opera 8.0+, Safari
        xmlHttp = new XMLHttpRequest();
    } catch(e) {
        //Internet Explorer
        try {
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch(e) {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlHttp;
}