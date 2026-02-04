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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Five tuple filter rule object for traffic mirroring.
 *
 * @method string getSrcNet() Obtain Source network segment of the filter rule.
 * @method void setSrcNet(string $SrcNet) Set Source network segment of the filter rule.
 * @method string getDstNet() Obtain Destination network segment of the filter rule.
 * @method void setDstNet(string $DstNet) Set Destination network segment of the filter rule.
 * @method string getProtocol() Obtain Protocol of the filter rule.
 * @method void setProtocol(string $Protocol) Set Protocol of the filter rule.
 * @method string getSrcPort() Obtain Source port of the filter rule. Default value: 1–65535.
 * @method void setSrcPort(string $SrcPort) Set Source port of the filter rule. Default value: 1–65535.
 * @method string getDstPort() Obtain Destination port of the filter rule. Default value: 1–65535.
 * @method void setDstPort(string $DstPort) Set Destination port of the filter rule. Default value: 1–65535.
 */
class TrafficMirrorFilter extends AbstractModel
{
    /**
     * @var string Source network segment of the filter rule.
     */
    public $SrcNet;

    /**
     * @var string Destination network segment of the filter rule.
     */
    public $DstNet;

    /**
     * @var string Protocol of the filter rule.
     */
    public $Protocol;

    /**
     * @var string Source port of the filter rule. Default value: 1–65535.
     */
    public $SrcPort;

    /**
     * @var string Destination port of the filter rule. Default value: 1–65535.
     */
    public $DstPort;

    /**
     * @param string $SrcNet Source network segment of the filter rule.
     * @param string $DstNet Destination network segment of the filter rule.
     * @param string $Protocol Protocol of the filter rule.
     * @param string $SrcPort Source port of the filter rule. Default value: 1–65535.
     * @param string $DstPort Destination port of the filter rule. Default value: 1–65535.
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
        if (array_key_exists("SrcNet",$param) and $param["SrcNet"] !== null) {
            $this->SrcNet = $param["SrcNet"];
        }

        if (array_key_exists("DstNet",$param) and $param["DstNet"] !== null) {
            $this->DstNet = $param["DstNet"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("SrcPort",$param) and $param["SrcPort"] !== null) {
            $this->SrcPort = $param["SrcPort"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }
    }
}
