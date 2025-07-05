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
 * MigrateNetworkInterface request structure.
 *
 * @method string getEcmRegion() Obtain ECM region, such as `ap-xian-ecm`.
 * @method void setEcmRegion(string $EcmRegion) Set ECM region, such as `ap-xian-ecm`.
 * @method string getNetworkInterfaceId() Obtain ENI instance ID, such as `eni-m6dyj72l`.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set ENI instance ID, such as `eni-m6dyj72l`.
 * @method string getSourceInstanceId() Obtain ID of the ECM instance bound to the ENI, such as `ein-r8hr2upy`.
 * @method void setSourceInstanceId(string $SourceInstanceId) Set ID of the ECM instance bound to the ENI, such as `ein-r8hr2upy`.
 * @method string getDestinationInstanceId() Obtain ID of the destination ECM instance to be migrated.
 * @method void setDestinationInstanceId(string $DestinationInstanceId) Set ID of the destination ECM instance to be migrated.
 */
class MigrateNetworkInterfaceRequest extends AbstractModel
{
    /**
     * @var string ECM region, such as `ap-xian-ecm`.
     */
    public $EcmRegion;

    /**
     * @var string ENI instance ID, such as `eni-m6dyj72l`.
     */
    public $NetworkInterfaceId;

    /**
     * @var string ID of the ECM instance bound to the ENI, such as `ein-r8hr2upy`.
     */
    public $SourceInstanceId;

    /**
     * @var string ID of the destination ECM instance to be migrated.
     */
    public $DestinationInstanceId;

    /**
     * @param string $EcmRegion ECM region, such as `ap-xian-ecm`.
     * @param string $NetworkInterfaceId ENI instance ID, such as `eni-m6dyj72l`.
     * @param string $SourceInstanceId ID of the ECM instance bound to the ENI, such as `ein-r8hr2upy`.
     * @param string $DestinationInstanceId ID of the destination ECM instance to be migrated.
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

        if (array_key_exists("SourceInstanceId",$param) and $param["SourceInstanceId"] !== null) {
            $this->SourceInstanceId = $param["SourceInstanceId"];
        }

        if (array_key_exists("DestinationInstanceId",$param) and $param["DestinationInstanceId"] !== null) {
            $this->DestinationInstanceId = $param["DestinationInstanceId"];
        }
    }
}
