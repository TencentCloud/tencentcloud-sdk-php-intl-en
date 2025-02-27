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
 * @method string getPayMode() Obtain Payment mode.
 * @method void setPayMode(string $PayMode) Set Payment mode.
 * @method string getPayModeName() Obtain Payment mode name.
 * @method void setPayModeName(string $PayModeName) Set Payment mode name.
 * @method string getOriginalCost() Obtain Actual total consumption, up to 8 decimal places.
 * @method void setOriginalCost(string $OriginalCost) Set Actual total consumption, up to 8 decimal places.
 * @method array getDetail() Obtain Bill details in each payment mode.
 * @method void setDetail(array $Detail) Set Bill details in each payment mode.
 * @method string getVoucherPayAmount() Obtain Voucher payment amount, up to 8 decimal places.
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Voucher payment amount, up to 8 decimal places.
 * @method string getTotalCost() Obtain Total consumption, up to 8 decimal places.
 * @method void setTotalCost(string $TotalCost) Set Total consumption, up to 8 decimal places.
 */
class PayModeSummaryOverviewItem extends AbstractModel
{
    /**
     * @var string Payment mode.
     */
    public $PayMode;

    /**
     * @var string Payment mode name.
     */
    public $PayModeName;

    /**
     * @var string Actual total consumption, up to 8 decimal places.
     */
    public $OriginalCost;

    /**
     * @var array Bill details in each payment mode.
     */
    public $Detail;

    /**
     * @var string Voucher payment amount, up to 8 decimal places.
     */
    public $VoucherPayAmount;

    /**
     * @var string Total consumption, up to 8 decimal places.
     */
    public $TotalCost;

    /**
     * @param string $PayMode Payment mode.
     * @param string $PayModeName Payment mode name.
     * @param string $OriginalCost Actual total consumption, up to 8 decimal places.
     * @param array $Detail Bill details in each payment mode.
     * @param string $VoucherPayAmount Voucher payment amount, up to 8 decimal places.
     * @param string $TotalCost Total consumption, up to 8 decimal places.
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
