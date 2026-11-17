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
 * DescribeLLMSdkAccess request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getOffset() Obtain Start position for paging.
 * @method void setOffset(integer $Offset) Set Start position for paging.
 * @method integer getLimit() Obtain Number of rows per page
 * @method void setLimit(integer $Limit) Set Number of rows per page
 * @method array getFilters() Obtain Filter.
 * @method void setFilters(array $Filters) Set Filter.
 * @method string getBy() Obtain Supports sorting by ts.
 * @method void setBy(string $By) Set Supports sorting by ts.
 * @method string getOrder() Obtain asc or desc
 * @method void setOrder(string $Order) Set asc or desc
 */
class DescribeLLMSdkAccessRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Start position for paging.
     */
    public $Offset;

    /**
     * @var integer Number of rows per page
     */
    public $Limit;

    /**
     * @var array Filter.
     */
    public $Filters;

    /**
     * @var string Supports sorting by ts.
     */
    public $By;

    /**
     * @var string asc or desc
     */
    public $Order;

    /**
     * @param string $InstanceId Instance ID
     * @param integer $Offset Start position for paging.
     * @param integer $Limit Number of rows per page
     * @param array $Filters Filter.
     * @param string $By Supports sorting by ts.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
