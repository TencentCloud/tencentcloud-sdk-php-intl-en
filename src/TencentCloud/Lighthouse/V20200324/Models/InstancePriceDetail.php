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
 * Instance price details
 *
 * @method string getInstanceId() Obtain Instance ID.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
Note: This field may return `null`, indicating that no valid value was found.
 * @method InstancePrice getInstancePrice() Obtain Price query information.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setInstancePrice(InstancePrice $InstancePrice) Set Price query information.
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getDiscountDetail() Obtain Tiered-pricing details. The information of each tier includes the billable period, discount percentage, total price, discounted price, and discount details (`UserDiscount`, `CommonDiscount` and `FinalDiscount`).
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDiscountDetail(array $DiscountDetail) Set Tiered-pricing details. The information of each tier includes the billable period, discount percentage, total price, discounted price, and discount details (`UserDiscount`, `CommonDiscount` and `FinalDiscount`).
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class InstancePriceDetail extends AbstractModel
{
    /**
     * @var string Instance ID.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $InstanceId;

    /**
     * @var InstancePrice Price query information.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $InstancePrice;

    /**
     * @var array Tiered-pricing details. The information of each tier includes the billable period, discount percentage, total price, discounted price, and discount details (`UserDiscount`, `CommonDiscount` and `FinalDiscount`).
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DiscountDetail;

    /**
     * @param string $InstanceId Instance ID.
Note: This field may return `null`, indicating that no valid value was found.
     * @param InstancePrice $InstancePrice Price query information.
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $DiscountDetail Tiered-pricing details. The information of each tier includes the billable period, discount percentage, total price, discounted price, and discount details (`UserDiscount`, `CommonDiscount` and `FinalDiscount`).
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstancePrice",$param) and $param["InstancePrice"] !== null) {
            $this->InstancePrice = new InstancePrice();
            $this->InstancePrice->deserialize($param["InstancePrice"]);
        }

        if (array_key_exists("DiscountDetail",$param) and $param["DiscountDetail"] !== null) {
            $this->DiscountDetail = [];
            foreach ($param["DiscountDetail"] as $key => $value){
                $obj = new DiscountDetail();
                $obj->deserialize($value);
                array_push($this->DiscountDetail, $obj);
            }
        }
    }
}
