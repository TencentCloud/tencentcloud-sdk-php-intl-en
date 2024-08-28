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
 * DescribeFileTamperRules request structure.
 *
 * @method array getFilters() Obtain Filtering criteria
<li>RuleCategory - string - rule category: 0: system rule; 1: user rule</li><li>Name - String - rule name</li>
 * @method void setFilters(array $Filters) Set Filtering criteria
<li>RuleCategory - string - rule category: 0: system rule; 1: user rule</li><li>Name - String - rule name</li>
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of entries to be returned. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of entries to be returned. Default value: 10. Maximum value: 100.
 * @method string getOrder() Obtain Sorting order: ASC, DESC
 * @method void setOrder(string $Order) Set Sorting order: ASC, DESC
 * @method string getBy() Obtain Sorting field: CreateTime, ModifyTime, HostCount
 * @method void setBy(string $By) Set Sorting field: CreateTime, ModifyTime, HostCount
 */
class DescribeFileTamperRulesRequest extends AbstractModel
{
    /**
     * @var array Filtering criteria
<li>RuleCategory - string - rule category: 0: system rule; 1: user rule</li><li>Name - String - rule name</li>
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of entries to be returned. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Sorting order: ASC, DESC
     */
    public $Order;

    /**
     * @var string Sorting field: CreateTime, ModifyTime, HostCount
     */
    public $By;

    /**
     * @param array $Filters Filtering criteria
<li>RuleCategory - string - rule category: 0: system rule; 1: user rule</li><li>Name - String - rule name</li>
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of entries to be returned. Default value: 10. Maximum value: 100.
     * @param string $Order Sorting order: ASC, DESC
     * @param string $By Sorting field: CreateTime, ModifyTime, HostCount
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
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
