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
 * Cluster maintainability time
 *
 * @method array getPeriods() Obtain Maintenance period, which refers to Monday to Sunday. Valid values: [0, 6].
 * @method void setPeriods(array $Periods) Set Maintenance period, which refers to Monday to Sunday. Valid values: [0, 6].
 * @method string getTimeStart() Obtain Maintenance start time
 * @method void setTimeStart(string $TimeStart) Set Maintenance start time
 * @method string getTimeEnd() Obtain Maintenance end time.
 * @method void setTimeEnd(string $TimeEnd) Set Maintenance end time.
 * @method string getTimeZone() Obtain Time zone in UTC format
 * @method void setTimeZone(string $TimeZone) Set Time zone in UTC format
 */
class OperationDuration extends AbstractModel
{
    /**
     * @var array Maintenance period, which refers to Monday to Sunday. Valid values: [0, 6].
     */
    public $Periods;

    /**
     * @var string Maintenance start time
     */
    public $TimeStart;

    /**
     * @var string Maintenance end time.
     */
    public $TimeEnd;

    /**
     * @var string Time zone in UTC format
     */
    public $TimeZone;

    /**
     * @param array $Periods Maintenance period, which refers to Monday to Sunday. Valid values: [0, 6].
     * @param string $TimeStart Maintenance start time
     * @param string $TimeEnd Maintenance end time.
     * @param string $TimeZone Time zone in UTC format
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
