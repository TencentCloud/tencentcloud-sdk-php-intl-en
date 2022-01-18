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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Package discount details (only returned for price query APIs called in the console).
 *
 * @method integer getTimeSpan() Obtain Billing duration.
 * @method void setTimeSpan(integer $TimeSpan) Set Billing duration.
 * @method string getTimeUnit() Obtain Billing unit.
 * @method void setTimeUnit(string $TimeUnit) Set Billing unit.
 * @method float getTotalCost() Obtain Total price.
 * @method void setTotalCost(float $TotalCost) Set Total price.
 * @method float getRealTotalCost() Obtain Discounted total price.
 * @method void setRealTotalCost(float $RealTotalCost) Set Discounted total price.
 * @method integer getDiscount() Obtain Discount.
 * @method void setDiscount(integer $Discount) Set Discount.
 * @method PolicyDetail getPolicyDetail() Obtain Discount details.
 * @method void setPolicyDetail(PolicyDetail $PolicyDetail) Set Discount details.
 */
class DiscountDetail extends AbstractModel
{
    /**
     * @var integer Billing duration.
     */
    public $TimeSpan;

    /**
     * @var string Billing unit.
     */
    public $TimeUnit;

    /**
     * @var float Total price.
     */
    public $TotalCost;

    /**
     * @var float Discounted total price.
     */
    public $RealTotalCost;

    /**
     * @var integer Discount.
     */
    public $Discount;

    /**
     * @var PolicyDetail Discount details.
     */
    public $PolicyDetail;

    /**
     * @param integer $TimeSpan Billing duration.
     * @param string $TimeUnit Billing unit.
     * @param float $TotalCost Total price.
     * @param float $RealTotalCost Discounted total price.
     * @param integer $Discount Discount.
     * @param PolicyDetail $PolicyDetail Discount details.
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
