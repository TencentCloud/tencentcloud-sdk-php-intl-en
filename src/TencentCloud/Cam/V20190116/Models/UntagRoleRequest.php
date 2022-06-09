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
 * UntagRole request structure.
 *
 * @method array getTagKeys() Obtain Tag key.
 * @method void setTagKeys(array $TagKeys) Set Tag key.
 * @method string getRoleName() Obtain Role name. Specify either the role name or role ID.
 * @method void setRoleName(string $RoleName) Set Role name. Specify either the role name or role ID.
 * @method string getRoleId() Obtain Role ID. Specify either the role ID or role name.
 * @method void setRoleId(string $RoleId) Set Role ID. Specify either the role ID or role name.
 */
class UntagRoleRequest extends AbstractModel
{
    /**
     * @var array Tag key.
     */
    public $TagKeys;

    /**
     * @var string Role name. Specify either the role name or role ID.
     */
    public $RoleName;

    /**
     * @var string Role ID. Specify either the role ID or role name.
     */
    public $RoleId;

    /**
     * @param array $TagKeys Tag key.
     * @param string $RoleName Role name. Specify either the role name or role ID.
     * @param string $RoleId Role ID. Specify either the role ID or role name.
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
        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }
    }
}
