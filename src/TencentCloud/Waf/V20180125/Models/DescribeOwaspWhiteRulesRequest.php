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
 * DescribeOwaspWhiteRules request structure.
 *
 * @method string getDomain() Obtain Domain to be queried
 * @method void setDomain(string $Domain) Set Domain to be queried
 * @method integer getOffset() Obtain Paginate, defaults to 0.
 * @method void setOffset(integer $Offset) Set Paginate, defaults to 0.
 * @method integer getLimit() Obtain Capacity per page. defaults to 10.
 * @method void setLimit(integer $Limit) Set Capacity per page. defaults to 10.
 * @method string getBy() Obtain Specifies the field used to sort. valid values: CreateTime (creation time), UpdateTime (update time).
 * @method void setBy(string $By) Set Specifies the field used to sort. valid values: CreateTime (creation time), UpdateTime (update time).
 * @method string getOrder() Obtain Sorting method. supports asc, desc.
 * @method void setOrder(string $Order) Set Sorting method. supports asc, desc.
 * @method array getFilters() Obtain Filter conditions, support RuleId: whitelist rule ID, Name: rule Name, RuleType: whitelist rule type, Status: rule enabling Status, ValidStatus: rule effective Status, TimerType: effective method, ID: specific whitelist ID, determine whether it is a rule ID or type ID based on RuleType.
 * @method void setFilters(array $Filters) Set Filter conditions, support RuleId: whitelist rule ID, Name: rule Name, RuleType: whitelist rule type, Status: rule enabling Status, ValidStatus: rule effective Status, TimerType: effective method, ID: specific whitelist ID, determine whether it is a rule ID or type ID based on RuleType.
 */
class DescribeOwaspWhiteRulesRequest extends AbstractModel
{
    /**
     * @var string Domain to be queried
     */
    public $Domain;

    /**
     * @var integer Paginate, defaults to 0.
     */
    public $Offset;

    /**
     * @var integer Capacity per page. defaults to 10.
     */
    public $Limit;

    /**
     * @var string Specifies the field used to sort. valid values: CreateTime (creation time), UpdateTime (update time).
     */
    public $By;

    /**
     * @var string Sorting method. supports asc, desc.
     */
    public $Order;

    /**
     * @var array Filter conditions, support RuleId: whitelist rule ID, Name: rule Name, RuleType: whitelist rule type, Status: rule enabling Status, ValidStatus: rule effective Status, TimerType: effective method, ID: specific whitelist ID, determine whether it is a rule ID or type ID based on RuleType.
     */
    public $Filters;

    /**
     * @param string $Domain Domain to be queried
     * @param integer $Offset Paginate, defaults to 0.
     * @param integer $Limit Capacity per page. defaults to 10.
     * @param string $By Specifies the field used to sort. valid values: CreateTime (creation time), UpdateTime (update time).
     * @param string $Order Sorting method. supports asc, desc.
     * @param array $Filters Filter conditions, support RuleId: whitelist rule ID, Name: rule Name, RuleType: whitelist rule type, Status: rule enabling Status, ValidStatus: rule effective Status, TimerType: effective method, ID: specific whitelist ID, determine whether it is a rule ID or type ID based on RuleType.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new FiltersItemNew();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
