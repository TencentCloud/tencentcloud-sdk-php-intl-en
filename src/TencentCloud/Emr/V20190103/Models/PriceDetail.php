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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Price details.
 *
 * @method string getResourceId() Obtain Node ID.
 * @method void setResourceId(string $ResourceId) Set Node ID.
 * @method string getFormula() Obtain Price calculation formula.
 * @method void setFormula(string $Formula) Set Price calculation formula.
 * @method float getOriginalCost() Obtain Original price.
 * @method void setOriginalCost(float $OriginalCost) Set Original price.
 * @method float getDiscountCost() Obtain Discounted price.
 * @method void setDiscountCost(float $DiscountCost) Set Discounted price.
 */
class PriceDetail extends AbstractModel
{
    /**
     * @var string Node ID.
     */
    public $ResourceId;

    /**
     * @var string Price calculation formula.
     */
    public $Formula;

    /**
     * @var float Original price.
     */
    public $OriginalCost;

    /**
     * @var float Discounted price.
     */
    public $DiscountCost;

    /**
     * @param string $ResourceId Node ID.
     * @param string $Formula Price calculation formula.
     * @param float $OriginalCost Original price.
     * @param float $DiscountCost Discounted price.
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
