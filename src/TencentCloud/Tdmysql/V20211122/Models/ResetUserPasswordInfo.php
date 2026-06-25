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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User type for password reset
 *
 * @method string getUserName() Obtain <p>Username.</p>
 * @method void setUserName(string $UserName) Set <p>Username.</p>
 * @method string getHost() Obtain <p>host</p>
 * @method void setHost(string $Host) Set <p>host</p>
 * @method string getPassword() Obtain <p>plaintext password</p>
 * @method void setPassword(string $Password) Set <p>plaintext password</p>
 * @method string getEncryptedPassword() Obtain <p>Encryption password</p>
 * @method void setEncryptedPassword(string $EncryptedPassword) Set <p>Encryption password</p>
 */
class ResetUserPasswordInfo extends AbstractModel
{
    /**
     * @var string <p>Username.</p>
     */
    public $UserName;

    /**
     * @var string <p>host</p>
     */
    public $Host;

    /**
     * @var string <p>plaintext password</p>
     */
    public $Password;

    /**
     * @var string <p>Encryption password</p>
     */
    public $EncryptedPassword;

    /**
     * @param string $UserName <p>Username.</p>
     * @param string $Host <p>host</p>
     * @param string $Password <p>plaintext password</p>
     * @param string $EncryptedPassword <p>Encryption password</p>
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

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EncryptedPassword",$param) and $param["EncryptedPassword"] !== null) {
            $this->EncryptedPassword = $param["EncryptedPassword"];
        }
    }
}
