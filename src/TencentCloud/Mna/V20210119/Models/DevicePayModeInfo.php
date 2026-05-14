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
 * Device payment mode info
 *
 * @method string getDeviceId() Obtain device ID
 * @method void setDeviceId(string $DeviceId) Set device ID
 * @method integer getPayMode() Obtain Payment mode.
Prepaid Traffic Package
0: Pay-as-you-go by traffic
 * @method void setPayMode(integer $PayMode) Set Payment mode.
Prepaid Traffic Package
0: Pay-as-you-go by traffic
 * @method string getPayModeDesc() Obtain Payment mode description.
 * @method void setPayModeDesc(string $PayModeDesc) Set Payment mode description.
 * @method string getResourceId() Obtain Traffic package ID. Only available when the payment mode is package type.
 * @method void setResourceId(string $ResourceId) Set Traffic package ID. Only available when the payment mode is package type.
 */
class DevicePayModeInfo extends AbstractModel
{
    /**
     * @var string device ID
     */
    public $DeviceId;

    /**
     * @var integer Payment mode.
Prepaid Traffic Package
0: Pay-as-you-go by traffic
     */
    public $PayMode;

    /**
     * @var string Payment mode description.
     */
    public $PayModeDesc;

    /**
     * @var string Traffic package ID. Only available when the payment mode is package type.
     */
    public $ResourceId;

    /**
     * @param string $DeviceId device ID
     * @param integer $PayMode Payment mode.
Prepaid Traffic Package
0: Pay-as-you-go by traffic
     * @param string $PayModeDesc Payment mode description.
     * @param string $ResourceId Traffic package ID. Only available when the payment mode is package type.
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

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayModeDesc",$param) and $param["PayModeDesc"] !== null) {
            $this->PayModeDesc = $param["PayModeDesc"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
