<?php

namespace kouosl\content\controllers\frontend;


class DefaultController extends \kouosl\base\controllers\frontend\BaseController
{
    public function actionIndex()
    {
        return $this->render('_index');
    }
}
