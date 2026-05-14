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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceCertificate request structure.
 *
 * @method string getDeviceCertificateSn() Obtain The SN serial number of the device certificate is used for unique identification of a device certificate.
 * @method void setDeviceCertificateSn(string $DeviceCertificateSn) Set The SN serial number of the device certificate is used for unique identification of a device certificate.
 * @method string getInstanceId() Obtain The instance ID of the TDMQ MQTT can be obtained from the DescribeInstanceList API or the console.
 * @method void setInstanceId(string $InstanceId) Set The instance ID of the TDMQ MQTT can be obtained from the DescribeInstanceList API or the console.
 */
class DescribeDeviceCertificateRequest extends AbstractModel
{
    /**
     * @var string The SN serial number of the device certificate is used for unique identification of a device certificate.
     */
    public $DeviceCertificateSn;

    /**
     * @var string The instance ID of the TDMQ MQTT can be obtained from the DescribeInstanceList API or the console.
     */
    public $InstanceId;

    /**
     * @param string $DeviceCertificateSn The SN serial number of the device certificate is used for unique identification of a device certificate.
     * @param string $InstanceId The instance ID of the TDMQ MQTT can be obtained from the DescribeInstanceList API or the console.
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
        if (array_key_exists("DeviceCertificateSn",$param) and $param["DeviceCertificateSn"] !== null) {
            $this->DeviceCertificateSn = $param["DeviceCertificateSn"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
