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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAuditRuleTemplates request structure.
 *
 * @method array getRuleTemplateIds() Obtain Audit rule template ID
 * @method void setRuleTemplateIds(array $RuleTemplateIds) Set Audit rule template ID
 * @method array getRuleFilters() Obtain Audit rule after modification
 * @method void setRuleFilters(array $RuleFilters) Set Audit rule after modification
 * @method string getRuleTemplateName() Obtain New name of the rule template
 * @method void setRuleTemplateName(string $RuleTemplateName) Set New name of the rule template
 * @method string getDescription() Obtain New description of the rule template
 * @method void setDescription(string $Description) Set New description of the rule template
 */
class ModifyAuditRuleTemplatesRequest extends AbstractModel
{
    /**
     * @var array Audit rule template ID
     */
    public $RuleTemplateIds;

    /**
     * @var array Audit rule after modification
     */
    public $RuleFilters;

    /**
     * @var string New name of the rule template
     */
    public $RuleTemplateName;

    /**
     * @var string New description of the rule template
     */
    public $Description;

    /**
     * @param array $RuleTemplateIds Audit rule template ID
     * @param array $RuleFilters Audit rule after modification
     * @param string $RuleTemplateName New name of the rule template
     * @param string $Description New description of the rule template
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
        if (array_key_exists("RuleTemplateIds",$param) and $param["RuleTemplateIds"] !== null) {
            $this->RuleTemplateIds = $param["RuleTemplateIds"];
        }

        if (array_key_exists("RuleFilters",$param) and $param["RuleFilters"] !== null) {
            $this->RuleFilters = [];
            foreach ($param["RuleFilters"] as $key => $value){
                $obj = new RuleFilters();
                $obj->deserialize($value);
                array_push($this->RuleFilters, $obj);
            }
        }

        if (array_key_exists("RuleTemplateName",$param) and $param["RuleTemplateName"] !== null) {
            $this->RuleTemplateName = $param["RuleTemplateName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
