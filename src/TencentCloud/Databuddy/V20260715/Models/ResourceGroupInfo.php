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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource group information
 *
 * @method string getResourceGroupId() Obtain <p>Resource group ID</p>
 * @method void setResourceGroupId(string $ResourceGroupId) Set <p>Resource group ID</p>
 * @method string getResourceGroupName() Obtain <p>Resource group name.</p>
 * @method void setResourceGroupName(string $ResourceGroupName) Set <p>Resource group name.</p>
 * @method string getResourceGroupStatus() Obtain <p>Resource group status</p><p>Parameter format: 0 // not specified 1 // to be created 2 // creating 3 // running 4 // stopped 5 // stopping 6 // starting 7 // updating 8 // deleting 9 // deleted 10 // user proactive start / automatic startup (task submitted and auto start/stop enabled) 11 // available: unique to data computing 12 // unavailable: unique to data computing 13 // failure</p>
 * @method void setResourceGroupStatus(string $ResourceGroupStatus) Set <p>Resource group status</p><p>Parameter format: 0 // not specified 1 // to be created 2 // creating 3 // running 4 // stopped 5 // stopping 6 // starting 7 // updating 8 // deleting 9 // deleted 10 // user proactive start / automatic startup (task submitted and auto start/stop enabled) 11 // available: unique to data computing 12 // unavailable: unique to data computing 13 // failure</p>
 */
class ResourceGroupInfo extends AbstractModel
{
    /**
     * @var string <p>Resource group ID</p>
     */
    public $ResourceGroupId;

    /**
     * @var string <p>Resource group name.</p>
     */
    public $ResourceGroupName;

    /**
     * @var string <p>Resource group status</p><p>Parameter format: 0 // not specified 1 // to be created 2 // creating 3 // running 4 // stopped 5 // stopping 6 // starting 7 // updating 8 // deleting 9 // deleted 10 // user proactive start / automatic startup (task submitted and auto start/stop enabled) 11 // available: unique to data computing 12 // unavailable: unique to data computing 13 // failure</p>
     */
    public $ResourceGroupStatus;

    /**
     * @param string $ResourceGroupId <p>Resource group ID</p>
     * @param string $ResourceGroupName <p>Resource group name.</p>
     * @param string $ResourceGroupStatus <p>Resource group status</p><p>Parameter format: 0 // not specified 1 // to be created 2 // creating 3 // running 4 // stopped 5 // stopping 6 // starting 7 // updating 8 // deleting 9 // deleted 10 // user proactive start / automatic startup (task submitted and auto start/stop enabled) 11 // available: unique to data computing 12 // unavailable: unique to data computing 13 // failure</p>
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
        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("ResourceGroupStatus",$param) and $param["ResourceGroupStatus"] !== null) {
            $this->ResourceGroupStatus = $param["ResourceGroupStatus"];
        }
    }
}
