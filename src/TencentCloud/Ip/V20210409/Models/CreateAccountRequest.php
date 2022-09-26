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
namespace TencentCloud\Ip\V20210409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAccount request structure.
 *
 * @method string getAccountType() Obtain Account type of a new customer. Valid values: `personal`, `company`.
 * @method void setAccountType(string $AccountType) Set Account type of a new customer. Valid values: `personal`, `company`.
 * @method string getMail() Obtain Registered email address, which should be valid and correct.
For example, account@qq.com.
 * @method void setMail(string $Mail) Set Registered email address, which should be valid and correct.
For example, account@qq.com.
 * @method string getPassword() Obtain Account password
Length limit: 8-20 characters
A password must contain numbers, letters, and special symbols [!@#$%^&*()]. Spaces are not allowed.
 * @method void setPassword(string $Password) Set Account password
Length limit: 8-20 characters
A password must contain numbers, letters, and special symbols [!@#$%^&*()]. Spaces are not allowed.
 * @method string getConfirmPassword() Obtain Confirm the password. It must be the same as the `Password` field.
 * @method void setConfirmPassword(string $ConfirmPassword) Set Confirm the password. It must be the same as the `Password` field.
 * @method string getPhoneNum() Obtain Customer mobile number, which should be valid and correct.
A global mobile number within 1-32 digits is allowed, such as 18888888888.
 * @method void setPhoneNum(string $PhoneNum) Set Customer mobile number, which should be valid and correct.
A global mobile number within 1-32 digits is allowed, such as 18888888888.
 * @method string getCountryCode() Obtain Customer’s country/region code, which can be obtained via the `GetCountryCodes` API, such as “852”.
 * @method void setCountryCode(string $CountryCode) Set Customer’s country/region code, which can be obtained via the `GetCountryCodes` API, such as “852”.
 * @method string getArea() Obtain Customer’s ISO2 standard country/region code, which can be obtained via the `GetCountryCodes` API. It should correspond to the `CountryCode` field, such as `HK`.
 * @method void setArea(string $Area) Set Customer’s ISO2 standard country/region code, which can be obtained via the `GetCountryCodes` API. It should correspond to the `CountryCode` field, such as `HK`.
 * @method string getExtended() Obtain Expanded field, which is left empty by default.
 * @method void setExtended(string $Extended) Set Expanded field, which is left empty by default.
 */
class CreateAccountRequest extends AbstractModel
{
    /**
     * @var string Account type of a new customer. Valid values: `personal`, `company`.
     */
    public $AccountType;

    /**
     * @var string Registered email address, which should be valid and correct.
For example, account@qq.com.
     */
    public $Mail;

    /**
     * @var string Account password
Length limit: 8-20 characters
A password must contain numbers, letters, and special symbols [!@#$%^&*()]. Spaces are not allowed.
     */
    public $Password;

    /**
     * @var string Confirm the password. It must be the same as the `Password` field.
     */
    public $ConfirmPassword;

    /**
     * @var string Customer mobile number, which should be valid and correct.
A global mobile number within 1-32 digits is allowed, such as 18888888888.
     */
    public $PhoneNum;

    /**
     * @var string Customer’s country/region code, which can be obtained via the `GetCountryCodes` API, such as “852”.
     */
    public $CountryCode;

    /**
     * @var string Customer’s ISO2 standard country/region code, which can be obtained via the `GetCountryCodes` API. It should correspond to the `CountryCode` field, such as `HK`.
     */
    public $Area;

    /**
     * @var string Expanded field, which is left empty by default.
     */
    public $Extended;

    /**
     * @param string $AccountType Account type of a new customer. Valid values: `personal`, `company`.
     * @param string $Mail Registered email address, which should be valid and correct.
For example, account@qq.com.
     * @param string $Password Account password
Length limit: 8-20 characters
A password must contain numbers, letters, and special symbols [!@#$%^&*()]. Spaces are not allowed.
     * @param string $ConfirmPassword Confirm the password. It must be the same as the `Password` field.
     * @param string $PhoneNum Customer mobile number, which should be valid and correct.
A global mobile number within 1-32 digits is allowed, such as 18888888888.
     * @param string $CountryCode Customer’s country/region code, which can be obtained via the `GetCountryCodes` API, such as “852”.
     * @param string $Area Customer’s ISO2 standard country/region code, which can be obtained via the `GetCountryCodes` API. It should correspond to the `CountryCode` field, such as `HK`.
     * @param string $Extended Expanded field, which is left empty by default.
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
        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ConfirmPassword",$param) and $param["ConfirmPassword"] !== null) {
            $this->ConfirmPassword = $param["ConfirmPassword"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Extended",$param) and $param["Extended"] !== null) {
            $this->Extended = $param["Extended"];
        }
    }
}
