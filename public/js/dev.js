var localSessionId = null;

function doProfile(orgId, sessionId, hostname) {
    console.log('Starting profile using ' + hostname  + ' for orgId ' + orgId + ' with sessionId ' + sessionId + ' on ' + Math.floor(Date.now() / 1000));
    var head = document.getElementsByTagName("head").item(0);
    var url = "https://" + hostname + "/tags.js?org_id=" + orgId + "&session_id=" + sessionId + "&page_id=1&allow_reprofile=1";
    //var url = "https://" + hostname + "/tags.js?org_id=" + orgId + "&session_id=" + sessionId;
    console.log(url);
    var script = document.createElement("script");
    script.setAttribute("type", "text/javascript");
    script.setAttribute("src", url);
    head.appendChild(script);

    console.log('Profile should have started...');

    body = document.getElementsByTagName("body").item(0);
    noscript = document.createElement("noscript");
    iframe = document.createElement("iframe");
    iframe.setAttribute("style", "width: 100px; height: 100px; border: 0; position:absolute; top: -5000px;");
    iframe.setAttribute("src", url);

    noscript.appendChild(iframe);
    body.insertBefore(noscript, body.childNodes[0]);    

}

function initDFP(sessionId, purchaseNumber, clientIp, visaNetMerchantId) {
    localSessionId = sessionId;
    console.log('Init profiling ', Math.floor(Date.now() / 1000))
    var timeout = 3000;
    var sasOrgId = "507f9ifk";

    var csOrgId = "1snn5n9w";
    var merchantId = "vndp";
    var hostname = "h.online-metrix.net/fp";
    //doProfile(csOrgId, merchantId + localSessionId, hostname);


    doProfile(sasOrgId, sessionId, "m.vnforapps.com");
    setTimeout(startOnTimer, timeout);
}

function startOnTimer() {
    var csOrgId = "1snn5n9w";
    var merchantId = "vndp";
    var hostname = "h.online-metrix.net/fp";
    doProfile(csOrgId, merchantId + localSessionId, hostname);
}

function tmx_profiling_complete(sessionId) {
    console.log('Finished ', sessionId, '-', Math.floor(Date.now() / 1000));
}
