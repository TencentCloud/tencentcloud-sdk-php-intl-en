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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Project user object.
 *
 * @method string getAppId() Obtain Tenant ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppId(string $AppId) Set Tenant ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRootAccountId() Obtain Host Account ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRootAccountId(string $RootAccountId) Set Host Account ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserUin() Obtain User ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserUin(string $UserUin) Set User ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain Username.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set Username.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDisplayName() Obtain Display name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDisplayName(string $DisplayName) Set Display name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRoles() Obtain User role object.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoles(array $Roles) Set User role object.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsCreator() Obtain Whether to create.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsCreator(boolean $IsCreator) Set Whether to create.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsProjectOwner() Obtain Whether the project leader.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsProjectOwner(boolean $IsProjectOwner) Set Whether the project leader.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPhoneNum() Obtain Mobile number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhoneNum(string $PhoneNum) Set Mobile number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEmail() Obtain Mailbox.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEmail(string $Email) Set Mailbox.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ProjectUserRole extends AbstractModel
{
    /**
     * @var string Tenant ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string Host Account ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RootAccountId;

    /**
     * @var string User ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserUin;

    /**
     * @var string Username.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var string Display name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DisplayName;

    /**
     * @var array User role object.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Roles;

    /**
     * @var boolean Whether to create.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsCreator;

    /**
     * @var string Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var boolean Whether the project leader.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsProjectOwner;

    /**
     * @var string Mobile number.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PhoneNum;

    /**
     * @var string Mailbox.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Email;

    /**
     * @param string $AppId Tenant ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RootAccountId Host Account ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserUin User ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserName Username.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DisplayName Display name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Roles User role object.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsCreator Whether to create.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsProjectOwner Whether the project leader.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PhoneNum Mobile number.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Email Mailbox.
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("RootAccountId",$param) and $param["RootAccountId"] !== null) {
            $this->RootAccountId = $param["RootAccountId"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = [];
            foreach ($param["Roles"] as $key => $value){
                $obj = new SystemRole();
                $obj->deserialize($value);
                array_push($this->Roles, $obj);
            }
        }

        if (array_key_exists("IsCreator",$param) and $param["IsCreator"] !== null) {
            $this->IsCreator = $param["IsCreator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsProjectOwner",$param) and $param["IsProjectOwner"] !== null) {
            $this->IsProjectOwner = $param["IsProjectOwner"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }
    }
}
