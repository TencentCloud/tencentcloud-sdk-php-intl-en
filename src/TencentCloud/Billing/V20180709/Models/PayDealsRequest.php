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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PayDeals request structure.
 *
 * @method array getOrderIds() Obtain Specifies one or more Sub-order No. that need to pay. must pass either this parameter or the BigDealIds field, but not both.
 * @method void setOrderIds(array $OrderIds) Set Specifies one or more Sub-order No. that need to pay. must pass either this parameter or the BigDealIds field, but not both.
 * @method integer getAutoVoucher() Obtain Whether to automatically use a voucher. valid values: 1 (yes), 0 (no). default: 0.
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically use a voucher. valid values: 1 (yes), 0 (no). default: 0.
 * @method array getVoucherIds() Obtain Voucher ID list. currently only supports specifying one voucher.
 * @method void setVoucherIds(array $VoucherIds) Set Voucher ID list. currently only supports specifying one voucher.
 * @method array getBigDealIds() Obtain Specifies one or more Order No. that need to pay. must pass either this parameter or the OrderIds field.
 * @method void setBigDealIds(array $BigDealIds) Set Specifies one or more Order No. that need to pay. must pass either this parameter or the OrderIds field.
 * @method integer getAgentPay() Obtain 0 self pay, 3 group agent, 4 reseller places a product-level payment order for customers. default 0.
 * @method void setAgentPay(integer $AgentPay) Set 0 self pay, 3 group agent, 4 reseller places a product-level payment order for customers. default 0.
 * @method string getCpsUin() Obtain Disregard it.
 * @method void setCpsUin(string $CpsUin) Set Disregard it.
 */
class PayDealsRequest extends AbstractModel
{
    /**
     * @var array Specifies one or more Sub-order No. that need to pay. must pass either this parameter or the BigDealIds field, but not both.
     */
    public $OrderIds;

    /**
     * @var integer Whether to automatically use a voucher. valid values: 1 (yes), 0 (no). default: 0.
     */
    public $AutoVoucher;

    /**
     * @var array Voucher ID list. currently only supports specifying one voucher.
     */
    public $VoucherIds;

    /**
     * @var array Specifies one or more Order No. that need to pay. must pass either this parameter or the OrderIds field.
     */
    public $BigDealIds;

    /**
     * @var integer 0 self pay, 3 group agent, 4 reseller places a product-level payment order for customers. default 0.
     */
    public $AgentPay;

    /**
     * @var string Disregard it.
     */
    public $CpsUin;

    /**
     * @param array $OrderIds Specifies one or more Sub-order No. that need to pay. must pass either this parameter or the BigDealIds field, but not both.
     * @param integer $AutoVoucher Whether to automatically use a voucher. valid values: 1 (yes), 0 (no). default: 0.
     * @param array $VoucherIds Voucher ID list. currently only supports specifying one voucher.
     * @param array $BigDealIds Specifies one or more Order No. that need to pay. must pass either this parameter or the OrderIds field.
     * @param integer $AgentPay 0 self pay, 3 group agent, 4 reseller places a product-level payment order for customers. default 0.
     * @param string $CpsUin Disregard it.
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
        if (array_key_exists("OrderIds",$param) and $param["OrderIds"] !== null) {
            $this->OrderIds = $param["OrderIds"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("BigDealIds",$param) and $param["BigDealIds"] !== null) {
            $this->BigDealIds = $param["BigDealIds"];
        }

        if (array_key_exists("AgentPay",$param) and $param["AgentPay"] !== null) {
            $this->AgentPay = $param["AgentPay"];
        }

        if (array_key_exists("CpsUin",$param) and $param["CpsUin"] !== null) {
            $this->CpsUin = $param["CpsUin"];
        }
    }
}
