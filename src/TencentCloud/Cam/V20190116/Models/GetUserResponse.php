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
 * GetUser response structure.
 *
 * @method integer getUin() Obtain Sub-user UIN
 * @method void setUin(integer $Uin) Set Sub-user UIN
 * @method string getName() Obtain Sub-user username
 * @method void setName(string $Name) Set Sub-user username
 * @method integer getUid() Obtain Sub-user UID
 * @method void setUid(integer $Uid) Set Sub-user UID
 * @method string getRemark() Obtain Sub-user remarks
 * @method void setRemark(string $Remark) Set Sub-user remarks
 * @method integer getConsoleLogin() Obtain If sub-user can log in to the Console
 * @method void setConsoleLogin(integer $ConsoleLogin) Set If sub-user can log in to the Console
 * @method string getPhoneNum() Obtain Mobile number
 * @method void setPhoneNum(string $PhoneNum) Set Mobile number
 * @method string getCountryCode() Obtain Country/Area code
 * @method void setCountryCode(string $CountryCode) Set Country/Area code
 * @method string getEmail() Obtain Email
 * @method void setEmail(string $Email) Set Email
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetUserResponse extends AbstractModel
{
    /**
     * @var integer Sub-user UIN
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
     * @var integer If sub-user can log in to the Console
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
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Uin Sub-user UIN
     * @param string $Name Sub-user username
     * @param integer $Uid Sub-user UID
     * @param string $Remark Sub-user remarks
     * @param integer $ConsoleLogin If sub-user can log in to the Console
     * @param string $PhoneNum Mobile number
     * @param string $CountryCode Country/Area code
     * @param string $Email Email
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
