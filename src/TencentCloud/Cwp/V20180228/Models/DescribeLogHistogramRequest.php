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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogHistogram request structure.
 *
 * @method integer getStartTime() Obtain Start time of logs to be queried, which is a Unix timestamp in milliseconds
 * @method void setStartTime(integer $StartTime) Set Start time of logs to be queried, which is a Unix timestamp in milliseconds
 * @method integer getEndTime() Obtain End time of logs to be queried, which is a Unix timestamp in milliseconds
 * @method void setEndTime(integer $EndTime) Set End time of logs to be queried, which is a Unix timestamp in milliseconds
 * @method string getQueryString() Obtain Query statement
 * @method void setQueryString(string $QueryString) Set Query statement
 * @method integer getInterval() Obtain Time interval, in ms
 * @method void setInterval(integer $Interval) Set Time interval, in ms
 */
class DescribeLogHistogramRequest extends AbstractModel
{
    /**
     * @var integer Start time of logs to be queried, which is a Unix timestamp in milliseconds
     */
    public $StartTime;

    /**
     * @var integer End time of logs to be queried, which is a Unix timestamp in milliseconds
     */
    public $EndTime;

    /**
     * @var string Query statement
     */
    public $QueryString;

    /**
     * @var integer Time interval, in ms
     */
    public $Interval;

    /**
     * @param integer $StartTime Start time of logs to be queried, which is a Unix timestamp in milliseconds
     * @param integer $EndTime End time of logs to be queried, which is a Unix timestamp in milliseconds
     * @param string $QueryString Query statement
     * @param integer $Interval Time interval, in ms
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = $param["QueryString"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
    }
}
