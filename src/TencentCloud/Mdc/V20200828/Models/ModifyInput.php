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
 * The new input configuration.
 *
 * @method string getInputId() Obtain The input ID.
 * @method void setInputId(string $InputId) Set The input ID.
 * @method string getInputName() Obtain The input name.
 * @method void setInputName(string $InputName) Set The input name.
 * @method string getDescription() Obtain The description of the input.
 * @method void setDescription(string $Description) Set The description of the input.
 * @method array getAllowIpList() Obtain The IP addresses (CIDR) allowed to push streams.
 * @method void setAllowIpList(array $AllowIpList) Set The IP addresses (CIDR) allowed to push streams.
 * @method CreateInputSRTSettings getSRTSettings() Obtain The SRT configuration information.
 * @method void setSRTSettings(CreateInputSRTSettings $SRTSettings) Set The SRT configuration information.
 * @method CreateInputRTPSettings getRTPSettings() Obtain The RTP configuration information.
 * @method void setRTPSettings(CreateInputRTPSettings $RTPSettings) Set The RTP configuration information.
 * @method string getProtocol() Obtain The input protocol. Valid values: SRT, RTP, RTMP.
If there is an RTP input, the output must be RTP.
If there is an RTMP input, the output must be SRT or RTMP.
If there is an SRT input, the output must be SRT.
 * @method void setProtocol(string $Protocol) Set The input protocol. Valid values: SRT, RTP, RTMP.
If there is an RTP input, the output must be RTP.
If there is an RTMP input, the output must be SRT or RTMP.
If there is an SRT input, the output must be SRT.
 * @method string getFailOver() Obtain Whether to enable input failover. Valid values: OPEN, CLOSE.
 * @method void setFailOver(string $FailOver) Set Whether to enable input failover. Valid values: OPEN, CLOSE.
 * @method CreateInputRTMPPullSettings getRTMPPullSettings() Obtain Configuration information for RTMP_PULL.
 * @method void setRTMPPullSettings(CreateInputRTMPPullSettings $RTMPPullSettings) Set Configuration information for RTMP_PULL.
 * @method CreateInputRTSPPullSettings getRTSPPullSettings() Obtain Configuration information of RTSP_PULL.
 * @method void setRTSPPullSettings(CreateInputRTSPPullSettings $RTSPPullSettings) Set Configuration information of RTSP_PULL.
 * @method CreateInputHLSPullSettings getHLSPullSettings() Obtain HLS_PULL configuration information.
 * @method void setHLSPullSettings(CreateInputHLSPullSettings $HLSPullSettings) Set HLS_PULL configuration information.
 * @method ResilientStreamConf getResilientStream() Obtain Delayed broadcast smooth streaming configuration information.
 * @method void setResilientStream(ResilientStreamConf $ResilientStream) Set Delayed broadcast smooth streaming configuration information.
 * @method array getSecurityGroupIds() Obtain The ID of the input security group to bind. Only one security group can be associated.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set The ID of the input security group to bind. Only one security group can be associated.
 * @method array getZones() Obtain Availability zone, optional, supports up to two availability zones. For interfaces that need to be changed, the second availability zone will participate in resource allocation. This is effective if disaster recovery is enabled for input or RTSP_PULL protocol switching is involved (addresses will be reallocated).
 * @method void setZones(array $Zones) Set Availability zone, optional, supports up to two availability zones. For interfaces that need to be changed, the second availability zone will participate in resource allocation. This is effective if disaster recovery is enabled for input or RTSP_PULL protocol switching is involved (addresses will be reallocated).
 */
class ModifyInput extends AbstractModel
{
    /**
     * @var string The input ID.
     */
    public $InputId;

    /**
     * @var string The input name.
     */
    public $InputName;

    /**
     * @var string The description of the input.
     */
    public $Description;

    /**
     * @var array The IP addresses (CIDR) allowed to push streams.
     */
    public $AllowIpList;

    /**
     * @var CreateInputSRTSettings The SRT configuration information.
     */
    public $SRTSettings;

    /**
     * @var CreateInputRTPSettings The RTP configuration information.
     */
    public $RTPSettings;

    /**
     * @var string The input protocol. Valid values: SRT, RTP, RTMP.
If there is an RTP input, the output must be RTP.
If there is an RTMP input, the output must be SRT or RTMP.
If there is an SRT input, the output must be SRT.
     */
    public $Protocol;

    /**
     * @var string Whether to enable input failover. Valid values: OPEN, CLOSE.
     */
    public $FailOver;

    /**
     * @var CreateInputRTMPPullSettings Configuration information for RTMP_PULL.
     */
    public $RTMPPullSettings;

    /**
     * @var CreateInputRTSPPullSettings Configuration information of RTSP_PULL.
     */
    public $RTSPPullSettings;

    /**
     * @var CreateInputHLSPullSettings HLS_PULL configuration information.
     */
    public $HLSPullSettings;

    /**
     * @var ResilientStreamConf Delayed broadcast smooth streaming configuration information.
     */
    public $ResilientStream;

    /**
     * @var array The ID of the input security group to bind. Only one security group can be associated.
     */
    public $SecurityGroupIds;

    /**
     * @var array Availability zone, optional, supports up to two availability zones. For interfaces that need to be changed, the second availability zone will participate in resource allocation. This is effective if disaster recovery is enabled for input or RTSP_PULL protocol switching is involved (addresses will be reallocated).
     */
    public $Zones;

    /**
     * @param string $InputId The input ID.
     * @param string $InputName The input name.
     * @param string $Description The description of the input.
     * @param array $AllowIpList The IP addresses (CIDR) allowed to push streams.
     * @param CreateInputSRTSettings $SRTSettings The SRT configuration information.
     * @param CreateInputRTPSettings $RTPSettings The RTP configuration information.
     * @param string $Protocol The input protocol. Valid values: SRT, RTP, RTMP.
If there is an RTP input, the output must be RTP.
If there is an RTMP input, the output must be SRT or RTMP.
If there is an SRT input, the output must be SRT.
     * @param string $FailOver Whether to enable input failover. Valid values: OPEN, CLOSE.
     * @param CreateInputRTMPPullSettings $RTMPPullSettings Configuration information for RTMP_PULL.
     * @param CreateInputRTSPPullSettings $RTSPPullSettings Configuration information of RTSP_PULL.
     * @param CreateInputHLSPullSettings $HLSPullSettings HLS_PULL configuration information.
     * @param ResilientStreamConf $ResilientStream Delayed broadcast smooth streaming configuration information.
     * @param array $SecurityGroupIds The ID of the input security group to bind. Only one security group can be associated.
     * @param array $Zones Availability zone, optional, supports up to two availability zones. For interfaces that need to be changed, the second availability zone will participate in resource allocation. This is effective if disaster recovery is enabled for input or RTSP_PULL protocol switching is involved (addresses will be reallocated).
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
        if (array_key_exists("InputId",$param) and $param["InputId"] !== null) {
            $this->InputId = $param["InputId"];
        }

        if (array_key_exists("InputName",$param) and $param["InputName"] !== null) {
            $this->InputName = $param["InputName"];
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
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
