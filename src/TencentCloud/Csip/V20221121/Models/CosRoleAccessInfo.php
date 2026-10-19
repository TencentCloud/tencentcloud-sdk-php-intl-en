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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of roles associated with the Cos bucket
 *
 * @method string getRoleId() Obtain Role ID
 * @method void setRoleId(string $RoleId) Set Role ID
 * @method string getRoleName() Obtain Role name.
 * @method void setRoleName(string $RoleName) Set Role name.
 * @method string getRoleDescription() Obtain Role description
 * @method void setRoleDescription(string $RoleDescription) Set Role description
 * @method integer getPermissionCount() Obtain Accessible permission count
 * @method void setPermissionCount(integer $PermissionCount) Set Accessible permission count
 * @method integer getCreateTime() Obtain Policy creation time.
 * @method void setCreateTime(integer $CreateTime) Set Policy creation time.
 */
class CosRoleAccessInfo extends AbstractModel
{
    /**
     * @var string Role ID
     */
    public $RoleId;

    /**
     * @var string Role name.
     */
    public $RoleName;

    /**
     * @var string Role description
     */
    public $RoleDescription;

    /**
     * @var integer Accessible permission count
     */
    public $PermissionCount;

    /**
     * @var integer Policy creation time.
     */
    public $CreateTime;

    /**
     * @param string $RoleId Role ID
     * @param string $RoleName Role name.
     * @param string $RoleDescription Role description
     * @param integer $PermissionCount Accessible permission count
     * @param integer $CreateTime Policy creation time.
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

        if (array_key_exists("RoleDescription",$param) and $param["RoleDescription"] !== null) {
            $this->RoleDescription = $param["RoleDescription"];
        }

        if (array_key_exists("PermissionCount",$param) and $param["PermissionCount"] !== null) {
            $this->PermissionCount = $param["PermissionCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
