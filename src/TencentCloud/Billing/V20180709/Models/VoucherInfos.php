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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Voucher information.
 *
 * @method string getOwnerUin() Obtain The owner of the voucher.
 * @method void setOwnerUin(string $OwnerUin) Set The owner of the voucher.
 * @method string getStatus() Obtain The status of the voucher: `unUsed`, `used`, `delivered`, `cancel`, `overdue`
 * @method void setStatus(string $Status) Set The status of the voucher: `unUsed`, `used`, `delivered`, `cancel`, `overdue`
 * @method integer getNominalValue() Obtain The value of the voucher. The value of this parameter is the voucher value (USD, rounded to 8 decimal places) multiplied by 100,000,000.
 * @method void setNominalValue(integer $NominalValue) Set The value of the voucher. The value of this parameter is the voucher value (USD, rounded to 8 decimal places) multiplied by 100,000,000.
 * @method integer getBalance() Obtain The balance left. The value of this parameter is the balance left (USD, rounded to 8 decimal places) multiplied by 100,000,000.
 * @method void setBalance(integer $Balance) Set The balance left. The value of this parameter is the balance left (USD, rounded to 8 decimal places) multiplied by 100,000,000.
 * @method string getVoucherId() Obtain The voucher ID.
 * @method void setVoucherId(string $VoucherId) Set The voucher ID.
 * @method string getPayMode() Obtain `postPay`: pay-as-you-go; `prePay`: prepaid; `riPay`: reserved instance; empty or `*`: all.
 * @method void setPayMode(string $PayMode) Set `postPay`: pay-as-you-go; `prePay`: prepaid; `riPay`: reserved instance; empty or `*`: all.
 * @method string getPayScene() Obtain If `PayMode` is `postPay`, this parameter may be `spotpay` (spot instance) or `settle account` (regular pay-as-you-go). If `PayMode` is `prePay`, this parameter may be `purchase`, `renew`, or `modify` (downgrade/upgrade). If `PayMode` is `riPay`, this parameter may be `oneOffFee` (prepayment of reserved instance) or `hourlyFee` (hourly billing of reserved instance). `*` means to query vouchers that support all billing scenarios.
 * @method void setPayScene(string $PayScene) Set If `PayMode` is `postPay`, this parameter may be `spotpay` (spot instance) or `settle account` (regular pay-as-you-go). If `PayMode` is `prePay`, this parameter may be `purchase`, `renew`, or `modify` (downgrade/upgrade). If `PayMode` is `riPay`, this parameter may be `oneOffFee` (prepayment of reserved instance) or `hourlyFee` (hourly billing of reserved instance). `*` means to query vouchers that support all billing scenarios.
 * @method string getBeginTime() Obtain The start time of the validity period.
 * @method void setBeginTime(string $BeginTime) Set The start time of the validity period.
 * @method string getEndTime() Obtain The end time of the validity period.
 * @method void setEndTime(string $EndTime) Set The end time of the validity period.
 * @method ApplicableProducts getApplicableProducts() Obtain The products that are applicable.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setApplicableProducts(ApplicableProducts $ApplicableProducts) Set The products that are applicable.
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getExcludedProducts() Obtain The products that are not applicable.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setExcludedProducts(array $ExcludedProducts) Set The products that are not applicable.
Note: This field may return `null`, indicating that no valid value was found.
 */
class VoucherInfos extends AbstractModel
{
    /**
     * @var string The owner of the voucher.
     */
    public $OwnerUin;

    /**
     * @var string The status of the voucher: `unUsed`, `used`, `delivered`, `cancel`, `overdue`
     */
    public $Status;

    /**
     * @var integer The value of the voucher. The value of this parameter is the voucher value (USD, rounded to 8 decimal places) multiplied by 100,000,000.
     */
    public $NominalValue;

    /**
     * @var integer The balance left. The value of this parameter is the balance left (USD, rounded to 8 decimal places) multiplied by 100,000,000.
     */
    public $Balance;

    /**
     * @var string The voucher ID.
     */
    public $VoucherId;

    /**
     * @var string `postPay`: pay-as-you-go; `prePay`: prepaid; `riPay`: reserved instance; empty or `*`: all.
     */
    public $PayMode;

    /**
     * @var string If `PayMode` is `postPay`, this parameter may be `spotpay` (spot instance) or `settle account` (regular pay-as-you-go). If `PayMode` is `prePay`, this parameter may be `purchase`, `renew`, or `modify` (downgrade/upgrade). If `PayMode` is `riPay`, this parameter may be `oneOffFee` (prepayment of reserved instance) or `hourlyFee` (hourly billing of reserved instance). `*` means to query vouchers that support all billing scenarios.
     */
    public $PayScene;

    /**
     * @var string The start time of the validity period.
     */
    public $BeginTime;

    /**
     * @var string The end time of the validity period.
     */
    public $EndTime;

    /**
     * @var ApplicableProducts The products that are applicable.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ApplicableProducts;

    /**
     * @var array The products that are not applicable.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ExcludedProducts;

    /**
     * @param string $OwnerUin The owner of the voucher.
     * @param string $Status The status of the voucher: `unUsed`, `used`, `delivered`, `cancel`, `overdue`
     * @param integer $NominalValue The value of the voucher. The value of this parameter is the voucher value (USD, rounded to 8 decimal places) multiplied by 100,000,000.
     * @param integer $Balance The balance left. The value of this parameter is the balance left (USD, rounded to 8 decimal places) multiplied by 100,000,000.
     * @param string $VoucherId The voucher ID.
     * @param string $PayMode `postPay`: pay-as-you-go; `prePay`: prepaid; `riPay`: reserved instance; empty or `*`: all.
     * @param string $PayScene If `PayMode` is `postPay`, this parameter may be `spotpay` (spot instance) or `settle account` (regular pay-as-you-go). If `PayMode` is `prePay`, this parameter may be `purchase`, `renew`, or `modify` (downgrade/upgrade). If `PayMode` is `riPay`, this parameter may be `oneOffFee` (prepayment of reserved instance) or `hourlyFee` (hourly billing of reserved instance). `*` means to query vouchers that support all billing scenarios.
     * @param string $BeginTime The start time of the validity period.
     * @param string $EndTime The end time of the validity period.
     * @param ApplicableProducts $ApplicableProducts The products that are applicable.
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $ExcludedProducts The products that are not applicable.
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NominalValue",$param) and $param["NominalValue"] !== null) {
            $this->NominalValue = $param["NominalValue"];
        }

        if (array_key_exists("Balance",$param) and $param["Balance"] !== null) {
            $this->Balance = $param["Balance"];
        }

        if (array_key_exists("VoucherId",$param) and $param["VoucherId"] !== null) {
            $this->VoucherId = $param["VoucherId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayScene",$param) and $param["PayScene"] !== null) {
            $this->PayScene = $param["PayScene"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ApplicableProducts",$param) and $param["ApplicableProducts"] !== null) {
            $this->ApplicableProducts = new ApplicableProducts();
            $this->ApplicableProducts->deserialize($param["ApplicableProducts"]);
        }

        if (array_key_exists("ExcludedProducts",$param) and $param["ExcludedProducts"] !== null) {
            $this->ExcludedProducts = [];
            foreach ($param["ExcludedProducts"] as $key => $value){
                $obj = new ExcludedProducts();
                $obj->deserialize($value);
                array_push($this->ExcludedProducts, $obj);
            }
        }
    }
}
