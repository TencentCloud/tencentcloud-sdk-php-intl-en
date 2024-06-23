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
 * DescribeOpsMakePlans request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getPageNumber() Obtain Pagination number, default value: 1
 * @method void setPageNumber(integer $PageNumber) Set Pagination number, default value: 1
 * @method integer getPageSize() Obtain Page size, default value 10
 * @method void setPageSize(integer $PageSize) Set Page size, default value 10
 * @method string getPlanId() Obtain Supplemental Plan ID
 * @method void setPlanId(string $PlanId) Set Supplemental Plan ID
 * @method string getPlanName() Obtain Supplemental Plan Name
 * @method void setPlanName(string $PlanName) Set Supplemental Plan Name
 * @method string getTaskName() Obtain Supplementary Task Name
 * @method void setTaskName(string $TaskName) Set Supplementary Task Name
 * @method string getTaskId() Obtain Supplementary Task ID
 * @method void setTaskId(string $TaskId) Set Supplementary Task ID
 * @method string getCreator() Obtain Supplementary Plan Creator
 * @method void setCreator(string $Creator) Set Supplementary Plan Creator
 * @method string getMinCreateTime() Obtain Minimum Creation Time of Supplementary Plan
 * @method void setMinCreateTime(string $MinCreateTime) Set Minimum Creation Time of Supplementary Plan
 * @method string getMaxCreateTime() Obtain Maximum Creation Time of Supplementary Plan
 * @method void setMaxCreateTime(string $MaxCreateTime) Set Maximum Creation Time of Supplementary Plan
 */
class DescribeOpsMakePlansRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var integer Pagination number, default value: 1
     */
    public $PageNumber;

    /**
     * @var integer Page size, default value 10
     */
    public $PageSize;

    /**
     * @var string Supplemental Plan ID
     */
    public $PlanId;

    /**
     * @var string Supplemental Plan Name
     */
    public $PlanName;

    /**
     * @var string Supplementary Task Name
     */
    public $TaskName;

    /**
     * @var string Supplementary Task ID
     */
    public $TaskId;

    /**
     * @var string Supplementary Plan Creator
     */
    public $Creator;

    /**
     * @var string Minimum Creation Time of Supplementary Plan
     */
    public $MinCreateTime;

    /**
     * @var string Maximum Creation Time of Supplementary Plan
     */
    public $MaxCreateTime;

    /**
     * @param string $ProjectId Project ID
     * @param integer $PageNumber Pagination number, default value: 1
     * @param integer $PageSize Page size, default value 10
     * @param string $PlanId Supplemental Plan ID
     * @param string $PlanName Supplemental Plan Name
     * @param string $TaskName Supplementary Task Name
     * @param string $TaskId Supplementary Task ID
     * @param string $Creator Supplementary Plan Creator
     * @param string $MinCreateTime Minimum Creation Time of Supplementary Plan
     * @param string $MaxCreateTime Maximum Creation Time of Supplementary Plan
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

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("MinCreateTime",$param) and $param["MinCreateTime"] !== null) {
            $this->MinCreateTime = $param["MinCreateTime"];
        }

        if (array_key_exists("MaxCreateTime",$param) and $param["MaxCreateTime"] !== null) {
            $this->MaxCreateTime = $param["MaxCreateTime"];
        }
    }
}
