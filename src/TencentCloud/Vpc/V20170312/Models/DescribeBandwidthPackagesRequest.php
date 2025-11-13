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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBandwidthPackages request structure.
 *
 * @method array getBandwidthPackageIds() Obtain The unique ID list of bandwidth packages.
 * @method void setBandwidthPackageIds(array $BandwidthPackageIds) Set The unique ID list of bandwidth packages.
 * @method array getFilters() Obtain Each request can have up to 10 `Filters`. parameters do not support specifying `BandwidthPackageIds` and `Filters` at the same time. detailed filter criteria are as follows:.
<li>bandwidth-package-id - String - required: no - (filter condition) filter by the unique id of the bandwidth package.</li>.
<li>bandwidth-package-name - String - required: no - (filter criteria) filter by bandwidth package name. fuzzy filtering is not supported.</li>.
<li>network-type - String - required: no - (filter condition) filter by bandwidth package type. network type can be found in [BandwidthPackage](https://intl.cloud.tencent.com/document/api/215/15824?from_cn_redirect=1#BandwidthPackage).</li>.
<li>- charge-type - String - required: no - (filter condition) filter by the billing type of the bandwidth package. the billing type can be found in BandwidthPackage (https://intl.cloud.tencent.com/document/api/215/15824?from_cn_redirect=1#BandwidthPackage).</li>.
<li>resource.resource-type - String - required: no - (filter criteria) filter by bandwidth package resource type. resource types include 'Address' and 'LoadBalance'.</li>.
<li>resource.resource-id - String - required: no - (filter criteria) filter by bandwidth package resource id. resource id is in the format of 'eip-xxxx','lb-xxxx'.</li>.
<li>resource.address-ip - String - required: no - filter by bandwidth package resource ip.</li>.
<li>tag-key - String - required: no - (filter condition) filter according to the tag key.</li>.
<li>`tag-value` - String - Optional - Filter by the tag value.</li>

<li>tag:tag-key - String - required: no - (filter condition) filter by tag key-value pair. replace tag-key with a specific tag key.</li>.
 * @method void setFilters(array $Filters) Set Each request can have up to 10 `Filters`. parameters do not support specifying `BandwidthPackageIds` and `Filters` at the same time. detailed filter criteria are as follows:.
<li>bandwidth-package-id - String - required: no - (filter condition) filter by the unique id of the bandwidth package.</li>.
<li>bandwidth-package-name - String - required: no - (filter criteria) filter by bandwidth package name. fuzzy filtering is not supported.</li>.
<li>network-type - String - required: no - (filter condition) filter by bandwidth package type. network type can be found in [BandwidthPackage](https://intl.cloud.tencent.com/document/api/215/15824?from_cn_redirect=1#BandwidthPackage).</li>.
<li>- charge-type - String - required: no - (filter condition) filter by the billing type of the bandwidth package. the billing type can be found in BandwidthPackage (https://intl.cloud.tencent.com/document/api/215/15824?from_cn_redirect=1#BandwidthPackage).</li>.
<li>resource.resource-type - String - required: no - (filter criteria) filter by bandwidth package resource type. resource types include 'Address' and 'LoadBalance'.</li>.
<li>resource.resource-id - String - required: no - (filter criteria) filter by bandwidth package resource id. resource id is in the format of 'eip-xxxx','lb-xxxx'.</li>.
<li>resource.address-ip - String - required: no - filter by bandwidth package resource ip.</li>.
<li>tag-key - String - required: no - (filter condition) filter according to the tag key.</li>.
<li>`tag-value` - String - Optional - Filter by the tag value.</li>

<li>tag:tag-key - String - required: no - (filter condition) filter by tag key-value pair. replace tag-key with a specific tag key.</li>.
 * @method integer getOffset() Obtain Offset. This value defaults to 0. For more information on Offset, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688).
 * @method void setOffset(integer $Offset) Set Offset. This value defaults to 0. For more information on Offset, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688).
 * @method integer getLimit() Obtain Number of bandwidth packages returned. This value defaults to 20. The maximum is 100. For more information on Limit, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688).
 * @method void setLimit(integer $Limit) Set Number of bandwidth packages returned. This value defaults to 20. The maximum is 100. For more information on Limit, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688).
 */
class DescribeBandwidthPackagesRequest extends AbstractModel
{
    /**
     * @var array The unique ID list of bandwidth packages.
     */
    public $BandwidthPackageIds;

    /**
     * @var array Each request can have up to 10 `Filters`. parameters do not support specifying `BandwidthPackageIds` and `Filters` at the same time. detailed filter criteria are as follows:.
<li>bandwidth-package-id - String - required: no - (filter condition) filter by the unique id of the bandwidth package.</li>.
<li>bandwidth-package-name - String - required: no - (filter criteria) filter by bandwidth package name. fuzzy filtering is not supported.</li>.
<li>network-type - String - required: no - (filter condition) filter by bandwidth package type. network type can be found in [BandwidthPackage](https://intl.cloud.tencent.com/document/api/215/15824?from_cn_redirect=1#BandwidthPackage).</li>.
<li>- charge-type - String - required: no - (filter condition) filter by the billing type of the bandwidth package. the billing type can be found in BandwidthPackage (https://intl.cloud.tencent.com/document/api/215/15824?from_cn_redirect=1#BandwidthPackage).</li>.
<li>resource.resource-type - String - required: no - (filter criteria) filter by bandwidth package resource type. resource types include 'Address' and 'LoadBalance'.</li>.
<li>resource.resource-id - String - required: no - (filter criteria) filter by bandwidth package resource id. resource id is in the format of 'eip-xxxx','lb-xxxx'.</li>.
<li>resource.address-ip - String - required: no - filter by bandwidth package resource ip.</li>.
<li>tag-key - String - required: no - (filter condition) filter according to the tag key.</li>.
<li>`tag-value` - String - Optional - Filter by the tag value.</li>

<li>tag:tag-key - String - required: no - (filter condition) filter by tag key-value pair. replace tag-key with a specific tag key.</li>.
     */
    public $Filters;

    /**
     * @var integer Offset. This value defaults to 0. For more information on Offset, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688).
     */
    public $Offset;

    /**
     * @var integer Number of bandwidth packages returned. This value defaults to 20. The maximum is 100. For more information on Limit, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688).
     */
    public $Limit;

    /**
     * @param array $BandwidthPackageIds The unique ID list of bandwidth packages.
     * @param array $Filters Each request can have up to 10 `Filters`. parameters do not support specifying `BandwidthPackageIds` and `Filters` at the same time. detailed filter criteria are as follows:.
<li>bandwidth-package-id - String - required: no - (filter condition) filter by the unique id of the bandwidth package.</li>.
<li>bandwidth-package-name - String - required: no - (filter criteria) filter by bandwidth package name. fuzzy filtering is not supported.</li>.
<li>network-type - String - required: no - (filter condition) filter by bandwidth package type. network type can be found in [BandwidthPackage](https://intl.cloud.tencent.com/document/api/215/15824?from_cn_redirect=1#BandwidthPackage).</li>.
<li>- charge-type - String - required: no - (filter condition) filter by the billing type of the bandwidth package. the billing type can be found in BandwidthPackage (https://intl.cloud.tencent.com/document/api/215/15824?from_cn_redirect=1#BandwidthPackage).</li>.
<li>resource.resource-type - String - required: no - (filter criteria) filter by bandwidth package resource type. resource types include 'Address' and 'LoadBalance'.</li>.
<li>resource.resource-id - String - required: no - (filter criteria) filter by bandwidth package resource id. resource id is in the format of 'eip-xxxx','lb-xxxx'.</li>.
<li>resource.address-ip - String - required: no - filter by bandwidth package resource ip.</li>.
<li>tag-key - String - required: no - (filter condition) filter according to the tag key.</li>.
<li>`tag-value` - String - Optional - Filter by the tag value.</li>

<li>tag:tag-key - String - required: no - (filter condition) filter by tag key-value pair. replace tag-key with a specific tag key.</li>.
     * @param integer $Offset Offset. This value defaults to 0. For more information on Offset, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688).
     * @param integer $Limit Number of bandwidth packages returned. This value defaults to 20. The maximum is 100. For more information on Limit, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688).
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
