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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemovePrivateIpAddresses request structure.
 *
 * @method string getEcmRegion() Obtain ECM region, such as `ap-xian-ecm`.
 * @method void setEcmRegion(string $EcmRegion) Set ECM region, such as `ap-xian-ecm`.
 * @method string getNetworkInterfaceId() Obtain ENI instance ID, such as `eni-11112222`.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set ENI instance ID, such as `eni-11112222`.
 * @method array getPrivateIpAddresses() Obtain Information of the specified private IPs. You can specify up to 10 IPs at a time.
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) Set Information of the specified private IPs. You can specify up to 10 IPs at a time.
 */
class RemovePrivateIpAddressesRequest extends AbstractModel
{
    /**
     * @var string ECM region, such as `ap-xian-ecm`.
     */
    public $EcmRegion;

    /**
     * @var string ENI instance ID, such as `eni-11112222`.
     */
    public $NetworkInterfaceId;

    /**
     * @var array Information of the specified private IPs. You can specify up to 10 IPs at a time.
     */
    public $PrivateIpAddresses;

    /**
     * @param string $EcmRegion ECM region, such as `ap-xian-ecm`.
     * @param string $NetworkInterfaceId ENI instance ID, such as `eni-11112222`.
     * @param array $PrivateIpAddresses Information of the specified private IPs. You can specify up to 10 IPs at a time.
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

        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = [];
            foreach ($param["PrivateIpAddresses"] as $key => $value){
                $obj = new PrivateIpAddressSpecification();
                $obj->deserialize($value);
                array_push($this->PrivateIpAddresses, $obj);
            }
        }
    }
}
