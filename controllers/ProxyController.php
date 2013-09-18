<?php 
class ProxyController extends Controller
{
    public static $_permissionControl = false;

    public function actionIndex()
    {
        Yii::import("application.modules.httpproxy.knProxy.*");
        require_once(Yii::getPathOfAlias("application.modules.httpproxy.knProxy").DIRECTORY_SEPARATOR."index.php");
    }

}
?>
