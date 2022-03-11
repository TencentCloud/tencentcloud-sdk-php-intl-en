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
 * DetachNetworkInterface request structure.
 *
 * @method string getNetworkInterfaceId() Obtain ENI instance ID, such as `eni-m6dyj72l`.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set ENI instance ID, such as `eni-m6dyj72l`.
 * @method string getInstanceId() Obtain Instance ID, such as `ein-hcs7jkg4`.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, such as `ein-hcs7jkg4`.
 * @method string getEcmRegion() Obtain ECM region, such as `ap-xian-ecm`.
 * @method void setEcmRegion(string $EcmRegion) Set ECM region, such as `ap-xian-ecm`.
 */
class DetachNetworkInterfaceRequest extends AbstractModel
{
    /**
     * @var string ENI instance ID, such as `eni-m6dyj72l`.
     */
    public $NetworkInterfaceId;

    /**
     * @var string Instance ID, such as `ein-hcs7jkg4`.
     */
    public $InstanceId;

    /**
     * @var string ECM region, such as `ap-xian-ecm`.
     */
    public $EcmRegion;

    /**
     * @param string $NetworkInterfaceId ENI instance ID, such as `eni-m6dyj72l`.
     * @param string $InstanceId Instance ID, such as `ein-hcs7jkg4`.
     * @param string $EcmRegion ECM region, such as `ap-xian-ecm`.
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
        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }
    }
}
