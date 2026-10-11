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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Login settings.
 *
 * @method string getPassword() Obtain Instance login password, with 8 to 16 characters, including uppercase letters, lowercase letters, digits, and special characters. Special characters only support !@%^*. The password cannot start with a special character.
 * @method void setPassword(string $Password) Set Instance login password, with 8 to 16 characters, including uppercase letters, lowercase letters, digits, and special characters. Special characters only support !@%^*. The password cannot start with a special character.
 * @method string getPublicKeyId() Obtain Key ID. After a key is associated, the instance can be accessed with the corresponding private key; PublicKeyId can be obtained through the API [DescribeKeyPairs](https://www.tencentcloud.com/document/api/213/15699?from_cn_redirect=1).
 * @method void setPublicKeyId(string $PublicKeyId) Set Key ID. After a key is associated, the instance can be accessed with the corresponding private key; PublicKeyId can be obtained through the API [DescribeKeyPairs](https://www.tencentcloud.com/document/api/213/15699?from_cn_redirect=1).
 */
class LoginSettings extends AbstractModel
{
    /**
     * @var string Instance login password, with 8 to 16 characters, including uppercase letters, lowercase letters, digits, and special characters. Special characters only support !@%^*. The password cannot start with a special character.
     */
    public $Password;

    /**
     * @var string Key ID. After a key is associated, the instance can be accessed with the corresponding private key; PublicKeyId can be obtained through the API [DescribeKeyPairs](https://www.tencentcloud.com/document/api/213/15699?from_cn_redirect=1).
     */
    public $PublicKeyId;

    /**
     * @param string $Password Instance login password, with 8 to 16 characters, including uppercase letters, lowercase letters, digits, and special characters. Special characters only support !@%^*. The password cannot start with a special character.
     * @param string $PublicKeyId Key ID. After a key is associated, the instance can be accessed with the corresponding private key; PublicKeyId can be obtained through the API [DescribeKeyPairs](https://www.tencentcloud.com/document/api/213/15699?from_cn_redirect=1).
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
        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("PublicKeyId",$param) and $param["PublicKeyId"] !== null) {
            $this->PublicKeyId = $param["PublicKeyId"];
        }
    }
}
