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
 * Mini game approval application details
 *
 * @method string getAuditNo() Obtain <p>Approval number.</p>
 * @method void setAuditNo(string $AuditNo) Set <p>Approval number.</p>
 * @method string getMNPId() Obtain <p>Mini program or mini game appid.</p>
 * @method void setMNPId(string $MNPId) Set <p>Mini program or mini game appid.</p>
 * @method string getMNPName() Obtain <p>Mini program or mini game name.</p>
 * @method void setMNPName(string $MNPName) Set <p>Mini program or mini game name.</p>
 * @method string getMNPIcon() Obtain <p>Mini program icon.</p>
 * @method void setMNPIcon(string $MNPIcon) Set <p>Mini program icon.</p>
 * @method string getMNPType() Obtain <p>Mini program category.</p>
 * @method void setMNPType(string $MNPType) Set <p>Mini program category.</p>
 * @method string getMNPIntro() Obtain <p>Mini program introduction.</p>
 * @method void setMNPIntro(string $MNPIntro) Set <p>Mini program introduction.</p>
 * @method string getMNPVersion() Obtain <p>Mini program version.</p>
 * @method void setMNPVersion(string $MNPVersion) Set <p>Mini program version.</p>
 * @method string getMNPVersionIntro() Obtain <p>Mini program version introduction.</p>
 * @method void setMNPVersionIntro(string $MNPVersionIntro) Set <p>Mini program version introduction.</p>
 * @method string getApplyUser() Obtain <p>Applicant.</p>
 * @method void setApplyUser(string $ApplyUser) Set <p>Applicant.</p>
 * @method string getApplyTime() Obtain <p>Application time.</p>
 * @method void setApplyTime(string $ApplyTime) Set <p>Application time.</p>
 * @method string getAuditUser() Obtain <p>Approver.</p>
 * @method void setAuditUser(string $AuditUser) Set <p>Approver.</p>
 * @method string getAuditTime() Obtain <p>Creation time.</p>
 * @method void setAuditTime(string $AuditTime) Set <p>Creation time.</p>
 * @method integer getAuditStatus() Obtain <p>Approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.</p>
 * @method void setAuditStatus(integer $AuditStatus) Set <p>Approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.</p>
 * @method integer getMNPRelAppCount() Obtain <p>Number of associated superapps.</p>
 * @method void setMNPRelAppCount(integer $MNPRelAppCount) Set <p>Number of associated superapps.</p>
 * @method string getQRCodeContent() Obtain <p>Information encoded in the mini program QR code.</p>
 * @method void setQRCodeContent(string $QRCodeContent) Set <p>Information encoded in the mini program QR code.</p>
 * @method string getAuditNote() Obtain <p>Approval note.</p>
 * @method void setAuditNote(string $AuditNote) Set <p>Approval note.</p>
 * @method integer getMNPVersionId() Obtain <p>Mini program version ID.</p>
 * @method void setMNPVersionId(integer $MNPVersionId) Set <p>Mini program version ID.</p>
 * @method array getAgeRatings() Obtain <p>Age rating information.</p>
 * @method void setAgeRatings(array $AgeRatings) Set <p>Age rating information.</p>
 * @method array getAppAuditList() Obtain <p>Superapp approval information.</p>
 * @method void setAppAuditList(array $AppAuditList) Set <p>Superapp approval information.</p>
 */
class DescribeMNGVersionAuditDetailResp extends AbstractModel
{
    /**
     * @var string <p>Approval number.</p>
     */
    public $AuditNo;

    /**
     * @var string <p>Mini program or mini game appid.</p>
     */
    public $MNPId;

    /**
     * @var string <p>Mini program or mini game name.</p>
     */
    public $MNPName;

    /**
     * @var string <p>Mini program icon.</p>
     */
    public $MNPIcon;

    /**
     * @var string <p>Mini program category.</p>
     */
    public $MNPType;

    /**
     * @var string <p>Mini program introduction.</p>
     */
    public $MNPIntro;

    /**
     * @var string <p>Mini program version.</p>
     */
    public $MNPVersion;

    /**
     * @var string <p>Mini program version introduction.</p>
     */
    public $MNPVersionIntro;

    /**
     * @var string <p>Applicant.</p>
     */
    public $ApplyUser;

    /**
     * @var string <p>Application time.</p>
     */
    public $ApplyTime;

    /**
     * @var string <p>Approver.</p>
     */
    public $AuditUser;

    /**
     * @var string <p>Creation time.</p>
     */
    public $AuditTime;

    /**
     * @var integer <p>Approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.</p>
     */
    public $AuditStatus;

    /**
     * @var integer <p>Number of associated superapps.</p>
     */
    public $MNPRelAppCount;

    /**
     * @var string <p>Information encoded in the mini program QR code.</p>
     */
    public $QRCodeContent;

    /**
     * @var string <p>Approval note.</p>
     */
    public $AuditNote;

    /**
     * @var integer <p>Mini program version ID.</p>
     */
    public $MNPVersionId;

    /**
     * @var array <p>Age rating information.</p>
     */
    public $AgeRatings;

    /**
     * @var array <p>Superapp approval information.</p>
     */
    public $AppAuditList;

    /**
     * @param string $AuditNo <p>Approval number.</p>
     * @param string $MNPId <p>Mini program or mini game appid.</p>
     * @param string $MNPName <p>Mini program or mini game name.</p>
     * @param string $MNPIcon <p>Mini program icon.</p>
     * @param string $MNPType <p>Mini program category.</p>
     * @param string $MNPIntro <p>Mini program introduction.</p>
     * @param string $MNPVersion <p>Mini program version.</p>
     * @param string $MNPVersionIntro <p>Mini program version introduction.</p>
     * @param string $ApplyUser <p>Applicant.</p>
     * @param string $ApplyTime <p>Application time.</p>
     * @param string $AuditUser <p>Approver.</p>
     * @param string $AuditTime <p>Creation time.</p>
     * @param integer $AuditStatus <p>Approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.</p>
     * @param integer $MNPRelAppCount <p>Number of associated superapps.</p>
     * @param string $QRCodeContent <p>Information encoded in the mini program QR code.</p>
     * @param string $AuditNote <p>Approval note.</p>
     * @param integer $MNPVersionId <p>Mini program version ID.</p>
     * @param array $AgeRatings <p>Age rating information.</p>
     * @param array $AppAuditList <p>Superapp approval information.</p>
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
        if (array_key_exists("AuditNo",$param) and $param["AuditNo"] !== null) {
            $this->AuditNo = $param["AuditNo"];
        }

        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("MNPName",$param) and $param["MNPName"] !== null) {
            $this->MNPName = $param["MNPName"];
        }

        if (array_key_exists("MNPIcon",$param) and $param["MNPIcon"] !== null) {
            $this->MNPIcon = $param["MNPIcon"];
        }

        if (array_key_exists("MNPType",$param) and $param["MNPType"] !== null) {
            $this->MNPType = $param["MNPType"];
        }

        if (array_key_exists("MNPIntro",$param) and $param["MNPIntro"] !== null) {
            $this->MNPIntro = $param["MNPIntro"];
        }

        if (array_key_exists("MNPVersion",$param) and $param["MNPVersion"] !== null) {
            $this->MNPVersion = $param["MNPVersion"];
        }

        if (array_key_exists("MNPVersionIntro",$param) and $param["MNPVersionIntro"] !== null) {
            $this->MNPVersionIntro = $param["MNPVersionIntro"];
        }

        if (array_key_exists("ApplyUser",$param) and $param["ApplyUser"] !== null) {
            $this->ApplyUser = $param["ApplyUser"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("AuditUser",$param) and $param["AuditUser"] !== null) {
            $this->AuditUser = $param["AuditUser"];
        }

        if (array_key_exists("AuditTime",$param) and $param["AuditTime"] !== null) {
            $this->AuditTime = $param["AuditTime"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("MNPRelAppCount",$param) and $param["MNPRelAppCount"] !== null) {
            $this->MNPRelAppCount = $param["MNPRelAppCount"];
        }

        if (array_key_exists("QRCodeContent",$param) and $param["QRCodeContent"] !== null) {
            $this->QRCodeContent = $param["QRCodeContent"];
        }

        if (array_key_exists("AuditNote",$param) and $param["AuditNote"] !== null) {
            $this->AuditNote = $param["AuditNote"];
        }

        if (array_key_exists("MNPVersionId",$param) and $param["MNPVersionId"] !== null) {
            $this->MNPVersionId = $param["MNPVersionId"];
        }

        if (array_key_exists("AgeRatings",$param) and $param["AgeRatings"] !== null) {
            $this->AgeRatings = [];
            foreach ($param["AgeRatings"] as $key => $value){
                $obj = new AgeRatingItem();
                $obj->deserialize($value);
                array_push($this->AgeRatings, $obj);
            }
        }

        if (array_key_exists("AppAuditList",$param) and $param["AppAuditList"] !== null) {
            $this->AppAuditList = [];
            foreach ($param["AppAuditList"] as $key => $value){
                $obj = new DescribeMNGAuditDetailAppAuditInfo();
                $obj->deserialize($value);
                array_push($this->AppAuditList, $obj);
            }
        }
    }
}
