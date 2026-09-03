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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Product entity
 *
 * @method string getArtifactId() Obtain <p>Product ID</p>
 * @method void setArtifactId(string $ArtifactId) Set <p>Product ID</p>
 * @method string getName() Obtain <p>Product name</p>
 * @method void setName(string $Name) Set <p>Product name</p>
 * @method string getMimeType() Obtain <p>Physical type</p>
 * @method void setMimeType(string $MimeType) Set <p>Physical type</p>
 * @method integer getSizeBytes() Obtain <p>File size (byte)</p>
 * @method void setSizeBytes(integer $SizeBytes) Set <p>File size (byte)</p>
 * @method boolean getIsGlobal() Obtain <p>Whether it is public</p>
 * @method void setIsGlobal(boolean $IsGlobal) Set <p>Whether it is public</p>
 * @method integer getCreatedAt() Obtain <p>Creation time (Unix timestamp in seconds).</p>
 * @method void setCreatedAt(integer $CreatedAt) Set <p>Creation time (Unix timestamp in seconds).</p>
 * @method integer getUpdatedAt() Obtain <p>Modification time.</p>
 * @method void setUpdatedAt(integer $UpdatedAt) Set <p>Modification time.</p>
 * @method string getAgentId() Obtain <p>Agent ID that generated the artifact</p>
 * @method void setAgentId(string $AgentId) Set <p>Agent ID that generated the artifact</p>
 * @method string getSkillId() Obtain <p>Skill ID that generates the artifact</p>
 * @method void setSkillId(string $SkillId) Set <p>Skill ID that generates the artifact</p>
 * @method string getStoragePath() Obtain <p>For parsing calls to the download API</p>
 * @method void setStoragePath(string $StoragePath) Set <p>For parsing calls to the download API</p>
 */
class ArtifactInfo extends AbstractModel
{
    /**
     * @var string <p>Product ID</p>
     */
    public $ArtifactId;

    /**
     * @var string <p>Product name</p>
     */
    public $Name;

    /**
     * @var string <p>Physical type</p>
     */
    public $MimeType;

    /**
     * @var integer <p>File size (byte)</p>
     */
    public $SizeBytes;

    /**
     * @var boolean <p>Whether it is public</p>
     */
    public $IsGlobal;

    /**
     * @var integer <p>Creation time (Unix timestamp in seconds).</p>
     */
    public $CreatedAt;

    /**
     * @var integer <p>Modification time.</p>
     */
    public $UpdatedAt;

    /**
     * @var string <p>Agent ID that generated the artifact</p>
     */
    public $AgentId;

    /**
     * @var string <p>Skill ID that generates the artifact</p>
     */
    public $SkillId;

    /**
     * @var string <p>For parsing calls to the download API</p>
     */
    public $StoragePath;

    /**
     * @param string $ArtifactId <p>Product ID</p>
     * @param string $Name <p>Product name</p>
     * @param string $MimeType <p>Physical type</p>
     * @param integer $SizeBytes <p>File size (byte)</p>
     * @param boolean $IsGlobal <p>Whether it is public</p>
     * @param integer $CreatedAt <p>Creation time (Unix timestamp in seconds).</p>
     * @param integer $UpdatedAt <p>Modification time.</p>
     * @param string $AgentId <p>Agent ID that generated the artifact</p>
     * @param string $SkillId <p>Skill ID that generates the artifact</p>
     * @param string $StoragePath <p>For parsing calls to the download API</p>
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
        if (array_key_exists("ArtifactId",$param) and $param["ArtifactId"] !== null) {
            $this->ArtifactId = $param["ArtifactId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MimeType",$param) and $param["MimeType"] !== null) {
            $this->MimeType = $param["MimeType"];
        }

        if (array_key_exists("SizeBytes",$param) and $param["SizeBytes"] !== null) {
            $this->SizeBytes = $param["SizeBytes"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("SkillId",$param) and $param["SkillId"] !== null) {
            $this->SkillId = $param["SkillId"];
        }

        if (array_key_exists("StoragePath",$param) and $param["StoragePath"] !== null) {
            $this->StoragePath = $param["StoragePath"];
        }
    }
}
