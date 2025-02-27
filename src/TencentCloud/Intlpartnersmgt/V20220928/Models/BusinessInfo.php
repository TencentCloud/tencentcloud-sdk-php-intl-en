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
 * Product information
 *
 * @method string getBusinessCodeName() Obtain Product name.
 * @method void setBusinessCodeName(string $BusinessCodeName) Set Product name.
 * @method string getBusinessCode() Obtain Product code.
 * @method void setBusinessCode(string $BusinessCode) Set Product code.
 * @method string getOriginalCost() Obtain Original price.
 * @method void setOriginalCost(string $OriginalCost) Set Original price.
 * @method string getVoucherPayAmount() Obtain Voucher amount.
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Voucher amount.
 * @method string getRICost() Obtain RI deduction.
 * @method void setRICost(string $RICost) Set RI deduction.
 * @method string getTotalCost() Obtain Total amount.
 * @method void setTotalCost(string $TotalCost) Set Total amount.
 */
class BusinessInfo extends AbstractModel
{
    /**
     * @var string Product name.
     */
    public $BusinessCodeName;

    /**
     * @var string Product code.
     */
    public $BusinessCode;

    /**
     * @var string Original price.
     */
    public $OriginalCost;

    /**
     * @var string Voucher amount.
     */
    public $VoucherPayAmount;

    /**
     * @var string RI deduction.
     */
    public $RICost;

    /**
     * @var string Total amount.
     */
    public $TotalCost;

    /**
     * @param string $BusinessCodeName Product name.
     * @param string $BusinessCode Product code.
     * @param string $OriginalCost Original price.
     * @param string $VoucherPayAmount Voucher amount.
     * @param string $RICost RI deduction.
     * @param string $TotalCost Total amount.
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
        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("OriginalCost",$param) and $param["OriginalCost"] !== null) {
            $this->OriginalCost = $param["OriginalCost"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("RICost",$param) and $param["RICost"] !== null) {
            $this->RICost = $param["RICost"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }
    }
}
