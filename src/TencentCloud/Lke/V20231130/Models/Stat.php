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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Billing statistical information.
 *
 * @method string getX() Obtain X-axis: time zone; return three interval ranges of "minute/hour/day" according to the granularity of the query condition.
 * @method void setX(string $X) Set X-axis: time zone; return three interval ranges of "minute/hour/day" according to the granularity of the query condition.
 * @method float getY() Obtain Y-axis: statistical values in this time period, such as token consumption, call count, or usage information.
 * @method void setY(float $Y) Set Y-axis: statistical values in this time period, such as token consumption, call count, or usage information.
 */
class Stat extends AbstractModel
{
    /**
     * @var string X-axis: time zone; return three interval ranges of "minute/hour/day" according to the granularity of the query condition.
     */
    public $X;

    /**
     * @var float Y-axis: statistical values in this time period, such as token consumption, call count, or usage information.
     */
    public $Y;

    /**
     * @param string $X X-axis: time zone; return three interval ranges of "minute/hour/day" according to the granularity of the query condition.
     * @param float $Y Y-axis: statistical values in this time period, such as token consumption, call count, or usage information.
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
        if (array_key_exists("X",$param) and $param["X"] !== null) {
            $this->X = $param["X"];
        }

        if (array_key_exists("Y",$param) and $param["Y"] !== null) {
            $this->Y = $param["Y"];
        }
    }
}
