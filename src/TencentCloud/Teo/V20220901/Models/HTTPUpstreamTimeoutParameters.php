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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Layer-7 origin-pull timeout configuration.
 *
 * @method integer getResponseTimeout() Obtain HTTP response timeout in seconds. value range: 5–600.
 * @method void setResponseTimeout(integer $ResponseTimeout) Set HTTP response timeout in seconds. value range: 5–600.
 */
class HTTPUpstreamTimeoutParameters extends AbstractModel
{
    /**
     * @var integer HTTP response timeout in seconds. value range: 5–600.
     */
    public $ResponseTimeout;

    /**
     * @param integer $ResponseTimeout HTTP response timeout in seconds. value range: 5–600.
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
        if (array_key_exists("ResponseTimeout",$param) and $param["ResponseTimeout"] !== null) {
            $this->ResponseTimeout = $param["ResponseTimeout"];
        }
    }
}
