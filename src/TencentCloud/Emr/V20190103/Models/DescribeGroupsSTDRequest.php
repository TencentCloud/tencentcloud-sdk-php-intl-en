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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGroupsSTD request structure.
 *
 * @method string getInstanceId() Obtain Cluster name.
 * @method void setInstanceId(string $InstanceId) Set Cluster name.
 * @method array getFilters() Obtain Description key-value pair filter, which is used for conditional filtering queries.
 * @method void setFilters(array $Filters) Set Description key-value pair filter, which is used for conditional filtering queries.
 * @method Order getOrderFields() Obtain Description order, which is used for sorting.
 * @method void setOrderFields(Order $OrderFields) Set Description order, which is used for sorting.
 * @method integer getLimit() Obtain Number of returns.
 * @method void setLimit(integer $Limit) Set Number of returns.
 * @method integer getOffset() Obtain Pagination parameter.
 * @method void setOffset(integer $Offset) Set Pagination parameter.
 */
class DescribeGroupsSTDRequest extends AbstractModel
{
    /**
     * @var string Cluster name.
     */
    public $InstanceId;

    /**
     * @var array Description key-value pair filter, which is used for conditional filtering queries.
     */
    public $Filters;

    /**
     * @var Order Description order, which is used for sorting.
     */
    public $OrderFields;

    /**
     * @var integer Number of returns.
     */
    public $Limit;

    /**
     * @var integer Pagination parameter.
     */
    public $Offset;

    /**
     * @param string $InstanceId Cluster name.
     * @param array $Filters Description key-value pair filter, which is used for conditional filtering queries.
     * @param Order $OrderFields Description order, which is used for sorting.
     * @param integer $Limit Number of returns.
     * @param integer $Offset Pagination parameter.
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = new Order();
            $this->OrderFields->deserialize($param["OrderFields"]);
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
