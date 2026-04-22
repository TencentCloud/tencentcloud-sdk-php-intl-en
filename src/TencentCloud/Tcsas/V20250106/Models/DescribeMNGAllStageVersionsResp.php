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
 * Response object for querying the mini game version information
 *
 * @method string getMNPId() Obtain <p>Mini game appid</p>
 * @method void setMNPId(string $MNPId) Set <p>Mini game appid</p>
 * @method integer getMNPVersionId() Obtain <p>Mini game version ID</p>
 * @method void setMNPVersionId(integer $MNPVersionId) Set <p>Mini game version ID</p>
 * @method string getMNPName() Obtain <p>Mini game name</p>
 * @method void setMNPName(string $MNPName) Set <p>Mini game name</p>
 * @method string getMNPIcon() Obtain <p>Mini game icon</p>
 * @method void setMNPIcon(string $MNPIcon) Set <p>Mini game icon</p>
 * @method string getMNPType() Obtain <p>Mini game category</p>
 * @method void setMNPType(string $MNPType) Set <p>Mini game category</p>
 * @method string getMNPIntro() Obtain <p>Mini game introduction</p>
 * @method void setMNPIntro(string $MNPIntro) Set <p>Mini game introduction</p>
 * @method string getMNPDesc() Obtain <p>Mini game description</p>
 * @method void setMNPDesc(string $MNPDesc) Set <p>Mini game description</p>
 * @method string getCreateUser() Obtain <p>Developer</p>
 * @method void setCreateUser(string $CreateUser) Set <p>Developer</p>
 * @method string getCreateTime() Obtain <p>Developer creation time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Developer creation time</p>
 * @method string getMNPVersion() Obtain <p>Mini game version</p>
 * @method void setMNPVersion(string $MNPVersion) Set <p>Mini game version</p>
 * @method string getMNPVersionIntro() Obtain <p>Version feature description</p>
 * @method void setMNPVersionIntro(string $MNPVersionIntro) Set <p>Version feature description</p>
 * @method string getPhase() Obtain <p>Version:</p> Develop, preview, released</p>
 * @method void setPhase(string $Phase) Set <p>Version:</p> Develop, preview, released</p>
 * @method integer getApprovalStatus() Obtain <p>Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled</p>
 * @method void setApprovalStatus(integer $ApprovalStatus) Set <p>Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled</p>
 * @method string getApprovalNo() Obtain <p>Approval number</p>
 * @method void setApprovalNo(string $ApprovalNo) Set <p>Approval number</p>
 * @method integer getShowCase() Obtain <p>Whether this is a preview. Valid values: 0: No; 1: Yes</p>
 * @method void setShowCase(integer $ShowCase) Set <p>Whether this is a preview. Valid values: 0: No; 1: Yes</p>
 * @method integer getRollbackVersion() Obtain <p>Rollback version number</p>
 * @method void setRollbackVersion(integer $RollbackVersion) Set <p>Rollback version number</p>
 * @method integer getStatus() Obtain <p>Available status</p>
 * @method void setStatus(integer $Status) Set <p>Available status</p>
 * @method integer getVersionCurrentStatus() Obtain <p>Primary status of the current version. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled</p>
 * @method void setVersionCurrentStatus(integer $VersionCurrentStatus) Set <p>Primary status of the current version. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled</p>
 */
class DescribeMNGAllStageVersionsResp extends AbstractModel
{
    /**
     * @var string <p>Mini game appid</p>
     */
    public $MNPId;

    /**
     * @var integer <p>Mini game version ID</p>
     */
    public $MNPVersionId;

    /**
     * @var string <p>Mini game name</p>
     */
    public $MNPName;

    /**
     * @var string <p>Mini game icon</p>
     */
    public $MNPIcon;

    /**
     * @var string <p>Mini game category</p>
     */
    public $MNPType;

    /**
     * @var string <p>Mini game introduction</p>
     */
    public $MNPIntro;

    /**
     * @var string <p>Mini game description</p>
     */
    public $MNPDesc;

    /**
     * @var string <p>Developer</p>
     */
    public $CreateUser;

    /**
     * @var string <p>Developer creation time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Mini game version</p>
     */
    public $MNPVersion;

    /**
     * @var string <p>Version feature description</p>
     */
    public $MNPVersionIntro;

    /**
     * @var string <p>Version:</p> Develop, preview, released</p>
     */
    public $Phase;

    /**
     * @var integer <p>Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled</p>
     */
    public $ApprovalStatus;

    /**
     * @var string <p>Approval number</p>
     */
    public $ApprovalNo;

    /**
     * @var integer <p>Whether this is a preview. Valid values: 0: No; 1: Yes</p>
     */
    public $ShowCase;

    /**
     * @var integer <p>Rollback version number</p>
     */
    public $RollbackVersion;

    /**
     * @var integer <p>Available status</p>
     */
    public $Status;

    /**
     * @var integer <p>Primary status of the current version. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled</p>
     */
    public $VersionCurrentStatus;

    /**
     * @param string $MNPId <p>Mini game appid</p>
     * @param integer $MNPVersionId <p>Mini game version ID</p>
     * @param string $MNPName <p>Mini game name</p>
     * @param string $MNPIcon <p>Mini game icon</p>
     * @param string $MNPType <p>Mini game category</p>
     * @param string $MNPIntro <p>Mini game introduction</p>
     * @param string $MNPDesc <p>Mini game description</p>
     * @param string $CreateUser <p>Developer</p>
     * @param string $CreateTime <p>Developer creation time</p>
     * @param string $MNPVersion <p>Mini game version</p>
     * @param string $MNPVersionIntro <p>Version feature description</p>
     * @param string $Phase <p>Version:</p> Develop, preview, released</p>
     * @param integer $ApprovalStatus <p>Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled</p>
     * @param string $ApprovalNo <p>Approval number</p>
     * @param integer $ShowCase <p>Whether this is a preview. Valid values: 0: No; 1: Yes</p>
     * @param integer $RollbackVersion <p>Rollback version number</p>
     * @param integer $Status <p>Available status</p>
     * @param integer $VersionCurrentStatus <p>Primary status of the current version. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled</p>
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
