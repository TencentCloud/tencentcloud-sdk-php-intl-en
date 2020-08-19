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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PutRolePermissionsBoundary request structure.
 *
 * @method integer getPolicyId() Obtain Policy ID
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
 * @method string getRoleId() Obtain Role ID (either it or the role name must be entered)
 * @method void setRoleId(string $RoleId) Set Role ID (either it or the role name must be entered)
 * @method string getRoleName() Obtain Role name (either it or the role ID must be entered)
 * @method void setRoleName(string $RoleName) Set Role name (either it or the role ID must be entered)
 */
class PutRolePermissionsBoundaryRequest extends AbstractModel
{
    /**
     * @var integer Policy ID
     */
    public $PolicyId;

    /**
     * @var string Role ID (either it or the role name must be entered)
     */
    public $RoleId;

    /**
     * @var string Role name (either it or the role ID must be entered)
     */
    public $RoleName;

    /**
     * @param integer $PolicyId Policy ID
     * @param string $RoleId Role ID (either it or the role name must be entered)
     * @param string $RoleName Role name (either it or the role ID must be entered)
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }
    }
}
