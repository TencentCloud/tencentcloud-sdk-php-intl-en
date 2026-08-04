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
 * Inference service auto scaling configuration.
 *
 * @method integer getMinInstanceCount() Obtain <p>Minimum number of instances. When a scaling policy is configured and the policy is in the valid period, it will not take effect.</p>
 * @method void setMinInstanceCount(integer $MinInstanceCount) Set <p>Minimum number of instances. When a scaling policy is configured and the policy is in the valid period, it will not take effect.</p>
 * @method array getScalingPolicies() Obtain <p>Auto Scaling policy list. Supports up to 5 policies.</p>
 * @method void setScalingPolicies(array $ScalingPolicies) Set <p>Auto Scaling policy list. Supports up to 5 policies.</p>
 */
class InferenceAutoScalingConfig extends AbstractModel
{
    /**
     * @var integer <p>Minimum number of instances. When a scaling policy is configured and the policy is in the valid period, it will not take effect.</p>
     */
    public $MinInstanceCount;

    /**
     * @var array <p>Auto Scaling policy list. Supports up to 5 policies.</p>
     */
    public $ScalingPolicies;

    /**
     * @param integer $MinInstanceCount <p>Minimum number of instances. When a scaling policy is configured and the policy is in the valid period, it will not take effect.</p>
     * @param array $ScalingPolicies <p>Auto Scaling policy list. Supports up to 5 policies.</p>
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
        if (array_key_exists("MinInstanceCount",$param) and $param["MinInstanceCount"] !== null) {
            $this->MinInstanceCount = $param["MinInstanceCount"];
        }

        if (array_key_exists("ScalingPolicies",$param) and $param["ScalingPolicies"] !== null) {
            $this->ScalingPolicies = [];
            foreach ($param["ScalingPolicies"] as $key => $value){
                $obj = new InferenceScalingPolicy();
                $obj->deserialize($value);
                array_push($this->ScalingPolicies, $obj);
            }
        }
    }
}
