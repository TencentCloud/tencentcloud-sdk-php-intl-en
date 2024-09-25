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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Billing order response entity
 *
 * @method array getDealNames() Obtain Order Number List: the number of elements matches the number of elements in the Goods array of the request package. Product details correspond to orders in sequence
 * @method void setDealNames(array $DealNames) Set Order Number List: the number of elements matches the number of elements in the Goods array of the request package. Product details correspond to orders in sequence
 * @method string getBigDealId() Obtain Large Order Number, a large order number can have multiple sub-orders, indicating the same order placement [{},{}]
 * @method void setBigDealId(string $BigDealId) Set Large Order Number, a large order number can have multiple sub-orders, indicating the same order placement [{},{}]
 */
class DealData extends AbstractModel
{
    /**
     * @var array Order Number List: the number of elements matches the number of elements in the Goods array of the request package. Product details correspond to orders in sequence
     */
    public $DealNames;

    /**
     * @var string Large Order Number, a large order number can have multiple sub-orders, indicating the same order placement [{},{}]
     */
    public $BigDealId;

    /**
     * @param array $DealNames Order Number List: the number of elements matches the number of elements in the Goods array of the request package. Product details correspond to orders in sequence
     * @param string $BigDealId Large Order Number, a large order number can have multiple sub-orders, indicating the same order placement [{},{}]
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
        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }

        if (array_key_exists("BigDealId",$param) and $param["BigDealId"] !== null) {
            $this->BigDealId = $param["BigDealId"];
        }
    }
}
