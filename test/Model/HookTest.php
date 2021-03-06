<?php
/**
 * HookTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Meltwater Streaming API v2
 *
 * The Meltwater Streaming API provides the needed resources for Meltwater clients to create & delete REST Hooks and stream Meltwater search results to your specified destination.
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@api.meltwater.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * HookTest Class Doc Comment
 *
 * @category    Class */
// * @description Creates a hook for one of your predefined searches.  Delivers search results for the query referenced by the &#x60;search_id&#x60; to the &#x60;target_url&#x60; via HTTP POST. Note that a &#x60;hook_id&#x60; will be returned on successful creation, this id is needed to delete the hook.   We are also returning the header: &#x60;X-Hook-Secret&#x60;, a shared secret used to sign the document body pushed to your &#x60;target_url&#x60;.    Requires an OAuth access token.
/**
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class HookTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {

    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {

    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {

    }

    /**
     * Test "Hook"
     */
    public function testHook()
    {

    }

    /**
     * Test attribute "search_id"
     */
    public function testPropertySearchId()
    {

    }

    /**
     * Test attribute "target_url"
     */
    public function testPropertyTargetUrl()
    {

    }

    /**
     * Test attribute "updated"
     */
    public function testPropertyUpdated()
    {

    }

    /**
     * Test attribute "search_type"
     */
    public function testPropertySearchType()
    {

    }

    /**
     * Test attribute "hook_id"
     */
    public function testPropertyHookId()
    {

    }

}
