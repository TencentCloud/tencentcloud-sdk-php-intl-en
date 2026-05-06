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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance authentication information
 *
 * @method string getUsername() Obtain Username.
 * @method void setUsername(string $Username) Set Username.
 * @method string getPassword() Obtain account password
 * @method void setPassword(string $Password) Set account password
 * @method string getAccessToken() Obtain token credential
 * @method void setAccessToken(string $AccessToken) Set token credential
 */
class SourceInstanceAuth extends AbstractModel
{
    /**
     * @var string Username.
     */
    public $Username;

    /**
     * @var string account password
     */
    public $Password;

    /**
     * @var string token credential
     */
    public $AccessToken;

    /**
     * @param string $Username Username.
     * @param string $Password account password
     * @param string $AccessToken token credential
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
        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("AccessToken",$param) and $param["AccessToken"] !== null) {
            $this->AccessToken = $param["AccessToken"];
        }
    }
}
