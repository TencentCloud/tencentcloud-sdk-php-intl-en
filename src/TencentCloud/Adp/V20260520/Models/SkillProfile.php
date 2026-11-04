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
 * SkillProfile basic display information.
 *
 * @method string getCreateTime() Obtain <p>Creation time (Unix seconds).</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time (Unix seconds).</p>
 * @method string getCreator() Obtain <p>Creator.</p>
 * @method void setCreator(string $Creator) Set <p>Creator.</p>
 * @method string getDescription() Obtain <p>Skill description</p>
 * @method void setDescription(string $Description) Set <p>Skill description</p>
 * @method string getDisplayDescription() Obtain <p>Skill show description</p>
 * @method void setDisplayDescription(string $DisplayDescription) Set <p>Skill show description</p>
 * @method string getDisplayName() Obtain <p>Skill display name</p>
 * @method void setDisplayName(string $DisplayName) Set <p>Skill display name</p>
 * @method string getIconUrl() Obtain <p>Skill icon</p>
 * @method void setIconUrl(string $IconUrl) Set <p>Skill icon</p>
 * @method string getName() Obtain <p>Skill name</p>
 * @method void setName(string $Name) Set <p>Skill name</p>
 * @method string getUpdateTime() Obtain <p>Update time (Unix seconds).</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time (Unix seconds).</p>
 * @method string getSpaceId() Obtain <p>Space</p>
 * @method void setSpaceId(string $SpaceId) Set <p>Space</p>
 */
class SkillProfile extends AbstractModel
{
    /**
     * @var string <p>Creation time (Unix seconds).</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Creator.</p>
     */
    public $Creator;

    /**
     * @var string <p>Skill description</p>
     */
    public $Description;

    /**
     * @var string <p>Skill show description</p>
     */
    public $DisplayDescription;

    /**
     * @var string <p>Skill display name</p>
     */
    public $DisplayName;

    /**
     * @var string <p>Skill icon</p>
     */
    public $IconUrl;

    /**
     * @var string <p>Skill name</p>
     */
    public $Name;

    /**
     * @var string <p>Update time (Unix seconds).</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Space</p>
     */
    public $SpaceId;

    /**
     * @param string $CreateTime <p>Creation time (Unix seconds).</p>
     * @param string $Creator <p>Creator.</p>
     * @param string $Description <p>Skill description</p>
     * @param string $DisplayDescription <p>Skill show description</p>
     * @param string $DisplayName <p>Skill display name</p>
     * @param string $IconUrl <p>Skill icon</p>
     * @param string $Name <p>Skill name</p>
     * @param string $UpdateTime <p>Update time (Unix seconds).</p>
     * @param string $SpaceId <p>Space</p>
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }
    }
}
