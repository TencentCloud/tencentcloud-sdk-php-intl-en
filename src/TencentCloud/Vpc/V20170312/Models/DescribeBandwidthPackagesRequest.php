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
 * DescribeBandwidthPackages request structure.
 *
 * @method array getBandwidthPackageIds() Obtain The bandwidth package ID. Batch operation is supported.
 * @method void setBandwidthPackageIds(array $BandwidthPackageIds) Set The bandwidth package ID. Batch operation is supported.
 * @method array getFilters() Obtain The upper limit for `Filters` in each request is 10. `BandwidthPackageIds` and `Filters` cannot be specified at the same time. The specific filtering conditions are as follows:
<li> bandwidth-package_id - String - Required: No - (Filter condition) Filter by the unique ID of the bandwidth package.</li>
<li> bandwidth-package-name - String - Required: No - (Filter condition) Filter by the bandwidth package name. Fuzzy filtering is not supported.</li>
<li> network-type - String - Required: No - (Filter condition) Filter by the bandwidth package type. Types include 'BGP', 'SINGLEISP', and 'ANYCAST'.</li>
<li> charge-type - String - Required: No - (Filter condition) Filter by the bandwidth package billing type. Billing types include 'TOP5_POSTPAID_BY_MONTH' and 'PERCENT95_POSTPAID_BY_MONTH'</li>
<li> resource.resource-type - String - Required: No - (Filter condition) Filter by the bandwidth package resource type. Resource types include 'Address' and 'LoadBalance'</li>
<li> resource.resource-id - String - Required: No - (Filter condition) Filter by the bandwidth package resource ID, such as 'eip-xxxx', 'lb-xxxx'</li>
<li> resource.address-ip - String - Required: No - (Filter condition) Filter by the bandwidth package resource IP.</li>
 * @method void setFilters(array $Filters) Set The upper limit for `Filters` in each request is 10. `BandwidthPackageIds` and `Filters` cannot be specified at the same time. The specific filtering conditions are as follows:
<li> bandwidth-package_id - String - Required: No - (Filter condition) Filter by the unique ID of the bandwidth package.</li>
<li> bandwidth-package-name - String - Required: No - (Filter condition) Filter by the bandwidth package name. Fuzzy filtering is not supported.</li>
<li> network-type - String - Required: No - (Filter condition) Filter by the bandwidth package type. Types include 'BGP', 'SINGLEISP', and 'ANYCAST'.</li>
<li> charge-type - String - Required: No - (Filter condition) Filter by the bandwidth package billing type. Billing types include 'TOP5_POSTPAID_BY_MONTH' and 'PERCENT95_POSTPAID_BY_MONTH'</li>
<li> resource.resource-type - String - Required: No - (Filter condition) Filter by the bandwidth package resource type. Resource types include 'Address' and 'LoadBalance'</li>
<li> resource.resource-id - String - Required: No - (Filter condition) Filter by the bandwidth package resource ID, such as 'eip-xxxx', 'lb-xxxx'</li>
<li> resource.address-ip - String - Required: No - (Filter condition) Filter by the bandwidth package resource IP.</li>
 * @method integer getOffset() Obtain Queries bandwidth package offset
 * @method void setOffset(integer $Offset) Set Queries bandwidth package offset
 * @method integer getLimit() Obtain Queries the limit on the number of bandwidth packages
 * @method void setLimit(integer $Limit) Set Queries the limit on the number of bandwidth packages
 */
class DescribeBandwidthPackagesRequest extends AbstractModel
{
    /**
     * @var array The bandwidth package ID. Batch operation is supported.
     */
    public $BandwidthPackageIds;

    /**
     * @var array The upper limit for `Filters` in each request is 10. `BandwidthPackageIds` and `Filters` cannot be specified at the same time. The specific filtering conditions are as follows:
<li> bandwidth-package_id - String - Required: No - (Filter condition) Filter by the unique ID of the bandwidth package.</li>
<li> bandwidth-package-name - String - Required: No - (Filter condition) Filter by the bandwidth package name. Fuzzy filtering is not supported.</li>
<li> network-type - String - Required: No - (Filter condition) Filter by the bandwidth package type. Types include 'BGP', 'SINGLEISP', and 'ANYCAST'.</li>
<li> charge-type - String - Required: No - (Filter condition) Filter by the bandwidth package billing type. Billing types include 'TOP5_POSTPAID_BY_MONTH' and 'PERCENT95_POSTPAID_BY_MONTH'</li>
<li> resource.resource-type - String - Required: No - (Filter condition) Filter by the bandwidth package resource type. Resource types include 'Address' and 'LoadBalance'</li>
<li> resource.resource-id - String - Required: No - (Filter condition) Filter by the bandwidth package resource ID, such as 'eip-xxxx', 'lb-xxxx'</li>
<li> resource.address-ip - String - Required: No - (Filter condition) Filter by the bandwidth package resource IP.</li>
     */
    public $Filters;

    /**
     * @var integer Queries bandwidth package offset
     */
    public $Offset;

    /**
     * @var integer Queries the limit on the number of bandwidth packages
     */
    public $Limit;

    /**
     * @param array $BandwidthPackageIds The bandwidth package ID. Batch operation is supported.
     * @param array $Filters The upper limit for `Filters` in each request is 10. `BandwidthPackageIds` and `Filters` cannot be specified at the same time. The specific filtering conditions are as follows:
<li> bandwidth-package_id - String - Required: No - (Filter condition) Filter by the unique ID of the bandwidth package.</li>
<li> bandwidth-package-name - String - Required: No - (Filter condition) Filter by the bandwidth package name. Fuzzy filtering is not supported.</li>
<li> network-type - String - Required: No - (Filter condition) Filter by the bandwidth package type. Types include 'BGP', 'SINGLEISP', and 'ANYCAST'.</li>
<li> charge-type - String - Required: No - (Filter condition) Filter by the bandwidth package billing type. Billing types include 'TOP5_POSTPAID_BY_MONTH' and 'PERCENT95_POSTPAID_BY_MONTH'</li>
<li> resource.resource-type - String - Required: No - (Filter condition) Filter by the bandwidth package resource type. Resource types include 'Address' and 'LoadBalance'</li>
<li> resource.resource-id - String - Required: No - (Filter condition) Filter by the bandwidth package resource ID, such as 'eip-xxxx', 'lb-xxxx'</li>
<li> resource.address-ip - String - Required: No - (Filter condition) Filter by the bandwidth package resource IP.</li>
     * @param integer $Offset Queries bandwidth package offset
     * @param integer $Limit Queries the limit on the number of bandwidth packages
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
        if (array_key_exists("BandwidthPackageIds",$param) and $param["BandwidthPackageIds"] !== null) {
            $this->BandwidthPackageIds = $param["BandwidthPackageIds"];
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
