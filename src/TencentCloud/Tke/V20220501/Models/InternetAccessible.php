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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Public network bandwidth
 *
 * @method integer getMaxBandwidthOut() Obtain Bandwidth
 * @method void setMaxBandwidthOut(integer $MaxBandwidthOut) Set Bandwidth
 * @method string getChargeType() Obtain Network billing method
 * @method void setChargeType(string $ChargeType) Set Network billing method
 * @method string getBandwidthPackageId() Obtain Bandwidth package ID
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set Bandwidth package ID
 */
class InternetAccessible extends AbstractModel
{
    /**
     * @var integer Bandwidth
     */
    public $MaxBandwidthOut;

    /**
     * @var string Network billing method
     */
    public $ChargeType;

    /**
     * @var string Bandwidth package ID
     */
    public $BandwidthPackageId;

    /**
     * @param integer $MaxBandwidthOut Bandwidth
     * @param string $ChargeType Network billing method
     * @param string $BandwidthPackageId Bandwidth package ID
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
        if (array_key_exists("MaxBandwidthOut",$param) and $param["MaxBandwidthOut"] !== null) {
            $this->MaxBandwidthOut = $param["MaxBandwidthOut"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }
    }
}
