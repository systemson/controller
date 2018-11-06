<?php

namespace Amber\Controller\Base;

/**
 *
 */
abstract class ActionController implements ActionControllerInterface
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
    protected function actionMap()
    {
        return $this->actionMap;
    }

    /**
     * Returns the ability for the called action.
     *
     * @return string|bool
     */
    protected function getAbility()
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
    protected function getAction()
    {
        if (isset($this->actionMap[get_called_function()])) {
            return get_called_function();
        }

        return false;
    }
}
