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
 * This describes the information of a scheduled task.
 *
 * @method string getScheduledActionId() Obtain Scheduled task ID.
 * @method void setScheduledActionId(string $ScheduledActionId) Set Scheduled task ID.
 * @method string getScheduledActionName() Obtain Scheduled task name.
 * @method void setScheduledActionName(string $ScheduledActionName) Set Scheduled task name.
 * @method string getAutoScalingGroupId() Obtain ID of the auto scaling group where the scheduled task is located.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set ID of the auto scaling group where the scheduled task is located.
 * @method string getStartTime() Obtain Start time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard.
 * @method void setStartTime(string $StartTime) Set Start time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard.
 * @method string getRecurrence() Obtain Specifies the repeating mode of the scheduled task. the Recurrence parameter limits (https://intl.cloud.tencent.com/document/product/377/88119?from_cn_redirect=1) consist of 5 fields separated by space, with the structure: minute, hour, date, month, week.
 * @method void setRecurrence(string $Recurrence) Set Specifies the repeating mode of the scheduled task. the Recurrence parameter limits (https://intl.cloud.tencent.com/document/product/377/88119?from_cn_redirect=1) consist of 5 fields separated by space, with the structure: minute, hour, date, month, week.
 * @method string getEndTime() Obtain End time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard.
 * @method void setEndTime(string $EndTime) Set End time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard.
 * @method integer getMaxSize() Obtain Maximum number of instances set by the scheduled task.
 * @method void setMaxSize(integer $MaxSize) Set Maximum number of instances set by the scheduled task.
 * @method integer getDesiredCapacity() Obtain Desired number of instances set by the scheduled task.
 * @method void setDesiredCapacity(integer $DesiredCapacity) Set Desired number of instances set by the scheduled task.
 * @method integer getMinSize() Obtain Minimum number of instances set by the scheduled task.
 * @method void setMinSize(integer $MinSize) Set Minimum number of instances set by the scheduled task.
 * @method string getCreatedTime() Obtain The creation time of the scheduled task. value is in standard `UTC` time, formatted as `YYYY-MM-DDThh:MM:ssZ` according to the `ISO8601` standard.
 * @method void setCreatedTime(string $CreatedTime) Set The creation time of the scheduled task. value is in standard `UTC` time, formatted as `YYYY-MM-DDThh:MM:ssZ` according to the `ISO8601` standard.
 * @method string getScheduledType() Obtain Scheduled task execution type. Valid values:
<li>CRONTAB: repeated execution.</li>
<li>ONCE: single execution.</li>
 * @method void setScheduledType(string $ScheduledType) Set Scheduled task execution type. Valid values:
<li>CRONTAB: repeated execution.</li>
<li>ONCE: single execution.</li>
 */
class ScheduledAction extends AbstractModel
{
    /**
     * @var string Scheduled task ID.
     */
    public $ScheduledActionId;

    /**
     * @var string Scheduled task name.
     */
    public $ScheduledActionName;

    /**
     * @var string ID of the auto scaling group where the scheduled task is located.
     */
    public $AutoScalingGroupId;

    /**
     * @var string Start time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard.
     */
    public $StartTime;

    /**
     * @var string Specifies the repeating mode of the scheduled task. the Recurrence parameter limits (https://intl.cloud.tencent.com/document/product/377/88119?from_cn_redirect=1) consist of 5 fields separated by space, with the structure: minute, hour, date, month, week.
     */
    public $Recurrence;

    /**
     * @var string End time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard.
     */
    public $EndTime;

    /**
     * @var integer Maximum number of instances set by the scheduled task.
     */
    public $MaxSize;

    /**
     * @var integer Desired number of instances set by the scheduled task.
     */
    public $DesiredCapacity;

    /**
     * @var integer Minimum number of instances set by the scheduled task.
     */
    public $MinSize;

    /**
     * @var string The creation time of the scheduled task. value is in standard `UTC` time, formatted as `YYYY-MM-DDThh:MM:ssZ` according to the `ISO8601` standard.
     */
    public $CreatedTime;

    /**
     * @var string Scheduled task execution type. Valid values:
<li>CRONTAB: repeated execution.</li>
<li>ONCE: single execution.</li>
     */
    public $ScheduledType;

    /**
     * @param string $ScheduledActionId Scheduled task ID.
     * @param string $ScheduledActionName Scheduled task name.
     * @param string $AutoScalingGroupId ID of the auto scaling group where the scheduled task is located.
     * @param string $StartTime Start time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard.
     * @param string $Recurrence Specifies the repeating mode of the scheduled task. the Recurrence parameter limits (https://intl.cloud.tencent.com/document/product/377/88119?from_cn_redirect=1) consist of 5 fields separated by space, with the structure: minute, hour, date, month, week.
     * @param string $EndTime End time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard.
     * @param integer $MaxSize Maximum number of instances set by the scheduled task.
     * @param integer $DesiredCapacity Desired number of instances set by the scheduled task.
     * @param integer $MinSize Minimum number of instances set by the scheduled task.
     * @param string $CreatedTime The creation time of the scheduled task. value is in standard `UTC` time, formatted as `YYYY-MM-DDThh:MM:ssZ` according to the `ISO8601` standard.
     * @param string $ScheduledType Scheduled task execution type. Valid values:
<li>CRONTAB: repeated execution.</li>
<li>ONCE: single execution.</li>
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
        if (array_key_exists("ScheduledActionId",$param) and $param["ScheduledActionId"] !== null) {
            $this->ScheduledActionId = $param["ScheduledActionId"];
        }

        if (array_key_exists("ScheduledActionName",$param) and $param["ScheduledActionName"] !== null) {
            $this->ScheduledActionName = $param["ScheduledActionName"];
        }

        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Recurrence",$param) and $param["Recurrence"] !== null) {
            $this->Recurrence = $param["Recurrence"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            $this->DesiredCapacity = $param["DesiredCapacity"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ScheduledType",$param) and $param["ScheduledType"] !== null) {
            $this->ScheduledType = $param["ScheduledType"];
        }
    }
}
