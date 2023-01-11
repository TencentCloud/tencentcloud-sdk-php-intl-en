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
 * Details of an audit rule template
 *
 * @method string getRuleTemplateId() Obtain Rule template ID
 * @method void setRuleTemplateId(string $RuleTemplateId) Set Rule template ID
 * @method string getRuleTemplateName() Obtain Rule template name
 * @method void setRuleTemplateName(string $RuleTemplateName) Set Rule template name
 * @method array getRuleFilters() Obtain Filter of the rule template
 * @method void setRuleFilters(array $RuleFilters) Set Filter of the rule template
 * @method string getDescription() Obtain Description of a rule template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description of a rule template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateAt() Obtain Creation time of a rule template
 * @method void setCreateAt(string $CreateAt) Set Creation time of a rule template
 */
class AuditRuleTemplateInfo extends AbstractModel
{
    /**
     * @var string Rule template ID
     */
    public $RuleTemplateId;

    /**
     * @var string Rule template name
     */
    public $RuleTemplateName;

    /**
     * @var array Filter of the rule template
     */
    public $RuleFilters;

    /**
     * @var string Description of a rule template
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Creation time of a rule template
     */
    public $CreateAt;

    /**
     * @param string $RuleTemplateId Rule template ID
     * @param string $RuleTemplateName Rule template name
     * @param array $RuleFilters Filter of the rule template
     * @param string $Description Description of a rule template
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateAt Creation time of a rule template
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
        if (array_key_exists("RuleTemplateId",$param) and $param["RuleTemplateId"] !== null) {
            $this->RuleTemplateId = $param["RuleTemplateId"];
        }

        if (array_key_exists("RuleTemplateName",$param) and $param["RuleTemplateName"] !== null) {
            $this->RuleTemplateName = $param["RuleTemplateName"];
        }

        if (array_key_exists("RuleFilters",$param) and $param["RuleFilters"] !== null) {
            $this->RuleFilters = [];
            foreach ($param["RuleFilters"] as $key => $value){
                $obj = new RuleFilters();
                $obj->deserialize($value);
                array_push($this->RuleFilters, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }
    }
}
