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
 * Voucher usage details
 *
 * @method integer getId() Obtain Voucher log ID
 * @method void setId(integer $Id) Set Voucher log ID
 * @method string getVoucherId() Obtain Voucher ID.
 * @method void setVoucherId(string $VoucherId) Set Voucher ID.
 * @method string getDealName() Obtain Order ID
 * @method void setDealName(string $DealName) Set Order ID
 * @method string getBillId() Obtain Billing ID
 * @method void setBillId(string $BillId) Set Billing ID
 * @method float getAmount() Obtain Amount
 * @method void setAmount(float $Amount) Set Amount
 * @method string getPayMode() Obtain Payment mode
 * @method void setPayMode(string $PayMode) Set Payment mode
 * @method string getProductCode() Obtain Order product code
 * @method void setProductCode(string $ProductCode) Set Order product code
 * @method string getSubProductCode() Obtain Sub-product code
 * @method void setSubProductCode(string $SubProductCode) Set Sub-product code
 * @method string getProductCodeName() Obtain Product name of the order
 * @method void setProductCodeName(string $ProductCodeName) Set Product name of the order
 * @method string getSubProductCodeName() Obtain Subproduct name of the order
 * @method void setSubProductCodeName(string $SubProductCodeName) Set Subproduct name of the order
 * @method string getPayTime() Obtain Order payment time
 * @method void setPayTime(string $PayTime) Set Order payment time
 * @method string getCompletionTime() Obtain Order completion time
 * @method void setCompletionTime(string $CompletionTime) Set Order completion time
 * @method integer getOwnerUin() Obtain Order owner uin
 * @method void setOwnerUin(integer $OwnerUin) Set Order owner uin
 */
class UsageDetail extends AbstractModel
{
    /**
     * @var integer Voucher log ID
     */
    public $Id;

    /**
     * @var string Voucher ID.
     */
    public $VoucherId;

    /**
     * @var string Order ID
     */
    public $DealName;

    /**
     * @var string Billing ID
     */
    public $BillId;

    /**
     * @var float Amount
     */
    public $Amount;

    /**
     * @var string Payment mode
     */
    public $PayMode;

    /**
     * @var string Order product code
     */
    public $ProductCode;

    /**
     * @var string Sub-product code
     */
    public $SubProductCode;

    /**
     * @var string Product name of the order
     */
    public $ProductCodeName;

    /**
     * @var string Subproduct name of the order
     */
    public $SubProductCodeName;

    /**
     * @var string Order payment time
     */
    public $PayTime;

    /**
     * @var string Order completion time
     */
    public $CompletionTime;

    /**
     * @var integer Order owner uin
     */
    public $OwnerUin;

    /**
     * @param integer $Id Voucher log ID
     * @param string $VoucherId Voucher ID.
     * @param string $DealName Order ID
     * @param string $BillId Billing ID
     * @param float $Amount Amount
     * @param string $PayMode Payment mode
     * @param string $ProductCode Order product code
     * @param string $SubProductCode Sub-product code
     * @param string $ProductCodeName Product name of the order
     * @param string $SubProductCodeName Subproduct name of the order
     * @param string $PayTime Order payment time
     * @param string $CompletionTime Order completion time
     * @param integer $OwnerUin Order owner uin
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("VoucherId",$param) and $param["VoucherId"] !== null) {
            $this->VoucherId = $param["VoucherId"];
        }

        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("BillId",$param) and $param["BillId"] !== null) {
            $this->BillId = $param["BillId"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("ProductCodeName",$param) and $param["ProductCodeName"] !== null) {
            $this->ProductCodeName = $param["ProductCodeName"];
        }

        if (array_key_exists("SubProductCodeName",$param) and $param["SubProductCodeName"] !== null) {
            $this->SubProductCodeName = $param["SubProductCodeName"];
        }

        if (array_key_exists("PayTime",$param) and $param["PayTime"] !== null) {
            $this->PayTime = $param["PayTime"];
        }

        if (array_key_exists("CompletionTime",$param) and $param["CompletionTime"] !== null) {
            $this->CompletionTime = $param["CompletionTime"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }
    }
}
