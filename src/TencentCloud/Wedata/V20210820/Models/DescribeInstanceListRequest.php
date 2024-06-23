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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceList request structure.
 *
 * @method string getProjectId() Obtain Project/workspace ID
 * @method void setProjectId(string $ProjectId) Set Project/workspace ID
 * @method integer getPageIndex() Obtain Page Number
 * @method void setPageIndex(integer $PageIndex) Set Page Number
 * @method integer getPageSize() Obtain Number of items displayed per page
 * @method void setPageSize(integer $PageSize) Set Number of items displayed per page
 * @method array getCycleList() Obtain Cycle List (e.g., daily, one-time), optional
 * @method void setCycleList(array $CycleList) Set Cycle List (e.g., daily, one-time), optional
 * @method array getOwnerList() Obtain Person in Charge
 * @method void setOwnerList(array $OwnerList) Set Person in Charge
 * @method string getInstanceType() Obtain Keep consistent with previous
 * @method void setInstanceType(string $InstanceType) Set Keep consistent with previous
 * @method string getSort() Obtain Sorting Order (asc, desc)
 * @method void setSort(string $Sort) Set Sorting Order (asc, desc)
 * @method string getSortCol() Obtain Sort Column (costTime Runtime duration, startTime Start Time, state Instance status, curRunDate Data Timestamp)
 * @method void setSortCol(string $SortCol) Set Sort Column (costTime Runtime duration, startTime Start Time, state Instance status, curRunDate Data Timestamp)
 * @method array getTaskTypeList() Obtain Type List (e.g., Python Task Type: 30
PySpark Task Type: 31
hivesql task type:34
shell task type:35
sparksql task type:36 jdbcsql task type:21 dlc task type:32), optional
 * @method void setTaskTypeList(array $TaskTypeList) Set Type List (e.g., Python Task Type: 30
PySpark Task Type: 31
hivesql task type:34
shell task type:35
sparksql task type:36 jdbcsql task type:21 dlc task type:32), optional
 * @method array getStateList() Obtain Status list (e.g., success 2, executing 1), optional
 * @method void setStateList(array $StateList) Set Status list (e.g., success 2, executing 1), optional
 * @method string getKeyword() Obtain Task Name
 * @method void setKeyword(string $Keyword) Set Task Name
 */
class DescribeInstanceListRequest extends AbstractModel
{
    /**
     * @var string Project/workspace ID
     */
    public $ProjectId;

    /**
     * @var integer Page Number
     */
    public $PageIndex;

    /**
     * @var integer Number of items displayed per page
     */
    public $PageSize;

    /**
     * @var array Cycle List (e.g., daily, one-time), optional
     */
    public $CycleList;

    /**
     * @var array Person in Charge
     */
    public $OwnerList;

    /**
     * @var string Keep consistent with previous
     */
    public $InstanceType;

    /**
     * @var string Sorting Order (asc, desc)
     */
    public $Sort;

    /**
     * @var string Sort Column (costTime Runtime duration, startTime Start Time, state Instance status, curRunDate Data Timestamp)
     */
    public $SortCol;

    /**
     * @var array Type List (e.g., Python Task Type: 30
PySpark Task Type: 31
hivesql task type:34
shell task type:35
sparksql task type:36 jdbcsql task type:21 dlc task type:32), optional
     */
    public $TaskTypeList;

    /**
     * @var array Status list (e.g., success 2, executing 1), optional
     */
    public $StateList;

    /**
     * @var string Task Name
     */
    public $Keyword;

    /**
     * @param string $ProjectId Project/workspace ID
     * @param integer $PageIndex Page Number
     * @param integer $PageSize Number of items displayed per page
     * @param array $CycleList Cycle List (e.g., daily, one-time), optional
     * @param array $OwnerList Person in Charge
     * @param string $InstanceType Keep consistent with previous
     * @param string $Sort Sorting Order (asc, desc)
     * @param string $SortCol Sort Column (costTime Runtime duration, startTime Start Time, state Instance status, curRunDate Data Timestamp)
     * @param array $TaskTypeList Type List (e.g., Python Task Type: 30
PySpark Task Type: 31
hivesql task type:34
shell task type:35
sparksql task type:36 jdbcsql task type:21 dlc task type:32), optional
     * @param array $StateList Status list (e.g., success 2, executing 1), optional
     * @param string $Keyword Task Name
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("CycleList",$param) and $param["CycleList"] !== null) {
            $this->CycleList = $param["CycleList"];
        }

        if (array_key_exists("OwnerList",$param) and $param["OwnerList"] !== null) {
            $this->OwnerList = $param["OwnerList"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("SortCol",$param) and $param["SortCol"] !== null) {
            $this->SortCol = $param["SortCol"];
        }

        if (array_key_exists("TaskTypeList",$param) and $param["TaskTypeList"] !== null) {
            $this->TaskTypeList = $param["TaskTypeList"];
        }

        if (array_key_exists("StateList",$param) and $param["StateList"] !== null) {
            $this->StateList = $param["StateList"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
