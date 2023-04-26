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
 * ModfiyInstancePassword request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, such as "crs-xjhsdj****". Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, such as "crs-xjhsdj****". Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
 * @method string getOldPassword() Obtain Old password of an instance
 * @method void setOldPassword(string $OldPassword) Set Old password of an instance
 * @method string getPassword() Obtain New instance password, which has the following requirements:
- It must contain 8-30 characters, preferably 12 or more.
- It cannot start with a slash (/)
- It must contain two of the following three types: lowercase letters, uppercase letters, and symbols (()~!@#$%^&*-+=_|{}[]:;<>,.?/)
 * @method void setPassword(string $Password) Set New instance password, which has the following requirements:
- It must contain 8-30 characters, preferably 12 or more.
- It cannot start with a slash (/)
- It must contain two of the following three types: lowercase letters, uppercase letters, and symbols (()~!@#$%^&*-+=_|{}[]:;<>,.?/)
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
     * @var string New instance password, which has the following requirements:
- It must contain 8-30 characters, preferably 12 or more.
- It cannot start with a slash (/)
- It must contain two of the following three types: lowercase letters, uppercase letters, and symbols (()~!@#$%^&*-+=_|{}[]:;<>,.?/)
     */
    public $Password;

    /**
     * @param string $InstanceId Instance ID, such as "crs-xjhsdj****". Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
     * @param string $OldPassword Old password of an instance
     * @param string $Password New instance password, which has the following requirements:
- It must contain 8-30 characters, preferably 12 or more.
- It cannot start with a slash (/)
- It must contain two of the following three types: lowercase letters, uppercase letters, and symbols (()~!@#$%^&*-+=_|{}[]:;<>,.?/)
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
