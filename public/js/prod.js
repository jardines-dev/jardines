<script>
 
// 1) Generar el UUID.
// 2) Invocar la función “initDFP” enviando los parámetros indicados.
// uuid.- Identificador único que debe generar el comercio para cada transacción. 
// Este valor es el mismo que se envía en el parámetro “deviceFingerprintId” del API de Calificación de Transacciones (Antifraude).
// 3) Obtener la información del tarjetahabiente (formulario donde se ingresa los datos de la tarjeta, etc.).
// 4) Luego que el cliente oprima pagar se debe invocar al API de calificación de transacciones (Antifraude).
  
 // Ejemplo: initDFP(window.vtex.deviceFingerprint);
 
 var localSessionId = null; 

function initDFP(sessionId) { 
localSessionId = sessionId;
console.log('Init profiling ', Math.floor(Date.now() / 1000)) 
var timeout = 3000; 
var sasOrgId = "clyskgqa";
var csOrgId = "k8vif92e"; 
var merchantId = "vndp"; 
var hostname = "h.online-metrix.net/fp";  
doProfile(sasOrgId, sessionId, "m.vnforapps.com"); 
setTimeout(startOnTimer(sessionId) , timeout); }

function doProfile(orgId, sessionId, hostname){
console.log('Starting profile using ' + hostname + ' for orgId ' + orgId + ' with sessionId ' + sessionId + ' on ' + Math.floor(Date.now() / 1000)); 
var head = document.getElementsByTagName("head").item(0); 
var url = "https://" + hostname + "/tags.js?org_id=" + orgId + "&session_id=" + sessionId + "&page_id=1&allow_reprofile=1"; 
console.log(url);
var script = document.createElement("script"); 
script.setAttribute("type", "text/javascript");
script.setAttribute("src", url);
head.appendChild(script); console.log('Profile should have started...');
body = document.getElementsByTagName("body").item(0); 
noscript = document.createElement("noscript"); 
iframe = document.createElement("iframe");
iframe.setAttribute("style", "width: 100px; height: 100px; border: 0; position:absolute; top: -5000px;"); 
iframe.setAttribute("src", url); 
noscript.appendChild(iframe);
body.insertBefore(noscript, body.childNodes[0]);
} 
  
function startOnTimer(sessionId) {
var csOrgId = "k8vif92e"; 
var merchantId = "vndp";
var hostname = "h.online-metrix.net/fp";
doProfile(csOrgId, merchantId + sessionId, hostname); }
  
function tmx_profiling_complete(sessionId) { 
    console.log('Finished ', sessionId, '-', Math.floor(Date.now() / 1000)); 
 } 
</script>