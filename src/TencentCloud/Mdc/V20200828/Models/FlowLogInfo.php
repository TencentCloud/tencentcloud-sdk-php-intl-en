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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The logs of a flow.
 *
 * @method integer getTimestamp() Obtain The timestamp (seconds).
 * @method void setTimestamp(integer $Timestamp) Set The timestamp (seconds).
 * @method string getType() Obtain Whether it is an input or output.
 * @method void setType(string $Type) Set Whether it is an input or output.
 * @method string getInputOutputId() Obtain The input or output ID.
 * @method void setInputOutputId(string $InputOutputId) Set The input or output ID.
 * @method string getProtocol() Obtain The protocol.
 * @method void setProtocol(string $Protocol) Set The protocol.
 * @method string getEventCode() Obtain The event code.
 * @method void setEventCode(string $EventCode) Set The event code.
 * @method string getEventMessage() Obtain The event information.
 * @method void setEventMessage(string $EventMessage) Set The event information.
 * @method string getRemoteIp() Obtain The peer IP.
 * @method void setRemoteIp(string $RemoteIp) Set The peer IP.
 * @method string getRemotePort() Obtain The peer port.
 * @method void setRemotePort(string $RemotePort) Set The peer port.
 * @method string getPipeline() Obtain Whether it is a primary or backup pipeline. Valid values: 0 (primary), 1 (backup).
 * @method void setPipeline(string $Pipeline) Set Whether it is a primary or backup pipeline. Valid values: 0 (primary), 1 (backup).
 * @method string getInputOutputName() Obtain The input or output name.
 * @method void setInputOutputName(string $InputOutputName) Set The input or output name.
 */
class FlowLogInfo extends AbstractModel
{
    /**
     * @var integer The timestamp (seconds).
     */
    public $Timestamp;

    /**
     * @var string Whether it is an input or output.
     */
    public $Type;

    /**
     * @var string The input or output ID.
     */
    public $InputOutputId;

    /**
     * @var string The protocol.
     */
    public $Protocol;

    /**
     * @var string The event code.
     */
    public $EventCode;

    /**
     * @var string The event information.
     */
    public $EventMessage;

    /**
     * @var string The peer IP.
     */
    public $RemoteIp;

    /**
     * @var string The peer port.
     */
    public $RemotePort;

    /**
     * @var string Whether it is a primary or backup pipeline. Valid values: 0 (primary), 1 (backup).
     */
    public $Pipeline;

    /**
     * @var string The input or output name.
     */
    public $InputOutputName;

    /**
     * @param integer $Timestamp The timestamp (seconds).
     * @param string $Type Whether it is an input or output.
     * @param string $InputOutputId The input or output ID.
     * @param string $Protocol The protocol.
     * @param string $EventCode The event code.
     * @param string $EventMessage The event information.
     * @param string $RemoteIp The peer IP.
     * @param string $RemotePort The peer port.
     * @param string $Pipeline Whether it is a primary or backup pipeline. Valid values: 0 (primary), 1 (backup).
     * @param string $InputOutputName The input or output name.
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
