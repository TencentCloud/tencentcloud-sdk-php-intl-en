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
 * Describes the version list information of the task.
 *
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getVersionNum() Obtain Version number


 * @method void setVersionNum(string $VersionNum) Set Version number


 * @method string getCreateUserUin() Obtain Specifies the version creator.

 * @method void setCreateUserUin(string $CreateUserUin) Set Specifies the version creator.

 * @method string getVersionId() Obtain Specifies the version Id to save.

 * @method void setVersionId(string $VersionId) Set Specifies the version Id to save.

 * @method string getVersionRemark() Obtain Version description

 * @method void setVersionRemark(string $VersionRemark) Set Version description

 * @method string getApproveStatus() Obtain Approval status (only for submit version).

 * @method void setApproveStatus(string $ApproveStatus) Set Approval status (only for submit version).

 * @method string getApproveTime() Obtain Production status  (only for submit version).
 * @method void setApproveTime(string $ApproveTime) Set Production status  (only for submit version).
 * @method Task getTask() Obtain Describes the task detail of the version.

 * @method void setTask(Task $Task) Set Describes the task detail of the version.

 * @method string getApproveUserUin() Obtain Approver Id.
 * @method void setApproveUserUin(string $ApproveUserUin) Set Approver Id.
 */
class TaskVersionDetail extends AbstractModel
{
    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Version number


     */
    public $VersionNum;

    /**
     * @var string Specifies the version creator.

     */
    public $CreateUserUin;

    /**
     * @var string Specifies the version Id to save.

     */
    public $VersionId;

    /**
     * @var string Version description

     */
    public $VersionRemark;

    /**
     * @var string Approval status (only for submit version).

     */
    public $ApproveStatus;

    /**
     * @var string Production status  (only for submit version).
     */
    public $ApproveTime;

    /**
     * @var Task Describes the task detail of the version.

     */
    public $Task;

    /**
     * @var string Approver Id.
     */
    public $ApproveUserUin;

    /**
     * @param string $CreateTime Creation time.
     * @param string $VersionNum Version number


     * @param string $CreateUserUin Specifies the version creator.

     * @param string $VersionId Specifies the version Id to save.

     * @param string $VersionRemark Version description

     * @param string $ApproveStatus Approval status (only for submit version).

     * @param string $ApproveTime Production status  (only for submit version).
     * @param Task $Task Describes the task detail of the version.

     * @param string $ApproveUserUin Approver Id.
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("VersionNum",$param) and $param["VersionNum"] !== null) {
            $this->VersionNum = $param["VersionNum"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("VersionRemark",$param) and $param["VersionRemark"] !== null) {
            $this->VersionRemark = $param["VersionRemark"];
        }

        if (array_key_exists("ApproveStatus",$param) and $param["ApproveStatus"] !== null) {
            $this->ApproveStatus = $param["ApproveStatus"];
        }

        if (array_key_exists("ApproveTime",$param) and $param["ApproveTime"] !== null) {
            $this->ApproveTime = $param["ApproveTime"];
        }

        if (array_key_exists("Task",$param) and $param["Task"] !== null) {
            $this->Task = new Task();
            $this->Task->deserialize($param["Task"]);
        }

        if (array_key_exists("ApproveUserUin",$param) and $param["ApproveUserUin"] !== null) {
            $this->ApproveUserUin = $param["ApproveUserUin"];
        }
    }
}
