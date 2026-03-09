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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBundles request structure.
 *
 * @method array getBundleIds() Obtain List of bundle ids. the maximum is 100 per request for batch packages. you can get the BundleId in the return value from the API [DescribeBundles](https://www.tencentcloud.comom/document/product/1207/47575?from_cn_redirect=1).
 * @method void setBundleIds(array $BundleIds) Set List of bundle ids. the maximum is 100 per request for batch packages. you can get the BundleId in the return value from the API [DescribeBundles](https://www.tencentcloud.comom/document/product/1207/47575?from_cn_redirect=1).
 * @method integer getOffset() Obtain Offset. Default value: 0. For more information on `Offset`, please see the relevant section in [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. For more information on `Offset`, please see the relevant section in [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, please see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, please see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
 * @method array getFilters() Obtain Filter list.
<li>bundle-id</li>Filter by [bundle id].
Type: String.
Required: No
<li>`support-platform-type`</li>Filter by the system type.
Value: LINUX_UNIX (LINUX/UNIX system); WINDOWS (WINDOWS systems).
Type: String.
Required: No
<li>bundle-type</li>Filter by [package type].
Valid values: GENERAL_BUNDLE (GENERAL BUNDLE); STORAGE_BUNDLE (STORAGE BUNDLE); ENTERPRISE_BUNDLE (ENTERPRISE BUNDLE); EXCLUSIVE_BUNDLE (dedicated BUNDLE); BEFAST_BUNDLE (SPEED BUNDLE); STARTER_BUNDLE (STARTER BUNDLE); CAREFREE_BUNDLE (CAREFREE BUNDLE); RAZOR_SPEED_BUNDLE (RAZOR SPEED BUNDLE).
Type: String.
Required: No
<li>bundle-state</li>Filter by [package status].
Valid values: ONLINE, OFFLINE.
Type: String.
Required: No
The maximum number of `Filters` per request is 10, and the maximum number of `Filter.Values` is 5. the parameter does not support specifying both `BundleIds` and `Filters`.
 * @method void setFilters(array $Filters) Set Filter list.
<li>bundle-id</li>Filter by [bundle id].
Type: String.
Required: No
<li>`support-platform-type`</li>Filter by the system type.
Value: LINUX_UNIX (LINUX/UNIX system); WINDOWS (WINDOWS systems).
Type: String.
Required: No
<li>bundle-type</li>Filter by [package type].
Valid values: GENERAL_BUNDLE (GENERAL BUNDLE); STORAGE_BUNDLE (STORAGE BUNDLE); ENTERPRISE_BUNDLE (ENTERPRISE BUNDLE); EXCLUSIVE_BUNDLE (dedicated BUNDLE); BEFAST_BUNDLE (SPEED BUNDLE); STARTER_BUNDLE (STARTER BUNDLE); CAREFREE_BUNDLE (CAREFREE BUNDLE); RAZOR_SPEED_BUNDLE (RAZOR SPEED BUNDLE).
Type: String.
Required: No
<li>bundle-state</li>Filter by [package status].
Valid values: ONLINE, OFFLINE.
Type: String.
Required: No
The maximum number of `Filters` per request is 10, and the maximum number of `Filter.Values` is 5. the parameter does not support specifying both `BundleIds` and `Filters`.
 * @method array getZones() Obtain AZ list. default to all availability zones.
<li>AZs can be queried through the API [DescribeZones](https://www.tencentcloud.comom/document/product/1207/57513?from_cn_redirect=1)</li>.
 * @method void setZones(array $Zones) Set AZ list. default to all availability zones.
<li>AZs can be queried through the API [DescribeZones](https://www.tencentcloud.comom/document/product/1207/57513?from_cn_redirect=1)</li>.
 */
class DescribeBundlesRequest extends AbstractModel
{
    /**
     * @var array List of bundle ids. the maximum is 100 per request for batch packages. you can get the BundleId in the return value from the API [DescribeBundles](https://www.tencentcloud.comom/document/product/1207/47575?from_cn_redirect=1).
     */
    public $BundleIds;

    /**
     * @var integer Offset. Default value: 0. For more information on `Offset`, please see the relevant section in [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, please see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @var array Filter list.
<li>bundle-id</li>Filter by [bundle id].
Type: String.
Required: No
<li>`support-platform-type`</li>Filter by the system type.
Value: LINUX_UNIX (LINUX/UNIX system); WINDOWS (WINDOWS systems).
Type: String.
Required: No
<li>bundle-type</li>Filter by [package type].
Valid values: GENERAL_BUNDLE (GENERAL BUNDLE); STORAGE_BUNDLE (STORAGE BUNDLE); ENTERPRISE_BUNDLE (ENTERPRISE BUNDLE); EXCLUSIVE_BUNDLE (dedicated BUNDLE); BEFAST_BUNDLE (SPEED BUNDLE); STARTER_BUNDLE (STARTER BUNDLE); CAREFREE_BUNDLE (CAREFREE BUNDLE); RAZOR_SPEED_BUNDLE (RAZOR SPEED BUNDLE).
Type: String.
Required: No
<li>bundle-state</li>Filter by [package status].
Valid values: ONLINE, OFFLINE.
Type: String.
Required: No
The maximum number of `Filters` per request is 10, and the maximum number of `Filter.Values` is 5. the parameter does not support specifying both `BundleIds` and `Filters`.
     */
    public $Filters;

    /**
     * @var array AZ list. default to all availability zones.
<li>AZs can be queried through the API [DescribeZones](https://www.tencentcloud.comom/document/product/1207/57513?from_cn_redirect=1)</li>.
     */
    public $Zones;

    /**
     * @param array $BundleIds List of bundle ids. the maximum is 100 per request for batch packages. you can get the BundleId in the return value from the API [DescribeBundles](https://www.tencentcloud.comom/document/product/1207/47575?from_cn_redirect=1).
     * @param integer $Offset Offset. Default value: 0. For more information on `Offset`, please see the relevant section in [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, please see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
     * @param array $Filters Filter list.
<li>bundle-id</li>Filter by [bundle id].
Type: String.
Required: No
<li>`support-platform-type`</li>Filter by the system type.
Value: LINUX_UNIX (LINUX/UNIX system); WINDOWS (WINDOWS systems).
Type: String.
Required: No
<li>bundle-type</li>Filter by [package type].
Valid values: GENERAL_BUNDLE (GENERAL BUNDLE); STORAGE_BUNDLE (STORAGE BUNDLE); ENTERPRISE_BUNDLE (ENTERPRISE BUNDLE); EXCLUSIVE_BUNDLE (dedicated BUNDLE); BEFAST_BUNDLE (SPEED BUNDLE); STARTER_BUNDLE (STARTER BUNDLE); CAREFREE_BUNDLE (CAREFREE BUNDLE); RAZOR_SPEED_BUNDLE (RAZOR SPEED BUNDLE).
Type: String.
Required: No
<li>bundle-state</li>Filter by [package status].
Valid values: ONLINE, OFFLINE.
Type: String.
Required: No
The maximum number of `Filters` per request is 10, and the maximum number of `Filter.Values` is 5. the parameter does not support specifying both `BundleIds` and `Filters`.
     * @param array $Zones AZ list. default to all availability zones.
<li>AZs can be queried through the API [DescribeZones](https://www.tencentcloud.comom/document/product/1207/57513?from_cn_redirect=1)</li>.
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
        if (array_key_exists("BundleIds",$param) and $param["BundleIds"] !== null) {
            $this->BundleIds = $param["BundleIds"];
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }
    }
}
