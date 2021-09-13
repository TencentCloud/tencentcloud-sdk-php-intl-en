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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCcnRoutes request structure.
 *
 * @method string getCcnId() Obtain The CCN instance ID, such as `ccn-gree226l`.
 * @method void setCcnId(string $CcnId) Set The CCN instance ID, such as `ccn-gree226l`.
 * @method array getRouteIds() Obtain The unique ID of the CCN routing policy, such as `ccnr-f49l6u0z`.
 * @method void setRouteIds(array $RouteIds) Set The unique ID of the CCN routing policy, such as `ccnr-f49l6u0z`.
 * @method array getFilters() Obtain Filter condition. `RouteIds` and `Filters` cannot be specified at the same time.
<li>route-id - String - (Filter condition) Routing policy ID.</li>
<li>cidr-block - String - (Filter condition) Destination.</li>
<li>instance-type - String - (Filter condition) The next hop type.</li>
<li>instance-region - String - (Filter condition) The next hop region.</li>
<li>instance-id - String - (Filter condition) The instance ID of the next hop.</li>
<li>route-table-id - String - (Filter condition) The list of route table IDs in the format of `ccntr-1234edfr`. Filters by the route table ID.</li>
 * @method void setFilters(array $Filters) Set Filter condition. `RouteIds` and `Filters` cannot be specified at the same time.
<li>route-id - String - (Filter condition) Routing policy ID.</li>
<li>cidr-block - String - (Filter condition) Destination.</li>
<li>instance-type - String - (Filter condition) The next hop type.</li>
<li>instance-region - String - (Filter condition) The next hop region.</li>
<li>instance-id - String - (Filter condition) The instance ID of the next hop.</li>
<li>route-table-id - String - (Filter condition) The list of route table IDs in the format of `ccntr-1234edfr`. Filters by the route table ID.</li>
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain The returned quantity
 * @method void setLimit(integer $Limit) Set The returned quantity
 */
class DescribeCcnRoutesRequest extends AbstractModel
{
    /**
     * @var string The CCN instance ID, such as `ccn-gree226l`.
     */
    public $CcnId;

    /**
     * @var array The unique ID of the CCN routing policy, such as `ccnr-f49l6u0z`.
     */
    public $RouteIds;

    /**
     * @var array Filter condition. `RouteIds` and `Filters` cannot be specified at the same time.
<li>route-id - String - (Filter condition) Routing policy ID.</li>
<li>cidr-block - String - (Filter condition) Destination.</li>
<li>instance-type - String - (Filter condition) The next hop type.</li>
<li>instance-region - String - (Filter condition) The next hop region.</li>
<li>instance-id - String - (Filter condition) The instance ID of the next hop.</li>
<li>route-table-id - String - (Filter condition) The list of route table IDs in the format of `ccntr-1234edfr`. Filters by the route table ID.</li>
     */
    public $Filters;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer The returned quantity
     */
    public $Limit;

    /**
     * @param string $CcnId The CCN instance ID, such as `ccn-gree226l`.
     * @param array $RouteIds The unique ID of the CCN routing policy, such as `ccnr-f49l6u0z`.
     * @param array $Filters Filter condition. `RouteIds` and `Filters` cannot be specified at the same time.
<li>route-id - String - (Filter condition) Routing policy ID.</li>
<li>cidr-block - String - (Filter condition) Destination.</li>
<li>instance-type - String - (Filter condition) The next hop type.</li>
<li>instance-region - String - (Filter condition) The next hop region.</li>
<li>instance-id - String - (Filter condition) The instance ID of the next hop.</li>
<li>route-table-id - String - (Filter condition) The list of route table IDs in the format of `ccntr-1234edfr`. Filters by the route table ID.</li>
     * @param integer $Offset Offset
     * @param integer $Limit The returned quantity
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("RouteIds",$param) and $param["RouteIds"] !== null) {
            $this->RouteIds = $param["RouteIds"];
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
