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
 * RemoteWrite authentication information.
 *
 * @method string getUsername() Obtain basic auth username
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUsername(string $Username) Set basic auth username
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPassword() Obtain basic auth password
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPassword(string $Password) Set basic auth password
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getToken() Obtain basic auth token
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setToken(string $Token) Set basic auth token
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RemoteWriteAuthInfo extends AbstractModel
{
    /**
     * @var string basic auth username
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Username;

    /**
     * @var string basic auth password
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Password;

    /**
     * @var string basic auth token
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Token;

    /**
     * @param string $Username basic auth username
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Password basic auth password
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Token basic auth token
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
        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }
    }
}
