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
 * The capacity configurations of the scheduled scaling policy
 *
 * @method string getFleetId() Obtain ID of the fleet to be bound with the policy
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setFleetId(string $FleetId) Set ID of the fleet to be bound with the policy
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getDesiredInstances() Obtain Desired number of instances
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDesiredInstances(integer $DesiredInstances) Set Desired number of instances
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMinSize() Obtain Minimum number of instances
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMinSize(integer $MinSize) Set Minimum number of instances
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMaxSize() Obtain Maximum number of instances
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMaxSize(integer $MaxSize) Set Maximum number of instances
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getScalingInterval() Obtain Scaling cooldown period, in minutes
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setScalingInterval(integer $ScalingInterval) Set Scaling cooldown period, in minutes
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getScalingType() Obtain Scaling type. `1`: manual, `2`: automatic, `0`: undefined
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setScalingType(integer $ScalingType) Set Scaling type. `1`: manual, `2`: automatic, `0`: undefined
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method TargetConfiguration getTargetConfiguration() Obtain Configuration of target tracking scaling
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTargetConfiguration(TargetConfiguration $TargetConfiguration) Set Configuration of target tracking scaling
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class TimerFleetCapacity extends AbstractModel
{
    /**
     * @var string ID of the fleet to be bound with the policy
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $FleetId;

    /**
     * @var integer Desired number of instances
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DesiredInstances;

    /**
     * @var integer Minimum number of instances
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MinSize;

    /**
     * @var integer Maximum number of instances
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MaxSize;

    /**
     * @var integer Scaling cooldown period, in minutes
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ScalingInterval;

    /**
     * @var integer Scaling type. `1`: manual, `2`: automatic, `0`: undefined
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ScalingType;

    /**
     * @var TargetConfiguration Configuration of target tracking scaling
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TargetConfiguration;

    /**
     * @param string $FleetId ID of the fleet to be bound with the policy
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $DesiredInstances Desired number of instances
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $MinSize Minimum number of instances
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $MaxSize Maximum number of instances
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $ScalingInterval Scaling cooldown period, in minutes
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $ScalingType Scaling type. `1`: manual, `2`: automatic, `0`: undefined
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param TargetConfiguration $TargetConfiguration Configuration of target tracking scaling
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
        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("DesiredInstances",$param) and $param["DesiredInstances"] !== null) {
            $this->DesiredInstances = $param["DesiredInstances"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("ScalingInterval",$param) and $param["ScalingInterval"] !== null) {
            $this->ScalingInterval = $param["ScalingInterval"];
        }

        if (array_key_exists("ScalingType",$param) and $param["ScalingType"] !== null) {
            $this->ScalingType = $param["ScalingType"];
        }

        if (array_key_exists("TargetConfiguration",$param) and $param["TargetConfiguration"] !== null) {
            $this->TargetConfiguration = new TargetConfiguration();
            $this->TargetConfiguration->deserialize($param["TargetConfiguration"]);
        }
    }
}
