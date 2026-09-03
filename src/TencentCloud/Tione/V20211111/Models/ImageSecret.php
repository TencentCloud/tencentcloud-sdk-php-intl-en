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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getKeyId() Obtain 
 * @method void setKeyId(string $KeyId) Set 
 * @method string getUsername() Obtain 
 * @method void setUsername(string $Username) Set 
 * @method string getPassword() Obtain 
 * @method void setPassword(string $Password) Set 
 * @method string getSecretId() Obtain 
 * @method void setSecretId(string $SecretId) Set 
 */
class ImageSecret extends AbstractModel
{
    /**
     * @var string 
     */
    public $KeyId;

    /**
     * @var string 
     */
    public $Username;

    /**
     * @var string 
     */
    public $Password;

    /**
     * @var string 
     */
    public $SecretId;

    /**
     * @param string $KeyId 
     * @param string $Username 
     * @param string $Password 
     * @param string $SecretId 
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }
    }
}
