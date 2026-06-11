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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DataSight Console user account information
 *
 * @method string getUserName() Obtain <p>Username.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set <p>Username.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPassword() Obtain <p>User password</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPassword(string $Password) Set <p>User password</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSecretId() Obtain <p>Tencent Cloud account SecretId</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecretId(string $SecretId) Set <p>Tencent Cloud account SecretId</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSecretKey() Obtain <p>Tencent Cloud Account SecretKey</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecretKey(string $SecretKey) Set <p>Tencent Cloud Account SecretKey</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEmail() Obtain <p>Electronic mailbox for sending verification code</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEmail(string $Email) Set <p>Electronic mailbox for sending verification code</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ConsoleAccount extends AbstractModel
{
    /**
     * @var string <p>Username.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var string <p>User password</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Password;

    /**
     * @var string <p>Tencent Cloud account SecretId</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecretId;

    /**
     * @var string <p>Tencent Cloud Account SecretKey</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecretKey;

    /**
     * @var string <p>Electronic mailbox for sending verification code</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Email;

    /**
     * @param string $UserName <p>Username.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Password <p>User password</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SecretId <p>Tencent Cloud account SecretId</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SecretKey <p>Tencent Cloud Account SecretKey</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Email <p>Electronic mailbox for sending verification code</p>
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }
    }
}
