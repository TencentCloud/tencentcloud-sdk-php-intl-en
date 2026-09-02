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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAgentRunPolicy request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method CustomAgentRunModePolicy getCustomPolicy() Obtain <p>Custom running policy (CPU/Memory/NetworkPps). No modification if not passed in</p>
 * @method void setCustomPolicy(CustomAgentRunModePolicy $CustomPolicy) Set <p>Custom running policy (CPU/Memory/NetworkPps). No modification if not passed in</p>
 * @method array getAdvanceModeInstanceIDs() Obtain <p>Advanced mode machine instance_id list, automatically convert to quuid for storage in the backend</p>
 * @method void setAdvanceModeInstanceIDs(array $AdvanceModeInstanceIDs) Set <p>Advanced mode machine instance_id list, automatically convert to quuid for storage in the backend</p>
 * @method array getCustomModeInstanceIDs() Obtain <p>List of instance_id in custom mode machines, automatically convert to quuid for storage by the backend</p>
 * @method void setCustomModeInstanceIDs(array $CustomModeInstanceIDs) Set <p>List of instance_id in custom mode machines, automatically convert to quuid for storage by the backend</p>
 */
class ModifyAgentRunPolicyRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var CustomAgentRunModePolicy <p>Custom running policy (CPU/Memory/NetworkPps). No modification if not passed in</p>
     */
    public $CustomPolicy;

    /**
     * @var array <p>Advanced mode machine instance_id list, automatically convert to quuid for storage in the backend</p>
     */
    public $AdvanceModeInstanceIDs;

    /**
     * @var array <p>List of instance_id in custom mode machines, automatically convert to quuid for storage by the backend</p>
     */
    public $CustomModeInstanceIDs;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param CustomAgentRunModePolicy $CustomPolicy <p>Custom running policy (CPU/Memory/NetworkPps). No modification if not passed in</p>
     * @param array $AdvanceModeInstanceIDs <p>Advanced mode machine instance_id list, automatically convert to quuid for storage in the backend</p>
     * @param array $CustomModeInstanceIDs <p>List of instance_id in custom mode machines, automatically convert to quuid for storage by the backend</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("CustomPolicy",$param) and $param["CustomPolicy"] !== null) {
            $this->CustomPolicy = new CustomAgentRunModePolicy();
            $this->CustomPolicy->deserialize($param["CustomPolicy"]);
        }

        if (array_key_exists("AdvanceModeInstanceIDs",$param) and $param["AdvanceModeInstanceIDs"] !== null) {
            $this->AdvanceModeInstanceIDs = $param["AdvanceModeInstanceIDs"];
        }

        if (array_key_exists("CustomModeInstanceIDs",$param) and $param["CustomModeInstanceIDs"] !== null) {
            $this->CustomModeInstanceIDs = $param["CustomModeInstanceIDs"];
        }
    }
}
