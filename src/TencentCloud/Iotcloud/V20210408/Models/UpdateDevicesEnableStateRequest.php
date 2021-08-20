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
 * UpdateDevicesEnableState request structure.
 *
 * @method string getProductId() Obtain ID of the product to which the device belongs
 * @method void setProductId(string $ProductId) Set ID of the product to which the device belongs
 * @method array getDeviceNames() Obtain Device names
 * @method void setDeviceNames(array $DeviceNames) Set Device names
 * @method integer getStatus() Obtain New status of the devices. `0`: disabled; `1`: enabled
 * @method void setStatus(integer $Status) Set New status of the devices. `0`: disabled; `1`: enabled
 */
class UpdateDevicesEnableStateRequest extends AbstractModel
{
    /**
     * @var string ID of the product to which the device belongs
     */
    public $ProductId;

    /**
     * @var array Device names
     */
    public $DeviceNames;

    /**
     * @var integer New status of the devices. `0`: disabled; `1`: enabled
     */
    public $Status;

    /**
     * @param string $ProductId ID of the product to which the device belongs
     * @param array $DeviceNames Device names
     * @param integer $Status New status of the devices. `0`: disabled; `1`: enabled
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

        if (array_key_exists("DeviceNames",$param) and $param["DeviceNames"] !== null) {
            $this->DeviceNames = $param["DeviceNames"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
