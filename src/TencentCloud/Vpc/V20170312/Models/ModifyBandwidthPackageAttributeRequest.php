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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBandwidthPackageAttribute request structure.
 *
 * @method string getBandwidthPackageId() Obtain The unique ID of the bandwidth package.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set The unique ID of the bandwidth package.
 * @method string getBandwidthPackageName() Obtain The name of the bandwidth package.
 * @method void setBandwidthPackageName(string $BandwidthPackageName) Set The name of the bandwidth package.
 * @method string getChargeType() Obtain The billing mode of the bandwidth package. Values: 
`TOP5_POSTPAID_BY_MONTH`: Bill by the top 5 bandwidth value of the current month in a postpaid manner
 * @method void setChargeType(string $ChargeType) Set The billing mode of the bandwidth package. Values: 
`TOP5_POSTPAID_BY_MONTH`: Bill by the top 5 bandwidth value of the current month in a postpaid manner
 */
class ModifyBandwidthPackageAttributeRequest extends AbstractModel
{
    /**
     * @var string The unique ID of the bandwidth package.
     */
    public $BandwidthPackageId;

    /**
     * @var string The name of the bandwidth package.
     */
    public $BandwidthPackageName;

    /**
     * @var string The billing mode of the bandwidth package. Values: 
`TOP5_POSTPAID_BY_MONTH`: Bill by the top 5 bandwidth value of the current month in a postpaid manner
     */
    public $ChargeType;

    /**
     * @param string $BandwidthPackageId The unique ID of the bandwidth package.
     * @param string $BandwidthPackageName The name of the bandwidth package.
     * @param string $ChargeType The billing mode of the bandwidth package. Values: 
`TOP5_POSTPAID_BY_MONTH`: Bill by the top 5 bandwidth value of the current month in a postpaid manner
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
        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("BandwidthPackageName",$param) and $param["BandwidthPackageName"] !== null) {
            $this->BandwidthPackageName = $param["BandwidthPackageName"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }
    }
}
