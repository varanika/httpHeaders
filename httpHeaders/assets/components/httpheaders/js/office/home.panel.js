httpHeaders.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'httpheaders-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: false,
            hideMode: 'offsets',
            items: [{
                title: _('httpheaders_items'),
                layout: 'anchor',
                items: [{
                    html: _('httpheaders_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'httpheaders-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    httpHeaders.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(httpHeaders.panel.Home, MODx.Panel);
Ext.reg('httpheaders-panel-home', httpHeaders.panel.Home);
