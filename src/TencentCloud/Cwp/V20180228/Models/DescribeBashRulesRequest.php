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
 * DescribeBashRules request structure.
 *
 * @method integer getType() Obtain 0: system rule; 1: user rule.
 * @method void setType(integer $Type) Set 0: system rule; 1: user rule.
 * @method integer getLimit() Obtain Number of returned entries. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned entries. Maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method array getFilters() Obtain Filter criteria
<li>Keywords - String - required: no - keyword (rule name)</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>Keywords - String - required: no - keyword (rule name)</li>
 */
class DescribeBashRulesRequest extends AbstractModel
{
    /**
     * @var integer 0: system rule; 1: user rule.
     */
    public $Type;

    /**
     * @var integer Number of returned entries. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Filter criteria
<li>Keywords - String - required: no - keyword (rule name)</li>
     */
    public $Filters;

    /**
     * @param integer $Type 0: system rule; 1: user rule.
     * @param integer $Limit Number of returned entries. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param array $Filters Filter criteria
<li>Keywords - String - required: no - keyword (rule name)</li>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
