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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OrderFlowPackage request structure.
 *
 * @method string getPackageType() Obtain Traffic package specification type. Values are as follows:
DEVICE_1_FLOW_20G,DEVICE_2_FLOW_50G,
DEVICE_3_FLOW_100G,
DEVICE_5_FLOW_500G represents traffic packages of 20G, 50G, 100G, and 500G gear selection.
Gear selection also impacts the bandwidth cap of the data transfer plan.
20G: Bind up to 1 device.
50G: Bind up to 2 devices.
100G: Bind up to 3 devices.
500G: Bind up to 5 devices.
 * @method void setPackageType(string $PackageType) Set Traffic package specification type. Values are as follows:
DEVICE_1_FLOW_20G,DEVICE_2_FLOW_50G,
DEVICE_3_FLOW_100G,
DEVICE_5_FLOW_500G represents traffic packages of 20G, 50G, 100G, and 500G gear selection.
Gear selection also impacts the bandwidth cap of the data transfer plan.
20G: Bind up to 1 device.
50G: Bind up to 2 devices.
100G: Bind up to 3 devices.
500G: Bind up to 5 devices.
 * @method array getDeviceList() Obtain Device ID list bound to the data transfer plan. Number of bundled instances depends on the specification tiers of the plan.
20G: Bind up to 1 device.
50G: Bind up to 2 devices.
100G: Bind up to 3 devices.
500G: Bind up to 5 devices.
 * @method void setDeviceList(array $DeviceList) Set Device ID list bound to the data transfer plan. Number of bundled instances depends on the specification tiers of the plan.
20G: Bind up to 1 device.
50G: Bind up to 2 devices.
100G: Bind up to 3 devices.
500G: Bind up to 5 devices.
 * @method boolean getAutoRenewFlag() Obtain Whether the service is automatically renewed conflicts with traffic truncation. You can only enable one option.
 * @method void setAutoRenewFlag(boolean $AutoRenewFlag) Set Whether the service is automatically renewed conflicts with traffic truncation. You can only enable one option.
 * @method integer getPackageRegion() Obtain Region flag. 0: Chinese mainland, 1: outside the Chinese mainland
 * @method void setPackageRegion(integer $PackageRegion) Set Region flag. 0: Chinese mainland, 1: outside the Chinese mainland
 * @method boolean getFlowTruncFlag() Obtain Whether traffic truncation is enabled. This option conflicts with auto renewal.
 * @method void setFlowTruncFlag(boolean $FlowTruncFlag) Set Whether traffic truncation is enabled. This option conflicts with auto renewal.
 * @method boolean getAutoVoucher() Obtain Whether to automatically select voucher. Default false.
Selection strategy for multiple vouchers: Deduct vouchers by this priority - voucher that can offset the total amount of the Payment Order, voucher with the earliest Expiration, voucher with the maximum deductible amount, voucher with the minimum balance, cash voucher. Only one voucher can be deducted at most.
 * @method void setAutoVoucher(boolean $AutoVoucher) Set Whether to automatically select voucher. Default false.
Selection strategy for multiple vouchers: Deduct vouchers by this priority - voucher that can offset the total amount of the Payment Order, voucher with the earliest Expiration, voucher with the maximum deductible amount, voucher with the minimum balance, cash voucher. Only one voucher can be deducted at most.
 * @method array getVoucherIds() Obtain Designated voucher ID. This parameter is invalid when selecting voucher automatically. Only one voucher can be input.
Note: If the designated voucher does not meet the order deduction conditions, proceed with normal payment without deducting the voucher.
 * @method void setVoucherIds(array $VoucherIds) Set Designated voucher ID. This parameter is invalid when selecting voucher automatically. Only one voucher can be input.
Note: If the designated voucher does not meet the order deduction conditions, proceed with normal payment without deducting the voucher.
 */
class OrderFlowPackageRequest extends AbstractModel
{
    /**
     * @var string Traffic package specification type. Values are as follows:
DEVICE_1_FLOW_20G,DEVICE_2_FLOW_50G,
DEVICE_3_FLOW_100G,
DEVICE_5_FLOW_500G represents traffic packages of 20G, 50G, 100G, and 500G gear selection.
Gear selection also impacts the bandwidth cap of the data transfer plan.
20G: Bind up to 1 device.
50G: Bind up to 2 devices.
100G: Bind up to 3 devices.
500G: Bind up to 5 devices.
     */
    public $PackageType;

    /**
     * @var array Device ID list bound to the data transfer plan. Number of bundled instances depends on the specification tiers of the plan.
20G: Bind up to 1 device.
50G: Bind up to 2 devices.
100G: Bind up to 3 devices.
500G: Bind up to 5 devices.
     */
    public $DeviceList;

    /**
     * @var boolean Whether the service is automatically renewed conflicts with traffic truncation. You can only enable one option.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Region flag. 0: Chinese mainland, 1: outside the Chinese mainland
     */
    public $PackageRegion;

    /**
     * @var boolean Whether traffic truncation is enabled. This option conflicts with auto renewal.
     */
    public $FlowTruncFlag;

    /**
     * @var boolean Whether to automatically select voucher. Default false.
Selection strategy for multiple vouchers: Deduct vouchers by this priority - voucher that can offset the total amount of the Payment Order, voucher with the earliest Expiration, voucher with the maximum deductible amount, voucher with the minimum balance, cash voucher. Only one voucher can be deducted at most.
     */
    public $AutoVoucher;

    /**
     * @var array Designated voucher ID. This parameter is invalid when selecting voucher automatically. Only one voucher can be input.
Note: If the designated voucher does not meet the order deduction conditions, proceed with normal payment without deducting the voucher.
     */
    public $VoucherIds;

    /**
     * @param string $PackageType Traffic package specification type. Values are as follows:
DEVICE_1_FLOW_20G,DEVICE_2_FLOW_50G,
DEVICE_3_FLOW_100G,
DEVICE_5_FLOW_500G represents traffic packages of 20G, 50G, 100G, and 500G gear selection.
Gear selection also impacts the bandwidth cap of the data transfer plan.
20G: Bind up to 1 device.
50G: Bind up to 2 devices.
100G: Bind up to 3 devices.
500G: Bind up to 5 devices.
     * @param array $DeviceList Device ID list bound to the data transfer plan. Number of bundled instances depends on the specification tiers of the plan.
20G: Bind up to 1 device.
50G: Bind up to 2 devices.
100G: Bind up to 3 devices.
500G: Bind up to 5 devices.
     * @param boolean $AutoRenewFlag Whether the service is automatically renewed conflicts with traffic truncation. You can only enable one option.
     * @param integer $PackageRegion Region flag. 0: Chinese mainland, 1: outside the Chinese mainland
     * @param boolean $FlowTruncFlag Whether traffic truncation is enabled. This option conflicts with auto renewal.
     * @param boolean $AutoVoucher Whether to automatically select voucher. Default false.
Selection strategy for multiple vouchers: Deduct vouchers by this priority - voucher that can offset the total amount of the Payment Order, voucher with the earliest Expiration, voucher with the maximum deductible amount, voucher with the minimum balance, cash voucher. Only one voucher can be deducted at most.
     * @param array $VoucherIds Designated voucher ID. This parameter is invalid when selecting voucher automatically. Only one voucher can be input.
Note: If the designated voucher does not meet the order deduction conditions, proceed with normal payment without deducting the voucher.
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
        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("DeviceList",$param) and $param["DeviceList"] !== null) {
            $this->DeviceList = $param["DeviceList"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("PackageRegion",$param) and $param["PackageRegion"] !== null) {
            $this->PackageRegion = $param["PackageRegion"];
        }

        if (array_key_exists("FlowTruncFlag",$param) and $param["FlowTruncFlag"] !== null) {
            $this->FlowTruncFlag = $param["FlowTruncFlag"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }
    }
}
