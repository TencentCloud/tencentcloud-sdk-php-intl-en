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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudProductLogTasks request structure.
 *
 * @method integer getOffset() Obtain <p>Paging offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number of entries per page. Default value: 20. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of entries per page. Default value: 20. Maximum value: 100.</p>
 * @method array getFilters() Obtain <ul><li>assumerName<ul><li>Filter by [cloud product identifier].</li><li>Type: String</li><li>Required: No</li><li>Enumerate: CDS, CWP, CDB, TDSQL-C, MongoDB, TDStore, DCDB, MariaDB, PostgreSQL, BH, APIS</li></ul></li><li>logType<ul><li>Filter by [log type].</li><li>Type: String</li><li>Required: No</li><li>Enumerate: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB-ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS</li></ul></li><li>instanceId<ul><li>Filter by [instance ID].</li><li>Type: String</li><li>Required: No</li></ul></li></ul>
 * @method void setFilters(array $Filters) Set <ul><li>assumerName<ul><li>Filter by [cloud product identifier].</li><li>Type: String</li><li>Required: No</li><li>Enumerate: CDS, CWP, CDB, TDSQL-C, MongoDB, TDStore, DCDB, MariaDB, PostgreSQL, BH, APIS</li></ul></li><li>logType<ul><li>Filter by [log type].</li><li>Type: String</li><li>Required: No</li><li>Enumerate: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB-ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS</li></ul></li><li>instanceId<ul><li>Filter by [instance ID].</li><li>Type: String</li><li>Required: No</li></ul></li></ul>
 * @method boolean getWithTags() Obtain <p>Whether to carry tag information of the topic and logset</p>
 * @method void setWithTags(boolean $WithTags) Set <p>Whether to carry tag information of the topic and logset</p>
 */
class DescribeCloudProductLogTasksRequest extends AbstractModel
{
    /**
     * @var integer <p>Paging offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of entries per page. Default value: 20. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @var array <ul><li>assumerName<ul><li>Filter by [cloud product identifier].</li><li>Type: String</li><li>Required: No</li><li>Enumerate: CDS, CWP, CDB, TDSQL-C, MongoDB, TDStore, DCDB, MariaDB, PostgreSQL, BH, APIS</li></ul></li><li>logType<ul><li>Filter by [log type].</li><li>Type: String</li><li>Required: No</li><li>Enumerate: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB-ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS</li></ul></li><li>instanceId<ul><li>Filter by [instance ID].</li><li>Type: String</li><li>Required: No</li></ul></li></ul>
     */
    public $Filters;

    /**
     * @var boolean <p>Whether to carry tag information of the topic and logset</p>
     */
    public $WithTags;

    /**
     * @param integer $Offset <p>Paging offset. Default value: 0.</p>
     * @param integer $Limit <p>Number of entries per page. Default value: 20. Maximum value: 100.</p>
     * @param array $Filters <ul><li>assumerName<ul><li>Filter by [cloud product identifier].</li><li>Type: String</li><li>Required: No</li><li>Enumerate: CDS, CWP, CDB, TDSQL-C, MongoDB, TDStore, DCDB, MariaDB, PostgreSQL, BH, APIS</li></ul></li><li>logType<ul><li>Filter by [log type].</li><li>Type: String</li><li>Required: No</li><li>Enumerate: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB-ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS</li></ul></li><li>instanceId<ul><li>Filter by [instance ID].</li><li>Type: String</li><li>Required: No</li></ul></li></ul>
     * @param boolean $WithTags <p>Whether to carry tag information of the topic and logset</p>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("WithTags",$param) and $param["WithTags"] !== null) {
            $this->WithTags = $param["WithTags"];
        }
    }
}
