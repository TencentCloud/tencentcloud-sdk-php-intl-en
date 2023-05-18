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
 * @method array getBandwidthPackageIds() Obtain The unique ID list of bandwidth packages.
 * @method void setBandwidthPackageIds(array $BandwidthPackageIds) Set The unique ID list of bandwidth packages.
 * @method array getFilters() Obtain Each request can have up to 10 `Filters`. `BandwidthPackageIds` and `Filters` cannot be specified at the same time. The specific filter conditions are as follows:
<li> bandwidth-package_id - String - Required: No - (Filter condition) Filter by the unique ID of the bandwidth package.</li>
<li> bandwidth-package-name - String - Required: No - (Filter condition) Filter by the bandwidth package name. Fuzzy filtering is not supported.</li>
<li> network-type - String - Required: No - (Filter condition) Filter by the bandwidth package type. Valid values: `HIGH_QUALITY_BGP`, `BGP`, `SINGLEISP`, and `ANYCAST`.</li>
<li> charge-type - String - Required: No - (Filter condition) Filter by the bandwidth package billing mode. Valid values: `TOP5_POSTPAID_BY_MONTH` and `PERCENT95_POSTPAID_BY_MONTH`.</li>
<li> resource.resource-type - String - Required: No - (Filter condition) Filter by the bandwidth package resource type. Valid values: `Address` and `LoadBalance`.</li>
<li> resource.resource-id - String - Required: No - (Filter condition) Filter by the bandwidth package resource ID, such as `eip-xxxx` and `lb-xxxx`.</li>
<li> resource.address-ip - String - Required: No - (Filter condition) Filter by the bandwidth package resource IP.</li>
<li> tag-key - String - Required: No - (Filter condition) Filter by tag key.</li>
<li> tag-value - String - Required: No - (Filter condition) Filter by tag value.</li>
<li> tag:tag-key - String - Required: No - (Filter condition) Filter by tag key-value pair. Use a specific tag key to replace `tag-key`.</li>
 * @method void setFilters(array $Filters) Set Each request can have up to 10 `Filters`. `BandwidthPackageIds` and `Filters` cannot be specified at the same time. The specific filter conditions are as follows:
<li> bandwidth-package_id - String - Required: No - (Filter condition) Filter by the unique ID of the bandwidth package.</li>
<li> bandwidth-package-name - String - Required: No - (Filter condition) Filter by the bandwidth package name. Fuzzy filtering is not supported.</li>
<li> network-type - String - Required: No - (Filter condition) Filter by the bandwidth package type. Valid values: `HIGH_QUALITY_BGP`, `BGP`, `SINGLEISP`, and `ANYCAST`.</li>
<li> charge-type - String - Required: No - (Filter condition) Filter by the bandwidth package billing mode. Valid values: `TOP5_POSTPAID_BY_MONTH` and `PERCENT95_POSTPAID_BY_MONTH`.</li>
<li> resource.resource-type - String - Required: No - (Filter condition) Filter by the bandwidth package resource type. Valid values: `Address` and `LoadBalance`.</li>
<li> resource.resource-id - String - Required: No - (Filter condition) Filter by the bandwidth package resource ID, such as `eip-xxxx` and `lb-xxxx`.</li>
<li> resource.address-ip - String - Required: No - (Filter condition) Filter by the bandwidth package resource IP.</li>
<li> tag-key - String - Required: No - (Filter condition) Filter by tag key.</li>
<li> tag-value - String - Required: No - (Filter condition) Filter by tag value.</li>
<li> tag:tag-key - String - Required: No - (Filter condition) Filter by tag key-value pair. Use a specific tag key to replace `tag-key`.</li>
 * @method integer getOffset() Obtain Offset. This value defaults to 0. For more information, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. This value defaults to 0. For more information, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method integer getLimit() Obtain Number of bandwidth packages returned. This value defaults to 20. The maximum is 100. For more information, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of bandwidth packages returned. This value defaults to 20. The maximum is 100. For more information, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 */
class DescribeBandwidthPackagesRequest extends AbstractModel
{
    /**
     * @var array The unique ID list of bandwidth packages.
     */
    public $BandwidthPackageIds;

    /**
     * @var array Each request can have up to 10 `Filters`. `BandwidthPackageIds` and `Filters` cannot be specified at the same time. The specific filter conditions are as follows:
<li> bandwidth-package_id - String - Required: No - (Filter condition) Filter by the unique ID of the bandwidth package.</li>
<li> bandwidth-package-name - String - Required: No - (Filter condition) Filter by the bandwidth package name. Fuzzy filtering is not supported.</li>
<li> network-type - String - Required: No - (Filter condition) Filter by the bandwidth package type. Valid values: `HIGH_QUALITY_BGP`, `BGP`, `SINGLEISP`, and `ANYCAST`.</li>
<li> charge-type - String - Required: No - (Filter condition) Filter by the bandwidth package billing mode. Valid values: `TOP5_POSTPAID_BY_MONTH` and `PERCENT95_POSTPAID_BY_MONTH`.</li>
<li> resource.resource-type - String - Required: No - (Filter condition) Filter by the bandwidth package resource type. Valid values: `Address` and `LoadBalance`.</li>
<li> resource.resource-id - String - Required: No - (Filter condition) Filter by the bandwidth package resource ID, such as `eip-xxxx` and `lb-xxxx`.</li>
<li> resource.address-ip - String - Required: No - (Filter condition) Filter by the bandwidth package resource IP.</li>
<li> tag-key - String - Required: No - (Filter condition) Filter by tag key.</li>
<li> tag-value - String - Required: No - (Filter condition) Filter by tag value.</li>
<li> tag:tag-key - String - Required: No - (Filter condition) Filter by tag key-value pair. Use a specific tag key to replace `tag-key`.</li>
     */
    public $Filters;

    /**
     * @var integer Offset. This value defaults to 0. For more information, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var integer Number of bandwidth packages returned. This value defaults to 20. The maximum is 100. For more information, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @param array $BandwidthPackageIds The unique ID list of bandwidth packages.
     * @param array $Filters Each request can have up to 10 `Filters`. `BandwidthPackageIds` and `Filters` cannot be specified at the same time. The specific filter conditions are as follows:
<li> bandwidth-package_id - String - Required: No - (Filter condition) Filter by the unique ID of the bandwidth package.</li>
<li> bandwidth-package-name - String - Required: No - (Filter condition) Filter by the bandwidth package name. Fuzzy filtering is not supported.</li>
<li> network-type - String - Required: No - (Filter condition) Filter by the bandwidth package type. Valid values: `HIGH_QUALITY_BGP`, `BGP`, `SINGLEISP`, and `ANYCAST`.</li>
<li> charge-type - String - Required: No - (Filter condition) Filter by the bandwidth package billing mode. Valid values: `TOP5_POSTPAID_BY_MONTH` and `PERCENT95_POSTPAID_BY_MONTH`.</li>
<li> resource.resource-type - String - Required: No - (Filter condition) Filter by the bandwidth package resource type. Valid values: `Address` and `LoadBalance`.</li>
<li> resource.resource-id - String - Required: No - (Filter condition) Filter by the bandwidth package resource ID, such as `eip-xxxx` and `lb-xxxx`.</li>
<li> resource.address-ip - String - Required: No - (Filter condition) Filter by the bandwidth package resource IP.</li>
<li> tag-key - String - Required: No - (Filter condition) Filter by tag key.</li>
<li> tag-value - String - Required: No - (Filter condition) Filter by tag value.</li>
<li> tag:tag-key - String - Required: No - (Filter condition) Filter by tag key-value pair. Use a specific tag key to replace `tag-key`.</li>
     * @param integer $Offset Offset. This value defaults to 0. For more information, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param integer $Limit Number of bandwidth packages returned. This value defaults to 20. The maximum is 100. For more information, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
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
