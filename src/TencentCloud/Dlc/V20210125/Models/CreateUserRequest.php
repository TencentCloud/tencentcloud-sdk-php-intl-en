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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUser request structure.
 *
 * @method string getUserId() Obtain Sub-user UIN that needs to be granted permissions. It can be checked through the upper right corner of Tencent Cloud Console → Account Information → Account ID.
 * @method void setUserId(string $UserId) Set Sub-user UIN that needs to be granted permissions. It can be checked through the upper right corner of Tencent Cloud Console → Account Information → Account ID.
 * @method string getUserDescription() Obtain User description, which can make it easy to identify different users.
 * @method void setUserDescription(string $UserDescription) Set User description, which can make it easy to identify different users.
 * @method array getPolicySet() Obtain Collections of permissions bound to users
 * @method void setPolicySet(array $PolicySet) Set Collections of permissions bound to users
 * @method string getUserType() Obtain Types of users. ADMIN: administrators; COMMON: general users. When the type of user is administrator, the collections of permissions and bound working groups cannot be set. Administrators own all the permissions by default. If the parameter is not filled in, it will be COMMON by default.
 * @method void setUserType(string $UserType) Set Types of users. ADMIN: administrators; COMMON: general users. When the type of user is administrator, the collections of permissions and bound working groups cannot be set. Administrators own all the permissions by default. If the parameter is not filled in, it will be COMMON by default.
 * @method array getWorkGroupIds() Obtain Collection of IDs of working groups bound to users
 * @method void setWorkGroupIds(array $WorkGroupIds) Set Collection of IDs of working groups bound to users
 * @method string getUserAlias() Obtain User alias, and its characters are less than 50.
 * @method void setUserAlias(string $UserAlias) Set User alias, and its characters are less than 50.
 */
class CreateUserRequest extends AbstractModel
{
    /**
     * @var string Sub-user UIN that needs to be granted permissions. It can be checked through the upper right corner of Tencent Cloud Console → Account Information → Account ID.
     */
    public $UserId;

    /**
     * @var string User description, which can make it easy to identify different users.
     */
    public $UserDescription;

    /**
     * @var array Collections of permissions bound to users
     */
    public $PolicySet;

    /**
     * @var string Types of users. ADMIN: administrators; COMMON: general users. When the type of user is administrator, the collections of permissions and bound working groups cannot be set. Administrators own all the permissions by default. If the parameter is not filled in, it will be COMMON by default.
     */
    public $UserType;

    /**
     * @var array Collection of IDs of working groups bound to users
     */
    public $WorkGroupIds;

    /**
     * @var string User alias, and its characters are less than 50.
     */
    public $UserAlias;

    /**
     * @param string $UserId Sub-user UIN that needs to be granted permissions. It can be checked through the upper right corner of Tencent Cloud Console → Account Information → Account ID.
     * @param string $UserDescription User description, which can make it easy to identify different users.
     * @param array $PolicySet Collections of permissions bound to users
     * @param string $UserType Types of users. ADMIN: administrators; COMMON: general users. When the type of user is administrator, the collections of permissions and bound working groups cannot be set. Administrators own all the permissions by default. If the parameter is not filled in, it will be COMMON by default.
     * @param array $WorkGroupIds Collection of IDs of working groups bound to users
     * @param string $UserAlias User alias, and its characters are less than 50.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserDescription",$param) and $param["UserDescription"] !== null) {
            $this->UserDescription = $param["UserDescription"];
        }

        if (array_key_exists("PolicySet",$param) and $param["PolicySet"] !== null) {
            $this->PolicySet = [];
            foreach ($param["PolicySet"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->PolicySet, $obj);
            }
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("WorkGroupIds",$param) and $param["WorkGroupIds"] !== null) {
            $this->WorkGroupIds = $param["WorkGroupIds"];
        }

        if (array_key_exists("UserAlias",$param) and $param["UserAlias"] !== null) {
            $this->UserAlias = $param["UserAlias"];
        }
    }
}
