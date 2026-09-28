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
 * ModifyLoadBalancerAttributes request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
 * @method string getClientToken() Obtain Client Token, used to ensure request idempotency.

Generate a parameter value from your client to underwrite the uniqueness of the value for different requests. ClientToken supports only ASCII characters.

> If not specified, the system automatically uses the **RequestId** of the API request as the **ClientToken** ID. The **RequestId** of each API request may not be the same.
 * @method void setClientToken(string $ClientToken) Set Client Token, used to ensure request idempotency.

Generate a parameter value from your client to underwrite the uniqueness of the value for different requests. ClientToken supports only ASCII characters.

> If not specified, the system automatically uses the **RequestId** of the API request as the **ClientToken** ID. The **RequestId** of each API request may not be the same.
 * @method DeletionProtectionConfig getDeletionProtection() Obtain Deletion protection configuration
 * @method void setDeletionProtection(DeletionProtectionConfig $DeletionProtection) Set Deletion protection configuration
 * @method boolean getDryRun() Obtain Whether to only precheck this request. Parameter Value:

- **true**: Send a check request without modifying the properties of the application CLB instance. Check items include whether required parameters are filled in, request format, and service limits. If the check fails, return the corresponding error. If the check passes, return the error code `DryRunOperation`.

- **false** (default value): Send a normal request, return `HTTP_2xx` status code after check, and directly perform the operation.
 * @method void setDryRun(boolean $DryRun) Set Whether to only precheck this request. Parameter Value:

- **true**: Send a check request without modifying the properties of the application CLB instance. Check items include whether required parameters are filled in, request format, and service limits. If the check fails, return the corresponding error. If the check passes, return the error code `DryRunOperation`.

- **false** (default value): Send a normal request, return `HTTP_2xx` status code after check, and directly perform the operation.
 * @method string getLoadBalancerName() Obtain Application CLB instance name. It contains 1-80 characters, including Chinese characters, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).
 * @method void setLoadBalancerName(string $LoadBalancerName) Set Application CLB instance name. It contains 1-80 characters, including Chinese characters, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).
 */
class ModifyLoadBalancerAttributesRequest extends AbstractModel
{
    /**
     * @var string CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
     */
    public $LoadBalancerId;

    /**
     * @var string Client Token, used to ensure request idempotency.

Generate a parameter value from your client to underwrite the uniqueness of the value for different requests. ClientToken supports only ASCII characters.

> If not specified, the system automatically uses the **RequestId** of the API request as the **ClientToken** ID. The **RequestId** of each API request may not be the same.
     */
    public $ClientToken;

    /**
     * @var DeletionProtectionConfig Deletion protection configuration
     */
    public $DeletionProtection;

    /**
     * @var boolean Whether to only precheck this request. Parameter Value:

- **true**: Send a check request without modifying the properties of the application CLB instance. Check items include whether required parameters are filled in, request format, and service limits. If the check fails, return the corresponding error. If the check passes, return the error code `DryRunOperation`.

- **false** (default value): Send a normal request, return `HTTP_2xx` status code after check, and directly perform the operation.
     */
    public $DryRun;

    /**
     * @var string Application CLB instance name. It contains 1-80 characters, including Chinese characters, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).
     */
    public $LoadBalancerName;

    /**
     * @param string $LoadBalancerId CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
     * @param string $ClientToken Client Token, used to ensure request idempotency.

Generate a parameter value from your client to underwrite the uniqueness of the value for different requests. ClientToken supports only ASCII characters.

> If not specified, the system automatically uses the **RequestId** of the API request as the **ClientToken** ID. The **RequestId** of each API request may not be the same.
     * @param DeletionProtectionConfig $DeletionProtection Deletion protection configuration
     * @param boolean $DryRun Whether to only precheck this request. Parameter Value:

- **true**: Send a check request without modifying the properties of the application CLB instance. Check items include whether required parameters are filled in, request format, and service limits. If the check fails, return the corresponding error. If the check passes, return the error code `DryRunOperation`.

- **false** (default value): Send a normal request, return `HTTP_2xx` status code after check, and directly perform the operation.
     * @param string $LoadBalancerName Application CLB instance name. It contains 1-80 characters, including Chinese characters, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = new DeletionProtectionConfig();
            $this->DeletionProtection->deserialize($param["DeletionProtection"]);
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }
    }
}
