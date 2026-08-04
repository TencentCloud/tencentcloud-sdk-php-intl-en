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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Edge reasoning auto scaling policy.
 *
 * @method string getPolicyName() Obtain Policy Name. Length limit is 1-30 characters. Policy name must be unique within the same service.
 * @method void setPolicyName(string $PolicyName) Set Policy Name. Length limit is 1-30 characters. Policy name must be unique within the same service.
 * @method string getPolicyType() Obtain Policy type, cannot be modified after creation. Value: <li>ScheduledScaling: scheduled scaling.</li>
 * @method void setPolicyType(string $PolicyType) Set Policy type, cannot be modified after creation. Value: <li>ScheduledScaling: scheduled scaling.</li>
 * @method InferenceScheduledScalingPolicy getScheduledScalingPolicy() Obtain Scheduled scaling configuration. This field is required when the PolicyType value is ScheduledScaling.
 * @method void setScheduledScalingPolicy(InferenceScheduledScalingPolicy $ScheduledScalingPolicy) Set Scheduled scaling configuration. This field is required when the PolicyType value is ScheduledScaling.
 */
class InferenceScalingPolicy extends AbstractModel
{
    /**
     * @var string Policy Name. Length limit is 1-30 characters. Policy name must be unique within the same service.
     */
    public $PolicyName;

    /**
     * @var string Policy type, cannot be modified after creation. Value: <li>ScheduledScaling: scheduled scaling.</li>
     */
    public $PolicyType;

    /**
     * @var InferenceScheduledScalingPolicy Scheduled scaling configuration. This field is required when the PolicyType value is ScheduledScaling.
     */
    public $ScheduledScalingPolicy;

    /**
     * @param string $PolicyName Policy Name. Length limit is 1-30 characters. Policy name must be unique within the same service.
     * @param string $PolicyType Policy type, cannot be modified after creation. Value: <li>ScheduledScaling: scheduled scaling.</li>
     * @param InferenceScheduledScalingPolicy $ScheduledScalingPolicy Scheduled scaling configuration. This field is required when the PolicyType value is ScheduledScaling.
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
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("ScheduledScalingPolicy",$param) and $param["ScheduledScalingPolicy"] !== null) {
            $this->ScheduledScalingPolicy = new InferenceScheduledScalingPolicy();
            $this->ScheduledScalingPolicy->deserialize($param["ScheduledScalingPolicy"]);
        }
    }
}
