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
 * Specific configuration for slow attack protection.
 *
 * @method string getEnabled() Obtain Whether slow attack protection is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li>
 * @method void setEnabled(string $Enabled) Set Whether slow attack protection is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li>
 * @method string getId() Obtain Rule ID of slow attack protection, returned only as an output parameter.
 * @method void setId(string $Id) Set Rule ID of slow attack protection, returned only as an output parameter.
 * @method SecurityAction getAction() Obtain Handling method for slow attack protection. This field is required when Enabled is on. Supported values for SecurityAction Name: <li>Monitor: observe;</li><li>Deny: block;</li>
 * @method void setAction(SecurityAction $Action) Set Handling method for slow attack protection. This field is required when Enabled is on. Supported values for SecurityAction Name: <li>Monitor: observe;</li><li>Deny: block;</li>
 * @method MinimalRequestBodyTransferRate getMinimalRequestBodyTransferRate() Obtain Specific configuration of the minimum body transfer rate threshold. Required when Enabled is on.
 * @method void setMinimalRequestBodyTransferRate(MinimalRequestBodyTransferRate $MinimalRequestBodyTransferRate) Set Specific configuration of the minimum body transfer rate threshold. Required when Enabled is on.
 * @method RequestBodyTransferTimeout getRequestBodyTransferTimeout() Obtain Specific configuration of the body transfer timeout duration. Required if Enabled is on.
 * @method void setRequestBodyTransferTimeout(RequestBodyTransferTimeout $RequestBodyTransferTimeout) Set Specific configuration of the body transfer timeout duration. Required if Enabled is on.
 */
class SlowAttackDefense extends AbstractModel
{
    /**
     * @var string Whether slow attack protection is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li>
     */
    public $Enabled;

    /**
     * @var string Rule ID of slow attack protection, returned only as an output parameter.
     */
    public $Id;

    /**
     * @var SecurityAction Handling method for slow attack protection. This field is required when Enabled is on. Supported values for SecurityAction Name: <li>Monitor: observe;</li><li>Deny: block;</li>
     */
    public $Action;

    /**
     * @var MinimalRequestBodyTransferRate Specific configuration of the minimum body transfer rate threshold. Required when Enabled is on.
     */
    public $MinimalRequestBodyTransferRate;

    /**
     * @var RequestBodyTransferTimeout Specific configuration of the body transfer timeout duration. Required if Enabled is on.
     */
    public $RequestBodyTransferTimeout;

    /**
     * @param string $Enabled Whether slow attack protection is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li>
     * @param string $Id Rule ID of slow attack protection, returned only as an output parameter.
     * @param SecurityAction $Action Handling method for slow attack protection. This field is required when Enabled is on. Supported values for SecurityAction Name: <li>Monitor: observe;</li><li>Deny: block;</li>
     * @param MinimalRequestBodyTransferRate $MinimalRequestBodyTransferRate Specific configuration of the minimum body transfer rate threshold. Required when Enabled is on.
     * @param RequestBodyTransferTimeout $RequestBodyTransferTimeout Specific configuration of the body transfer timeout duration. Required if Enabled is on.
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new SecurityAction();
            $this->Action->deserialize($param["Action"]);
        }

        if (array_key_exists("MinimalRequestBodyTransferRate",$param) and $param["MinimalRequestBodyTransferRate"] !== null) {
            $this->MinimalRequestBodyTransferRate = new MinimalRequestBodyTransferRate();
            $this->MinimalRequestBodyTransferRate->deserialize($param["MinimalRequestBodyTransferRate"]);
        }

        if (array_key_exists("RequestBodyTransferTimeout",$param) and $param["RequestBodyTransferTimeout"] !== null) {
            $this->RequestBodyTransferTimeout = new RequestBodyTransferTimeout();
            $this->RequestBodyTransferTimeout->deserialize($param["RequestBodyTransferTimeout"]);
        }
    }
}
