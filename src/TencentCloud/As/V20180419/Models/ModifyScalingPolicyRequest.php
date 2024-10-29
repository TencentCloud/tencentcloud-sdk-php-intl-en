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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyScalingPolicy request structure.
 *
 * @method string getAutoScalingPolicyId() Obtain Alarm policy ID.
 * @method void setAutoScalingPolicyId(string $AutoScalingPolicyId) Set Alarm policy ID.
 * @method string getScalingPolicyName() Obtain Alarm policy name.
 * @method void setScalingPolicyName(string $ScalingPolicyName) Set Alarm policy name.
 * @method string getAdjustmentType() Obtain The method to adjust the desired capacity after the alarm is triggered. It’s only available when `ScalingPolicyType` is `Simple`. Valid values: <br><li>`CHANGE_IN_CAPACITY`: Increase or decrease the desired capacity </li><li>`EXACT_CAPACITY`: Adjust to the specified desired capacity </li> <li>`PERCENT_CHANGE_IN_CAPACITY`: Adjust the desired capacity by percentage </li>
 * @method void setAdjustmentType(string $AdjustmentType) Set The method to adjust the desired capacity after the alarm is triggered. It’s only available when `ScalingPolicyType` is `Simple`. Valid values: <br><li>`CHANGE_IN_CAPACITY`: Increase or decrease the desired capacity </li><li>`EXACT_CAPACITY`: Adjust to the specified desired capacity </li> <li>`PERCENT_CHANGE_IN_CAPACITY`: Adjust the desired capacity by percentage </li>
 * @method integer getAdjustmentValue() Obtain The adjustment value for the expected number of instances after an alarm is triggered. It applies only to simple policies. <li>When AdjustmentType is CHANGE_IN_CAPACITY, a positive AdjustmentValue indicates an increase in the number of instances after the alarm is triggered, and a negative AdjustmentValue indicates a decrease in the number of instances after the alarm is triggered.</li> <li>When AdjustmentType is EXACT_CAPACITY, the value of AdjustmentValue represents the expected number of instances after the alarm is triggered, which should be greater than or equal to 0.</li> <li>When AdjustmentType is PERCENT_CHANGE_IN_CAPACITY, a positive AdjustmentValue indicates an increase in the number of instances by percentage after the alarm is triggered, and a negative AdjustmentValue indicates a decrease in the number of instances by percentage after the alarm is triggered. The unit is: %.</li>
 * @method void setAdjustmentValue(integer $AdjustmentValue) Set The adjustment value for the expected number of instances after an alarm is triggered. It applies only to simple policies. <li>When AdjustmentType is CHANGE_IN_CAPACITY, a positive AdjustmentValue indicates an increase in the number of instances after the alarm is triggered, and a negative AdjustmentValue indicates a decrease in the number of instances after the alarm is triggered.</li> <li>When AdjustmentType is EXACT_CAPACITY, the value of AdjustmentValue represents the expected number of instances after the alarm is triggered, which should be greater than or equal to 0.</li> <li>When AdjustmentType is PERCENT_CHANGE_IN_CAPACITY, a positive AdjustmentValue indicates an increase in the number of instances by percentage after the alarm is triggered, and a negative AdjustmentValue indicates a decrease in the number of instances by percentage after the alarm is triggered. The unit is: %.</li>
 * @method integer getCooldown() Obtain Cooldown period (in seconds). It’s only available when `ScalingPolicyType` is `Simple`.
 * @method void setCooldown(integer $Cooldown) Set Cooldown period (in seconds). It’s only available when `ScalingPolicyType` is `Simple`.
 * @method MetricAlarm getMetricAlarm() Obtain Alarm monitoring metric. It’s only available when `ScalingPolicyType` is `Simple`.
 * @method void setMetricAlarm(MetricAlarm $MetricAlarm) Set Alarm monitoring metric. It’s only available when `ScalingPolicyType` is `Simple`.
 * @method string getPredefinedMetricType() Obtain Preset monitoring item. It’s only available when `ScalingPolicyType` is `TARGET_TRACKING`. Valid values: <br><li>ASG_AVG_CPU_UTILIZATION: Average CPU utilization</li><li>ASG_AVG_LAN_TRAFFIC_OUT: Average private bandwidth out</li><li>ASG_AVG_LAN_TRAFFIC_IN: Average private bandwidth in</li><li>ASG_AVG_WAN_TRAFFIC_OUT: Average public bandwidth out</li><li>ASG_AVG_WAN_TRAFFIC_IN: Average public bandwidth in</li>
 * @method void setPredefinedMetricType(string $PredefinedMetricType) Set Preset monitoring item. It’s only available when `ScalingPolicyType` is `TARGET_TRACKING`. Valid values: <br><li>ASG_AVG_CPU_UTILIZATION: Average CPU utilization</li><li>ASG_AVG_LAN_TRAFFIC_OUT: Average private bandwidth out</li><li>ASG_AVG_LAN_TRAFFIC_IN: Average private bandwidth in</li><li>ASG_AVG_WAN_TRAFFIC_OUT: Average public bandwidth out</li><li>ASG_AVG_WAN_TRAFFIC_IN: Average public bandwidth in</li>
 * @method integer getTargetValue() Obtain Target value. It’s only available when `ScalingPolicyType` is `TARGET_TRACKING`. Value ranges: <br><li>`ASG_AVG_CPU_UTILIZATION` (in %): [1, 100)</li><li>`ASG_AVG_LAN_TRAFFIC_OUT` (in Mbps): >0</li><li>`ASG_AVG_LAN_TRAFFIC_IN` (in Mbps): >0</li><li>`ASG_AVG_WAN_TRAFFIC_OUT` (in Mbps): >0</li><li>`ASG_AVG_WAN_TRAFFIC_IN` (in Mbps): >0</li>
 * @method void setTargetValue(integer $TargetValue) Set Target value. It’s only available when `ScalingPolicyType` is `TARGET_TRACKING`. Value ranges: <br><li>`ASG_AVG_CPU_UTILIZATION` (in %): [1, 100)</li><li>`ASG_AVG_LAN_TRAFFIC_OUT` (in Mbps): >0</li><li>`ASG_AVG_LAN_TRAFFIC_IN` (in Mbps): >0</li><li>`ASG_AVG_WAN_TRAFFIC_OUT` (in Mbps): >0</li><li>`ASG_AVG_WAN_TRAFFIC_IN` (in Mbps): >0</li>
 * @method integer getEstimatedInstanceWarmup() Obtain Instance warm-up period (in seconds). It’s only available when `ScalingPolicyType` is `TARGET_TRACKING`. Value range: 0-3600.
 * @method void setEstimatedInstanceWarmup(integer $EstimatedInstanceWarmup) Set Instance warm-up period (in seconds). It’s only available when `ScalingPolicyType` is `TARGET_TRACKING`. Value range: 0-3600.
 * @method boolean getDisableScaleIn() Obtain Whether to disable scale-in. It’s only available when `ScalingPolicyType` is `TARGET_TRACKING`. Valid values: <br><li>`true`: Scaling in is not allowed.</li><li>`false`: Allows both scale-out and scale-in</li>
 * @method void setDisableScaleIn(boolean $DisableScaleIn) Set Whether to disable scale-in. It’s only available when `ScalingPolicyType` is `TARGET_TRACKING`. Valid values: <br><li>`true`: Scaling in is not allowed.</li><li>`false`: Allows both scale-out and scale-in</li>
 * @method array getNotificationUserGroupIds() Obtain This parameter is diused. Please use [CreateNotificationConfiguration](https://intl.cloud.tencent.com/document/api/377/33185?from_cn_redirect=1) instead.
Notification group ID, which is the set of user group IDs.
 * @method void setNotificationUserGroupIds(array $NotificationUserGroupIds) Set This parameter is diused. Please use [CreateNotificationConfiguration](https://intl.cloud.tencent.com/document/api/377/33185?from_cn_redirect=1) instead.
Notification group ID, which is the set of user group IDs.
 */
class ModifyScalingPolicyRequest extends AbstractModel
{
    /**
     * @var string Alarm policy ID.
     */
    public $AutoScalingPolicyId;

    /**
     * @var string Alarm policy name.
     */
    public $ScalingPolicyName;

    /**
     * @var string The method to adjust the desired capacity after the alarm is triggered. It’s only available when `ScalingPolicyType` is `Simple`. Valid values: <br><li>`CHANGE_IN_CAPACITY`: Increase or decrease the desired capacity </li><li>`EXACT_CAPACITY`: Adjust to the specified desired capacity </li> <li>`PERCENT_CHANGE_IN_CAPACITY`: Adjust the desired capacity by percentage </li>
     */
    public $AdjustmentType;

    /**
     * @var integer The adjustment value for the expected number of instances after an alarm is triggered. It applies only to simple policies. <li>When AdjustmentType is CHANGE_IN_CAPACITY, a positive AdjustmentValue indicates an increase in the number of instances after the alarm is triggered, and a negative AdjustmentValue indicates a decrease in the number of instances after the alarm is triggered.</li> <li>When AdjustmentType is EXACT_CAPACITY, the value of AdjustmentValue represents the expected number of instances after the alarm is triggered, which should be greater than or equal to 0.</li> <li>When AdjustmentType is PERCENT_CHANGE_IN_CAPACITY, a positive AdjustmentValue indicates an increase in the number of instances by percentage after the alarm is triggered, and a negative AdjustmentValue indicates a decrease in the number of instances by percentage after the alarm is triggered. The unit is: %.</li>
     */
    public $AdjustmentValue;

    /**
     * @var integer Cooldown period (in seconds). It’s only available when `ScalingPolicyType` is `Simple`.
     */
    public $Cooldown;

    /**
     * @var MetricAlarm Alarm monitoring metric. It’s only available when `ScalingPolicyType` is `Simple`.
     */
    public $MetricAlarm;

    /**
     * @var string Preset monitoring item. It’s only available when `ScalingPolicyType` is `TARGET_TRACKING`. Valid values: <br><li>ASG_AVG_CPU_UTILIZATION: Average CPU utilization</li><li>ASG_AVG_LAN_TRAFFIC_OUT: Average private bandwidth out</li><li>ASG_AVG_LAN_TRAFFIC_IN: Average private bandwidth in</li><li>ASG_AVG_WAN_TRAFFIC_OUT: Average public bandwidth out</li><li>ASG_AVG_WAN_TRAFFIC_IN: Average public bandwidth in</li>
     */
    public $PredefinedMetricType;

    /**
     * @var integer Target value. It’s only available when `ScalingPolicyType` is `TARGET_TRACKING`. Value ranges: <br><li>`ASG_AVG_CPU_UTILIZATION` (in %): [1, 100)</li><li>`ASG_AVG_LAN_TRAFFIC_OUT` (in Mbps): >0</li><li>`ASG_AVG_LAN_TRAFFIC_IN` (in Mbps): >0</li><li>`ASG_AVG_WAN_TRAFFIC_OUT` (in Mbps): >0</li><li>`ASG_AVG_WAN_TRAFFIC_IN` (in Mbps): >0</li>
     */
    public $TargetValue;

    /**
     * @var integer Instance warm-up period (in seconds). It’s only available when `ScalingPolicyType` is `TARGET_TRACKING`. Value range: 0-3600.
     */
    public $EstimatedInstanceWarmup;

    /**
     * @var boolean Whether to disable scale-in. It’s only available when `ScalingPolicyType` is `TARGET_TRACKING`. Valid values: <br><li>`true`: Scaling in is not allowed.</li><li>`false`: Allows both scale-out and scale-in</li>
     */
    public $DisableScaleIn;

    /**
     * @var array This parameter is diused. Please use [CreateNotificationConfiguration](https://intl.cloud.tencent.com/document/api/377/33185?from_cn_redirect=1) instead.
Notification group ID, which is the set of user group IDs.
     */
    public $NotificationUserGroupIds;

    /**
     * @param string $AutoScalingPolicyId Alarm policy ID.
     * @param string $ScalingPolicyName Alarm policy name.
     * @param string $AdjustmentType The method to adjust the desired capacity after the alarm is triggered. It’s only available when `ScalingPolicyType` is `Simple`. Valid values: <br><li>`CHANGE_IN_CAPACITY`: Increase or decrease the desired capacity </li><li>`EXACT_CAPACITY`: Adjust to the specified desired capacity </li> <li>`PERCENT_CHANGE_IN_CAPACITY`: Adjust the desired capacity by percentage </li>
     * @param integer $AdjustmentValue The adjustment value for the expected number of instances after an alarm is triggered. It applies only to simple policies. <li>When AdjustmentType is CHANGE_IN_CAPACITY, a positive AdjustmentValue indicates an increase in the number of instances after the alarm is triggered, and a negative AdjustmentValue indicates a decrease in the number of instances after the alarm is triggered.</li> <li>When AdjustmentType is EXACT_CAPACITY, the value of AdjustmentValue represents the expected number of instances after the alarm is triggered, which should be greater than or equal to 0.</li> <li>When AdjustmentType is PERCENT_CHANGE_IN_CAPACITY, a positive AdjustmentValue indicates an increase in the number of instances by percentage after the alarm is triggered, and a negative AdjustmentValue indicates a decrease in the number of instances by percentage after the alarm is triggered. The unit is: %.</li>
     * @param integer $Cooldown Cooldown period (in seconds). It’s only available when `ScalingPolicyType` is `Simple`.
     * @param MetricAlarm $MetricAlarm Alarm monitoring metric. It’s only available when `ScalingPolicyType` is `Simple`.
     * @param string $PredefinedMetricType Preset monitoring item. It’s only available when `ScalingPolicyType` is `TARGET_TRACKING`. Valid values: <br><li>ASG_AVG_CPU_UTILIZATION: Average CPU utilization</li><li>ASG_AVG_LAN_TRAFFIC_OUT: Average private bandwidth out</li><li>ASG_AVG_LAN_TRAFFIC_IN: Average private bandwidth in</li><li>ASG_AVG_WAN_TRAFFIC_OUT: Average public bandwidth out</li><li>ASG_AVG_WAN_TRAFFIC_IN: Average public bandwidth in</li>
     * @param integer $TargetValue Target value. It’s only available when `ScalingPolicyType` is `TARGET_TRACKING`. Value ranges: <br><li>`ASG_AVG_CPU_UTILIZATION` (in %): [1, 100)</li><li>`ASG_AVG_LAN_TRAFFIC_OUT` (in Mbps): >0</li><li>`ASG_AVG_LAN_TRAFFIC_IN` (in Mbps): >0</li><li>`ASG_AVG_WAN_TRAFFIC_OUT` (in Mbps): >0</li><li>`ASG_AVG_WAN_TRAFFIC_IN` (in Mbps): >0</li>
     * @param integer $EstimatedInstanceWarmup Instance warm-up period (in seconds). It’s only available when `ScalingPolicyType` is `TARGET_TRACKING`. Value range: 0-3600.
     * @param boolean $DisableScaleIn Whether to disable scale-in. It’s only available when `ScalingPolicyType` is `TARGET_TRACKING`. Valid values: <br><li>`true`: Scaling in is not allowed.</li><li>`false`: Allows both scale-out and scale-in</li>
     * @param array $NotificationUserGroupIds This parameter is diused. Please use [CreateNotificationConfiguration](https://intl.cloud.tencent.com/document/api/377/33185?from_cn_redirect=1) instead.
Notification group ID, which is the set of user group IDs.
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

        if (array_key_exists("ScalingPolicyName",$param) and $param["ScalingPolicyName"] !== null) {
            $this->ScalingPolicyName = $param["ScalingPolicyName"];
        }

        if (array_key_exists("AdjustmentType",$param) and $param["AdjustmentType"] !== null) {
            $this->AdjustmentType = $param["AdjustmentType"];
        }

        if (array_key_exists("AdjustmentValue",$param) and $param["AdjustmentValue"] !== null) {
            $this->AdjustmentValue = $param["AdjustmentValue"];
        }

        if (array_key_exists("Cooldown",$param) and $param["Cooldown"] !== null) {
            $this->Cooldown = $param["Cooldown"];
        }

        if (array_key_exists("MetricAlarm",$param) and $param["MetricAlarm"] !== null) {
            $this->MetricAlarm = new MetricAlarm();
            $this->MetricAlarm->deserialize($param["MetricAlarm"]);
        }

        if (array_key_exists("PredefinedMetricType",$param) and $param["PredefinedMetricType"] !== null) {
            $this->PredefinedMetricType = $param["PredefinedMetricType"];
        }

        if (array_key_exists("TargetValue",$param) and $param["TargetValue"] !== null) {
            $this->TargetValue = $param["TargetValue"];
        }

        if (array_key_exists("EstimatedInstanceWarmup",$param) and $param["EstimatedInstanceWarmup"] !== null) {
            $this->EstimatedInstanceWarmup = $param["EstimatedInstanceWarmup"];
        }

        if (array_key_exists("DisableScaleIn",$param) and $param["DisableScaleIn"] !== null) {
            $this->DisableScaleIn = $param["DisableScaleIn"];
        }

        if (array_key_exists("NotificationUserGroupIds",$param) and $param["NotificationUserGroupIds"] !== null) {
            $this->NotificationUserGroupIds = $param["NotificationUserGroupIds"];
        }
    }
}
