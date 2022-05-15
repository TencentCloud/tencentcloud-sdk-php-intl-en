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
 * The real-time status information of a flow.
 *
 * @method string getType() Obtain Whether it is an input or output. Valid values: Input, Output.
 * @method void setType(string $Type) Set Whether it is an input or output. Valid values: Input, Output.
 * @method string getInputId() Obtain The input ID, which is not empty if `Type` is `Input`.
 * @method void setInputId(string $InputId) Set The input ID, which is not empty if `Type` is `Input`.
 * @method string getOutputId() Obtain The output ID, which is not empty if `Type` is `Output`.
 * @method void setOutputId(string $OutputId) Set The output ID, which is not empty if `Type` is `Output`.
 * @method string getFlowId() Obtain The flow ID.
 * @method void setFlowId(string $FlowId) Set The flow ID.
 * @method string getProtocol() Obtain The protocol used. Valid values: SRT, RTP, RTMP.
 * @method void setProtocol(string $Protocol) Set The protocol used. Valid values: SRT, RTP, RTMP.
 * @method FlowRealtimeStatusCommon getCommonStatus() Obtain The common status information.
 * @method void setCommonStatus(FlowRealtimeStatusCommon $CommonStatus) Set The common status information.
 * @method FlowRealtimeStatusSRT getSRTStatus() Obtain This parameter is returned if `Protocol` is `SRT`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSRTStatus(FlowRealtimeStatusSRT $SRTStatus) Set This parameter is returned if `Protocol` is `SRT`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method FlowRealtimeStatusRTMP getRTMPStatus() Obtain This parameter is returned if `Protocol` is `RTMP`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRTMPStatus(FlowRealtimeStatusRTMP $RTMPStatus) Set This parameter is returned if `Protocol` is `RTMP`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getConnectServerIP() Obtain The server IP.
 * @method void setConnectServerIP(string $ConnectServerIP) Set The server IP.
 * @method FlowRealtimeStatusRTP getRTPStatus() Obtain This parameter is returned if the RTP protocol is used.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRTPStatus(FlowRealtimeStatusRTP $RTPStatus) Set This parameter is returned if the RTP protocol is used.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class FlowRealtimeStatusItem extends AbstractModel
{
    /**
     * @var string Whether it is an input or output. Valid values: Input, Output.
     */
    public $Type;

    /**
     * @var string The input ID, which is not empty if `Type` is `Input`.
     */
    public $InputId;

    /**
     * @var string The output ID, which is not empty if `Type` is `Output`.
     */
    public $OutputId;

    /**
     * @var string The flow ID.
     */
    public $FlowId;

    /**
     * @var string The protocol used. Valid values: SRT, RTP, RTMP.
     */
    public $Protocol;

    /**
     * @var FlowRealtimeStatusCommon The common status information.
     */
    public $CommonStatus;

    /**
     * @var FlowRealtimeStatusSRT This parameter is returned if `Protocol` is `SRT`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SRTStatus;

    /**
     * @var FlowRealtimeStatusRTMP This parameter is returned if `Protocol` is `RTMP`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RTMPStatus;

    /**
     * @var string The server IP.
     */
    public $ConnectServerIP;

    /**
     * @var FlowRealtimeStatusRTP This parameter is returned if the RTP protocol is used.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RTPStatus;

    /**
     * @param string $Type Whether it is an input or output. Valid values: Input, Output.
     * @param string $InputId The input ID, which is not empty if `Type` is `Input`.
     * @param string $OutputId The output ID, which is not empty if `Type` is `Output`.
     * @param string $FlowId The flow ID.
     * @param string $Protocol The protocol used. Valid values: SRT, RTP, RTMP.
     * @param FlowRealtimeStatusCommon $CommonStatus The common status information.
     * @param FlowRealtimeStatusSRT $SRTStatus This parameter is returned if `Protocol` is `SRT`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param FlowRealtimeStatusRTMP $RTMPStatus This parameter is returned if `Protocol` is `RTMP`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ConnectServerIP The server IP.
     * @param FlowRealtimeStatusRTP $RTPStatus This parameter is returned if the RTP protocol is used.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
