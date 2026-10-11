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
 * DescribeBaselineItemIgnoreList request structure.
 *
 * @method integer getRuleID() Obtain Ignore rule ID.
 * @method void setRuleID(integer $RuleID) Set Ignore rule ID.
 * @method integer getLimit() Obtain Limit Entries, 10 by default, up to 100
 * @method void setLimit(integer $Limit) Set Limit Entries, 10 by default, up to 100
 * @method integer getOffset() Obtain Request offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Request offset. Default value: 0.
 * @method array getFilters() Obtain <li>CategoryId - int64 - Required or Not: No - Rule ID</li>
 * @method void setFilters(array $Filters) Set <li>CategoryId - int64 - Required or Not: No - Rule ID</li>
 * @method string getOrder() Obtain Sorting order [ASC: ascending|DESC: descending]
 * @method void setOrder(string $Order) Set Sorting order [ASC: ascending|DESC: descending]
 * @method string getBy() Obtain Optional sorting column [ID]
 * @method void setBy(string $By) Set Optional sorting column [ID]
 */
class DescribeBaselineItemIgnoreListRequest extends AbstractModel
{
    /**
     * @var integer Ignore rule ID.
     */
    public $RuleID;

    /**
     * @var integer Limit Entries, 10 by default, up to 100
     */
    public $Limit;

    /**
     * @var integer Request offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var array <li>CategoryId - int64 - Required or Not: No - Rule ID</li>
     */
    public $Filters;

    /**
     * @var string Sorting order [ASC: ascending|DESC: descending]
     */
    public $Order;

    /**
     * @var string Optional sorting column [ID]
     */
    public $By;

    /**
     * @param integer $RuleID Ignore rule ID.
     * @param integer $Limit Limit Entries, 10 by default, up to 100
     * @param integer $Offset Request offset. Default value: 0.
     * @param array $Filters <li>CategoryId - int64 - Required or Not: No - Rule ID</li>
     * @param string $Order Sorting order [ASC: ascending|DESC: descending]
     * @param string $By Optional sorting column [ID]
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
