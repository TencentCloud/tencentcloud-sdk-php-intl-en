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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTimeWindow request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method array getTimeRanges() Obtain The modified maintenance time slot. Among them, each time period is in the format of 10:00-12:00. The start and end time is aligned by half hour. The shortest is half hour and the longest is three hours. Up to two time periods can be set. The start and end time ranges from [00:00, 24:00].
Description: The following is an example of setting two time periods in json.
[
    "01:00-01:30",
    "02:00-02:30"
  ]
 * @method void setTimeRanges(array $TimeRanges) Set The modified maintenance time slot. Among them, each time period is in the format of 10:00-12:00. The start and end time is aligned by half hour. The shortest is half hour and the longest is three hours. Up to two time periods can be set. The start and end time ranges from [00:00, 24:00].
Description: The following is an example of setting two time periods in json.
[
    "01:00-01:30",
    "02:00-02:30"
  ]
 * @method array getWeekdays() Obtain Specify which day to modify the maintenance time slot. Possible values are: monday, tuesday, wednesday, thursday, friday, saturday, sunday. If not specified or empty, modify all seven days of the week by default.
Description: The json example for modifying more than one day is as follows.
[
    "monday",
    "tuesday"
  ]
 * @method void setWeekdays(array $Weekdays) Set Specify which day to modify the maintenance time slot. Possible values are: monday, tuesday, wednesday, thursday, friday, saturday, sunday. If not specified or empty, modify all seven days of the week by default.
Description: The json example for modifying more than one day is as follows.
[
    "monday",
    "tuesday"
  ]
 * @method integer getMaxDelayTime() Obtain Data latency threshold (seconds), only applicable to primary instance and disaster recovery instance. No modification by default to keep the original threshold. Value ranges from 1 to 10 integers.
 * @method void setMaxDelayTime(integer $MaxDelayTime) Set Data latency threshold (seconds), only applicable to primary instance and disaster recovery instance. No modification by default to keep the original threshold. Value ranges from 1 to 10 integers.
 */
class ModifyTimeWindowRequest extends AbstractModel
{
    /**
     * @var string Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     */
    public $InstanceId;

    /**
     * @var array The modified maintenance time slot. Among them, each time period is in the format of 10:00-12:00. The start and end time is aligned by half hour. The shortest is half hour and the longest is three hours. Up to two time periods can be set. The start and end time ranges from [00:00, 24:00].
Description: The following is an example of setting two time periods in json.
[
    "01:00-01:30",
    "02:00-02:30"
  ]
     */
    public $TimeRanges;

    /**
     * @var array Specify which day to modify the maintenance time slot. Possible values are: monday, tuesday, wednesday, thursday, friday, saturday, sunday. If not specified or empty, modify all seven days of the week by default.
Description: The json example for modifying more than one day is as follows.
[
    "monday",
    "tuesday"
  ]
     */
    public $Weekdays;

    /**
     * @var integer Data latency threshold (seconds), only applicable to primary instance and disaster recovery instance. No modification by default to keep the original threshold. Value ranges from 1 to 10 integers.
     */
    public $MaxDelayTime;

    /**
     * @param string $InstanceId Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     * @param array $TimeRanges The modified maintenance time slot. Among them, each time period is in the format of 10:00-12:00. The start and end time is aligned by half hour. The shortest is half hour and the longest is three hours. Up to two time periods can be set. The start and end time ranges from [00:00, 24:00].
Description: The following is an example of setting two time periods in json.
[
    "01:00-01:30",
    "02:00-02:30"
  ]
     * @param array $Weekdays Specify which day to modify the maintenance time slot. Possible values are: monday, tuesday, wednesday, thursday, friday, saturday, sunday. If not specified or empty, modify all seven days of the week by default.
Description: The json example for modifying more than one day is as follows.
[
    "monday",
    "tuesday"
  ]
     * @param integer $MaxDelayTime Data latency threshold (seconds), only applicable to primary instance and disaster recovery instance. No modification by default to keep the original threshold. Value ranges from 1 to 10 integers.
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
