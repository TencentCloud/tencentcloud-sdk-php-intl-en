<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Relationship between the namespaces that are bound in batches and role permissions
 *
 * @method string getEnvironmentId() Obtain The IDs of the bound namespaces cannot be delicate and the namespaces must contain resources
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setEnvironmentId(string $EnvironmentId) Set The IDs of the bound namespaces cannot be delicate and the namespaces must contain resources
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method array getPermissions() Obtain Permissions to be bound to a namespace. Enumerated values: `consume`, `produce`, and `consume, produce`. This parameter cannot be left empty.

Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setPermissions(array $Permissions) Set Permissions to be bound to a namespace. Enumerated values: `consume`, `produce`, and `consume, produce`. This parameter cannot be left empty.

Note: u200dThis field may return null, indicating that no valid values can be obtained.
 */
class EnvironmentRoleSet extends AbstractModel
{
    /**
     * @var string The IDs of the bound namespaces cannot be delicate and the namespaces must contain resources
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $EnvironmentId;

    /**
     * @var array Permissions to be bound to a namespace. Enumerated values: `consume`, `produce`, and `consume, produce`. This parameter cannot be left empty.

Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $Permissions;

    /**
     * @param string $EnvironmentId The IDs of the bound namespaces cannot be delicate and the namespaces must contain resources
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param array $Permissions Permissions to be bound to a namespace. Enumerated values: `consume`, `produce`, and `consume, produce`. This parameter cannot be left empty.

Note: u200dThis field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = $param["Permissions"];
        }
    }
}
