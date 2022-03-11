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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAddressesBandwidth request structure.
 *
 * @method string getEcmRegion() Obtain ECM region
 * @method void setEcmRegion(string $EcmRegion) Set ECM region
 * @method array getAddressIds() Obtain Unique EIP ID, such as `eip-xxxxxxx`
 * @method void setAddressIds(array $AddressIds) Set Unique EIP ID, such as `eip-xxxxxxx`
 * @method integer getInternetMaxBandwidthOut() Obtain Target bandwidth value
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Target bandwidth value
 */
class ModifyAddressesBandwidthRequest extends AbstractModel
{
    /**
     * @var string ECM region
     */
    public $EcmRegion;

    /**
     * @var array Unique EIP ID, such as `eip-xxxxxxx`
     */
    public $AddressIds;

    /**
     * @var integer Target bandwidth value
     */
    public $InternetMaxBandwidthOut;

    /**
     * @param string $EcmRegion ECM region
     * @param array $AddressIds Unique EIP ID, such as `eip-xxxxxxx`
     * @param integer $InternetMaxBandwidthOut Target bandwidth value
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
        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }

        if (array_key_exists("AddressIds",$param) and $param["AddressIds"] !== null) {
            $this->AddressIds = $param["AddressIds"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }
    }
}
