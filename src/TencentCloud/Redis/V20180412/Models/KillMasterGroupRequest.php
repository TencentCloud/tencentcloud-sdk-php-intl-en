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
 * KillMasterGroup request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getPassword() Obtain 1. The password must contain 8–30 characters. A password of 12 or more characters is recommended.
2. It cannot start with a slash (/).
3. It must contain characters in at least two of the following types:
    a. Lowercase letters (a–z)
    b. Uppercase letters (A–Z)
    c. Digits (0–9)
    d. ()`~!@#$%^&*-+=_|{}[]:;<>,.?/
 * @method void setPassword(string $Password) Set 1. The password must contain 8–30 characters. A password of 12 or more characters is recommended.
2. It cannot start with a slash (/).
3. It must contain characters in at least two of the following types:
    a. Lowercase letters (a–z)
    b. Uppercase letters (A–Z)
    c. Digits (0–9)
    d. ()`~!@#$%^&*-+=_|{}[]:;<>,.?/
 * @method array getShardIds() Obtain Node information of a single-AZ deployed instance
 * @method void setShardIds(array $ShardIds) Set Node information of a single-AZ deployed instance
 */
class KillMasterGroupRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string 1. The password must contain 8–30 characters. A password of 12 or more characters is recommended.
2. It cannot start with a slash (/).
3. It must contain characters in at least two of the following types:
    a. Lowercase letters (a–z)
    b. Uppercase letters (A–Z)
    c. Digits (0–9)
    d. ()`~!@#$%^&*-+=_|{}[]:;<>,.?/
     */
    public $Password;

    /**
     * @var array Node information of a single-AZ deployed instance
     */
    public $ShardIds;

    /**
     * @param string $InstanceId Instance ID
     * @param string $Password 1. The password must contain 8–30 characters. A password of 12 or more characters is recommended.
2. It cannot start with a slash (/).
3. It must contain characters in at least two of the following types:
    a. Lowercase letters (a–z)
    b. Uppercase letters (A–Z)
    c. Digits (0–9)
    d. ()`~!@#$%^&*-+=_|{}[]:;<>,.?/
     * @param array $ShardIds Node information of a single-AZ deployed instance
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

        if (array_key_exists("ShardIds",$param) and $param["ShardIds"] !== null) {
            $this->ShardIds = $param["ShardIds"];
        }
    }
}
