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
 * CreateUserSyncProvisioning request structure.
 *
 * @method string getZoneId() Obtain Space ID.
 * @method void setZoneId(string $ZoneId) Set Space ID.
 * @method array getUserSyncProvisionings() Obtain CAM user synchronization information.
 * @method void setUserSyncProvisionings(array $UserSyncProvisionings) Set CAM user synchronization information.
 */
class CreateUserSyncProvisioningRequest extends AbstractModel
{
    /**
     * @var string Space ID.
     */
    public $ZoneId;

    /**
     * @var array CAM user synchronization information.
     */
    public $UserSyncProvisionings;

    /**
     * @param string $ZoneId Space ID.
     * @param array $UserSyncProvisionings CAM user synchronization information.
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

        if (array_key_exists("UserSyncProvisionings",$param) and $param["UserSyncProvisionings"] !== null) {
            $this->UserSyncProvisionings = [];
            foreach ($param["UserSyncProvisionings"] as $key => $value){
                $obj = new UserSyncProvisioning();
                $obj->deserialize($value);
                array_push($this->UserSyncProvisionings, $obj);
            }
        }
    }
}
