<?php

namespace Amber\Controller\Contracts;

interface ActionControllerContract
{
    /**
     * Returns the map of resource methods to ability names.
     *
     * Must return an associative array containing the actions methods as keys and the abilities as values.
     *
     * @return array The controller's action map.
     */
    public function actionMap();

    /**
     * Gets the ability for the called action.
     *
     * @return string
     */
    public function ability();

    /**
     * Gets the called action.
     *
     * @return string
     */
    public function action();

    /**
     * Gets the Request.
     *
     * @return string
     */
    public function request();

    /**
     * Sets the Request.
     *
     * @return string
     */
    public function setRequest($handler);

    /**
     * Returns the view handler.
     *
     * @return string
     */
    public function view();

    /**
     * Gets the view handler.
     *
     * @return string
     */
    public function setView($handler);
}
