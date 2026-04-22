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
 * @method string getARPPu() Obtain Paid revenue / Number of paying users * 100%
 * @method void setARPPu(string $ARPPu) Set Paid revenue / Number of paying users * 100%
 * @method string getDataTime() Obtain Data time in YYYYMMDD format
 * @method void setDataTime(string $DataTime) Set Data time in YYYYMMDD format
 * @method string getNewPaidUseRatio() Obtain New paying user ratio = NewUserNum / OrderUserNum * 100%
 * @method void setNewPaidUseRatio(string $NewPaidUseRatio) Set New paying user ratio = NewUserNum / OrderUserNum * 100%
 * @method integer getNewPaidUserNum() Obtain Number of new paying users
 * @method void setNewPaidUserNum(integer $NewPaidUserNum) Set Number of new paying users
 * @method string getNewUserPaidAmount() Obtain Total payment amount from new users
 * @method void setNewUserPaidAmount(string $NewUserPaidAmount) Set Total payment amount from new users
 * @method string getPaidAmount() Obtain Total payment amount
 * @method void setPaidAmount(string $PaidAmount) Set Total payment amount
 * @method integer getPaidUserNum() Obtain Number of paying users
 * @method void setPaidUserNum(integer $PaidUserNum) Set Number of paying users
 * @method string getRefundAmount() Obtain Refund amount
 * @method void setRefundAmount(string $RefundAmount) Set Refund amount
 * @method integer getRefundNum() Obtain Number of refund orders
 * @method void setRefundNum(integer $RefundNum) Set Number of refund orders
 * @method integer getUpdateTime() Obtain Update time (timestamp in seconds)
 * @method void setUpdateTime(integer $UpdateTime) Set Update time (timestamp in seconds)
 */
class MNGPaymentOverview extends AbstractModel
{
    /**
     * @var string Paid revenue / Number of paying users * 100%
     */
    public $ARPPu;

    /**
     * @var string Data time in YYYYMMDD format
     */
    public $DataTime;

    /**
     * @var string New paying user ratio = NewUserNum / OrderUserNum * 100%
     */
    public $NewPaidUseRatio;

    /**
     * @var integer Number of new paying users
     */
    public $NewPaidUserNum;

    /**
     * @var string Total payment amount from new users
     */
    public $NewUserPaidAmount;

    /**
     * @var string Total payment amount
     */
    public $PaidAmount;

    /**
     * @var integer Number of paying users
     */
    public $PaidUserNum;

    /**
     * @var string Refund amount
     */
    public $RefundAmount;

    /**
     * @var integer Number of refund orders
     */
    public $RefundNum;

    /**
     * @var integer Update time (timestamp in seconds)
     */
    public $UpdateTime;

    /**
     * @param string $ARPPu Paid revenue / Number of paying users * 100%
     * @param string $DataTime Data time in YYYYMMDD format
     * @param string $NewPaidUseRatio New paying user ratio = NewUserNum / OrderUserNum * 100%
     * @param integer $NewPaidUserNum Number of new paying users
     * @param string $NewUserPaidAmount Total payment amount from new users
     * @param string $PaidAmount Total payment amount
     * @param integer $PaidUserNum Number of paying users
     * @param string $RefundAmount Refund amount
     * @param integer $RefundNum Number of refund orders
     * @param integer $UpdateTime Update time (timestamp in seconds)
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
        if (array_key_exists("ARPPu",$param) and $param["ARPPu"] !== null) {
            $this->ARPPu = $param["ARPPu"];
        }

        if (array_key_exists("DataTime",$param) and $param["DataTime"] !== null) {
            $this->DataTime = $param["DataTime"];
        }

        if (array_key_exists("NewPaidUseRatio",$param) and $param["NewPaidUseRatio"] !== null) {
            $this->NewPaidUseRatio = $param["NewPaidUseRatio"];
        }

        if (array_key_exists("NewPaidUserNum",$param) and $param["NewPaidUserNum"] !== null) {
            $this->NewPaidUserNum = $param["NewPaidUserNum"];
        }

        if (array_key_exists("NewUserPaidAmount",$param) and $param["NewUserPaidAmount"] !== null) {
            $this->NewUserPaidAmount = $param["NewUserPaidAmount"];
        }

        if (array_key_exists("PaidAmount",$param) and $param["PaidAmount"] !== null) {
            $this->PaidAmount = $param["PaidAmount"];
        }

        if (array_key_exists("PaidUserNum",$param) and $param["PaidUserNum"] !== null) {
            $this->PaidUserNum = $param["PaidUserNum"];
        }

        if (array_key_exists("RefundAmount",$param) and $param["RefundAmount"] !== null) {
            $this->RefundAmount = $param["RefundAmount"];
        }

        if (array_key_exists("RefundNum",$param) and $param["RefundNum"] !== null) {
            $this->RefundNum = $param["RefundNum"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
