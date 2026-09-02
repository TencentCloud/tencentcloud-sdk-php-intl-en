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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application form information
 *
 * @method string getOrderId() Obtain Application ID
 * @method void setOrderId(string $OrderId) Set Application ID
 * @method string getIdentifyId() Obtain Identity id.
 * @method void setIdentifyId(string $IdentifyId) Set Identity id.
 * @method DspmUinUser getApplicantUin() Obtain Applicant account uin
 * @method void setApplicantUin(DspmUinUser $ApplicantUin) Set Applicant account uin
 * @method string getAssetId() Obtain Asset ID
 * @method void setAssetId(string $AssetId) Set Asset ID
 * @method string getAssetName() Obtain Asset name
 * @method void setAssetName(string $AssetName) Set Asset name
 * @method string getRegion() Obtain Region of the asset
 * @method void setRegion(string $Region) Set Region of the asset
 * @method integer getApplyType() Obtain Application type. 0: associate an identity. 1: edit an identity. 2: create a temporary identity.
 * @method void setApplyType(integer $ApplyType) Set Application type. 0: associate an identity. 1: edit an identity. 2: create a temporary identity.
 * @method DspmDbAccountPrivilege getPrivilege() Obtain Permission request.
 * @method void setPrivilege(DspmDbAccountPrivilege $Privilege) Set Permission request.
 * @method integer getValidatePeriod() Obtain Access privilege expiration time calculated from when approval is complete. Temporary account validity. Milliseconds.
 * @method void setValidatePeriod(integer $ValidatePeriod) Set Access privilege expiration time calculated from when approval is complete. Temporary account validity. Milliseconds.
 * @method string getReason() Obtain Application reason.
 * @method void setReason(string $Reason) Set Application reason.
 * @method array getApproverSteps() Obtain Approval procedure
 * @method void setApproverSteps(array $ApproverSteps) Set Approval procedure
 * @method integer getManagerType() Obtain Management type. 0: ordinary member; 1: administrator.
 * @method void setManagerType(integer $ManagerType) Set Management type. 0: ordinary member; 1: administrator.
 * @method DspmPersonUser getPerson() Obtain Personal user information
 * @method void setPerson(DspmPersonUser $Person) Set Personal user information
 * @method DspmUinUser getSubjectUser() Obtain Cloud account user information
 * @method void setSubjectUser(DspmUinUser $SubjectUser) Set Cloud account user information
 * @method integer getStatus() Obtain Approval status. 0: Pending approval; 1: Approved; 2: Rejected
 * @method void setStatus(integer $Status) Set Approval status. 0: Pending approval; 1: Approved; 2: Rejected
 * @method string getCreateTime() Obtain Application creation time.
 * @method void setCreateTime(string $CreateTime) Set Application creation time.
 */
class DspmApplyOrder extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $OrderId;

    /**
     * @var string Identity id.
     */
    public $IdentifyId;

    /**
     * @var DspmUinUser Applicant account uin
     */
    public $ApplicantUin;

    /**
     * @var string Asset ID
     */
    public $AssetId;

    /**
     * @var string Asset name
     */
    public $AssetName;

    /**
     * @var string Region of the asset
     */
    public $Region;

    /**
     * @var integer Application type. 0: associate an identity. 1: edit an identity. 2: create a temporary identity.
     */
    public $ApplyType;

    /**
     * @var DspmDbAccountPrivilege Permission request.
     */
    public $Privilege;

    /**
     * @var integer Access privilege expiration time calculated from when approval is complete. Temporary account validity. Milliseconds.
     */
    public $ValidatePeriod;

    /**
     * @var string Application reason.
     */
    public $Reason;

    /**
     * @var array Approval procedure
     */
    public $ApproverSteps;

    /**
     * @var integer Management type. 0: ordinary member; 1: administrator.
     */
    public $ManagerType;

    /**
     * @var DspmPersonUser Personal user information
     */
    public $Person;

    /**
     * @var DspmUinUser Cloud account user information
     */
    public $SubjectUser;

    /**
     * @var integer Approval status. 0: Pending approval; 1: Approved; 2: Rejected
     */
    public $Status;

    /**
     * @var string Application creation time.
     */
    public $CreateTime;

    /**
     * @param string $OrderId Application ID
     * @param string $IdentifyId Identity id.
     * @param DspmUinUser $ApplicantUin Applicant account uin
     * @param string $AssetId Asset ID
     * @param string $AssetName Asset name
     * @param string $Region Region of the asset
     * @param integer $ApplyType Application type. 0: associate an identity. 1: edit an identity. 2: create a temporary identity.
     * @param DspmDbAccountPrivilege $Privilege Permission request.
     * @param integer $ValidatePeriod Access privilege expiration time calculated from when approval is complete. Temporary account validity. Milliseconds.
     * @param string $Reason Application reason.
     * @param array $ApproverSteps Approval procedure
     * @param integer $ManagerType Management type. 0: ordinary member; 1: administrator.
     * @param DspmPersonUser $Person Personal user information
     * @param DspmUinUser $SubjectUser Cloud account user information
     * @param integer $Status Approval status. 0: Pending approval; 1: Approved; 2: Rejected
     * @param string $CreateTime Application creation time.
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("IdentifyId",$param) and $param["IdentifyId"] !== null) {
            $this->IdentifyId = $param["IdentifyId"];
        }

        if (array_key_exists("ApplicantUin",$param) and $param["ApplicantUin"] !== null) {
            $this->ApplicantUin = new DspmUinUser();
            $this->ApplicantUin->deserialize($param["ApplicantUin"]);
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ApplyType",$param) and $param["ApplyType"] !== null) {
            $this->ApplyType = $param["ApplyType"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = new DspmDbAccountPrivilege();
            $this->Privilege->deserialize($param["Privilege"]);
        }

        if (array_key_exists("ValidatePeriod",$param) and $param["ValidatePeriod"] !== null) {
            $this->ValidatePeriod = $param["ValidatePeriod"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("ApproverSteps",$param) and $param["ApproverSteps"] !== null) {
            $this->ApproverSteps = [];
            foreach ($param["ApproverSteps"] as $key => $value){
                $obj = new DspmApproverStep();
                $obj->deserialize($value);
                array_push($this->ApproverSteps, $obj);
            }
        }

        if (array_key_exists("ManagerType",$param) and $param["ManagerType"] !== null) {
            $this->ManagerType = $param["ManagerType"];
        }

        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = new DspmPersonUser();
            $this->Person->deserialize($param["Person"]);
        }

        if (array_key_exists("SubjectUser",$param) and $param["SubjectUser"] !== null) {
            $this->SubjectUser = new DspmUinUser();
            $this->SubjectUser->deserialize($param["SubjectUser"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
