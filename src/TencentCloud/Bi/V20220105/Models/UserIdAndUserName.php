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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User ID and username
 *
 * @method string getUserId() Obtain User ID.
 * @method void setUserId(string $UserId) Set User ID.
 * @method string getUserName() Obtain Username.
 * @method void setUserName(string $UserName) Set Username.
 * @method string getCorpId() Obtain Enterprise ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCorpId(string $CorpId) Set Enterprise ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEmail() Obtain Email.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEmail(string $Email) Set Email.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastLogin() Obtain Last login time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastLogin(string $LastLogin) Set Last login time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Enabled/Disabled status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Enabled/Disabled status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFirstModify() Obtain Whether to change the password during the first-time login.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstModify(integer $FirstModify) Set Whether to change the password during the first-time login.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPhoneNumber() Obtain Mobile number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhoneNumber(string $PhoneNumber) Set Mobile number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAreaCode() Obtain Telephone country code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAreaCode(string $AreaCode) Set Telephone country code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedUser() Obtain Creator.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedUser(string $CreatedUser) Set Creator.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedAt() Obtain Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedAt(string $CreatedAt) Set Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedUser() Obtain Modifier.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedUser(string $UpdatedUser) Set Modifier.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedAt() Obtain Change time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedAt(string $UpdatedAt) Set Change time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGlobalUserName() Obtain Global role.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGlobalUserName(string $GlobalUserName) Set Global role.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGlobalUserCode() Obtain Global role code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGlobalUserCode(string $GlobalUserCode) Set Global role code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMobile() Obtain Mobile number.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMobile(string $Mobile) Set Mobile number.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAppId() Obtain 1
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppId(string $AppId) Set 1
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAppUserId() Obtain 1
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppUserId(string $AppUserId) Set 1
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAppUserAliasName() Obtain 1
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppUserAliasName(string $AppUserAliasName) Set 1
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAppUserName() Obtain 1
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppUserName(string $AppUserName) Set 1
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getInValidateAppRange() Obtain 1
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInValidateAppRange(boolean $InValidateAppRange) Set 1
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEmailActivationStatus() Obtain  -1: No activation required. 0: Inactivated. 1: Activated. Null value represents pending binding.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEmailActivationStatus(integer $EmailActivationStatus) Set  -1: No activation required. 0: Inactivated. 1: Activated. Null value represents pending binding.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getId() Obtain 1
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(integer $Id) Set 1
Note: This field may return null, indicating that no valid values can be obtained.
 */
class UserIdAndUserName extends AbstractModel
{
    /**
     * @var string User ID.
     */
    public $UserId;

    /**
     * @var string Username.
     */
    public $UserName;

    /**
     * @var string Enterprise ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CorpId;

    /**
     * @var string Email.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Email;

    /**
     * @var string Last login time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastLogin;

    /**
     * @var integer Enabled/Disabled status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Whether to change the password during the first-time login.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstModify;

    /**
     * @var string Mobile number.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PhoneNumber;

    /**
     * @var string Telephone country code.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AreaCode;

    /**
     * @var string Creator.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedUser;

    /**
     * @var string Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedAt;

    /**
     * @var string Modifier.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedUser;

    /**
     * @var string Change time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedAt;

    /**
     * @var string Global role.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GlobalUserName;

    /**
     * @var string Global role code.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GlobalUserCode;

    /**
     * @var string Mobile number.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Mobile;

    /**
     * @var string 1
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string 1
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppUserId;

    /**
     * @var string 1
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppUserAliasName;

    /**
     * @var string 1
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppUserName;

    /**
     * @var boolean 1
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InValidateAppRange;

    /**
     * @var integer  -1: No activation required. 0: Inactivated. 1: Activated. Null value represents pending binding.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EmailActivationStatus;

    /**
     * @var integer 1
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @param string $UserId User ID.
     * @param string $UserName Username.
     * @param string $CorpId Enterprise ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Email Email.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastLogin Last login time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Enabled/Disabled status.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FirstModify Whether to change the password during the first-time login.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PhoneNumber Mobile number.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AreaCode Telephone country code.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedUser Creator.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedAt Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedUser Modifier.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedAt Change time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GlobalUserName Global role.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GlobalUserCode Global role code.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Mobile Mobile number.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AppId 1
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AppUserId 1
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AppUserAliasName 1
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AppUserName 1
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $InValidateAppRange 1
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EmailActivationStatus  -1: No activation required. 0: Inactivated. 1: Activated. Null value represents pending binding.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Id 1
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("LastLogin",$param) and $param["LastLogin"] !== null) {
            $this->LastLogin = $param["LastLogin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FirstModify",$param) and $param["FirstModify"] !== null) {
            $this->FirstModify = $param["FirstModify"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("AreaCode",$param) and $param["AreaCode"] !== null) {
            $this->AreaCode = $param["AreaCode"];
        }

        if (array_key_exists("CreatedUser",$param) and $param["CreatedUser"] !== null) {
            $this->CreatedUser = $param["CreatedUser"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedUser",$param) and $param["UpdatedUser"] !== null) {
            $this->UpdatedUser = $param["UpdatedUser"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("GlobalUserName",$param) and $param["GlobalUserName"] !== null) {
            $this->GlobalUserName = $param["GlobalUserName"];
        }

        if (array_key_exists("GlobalUserCode",$param) and $param["GlobalUserCode"] !== null) {
            $this->GlobalUserCode = $param["GlobalUserCode"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppUserId",$param) and $param["AppUserId"] !== null) {
            $this->AppUserId = $param["AppUserId"];
        }

        if (array_key_exists("AppUserAliasName",$param) and $param["AppUserAliasName"] !== null) {
            $this->AppUserAliasName = $param["AppUserAliasName"];
        }

        if (array_key_exists("AppUserName",$param) and $param["AppUserName"] !== null) {
            $this->AppUserName = $param["AppUserName"];
        }

        if (array_key_exists("InValidateAppRange",$param) and $param["InValidateAppRange"] !== null) {
            $this->InValidateAppRange = $param["InValidateAppRange"];
        }

        if (array_key_exists("EmailActivationStatus",$param) and $param["EmailActivationStatus"] !== null) {
            $this->EmailActivationStatus = $param["EmailActivationStatus"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
