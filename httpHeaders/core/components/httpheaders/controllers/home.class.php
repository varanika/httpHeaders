<?php

/**
 * The home manager controller for httpHeaders.
 *
 */
class httpHeadersHomeManagerController extends modExtraManagerController
{
    /** @var httpHeaders $httpHeaders */
    public $httpHeaders;


    /**
     *
     */
    public function initialize()
    {
        $this->httpHeaders = $this->modx->getService('httpHeaders', 'httpHeaders', MODX_CORE_PATH . 'components/httpheaders/model/');
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['httpheaders:default'];
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('httpheaders');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->httpHeaders->config['cssUrl'] . 'mgr/main.css');
        $this->addJavascript($this->httpHeaders->config['jsUrl'] . 'mgr/httpheaders.js');
        $this->addJavascript($this->httpHeaders->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->httpHeaders->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->httpHeaders->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->httpHeaders->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->httpHeaders->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->httpHeaders->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        httpHeaders.config = ' . json_encode($this->httpHeaders->config) . ';
        httpHeaders.config.connector_url = "' . $this->httpHeaders->config['connectorUrl'] . '";
        Ext.onReady(function() {MODx.load({ xtype: "httpheaders-page-home"});});
        </script>');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        $this->content .= '<div id="httpheaders-panel-home-div"></div>';

        return '';
    }
}