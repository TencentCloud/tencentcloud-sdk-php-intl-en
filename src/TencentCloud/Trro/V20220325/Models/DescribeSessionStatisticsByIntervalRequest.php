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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSessionStatisticsByInterval request structure.
 *
 * @method string getProjectId() Obtain Project id.
 * @method void setProjectId(string $ProjectId) Set Project id.
 * @method string getStatisticInterval() Obtain Statistical time interval: hour|day|month.
 * @method void setStatisticInterval(string $StatisticInterval) Set Statistical time interval: hour|day|month.
 * @method string getDeviceId() Obtain Device id.
 * @method void setDeviceId(string $DeviceId) Set Device id.
 * @method integer getStartTime() Obtain Start time in seconds.
 * @method void setStartTime(integer $StartTime) Set Start time in seconds.
 * @method integer getEndTime() Obtain End time in seconds.
 * @method void setEndTime(integer $EndTime) Set End time in seconds.
 */
class DescribeSessionStatisticsByIntervalRequest extends AbstractModel
{
    /**
     * @var string Project id.
     */
    public $ProjectId;

    /**
     * @var string Statistical time interval: hour|day|month.
     */
    public $StatisticInterval;

    /**
     * @var string Device id.
     */
    public $DeviceId;

    /**
     * @var integer Start time in seconds.
     */
    public $StartTime;

    /**
     * @var integer End time in seconds.
     */
    public $EndTime;

    /**
     * @param string $ProjectId Project id.
     * @param string $StatisticInterval Statistical time interval: hour|day|month.
     * @param string $DeviceId Device id.
     * @param integer $StartTime Start time in seconds.
     * @param integer $EndTime End time in seconds.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("StatisticInterval",$param) and $param["StatisticInterval"] !== null) {
            $this->StatisticInterval = $param["StatisticInterval"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
