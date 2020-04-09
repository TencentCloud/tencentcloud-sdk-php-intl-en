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
 * Alarm trigger policy.
 *
 * @method string getAutoScalingGroupId() Obtain Auto scaling group ID.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Auto scaling group ID.
 * @method string getAutoScalingPolicyId() Obtain Alarm trigger policy ID.
 * @method void setAutoScalingPolicyId(string $AutoScalingPolicyId) Set Alarm trigger policy ID.
 * @method string getScalingPolicyName() Obtain Alarm trigger policy name.
 * @method void setScalingPolicyName(string $ScalingPolicyName) Set Alarm trigger policy name.
 * @method string getAdjustmentType() Obtain The method to adjust the desired number of instances after the alarm is triggered. Value range: <br><li>CHANGE_IN_CAPACITY: Increase or decrease the desired number of instances </li><li>EXACT_CAPACITY: Adjust to the specified desired number of instances </li> <li>PERCENT_CHANGE_IN_CAPACITY: Adjust the desired number of instances by percentage </li>
 * @method void setAdjustmentType(string $AdjustmentType) Set The method to adjust the desired number of instances after the alarm is triggered. Value range: <br><li>CHANGE_IN_CAPACITY: Increase or decrease the desired number of instances </li><li>EXACT_CAPACITY: Adjust to the specified desired number of instances </li> <li>PERCENT_CHANGE_IN_CAPACITY: Adjust the desired number of instances by percentage </li>
 * @method integer getAdjustmentValue() Obtain The adjusted value of desired number of instances after the alarm is triggered.
 * @method void setAdjustmentValue(integer $AdjustmentValue) Set The adjusted value of desired number of instances after the alarm is triggered.
 * @method integer getCooldown() Obtain Cooldown period.
 * @method void setCooldown(integer $Cooldown) Set Cooldown period.
 * @method MetricAlarm getMetricAlarm() Obtain Alarm monitoring metric.
 * @method void setMetricAlarm(MetricAlarm $MetricAlarm) Set Alarm monitoring metric.
 * @method array getNotificationUserGroupIds() Obtain Notification group ID, which is the set of user group IDs.
 * @method void setNotificationUserGroupIds(array $NotificationUserGroupIds) Set Notification group ID, which is the set of user group IDs.
 */
class ScalingPolicy extends AbstractModel
{
    /**
     * @var string Auto scaling group ID.
     */
    public $AutoScalingGroupId;

    /**
     * @var string Alarm trigger policy ID.
     */
    public $AutoScalingPolicyId;

    /**
     * @var string Alarm trigger policy name.
     */
    public $ScalingPolicyName;

    /**
     * @var string The method to adjust the desired number of instances after the alarm is triggered. Value range: <br><li>CHANGE_IN_CAPACITY: Increase or decrease the desired number of instances </li><li>EXACT_CAPACITY: Adjust to the specified desired number of instances </li> <li>PERCENT_CHANGE_IN_CAPACITY: Adjust the desired number of instances by percentage </li>
     */
    public $AdjustmentType;

    /**
     * @var integer The adjusted value of desired number of instances after the alarm is triggered.
     */
    public $AdjustmentValue;

    /**
     * @var integer Cooldown period.
     */
    public $Cooldown;

    /**
     * @var MetricAlarm Alarm monitoring metric.
     */
    public $MetricAlarm;

    /**
     * @var array Notification group ID, which is the set of user group IDs.
     */
    public $NotificationUserGroupIds;

    /**
     * @param string $AutoScalingGroupId Auto scaling group ID.
     * @param string $AutoScalingPolicyId Alarm trigger policy ID.
     * @param string $ScalingPolicyName Alarm trigger policy name.
     * @param string $AdjustmentType The method to adjust the desired number of instances after the alarm is triggered. Value range: <br><li>CHANGE_IN_CAPACITY: Increase or decrease the desired number of instances </li><li>EXACT_CAPACITY: Adjust to the specified desired number of instances </li> <li>PERCENT_CHANGE_IN_CAPACITY: Adjust the desired number of instances by percentage </li>
     * @param integer $AdjustmentValue The adjusted value of desired number of instances after the alarm is triggered.
     * @param integer $Cooldown Cooldown period.
     * @param MetricAlarm $MetricAlarm Alarm monitoring metric.
     * @param array $NotificationUserGroupIds Notification group ID, which is the set of user group IDs.
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

        if (array_key_exists("NotificationUserGroupIds",$param) and $param["NotificationUserGroupIds"] !== null) {
            $this->NotificationUserGroupIds = $param["NotificationUserGroupIds"];
        }
    }
}
