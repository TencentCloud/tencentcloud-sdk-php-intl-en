<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * Filter of the audit rule
 *
 * @method string getType() Obtain Parameter name of the audit rule filter.  Valid values:  `host` (client IP), `user` (database account), `dbName` (database name), `sqlType` (SQL type), `sql` (SQL statement), `affectRows` (affected rows), `sentRows` (returned rows), `checkRows` (scanned rows), `execTime` (execution rows).
 * @method void setType(string $Type) Set Parameter name of the audit rule filter.  Valid values:  `host` (client IP), `user` (database account), `dbName` (database name), `sqlType` (SQL type), `sql` (SQL statement), `affectRows` (affected rows), `sentRows` (returned rows), `checkRows` (scanned rows), `execTime` (execution rows).
 * @method string getCompare() Obtain Filter match value of the audit rule Valid values:  `INC` (including), `EXC` (excluding), `EQS` (equal to), `NEQ` (not equal to), `REG` (regex), `GT` (greater than), `LT` (less than).
 * @method void setCompare(string $Compare) Set Filter match value of the audit rule Valid values:  `INC` (including), `EXC` (excluding), `EQS` (equal to), `NEQ` (not equal to), `REG` (regex), `GT` (greater than), `LT` (less than).
 * @method array getValue() Obtain Filter match value of the audit rule Valid values for `sqlType`: `alter`, `changeuser`, `create`, `delete`, `drop`, `execute`, `insert`, `login`, `logout`, `other`, `replace`, `select`, `set, `update`.
 * @method void setValue(array $Value) Set Filter match value of the audit rule Valid values for `sqlType`: `alter`, `changeuser`, `create`, `delete`, `drop`, `execute`, `insert`, `login`, `logout`, `other`, `replace`, `select`, `set, `update`.
 */
class RuleFilters extends AbstractModel
{
    /**
     * @var string Parameter name of the audit rule filter.  Valid values:  `host` (client IP), `user` (database account), `dbName` (database name), `sqlType` (SQL type), `sql` (SQL statement), `affectRows` (affected rows), `sentRows` (returned rows), `checkRows` (scanned rows), `execTime` (execution rows).
     */
    public $Type;

    /**
     * @var string Filter match value of the audit rule Valid values:  `INC` (including), `EXC` (excluding), `EQS` (equal to), `NEQ` (not equal to), `REG` (regex), `GT` (greater than), `LT` (less than).
     */
    public $Compare;

    /**
     * @var array Filter match value of the audit rule Valid values for `sqlType`: `alter`, `changeuser`, `create`, `delete`, `drop`, `execute`, `insert`, `login`, `logout`, `other`, `replace`, `select`, `set, `update`.
     */
    public $Value;

    /**
     * @param string $Type Parameter name of the audit rule filter.  Valid values:  `host` (client IP), `user` (database account), `dbName` (database name), `sqlType` (SQL type), `sql` (SQL statement), `affectRows` (affected rows), `sentRows` (returned rows), `checkRows` (scanned rows), `execTime` (execution rows).
     * @param string $Compare Filter match value of the audit rule Valid values:  `INC` (including), `EXC` (excluding), `EQS` (equal to), `NEQ` (not equal to), `REG` (regex), `GT` (greater than), `LT` (less than).
     * @param array $Value Filter match value of the audit rule Valid values for `sqlType`: `alter`, `changeuser`, `create`, `delete`, `drop`, `execute`, `insert`, `login`, `logout`, `other`, `replace`, `select`, `set, `update`.
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
