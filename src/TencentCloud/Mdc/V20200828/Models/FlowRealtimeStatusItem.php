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
 * Stream status information of the real-time stream status query API.
 *
 * @method string getType() Obtain Type. Valid values: `Input`, `Output`.
 * @method void setType(string $Type) Set Type. Valid values: `Input`, `Output`.
 * @method string getInputId() Obtain Input Id. If Type is Input, this field is not empty.
 * @method void setInputId(string $InputId) Set Input Id. If Type is Input, this field is not empty.
 * @method string getOutputId() Obtain Output Id. If Type is Output, this field is not empty.
 * @method void setOutputId(string $OutputId) Set Output Id. If Type is Output, this field is not empty.
 * @method string getFlowId() Obtain Stream Id.
 * @method void setFlowId(string $FlowId) Set Stream Id.
 * @method string getProtocol() Obtain Protocol. SRT | RTMP.
 * @method void setProtocol(string $Protocol) Set Protocol. SRT | RTMP.
 * @method FlowRealtimeStatusCommon getCommonStatus() Obtain Common status information.
 * @method void setCommonStatus(FlowRealtimeStatusCommon $CommonStatus) Set Common status information.
 * @method FlowRealtimeStatusSRT getSRTStatus() Obtain If it is the SRT Protocol, this field will be present.
 * @method void setSRTStatus(FlowRealtimeStatusSRT $SRTStatus) Set If it is the SRT Protocol, this field will be present.
 * @method FlowRealtimeStatusRTMP getRTMPStatus() Obtain If it is the RTMP protocol, this field exists.
 * @method void setRTMPStatus(FlowRealtimeStatusRTMP $RTMPStatus) Set If it is the RTMP protocol, this field exists.
 * @method string getConnectServerIP() Obtain Server IP address.
 * @method void setConnectServerIP(string $ConnectServerIP) Set Server IP address.
 * @method FlowRealtimeStatusRTP getRTPStatus() Obtain If it is the RTP protocol, this field exists.
 * @method void setRTPStatus(FlowRealtimeStatusRTP $RTPStatus) Set If it is the RTP protocol, this field exists.
 */
class FlowRealtimeStatusItem extends AbstractModel
{
    /**
     * @var string Type. Valid values: `Input`, `Output`.
     */
    public $Type;

    /**
     * @var string Input Id. If Type is Input, this field is not empty.
     */
    public $InputId;

    /**
     * @var string Output Id. If Type is Output, this field is not empty.
     */
    public $OutputId;

    /**
     * @var string Stream Id.
     */
    public $FlowId;

    /**
     * @var string Protocol. SRT | RTMP.
     */
    public $Protocol;

    /**
     * @var FlowRealtimeStatusCommon Common status information.
     */
    public $CommonStatus;

    /**
     * @var FlowRealtimeStatusSRT If it is the SRT Protocol, this field will be present.
     */
    public $SRTStatus;

    /**
     * @var FlowRealtimeStatusRTMP If it is the RTMP protocol, this field exists.
     */
    public $RTMPStatus;

    /**
     * @var string Server IP address.
     */
    public $ConnectServerIP;

    /**
     * @var FlowRealtimeStatusRTP If it is the RTP protocol, this field exists.
     */
    public $RTPStatus;

    /**
     * @param string $Type Type. Valid values: `Input`, `Output`.
     * @param string $InputId Input Id. If Type is Input, this field is not empty.
     * @param string $OutputId Output Id. If Type is Output, this field is not empty.
     * @param string $FlowId Stream Id.
     * @param string $Protocol Protocol. SRT | RTMP.
     * @param FlowRealtimeStatusCommon $CommonStatus Common status information.
     * @param FlowRealtimeStatusSRT $SRTStatus If it is the SRT Protocol, this field will be present.
     * @param FlowRealtimeStatusRTMP $RTMPStatus If it is the RTMP protocol, this field exists.
     * @param string $ConnectServerIP Server IP address.
     * @param FlowRealtimeStatusRTP $RTPStatus If it is the RTP protocol, this field exists.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InputId",$param) and $param["InputId"] !== null) {
            $this->InputId = $param["InputId"];
        }

        if (array_key_exists("OutputId",$param) and $param["OutputId"] !== null) {
            $this->OutputId = $param["OutputId"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("CommonStatus",$param) and $param["CommonStatus"] !== null) {
            $this->CommonStatus = new FlowRealtimeStatusCommon();
            $this->CommonStatus->deserialize($param["CommonStatus"]);
        }

        if (array_key_exists("SRTStatus",$param) and $param["SRTStatus"] !== null) {
            $this->SRTStatus = new FlowRealtimeStatusSRT();
            $this->SRTStatus->deserialize($param["SRTStatus"]);
        }

        if (array_key_exists("RTMPStatus",$param) and $param["RTMPStatus"] !== null) {
            $this->RTMPStatus = new FlowRealtimeStatusRTMP();
            $this->RTMPStatus->deserialize($param["RTMPStatus"]);
        }

        if (array_key_exists("ConnectServerIP",$param) and $param["ConnectServerIP"] !== null) {
            $this->ConnectServerIP = $param["ConnectServerIP"];
        }

        if (array_key_exists("RTPStatus",$param) and $param["RTPStatus"] !== null) {
            $this->RTPStatus = new FlowRealtimeStatusRTP();
            $this->RTPStatus->deserialize($param["RTPStatus"]);
        }
    }
}
