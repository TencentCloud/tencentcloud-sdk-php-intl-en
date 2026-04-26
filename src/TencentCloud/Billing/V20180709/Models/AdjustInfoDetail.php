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
 * Abnormal adjustment details of UIN
 *
 * @method string getPayerUin() Obtain Payer UIN: Account ID of the payer, which is the unique account identifier for the user in Tencent Cloud.
 * @method void setPayerUin(string $PayerUin) Set Payer UIN: Account ID of the payer, which is the unique account identifier for the user in Tencent Cloud.
 * @method string getMonth() Obtain Bill month, formatted as yyyy-MM.
 * @method void setMonth(string $Month) Set Bill month, formatted as yyyy-MM.
 * @method string getAdjustType() Obtain Adjustment type
Bill adjustment: manualAdjustment
Supplementary settlement: supplementarySettlement
Re-settlement
 * @method void setAdjustType(string $AdjustType) Set Adjustment type
Bill adjustment: manualAdjustment
Supplementary settlement: supplementarySettlement
Re-settlement
 * @method string getAdjustNum() Obtain Adjustment Number
 * @method void setAdjustNum(string $AdjustNum) Set Adjustment Number
 * @method string getAdjustCompletionTime() Obtain Abnormal adjustment completion time. Format: yyyy-MM-dd HH:mm:ss
 * @method void setAdjustCompletionTime(string $AdjustCompletionTime) Set Abnormal adjustment completion time. Format: yyyy-MM-dd HH:mm:ss
 * @method float getAdjustAmount() Obtain Adjustment Amount
 * @method void setAdjustAmount(float $AdjustAmount) Set Adjustment Amount
 */
class AdjustInfoDetail extends AbstractModel
{
    /**
     * @var string Payer UIN: Account ID of the payer, which is the unique account identifier for the user in Tencent Cloud.
     */
    public $PayerUin;

    /**
     * @var string Bill month, formatted as yyyy-MM.
     */
    public $Month;

    /**
     * @var string Adjustment type
Bill adjustment: manualAdjustment
Supplementary settlement: supplementarySettlement
Re-settlement
     */
    public $AdjustType;

    /**
     * @var string Adjustment Number
     */
    public $AdjustNum;

    /**
     * @var string Abnormal adjustment completion time. Format: yyyy-MM-dd HH:mm:ss
     */
    public $AdjustCompletionTime;

    /**
     * @var float Adjustment Amount
     */
    public $AdjustAmount;

    /**
     * @param string $PayerUin Payer UIN: Account ID of the payer, which is the unique account identifier for the user in Tencent Cloud.
     * @param string $Month Bill month, formatted as yyyy-MM.
     * @param string $AdjustType Adjustment type
Bill adjustment: manualAdjustment
Supplementary settlement: supplementarySettlement
Re-settlement
     * @param string $AdjustNum Adjustment Number
     * @param string $AdjustCompletionTime Abnormal adjustment completion time. Format: yyyy-MM-dd HH:mm:ss
     * @param float $AdjustAmount Adjustment Amount
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
        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("AdjustType",$param) and $param["AdjustType"] !== null) {
            $this->AdjustType = $param["AdjustType"];
        }

        if (array_key_exists("AdjustNum",$param) and $param["AdjustNum"] !== null) {
            $this->AdjustNum = $param["AdjustNum"];
        }

        if (array_key_exists("AdjustCompletionTime",$param) and $param["AdjustCompletionTime"] !== null) {
            $this->AdjustCompletionTime = $param["AdjustCompletionTime"];
        }

        if (array_key_exists("AdjustAmount",$param) and $param["AdjustAmount"] !== null) {
            $this->AdjustAmount = $param["AdjustAmount"];
        }
    }
}
