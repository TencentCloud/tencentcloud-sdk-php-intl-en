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
 * InquirePriceCreateInstances request structure.
 *
 * @method string getBundleId() Obtain Instance package ID.
 * @method void setBundleId(string $BundleId) Set Instance package ID.
 * @method integer getInstanceCount() Obtain Number of instances to be created. Default value: 1.
 * @method void setInstanceCount(integer $InstanceCount) Set Number of instances to be created. Default value: 1.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Prepaid mode, i.e., monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. It is required for prepaid instances.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Prepaid mode, i.e., monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. It is required for prepaid instances.
 * @method string getBlueprintId() Obtain Application image ID, which is required if a paid application image is used and can be obtained from the `BlueprintId` returned by the [DescribeBlueprints](https://intl.cloud.tencent.com/document/product/1207/47689?from_cn_redirect=1) API.
 * @method void setBlueprintId(string $BlueprintId) Set Application image ID, which is required if a paid application image is used and can be obtained from the `BlueprintId` returned by the [DescribeBlueprints](https://intl.cloud.tencent.com/document/product/1207/47689?from_cn_redirect=1) API.
 */
class InquirePriceCreateInstancesRequest extends AbstractModel
{
    /**
     * @var string Instance package ID.
     */
    public $BundleId;

    /**
     * @var integer Number of instances to be created. Default value: 1.
     */
    public $InstanceCount;

    /**
     * @var InstanceChargePrepaid Prepaid mode, i.e., monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. It is required for prepaid instances.
     */
    public $InstanceChargePrepaid;

    /**
     * @var string Application image ID, which is required if a paid application image is used and can be obtained from the `BlueprintId` returned by the [DescribeBlueprints](https://intl.cloud.tencent.com/document/product/1207/47689?from_cn_redirect=1) API.
     */
    public $BlueprintId;

    /**
     * @param string $BundleId Instance package ID.
     * @param integer $InstanceCount Number of instances to be created. Default value: 1.
     * @param InstanceChargePrepaid $InstanceChargePrepaid Prepaid mode, i.e., monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. It is required for prepaid instances.
     * @param string $BlueprintId Application image ID, which is required if a paid application image is used and can be obtained from the `BlueprintId` returned by the [DescribeBlueprints](https://intl.cloud.tencent.com/document/product/1207/47689?from_cn_redirect=1) API.
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
        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("BlueprintId",$param) and $param["BlueprintId"] !== null) {
            $this->BlueprintId = $param["BlueprintId"];
        }
    }
}
