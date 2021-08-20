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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDevice response structure.
 *
 * @method string getDeviceName() Obtain Device name
 * @method void setDeviceName(string $DeviceName) Set Device name
 * @method string getDevicePsk() Obtain Base64-encoded symmetric encryption key, which is returned if symmetric encryption is used
 * @method void setDevicePsk(string $DevicePsk) Set Base64-encoded symmetric encryption key, which is returned if symmetric encryption is used
 * @method string getDeviceCert() Obtain Device certificate, which authenticates client identity during TLS connection establishment and is returned if asymmetric encryption is used
 * @method void setDeviceCert(string $DeviceCert) Set Device certificate, which authenticates client identity during TLS connection establishment and is returned if asymmetric encryption is used
 * @method string getDevicePrivateKey() Obtain Device private key, which authenticates client identity during TLS connection establishment and is returned if asymmetric encryption is used. Tencent Cloud does not store the key. Please store it by yourself properly.
 * @method void setDevicePrivateKey(string $DevicePrivateKey) Set Device private key, which authenticates client identity during TLS connection establishment and is returned if asymmetric encryption is used. Tencent Cloud does not store the key. Please store it by yourself properly.
 * @method string getLoraDevEui() Obtain DevEUI of a LoRa device, which is returned for a LoRa device
 * @method void setLoraDevEui(string $LoraDevEui) Set DevEUI of a LoRa device, which is returned for a LoRa device
 * @method integer getLoraMoteType() Obtain MoteType of a LoRa device, which is returned for a LoRa device
 * @method void setLoraMoteType(integer $LoraMoteType) Set MoteType of a LoRa device, which is returned for a LoRa device
 * @method string getLoraAppKey() Obtain AppKey of a LoRa device, which is returned for a LoRa device
 * @method void setLoraAppKey(string $LoraAppKey) Set AppKey of a LoRa device, which is returned for a LoRa device
 * @method string getLoraNwkKey() Obtain NwkKey of a LoRa device, which is returned for a LoRa device
 * @method void setLoraNwkKey(string $LoraNwkKey) Set NwkKey of a LoRa device, which is returned for a LoRa device
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateDeviceResponse extends AbstractModel
{
    /**
     * @var string Device name
     */
    public $DeviceName;

    /**
     * @var string Base64-encoded symmetric encryption key, which is returned if symmetric encryption is used
     */
    public $DevicePsk;

    /**
     * @var string Device certificate, which authenticates client identity during TLS connection establishment and is returned if asymmetric encryption is used
     */
    public $DeviceCert;

    /**
     * @var string Device private key, which authenticates client identity during TLS connection establishment and is returned if asymmetric encryption is used. Tencent Cloud does not store the key. Please store it by yourself properly.
     */
    public $DevicePrivateKey;

    /**
     * @var string DevEUI of a LoRa device, which is returned for a LoRa device
     */
    public $LoraDevEui;

    /**
     * @var integer MoteType of a LoRa device, which is returned for a LoRa device
     */
    public $LoraMoteType;

    /**
     * @var string AppKey of a LoRa device, which is returned for a LoRa device
     */
    public $LoraAppKey;

    /**
     * @var string NwkKey of a LoRa device, which is returned for a LoRa device
     */
    public $LoraNwkKey;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $DeviceName Device name
     * @param string $DevicePsk Base64-encoded symmetric encryption key, which is returned if symmetric encryption is used
     * @param string $DeviceCert Device certificate, which authenticates client identity during TLS connection establishment and is returned if asymmetric encryption is used
     * @param string $DevicePrivateKey Device private key, which authenticates client identity during TLS connection establishment and is returned if asymmetric encryption is used. Tencent Cloud does not store the key. Please store it by yourself properly.
     * @param string $LoraDevEui DevEUI of a LoRa device, which is returned for a LoRa device
     * @param integer $LoraMoteType MoteType of a LoRa device, which is returned for a LoRa device
     * @param string $LoraAppKey AppKey of a LoRa device, which is returned for a LoRa device
     * @param string $LoraNwkKey NwkKey of a LoRa device, which is returned for a LoRa device
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("DevicePsk",$param) and $param["DevicePsk"] !== null) {
            $this->DevicePsk = $param["DevicePsk"];
        }

        if (array_key_exists("DeviceCert",$param) and $param["DeviceCert"] !== null) {
            $this->DeviceCert = $param["DeviceCert"];
        }

        if (array_key_exists("DevicePrivateKey",$param) and $param["DevicePrivateKey"] !== null) {
            $this->DevicePrivateKey = $param["DevicePrivateKey"];
        }

        if (array_key_exists("LoraDevEui",$param) and $param["LoraDevEui"] !== null) {
            $this->LoraDevEui = $param["LoraDevEui"];
        }

        if (array_key_exists("LoraMoteType",$param) and $param["LoraMoteType"] !== null) {
            $this->LoraMoteType = $param["LoraMoteType"];
        }

        if (array_key_exists("LoraAppKey",$param) and $param["LoraAppKey"] !== null) {
            $this->LoraAppKey = $param["LoraAppKey"];
        }

        if (array_key_exists("LoraNwkKey",$param) and $param["LoraNwkKey"] !== null) {
            $this->LoraNwkKey = $param["LoraNwkKey"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
