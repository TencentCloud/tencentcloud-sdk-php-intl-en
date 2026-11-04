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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SkillVersion version information.
 *
 * @method SkillAnalysisInfo getAnalysisInfo() Obtain <p>Detection information</p>
 * @method void setAnalysisInfo(SkillAnalysisInfo $AnalysisInfo) Set <p>Detection information</p>
 * @method string getVersion() Obtain <p>Current effective version number.</p>
 * @method void setVersion(string $Version) Set <p>Current effective version number.</p>
 * @method string getVersionId() Obtain <p>Current effective version ID</p>
 * @method void setVersionId(string $VersionId) Set <p>Current effective version ID</p>
 * @method integer getVersionStatus() Obtain <p>Skill version RELEASE process status:</p><pre><code>  - 0 INITIALIZED      initialization (initial version state)  - 1 AUDITING         under review (f_analysis_status ∈ {PENDING, RUNNING})  - 2 PENDING_RELEASE  awaiting RELEASE (low/medium-risk, waiting for user confirmation to publish)  - 3 RELEASED         RELEASED  - 4 UNRELEASED       not RELEASED (HIGH / UNAVAILABLE / FAILED / user give up, including the semantics of historical "not approved")Decoupled from SkillAnalysisStatus: the former is the RELEASE lifecycle from the user perspective, while the latter is the security detection stage.</code></pre>
 * @method void setVersionStatus(integer $VersionStatus) Set <p>Skill version RELEASE process status:</p><pre><code>  - 0 INITIALIZED      initialization (initial version state)  - 1 AUDITING         under review (f_analysis_status ∈ {PENDING, RUNNING})  - 2 PENDING_RELEASE  awaiting RELEASE (low/medium-risk, waiting for user confirmation to publish)  - 3 RELEASED         RELEASED  - 4 UNRELEASED       not RELEASED (HIGH / UNAVAILABLE / FAILED / user give up, including the semantics of historical "not approved")Decoupled from SkillAnalysisStatus: the former is the RELEASE lifecycle from the user perspective, while the latter is the security detection stage.</code></pre>
 * @method string getSkillMd5() Obtain <p>md5 information of the Skill package</p>
 * @method void setSkillMd5(string $SkillMd5) Set <p>md5 information of the Skill package</p>
 * @method string getSkillUrl() Obtain <p>Version package address</p>
 * @method void setSkillUrl(string $SkillUrl) Set <p>Version package address</p>
 * @method string getCreateTime() Obtain <p>Version creation time (Unix seconds).</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Version creation time (Unix seconds).</p>
 * @method string getSkillMarkdownUrl() Obtain <p>skill md document</p>
 * @method void setSkillMarkdownUrl(string $SkillMarkdownUrl) Set <p>skill md document</p>
 * @method string getUpdateDesc() Obtain <p>Version change description</p>
 * @method void setUpdateDesc(string $UpdateDesc) Set <p>Version change description</p>
 * @method string getUpdater() Obtain <p>Change user.</p>
 * @method void setUpdater(string $Updater) Set <p>Change user.</p>
 */
class SkillVersion extends AbstractModel
{
    /**
     * @var SkillAnalysisInfo <p>Detection information</p>
     */
    public $AnalysisInfo;

    /**
     * @var string <p>Current effective version number.</p>
     */
    public $Version;

    /**
     * @var string <p>Current effective version ID</p>
     */
    public $VersionId;

    /**
     * @var integer <p>Skill version RELEASE process status:</p><pre><code>  - 0 INITIALIZED      initialization (initial version state)  - 1 AUDITING         under review (f_analysis_status ∈ {PENDING, RUNNING})  - 2 PENDING_RELEASE  awaiting RELEASE (low/medium-risk, waiting for user confirmation to publish)  - 3 RELEASED         RELEASED  - 4 UNRELEASED       not RELEASED (HIGH / UNAVAILABLE / FAILED / user give up, including the semantics of historical "not approved")Decoupled from SkillAnalysisStatus: the former is the RELEASE lifecycle from the user perspective, while the latter is the security detection stage.</code></pre>
     */
    public $VersionStatus;

    /**
     * @var string <p>md5 information of the Skill package</p>
     */
    public $SkillMd5;

    /**
     * @var string <p>Version package address</p>
     */
    public $SkillUrl;

    /**
     * @var string <p>Version creation time (Unix seconds).</p>
     */
    public $CreateTime;

    /**
     * @var string <p>skill md document</p>
     */
    public $SkillMarkdownUrl;

    /**
     * @var string <p>Version change description</p>
     */
    public $UpdateDesc;

    /**
     * @var string <p>Change user.</p>
     */
    public $Updater;

    /**
     * @param SkillAnalysisInfo $AnalysisInfo <p>Detection information</p>
     * @param string $Version <p>Current effective version number.</p>
     * @param string $VersionId <p>Current effective version ID</p>
     * @param integer $VersionStatus <p>Skill version RELEASE process status:</p><pre><code>  - 0 INITIALIZED      initialization (initial version state)  - 1 AUDITING         under review (f_analysis_status ∈ {PENDING, RUNNING})  - 2 PENDING_RELEASE  awaiting RELEASE (low/medium-risk, waiting for user confirmation to publish)  - 3 RELEASED         RELEASED  - 4 UNRELEASED       not RELEASED (HIGH / UNAVAILABLE / FAILED / user give up, including the semantics of historical "not approved")Decoupled from SkillAnalysisStatus: the former is the RELEASE lifecycle from the user perspective, while the latter is the security detection stage.</code></pre>
     * @param string $SkillMd5 <p>md5 information of the Skill package</p>
     * @param string $SkillUrl <p>Version package address</p>
     * @param string $CreateTime <p>Version creation time (Unix seconds).</p>
     * @param string $SkillMarkdownUrl <p>skill md document</p>
     * @param string $UpdateDesc <p>Version change description</p>
     * @param string $Updater <p>Change user.</p>
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
        if (array_key_exists("AnalysisInfo",$param) and $param["AnalysisInfo"] !== null) {
            $this->AnalysisInfo = new SkillAnalysisInfo();
            $this->AnalysisInfo->deserialize($param["AnalysisInfo"]);
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("VersionStatus",$param) and $param["VersionStatus"] !== null) {
            $this->VersionStatus = $param["VersionStatus"];
        }

        if (array_key_exists("SkillMd5",$param) and $param["SkillMd5"] !== null) {
            $this->SkillMd5 = $param["SkillMd5"];
        }

        if (array_key_exists("SkillUrl",$param) and $param["SkillUrl"] !== null) {
            $this->SkillUrl = $param["SkillUrl"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SkillMarkdownUrl",$param) and $param["SkillMarkdownUrl"] !== null) {
            $this->SkillMarkdownUrl = $param["SkillMarkdownUrl"];
        }

        if (array_key_exists("UpdateDesc",$param) and $param["UpdateDesc"] !== null) {
            $this->UpdateDesc = $param["UpdateDesc"];
        }

        if (array_key_exists("Updater",$param) and $param["Updater"] !== null) {
            $this->Updater = $param["Updater"];
        }
    }
}
