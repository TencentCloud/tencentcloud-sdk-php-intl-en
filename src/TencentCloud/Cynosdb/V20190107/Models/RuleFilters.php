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
 * Rule filter criteria for the audit rule.
 *
 * @method string getType() Obtain Parameter name for the audit rule filter criteria. Available values: host – client IP; user – database account; dbName – database name; sqlType – SQL type; sql – SQL statement; affectRows – number of affected rows; sentRows – number of returned rows; checkRows – number of scanned rows; execTime – execution time.
 * @method void setType(string $Type) Set Parameter name for the audit rule filter criteria. Available values: host – client IP; user – database account; dbName – database name; sqlType – SQL type; sql – SQL statement; affectRows – number of affected rows; sentRows – number of returned rows; checkRows – number of scanned rows; execTime – execution time.
 * @method string getCompare() Obtain Match type of the audit rule filter criteria. Available values: INC – include; EXC – exclude; EQS – equal; NEQ – not equal; REG – regular; GT – greater than; LT – less than.
 * @method void setCompare(string $Compare) Set Match type of the audit rule filter criteria. Available values: INC – include; EXC – exclude; EQS – equal; NEQ – not equal; REG – regular; GT – greater than; LT – less than.
 * @method array getValue() Obtain Matching value of the filter criteria for the audit rule.
 * @method void setValue(array $Value) Set Matching value of the filter criteria for the audit rule.
 */
class RuleFilters extends AbstractModel
{
    /**
     * @var string Parameter name for the audit rule filter criteria. Available values: host – client IP; user – database account; dbName – database name; sqlType – SQL type; sql – SQL statement; affectRows – number of affected rows; sentRows – number of returned rows; checkRows – number of scanned rows; execTime – execution time.
     */
    public $Type;

    /**
     * @var string Match type of the audit rule filter criteria. Available values: INC – include; EXC – exclude; EQS – equal; NEQ – not equal; REG – regular; GT – greater than; LT – less than.
     */
    public $Compare;

    /**
     * @var array Matching value of the filter criteria for the audit rule.
     */
    public $Value;

    /**
     * @param string $Type Parameter name for the audit rule filter criteria. Available values: host – client IP; user – database account; dbName – database name; sqlType – SQL type; sql – SQL statement; affectRows – number of affected rows; sentRows – number of returned rows; checkRows – number of scanned rows; execTime – execution time.
     * @param string $Compare Match type of the audit rule filter criteria. Available values: INC – include; EXC – exclude; EQS – equal; NEQ – not equal; REG – regular; GT – greater than; LT – less than.
     * @param array $Value Matching value of the filter criteria for the audit rule.
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
