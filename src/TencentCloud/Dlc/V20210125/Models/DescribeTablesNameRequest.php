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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTablesName request structure.
 *
 * @method string getDatabaseName() Obtain List all the data tables in the database.
 * @method void setDatabaseName(string $DatabaseName) Set List all the data tables in the database.
 * @method integer getLimit() Obtain Quantity of returns. It is 10 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Quantity of returns. It is 10 by default, and the maximum value is 100.
 * @method integer getOffset() Obtain Data offset. It starts from 0 and is 0 by default.
 * @method void setOffset(integer $Offset) Set Data offset. It starts from 0 and is 0 by default.
 * @method array getFilters() Obtain Filter criteria. The following filter types are supported. The Name should be one of them.
Table-name - String - (filter criteria) data table name, such as table-001.
table-id - String - (filter criteria) table id, such as 12342.
 * @method void setFilters(array $Filters) Set Filter criteria. The following filter types are supported. The Name should be one of them.
Table-name - String - (filter criteria) data table name, such as table-001.
table-id - String - (filter criteria) table id, such as 12342.
 * @method string getDatasourceConnectionName() Obtain Specified data source name to be queried, and it is DataLakeCatalog by default.
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) Set Specified data source name to be queried, and it is DataLakeCatalog by default.
 * @method string getStartTime() Obtain Start time: It is used to filter the update time, and the format is yyyy-mm-dd HH:MM:SS.
 * @method void setStartTime(string $StartTime) Set Start time: It is used to filter the update time, and the format is yyyy-mm-dd HH:MM:SS.
 * @method string getEndTime() Obtain End time: It is used to filter the update time, and the format is yyyy-mm-dd HH:MM:SS.
 * @method void setEndTime(string $EndTime) Set End time: It is used to filter the update time, and the format is yyyy-mm-dd HH:MM:SS.
 * @method string getSort() Obtain Sorting fields, and they support CreateTime (creation time), UpdateTime (update time), StorageSize (storage space), RecordCount (number of rows), and Name (table name) (The ascending order according to names will be adopted if it is not passed).
 * @method void setSort(string $Sort) Set Sorting fields, and they support CreateTime (creation time), UpdateTime (update time), StorageSize (storage space), RecordCount (number of rows), and Name (table name) (The ascending order according to names will be adopted if it is not passed).
 * @method boolean getAsc() Obtain Sorting fields, and false means the descending order (by default) while true means the ascending order.
 * @method void setAsc(boolean $Asc) Set Sorting fields, and false means the descending order (by default) while true means the ascending order.
 * @method string getTableType() Obtain Table type, query of the table type, and the available value is EXTERNAL_TABLE,INDEX_TABLE,MANAGED_TABLE,MATERIALIZED_VIEW,TABLE,VIEW,VIRTUAL_VIEW
 * @method void setTableType(string $TableType) Set Table type, query of the table type, and the available value is EXTERNAL_TABLE,INDEX_TABLE,MANAGED_TABLE,MATERIALIZED_VIEW,TABLE,VIEW,VIRTUAL_VIEW
 * @method string getTableFormat() Obtain Filter fields - table format: If no criteria are specified, all the items will be checked; LAKEFS: managed table; ICEBERG: non-managed iceberg table; HIVE: non-managed hive table; OTHER: other non-managed tables.
 * @method void setTableFormat(string $TableFormat) Set Filter fields - table format: If no criteria are specified, all the items will be checked; LAKEFS: managed table; ICEBERG: non-managed iceberg table; HIVE: non-managed hive table; OTHER: other non-managed tables.
 */
class DescribeTablesNameRequest extends AbstractModel
{
    /**
     * @var string List all the data tables in the database.
     */
    public $DatabaseName;

    /**
     * @var integer Quantity of returns. It is 10 by default, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Data offset. It starts from 0 and is 0 by default.
     */
    public $Offset;

    /**
     * @var array Filter criteria. The following filter types are supported. The Name should be one of them.
Table-name - String - (filter criteria) data table name, such as table-001.
table-id - String - (filter criteria) table id, such as 12342.
     */
    public $Filters;

    /**
     * @var string Specified data source name to be queried, and it is DataLakeCatalog by default.
     */
    public $DatasourceConnectionName;

    /**
     * @var string Start time: It is used to filter the update time, and the format is yyyy-mm-dd HH:MM:SS.
     */
    public $StartTime;

    /**
     * @var string End time: It is used to filter the update time, and the format is yyyy-mm-dd HH:MM:SS.
     */
    public $EndTime;

    /**
     * @var string Sorting fields, and they support CreateTime (creation time), UpdateTime (update time), StorageSize (storage space), RecordCount (number of rows), and Name (table name) (The ascending order according to names will be adopted if it is not passed).
     */
    public $Sort;

    /**
     * @var boolean Sorting fields, and false means the descending order (by default) while true means the ascending order.
     */
    public $Asc;

    /**
     * @var string Table type, query of the table type, and the available value is EXTERNAL_TABLE,INDEX_TABLE,MANAGED_TABLE,MATERIALIZED_VIEW,TABLE,VIEW,VIRTUAL_VIEW
     */
    public $TableType;

    /**
     * @var string Filter fields - table format: If no criteria are specified, all the items will be checked; LAKEFS: managed table; ICEBERG: non-managed iceberg table; HIVE: non-managed hive table; OTHER: other non-managed tables.
     */
    public $TableFormat;

    /**
     * @param string $DatabaseName List all the data tables in the database.
     * @param integer $Limit Quantity of returns. It is 10 by default, and the maximum value is 100.
     * @param integer $Offset Data offset. It starts from 0 and is 0 by default.
     * @param array $Filters Filter criteria. The following filter types are supported. The Name should be one of them.
Table-name - String - (filter criteria) data table name, such as table-001.
table-id - String - (filter criteria) table id, such as 12342.
     * @param string $DatasourceConnectionName Specified data source name to be queried, and it is DataLakeCatalog by default.
     * @param string $StartTime Start time: It is used to filter the update time, and the format is yyyy-mm-dd HH:MM:SS.
     * @param string $EndTime End time: It is used to filter the update time, and the format is yyyy-mm-dd HH:MM:SS.
     * @param string $Sort Sorting fields, and they support CreateTime (creation time), UpdateTime (update time), StorageSize (storage space), RecordCount (number of rows), and Name (table name) (The ascending order according to names will be adopted if it is not passed).
     * @param boolean $Asc Sorting fields, and false means the descending order (by default) while true means the ascending order.
     * @param string $TableType Table type, query of the table type, and the available value is EXTERNAL_TABLE,INDEX_TABLE,MANAGED_TABLE,MATERIALIZED_VIEW,TABLE,VIEW,VIRTUAL_VIEW
     * @param string $TableFormat Filter fields - table format: If no criteria are specified, all the items will be checked; LAKEFS: managed table; ICEBERG: non-managed iceberg table; HIVE: non-managed hive table; OTHER: other non-managed tables.
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Asc",$param) and $param["Asc"] !== null) {
            $this->Asc = $param["Asc"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("TableFormat",$param) and $param["TableFormat"] !== null) {
            $this->TableFormat = $param["TableFormat"];
        }
    }
}
