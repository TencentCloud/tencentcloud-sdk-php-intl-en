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
 * ModifyBanMode request structure.
 *
 * @method string getMode() Obtain Blocking mode. STANDARD_MODE: standard mode; DEEP_MODE: deep mode.
 * @method void setMode(string $Mode) Set Blocking mode. STANDARD_MODE: standard mode; DEEP_MODE: deep mode.
 * @method integer getTtl() Obtain Blocking time. This parameter is valid in standard blocking mode.
 * @method void setTtl(integer $Ttl) Set Blocking time. This parameter is valid in standard blocking mode.
 */
class ModifyBanModeRequest extends AbstractModel
{
    /**
     * @var string Blocking mode. STANDARD_MODE: standard mode; DEEP_MODE: deep mode.
     */
    public $Mode;

    /**
     * @var integer Blocking time. This parameter is valid in standard blocking mode.
     */
    public $Ttl;

    /**
     * @param string $Mode Blocking mode. STANDARD_MODE: standard mode; DEEP_MODE: deep mode.
     * @param integer $Ttl Blocking time. This parameter is valid in standard blocking mode.
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Ttl",$param) and $param["Ttl"] !== null) {
            $this->Ttl = $param["Ttl"];
        }
    }
}
