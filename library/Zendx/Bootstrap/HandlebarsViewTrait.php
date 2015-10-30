<?php

trait Zendx_Bootstrap_HandlebarsViewTrait {

    /**
     *
     */
    protected function _initView()
    {
        $resources = $this->getOption('resources');
        $options = array();
        if (isset($resources['view'])) {
            $options = $resources['view'];
        }
        $view = new Zendx_View_Handlebars($options);

        if (isset($options['doctype'])) {
            $view->doctype()->setDoctype(strtoupper($options['doctype']));
            if (isset($options['charset']) && $view->doctype()->isHtml5()) {
                $view->headMeta()->setCharset($options['charset']);
            }
        }
        if (isset($options['contentType'])) {
            $view->headMeta()->appendHttpEquiv('Content-Type', $options['contentType']);
        }

        $viewRenderer = new Zend_Controller_Action_Helper_ViewRenderer();
        $viewRenderer->setView($view);
        $viewRenderer->setViewSuffix('handlebars');
        Zend_Controller_Action_HelperBroker::addHelper($viewRenderer);
        return $view;
    }
}
