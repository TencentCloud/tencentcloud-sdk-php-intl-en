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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Machine that passed the check and the corresponding host IP address.
 *
 * @method string getUuid() Obtain Server ID
 * @method void setUuid(string $Uuid) Set Server ID
 * @method string getHostip() Obtain Server IP address
 * @method void setHostip(string $Hostip) Set Server IP address
 */
class UuidHostip extends AbstractModel
{
    /**
     * @var string Server ID
     */
    public $Uuid;

    /**
     * @var string Server IP address
     */
    public $Hostip;

    /**
     * @param string $Uuid Server ID
     * @param string $Hostip Server IP address
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Hostip",$param) and $param["Hostip"] !== null) {
            $this->Hostip = $param["Hostip"];
        }
    }
}
