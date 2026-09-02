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
 * Custom alarm/Risk level
 *
 * @method string getType() Obtain Alarm/risk type
 * @method void setType(string $Type) Set Alarm/risk type
 * @method array getLevel() Obtain Alarm severity (1: notification, 2: low risk, 3: medium risk, 4: high risk, 5: critical)
 * @method void setLevel(array $Level) Set Alarm severity (1: notification, 2: low risk, 3: medium risk, 4: high risk, 5: critical)
 */
class LevelOption extends AbstractModel
{
    /**
     * @var string Alarm/risk type
     */
    public $Type;

    /**
     * @var array Alarm severity (1: notification, 2: low risk, 3: medium risk, 4: high risk, 5: critical)
     */
    public $Level;

    /**
     * @param string $Type Alarm/risk type
     * @param array $Level Alarm severity (1: notification, 2: low risk, 3: medium risk, 4: high risk, 5: critical)
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

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }
    }
}
