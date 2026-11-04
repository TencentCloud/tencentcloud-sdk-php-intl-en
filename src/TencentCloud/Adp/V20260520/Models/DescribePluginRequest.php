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
 * DescribePlugin request structure.
 *
 * @method string getPluginId() Obtain <p>Plugin id</p>
 * @method void setPluginId(string $PluginId) Set <p>Plugin id</p>
 * @method string getSpaceId() Obtain <p>Current space id</p>
 * @method void setSpaceId(string $SpaceId) Set <p>Current space id</p>
 * @method FieldMask getFieldMask() Obtain <p>Get the specified field</p>
 * @method void setFieldMask(FieldMask $FieldMask) Set <p>Get the specified field</p>
 * @method integer getModule() Obtain <p>Plug-in display scenario. If not passed or set to 0, the scenario is not limited.</p><p>Enumeration values:</p><ul><li>0: Not limited</li><li>1: Agent Mode</li><li>2: Workflow</li><li>3: Intelligent workbench</li></ul>
 * @method void setModule(integer $Module) Set <p>Plug-in display scenario. If not passed or set to 0, the scenario is not limited.</p><p>Enumeration values:</p><ul><li>0: Not limited</li><li>1: Agent Mode</li><li>2: Workflow</li><li>3: Intelligent workbench</li></ul>
 */
class DescribePluginRequest extends AbstractModel
{
    /**
     * @var string <p>Plugin id</p>
     */
    public $PluginId;

    /**
     * @var string <p>Current space id</p>
     */
    public $SpaceId;

    /**
     * @var FieldMask <p>Get the specified field</p>
     */
    public $FieldMask;

    /**
     * @var integer <p>Plug-in display scenario. If not passed or set to 0, the scenario is not limited.</p><p>Enumeration values:</p><ul><li>0: Not limited</li><li>1: Agent Mode</li><li>2: Workflow</li><li>3: Intelligent workbench</li></ul>
     */
    public $Module;

    /**
     * @param string $PluginId <p>Plugin id</p>
     * @param string $SpaceId <p>Current space id</p>
     * @param FieldMask $FieldMask <p>Get the specified field</p>
     * @param integer $Module <p>Plug-in display scenario. If not passed or set to 0, the scenario is not limited.</p><p>Enumeration values:</p><ul><li>0: Not limited</li><li>1: Agent Mode</li><li>2: Workflow</li><li>3: Intelligent workbench</li></ul>
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("FieldMask",$param) and $param["FieldMask"] !== null) {
            $this->FieldMask = new FieldMask();
            $this->FieldMask->deserialize($param["FieldMask"]);
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }
    }
}
