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
 * EMR inquiry description
 *
 * @method string getOriginalCost() Obtain List price.
 * @method void setOriginalCost(string $OriginalCost) Set List price.
 * @method string getDiscountCost() Obtain Discounted price.
 * @method void setDiscountCost(string $DiscountCost) Set Discounted price.
 * @method string getUnit() Obtain Unit.
 * @method void setUnit(string $Unit) Set Unit.
 * @method PriceResource getPriceSpec() Obtain The queried spec.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPriceSpec(PriceResource $PriceSpec) Set The queried spec.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSupportSpotPaid() Obtain Whether spot instances are supported.
 * @method void setSupportSpotPaid(boolean $SupportSpotPaid) Set Whether spot instances are supported.
 */
class EmrPrice extends AbstractModel
{
    /**
     * @var string List price.
     */
    public $OriginalCost;

    /**
     * @var string Discounted price.
     */
    public $DiscountCost;

    /**
     * @var string Unit.
     */
    public $Unit;

    /**
     * @var PriceResource The queried spec.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PriceSpec;

    /**
     * @var boolean Whether spot instances are supported.
     */
    public $SupportSpotPaid;

    /**
     * @param string $OriginalCost List price.
     * @param string $DiscountCost Discounted price.
     * @param string $Unit Unit.
     * @param PriceResource $PriceSpec The queried spec.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $SupportSpotPaid Whether spot instances are supported.
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
        if (array_key_exists("OriginalCost",$param) and $param["OriginalCost"] !== null) {
            $this->OriginalCost = $param["OriginalCost"];
        }

        if (array_key_exists("DiscountCost",$param) and $param["DiscountCost"] !== null) {
            $this->DiscountCost = $param["DiscountCost"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("PriceSpec",$param) and $param["PriceSpec"] !== null) {
            $this->PriceSpec = new PriceResource();
            $this->PriceSpec->deserialize($param["PriceSpec"]);
        }

        if (array_key_exists("SupportSpotPaid",$param) and $param["SupportSpotPaid"] !== null) {
            $this->SupportSpotPaid = $param["SupportSpotPaid"];
        }
    }
}
