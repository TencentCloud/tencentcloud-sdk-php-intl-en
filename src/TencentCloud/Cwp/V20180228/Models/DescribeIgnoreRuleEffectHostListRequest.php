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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIgnoreRuleEffectHostList request structure.
 *
 * @method integer getLimit() Obtain Pagination parameters (The maximum quantity is 100)
 * @method void setLimit(integer $Limit) Set Pagination parameters (The maximum quantity is 100)
 * @method integer getOffset() Obtain Pagination parameter
 * @method void setOffset(integer $Offset) Set Pagination parameter
 * @method integer getRuleId() Obtain Detection Item ID
 * @method void setRuleId(integer $RuleId) Set Detection Item ID
 * @method array getFilters() Obtain Filter criteria
<li>AliasName - String - host alias</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>AliasName - String - host alias</li>
 * @method array getTagNames() Obtain Host tag name
 * @method void setTagNames(array $TagNames) Set Host tag name
 */
class DescribeIgnoreRuleEffectHostListRequest extends AbstractModel
{
    /**
     * @var integer Pagination parameters (The maximum quantity is 100)
     */
    public $Limit;

    /**
     * @var integer Pagination parameter
     */
    public $Offset;

    /**
     * @var integer Detection Item ID
     */
    public $RuleId;

    /**
     * @var array Filter criteria
<li>AliasName - String - host alias</li>
     */
    public $Filters;

    /**
     * @var array Host tag name
     */
    public $TagNames;

    /**
     * @param integer $Limit Pagination parameters (The maximum quantity is 100)
     * @param integer $Offset Pagination parameter
     * @param integer $RuleId Detection Item ID
     * @param array $Filters Filter criteria
<li>AliasName - String - host alias</li>
     * @param array $TagNames Host tag name
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("TagNames",$param) and $param["TagNames"] !== null) {
            $this->TagNames = $param["TagNames"];
        }
    }
}
