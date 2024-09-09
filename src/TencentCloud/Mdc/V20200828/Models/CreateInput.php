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
 * Configuration information of the created input.
 *
 * @method string getInputName() Obtain Input name, which can contain 1 to 32 letters, digits, and underscores.
 * @method void setInputName(string $InputName) Set Input name, which can contain 1 to 32 letters, digits, and underscores.
 * @method string getProtocol() Obtain Input protocol. Valid values: `SRT`, `RTP`, `RTMP`, `RTMP_PULL`, `RTSP_PULL `, `HLS_PULL`.
 * @method void setProtocol(string $Protocol) Set Input protocol. Valid values: `SRT`, `RTP`, `RTMP`, `RTMP_PULL`, `RTSP_PULL `, `HLS_PULL`.
 * @method string getDescription() Obtain Input description. Length: [0, 255].
 * @method void setDescription(string $Description) Set Input description. Length: [0, 255].
 * @method array getAllowIpList() Obtain Allowlist of input IPs in CIDR format.
 * @method void setAllowIpList(array $AllowIpList) Set Allowlist of input IPs in CIDR format.
 * @method CreateInputSRTSettings getSRTSettings() Obtain SRT configuration information of input.
 * @method void setSRTSettings(CreateInputSRTSettings $SRTSettings) Set SRT configuration information of input.
 * @method CreateInputRTPSettings getRTPSettings() Obtain RTP configuration information of input.
 * @method void setRTPSettings(CreateInputRTPSettings $RTPSettings) Set RTP configuration information of input.
 * @method string getFailOver() Obtain Input failover. Valid values: `OPEN`, `CLOSE` (default)
 * @method void setFailOver(string $FailOver) Set Input failover. Valid values: `OPEN`, `CLOSE` (default)
 * @method CreateInputRTMPPullSettings getRTMPPullSettings() Obtain Input RTMP_PULL configuration information.
 * @method void setRTMPPullSettings(CreateInputRTMPPullSettings $RTMPPullSettings) Set Input RTMP_PULL configuration information.
 * @method CreateInputRTSPPullSettings getRTSPPullSettings() Obtain Input RTSP_PULL configuration information.
 * @method void setRTSPPullSettings(CreateInputRTSPPullSettings $RTSPPullSettings) Set Input RTSP_PULL configuration information.
 * @method CreateInputHLSPullSettings getHLSPullSettings() Obtain Input HLS_PULL configuration information.
 * @method void setHLSPullSettings(CreateInputHLSPullSettings $HLSPullSettings) Set Input HLS_PULL configuration information.
 * @method ResilientStreamConf getResilientStream() Obtain Delayed broadcast smooth streaming configuration information.
 * @method void setResilientStream(ResilientStreamConf $ResilientStream) Set Delayed broadcast smooth streaming configuration information.
 * @method array getSecurityGroupIds() Obtain The bound security group IDs.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set The bound security group IDs.
 * @method array getZones() Obtain Availability zone, optional. If disaster recovery is enabled, you must enter two different availability zones. Otherwise, you can only enter one availability zone at most.
 * @method void setZones(array $Zones) Set Availability zone, optional. If disaster recovery is enabled, you must enter two different availability zones. Otherwise, you can only enter one availability zone at most.
 */
class CreateInput extends AbstractModel
{
    /**
     * @var string Input name, which can contain 1 to 32 letters, digits, and underscores.
     */
    public $InputName;

    /**
     * @var string Input protocol. Valid values: `SRT`, `RTP`, `RTMP`, `RTMP_PULL`, `RTSP_PULL `, `HLS_PULL`.
     */
    public $Protocol;

    /**
     * @var string Input description. Length: [0, 255].
     */
    public $Description;

    /**
     * @var array Allowlist of input IPs in CIDR format.
     */
    public $AllowIpList;

    /**
     * @var CreateInputSRTSettings SRT configuration information of input.
     */
    public $SRTSettings;

    /**
     * @var CreateInputRTPSettings RTP configuration information of input.
     */
    public $RTPSettings;

    /**
     * @var string Input failover. Valid values: `OPEN`, `CLOSE` (default)
     */
    public $FailOver;

    /**
     * @var CreateInputRTMPPullSettings Input RTMP_PULL configuration information.
     */
    public $RTMPPullSettings;

    /**
     * @var CreateInputRTSPPullSettings Input RTSP_PULL configuration information.
     */
    public $RTSPPullSettings;

    /**
     * @var CreateInputHLSPullSettings Input HLS_PULL configuration information.
     */
    public $HLSPullSettings;

    /**
     * @var ResilientStreamConf Delayed broadcast smooth streaming configuration information.
     */
    public $ResilientStream;

    /**
     * @var array The bound security group IDs.
     */
    public $SecurityGroupIds;

    /**
     * @var array Availability zone, optional. If disaster recovery is enabled, you must enter two different availability zones. Otherwise, you can only enter one availability zone at most.
     */
    public $Zones;

    /**
     * @param string $InputName Input name, which can contain 1 to 32 letters, digits, and underscores.
     * @param string $Protocol Input protocol. Valid values: `SRT`, `RTP`, `RTMP`, `RTMP_PULL`, `RTSP_PULL `, `HLS_PULL`.
     * @param string $Description Input description. Length: [0, 255].
     * @param array $AllowIpList Allowlist of input IPs in CIDR format.
     * @param CreateInputSRTSettings $SRTSettings SRT configuration information of input.
     * @param CreateInputRTPSettings $RTPSettings RTP configuration information of input.
     * @param string $FailOver Input failover. Valid values: `OPEN`, `CLOSE` (default)
     * @param CreateInputRTMPPullSettings $RTMPPullSettings Input RTMP_PULL configuration information.
     * @param CreateInputRTSPPullSettings $RTSPPullSettings Input RTSP_PULL configuration information.
     * @param CreateInputHLSPullSettings $HLSPullSettings Input HLS_PULL configuration information.
     * @param ResilientStreamConf $ResilientStream Delayed broadcast smooth streaming configuration information.
     * @param array $SecurityGroupIds The bound security group IDs.
     * @param array $Zones Availability zone, optional. If disaster recovery is enabled, you must enter two different availability zones. Otherwise, you can only enter one availability zone at most.
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
        if (array_key_exists("InputName",$param) and $param["InputName"] !== null) {
            $this->InputName = $param["InputName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AllowIpList",$param) and $param["AllowIpList"] !== null) {
            $this->AllowIpList = $param["AllowIpList"];
        }

        if (array_key_exists("SRTSettings",$param) and $param["SRTSettings"] !== null) {
            $this->SRTSettings = new CreateInputSRTSettings();
            $this->SRTSettings->deserialize($param["SRTSettings"]);
        }

        if (array_key_exists("RTPSettings",$param) and $param["RTPSettings"] !== null) {
            $this->RTPSettings = new CreateInputRTPSettings();
            $this->RTPSettings->deserialize($param["RTPSettings"]);
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("RTMPPullSettings",$param) and $param["RTMPPullSettings"] !== null) {
            $this->RTMPPullSettings = new CreateInputRTMPPullSettings();
            $this->RTMPPullSettings->deserialize($param["RTMPPullSettings"]);
        }

        if (array_key_exists("RTSPPullSettings",$param) and $param["RTSPPullSettings"] !== null) {
            $this->RTSPPullSettings = new CreateInputRTSPPullSettings();
            $this->RTSPPullSettings->deserialize($param["RTSPPullSettings"]);
        }

        if (array_key_exists("HLSPullSettings",$param) and $param["HLSPullSettings"] !== null) {
            $this->HLSPullSettings = new CreateInputHLSPullSettings();
            $this->HLSPullSettings->deserialize($param["HLSPullSettings"]);
        }

        if (array_key_exists("ResilientStream",$param) and $param["ResilientStream"] !== null) {
            $this->ResilientStream = new ResilientStreamConf();
            $this->ResilientStream->deserialize($param["ResilientStream"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }
    }
}
