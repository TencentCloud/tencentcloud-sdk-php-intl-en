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
 * ModifyCSIPLicenseBinds request structure.
 *
 * @method string getResourceId() Obtain <p>Resource ID (designated binding to which order)</p>
 * @method void setResourceId(string $ResourceId) Set <p>Resource ID (designated binding to which order)</p>
 * @method array getInstanceIDs() Obtain <p>List of instance IDs to be bound (optional when IsAll=true)</p>
 * @method void setInstanceIDs(array $InstanceIDs) Set <p>List of instance IDs to be bound (optional when IsAll=true)</p>
 * @method boolean getIsAll() Obtain <p>Whether to bind all unbound machines (when true, the difference is automatically calculated)</p>
 * @method void setIsAll(boolean $IsAll) Set <p>Whether to bind all unbound machines (when true, the difference is automatically calculated)</p>
 * @method string getLicenseType() Obtain <p>Authorized version. Enumeration values: ENTERPRISE_HP (flagship edition) / ADVANCED_HP (pro edition) / RASP (RASP). It is recommended to use this parameter. Choose either this parameter or InquireKey.</p>
 * @method void setLicenseType(string $LicenseType) Set <p>Authorized version. Enumeration values: ENTERPRISE_HP (flagship edition) / ADVANCED_HP (pro edition) / RASP (RASP). It is recommended to use this parameter. Choose either this parameter or InquireKey.</p>
 */
class ModifyCSIPLicenseBindsRequest extends AbstractModel
{
    /**
     * @var string <p>Resource ID (designated binding to which order)</p>
     */
    public $ResourceId;

    /**
     * @var array <p>List of instance IDs to be bound (optional when IsAll=true)</p>
     */
    public $InstanceIDs;

    /**
     * @var boolean <p>Whether to bind all unbound machines (when true, the difference is automatically calculated)</p>
     */
    public $IsAll;

    /**
     * @var string <p>Authorized version. Enumeration values: ENTERPRISE_HP (flagship edition) / ADVANCED_HP (pro edition) / RASP (RASP). It is recommended to use this parameter. Choose either this parameter or InquireKey.</p>
     */
    public $LicenseType;

    /**
     * @param string $ResourceId <p>Resource ID (designated binding to which order)</p>
     * @param array $InstanceIDs <p>List of instance IDs to be bound (optional when IsAll=true)</p>
     * @param boolean $IsAll <p>Whether to bind all unbound machines (when true, the difference is automatically calculated)</p>
     * @param string $LicenseType <p>Authorized version. Enumeration values: ENTERPRISE_HP (flagship edition) / ADVANCED_HP (pro edition) / RASP (RASP). It is recommended to use this parameter. Choose either this parameter or InquireKey.</p>
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("InstanceIDs",$param) and $param["InstanceIDs"] !== null) {
            $this->InstanceIDs = $param["InstanceIDs"];
        }

        if (array_key_exists("IsAll",$param) and $param["IsAll"] !== null) {
            $this->IsAll = $param["IsAll"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }
    }
}
