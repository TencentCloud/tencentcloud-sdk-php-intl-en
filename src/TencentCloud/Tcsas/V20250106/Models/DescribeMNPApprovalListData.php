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
 * List of mini program approval requests of the application
 *
 * @method string getApprovalNo() Obtain Approval ticket ID
 * @method void setApprovalNo(string $ApprovalNo) Set Approval ticket ID
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method integer getApprovalStatus() Obtain Approval status. valid values: 1 (processing), 2 (rejected), 3 (approved), 4 (cancelled).
 * @method void setApprovalStatus(integer $ApprovalStatus) Set Approval status. valid values: 1 (processing), 2 (rejected), 3 (approved), 4 (cancelled).
 * @method string getMNPId() Obtain Mini program ID
 * @method void setMNPId(string $MNPId) Set Mini program ID
 * @method string getMNPVersion() Obtain Mini program version.
 * @method void setMNPVersion(string $MNPVersion) Set Mini program version.
 * @method integer getMNPVersionId() Obtain Mini program version ID
 * @method void setMNPVersionId(integer $MNPVersionId) Set Mini program version ID
 * @method string getApplyUser() Obtain Applicant
 * @method void setApplyUser(string $ApplyUser) Set Applicant
 * @method string getApplyTime() Obtain Application time
 * @method void setApplyTime(string $ApplyTime) Set Application time
 * @method string getMNPName() Obtain Mini program name
 * @method void setMNPName(string $MNPName) Set Mini program name
 * @method string getMNPIcon() Obtain Mini program icon
 * @method void setMNPIcon(string $MNPIcon) Set Mini program icon
 * @method string getApplicationName() Obtain Application name
 * @method void setApplicationName(string $ApplicationName) Set Application name
 * @method string getApplicationLogo() Obtain Specifies the application icon.
 * @method void setApplicationLogo(string $ApplicationLogo) Set Specifies the application icon.
 * @method string getTeamId() Obtain Team ID
 * @method void setTeamId(string $TeamId) Set Team ID
 * @method string getTeamName() Obtain Team name
 * @method void setTeamName(string $TeamName) Set Team name
 * @method string getMNPQrCodeUrl() Obtain Mini program review qr code.
 * @method void setMNPQrCodeUrl(string $MNPQrCodeUrl) Set Mini program review qr code.
 * @method string getMNPType() Obtain Mini program type
 * @method void setMNPType(string $MNPType) Set Mini program type
 * @method string getApprovalUser() Obtain Specifies the reviewer.
 * @method void setApprovalUser(string $ApprovalUser) Set Specifies the reviewer.
 * @method string getApprovalTime() Obtain Approval time.
 * @method void setApprovalTime(string $ApprovalTime) Set Approval time.
 * @method string getApprovalNote() Obtain Approval notes
 * @method void setApprovalNote(string $ApprovalNote) Set Approval notes
 */
class DescribeMNPApprovalListData extends AbstractModel
{
    /**
     * @var string Approval ticket ID
     */
    public $ApprovalNo;

    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var integer Approval status. valid values: 1 (processing), 2 (rejected), 3 (approved), 4 (cancelled).
     */
    public $ApprovalStatus;

    /**
     * @var string Mini program ID
     */
    public $MNPId;

    /**
     * @var string Mini program version.
     */
    public $MNPVersion;

    /**
     * @var integer Mini program version ID
     */
    public $MNPVersionId;

    /**
     * @var string Applicant
     */
    public $ApplyUser;

    /**
     * @var string Application time
     */
    public $ApplyTime;

    /**
     * @var string Mini program name
     */
    public $MNPName;

    /**
     * @var string Mini program icon
     */
    public $MNPIcon;

    /**
     * @var string Application name
     */
    public $ApplicationName;

    /**
     * @var string Specifies the application icon.
     */
    public $ApplicationLogo;

    /**
     * @var string Team ID
     */
    public $TeamId;

    /**
     * @var string Team name
     */
    public $TeamName;

    /**
     * @var string Mini program review qr code.
     */
    public $MNPQrCodeUrl;

    /**
     * @var string Mini program type
     */
    public $MNPType;

    /**
     * @var string Specifies the reviewer.
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
     * @param string $ApprovalNo Approval ticket ID
     * @param string $ApplicationId Application ID
     * @param integer $ApprovalStatus Approval status. valid values: 1 (processing), 2 (rejected), 3 (approved), 4 (cancelled).
     * @param string $MNPId Mini program ID
     * @param string $MNPVersion Mini program version.
     * @param integer $MNPVersionId Mini program version ID
     * @param string $ApplyUser Applicant
     * @param string $ApplyTime Application time
     * @param string $MNPName Mini program name
     * @param string $MNPIcon Mini program icon
     * @param string $ApplicationName Application name
     * @param string $ApplicationLogo Specifies the application icon.
     * @param string $TeamId Team ID
     * @param string $TeamName Team name
     * @param string $MNPQrCodeUrl Mini program review qr code.
     * @param string $MNPType Mini program type
     * @param string $ApprovalUser Specifies the reviewer.
     * @param string $ApprovalTime Approval time.
     * @param string $ApprovalNote Approval notes
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
