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
 * UpdateInstanceUser request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getUserName() Obtain <p>Username.</p>
 * @method void setUserName(string $UserName) Set <p>Username.</p>
 * @method string getDatabase() Obtain <p>Authentication database</p>
 * @method void setDatabase(string $Database) Set <p>Authentication database</p>
 * @method string getPassword() Obtain <p>New password (Optional. If left empty, the password will not be changed)</p>
 * @method void setPassword(string $Password) Set <p>New password (Optional. If left empty, the password will not be changed)</p>
 * @method string getEncryptedPassword() Obtain <p>Encrypted password (Optional, choose either this or Password)</p>
 * @method void setEncryptedPassword(string $EncryptedPassword) Set <p>Encrypted password (Optional, choose either this or Password)</p>
 * @method array getRoles() Obtain <p>New role list (Optional. Leave it empty to not modify the role).</p>
 * @method void setRoles(array $Roles) Set <p>New role list (Optional. Leave it empty to not modify the role).</p>
 * @method array getAuthRole() Obtain <p>New permission list (Optional. If left empty, no permission will be modified)</p>
 * @method void setAuthRole(array $AuthRole) Set <p>New permission list (Optional. If left empty, no permission will be modified)</p>
 * @method string getDescription() Obtain <p>User description (Optional, leave it empty to not modify description)</p>
 * @method void setDescription(string $Description) Set <p>User description (Optional, leave it empty to not modify description)</p>
 */
class UpdateInstanceUserRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Username.</p>
     */
    public $UserName;

    /**
     * @var string <p>Authentication database</p>
     */
    public $Database;

    /**
     * @var string <p>New password (Optional. If left empty, the password will not be changed)</p>
     */
    public $Password;

    /**
     * @var string <p>Encrypted password (Optional, choose either this or Password)</p>
     */
    public $EncryptedPassword;

    /**
     * @var array <p>New role list (Optional. Leave it empty to not modify the role).</p>
     */
    public $Roles;

    /**
     * @var array <p>New permission list (Optional. If left empty, no permission will be modified)</p>
     */
    public $AuthRole;

    /**
     * @var string <p>User description (Optional, leave it empty to not modify description)</p>
     */
    public $Description;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $UserName <p>Username.</p>
     * @param string $Database <p>Authentication database</p>
     * @param string $Password <p>New password (Optional. If left empty, the password will not be changed)</p>
     * @param string $EncryptedPassword <p>Encrypted password (Optional, choose either this or Password)</p>
     * @param array $Roles <p>New role list (Optional. Leave it empty to not modify the role).</p>
     * @param array $AuthRole <p>New permission list (Optional. If left empty, no permission will be modified)</p>
     * @param string $Description <p>User description (Optional, leave it empty to not modify description)</p>
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

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EncryptedPassword",$param) and $param["EncryptedPassword"] !== null) {
            $this->EncryptedPassword = $param["EncryptedPassword"];
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
    }
}
