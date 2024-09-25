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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCCRuleList request structure.
 *
 * @method string getDomain() Obtain Domain name of the API to be queried
 * @method void setDomain(string $Domain) Set Domain name of the API to be queried
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain Capacity
 * @method void setLimit(integer $Limit) Set Capacity
 * @method string getBy() Obtain Currently supports sorting by ts_version
 * @method void setBy(string $By) Set Currently supports sorting by ts_version
 * @method array getFilters() Obtain Filter array. A name can be one of the following values: RuleID, ParamName, Url, Action, Method, Source, and Status.
 * @method void setFilters(array $Filters) Set Filter array. A name can be one of the following values: RuleID, ParamName, Url, Action, Method, Source, and Status.
 * @method string getOrder() Obtain asc or desc
 * @method void setOrder(string $Order) Set asc or desc
 */
class DescribeCCRuleListRequest extends AbstractModel
{
    /**
     * @var string Domain name of the API to be queried
     */
    public $Domain;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer Capacity
     */
    public $Limit;

    /**
     * @var string Currently supports sorting by ts_version
     */
    public $By;

    /**
     * @var array Filter array. A name can be one of the following values: RuleID, ParamName, Url, Action, Method, Source, and Status.
     */
    public $Filters;

    /**
     * @var string asc or desc
     */
    public $Order;

    /**
     * @param string $Domain Domain name of the API to be queried
     * @param integer $Offset Offset
     * @param integer $Limit Capacity
     * @param string $By Currently supports sorting by ts_version
     * @param array $Filters Filter array. A name can be one of the following values: RuleID, ParamName, Url, Action, Method, Source, and Status.
     * @param string $Order asc or desc
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new FiltersItemNew();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
