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
 * ModifyUserRole request structure.
 *
 * @method string getUserId() Obtain User ID.
 * @method void setUserId(string $UserId) Set User ID.
 * @method array getRoleIdList() Obtain Role ID list.
 * @method void setRoleIdList(array $RoleIdList) Set Role ID list.
 * @method string getEmail() Obtain Mailbox.
 * @method void setEmail(string $Email) Set Mailbox.
 * @method string getUserName() Obtain Username.
 * @method void setUserName(string $UserName) Set Username.
 * @method string getPhoneNumber() Obtain Mobile number.
 * @method void setPhoneNumber(string $PhoneNumber) Set Mobile number.
 * @method string getAreaCode() Obtain Telephone country code.
 * @method void setAreaCode(string $AreaCode) Set Telephone country code.
 * @method string getAppUserId() Obtain WeCom user ID.
 * @method void setAppUserId(string $AppUserId) Set WeCom user ID.
 * @method integer getLoginSecurityStatus() Obtain Whether to enable mobile phone verification code login (0: disabled, 1: enabled).
 * @method void setLoginSecurityStatus(integer $LoginSecurityStatus) Set Whether to enable mobile phone verification code login (0: disabled, 1: enabled).
 * @method integer getResetPassWordTip() Obtain Whether to enable password expiration reminder (0: disabled, 1: enabled).
 * @method void setResetPassWordTip(integer $ResetPassWordTip) Set Whether to enable password expiration reminder (0: disabled, 1: enabled).
 * @method integer getForceResetPassWord() Obtain Force password reset (0: disabled, 1: enabled).
 * @method void setForceResetPassWord(integer $ForceResetPassWord) Set Force password reset (0: disabled, 1: enabled).
 * @method integer getPasswordExpired() Obtain Password expiration reminder period: 30, 60, 90 (default), or 180 days.
 * @method void setPasswordExpired(integer $PasswordExpired) Set Password expiration reminder period: 30, 60, 90 (default), or 180 days.
 */
class ModifyUserRoleRequest extends AbstractModel
{
    /**
     * @var string User ID.
     */
    public $UserId;

    /**
     * @var array Role ID list.
     */
    public $RoleIdList;

    /**
     * @var string Mailbox.
     */
    public $Email;

    /**
     * @var string Username.
     */
    public $UserName;

    /**
     * @var string Mobile number.
     */
    public $PhoneNumber;

    /**
     * @var string Telephone country code.
     */
    public $AreaCode;

    /**
     * @var string WeCom user ID.
     */
    public $AppUserId;

    /**
     * @var integer Whether to enable mobile phone verification code login (0: disabled, 1: enabled).
     */
    public $LoginSecurityStatus;

    /**
     * @var integer Whether to enable password expiration reminder (0: disabled, 1: enabled).
     */
    public $ResetPassWordTip;

    /**
     * @var integer Force password reset (0: disabled, 1: enabled).
     */
    public $ForceResetPassWord;

    /**
     * @var integer Password expiration reminder period: 30, 60, 90 (default), or 180 days.
     */
    public $PasswordExpired;

    /**
     * @param string $UserId User ID.
     * @param array $RoleIdList Role ID list.
     * @param string $Email Mailbox.
     * @param string $UserName Username.
     * @param string $PhoneNumber Mobile number.
     * @param string $AreaCode Telephone country code.
     * @param string $AppUserId WeCom user ID.
     * @param integer $LoginSecurityStatus Whether to enable mobile phone verification code login (0: disabled, 1: enabled).
     * @param integer $ResetPassWordTip Whether to enable password expiration reminder (0: disabled, 1: enabled).
     * @param integer $ForceResetPassWord Force password reset (0: disabled, 1: enabled).
     * @param integer $PasswordExpired Password expiration reminder period: 30, 60, 90 (default), or 180 days.
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

        if (array_key_exists("RoleIdList",$param) and $param["RoleIdList"] !== null) {
            $this->RoleIdList = $param["RoleIdList"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("AreaCode",$param) and $param["AreaCode"] !== null) {
            $this->AreaCode = $param["AreaCode"];
        }

        if (array_key_exists("AppUserId",$param) and $param["AppUserId"] !== null) {
            $this->AppUserId = $param["AppUserId"];
        }

        if (array_key_exists("LoginSecurityStatus",$param) and $param["LoginSecurityStatus"] !== null) {
            $this->LoginSecurityStatus = $param["LoginSecurityStatus"];
        }

        if (array_key_exists("ResetPassWordTip",$param) and $param["ResetPassWordTip"] !== null) {
            $this->ResetPassWordTip = $param["ResetPassWordTip"];
        }

        if (array_key_exists("ForceResetPassWord",$param) and $param["ForceResetPassWord"] !== null) {
            $this->ForceResetPassWord = $param["ForceResetPassWord"];
        }

        if (array_key_exists("PasswordExpired",$param) and $param["PasswordExpired"] !== null) {
            $this->PasswordExpired = $param["PasswordExpired"];
        }
    }
}
