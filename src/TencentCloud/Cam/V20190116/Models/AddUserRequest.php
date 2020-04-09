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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddUser request structure.
 *
 * @method string getName() Obtain Sub-user username
 * @method void setName(string $Name) Set Sub-user username
 * @method string getRemark() Obtain Sub-user remarks
 * @method void setRemark(string $Remark) Set Sub-user remarks
 * @method integer getConsoleLogin() Obtain Whether or not the sub-user is allowed to log in to the console. 0: No; 1: Yes.
 * @method void setConsoleLogin(integer $ConsoleLogin) Set Whether or not the sub-user is allowed to log in to the console. 0: No; 1: Yes.
 * @method integer getUseApi() Obtain Whether or not to generate keys for sub-users. 0: No; 1: Yes.
 * @method void setUseApi(integer $UseApi) Set Whether or not to generate keys for sub-users. 0: No; 1: Yes.
 * @method string getPassword() Obtain Sub-user's console login password. If no password rules have been set, the password must have a minimum of 8 characters containing uppercase letters, lowercase letters, digits, and special characters by default. This parameter will be valid only when the sub-user is allowed to log in to the console. If it is not specified and console login is allowed, the system will automatically generate a random 32-character password that contains uppercase letters, lowercase letters, digits, and special characters.
 * @method void setPassword(string $Password) Set Sub-user's console login password. If no password rules have been set, the password must have a minimum of 8 characters containing uppercase letters, lowercase letters, digits, and special characters by default. This parameter will be valid only when the sub-user is allowed to log in to the console. If it is not specified and console login is allowed, the system will automatically generate a random 32-character password that contains uppercase letters, lowercase letters, digits, and special characters.
 * @method integer getNeedResetPassword() Obtain If the sub-user needs to reset their password when they next log in to the console. 0: No; 1: Yes.
 * @method void setNeedResetPassword(integer $NeedResetPassword) Set If the sub-user needs to reset their password when they next log in to the console. 0: No; 1: Yes.
 * @method string getPhoneNum() Obtain Mobile number
 * @method void setPhoneNum(string $PhoneNum) Set Mobile number
 * @method string getCountryCode() Obtain Country/Area Code
 * @method void setCountryCode(string $CountryCode) Set Country/Area Code
 * @method string getEmail() Obtain Email
 * @method void setEmail(string $Email) Set Email
 */
class AddUserRequest extends AbstractModel
{
    /**
     * @var string Sub-user username
     */
    public $Name;

    /**
     * @var string Sub-user remarks
     */
    public $Remark;

    /**
     * @var integer Whether or not the sub-user is allowed to log in to the console. 0: No; 1: Yes.
     */
    public $ConsoleLogin;

    /**
     * @var integer Whether or not to generate keys for sub-users. 0: No; 1: Yes.
     */
    public $UseApi;

    /**
     * @var string Sub-user's console login password. If no password rules have been set, the password must have a minimum of 8 characters containing uppercase letters, lowercase letters, digits, and special characters by default. This parameter will be valid only when the sub-user is allowed to log in to the console. If it is not specified and console login is allowed, the system will automatically generate a random 32-character password that contains uppercase letters, lowercase letters, digits, and special characters.
     */
    public $Password;

    /**
     * @var integer If the sub-user needs to reset their password when they next log in to the console. 0: No; 1: Yes.
     */
    public $NeedResetPassword;

    /**
     * @var string Mobile number
     */
    public $PhoneNum;

    /**
     * @var string Country/Area Code
     */
    public $CountryCode;

    /**
     * @var string Email
     */
    public $Email;

    /**
     * @param string $Name Sub-user username
     * @param string $Remark Sub-user remarks
     * @param integer $ConsoleLogin Whether or not the sub-user is allowed to log in to the console. 0: No; 1: Yes.
     * @param integer $UseApi Whether or not to generate keys for sub-users. 0: No; 1: Yes.
     * @param string $Password Sub-user's console login password. If no password rules have been set, the password must have a minimum of 8 characters containing uppercase letters, lowercase letters, digits, and special characters by default. This parameter will be valid only when the sub-user is allowed to log in to the console. If it is not specified and console login is allowed, the system will automatically generate a random 32-character password that contains uppercase letters, lowercase letters, digits, and special characters.
     * @param integer $NeedResetPassword If the sub-user needs to reset their password when they next log in to the console. 0: No; 1: Yes.
     * @param string $PhoneNum Mobile number
     * @param string $CountryCode Country/Area Code
     * @param string $Email Email
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ConsoleLogin",$param) and $param["ConsoleLogin"] !== null) {
            $this->ConsoleLogin = $param["ConsoleLogin"];
        }

        if (array_key_exists("UseApi",$param) and $param["UseApi"] !== null) {
            $this->UseApi = $param["UseApi"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("NeedResetPassword",$param) and $param["NeedResetPassword"] !== null) {
            $this->NeedResetPassword = $param["NeedResetPassword"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }
    }
}
