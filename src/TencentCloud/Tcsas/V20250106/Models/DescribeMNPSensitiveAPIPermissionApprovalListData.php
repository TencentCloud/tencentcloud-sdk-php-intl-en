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
 * @method string getApprovalUser() Obtain Specifies the review user.
 * @method void setApprovalUser(string $ApprovalUser) Set Specifies the review user.
 * @method string getApprovalTime() Obtain Approval time.
 * @method void setApprovalTime(string $ApprovalTime) Set Approval time.
 * @method string getApprovalNote() Obtain Approval notes
 * @method void setApprovalNote(string $ApprovalNote) Set Approval notes
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method string getApplicationName() Obtain Application name
 * @method void setApplicationName(string $ApplicationName) Set Application name
 * @method string getApplicationLogo() Obtain Specifies the application icon.
 * @method void setApplicationLogo(string $ApplicationLogo) Set Specifies the application icon.
 * @method integer getAPIType() Obtain API type. 1: system; 2: custom.
 * @method void setAPIType(integer $APIType) Set API type. 1: system; 2: custom.
 * @method string getAPIDesc() Obtain API feature description.
 * @method void setAPIDesc(string $APIDesc) Set API feature description.
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
     * @var string Specifies the review user.
     */
    public $ApprovalUser;

    /**
     * @var string Approval time.
     */
    public $ApprovalTime;

    /**
     * @var string Approval notes
     */
    public $ApprovalNote;

    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var string Application name
     */
    public $ApplicationName;

    /**
     * @var string Specifies the application icon.
     */
    public $ApplicationLogo;

    /**
     * @var integer API type. 1: system; 2: custom.
     */
    public $APIType;

    /**
     * @var string API feature description.
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
     * @param string $ApprovalUser Specifies the review user.
     * @param string $ApprovalTime Approval time.
     * @param string $ApprovalNote Approval notes
     * @param string $ApplicationId Application ID
     * @param string $ApplicationName Application name
     * @param string $ApplicationLogo Specifies the application icon.
     * @param integer $APIType API type. 1: system; 2: custom.
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
