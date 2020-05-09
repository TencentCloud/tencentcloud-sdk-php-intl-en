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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySubscribeVipVport request structure.
 *
 * @method string getSubscribeId() Obtain Data subscription instance ID
 * @method void setSubscribeId(string $SubscribeId) Set Data subscription instance ID
 * @method string getDstUniqSubnetId() Obtain Specified destination subnet. If this parameter is passed in, `DstIp` must be in the destination subnet
 * @method void setDstUniqSubnetId(string $DstUniqSubnetId) Set Specified destination subnet. If this parameter is passed in, `DstIp` must be in the destination subnet
 * @method string getDstIp() Obtain Target IP. Either this field or `DstPort` must be passed in
 * @method void setDstIp(string $DstIp) Set Target IP. Either this field or `DstPort` must be passed in
 * @method integer getDstPort() Obtain Target port. Value range: [1025-65535]
 * @method void setDstPort(integer $DstPort) Set Target port. Value range: [1025-65535]
 */
class ModifySubscribeVipVportRequest extends AbstractModel
{
    /**
     * @var string Data subscription instance ID
     */
    public $SubscribeId;

    /**
     * @var string Specified destination subnet. If this parameter is passed in, `DstIp` must be in the destination subnet
     */
    public $DstUniqSubnetId;

    /**
     * @var string Target IP. Either this field or `DstPort` must be passed in
     */
    public $DstIp;

    /**
     * @var integer Target port. Value range: [1025-65535]
     */
    public $DstPort;

    /**
     * @param string $SubscribeId Data subscription instance ID
     * @param string $DstUniqSubnetId Specified destination subnet. If this parameter is passed in, `DstIp` must be in the destination subnet
     * @param string $DstIp Target IP. Either this field or `DstPort` must be passed in
     * @param integer $DstPort Target port. Value range: [1025-65535]
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("DstUniqSubnetId",$param) and $param["DstUniqSubnetId"] !== null) {
            $this->DstUniqSubnetId = $param["DstUniqSubnetId"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }
    }
}
