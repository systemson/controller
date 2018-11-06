<?php

namespace Amber\Controller;

/**
 *
 */
class Controller
{
    use AuthorizeActionTrait,
    ResourceActionsTrait;

    /**
     * The controller resource name.
     *
     * @var string
     */
    protected $name;

    /**
     * Model class.
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
     * Instance of Illuminate\Http\Request.
     *
     * @var Illuminate\Http\Request
     */
    protected $request;

    /**
     * The permissions that should be registered.
     *
     * @var array  view|create|update|delete
     */
    protected $permissions = [
        //
    ];

    /**
    * Instantiate the controller.
    *
    * @return void
    */
    public function __construct(Request $request)
    {
        /** Request instance */
        $this->request = $request;

        /** Store the permissions on DB */
        $this->registerPermissions($this->resourceAbilityMap());
    }
}
