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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HSTS configuration
 *
 * @method string getSwitch() Obtain <p>on or off</p>
 * @method void setSwitch(string $Switch) Set <p>on or off</p>
 * @method integer getMaxAge() Obtain <p>Valid period in seconds.</p>
 * @method void setMaxAge(integer $MaxAge) Set <p>Valid period in seconds.</p>
 * @method string getIncludeSubDomains() Obtain <p>on or off</p>
 * @method void setIncludeSubDomains(string $IncludeSubDomains) Set <p>on or off</p>
 * @method string getPreload() Obtain <p>on or off</p>
 * @method void setPreload(string $Preload) Set <p>on or off</p>
 */
class HstsConfig extends AbstractModel
{
    /**
     * @var string <p>on or off</p>
     */
    public $Switch;

    /**
     * @var integer <p>Valid period in seconds.</p>
     */
    public $MaxAge;

    /**
     * @var string <p>on or off</p>
     */
    public $IncludeSubDomains;

    /**
     * @var string <p>on or off</p>
     */
    public $Preload;

    /**
     * @param string $Switch <p>on or off</p>
     * @param integer $MaxAge <p>Valid period in seconds.</p>
     * @param string $IncludeSubDomains <p>on or off</p>
     * @param string $Preload <p>on or off</p>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = $param["MaxAge"];
        }

        if (array_key_exists("IncludeSubDomains",$param) and $param["IncludeSubDomains"] !== null) {
            $this->IncludeSubDomains = $param["IncludeSubDomains"];
        }

        if (array_key_exists("Preload",$param) and $param["Preload"] !== null) {
            $this->Preload = $param["Preload"];
        }
    }
}
