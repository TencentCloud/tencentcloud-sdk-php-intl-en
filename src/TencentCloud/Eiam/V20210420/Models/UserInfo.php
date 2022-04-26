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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User information list.
 *
 * @method string getUserId() Obtain User ID, which is globally unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserId(string $UserId) Set User ID, which is globally unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDisplayName() Obtain Nickname, which can contain up to 64 characters and is the same as the username by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDisplayName(string $DisplayName) Set Nickname, which can contain up to 64 characters and is the same as the username by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain Username.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set Username.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPhone() Obtain User's mobile number.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPhone(string $Phone) Set User's mobile number.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEmail() Obtain Email address.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEmail(string $Email) Set Email address.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain User status.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set User status.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDataSource() Obtain Data source.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDataSource(string $DataSource) Set Data source.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class UserInfo extends AbstractModel
{
    /**
     * @var string User ID, which is globally unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserId;

    /**
     * @var string Nickname, which can contain up to 64 characters and is the same as the username by default.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DisplayName;

    /**
     * @var string Username.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var string User's mobile number.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Phone;

    /**
     * @var string Email address.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Email;

    /**
     * @var string User status.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Data source.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DataSource;

    /**
     * @param string $UserId User ID, which is globally unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DisplayName Nickname, which can contain up to 64 characters and is the same as the username by default.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UserName Username.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Phone User's mobile number.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Email Email address.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Status User status.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DataSource Data source.
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = $param["DataSource"];
        }
    }
}
