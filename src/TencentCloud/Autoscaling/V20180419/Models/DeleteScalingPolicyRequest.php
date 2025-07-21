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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteScalingPolicy request structure.
 *
 * @method string getAutoScalingPolicyId() Obtain The Alarm policy ID to be deleted. you can obtain the Alarm policy ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeScalingPolicies](https://intl.cloud.tencent.com/document/api/377/33178?from_cn_redirect=1) and retrieving the AutoScalingPolicyId from the returned information.
 * @method void setAutoScalingPolicyId(string $AutoScalingPolicyId) Set The Alarm policy ID to be deleted. you can obtain the Alarm policy ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeScalingPolicies](https://intl.cloud.tencent.com/document/api/377/33178?from_cn_redirect=1) and retrieving the AutoScalingPolicyId from the returned information.
 */
class DeleteScalingPolicyRequest extends AbstractModel
{
    /**
     * @var string The Alarm policy ID to be deleted. you can obtain the Alarm policy ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeScalingPolicies](https://intl.cloud.tencent.com/document/api/377/33178?from_cn_redirect=1) and retrieving the AutoScalingPolicyId from the returned information.
     */
    public $AutoScalingPolicyId;

    /**
     * @param string $AutoScalingPolicyId The Alarm policy ID to be deleted. you can obtain the Alarm policy ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeScalingPolicies](https://intl.cloud.tencent.com/document/api/377/33178?from_cn_redirect=1) and retrieving the AutoScalingPolicyId from the returned information.
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
    }
}
