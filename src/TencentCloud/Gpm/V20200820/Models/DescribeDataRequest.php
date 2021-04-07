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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeData request structure.
 *
 * @method integer getStartTime() Obtain Start time in seconds
 * @method void setStartTime(integer $StartTime) Set Start time in seconds
 * @method integer getEndTime() Obtain End time in seconds
 * @method void setEndTime(integer $EndTime) Set End time in seconds
 * @method integer getTimeType() Obtain Time granularity. Valid values: 1: 1 day, 2: 1 hour, 3: 1 minute, 4: 10 minutes, 5: 30 minutes
 * @method void setTimeType(integer $TimeType) Set Time granularity. Valid values: 1: 1 day, 2: 1 hour, 3: 1 minute, 4: 10 minutes, 5: 30 minutes
 * @method string getMatchCode() Obtain MatchCode
 * @method void setMatchCode(string $MatchCode) Set MatchCode
 */
class DescribeDataRequest extends AbstractModel
{
    /**
     * @var integer Start time in seconds
     */
    public $StartTime;

    /**
     * @var integer End time in seconds
     */
    public $EndTime;

    /**
     * @var integer Time granularity. Valid values: 1: 1 day, 2: 1 hour, 3: 1 minute, 4: 10 minutes, 5: 30 minutes
     */
    public $TimeType;

    /**
     * @var string MatchCode
     */
    public $MatchCode;

    /**
     * @param integer $StartTime Start time in seconds
     * @param integer $EndTime End time in seconds
     * @param integer $TimeType Time granularity. Valid values: 1: 1 day, 2: 1 hour, 3: 1 minute, 4: 10 minutes, 5: 30 minutes
     * @param string $MatchCode MatchCode
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

        if (array_key_exists("TimeType",$param) and $param["TimeType"] !== null) {
            $this->TimeType = $param["TimeType"];
        }

        if (array_key_exists("MatchCode",$param) and $param["MatchCode"] !== null) {
            $this->MatchCode = $param["MatchCode"];
        }
    }
}
