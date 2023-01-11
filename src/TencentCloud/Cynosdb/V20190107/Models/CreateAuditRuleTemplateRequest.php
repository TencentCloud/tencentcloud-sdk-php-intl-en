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
 * CreateAuditRuleTemplate request structure.
 *
 * @method array getRuleFilters() Obtain Audit rule
 * @method void setRuleFilters(array $RuleFilters) Set Audit rule
 * @method string getRuleTemplateName() Obtain Rule template name
 * @method void setRuleTemplateName(string $RuleTemplateName) Set Rule template name
 * @method string getDescription() Obtain Rule template description.
 * @method void setDescription(string $Description) Set Rule template description.
 */
class CreateAuditRuleTemplateRequest extends AbstractModel
{
    /**
     * @var array Audit rule
     */
    public $RuleFilters;

    /**
     * @var string Rule template name
     */
    public $RuleTemplateName;

    /**
     * @var string Rule template description.
     */
    public $Description;

    /**
     * @param array $RuleFilters Audit rule
     * @param string $RuleTemplateName Rule template name
     * @param string $Description Rule template description.
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
