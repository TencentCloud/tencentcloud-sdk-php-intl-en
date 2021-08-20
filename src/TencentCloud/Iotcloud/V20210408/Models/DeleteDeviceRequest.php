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
 * DeleteDevice request structure.
 *
 * @method string getProductId() Obtain ID of the product to which the device belongs
 * @method void setProductId(string $ProductId) Set ID of the product to which the device belongs
 * @method string getDeviceName() Obtain Name of the device to delete
 * @method void setDeviceName(string $DeviceName) Set Name of the device to delete
 * @method string getSkey() Obtain Skey, which is required to delete a LoRa device or LoRa gateway device
 * @method void setSkey(string $Skey) Set Skey, which is required to delete a LoRa device or LoRa gateway device
 */
class DeleteDeviceRequest extends AbstractModel
{
    /**
     * @var string ID of the product to which the device belongs
     */
    public $ProductId;

    /**
     * @var string Name of the device to delete
     */
    public $DeviceName;

    /**
     * @var string Skey, which is required to delete a LoRa device or LoRa gateway device
     */
    public $Skey;

    /**
     * @param string $ProductId ID of the product to which the device belongs
     * @param string $DeviceName Name of the device to delete
     * @param string $Skey Skey, which is required to delete a LoRa device or LoRa gateway device
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

        if (array_key_exists("Skey",$param) and $param["Skey"] !== null) {
            $this->Skey = $param["Skey"];
        }
    }
}
