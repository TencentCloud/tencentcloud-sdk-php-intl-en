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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The details of the coupon
 *
 * @method string getCouponId() Obtain <p>The unique ID of each coupon</p>
 * @method void setCouponId(string $CouponId) Set <p>The unique ID of each coupon</p>
 * @method string getCouponName() Obtain <p>The name of the coupon</p>
 * @method void setCouponName(string $CouponName) Set <p>The name of the coupon</p>
 * @method string getStartTime() Obtain <p>The start time of the coupon</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with ISO 8601.</p>
 * @method void setStartTime(string $StartTime) Set <p>The start time of the coupon</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with ISO 8601.</p>
 * @method string getExpireTime() Obtain <p>The expiration time of the coupon</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with ISO 8601 standard</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>The expiration time of the coupon</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with ISO 8601 standard</p>
 * @method float getPercentageRate() Obtain <p>The percentage rate of the coupon. If discount off is 10%,please send 0.1</p>
 * @method void setPercentageRate(float $PercentageRate) Set <p>The percentage rate of the coupon. If discount off is 10%,please send 0.1</p>
 * @method Amount getDiscountAmount() Obtain <p>The discount amount of the coupon</p>
 * @method void setDiscountAmount(Amount $DiscountAmount) Set <p>The discount amount of the coupon</p>
 * @method float getThreshold() Obtain <p>The threshold amount of the coupon</p>
 * @method void setThreshold(float $Threshold) Set <p>The threshold amount of the coupon</p>
 */
class Coupon extends AbstractModel
{
    /**
     * @var string <p>The unique ID of each coupon</p>
     */
    public $CouponId;

    /**
     * @var string <p>The name of the coupon</p>
     */
    public $CouponName;

    /**
     * @var string <p>The start time of the coupon</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with ISO 8601.</p>
     */
    public $StartTime;

    /**
     * @var string <p>The expiration time of the coupon</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with ISO 8601 standard</p>
     */
    public $ExpireTime;

    /**
     * @var float <p>The percentage rate of the coupon. If discount off is 10%,please send 0.1</p>
     */
    public $PercentageRate;

    /**
     * @var Amount <p>The discount amount of the coupon</p>
     */
    public $DiscountAmount;

    /**
     * @var float <p>The threshold amount of the coupon</p>
     */
    public $Threshold;

    /**
     * @param string $CouponId <p>The unique ID of each coupon</p>
     * @param string $CouponName <p>The name of the coupon</p>
     * @param string $StartTime <p>The start time of the coupon</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with ISO 8601.</p>
     * @param string $ExpireTime <p>The expiration time of the coupon</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with ISO 8601 standard</p>
     * @param float $PercentageRate <p>The percentage rate of the coupon. If discount off is 10%,please send 0.1</p>
     * @param Amount $DiscountAmount <p>The discount amount of the coupon</p>
     * @param float $Threshold <p>The threshold amount of the coupon</p>
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
        if (array_key_exists("CouponId",$param) and $param["CouponId"] !== null) {
            $this->CouponId = $param["CouponId"];
        }

        if (array_key_exists("CouponName",$param) and $param["CouponName"] !== null) {
            $this->CouponName = $param["CouponName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("PercentageRate",$param) and $param["PercentageRate"] !== null) {
            $this->PercentageRate = $param["PercentageRate"];
        }

        if (array_key_exists("DiscountAmount",$param) and $param["DiscountAmount"] !== null) {
            $this->DiscountAmount = new Amount();
            $this->DiscountAmount->deserialize($param["DiscountAmount"]);
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }
    }
}
