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
 * CreateScalingPolicy request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Auto scaling group ID.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Auto scaling group ID.
 * @method string getScalingPolicyName() Obtain Alarm trigger policy name.
 * @method void setScalingPolicyName(string $ScalingPolicyName) Set Alarm trigger policy name.
 * @method string getAdjustmentType() Obtain The method to adjust the desired number of instances after the alarm is triggered. Value range: <br><li>CHANGE_IN_CAPACITY: Increase or decrease the desired number of instances </li><li>EXACT_CAPACITY: Adjust to the specified desired number of instances </li> <li>PERCENT_CHANGE_IN_CAPACITY: Adjust the desired number of instances by percentage </li>
 * @method void setAdjustmentType(string $AdjustmentType) Set The method to adjust the desired number of instances after the alarm is triggered. Value range: <br><li>CHANGE_IN_CAPACITY: Increase or decrease the desired number of instances </li><li>EXACT_CAPACITY: Adjust to the specified desired number of instances </li> <li>PERCENT_CHANGE_IN_CAPACITY: Adjust the desired number of instances by percentage </li>
 * @method integer getAdjustmentValue() Obtain The adjusted value of desired number of instances after the alarm is triggered. Value range: <br><li>When AdjustmentType is CHANGE_IN_CAPACITY, if AdjustmentValue is a positive value, some new instances will be added after the alarm is triggered, and if it is a negative value, some existing instances will be removed after the alarm is triggered </li> <li> When AdjustmentType is EXACT_CAPACITY, the value of AdjustmentValue is the desired number of instances after the alarm is triggered, which should be equal to or greater than 0 </li> <li> When AdjustmentType is PERCENT_CHANGE_IN_CAPACITY, if AdjusmentValue (in %) is a positive value, new instances will be added by percentage after the alarm is triggered; if it is a negative value, existing instances will be removed by percentage after the alarm is triggered.
 * @method void setAdjustmentValue(integer $AdjustmentValue) Set The adjusted value of desired number of instances after the alarm is triggered. Value range: <br><li>When AdjustmentType is CHANGE_IN_CAPACITY, if AdjustmentValue is a positive value, some new instances will be added after the alarm is triggered, and if it is a negative value, some existing instances will be removed after the alarm is triggered </li> <li> When AdjustmentType is EXACT_CAPACITY, the value of AdjustmentValue is the desired number of instances after the alarm is triggered, which should be equal to or greater than 0 </li> <li> When AdjustmentType is PERCENT_CHANGE_IN_CAPACITY, if AdjusmentValue (in %) is a positive value, new instances will be added by percentage after the alarm is triggered; if it is a negative value, existing instances will be removed by percentage after the alarm is triggered.
 * @method MetricAlarm getMetricAlarm() Obtain Alarm monitoring metric.
 * @method void setMetricAlarm(MetricAlarm $MetricAlarm) Set Alarm monitoring metric.
 * @method integer getCooldown() Obtain Cooldown period in seconds. Default value: 300 seconds.
 * @method void setCooldown(integer $Cooldown) Set Cooldown period in seconds. Default value: 300 seconds.
 * @method array getNotificationUserGroupIds() Obtain Array of String | Notification group ID, which is the set of user group IDs and can be queried through the [DescribeUserGroup API](https://cloud.tencent.com/document/api/378/4404).
 * @method void setNotificationUserGroupIds(array $NotificationUserGroupIds) Set Array of String | Notification group ID, which is the set of user group IDs and can be queried through the [DescribeUserGroup API](https://cloud.tencent.com/document/api/378/4404).
 */
class CreateScalingPolicyRequest extends AbstractModel
{
    /**
     * @var string Auto scaling group ID.
     */
    public $AutoScalingGroupId;

    /**
     * @var string Alarm trigger policy name.
     */
    public $ScalingPolicyName;

    /**
     * @var string The method to adjust the desired number of instances after the alarm is triggered. Value range: <br><li>CHANGE_IN_CAPACITY: Increase or decrease the desired number of instances </li><li>EXACT_CAPACITY: Adjust to the specified desired number of instances </li> <li>PERCENT_CHANGE_IN_CAPACITY: Adjust the desired number of instances by percentage </li>
     */
    public $AdjustmentType;

    /**
     * @var integer The adjusted value of desired number of instances after the alarm is triggered. Value range: <br><li>When AdjustmentType is CHANGE_IN_CAPACITY, if AdjustmentValue is a positive value, some new instances will be added after the alarm is triggered, and if it is a negative value, some existing instances will be removed after the alarm is triggered </li> <li> When AdjustmentType is EXACT_CAPACITY, the value of AdjustmentValue is the desired number of instances after the alarm is triggered, which should be equal to or greater than 0 </li> <li> When AdjustmentType is PERCENT_CHANGE_IN_CAPACITY, if AdjusmentValue (in %) is a positive value, new instances will be added by percentage after the alarm is triggered; if it is a negative value, existing instances will be removed by percentage after the alarm is triggered.
     */
    public $AdjustmentValue;

    /**
     * @var MetricAlarm Alarm monitoring metric.
     */
    public $MetricAlarm;

    /**
     * @var integer Cooldown period in seconds. Default value: 300 seconds.
     */
    public $Cooldown;

    /**
     * @var array Array of String | Notification group ID, which is the set of user group IDs and can be queried through the [DescribeUserGroup API](https://cloud.tencent.com/document/api/378/4404).
     */
    public $NotificationUserGroupIds;

    /**
     * @param string $AutoScalingGroupId Auto scaling group ID.
     * @param string $ScalingPolicyName Alarm trigger policy name.
     * @param string $AdjustmentType The method to adjust the desired number of instances after the alarm is triggered. Value range: <br><li>CHANGE_IN_CAPACITY: Increase or decrease the desired number of instances </li><li>EXACT_CAPACITY: Adjust to the specified desired number of instances </li> <li>PERCENT_CHANGE_IN_CAPACITY: Adjust the desired number of instances by percentage </li>
     * @param integer $AdjustmentValue The adjusted value of desired number of instances after the alarm is triggered. Value range: <br><li>When AdjustmentType is CHANGE_IN_CAPACITY, if AdjustmentValue is a positive value, some new instances will be added after the alarm is triggered, and if it is a negative value, some existing instances will be removed after the alarm is triggered </li> <li> When AdjustmentType is EXACT_CAPACITY, the value of AdjustmentValue is the desired number of instances after the alarm is triggered, which should be equal to or greater than 0 </li> <li> When AdjustmentType is PERCENT_CHANGE_IN_CAPACITY, if AdjusmentValue (in %) is a positive value, new instances will be added by percentage after the alarm is triggered; if it is a negative value, existing instances will be removed by percentage after the alarm is triggered.
     * @param MetricAlarm $MetricAlarm Alarm monitoring metric.
     * @param integer $Cooldown Cooldown period in seconds. Default value: 300 seconds.
     * @param array $NotificationUserGroupIds Array of String | Notification group ID, which is the set of user group IDs and can be queried through the [DescribeUserGroup API](https://cloud.tencent.com/document/api/378/4404).
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

        if (array_key_exists("AdjustmentType",$param) and $param["AdjustmentType"] !== null) {
            $this->AdjustmentType = $param["AdjustmentType"];
        }

        if (array_key_exists("AdjustmentValue",$param) and $param["AdjustmentValue"] !== null) {
            $this->AdjustmentValue = $param["AdjustmentValue"];
        }

        if (array_key_exists("MetricAlarm",$param) and $param["MetricAlarm"] !== null) {
            $this->MetricAlarm = new MetricAlarm();
            $this->MetricAlarm->deserialize($param["MetricAlarm"]);
        }

        if (array_key_exists("Cooldown",$param) and $param["Cooldown"] !== null) {
            $this->Cooldown = $param["Cooldown"];
        }

        if (array_key_exists("NotificationUserGroupIds",$param) and $param["NotificationUserGroupIds"] !== null) {
            $this->NotificationUserGroupIds = $param["NotificationUserGroupIds"];
        }
    }
}
