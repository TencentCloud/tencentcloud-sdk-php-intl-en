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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Voucher data.
 *
 * @method integer getVoucherId() Obtain Voucher ID.
 * @method void setVoucherId(integer $VoucherId) Set Voucher ID.
 * @method integer getCustomerUin() Obtain Sub-account UIN
 * @method void setCustomerUin(integer $CustomerUin) Set Sub-account UIN
 * @method string getVoucherStatus() Obtain Voucher status: Issued/Used/Expired/Invalidated.
 * @method void setVoucherStatus(string $VoucherStatus) Set Voucher status: Issued/Used/Expired/Invalidated.
 * @method float getRemainingAmount() Obtain Remaining amount.
 * @method void setRemainingAmount(float $RemainingAmount) Set Remaining amount.
 * @method float getTotalAmount() Obtain Denomination.
 * @method void setTotalAmount(float $TotalAmount) Set Denomination.
 * @method string getPaymentMode() Obtain Payment mode. valid values: AllPayment, Prepaid, and Postpaid.
 * @method void setPaymentMode(string $PaymentMode) Set Payment mode. valid values: AllPayment, Prepaid, and Postpaid.
 * @method string getProductScope() Obtain Applicable product: AllProducts/SpecifyProducts/SpecifyProductsBlacklist.
 * @method void setProductScope(string $ProductScope) Set Applicable product: AllProducts/SpecifyProducts/SpecifyProductsBlacklist.
 * @method string getEffectiveTime() Obtain Start time.
 * @method void setEffectiveTime(string $EffectiveTime) Set Start time.
 * @method string getExpireTime() Obtain End time.
 * @method void setExpireTime(string $ExpireTime) Set End time.
 */
class DescribeCustomerOwnVoucherItem extends AbstractModel
{
    /**
     * @var integer Voucher ID.
     */
    public $VoucherId;

    /**
     * @var integer Sub-account UIN
     */
    public $CustomerUin;

    /**
     * @var string Voucher status: Issued/Used/Expired/Invalidated.
     */
    public $VoucherStatus;

    /**
     * @var float Remaining amount.
     */
    public $RemainingAmount;

    /**
     * @var float Denomination.
     */
    public $TotalAmount;

    /**
     * @var string Payment mode. valid values: AllPayment, Prepaid, and Postpaid.
     */
    public $PaymentMode;

    /**
     * @var string Applicable product: AllProducts/SpecifyProducts/SpecifyProductsBlacklist.
     */
    public $ProductScope;

    /**
     * @var string Start time.
     */
    public $EffectiveTime;

    /**
     * @var string End time.
     */
    public $ExpireTime;

    /**
     * @param integer $VoucherId Voucher ID.
     * @param integer $CustomerUin Sub-account UIN
     * @param string $VoucherStatus Voucher status: Issued/Used/Expired/Invalidated.
     * @param float $RemainingAmount Remaining amount.
     * @param float $TotalAmount Denomination.
     * @param string $PaymentMode Payment mode. valid values: AllPayment, Prepaid, and Postpaid.
     * @param string $ProductScope Applicable product: AllProducts/SpecifyProducts/SpecifyProductsBlacklist.
     * @param string $EffectiveTime Start time.
     * @param string $ExpireTime End time.
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
        if (array_key_exists("VoucherId",$param) and $param["VoucherId"] !== null) {
            $this->VoucherId = $param["VoucherId"];
        }

        if (array_key_exists("CustomerUin",$param) and $param["CustomerUin"] !== null) {
            $this->CustomerUin = $param["CustomerUin"];
        }

        if (array_key_exists("VoucherStatus",$param) and $param["VoucherStatus"] !== null) {
            $this->VoucherStatus = $param["VoucherStatus"];
        }

        if (array_key_exists("RemainingAmount",$param) and $param["RemainingAmount"] !== null) {
            $this->RemainingAmount = $param["RemainingAmount"];
        }

        if (array_key_exists("TotalAmount",$param) and $param["TotalAmount"] !== null) {
            $this->TotalAmount = $param["TotalAmount"];
        }

        if (array_key_exists("PaymentMode",$param) and $param["PaymentMode"] !== null) {
            $this->PaymentMode = $param["PaymentMode"];
        }

        if (array_key_exists("ProductScope",$param) and $param["ProductScope"] !== null) {
            $this->ProductScope = $param["ProductScope"];
        }

        if (array_key_exists("EffectiveTime",$param) and $param["EffectiveTime"] !== null) {
            $this->EffectiveTime = $param["EffectiveTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
