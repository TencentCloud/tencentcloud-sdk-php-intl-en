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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rate limit value types, such as pps and bps.
 *
 * @method integer getType() Obtain Rate limit value types:
`1`: packets per second (pps)
`2`: bits per second (bps)
]
 * @method void setType(integer $Type) Set Rate limit value types:
`1`: packets per second (pps)
`2`: bits per second (bps)
]
 * @method integer getValue() Obtain Value
 * @method void setValue(integer $Value) Set Value
 */
class SpeedValue extends AbstractModel
{
    /**
     * @var integer Rate limit value types:
`1`: packets per second (pps)
`2`: bits per second (bps)
]
     */
    public $Type;

    /**
     * @var integer Value
     */
    public $Value;

    /**
     * @param integer $Type Rate limit value types:
`1`: packets per second (pps)
`2`: bits per second (bps)
]
     * @param integer $Value Value
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
