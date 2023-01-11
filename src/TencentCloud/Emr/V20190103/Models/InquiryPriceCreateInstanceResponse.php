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
 * InquiryPriceCreateInstance response structure.
 *
 * @method float getOriginalCost() Obtain Original price.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOriginalCost(float $OriginalCost) Set Original price.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getDiscountCost() Obtain Discounted price.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDiscountCost(float $DiscountCost) Set Discounted price.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTimeUnit() Obtain Time unit of instance purchase duration. Valid values:
<li>s: seconds.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTimeUnit(string $TimeUnit) Set Time unit of instance purchase duration. Valid values:
<li>s: seconds.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTimeSpan() Obtain Purchase duration of instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTimeSpan(integer $TimeSpan) Set Purchase duration of instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getPriceList() Obtain The price list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPriceList(array $PriceList) Set The price list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class InquiryPriceCreateInstanceResponse extends AbstractModel
{
    /**
     * @var float Original price.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OriginalCost;

    /**
     * @var float Discounted price.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DiscountCost;

    /**
     * @var string Time unit of instance purchase duration. Valid values:
<li>s: seconds.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TimeUnit;

    /**
     * @var integer Purchase duration of instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TimeSpan;

    /**
     * @var array The price list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PriceList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param float $OriginalCost Original price.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $DiscountCost Discounted price.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TimeUnit Time unit of instance purchase duration. Valid values:
<li>s: seconds.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TimeSpan Purchase duration of instance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $PriceList The price list.
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

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("PriceList",$param) and $param["PriceList"] !== null) {
            $this->PriceList = [];
            foreach ($param["PriceList"] as $key => $value){
                $obj = new ZoneDetailPriceResult();
                $obj->deserialize($value);
                array_push($this->PriceList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
