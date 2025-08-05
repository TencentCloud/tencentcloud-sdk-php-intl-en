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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecurityIPGroup request structure.
 *
 * @method string getZoneId() Obtain Site ID.
 * @method void setZoneId(string $ZoneId) Set Site ID.
 * @method IPGroup getIPGroup() Obtain IP group configuration.
 * @method void setIPGroup(IPGroup $IPGroup) Set IP group configuration.
 * @method string getMode() Obtain Operation type. valid values: <li>`append`: add new IP addresses or set scheduled expiration time to `IPGroup`;</li> <li>`remove`: delete specified IP addresses or their scheduled expiration time from `IPGroup`;</li> <li>`update`: replace all Content of `Content` or `ExpireInfo` in `IPGroup` and modify the IPGroup name.</li>  notes for `append` operation: <li>when adding a scheduled expiration time for an IP or range, it must be later than the current time. if the IP or range does not exist in the group, it must be added to the `Content` parameter simultaneously. if the IP or range already has an expiration time, the new time will overwrite the original one.</li>  notes for `remove` operation: <li>when deleting an IP or range, related unexpired scheduled expiration times will also be deleted;</li> <li>when deleting a scheduled expiration time, only currently unexpired times can be removed.</li>  notes for `update` operation: <li>when replacing `Content`, unexpired times of ips or ranges not in `Content` will be deleted;</li> <li>when replacing `IPExpireInfo`, the ips or ranges in `IPExpireInfo` must exist in `Content` or the IP group.</li>.
 * @method void setMode(string $Mode) Set Operation type. valid values: <li>`append`: add new IP addresses or set scheduled expiration time to `IPGroup`;</li> <li>`remove`: delete specified IP addresses or their scheduled expiration time from `IPGroup`;</li> <li>`update`: replace all Content of `Content` or `ExpireInfo` in `IPGroup` and modify the IPGroup name.</li>  notes for `append` operation: <li>when adding a scheduled expiration time for an IP or range, it must be later than the current time. if the IP or range does not exist in the group, it must be added to the `Content` parameter simultaneously. if the IP or range already has an expiration time, the new time will overwrite the original one.</li>  notes for `remove` operation: <li>when deleting an IP or range, related unexpired scheduled expiration times will also be deleted;</li> <li>when deleting a scheduled expiration time, only currently unexpired times can be removed.</li>  notes for `update` operation: <li>when replacing `Content`, unexpired times of ips or ranges not in `Content` will be deleted;</li> <li>when replacing `IPExpireInfo`, the ips or ranges in `IPExpireInfo` must exist in `Content` or the IP group.</li>.
 */
class ModifySecurityIPGroupRequest extends AbstractModel
{
    /**
     * @var string Site ID.
     */
    public $ZoneId;

    /**
     * @var IPGroup IP group configuration.
     */
    public $IPGroup;

    /**
     * @var string Operation type. valid values: <li>`append`: add new IP addresses or set scheduled expiration time to `IPGroup`;</li> <li>`remove`: delete specified IP addresses or their scheduled expiration time from `IPGroup`;</li> <li>`update`: replace all Content of `Content` or `ExpireInfo` in `IPGroup` and modify the IPGroup name.</li>  notes for `append` operation: <li>when adding a scheduled expiration time for an IP or range, it must be later than the current time. if the IP or range does not exist in the group, it must be added to the `Content` parameter simultaneously. if the IP or range already has an expiration time, the new time will overwrite the original one.</li>  notes for `remove` operation: <li>when deleting an IP or range, related unexpired scheduled expiration times will also be deleted;</li> <li>when deleting a scheduled expiration time, only currently unexpired times can be removed.</li>  notes for `update` operation: <li>when replacing `Content`, unexpired times of ips or ranges not in `Content` will be deleted;</li> <li>when replacing `IPExpireInfo`, the ips or ranges in `IPExpireInfo` must exist in `Content` or the IP group.</li>.
     */
    public $Mode;

    /**
     * @param string $ZoneId Site ID.
     * @param IPGroup $IPGroup IP group configuration.
     * @param string $Mode Operation type. valid values: <li>`append`: add new IP addresses or set scheduled expiration time to `IPGroup`;</li> <li>`remove`: delete specified IP addresses or their scheduled expiration time from `IPGroup`;</li> <li>`update`: replace all Content of `Content` or `ExpireInfo` in `IPGroup` and modify the IPGroup name.</li>  notes for `append` operation: <li>when adding a scheduled expiration time for an IP or range, it must be later than the current time. if the IP or range does not exist in the group, it must be added to the `Content` parameter simultaneously. if the IP or range already has an expiration time, the new time will overwrite the original one.</li>  notes for `remove` operation: <li>when deleting an IP or range, related unexpired scheduled expiration times will also be deleted;</li> <li>when deleting a scheduled expiration time, only currently unexpired times can be removed.</li>  notes for `update` operation: <li>when replacing `Content`, unexpired times of ips or ranges not in `Content` will be deleted;</li> <li>when replacing `IPExpireInfo`, the ips or ranges in `IPExpireInfo` must exist in `Content` or the IP group.</li>.
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

        if (array_key_exists("IPGroup",$param) and $param["IPGroup"] !== null) {
            $this->IPGroup = new IPGroup();
            $this->IPGroup->deserialize($param["IPGroup"]);
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
