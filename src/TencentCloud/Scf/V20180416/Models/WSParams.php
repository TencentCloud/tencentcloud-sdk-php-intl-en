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
 * Parameters for accessing an HTTP function over the WebSockets protocol
 *
 * @method integer getIdleTimeOut() Obtain Idle timeout in seconds. Default value: 15s. Configurable range: 1-1800s.
 * @method void setIdleTimeOut(integer $IdleTimeOut) Set Idle timeout in seconds. Default value: 15s. Configurable range: 1-1800s.
 */
class WSParams extends AbstractModel
{
    /**
     * @var integer Idle timeout in seconds. Default value: 15s. Configurable range: 1-1800s.
     */
    public $IdleTimeOut;

    /**
     * @param integer $IdleTimeOut Idle timeout in seconds. Default value: 15s. Configurable range: 1-1800s.
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
        if (array_key_exists("IdleTimeOut",$param) and $param["IdleTimeOut"] !== null) {
            $this->IdleTimeOut = $param["IdleTimeOut"];
        }
    }
}
