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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBlockIgnoreList request structure.
 *
 * @method integer getLimit() Obtain Number of entries per page.
 * @method void setLimit(integer $Limit) Set Number of entries per page.
 * @method integer getOffset() Obtain Page offset.
 * @method void setOffset(integer $Offset) Set Page offset.
 * @method string getDirection() Obtain Direction. Valid values: 1: inbound public access; 0: outbound public access; 3: private network access; empty string: all access.
 * @method void setDirection(string $Direction) Set Direction. Valid values: 1: inbound public access; 0: outbound public access; 3: private network access; empty string: all access.
 * @method integer getRuleType() Obtain Rule type. Valid values: 1: block; 2: allow.
 * @method void setRuleType(integer $RuleType) Set Rule type. Valid values: 1: block; 2: allow.
 * @method string getOrder() Obtain Column by which rules are sorted. Valid values: EndTime: end time; StartTime: start time; MatchTimes: number of matching times.
 * @method void setOrder(string $Order) Set Column by which rules are sorted. Valid values: EndTime: end time; StartTime: start time; MatchTimes: number of matching times.
 * @method string getBy() Obtain Sort order. Valid values: desc: descending; asc: ascending.
 * @method void setBy(string $By) Set Sort order. Valid values: desc: descending; asc: ascending.
 * @method string getSearchValue() Obtain Search keys, in a JSON string. Valid values: {}: empty; domain: domain name; level: threat level; ignore_reason: reason for allowing access; rule_source: source of a security event; address: geographical location; common: fuzzy search.
 * @method void setSearchValue(string $SearchValue) Set Search keys, in a JSON string. Valid values: {}: empty; domain: domain name; level: threat level; ignore_reason: reason for allowing access; rule_source: source of a security event; address: geographical location; common: fuzzy search.
 */
class DescribeBlockIgnoreListRequest extends AbstractModel
{
    /**
     * @var integer Number of entries per page.
     */
    public $Limit;

    /**
     * @var integer Page offset.
     */
    public $Offset;

    /**
     * @var string Direction. Valid values: 1: inbound public access; 0: outbound public access; 3: private network access; empty string: all access.
     */
    public $Direction;

    /**
     * @var integer Rule type. Valid values: 1: block; 2: allow.
     */
    public $RuleType;

    /**
     * @var string Column by which rules are sorted. Valid values: EndTime: end time; StartTime: start time; MatchTimes: number of matching times.
     */
    public $Order;

    /**
     * @var string Sort order. Valid values: desc: descending; asc: ascending.
     */
    public $By;

    /**
     * @var string Search keys, in a JSON string. Valid values: {}: empty; domain: domain name; level: threat level; ignore_reason: reason for allowing access; rule_source: source of a security event; address: geographical location; common: fuzzy search.
     */
    public $SearchValue;

    /**
     * @param integer $Limit Number of entries per page.
     * @param integer $Offset Page offset.
     * @param string $Direction Direction. Valid values: 1: inbound public access; 0: outbound public access; 3: private network access; empty string: all access.
     * @param integer $RuleType Rule type. Valid values: 1: block; 2: allow.
     * @param string $Order Column by which rules are sorted. Valid values: EndTime: end time; StartTime: start time; MatchTimes: number of matching times.
     * @param string $By Sort order. Valid values: desc: descending; asc: ascending.
     * @param string $SearchValue Search keys, in a JSON string. Valid values: {}: empty; domain: domain name; level: threat level; ignore_reason: reason for allowing access; rule_source: source of a security event; address: geographical location; common: fuzzy search.
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

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }
    }
}
