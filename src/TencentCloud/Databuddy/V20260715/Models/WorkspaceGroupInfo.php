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
 * Workspace user group information
 *
 * @method string getGroupId() Obtain <p>User group ID</p>
 * @method void setGroupId(string $GroupId) Set <p>User group ID</p>
 * @method string getGroupName() Obtain <p>User group name</p>
 * @method void setGroupName(string $GroupName) Set <p>User group name</p>
 * @method array getRoles() Obtain <p>List of characters.</p>
 * @method void setRoles(array $Roles) Set <p>List of characters.</p>
 * @method string getCreateTime() Obtain <p>Creation time, timestamp in milliseconds</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time, timestamp in milliseconds</p>
 * @method string getUpdateTime() Obtain <p>Update time, millisecond timestamp</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time, millisecond timestamp</p>
 * @method integer getUserCount() Obtain <p>Number of users in the user group</p>
 * @method void setUserCount(integer $UserCount) Set <p>Number of users in the user group</p>
 * @method string getGroupType() Obtain <p>user group type. The value is a string form of an enumerated numeric value: "0" = console system type (including all users), "1" = console custom type, "2" = workspace system type (including all workspace users), "3" = workspace custom type</p>
 * @method void setGroupType(string $GroupType) Set <p>user group type. The value is a string form of an enumerated numeric value: "0" = console system type (including all users), "1" = console custom type, "2" = workspace system type (including all workspace users), "3" = workspace custom type</p>
 * @method array getTags() Obtain <p>Tags directly bound to this group (excluding inheritance).</p>
 * @method void setTags(array $Tags) Set <p>Tags directly bound to this group (excluding inheritance).</p>
 */
class WorkspaceGroupInfo extends AbstractModel
{
    /**
     * @var string <p>User group ID</p>
     */
    public $GroupId;

    /**
     * @var string <p>User group name</p>
     */
    public $GroupName;

    /**
     * @var array <p>List of characters.</p>
     */
    public $Roles;

    /**
     * @var string <p>Creation time, timestamp in milliseconds</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Update time, millisecond timestamp</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>Number of users in the user group</p>
     */
    public $UserCount;

    /**
     * @var string <p>user group type. The value is a string form of an enumerated numeric value: "0" = console system type (including all users), "1" = console custom type, "2" = workspace system type (including all workspace users), "3" = workspace custom type</p>
     */
    public $GroupType;

    /**
     * @var array <p>Tags directly bound to this group (excluding inheritance).</p>
     */
    public $Tags;

    /**
     * @param string $GroupId <p>User group ID</p>
     * @param string $GroupName <p>User group name</p>
     * @param array $Roles <p>List of characters.</p>
     * @param string $CreateTime <p>Creation time, timestamp in milliseconds</p>
     * @param string $UpdateTime <p>Update time, millisecond timestamp</p>
     * @param integer $UserCount <p>Number of users in the user group</p>
     * @param string $GroupType <p>user group type. The value is a string form of an enumerated numeric value: "0" = console system type (including all users), "1" = console custom type, "2" = workspace system type (including all workspace users), "3" = workspace custom type</p>
     * @param array $Tags <p>Tags directly bound to this group (excluding inheritance).</p>
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new UserTagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
