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
 * Information about the authorized user
 *
 * @method string getUserId() Obtain User ID, which is the same as the sub-user UIN
 * @method void setUserId(string $UserId) Set User ID, which is the same as the sub-user UIN
 * @method string getUserDescription() Obtain User description, which can make it easy to identify different users.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserDescription(string $UserDescription) Set User description, which can make it easy to identify different users.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPolicySet() Obtain Collection of permissions solely bound to users
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicySet(array $PolicySet) Set Collection of permissions solely bound to users
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreator() Obtain Creator of the current user
 * @method void setCreator(string $Creator) Set Creator of the current user
 * @method string getCreateTime() Obtain Creation time, and the example of the format is at 16:19:32 on Jul 28, 2021.
 * @method void setCreateTime(string $CreateTime) Set Creation time, and the example of the format is at 16:19:32 on Jul 28, 2021.
 * @method array getWorkGroupSet() Obtain Collection of associated working groups
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkGroupSet(array $WorkGroupSet) Set Collection of associated working groups
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsOwner() Obtain Whether it is the root account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsOwner(boolean $IsOwner) Set Whether it is the root account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserType() Obtain Types of users. ADMIN: administrators; COMMON: general users
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserType(string $UserType) Set Types of users. ADMIN: administrators; COMMON: general users
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserAlias() Obtain User alias
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserAlias(string $UserAlias) Set User alias
Note: This field may return null, indicating that no valid values can be obtained.
 */
class UserInfo extends AbstractModel
{
    /**
     * @var string User ID, which is the same as the sub-user UIN
     */
    public $UserId;

    /**
     * @var string User description, which can make it easy to identify different users.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserDescription;

    /**
     * @var array Collection of permissions solely bound to users
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicySet;

    /**
     * @var string Creator of the current user
     */
    public $Creator;

    /**
     * @var string Creation time, and the example of the format is at 16:19:32 on Jul 28, 2021.
     */
    public $CreateTime;

    /**
     * @var array Collection of associated working groups
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkGroupSet;

    /**
     * @var boolean Whether it is the root account
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsOwner;

    /**
     * @var string Types of users. ADMIN: administrators; COMMON: general users
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserType;

    /**
     * @var string User alias
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserAlias;

    /**
     * @param string $UserId User ID, which is the same as the sub-user UIN
     * @param string $UserDescription User description, which can make it easy to identify different users.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PolicySet Collection of permissions solely bound to users
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Creator Creator of the current user
     * @param string $CreateTime Creation time, and the example of the format is at 16:19:32 on Jul 28, 2021.
     * @param array $WorkGroupSet Collection of associated working groups
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsOwner Whether it is the root account
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserType Types of users. ADMIN: administrators; COMMON: general users
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserAlias User alias
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("WorkGroupSet",$param) and $param["WorkGroupSet"] !== null) {
            $this->WorkGroupSet = [];
            foreach ($param["WorkGroupSet"] as $key => $value){
                $obj = new WorkGroupMessage();
                $obj->deserialize($value);
                array_push($this->WorkGroupSet, $obj);
            }
        }

        if (array_key_exists("IsOwner",$param) and $param["IsOwner"] !== null) {
            $this->IsOwner = $param["IsOwner"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("UserAlias",$param) and $param["UserAlias"] !== null) {
            $this->UserAlias = $param["UserAlias"];
        }
    }
}
