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
 * @method integer getUin() 获取Sub-user user ID
 * @method void setUin(integer $Uin) 设置Sub-user user ID
 * @method string getName() 获取Sub-user username
 * @method void setName(string $Name) 设置Sub-user username
 * @method integer getUid() 获取Sub-user UID
 * @method void setUid(integer $Uid) 设置Sub-user UID
 * @method string getRemark() 获取Sub-user remarks
 * @method void setRemark(string $Remark) 设置Sub-user remarks
 * @method integer getConsoleLogin() 获取If sub-user can log in to the console
 * @method void setConsoleLogin(integer $ConsoleLogin) 设置If sub-user can log in to the console
 * @method string getPhoneNum() 获取Mobile number
 * @method void setPhoneNum(string $PhoneNum) 设置Mobile number
 * @method string getCountryCode() 获取Country/Area code
 * @method void setCountryCode(string $CountryCode) 设置Country/Area code
 * @method string getEmail() 获取Email
 * @method void setEmail(string $Email) 设置Email
 */

/**
 *Sub-user information
 */
class SubAccountInfo extends AbstractModel
{
    /**
     * @var integer Sub-user user ID
     */
    public $Uin;

    /**
     * @var string Sub-user username
     */
    public $Name;

    /**
     * @var integer Sub-user UID
     */
    public $Uid;

    /**
     * @var string Sub-user remarks
     */
    public $Remark;

    /**
     * @var integer If sub-user can log in to the console
     */
    public $ConsoleLogin;

    /**
     * @var string Mobile number
     */
    public $PhoneNum;

    /**
     * @var string Country/Area code
     */
    public $CountryCode;

    /**
     * @var string Email
     */
    public $Email;
    /**
     * @param integer $Uin Sub-user user ID
     * @param string $Name Sub-user username
     * @param integer $Uid Sub-user UID
     * @param string $Remark Sub-user remarks
     * @param integer $ConsoleLogin If sub-user can log in to the console
     * @param string $PhoneNum Mobile number
     * @param string $CountryCode Country/Area code
     * @param string $Email Email
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ConsoleLogin",$param) and $param["ConsoleLogin"] !== null) {
            $this->ConsoleLogin = $param["ConsoleLogin"];
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
