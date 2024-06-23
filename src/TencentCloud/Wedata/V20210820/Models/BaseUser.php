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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic User Information
 *
 * @method string getUserId() Obtain Cloud User UIN, Globally Unique
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserId(string $UserId) Set Cloud User UIN, Globally Unique
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUserName() Obtain User Global Unique Identifier
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserName(string $UserName) Set User Global Unique Identifier
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDisplayName() Obtain User Display Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDisplayName(string $DisplayName) Set User Display Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getPhoneNum() Obtain Telephone Number
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPhoneNum(string $PhoneNum) Set Telephone Number
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEmail() Obtain Email
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEmail(string $Email) Set Email
Note: This field may return null, indicating that no valid value can be obtained.
 */
class BaseUser extends AbstractModel
{
    /**
     * @var string Cloud User UIN, Globally Unique
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserId;

    /**
     * @var string User Global Unique Identifier
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserName;

    /**
     * @var string User Display Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DisplayName;

    /**
     * @var string Telephone Number
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PhoneNum;

    /**
     * @var string Email
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Email;

    /**
     * @param string $UserId Cloud User UIN, Globally Unique
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UserName User Global Unique Identifier
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DisplayName User Display Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $PhoneNum Telephone Number
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Email Email
Note: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }
    }
}
