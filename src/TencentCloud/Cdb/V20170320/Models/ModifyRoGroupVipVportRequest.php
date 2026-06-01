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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRoGroupVipVport request structure.
 *
 * @method string getUGroupId() Obtain ID of the RO group.
 * @method void setUGroupId(string $UGroupId) Set ID of the RO group.
 * @method string getDstIp() Obtain Target IP address.
 * @method void setDstIp(string $DstIp) Set Target IP address.
 * @method integer getDstPort() Obtain Target Port.
 * @method void setDstPort(integer $DstPort) Set Target Port.
 */
class ModifyRoGroupVipVportRequest extends AbstractModel
{
    /**
     * @var string ID of the RO group.
     */
    public $UGroupId;

    /**
     * @var string Target IP address.
     */
    public $DstIp;

    /**
     * @var integer Target Port.
     */
    public $DstPort;

    /**
     * @param string $UGroupId ID of the RO group.
     * @param string $DstIp Target IP address.
     * @param integer $DstPort Target Port.
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
        if (array_key_exists("UGroupId",$param) and $param["UGroupId"] !== null) {
            $this->UGroupId = $param["UGroupId"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }
    }
}
