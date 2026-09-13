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
 * The details of the promotion
 *
 * @method string getPromotionId() Obtain <p>The ID of the promotion</p>
 * @method void setPromotionId(string $PromotionId) Set <p>The ID of the promotion</p>
 * @method string getPromotionName() Obtain <p>The name of the promotion</p>
 * @method void setPromotionName(string $PromotionName) Set <p>The name of the promotion</p>
 * @method string getDescription() Obtain <p>The description of the promotion</p>
 * @method void setDescription(string $Description) Set <p>The description of the promotion</p>
 * @method string getInviterUserId() Obtain <p>The ID of the inviter</p>
 * @method void setInviterUserId(string $InviterUserId) Set <p>The ID of the inviter</p>
 * @method Coupon getCoupon() Obtain <p>The coupon(s) associated with the promotion</p>
 * @method void setCoupon(Coupon $Coupon) Set <p>The coupon(s) associated with the promotion</p>
 * @method CreditPoint getCreditPoint() Obtain <p>The point(s) associated with the promotion</p>
 * @method void setCreditPoint(CreditPoint $CreditPoint) Set <p>The point(s) associated with the promotion</p>
 */
class Promotion extends AbstractModel
{
    /**
     * @var string <p>The ID of the promotion</p>
     */
    public $PromotionId;

    /**
     * @var string <p>The name of the promotion</p>
     */
    public $PromotionName;

    /**
     * @var string <p>The description of the promotion</p>
     */
    public $Description;

    /**
     * @var string <p>The ID of the inviter</p>
     */
    public $InviterUserId;

    /**
     * @var Coupon <p>The coupon(s) associated with the promotion</p>
     */
    public $Coupon;

    /**
     * @var CreditPoint <p>The point(s) associated with the promotion</p>
     */
    public $CreditPoint;

    /**
     * @param string $PromotionId <p>The ID of the promotion</p>
     * @param string $PromotionName <p>The name of the promotion</p>
     * @param string $Description <p>The description of the promotion</p>
     * @param string $InviterUserId <p>The ID of the inviter</p>
     * @param Coupon $Coupon <p>The coupon(s) associated with the promotion</p>
     * @param CreditPoint $CreditPoint <p>The point(s) associated with the promotion</p>
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
        if (array_key_exists("PromotionId",$param) and $param["PromotionId"] !== null) {
            $this->PromotionId = $param["PromotionId"];
        }

        if (array_key_exists("PromotionName",$param) and $param["PromotionName"] !== null) {
            $this->PromotionName = $param["PromotionName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InviterUserId",$param) and $param["InviterUserId"] !== null) {
            $this->InviterUserId = $param["InviterUserId"];
        }

        if (array_key_exists("Coupon",$param) and $param["Coupon"] !== null) {
            $this->Coupon = new Coupon();
            $this->Coupon->deserialize($param["Coupon"]);
        }

        if (array_key_exists("CreditPoint",$param) and $param["CreditPoint"] !== null) {
            $this->CreditPoint = new CreditPoint();
            $this->CreditPoint->deserialize($param["CreditPoint"]);
        }
    }
}
