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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Console user group information (external standard version, decoupled from internal UserGroupRoleInfo)
 *
 * @method string getGroupId() Obtain User group ID.
 * @method void setGroupId(string $GroupId) Set User group ID.
 * @method string getGroupName() Obtain User group name.
 * @method void setGroupName(string $GroupName) Set User group name.
 * @method array getRoles() Obtain List of characters.
 * @method void setRoles(array $Roles) Set List of characters.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 * @method integer getUserCount() Obtain Number of users in the user group
 * @method void setUserCount(integer $UserCount) Set Number of users in the user group
 * @method string getGroupType() Obtain User group type. The value is a string form of an enumerated numeric value: "0" = console system type (including all users), "1" = console custom type, "2" = workspace system type, "3" = workspace custom type.
 * @method void setGroupType(string $GroupType) Set User group type. The value is a string form of an enumerated numeric value: "0" = console system type (including all users), "1" = console custom type, "2" = workspace system type, "3" = workspace custom type.
 */
class ConsoleGroupInfo extends AbstractModel
{
    /**
     * @var string User group ID.
     */
    public $GroupId;

    /**
     * @var string User group name.
     */
    public $GroupName;

    /**
     * @var array List of characters.
     */
    public $Roles;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @var integer Number of users in the user group
     */
    public $UserCount;

    /**
     * @var string User group type. The value is a string form of an enumerated numeric value: "0" = console system type (including all users), "1" = console custom type, "2" = workspace system type, "3" = workspace custom type.
     */
    public $GroupType;

    /**
     * @param string $GroupId User group ID.
     * @param string $GroupName User group name.
     * @param array $Roles List of characters.
     * @param string $CreateTime Creation time.
     * @param string $UpdateTime Update time.
     * @param integer $UserCount Number of users in the user group
     * @param string $GroupType User group type. The value is a string form of an enumerated numeric value: "0" = console system type (including all users), "1" = console custom type, "2" = workspace system type, "3" = workspace custom type.
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = [];
            foreach ($param["Roles"] as $key => $value){
                $obj = new RoleBasicInfo();
                $obj->deserialize($value);
                array_push($this->Roles, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("UserCount",$param) and $param["UserCount"] !== null) {
            $this->UserCount = $param["UserCount"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }
    }
}
