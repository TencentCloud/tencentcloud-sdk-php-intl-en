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
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getVersionNum() Obtain Version number

 * @method void setVersionNum(string $VersionNum) Set Version number

 * @method string getCreateUserUin() Obtain Creator ID
 * @method void setCreateUserUin(string $CreateUserUin) Set Creator ID
 * @method string getVersionId() Obtain Saved version ID
 * @method void setVersionId(string $VersionId) Set Saved version ID
 * @method string getVersionRemark() Obtain Version description

 * @method void setVersionRemark(string $VersionRemark) Set Version description

 * @method string getApproveStatus() Obtain Approval status (only for submit version).

 * @method void setApproveStatus(string $ApproveStatus) Set Approval status (only for submit version).

 * @method string getStatus() Obtain Production status (only for submit version).

 * @method void setStatus(string $Status) Set Production status (only for submit version).

 * @method string getApproveUserUin() Obtain Approver (only for submit version).

 * @method void setApproveUserUin(string $ApproveUserUin) Set Approver (only for submit version).
 */
class TaskVersion extends AbstractModel
{
    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Version number

     */
    public $VersionNum;

    /**
     * @var string Creator ID
     */
    public $CreateUserUin;

    /**
     * @var string Saved version ID
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
     * @var string Production status (only for submit version).

     */
    public $Status;

    /**
     * @var string Approver (only for submit version).

     */
    public $ApproveUserUin;

    /**
     * @param string $CreateTime Creation time
     * @param string $VersionNum Version number

     * @param string $CreateUserUin Creator ID
     * @param string $VersionId Saved version ID
     * @param string $VersionRemark Version description

     * @param string $ApproveStatus Approval status (only for submit version).

     * @param string $Status Production status (only for submit version).

     * @param string $ApproveUserUin Approver (only for submit version).
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ApproveUserUin",$param) and $param["ApproveUserUin"] !== null) {
            $this->ApproveUserUin = $param["ApproveUserUin"];
        }
    }
}
