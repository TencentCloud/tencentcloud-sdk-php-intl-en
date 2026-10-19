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
 * Audit log search criteria
 *
 * @method string getType() Obtain Filter item. Currently supports the following search criteria:

Includes, excludes, includes (segment dimension), excludes (segment dimension): sql - SQL detail; alarmLevel - alarm level; ruleTemplateId - rule template id

Equal to, not equal to, contains, does not contain: host - client IP address; user - userName; dbName - database name;

Equal, not equal to: sqlType - SQL type; errCode - error code; threadId - thread ID.

Range search (time type is unified to µs): execTime - execution time; lockWaitTime - execution time; ioWaitTime - IO wait time; trxLivingTime - transaction duration; cpuTime - CPU time; checkRows - scanned rows; affectRows - number of affected rows; sentRows - rows returned.
 * @method void setType(string $Type) Set Filter item. Currently supports the following search criteria:

Includes, excludes, includes (segment dimension), excludes (segment dimension): sql - SQL detail; alarmLevel - alarm level; ruleTemplateId - rule template id

Equal to, not equal to, contains, does not contain: host - client IP address; user - userName; dbName - database name;

Equal, not equal to: sqlType - SQL type; errCode - error code; threadId - thread ID.

Range search (time type is unified to µs): execTime - execution time; lockWaitTime - execution time; ioWaitTime - IO wait time; trxLivingTime - transaction duration; cpuTime - CPU time; checkRows - scanned rows; affectRows - number of affected rows; sentRows - rows returned.
 * @method string getCompare() Obtain Filter criteria. The following conditions are supported:
WINC-Contains (segment dimension)
WEXC - Excluding (segment dimension)
INC - included
EXC - Excluding
EQS - equal to
NEQ - not equal to
RA - Range.
 * @method void setCompare(string $Compare) Set Filter criteria. The following conditions are supported:
WINC-Contains (segment dimension)
WEXC - Excluding (segment dimension)
INC - included
EXC - Excluding
EQS - equal to
NEQ - not equal to
RA - Range.
 * @method array getValue() Obtain Filtered value. In reverse query, multiple values have an AND relationship. In forward query, multiple values have an OR relationship.
 * @method void setValue(array $Value) Set Filtered value. In reverse query, multiple values have an AND relationship. In forward query, multiple values have an OR relationship.
 */
class InstanceAuditLogFilter extends AbstractModel
{
    /**
     * @var string Filter item. Currently supports the following search criteria:

Includes, excludes, includes (segment dimension), excludes (segment dimension): sql - SQL detail; alarmLevel - alarm level; ruleTemplateId - rule template id

Equal to, not equal to, contains, does not contain: host - client IP address; user - userName; dbName - database name;

Equal, not equal to: sqlType - SQL type; errCode - error code; threadId - thread ID.

Range search (time type is unified to µs): execTime - execution time; lockWaitTime - execution time; ioWaitTime - IO wait time; trxLivingTime - transaction duration; cpuTime - CPU time; checkRows - scanned rows; affectRows - number of affected rows; sentRows - rows returned.
     */
    public $Type;

    /**
     * @var string Filter criteria. The following conditions are supported:
WINC-Contains (segment dimension)
WEXC - Excluding (segment dimension)
INC - included
EXC - Excluding
EQS - equal to
NEQ - not equal to
RA - Range.
     */
    public $Compare;

    /**
     * @var array Filtered value. In reverse query, multiple values have an AND relationship. In forward query, multiple values have an OR relationship.
     */
    public $Value;

    /**
     * @param string $Type Filter item. Currently supports the following search criteria:

Includes, excludes, includes (segment dimension), excludes (segment dimension): sql - SQL detail; alarmLevel - alarm level; ruleTemplateId - rule template id

Equal to, not equal to, contains, does not contain: host - client IP address; user - userName; dbName - database name;

Equal, not equal to: sqlType - SQL type; errCode - error code; threadId - thread ID.

Range search (time type is unified to µs): execTime - execution time; lockWaitTime - execution time; ioWaitTime - IO wait time; trxLivingTime - transaction duration; cpuTime - CPU time; checkRows - scanned rows; affectRows - number of affected rows; sentRows - rows returned.
     * @param string $Compare Filter criteria. The following conditions are supported:
WINC-Contains (segment dimension)
WEXC - Excluding (segment dimension)
INC - included
EXC - Excluding
EQS - equal to
NEQ - not equal to
RA - Range.
     * @param array $Value Filtered value. In reverse query, multiple values have an AND relationship. In forward query, multiple values have an OR relationship.
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
