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
 * PluginProfile
 *
 * @method string getAuthor() Obtain Plug-in author
 * @method void setAuthor(string $Author) Set Plug-in author
 * @method string getDescription() Obtain Plugin description
 * @method void setDescription(string $Description) Set Plugin description
 * @method string getIconUrl() Obtain Plug-in icon url
 * @method void setIconUrl(string $IconUrl) Set Plug-in icon url
 * @method string getName() Obtain Plugin name
 * @method void setName(string $Name) Set Plugin name
 * @method integer getPluginClass() Obtain <p>Plug-in product type</p><p>Enumeration values:</p><ul><li>0: ordinary plug-in</li><li>1: connector plug-in</li></ul>
 * @method void setPluginClass(integer $PluginClass) Set <p>Plug-in product type</p><p>Enumeration values:</p><ul><li>0: ordinary plug-in</li><li>1: connector plug-in</li></ul>
 * @method integer getPluginKind() Obtain <p>Plugin type</p><p>Enumeration values:</p><ul><li>0: API</li><li>1: Code</li><li>2: MCP</li><li>3: Application</li></ul>
 * @method void setPluginKind(integer $PluginKind) Set <p>Plugin type</p><p>Enumeration values:</p><ul><li>0: API</li><li>1: Code</li><li>2: MCP</li><li>3: Application</li></ul>
 * @method integer getPluginSource() Obtain <p>Plug-in source</p><p>Enumeration values:</p><ul><li>0: custom plugin</li><li>1: official plug-in</li><li>2: third-party plugin</li></ul>
 * @method void setPluginSource(integer $PluginSource) Set <p>Plug-in source</p><p>Enumeration values:</p><ul><li>0: custom plugin</li><li>1: official plug-in</li><li>2: third-party plugin</li></ul>
 */
class PluginProfile extends AbstractModel
{
    /**
     * @var string Plug-in author
     */
    public $Author;

    /**
     * @var string Plugin description
     */
    public $Description;

    /**
     * @var string Plug-in icon url
     */
    public $IconUrl;

    /**
     * @var string Plugin name
     */
    public $Name;

    /**
     * @var integer <p>Plug-in product type</p><p>Enumeration values:</p><ul><li>0: ordinary plug-in</li><li>1: connector plug-in</li></ul>
     */
    public $PluginClass;

    /**
     * @var integer <p>Plugin type</p><p>Enumeration values:</p><ul><li>0: API</li><li>1: Code</li><li>2: MCP</li><li>3: Application</li></ul>
     */
    public $PluginKind;

    /**
     * @var integer <p>Plug-in source</p><p>Enumeration values:</p><ul><li>0: custom plugin</li><li>1: official plug-in</li><li>2: third-party plugin</li></ul>
     */
    public $PluginSource;

    /**
     * @param string $Author Plug-in author
     * @param string $Description Plugin description
     * @param string $IconUrl Plug-in icon url
     * @param string $Name Plugin name
     * @param integer $PluginClass <p>Plug-in product type</p><p>Enumeration values:</p><ul><li>0: ordinary plug-in</li><li>1: connector plug-in</li></ul>
     * @param integer $PluginKind <p>Plugin type</p><p>Enumeration values:</p><ul><li>0: API</li><li>1: Code</li><li>2: MCP</li><li>3: Application</li></ul>
     * @param integer $PluginSource <p>Plug-in source</p><p>Enumeration values:</p><ul><li>0: custom plugin</li><li>1: official plug-in</li><li>2: third-party plugin</li></ul>
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
        if (array_key_exists("Author",$param) and $param["Author"] !== null) {
            $this->Author = $param["Author"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PluginClass",$param) and $param["PluginClass"] !== null) {
            $this->PluginClass = $param["PluginClass"];
        }

        if (array_key_exists("PluginKind",$param) and $param["PluginKind"] !== null) {
            $this->PluginKind = $param["PluginKind"];
        }

        if (array_key_exists("PluginSource",$param) and $param["PluginSource"] !== null) {
            $this->PluginSource = $param["PluginSource"];
        }
    }
}
