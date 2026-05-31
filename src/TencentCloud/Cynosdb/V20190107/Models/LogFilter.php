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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log filter criteria
 *
 * @method string getType() Obtain Filter items.
 * @method void setType(string $Type) Set Filter items.
 * @method string getCompare() Obtain Filter criteria. Support the following conditions: WINC-include (segment dimension), WEXC-exclude (segment dimension), INC-include, EXC-exclude, EQS-equal, NEQ-not equal to, RA-range.
 * @method void setCompare(string $Compare) Set Filter criteria. Support the following conditions: WINC-include (segment dimension), WEXC-exclude (segment dimension), INC-include, EXC-exclude, EQS-equal, NEQ-not equal to, RA-range.
 * @method array getValue() Obtain Filtered value. For reverse query, multiple values have an AND relationship. For forward query, multiple values have an OR relationship.
 * @method void setValue(array $Value) Set Filtered value. For reverse query, multiple values have an AND relationship. For forward query, multiple values have an OR relationship.
 */
class LogFilter extends AbstractModel
{
    /**
     * @var string Filter items.
     */
    public $Type;

    /**
     * @var string Filter criteria. Support the following conditions: WINC-include (segment dimension), WEXC-exclude (segment dimension), INC-include, EXC-exclude, EQS-equal, NEQ-not equal to, RA-range.
     */
    public $Compare;

    /**
     * @var array Filtered value. For reverse query, multiple values have an AND relationship. For forward query, multiple values have an OR relationship.
     */
    public $Value;

    /**
     * @param string $Type Filter items.
     * @param string $Compare Filter criteria. Support the following conditions: WINC-include (segment dimension), WEXC-exclude (segment dimension), INC-include, EXC-exclude, EQS-equal, NEQ-not equal to, RA-range.
     * @param array $Value Filtered value. For reverse query, multiple values have an AND relationship. For forward query, multiple values have an OR relationship.
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

        if (array_key_exists("Compare",$param) and $param["Compare"] !== null) {
            $this->Compare = $param["Compare"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
