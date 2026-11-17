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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LLM waf custom lexicon entity
 *
 * @method string getName() Obtain Lexicon name.
 * @method void setName(string $Name) Set Lexicon name.
 * @method string getDescription() Obtain Lexicon description.
 * @method void setDescription(string $Description) Set Lexicon description.
 * @method string getType() Obtain Lexicon type. Valid values: custom and builtin.
 * @method void setType(string $Type) Set Lexicon type. Valid values: custom and builtin.
 * @method array getKeywords() Obtain Keyword list.
 * @method void setKeywords(array $Keywords) Set Keyword list.
 * @method string getRuleId() Obtain Lexicon rule id.
 * @method void setRuleId(string $RuleId) Set Lexicon rule id.
 * @method array getReferencedRules() Obtain List of referenced rule IDs.
 * @method void setReferencedRules(array $ReferencedRules) Set List of referenced rule IDs.
 * @method integer getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(integer $UpdateTime) Set Update time.
 * @method string getCategory() Obtain Lexicon category. Valid values: black (default) and white. An empty value is treated as black.
 * @method void setCategory(string $Category) Set Lexicon category. Valid values: black (default) and white. An empty value is treated as black.
 */
class LLMKeywordLibrary extends AbstractModel
{
    /**
     * @var string Lexicon name.
     */
    public $Name;

    /**
     * @var string Lexicon description.
     */
    public $Description;

    /**
     * @var string Lexicon type. Valid values: custom and builtin.
     */
    public $Type;

    /**
     * @var array Keyword list.
     */
    public $Keywords;

    /**
     * @var string Lexicon rule id.
     */
    public $RuleId;

    /**
     * @var array List of referenced rule IDs.
     */
    public $ReferencedRules;

    /**
     * @var integer Update time.
     */
    public $UpdateTime;

    /**
     * @var string Lexicon category. Valid values: black (default) and white. An empty value is treated as black.
     */
    public $Category;

    /**
     * @param string $Name Lexicon name.
     * @param string $Description Lexicon description.
     * @param string $Type Lexicon type. Valid values: custom and builtin.
     * @param array $Keywords Keyword list.
     * @param string $RuleId Lexicon rule id.
     * @param array $ReferencedRules List of referenced rule IDs.
     * @param integer $UpdateTime Update time.
     * @param string $Category Lexicon category. Valid values: black (default) and white. An empty value is treated as black.
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("ReferencedRules",$param) and $param["ReferencedRules"] !== null) {
            $this->ReferencedRules = $param["ReferencedRules"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
