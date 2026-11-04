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
 * SkillShare Skill business share information.
 *
 * @method string getApprovalId() Obtain <p>Approval ID</p>
 * @method void setApprovalId(string $ApprovalId) Set <p>Approval ID</p>
 * @method string getShareSkillId() Obtain <p>New skill_id associated after sharing</p>
 * @method void setShareSkillId(string $ShareSkillId) Set <p>New skill_id associated after sharing</p>
 * @method string getShareVersion() Obtain <p>Shared version, for example 1.0.0</p>
 * @method void setShareVersion(string $ShareVersion) Set <p>Shared version, for example 1.0.0</p>
 * @method string getShareVersionId() Obtain <p>Shared version ID</p>
 * @method void setShareVersionId(string $ShareVersionId) Set <p>Shared version ID</p>
 * @method string getSkillId() Obtain <p>Original skill_id</p>
 * @method void setSkillId(string $SkillId) Set <p>Original skill_id</p>
 * @method integer getStatus() Obtain <p>Shared state</p><p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 | Not shared |<br>| 1 | Shared |<br>| 2 | Pending Approval |</p>
 * @method void setStatus(integer $Status) Set <p>Shared state</p><p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 | Not shared |<br>| 1 | Shared |<br>| 2 | Pending Approval |</p>
 * @method SkillCorpShareConfig getCorpShareConfig() Obtain <p>Business share scope</p>
 * @method void setCorpShareConfig(SkillCorpShareConfig $CorpShareConfig) Set <p>Business share scope</p>
 */
class SkillShare extends AbstractModel
{
    /**
     * @var string <p>Approval ID</p>
     */
    public $ApprovalId;

    /**
     * @var string <p>New skill_id associated after sharing</p>
     */
    public $ShareSkillId;

    /**
     * @var string <p>Shared version, for example 1.0.0</p>
     */
    public $ShareVersion;

    /**
     * @var string <p>Shared version ID</p>
     */
    public $ShareVersionId;

    /**
     * @var string <p>Original skill_id</p>
     */
    public $SkillId;

    /**
     * @var integer <p>Shared state</p><p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 | Not shared |<br>| 1 | Shared |<br>| 2 | Pending Approval |</p>
     */
    public $Status;

    /**
     * @var SkillCorpShareConfig <p>Business share scope</p>
     */
    public $CorpShareConfig;

    /**
     * @param string $ApprovalId <p>Approval ID</p>
     * @param string $ShareSkillId <p>New skill_id associated after sharing</p>
     * @param string $ShareVersion <p>Shared version, for example 1.0.0</p>
     * @param string $ShareVersionId <p>Shared version ID</p>
     * @param string $SkillId <p>Original skill_id</p>
     * @param integer $Status <p>Shared state</p><p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 | Not shared |<br>| 1 | Shared |<br>| 2 | Pending Approval |</p>
     * @param SkillCorpShareConfig $CorpShareConfig <p>Business share scope</p>
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
        if (array_key_exists("ApprovalId",$param) and $param["ApprovalId"] !== null) {
            $this->ApprovalId = $param["ApprovalId"];
        }

        if (array_key_exists("ShareSkillId",$param) and $param["ShareSkillId"] !== null) {
            $this->ShareSkillId = $param["ShareSkillId"];
        }

        if (array_key_exists("ShareVersion",$param) and $param["ShareVersion"] !== null) {
            $this->ShareVersion = $param["ShareVersion"];
        }

        if (array_key_exists("ShareVersionId",$param) and $param["ShareVersionId"] !== null) {
            $this->ShareVersionId = $param["ShareVersionId"];
        }

        if (array_key_exists("SkillId",$param) and $param["SkillId"] !== null) {
            $this->SkillId = $param["SkillId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CorpShareConfig",$param) and $param["CorpShareConfig"] !== null) {
            $this->CorpShareConfig = new SkillCorpShareConfig();
            $this->CorpShareConfig->deserialize($param["CorpShareConfig"]);
        }
    }
}
