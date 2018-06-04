var httpHeaders = function (config) {
    config = config || {};
    httpHeaders.superclass.constructor.call(this, config);
};
Ext.extend(httpHeaders, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('httpheaders', httpHeaders);

httpHeaders = new httpHeaders();