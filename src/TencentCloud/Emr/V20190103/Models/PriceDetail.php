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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pricing details
 *
 * @method string getResourceId() Obtain The node ID
 * @method void setResourceId(string $ResourceId) Set The node ID
 * @method string getFormula() Obtain The price formula
 * @method void setFormula(string $Formula) Set The price formula
 * @method float getOriginalCost() Obtain The original price
 * @method void setOriginalCost(float $OriginalCost) Set The original price
 * @method float getDiscountCost() Obtain The discount price
 * @method void setDiscountCost(float $DiscountCost) Set The discount price
 */
class PriceDetail extends AbstractModel
{
    /**
     * @var string The node ID
     */
    public $ResourceId;

    /**
     * @var string The price formula
     */
    public $Formula;

    /**
     * @var float The original price
     */
    public $OriginalCost;

    /**
     * @var float The discount price
     */
    public $DiscountCost;

    /**
     * @param string $ResourceId The node ID
     * @param string $Formula The price formula
     * @param float $OriginalCost The original price
     * @param float $DiscountCost The discount price
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Formula",$param) and $param["Formula"] !== null) {
            $this->Formula = $param["Formula"];
        }

        if (array_key_exists("OriginalCost",$param) and $param["OriginalCost"] !== null) {
            $this->OriginalCost = $param["OriginalCost"];
        }

        if (array_key_exists("DiscountCost",$param) and $param["DiscountCost"] !== null) {
            $this->DiscountCost = $param["DiscountCost"];
        }
    }
}
