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
 * Plugin information of the Agent
 *
 * @method AgentPluginConfig getConfig() Obtain <p>Basic plug-in configuration</p>
 * @method void setConfig(AgentPluginConfig $Config) Set <p>Basic plug-in configuration</p>
 * @method string getName() Obtain <p>Plugin name.</p>
 * @method void setName(string $Name) Set <p>Plugin name.</p>
 * @method string getIconUrl() Obtain <p>Plug-in icon url</p>
 * @method void setIconUrl(string $IconUrl) Set <p>Plug-in icon url</p>
 * @method string getDescription() Obtain <p>Plugin description</p>
 * @method void setDescription(string $Description) Set <p>Plugin description</p>
 * @method integer getPluginClass() Obtain <p>Plug-in product type</p><p>Enumeration values:</p><ul><li>0: ordinary plug-in</li><li>1: connector plug-in</li></ul>
 * @method void setPluginClass(integer $PluginClass) Set <p>Plug-in product type</p><p>Enumeration values:</p><ul><li>0: ordinary plug-in</li><li>1: connector plug-in</li></ul>
 * @method integer getStatus() Obtain <p>Plug-in status</p><p>Enumeration values:</p><ul><li>0: unknown</li><li>1: available</li><li>2: unavailable</li></ul>
 * @method void setStatus(integer $Status) Set <p>Plug-in status</p><p>Enumeration values:</p><ul><li>0: unknown</li><li>1: available</li><li>2: unavailable</li></ul>
 * @method integer getAuthConfigStatus() Obtain <p>Plug-in authentication configuration status</p><p>Enumeration values:</p><ul><li>0: No authorization required</li><li>1: Unconfigured</li><li>2: Configured</li></ul>
 * @method void setAuthConfigStatus(integer $AuthConfigStatus) Set <p>Plug-in authentication configuration status</p><p>Enumeration values:</p><ul><li>0: No authorization required</li><li>1: Unconfigured</li><li>2: Configured</li></ul>
 */
class AgentPlugin extends AbstractModel
{
    /**
     * @var AgentPluginConfig <p>Basic plug-in configuration</p>
     */
    public $Config;

    /**
     * @var string <p>Plugin name.</p>
     */
    public $Name;

    /**
     * @var string <p>Plug-in icon url</p>
     */
    public $IconUrl;

    /**
     * @var string <p>Plugin description</p>
     */
    public $Description;

    /**
     * @var integer <p>Plug-in product type</p><p>Enumeration values:</p><ul><li>0: ordinary plug-in</li><li>1: connector plug-in</li></ul>
     */
    public $PluginClass;

    /**
     * @var integer <p>Plug-in status</p><p>Enumeration values:</p><ul><li>0: unknown</li><li>1: available</li><li>2: unavailable</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>Plug-in authentication configuration status</p><p>Enumeration values:</p><ul><li>0: No authorization required</li><li>1: Unconfigured</li><li>2: Configured</li></ul>
     */
    public $AuthConfigStatus;

    /**
     * @param AgentPluginConfig $Config <p>Basic plug-in configuration</p>
     * @param string $Name <p>Plugin name.</p>
     * @param string $IconUrl <p>Plug-in icon url</p>
     * @param string $Description <p>Plugin description</p>
     * @param integer $PluginClass <p>Plug-in product type</p><p>Enumeration values:</p><ul><li>0: ordinary plug-in</li><li>1: connector plug-in</li></ul>
     * @param integer $Status <p>Plug-in status</p><p>Enumeration values:</p><ul><li>0: unknown</li><li>1: available</li><li>2: unavailable</li></ul>
     * @param integer $AuthConfigStatus <p>Plug-in authentication configuration status</p><p>Enumeration values:</p><ul><li>0: No authorization required</li><li>1: Unconfigured</li><li>2: Configured</li></ul>
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
        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new AgentPluginConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PluginClass",$param) and $param["PluginClass"] !== null) {
            $this->PluginClass = $param["PluginClass"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AuthConfigStatus",$param) and $param["AuthConfigStatus"] !== null) {
            $this->AuthConfigStatus = $param["AuthConfigStatus"];
        }
    }
}
