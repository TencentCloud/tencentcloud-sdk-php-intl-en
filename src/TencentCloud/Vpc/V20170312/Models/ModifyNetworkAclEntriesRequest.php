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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNetworkAclEntries request structure.
 *
 * @method string getNetworkAclId() Obtain Network ACL instance ID, such as `acl-12345678`.
 * @method void setNetworkAclId(string $NetworkAclId) Set Network ACL instance ID, such as `acl-12345678`.
 * @method NetworkAclEntrySet getNetworkAclEntrySet() Obtain Network ACL rule set. `NetworkAclEntrySet` and `NetworkAclQuintupleSet` cannot be entered at the same time.
 * @method void setNetworkAclEntrySet(NetworkAclEntrySet $NetworkAclEntrySet) Set Network ACL rule set. `NetworkAclEntrySet` and `NetworkAclQuintupleSet` cannot be entered at the same time.
 * @method NetworkAclQuintupleEntries getNetworkAclQuintupleSet() Obtain Network ACL quintuple rule set. `NetworkAclEntrySet` and `NetworkAclQuintupleSet` cannot be entered at the same time.
 * @method void setNetworkAclQuintupleSet(NetworkAclQuintupleEntries $NetworkAclQuintupleSet) Set Network ACL quintuple rule set. `NetworkAclEntrySet` and `NetworkAclQuintupleSet` cannot be entered at the same time.
 */
class ModifyNetworkAclEntriesRequest extends AbstractModel
{
    /**
     * @var string Network ACL instance ID, such as `acl-12345678`.
     */
    public $NetworkAclId;

    /**
     * @var NetworkAclEntrySet Network ACL rule set. `NetworkAclEntrySet` and `NetworkAclQuintupleSet` cannot be entered at the same time.
     */
    public $NetworkAclEntrySet;

    /**
     * @var NetworkAclQuintupleEntries Network ACL quintuple rule set. `NetworkAclEntrySet` and `NetworkAclQuintupleSet` cannot be entered at the same time.
     */
    public $NetworkAclQuintupleSet;

    /**
     * @param string $NetworkAclId Network ACL instance ID, such as `acl-12345678`.
     * @param NetworkAclEntrySet $NetworkAclEntrySet Network ACL rule set. `NetworkAclEntrySet` and `NetworkAclQuintupleSet` cannot be entered at the same time.
     * @param NetworkAclQuintupleEntries $NetworkAclQuintupleSet Network ACL quintuple rule set. `NetworkAclEntrySet` and `NetworkAclQuintupleSet` cannot be entered at the same time.
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
        if (array_key_exists("NetworkAclId",$param) and $param["NetworkAclId"] !== null) {
            $this->NetworkAclId = $param["NetworkAclId"];
        }

        if (array_key_exists("NetworkAclEntrySet",$param) and $param["NetworkAclEntrySet"] !== null) {
            $this->NetworkAclEntrySet = new NetworkAclEntrySet();
            $this->NetworkAclEntrySet->deserialize($param["NetworkAclEntrySet"]);
        }

        if (array_key_exists("NetworkAclQuintupleSet",$param) and $param["NetworkAclQuintupleSet"] !== null) {
            $this->NetworkAclQuintupleSet = new NetworkAclQuintupleEntries();
            $this->NetworkAclQuintupleSet->deserialize($param["NetworkAclQuintupleSet"]);
        }
    }
}
