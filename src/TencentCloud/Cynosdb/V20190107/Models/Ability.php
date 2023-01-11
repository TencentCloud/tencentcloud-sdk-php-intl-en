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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Features supported by the cluster
 *
 * @method string getIsSupportSlaveZone() Obtain Whether secondary AZ is supported
 * @method void setIsSupportSlaveZone(string $IsSupportSlaveZone) Set Whether secondary AZ is supported
 * @method string getNonsupportSlaveZoneReason() Obtain The reason why secondary AZ is not supported
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNonsupportSlaveZoneReason(string $NonsupportSlaveZoneReason) Set The reason why secondary AZ is not supported
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsSupportRo() Obtain Whether read-only instance is supported
 * @method void setIsSupportRo(string $IsSupportRo) Set Whether read-only instance is supported
 * @method string getNonsupportRoReason() Obtain The reason why read-only instance is not supported
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNonsupportRoReason(string $NonsupportRoReason) Set The reason why read-only instance is not supported
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Ability extends AbstractModel
{
    /**
     * @var string Whether secondary AZ is supported
     */
    public $IsSupportSlaveZone;

    /**
     * @var string The reason why secondary AZ is not supported
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NonsupportSlaveZoneReason;

    /**
     * @var string Whether read-only instance is supported
     */
    public $IsSupportRo;

    /**
     * @var string The reason why read-only instance is not supported
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NonsupportRoReason;

    /**
     * @param string $IsSupportSlaveZone Whether secondary AZ is supported
     * @param string $NonsupportSlaveZoneReason The reason why secondary AZ is not supported
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsSupportRo Whether read-only instance is supported
     * @param string $NonsupportRoReason The reason why read-only instance is not supported
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
        if (array_key_exists("IsSupportSlaveZone",$param) and $param["IsSupportSlaveZone"] !== null) {
            $this->IsSupportSlaveZone = $param["IsSupportSlaveZone"];
        }

        if (array_key_exists("NonsupportSlaveZoneReason",$param) and $param["NonsupportSlaveZoneReason"] !== null) {
            $this->NonsupportSlaveZoneReason = $param["NonsupportSlaveZoneReason"];
        }

        if (array_key_exists("IsSupportRo",$param) and $param["IsSupportRo"] !== null) {
            $this->IsSupportRo = $param["IsSupportRo"];
        }

        if (array_key_exists("NonsupportRoReason",$param) and $param["NonsupportRoReason"] !== null) {
            $this->NonsupportRoReason = $param["NonsupportRoReason"];
        }
    }
}
