<?php

namespace Amber\Controller\Contracts;

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
    protected function ability();

    /**
     * Gets the called action.
     *
     * @return string
     */
    protected function action();

    /**
     * Gets the Request.
     *
     * @return string
     */
    protected function request();

    /**
     * Sets the Request.
     *
     * @return string
     */
    protected function setRequest($handler);

    /**
     * Returns the view handler.
     *
     * @return string
     */
    protected function view();

    /**
     * Gets the view handler.
     *
     * @return string
     */
    protected function setView($handler);
}
