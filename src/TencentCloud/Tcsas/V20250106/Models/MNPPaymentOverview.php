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
 * Payment overview data
 *
 * @method integer getOrderMNPNum() Obtain Number of mini programs involved in the order
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrderMNPNum(integer $OrderMNPNum) Set Number of mini programs involved in the order
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOrderNum() Obtain Total orders

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrderNum(integer $OrderNum) Set Total orders

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOrderPaidNum() Obtain Total paid orders

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrderPaidNum(integer $OrderPaidNum) Set Total paid orders

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOrderRefundNum() Obtain Total refunded orders

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrderRefundNum(integer $OrderRefundNum) Set Total refunded orders

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOrderUnpaidNum() Obtain Total unpaid orders
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrderUnpaidNum(integer $OrderUnpaidNum) Set Total unpaid orders
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOrderUserNum() Obtain Total order users
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrderUserNum(integer $OrderUserNum) Set Total order users
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPaidUserNum() Obtain Total paying users
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPaidUserNum(integer $PaidUserNum) Set Total paying users
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPaidAmount() Obtain Amount paid
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPaidAmount(string $PaidAmount) Set Amount paid
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRefundAmount() Obtain Total amount refunded
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRefundAmount(string $RefundAmount) Set Total amount refunded
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTotalAmount() Obtain Total order amount
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalAmount(string $TotalAmount) Set Total order amount
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUnpaidAmount() Obtain Unpaid amount
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnpaidAmount(string $UnpaidAmount) Set Unpaid amount
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUpdateTime() Obtain Timestamp
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(integer $UpdateTime) Set Timestamp
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDataTime() Obtain Data date
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataTime(string $DataTime) Set Data date
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MNPPaymentOverview extends AbstractModel
{
    /**
     * @var integer Number of mini programs involved in the order
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrderMNPNum;

    /**
     * @var integer Total orders

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrderNum;

    /**
     * @var integer Total paid orders

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrderPaidNum;

    /**
     * @var integer Total refunded orders

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrderRefundNum;

    /**
     * @var integer Total unpaid orders
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrderUnpaidNum;

    /**
     * @var integer Total order users
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrderUserNum;

    /**
     * @var integer Total paying users
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PaidUserNum;

    /**
     * @var string Amount paid
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PaidAmount;

    /**
     * @var string Total amount refunded
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RefundAmount;

    /**
     * @var string Total order amount
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalAmount;

    /**
     * @var string Unpaid amount
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnpaidAmount;

    /**
     * @var integer Timestamp
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Data date
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataTime;

    /**
     * @param integer $OrderMNPNum Number of mini programs involved in the order
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OrderNum Total orders

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OrderPaidNum Total paid orders

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OrderRefundNum Total refunded orders

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OrderUnpaidNum Total unpaid orders
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OrderUserNum Total order users
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PaidUserNum Total paying users
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PaidAmount Amount paid
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RefundAmount Total amount refunded
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TotalAmount Total order amount
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UnpaidAmount Unpaid amount
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UpdateTime Timestamp
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DataTime Data date
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

        if (array_key_exists("PaidUserNum",$param) and $param["PaidUserNum"] !== null) {
            $this->PaidUserNum = $param["PaidUserNum"];
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

        if (array_key_exists("DataTime",$param) and $param["DataTime"] !== null) {
            $this->DataTime = $param["DataTime"];
        }
    }
}
