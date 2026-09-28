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
 * CreateRules request structure.
 *
 * @method string getListenerId() Obtain Listener ID, in the format of lst- followed by 8 alphanumeric characters.
 * @method void setListenerId(string $ListenerId) Set Listener ID, in the format of lst- followed by 8 alphanumeric characters.
 * @method string getLoadBalancerId() Obtain CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
 * @method array getRules() Obtain Forwarding rule list.
 * @method void setRules(array $Rules) Set Forwarding rule list.
 * @method string getClientToken() Obtain Client Token, used to ensure the idempotency of requests. Generate a parameter value from your client, ensuring uniqueness of the value for different requests. ClientToken supports only ASCII characters. If not specified, the system automatically uses the RequestId of the API request as the ClientToken flag. The RequestId may not be the same for each API request.
 * @method void setClientToken(string $ClientToken) Set Client Token, used to ensure the idempotency of requests. Generate a parameter value from your client, ensuring uniqueness of the value for different requests. ClientToken supports only ASCII characters. If not specified, the system automatically uses the RequestId of the API request as the ClientToken flag. The RequestId may not be the same for each API request.
 * @method boolean getDryRun() Obtain Whether it is a pre-check only request.
 * @method void setDryRun(boolean $DryRun) Set Whether it is a pre-check only request.
 */
class CreateRulesRequest extends AbstractModel
{
    /**
     * @var string Listener ID, in the format of lst- followed by 8 alphanumeric characters.
     */
    public $ListenerId;

    /**
     * @var string CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
     */
    public $LoadBalancerId;

    /**
     * @var array Forwarding rule list.
     */
    public $Rules;

    /**
     * @var string Client Token, used to ensure the idempotency of requests. Generate a parameter value from your client, ensuring uniqueness of the value for different requests. ClientToken supports only ASCII characters. If not specified, the system automatically uses the RequestId of the API request as the ClientToken flag. The RequestId may not be the same for each API request.
     */
    public $ClientToken;

    /**
     * @var boolean Whether it is a pre-check only request.
     */
    public $DryRun;

    /**
     * @param string $ListenerId Listener ID, in the format of lst- followed by 8 alphanumeric characters.
     * @param string $LoadBalancerId CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
     * @param array $Rules Forwarding rule list.
     * @param string $ClientToken Client Token, used to ensure the idempotency of requests. Generate a parameter value from your client, ensuring uniqueness of the value for different requests. ClientToken supports only ASCII characters. If not specified, the system automatically uses the RequestId of the API request as the ClientToken flag. The RequestId may not be the same for each API request.
     * @param boolean $DryRun Whether it is a pre-check only request.
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new RuleInput();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
