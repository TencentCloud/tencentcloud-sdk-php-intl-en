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
 * EMR inquiry description
 *
 * @method string getOriginalCost() Obtain The published price.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginalCost(string $OriginalCost) Set The published price.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDiscountCost() Obtain The discounted price.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiscountCost(string $DiscountCost) Set The discounted price.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUnit() Obtain The unit of the billable item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnit(string $Unit) Set The unit of the billable item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PriceResource getPriceSpec() Obtain The queried spec.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPriceSpec(PriceResource $PriceSpec) Set The queried spec.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSupportSpotPaid() Obtain Whether spot instances are supported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupportSpotPaid(boolean $SupportSpotPaid) Set Whether spot instances are supported.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class EmrPrice extends AbstractModel
{
    /**
     * @var string The published price.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginalCost;

    /**
     * @var string The discounted price.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiscountCost;

    /**
     * @var string The unit of the billable item.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Unit;

    /**
     * @var PriceResource The queried spec.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PriceSpec;

    /**
     * @var boolean Whether spot instances are supported.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SupportSpotPaid;

    /**
     * @param string $OriginalCost The published price.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DiscountCost The discounted price.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Unit The unit of the billable item.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PriceResource $PriceSpec The queried spec.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $SupportSpotPaid Whether spot instances are supported.
Note: This field may return null, indicating that no valid values can be obtained.
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
