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
 * This API is used to view UIN exception adjustment details.
 *
 * @method string getPayerUin() Obtain Payer UIN, namely the account ID of the payer. The account ID is the user's unique account identifier on Tencent Cloud.
Note: This field may return null, indicating that no valid values can be obtained.
Example value: 909619400.
 * @method void setPayerUin(string $PayerUin) Set Payer UIN, namely the account ID of the payer. The account ID is the user's unique account identifier on Tencent Cloud.
Note: This field may return null, indicating that no valid values can be obtained.
Example value: 909619400.
 * @method string getMonth() Obtain Bill month. Format: yyyy-MM.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: 2024-10.
 * @method void setMonth(string $Month) Set Bill month. Format: yyyy-MM.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: 2024-10.
 * @method string getAdjustType() Obtain Adjustment type.
Adjustment: manualAdjustment.
Supplementary settlement: supplementarySettlement.
Re-settlement: reSettlement.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: manualAdjustment.
 * @method void setAdjustType(string $AdjustType) Set Adjustment type.
Adjustment: manualAdjustment.
Supplementary settlement: supplementarySettlement.
Re-settlement: reSettlement.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: manualAdjustment.
 * @method string getAdjustNum() Obtain Adjustment order number.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: 2220726096135.
 * @method void setAdjustNum(string $AdjustNum) Set Adjustment order number.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: 2220726096135.
 * @method string getAdjustCompletionTime() Obtain Completion time of exception adjustment. Format: yyyy-MM-dd HH:mm:ss.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: 2022-12-02 12:39:04.
 * @method void setAdjustCompletionTime(string $AdjustCompletionTime) Set Completion time of exception adjustment. Format: yyyy-MM-dd HH:mm:ss.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: 2022-12-02 12:39:04.
 * @method float getAdjustAmount() Obtain Adjustment amount.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: 333.00000000.
 * @method void setAdjustAmount(float $AdjustAmount) Set Adjustment amount.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: 333.00000000.
 */
class AdjustInfoDetail extends AbstractModel
{
    /**
     * @var string Payer UIN, namely the account ID of the payer. The account ID is the user's unique account identifier on Tencent Cloud.
Note: This field may return null, indicating that no valid values can be obtained.
Example value: 909619400.
     */
    public $PayerUin;

    /**
     * @var string Bill month. Format: yyyy-MM.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: 2024-10.
     */
    public $Month;

    /**
     * @var string Adjustment type.
Adjustment: manualAdjustment.
Supplementary settlement: supplementarySettlement.
Re-settlement: reSettlement.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: manualAdjustment.
     */
    public $AdjustType;

    /**
     * @var string Adjustment order number.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: 2220726096135.
     */
    public $AdjustNum;

    /**
     * @var string Completion time of exception adjustment. Format: yyyy-MM-dd HH:mm:ss.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: 2022-12-02 12:39:04.
     */
    public $AdjustCompletionTime;

    /**
     * @var float Adjustment amount.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: 333.00000000.
     */
    public $AdjustAmount;

    /**
     * @param string $PayerUin Payer UIN, namely the account ID of the payer. The account ID is the user's unique account identifier on Tencent Cloud.
Note: This field may return null, indicating that no valid values can be obtained.
Example value: 909619400.
     * @param string $Month Bill month. Format: yyyy-MM.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: 2024-10.
     * @param string $AdjustType Adjustment type.
Adjustment: manualAdjustment.
Supplementary settlement: supplementarySettlement.
Re-settlement: reSettlement.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: manualAdjustment.
     * @param string $AdjustNum Adjustment order number.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: 2220726096135.
     * @param string $AdjustCompletionTime Completion time of exception adjustment. Format: yyyy-MM-dd HH:mm:ss.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: 2022-12-02 12:39:04.
     * @param float $AdjustAmount Adjustment amount.
Note: This field may return null, indicating that no valid value can be obtained.
Example value: 333.00000000.
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
