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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Transmit streaming log information.
 *
 * @method integer getTimestamp() Obtain Timestamp in seconds.
 * @method void setTimestamp(integer $Timestamp) Set Timestamp in seconds.
 * @method string getType() Obtain Input/output type. Valid values: `input`, `output`.
 * @method void setType(string $Type) Set Input/output type. Valid values: `input`, `output`.
 * @method string getInputOutputId() Obtain Input or output Id.
 * @method void setInputOutputId(string $InputOutputId) Set Input or output Id.
 * @method string getProtocol() Obtain Protocol.
 * @method void setProtocol(string $Protocol) Set Protocol.
 * @method string getEventCode() Obtain Event code.
 * @method void setEventCode(string $EventCode) Set Event code.
 * @method string getEventMessage() Obtain Event information.
 * @method void setEventMessage(string $EventMessage) Set Event information.
 * @method string getRemoteIp() Obtain Peer IP.
 * @method void setRemoteIp(string $RemoteIp) Set Peer IP.
 * @method string getRemotePort() Obtain Peer port.
 * @method void setRemotePort(string $RemotePort) Set Peer port.
 * @method string getPipeline() Obtain Primary/secondary tunnel. 0: primary, 1: backup.
 * @method void setPipeline(string $Pipeline) Set Primary/secondary tunnel. 0: primary, 1: backup.
 * @method string getInputOutputName() Obtain Input or output name.
 * @method void setInputOutputName(string $InputOutputName) Set Input or output name.
 */
class FlowLogInfo extends AbstractModel
{
    /**
     * @var integer Timestamp in seconds.
     */
    public $Timestamp;

    /**
     * @var string Input/output type. Valid values: `input`, `output`.
     */
    public $Type;

    /**
     * @var string Input or output Id.
     */
    public $InputOutputId;

    /**
     * @var string Protocol.
     */
    public $Protocol;

    /**
     * @var string Event code.
     */
    public $EventCode;

    /**
     * @var string Event information.
     */
    public $EventMessage;

    /**
     * @var string Peer IP.
     */
    public $RemoteIp;

    /**
     * @var string Peer port.
     */
    public $RemotePort;

    /**
     * @var string Primary/secondary tunnel. 0: primary, 1: backup.
     */
    public $Pipeline;

    /**
     * @var string Input or output name.
     */
    public $InputOutputName;

    /**
     * @param integer $Timestamp Timestamp in seconds.
     * @param string $Type Input/output type. Valid values: `input`, `output`.
     * @param string $InputOutputId Input or output Id.
     * @param string $Protocol Protocol.
     * @param string $EventCode Event code.
     * @param string $EventMessage Event information.
     * @param string $RemoteIp Peer IP.
     * @param string $RemotePort Peer port.
     * @param string $Pipeline Primary/secondary tunnel. 0: primary, 1: backup.
     * @param string $InputOutputName Input or output name.
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InputOutputId",$param) and $param["InputOutputId"] !== null) {
            $this->InputOutputId = $param["InputOutputId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("EventCode",$param) and $param["EventCode"] !== null) {
            $this->EventCode = $param["EventCode"];
        }

        if (array_key_exists("EventMessage",$param) and $param["EventMessage"] !== null) {
            $this->EventMessage = $param["EventMessage"];
        }

        if (array_key_exists("RemoteIp",$param) and $param["RemoteIp"] !== null) {
            $this->RemoteIp = $param["RemoteIp"];
        }

        if (array_key_exists("RemotePort",$param) and $param["RemotePort"] !== null) {
            $this->RemotePort = $param["RemotePort"];
        }

        if (array_key_exists("Pipeline",$param) and $param["Pipeline"] !== null) {
            $this->Pipeline = $param["Pipeline"];
        }

        if (array_key_exists("InputOutputName",$param) and $param["InputOutputName"] !== null) {
            $this->InputOutputName = $param["InputOutputName"];
        }
    }
}
