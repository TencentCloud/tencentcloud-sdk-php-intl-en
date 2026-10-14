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
 * Modify the parameters of the input.
 *
 * @method string getInputId() Obtain Input Id.
 * @method void setInputId(string $InputId) Set Input Id.
 * @method string getInputName() Obtain Enter a name.
 * @method void setInputName(string $InputName) Set Enter a name.
 * @method string getDescription() Obtain Input description.
 * @method void setDescription(string $Description) Set Input description.
 * @method array getAllowIpList() Obtain IPs allowed for push, in CIDR format.
 * @method void setAllowIpList(array $AllowIpList) Set IPs allowed for push, in CIDR format.
 * @method CreateInputSRTSettings getSRTSettings() Obtain Configuration of SRT.
 * @method void setSRTSettings(CreateInputSRTSettings $SRTSettings) Set Configuration of SRT.
 * @method CreateInputRTPSettings getRTPSettings() Obtain Configuration message of RTP.
 * @method void setRTPSettings(CreateInputRTPSettings $RTPSettings) Set Configuration message of RTP.
 * @method string getProtocol() Obtain Input protocol. Options: SRT, RTP, RTMP, RTMP_PULL, RTSP_PULL, RIST.
 * @method void setProtocol(string $Protocol) Set Input protocol. Options: SRT, RTP, RTMP, RTMP_PULL, RTSP_PULL, RIST.
 * @method string getFailOver() Obtain Input primary/replica switch. Option: [OPEN|CLOSE].
 * @method void setFailOver(string $FailOver) Set Input primary/replica switch. Option: [OPEN|CLOSE].
 * @method CreateInputRTMPPullSettings getRTMPPullSettings() Obtain Configuration message of RTMP_PULL.
 * @method void setRTMPPullSettings(CreateInputRTMPPullSettings $RTMPPullSettings) Set Configuration message of RTMP_PULL.
 * @method CreateInputRTSPPullSettings getRTSPPullSettings() Obtain Configuration message of RTSP_PULL.
 * @method void setRTSPPullSettings(CreateInputRTSPPullSettings $RTSPPullSettings) Set Configuration message of RTSP_PULL.
 * @method CreateInputHLSPullSettings getHLSPullSettings() Obtain Configuration message of HLS_PULL.
 * @method void setHLSPullSettings(CreateInputHLSPullSettings $HLSPullSettings) Set Configuration message of HLS_PULL.
 * @method ResilientStreamConf getResilientStream() Obtain Configuration message for smooth stream output during delayed playback.
 * @method void setResilientStream(ResilientStreamConf $ResilientStream) Set Configuration message for smooth stream output during delayed playback.
 * @method array getSecurityGroupIds() Obtain ID of the bound input security group. Only one security group can be associated.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set ID of the bound input security group. Only one security group can be associated.
 * @method array getZones() Obtain Availability zone. Optional. input limit: two availability zones. For this API, only the second availability zone participates in resource allocation. It is valid if disaster recovery is enabled or the RTSP_PULL protocol is involved during switching. The address will be reallocated.	
 * @method void setZones(array $Zones) Set Availability zone. Optional. input limit: two availability zones. For this API, only the second availability zone participates in resource allocation. It is valid if disaster recovery is enabled or the RTSP_PULL protocol is involved during switching. The address will be reallocated.	
 * @method CreateInputRISTSettings getRISTSettings() Obtain Configuration information of RIST.
 * @method void setRISTSettings(CreateInputRISTSettings $RISTSettings) Set Configuration information of RIST.
 * @method string getInputRegion() Obtain Region of the input node.
 * @method void setInputRegion(string $InputRegion) Set Region of the input node.
 * @method FailOverOption getFailOverOption() Obtain Hot/cold backup related
 * @method void setFailOverOption(FailOverOption $FailOverOption) Set Hot/cold backup related
 */
class ModifyInput extends AbstractModel
{
    /**
     * @var string Input Id.
     */
    public $InputId;

    /**
     * @var string Enter a name.
     */
    public $InputName;

    /**
     * @var string Input description.
     */
    public $Description;

    /**
     * @var array IPs allowed for push, in CIDR format.
     */
    public $AllowIpList;

    /**
     * @var CreateInputSRTSettings Configuration of SRT.
     */
    public $SRTSettings;

    /**
     * @var CreateInputRTPSettings Configuration message of RTP.
     */
    public $RTPSettings;

    /**
     * @var string Input protocol. Options: SRT, RTP, RTMP, RTMP_PULL, RTSP_PULL, RIST.
     */
    public $Protocol;

    /**
     * @var string Input primary/replica switch. Option: [OPEN|CLOSE].
     */
    public $FailOver;

    /**
     * @var CreateInputRTMPPullSettings Configuration message of RTMP_PULL.
     */
    public $RTMPPullSettings;

    /**
     * @var CreateInputRTSPPullSettings Configuration message of RTSP_PULL.
     */
    public $RTSPPullSettings;

    /**
     * @var CreateInputHLSPullSettings Configuration message of HLS_PULL.
     */
    public $HLSPullSettings;

    /**
     * @var ResilientStreamConf Configuration message for smooth stream output during delayed playback.
     */
    public $ResilientStream;

    /**
     * @var array ID of the bound input security group. Only one security group can be associated.
     */
    public $SecurityGroupIds;

    /**
     * @var array Availability zone. Optional. input limit: two availability zones. For this API, only the second availability zone participates in resource allocation. It is valid if disaster recovery is enabled or the RTSP_PULL protocol is involved during switching. The address will be reallocated.	
     */
    public $Zones;

    /**
     * @var CreateInputRISTSettings Configuration information of RIST.
     */
    public $RISTSettings;

    /**
     * @var string Region of the input node.
     */
    public $InputRegion;

    /**
     * @var FailOverOption Hot/cold backup related
     */
    public $FailOverOption;

    /**
     * @param string $InputId Input Id.
     * @param string $InputName Enter a name.
     * @param string $Description Input description.
     * @param array $AllowIpList IPs allowed for push, in CIDR format.
     * @param CreateInputSRTSettings $SRTSettings Configuration of SRT.
     * @param CreateInputRTPSettings $RTPSettings Configuration message of RTP.
     * @param string $Protocol Input protocol. Options: SRT, RTP, RTMP, RTMP_PULL, RTSP_PULL, RIST.
     * @param string $FailOver Input primary/replica switch. Option: [OPEN|CLOSE].
     * @param CreateInputRTMPPullSettings $RTMPPullSettings Configuration message of RTMP_PULL.
     * @param CreateInputRTSPPullSettings $RTSPPullSettings Configuration message of RTSP_PULL.
     * @param CreateInputHLSPullSettings $HLSPullSettings Configuration message of HLS_PULL.
     * @param ResilientStreamConf $ResilientStream Configuration message for smooth stream output during delayed playback.
     * @param array $SecurityGroupIds ID of the bound input security group. Only one security group can be associated.
     * @param array $Zones Availability zone. Optional. input limit: two availability zones. For this API, only the second availability zone participates in resource allocation. It is valid if disaster recovery is enabled or the RTSP_PULL protocol is involved during switching. The address will be reallocated.	
     * @param CreateInputRISTSettings $RISTSettings Configuration information of RIST.
     * @param string $InputRegion Region of the input node.
     * @param FailOverOption $FailOverOption Hot/cold backup related
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

        if (array_key_exists("RISTSettings",$param) and $param["RISTSettings"] !== null) {
            $this->RISTSettings = new CreateInputRISTSettings();
            $this->RISTSettings->deserialize($param["RISTSettings"]);
        }

        if (array_key_exists("InputRegion",$param) and $param["InputRegion"] !== null) {
            $this->InputRegion = $param["InputRegion"];
        }

        if (array_key_exists("FailOverOption",$param) and $param["FailOverOption"] !== null) {
            $this->FailOverOption = new FailOverOption();
            $this->FailOverOption->deserialize($param["FailOverOption"]);
        }
    }
}
