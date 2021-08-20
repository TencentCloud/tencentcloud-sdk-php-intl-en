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
 * CreateDevice request structure.
 *
 * @method string getProductId() Obtain Product ID, globally unique ID assigned by Tencent Cloud during product creation
 * @method void setProductId(string $ProductId) Set Product ID, globally unique ID assigned by Tencent Cloud during product creation
 * @method string getDeviceName() Obtain Device name. It is a string of 1 to 48 characters. Letters, digits, and :_- are allowed.
 * @method void setDeviceName(string $DeviceName) Set Device name. It is a string of 1 to 48 characters. Letters, digits, and :_- are allowed.
 * @method Attribute getAttribute() Obtain Device attribute
 * @method void setAttribute(Attribute $Attribute) Set Device attribute
 * @method string getDefinedPsk() Obtain Whether to use custom PSK, no by default
 * @method void setDefinedPsk(string $DefinedPsk) Set Whether to use custom PSK, no by default
 * @method integer getIsp() Obtain ISP, required for a NB-IoT product. `1`: China Telecom; `2`: China Mobile; `3`: China Unicom
 * @method void setIsp(integer $Isp) Set ISP, required for a NB-IoT product. `1`: China Telecom; `2`: China Mobile; `3`: China Unicom
 * @method string getImei() Obtain IMEI, required for a NB-IoT product
 * @method void setImei(string $Imei) Set IMEI, required for a NB-IoT product
 * @method string getLoraDevEui() Obtain DevEUI of a LoRa device, required when you create a LoRa device
 * @method void setLoraDevEui(string $LoraDevEui) Set DevEUI of a LoRa device, required when you create a LoRa device
 * @method integer getLoraMoteType() Obtain MoteType of a LoRa device
 * @method void setLoraMoteType(integer $LoraMoteType) Set MoteType of a LoRa device
 * @method string getSkey() Obtain Skey, required when you create a LoRa device
 * @method void setSkey(string $Skey) Set Skey, required when you create a LoRa device
 * @method string getLoraAppKey() Obtain AppKey of a LoRa device
 * @method void setLoraAppKey(string $LoraAppKey) Set AppKey of a LoRa device
 * @method string getTlsCrt() Obtain Private CA certificate
 * @method void setTlsCrt(string $TlsCrt) Set Private CA certificate
 */
class CreateDeviceRequest extends AbstractModel
{
    /**
     * @var string Product ID, globally unique ID assigned by Tencent Cloud during product creation
     */
    public $ProductId;

    /**
     * @var string Device name. It is a string of 1 to 48 characters. Letters, digits, and :_- are allowed.
     */
    public $DeviceName;

    /**
     * @var Attribute Device attribute
     */
    public $Attribute;

    /**
     * @var string Whether to use custom PSK, no by default
     */
    public $DefinedPsk;

    /**
     * @var integer ISP, required for a NB-IoT product. `1`: China Telecom; `2`: China Mobile; `3`: China Unicom
     */
    public $Isp;

    /**
     * @var string IMEI, required for a NB-IoT product
     */
    public $Imei;

    /**
     * @var string DevEUI of a LoRa device, required when you create a LoRa device
     */
    public $LoraDevEui;

    /**
     * @var integer MoteType of a LoRa device
     */
    public $LoraMoteType;

    /**
     * @var string Skey, required when you create a LoRa device
     */
    public $Skey;

    /**
     * @var string AppKey of a LoRa device
     */
    public $LoraAppKey;

    /**
     * @var string Private CA certificate
     */
    public $TlsCrt;

    /**
     * @param string $ProductId Product ID, globally unique ID assigned by Tencent Cloud during product creation
     * @param string $DeviceName Device name. It is a string of 1 to 48 characters. Letters, digits, and :_- are allowed.
     * @param Attribute $Attribute Device attribute
     * @param string $DefinedPsk Whether to use custom PSK, no by default
     * @param integer $Isp ISP, required for a NB-IoT product. `1`: China Telecom; `2`: China Mobile; `3`: China Unicom
     * @param string $Imei IMEI, required for a NB-IoT product
     * @param string $LoraDevEui DevEUI of a LoRa device, required when you create a LoRa device
     * @param integer $LoraMoteType MoteType of a LoRa device
     * @param string $Skey Skey, required when you create a LoRa device
     * @param string $LoraAppKey AppKey of a LoRa device
     * @param string $TlsCrt Private CA certificate
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Attribute",$param) and $param["Attribute"] !== null) {
            $this->Attribute = new Attribute();
            $this->Attribute->deserialize($param["Attribute"]);
        }

        if (array_key_exists("DefinedPsk",$param) and $param["DefinedPsk"] !== null) {
            $this->DefinedPsk = $param["DefinedPsk"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("Imei",$param) and $param["Imei"] !== null) {
            $this->Imei = $param["Imei"];
        }

        if (array_key_exists("LoraDevEui",$param) and $param["LoraDevEui"] !== null) {
            $this->LoraDevEui = $param["LoraDevEui"];
        }

        if (array_key_exists("LoraMoteType",$param) and $param["LoraMoteType"] !== null) {
            $this->LoraMoteType = $param["LoraMoteType"];
        }

        if (array_key_exists("Skey",$param) and $param["Skey"] !== null) {
            $this->Skey = $param["Skey"];
        }

        if (array_key_exists("LoraAppKey",$param) and $param["LoraAppKey"] !== null) {
            $this->LoraAppKey = $param["LoraAppKey"];
        }

        if (array_key_exists("TlsCrt",$param) and $param["TlsCrt"] !== null) {
            $this->TlsCrt = $param["TlsCrt"];
        }
    }
}
