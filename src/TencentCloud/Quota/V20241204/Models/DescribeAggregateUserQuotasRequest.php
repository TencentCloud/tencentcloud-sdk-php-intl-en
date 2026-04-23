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
namespace TencentCloud\Quota\V20241204\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAggregateUserQuotas request structure.
 *
 * @method array getMemberUins() Obtain Member account. Can be empty. If empty, query the current account list.
 * @method void setMemberUins(array $MemberUins) Set Member account. Can be empty. If empty, query the current account list.
 * @method integer getLimit() Obtain limit
 * @method void setLimit(integer $Limit) Set limit
 * @method integer getOffset() Obtain offset
 * @method void setOffset(integer $Offset) Set offset
 * @method array getFilter() Obtain Filter
 * @method void setFilter(array $Filter) Set Filter
 * @method array getSort() Obtain sort
 * @method void setSort(array $Sort) Set sort
 * @method integer getProductId() Obtain Product ID
 * @method void setProductId(integer $ProductId) Set Product ID
 * @method array getQuotaDimensions() Obtain Quota dimension
 * @method void setQuotaDimensions(array $QuotaDimensions) Set Quota dimension
 */
class DescribeAggregateUserQuotasRequest extends AbstractModel
{
    /**
     * @var array Member account. Can be empty. If empty, query the current account list.
     */
    public $MemberUins;

    /**
     * @var integer limit
     */
    public $Limit;

    /**
     * @var integer offset
     */
    public $Offset;

    /**
     * @var array Filter
     */
    public $Filter;

    /**
     * @var array sort
     */
    public $Sort;

    /**
     * @var integer Product ID
     */
    public $ProductId;

    /**
     * @var array Quota dimension
     */
    public $QuotaDimensions;

    /**
     * @param array $MemberUins Member account. Can be empty. If empty, query the current account list.
     * @param integer $Limit limit
     * @param integer $Offset offset
     * @param array $Filter Filter
     * @param array $Sort sort
     * @param integer $ProductId Product ID
     * @param array $QuotaDimensions Quota dimension
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
        if (array_key_exists("MemberUins",$param) and $param["MemberUins"] !== null) {
            $this->MemberUins = $param["MemberUins"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = [];
            foreach ($param["Sort"] as $key => $value){
                $obj = new Sort();
                $obj->deserialize($value);
                array_push($this->Sort, $obj);
            }
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("QuotaDimensions",$param) and $param["QuotaDimensions"] !== null) {
            $this->QuotaDimensions = [];
            foreach ($param["QuotaDimensions"] as $key => $value){
                $obj = new QuotaDimension();
                $obj->deserialize($value);
                array_push($this->QuotaDimensions, $obj);
            }
        }
    }
}
