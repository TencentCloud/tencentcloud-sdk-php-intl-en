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
 * DescribeInstanceSupportFeature request structure.
 *
 * @method string getInstanceId() Obtain Specifies the instance ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), and copy it from the instance list.
 * @method void setInstanceId(string $InstanceId) Set Specifies the instance ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), and copy it from the instance list.
 * @method string getFeatureName() Obtain The features that support queries are as follows.
- read-local-node-only: nearby access.
- multi-account: multi-account management.
- auto-failback: fault recovery scenario, such as whether automatic failback is enabled for the primary node.
 * @method void setFeatureName(string $FeatureName) Set The features that support queries are as follows.
- read-local-node-only: nearby access.
- multi-account: multi-account management.
- auto-failback: fault recovery scenario, such as whether automatic failback is enabled for the primary node.
 */
class DescribeInstanceSupportFeatureRequest extends AbstractModel
{
    /**
     * @var string Specifies the instance ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), and copy it from the instance list.
     */
    public $InstanceId;

    /**
     * @var string The features that support queries are as follows.
- read-local-node-only: nearby access.
- multi-account: multi-account management.
- auto-failback: fault recovery scenario, such as whether automatic failback is enabled for the primary node.
     */
    public $FeatureName;

    /**
     * @param string $InstanceId Specifies the instance ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), and copy it from the instance list.
     * @param string $FeatureName The features that support queries are as follows.
- read-local-node-only: nearby access.
- multi-account: multi-account management.
- auto-failback: fault recovery scenario, such as whether automatic failback is enabled for the primary node.
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

        if (array_key_exists("FeatureName",$param) and $param["FeatureName"] !== null) {
            $this->FeatureName = $param["FeatureName"];
        }
    }
}
