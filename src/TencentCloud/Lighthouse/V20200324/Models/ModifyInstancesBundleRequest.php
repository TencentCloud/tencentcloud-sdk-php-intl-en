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
 * ModifyInstancesBundle request structure.
 *
 * @method array getInstanceIds() Obtain List of instance IDs. One or more IDs of the instances to be operated. You can obtain the InstanceId from the value returned by the [DescribeInstances](https://www.tencentcloud.com/document/api/1207/47573?from_cn_redirect=1) API. The maximum number of instances in each request is 15.
 * @method void setInstanceIds(array $InstanceIds) Set List of instance IDs. One or more IDs of the instances to be operated. You can obtain the InstanceId from the value returned by the [DescribeInstances](https://www.tencentcloud.com/document/api/1207/47573?from_cn_redirect=1) API. The maximum number of instances in each request is 15.
 * @method string getBundleId() Obtain ID of the target bundle. Note that it cannot be the same as the current bundle ID of the instance to be upgraded. You can obtain the BundleId from the value returned by the [DescribeBundles](https://www.tencentcloud.com/document/api/1207/47575?from_cn_redirect=1) API.
 * @method void setBundleId(string $BundleId) Set ID of the target bundle. Note that it cannot be the same as the current bundle ID of the instance to be upgraded. You can obtain the BundleId from the value returned by the [DescribeBundles](https://www.tencentcloud.com/document/api/1207/47575?from_cn_redirect=1) API.
 * @method boolean getAutoVoucher() Obtain Whether to use existing vouchers under the current account automatically. Valid values: 
`true`: Deduct from existing vouchers automatically 
`false`: Do not deduct from existing vouchers automatically 
Default value: `false`.
 * @method void setAutoVoucher(boolean $AutoVoucher) Set Whether to use existing vouchers under the current account automatically. Valid values: 
`true`: Deduct from existing vouchers automatically 
`false`: Do not deduct from existing vouchers automatically 
Default value: `false`.
 */
class ModifyInstancesBundleRequest extends AbstractModel
{
    /**
     * @var array List of instance IDs. One or more IDs of the instances to be operated. You can obtain the InstanceId from the value returned by the [DescribeInstances](https://www.tencentcloud.com/document/api/1207/47573?from_cn_redirect=1) API. The maximum number of instances in each request is 15.
     */
    public $InstanceIds;

    /**
     * @var string ID of the target bundle. Note that it cannot be the same as the current bundle ID of the instance to be upgraded. You can obtain the BundleId from the value returned by the [DescribeBundles](https://www.tencentcloud.com/document/api/1207/47575?from_cn_redirect=1) API.
     */
    public $BundleId;

    /**
     * @var boolean Whether to use existing vouchers under the current account automatically. Valid values: 
`true`: Deduct from existing vouchers automatically 
`false`: Do not deduct from existing vouchers automatically 
Default value: `false`.
     */
    public $AutoVoucher;

    /**
     * @param array $InstanceIds List of instance IDs. One or more IDs of the instances to be operated. You can obtain the InstanceId from the value returned by the [DescribeInstances](https://www.tencentcloud.com/document/api/1207/47573?from_cn_redirect=1) API. The maximum number of instances in each request is 15.
     * @param string $BundleId ID of the target bundle. Note that it cannot be the same as the current bundle ID of the instance to be upgraded. You can obtain the BundleId from the value returned by the [DescribeBundles](https://www.tencentcloud.com/document/api/1207/47575?from_cn_redirect=1) API.
     * @param boolean $AutoVoucher Whether to use existing vouchers under the current account automatically. Valid values: 
`true`: Deduct from existing vouchers automatically 
`false`: Do not deduct from existing vouchers automatically 
Default value: `false`.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }
    }
}
