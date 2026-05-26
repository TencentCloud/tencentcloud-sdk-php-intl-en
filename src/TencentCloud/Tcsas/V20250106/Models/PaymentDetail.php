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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mini program payment detailed data.
 *
 * @method string getDataTime() Obtain Date in YYYYMMDD format.
 * @method void setDataTime(string $DataTime) Set Date in YYYYMMDD format.
 * @method integer getOrderMNPNum() Obtain Mini program count with orders.
 * @method void setOrderMNPNum(integer $OrderMNPNum) Set Mini program count with orders.
 * @method integer getOrderNum() Obtain Total orders.
 * @method void setOrderNum(integer $OrderNum) Set Total orders.
 * @method integer getOrderPaidNum() Obtain Paid orders.
 * @method void setOrderPaidNum(integer $OrderPaidNum) Set Paid orders.
 * @method integer getOrderRefundNum() Obtain Number of refund orders.
 * @method void setOrderRefundNum(integer $OrderRefundNum) Set Number of refund orders.
 * @method integer getOrderUnpaidNum() Obtain Total unpaid orders.
 * @method void setOrderUnpaidNum(integer $OrderUnpaidNum) Set Total unpaid orders.
 * @method integer getOrderUserNum() Obtain Number of ordering users (by OpenID).
 * @method void setOrderUserNum(integer $OrderUserNum) Set Number of ordering users (by OpenID).
 * @method string getPaidAmount() Obtain Amount paid.
 * @method void setPaidAmount(string $PaidAmount) Set Amount paid.
 * @method string getRefundAmount() Obtain Amount refunded.
 * @method void setRefundAmount(string $RefundAmount) Set Amount refunded.
 * @method string getTotalAmount() Obtain Total amount.
 * @method void setTotalAmount(string $TotalAmount) Set Total amount.
 * @method string getUnpaidAmount() Obtain Unpaid amount.
 * @method void setUnpaidAmount(string $UnpaidAmount) Set Unpaid amount.
 * @method integer getUpdateTime() Obtain Data update timestamp.
 * @method void setUpdateTime(integer $UpdateTime) Set Data update timestamp.
 */
class PaymentDetail extends AbstractModel
{
    /**
     * @var string Date in YYYYMMDD format.
     */
    public $DataTime;

    /**
     * @var integer Mini program count with orders.
     */
    public $OrderMNPNum;

    /**
     * @var integer Total orders.
     */
    public $OrderNum;

    /**
     * @var integer Paid orders.
     */
    public $OrderPaidNum;

    /**
     * @var integer Number of refund orders.
     */
    public $OrderRefundNum;

    /**
     * @var integer Total unpaid orders.
     */
    public $OrderUnpaidNum;

    /**
     * @var integer Number of ordering users (by OpenID).
     */
    public $OrderUserNum;

    /**
     * @var string Amount paid.
     */
    public $PaidAmount;

    /**
     * @var string Amount refunded.
     */
    public $RefundAmount;

    /**
     * @var string Total amount.
     */
    public $TotalAmount;

    /**
     * @var string Unpaid amount.
     */
    public $UnpaidAmount;

    /**
     * @var integer Data update timestamp.
     */
    public $UpdateTime;

    /**
     * @param string $DataTime Date in YYYYMMDD format.
     * @param integer $OrderMNPNum Mini program count with orders.
     * @param integer $OrderNum Total orders.
     * @param integer $OrderPaidNum Paid orders.
     * @param integer $OrderRefundNum Number of refund orders.
     * @param integer $OrderUnpaidNum Total unpaid orders.
     * @param integer $OrderUserNum Number of ordering users (by OpenID).
     * @param string $PaidAmount Amount paid.
     * @param string $RefundAmount Amount refunded.
     * @param string $TotalAmount Total amount.
     * @param string $UnpaidAmount Unpaid amount.
     * @param integer $UpdateTime Data update timestamp.
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
        if (array_key_exists("DataTime",$param) and $param["DataTime"] !== null) {
            $this->DataTime = $param["DataTime"];
        }

        if (array_key_exists("OrderMNPNum",$param) and $param["OrderMNPNum"] !== null) {
            $this->OrderMNPNum = $param["OrderMNPNum"];
        }

        if (array_key_exists("OrderNum",$param) and $param["OrderNum"] !== null) {
            $this->OrderNum = $param["OrderNum"];
        }

        if (array_key_exists("OrderPaidNum",$param) and $param["OrderPaidNum"] !== null) {
            $this->OrderPaidNum = $param["OrderPaidNum"];
        }

        if (array_key_exists("OrderRefundNum",$param) and $param["OrderRefundNum"] !== null) {
            $this->OrderRefundNum = $param["OrderRefundNum"];
        }

        if (array_key_exists("OrderUnpaidNum",$param) and $param["OrderUnpaidNum"] !== null) {
            $this->OrderUnpaidNum = $param["OrderUnpaidNum"];
        }

        if (array_key_exists("OrderUserNum",$param) and $param["OrderUserNum"] !== null) {
            $this->OrderUserNum = $param["OrderUserNum"];
        }

        if (array_key_exists("PaidAmount",$param) and $param["PaidAmount"] !== null) {
            $this->PaidAmount = $param["PaidAmount"];
        }

        if (array_key_exists("RefundAmount",$param) and $param["RefundAmount"] !== null) {
            $this->RefundAmount = $param["RefundAmount"];
        }

        if (array_key_exists("TotalAmount",$param) and $param["TotalAmount"] !== null) {
            $this->TotalAmount = $param["TotalAmount"];
        }

        if (array_key_exists("UnpaidAmount",$param) and $param["UnpaidAmount"] !== null) {
            $this->UnpaidAmount = $param["UnpaidAmount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
