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
 * Agent skill details
 *
 * @method string getSkillId() Obtain <p>skillId</p>
 * @method void setSkillId(string $SkillId) Set <p>skillId</p>
 * @method string getName() Obtain <p>skill name</p>
 * @method void setName(string $Name) Set <p>skill name</p>
 * @method string getDescription() Obtain <p>Skill description</p>
 * @method void setDescription(string $Description) Set <p>Skill description</p>
 * @method string getDisplayName() Obtain <p>skill display name</p>
 * @method void setDisplayName(string $DisplayName) Set <p>skill display name</p>
 * @method string getDisplayDescription() Obtain <p>Skill show description</p>
 * @method void setDisplayDescription(string $DisplayDescription) Set <p>Skill show description</p>
 * @method string getIconUrl() Obtain <p>skill icon url</p>
 * @method void setIconUrl(string $IconUrl) Set <p>skill icon url</p>
 * @method integer getSourceType() Obtain <p>Skill source</p>
 * @method void setSourceType(integer $SourceType) Set <p>Skill source</p>
 * @method string getCurrentVersion() Obtain <p>Skill version</p>
 * @method void setCurrentVersion(string $CurrentVersion) Set <p>Skill version</p>
 */
class AgentSkill extends AbstractModel
{
    /**
     * @var string <p>skillId</p>
     */
    public $SkillId;

    /**
     * @var string <p>skill name</p>
     */
    public $Name;

    /**
     * @var string <p>Skill description</p>
     */
    public $Description;

    /**
     * @var string <p>skill display name</p>
     */
    public $DisplayName;

    /**
     * @var string <p>Skill show description</p>
     */
    public $DisplayDescription;

    /**
     * @var string <p>skill icon url</p>
     */
    public $IconUrl;

    /**
     * @var integer <p>Skill source</p>
     */
    public $SourceType;

    /**
     * @var string <p>Skill version</p>
     */
    public $CurrentVersion;

    /**
     * @param string $SkillId <p>skillId</p>
     * @param string $Name <p>skill name</p>
     * @param string $Description <p>Skill description</p>
     * @param string $DisplayName <p>skill display name</p>
     * @param string $DisplayDescription <p>Skill show description</p>
     * @param string $IconUrl <p>skill icon url</p>
     * @param integer $SourceType <p>Skill source</p>
     * @param string $CurrentVersion <p>Skill version</p>
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
        if (array_key_exists("SkillId",$param) and $param["SkillId"] !== null) {
            $this->SkillId = $param["SkillId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("DisplayDescription",$param) and $param["DisplayDescription"] !== null) {
            $this->DisplayDescription = $param["DisplayDescription"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("CurrentVersion",$param) and $param["CurrentVersion"] !== null) {
            $this->CurrentVersion = $param["CurrentVersion"];
        }
    }
}
