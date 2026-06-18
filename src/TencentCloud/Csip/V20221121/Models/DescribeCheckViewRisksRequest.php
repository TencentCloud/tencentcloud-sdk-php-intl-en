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
 * DescribeCheckViewRisks request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getFilters() Obtain <p>Filter content</p>
 * @method void setFilters(array $Filters) Set <p>Filter content</p>
 * @method integer getLimit() Obtain <p>Page size.</p>
 * @method void setLimit(integer $Limit) Set <p>Page size.</p>
 * @method integer getOffset() Obtain <p>Offset.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset.</p>
 * @method string getOrder() Obtain <p>Sorting type</p>
 * @method void setOrder(string $Order) Set <p>Sorting type</p>
 * @method string getBy() Obtain <p>Sorting field.</p>
 * @method void setBy(string $By) Set <p>Sorting field.</p>
 */
class DescribeCheckViewRisksRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Filter content</p>
     */
    public $Filters;

    /**
     * @var integer <p>Page size.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset.</p>
     */
    public $Offset;

    /**
     * @var string <p>Sorting type</p>
     */
    public $Order;

    /**
     * @var string <p>Sorting field.</p>
     */
    public $By;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Filters <p>Filter content</p>
     * @param integer $Limit <p>Page size.</p>
     * @param integer $Offset <p>Offset.</p>
     * @param string $Order <p>Sorting type</p>
     * @param string $By <p>Sorting field.</p>
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
