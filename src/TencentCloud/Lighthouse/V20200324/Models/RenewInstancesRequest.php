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
 * RenewInstances request structure.
 *
 * @method array getInstanceIds() Obtain IDs of one or more instances to be operated. The value can be obtained from the `InstanceId` parameter returned by the [DescribeInstances](https://intl.cloud.tencent.com/document/api/1207/47573?from_cn_redirect=1) API. Up to 100 instances can be requested at a time.
 * @method void setInstanceIds(array $InstanceIds) Set IDs of one or more instances to be operated. The value can be obtained from the `InstanceId` parameter returned by the [DescribeInstances](https://intl.cloud.tencent.com/document/api/1207/47573?from_cn_redirect=1) API. Up to 100 instances can be requested at a time.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Prepaid mode, i.e., monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. It is required for prepaid instances.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Prepaid mode, i.e., monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. It is required for prepaid instances.
 * @method boolean getRenewDataDisk() Obtain Whether to renew elastic data disks. Values: 
`TRUE`: Renew the elastic data disks attached to the instance as well when the related instance is renewed.
`FALSE`: Do not renew the elastic data disks attached to the instance as well when the related instance is renewed.
Default: `TRUE`
 * @method void setRenewDataDisk(boolean $RenewDataDisk) Set Whether to renew elastic data disks. Values: 
`TRUE`: Renew the elastic data disks attached to the instance as well when the related instance is renewed.
`FALSE`: Do not renew the elastic data disks attached to the instance as well when the related instance is renewed.
Default: `TRUE`
 * @method boolean getAutoVoucher() Obtain Whether to automatically use vouchers. Values:
`TRUE`: Use vouchers for payment automatically.
`FALSE`: Do not use vouchers for payment automatically.
Default: `FALSE`.
 * @method void setAutoVoucher(boolean $AutoVoucher) Set Whether to automatically use vouchers. Values:
`TRUE`: Use vouchers for payment automatically.
`FALSE`: Do not use vouchers for payment automatically.
Default: `FALSE`.
 */
class RenewInstancesRequest extends AbstractModel
{
    /**
     * @var array IDs of one or more instances to be operated. The value can be obtained from the `InstanceId` parameter returned by the [DescribeInstances](https://intl.cloud.tencent.com/document/api/1207/47573?from_cn_redirect=1) API. Up to 100 instances can be requested at a time.
     */
    public $InstanceIds;

    /**
     * @var InstanceChargePrepaid Prepaid mode, i.e., monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. It is required for prepaid instances.
     */
    public $InstanceChargePrepaid;

    /**
     * @var boolean Whether to renew elastic data disks. Values: 
`TRUE`: Renew the elastic data disks attached to the instance as well when the related instance is renewed.
`FALSE`: Do not renew the elastic data disks attached to the instance as well when the related instance is renewed.
Default: `TRUE`
     */
    public $RenewDataDisk;

    /**
     * @var boolean Whether to automatically use vouchers. Values:
`TRUE`: Use vouchers for payment automatically.
`FALSE`: Do not use vouchers for payment automatically.
Default: `FALSE`.
     */
    public $AutoVoucher;

    /**
     * @param array $InstanceIds IDs of one or more instances to be operated. The value can be obtained from the `InstanceId` parameter returned by the [DescribeInstances](https://intl.cloud.tencent.com/document/api/1207/47573?from_cn_redirect=1) API. Up to 100 instances can be requested at a time.
     * @param InstanceChargePrepaid $InstanceChargePrepaid Prepaid mode, i.e., monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. It is required for prepaid instances.
     * @param boolean $RenewDataDisk Whether to renew elastic data disks. Values: 
`TRUE`: Renew the elastic data disks attached to the instance as well when the related instance is renewed.
`FALSE`: Do not renew the elastic data disks attached to the instance as well when the related instance is renewed.
Default: `TRUE`
     * @param boolean $AutoVoucher Whether to automatically use vouchers. Values:
`TRUE`: Use vouchers for payment automatically.
`FALSE`: Do not use vouchers for payment automatically.
Default: `FALSE`.
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

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("RenewDataDisk",$param) and $param["RenewDataDisk"] !== null) {
            $this->RenewDataDisk = $param["RenewDataDisk"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }
    }
}
