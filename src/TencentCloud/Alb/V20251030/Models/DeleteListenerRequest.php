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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteListener request structure.
 *
 * @method array getListenerIds() Obtain Listener ID list. The ID format is lst- followed by 8 alphanumeric characters.
 * @method void setListenerIds(array $ListenerIds) Set Listener ID list. The ID format is lst- followed by 8 alphanumeric characters.
 * @method string getLoadBalancerId() Obtain CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
 * @method string getClientToken() Obtain Client Token, used for ensuring request idempotency.

Generate a parameter value from your client to underwrite uniqueness of value for different requests. ClientToken supports only ASCII characters.
 * @method void setClientToken(string $ClientToken) Set Client Token, used for ensuring request idempotency.

Generate a parameter value from your client to underwrite uniqueness of value for different requests. ClientToken supports only ASCII characters.
 */
class DeleteListenerRequest extends AbstractModel
{
    /**
     * @var array Listener ID list. The ID format is lst- followed by 8 alphanumeric characters.
     */
    public $ListenerIds;

    /**
     * @var string CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
     */
    public $LoadBalancerId;

    /**
     * @var string Client Token, used for ensuring request idempotency.

Generate a parameter value from your client to underwrite uniqueness of value for different requests. ClientToken supports only ASCII characters.
     */
    public $ClientToken;

    /**
     * @param array $ListenerIds Listener ID list. The ID format is lst- followed by 8 alphanumeric characters.
     * @param string $LoadBalancerId CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
     * @param string $ClientToken Client Token, used for ensuring request idempotency.

Generate a parameter value from your client to underwrite uniqueness of value for different requests. ClientToken supports only ASCII characters.
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
        if (array_key_exists("ListenerIds",$param) and $param["ListenerIds"] !== null) {
            $this->ListenerIds = $param["ListenerIds"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
