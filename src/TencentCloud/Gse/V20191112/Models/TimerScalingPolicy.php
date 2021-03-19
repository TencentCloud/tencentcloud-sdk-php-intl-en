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
 * Configurations of a scheduled scaling policy
 *
 * @method string getTimerId() Obtain Unique ID of the policy. When it’s filled in, the policy will be updated.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTimerId(string $TimerId) Set Unique ID of the policy. When it’s filled in, the policy will be updated.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getTimerName() Obtain Scheduled scaling policy name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTimerName(string $TimerName) Set Scheduled scaling policy name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getTimerStatus() Obtain Scheduled scaling policy status. `0`: Undefined, `1`: Not started, 2: Activated, `3`: Stopped, `4`: Expired
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTimerStatus(integer $TimerStatus) Set Scheduled scaling policy status. `0`: Undefined, `1`: Not started, 2: Activated, `3`: Stopped, `4`: Expired
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method TimerFleetCapacity getTimerFleetCapacity() Obtain The capacity configurations of the scheduled scaling policy
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTimerFleetCapacity(TimerFleetCapacity $TimerFleetCapacity) Set The capacity configurations of the scheduled scaling policy
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method TimerConfiguration getTimerConfiguration() Obtain The recurrence pattern of auto-scaling
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTimerConfiguration(TimerConfiguration $TimerConfiguration) Set The recurrence pattern of auto-scaling
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class TimerScalingPolicy extends AbstractModel
{
    /**
     * @var string Unique ID of the policy. When it’s filled in, the policy will be updated.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TimerId;

    /**
     * @var string Scheduled scaling policy name
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TimerName;

    /**
     * @var integer Scheduled scaling policy status. `0`: Undefined, `1`: Not started, 2: Activated, `3`: Stopped, `4`: Expired
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TimerStatus;

    /**
     * @var TimerFleetCapacity The capacity configurations of the scheduled scaling policy
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TimerFleetCapacity;

    /**
     * @var TimerConfiguration The recurrence pattern of auto-scaling
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TimerConfiguration;

    /**
     * @param string $TimerId Unique ID of the policy. When it’s filled in, the policy will be updated.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $TimerName Scheduled scaling policy name
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $TimerStatus Scheduled scaling policy status. `0`: Undefined, `1`: Not started, 2: Activated, `3`: Stopped, `4`: Expired
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param TimerFleetCapacity $TimerFleetCapacity The capacity configurations of the scheduled scaling policy
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param TimerConfiguration $TimerConfiguration The recurrence pattern of auto-scaling
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("TimerId",$param) and $param["TimerId"] !== null) {
            $this->TimerId = $param["TimerId"];
        }

        if (array_key_exists("TimerName",$param) and $param["TimerName"] !== null) {
            $this->TimerName = $param["TimerName"];
        }

        if (array_key_exists("TimerStatus",$param) and $param["TimerStatus"] !== null) {
            $this->TimerStatus = $param["TimerStatus"];
        }

        if (array_key_exists("TimerFleetCapacity",$param) and $param["TimerFleetCapacity"] !== null) {
            $this->TimerFleetCapacity = new TimerFleetCapacity();
            $this->TimerFleetCapacity->deserialize($param["TimerFleetCapacity"]);
        }

        if (array_key_exists("TimerConfiguration",$param) and $param["TimerConfiguration"] !== null) {
            $this->TimerConfiguration = new TimerConfiguration();
            $this->TimerConfiguration->deserialize($param["TimerConfiguration"]);
        }
    }
}
