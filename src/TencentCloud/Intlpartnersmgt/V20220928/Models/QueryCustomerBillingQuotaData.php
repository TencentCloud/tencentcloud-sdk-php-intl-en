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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sub-customer credit balance data
 *
 * @method float getTotalCredit() Obtain Total credit limit (unit: cny), accurate down to two decimal places.
 * @method void setTotalCredit(float $TotalCredit) Set Total credit limit (unit: cny), accurate down to two decimal places.
 * @method float getRemainingCredit() Obtain Remaining credit limit (unit: cny), accurate down to two decimal places.
 * @method void setRemainingCredit(float $RemainingCredit) Set Remaining credit limit (unit: cny), accurate down to two decimal places.
 * @method float getRemainingVoucher() Obtain Remaining total voucher amount (unit: cny), accurate down to two decimal places.
 * @method void setRemainingVoucher(float $RemainingVoucher) Set Remaining total voucher amount (unit: cny), accurate down to two decimal places.
 * @method integer getForce() Obtain Forced status
.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setForce(integer $Force) Set Forced status
.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getPrepayFrozen() Obtain Prepaid frozen amount.
 * @method void setPrepayFrozen(float $PrepayFrozen) Set Prepaid frozen amount.
 * @method float getPostpayFrozen() Obtain Postpaid frozen amount.
 * @method void setPostpayFrozen(float $PostpayFrozen) Set Postpaid frozen amount.
 */
class QueryCustomerBillingQuotaData extends AbstractModel
{
    /**
     * @var float Total credit limit (unit: cny), accurate down to two decimal places.
     */
    public $TotalCredit;

    /**
     * @var float Remaining credit limit (unit: cny), accurate down to two decimal places.
     */
    public $RemainingCredit;

    /**
     * @var float Remaining total voucher amount (unit: cny), accurate down to two decimal places.
     */
    public $RemainingVoucher;

    /**
     * @var integer Forced status
.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Force;

    /**
     * @var float Prepaid frozen amount.
     */
    public $PrepayFrozen;

    /**
     * @var float Postpaid frozen amount.
     */
    public $PostpayFrozen;

    /**
     * @param float $TotalCredit Total credit limit (unit: cny), accurate down to two decimal places.
     * @param float $RemainingCredit Remaining credit limit (unit: cny), accurate down to two decimal places.
     * @param float $RemainingVoucher Remaining total voucher amount (unit: cny), accurate down to two decimal places.
     * @param integer $Force Forced status
.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $PrepayFrozen Prepaid frozen amount.
     * @param float $PostpayFrozen Postpaid frozen amount.
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
        if (array_key_exists("TotalCredit",$param) and $param["TotalCredit"] !== null) {
            $this->TotalCredit = $param["TotalCredit"];
        }

        if (array_key_exists("RemainingCredit",$param) and $param["RemainingCredit"] !== null) {
            $this->RemainingCredit = $param["RemainingCredit"];
        }

        if (array_key_exists("RemainingVoucher",$param) and $param["RemainingVoucher"] !== null) {
            $this->RemainingVoucher = $param["RemainingVoucher"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }

        if (array_key_exists("PrepayFrozen",$param) and $param["PrepayFrozen"] !== null) {
            $this->PrepayFrozen = $param["PrepayFrozen"];
        }

        if (array_key_exists("PostpayFrozen",$param) and $param["PostpayFrozen"] !== null) {
            $this->PostpayFrozen = $param["PostpayFrozen"];
        }
    }
}
