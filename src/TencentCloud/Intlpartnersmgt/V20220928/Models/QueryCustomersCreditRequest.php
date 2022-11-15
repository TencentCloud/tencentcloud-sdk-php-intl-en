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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryCustomersCredit request structure.
 *
 * @method string getFilterType() Obtain Search condition type. You can only search by customer ID, name, remarks, or email.
 * @method void setFilterType(string $FilterType) Set Search condition type. You can only search by customer ID, name, remarks, or email.
 * @method string getFilter() Obtain Search condition
 * @method void setFilter(string $Filter) Set Search condition
 * @method integer getPage() Obtain A pagination parameter that specifies the current page number, with a value starting from 1.
 * @method void setPage(integer $Page) Set A pagination parameter that specifies the current page number, with a value starting from 1.
 * @method integer getPageSize() Obtain A pagination parameter that specifies the number of entries per page.
 * @method void setPageSize(integer $PageSize) Set A pagination parameter that specifies the number of entries per page.
 * @method string getOrder() Obtain A sort parameter that specifies the sort order. Valid values: `desc` (descending order), or `asc` (ascending order) based on `AssociationTime`. The value will be `desc` if left empty.
 * @method void setOrder(string $Order) Set A sort parameter that specifies the sort order. Valid values: `desc` (descending order), or `asc` (ascending order) based on `AssociationTime`. The value will be `desc` if left empty.
 */
class QueryCustomersCreditRequest extends AbstractModel
{
    /**
     * @var string Search condition type. You can only search by customer ID, name, remarks, or email.
     */
    public $FilterType;

    /**
     * @var string Search condition
     */
    public $Filter;

    /**
     * @var integer A pagination parameter that specifies the current page number, with a value starting from 1.
     */
    public $Page;

    /**
     * @var integer A pagination parameter that specifies the number of entries per page.
     */
    public $PageSize;

    /**
     * @var string A sort parameter that specifies the sort order. Valid values: `desc` (descending order), or `asc` (ascending order) based on `AssociationTime`. The value will be `desc` if left empty.
     */
    public $Order;

    /**
     * @param string $FilterType Search condition type. You can only search by customer ID, name, remarks, or email.
     * @param string $Filter Search condition
     * @param integer $Page A pagination parameter that specifies the current page number, with a value starting from 1.
     * @param integer $PageSize A pagination parameter that specifies the number of entries per page.
     * @param string $Order A sort parameter that specifies the sort order. Valid values: `desc` (descending order), or `asc` (ascending order) based on `AssociationTime`. The value will be `desc` if left empty.
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
        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
