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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRaspRuleVuls request structure.
 *
 * @method array getFilters() Obtain Filter criteria. Name=WhiteType is required. 0: indicates a list of vulnerabilities with custom scope. 1: indicates a list of all request ranges.
 * @method void setFilters(array $Filters) Set Filter criteria. Name=WhiteType is required. 0: indicates a list of vulnerabilities with custom scope. 1: indicates a list of all request ranges.
 * @method integer getLimit() Obtain Number of entries to be returned. Default value: 10. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Number of entries to be returned. Default value: 10. Maximum value: 1000.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 */
class DescribeRaspRuleVulsRequest extends AbstractModel
{
    /**
     * @var array Filter criteria. Name=WhiteType is required. 0: indicates a list of vulnerabilities with custom scope. 1: indicates a list of all request ranges.
     */
    public $Filters;

    /**
     * @var integer Number of entries to be returned. Default value: 10. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @param array $Filters Filter criteria. Name=WhiteType is required. 0: indicates a list of vulnerabilities with custom scope. 1: indicates a list of all request ranges.
     * @param integer $Limit Number of entries to be returned. Default value: 10. Maximum value: 1000.
     * @param integer $Offset Offset. Default value: 0.
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
