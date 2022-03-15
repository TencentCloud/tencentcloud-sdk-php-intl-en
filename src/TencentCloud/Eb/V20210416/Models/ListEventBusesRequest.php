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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListEventBuses request structure.
 *
 * @method string getOrderBy() Obtain Indicates by which field to sort the returned results. Valid values: AddTime (creation time), ModTime (modification time)
 * @method void setOrderBy(string $OrderBy) Set Indicates by which field to sort the returned results. Valid values: AddTime (creation time), ModTime (modification time)
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100.
 * @method string getOrder() Obtain Indicates whether the returned results are sorted in ascending or descending order. Valid values: ASC (ascending order), DESC (descending order)
 * @method void setOrder(string $Order) Set Indicates whether the returned results are sorted in ascending or descending order. Valid values: ASC (ascending order), DESC (descending order)
 * @method array getFilters() Obtain Filter. For more information, see the Instance Filter Table below. Each request can contain up to 10 `Filters` and 5 `Filter.Values`.
 * @method void setFilters(array $Filters) Set Filter. For more information, see the Instance Filter Table below. Each request can contain up to 10 `Filters` and 5 `Filter.Values`.
 * @method integer getOffset() Obtain Pagination offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. Default value: 0.
 */
class ListEventBusesRequest extends AbstractModel
{
    /**
     * @var string Indicates by which field to sort the returned results. Valid values: AddTime (creation time), ModTime (modification time)
     */
    public $OrderBy;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Indicates whether the returned results are sorted in ascending or descending order. Valid values: ASC (ascending order), DESC (descending order)
     */
    public $Order;

    /**
     * @var array Filter. For more information, see the Instance Filter Table below. Each request can contain up to 10 `Filters` and 5 `Filter.Values`.
     */
    public $Filters;

    /**
     * @var integer Pagination offset. Default value: 0.
     */
    public $Offset;

    /**
     * @param string $OrderBy Indicates by which field to sort the returned results. Valid values: AddTime (creation time), ModTime (modification time)
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100.
     * @param string $Order Indicates whether the returned results are sorted in ascending or descending order. Valid values: ASC (ascending order), DESC (descending order)
     * @param array $Filters Filter. For more information, see the Instance Filter Table below. Each request can contain up to 10 `Filters` and 5 `Filter.Values`.
     * @param integer $Offset Pagination offset. Default value: 0.
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
        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
