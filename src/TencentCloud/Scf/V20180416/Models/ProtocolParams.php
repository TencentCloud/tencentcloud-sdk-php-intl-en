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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameters for HTTP function support of other access protocols
 *
 * @method WSParams getWSParams() Obtain Supported parameters of the WebSockets protocol
 * @method void setWSParams(WSParams $WSParams) Set Supported parameters of the WebSockets protocol
 */
class ProtocolParams extends AbstractModel
{
    /**
     * @var WSParams Supported parameters of the WebSockets protocol
     */
    public $WSParams;

    /**
     * @param WSParams $WSParams Supported parameters of the WebSockets protocol
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
        if (array_key_exists("WSParams",$param) and $param["WSParams"] !== null) {
            $this->WSParams = new WSParams();
            $this->WSParams->deserialize($param["WSParams"]);
        }
    }
}
