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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBundles request structure.
 *
 * @method array getBundleIds() Obtain Package ID list.
 * @method void setBundleIds(array $BundleIds) Set Package ID list.
 * @method integer getOffset() Obtain Offset. Default value: 0. For more information on `Offset`, please see the relevant section in [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. For more information on `Offset`, please see the relevant section in [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, please see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, please see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
 * @method array getFilters() Obtain Filter list.
<li>bundle-id</li>Filter by the **bundle ID**.
Type: String
Required: No
<li>`support-platform-type`<li>Filter by the **system type**.
Values: `LINUX_UNIX` (Linux/Unix), `WINDOWS` (Windows).
Type: String
Required: No
<li>bundle-type</li>Filter by the **bundle type**.
Values: `GENERAL_BUNDLE` (General bundle), `STORAGE_BUNDLE` (Storage bundle), `ENTERPRISE_BUNDLE` (Enterprise bundle), `EXCLUSIVE_BUNDLE` (Dedicated bundle), `BEFAST_BUNDLE` (BeFast bundle), `STARTER_BUNDLE` (Beginner bundle); `CAREFREE_BUNDLE` (Carefree bundle);
Type: String
Required: No
<li>bundle-state</li>Filter by the **bundle status**.
Values: `ONLINE`, `OFFLINE`
Type: String
Required: No
Each request can contain up to 10 `Filters` and 5 `Filter.Values`. You cannot specify both `BundleIds` and `Filters` at the same time.
 * @method void setFilters(array $Filters) Set Filter list.
<li>bundle-id</li>Filter by the **bundle ID**.
Type: String
Required: No
<li>`support-platform-type`<li>Filter by the **system type**.
Values: `LINUX_UNIX` (Linux/Unix), `WINDOWS` (Windows).
Type: String
Required: No
<li>bundle-type</li>Filter by the **bundle type**.
Values: `GENERAL_BUNDLE` (General bundle), `STORAGE_BUNDLE` (Storage bundle), `ENTERPRISE_BUNDLE` (Enterprise bundle), `EXCLUSIVE_BUNDLE` (Dedicated bundle), `BEFAST_BUNDLE` (BeFast bundle), `STARTER_BUNDLE` (Beginner bundle); `CAREFREE_BUNDLE` (Carefree bundle);
Type: String
Required: No
<li>bundle-state</li>Filter by the **bundle status**.
Values: `ONLINE`, `OFFLINE`
Type: String
Required: No
Each request can contain up to 10 `Filters` and 5 `Filter.Values`. You cannot specify both `BundleIds` and `Filters` at the same time.
 * @method array getZones() Obtain AZ list, which contains all AZs by default.
 * @method void setZones(array $Zones) Set AZ list, which contains all AZs by default.
 */
class DescribeBundlesRequest extends AbstractModel
{
    /**
     * @var array Package ID list.
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
<li>bundle-id</li>Filter by the **bundle ID**.
Type: String
Required: No
<li>`support-platform-type`<li>Filter by the **system type**.
Values: `LINUX_UNIX` (Linux/Unix), `WINDOWS` (Windows).
Type: String
Required: No
<li>bundle-type</li>Filter by the **bundle type**.
Values: `GENERAL_BUNDLE` (General bundle), `STORAGE_BUNDLE` (Storage bundle), `ENTERPRISE_BUNDLE` (Enterprise bundle), `EXCLUSIVE_BUNDLE` (Dedicated bundle), `BEFAST_BUNDLE` (BeFast bundle), `STARTER_BUNDLE` (Beginner bundle); `CAREFREE_BUNDLE` (Carefree bundle);
Type: String
Required: No
<li>bundle-state</li>Filter by the **bundle status**.
Values: `ONLINE`, `OFFLINE`
Type: String
Required: No
Each request can contain up to 10 `Filters` and 5 `Filter.Values`. You cannot specify both `BundleIds` and `Filters` at the same time.
     */
    public $Filters;

    /**
     * @var array AZ list, which contains all AZs by default.
     */
    public $Zones;

    /**
     * @param array $BundleIds Package ID list.
     * @param integer $Offset Offset. Default value: 0. For more information on `Offset`, please see the relevant section in [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, please see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
     * @param array $Filters Filter list.
<li>bundle-id</li>Filter by the **bundle ID**.
Type: String
Required: No
<li>`support-platform-type`<li>Filter by the **system type**.
Values: `LINUX_UNIX` (Linux/Unix), `WINDOWS` (Windows).
Type: String
Required: No
<li>bundle-type</li>Filter by the **bundle type**.
Values: `GENERAL_BUNDLE` (General bundle), `STORAGE_BUNDLE` (Storage bundle), `ENTERPRISE_BUNDLE` (Enterprise bundle), `EXCLUSIVE_BUNDLE` (Dedicated bundle), `BEFAST_BUNDLE` (BeFast bundle), `STARTER_BUNDLE` (Beginner bundle); `CAREFREE_BUNDLE` (Carefree bundle);
Type: String
Required: No
<li>bundle-state</li>Filter by the **bundle status**.
Values: `ONLINE`, `OFFLINE`
Type: String
Required: No
Each request can contain up to 10 `Filters` and 5 `Filter.Values`. You cannot specify both `BundleIds` and `Filters` at the same time.
     * @param array $Zones AZ list, which contains all AZs by default.
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
