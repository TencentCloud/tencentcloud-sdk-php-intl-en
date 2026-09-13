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
 * Amount
 *
 * @method string getCurrency() Obtain <p>Currency code</p><p>Parameter format: Compliant with the ISO 4217 standard</p>
 * @method void setCurrency(string $Currency) Set <p>Currency code</p><p>Parameter format: Compliant with the ISO 4217 standard</p>
 * @method float getOriginalAmount() Obtain <p>Original amount in currency</p>
 * @method void setOriginalAmount(float $OriginalAmount) Set <p>Original amount in currency</p>
 * @method float getExchangeRateUSD() Obtain <p>Current exchange rate of base currency converted to USD</p>
 * @method void setExchangeRateUSD(float $ExchangeRateUSD) Set <p>Current exchange rate of base currency converted to USD</p>
 * @method float getExchangeRateCNY() Obtain <p>Current exchange rate of base currency converted to CNY</p>
 * @method void setExchangeRateCNY(float $ExchangeRateCNY) Set <p>Current exchange rate of base currency converted to CNY</p>
 */
class Amount extends AbstractModel
{
    /**
     * @var string <p>Currency code</p><p>Parameter format: Compliant with the ISO 4217 standard</p>
     */
    public $Currency;

    /**
     * @var float <p>Original amount in currency</p>
     */
    public $OriginalAmount;

    /**
     * @var float <p>Current exchange rate of base currency converted to USD</p>
     */
    public $ExchangeRateUSD;

    /**
     * @var float <p>Current exchange rate of base currency converted to CNY</p>
     */
    public $ExchangeRateCNY;

    /**
     * @param string $Currency <p>Currency code</p><p>Parameter format: Compliant with the ISO 4217 standard</p>
     * @param float $OriginalAmount <p>Original amount in currency</p>
     * @param float $ExchangeRateUSD <p>Current exchange rate of base currency converted to USD</p>
     * @param float $ExchangeRateCNY <p>Current exchange rate of base currency converted to CNY</p>
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
        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("OriginalAmount",$param) and $param["OriginalAmount"] !== null) {
            $this->OriginalAmount = $param["OriginalAmount"];
        }

        if (array_key_exists("ExchangeRateUSD",$param) and $param["ExchangeRateUSD"] !== null) {
            $this->ExchangeRateUSD = $param["ExchangeRateUSD"];
        }

        if (array_key_exists("ExchangeRateCNY",$param) and $param["ExchangeRateCNY"] !== null) {
            $this->ExchangeRateCNY = $param["ExchangeRateCNY"];
        }
    }
}
