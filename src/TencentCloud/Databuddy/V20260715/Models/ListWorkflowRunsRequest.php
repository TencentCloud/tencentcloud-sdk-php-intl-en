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
 * ListWorkflowRuns request structure.
 *
 * @method string getWorkspaceId() Obtain <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
 * @method integer getPageNumber() Obtain <p>Page number. Value range: starts from 1. Optional. Default value: 1.</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number. Value range: starts from 1. Optional. Default value: 1.</p>
 * @method integer getPageSize() Obtain <p>Size per page. Optional. Default: 10. Value range: [10, 200]</p>
 * @method void setPageSize(integer $PageSize) Set <p>Size per page. Optional. Default: 10. Value range: [10, 200]</p>
 * @method string getWorkflowId() Obtain <p>Workflow ID, exact match. Optional, single value</p>
 * @method void setWorkflowId(string $WorkflowId) Set <p>Workflow ID, exact match. Optional, single value</p>
 * @method string getWorkflowNameKeyword() Obtain <p>Workflow name keyword for fuzzy matching of WorkflowName. Optional, single value</p>
 * @method void setWorkflowNameKeyword(string $WorkflowNameKeyword) Set <p>Workflow name keyword for fuzzy matching of WorkflowName. Optional, single value</p>
 * @method string getCreateStartTime() Obtain <p>Lower bound for the running creation time, range match (CreateTime &gt;= this value), unit: timestamp in milliseconds.<br>Optional, single value, corresponding to the output parameter WorkflowRun.CreateTime</p>
 * @method void setCreateStartTime(string $CreateStartTime) Set <p>Lower bound for the running creation time, range match (CreateTime &gt;= this value), unit: timestamp in milliseconds.<br>Optional, single value, corresponding to the output parameter WorkflowRun.CreateTime</p>
 * @method string getCreateEndTime() Obtain <p>Upper bound for the running creation time, range match (CreateTime &lt;= this value), unit: timestamp in milliseconds.<br>Optional, single value, corresponding to the output parameter WorkflowRun.CreateTime</p>
 * @method void setCreateEndTime(string $CreateEndTime) Set <p>Upper bound for the running creation time, range match (CreateTime &lt;= this value), unit: timestamp in milliseconds.<br>Optional, single value, corresponding to the output parameter WorkflowRun.CreateTime</p>
 * @method array getRunStates() Obtain <p>RUNNING state. Exact matching. Optional. Multiple selection (multiple values are in OR relationship with each other). RUNNING state. CREATE("initialization"), QUEUED("Waiting"), PENDING("preparing"), RUNNING("RUNNING"), SKIPPED("skip RUNNING"), SUCCESS("successful"), FAILED("failure"), TERMINATING("TERMINATING"), TERMINATED("termination"), CANCELLED("manual termination"), etc.</p>
 * @method void setRunStates(array $RunStates) Set <p>RUNNING state. Exact matching. Optional. Multiple selection (multiple values are in OR relationship with each other). RUNNING state. CREATE("initialization"), QUEUED("Waiting"), PENDING("preparing"), RUNNING("RUNNING"), SKIPPED("skip RUNNING"), SUCCESS("successful"), FAILED("failure"), TERMINATING("TERMINATING"), TERMINATED("termination"), CANCELLED("manual termination"), etc.</p>
 * @method array getErrorCodeStrings() Obtain <p>Error code, exact match. Optional, multiple selection (OR relationship between multiple values)</p>
 * @method void setErrorCodeStrings(array $ErrorCodeStrings) Set <p>Error code, exact match. Optional, multiple selection (OR relationship between multiple values)</p>
 * @method array getRunUserUins() Obtain <p>Operator UIN, exact match. Optional, multiple selection (OR relationship between multiple values)</p>
 * @method void setRunUserUins(array $RunUserUins) Set <p>Operator UIN, exact match. Optional, multiple selection (OR relationship between multiple values)</p>
 * @method array getLabelKeyIds() Obtain <p>Tag name ID, exact match, obtainable through tag-related APIs. Optional, multiple selection (multiple values are in an OR relationship with each other)</p>
 * @method void setLabelKeyIds(array $LabelKeyIds) Set <p>Tag name ID, exact match, obtainable through tag-related APIs. Optional, multiple selection (multiple values are in an OR relationship with each other)</p>
 * @method array getLabelValueIds() Obtain <p>Tag value ID. Exact match. It can be obtained through the tag-related API. Optional. Multiple selection (multiple values are in OR relationship with each other)</p>
 * @method void setLabelValueIds(array $LabelValueIds) Set <p>Tag value ID. Exact match. It can be obtained through the tag-related API. Optional. Multiple selection (multiple values are in OR relationship with each other)</p>
 * @method array getOrderBys() Obtain <p>Sorting conditions. The priority of multiple conditions is indicated by the array order. Optional. Default: CreateTime Desc.<br>Sortable field allowlist: CreateTime, EndTime, RunCostTime</p>
 * @method void setOrderBys(array $OrderBys) Set <p>Sorting conditions. The priority of multiple conditions is indicated by the array order. Optional. Default: CreateTime Desc.<br>Sortable field allowlist: CreateTime, EndTime, RunCostTime</p>
 */
class ListWorkflowRunsRequest extends AbstractModel
{
    /**
     * @var string <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
     */
    public $WorkspaceId;

    /**
     * @var integer <p>Page number. Value range: starts from 1. Optional. Default value: 1.</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Size per page. Optional. Default: 10. Value range: [10, 200]</p>
     */
    public $PageSize;

    /**
     * @var string <p>Workflow ID, exact match. Optional, single value</p>
     */
    public $WorkflowId;

    /**
     * @var string <p>Workflow name keyword for fuzzy matching of WorkflowName. Optional, single value</p>
     */
    public $WorkflowNameKeyword;

    /**
     * @var string <p>Lower bound for the running creation time, range match (CreateTime &gt;= this value), unit: timestamp in milliseconds.<br>Optional, single value, corresponding to the output parameter WorkflowRun.CreateTime</p>
     */
    public $CreateStartTime;

    /**
     * @var string <p>Upper bound for the running creation time, range match (CreateTime &lt;= this value), unit: timestamp in milliseconds.<br>Optional, single value, corresponding to the output parameter WorkflowRun.CreateTime</p>
     */
    public $CreateEndTime;

    /**
     * @var array <p>RUNNING state. Exact matching. Optional. Multiple selection (multiple values are in OR relationship with each other). RUNNING state. CREATE("initialization"), QUEUED("Waiting"), PENDING("preparing"), RUNNING("RUNNING"), SKIPPED("skip RUNNING"), SUCCESS("successful"), FAILED("failure"), TERMINATING("TERMINATING"), TERMINATED("termination"), CANCELLED("manual termination"), etc.</p>
     */
    public $RunStates;

    /**
     * @var array <p>Error code, exact match. Optional, multiple selection (OR relationship between multiple values)</p>
     */
    public $ErrorCodeStrings;

    /**
     * @var array <p>Operator UIN, exact match. Optional, multiple selection (OR relationship between multiple values)</p>
     */
    public $RunUserUins;

    /**
     * @var array <p>Tag name ID, exact match, obtainable through tag-related APIs. Optional, multiple selection (multiple values are in an OR relationship with each other)</p>
     */
    public $LabelKeyIds;

    /**
     * @var array <p>Tag value ID. Exact match. It can be obtained through the tag-related API. Optional. Multiple selection (multiple values are in OR relationship with each other)</p>
     */
    public $LabelValueIds;

    /**
     * @var array <p>Sorting conditions. The priority of multiple conditions is indicated by the array order. Optional. Default: CreateTime Desc.<br>Sortable field allowlist: CreateTime, EndTime, RunCostTime</p>
     */
    public $OrderBys;

    /**
     * @param string $WorkspaceId <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
     * @param integer $PageNumber <p>Page number. Value range: starts from 1. Optional. Default value: 1.</p>
     * @param integer $PageSize <p>Size per page. Optional. Default: 10. Value range: [10, 200]</p>
     * @param string $WorkflowId <p>Workflow ID, exact match. Optional, single value</p>
     * @param string $WorkflowNameKeyword <p>Workflow name keyword for fuzzy matching of WorkflowName. Optional, single value</p>
     * @param string $CreateStartTime <p>Lower bound for the running creation time, range match (CreateTime &gt;= this value), unit: timestamp in milliseconds.<br>Optional, single value, corresponding to the output parameter WorkflowRun.CreateTime</p>
     * @param string $CreateEndTime <p>Upper bound for the running creation time, range match (CreateTime &lt;= this value), unit: timestamp in milliseconds.<br>Optional, single value, corresponding to the output parameter WorkflowRun.CreateTime</p>
     * @param array $RunStates <p>RUNNING state. Exact matching. Optional. Multiple selection (multiple values are in OR relationship with each other). RUNNING state. CREATE("initialization"), QUEUED("Waiting"), PENDING("preparing"), RUNNING("RUNNING"), SKIPPED("skip RUNNING"), SUCCESS("successful"), FAILED("failure"), TERMINATING("TERMINATING"), TERMINATED("termination"), CANCELLED("manual termination"), etc.</p>
     * @param array $ErrorCodeStrings <p>Error code, exact match. Optional, multiple selection (OR relationship between multiple values)</p>
     * @param array $RunUserUins <p>Operator UIN, exact match. Optional, multiple selection (OR relationship between multiple values)</p>
     * @param array $LabelKeyIds <p>Tag name ID, exact match, obtainable through tag-related APIs. Optional, multiple selection (multiple values are in an OR relationship with each other)</p>
     * @param array $LabelValueIds <p>Tag value ID. Exact match. It can be obtained through the tag-related API. Optional. Multiple selection (multiple values are in OR relationship with each other)</p>
     * @param array $OrderBys <p>Sorting conditions. The priority of multiple conditions is indicated by the array order. Optional. Default: CreateTime Desc.<br>Sortable field allowlist: CreateTime, EndTime, RunCostTime</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowNameKeyword",$param) and $param["WorkflowNameKeyword"] !== null) {
            $this->WorkflowNameKeyword = $param["WorkflowNameKeyword"];
        }

        if (array_key_exists("CreateStartTime",$param) and $param["CreateStartTime"] !== null) {
            $this->CreateStartTime = $param["CreateStartTime"];
        }

        if (array_key_exists("CreateEndTime",$param) and $param["CreateEndTime"] !== null) {
            $this->CreateEndTime = $param["CreateEndTime"];
        }

        if (array_key_exists("RunStates",$param) and $param["RunStates"] !== null) {
            $this->RunStates = $param["RunStates"];
        }

        if (array_key_exists("ErrorCodeStrings",$param) and $param["ErrorCodeStrings"] !== null) {
            $this->ErrorCodeStrings = $param["ErrorCodeStrings"];
        }

        if (array_key_exists("RunUserUins",$param) and $param["RunUserUins"] !== null) {
            $this->RunUserUins = $param["RunUserUins"];
        }

        if (array_key_exists("LabelKeyIds",$param) and $param["LabelKeyIds"] !== null) {
            $this->LabelKeyIds = $param["LabelKeyIds"];
        }

        if (array_key_exists("LabelValueIds",$param) and $param["LabelValueIds"] !== null) {
            $this->LabelValueIds = $param["LabelValueIds"];
        }

        if (array_key_exists("OrderBys",$param) and $param["OrderBys"] !== null) {
            $this->OrderBys = [];
            foreach ($param["OrderBys"] as $key => $value){
                $obj = new OrderBy();
                $obj->deserialize($value);
                array_push($this->OrderBys, $obj);
            }
        }
    }
}
