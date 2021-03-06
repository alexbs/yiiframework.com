<?php

namespace app\controllers;

use app\components\UserPermissions;
use Yii;
use app\models\User;
use app\models\UserSearch;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdminController implements the admin backend overview.
 */
class AdminController extends BaseController
{
    public $layout = 'admin';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
   		        'class' => AccessControl::class,
   		        'rules' => [
   			        [
   				        'allow' => true,
   				        'actions' => ['index'],
                        'roles' => [
                            // allow all admin permissions to view this page
                            UserPermissions::PERMISSION_MANAGE_USERS,
                            UserPermissions::PERMISSION_MANAGE_EXTENSIONS,
                            UserPermissions::PERMISSION_MANAGE_NEWS,
                            UserPermissions::PERMISSION_MANAGE_WIKI,
                            UserPermissions::PERMISSION_MANAGE_COMMENTS,
                        ],
   			        ],
   		        ]
   	        ],
        ];
    }

    public function actionIndex()
    {
        $roles = array_merge(Yii::$app->authManager->getRoles(), Yii::$app->authManager->getPermissions());
        $roleUsers = [];
        foreach($roles as $role) {
            $users = User::findAll(Yii::$app->authManager->getUserIdsByRole($role->name));
            if (!empty($users)) {
                $roleUsers[$role->name] = $users;
            }
        }

        return $this->render('index', [
            'roleUsers' => $roleUsers,
        ]);
    }
}
