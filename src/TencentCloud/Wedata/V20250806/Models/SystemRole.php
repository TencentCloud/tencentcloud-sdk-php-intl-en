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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Role object.
 *
 * @method string getRoleId() Obtain Role id.
 * @method void setRoleId(string $RoleId) Set Role id.
 * @method string getRoleName() Obtain Role name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoleName(string $RoleName) Set Role name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRoleDisplayName() Obtain Display name of the role.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoleDisplayName(string $RoleDisplayName) Set Display name of the role.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SystemRole extends AbstractModel
{
    /**
     * @var string Role id.
     */
    public $RoleId;

    /**
     * @var string Role name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoleName;

    /**
     * @var string Display name of the role.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoleDisplayName;

    /**
     * @var string Description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @param string $RoleId Role id.
     * @param string $RoleName Role name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RoleDisplayName Display name of the role.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description
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
        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("RoleDisplayName",$param) and $param["RoleDisplayName"] !== null) {
            $this->RoleDisplayName = $param["RoleDisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
