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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CallISAPI request structure.
 *
 * @method string getDeviceId() Obtain Device ID
 * @method void setDeviceId(string $DeviceId) Set Device ID
 * @method string getUrl() Obtain url resource
 * @method void setUrl(string $Url) Set url resource
 * @method string getInputData() Obtain Input parameter
 * @method void setInputData(string $InputData) Set Input parameter
 */
class CallISAPIRequest extends AbstractModel
{
    /**
     * @var string Device ID
     */
    public $DeviceId;

    /**
     * @var string url resource
     */
    public $Url;

    /**
     * @var string Input parameter
     */
    public $InputData;

    /**
     * @param string $DeviceId Device ID
     * @param string $Url url resource
     * @param string $InputData Input parameter
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("InputData",$param) and $param["InputData"] !== null) {
            $this->InputData = $param["InputData"];
        }
    }
}
