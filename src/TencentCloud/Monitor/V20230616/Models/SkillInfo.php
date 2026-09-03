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
 * Skill entity
 *
 * @method string getSkillId() Obtain <p>Skill ID</p>
 * @method void setSkillId(string $SkillId) Set <p>Skill ID</p>
 * @method string getName() Obtain <p>Skill name</p>
 * @method void setName(string $Name) Set <p>Skill name</p>
 * @method string getDescription() Obtain <p>Skill description.</p>
 * @method void setDescription(string $Description) Set <p>Skill description.</p>
 * @method boolean getEnabled() Obtain <p>Whether to enable</p>
 * @method void setEnabled(boolean $Enabled) Set <p>Whether to enable</p>
 */
class SkillInfo extends AbstractModel
{
    /**
     * @var string <p>Skill ID</p>
     */
    public $SkillId;

    /**
     * @var string <p>Skill name</p>
     */
    public $Name;

    /**
     * @var string <p>Skill description.</p>
     */
    public $Description;

    /**
     * @var boolean <p>Whether to enable</p>
     */
    public $Enabled;

    /**
     * @param string $SkillId <p>Skill ID</p>
     * @param string $Name <p>Skill name</p>
     * @param string $Description <p>Skill description.</p>
     * @param boolean $Enabled <p>Whether to enable</p>
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

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
