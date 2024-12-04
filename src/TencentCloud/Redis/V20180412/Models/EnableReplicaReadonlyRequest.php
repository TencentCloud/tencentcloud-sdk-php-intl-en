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
 * EnableReplicaReadonly request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method array getReadonlyPolicy() Obtain Read-only routing policy.
- master: read-only routing to the primary node.
- replication: read-only routing to the secondary node.
- Default policy: writing to the primary node and reading from the secondary node.
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) Set Read-only routing policy.
- master: read-only routing to the primary node.
- replication: read-only routing to the secondary node.
- Default policy: writing to the primary node and reading from the secondary node.
 */
class EnableReplicaReadonlyRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @var array Read-only routing policy.
- master: read-only routing to the primary node.
- replication: read-only routing to the secondary node.
- Default policy: writing to the primary node and reading from the secondary node.
     */
    public $ReadonlyPolicy;

    /**
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     * @param array $ReadonlyPolicy Read-only routing policy.
- master: read-only routing to the primary node.
- replication: read-only routing to the secondary node.
- Default policy: writing to the primary node and reading from the secondary node.
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

        if (array_key_exists("ReadonlyPolicy",$param) and $param["ReadonlyPolicy"] !== null) {
            $this->ReadonlyPolicy = $param["ReadonlyPolicy"];
        }
    }
}
