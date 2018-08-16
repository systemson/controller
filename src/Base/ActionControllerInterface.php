<?php

namespace Amber\Controller\Base;

interface ActionControllerInterface
{
    /**
     * Returns the map of resource methods to ability names.
     *
     * Must return an associative array containing the actions methods as keys and the abilities as values.
     *
     * @return array The controller's action map.
     */
    protected function actionMap();

    /**
     * Gets the ability for the called action.
     *
     * @return string
     */
    protected function getAbility();

    /**
     * Gets the called action.
     *
     * @return string
     */
    protected function getAction();

    /**
     * Gets the Request.
     *
     * @return string
     */
    protected function getRequest();

    /**
     * Sets the Request.
     *
     * @return string
     */
    protected function setRequest($request);

    /**
     * Returns the view handler.
     *
     * @return string
     */
    protected function view($request);

    /**
     * Gets the view handler.
     *
     * @return string
     */
    protected function getView($request);
}
