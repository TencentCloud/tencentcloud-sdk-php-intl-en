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
namespace TencentCloud\Ctsdb\V20230202\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusters request structure.
 *
 * @method integer getPageNumber() Obtain Current page number.		
 * @method void setPageNumber(integer $PageNumber) Set Current page number.		
 * @method integer getPageSize() Obtain Page size.
 * @method void setPageSize(integer $PageSize) Set Page size.
 * @method array getFilters() Obtain Query parameter: Filtering and querying by instance ID (cluster_id) and instance name (name) are supported.
 * @method void setFilters(array $Filters) Set Query parameter: Filtering and querying by instance ID (cluster_id) and instance name (name) are supported.
 * @method array getOrders() Obtain Sorting parameter: Sorting by the creation time field (created_at) is supported. The value of Type can be set to DESC (descending order) or ASC (ascending order).
 * @method void setOrders(array $Orders) Set Sorting parameter: Sorting by the creation time field (created_at) is supported. The value of Type can be set to DESC (descending order) or ASC (ascending order).
 */
class DescribeClustersRequest extends AbstractModel
{
    /**
     * @var integer Current page number.		
     */
    public $PageNumber;

    /**
     * @var integer Page size.
     */
    public $PageSize;

    /**
     * @var array Query parameter: Filtering and querying by instance ID (cluster_id) and instance name (name) are supported.
     */
    public $Filters;

    /**
     * @var array Sorting parameter: Sorting by the creation time field (created_at) is supported. The value of Type can be set to DESC (descending order) or ASC (ascending order).
     */
    public $Orders;

    /**
     * @param integer $PageNumber Current page number.		
     * @param integer $PageSize Page size.
     * @param array $Filters Query parameter: Filtering and querying by instance ID (cluster_id) and instance name (name) are supported.
     * @param array $Orders Sorting parameter: Sorting by the creation time field (created_at) is supported. The value of Type can be set to DESC (descending order) or ASC (ascending order).
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Orders",$param) and $param["Orders"] !== null) {
            $this->Orders = [];
            foreach ($param["Orders"] as $key => $value){
                $obj = new Order();
                $obj->deserialize($value);
                array_push($this->Orders, $obj);
            }
        }
    }
}
