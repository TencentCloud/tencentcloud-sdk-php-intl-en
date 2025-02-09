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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of permission requests to allow a mini program to call sensitive APIs
 *
 * @method string getApprovalNo() Obtain Approval ID
 * @method void setApprovalNo(string $ApprovalNo) Set Approval ID
 * @method string getAPIId() Obtain Sensitive API ID
 * @method void setAPIId(string $APIId) Set Sensitive API ID
 * @method string getAPIName() Obtain API name
 * @method void setAPIName(string $APIName) Set API name
 * @method string getAPIMethod() Obtain API request method
 * @method void setAPIMethod(string $APIMethod) Set API request method
 * @method string getMNPId() Obtain Mini program ID
 * @method void setMNPId(string $MNPId) Set Mini program ID
 * @method string getMNPName() Obtain Mini program name
 * @method void setMNPName(string $MNPName) Set Mini program name
 * @method string getApplyUser() Obtain Applicant
 * @method void setApplyUser(string $ApplyUser) Set Applicant
 * @method string getApplyTime() Obtain Application time
 * @method void setApplyTime(string $ApplyTime) Set Application time
 * @method string getApplyNote() Obtain Application notes
 * @method void setApplyNote(string $ApplyNote) Set Application notes
 * @method integer getApprovalStatus() Obtain Approval status. 1: Processing; 20: Rejected; 30: Approved
 * @method void setApprovalStatus(integer $ApprovalStatus) Set Approval status. 1: Processing; 20: Rejected; 30: Approved
 * @method string getApprovalUser() Obtain Approver
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApprovalUser(string $ApprovalUser) Set Approver
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApprovalTime() Obtain Approval time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApprovalTime(string $ApprovalTime) Set Approval time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApprovalNote() Obtain Approval notes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApprovalNote(string $ApprovalNote) Set Approval notes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationId() Obtain Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationId(string $ApplicationId) Set Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain Application name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set Application name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationLogo() Obtain Application icon
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationLogo(string $ApplicationLogo) Set Application icon
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAPIType() Obtain API type. 1: System; 2: Custom
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAPIType(integer $APIType) Set API type. 1: System; 2: Custom
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAPIDesc() Obtain API feature description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAPIDesc(string $APIDesc) Set API feature description
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeMNPSensitiveAPIPermissionApprovalListData extends AbstractModel
{
    /**
     * @var string Approval ID
     */
    public $ApprovalNo;

    /**
     * @var string Sensitive API ID
     */
    public $APIId;

    /**
     * @var string API name
     */
    public $APIName;

    /**
     * @var string API request method
     */
    public $APIMethod;

    /**
     * @var string Mini program ID
     */
    public $MNPId;

    /**
     * @var string Mini program name
     */
    public $MNPName;

    /**
     * @var string Applicant
     */
    public $ApplyUser;

    /**
     * @var string Application time
     */
    public $ApplyTime;

    /**
     * @var string Application notes
     */
    public $ApplyNote;

    /**
     * @var integer Approval status. 1: Processing; 20: Rejected; 30: Approved
     */
    public $ApprovalStatus;

    /**
     * @var string Approver
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApprovalUser;

    /**
     * @var string Approval time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApprovalTime;

    /**
     * @var string Approval notes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApprovalNote;

    /**
     * @var string Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationId;

    /**
     * @var string Application name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @var string Application icon
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationLogo;

    /**
     * @var integer API type. 1: System; 2: Custom
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $APIType;

    /**
     * @var string API feature description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $APIDesc;

    /**
     * @param string $ApprovalNo Approval ID
     * @param string $APIId Sensitive API ID
     * @param string $APIName API name
     * @param string $APIMethod API request method
     * @param string $MNPId Mini program ID
     * @param string $MNPName Mini program name
     * @param string $ApplyUser Applicant
     * @param string $ApplyTime Application time
     * @param string $ApplyNote Application notes
     * @param integer $ApprovalStatus Approval status. 1: Processing; 20: Rejected; 30: Approved
     * @param string $ApprovalUser Approver
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApprovalTime Approval time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApprovalNote Approval notes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationId Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationName Application name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationLogo Application icon
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $APIType API type. 1: System; 2: Custom
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $APIDesc API feature description
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
        if (array_key_exists("ApprovalNo",$param) and $param["ApprovalNo"] !== null) {
            $this->ApprovalNo = $param["ApprovalNo"];
        }

        if (array_key_exists("APIId",$param) and $param["APIId"] !== null) {
            $this->APIId = $param["APIId"];
        }

        if (array_key_exists("APIName",$param) and $param["APIName"] !== null) {
            $this->APIName = $param["APIName"];
        }

        if (array_key_exists("APIMethod",$param) and $param["APIMethod"] !== null) {
            $this->APIMethod = $param["APIMethod"];
        }

        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("MNPName",$param) and $param["MNPName"] !== null) {
            $this->MNPName = $param["MNPName"];
        }

        if (array_key_exists("ApplyUser",$param) and $param["ApplyUser"] !== null) {
            $this->ApplyUser = $param["ApplyUser"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("ApplyNote",$param) and $param["ApplyNote"] !== null) {
            $this->ApplyNote = $param["ApplyNote"];
        }

        if (array_key_exists("ApprovalStatus",$param) and $param["ApprovalStatus"] !== null) {
            $this->ApprovalStatus = $param["ApprovalStatus"];
        }

        if (array_key_exists("ApprovalUser",$param) and $param["ApprovalUser"] !== null) {
            $this->ApprovalUser = $param["ApprovalUser"];
        }

        if (array_key_exists("ApprovalTime",$param) and $param["ApprovalTime"] !== null) {
            $this->ApprovalTime = $param["ApprovalTime"];
        }

        if (array_key_exists("ApprovalNote",$param) and $param["ApprovalNote"] !== null) {
            $this->ApprovalNote = $param["ApprovalNote"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationLogo",$param) and $param["ApplicationLogo"] !== null) {
            $this->ApplicationLogo = $param["ApplicationLogo"];
        }

        if (array_key_exists("APIType",$param) and $param["APIType"] !== null) {
            $this->APIType = $param["APIType"];
        }

        if (array_key_exists("APIDesc",$param) and $param["APIDesc"] !== null) {
            $this->APIDesc = $param["APIDesc"];
        }
    }
}
