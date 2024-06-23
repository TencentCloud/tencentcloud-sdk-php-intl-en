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
 * Approval List Information
 *
 * @method string getApplicantId() Obtain Applicant ID
 * @method void setApplicantId(string $ApplicantId) Set Applicant ID
 * @method string getApplicantName() Obtain Applicant Name
 * @method void setApplicantName(string $ApplicantName) Set Applicant Name
 * @method string getRemark() Obtain Approval Remarks
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRemark(string $Remark) Set Approval Remarks
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getApproveClassification() Obtain Approval Category Key
 * @method void setApproveClassification(string $ApproveClassification) Set Approval Category Key
 * @method string getApproveId() Obtain Approval Form ID
 * @method void setApproveId(string $ApproveId) Set Approval Form ID
 * @method string getApproveType() Obtain Approval Type Key
 * @method void setApproveType(string $ApproveType) Set Approval Type Key
 * @method string getReason() Obtain Application Reason
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setReason(string $Reason) Set Application Reason
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation Time
 * @method void setCreateTime(string $CreateTime) Set Creation Time
 * @method string getApproveTime() Obtain Approval Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setApproveTime(string $ApproveTime) Set Approval Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getApproveClassificationName() Obtain Approval Category Name
 * @method void setApproveClassificationName(string $ApproveClassificationName) Set Approval Category Name
 * @method string getStatus() Obtain Status
 * @method void setStatus(string $Status) Set Status
 * @method string getApproveTypeName() Obtain Approval Type Name
 * @method void setApproveTypeName(string $ApproveTypeName) Set Approval Type Name
 * @method string getErrorMessage() Obtain Approval Exception or Failure Information
 * @method void setErrorMessage(string $ErrorMessage) Set Approval Exception or Failure Information
 * @method string getApplyName() Obtain Apply for Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setApplyName(string $ApplyName) Set Apply for Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getApproverId() Obtain Approver ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setApproverId(string $ApproverId) Set Approver ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getApproverName() Obtain Approver Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setApproverName(string $ApproverName) Set Approver Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getApproveProjectName() Obtain Project for Approval
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setApproveProjectName(string $ApproveProjectName) Set Project for Approval
Note: This field may return null, indicating that no valid value can be obtained.
 */
class Apply extends AbstractModel
{
    /**
     * @var string Applicant ID
     */
    public $ApplicantId;

    /**
     * @var string Applicant Name
     */
    public $ApplicantName;

    /**
     * @var string Approval Remarks
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Remark;

    /**
     * @var string Approval Category Key
     */
    public $ApproveClassification;

    /**
     * @var string Approval Form ID
     */
    public $ApproveId;

    /**
     * @var string Approval Type Key
     */
    public $ApproveType;

    /**
     * @var string Application Reason
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Reason;

    /**
     * @var string Creation Time
     */
    public $CreateTime;

    /**
     * @var string Approval Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ApproveTime;

    /**
     * @var string Approval Category Name
     */
    public $ApproveClassificationName;

    /**
     * @var string Status
     */
    public $Status;

    /**
     * @var string Approval Type Name
     */
    public $ApproveTypeName;

    /**
     * @var string Approval Exception or Failure Information
     */
    public $ErrorMessage;

    /**
     * @var string Apply for Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ApplyName;

    /**
     * @var string Approver ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ApproverId;

    /**
     * @var string Approver Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ApproverName;

    /**
     * @var string Project for Approval
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ApproveProjectName;

    /**
     * @param string $ApplicantId Applicant ID
     * @param string $ApplicantName Applicant Name
     * @param string $Remark Approval Remarks
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ApproveClassification Approval Category Key
     * @param string $ApproveId Approval Form ID
     * @param string $ApproveType Approval Type Key
     * @param string $Reason Application Reason
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation Time
     * @param string $ApproveTime Approval Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ApproveClassificationName Approval Category Name
     * @param string $Status Status
     * @param string $ApproveTypeName Approval Type Name
     * @param string $ErrorMessage Approval Exception or Failure Information
     * @param string $ApplyName Apply for Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ApproverId Approver ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ApproverName Approver Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ApproveProjectName Project for Approval
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("ApplicantId",$param) and $param["ApplicantId"] !== null) {
            $this->ApplicantId = $param["ApplicantId"];
        }

        if (array_key_exists("ApplicantName",$param) and $param["ApplicantName"] !== null) {
            $this->ApplicantName = $param["ApplicantName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ApproveClassification",$param) and $param["ApproveClassification"] !== null) {
            $this->ApproveClassification = $param["ApproveClassification"];
        }

        if (array_key_exists("ApproveId",$param) and $param["ApproveId"] !== null) {
            $this->ApproveId = $param["ApproveId"];
        }

        if (array_key_exists("ApproveType",$param) and $param["ApproveType"] !== null) {
            $this->ApproveType = $param["ApproveType"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ApproveTime",$param) and $param["ApproveTime"] !== null) {
            $this->ApproveTime = $param["ApproveTime"];
        }

        if (array_key_exists("ApproveClassificationName",$param) and $param["ApproveClassificationName"] !== null) {
            $this->ApproveClassificationName = $param["ApproveClassificationName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ApproveTypeName",$param) and $param["ApproveTypeName"] !== null) {
            $this->ApproveTypeName = $param["ApproveTypeName"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ApplyName",$param) and $param["ApplyName"] !== null) {
            $this->ApplyName = $param["ApplyName"];
        }

        if (array_key_exists("ApproverId",$param) and $param["ApproverId"] !== null) {
            $this->ApproverId = $param["ApproverId"];
        }

        if (array_key_exists("ApproverName",$param) and $param["ApproverName"] !== null) {
            $this->ApproverName = $param["ApproverName"];
        }

        if (array_key_exists("ApproveProjectName",$param) and $param["ApproveProjectName"] !== null) {
            $this->ApproveProjectName = $param["ApproveProjectName"];
        }
    }
}
