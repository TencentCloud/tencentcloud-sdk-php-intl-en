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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Import Es information
 *
 * @method integer getType() Obtain Import mode.
1. Import history data
2. Import real-time data
 * @method void setType(integer $Type) Set Import mode.
1. Import history data
2. Import real-time data
 * @method integer getStartTime() Obtain Start time. Unit: unix second-level timestamp.

 * @method void setStartTime(integer $StartTime) Set Start time. Unit: unix second-level timestamp.

 * @method integer getEndTime() Obtain End time. Unit: unix second-level timestamp.
 * @method void setEndTime(integer $EndTime) Set End time. Unit: unix second-level timestamp.
 * @method integer getMaxDelay() Obtain Maximum delay time. Unit: s

Import mode is 2. Required for importing real-time data.
 * @method void setMaxDelay(integer $MaxDelay) Set Maximum delay time. Unit: s

Import mode is 2. Required for importing real-time data.
 * @method integer getCheckInterval() Obtain Check interval. Unit: s

Import mode is 2. Required for importing real-time data.
 * @method void setCheckInterval(integer $CheckInterval) Set Check interval. Unit: s

Import mode is 2. Required for importing real-time data.
 */
class EsImportInfo extends AbstractModel
{
    /**
     * @var integer Import mode.
1. Import history data
2. Import real-time data
     */
    public $Type;

    /**
     * @var integer Start time. Unit: unix second-level timestamp.

     */
    public $StartTime;

    /**
     * @var integer End time. Unit: unix second-level timestamp.
     */
    public $EndTime;

    /**
     * @var integer Maximum delay time. Unit: s

Import mode is 2. Required for importing real-time data.
     */
    public $MaxDelay;

    /**
     * @var integer Check interval. Unit: s

Import mode is 2. Required for importing real-time data.
     */
    public $CheckInterval;

    /**
     * @param integer $Type Import mode.
1. Import history data
2. Import real-time data
     * @param integer $StartTime Start time. Unit: unix second-level timestamp.

     * @param integer $EndTime End time. Unit: unix second-level timestamp.
     * @param integer $MaxDelay Maximum delay time. Unit: s

Import mode is 2. Required for importing real-time data.
     * @param integer $CheckInterval Check interval. Unit: s

Import mode is 2. Required for importing real-time data.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MaxDelay",$param) and $param["MaxDelay"] !== null) {
            $this->MaxDelay = $param["MaxDelay"];
        }

        if (array_key_exists("CheckInterval",$param) and $param["CheckInterval"] !== null) {
            $this->CheckInterval = $param["CheckInterval"];
        }
    }
}
