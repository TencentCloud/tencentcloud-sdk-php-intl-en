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
 * DescribeDLCTableList request structure.
 *
 * @method string getDbName() Obtain Database name
 * @method void setDbName(string $DbName) Set Database name
 * @method string getCatalog() Obtain Catalog name
 * @method void setCatalog(string $Catalog) Set Catalog name
 * @method Filter getFilters() Obtain Query the list's filter criteria.
 * @method void setFilters(Filter $Filters) Set Query the list's filter criteria.
 * @method string getType() Obtain Table type
 * @method void setType(string $Type) Set Table type
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method integer getLimit() Obtain Pagination parameters
 * @method void setLimit(integer $Limit) Set Pagination parameters
 * @method integer getOffset() Obtain Pagination parameters
 * @method void setOffset(integer $Offset) Set Pagination parameters
 * @method string getSort() Obtain Sorting fields
 * @method void setSort(string $Sort) Set Sorting fields
 * @method boolean getAsc() Obtain Sorting rules: true for ascending order; false for descending order
 * @method void setAsc(boolean $Asc) Set Sorting rules: true for ascending order; false for descending order
 * @method string getTableFormat() Obtain Data format type: hive, iceberg, etc.
 * @method void setTableFormat(string $TableFormat) Set Data format type: hive, iceberg, etc.
 */
class DescribeDLCTableListRequest extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $DbName;

    /**
     * @var string Catalog name
     */
    public $Catalog;

    /**
     * @var Filter Query the list's filter criteria.
     */
    public $Filters;

    /**
     * @var string Table type
     */
    public $Type;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var integer Pagination parameters
     */
    public $Limit;

    /**
     * @var integer Pagination parameters
     */
    public $Offset;

    /**
     * @var string Sorting fields
     */
    public $Sort;

    /**
     * @var boolean Sorting rules: true for ascending order; false for descending order
     */
    public $Asc;

    /**
     * @var string Data format type: hive, iceberg, etc.
     */
    public $TableFormat;

    /**
     * @param string $DbName Database name
     * @param string $Catalog Catalog name
     * @param Filter $Filters Query the list's filter criteria.
     * @param string $Type Table type
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param integer $Limit Pagination parameters
     * @param integer $Offset Pagination parameters
     * @param string $Sort Sorting fields
     * @param boolean $Asc Sorting rules: true for ascending order; false for descending order
     * @param string $TableFormat Data format type: hive, iceberg, etc.
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
        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = new Filter();
            $this->Filters->deserialize($param["Filters"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Asc",$param) and $param["Asc"] !== null) {
            $this->Asc = $param["Asc"];
        }

        if (array_key_exists("TableFormat",$param) and $param["TableFormat"] !== null) {
            $this->TableFormat = $param["TableFormat"];
        }
    }
}
