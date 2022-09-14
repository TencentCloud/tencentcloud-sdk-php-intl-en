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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The maintenance time slot of the cluster
 *
 * @method array getPeriods() Obtain Maintenance period, which can be one or more days from Monday to Sunday. Valid values: [0, 6].
 * @method void setPeriods(array $Periods) Set Maintenance period, which can be one or more days from Monday to Sunday. Valid values: [0, 6].
 * @method string getTimeStart() Obtain The maintenance start time
 * @method void setTimeStart(string $TimeStart) Set The maintenance start time
 * @method string getTimeEnd() Obtain The maintenance end time
 * @method void setTimeEnd(string $TimeEnd) Set The maintenance end time
 * @method string getTimeZone() Obtain The time zone expressed in UTC.
 * @method void setTimeZone(string $TimeZone) Set The time zone expressed in UTC.
 * @method array getMoreInstances() Obtain The array of ES cluster IDs
 * @method void setMoreInstances(array $MoreInstances) Set The array of ES cluster IDs
 */
class OperationDurationUpdated extends AbstractModel
{
    /**
     * @var array Maintenance period, which can be one or more days from Monday to Sunday. Valid values: [0, 6].
     */
    public $Periods;

    /**
     * @var string The maintenance start time
     */
    public $TimeStart;

    /**
     * @var string The maintenance end time
     */
    public $TimeEnd;

    /**
     * @var string The time zone expressed in UTC.
     */
    public $TimeZone;

    /**
     * @var array The array of ES cluster IDs
     */
    public $MoreInstances;

    /**
     * @param array $Periods Maintenance period, which can be one or more days from Monday to Sunday. Valid values: [0, 6].
     * @param string $TimeStart The maintenance start time
     * @param string $TimeEnd The maintenance end time
     * @param string $TimeZone The time zone expressed in UTC.
     * @param array $MoreInstances The array of ES cluster IDs
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

        if (array_key_exists("MoreInstances",$param) and $param["MoreInstances"] !== null) {
            $this->MoreInstances = $param["MoreInstances"];
        }
    }
}
