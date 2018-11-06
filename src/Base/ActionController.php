<?php

namespace Amber\Controller\Base;

use Amber\Controller\Contracts\ActionControllerContract;

/**
 *
 */
abstract class ActionController implements ActionControllerContract
{

    /**
     * The controller resource name.
     *
     * @var string
     */
    protected $name;

    /**
     * The model class.
     *
     * @var string
     */
    protected $model;

    /**
     * Amount of resources to load from model.
     *
     * @var int
     */
    protected $paginate;

    /**
     * Instance of server Request.
     *
     * @var
     */
    protected $request;

    /**
     * The action map.
     *
     * @var array  view|create|update|delete
     */
    protected $actionMap = [
        //
    ];

    /**
     * Returns the map of actions and ability.
     *
     * @return array The controller's action map.
     */
    public function actionMap()
    {
        return $this->actionMap;
    }

    /**
     * Returns the ability for the called action.
     *
     * @return string|bool
     */
    public function getAbility()
    {
        if (isset($this->actionMap[$this->getAction()])) {
            return $this->actionMap[$this->getAction()];
        }

        return false;
    }

    /**
     * Returns the called action.
     *
     * @return string
     */
    public function getAction()
    {
        if (isset($this->actionMap[get_called_function()])) {
            return get_called_function();
        }

        return false;
    }
}
