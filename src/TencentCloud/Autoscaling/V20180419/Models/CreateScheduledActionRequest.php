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
 * CreateScheduledAction request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID. obtain available scaling group ids in the following ways:.
<li>Query the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Specifies the scaling group ID obtained by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.</li>.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID. obtain available scaling group ids in the following ways:.
<li>Query the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Specifies the scaling group ID obtained by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.</li>.
 * @method string getScheduledActionName() Obtain Scheduled task name, which can only contain letters, numbers, underscores, hyphens ("-"), and decimal points with a maximum length of 60 bytes and must be unique in an auto scaling group.
 * @method void setScheduledActionName(string $ScheduledActionName) Set Scheduled task name, which can only contain letters, numbers, underscores, hyphens ("-"), and decimal points with a maximum length of 60 bytes and must be unique in an auto scaling group.
 * @method integer getMinSize() Obtain The minimum number of instances set for the auto scaling group when the scheduled task is triggered.
 * @method void setMinSize(integer $MinSize) Set The minimum number of instances set for the auto scaling group when the scheduled task is triggered.
 * @method string getStartTime() Obtain Initial triggered time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard.
 * @method void setStartTime(string $StartTime) Set Initial triggered time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard.
 * @method integer getDesiredCapacity() Obtain The desired number of instances set for the auto scaling group when the scheduled task is triggered.
 * @method void setDesiredCapacity(integer $DesiredCapacity) Set The desired number of instances set for the auto scaling group when the scheduled task is triggered.
 * @method integer getMaxSize() Obtain The maximum number of instances set for the auto scaling group when the scheduled task is triggered.
 * @method void setMaxSize(integer $MaxSize) Set The maximum number of instances set for the auto scaling group when the scheduled task is triggered.
 * @method string getEndTime() Obtain End time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard. <br><br>This parameter and `Recurrence` need to be specified at the same time. After the end time, the scheduled task will no longer take effect.
 * @method void setEndTime(string $EndTime) Set End time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard. <br><br>This parameter and `Recurrence` need to be specified at the same time. After the end time, the scheduled task will no longer take effect.
 * @method string getRecurrence() Obtain The repeating mode of a scheduled task follows the standard Cron format. the [Recurrence parameter limits](https://intl.cloud.tencent.com/document/product/377/88119?from_cn_redirect=1) in a scheduled task consist of 5 fields separated by spaces, with the structure: minute, hour, date, month, week. this parameter must be simultaneously specified with `EndTime`.
 * @method void setRecurrence(string $Recurrence) Set The repeating mode of a scheduled task follows the standard Cron format. the [Recurrence parameter limits](https://intl.cloud.tencent.com/document/product/377/88119?from_cn_redirect=1) in a scheduled task consist of 5 fields separated by spaces, with the structure: minute, hour, date, month, week. this parameter must be simultaneously specified with `EndTime`.
 * @method boolean getDisableUpdateDesiredCapacity() Obtain Disable update DesiredCapacity Indicates the DesiredCapacity is updated normally during scheduled task triggering.

Specifies whether the scheduled task triggers proactive modification of the DesiredCapacity when the value is True. DesiredCapacity may be modified by the minSize and maxSize mechanism.
The following cases assume that DisableUpdateDesiredCapacity is True:
- When scheduled task triggered, the original DesiredCapacity is 5. The scheduled task changes the minSize to 10, the maxSize to 20, and the DesiredCapacity to 15. Since the DesiredCapacity update is disabled, 15 does not take effect. However, the original DesiredCapacity 5 is less than minSize 10, so the final new DesiredCapacity is 10.
- When scheduled task triggered, the original DesiredCapacity is 25. The scheduled task changes the minSize to 10 and the maxSize to 20, and the DesiredCapacity to 15. Since the DesiredCapacity update is disabled, 15 does not take effect. However, the original DesiredCapacity 25 is greater than the maxSize 20, so the final new DesiredCapacity is 20.
- When scheduled task triggered, the original DesiredCapacity is 13. The scheduled task changes the minSize to 10 and the maxSize to 20, and the DesiredCapacity to 15. Since the DesiredCapacity update is disabled, 15 does not take effect, and the DesiredCapacity is still 13.
 * @method void setDisableUpdateDesiredCapacity(boolean $DisableUpdateDesiredCapacity) Set Disable update DesiredCapacity Indicates the DesiredCapacity is updated normally during scheduled task triggering.

Specifies whether the scheduled task triggers proactive modification of the DesiredCapacity when the value is True. DesiredCapacity may be modified by the minSize and maxSize mechanism.
The following cases assume that DisableUpdateDesiredCapacity is True:
- When scheduled task triggered, the original DesiredCapacity is 5. The scheduled task changes the minSize to 10, the maxSize to 20, and the DesiredCapacity to 15. Since the DesiredCapacity update is disabled, 15 does not take effect. However, the original DesiredCapacity 5 is less than minSize 10, so the final new DesiredCapacity is 10.
- When scheduled task triggered, the original DesiredCapacity is 25. The scheduled task changes the minSize to 10 and the maxSize to 20, and the DesiredCapacity to 15. Since the DesiredCapacity update is disabled, 15 does not take effect. However, the original DesiredCapacity 25 is greater than the maxSize 20, so the final new DesiredCapacity is 20.
- When scheduled task triggered, the original DesiredCapacity is 13. The scheduled task changes the minSize to 10 and the maxSize to 20, and the DesiredCapacity to 15. Since the DesiredCapacity update is disabled, 15 does not take effect, and the DesiredCapacity is still 13.
 */
class CreateScheduledActionRequest extends AbstractModel
{
    /**
     * @var string Scaling group ID. obtain available scaling group ids in the following ways:.
<li>Query the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Specifies the scaling group ID obtained by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.</li>.
     */
    public $AutoScalingGroupId;

    /**
     * @var string Scheduled task name, which can only contain letters, numbers, underscores, hyphens ("-"), and decimal points with a maximum length of 60 bytes and must be unique in an auto scaling group.
     */
    public $ScheduledActionName;

    /**
     * @var integer The minimum number of instances set for the auto scaling group when the scheduled task is triggered.
     */
    public $MinSize;

    /**
     * @var string Initial triggered time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard.
     */
    public $StartTime;

    /**
     * @var integer The desired number of instances set for the auto scaling group when the scheduled task is triggered.
     */
    public $DesiredCapacity;

    /**
     * @var integer The maximum number of instances set for the auto scaling group when the scheduled task is triggered.
     */
    public $MaxSize;

    /**
     * @var string End time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard. <br><br>This parameter and `Recurrence` need to be specified at the same time. After the end time, the scheduled task will no longer take effect.
     */
    public $EndTime;

    /**
     * @var string The repeating mode of a scheduled task follows the standard Cron format. the [Recurrence parameter limits](https://intl.cloud.tencent.com/document/product/377/88119?from_cn_redirect=1) in a scheduled task consist of 5 fields separated by spaces, with the structure: minute, hour, date, month, week. this parameter must be simultaneously specified with `EndTime`.
     */
    public $Recurrence;

    /**
     * @var boolean Disable update DesiredCapacity Indicates the DesiredCapacity is updated normally during scheduled task triggering.

Specifies whether the scheduled task triggers proactive modification of the DesiredCapacity when the value is True. DesiredCapacity may be modified by the minSize and maxSize mechanism.
The following cases assume that DisableUpdateDesiredCapacity is True:
- When scheduled task triggered, the original DesiredCapacity is 5. The scheduled task changes the minSize to 10, the maxSize to 20, and the DesiredCapacity to 15. Since the DesiredCapacity update is disabled, 15 does not take effect. However, the original DesiredCapacity 5 is less than minSize 10, so the final new DesiredCapacity is 10.
- When scheduled task triggered, the original DesiredCapacity is 25. The scheduled task changes the minSize to 10 and the maxSize to 20, and the DesiredCapacity to 15. Since the DesiredCapacity update is disabled, 15 does not take effect. However, the original DesiredCapacity 25 is greater than the maxSize 20, so the final new DesiredCapacity is 20.
- When scheduled task triggered, the original DesiredCapacity is 13. The scheduled task changes the minSize to 10 and the maxSize to 20, and the DesiredCapacity to 15. Since the DesiredCapacity update is disabled, 15 does not take effect, and the DesiredCapacity is still 13.
     */
    public $DisableUpdateDesiredCapacity;

    /**
     * @param string $AutoScalingGroupId Scaling group ID. obtain available scaling group ids in the following ways:.
<li>Query the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Specifies the scaling group ID obtained by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.</li>.
     * @param string $ScheduledActionName Scheduled task name, which can only contain letters, numbers, underscores, hyphens ("-"), and decimal points with a maximum length of 60 bytes and must be unique in an auto scaling group.
     * @param integer $MinSize The minimum number of instances set for the auto scaling group when the scheduled task is triggered.
     * @param string $StartTime Initial triggered time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard.
     * @param integer $DesiredCapacity The desired number of instances set for the auto scaling group when the scheduled task is triggered.
     * @param integer $MaxSize The maximum number of instances set for the auto scaling group when the scheduled task is triggered.
     * @param string $EndTime End time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard. <br><br>This parameter and `Recurrence` need to be specified at the same time. After the end time, the scheduled task will no longer take effect.
     * @param string $Recurrence The repeating mode of a scheduled task follows the standard Cron format. the [Recurrence parameter limits](https://intl.cloud.tencent.com/document/product/377/88119?from_cn_redirect=1) in a scheduled task consist of 5 fields separated by spaces, with the structure: minute, hour, date, month, week. this parameter must be simultaneously specified with `EndTime`.
     * @param boolean $DisableUpdateDesiredCapacity Disable update DesiredCapacity Indicates the DesiredCapacity is updated normally during scheduled task triggering.

Specifies whether the scheduled task triggers proactive modification of the DesiredCapacity when the value is True. DesiredCapacity may be modified by the minSize and maxSize mechanism.
The following cases assume that DisableUpdateDesiredCapacity is True:
- When scheduled task triggered, the original DesiredCapacity is 5. The scheduled task changes the minSize to 10, the maxSize to 20, and the DesiredCapacity to 15. Since the DesiredCapacity update is disabled, 15 does not take effect. However, the original DesiredCapacity 5 is less than minSize 10, so the final new DesiredCapacity is 10.
- When scheduled task triggered, the original DesiredCapacity is 25. The scheduled task changes the minSize to 10 and the maxSize to 20, and the DesiredCapacity to 15. Since the DesiredCapacity update is disabled, 15 does not take effect. However, the original DesiredCapacity 25 is greater than the maxSize 20, so the final new DesiredCapacity is 20.
- When scheduled task triggered, the original DesiredCapacity is 13. The scheduled task changes the minSize to 10 and the maxSize to 20, and the DesiredCapacity to 15. Since the DesiredCapacity update is disabled, 15 does not take effect, and the DesiredCapacity is still 13.
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

        if (array_key_exists("ScheduledActionName",$param) and $param["ScheduledActionName"] !== null) {
            $this->ScheduledActionName = $param["ScheduledActionName"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            $this->DesiredCapacity = $param["DesiredCapacity"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Recurrence",$param) and $param["Recurrence"] !== null) {
            $this->Recurrence = $param["Recurrence"];
        }

        if (array_key_exists("DisableUpdateDesiredCapacity",$param) and $param["DisableUpdateDesiredCapacity"] !== null) {
            $this->DisableUpdateDesiredCapacity = $param["DisableUpdateDesiredCapacity"];
        }
    }
}
