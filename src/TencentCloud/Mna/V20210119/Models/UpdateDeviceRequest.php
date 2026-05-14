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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDevice request structure.
 *
 * @method string getDeviceId() Obtain Device ID
 * @method void setDeviceId(string $DeviceId) Set Device ID
 * @method string getDeviceName() Obtain Device name.
 * @method void setDeviceName(string $DeviceName) Set Device name.
 * @method string getRemark() Obtain device Remarks
 * @method void setRemark(string $Remark) Set device Remarks
 * @method array getUpdateNetInfo() Obtain Update device network info
 * @method void setUpdateNetInfo(array $UpdateNetInfo) Set Update device network info
 * @method integer getFlowTrunc() Obtain No traffic processing method for the device. 0: pay-as-you-go, 1: truncate and accelerate
 * @method void setFlowTrunc(integer $FlowTrunc) Set No traffic processing method for the device. 0: pay-as-you-go, 1: truncate and accelerate
 */
class UpdateDeviceRequest extends AbstractModel
{
    /**
     * @var string Device ID
     */
    public $DeviceId;

    /**
     * @var string Device name.
     */
    public $DeviceName;

    /**
     * @var string device Remarks
     */
    public $Remark;

    /**
     * @var array Update device network info
     */
    public $UpdateNetInfo;

    /**
     * @var integer No traffic processing method for the device. 0: pay-as-you-go, 1: truncate and accelerate
     */
    public $FlowTrunc;

    /**
     * @param string $DeviceId Device ID
     * @param string $DeviceName Device name.
     * @param string $Remark device Remarks
     * @param array $UpdateNetInfo Update device network info
     * @param integer $FlowTrunc No traffic processing method for the device. 0: pay-as-you-go, 1: truncate and accelerate
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("UpdateNetInfo",$param) and $param["UpdateNetInfo"] !== null) {
            $this->UpdateNetInfo = [];
            foreach ($param["UpdateNetInfo"] as $key => $value){
                $obj = new UpdateNetInfo();
                $obj->deserialize($value);
                array_push($this->UpdateNetInfo, $obj);
            }
        }

        if (array_key_exists("FlowTrunc",$param) and $param["FlowTrunc"] !== null) {
            $this->FlowTrunc = $param["FlowTrunc"];
        }
    }
}
