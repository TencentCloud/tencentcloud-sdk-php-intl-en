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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRealServerStatistics request structure.
 *
 * @method string getRealServerId() Obtain Origin server ID
 * @method void setRealServerId(string $RealServerId) Set Origin server ID
 * @method string getListenerId() Obtain Listener ID
 * @method void setListenerId(string $ListenerId) Set Listener ID
 * @method string getRuleId() Obtain Layer-7 rule ID
 * @method void setRuleId(string $RuleId) Set Layer-7 rule ID
 * @method integer getWithinTime() Obtain Statistics duration. Unit: hours. It only supports querying statistics for the past 1, 3, 6, 12, and 24 hours.
 * @method void setWithinTime(integer $WithinTime) Set Statistics duration. Unit: hours. It only supports querying statistics for the past 1, 3, 6, 12, and 24 hours.
 * @method string getStartTime() Obtain Statistics start time, such as `2020-08-19 00:00:00`
 * @method void setStartTime(string $StartTime) Set Statistics start time, such as `2020-08-19 00:00:00`
 * @method string getEndTime() Obtain Statistics end time, such as `2020-08-19 23:59:59`
 * @method void setEndTime(string $EndTime) Set Statistics end time, such as `2020-08-19 23:59:59`
 * @method integer getGranularity() Obtain Statistics granularity in seconds. Only 1-minute (60-second) and 5-minute (300-second) granularities are supported.
 * @method void setGranularity(integer $Granularity) Set Statistics granularity in seconds. Only 1-minute (60-second) and 5-minute (300-second) granularities are supported.
 */
class DescribeRealServerStatisticsRequest extends AbstractModel
{
    /**
     * @var string Origin server ID
     */
    public $RealServerId;

    /**
     * @var string Listener ID
     */
    public $ListenerId;

    /**
     * @var string Layer-7 rule ID
     */
    public $RuleId;

    /**
     * @var integer Statistics duration. Unit: hours. It only supports querying statistics for the past 1, 3, 6, 12, and 24 hours.
     */
    public $WithinTime;

    /**
     * @var string Statistics start time, such as `2020-08-19 00:00:00`
     */
    public $StartTime;

    /**
     * @var string Statistics end time, such as `2020-08-19 23:59:59`
     */
    public $EndTime;

    /**
     * @var integer Statistics granularity in seconds. Only 1-minute (60-second) and 5-minute (300-second) granularities are supported.
     */
    public $Granularity;

    /**
     * @param string $RealServerId Origin server ID
     * @param string $ListenerId Listener ID
     * @param string $RuleId Layer-7 rule ID
     * @param integer $WithinTime Statistics duration. Unit: hours. It only supports querying statistics for the past 1, 3, 6, 12, and 24 hours.
     * @param string $StartTime Statistics start time, such as `2020-08-19 00:00:00`
     * @param string $EndTime Statistics end time, such as `2020-08-19 23:59:59`
     * @param integer $Granularity Statistics granularity in seconds. Only 1-minute (60-second) and 5-minute (300-second) granularities are supported.
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
        if (array_key_exists("RealServerId",$param) and $param["RealServerId"] !== null) {
            $this->RealServerId = $param["RealServerId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("WithinTime",$param) and $param["WithinTime"] !== null) {
            $this->WithinTime = $param["WithinTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }
    }
}
