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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Billing item for Token aggregation
 *
 * @method string getBillingItem() Obtain Billing item. Values: input (input Token), output (output Token), cache (cache Token), call_count (call count).
 * @method void setBillingItem(string $BillingItem) Set Billing item. Values: input (input Token), output (output Token), cache (cache Token), call_count (call count).
 * @method integer getTotalQty() Obtain Aggregated raw usage of this billing item during a period. Unit: tokens.
 * @method void setTotalQty(integer $TotalQty) Set Aggregated raw usage of this billing item during a period. Unit: tokens.
 */
class TokenSummaryBillingItem extends AbstractModel
{
    /**
     * @var string Billing item. Values: input (input Token), output (output Token), cache (cache Token), call_count (call count).
     */
    public $BillingItem;

    /**
     * @var integer Aggregated raw usage of this billing item during a period. Unit: tokens.
     */
    public $TotalQty;

    /**
     * @param string $BillingItem Billing item. Values: input (input Token), output (output Token), cache (cache Token), call_count (call count).
     * @param integer $TotalQty Aggregated raw usage of this billing item during a period. Unit: tokens.
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
        if (array_key_exists("BillingItem",$param) and $param["BillingItem"] !== null) {
            $this->BillingItem = $param["BillingItem"];
        }

        if (array_key_exists("TotalQty",$param) and $param["TotalQty"] !== null) {
            $this->TotalQty = $param["TotalQty"];
        }
    }
}
