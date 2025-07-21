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
 * CreateScalingPolicy request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1), and retrieve AutoScalingGroupId from the returned information.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1), and retrieve AutoScalingGroupId from the returned information.
 * @method string getScalingPolicyName() Obtain The Alarm policy name must be unique in your account. the name length cannot exceed 60 characters. the name only supports chinese, english, digits, underscores, hyphens, and decimal points.
 * @method void setScalingPolicyName(string $ScalingPolicyName) Set The Alarm policy name must be unique in your account. the name length cannot exceed 60 characters. the name only supports chinese, english, digits, underscores, hyphens, and decimal points.
 * @method string getScalingPolicyType() Obtain Alarm trigger policy type. default: SIMPLE. valid values:.
<Li>`SIMPLE`: a simple policy.</li>.
<Li>`TARGET_TRACKING`: a target tracking policy.</li>.
 * @method void setScalingPolicyType(string $ScalingPolicyType) Set Alarm trigger policy type. default: SIMPLE. valid values:.
<Li>`SIMPLE`: a simple policy.</li>.
<Li>`TARGET_TRACKING`: a target tracking policy.</li>.
 * @method string getAdjustmentType() Obtain After an Alarm is triggered, specifies the method for modifying the expected number of instances. required in the scenario of simple policies. valid values:.
<Li>CHANGE_IN_CAPACITY: increase or decrease the expected number of instances</li>.
<Li>EXACT_CAPACITY: adjust to the expected number of instances</li>.
<Li>PERCENT_CHANGE_IN_CAPACITY: adjust expected instance number by percent</li>.
 * @method void setAdjustmentType(string $AdjustmentType) Set After an Alarm is triggered, specifies the method for modifying the expected number of instances. required in the scenario of simple policies. valid values:.
<Li>CHANGE_IN_CAPACITY: increase or decrease the expected number of instances</li>.
<Li>EXACT_CAPACITY: adjust to the expected number of instances</li>.
<Li>PERCENT_CHANGE_IN_CAPACITY: adjust expected instance number by percent</li>.
 * @method integer getAdjustmentValue() Obtain Adjustment value for the expected number of instances after an Alarm is triggered, which is applicable only to simple policies and required in simple policy scenarios.
<li>When AdjustmentType is CHANGE_IN_CAPACITY, a positive AdjustmentValue indicates an increase IN instances after Alarm trigger, while a negative value indicates a decrease IN instances after Alarm trigger.</li>. 
<li>When AdjustmentType is set to EXACT_CAPACITY, the value of AdjustmentValue indicates the new desired number of instances after the Alarm is triggered. it must be at least 0.</li>. 
<li>When AdjustmentType is set to PERCENT_CHANGE_IN_CAPACITY, a positive value of AdjustmentValue indicates an increase in the number of instances by a percentage after the alarm is triggered, while a negative value indicates a decrease in the number of instances by a percentage after the alarm is triggered. Unit: %.</li>
 * @method void setAdjustmentValue(integer $AdjustmentValue) Set Adjustment value for the expected number of instances after an Alarm is triggered, which is applicable only to simple policies and required in simple policy scenarios.
<li>When AdjustmentType is CHANGE_IN_CAPACITY, a positive AdjustmentValue indicates an increase IN instances after Alarm trigger, while a negative value indicates a decrease IN instances after Alarm trigger.</li>. 
<li>When AdjustmentType is set to EXACT_CAPACITY, the value of AdjustmentValue indicates the new desired number of instances after the Alarm is triggered. it must be at least 0.</li>. 
<li>When AdjustmentType is set to PERCENT_CHANGE_IN_CAPACITY, a positive value of AdjustmentValue indicates an increase in the number of instances by a percentage after the alarm is triggered, while a negative value indicates a decrease in the number of instances by a percentage after the alarm is triggered. Unit: %.</li>
 * @method integer getCooldown() Obtain Cooldown period (in seconds). This parameter is only applicable to a simple policy. Default value: 300.
 * @method void setCooldown(integer $Cooldown) Set Cooldown period (in seconds). This parameter is only applicable to a simple policy. Default value: 300.
 * @method MetricAlarm getMetricAlarm() Obtain Alarm monitoring metric, apply only to simple policies, required in the scenario of simple policy.
 * @method void setMetricAlarm(MetricAlarm $MetricAlarm) Set Alarm monitoring metric, apply only to simple policies, required in the scenario of simple policy.
 * @method string getPredefinedMetricType() Obtain Predefined monitoring item, applicable only to target tracking policies. required in the scenario. value range:.
<Li>ASG_AVG_CPU_UTILIZATION: average cpu utilization</li>.
<Li>ASG_AVG_LAN_TRAFFIC_OUT: specifies the average outbound private network bandwidth.</li>.
<Li>ASG_AVG_LAN_TRAFFIC_IN: average inbound private network bandwidth</li>.
<Li>ASG_AVG_WAN_TRAFFIC_OUT: specifies the average outbound public network bandwidth.</li>.
<li>ASG_AVG_WAN_TRAFFIC_IN: average inbound public network bandwidth</li>
 * @method void setPredefinedMetricType(string $PredefinedMetricType) Set Predefined monitoring item, applicable only to target tracking policies. required in the scenario. value range:.
<Li>ASG_AVG_CPU_UTILIZATION: average cpu utilization</li>.
<Li>ASG_AVG_LAN_TRAFFIC_OUT: specifies the average outbound private network bandwidth.</li>.
<Li>ASG_AVG_LAN_TRAFFIC_IN: average inbound private network bandwidth</li>.
<Li>ASG_AVG_WAN_TRAFFIC_OUT: specifies the average outbound public network bandwidth.</li>.
<li>ASG_AVG_WAN_TRAFFIC_IN: average inbound public network bandwidth</li>
 * @method integer getTargetValue() Obtain Target value, applicable only to the target tracking policy, required in the scenario.
<Li>ASG_AVG_CPU_UTILIZATION: value range: [1, 100); unit: %.</li>.
<li>ASG_AVG_LAN_TRAFFIC_OUT: value range: > 0; unit: Mbps.</li>.
<li>ASG_AVG_LAN_TRAFFIC_IN: value range: > 0; unit: Mbps.</li>.
<li>ASG_AVG_WAN_TRAFFIC_OUT: value range: > 0; unit: Mbps.</li>.
<li>ASG_AVG_WAN_TRAFFIC_IN: value range: > 0; unit: Mbps.</li>
 * @method void setTargetValue(integer $TargetValue) Set Target value, applicable only to the target tracking policy, required in the scenario.
<Li>ASG_AVG_CPU_UTILIZATION: value range: [1, 100); unit: %.</li>.
<li>ASG_AVG_LAN_TRAFFIC_OUT: value range: > 0; unit: Mbps.</li>.
<li>ASG_AVG_LAN_TRAFFIC_IN: value range: > 0; unit: Mbps.</li>.
<li>ASG_AVG_WAN_TRAFFIC_OUT: value range: > 0; unit: Mbps.</li>.
<li>ASG_AVG_WAN_TRAFFIC_IN: value range: > 0; unit: Mbps.</li>
 * @method integer getEstimatedInstanceWarmup() Obtain Instance warm-up period (in seconds). It is only available when `ScalingPolicyType` is `TARGET_TRACKING`. Value range: 0-3600. Default value: 300.
 * @method void setEstimatedInstanceWarmup(integer $EstimatedInstanceWarmup) Set Instance warm-up period (in seconds). It is only available when `ScalingPolicyType` is `TARGET_TRACKING`. Value range: 0-3600. Default value: 300.
 * @method boolean getDisableScaleIn() Obtain Whether to disable scale-in, which is applicable only to target tracking policies. Default value: false. Valid values:
<li>true: Target tracking policies trigger only scale-out.</li>
<li>false: Target tracking policies trigger both scale-out and scale-in.</li>
 * @method void setDisableScaleIn(boolean $DisableScaleIn) Set Whether to disable scale-in, which is applicable only to target tracking policies. Default value: false. Valid values:
<li>true: Target tracking policies trigger only scale-out.</li>
<li>false: Target tracking policies trigger both scale-out and scale-in.</li>
 * @method array getNotificationUserGroupIds() Obtain This parameter is diused. Please use [CreateNotificationConfiguration](https://intl.cloud.tencent.com/document/api/377/33185?from_cn_redirect=1) instead.
Notification group ID, which is the set of user group IDs.
 * @method void setNotificationUserGroupIds(array $NotificationUserGroupIds) Set This parameter is diused. Please use [CreateNotificationConfiguration](https://intl.cloud.tencent.com/document/api/377/33185?from_cn_redirect=1) instead.
Notification group ID, which is the set of user group IDs.
 */
class CreateScalingPolicyRequest extends AbstractModel
{
    /**
     * @var string Scaling group ID. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1), and retrieve AutoScalingGroupId from the returned information.
     */
    public $AutoScalingGroupId;

    /**
     * @var string The Alarm policy name must be unique in your account. the name length cannot exceed 60 characters. the name only supports chinese, english, digits, underscores, hyphens, and decimal points.
     */
    public $ScalingPolicyName;

    /**
     * @var string Alarm trigger policy type. default: SIMPLE. valid values:.
<Li>`SIMPLE`: a simple policy.</li>.
<Li>`TARGET_TRACKING`: a target tracking policy.</li>.
     */
    public $ScalingPolicyType;

    /**
     * @var string After an Alarm is triggered, specifies the method for modifying the expected number of instances. required in the scenario of simple policies. valid values:.
<Li>CHANGE_IN_CAPACITY: increase or decrease the expected number of instances</li>.
<Li>EXACT_CAPACITY: adjust to the expected number of instances</li>.
<Li>PERCENT_CHANGE_IN_CAPACITY: adjust expected instance number by percent</li>.
     */
    public $AdjustmentType;

    /**
     * @var integer Adjustment value for the expected number of instances after an Alarm is triggered, which is applicable only to simple policies and required in simple policy scenarios.
<li>When AdjustmentType is CHANGE_IN_CAPACITY, a positive AdjustmentValue indicates an increase IN instances after Alarm trigger, while a negative value indicates a decrease IN instances after Alarm trigger.</li>. 
<li>When AdjustmentType is set to EXACT_CAPACITY, the value of AdjustmentValue indicates the new desired number of instances after the Alarm is triggered. it must be at least 0.</li>. 
<li>When AdjustmentType is set to PERCENT_CHANGE_IN_CAPACITY, a positive value of AdjustmentValue indicates an increase in the number of instances by a percentage after the alarm is triggered, while a negative value indicates a decrease in the number of instances by a percentage after the alarm is triggered. Unit: %.</li>
     */
    public $AdjustmentValue;

    /**
     * @var integer Cooldown period (in seconds). This parameter is only applicable to a simple policy. Default value: 300.
     */
    public $Cooldown;

    /**
     * @var MetricAlarm Alarm monitoring metric, apply only to simple policies, required in the scenario of simple policy.
     */
    public $MetricAlarm;

    /**
     * @var string Predefined monitoring item, applicable only to target tracking policies. required in the scenario. value range:.
<Li>ASG_AVG_CPU_UTILIZATION: average cpu utilization</li>.
<Li>ASG_AVG_LAN_TRAFFIC_OUT: specifies the average outbound private network bandwidth.</li>.
<Li>ASG_AVG_LAN_TRAFFIC_IN: average inbound private network bandwidth</li>.
<Li>ASG_AVG_WAN_TRAFFIC_OUT: specifies the average outbound public network bandwidth.</li>.
<li>ASG_AVG_WAN_TRAFFIC_IN: average inbound public network bandwidth</li>
     */
    public $PredefinedMetricType;

    /**
     * @var integer Target value, applicable only to the target tracking policy, required in the scenario.
<Li>ASG_AVG_CPU_UTILIZATION: value range: [1, 100); unit: %.</li>.
<li>ASG_AVG_LAN_TRAFFIC_OUT: value range: > 0; unit: Mbps.</li>.
<li>ASG_AVG_LAN_TRAFFIC_IN: value range: > 0; unit: Mbps.</li>.
<li>ASG_AVG_WAN_TRAFFIC_OUT: value range: > 0; unit: Mbps.</li>.
<li>ASG_AVG_WAN_TRAFFIC_IN: value range: > 0; unit: Mbps.</li>
     */
    public $TargetValue;

    /**
     * @var integer Instance warm-up period (in seconds). It is only available when `ScalingPolicyType` is `TARGET_TRACKING`. Value range: 0-3600. Default value: 300.
     */
    public $EstimatedInstanceWarmup;

    /**
     * @var boolean Whether to disable scale-in, which is applicable only to target tracking policies. Default value: false. Valid values:
<li>true: Target tracking policies trigger only scale-out.</li>
<li>false: Target tracking policies trigger both scale-out and scale-in.</li>
     */
    public $DisableScaleIn;

    /**
     * @var array This parameter is diused. Please use [CreateNotificationConfiguration](https://intl.cloud.tencent.com/document/api/377/33185?from_cn_redirect=1) instead.
Notification group ID, which is the set of user group IDs.
     */
    public $NotificationUserGroupIds;

    /**
     * @param string $AutoScalingGroupId Scaling group ID. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1), and retrieve AutoScalingGroupId from the returned information.
     * @param string $ScalingPolicyName The Alarm policy name must be unique in your account. the name length cannot exceed 60 characters. the name only supports chinese, english, digits, underscores, hyphens, and decimal points.
     * @param string $ScalingPolicyType Alarm trigger policy type. default: SIMPLE. valid values:.
<Li>`SIMPLE`: a simple policy.</li>.
<Li>`TARGET_TRACKING`: a target tracking policy.</li>.
     * @param string $AdjustmentType After an Alarm is triggered, specifies the method for modifying the expected number of instances. required in the scenario of simple policies. valid values:.
<Li>CHANGE_IN_CAPACITY: increase or decrease the expected number of instances</li>.
<Li>EXACT_CAPACITY: adjust to the expected number of instances</li>.
<Li>PERCENT_CHANGE_IN_CAPACITY: adjust expected instance number by percent</li>.
     * @param integer $AdjustmentValue Adjustment value for the expected number of instances after an Alarm is triggered, which is applicable only to simple policies and required in simple policy scenarios.
<li>When AdjustmentType is CHANGE_IN_CAPACITY, a positive AdjustmentValue indicates an increase IN instances after Alarm trigger, while a negative value indicates a decrease IN instances after Alarm trigger.</li>. 
<li>When AdjustmentType is set to EXACT_CAPACITY, the value of AdjustmentValue indicates the new desired number of instances after the Alarm is triggered. it must be at least 0.</li>. 
<li>When AdjustmentType is set to PERCENT_CHANGE_IN_CAPACITY, a positive value of AdjustmentValue indicates an increase in the number of instances by a percentage after the alarm is triggered, while a negative value indicates a decrease in the number of instances by a percentage after the alarm is triggered. Unit: %.</li>
     * @param integer $Cooldown Cooldown period (in seconds). This parameter is only applicable to a simple policy. Default value: 300.
     * @param MetricAlarm $MetricAlarm Alarm monitoring metric, apply only to simple policies, required in the scenario of simple policy.
     * @param string $PredefinedMetricType Predefined monitoring item, applicable only to target tracking policies. required in the scenario. value range:.
<Li>ASG_AVG_CPU_UTILIZATION: average cpu utilization</li>.
<Li>ASG_AVG_LAN_TRAFFIC_OUT: specifies the average outbound private network bandwidth.</li>.
<Li>ASG_AVG_LAN_TRAFFIC_IN: average inbound private network bandwidth</li>.
<Li>ASG_AVG_WAN_TRAFFIC_OUT: specifies the average outbound public network bandwidth.</li>.
<li>ASG_AVG_WAN_TRAFFIC_IN: average inbound public network bandwidth</li>
     * @param integer $TargetValue Target value, applicable only to the target tracking policy, required in the scenario.
<Li>ASG_AVG_CPU_UTILIZATION: value range: [1, 100); unit: %.</li>.
<li>ASG_AVG_LAN_TRAFFIC_OUT: value range: > 0; unit: Mbps.</li>.
<li>ASG_AVG_LAN_TRAFFIC_IN: value range: > 0; unit: Mbps.</li>.
<li>ASG_AVG_WAN_TRAFFIC_OUT: value range: > 0; unit: Mbps.</li>.
<li>ASG_AVG_WAN_TRAFFIC_IN: value range: > 0; unit: Mbps.</li>
     * @param integer $EstimatedInstanceWarmup Instance warm-up period (in seconds). It is only available when `ScalingPolicyType` is `TARGET_TRACKING`. Value range: 0-3600. Default value: 300.
     * @param boolean $DisableScaleIn Whether to disable scale-in, which is applicable only to target tracking policies. Default value: false. Valid values:
<li>true: Target tracking policies trigger only scale-out.</li>
<li>false: Target tracking policies trigger both scale-out and scale-in.</li>
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("ScalingPolicyName",$param) and $param["ScalingPolicyName"] !== null) {
            $this->ScalingPolicyName = $param["ScalingPolicyName"];
        }

        if (array_key_exists("ScalingPolicyType",$param) and $param["ScalingPolicyType"] !== null) {
            $this->ScalingPolicyType = $param["ScalingPolicyType"];
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
