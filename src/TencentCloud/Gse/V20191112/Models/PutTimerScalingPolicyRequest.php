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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PutTimerScalingPolicy request structure.
 *
 * @method TimerScalingPolicy getTimerScalingPolicy() Obtain Configuration of the scheduled scaling policy
 * @method void setTimerScalingPolicy(TimerScalingPolicy $TimerScalingPolicy) Set Configuration of the scheduled scaling policy
 */
class PutTimerScalingPolicyRequest extends AbstractModel
{
    /**
     * @var TimerScalingPolicy Configuration of the scheduled scaling policy
     */
    public $TimerScalingPolicy;

    /**
     * @param TimerScalingPolicy $TimerScalingPolicy Configuration of the scheduled scaling policy
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
        if (array_key_exists("TimerScalingPolicy",$param) and $param["TimerScalingPolicy"] !== null) {
            $this->TimerScalingPolicy = new TimerScalingPolicy();
            $this->TimerScalingPolicy->deserialize($param["TimerScalingPolicy"]);
        }
    }
}
