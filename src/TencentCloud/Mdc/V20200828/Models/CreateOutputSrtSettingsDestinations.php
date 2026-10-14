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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Create the SRT destination address for the output of a media transmission stream.
 *
 * @method string getIp() Obtain Output IP or domain.
 * @method void setIp(string $Ip) Set Output IP or domain.
 * @method integer getPort() Obtain Output port.
 * @method void setPort(integer $Port) Set Output port.
 */
class CreateOutputSrtSettingsDestinations extends AbstractModel
{
    /**
     * @var string Output IP or domain.
     */
    public $Ip;

    /**
     * @var integer Output port.
     */
    public $Port;

    /**
     * @param string $Ip Output IP or domain.
     * @param integer $Port Output port.
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
