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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResources request structure.
 *
 * @method integer getLimit() Obtain Number of returned AZ resources. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned AZ resources. Default value: 20. Maximum value: 100.
 * @method integer getOffset() Obtain Starting offset of the returned AZ resource list. Default value: 0.
 * @method void setOffset(integer $Offset) Set Starting offset of the returned AZ resource list. Default value: 0.
 * @method array getFilters() Obtain Specifies the conditions for querying the availability zone resource list. detailed filter criteria are as follows:.
- master-zone
Filters by regional availability zone, for example: ap-guangzhou-2.
Type: String.
Required: No
- ip-version
Filter by [IP type], such as IPv4.
Type: String.
Required: No
Valid values: IPv4, IPv6, IPv6_Nat.
- isp
Filters by [ISP type], for example: BGP.
Type: String.
Required: No
Optional. valid values: BGP, CMCC (china mobile), CUCC (china unicom), CTCC (china telecom), BGP_PRO, INTERNAL (private network).
 * @method void setFilters(array $Filters) Set Specifies the conditions for querying the availability zone resource list. detailed filter criteria are as follows:.
- master-zone
Filters by regional availability zone, for example: ap-guangzhou-2.
Type: String.
Required: No
- ip-version
Filter by [IP type], such as IPv4.
Type: String.
Required: No
Valid values: IPv4, IPv6, IPv6_Nat.
- isp
Filters by [ISP type], for example: BGP.
Type: String.
Required: No
Optional. valid values: BGP, CMCC (china mobile), CUCC (china unicom), CTCC (china telecom), BGP_PRO, INTERNAL (private network).
 */
class DescribeResourcesRequest extends AbstractModel
{
    /**
     * @var integer Number of returned AZ resources. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Starting offset of the returned AZ resource list. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Specifies the conditions for querying the availability zone resource list. detailed filter criteria are as follows:.
- master-zone
Filters by regional availability zone, for example: ap-guangzhou-2.
Type: String.
Required: No
- ip-version
Filter by [IP type], such as IPv4.
Type: String.
Required: No
Valid values: IPv4, IPv6, IPv6_Nat.
- isp
Filters by [ISP type], for example: BGP.
Type: String.
Required: No
Optional. valid values: BGP, CMCC (china mobile), CUCC (china unicom), CTCC (china telecom), BGP_PRO, INTERNAL (private network).
     */
    public $Filters;

    /**
     * @param integer $Limit Number of returned AZ resources. Default value: 20. Maximum value: 100.
     * @param integer $Offset Starting offset of the returned AZ resource list. Default value: 0.
     * @param array $Filters Specifies the conditions for querying the availability zone resource list. detailed filter criteria are as follows:.
- master-zone
Filters by regional availability zone, for example: ap-guangzhou-2.
Type: String.
Required: No
- ip-version
Filter by [IP type], such as IPv4.
Type: String.
Required: No
Valid values: IPv4, IPv6, IPv6_Nat.
- isp
Filters by [ISP type], for example: BGP.
Type: String.
Required: No
Optional. valid values: BGP, CMCC (china mobile), CUCC (china unicom), CTCC (china telecom), BGP_PRO, INTERNAL (private network).
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
