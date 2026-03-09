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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Package discount details (only returned for price query APIs called in the console).
 *
 * @method integer getTimeSpan() Obtain <P>Billing duration.</p>.
 * @method void setTimeSpan(integer $TimeSpan) Set <P>Billing duration.</p>.
 * @method string getTimeUnit() Obtain <P>Time unit.<br>value is:</p><ul><li>m - month</li><li>d - day</li></ul>.
 * @method void setTimeUnit(string $TimeUnit) Set <P>Time unit.<br>value is:</p><ul><li>m - month</li><li>d - day</li></ul>.
 * @method float getTotalCost() Obtain <P>Total price.</p><p>unit: usd</p>.
 * @method void setTotalCost(float $TotalCost) Set <P>Total price.</p><p>unit: usd</p>.
 * @method float getRealTotalCost() Obtain <P>Discounted total price.</p><p>unit: usd</p>.
 * @method void setRealTotalCost(float $RealTotalCost) Set <P>Discounted total price.</p><p>unit: usd</p>.
 * @method float getDiscount() Obtain <p>Discount.</p>.
 * @method void setDiscount(float $Discount) Set <p>Discount.</p>.
 * @method PolicyDetail getPolicyDetail() Obtain <P>Specific discount details.</p>.
 * @method void setPolicyDetail(PolicyDetail $PolicyDetail) Set <P>Specific discount details.</p>.
 */
class DiscountDetail extends AbstractModel
{
    /**
     * @var integer <P>Billing duration.</p>.
     */
    public $TimeSpan;

    /**
     * @var string <P>Time unit.<br>value is:</p><ul><li>m - month</li><li>d - day</li></ul>.
     */
    public $TimeUnit;

    /**
     * @var float <P>Total price.</p><p>unit: usd</p>.
     */
    public $TotalCost;

    /**
     * @var float <P>Discounted total price.</p><p>unit: usd</p>.
     */
    public $RealTotalCost;

    /**
     * @var float <p>Discount.</p>.
     */
    public $Discount;

    /**
     * @var PolicyDetail <P>Specific discount details.</p>.
     */
    public $PolicyDetail;

    /**
     * @param integer $TimeSpan <P>Billing duration.</p>.
     * @param string $TimeUnit <P>Time unit.<br>value is:</p><ul><li>m - month</li><li>d - day</li></ul>.
     * @param float $TotalCost <P>Total price.</p><p>unit: usd</p>.
     * @param float $RealTotalCost <P>Discounted total price.</p><p>unit: usd</p>.
     * @param float $Discount <p>Discount.</p>.
     * @param PolicyDetail $PolicyDetail <P>Specific discount details.</p>.
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
        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("PolicyDetail",$param) and $param["PolicyDetail"] !== null) {
            $this->PolicyDetail = new PolicyDetail();
            $this->PolicyDetail->deserialize($param["PolicyDetail"]);
        }
    }
}
