<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * The header configuration for storing client request IP.
 *
 * @method string getSwitch() Obtain Whether to enable configuration. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method void setSwitch(string $Switch) Set Whether to enable configuration. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method string getHeaderName() Obtain Name of the request header containing the client ip address for origin-pull. when switch is on, this parameter is required. x-forwarded-for is not allowed for this parameter.
 * @method void setHeaderName(string $HeaderName) Set Name of the request header containing the client ip address for origin-pull. when switch is on, this parameter is required. x-forwarded-for is not allowed for this parameter.
 */
class ClientIPHeaderParameters extends AbstractModel
{
    /**
     * @var string Whether to enable configuration. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     */
    public $Switch;

    /**
     * @var string Name of the request header containing the client ip address for origin-pull. when switch is on, this parameter is required. x-forwarded-for is not allowed for this parameter.
     */
    public $HeaderName;

    /**
     * @param string $Switch Whether to enable configuration. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     * @param string $HeaderName Name of the request header containing the client ip address for origin-pull. when switch is on, this parameter is required. x-forwarded-for is not allowed for this parameter.
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

        if (array_key_exists("HeaderName",$param) and $param["HeaderName"] !== null) {
            $this->HeaderName = $param["HeaderName"];
        }
    }
}
