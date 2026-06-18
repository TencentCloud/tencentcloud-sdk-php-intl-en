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
 * Effective machine range, used to specify which machines the credential takes effect on
 *
 * @method integer getExclude() Obtain Whether to exclude the mode
Enumeration values:
0: Inclusion mode (only takes effect on the Real Server in Instances). At this point, Instances is required.
1: Exclusion mode (Machines in Instances do not take effect, remaining machines take effect). At this point, Instances is selectable (Empty list means all machines take effect).
 * @method void setExclude(integer $Exclude) Set Whether to exclude the mode
Enumeration values:
0: Inclusion mode (only takes effect on the Real Server in Instances). At this point, Instances is required.
1: Exclusion mode (Machines in Instances do not take effect, remaining machines take effect). At this point, Instances is selectable (Empty list means all machines take effect).
 * @method array getInstances() Obtain Machine instance ID list. Required when Exclude is 0, means only these machines can access the credential; Option when Exclude is 1, means these machines cannot access the credential (Empty list means all machines take effect).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstances(array $Instances) Set Machine instance ID list. Required when Exclude is 0, means only these machines can access the credential; Option when Exclude is 1, means these machines cannot access the credential (Empty list means all machines take effect).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CredentialEffectScope extends AbstractModel
{
    /**
     * @var integer Whether to exclude the mode
Enumeration values:
0: Inclusion mode (only takes effect on the Real Server in Instances). At this point, Instances is required.
1: Exclusion mode (Machines in Instances do not take effect, remaining machines take effect). At this point, Instances is selectable (Empty list means all machines take effect).
     */
    public $Exclude;

    /**
     * @var array Machine instance ID list. Required when Exclude is 0, means only these machines can access the credential; Option when Exclude is 1, means these machines cannot access the credential (Empty list means all machines take effect).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Instances;

    /**
     * @param integer $Exclude Whether to exclude the mode
Enumeration values:
0: Inclusion mode (only takes effect on the Real Server in Instances). At this point, Instances is required.
1: Exclusion mode (Machines in Instances do not take effect, remaining machines take effect). At this point, Instances is selectable (Empty list means all machines take effect).
     * @param array $Instances Machine instance ID list. Required when Exclude is 0, means only these machines can access the credential; Option when Exclude is 1, means these machines cannot access the credential (Empty list means all machines take effect).
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Exclude",$param) and $param["Exclude"] !== null) {
            $this->Exclude = $param["Exclude"];
        }

        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = $param["Instances"];
        }
    }
}
