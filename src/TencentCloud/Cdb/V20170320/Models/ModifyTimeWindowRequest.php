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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTimeWindow request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method array getTimeRanges() Obtain Time period available for maintenance after modification in the format of 10:00-12:00. Each period lasts from half an hour to three hours, with the start time and end time aligned by half-hour. Up to two time periods can be set. Start and end time range: [00:00, 24:00].
 * @method void setTimeRanges(array $TimeRanges) Set Time period available for maintenance after modification in the format of 10:00-12:00. Each period lasts from half an hour to three hours, with the start time and end time aligned by half-hour. Up to two time periods can be set. Start and end time range: [00:00, 24:00].
 * @method array getWeekdays() Obtain Specifies for which day to modify the time period. Value range: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday. If it is not specified or is left blank, the time period will be modified for every day by default.
 * @method void setWeekdays(array $Weekdays) Set Specifies for which day to modify the time period. Value range: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday. If it is not specified or is left blank, the time period will be modified for every day by default.
 * @method integer getMaxDelayTime() Obtain Data delay threshold. It takes effect only for source instance and disaster recovery instance. Default value: 10.
 * @method void setMaxDelayTime(integer $MaxDelayTime) Set Data delay threshold. It takes effect only for source instance and disaster recovery instance. Default value: 10.
 */
class ModifyTimeWindowRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     */
    public $InstanceId;

    /**
     * @var array Time period available for maintenance after modification in the format of 10:00-12:00. Each period lasts from half an hour to three hours, with the start time and end time aligned by half-hour. Up to two time periods can be set. Start and end time range: [00:00, 24:00].
     */
    public $TimeRanges;

    /**
     * @var array Specifies for which day to modify the time period. Value range: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday. If it is not specified or is left blank, the time period will be modified for every day by default.
     */
    public $Weekdays;

    /**
     * @var integer Data delay threshold. It takes effect only for source instance and disaster recovery instance. Default value: 10.
     */
    public $MaxDelayTime;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     * @param array $TimeRanges Time period available for maintenance after modification in the format of 10:00-12:00. Each period lasts from half an hour to three hours, with the start time and end time aligned by half-hour. Up to two time periods can be set. Start and end time range: [00:00, 24:00].
     * @param array $Weekdays Specifies for which day to modify the time period. Value range: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday. If it is not specified or is left blank, the time period will be modified for every day by default.
     * @param integer $MaxDelayTime Data delay threshold. It takes effect only for source instance and disaster recovery instance. Default value: 10.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TimeRanges",$param) and $param["TimeRanges"] !== null) {
            $this->TimeRanges = $param["TimeRanges"];
        }

        if (array_key_exists("Weekdays",$param) and $param["Weekdays"] !== null) {
            $this->Weekdays = $param["Weekdays"];
        }

        if (array_key_exists("MaxDelayTime",$param) and $param["MaxDelayTime"] !== null) {
            $this->MaxDelayTime = $param["MaxDelayTime"];
        }
    }
}
