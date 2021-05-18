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
 * @method string getAccountType() Obtain The account type identification of the newly created customer. The value of this interface is: business
 * @method void setAccountType(string $AccountType) Set The account type identification of the newly created customer. The value of this interface is: business
 * @method string getMail() Obtain Registered email address. The caller needs to ensure the validity and correctness of the email address.
The email format must be met. For example: account@qq.com
 * @method void setMail(string $Mail) Set Registered email address. The caller needs to ensure the validity and correctness of the email address.
The email format must be met. For example: account@qq.com
 * @method string getPassword() Obtain Account password.
Length limit: [8,20].
It must also contain numbers, letters and special symbols (!@#$%^&*() and other non-spaces)
 * @method void setPassword(string $Password) Set Account password.
Length limit: [8,20].
It must also contain numbers, letters and special symbols (!@#$%^&*() and other non-spaces)
 * @method string getConfirmPassword() Obtain Reconfirm the password. It must be the same as the Password value
 * @method void setConfirmPassword(string $ConfirmPassword) Set Reconfirm the password. It must be the same as the Password value
 * @method string getPhoneNum() Obtain Customer's mobile phone number. The caller is required to ensure the validity and correctness of the mobile phone number.
Length limit: [1,32]. Global mobile phone numbers are supported. For example, 18888888888
 * @method void setPhoneNum(string $PhoneNum) Set Customer's mobile phone number. The caller is required to ensure the validity and correctness of the mobile phone number.
Length limit: [1,32]. Global mobile phone numbers are supported. For example, 18888888888
 * @method string getCountryCode() Obtain The country code of the customer. For the value, please refer to the GetCountryCodes interface GetCountryCodes. Such as 86
 * @method void setCountryCode(string $CountryCode) Set The country code of the customer. For the value, please refer to the GetCountryCodes interface GetCountryCodes. Such as 86
 * @method string getArea() Obtain Customer's IOS2 standard country code. Refer to the GetCountryCodes interface for obtaining country codes. It needs to correspond to the CountryCode value. Such as CN
 * @method void setArea(string $Area) Set Customer's IOS2 standard country code. Refer to the GetCountryCodes interface for obtaining country codes. It needs to correspond to the CountryCode value. Such as CN
 * @method string getExtended() Obtain Extension field, default is empty
 * @method void setExtended(string $Extended) Set Extension field, default is empty
 */
class CreateAccountRequest extends AbstractModel
{
    /**
     * @var string The account type identification of the newly created customer. The value of this interface is: business
     */
    public $AccountType;

    /**
     * @var string Registered email address. The caller needs to ensure the validity and correctness of the email address.
The email format must be met. For example: account@qq.com
     */
    public $Mail;

    /**
     * @var string Account password.
Length limit: [8,20].
It must also contain numbers, letters and special symbols (!@#$%^&*() and other non-spaces)
     */
    public $Password;

    /**
     * @var string Reconfirm the password. It must be the same as the Password value
     */
    public $ConfirmPassword;

    /**
     * @var string Customer's mobile phone number. The caller is required to ensure the validity and correctness of the mobile phone number.
Length limit: [1,32]. Global mobile phone numbers are supported. For example, 18888888888
     */
    public $PhoneNum;

    /**
     * @var string The country code of the customer. For the value, please refer to the GetCountryCodes interface GetCountryCodes. Such as 86
     */
    public $CountryCode;

    /**
     * @var string Customer's IOS2 standard country code. Refer to the GetCountryCodes interface for obtaining country codes. It needs to correspond to the CountryCode value. Such as CN
     */
    public $Area;

    /**
     * @var string Extension field, default is empty
     */
    public $Extended;

    /**
     * @param string $AccountType The account type identification of the newly created customer. The value of this interface is: business
     * @param string $Mail Registered email address. The caller needs to ensure the validity and correctness of the email address.
The email format must be met. For example: account@qq.com
     * @param string $Password Account password.
Length limit: [8,20].
It must also contain numbers, letters and special symbols (!@#$%^&*() and other non-spaces)
     * @param string $ConfirmPassword Reconfirm the password. It must be the same as the Password value
     * @param string $PhoneNum Customer's mobile phone number. The caller is required to ensure the validity and correctness of the mobile phone number.
Length limit: [1,32]. Global mobile phone numbers are supported. For example, 18888888888
     * @param string $CountryCode The country code of the customer. For the value, please refer to the GetCountryCodes interface GetCountryCodes. Such as 86
     * @param string $Area Customer's IOS2 standard country code. Refer to the GetCountryCodes interface for obtaining country codes. It needs to correspond to the CountryCode value. Such as CN
     * @param string $Extended Extension field, default is empty
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
