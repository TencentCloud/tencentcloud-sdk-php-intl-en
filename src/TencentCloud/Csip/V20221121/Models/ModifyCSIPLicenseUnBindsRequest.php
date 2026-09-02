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
 * ModifyCSIPLicenseUnBinds request structure.
 *
 * @method array getInstanceIDs() Obtain <p>Instance ID list to be unbound (can be omitted when IsAll=true)</p>
 * @method void setInstanceIDs(array $InstanceIDs) Set <p>Instance ID list to be unbound (can be omitted when IsAll=true)</p>
 * @method boolean getIsAll() Obtain <p>Whether to unbind all machines bound with host authorization</p>
 * @method void setIsAll(boolean $IsAll) Set <p>Whether to unbind all machines bound with host authorization</p>
 */
class ModifyCSIPLicenseUnBindsRequest extends AbstractModel
{
    /**
     * @var array <p>Instance ID list to be unbound (can be omitted when IsAll=true)</p>
     */
    public $InstanceIDs;

    /**
     * @var boolean <p>Whether to unbind all machines bound with host authorization</p>
     */
    public $IsAll;

    /**
     * @param array $InstanceIDs <p>Instance ID list to be unbound (can be omitted when IsAll=true)</p>
     * @param boolean $IsAll <p>Whether to unbind all machines bound with host authorization</p>
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
        if (array_key_exists("InstanceIDs",$param) and $param["InstanceIDs"] !== null) {
            $this->InstanceIDs = $param["InstanceIDs"];
        }

        if (array_key_exists("IsAll",$param) and $param["IsAll"] !== null) {
            $this->IsAll = $param["IsAll"];
        }
    }
}
