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
 * Scope of effective machines, used to specify which machines a credential takes effect on
 *
 * @method integer getExclude() Obtain Whether to exclude mode
Enumeration values:
0: Inclusion mode (only for the Real Server in Instances). At this point, Instances is required.
1: Exclusion mode (machines in Instances do not take effect, remaining machines take effect). At this point, Instances is selectable. An empty list means all machines take effect.
 * @method void setExclude(integer $Exclude) Set Whether to exclude mode
Enumeration values:
0: Inclusion mode (only for the Real Server in Instances). At this point, Instances is required.
1: Exclusion mode (machines in Instances do not take effect, remaining machines take effect). At this point, Instances is selectable. An empty list means all machines take effect.
 * @method array getInstances() Obtain List of machine instance IDs. Required when Exclude is 0, means only these machines can access the credential. Optional when Exclude is 1, means these machines cannot access the credential (Empty list means all machines take effect)
 * @method void setInstances(array $Instances) Set List of machine instance IDs. Required when Exclude is 0, means only these machines can access the credential. Optional when Exclude is 1, means these machines cannot access the credential (Empty list means all machines take effect)
 */
class CredentialEffectScope extends AbstractModel
{
    /**
     * @var integer Whether to exclude mode
Enumeration values:
0: Inclusion mode (only for the Real Server in Instances). At this point, Instances is required.
1: Exclusion mode (machines in Instances do not take effect, remaining machines take effect). At this point, Instances is selectable. An empty list means all machines take effect.
     */
    public $Exclude;

    /**
     * @var array List of machine instance IDs. Required when Exclude is 0, means only these machines can access the credential. Optional when Exclude is 1, means these machines cannot access the credential (Empty list means all machines take effect)
     */
    public $Instances;

    /**
     * @param integer $Exclude Whether to exclude mode
Enumeration values:
0: Inclusion mode (only for the Real Server in Instances). At this point, Instances is required.
1: Exclusion mode (machines in Instances do not take effect, remaining machines take effect). At this point, Instances is selectable. An empty list means all machines take effect.
     * @param array $Instances List of machine instance IDs. Required when Exclude is 0, means only these machines can access the credential. Optional when Exclude is 1, means these machines cannot access the credential (Empty list means all machines take effect)
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
