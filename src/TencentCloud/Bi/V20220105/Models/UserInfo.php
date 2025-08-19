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
 * @method string getEmail() Obtain Email.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEmail(string $Email) Set Email.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPhoneNumber() Obtain Mobile number.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhoneNumber(string $PhoneNumber) Set Mobile number.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAreaCode() Obtain Telephone country code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAreaCode(string $AreaCode) Set Telephone country code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAppUserId() Obtain WeCom account ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppUserId(string $AppUserId) Set WeCom account ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAppUserName() Obtain WeCom account name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppUserName(string $AppUserName) Set WeCom account name.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class UserInfo extends AbstractModel
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
     * @var string Email.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Email;

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
     * @var string WeCom account ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppUserId;

    /**
     * @var string WeCom account name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppUserName;

    /**
     * @param string $UserId User ID.
     * @param string $UserName Username.
     * @param string $Email Email.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PhoneNumber Mobile number.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AreaCode Telephone country code.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AppUserId WeCom account ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AppUserName WeCom account name.
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

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
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

        if (array_key_exists("AppUserName",$param) and $param["AppUserName"] !== null) {
            $this->AppUserName = $param["AppUserName"];
        }
    }
}
