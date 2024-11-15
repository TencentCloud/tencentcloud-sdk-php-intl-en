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
 * The origin server groups that need to be bound in a LoadBalancer and their priorities.
 *
 * @method string getPriority() Obtain Priority, in the format of "priority_" + "number". The highest priority is "priority_1". Reference values:
<li>priority_1: first priority.</li>
<li>priority_2: second priority.</li>
<li>priority_3: third priority.</li> You can increase numbers for other priorities, up to "priority_10".
 * @method void setPriority(string $Priority) Set Priority, in the format of "priority_" + "number". The highest priority is "priority_1". Reference values:
<li>priority_1: first priority.</li>
<li>priority_2: second priority.</li>
<li>priority_3: third priority.</li> You can increase numbers for other priorities, up to "priority_10".
 * @method string getOriginGroupId() Obtain Origin server group ID.
 * @method void setOriginGroupId(string $OriginGroupId) Set Origin server group ID.
 */
class OriginGroupInLoadBalancer extends AbstractModel
{
    /**
     * @var string Priority, in the format of "priority_" + "number". The highest priority is "priority_1". Reference values:
<li>priority_1: first priority.</li>
<li>priority_2: second priority.</li>
<li>priority_3: third priority.</li> You can increase numbers for other priorities, up to "priority_10".
     */
    public $Priority;

    /**
     * @var string Origin server group ID.
     */
    public $OriginGroupId;

    /**
     * @param string $Priority Priority, in the format of "priority_" + "number". The highest priority is "priority_1". Reference values:
<li>priority_1: first priority.</li>
<li>priority_2: second priority.</li>
<li>priority_3: third priority.</li> You can increase numbers for other priorities, up to "priority_10".
     * @param string $OriginGroupId Origin server group ID.
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
        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("OriginGroupId",$param) and $param["OriginGroupId"] !== null) {
            $this->OriginGroupId = $param["OriginGroupId"];
        }
    }
}
