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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRole request structure.
 *
 * @method string getRoleId() Obtain Role ID, used to specify role. Input either `RoleId` or `RoleName`
 * @method void setRoleId(string $RoleId) Set Role ID, used to specify role. Input either `RoleId` or `RoleName`
 * @method string getRoleName() Obtain Role name, used to specify role. Input either `RoleId` or `RoleName`
 * @method void setRoleName(string $RoleName) Set Role name, used to specify role. Input either `RoleId` or `RoleName`
 */
class GetRoleRequest extends AbstractModel
{
    /**
     * @var string Role ID, used to specify role. Input either `RoleId` or `RoleName`
     */
    public $RoleId;

    /**
     * @var string Role name, used to specify role. Input either `RoleId` or `RoleName`
     */
    public $RoleName;

    /**
     * @param string $RoleId Role ID, used to specify role. Input either `RoleId` or `RoleName`
     * @param string $RoleName Role name, used to specify role. Input either `RoleId` or `RoleName`
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
    }
}
