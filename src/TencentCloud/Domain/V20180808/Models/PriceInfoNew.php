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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The price information of the domains.
 *
 * @method string getTld() Obtain The domain suffix, such as `.com`.
 * @method void setTld(string $Tld) Set The domain suffix, such as `.com`.
 * @method integer getYear() Obtain The purchase years. Value range: [1-10]
 * @method void setYear(integer $Year) Set The purchase years. Value range: [1-10]
 * @method float getPrice() Obtain The original price of the domain.
 * @method void setPrice(float $Price) Set The original price of the domain.
 * @method float getRealPrice() Obtain The current price of the domain.
 * @method void setRealPrice(float $RealPrice) Set The current price of the domain.
 * @method string getOperation() Obtain The domain purchase type. Valid values: `new`, `renew`, `redem` (redeem), `tran` (transfer in).
 * @method void setOperation(string $Operation) Set The domain purchase type. Valid values: `new`, `renew`, `redem` (redeem), `tran` (transfer in).
 * @method string getTitle() Obtain The title.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTitle(string $Title) Set The title.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PriceInfoNew extends AbstractModel
{
    /**
     * @var string The domain suffix, such as `.com`.
     */
    public $Tld;

    /**
     * @var integer The purchase years. Value range: [1-10]
     */
    public $Year;

    /**
     * @var float The original price of the domain.
     */
    public $Price;

    /**
     * @var float The current price of the domain.
     */
    public $RealPrice;

    /**
     * @var string The domain purchase type. Valid values: `new`, `renew`, `redem` (redeem), `tran` (transfer in).
     */
    public $Operation;

    /**
     * @var string The title.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Title;

    /**
     * @param string $Tld The domain suffix, such as `.com`.
     * @param integer $Year The purchase years. Value range: [1-10]
     * @param float $Price The original price of the domain.
     * @param float $RealPrice The current price of the domain.
     * @param string $Operation The domain purchase type. Valid values: `new`, `renew`, `redem` (redeem), `tran` (transfer in).
     * @param string $Title The title.
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
        if (array_key_exists("Tld",$param) and $param["Tld"] !== null) {
            $this->Tld = $param["Tld"];
        }

        if (array_key_exists("Year",$param) and $param["Year"] !== null) {
            $this->Year = $param["Year"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("RealPrice",$param) and $param["RealPrice"] !== null) {
            $this->RealPrice = $param["RealPrice"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }
    }
}
