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
 * Forced HTTPS redirection
 *
 * @method string getSwitch() Obtain <p>on or off</p>
 * @method void setSwitch(string $Switch) Set <p>on or off</p>
 * @method integer getRedirectStatusCode() Obtain <p>301,302,307,308</p>
 * @method void setRedirectStatusCode(integer $RedirectStatusCode) Set <p>301,302,307,308</p>
 */
class ForceRedirectConfig extends AbstractModel
{
    /**
     * @var string <p>on or off</p>
     */
    public $Switch;

    /**
     * @var integer <p>301,302,307,308</p>
     */
    public $RedirectStatusCode;

    /**
     * @param string $Switch <p>on or off</p>
     * @param integer $RedirectStatusCode <p>301,302,307,308</p>
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

        if (array_key_exists("RedirectStatusCode",$param) and $param["RedirectStatusCode"] !== null) {
            $this->RedirectStatusCode = $param["RedirectStatusCode"];
        }
    }
}
