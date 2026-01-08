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
 * List of all developer versions of a mini program
 *
 * @method string getMNPId() Obtain Mini program ID.
 * @method void setMNPId(string $MNPId) Set Mini program ID.
 * @method integer getMNPVersionId() Obtain Specifies the mini program version primary key id.
 * @method void setMNPVersionId(integer $MNPVersionId) Set Specifies the mini program version primary key id.
 * @method string getMNPName() Obtain Mini program name
 * @method void setMNPName(string $MNPName) Set Mini program name
 * @method string getMNPIcon() Obtain Specifies the mini program avatar.
 * @method void setMNPIcon(string $MNPIcon) Set Specifies the mini program avatar.
 * @method string getMNPType() Obtain Mini program type
 * @method void setMNPType(string $MNPType) Set Mini program type
 * @method string getMNPIntro() Obtain Mini program introduction
 * @method void setMNPIntro(string $MNPIntro) Set Mini program introduction
 * @method string getMNPDesc() Obtain Mini program description
 * @method void setMNPDesc(string $MNPDesc) Set Mini program description
 * @method string getCreateUser() Obtain Specifies the developer.
 * @method void setCreateUser(string $CreateUser) Set Specifies the developer.
 * @method string getCreateTime() Obtain Developer creation time.
 * @method void setCreateTime(string $CreateTime) Set Developer creation time.
 * @method string getMNPVersion() Obtain Mini program version.
 * @method void setMNPVersion(string $MNPVersion) Set Mini program version.
 * @method string getMNPVersionIntro() Obtain Describes version features.
 * @method void setMNPVersionIntro(string $MNPVersionIntro) Set Describes version features.
 * @method string getPhase() Obtain Development Platform Online.
 * @method void setPhase(string $Phase) Set Development Platform Online.
 * @method integer getApprovalStatus() Obtain 0 pending review; 1 under review; 2 review rejection; 3 pass review; 4 review cancellation.
 * @method void setApprovalStatus(integer $ApprovalStatus) Set 0 pending review; 1 under review; 2 review rejection; 3 pass review; 4 review cancellation.
 * @method string getApprovalNo() Obtain Approval ticket ID
 * @method void setApprovalNo(string $ApprovalNo) Set Approval ticket ID
 * @method integer getShowCase() Obtain Specifies whether it is a trial version.
Specifies the version type. valid values: 0 (non-preview version); 1 (trial version).
 * @method void setShowCase(integer $ShowCase) Set Specifies whether it is a trial version.
Specifies the version type. valid values: 0 (non-preview version); 1 (trial version).
 * @method integer getRollbackVersion() Obtain Version number to roll back to.
 * @method void setRollbackVersion(integer $RollbackVersion) Set Version number to roll back to.
 * @method integer getStatus() Obtain Indicates the release status.
 * @method void setStatus(integer $Status) Set Indicates the release status.
 * @method integer getVersionCurrentStatus() Obtain Specifies the current main status of the version. valid values: "0" (pending review), "1" (under review), "2" (review rejection), "3" (pass review), "4" (review cancellation).
 * @method void setVersionCurrentStatus(integer $VersionCurrentStatus) Set Specifies the current main status of the version. valid values: "0" (pending review), "1" (under review), "2" (review rejection), "3" (pass review), "4" (review cancellation).
 */
class DescribeMPAllStageVersionsResp extends AbstractModel
{
    /**
     * @var string Mini program ID.
     */
    public $MNPId;

    /**
     * @var integer Specifies the mini program version primary key id.
     */
    public $MNPVersionId;

    /**
     * @var string Mini program name
     */
    public $MNPName;

    /**
     * @var string Specifies the mini program avatar.
     */
    public $MNPIcon;

    /**
     * @var string Mini program type
     */
    public $MNPType;

    /**
     * @var string Mini program introduction
     */
    public $MNPIntro;

    /**
     * @var string Mini program description
     */
    public $MNPDesc;

    /**
     * @var string Specifies the developer.
     */
    public $CreateUser;

    /**
     * @var string Developer creation time.
     */
    public $CreateTime;

    /**
     * @var string Mini program version.
     */
    public $MNPVersion;

    /**
     * @var string Describes version features.
     */
    public $MNPVersionIntro;

    /**
     * @var string Development Platform Online.
     */
    public $Phase;

    /**
     * @var integer 0 pending review; 1 under review; 2 review rejection; 3 pass review; 4 review cancellation.
     */
    public $ApprovalStatus;

    /**
     * @var string Approval ticket ID
     */
    public $ApprovalNo;

    /**
     * @var integer Specifies whether it is a trial version.
Specifies the version type. valid values: 0 (non-preview version); 1 (trial version).
     */
    public $ShowCase;

    /**
     * @var integer Version number to roll back to.
     */
    public $RollbackVersion;

    /**
     * @var integer Indicates the release status.
     */
    public $Status;

    /**
     * @var integer Specifies the current main status of the version. valid values: "0" (pending review), "1" (under review), "2" (review rejection), "3" (pass review), "4" (review cancellation).
     */
    public $VersionCurrentStatus;

    /**
     * @param string $MNPId Mini program ID.
     * @param integer $MNPVersionId Specifies the mini program version primary key id.
     * @param string $MNPName Mini program name
     * @param string $MNPIcon Specifies the mini program avatar.
     * @param string $MNPType Mini program type
     * @param string $MNPIntro Mini program introduction
     * @param string $MNPDesc Mini program description
     * @param string $CreateUser Specifies the developer.
     * @param string $CreateTime Developer creation time.
     * @param string $MNPVersion Mini program version.
     * @param string $MNPVersionIntro Describes version features.
     * @param string $Phase Development Platform Online.
     * @param integer $ApprovalStatus 0 pending review; 1 under review; 2 review rejection; 3 pass review; 4 review cancellation.
     * @param string $ApprovalNo Approval ticket ID
     * @param integer $ShowCase Specifies whether it is a trial version.
Specifies the version type. valid values: 0 (non-preview version); 1 (trial version).
     * @param integer $RollbackVersion Version number to roll back to.
     * @param integer $Status Indicates the release status.
     * @param integer $VersionCurrentStatus Specifies the current main status of the version. valid values: "0" (pending review), "1" (under review), "2" (review rejection), "3" (pass review), "4" (review cancellation).
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
        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("MNPVersionId",$param) and $param["MNPVersionId"] !== null) {
            $this->MNPVersionId = $param["MNPVersionId"];
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

        if (array_key_exists("MNPDesc",$param) and $param["MNPDesc"] !== null) {
            $this->MNPDesc = $param["MNPDesc"];
        }

        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MNPVersion",$param) and $param["MNPVersion"] !== null) {
            $this->MNPVersion = $param["MNPVersion"];
        }

        if (array_key_exists("MNPVersionIntro",$param) and $param["MNPVersionIntro"] !== null) {
            $this->MNPVersionIntro = $param["MNPVersionIntro"];
        }

        if (array_key_exists("Phase",$param) and $param["Phase"] !== null) {
            $this->Phase = $param["Phase"];
        }

        if (array_key_exists("ApprovalStatus",$param) and $param["ApprovalStatus"] !== null) {
            $this->ApprovalStatus = $param["ApprovalStatus"];
        }

        if (array_key_exists("ApprovalNo",$param) and $param["ApprovalNo"] !== null) {
            $this->ApprovalNo = $param["ApprovalNo"];
        }

        if (array_key_exists("ShowCase",$param) and $param["ShowCase"] !== null) {
            $this->ShowCase = $param["ShowCase"];
        }

        if (array_key_exists("RollbackVersion",$param) and $param["RollbackVersion"] !== null) {
            $this->RollbackVersion = $param["RollbackVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VersionCurrentStatus",$param) and $param["VersionCurrentStatus"] !== null) {
            $this->VersionCurrentStatus = $param["VersionCurrentStatus"];
        }
    }
}
