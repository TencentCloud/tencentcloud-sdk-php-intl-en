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
 * DescribeInstanceSlowQueries request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getStartTime() Obtain <p>Earliest transaction start time.</p>
 * @method void setStartTime(string $StartTime) Set <p>Earliest transaction start time.</p>
 * @method string getEndTime() Obtain <p>Latest transaction start time.</p>
 * @method void setEndTime(string $EndTime) Set <p>Latest transaction start time.</p>
 * @method integer getLimit() Obtain <p>Limit.</p><p>It is recommended to control the limit size. Large limits may cause truncation due to the platform's size limit for return results.</p>
 * @method void setLimit(integer $Limit) Set <p>Limit.</p><p>It is recommended to control the limit size. Large limits may cause truncation due to the platform's size limit for return results.</p>
 * @method integer getOffset() Obtain <p>Offset.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset.</p>
 * @method string getUsername() Obtain <p>Username.</p>
 * @method void setUsername(string $Username) Set <p>Username.</p>
 * @method string getHost() Obtain <p>Client host.</p>
 * @method void setHost(string $Host) Set <p>Client host.</p>
 * @method string getDatabase() Obtain <p>Database name.</p>
 * @method void setDatabase(string $Database) Set <p>Database name.</p>
 * @method string getOrderBy() Obtain <p>Sorting field.</p><p>Enumeration values:</p><ul><li>QueryTime: sorts by the total execution time of the SQL statements.</li><li>LockTime: sorts by the time consumed by the SQL statements waiting for locks (such as table locks or row locks).</li><li>RowsExamined: sorts by the number of rows scanned during SQL statement execution.</li><li>RowsSent: sorts by the number of result rows returned to the client for the SQL statements.</li><li>Timestamp: sorts by the timestamp when the slow query statement occurs.</li></ul>
 * @method void setOrderBy(string $OrderBy) Set <p>Sorting field.</p><p>Enumeration values:</p><ul><li>QueryTime: sorts by the total execution time of the SQL statements.</li><li>LockTime: sorts by the time consumed by the SQL statements waiting for locks (such as table locks or row locks).</li><li>RowsExamined: sorts by the number of rows scanned during SQL statement execution.</li><li>RowsSent: sorts by the number of result rows returned to the client for the SQL statements.</li><li>Timestamp: sorts by the timestamp when the slow query statement occurs.</li></ul>
 * @method string getOrderByType() Obtain <p>Sorting type. Valid values: asc and desc.</p>
 * @method void setOrderByType(string $OrderByType) Set <p>Sorting type. Valid values: asc and desc.</p>
 * @method string getSqlText() Obtain <p>SQL statement.</p>
 * @method void setSqlText(string $SqlText) Set <p>SQL statement.</p>
 */
class DescribeInstanceSlowQueriesRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Earliest transaction start time.</p>
     */
    public $StartTime;

    /**
     * @var string <p>Latest transaction start time.</p>
     */
    public $EndTime;

    /**
     * @var integer <p>Limit.</p><p>It is recommended to control the limit size. Large limits may cause truncation due to the platform's size limit for return results.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset.</p>
     */
    public $Offset;

    /**
     * @var string <p>Username.</p>
     */
    public $Username;

    /**
     * @var string <p>Client host.</p>
     */
    public $Host;

    /**
     * @var string <p>Database name.</p>
     */
    public $Database;

    /**
     * @var string <p>Sorting field.</p><p>Enumeration values:</p><ul><li>QueryTime: sorts by the total execution time of the SQL statements.</li><li>LockTime: sorts by the time consumed by the SQL statements waiting for locks (such as table locks or row locks).</li><li>RowsExamined: sorts by the number of rows scanned during SQL statement execution.</li><li>RowsSent: sorts by the number of result rows returned to the client for the SQL statements.</li><li>Timestamp: sorts by the timestamp when the slow query statement occurs.</li></ul>
     */
    public $OrderBy;

    /**
     * @var string <p>Sorting type. Valid values: asc and desc.</p>
     */
    public $OrderByType;

    /**
     * @var string <p>SQL statement.</p>
     */
    public $SqlText;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $StartTime <p>Earliest transaction start time.</p>
     * @param string $EndTime <p>Latest transaction start time.</p>
     * @param integer $Limit <p>Limit.</p><p>It is recommended to control the limit size. Large limits may cause truncation due to the platform's size limit for return results.</p>
     * @param integer $Offset <p>Offset.</p>
     * @param string $Username <p>Username.</p>
     * @param string $Host <p>Client host.</p>
     * @param string $Database <p>Database name.</p>
     * @param string $OrderBy <p>Sorting field.</p><p>Enumeration values:</p><ul><li>QueryTime: sorts by the total execution time of the SQL statements.</li><li>LockTime: sorts by the time consumed by the SQL statements waiting for locks (such as table locks or row locks).</li><li>RowsExamined: sorts by the number of rows scanned during SQL statement execution.</li><li>RowsSent: sorts by the number of result rows returned to the client for the SQL statements.</li><li>Timestamp: sorts by the timestamp when the slow query statement occurs.</li></ul>
     * @param string $OrderByType <p>Sorting type. Valid values: asc and desc.</p>
     * @param string $SqlText <p>SQL statement.</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }
    }
}
