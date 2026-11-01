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
 * UpdateInstanceRole request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getRoleName() Obtain <p>Role name.</p>
 * @method void setRoleName(string $RoleName) Set <p>Role name.</p>
 * @method string getDatabase() Obtain <p>Belonging Database of the character.</p>
 * @method void setDatabase(string $Database) Set <p>Belonging Database of the character.</p>
 * @method array getPrivileges() Obtain <p>Role permission list. If not passed, no modification will be made.</p>
 * @method void setPrivileges(array $Privileges) Set <p>Role permission list. If not passed, no modification will be made.</p>
 * @method array getInheritedRoles() Obtain <p>Get role list. If not passed, no modification is made.</p>
 * @method void setInheritedRoles(array $InheritedRoles) Set <p>Get role list. If not passed, no modification is made.</p>
 */
class UpdateInstanceRoleRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Role name.</p>
     */
    public $RoleName;

    /**
     * @var string <p>Belonging Database of the character.</p>
     */
    public $Database;

    /**
     * @var array <p>Role permission list. If not passed, no modification will be made.</p>
     */
    public $Privileges;

    /**
     * @var array <p>Get role list. If not passed, no modification is made.</p>
     */
    public $InheritedRoles;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $RoleName <p>Role name.</p>
     * @param string $Database <p>Belonging Database of the character.</p>
     * @param array $Privileges <p>Role permission list. If not passed, no modification will be made.</p>
     * @param array $InheritedRoles <p>Get role list. If not passed, no modification is made.</p>
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
