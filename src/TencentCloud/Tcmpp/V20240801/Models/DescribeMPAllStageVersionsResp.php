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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of all Developer versions of a mini program
 *
 * @method string getMNPId() Obtain Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPId(string $MNPId) Set Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMNPVersionId() Obtain Mini program version ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPVersionId(integer $MNPVersionId) Set Mini program version ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPName() Obtain Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPName(string $MNPName) Set Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPIcon() Obtain Mini program icon
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPIcon(string $MNPIcon) Set Mini program icon
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPType() Obtain Mini program type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPType(string $MNPType) Set Mini program type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPIntro() Obtain Mini program introduction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPIntro(string $MNPIntro) Set Mini program introduction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPDesc() Obtain Mini program description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPDesc(string $MNPDesc) Set Mini program description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUser() Obtain Developer
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUser(string $CreateUser) Set Developer
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain The time when the developer created it
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set The time when the developer created it
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPVersion() Obtain Mini program version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPVersion(string $MNPVersion) Set Mini program version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPVersionIntro() Obtain Version features
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPVersionIntro(string $MNPVersionIntro) Set Version features
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPhase() Obtain Phase. Values: [Develop,Platform,Online]
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhase(string $Phase) Set Phase. Values: [Develop,Platform,Online]
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getApprovalStatus() Obtain 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApprovalStatus(integer $ApprovalStatus) Set 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApprovalNo() Obtain Approval request ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApprovalNo(string $ApprovalNo) Set Approval request ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getShowCase() Obtain Whether it is a preview version. 
0: Not a preview version; 1: Preview version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShowCase(integer $ShowCase) Set Whether it is a preview version. 
0: Not a preview version; 1: Preview version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRollbackVersion() Obtain Version number to roll back to
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRollbackVersion(integer $RollbackVersion) Set Version number to roll back to
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Release status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Release status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVersionCurrentStatus() Obtain Version approval status. 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersionCurrentStatus(integer $VersionCurrentStatus) Set Version approval status. 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeMPAllStageVersionsResp extends AbstractModel
{
    /**
     * @var string Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPId;

    /**
     * @var integer Mini program version ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPVersionId;

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
     * @var string Mini program type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPType;

    /**
     * @var string Mini program introduction
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPIntro;

    /**
     * @var string Mini program description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPDesc;

    /**
     * @var string Developer
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUser;

    /**
     * @var string The time when the developer created it
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Mini program version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPVersion;

    /**
     * @var string Version features
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPVersionIntro;

    /**
     * @var string Phase. Values: [Develop,Platform,Online]
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Phase;

    /**
     * @var integer 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApprovalStatus;

    /**
     * @var string Approval request ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApprovalNo;

    /**
     * @var integer Whether it is a preview version. 
0: Not a preview version; 1: Preview version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShowCase;

    /**
     * @var integer Version number to roll back to
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RollbackVersion;

    /**
     * @var integer Release status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Version approval status. 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VersionCurrentStatus;

    /**
     * @param string $MNPId Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MNPVersionId Mini program version ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPName Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPIcon Mini program icon
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPType Mini program type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPIntro Mini program introduction
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPDesc Mini program description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUser Developer
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime The time when the developer created it
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPVersion Mini program version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPVersionIntro Version features
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Phase Phase. Values: [Develop,Platform,Online]
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ApprovalStatus 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApprovalNo Approval request ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ShowCase Whether it is a preview version. 
0: Not a preview version; 1: Preview version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RollbackVersion Version number to roll back to
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Release status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VersionCurrentStatus Version approval status. 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled
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
