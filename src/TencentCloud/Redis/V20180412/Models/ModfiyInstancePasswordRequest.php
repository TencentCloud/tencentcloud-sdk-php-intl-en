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
 * ModfiyInstancePassword request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, such as "crs-xjhsdj****". Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, such as "crs-xjhsdj****". Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
 * @method string getOldPassword() Obtain Old password of an instance
 * @method void setOldPassword(string $OldPassword) Set Old password of an instance
 * @method string getPassword() Obtain New instance password. The password complexity requirements are as follows:
 - It should contain 8 to 64 characters. 12 or more characters are recommended.
 - It cannot start with a forward slash (/).
 - It should contain at least two of the following types: lowercase letters (a–z), uppercase letters (A–Z), digits (0–9), and special characters (such as ()~!@#$%^&*-+=_|{}[]:;<>,.?/).
 * @method void setPassword(string $Password) Set New instance password. The password complexity requirements are as follows:
 - It should contain 8 to 64 characters. 12 or more characters are recommended.
 - It cannot start with a forward slash (/).
 - It should contain at least two of the following types: lowercase letters (a–z), uppercase letters (A–Z), digits (0–9), and special characters (such as ()~!@#$%^&*-+=_|{}[]:;<>,.?/).
 * @method boolean getEncryptPassword() Obtain Whether to encrypt the password.
 * @method void setEncryptPassword(boolean $EncryptPassword) Set Whether to encrypt the password.
 */
class ModfiyInstancePasswordRequest extends AbstractModel
{
    /**
     * @var string Instance ID, such as "crs-xjhsdj****". Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
     */
    public $InstanceId;

    /**
     * @var string Old password of an instance
     */
    public $OldPassword;

    /**
     * @var string New instance password. The password complexity requirements are as follows:
 - It should contain 8 to 64 characters. 12 or more characters are recommended.
 - It cannot start with a forward slash (/).
 - It should contain at least two of the following types: lowercase letters (a–z), uppercase letters (A–Z), digits (0–9), and special characters (such as ()~!@#$%^&*-+=_|{}[]:;<>,.?/).
     */
    public $Password;

    /**
     * @var boolean Whether to encrypt the password.
     */
    public $EncryptPassword;

    /**
     * @param string $InstanceId Instance ID, such as "crs-xjhsdj****". Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
     * @param string $OldPassword Old password of an instance
     * @param string $Password New instance password. The password complexity requirements are as follows:
 - It should contain 8 to 64 characters. 12 or more characters are recommended.
 - It cannot start with a forward slash (/).
 - It should contain at least two of the following types: lowercase letters (a–z), uppercase letters (A–Z), digits (0–9), and special characters (such as ()~!@#$%^&*-+=_|{}[]:;<>,.?/).
     * @param boolean $EncryptPassword Whether to encrypt the password.
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

        if (array_key_exists("OldPassword",$param) and $param["OldPassword"] !== null) {
            $this->OldPassword = $param["OldPassword"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EncryptPassword",$param) and $param["EncryptPassword"] !== null) {
            $this->EncryptPassword = $param["EncryptPassword"];
        }
    }
}
