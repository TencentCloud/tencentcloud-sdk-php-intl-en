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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExecuteScalingPolicy request structure.
 *
 * @method string getAutoScalingPolicyId() Obtain Alarm scaling policy ID. target tracking policy is unsupported. the alert policy type can be obtained via the `ScalingPolicyType` parameter in the api response of [DescribeScalingPolicies](https://intl.cloud.tencent.com/document/api/377/33178?from_cn_redirect=1).
 * @method void setAutoScalingPolicyId(string $AutoScalingPolicyId) Set Alarm scaling policy ID. target tracking policy is unsupported. the alert policy type can be obtained via the `ScalingPolicyType` parameter in the api response of [DescribeScalingPolicies](https://intl.cloud.tencent.com/document/api/377/33178?from_cn_redirect=1).
 * @method boolean getHonorCooldown() Obtain Whether to check if the auto scaling group is in the cooldown period. Default value: false
 * @method void setHonorCooldown(boolean $HonorCooldown) Set Whether to check if the auto scaling group is in the cooldown period. Default value: false
 * @method string getTriggerSource() Obtain Source that triggers the scaling policy. Valid values: API and CLOUD_MONITOR. Default value: API. The value `CLOUD_MONITOR` is specific to the Cloud Monitor service.
 * @method void setTriggerSource(string $TriggerSource) Set Source that triggers the scaling policy. Valid values: API and CLOUD_MONITOR. Default value: API. The value `CLOUD_MONITOR` is specific to the Cloud Monitor service.
 */
class ExecuteScalingPolicyRequest extends AbstractModel
{
    /**
     * @var string Alarm scaling policy ID. target tracking policy is unsupported. the alert policy type can be obtained via the `ScalingPolicyType` parameter in the api response of [DescribeScalingPolicies](https://intl.cloud.tencent.com/document/api/377/33178?from_cn_redirect=1).
     */
    public $AutoScalingPolicyId;

    /**
     * @var boolean Whether to check if the auto scaling group is in the cooldown period. Default value: false
     */
    public $HonorCooldown;

    /**
     * @var string Source that triggers the scaling policy. Valid values: API and CLOUD_MONITOR. Default value: API. The value `CLOUD_MONITOR` is specific to the Cloud Monitor service.
     */
    public $TriggerSource;

    /**
     * @param string $AutoScalingPolicyId Alarm scaling policy ID. target tracking policy is unsupported. the alert policy type can be obtained via the `ScalingPolicyType` parameter in the api response of [DescribeScalingPolicies](https://intl.cloud.tencent.com/document/api/377/33178?from_cn_redirect=1).
     * @param boolean $HonorCooldown Whether to check if the auto scaling group is in the cooldown period. Default value: false
     * @param string $TriggerSource Source that triggers the scaling policy. Valid values: API and CLOUD_MONITOR. Default value: API. The value `CLOUD_MONITOR` is specific to the Cloud Monitor service.
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
        if (array_key_exists("AutoScalingPolicyId",$param) and $param["AutoScalingPolicyId"] !== null) {
            $this->AutoScalingPolicyId = $param["AutoScalingPolicyId"];
        }

        if (array_key_exists("HonorCooldown",$param) and $param["HonorCooldown"] !== null) {
            $this->HonorCooldown = $param["HonorCooldown"];
        }

        if (array_key_exists("TriggerSource",$param) and $param["TriggerSource"] !== null) {
            $this->TriggerSource = $param["TriggerSource"];
        }
    }
}
