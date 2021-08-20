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
 * Product properties
 *
 * @method string getProductDescription() Obtain Product description
 * @method void setProductDescription(string $ProductDescription) Set Product description
 * @method string getEncryptionType() Obtain Authentication type. `1` (default): certificate; `2`: signature
 * @method void setEncryptionType(string $EncryptionType) Set Authentication type. `1` (default): certificate; `2`: signature
 * @method string getRegion() Obtain Product region. Valid value: `gz` (Guangzhou)
 * @method void setRegion(string $Region) Set Product region. Valid value: `gz` (Guangzhou)
 * @method integer getProductType() Obtain Product type. Valid values:
`0` (default): general; `2`: NB-IoT; `3`: LoRa gateway; `4`: LoRa; `5`: general gateway
 * @method void setProductType(integer $ProductType) Set Product type. Valid values:
`0` (default): general; `2`: NB-IoT; `3`: LoRa gateway; `4`: LoRa; `5`: general gateway
 * @method string getFormat() Obtain Data format. Valid values: `json` (default), `custom`
 * @method void setFormat(string $Format) Set Data format. Valid values: `json` (default), `custom`
 * @method string getPlatform() Obtain Platform of the product. Default value: `0`
 * @method void setPlatform(string $Platform) Set Platform of the product. Default value: `0`
 * @method string getAppeui() Obtain AppEUI at the LoRa product operator, required only for LoRa products
 * @method void setAppeui(string $Appeui) Set AppEUI at the LoRa product operator, required only for LoRa products
 * @method string getModelId() Obtain ID of the Thing Specification Language (TSL) model bound to the product. `-1` means no models are bound.
 * @method void setModelId(string $ModelId) Set ID of the Thing Specification Language (TSL) model bound to the product. `-1` means no models are bound.
 * @method string getModelName() Obtain Name of the TSL model bound to the product
 * @method void setModelName(string $ModelName) Set Name of the TSL model bound to the product
 * @method string getProductKey() Obtain Product key, which is specific to suite products
 * @method void setProductKey(string $ProductKey) Set Product key, which is specific to suite products
 * @method integer getRegisterType() Obtain Dynamic registration type. `0`: disable; `1`: preset device names; `2`: generate device names dynamically
 * @method void setRegisterType(integer $RegisterType) Set Dynamic registration type. `0`: disable; `1`: preset device names; `2`: generate device names dynamically
 * @method string getProductSecret() Obtain Dynamic registration product key
 * @method void setProductSecret(string $ProductSecret) Set Dynamic registration product key
 * @method integer getRegisterLimit() Obtain The maximum number of devices that can be dynamically created when `RegisterType` is set to `2`
 * @method void setRegisterLimit(integer $RegisterLimit) Set The maximum number of devices that can be dynamically created when `RegisterType` is set to `2`
 * @method string getOriginProductId() Obtain Original product ID of a transferred product. This parameter is empty for products that are not transferred.
 * @method void setOriginProductId(string $OriginProductId) Set Original product ID of a transferred product. This parameter is empty for products that are not transferred.
 * @method string getPrivateCAName() Obtain Private CA certificate name
 * @method void setPrivateCAName(string $PrivateCAName) Set Private CA certificate name
 * @method integer getOriginUserId() Obtain Original user ID of a transferred product. This parameter is empty for products that are not transferred.
 * @method void setOriginUserId(integer $OriginUserId) Set Original user ID of a transferred product. This parameter is empty for products that are not transferred.
 */
class ProductProperties extends AbstractModel
{
    /**
     * @var string Product description
     */
    public $ProductDescription;

    /**
     * @var string Authentication type. `1` (default): certificate; `2`: signature
     */
    public $EncryptionType;

    /**
     * @var string Product region. Valid value: `gz` (Guangzhou)
     */
    public $Region;

    /**
     * @var integer Product type. Valid values:
`0` (default): general; `2`: NB-IoT; `3`: LoRa gateway; `4`: LoRa; `5`: general gateway
     */
    public $ProductType;

    /**
     * @var string Data format. Valid values: `json` (default), `custom`
     */
    public $Format;

    /**
     * @var string Platform of the product. Default value: `0`
     */
    public $Platform;

    /**
     * @var string AppEUI at the LoRa product operator, required only for LoRa products
     */
    public $Appeui;

    /**
     * @var string ID of the Thing Specification Language (TSL) model bound to the product. `-1` means no models are bound.
     */
    public $ModelId;

    /**
     * @var string Name of the TSL model bound to the product
     */
    public $ModelName;

    /**
     * @var string Product key, which is specific to suite products
     */
    public $ProductKey;

    /**
     * @var integer Dynamic registration type. `0`: disable; `1`: preset device names; `2`: generate device names dynamically
     */
    public $RegisterType;

    /**
     * @var string Dynamic registration product key
     */
    public $ProductSecret;

    /**
     * @var integer The maximum number of devices that can be dynamically created when `RegisterType` is set to `2`
     */
    public $RegisterLimit;

    /**
     * @var string Original product ID of a transferred product. This parameter is empty for products that are not transferred.
     */
    public $OriginProductId;

    /**
     * @var string Private CA certificate name
     */
    public $PrivateCAName;

    /**
     * @var integer Original user ID of a transferred product. This parameter is empty for products that are not transferred.
     */
    public $OriginUserId;

    /**
     * @param string $ProductDescription Product description
     * @param string $EncryptionType Authentication type. `1` (default): certificate; `2`: signature
     * @param string $Region Product region. Valid value: `gz` (Guangzhou)
     * @param integer $ProductType Product type. Valid values:
`0` (default): general; `2`: NB-IoT; `3`: LoRa gateway; `4`: LoRa; `5`: general gateway
     * @param string $Format Data format. Valid values: `json` (default), `custom`
     * @param string $Platform Platform of the product. Default value: `0`
     * @param string $Appeui AppEUI at the LoRa product operator, required only for LoRa products
     * @param string $ModelId ID of the Thing Specification Language (TSL) model bound to the product. `-1` means no models are bound.
     * @param string $ModelName Name of the TSL model bound to the product
     * @param string $ProductKey Product key, which is specific to suite products
     * @param integer $RegisterType Dynamic registration type. `0`: disable; `1`: preset device names; `2`: generate device names dynamically
     * @param string $ProductSecret Dynamic registration product key
     * @param integer $RegisterLimit The maximum number of devices that can be dynamically created when `RegisterType` is set to `2`
     * @param string $OriginProductId Original product ID of a transferred product. This parameter is empty for products that are not transferred.
     * @param string $PrivateCAName Private CA certificate name
     * @param integer $OriginUserId Original user ID of a transferred product. This parameter is empty for products that are not transferred.
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
        if (array_key_exists("ProductDescription",$param) and $param["ProductDescription"] !== null) {
            $this->ProductDescription = $param["ProductDescription"];
        }

        if (array_key_exists("EncryptionType",$param) and $param["EncryptionType"] !== null) {
            $this->EncryptionType = $param["EncryptionType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Appeui",$param) and $param["Appeui"] !== null) {
            $this->Appeui = $param["Appeui"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ProductKey",$param) and $param["ProductKey"] !== null) {
            $this->ProductKey = $param["ProductKey"];
        }

        if (array_key_exists("RegisterType",$param) and $param["RegisterType"] !== null) {
            $this->RegisterType = $param["RegisterType"];
        }

        if (array_key_exists("ProductSecret",$param) and $param["ProductSecret"] !== null) {
            $this->ProductSecret = $param["ProductSecret"];
        }

        if (array_key_exists("RegisterLimit",$param) and $param["RegisterLimit"] !== null) {
            $this->RegisterLimit = $param["RegisterLimit"];
        }

        if (array_key_exists("OriginProductId",$param) and $param["OriginProductId"] !== null) {
            $this->OriginProductId = $param["OriginProductId"];
        }

        if (array_key_exists("PrivateCAName",$param) and $param["PrivateCAName"] !== null) {
            $this->PrivateCAName = $param["PrivateCAName"];
        }

        if (array_key_exists("OriginUserId",$param) and $param["OriginUserId"] !== null) {
            $this->OriginUserId = $param["OriginUserId"];
        }
    }
}
