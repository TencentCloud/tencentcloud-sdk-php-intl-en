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
 * ClearInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method string getPassword() Obtain Instance access password.
- Password-free access: No configuration is required.
- Password authentication: The password is required. It cannot start with a forward slash (/) and should contain 8 to 64 characters, including at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()`~!@#$%^&*-+=_|{}[]:;<>,.?/).
 * @method void setPassword(string $Password) Set Instance access password.
- Password-free access: No configuration is required.
- Password authentication: The password is required. It cannot start with a forward slash (/) and should contain 8 to 64 characters, including at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()`~!@#$%^&*-+=_|{}[]:;<>,.?/).
 */
class ClearInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @var string Instance access password.
- Password-free access: No configuration is required.
- Password authentication: The password is required. It cannot start with a forward slash (/) and should contain 8 to 64 characters, including at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()`~!@#$%^&*-+=_|{}[]:;<>,.?/).
     */
    public $Password;

    /**
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     * @param string $Password Instance access password.
- Password-free access: No configuration is required.
- Password authentication: The password is required. It cannot start with a forward slash (/) and should contain 8 to 64 characters, including at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()`~!@#$%^&*-+=_|{}[]:;<>,.?/).
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
    }
}
