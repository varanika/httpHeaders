<?php

class httpHeadersItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'httpHeadersItem';
    public $classKey = 'httpHeadersItem';
    public $languageTopics = ['httpheaders'];
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('httpheaders_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, ['name' => $name])) {
            $this->modx->error->addField('name', $this->modx->lexicon('httpheaders_item_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'httpHeadersItemCreateProcessor';