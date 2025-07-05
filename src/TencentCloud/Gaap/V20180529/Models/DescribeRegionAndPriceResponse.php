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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRegionAndPrice response structure.
 *
 * @method integer getTotalCount() Obtain Total number of origin server regions
 * @method void setTotalCount(integer $TotalCount) Set Total number of origin server regions
 * @method array getDestRegionSet() Obtain List of origin server region details
 * @method void setDestRegionSet(array $DestRegionSet) Set List of origin server region details
 * @method array getBandwidthUnitPrice() Obtain Connection bandwidth price gradient
 * @method void setBandwidthUnitPrice(array $BandwidthUnitPrice) Set Connection bandwidth price gradient
 * @method string getCurrency() Obtain Currency type of bandwidth price:
CNY (Chinese Yuan)
USD (United States Dollar)
 * @method void setCurrency(string $Currency) Set Currency type of bandwidth price:
CNY (Chinese Yuan)
USD (United States Dollar)
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRegionAndPriceResponse extends AbstractModel
{
    /**
     * @var integer Total number of origin server regions
     */
    public $TotalCount;

    /**
     * @var array List of origin server region details
     */
    public $DestRegionSet;

    /**
     * @var array Connection bandwidth price gradient
     */
    public $BandwidthUnitPrice;

    /**
     * @var string Currency type of bandwidth price:
CNY (Chinese Yuan)
USD (United States Dollar)
     */
    public $Currency;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of origin server regions
     * @param array $DestRegionSet List of origin server region details
     * @param array $BandwidthUnitPrice Connection bandwidth price gradient
     * @param string $Currency Currency type of bandwidth price:
CNY (Chinese Yuan)
USD (United States Dollar)
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("DestRegionSet",$param) and $param["DestRegionSet"] !== null) {
            $this->DestRegionSet = [];
            foreach ($param["DestRegionSet"] as $key => $value){
                $obj = new RegionDetail();
                $obj->deserialize($value);
                array_push($this->DestRegionSet, $obj);
            }
        }

        if (array_key_exists("BandwidthUnitPrice",$param) and $param["BandwidthUnitPrice"] !== null) {
            $this->BandwidthUnitPrice = [];
            foreach ($param["BandwidthUnitPrice"] as $key => $value){
                $obj = new BandwidthPriceGradient();
                $obj->deserialize($value);
                array_push($this->BandwidthUnitPrice, $obj);
            }
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
