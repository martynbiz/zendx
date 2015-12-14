<?php

use Handlebars\Handlebars;

class Zendx_View_Handlebars extends Zend_View
{
    /**
     * Processes a view script and returns the output.
     *
     * @param string $name The script name to process.
     * @return string The script output.
     */
    public function render($name)
    {
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        $engine = new Handlebars;

        // optional if you want to fallback to phtml
        if ($ext === 'handlebars') {

            // get data which was assigned at controller level
            $data = $this->getVars();

            // it may get mad at this part!
            if(! $scriptPath = $this->getScriptPath($name)) {
                return false;
            }

            $template = file_get_contents($scriptPath);

            // render
            $res = $engine->render($template, $data);
        } else {
            $res = parent::render($name);
        }

        return $res;
    }
}
