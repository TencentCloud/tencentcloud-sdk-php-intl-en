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
 * CreateInstanceRole request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance id</p>
 * @method string getRoleName() Obtain <p>role name</p>
 * @method void setRoleName(string $RoleName) Set <p>role name</p>
 * @method string getDatabase() Obtain <p>Role-based db</p>
 * @method void setDatabase(string $Database) Set <p>Role-based db</p>
 * @method array getPrivileges() Obtain <p>Permission</p>
 * @method void setPrivileges(array $Privileges) Set <p>Permission</p>
 * @method array getInheritedRoles() Obtain <p>Inheritable role</p>
 * @method void setInheritedRoles(array $InheritedRoles) Set <p>Inheritable role</p>
 */
class CreateInstanceRoleRequest extends AbstractModel
{
    /**
     * @var string <p>Instance id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>role name</p>
     */
    public $RoleName;

    /**
     * @var string <p>Role-based db</p>
     */
    public $Database;

    /**
     * @var array <p>Permission</p>
     */
    public $Privileges;

    /**
     * @var array <p>Inheritable role</p>
     */
    public $InheritedRoles;

    /**
     * @param string $InstanceId <p>Instance id</p>
     * @param string $RoleName <p>role name</p>
     * @param string $Database <p>Role-based db</p>
     * @param array $Privileges <p>Permission</p>
     * @param array $InheritedRoles <p>Inheritable role</p>
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

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = [];
            foreach ($param["Privileges"] as $key => $value){
                $obj = new RolePrivilege();
                $obj->deserialize($value);
                array_push($this->Privileges, $obj);
            }
        }

        if (array_key_exists("InheritedRoles",$param) and $param["InheritedRoles"] !== null) {
            $this->InheritedRoles = [];
            foreach ($param["InheritedRoles"] as $key => $value){
                $obj = new Role();
                $obj->deserialize($value);
                array_push($this->InheritedRoles, $obj);
            }
        }
    }
}
