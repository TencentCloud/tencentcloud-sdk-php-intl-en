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
 * Mini program approval information
 *
 * @method string getAuditNo() Obtain <p>Approval number.</p>
 * @method void setAuditNo(string $AuditNo) Set <p>Approval number.</p>
 * @method string getMNPId() Obtain <p>Mini program appid.</p>
 * @method void setMNPId(string $MNPId) Set <p>Mini program appid.</p>
 * @method string getMNPName() Obtain <p>Mini program name.</p>
 * @method void setMNPName(string $MNPName) Set <p>Mini program name.</p>
 * @method string getMNPIcon() Obtain <p>Mini program icon.</p>
 * @method void setMNPIcon(string $MNPIcon) Set <p>Mini program icon.</p>
 * @method string getMNPType() Obtain <p>Mini program category.</p>
 * @method void setMNPType(string $MNPType) Set <p>Mini program category.</p>
 * @method string getMNPIntro() Obtain <p>Introduction.</p>
 * @method void setMNPIntro(string $MNPIntro) Set <p>Introduction.</p>
 * @method string getMNPVersion() Obtain <p>Mini program version.</p>
 * @method void setMNPVersion(string $MNPVersion) Set <p>Mini program version.</p>
 * @method string getMNPVersionIntro() Obtain <p>Version description.</p>
 * @method void setMNPVersionIntro(string $MNPVersionIntro) Set <p>Version description.</p>
 * @method string getApplyUser() Obtain <p>Applicant.</p>
 * @method void setApplyUser(string $ApplyUser) Set <p>Applicant.</p>
 * @method string getApplyTime() Obtain <p>Application time.</p>
 * @method void setApplyTime(string $ApplyTime) Set <p>Application time.</p>
 * @method string getAuditUser() Obtain <p>Approver.</p>
 * @method void setAuditUser(string $AuditUser) Set <p>Approver.</p>
 * @method string getAuditTime() Obtain <p>Approval time.</p>
 * @method void setAuditTime(string $AuditTime) Set <p>Approval time.</p>
 * @method integer getAuditStatus() Obtain <p>Approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.</p>
 * @method void setAuditStatus(integer $AuditStatus) Set <p>Approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.</p>
 * @method integer getMNPRelAppCount() Obtain <p>Number of associated superapps.</p>
 * @method void setMNPRelAppCount(integer $MNPRelAppCount) Set <p>Number of associated superapps.</p>
 * @method array getAgeRatings() Obtain <p>Age rating information.</p>
 * @method void setAgeRatings(array $AgeRatings) Set <p>Age rating information.</p>
 * @method array getAuditAppList() Obtain <p>Superapp approval information.</p>
 * @method void setAuditAppList(array $AuditAppList) Set <p>Superapp approval information.</p>
 * @method integer getMNPVersionId() Obtain <p>Mini program version ID.</p>
 * @method void setMNPVersionId(integer $MNPVersionId) Set <p>Mini program version ID.</p>
 * @method integer getIsAutoAudit() Obtain <p>Whether it is an auto approval. Valid values: 0 (No), 1 (Yes).</p>
 * @method void setIsAutoAudit(integer $IsAutoAudit) Set <p>Whether it is an auto approval. Valid values: 0 (No), 1 (Yes).</p>
 */
class DescribeMNPVersionAuditInfoResp extends AbstractModel
{
    /**
     * @var string <p>Approval number.</p>
     */
    public $AuditNo;

    /**
     * @var string <p>Mini program appid.</p>
     */
    public $MNPId;

    /**
     * @var string <p>Mini program name.</p>
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
     * @var string <p>Introduction.</p>
     */
    public $MNPIntro;

    /**
     * @var string <p>Mini program version.</p>
     */
    public $MNPVersion;

    /**
     * @var string <p>Version description.</p>
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
     * @var string <p>Approval time.</p>
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
     * @var array <p>Age rating information.</p>
     */
    public $AgeRatings;

    /**
     * @var array <p>Superapp approval information.</p>
     */
    public $AuditAppList;

    /**
     * @var integer <p>Mini program version ID.</p>
     */
    public $MNPVersionId;

    /**
     * @var integer <p>Whether it is an auto approval. Valid values: 0 (No), 1 (Yes).</p>
     */
    public $IsAutoAudit;

    /**
     * @param string $AuditNo <p>Approval number.</p>
     * @param string $MNPId <p>Mini program appid.</p>
     * @param string $MNPName <p>Mini program name.</p>
     * @param string $MNPIcon <p>Mini program icon.</p>
     * @param string $MNPType <p>Mini program category.</p>
     * @param string $MNPIntro <p>Introduction.</p>
     * @param string $MNPVersion <p>Mini program version.</p>
     * @param string $MNPVersionIntro <p>Version description.</p>
     * @param string $ApplyUser <p>Applicant.</p>
     * @param string $ApplyTime <p>Application time.</p>
     * @param string $AuditUser <p>Approver.</p>
     * @param string $AuditTime <p>Approval time.</p>
     * @param integer $AuditStatus <p>Approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.</p>
     * @param integer $MNPRelAppCount <p>Number of associated superapps.</p>
     * @param array $AgeRatings <p>Age rating information.</p>
     * @param array $AuditAppList <p>Superapp approval information.</p>
     * @param integer $MNPVersionId <p>Mini program version ID.</p>
     * @param integer $IsAutoAudit <p>Whether it is an auto approval. Valid values: 0 (No), 1 (Yes).</p>
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

        if (array_key_exists("AgeRatings",$param) and $param["AgeRatings"] !== null) {
            $this->AgeRatings = [];
            foreach ($param["AgeRatings"] as $key => $value){
                $obj = new AgeRatingItem();
                $obj->deserialize($value);
                array_push($this->AgeRatings, $obj);
            }
        }

        if (array_key_exists("AuditAppList",$param) and $param["AuditAppList"] !== null) {
            $this->AuditAppList = [];
            foreach ($param["AuditAppList"] as $key => $value){
                $obj = new DescribeMNPAuditListAppInfoResp();
                $obj->deserialize($value);
                array_push($this->AuditAppList, $obj);
            }
        }

        if (array_key_exists("MNPVersionId",$param) and $param["MNPVersionId"] !== null) {
            $this->MNPVersionId = $param["MNPVersionId"];
        }

        if (array_key_exists("IsAutoAudit",$param) and $param["IsAutoAudit"] !== null) {
            $this->IsAutoAudit = $param["IsAutoAudit"];
        }
    }
}
