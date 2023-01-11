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
 * DescribeAuditRuleTemplates request structure.
 *
 * @method array getRuleTemplateIds() Obtain Rule template ID
 * @method void setRuleTemplateIds(array $RuleTemplateIds) Set Rule template ID
 * @method array getRuleTemplateNames() Obtain Rule template name
 * @method void setRuleTemplateNames(array $RuleTemplateNames) Set Rule template name
 * @method integer getLimit() Obtain Number of results returned per request. Default value: `20`.
 * @method void setLimit(integer $Limit) Set Number of results returned per request. Default value: `20`.
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 */
class DescribeAuditRuleTemplatesRequest extends AbstractModel
{
    /**
     * @var array Rule template ID
     */
    public $RuleTemplateIds;

    /**
     * @var array Rule template name
     */
    public $RuleTemplateNames;

    /**
     * @var integer Number of results returned per request. Default value: `20`.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @param array $RuleTemplateIds Rule template ID
     * @param array $RuleTemplateNames Rule template name
     * @param integer $Limit Number of results returned per request. Default value: `20`.
     * @param integer $Offset Offset. Default value: `0`.
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

        if (array_key_exists("RuleTemplateNames",$param) and $param["RuleTemplateNames"] !== null) {
            $this->RuleTemplateNames = $param["RuleTemplateNames"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
