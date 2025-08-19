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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Role information of the user role list
 *
 * @method string getRoleName() Obtain Role Name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoleName(string $RoleName) Set Role Name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRoleId() Obtain Role ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoleId(integer $RoleId) Set Role ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectId() Obtain Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectName() Obtain Project name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScopeType() Obtain Whether it is a global role (0: no; 1: yes).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScopeType(integer $ScopeType) Set Whether it is a global role (0: no; 1: yes).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModuleCollection() Obtain Role key.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModuleCollection(string $ModuleCollection) Set Role key.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class UserRoleListDataRoleInfo extends AbstractModel
{
    /**
     * @var string Role Name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoleName;

    /**
     * @var integer Role ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoleId;

    /**
     * @var integer Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Project name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectName;

    /**
     * @var integer Whether it is a global role (0: no; 1: yes).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScopeType;

    /**
     * @var string Role key.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModuleCollection;

    /**
     * @param string $RoleName Role Name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RoleId Role ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectId Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectName Project name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ScopeType Whether it is a global role (0: no; 1: yes).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModuleCollection Role key.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ScopeType",$param) and $param["ScopeType"] !== null) {
            $this->ScopeType = $param["ScopeType"];
        }

        if (array_key_exists("ModuleCollection",$param) and $param["ModuleCollection"] !== null) {
            $this->ModuleCollection = $param["ModuleCollection"];
        }
    }
}
