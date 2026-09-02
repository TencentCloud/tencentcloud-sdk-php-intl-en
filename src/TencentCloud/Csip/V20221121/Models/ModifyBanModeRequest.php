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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBanMode request structure.
 *
 * @method string getMode() Obtain <p>Blocking mode. STANDARD_MODE: standard blocking; DEEP_MODE: deep blocking.</p>
 * @method void setMode(string $Mode) Set <p>Blocking mode. STANDARD_MODE: standard blocking; DEEP_MODE: deep blocking.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method integer getTtl() Obtain <p>Blocking time for standard blocking mode</p>
 * @method void setTtl(integer $Ttl) Set <p>Blocking time for standard blocking mode</p>
 */
class ModifyBanModeRequest extends AbstractModel
{
    /**
     * @var string <p>Blocking mode. STANDARD_MODE: standard blocking; DEEP_MODE: deep blocking.</p>
     */
    public $Mode;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>Blocking time for standard blocking mode</p>
     */
    public $Ttl;

    /**
     * @param string $Mode <p>Blocking mode. STANDARD_MODE: standard blocking; DEEP_MODE: deep blocking.</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param integer $Ttl <p>Blocking time for standard blocking mode</p>
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Ttl",$param) and $param["Ttl"] !== null) {
            $this->Ttl = $param["Ttl"];
        }
    }
}
