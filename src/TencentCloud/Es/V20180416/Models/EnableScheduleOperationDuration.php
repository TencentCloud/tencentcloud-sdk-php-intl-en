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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Placement group async task maintenance time period
 *
 * @method array getPeriods() Obtain Date when enabling an asynchronous task is supported
 * @method void setPeriods(array $Periods) Set Date when enabling an asynchronous task is supported
 * @method string getTimeStart() Obtain Enable async start time
 * @method void setTimeStart(string $TimeStart) Set Enable async start time
 * @method string getTimeEnd() Obtain Supports enabling asynchronous termination time
 * @method void setTimeEnd(string $TimeEnd) Set Supports enabling asynchronous termination time
 * @method string getTimeZone() Obtain Enable async time zone
 * @method void setTimeZone(string $TimeZone) Set Enable async time zone
 */
class EnableScheduleOperationDuration extends AbstractModel
{
    /**
     * @var array Date when enabling an asynchronous task is supported
     */
    public $Periods;

    /**
     * @var string Enable async start time
     */
    public $TimeStart;

    /**
     * @var string Supports enabling asynchronous termination time
     */
    public $TimeEnd;

    /**
     * @var string Enable async time zone
     */
    public $TimeZone;

    /**
     * @param array $Periods Date when enabling an asynchronous task is supported
     * @param string $TimeStart Enable async start time
     * @param string $TimeEnd Supports enabling asynchronous termination time
     * @param string $TimeZone Enable async time zone
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
        if (array_key_exists("Periods",$param) and $param["Periods"] !== null) {
            $this->Periods = $param["Periods"];
        }

        if (array_key_exists("TimeStart",$param) and $param["TimeStart"] !== null) {
            $this->TimeStart = $param["TimeStart"];
        }

        if (array_key_exists("TimeEnd",$param) and $param["TimeEnd"] !== null) {
            $this->TimeEnd = $param["TimeEnd"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
