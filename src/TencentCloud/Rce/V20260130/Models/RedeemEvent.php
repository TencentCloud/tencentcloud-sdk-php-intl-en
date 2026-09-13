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
 * Redeem event details
 *
 * @method string getPromotionId() Obtain <p>The ID of the promotion</p>
 * @method void setPromotionId(string $PromotionId) Set <p>The ID of the promotion</p>
 * @method string getPromotionName() Obtain <p>The name of the promotion</p>
 * @method void setPromotionName(string $PromotionName) Set <p>The name of the promotion</p>
 * @method string getDescription() Obtain <p>The description of the promotion</p>
 * @method void setDescription(string $Description) Set <p>The description of the promotion</p>
 * @method string getInviterUserId() Obtain <p>The ID of the inviter</p>
 * @method void setInviterUserId(string $InviterUserId) Set <p>The ID of the inviter</p>
 * @method Order getOrder() Obtain <p>Order information associated with the redemption</p>
 * @method void setOrder(Order $Order) Set <p>Order information associated with the redemption</p>
 * @method Result getResult() Obtain <p>The result of redemption</p>
 * @method void setResult(Result $Result) Set <p>The result of redemption</p>
 * @method array getCust() Obtain <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 * @method void setCust(array $Cust) Set <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 */
class RedeemEvent extends AbstractModel
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
     * @var Order <p>Order information associated with the redemption</p>
     */
    public $Order;

    /**
     * @var Result <p>The result of redemption</p>
     */
    public $Result;

    /**
     * @var array <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
     */
    public $Cust;

    /**
     * @param string $PromotionId <p>The ID of the promotion</p>
     * @param string $PromotionName <p>The name of the promotion</p>
     * @param string $Description <p>The description of the promotion</p>
     * @param string $InviterUserId <p>The ID of the inviter</p>
     * @param Order $Order <p>Order information associated with the redemption</p>
     * @param Result $Result <p>The result of redemption</p>
     * @param array $Cust <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = new Order();
            $this->Order->deserialize($param["Order"]);
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new Result();
            $this->Result->deserialize($param["Result"]);
        }

        if (array_key_exists("Cust",$param) and $param["Cust"] !== null) {
            $this->Cust = [];
            foreach ($param["Cust"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->Cust, $obj);
            }
        }
    }
}
