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
 * DescribeAntiInfoLeakageRules request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method integer getOffset() Obtain Page turning support, read offset
 * @method void setOffset(integer $Offset) Set Page turning support, read offset
 * @method integer getLimit() Obtain Paging support, read length limit
 * @method void setLimit(integer $Limit) Set Paging support, read length limit
 * @method string getOrder() Obtain Sort method, asc or desc
 * @method void setOrder(string $Order) Set Sort method, asc or desc
 * @method array getFilters() Obtain Filter. The following values are allowed:
RuleId,Match_field,Name,Action,Status
 * @method void setFilters(array $Filters) Set Filter. The following values are allowed:
RuleId,Match_field,Name,Action,Status
 */
class DescribeAntiInfoLeakageRulesRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var integer Page turning support, read offset
     */
    public $Offset;

    /**
     * @var integer Paging support, read length limit
     */
    public $Limit;

    /**
     * @var string Sort method, asc or desc
     */
    public $Order;

    /**
     * @var array Filter. The following values are allowed:
RuleId,Match_field,Name,Action,Status
     */
    public $Filters;

    /**
     * @param string $Domain Domain name
     * @param integer $Offset Page turning support, read offset
     * @param integer $Limit Paging support, read length limit
     * @param string $Order Sort method, asc or desc
     * @param array $Filters Filter. The following values are allowed:
RuleId,Match_field,Name,Action,Status
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
