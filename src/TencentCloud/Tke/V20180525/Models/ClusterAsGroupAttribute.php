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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster scaling group attributes
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID
 * @method boolean getAutoScalingGroupEnabled() Obtain Whether it is enabled
 * @method void setAutoScalingGroupEnabled(boolean $AutoScalingGroupEnabled) Set Whether it is enabled
 * @method AutoScalingGroupRange getAutoScalingGroupRange() Obtain Maximum and minimum number of pods in a scaling group
 * @method void setAutoScalingGroupRange(AutoScalingGroupRange $AutoScalingGroupRange) Set Maximum and minimum number of pods in a scaling group
 */
class ClusterAsGroupAttribute extends AbstractModel
{
    /**
     * @var string Scaling group ID
     */
    public $AutoScalingGroupId;

    /**
     * @var boolean Whether it is enabled
     */
    public $AutoScalingGroupEnabled;

    /**
     * @var AutoScalingGroupRange Maximum and minimum number of pods in a scaling group
     */
    public $AutoScalingGroupRange;

    /**
     * @param string $AutoScalingGroupId Scaling group ID
     * @param boolean $AutoScalingGroupEnabled Whether it is enabled
     * @param AutoScalingGroupRange $AutoScalingGroupRange Maximum and minimum number of pods in a scaling group
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("AutoScalingGroupEnabled",$param) and $param["AutoScalingGroupEnabled"] !== null) {
            $this->AutoScalingGroupEnabled = $param["AutoScalingGroupEnabled"];
        }

        if (array_key_exists("AutoScalingGroupRange",$param) and $param["AutoScalingGroupRange"] !== null) {
            $this->AutoScalingGroupRange = new AutoScalingGroupRange();
            $this->AutoScalingGroupRange->deserialize($param["AutoScalingGroupRange"]);
        }
    }
}
