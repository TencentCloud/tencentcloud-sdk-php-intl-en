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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyScheduledAction request structure.
 *
 * @method string getScheduledActionId() Obtain ID of the scheduled task to be edited
 * @method void setScheduledActionId(string $ScheduledActionId) Set ID of the scheduled task to be edited
 * @method string getScheduledActionName() Obtain Scheduled task name, which can only contain letters, numbers, underscores, hyphens ("-"), and decimal points with a maximum length of 60 bytes and must be unique in an auto scaling group.
 * @method void setScheduledActionName(string $ScheduledActionName) Set Scheduled task name, which can only contain letters, numbers, underscores, hyphens ("-"), and decimal points with a maximum length of 60 bytes and must be unique in an auto scaling group.
 * @method integer getMaxSize() Obtain The maximum number of instances set for the auto scaling group when the scheduled task is triggered.
 * @method void setMaxSize(integer $MaxSize) Set The maximum number of instances set for the auto scaling group when the scheduled task is triggered.
 * @method integer getMinSize() Obtain The minimum number of instances set for the auto scaling group when the scheduled task is triggered.
 * @method void setMinSize(integer $MinSize) Set The minimum number of instances set for the auto scaling group when the scheduled task is triggered.
 * @method integer getDesiredCapacity() Obtain The desired number of instances set for the auto scaling group when the scheduled task is triggered.
 * @method void setDesiredCapacity(integer $DesiredCapacity) Set The desired number of instances set for the auto scaling group when the scheduled task is triggered.
 * @method string getStartTime() Obtain Initial triggered time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard.
 * @method void setStartTime(string $StartTime) Set Initial triggered time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard.
 * @method string getEndTime() Obtain End time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard. <br>This parameter and `Recurrence` need to be specified at the same time. After the end time, the scheduled task will no longer take effect.
 * @method void setEndTime(string $EndTime) Set End time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard. <br>This parameter and `Recurrence` need to be specified at the same time. After the end time, the scheduled task will no longer take effect.
 * @method string getRecurrence() Obtain Repeating mode of the scheduled task, which is in standard cron format. <br>This parameter and `EndTime` need to be specified at the same time.
 * @method void setRecurrence(string $Recurrence) Set Repeating mode of the scheduled task, which is in standard cron format. <br>This parameter and `EndTime` need to be specified at the same time.
 */
class ModifyScheduledActionRequest extends AbstractModel
{
    /**
     * @var string ID of the scheduled task to be edited
     */
    public $ScheduledActionId;

    /**
     * @var string Scheduled task name, which can only contain letters, numbers, underscores, hyphens ("-"), and decimal points with a maximum length of 60 bytes and must be unique in an auto scaling group.
     */
    public $ScheduledActionName;

    /**
     * @var integer The maximum number of instances set for the auto scaling group when the scheduled task is triggered.
     */
    public $MaxSize;

    /**
     * @var integer The minimum number of instances set for the auto scaling group when the scheduled task is triggered.
     */
    public $MinSize;

    /**
     * @var integer The desired number of instances set for the auto scaling group when the scheduled task is triggered.
     */
    public $DesiredCapacity;

    /**
     * @var string Initial triggered time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard.
     */
    public $StartTime;

    /**
     * @var string End time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard. <br>This parameter and `Recurrence` need to be specified at the same time. After the end time, the scheduled task will no longer take effect.
     */
    public $EndTime;

    /**
     * @var string Repeating mode of the scheduled task, which is in standard cron format. <br>This parameter and `EndTime` need to be specified at the same time.
     */
    public $Recurrence;

    /**
     * @param string $ScheduledActionId ID of the scheduled task to be edited
     * @param string $ScheduledActionName Scheduled task name, which can only contain letters, numbers, underscores, hyphens ("-"), and decimal points with a maximum length of 60 bytes and must be unique in an auto scaling group.
     * @param integer $MaxSize The maximum number of instances set for the auto scaling group when the scheduled task is triggered.
     * @param integer $MinSize The minimum number of instances set for the auto scaling group when the scheduled task is triggered.
     * @param integer $DesiredCapacity The desired number of instances set for the auto scaling group when the scheduled task is triggered.
     * @param string $StartTime Initial triggered time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard.
     * @param string $EndTime End time of the scheduled task. The value is in `Beijing time` (UTC+8) in the format of `YYYY-MM-DDThh:mm:ss+08:00` according to the `ISO8601` standard. <br>This parameter and `Recurrence` need to be specified at the same time. After the end time, the scheduled task will no longer take effect.
     * @param string $Recurrence Repeating mode of the scheduled task, which is in standard cron format. <br>This parameter and `EndTime` need to be specified at the same time.
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

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            $this->DesiredCapacity = $param["DesiredCapacity"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Recurrence",$param) and $param["Recurrence"] !== null) {
            $this->Recurrence = $param["Recurrence"];
        }
    }
}
