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
 * MigratePrivateIpAddress request structure.
 *
 * @method string getEcmRegion() Obtain ECM region, such as `ap-xian-ecm`.
 * @method void setEcmRegion(string $EcmRegion) Set ECM region, such as `ap-xian-ecm`.
 * @method string getSourceNetworkInterfaceId() Obtain ID of the ENI instance bound to the private IP, such as `eni-11112222`.
 * @method void setSourceNetworkInterfaceId(string $SourceNetworkInterfaceId) Set ID of the ENI instance bound to the private IP, such as `eni-11112222`.
 * @method string getDestinationNetworkInterfaceId() Obtain ID of the destination ENI instance to be migrated.
 * @method void setDestinationNetworkInterfaceId(string $DestinationNetworkInterfaceId) Set ID of the destination ENI instance to be migrated.
 * @method string getPrivateIpAddress() Obtain Private IP address to be migrated, such as `10.0.0.6`.
 * @method void setPrivateIpAddress(string $PrivateIpAddress) Set Private IP address to be migrated, such as `10.0.0.6`.
 */
class MigratePrivateIpAddressRequest extends AbstractModel
{
    /**
     * @var string ECM region, such as `ap-xian-ecm`.
     */
    public $EcmRegion;

    /**
     * @var string ID of the ENI instance bound to the private IP, such as `eni-11112222`.
     */
    public $SourceNetworkInterfaceId;

    /**
     * @var string ID of the destination ENI instance to be migrated.
     */
    public $DestinationNetworkInterfaceId;

    /**
     * @var string Private IP address to be migrated, such as `10.0.0.6`.
     */
    public $PrivateIpAddress;

    /**
     * @param string $EcmRegion ECM region, such as `ap-xian-ecm`.
     * @param string $SourceNetworkInterfaceId ID of the ENI instance bound to the private IP, such as `eni-11112222`.
     * @param string $DestinationNetworkInterfaceId ID of the destination ENI instance to be migrated.
     * @param string $PrivateIpAddress Private IP address to be migrated, such as `10.0.0.6`.
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

        if (array_key_exists("SourceNetworkInterfaceId",$param) and $param["SourceNetworkInterfaceId"] !== null) {
            $this->SourceNetworkInterfaceId = $param["SourceNetworkInterfaceId"];
        }

        if (array_key_exists("DestinationNetworkInterfaceId",$param) and $param["DestinationNetworkInterfaceId"] !== null) {
            $this->DestinationNetworkInterfaceId = $param["DestinationNetworkInterfaceId"];
        }

        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }
    }
}
