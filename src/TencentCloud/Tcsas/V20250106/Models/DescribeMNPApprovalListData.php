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
 * @method string getApprovalNo() Obtain <p>Approval number.</p>
 * @method void setApprovalNo(string $ApprovalNo) Set <p>Approval number.</p>
 * @method string getApplicationId() Obtain <p>Superapp ID.</p>
 * @method void setApplicationId(string $ApplicationId) Set <p>Superapp ID.</p>
 * @method integer getApprovalStatus() Obtain <p>Approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.</p>
 * @method void setApprovalStatus(integer $ApprovalStatus) Set <p>Approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.</p>
 * @method string getMNPId() Obtain <p>Mini program appid.</p>
 * @method void setMNPId(string $MNPId) Set <p>Mini program appid.</p>
 * @method string getMNPVersion() Obtain <p>Mini program version.</p>
 * @method void setMNPVersion(string $MNPVersion) Set <p>Mini program version.</p>
 * @method integer getMNPVersionId() Obtain <p>Mini program version ID.</p>
 * @method void setMNPVersionId(integer $MNPVersionId) Set <p>Mini program version ID.</p>
 * @method string getApplyUser() Obtain <p>Applicant.</p>
 * @method void setApplyUser(string $ApplyUser) Set <p>Applicant.</p>
 * @method string getApplyTime() Obtain <p>Application time.</p>
 * @method void setApplyTime(string $ApplyTime) Set <p>Application time.</p>
 * @method string getMNPName() Obtain <p>Mini program name.</p>
 * @method void setMNPName(string $MNPName) Set <p>Mini program name.</p>
 * @method string getMNPIcon() Obtain <p>Mini program icon.</p>
 * @method void setMNPIcon(string $MNPIcon) Set <p>Mini program icon.</p>
 * @method string getApplicationName() Obtain <p>Superapp name.</p>
 * @method void setApplicationName(string $ApplicationName) Set <p>Superapp name.</p>
 * @method string getApplicationLogo() Obtain <p>Superapp icon.</p>
 * @method void setApplicationLogo(string $ApplicationLogo) Set <p>Superapp icon.</p>
 * @method string getTeamId() Obtain <p>Team ID.</p>
 * @method void setTeamId(string $TeamId) Set <p>Team ID.</p>
 * @method string getTeamName() Obtain <p>Team name.</p>
 * @method void setTeamName(string $TeamName) Set <p>Team name.</p>
 * @method string getMNPQrCodeUrl() Obtain <p>Mini program approval QR code URL.</p>
 * @method void setMNPQrCodeUrl(string $MNPQrCodeUrl) Set <p>Mini program approval QR code URL.</p>
 * @method string getMNPType() Obtain <p>Mini program category.</p>
 * @method void setMNPType(string $MNPType) Set <p>Mini program category.</p>
 * @method string getApprovalUser() Obtain <p>Approver.</p>
 * @method void setApprovalUser(string $ApprovalUser) Set <p>Approver.</p>
 * @method string getApprovalTime() Obtain <p>Approval time.</p>
 * @method void setApprovalTime(string $ApprovalTime) Set <p>Approval time.</p>
 * @method string getApprovalNote() Obtain <p>Approval note.</p>
 * @method void setApprovalNote(string $ApprovalNote) Set <p>Approval note.</p>
 * @method array getAgeRatings() Obtain <p>Age rating information.</p>
 * @method void setAgeRatings(array $AgeRatings) Set <p>Age rating information.</p>
 */
class DescribeMNPApprovalListData extends AbstractModel
{
    /**
     * @var string <p>Approval number.</p>
     */
    public $ApprovalNo;

    /**
     * @var string <p>Superapp ID.</p>
     */
    public $ApplicationId;

    /**
     * @var integer <p>Approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.</p>
     */
    public $ApprovalStatus;

    /**
     * @var string <p>Mini program appid.</p>
     */
    public $MNPId;

    /**
     * @var string <p>Mini program version.</p>
     */
    public $MNPVersion;

    /**
     * @var integer <p>Mini program version ID.</p>
     */
    public $MNPVersionId;

    /**
     * @var string <p>Applicant.</p>
     */
    public $ApplyUser;

    /**
     * @var string <p>Application time.</p>
     */
    public $ApplyTime;

    /**
     * @var string <p>Mini program name.</p>
     */
    public $MNPName;

    /**
     * @var string <p>Mini program icon.</p>
     */
    public $MNPIcon;

    /**
     * @var string <p>Superapp name.</p>
     */
    public $ApplicationName;

    /**
     * @var string <p>Superapp icon.</p>
     */
    public $ApplicationLogo;

    /**
     * @var string <p>Team ID.</p>
     */
    public $TeamId;

    /**
     * @var string <p>Team name.</p>
     */
    public $TeamName;

    /**
     * @var string <p>Mini program approval QR code URL.</p>
     */
    public $MNPQrCodeUrl;

    /**
     * @var string <p>Mini program category.</p>
     */
    public $MNPType;

    /**
     * @var string <p>Approver.</p>
     */
    public $ApprovalUser;

    /**
     * @var string <p>Approval time.</p>
     */
    public $ApprovalTime;

    /**
     * @var string <p>Approval note.</p>
     */
    public $ApprovalNote;

    /**
     * @var array <p>Age rating information.</p>
     */
    public $AgeRatings;

    /**
     * @param string $ApprovalNo <p>Approval number.</p>
     * @param string $ApplicationId <p>Superapp ID.</p>
     * @param integer $ApprovalStatus <p>Approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.</p>
     * @param string $MNPId <p>Mini program appid.</p>
     * @param string $MNPVersion <p>Mini program version.</p>
     * @param integer $MNPVersionId <p>Mini program version ID.</p>
     * @param string $ApplyUser <p>Applicant.</p>
     * @param string $ApplyTime <p>Application time.</p>
     * @param string $MNPName <p>Mini program name.</p>
     * @param string $MNPIcon <p>Mini program icon.</p>
     * @param string $ApplicationName <p>Superapp name.</p>
     * @param string $ApplicationLogo <p>Superapp icon.</p>
     * @param string $TeamId <p>Team ID.</p>
     * @param string $TeamName <p>Team name.</p>
     * @param string $MNPQrCodeUrl <p>Mini program approval QR code URL.</p>
     * @param string $MNPType <p>Mini program category.</p>
     * @param string $ApprovalUser <p>Approver.</p>
     * @param string $ApprovalTime <p>Approval time.</p>
     * @param string $ApprovalNote <p>Approval note.</p>
     * @param array $AgeRatings <p>Age rating information.</p>
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

        if (array_key_exists("AgeRatings",$param) and $param["AgeRatings"] !== null) {
            $this->AgeRatings = [];
            foreach ($param["AgeRatings"] as $key => $value){
                $obj = new AgeRatingItem();
                $obj->deserialize($value);
                array_push($this->AgeRatings, $obj);
            }
        }
    }
}
