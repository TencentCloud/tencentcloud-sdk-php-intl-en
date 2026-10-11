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
 * Console user information (normalized, decoupled from internal UserDetailInfo)
 *
 * @method string getUserUin() Obtain User UIN.
 * @method void setUserUin(string $UserUin) Set User UIN.
 * @method string getUserName() Obtain Username.
 * @method void setUserName(string $UserName) Set Username.
 * @method string getNickname() Obtain Nickname
 * @method void setNickname(string $Nickname) Set Nickname
 * @method array getRoles() Obtain List of characters.
 * @method void setRoles(array $Roles) Set List of characters.
 * @method string getUserSource() Obtain User source. group: user group, user: user
 * @method void setUserSource(string $UserSource) Set User source. group: user group, user: user
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 * @method boolean getIsOwner() Obtain Whether it is the root account.
 * @method void setIsOwner(boolean $IsOwner) Set Whether it is the root account.
 * @method integer getUserTag() Obtain 0: general user; 1: Entra ID user.
 * @method void setUserTag(integer $UserTag) Set 0: general user; 1: Entra ID user.
 * @method boolean getIsAdmin() Obtain Whether it is a sub-account with admin permission
 * @method void setIsAdmin(boolean $IsAdmin) Set Whether it is a sub-account with admin permission
 */
class ConsoleUserInfo extends AbstractModel
{
    /**
     * @var string User UIN.
     */
    public $UserUin;

    /**
     * @var string Username.
     */
    public $UserName;

    /**
     * @var string Nickname
     */
    public $Nickname;

    /**
     * @var array List of characters.
     */
    public $Roles;

    /**
     * @var string User source. group: user group, user: user
     */
    public $UserSource;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @var boolean Whether it is the root account.
     */
    public $IsOwner;

    /**
     * @var integer 0: general user; 1: Entra ID user.
     */
    public $UserTag;

    /**
     * @var boolean Whether it is a sub-account with admin permission
     */
    public $IsAdmin;

    /**
     * @param string $UserUin User UIN.
     * @param string $UserName Username.
     * @param string $Nickname Nickname
     * @param array $Roles List of characters.
     * @param string $UserSource User source. group: user group, user: user
     * @param string $CreateTime Creation time.
     * @param string $UpdateTime Update time.
     * @param boolean $IsOwner Whether it is the root account.
     * @param integer $UserTag 0: general user; 1: Entra ID user.
     * @param boolean $IsAdmin Whether it is a sub-account with admin permission
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
    }
}
