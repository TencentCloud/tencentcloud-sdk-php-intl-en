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
 * InquiryPriceScaleOutInstance response structure.
 *
 * @method string getOriginalCost() Obtain Original price.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginalCost(string $OriginalCost) Set Original price.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDiscountCost() Obtain Discounted price.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiscountCost(string $DiscountCost) Set Discounted price.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUnit() Obtain Time unit of scale-out. Valid value:
<li>s: Second.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnit(string $Unit) Set Time unit of scale-out. Valid value:
<li>s: Second.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PriceResource getPriceSpec() Obtain Node spec queried for price.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPriceSpec(PriceResource $PriceSpec) Set Node spec queried for price.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getMultipleEmrPrice() Obtain The inquiry results corresponding to the specs specified by the input parameter `MultipleResources`, with the result of the first spec returned by other output parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMultipleEmrPrice(array $MultipleEmrPrice) Set The inquiry results corresponding to the specs specified by the input parameter `MultipleResources`, with the result of the first spec returned by other output parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class InquiryPriceScaleOutInstanceResponse extends AbstractModel
{
    /**
     * @var string Original price.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginalCost;

    /**
     * @var string Discounted price.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiscountCost;

    /**
     * @var string Time unit of scale-out. Valid value:
<li>s: Second.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Unit;

    /**
     * @var PriceResource Node spec queried for price.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PriceSpec;

    /**
     * @var array The inquiry results corresponding to the specs specified by the input parameter `MultipleResources`, with the result of the first spec returned by other output parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MultipleEmrPrice;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $OriginalCost Original price.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DiscountCost Discounted price.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Unit Time unit of scale-out. Valid value:
<li>s: Second.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PriceResource $PriceSpec Node spec queried for price.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $MultipleEmrPrice The inquiry results corresponding to the specs specified by the input parameter `MultipleResources`, with the result of the first spec returned by other output parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("MultipleEmrPrice",$param) and $param["MultipleEmrPrice"] !== null) {
            $this->MultipleEmrPrice = [];
            foreach ($param["MultipleEmrPrice"] as $key => $value){
                $obj = new EmrPrice();
                $obj->deserialize($value);
                array_push($this->MultipleEmrPrice, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
