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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExposures request structure.
 *
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method array getFilters() Obtain Filtered Content
 * @method void setFilters(array $Filters) Set Filtered Content
 * @method integer getLimit() Obtain Pagination size.
 * @method void setLimit(integer $Limit) Set Pagination size.
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method string getOrder() Obtain Sorting type
 * @method void setOrder(string $Order) Set Sorting type
 * @method string getBy() Obtain Sorting field.
 * @method void setBy(string $By) Set Sorting field.
 */
class DescribeExposuresRequest extends AbstractModel
{
    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var array Filtered Content
     */
    public $Filters;

    /**
     * @var integer Pagination size.
     */
    public $Limit;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var string Sorting type
     */
    public $Order;

    /**
     * @var string Sorting field.
     */
    public $By;

    /**
     * @param array $MemberId Group Account Member ID
     * @param array $Filters Filtered Content
     * @param integer $Limit Pagination size.
     * @param integer $Offset Offset.
     * @param string $Order Sorting type
     * @param string $By Sorting field.
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
