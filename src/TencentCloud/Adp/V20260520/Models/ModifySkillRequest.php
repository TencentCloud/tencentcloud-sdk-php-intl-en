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
 * ModifySkill request structure.
 *
 * @method string getSkillId() Obtain <p>SkillId</p>
 * @method void setSkillId(string $SkillId) Set <p>SkillId</p>
 * @method string getSpaceId() Obtain <p>Space ID</p>
 * @method void setSpaceId(string $SpaceId) Set <p>Space ID</p>
 * @method string getDisplayDescription() Obtain <p>skill description</p>
 * @method void setDisplayDescription(string $DisplayDescription) Set <p>skill description</p>
 * @method string getDisplayName() Obtain <p>skill name</p>
 * @method void setDisplayName(string $DisplayName) Set <p>skill name</p>
 * @method string getFileUrl() Obtain <p>skill package file address (zip); importing it triggers new version generation. It must be imported together with SkillVersion and UpdateDescription</p>
 * @method void setFileUrl(string $FileUrl) Set <p>skill package file address (zip); importing it triggers new version generation. It must be imported together with SkillVersion and UpdateDescription</p>
 * @method string getIconUrl() Obtain <p>Icon address</p>
 * @method void setIconUrl(string $IconUrl) Set <p>Icon address</p>
 * @method string getSkillVersion() Obtain <p>skill version number (import together with FileUrl)</p>
 * @method void setSkillVersion(string $SkillVersion) Set <p>skill version number (import together with FileUrl)</p>
 * @method string getUpdateDescription() Obtain <p>Version change description (import together with FileUrl).</p>
 * @method void setUpdateDescription(string $UpdateDescription) Set <p>Version change description (import together with FileUrl).</p>
 */
class ModifySkillRequest extends AbstractModel
{
    /**
     * @var string <p>SkillId</p>
     */
    public $SkillId;

    /**
     * @var string <p>Space ID</p>
     */
    public $SpaceId;

    /**
     * @var string <p>skill description</p>
     */
    public $DisplayDescription;

    /**
     * @var string <p>skill name</p>
     */
    public $DisplayName;

    /**
     * @var string <p>skill package file address (zip); importing it triggers new version generation. It must be imported together with SkillVersion and UpdateDescription</p>
     */
    public $FileUrl;

    /**
     * @var string <p>Icon address</p>
     */
    public $IconUrl;

    /**
     * @var string <p>skill version number (import together with FileUrl)</p>
     */
    public $SkillVersion;

    /**
     * @var string <p>Version change description (import together with FileUrl).</p>
     */
    public $UpdateDescription;

    /**
     * @param string $SkillId <p>SkillId</p>
     * @param string $SpaceId <p>Space ID</p>
     * @param string $DisplayDescription <p>skill description</p>
     * @param string $DisplayName <p>skill name</p>
     * @param string $FileUrl <p>skill package file address (zip); importing it triggers new version generation. It must be imported together with SkillVersion and UpdateDescription</p>
     * @param string $IconUrl <p>Icon address</p>
     * @param string $SkillVersion <p>skill version number (import together with FileUrl)</p>
     * @param string $UpdateDescription <p>Version change description (import together with FileUrl).</p>
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

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("DisplayDescription",$param) and $param["DisplayDescription"] !== null) {
            $this->DisplayDescription = $param["DisplayDescription"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("SkillVersion",$param) and $param["SkillVersion"] !== null) {
            $this->SkillVersion = $param["SkillVersion"];
        }

        if (array_key_exists("UpdateDescription",$param) and $param["UpdateDescription"] !== null) {
            $this->UpdateDescription = $param["UpdateDescription"];
        }
    }
}
