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
 * CreateSkill request structure.
 *
 * @method integer getCreateType() Obtain <p>Skill creation method, required; only allow</p><p>Enumeration values:</p><ul><li>1: FILE_UPLOAD (file upload)</li><li>3: AIGC (AIGC generation)</li></ul>
 * @method void setCreateType(integer $CreateType) Set <p>Skill creation method, required; only allow</p><p>Enumeration values:</p><ul><li>1: FILE_UPLOAD (file upload)</li><li>3: AIGC (AIGC generation)</li></ul>
 * @method string getFileUrl() Obtain <p>skill package file address (zip); required for both FILE_UPLOAD and AIGC</p>
 * @method void setFileUrl(string $FileUrl) Set <p>skill package file address (zip); required for both FILE_UPLOAD and AIGC</p>
 * @method string getSpaceId() Obtain <p>Workspace ID</p>
 * @method void setSpaceId(string $SpaceId) Set <p>Workspace ID</p>
 * @method string getDisplayDescription() Obtain <p>skill show description</p>
 * @method void setDisplayDescription(string $DisplayDescription) Set <p>skill show description</p>
 * @method string getDisplayName() Obtain <p>skill display name</p>
 * @method void setDisplayName(string $DisplayName) Set <p>skill display name</p>
 * @method string getIconUrl() Obtain <p>Icon address</p>
 * @method void setIconUrl(string $IconUrl) Set <p>Icon address</p>
 * @method string getName() Obtain <p>Unique business identifier name of the skill (unique within the same enterprise); if not passed, it will be parsed from the skill package</p>
 * @method void setName(string $Name) Set <p>Unique business identifier name of the skill (unique within the same enterprise); if not passed, it will be parsed from the skill package</p>
 * @method string getSkillVersion() Obtain <p>Version number</p>
 * @method void setSkillVersion(string $SkillVersion) Set <p>Version number</p>
 * @method string getUpdateDescription() Obtain <p>Version change description</p>
 * @method void setUpdateDescription(string $UpdateDescription) Set <p>Version change description</p>
 */
class CreateSkillRequest extends AbstractModel
{
    /**
     * @var integer <p>Skill creation method, required; only allow</p><p>Enumeration values:</p><ul><li>1: FILE_UPLOAD (file upload)</li><li>3: AIGC (AIGC generation)</li></ul>
     */
    public $CreateType;

    /**
     * @var string <p>skill package file address (zip); required for both FILE_UPLOAD and AIGC</p>
     */
    public $FileUrl;

    /**
     * @var string <p>Workspace ID</p>
     */
    public $SpaceId;

    /**
     * @var string <p>skill show description</p>
     */
    public $DisplayDescription;

    /**
     * @var string <p>skill display name</p>
     */
    public $DisplayName;

    /**
     * @var string <p>Icon address</p>
     */
    public $IconUrl;

    /**
     * @var string <p>Unique business identifier name of the skill (unique within the same enterprise); if not passed, it will be parsed from the skill package</p>
     */
    public $Name;

    /**
     * @var string <p>Version number</p>
     */
    public $SkillVersion;

    /**
     * @var string <p>Version change description</p>
     */
    public $UpdateDescription;

    /**
     * @param integer $CreateType <p>Skill creation method, required; only allow</p><p>Enumeration values:</p><ul><li>1: FILE_UPLOAD (file upload)</li><li>3: AIGC (AIGC generation)</li></ul>
     * @param string $FileUrl <p>skill package file address (zip); required for both FILE_UPLOAD and AIGC</p>
     * @param string $SpaceId <p>Workspace ID</p>
     * @param string $DisplayDescription <p>skill show description</p>
     * @param string $DisplayName <p>skill display name</p>
     * @param string $IconUrl <p>Icon address</p>
     * @param string $Name <p>Unique business identifier name of the skill (unique within the same enterprise); if not passed, it will be parsed from the skill package</p>
     * @param string $SkillVersion <p>Version number</p>
     * @param string $UpdateDescription <p>Version change description</p>
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
        if (array_key_exists("CreateType",$param) and $param["CreateType"] !== null) {
            $this->CreateType = $param["CreateType"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("DisplayDescription",$param) and $param["DisplayDescription"] !== null) {
            $this->DisplayDescription = $param["DisplayDescription"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SkillVersion",$param) and $param["SkillVersion"] !== null) {
            $this->SkillVersion = $param["SkillVersion"];
        }

        if (array_key_exists("UpdateDescription",$param) and $param["UpdateDescription"] !== null) {
            $this->UpdateDescription = $param["UpdateDescription"];
        }
    }
}
