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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Slow log filtering
 *
 * @method string getType() Obtain Filter criterion name.

For example: sql - SQL command details

host - client IP
user - database account;
dbName – Database name;
sqlType - SQL type;
Error code

execTime - Execution time
lockWaitTime - Lock waiting time
ioWaitTime - IO wait time
trxLivingTime - Transaction execution time
Cpu time

threadId - Thread ID
trxId - Transaction ID
checkRows - Number of scanned rows
affectRows - Number of rows affected
sentRows - Number of rows returned
 * @method void setType(string $Type) Set Filter criterion name.

For example: sql - SQL command details

host - client IP
user - database account;
dbName – Database name;
sqlType - SQL type;
Error code

execTime - Execution time
lockWaitTime - Lock waiting time
ioWaitTime - IO wait time
trxLivingTime - Transaction execution time
Cpu time

threadId - Thread ID
trxId - Transaction ID
checkRows - Number of scanned rows
affectRows - Number of rows affected
sentRows - Number of rows returned
 * @method string getCompare() Obtain Filter condition match type. Supported:
INC – Includes (multiple values are in a || relationship before).
EXC - excluding (multiple values are in an && relationship)
EQS – equal to (multiple values before are in a || relationship).
NEQ – not equal to (multiple values are in && relationship)

RG - Range;
 * @method void setCompare(string $Compare) Set Filter condition match type. Supported:
INC – Includes (multiple values are in a || relationship before).
EXC - excluding (multiple values are in an && relationship)
EQS – equal to (multiple values before are in a || relationship).
NEQ – not equal to (multiple values are in && relationship)

RG - Range;
 * @method array getValue() Obtain Filter condition matching value. When Compare=RG, for example ["1-100","200-300"].
 * @method void setValue(array $Value) Set Filter condition matching value. When Compare=RG, for example ["1-100","200-300"].
 */
class LogFilter extends AbstractModel
{
    /**
     * @var string Filter criterion name.

For example: sql - SQL command details

host - client IP
user - database account;
dbName – Database name;
sqlType - SQL type;
Error code

execTime - Execution time
lockWaitTime - Lock waiting time
ioWaitTime - IO wait time
trxLivingTime - Transaction execution time
Cpu time

threadId - Thread ID
trxId - Transaction ID
checkRows - Number of scanned rows
affectRows - Number of rows affected
sentRows - Number of rows returned
     */
    public $Type;

    /**
     * @var string Filter condition match type. Supported:
INC – Includes (multiple values are in a || relationship before).
EXC - excluding (multiple values are in an && relationship)
EQS – equal to (multiple values before are in a || relationship).
NEQ – not equal to (multiple values are in && relationship)

RG - Range;
     */
    public $Compare;

    /**
     * @var array Filter condition matching value. When Compare=RG, for example ["1-100","200-300"].
     */
    public $Value;

    /**
     * @param string $Type Filter criterion name.

For example: sql - SQL command details

host - client IP
user - database account;
dbName – Database name;
sqlType - SQL type;
Error code

execTime - Execution time
lockWaitTime - Lock waiting time
ioWaitTime - IO wait time
trxLivingTime - Transaction execution time
Cpu time

threadId - Thread ID
trxId - Transaction ID
checkRows - Number of scanned rows
affectRows - Number of rows affected
sentRows - Number of rows returned
     * @param string $Compare Filter condition match type. Supported:
INC – Includes (multiple values are in a || relationship before).
EXC - excluding (multiple values are in an && relationship)
EQS – equal to (multiple values before are in a || relationship).
NEQ – not equal to (multiple values are in && relationship)

RG - Range;
     * @param array $Value Filter condition matching value. When Compare=RG, for example ["1-100","200-300"].
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
