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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstancePassword request structure.
 *
 * @method string getInstanceId() Obtain Specifies the instance ID. Example: crs-xjhsdj****. Log in to the [TencentDB for Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Specifies the instance ID. Example: crs-xjhsdj****. Log in to the [TencentDB for Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
 * @method string getOldPassword() Obtain Old password of the instance.
 * @method void setOldPassword(string $OldPassword) Set Old password of the instance.
 * @method string getPassword() Obtain New password of the instance. The password complexity requirements are as follows:
- It can contain 8 to 30 characters. It is recommended to use a password of more than 12 characters.
- It cannot start with a forward slash (/).
- It should contain at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()~!@#$%^&*-+=_|{}[]:;<>,.?/).
 * @method void setPassword(string $Password) Set New password of the instance. The password complexity requirements are as follows:
- It can contain 8 to 30 characters. It is recommended to use a password of more than 12 characters.
- It cannot start with a forward slash (/).
- It should contain at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()~!@#$%^&*-+=_|{}[]:;<>,.?/).
 */
class ModifyInstancePasswordRequest extends AbstractModel
{
    /**
     * @var string Specifies the instance ID. Example: crs-xjhsdj****. Log in to the [TencentDB for Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
     */
    public $InstanceId;

    /**
     * @var string Old password of the instance.
     */
    public $OldPassword;

    /**
     * @var string New password of the instance. The password complexity requirements are as follows:
- It can contain 8 to 30 characters. It is recommended to use a password of more than 12 characters.
- It cannot start with a forward slash (/).
- It should contain at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()~!@#$%^&*-+=_|{}[]:;<>,.?/).
     */
    public $Password;

    /**
     * @param string $InstanceId Specifies the instance ID. Example: crs-xjhsdj****. Log in to the [TencentDB for Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
     * @param string $OldPassword Old password of the instance.
     * @param string $Password New password of the instance. The password complexity requirements are as follows:
- It can contain 8 to 30 characters. It is recommended to use a password of more than 12 characters.
- It cannot start with a forward slash (/).
- It should contain at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()~!@#$%^&*-+=_|{}[]:;<>,.?/).
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
    }
}
