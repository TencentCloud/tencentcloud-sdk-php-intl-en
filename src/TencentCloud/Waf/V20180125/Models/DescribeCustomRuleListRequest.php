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
 * DescribeCustomRuleList request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain Capacity
 * @method void setLimit(integer $Limit) Set Capacity
 * @method array getFilters() Obtain Filter array. A name can be one of the following: RuleID, RuleName, and Match.
 * @method void setFilters(array $Filters) Set Filter array. A name can be one of the following: RuleID, RuleName, and Match.
 * @method string getOrder() Obtain asc or desc
 * @method void setOrder(string $Order) Set asc or desc
 * @method string getBy() Obtain exp_ts or mod_ts
 * @method void setBy(string $By) Set exp_ts or mod_ts
 * @method array getDomainList() Obtain Domain name list to query. This parameter is not required on the access control page.
 * @method void setDomainList(array $DomainList) Set Domain name list to query. This parameter is not required on the access control page.
 */
class DescribeCustomRuleListRequest extends AbstractModel
{
    /**
     * @var string Domain name
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
     * @var array Filter array. A name can be one of the following: RuleID, RuleName, and Match.
     */
    public $Filters;

    /**
     * @var string asc or desc
     */
    public $Order;

    /**
     * @var string exp_ts or mod_ts
     */
    public $By;

    /**
     * @var array Domain name list to query. This parameter is not required on the access control page.
     */
    public $DomainList;

    /**
     * @param string $Domain Domain name
     * @param integer $Offset Offset
     * @param integer $Limit Capacity
     * @param array $Filters Filter array. A name can be one of the following: RuleID, RuleName, and Match.
     * @param string $Order asc or desc
     * @param string $By exp_ts or mod_ts
     * @param array $DomainList Domain name list to query. This parameter is not required on the access control page.
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

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = $param["DomainList"];
        }
    }
}
