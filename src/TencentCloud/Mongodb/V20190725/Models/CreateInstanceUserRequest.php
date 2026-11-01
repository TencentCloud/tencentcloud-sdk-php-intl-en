<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstanceUser request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance id</p>
 * @method string getUserName() Obtain <p>Username.</p>
 * @method void setUserName(string $UserName) Set <p>Username.</p>
 * @method string getPassword() Obtain <p>Password</p>
 * @method void setPassword(string $Password) Set <p>Password</p>
 * @method string getEncryptedPassword() Obtain <p>Encrypted password (choose either this or Password)</p>
 * @method void setEncryptedPassword(string $EncryptedPassword) Set <p>Encrypted password (choose either this or Password)</p>
 * @method string getDatabase() Obtain <p>Authentication database (Belonging Database of the user).</p>
 * @method void setDatabase(string $Database) Set <p>Authentication database (Belonging Database of the user).</p>
 * @method array getRoles() Obtain <p>Get role list (new method, can include built-in role and custom role)</p>
 * @method void setRoles(array $Roles) Set <p>Get role list (new method, can include built-in role and custom role)</p>
 * @method array getAuthRole() Obtain <p>Permission list (old method)</p>
 * @method void setAuthRole(array $AuthRole) Set <p>Permission list (old method)</p>
 * @method string getDescription() Obtain <p>Custom description.</p>
 * @method void setDescription(string $Description) Set <p>Custom description.</p>
 * @method integer getEnablePasswordRotation() Obtain <p>Whether password rotation is enabled (0: not enabled, 1: enabled)</p>
 * @method void setEnablePasswordRotation(integer $EnablePasswordRotation) Set <p>Whether password rotation is enabled (0: not enabled, 1: enabled)</p>
 */
class CreateInstanceUserRequest extends AbstractModel
{
    /**
     * @var string <p>Instance id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Username.</p>
     */
    public $UserName;

    /**
     * @var string <p>Password</p>
     */
    public $Password;

    /**
     * @var string <p>Encrypted password (choose either this or Password)</p>
     */
    public $EncryptedPassword;

    /**
     * @var string <p>Authentication database (Belonging Database of the user).</p>
     */
    public $Database;

    /**
     * @var array <p>Get role list (new method, can include built-in role and custom role)</p>
     */
    public $Roles;

    /**
     * @var array <p>Permission list (old method)</p>
     */
    public $AuthRole;

    /**
     * @var string <p>Custom description.</p>
     */
    public $Description;

    /**
     * @var integer <p>Whether password rotation is enabled (0: not enabled, 1: enabled)</p>
     */
    public $EnablePasswordRotation;

    /**
     * @param string $InstanceId <p>Instance id</p>
     * @param string $UserName <p>Username.</p>
     * @param string $Password <p>Password</p>
     * @param string $EncryptedPassword <p>Encrypted password (choose either this or Password)</p>
     * @param string $Database <p>Authentication database (Belonging Database of the user).</p>
     * @param array $Roles <p>Get role list (new method, can include built-in role and custom role)</p>
     * @param array $AuthRole <p>Permission list (old method)</p>
     * @param string $Description <p>Custom description.</p>
     * @param integer $EnablePasswordRotation <p>Whether password rotation is enabled (0: not enabled, 1: enabled)</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EncryptedPassword",$param) and $param["EncryptedPassword"] !== null) {
            $this->EncryptedPassword = $param["EncryptedPassword"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = [];
            foreach ($param["Roles"] as $key => $value){
                $obj = new Role();
                $obj->deserialize($value);
                array_push($this->Roles, $obj);
            }
        }

        if (array_key_exists("AuthRole",$param) and $param["AuthRole"] !== null) {
            $this->AuthRole = [];
            foreach ($param["AuthRole"] as $key => $value){
                $obj = new Auth();
                $obj->deserialize($value);
                array_push($this->AuthRole, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EnablePasswordRotation",$param) and $param["EnablePasswordRotation"] !== null) {
            $this->EnablePasswordRotation = $param["EnablePasswordRotation"];
        }
    }
}
