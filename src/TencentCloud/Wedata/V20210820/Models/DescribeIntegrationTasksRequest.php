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
 * DescribeIntegrationTasks request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getPageNumber() Obtain Page n of Pagination
 * @method void setPageNumber(integer $PageNumber) Set Page n of Pagination
 * @method integer getPageSize() Obtain Page size
 * @method void setPageSize(integer $PageSize) Set Page size
 * @method array getFilters() Obtain Query Filter
 * @method void setFilters(array $Filters) Set Query Filter
 * @method array getOrderFields() Obtain Sorting Field Information
 * @method void setOrderFields(array $OrderFields) Set Sorting Field Information
 * @method string getStartTime() Obtain Start Time
 * @method void setStartTime(string $StartTime) Set Start Time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method integer getTaskType() Obtain 201. Real-time synchronization, 202. Offline Synchronization Default is real-time
 * @method void setTaskType(integer $TaskType) Set 201. Real-time synchronization, 202. Offline Synchronization Default is real-time
 */
class DescribeIntegrationTasksRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var integer Page n of Pagination
     */
    public $PageNumber;

    /**
     * @var integer Page size
     */
    public $PageSize;

    /**
     * @var array Query Filter
     */
    public $Filters;

    /**
     * @var array Sorting Field Information
     */
    public $OrderFields;

    /**
     * @var string Start Time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var integer 201. Real-time synchronization, 202. Offline Synchronization Default is real-time
     */
    public $TaskType;

    /**
     * @param string $ProjectId Project ID
     * @param integer $PageNumber Page n of Pagination
     * @param integer $PageSize Page size
     * @param array $Filters Query Filter
     * @param array $OrderFields Sorting Field Information
     * @param string $StartTime Start Time
     * @param string $EndTime End time
     * @param integer $TaskType 201. Real-time synchronization, 202. Offline Synchronization Default is real-time
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
