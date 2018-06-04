Ext.onReady(function () {
    httpHeaders.config.connector_url = OfficeConfig.actionUrl;

    var grid = new httpHeaders.panel.Home();
    grid.render('office-httpheaders-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});