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
 * Mini program approval list information.
 *
 * @method string getApprovalNo() Obtain Approval number.
 * @method void setApprovalNo(string $ApprovalNo) Set Approval number.
 * @method string getApplicationId() Obtain Superapp ID.
 * @method void setApplicationId(string $ApplicationId) Set Superapp ID.
 * @method integer getApprovalStatus() Obtain Approval status. Valid values: 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.
 * @method void setApprovalStatus(integer $ApprovalStatus) Set Approval status. Valid values: 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.
 * @method string getMNPId() Obtain Mini program appid.
 * @method void setMNPId(string $MNPId) Set Mini program appid.
 * @method string getMNPVersion() Obtain Mini program version.
 * @method void setMNPVersion(string $MNPVersion) Set Mini program version.
 * @method integer getMNPVersionId() Obtain Mini program version ID.
 * @method void setMNPVersionId(integer $MNPVersionId) Set Mini program version ID.
 * @method string getApplyUser() Obtain Applicant.
 * @method void setApplyUser(string $ApplyUser) Set Applicant.
 * @method string getApplyTime() Obtain Application time.
 * @method void setApplyTime(string $ApplyTime) Set Application time.
 * @method string getMNPName() Obtain Mini program name.
 * @method void setMNPName(string $MNPName) Set Mini program name.
 * @method string getMNPIcon() Obtain Mini program icon.
 * @method void setMNPIcon(string $MNPIcon) Set Mini program icon.
 * @method string getApplicationName() Obtain Superapp name.
 * @method void setApplicationName(string $ApplicationName) Set Superapp name.
 * @method string getApplicationLogo() Obtain Superapp icon.
 * @method void setApplicationLogo(string $ApplicationLogo) Set Superapp icon.
 * @method string getTeamId() Obtain Team ID.
 * @method void setTeamId(string $TeamId) Set Team ID.
 * @method string getTeamName() Obtain Team name.
 * @method void setTeamName(string $TeamName) Set Team name.
 * @method string getMNPQrCodeUrl() Obtain Mini program approval QR code URL.
 * @method void setMNPQrCodeUrl(string $MNPQrCodeUrl) Set Mini program approval QR code URL.
 * @method string getMNPType() Obtain Mini program category.
 * @method void setMNPType(string $MNPType) Set Mini program category.
 * @method string getApprovalUser() Obtain Approver.
 * @method void setApprovalUser(string $ApprovalUser) Set Approver.
 * @method string getApprovalTime() Obtain Approval time.
 * @method void setApprovalTime(string $ApprovalTime) Set Approval time.
 * @method string getApprovalNote() Obtain Approval note.
 * @method void setApprovalNote(string $ApprovalNote) Set Approval note.
 */
class DescribeMNPApprovalListData extends AbstractModel
{
    /**
     * @var string Approval number.
     */
    public $ApprovalNo;

    /**
     * @var string Superapp ID.
     */
    public $ApplicationId;

    /**
     * @var integer Approval status. Valid values: 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.
     */
    public $ApprovalStatus;

    /**
     * @var string Mini program appid.
     */
    public $MNPId;

    /**
     * @var string Mini program version.
     */
    public $MNPVersion;

    /**
     * @var integer Mini program version ID.
     */
    public $MNPVersionId;

    /**
     * @var string Applicant.
     */
    public $ApplyUser;

    /**
     * @var string Application time.
     */
    public $ApplyTime;

    /**
     * @var string Mini program name.
     */
    public $MNPName;

    /**
     * @var string Mini program icon.
     */
    public $MNPIcon;

    /**
     * @var string Superapp name.
     */
    public $ApplicationName;

    /**
     * @var string Superapp icon.
     */
    public $ApplicationLogo;

    /**
     * @var string Team ID.
     */
    public $TeamId;

    /**
     * @var string Team name.
     */
    public $TeamName;

    /**
     * @var string Mini program approval QR code URL.
     */
    public $MNPQrCodeUrl;

    /**
     * @var string Mini program category.
     */
    public $MNPType;

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
     * @param string $ApprovalNo Approval number.
     * @param string $ApplicationId Superapp ID.
     * @param integer $ApprovalStatus Approval status. Valid values: 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.
     * @param string $MNPId Mini program appid.
     * @param string $MNPVersion Mini program version.
     * @param integer $MNPVersionId Mini program version ID.
     * @param string $ApplyUser Applicant.
     * @param string $ApplyTime Application time.
     * @param string $MNPName Mini program name.
     * @param string $MNPIcon Mini program icon.
     * @param string $ApplicationName Superapp name.
     * @param string $ApplicationLogo Superapp icon.
     * @param string $TeamId Team ID.
     * @param string $TeamName Team name.
     * @param string $MNPQrCodeUrl Mini program approval QR code URL.
     * @param string $MNPType Mini program category.
     * @param string $ApprovalUser Approver.
     * @param string $ApprovalTime Approval time.
     * @param string $ApprovalNote Approval note.
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
