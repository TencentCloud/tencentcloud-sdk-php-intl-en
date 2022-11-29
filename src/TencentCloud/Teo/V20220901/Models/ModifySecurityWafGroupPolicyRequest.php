<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecurityWafGroupPolicy request structure.
 *
 * @method string getZoneId() Obtain The site ID. You must specify either "ZoneId+Entity" or "TemplateId".
 * @method void setZoneId(string $ZoneId) Set The site ID. You must specify either "ZoneId+Entity" or "TemplateId".
 * @method string getEntity() Obtain The subdomain name. You must specify either "ZoneId+Entity" or "TemplateId". 
 * @method void setEntity(string $Entity) Set The subdomain name. You must specify either "ZoneId+Entity" or "TemplateId". 
 * @method string getSwitch() Obtain Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>If not specified, it defaults to the setting that was last configured.
 * @method void setSwitch(string $Switch) Set Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>If not specified, it defaults to the setting that was last configured.
 * @method string getLevel() Obtain The rule level. Values:
<li>`loose`: Loose</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`stricter`: Super strict</li>
<li>`custom`: Custom</li>If not specified, it defaults to the setting that was last configured.
 * @method void setLevel(string $Level) Set The rule level. Values:
<li>`loose`: Loose</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`stricter`: Super strict</li>
<li>`custom`: Custom</li>If not specified, it defaults to the setting that was last configured.
 * @method string getMode() Obtain The rule action. Values:
<li>`block`: Block</li>
<li>`observe`: Observe</li>If not specified, it defaults to the setting that was last configured.
 * @method void setMode(string $Mode) Set The rule action. Values:
<li>`block`: Block</li>
<li>`observe`: Observe</li>If not specified, it defaults to the setting that was last configured.
 * @method WafRule getWafRules() Obtain The settings of the managed rule. If not specified, it defaults to the settings that were last configured.
 * @method void setWafRules(WafRule $WafRules) Set The settings of the managed rule. If not specified, it defaults to the settings that were last configured.
 * @method AiRule getAiRule() Obtain The settings of the AI rule engine. If not specified, it defaults to the settings that were last configured.
 * @method void setAiRule(AiRule $AiRule) Set The settings of the AI rule engine. If not specified, it defaults to the settings that were last configured.
 * @method array getWafGroups() Obtain The settings of the managed rule group. If not specified, it defaults to the settings that were last configured.
 * @method void setWafGroups(array $WafGroups) Set The settings of the managed rule group. If not specified, it defaults to the settings that were last configured.
 * @method string getTemplateId() Obtain The template ID. You must specify either this field or "ZoneId+Entity".
 * @method void setTemplateId(string $TemplateId) Set The template ID. You must specify either this field or "ZoneId+Entity".
 */
class ModifySecurityWafGroupPolicyRequest extends AbstractModel
{
    /**
     * @var string The site ID. You must specify either "ZoneId+Entity" or "TemplateId".
     */
    public $ZoneId;

    /**
     * @var string The subdomain name. You must specify either "ZoneId+Entity" or "TemplateId". 
     */
    public $Entity;

    /**
     * @var string Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>If not specified, it defaults to the setting that was last configured.
     */
    public $Switch;

    /**
     * @var string The rule level. Values:
<li>`loose`: Loose</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`stricter`: Super strict</li>
<li>`custom`: Custom</li>If not specified, it defaults to the setting that was last configured.
     */
    public $Level;

    /**
     * @var string The rule action. Values:
<li>`block`: Block</li>
<li>`observe`: Observe</li>If not specified, it defaults to the setting that was last configured.
     */
    public $Mode;

    /**
     * @var WafRule The settings of the managed rule. If not specified, it defaults to the settings that were last configured.
     */
    public $WafRules;

    /**
     * @var AiRule The settings of the AI rule engine. If not specified, it defaults to the settings that were last configured.
     */
    public $AiRule;

    /**
     * @var array The settings of the managed rule group. If not specified, it defaults to the settings that were last configured.
     */
    public $WafGroups;

    /**
     * @var string The template ID. You must specify either this field or "ZoneId+Entity".
     */
    public $TemplateId;

    /**
     * @param string $ZoneId The site ID. You must specify either "ZoneId+Entity" or "TemplateId".
     * @param string $Entity The subdomain name. You must specify either "ZoneId+Entity" or "TemplateId". 
     * @param string $Switch Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>If not specified, it defaults to the setting that was last configured.
     * @param string $Level The rule level. Values:
<li>`loose`: Loose</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`stricter`: Super strict</li>
<li>`custom`: Custom</li>If not specified, it defaults to the setting that was last configured.
     * @param string $Mode The rule action. Values:
<li>`block`: Block</li>
<li>`observe`: Observe</li>If not specified, it defaults to the setting that was last configured.
     * @param WafRule $WafRules The settings of the managed rule. If not specified, it defaults to the settings that were last configured.
     * @param AiRule $AiRule The settings of the AI rule engine. If not specified, it defaults to the settings that were last configured.
     * @param array $WafGroups The settings of the managed rule group. If not specified, it defaults to the settings that were last configured.
     * @param string $TemplateId The template ID. You must specify either this field or "ZoneId+Entity".
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("WafRules",$param) and $param["WafRules"] !== null) {
            $this->WafRules = new WafRule();
            $this->WafRules->deserialize($param["WafRules"]);
        }

        if (array_key_exists("AiRule",$param) and $param["AiRule"] !== null) {
            $this->AiRule = new AiRule();
            $this->AiRule->deserialize($param["AiRule"]);
        }

        if (array_key_exists("WafGroups",$param) and $param["WafGroups"] !== null) {
            $this->WafGroups = [];
            foreach ($param["WafGroups"] as $key => $value){
                $obj = new WafGroup();
                $obj->deserialize($value);
                array_push($this->WafGroups, $obj);
            }
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
