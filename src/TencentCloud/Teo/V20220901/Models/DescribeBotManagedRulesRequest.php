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
 * DescribeBotManagedRules request structure.
 *
 * @method integer getOffset() Obtain The page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set The page offset. Default value: 0
 * @method integer getLimit() Obtain The paginated query limit. Default value: 20. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set The paginated query limit. Default value: 20. Maximum value: 1000.
 * @method string getZoneId() Obtain The site ID. You must specify either "ZoneId+Entity" or "TemplateId".
 * @method void setZoneId(string $ZoneId) Set The site ID. You must specify either "ZoneId+Entity" or "TemplateId".
 * @method string getEntity() Obtain The subdomain name/L4 proxy. You must specify either "ZoneId+Entity" or "TemplateId".
 * @method void setEntity(string $Entity) Set The subdomain name/L4 proxy. You must specify either "ZoneId+Entity" or "TemplateId".
 * @method string getRuleType() Obtain The rule type. Values:
<li>`idcid`</li>
<li>`sipbot`</li>
<li>`uabot`</li>If no value or 0 is passed, all rule types will be selected.
 * @method void setRuleType(string $RuleType) Set The rule type. Values:
<li>`idcid`</li>
<li>`sipbot`</li>
<li>`uabot`</li>If no value or 0 is passed, all rule types will be selected.
 * @method string getTemplateId() Obtain The template ID. You must specify either "ZoneId+Entity" or "TemplateId".
 * @method void setTemplateId(string $TemplateId) Set The template ID. You must specify either "ZoneId+Entity" or "TemplateId".
 */
class DescribeBotManagedRulesRequest extends AbstractModel
{
    /**
     * @var integer The page offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer The paginated query limit. Default value: 20. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @var string The site ID. You must specify either "ZoneId+Entity" or "TemplateId".
     */
    public $ZoneId;

    /**
     * @var string The subdomain name/L4 proxy. You must specify either "ZoneId+Entity" or "TemplateId".
     */
    public $Entity;

    /**
     * @var string The rule type. Values:
<li>`idcid`</li>
<li>`sipbot`</li>
<li>`uabot`</li>If no value or 0 is passed, all rule types will be selected.
     */
    public $RuleType;

    /**
     * @var string The template ID. You must specify either "ZoneId+Entity" or "TemplateId".
     */
    public $TemplateId;

    /**
     * @param integer $Offset The page offset. Default value: 0
     * @param integer $Limit The paginated query limit. Default value: 20. Maximum value: 1000.
     * @param string $ZoneId The site ID. You must specify either "ZoneId+Entity" or "TemplateId".
     * @param string $Entity The subdomain name/L4 proxy. You must specify either "ZoneId+Entity" or "TemplateId".
     * @param string $RuleType The rule type. Values:
<li>`idcid`</li>
<li>`sipbot`</li>
<li>`uabot`</li>If no value or 0 is passed, all rule types will be selected.
     * @param string $TemplateId The template ID. You must specify either "ZoneId+Entity" or "TemplateId".
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}