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
 * DeleteLoadBalancers request structure.
 *
 * @method array getLoadBalancerIds() Obtain List of Cloud Load Balancer instance IDs. The format is alb- followed by 8 alphanumeric characters.
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set List of Cloud Load Balancer instance IDs. The format is alb- followed by 8 alphanumeric characters.
 * @method string getClientToken() Obtain Client Token, used for ensuring the idempotency of requests.

Generate a parameter value from your client to underwrite the uniqueness of the value for different requests. ClientToken supports only ASCII characters.


 * @method void setClientToken(string $ClientToken) Set Client Token, used for ensuring the idempotency of requests.

Generate a parameter value from your client to underwrite the uniqueness of the value for different requests. ClientToken supports only ASCII characters.


 * @method boolean getDryRun() Obtain Whether to only precheck this request. Parameter value:

- **true**: Send a check request. The CLB instance will not be deleted. Check items include whether required parameters are filled in, request format, and service limits. If a check fails, return the corresponding error. If all checks pass, return the error code `DryRunOperation`.

- **false** (default value): Send a normal request, return `HTTP 2xx` status code after check, and directly perform the operation.
 * @method void setDryRun(boolean $DryRun) Set Whether to only precheck this request. Parameter value:

- **true**: Send a check request. The CLB instance will not be deleted. Check items include whether required parameters are filled in, request format, and service limits. If a check fails, return the corresponding error. If all checks pass, return the error code `DryRunOperation`.

- **false** (default value): Send a normal request, return `HTTP 2xx` status code after check, and directly perform the operation.
 */
class DeleteLoadBalancersRequest extends AbstractModel
{
    /**
     * @var array List of Cloud Load Balancer instance IDs. The format is alb- followed by 8 alphanumeric characters.
     */
    public $LoadBalancerIds;

    /**
     * @var string Client Token, used for ensuring the idempotency of requests.

Generate a parameter value from your client to underwrite the uniqueness of the value for different requests. ClientToken supports only ASCII characters.


     */
    public $ClientToken;

    /**
     * @var boolean Whether to only precheck this request. Parameter value:

- **true**: Send a check request. The CLB instance will not be deleted. Check items include whether required parameters are filled in, request format, and service limits. If a check fails, return the corresponding error. If all checks pass, return the error code `DryRunOperation`.

- **false** (default value): Send a normal request, return `HTTP 2xx` status code after check, and directly perform the operation.
     */
    public $DryRun;

    /**
     * @param array $LoadBalancerIds List of Cloud Load Balancer instance IDs. The format is alb- followed by 8 alphanumeric characters.
     * @param string $ClientToken Client Token, used for ensuring the idempotency of requests.

Generate a parameter value from your client to underwrite the uniqueness of the value for different requests. ClientToken supports only ASCII characters.


     * @param boolean $DryRun Whether to only precheck this request. Parameter value:

- **true**: Send a check request. The CLB instance will not be deleted. Check items include whether required parameters are filled in, request format, and service limits. If a check fails, return the corresponding error. If all checks pass, return the error code `DryRunOperation`.

- **false** (default value): Send a normal request, return `HTTP 2xx` status code after check, and directly perform the operation.
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
        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
