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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetPassword request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method string getPassword() Obtain Reset password. This parameter can be left unspecified when a password-free instance is used.
- It should contain 8 to 32 characters. 12 or more characters are recommended.
- It cannot start with a forward slash (/).
- It should contain at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()~!@#$%^&*-+=_|{}[]:;<>,.?/).
 * @method void setPassword(string $Password) Set Reset password. This parameter can be left unspecified when a password-free instance is used.
- It should contain 8 to 32 characters. 12 or more characters are recommended.
- It cannot start with a forward slash (/).
- It should contain at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()~!@#$%^&*-+=_|{}[]:;<>,.?/).
 * @method boolean getNoAuth() Obtain Whether to switch to a password-free instance.
- false: switch to an instance that requires a password. The default value is false.
- true: switch to a password-free instance.
 * @method void setNoAuth(boolean $NoAuth) Set Whether to switch to a password-free instance.
- false: switch to an instance that requires a password. The default value is false.
- true: switch to a password-free instance.
 * @method boolean getEncryptPassword() Obtain Whether to encrypt the password.
- false: non-encrypted password. The default value is false.
- true: encrypted password.
 * @method void setEncryptPassword(boolean $EncryptPassword) Set Whether to encrypt the password.
- false: non-encrypted password. The default value is false.
- true: encrypted password.
 */
class ResetPasswordRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @var string Reset password. This parameter can be left unspecified when a password-free instance is used.
- It should contain 8 to 32 characters. 12 or more characters are recommended.
- It cannot start with a forward slash (/).
- It should contain at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()~!@#$%^&*-+=_|{}[]:;<>,.?/).
     */
    public $Password;

    /**
     * @var boolean Whether to switch to a password-free instance.
- false: switch to an instance that requires a password. The default value is false.
- true: switch to a password-free instance.
     */
    public $NoAuth;

    /**
     * @var boolean Whether to encrypt the password.
- false: non-encrypted password. The default value is false.
- true: encrypted password.
     */
    public $EncryptPassword;

    /**
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     * @param string $Password Reset password. This parameter can be left unspecified when a password-free instance is used.
- It should contain 8 to 32 characters. 12 or more characters are recommended.
- It cannot start with a forward slash (/).
- It should contain at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()~!@#$%^&*-+=_|{}[]:;<>,.?/).
     * @param boolean $NoAuth Whether to switch to a password-free instance.
- false: switch to an instance that requires a password. The default value is false.
- true: switch to a password-free instance.
     * @param boolean $EncryptPassword Whether to encrypt the password.
- false: non-encrypted password. The default value is false.
- true: encrypted password.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("NoAuth",$param) and $param["NoAuth"] !== null) {
            $this->NoAuth = $param["NoAuth"];
        }

        if (array_key_exists("EncryptPassword",$param) and $param["EncryptPassword"] !== null) {
            $this->EncryptPassword = $param["EncryptPassword"];
        }
    }
}
