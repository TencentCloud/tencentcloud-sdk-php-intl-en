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
 * Account information
 *
 * @method string getUserName() Obtain <p>Username.</p>
 * @method void setUserName(string $UserName) Set <p>Username.</p>
 * @method string getDatabase() Obtain <p>Authentication database</p>
 * @method void setDatabase(string $Database) Set <p>Authentication database</p>
 * @method array getRoles() Obtain <p>Get role list (new method)</p>
 * @method void setRoles(array $Roles) Set <p>Get role list (new method)</p>
 * @method array getAuthRole() Obtain <p>Permission list (old method)</p>
 * @method void setAuthRole(array $AuthRole) Set <p>Permission list (old method)</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method string getConsolePassUpdateTime() Obtain <p>Console password last update time</p>
 * @method void setConsolePassUpdateTime(string $ConsolePassUpdateTime) Set <p>Console password last update time</p>
 * @method integer getEnablePasswordRotation() Obtain <p>Whether to enable password rotation</p>
 * @method void setEnablePasswordRotation(integer $EnablePasswordRotation) Set <p>Whether to enable password rotation</p>
 * @method string getDescription() Obtain <p>Custom description</p>
 * @method void setDescription(string $Description) Set <p>Custom description</p>
 */
class InstanceUserInfo extends AbstractModel
{
    /**
     * @var string <p>Username.</p>
     */
    public $UserName;

    /**
     * @var string <p>Authentication database</p>
     */
    public $Database;

    /**
     * @var array <p>Get role list (new method)</p>
     */
    public $Roles;

    /**
     * @var array <p>Permission list (old method)</p>
     */
    public $AuthRole;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Console password last update time</p>
     */
    public $ConsolePassUpdateTime;

    /**
     * @var integer <p>Whether to enable password rotation</p>
     */
    public $EnablePasswordRotation;

    /**
     * @var string <p>Custom description</p>
     */
    public $Description;

    /**
     * @param string $UserName <p>Username.</p>
     * @param string $Database <p>Authentication database</p>
     * @param array $Roles <p>Get role list (new method)</p>
     * @param array $AuthRole <p>Permission list (old method)</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $UpdateTime <p>Update time.</p>
     * @param string $ConsolePassUpdateTime <p>Console password last update time</p>
     * @param integer $EnablePasswordRotation <p>Whether to enable password rotation</p>
     * @param string $Description <p>Custom description</p>
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ConsolePassUpdateTime",$param) and $param["ConsolePassUpdateTime"] !== null) {
            $this->ConsolePassUpdateTime = $param["ConsolePassUpdateTime"];
        }

        if (array_key_exists("EnablePasswordRotation",$param) and $param["EnablePasswordRotation"] !== null) {
            $this->EnablePasswordRotation = $param["EnablePasswordRotation"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
