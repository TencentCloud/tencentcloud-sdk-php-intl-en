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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The results of AssessDeviceRiskPro
 *
 * @method DataScore getScore() Obtain <p>The risk score information of the device</p>
 * @method void setScore(DataScore $Score) Set <p>The risk score information of the device</p>
 * @method Device getDevice() Obtain <p>The basic information of the device</p>
 * @method void setDevice(Device $Device) Set <p>The basic information of the device</p>
 */
class AssessDeviceRiskRsp extends AbstractModel
{
    /**
     * @var DataScore <p>The risk score information of the device</p>
     */
    public $Score;

    /**
     * @var Device <p>The basic information of the device</p>
     */
    public $Device;

    /**
     * @param DataScore $Score <p>The risk score information of the device</p>
     * @param Device $Device <p>The basic information of the device</p>
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
        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = new DataScore();
            $this->Score->deserialize($param["Score"]);
        }

        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = new Device();
            $this->Device->deserialize($param["Device"]);
        }
    }
}
