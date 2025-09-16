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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AuthToken throttling information.
 *
 * @method string getStrategy() Obtain Frequency limit policy. Valid values: PerMinute (frequency limit per minute) and PerDay (daily frequency limit).
 * @method void setStrategy(string $Strategy) Set Frequency limit policy. Valid values: PerMinute (frequency limit per minute) and PerDay (daily frequency limit).
 * @method integer getMax() Obtain Upper limit.
 * @method void setMax(integer $Max) Set Upper limit.
 */
class AuthTokenLimit extends AbstractModel
{
    /**
     * @var string Frequency limit policy. Valid values: PerMinute (frequency limit per minute) and PerDay (daily frequency limit).
     */
    public $Strategy;

    /**
     * @var integer Upper limit.
     */
    public $Max;

    /**
     * @param string $Strategy Frequency limit policy. Valid values: PerMinute (frequency limit per minute) and PerDay (daily frequency limit).
     * @param integer $Max Upper limit.
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
        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }
    }
}
