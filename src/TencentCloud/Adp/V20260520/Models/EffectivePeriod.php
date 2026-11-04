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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Validity period.
 *
 * @method string getEndTime() Obtain <p>Validity end time (Unix seconds. 0 indicates permanent validity).</p>
 * @method void setEndTime(string $EndTime) Set <p>Validity end time (Unix seconds. 0 indicates permanent validity).</p>
 * @method string getStartTime() Obtain <p>Validity start time (Unix seconds)</p>
 * @method void setStartTime(string $StartTime) Set <p>Validity start time (Unix seconds)</p>
 */
class EffectivePeriod extends AbstractModel
{
    /**
     * @var string <p>Validity end time (Unix seconds. 0 indicates permanent validity).</p>
     */
    public $EndTime;

    /**
     * @var string <p>Validity start time (Unix seconds)</p>
     */
    public $StartTime;

    /**
     * @param string $EndTime <p>Validity end time (Unix seconds. 0 indicates permanent validity).</p>
     * @param string $StartTime <p>Validity start time (Unix seconds)</p>
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
        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
