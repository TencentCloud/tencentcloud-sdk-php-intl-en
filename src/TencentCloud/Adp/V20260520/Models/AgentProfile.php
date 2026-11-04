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
 * Basic configuration of the Agent
 *
 * @method string getName() Obtain <p>Agent Name</p>
 * @method void setName(string $Name) Set <p>Agent Name</p>
 * @method string getIconUrl() Obtain <p>Icon URL</p>
 * @method void setIconUrl(string $IconUrl) Set <p>Icon URL</p>
 * @method integer getRole() Obtain <p>Agent role: 0=primary / 1=secondary</p>
 * @method void setRole(integer $Role) Set <p>Agent role: 0=primary / 1=secondary</p>
 * @method string getDescription() Obtain <p>Agent description</p>
 * @method void setDescription(string $Description) Set <p>Agent description</p>
 * @method string getAppName() Obtain <p>Application name.</p>
 * @method void setAppName(string $AppName) Set <p>Application name.</p>
 * @method string getDeveloper() Obtain <p>Developer</p>
 * @method void setDeveloper(string $Developer) Set <p>Developer</p>
 * @method string getParentAgentId() Obtain <p>Primary AgentId, read-only, cannot be updated through API modification</p>
 * @method void setParentAgentId(string $ParentAgentId) Set <p>Primary AgentId, read-only, cannot be updated through API modification</p>
 */
class AgentProfile extends AbstractModel
{
    /**
     * @var string <p>Agent Name</p>
     */
    public $Name;

    /**
     * @var string <p>Icon URL</p>
     */
    public $IconUrl;

    /**
     * @var integer <p>Agent role: 0=primary / 1=secondary</p>
     */
    public $Role;

    /**
     * @var string <p>Agent description</p>
     */
    public $Description;

    /**
     * @var string <p>Application name.</p>
     */
    public $AppName;

    /**
     * @var string <p>Developer</p>
     */
    public $Developer;

    /**
     * @var string <p>Primary AgentId, read-only, cannot be updated through API modification</p>
     */
    public $ParentAgentId;

    /**
     * @param string $Name <p>Agent Name</p>
     * @param string $IconUrl <p>Icon URL</p>
     * @param integer $Role <p>Agent role: 0=primary / 1=secondary</p>
     * @param string $Description <p>Agent description</p>
     * @param string $AppName <p>Application name.</p>
     * @param string $Developer <p>Developer</p>
     * @param string $ParentAgentId <p>Primary AgentId, read-only, cannot be updated through API modification</p>
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

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("Developer",$param) and $param["Developer"] !== null) {
            $this->Developer = $param["Developer"];
        }

        if (array_key_exists("ParentAgentId",$param) and $param["ParentAgentId"] !== null) {
            $this->ParentAgentId = $param["ParentAgentId"];
        }
    }
}
