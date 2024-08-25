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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of mini program approval requests of the application
 *
 * @method string getApprovalNo() Obtain Approval request ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApprovalNo(string $ApprovalNo) Set Approval request ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationId() Obtain Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationId(string $ApplicationId) Set Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getApprovalStatus() Obtain Approval status : 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApprovalStatus(integer $ApprovalStatus) Set Approval status : 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPId() Obtain Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPId(string $MNPId) Set Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPVersion() Obtain Mini program version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPVersion(string $MNPVersion) Set Mini program version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMNPVersionId() Obtain Mini program version ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPVersionId(integer $MNPVersionId) Set Mini program version ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplyUser() Obtain Applicant
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplyUser(string $ApplyUser) Set Applicant
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplyTime() Obtain Application time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplyTime(string $ApplyTime) Set Application time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPName() Obtain Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPName(string $MNPName) Set Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPIcon() Obtain Mini program icon
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPIcon(string $MNPIcon) Set Mini program icon
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain Application name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set Application name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationLogo() Obtain Application icon
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationLogo(string $ApplicationLogo) Set Application icon
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTeamId() Obtain Team ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamId(string $TeamId) Set Team ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTeamName() Obtain Team name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamName(string $TeamName) Set Team name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPQrCodeUrl() Obtain Mini Program QR code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPQrCodeUrl(string $MNPQrCodeUrl) Set Mini Program QR code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPType() Obtain Mini program type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPType(string $MNPType) Set Mini program type
Note: This field may return null, indicating that no valid values can be obtained.
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
 */
class DescribeMNPApprovalListData extends AbstractModel
{
    /**
     * @var string Approval request ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApprovalNo;

    /**
     * @var string Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationId;

    /**
     * @var integer Approval status : 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApprovalStatus;

    /**
     * @var string Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPId;

    /**
     * @var string Mini program version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPVersion;

    /**
     * @var integer Mini program version ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPVersionId;

    /**
     * @var string Applicant
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplyUser;

    /**
     * @var string Application time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplyTime;

    /**
     * @var string Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPName;

    /**
     * @var string Mini program icon
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPIcon;

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
     * @var string Team ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeamId;

    /**
     * @var string Team name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeamName;

    /**
     * @var string Mini Program QR code
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPQrCodeUrl;

    /**
     * @var string Mini program type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPType;

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
     * @param string $ApprovalNo Approval request ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationId Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ApprovalStatus Approval status : 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPId Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPVersion Mini program version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MNPVersionId Mini program version ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplyUser Applicant
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplyTime Application time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPName Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPIcon Mini program icon
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationName Application name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationLogo Application icon
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TeamId Team ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TeamName Team name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPQrCodeUrl Mini Program QR code
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPType Mini program type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApprovalUser Approver
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApprovalTime Approval time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApprovalNote Approval notes
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

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApprovalStatus",$param) and $param["ApprovalStatus"] !== null) {
            $this->ApprovalStatus = $param["ApprovalStatus"];
        }

        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("MNPVersion",$param) and $param["MNPVersion"] !== null) {
            $this->MNPVersion = $param["MNPVersion"];
        }

        if (array_key_exists("MNPVersionId",$param) and $param["MNPVersionId"] !== null) {
            $this->MNPVersionId = $param["MNPVersionId"];
        }

        if (array_key_exists("ApplyUser",$param) and $param["ApplyUser"] !== null) {
            $this->ApplyUser = $param["ApplyUser"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("MNPName",$param) and $param["MNPName"] !== null) {
            $this->MNPName = $param["MNPName"];
        }

        if (array_key_exists("MNPIcon",$param) and $param["MNPIcon"] !== null) {
            $this->MNPIcon = $param["MNPIcon"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationLogo",$param) and $param["ApplicationLogo"] !== null) {
            $this->ApplicationLogo = $param["ApplicationLogo"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("TeamName",$param) and $param["TeamName"] !== null) {
            $this->TeamName = $param["TeamName"];
        }

        if (array_key_exists("MNPQrCodeUrl",$param) and $param["MNPQrCodeUrl"] !== null) {
            $this->MNPQrCodeUrl = $param["MNPQrCodeUrl"];
        }

        if (array_key_exists("MNPType",$param) and $param["MNPType"] !== null) {
            $this->MNPType = $param["MNPType"];
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
    }
}
