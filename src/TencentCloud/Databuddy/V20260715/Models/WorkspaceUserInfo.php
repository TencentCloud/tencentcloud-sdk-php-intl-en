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
 * Workspace user information
 *
 * @method string getUserUin() Obtain <p>User UIN.</p>
 * @method void setUserUin(string $UserUin) Set <p>User UIN.</p>
 * @method string getUserName() Obtain <p>Username.</p>
 * @method void setUserName(string $UserName) Set <p>Username.</p>
 * @method string getNickname() Obtain <p>Nickname</p>
 * @method void setNickname(string $Nickname) Set <p>Nickname</p>
 * @method array getRoles() Obtain <p>List of characters.</p>
 * @method void setRoles(array $Roles) Set <p>List of characters.</p>
 * @method string getUserSource() Obtain <p>User source. group: user group, user: user</p>
 * @method void setUserSource(string $UserSource) Set <p>User source. group: user group, user: user</p>
 * @method string getCreateTime() Obtain <p>Creation time. Millisecond timestamp</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time. Millisecond timestamp</p>
 * @method string getUpdateTime() Obtain <p>Update time. Millisecond timestamp</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time. Millisecond timestamp</p>
 * @method boolean getIsOwner() Obtain <p>Root account or not</p>
 * @method void setIsOwner(boolean $IsOwner) Set <p>Root account or not</p>
 * @method integer getUserTag() Obtain <p>0: general user 1: entraId user</p>
 * @method void setUserTag(integer $UserTag) Set <p>0: general user 1: entraId user</p>
 * @method boolean getIsAdmin() Obtain <p>Whether the sub-account has admin permission</p>
 * @method void setIsAdmin(boolean $IsAdmin) Set <p>Whether the sub-account has admin permission</p>
 * @method array getTags() Obtain <p>Tags after merge (directly bound to user + inherited from user group)</p>
 * @method void setTags(array $Tags) Set <p>Tags after merge (directly bound to user + inherited from user group)</p>
 */
class WorkspaceUserInfo extends AbstractModel
{
    /**
     * @var string <p>User UIN.</p>
     */
    public $UserUin;

    /**
     * @var string <p>Username.</p>
     */
    public $UserName;

    /**
     * @var string <p>Nickname</p>
     */
    public $Nickname;

    /**
     * @var array <p>List of characters.</p>
     */
    public $Roles;

    /**
     * @var string <p>User source. group: user group, user: user</p>
     */
    public $UserSource;

    /**
     * @var string <p>Creation time. Millisecond timestamp</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Update time. Millisecond timestamp</p>
     */
    public $UpdateTime;

    /**
     * @var boolean <p>Root account or not</p>
     */
    public $IsOwner;

    /**
     * @var integer <p>0: general user 1: entraId user</p>
     */
    public $UserTag;

    /**
     * @var boolean <p>Whether the sub-account has admin permission</p>
     */
    public $IsAdmin;

    /**
     * @var array <p>Tags after merge (directly bound to user + inherited from user group)</p>
     */
    public $Tags;

    /**
     * @param string $UserUin <p>User UIN.</p>
     * @param string $UserName <p>Username.</p>
     * @param string $Nickname <p>Nickname</p>
     * @param array $Roles <p>List of characters.</p>
     * @param string $UserSource <p>User source. group: user group, user: user</p>
     * @param string $CreateTime <p>Creation time. Millisecond timestamp</p>
     * @param string $UpdateTime <p>Update time. Millisecond timestamp</p>
     * @param boolean $IsOwner <p>Root account or not</p>
     * @param integer $UserTag <p>0: general user 1: entraId user</p>
     * @param boolean $IsAdmin <p>Whether the sub-account has admin permission</p>
     * @param array $Tags <p>Tags after merge (directly bound to user + inherited from user group)</p>
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
        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = [];
            foreach ($param["Roles"] as $key => $value){
                $obj = new RoleBasicInfo();
                $obj->deserialize($value);
                array_push($this->Roles, $obj);
            }
        }

        if (array_key_exists("UserSource",$param) and $param["UserSource"] !== null) {
            $this->UserSource = $param["UserSource"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsOwner",$param) and $param["IsOwner"] !== null) {
            $this->IsOwner = $param["IsOwner"];
        }

        if (array_key_exists("UserTag",$param) and $param["UserTag"] !== null) {
            $this->UserTag = $param["UserTag"];
        }

        if (array_key_exists("IsAdmin",$param) and $param["IsAdmin"] !== null) {
            $this->IsAdmin = $param["IsAdmin"];
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
