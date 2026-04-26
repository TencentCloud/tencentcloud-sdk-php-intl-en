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
 * The usage records.
 *
 * @method integer getUsedAmount() Obtain The amount used. The value of this parameter is the amount used (USD, rounded to 8 decimal places) multiplied by 100,000,000.
 * @method void setUsedAmount(integer $UsedAmount) Set The amount used. The value of this parameter is the amount used (USD, rounded to 8 decimal places) multiplied by 100,000,000.
 * @method string getUsedTime() Obtain The time when the voucher was used.
 * @method void setUsedTime(string $UsedTime) Set The time when the voucher was used.
 * @method array getUsageDetails() Obtain Usage record details
 * @method void setUsageDetails(array $UsageDetails) Set Usage record details
 * @method string getPayMode() Obtain Payment mode
 * @method void setPayMode(string $PayMode) Set Payment mode
 * @method string getVoucherId() Obtain Queried coupon id
 * @method void setVoucherId(string $VoucherId) Set Queried coupon id
 * @method string getPayScene() Obtain Transaction scene: (adjust: adjust accounts, common: normal transaction scene)
 * @method void setPayScene(string $PayScene) Set Transaction scene: (adjust: adjust accounts, common: normal transaction scene)
 * @method string getSeqId() Obtain Unique ID, corresponding to transaction: prepaid dealName, bill adjustment/postpaid outTradeNo
 * @method void setSeqId(string $SeqId) Set Unique ID, corresponding to transaction: prepaid dealName, bill adjustment/postpaid outTradeNo
 */
class UsageRecords extends AbstractModel
{
    /**
     * @var integer The amount used. The value of this parameter is the amount used (USD, rounded to 8 decimal places) multiplied by 100,000,000.
     */
    public $UsedAmount;

    /**
     * @var string The time when the voucher was used.
     */
    public $UsedTime;

    /**
     * @var array Usage record details
     */
    public $UsageDetails;

    /**
     * @var string Payment mode
     */
    public $PayMode;

    /**
     * @var string Queried coupon id
     */
    public $VoucherId;

    /**
     * @var string Transaction scene: (adjust: adjust accounts, common: normal transaction scene)
     */
    public $PayScene;

    /**
     * @var string Unique ID, corresponding to transaction: prepaid dealName, bill adjustment/postpaid outTradeNo
     */
    public $SeqId;

    /**
     * @param integer $UsedAmount The amount used. The value of this parameter is the amount used (USD, rounded to 8 decimal places) multiplied by 100,000,000.
     * @param string $UsedTime The time when the voucher was used.
     * @param array $UsageDetails Usage record details
     * @param string $PayMode Payment mode
     * @param string $VoucherId Queried coupon id
     * @param string $PayScene Transaction scene: (adjust: adjust accounts, common: normal transaction scene)
     * @param string $SeqId Unique ID, corresponding to transaction: prepaid dealName, bill adjustment/postpaid outTradeNo
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
        if (array_key_exists("UsedAmount",$param) and $param["UsedAmount"] !== null) {
            $this->UsedAmount = $param["UsedAmount"];
        }

        if (array_key_exists("UsedTime",$param) and $param["UsedTime"] !== null) {
            $this->UsedTime = $param["UsedTime"];
        }

        if (array_key_exists("UsageDetails",$param) and $param["UsageDetails"] !== null) {
            $this->UsageDetails = [];
            foreach ($param["UsageDetails"] as $key => $value){
                $obj = new UsageDetails();
                $obj->deserialize($value);
                array_push($this->UsageDetails, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("VoucherId",$param) and $param["VoucherId"] !== null) {
            $this->VoucherId = $param["VoucherId"];
        }

        if (array_key_exists("PayScene",$param) and $param["PayScene"] !== null) {
            $this->PayScene = $param["PayScene"];
        }

        if (array_key_exists("SeqId",$param) and $param["SeqId"] !== null) {
            $this->SeqId = $param["SeqId"];
        }
    }
}
