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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTasks request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method integer getPageNumber() Obtain Specifies the data page number of the request. default value is 1. valid values: equal to or greater than 1.
 * @method void setPageNumber(integer $PageNumber) Set Specifies the data page number of the request. default value is 1. valid values: equal to or greater than 1.
 * @method integer getPageSize() Obtain Specifies the number of data records displayed per page. default: 10. value range: 10 to 200.
 * @method void setPageSize(integer $PageSize) Set Specifies the number of data records displayed per page. default: 10. value range: 10 to 200.
 * @method string getTaskName() Obtain Task name.
 * @method void setTaskName(string $TaskName) Set Task name.
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 * @method string getOwnerUin() Obtain Owner ID.
 * @method void setOwnerUin(string $OwnerUin) Set Owner ID.
 * @method integer getTaskTypeId() Obtain Task type
 * @method void setTaskTypeId(integer $TaskTypeId) Set Task type
 * @method string getStatus() Obtain Task Status:
* N: New
* Y: Scheduling
* F: Offline
* O: Paused
* T: Offlining
* INVALID: Invalid
 * @method void setStatus(string $Status) Set Task Status:
* N: New
* Y: Scheduling
* F: Offline
* O: Paused
* T: Offlining
* INVALID: Invalid
 * @method boolean getSubmit() Obtain Submission status.
 * @method void setSubmit(boolean $Submit) Set Submission status.
 * @method string getBundleId() Obtain Bundle id.
 * @method void setBundleId(string $BundleId) Set Bundle id.
 * @method string getCreateUserUin() Obtain Creator ID.
 * @method void setCreateUserUin(string $CreateUserUin) Set Creator ID.
 * @method array getModifyTime() Obtain Modification time range (yyyy-MM-dd HH:mm:ss). Two time values must be provided in the array.
 * @method void setModifyTime(array $ModifyTime) Set Modification time range (yyyy-MM-dd HH:mm:ss). Two time values must be provided in the array.
 * @method array getCreateTime() Obtain Creation time range (yyyy-MM-dd HH:MM:ss). Two time values must be provided in the array.
 * @method void setCreateTime(array $CreateTime) Set Creation time range (yyyy-MM-dd HH:MM:ss). Two time values must be provided in the array.
 */
class ListTasksRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var integer Specifies the data page number of the request. default value is 1. valid values: equal to or greater than 1.
     */
    public $PageNumber;

    /**
     * @var integer Specifies the number of data records displayed per page. default: 10. value range: 10 to 200.
     */
    public $PageSize;

    /**
     * @var string Task name.
     */
    public $TaskName;

    /**
     * @var string Workflow ID
     */
    public $WorkflowId;

    /**
     * @var string Owner ID.
     */
    public $OwnerUin;

    /**
     * @var integer Task type
     */
    public $TaskTypeId;

    /**
     * @var string Task Status:
* N: New
* Y: Scheduling
* F: Offline
* O: Paused
* T: Offlining
* INVALID: Invalid
     */
    public $Status;

    /**
     * @var boolean Submission status.
     */
    public $Submit;

    /**
     * @var string Bundle id.
     */
    public $BundleId;

    /**
     * @var string Creator ID.
     */
    public $CreateUserUin;

    /**
     * @var array Modification time range (yyyy-MM-dd HH:mm:ss). Two time values must be provided in the array.
     */
    public $ModifyTime;

    /**
     * @var array Creation time range (yyyy-MM-dd HH:MM:ss). Two time values must be provided in the array.
     */
    public $CreateTime;

    /**
     * @param string $ProjectId Project ID.
     * @param integer $PageNumber Specifies the data page number of the request. default value is 1. valid values: equal to or greater than 1.
     * @param integer $PageSize Specifies the number of data records displayed per page. default: 10. value range: 10 to 200.
     * @param string $TaskName Task name.
     * @param string $WorkflowId Workflow ID
     * @param string $OwnerUin Owner ID.
     * @param integer $TaskTypeId Task type
     * @param string $Status Task Status:
* N: New
* Y: Scheduling
* F: Offline
* O: Paused
* T: Offlining
* INVALID: Invalid
     * @param boolean $Submit Submission status.
     * @param string $BundleId Bundle id.
     * @param string $CreateUserUin Creator ID.
     * @param array $ModifyTime Modification time range (yyyy-MM-dd HH:mm:ss). Two time values must be provided in the array.
     * @param array $CreateTime Creation time range (yyyy-MM-dd HH:MM:ss). Two time values must be provided in the array.
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Submit",$param) and $param["Submit"] !== null) {
            $this->Submit = $param["Submit"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
