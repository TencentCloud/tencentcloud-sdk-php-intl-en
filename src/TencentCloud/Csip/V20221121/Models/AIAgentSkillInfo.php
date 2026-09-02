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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * skill details of an AI Agent
 *
 * @method string getName() Obtain skill name
 * @method void setName(string $Name) Set skill name
 * @method string getPath() Obtain skill path
 * @method void setPath(string $Path) Set skill path
 * @method string getVersion() Obtain Skill version.
 * @method void setVersion(string $Version) Set Skill version.
 * @method string getDescription() Obtain skill description
 * @method void setDescription(string $Description) Set skill description
 */
class AIAgentSkillInfo extends AbstractModel
{
    /**
     * @var string skill name
     */
    public $Name;

    /**
     * @var string skill path
     */
    public $Path;

    /**
     * @var string Skill version.
     */
    public $Version;

    /**
     * @var string skill description
     */
    public $Description;

    /**
     * @param string $Name skill name
     * @param string $Path skill path
     * @param string $Version Skill version.
     * @param string $Description skill description
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
