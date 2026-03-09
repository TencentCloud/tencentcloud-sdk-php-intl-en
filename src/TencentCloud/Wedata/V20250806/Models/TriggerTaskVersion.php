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
 * Version list information.
 *
 * @method string getCreateTime() Obtain Retention time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Retention time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVersionNum() Obtain Version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersionNum(string $VersionNum) Set Version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUserUin() Obtain Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUserUin(string $CreateUserUin) Set Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVersionId() Obtain Save version id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersionId(string $VersionId) Set Save version id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVersionRemark() Obtain Version description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersionRemark(string $VersionRemark) Set Version description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApproveStatus() Obtain Approval status (only submit version has).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApproveStatus(string $ApproveStatus) Set Approval status (only submit version has).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Production status (only submit version has).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Production status (only submit version has).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApproveUserUin() Obtain Approver (only submit version has).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApproveUserUin(string $ApproveUserUin) Set Approver (only submit version has).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TriggerTaskVersion extends AbstractModel
{
    /**
     * @var string Retention time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VersionNum;

    /**
     * @var string Creator
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUserUin;

    /**
     * @var string Save version id.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VersionId;

    /**
     * @var string Version description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VersionRemark;

    /**
     * @var string Approval status (only submit version has).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApproveStatus;

    /**
     * @var string Production status (only submit version has).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Approver (only submit version has).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApproveUserUin;

    /**
     * @param string $CreateTime Retention time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VersionNum Version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUserUin Creator
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VersionId Save version id.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VersionRemark Version description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApproveStatus Approval status (only submit version has).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Production status (only submit version has).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApproveUserUin Approver (only submit version has).
Note: This field may return null, indicating that no valid values can be obtained.
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
