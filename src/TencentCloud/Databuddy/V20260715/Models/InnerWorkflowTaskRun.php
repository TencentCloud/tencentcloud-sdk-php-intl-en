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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Built-in workflow task execution details (FOR_EACH tasks only)
 *
 * @method integer getPageNumber() Obtain Current page
 * @method void setPageNumber(integer $PageNumber) Set Current page
 * @method integer getPageSize() Obtain Page Size
 * @method void setPageSize(integer $PageSize) Set Page Size
 * @method integer getTotalCount() Obtain Total number of records
 * @method void setTotalCount(integer $TotalCount) Set Total number of records
 * @method integer getTotalPageNumber() Obtain Total pages
 * @method void setTotalPageNumber(integer $TotalPageNumber) Set Total pages
 * @method array getItems() Obtain Iteration run list
 * @method void setItems(array $Items) Set Iteration run list
 * @method integer getIterationCount() Obtain Number of iterations.
 * @method void setIterationCount(integer $IterationCount) Set Number of iterations.
 * @method integer getFailureCount() Obtain Number of failures
 * @method void setFailureCount(integer $FailureCount) Set Number of failures
 * @method integer getSuccessCount() Obtain Number of successes
 * @method void setSuccessCount(integer $SuccessCount) Set Number of successes
 * @method string getInnerWorkflowId() Obtain Built-in workflow ID, which can be obtained through ListWorkflows
 * @method void setInnerWorkflowId(string $InnerWorkflowId) Set Built-in workflow ID, which can be obtained through ListWorkflows
 * @method string getInnerTaskId() Obtain Built-in task ID, which can be obtained through ListWorkflowTasks.
 * @method void setInnerTaskId(string $InnerTaskId) Set Built-in task ID, which can be obtained through ListWorkflowTasks.
 * @method array getInnerTaskRunBizEnumInfos() Obtain Statistics on the number of built-in task running statuses (list of key-value pairs for instance business enums)
 * @method void setInnerTaskRunBizEnumInfos(array $InnerTaskRunBizEnumInfos) Set Statistics on the number of built-in task running statuses (list of key-value pairs for instance business enums)
 */
class InnerWorkflowTaskRun extends AbstractModel
{
    /**
     * @var integer Current page
     */
    public $PageNumber;

    /**
     * @var integer Page Size
     */
    public $PageSize;

    /**
     * @var integer Total number of records
     */
    public $TotalCount;

    /**
     * @var integer Total pages
     */
    public $TotalPageNumber;

    /**
     * @var array Iteration run list
     */
    public $Items;

    /**
     * @var integer Number of iterations.
     */
    public $IterationCount;

    /**
     * @var integer Number of failures
     */
    public $FailureCount;

    /**
     * @var integer Number of successes
     */
    public $SuccessCount;

    /**
     * @var string Built-in workflow ID, which can be obtained through ListWorkflows
     */
    public $InnerWorkflowId;

    /**
     * @var string Built-in task ID, which can be obtained through ListWorkflowTasks.
     */
    public $InnerTaskId;

    /**
     * @var array Statistics on the number of built-in task running statuses (list of key-value pairs for instance business enums)
     */
    public $InnerTaskRunBizEnumInfos;

    /**
     * @param integer $PageNumber Current page
     * @param integer $PageSize Page Size
     * @param integer $TotalCount Total number of records
     * @param integer $TotalPageNumber Total pages
     * @param array $Items Iteration run list
     * @param integer $IterationCount Number of iterations.
     * @param integer $FailureCount Number of failures
     * @param integer $SuccessCount Number of successes
     * @param string $InnerWorkflowId Built-in workflow ID, which can be obtained through ListWorkflows
     * @param string $InnerTaskId Built-in task ID, which can be obtained through ListWorkflowTasks.
     * @param array $InnerTaskRunBizEnumInfos Statistics on the number of built-in task running statuses (list of key-value pairs for instance business enums)
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalPageNumber",$param) and $param["TotalPageNumber"] !== null) {
            $this->TotalPageNumber = $param["TotalPageNumber"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new InnerWorkflowTaskRunIteration();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("IterationCount",$param) and $param["IterationCount"] !== null) {
            $this->IterationCount = $param["IterationCount"];
        }

        if (array_key_exists("FailureCount",$param) and $param["FailureCount"] !== null) {
            $this->FailureCount = $param["FailureCount"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("InnerWorkflowId",$param) and $param["InnerWorkflowId"] !== null) {
            $this->InnerWorkflowId = $param["InnerWorkflowId"];
        }

        if (array_key_exists("InnerTaskId",$param) and $param["InnerTaskId"] !== null) {
            $this->InnerTaskId = $param["InnerTaskId"];
        }

        if (array_key_exists("InnerTaskRunBizEnumInfos",$param) and $param["InnerTaskRunBizEnumInfos"] !== null) {
            $this->InnerTaskRunBizEnumInfos = [];
            foreach ($param["InnerTaskRunBizEnumInfos"] as $key => $value){
                $obj = new ScheduleBizEnumBrief();
                $obj->deserialize($value);
                array_push($this->InnerTaskRunBizEnumInfos, $obj);
            }
        }
    }
}
