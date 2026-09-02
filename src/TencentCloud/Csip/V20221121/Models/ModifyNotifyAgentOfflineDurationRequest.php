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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNotifyAgentOfflineDuration request structure.
 *
 * @method string getDuration() Obtain <p>Offline duration, minute-level 20–50m, step length 10; hour-level 1–24h, step length 1</p>
 * @method void setDuration(string $Duration) Set <p>Offline duration, minute-level 20–50m, step length 10; hour-level 1–24h, step length 1</p>
 */
class ModifyNotifyAgentOfflineDurationRequest extends AbstractModel
{
    /**
     * @var string <p>Offline duration, minute-level 20–50m, step length 10; hour-level 1–24h, step length 1</p>
     */
    public $Duration;

    /**
     * @param string $Duration <p>Offline duration, minute-level 20–50m, step length 10; hour-level 1–24h, step length 1</p>
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
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
