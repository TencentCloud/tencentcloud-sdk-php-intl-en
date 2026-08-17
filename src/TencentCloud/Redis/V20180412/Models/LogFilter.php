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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * log filter criteria
 *
 * @method string getType() Obtain <p>Filter criterion name.</p><p>Enumeration value:</p><ul><li>Timestamp: Creation time (format: 2006-01-02 15:04:05.000)</li><li>UserName: User name</li><li>CacheCode: Cache code, backend redis node</li><li>ClientAddr: Client IP address</li><li>CommandDetail: Command details</li><li>CommandLatency: Command delay (ms)</li><li>CommandType: Command type</li><li>DBId: Database ID</li><li>ErrMsg: Error information</li></ul>
 * @method void setType(string $Type) Set <p>Filter criterion name.</p><p>Enumeration value:</p><ul><li>Timestamp: Creation time (format: 2006-01-02 15:04:05.000)</li><li>UserName: User name</li><li>CacheCode: Cache code, backend redis node</li><li>ClientAddr: Client IP address</li><li>CommandDetail: Command details</li><li>CommandLatency: Command delay (ms)</li><li>CommandType: Command type</li><li>DBId: Database ID</li><li>ErrMsg: Error information</li></ul>
 * @method string getCompare() Obtain <p>Condition match type.</p><p>Enumeration value:</p><ul><li>INC: Include, multiple values have a || relationship before</li><li>EXC: Exclude, multiple values have a || relationship before</li><li>EQS: Equal, multiple values have a || relationship before</li><li>NEQ: Not equal, multiple values have a && relationship before</li><li>RA: Range</li></ul>
 * @method void setCompare(string $Compare) Set <p>Condition match type.</p><p>Enumeration value:</p><ul><li>INC: Include, multiple values have a || relationship before</li><li>EXC: Exclude, multiple values have a || relationship before</li><li>EQS: Equal, multiple values have a || relationship before</li><li>NEQ: Not equal, multiple values have a && relationship before</li><li>RA: Range</li></ul>
 * @method array getValue() Obtain <p>Matching value of the filter condition. When Compare=RA, for example: ["1-100","200-300"].</p>
 * @method void setValue(array $Value) Set <p>Matching value of the filter condition. When Compare=RA, for example: ["1-100","200-300"].</p>
 */
class LogFilter extends AbstractModel
{
    /**
     * @var string <p>Filter criterion name.</p><p>Enumeration value:</p><ul><li>Timestamp: Creation time (format: 2006-01-02 15:04:05.000)</li><li>UserName: User name</li><li>CacheCode: Cache code, backend redis node</li><li>ClientAddr: Client IP address</li><li>CommandDetail: Command details</li><li>CommandLatency: Command delay (ms)</li><li>CommandType: Command type</li><li>DBId: Database ID</li><li>ErrMsg: Error information</li></ul>
     */
    public $Type;

    /**
     * @var string <p>Condition match type.</p><p>Enumeration value:</p><ul><li>INC: Include, multiple values have a || relationship before</li><li>EXC: Exclude, multiple values have a || relationship before</li><li>EQS: Equal, multiple values have a || relationship before</li><li>NEQ: Not equal, multiple values have a && relationship before</li><li>RA: Range</li></ul>
     */
    public $Compare;

    /**
     * @var array <p>Matching value of the filter condition. When Compare=RA, for example: ["1-100","200-300"].</p>
     */
    public $Value;

    /**
     * @param string $Type <p>Filter criterion name.</p><p>Enumeration value:</p><ul><li>Timestamp: Creation time (format: 2006-01-02 15:04:05.000)</li><li>UserName: User name</li><li>CacheCode: Cache code, backend redis node</li><li>ClientAddr: Client IP address</li><li>CommandDetail: Command details</li><li>CommandLatency: Command delay (ms)</li><li>CommandType: Command type</li><li>DBId: Database ID</li><li>ErrMsg: Error information</li></ul>
     * @param string $Compare <p>Condition match type.</p><p>Enumeration value:</p><ul><li>INC: Include, multiple values have a || relationship before</li><li>EXC: Exclude, multiple values have a || relationship before</li><li>EQS: Equal, multiple values have a || relationship before</li><li>NEQ: Not equal, multiple values have a && relationship before</li><li>RA: Range</li></ul>
     * @param array $Value <p>Matching value of the filter condition. When Compare=RA, for example: ["1-100","200-300"].</p>
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
