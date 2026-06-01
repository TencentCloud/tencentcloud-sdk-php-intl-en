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
 * Scale by the selected period in the scaling policy
 *
 * @method TImeCycle getTimeCycle() Obtain Scale-out period
 * @method void setTimeCycle(TImeCycle $TimeCycle) Set Scale-out period
 * @method TimeInterval getTimeInterval() Obtain Time interval
 * @method void setTimeInterval(TimeInterval $TimeInterval) Set Time interval
 */
class PeriodStrategy extends AbstractModel
{
    /**
     * @var TImeCycle Scale-out period
     */
    public $TimeCycle;

    /**
     * @var TimeInterval Time interval
     */
    public $TimeInterval;

    /**
     * @param TImeCycle $TimeCycle Scale-out period
     * @param TimeInterval $TimeInterval Time interval
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
        if (array_key_exists("TimeCycle",$param) and $param["TimeCycle"] !== null) {
            $this->TimeCycle = new TImeCycle();
            $this->TimeCycle->deserialize($param["TimeCycle"]);
        }

        if (array_key_exists("TimeInterval",$param) and $param["TimeInterval"] !== null) {
            $this->TimeInterval = new TimeInterval();
            $this->TimeInterval->deserialize($param["TimeInterval"]);
        }
    }
}
