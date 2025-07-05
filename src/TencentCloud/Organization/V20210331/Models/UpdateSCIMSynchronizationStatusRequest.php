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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateSCIMSynchronizationStatus request structure.
 *
 * @method string getZoneId() Obtain Space ID, which starts with the z- prefix, followed by 12 random digits/lowercase letters.
 * @method void setZoneId(string $ZoneId) Set Space ID, which starts with the z- prefix, followed by 12 random digits/lowercase letters.
 * @method string getSCIMSynchronizationStatus() Obtain SCIM synchronization status. Enabled: enabled. Disabled: disabled.
 * @method void setSCIMSynchronizationStatus(string $SCIMSynchronizationStatus) Set SCIM synchronization status. Enabled: enabled. Disabled: disabled.
 */
class UpdateSCIMSynchronizationStatusRequest extends AbstractModel
{
    /**
     * @var string Space ID, which starts with the z- prefix, followed by 12 random digits/lowercase letters.
     */
    public $ZoneId;

    /**
     * @var string SCIM synchronization status. Enabled: enabled. Disabled: disabled.
     */
    public $SCIMSynchronizationStatus;

    /**
     * @param string $ZoneId Space ID, which starts with the z- prefix, followed by 12 random digits/lowercase letters.
     * @param string $SCIMSynchronizationStatus SCIM synchronization status. Enabled: enabled. Disabled: disabled.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("SCIMSynchronizationStatus",$param) and $param["SCIMSynchronizationStatus"] !== null) {
            $this->SCIMSynchronizationStatus = $param["SCIMSynchronizationStatus"];
        }
    }
}
