httpHeaders.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'httpheaders-panel-home',
            renderTo: 'httpheaders-panel-home-div'
        }]
    });
    httpHeaders.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(httpHeaders.page.Home, MODx.Component);
Ext.reg('httpheaders-page-home', httpHeaders.page.Home);