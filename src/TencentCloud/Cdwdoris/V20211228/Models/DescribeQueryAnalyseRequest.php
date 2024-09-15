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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeQueryAnalyse request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getUserName() Obtain Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method void setUserName(string $UserName) Set Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method string getPassWord() Obtain Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method void setPassWord(string $PassWord) Set Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method string getStartTime() Obtain Start time of operation period
 * @method void setStartTime(string $StartTime) Set Start time of operation period
 * @method string getEndTime() Obtain End time of operation period.
 * @method void setEndTime(string $EndTime) Set End time of operation period.
 * @method string getSQLFragment() Obtain SQL fragments (fuzzy query supported)
 * @method void setSQLFragment(string $SQLFragment) Set SQL fragments (fuzzy query supported)
 * @method string getCatalogFilter() Obtain Catalog filter condition
 * @method void setCatalogFilter(string $CatalogFilter) Set Catalog filter condition
 * @method string getDatabaseFilter() Obtain Database name filter condition
 * @method void setDatabaseFilter(string $DatabaseFilter) Set Database name filter condition
 * @method string getSQLTypeFilter() Obtain SQL type filter criteria
 * @method void setSQLTypeFilter(string $SQLTypeFilter) Set SQL type filter criteria
 * @method string getSortField() Obtain Sorting field
 * @method void setSortField(string $SortField) Set Sorting field
 * @method string getSortOrder() Obtain Sorting order: asc (ascending) or desc (descending)
 * @method void setSortOrder(string $SortOrder) Set Sorting order: asc (ascending) or desc (descending)
 * @method integer getQueryTime() Obtain Minimum query execution time, in milliseconds.
 * @method void setQueryTime(integer $QueryTime) Set Minimum query execution time, in milliseconds.
 * @method integer getPageNum() Obtain Page number, defaults to 1.
 * @method void setPageNum(integer $PageNum) Set Page number, defaults to 1.
 * @method integer getPageSize() Obtain Number of records per page, defaults to 10.
 * @method void setPageSize(integer $PageSize) Set Number of records per page, defaults to 10.
 */
class DescribeQueryAnalyseRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     */
    public $UserName;

    /**
     * @var string Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     */
    public $PassWord;

    /**
     * @var string Start time of operation period
     */
    public $StartTime;

    /**
     * @var string End time of operation period.
     */
    public $EndTime;

    /**
     * @var string SQL fragments (fuzzy query supported)
     */
    public $SQLFragment;

    /**
     * @var string Catalog filter condition
     */
    public $CatalogFilter;

    /**
     * @var string Database name filter condition
     */
    public $DatabaseFilter;

    /**
     * @var string SQL type filter criteria
     */
    public $SQLTypeFilter;

    /**
     * @var string Sorting field
     */
    public $SortField;

    /**
     * @var string Sorting order: asc (ascending) or desc (descending)
     */
    public $SortOrder;

    /**
     * @var integer Minimum query execution time, in milliseconds.
     */
    public $QueryTime;

    /**
     * @var integer Page number, defaults to 1.
     */
    public $PageNum;

    /**
     * @var integer Number of records per page, defaults to 10.
     */
    public $PageSize;

    /**
     * @param string $InstanceId Instance ID
     * @param string $UserName Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     * @param string $PassWord Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     * @param string $StartTime Start time of operation period
     * @param string $EndTime End time of operation period.
     * @param string $SQLFragment SQL fragments (fuzzy query supported)
     * @param string $CatalogFilter Catalog filter condition
     * @param string $DatabaseFilter Database name filter condition
     * @param string $SQLTypeFilter SQL type filter criteria
     * @param string $SortField Sorting field
     * @param string $SortOrder Sorting order: asc (ascending) or desc (descending)
     * @param integer $QueryTime Minimum query execution time, in milliseconds.
     * @param integer $PageNum Page number, defaults to 1.
     * @param integer $PageSize Number of records per page, defaults to 10.
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PassWord",$param) and $param["PassWord"] !== null) {
            $this->PassWord = $param["PassWord"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SQLFragment",$param) and $param["SQLFragment"] !== null) {
            $this->SQLFragment = $param["SQLFragment"];
        }

        if (array_key_exists("CatalogFilter",$param) and $param["CatalogFilter"] !== null) {
            $this->CatalogFilter = $param["CatalogFilter"];
        }

        if (array_key_exists("DatabaseFilter",$param) and $param["DatabaseFilter"] !== null) {
            $this->DatabaseFilter = $param["DatabaseFilter"];
        }

        if (array_key_exists("SQLTypeFilter",$param) and $param["SQLTypeFilter"] !== null) {
            $this->SQLTypeFilter = $param["SQLTypeFilter"];
        }

        if (array_key_exists("SortField",$param) and $param["SortField"] !== null) {
            $this->SortField = $param["SortField"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("QueryTime",$param) and $param["QueryTime"] !== null) {
            $this->QueryTime = $param["QueryTime"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
