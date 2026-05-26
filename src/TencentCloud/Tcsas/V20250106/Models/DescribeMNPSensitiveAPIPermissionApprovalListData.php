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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List data for querying mini program sensitive API permission approvals.
 *
 * @method string getApprovalNo() Obtain Approval number.
 * @method void setApprovalNo(string $ApprovalNo) Set Approval number.
 * @method string getAPIId() Obtain Sensitive API ID.
 * @method void setAPIId(string $APIId) Set Sensitive API ID.
 * @method string getAPIName() Obtain API name.
 * @method void setAPIName(string $APIName) Set API name.
 * @method string getAPIMethod() Obtain API method.
 * @method void setAPIMethod(string $APIMethod) Set API method.
 * @method string getMNPId() Obtain Mini program appid.
 * @method void setMNPId(string $MNPId) Set Mini program appid.
 * @method string getMNPName() Obtain Mini program name.
 * @method void setMNPName(string $MNPName) Set Mini program name.
 * @method string getApplyUser() Obtain Applicant.
 * @method void setApplyUser(string $ApplyUser) Set Applicant.
 * @method string getApplyTime() Obtain Application time.
 * @method void setApplyTime(string $ApplyTime) Set Application time.
 * @method string getApplyNote() Obtain Application note.
 * @method void setApplyNote(string $ApplyNote) Set Application note.
 * @method integer getApprovalStatus() Obtain Approval status. Valid values: 1: Processing; 20: Rejected; 30: Approved.
 * @method void setApprovalStatus(integer $ApprovalStatus) Set Approval status. Valid values: 1: Processing; 20: Rejected; 30: Approved.
 * @method string getApprovalUser() Obtain Approver.
 * @method void setApprovalUser(string $ApprovalUser) Set Approver.
 * @method string getApprovalTime() Obtain Approval time.
 * @method void setApprovalTime(string $ApprovalTime) Set Approval time.
 * @method string getApprovalNote() Obtain Approval note.
 * @method void setApprovalNote(string $ApprovalNote) Set Approval note.
 * @method string getApplicationId() Obtain Superapp ID.
 * @method void setApplicationId(string $ApplicationId) Set Superapp ID.
 * @method string getApplicationName() Obtain Superapp name.
 * @method void setApplicationName(string $ApplicationName) Set Superapp name.
 * @method string getApplicationLogo() Obtain Superapp icon.
 * @method void setApplicationLogo(string $ApplicationLogo) Set Superapp icon.
 * @method integer getAPIType() Obtain API type. Valid values: 1: System; 2: Custom.
 * @method void setAPIType(integer $APIType) Set API type. Valid values: 1: System; 2: Custom.
 * @method string getAPIDesc() Obtain API feature description.
 * @method void setAPIDesc(string $APIDesc) Set API feature description.
 */
class DescribeMNPSensitiveAPIPermissionApprovalListData extends AbstractModel
{
    /**
     * @var string Approval number.
     */
    public $ApprovalNo;

    /**
     * @var string Sensitive API ID.
     */
    public $APIId;

    /**
     * @var string API name.
     */
    public $APIName;

    /**
     * @var string API method.
     */
    public $APIMethod;

    /**
     * @var string Mini program appid.
     */
    public $MNPId;

    /**
     * @var string Mini program name.
     */
    public $MNPName;

    /**
     * @var string Applicant.
     */
    public $ApplyUser;

    /**
     * @var string Application time.
     */
    public $ApplyTime;

    /**
     * @var string Application note.
     */
    public $ApplyNote;

    /**
     * @var integer Approval status. Valid values: 1: Processing; 20: Rejected; 30: Approved.
     */
    public $ApprovalStatus;

    /**
     * @var string Approver.
     */
    public $ApprovalUser;

    /**
     * @var string Approval time.
     */
    public $ApprovalTime;

    /**
     * @var string Approval note.
     */
    public $ApprovalNote;

    /**
     * @var string Superapp ID.
     */
    public $ApplicationId;

    /**
     * @var string Superapp name.
     */
    public $ApplicationName;

    /**
     * @var string Superapp icon.
     */
    public $ApplicationLogo;

    /**
     * @var integer API type. Valid values: 1: System; 2: Custom.
     */
    public $APIType;

    /**
     * @var string API feature description.
     */
    public $APIDesc;

    /**
     * @param string $ApprovalNo Approval number.
     * @param string $APIId Sensitive API ID.
     * @param string $APIName API name.
     * @param string $APIMethod API method.
     * @param string $MNPId Mini program appid.
     * @param string $MNPName Mini program name.
     * @param string $ApplyUser Applicant.
     * @param string $ApplyTime Application time.
     * @param string $ApplyNote Application note.
     * @param integer $ApprovalStatus Approval status. Valid values: 1: Processing; 20: Rejected; 30: Approved.
     * @param string $ApprovalUser Approver.
     * @param string $ApprovalTime Approval time.
     * @param string $ApprovalNote Approval note.
     * @param string $ApplicationId Superapp ID.
     * @param string $ApplicationName Superapp name.
     * @param string $ApplicationLogo Superapp icon.
     * @param integer $APIType API type. Valid values: 1: System; 2: Custom.
     * @param string $APIDesc API feature description.
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
