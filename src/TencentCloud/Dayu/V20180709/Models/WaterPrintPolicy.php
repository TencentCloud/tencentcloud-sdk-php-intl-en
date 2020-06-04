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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Watermarking policy parameter
 *
 * @method array getTcpPortList() Obtain TCP port range, such as ["2000-3000","3500-4000"]
 * @method void setTcpPortList(array $TcpPortList) Set TCP port range, such as ["2000-3000","3500-4000"]
 * @method array getUdpPortList() Obtain UDP port range, such as ["2000-3000","3500-4000"]
 * @method void setUdpPortList(array $UdpPortList) Set UDP port range, such as ["2000-3000","3500-4000"]
 * @method integer getOffset() Obtain Watermark offset. Value range: [0, 100)
 * @method void setOffset(integer $Offset) Set Watermark offset. Value range: [0, 100)
 * @method integer getRemoveSwitch() Obtain Whether to automatically remove. Valid values: [0 (no), 1 (yes)]
 * @method void setRemoveSwitch(integer $RemoveSwitch) Set Whether to automatically remove. Valid values: [0 (no), 1 (yes)]
 * @method integer getOpenStatus() Obtain Whether it is enabled. Valid values: [0 (no), 1 (yes)]
 * @method void setOpenStatus(integer $OpenStatus) Set Whether it is enabled. Valid values: [0 (no), 1 (yes)]
 */
class WaterPrintPolicy extends AbstractModel
{
    /**
     * @var array TCP port range, such as ["2000-3000","3500-4000"]
     */
    public $TcpPortList;

    /**
     * @var array UDP port range, such as ["2000-3000","3500-4000"]
     */
    public $UdpPortList;

    /**
     * @var integer Watermark offset. Value range: [0, 100)
     */
    public $Offset;

    /**
     * @var integer Whether to automatically remove. Valid values: [0 (no), 1 (yes)]
     */
    public $RemoveSwitch;

    /**
     * @var integer Whether it is enabled. Valid values: [0 (no), 1 (yes)]
     */
    public $OpenStatus;

    /**
     * @param array $TcpPortList TCP port range, such as ["2000-3000","3500-4000"]
     * @param array $UdpPortList UDP port range, such as ["2000-3000","3500-4000"]
     * @param integer $Offset Watermark offset. Value range: [0, 100)
     * @param integer $RemoveSwitch Whether to automatically remove. Valid values: [0 (no), 1 (yes)]
     * @param integer $OpenStatus Whether it is enabled. Valid values: [0 (no), 1 (yes)]
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
        if (array_key_exists("TcpPortList",$param) and $param["TcpPortList"] !== null) {
            $this->TcpPortList = $param["TcpPortList"];
        }

        if (array_key_exists("UdpPortList",$param) and $param["UdpPortList"] !== null) {
            $this->UdpPortList = $param["UdpPortList"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("RemoveSwitch",$param) and $param["RemoveSwitch"] !== null) {
            $this->RemoveSwitch = $param["RemoveSwitch"];
        }

        if (array_key_exists("OpenStatus",$param) and $param["OpenStatus"] !== null) {
            $this->OpenStatus = $param["OpenStatus"];
        }
    }
}
