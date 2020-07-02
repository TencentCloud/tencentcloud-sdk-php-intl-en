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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Channel input authentication information.
 *
 * @method string getUsername() Obtain Username.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUsername(string $Username) Set Username.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPassword() Obtain Password.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPassword(string $Password) Set Password.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class InputAuthInfo extends AbstractModel
{
    /**
     * @var string Username.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Username;

    /**
     * @var string Password.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Password;

    /**
     * @param string $Username Username.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Password Password.
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
        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
