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
 * Payment mode details in the customer bill data totaled by payment mode
 *
 * @method string getPayMode() Obtain Billing mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayMode(string $PayMode) Set Billing mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPayModeName() Obtain Billing mode name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayModeName(string $PayModeName) Set Billing mode name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOriginalCost() Obtain The actual total consumption amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginalCost(string $OriginalCost) Set The actual total consumption amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDetail() Obtain Bill details in each payment mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetail(array $Detail) Set Bill details in each payment mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVoucherPayAmount() Obtain The deducted voucher amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set The deducted voucher amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTotalCost() Obtain Total consumption amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCost(string $TotalCost) Set Total consumption amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PayModeSummaryOverviewItem extends AbstractModel
{
    /**
     * @var string Billing mode
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayMode;

    /**
     * @var string Billing mode name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayModeName;

    /**
     * @var string The actual total consumption amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginalCost;

    /**
     * @var array Bill details in each payment mode
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Detail;

    /**
     * @var string The deducted voucher amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VoucherPayAmount;

    /**
     * @var string Total consumption amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCost;

    /**
     * @param string $PayMode Billing mode
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PayModeName Billing mode name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OriginalCost The actual total consumption amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Detail Bill details in each payment mode
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VoucherPayAmount The deducted voucher amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TotalCost Total consumption amount accurate down to eight decimal places
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayModeName",$param) and $param["PayModeName"] !== null) {
            $this->PayModeName = $param["PayModeName"];
        }

        if (array_key_exists("OriginalCost",$param) and $param["OriginalCost"] !== null) {
            $this->OriginalCost = $param["OriginalCost"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = [];
            foreach ($param["Detail"] as $key => $value){
                $obj = new ActionSummaryOverviewItem();
                $obj->deserialize($value);
                array_push($this->Detail, $obj);
            }
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }
    }
}
