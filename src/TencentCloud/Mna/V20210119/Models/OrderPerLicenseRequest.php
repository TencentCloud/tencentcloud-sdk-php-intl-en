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
 * OrderPerLicense request structure.
 *
 * @method string getDeviceId() Obtain Device ID for purchasing a permanent License. If it is an unactivated device from the manufacturer, use HardwareId.
 * @method void setDeviceId(string $DeviceId) Set Device ID for purchasing a permanent License. If it is an unactivated device from the manufacturer, use HardwareId.
 * @method integer getType() Obtain Device type. 0: SDK, 1: CPE. Enter 0 when creating or activating a device as a user. Enter 1 when creating a device to be activated as a manufacturer.
 * @method void setType(integer $Type) Set Device type. 0: SDK, 1: CPE. Enter 0 when creating or activating a device as a user. Enter 1 when creating a device to be activated as a manufacturer.
 * @method boolean getRollBack() Obtain Rollback or not (delete device) after purchase fail, default false. If the device is bound to a currently effective traffic package, rollback is not allowed.
 * @method void setRollBack(boolean $RollBack) Set Rollback or not (delete device) after purchase fail, default false. If the device is bound to a currently effective traffic package, rollback is not allowed.
 * @method boolean getAutoVoucher() Obtain Whether to automatically select voucher. Default false.
Selection strategy for multiple vouchers: Deduct vouchers by this priority - voucher that can offset the total amount of the Payment Order, voucher with the earliest Expiration, voucher with the maximum deductible amount, voucher with the minimum balance, cash voucher. Only one voucher can be deducted at most.
 * @method void setAutoVoucher(boolean $AutoVoucher) Set Whether to automatically select voucher. Default false.
Selection strategy for multiple vouchers: Deduct vouchers by this priority - voucher that can offset the total amount of the Payment Order, voucher with the earliest Expiration, voucher with the maximum deductible amount, voucher with the minimum balance, cash voucher. Only one voucher can be deducted at most.
 * @method array getVoucherIds() Obtain Designated voucher ID. This parameter is invalid when selecting voucher automatically. Only one voucher can be input.
Note: If the designated voucher does not meet the order deduction conditions, proceed with normal payment without deducting the voucher.
 * @method void setVoucherIds(array $VoucherIds) Set Designated voucher ID. This parameter is invalid when selecting voucher automatically. Only one voucher can be input.
Note: If the designated voucher does not meet the order deduction conditions, proceed with normal payment without deducting the voucher.
 */
class OrderPerLicenseRequest extends AbstractModel
{
    /**
     * @var string Device ID for purchasing a permanent License. If it is an unactivated device from the manufacturer, use HardwareId.
     */
    public $DeviceId;

    /**
     * @var integer Device type. 0: SDK, 1: CPE. Enter 0 when creating or activating a device as a user. Enter 1 when creating a device to be activated as a manufacturer.
     */
    public $Type;

    /**
     * @var boolean Rollback or not (delete device) after purchase fail, default false. If the device is bound to a currently effective traffic package, rollback is not allowed.
     */
    public $RollBack;

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
     * @param string $DeviceId Device ID for purchasing a permanent License. If it is an unactivated device from the manufacturer, use HardwareId.
     * @param integer $Type Device type. 0: SDK, 1: CPE. Enter 0 when creating or activating a device as a user. Enter 1 when creating a device to be activated as a manufacturer.
     * @param boolean $RollBack Rollback or not (delete device) after purchase fail, default false. If the device is bound to a currently effective traffic package, rollback is not allowed.
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RollBack",$param) and $param["RollBack"] !== null) {
            $this->RollBack = $param["RollBack"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }
    }
}
