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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Role management list
 *
 * @method integer getRoleId() Obtain Role ID
 * @method void setRoleId(integer $RoleId) Set Role ID
 * @method string getRoleName() Obtain Role name.
 * @method void setRoleName(string $RoleName) Set Role name.
 * @method string getTeamName() Obtain Team name
 * @method void setTeamName(string $TeamName) Set Team name
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method integer getRoleType() Obtain Role type 1-preset role 2-custom role.
 * @method void setRoleType(integer $RoleType) Set Role type 1-preset role 2-custom role.
 */
class DescribeRoleListData extends AbstractModel
{
    /**
     * @var integer Role ID
     */
    public $RoleId;

    /**
     * @var string Role name.
     */
    public $RoleName;

    /**
     * @var string Team name
     */
    public $TeamName;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var integer Role type 1-preset role 2-custom role.
     */
    public $RoleType;

    /**
     * @param integer $RoleId Role ID
     * @param string $RoleName Role name.
     * @param string $TeamName Team name
     * @param string $CreateTime Creation time
     * @param integer $RoleType Role type 1-preset role 2-custom role.
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

        if (array_key_exists("TeamName",$param) and $param["TeamName"] !== null) {
            $this->TeamName = $param["TeamName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }
    }
}
