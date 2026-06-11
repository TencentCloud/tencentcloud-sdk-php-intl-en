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
 * Response for querying all-stage versions of a mini program.
 *
 * @method string getMNPId() Obtain Mini program appid.
 * @method void setMNPId(string $MNPId) Set Mini program appid.
 * @method integer getMNPVersionId() Obtain Mini program version primary key ID.
 * @method void setMNPVersionId(integer $MNPVersionId) Set Mini program version primary key ID.
 * @method string getMNPName() Obtain Mini program name.
 * @method void setMNPName(string $MNPName) Set Mini program name.
 * @method string getMNPIcon() Obtain Mini program icon.
 * @method void setMNPIcon(string $MNPIcon) Set Mini program icon.
 * @method string getMNPType() Obtain Mini program category.
 * @method void setMNPType(string $MNPType) Set Mini program category.
 * @method string getMNPIntro() Obtain Mini program introduction.
 * @method void setMNPIntro(string $MNPIntro) Set Mini program introduction.
 * @method string getMNPDesc() Obtain Mini program description.
 * @method void setMNPDesc(string $MNPDesc) Set Mini program description.
 * @method string getCreateUser() Obtain Creator.
 * @method void setCreateUser(string $CreateUser) Set Creator.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getMNPVersion() Obtain Mini program version number.
 * @method void setMNPVersion(string $MNPVersion) Set Mini program version number.
 * @method string getMNPVersionIntro() Obtain Version introduction.
 * @method void setMNPVersionIntro(string $MNPVersionIntro) Set Version introduction.
 * @method string getPhase() Obtain Phase: Valid values: Develop; Platform; Online.
 * @method void setPhase(string $Phase) Set Phase: Valid values: Develop; Platform; Online.
 * @method integer getApprovalStatus() Obtain Approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.
 * @method void setApprovalStatus(integer $ApprovalStatus) Set Approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.
 * @method string getApprovalNo() Obtain Approval number.
 * @method void setApprovalNo(string $ApprovalNo) Set Approval number.
 * @method integer getShowCase() Obtain Whether this is a preview. Valid values: 0: No; 1: Yes.
 * @method void setShowCase(integer $ShowCase) Set Whether this is a preview. Valid values: 0: No; 1: Yes.
 * @method integer getRollbackVersion() Obtain Rollback version number.
 * @method void setRollbackVersion(integer $RollbackVersion) Set Rollback version number.
 * @method integer getStatus() Obtain Available status. Valid value: 0: All; 1 Available; 2: In canary release.
 * @method void setStatus(integer $Status) Set Available status. Valid value: 0: All; 1 Available; 2: In canary release.
 * @method integer getVersionCurrentStatus() Obtain Current version approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.
 * @method void setVersionCurrentStatus(integer $VersionCurrentStatus) Set Current version approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.
 */
class DescribeMPAllStageVersionsResp extends AbstractModel
{
    /**
     * @var string Mini program appid.
     */
    public $MNPId;

    /**
     * @var integer Mini program version primary key ID.
     */
    public $MNPVersionId;

    /**
     * @var string Mini program name.
     */
    public $MNPName;

    /**
     * @var string Mini program icon.
     */
    public $MNPIcon;

    /**
     * @var string Mini program category.
     */
    public $MNPType;

    /**
     * @var string Mini program introduction.
     */
    public $MNPIntro;

    /**
     * @var string Mini program description.
     */
    public $MNPDesc;

    /**
     * @var string Creator.
     */
    public $CreateUser;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Mini program version number.
     */
    public $MNPVersion;

    /**
     * @var string Version introduction.
     */
    public $MNPVersionIntro;

    /**
     * @var string Phase: Valid values: Develop; Platform; Online.
     */
    public $Phase;

    /**
     * @var integer Approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.
     */
    public $ApprovalStatus;

    /**
     * @var string Approval number.
     */
    public $ApprovalNo;

    /**
     * @var integer Whether this is a preview. Valid values: 0: No; 1: Yes.
     */
    public $ShowCase;

    /**
     * @var integer Rollback version number.
     */
    public $RollbackVersion;

    /**
     * @var integer Available status. Valid value: 0: All; 1 Available; 2: In canary release.
     */
    public $Status;

    /**
     * @var integer Current version approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.
     */
    public $VersionCurrentStatus;

    /**
     * @param string $MNPId Mini program appid.
     * @param integer $MNPVersionId Mini program version primary key ID.
     * @param string $MNPName Mini program name.
     * @param string $MNPIcon Mini program icon.
     * @param string $MNPType Mini program category.
     * @param string $MNPIntro Mini program introduction.
     * @param string $MNPDesc Mini program description.
     * @param string $CreateUser Creator.
     * @param string $CreateTime Creation time.
     * @param string $MNPVersion Mini program version number.
     * @param string $MNPVersionIntro Version introduction.
     * @param string $Phase Phase: Valid values: Develop; Platform; Online.
     * @param integer $ApprovalStatus Approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.
     * @param string $ApprovalNo Approval number.
     * @param integer $ShowCase Whether this is a preview. Valid values: 0: No; 1: Yes.
     * @param integer $RollbackVersion Rollback version number.
     * @param integer $Status Available status. Valid value: 0: All; 1 Available; 2: In canary release.
     * @param integer $VersionCurrentStatus Current version approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.
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
