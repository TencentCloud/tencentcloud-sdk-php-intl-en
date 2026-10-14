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
 * Create input configuration message.
 *
 * @method string getInputName() Obtain Enter a name. It can contain uppercase letters, lowercase letters, digits, and underscores. Length: [1, 32].
 * @method void setInputName(string $InputName) Set Enter a name. It can contain uppercase letters, lowercase letters, digits, and underscores. Length: [1, 32].
 * @method string getProtocol() Obtain Input protocol. Selectable: [SRT|RTP|RTMP|RTMP_PULL|RTSP_PULL|RIST].
 * @method void setProtocol(string $Protocol) Set Input protocol. Selectable: [SRT|RTP|RTMP|RTMP_PULL|RTSP_PULL|RIST].
 * @method string getDescription() Obtain Enter description. Length: [0, 255].
 * @method void setDescription(string $Description) Set Enter description. Length: [0, 255].
 * @method array getAllowIpList() Obtain Input IP allowlist in CIDR format.
 * @method void setAllowIpList(array $AllowIpList) Set Input IP allowlist in CIDR format.
 * @method CreateInputSRTSettings getSRTSettings() Obtain SRT configuration information of the input.
 * @method void setSRTSettings(CreateInputSRTSettings $SRTSettings) Set SRT configuration information of the input.
 * @method CreateInputRTPSettings getRTPSettings() Obtain Input RTP configuration message.
 * @method void setRTPSettings(CreateInputRTPSettings $RTPSettings) Set Input RTP configuration message.
 * @method string getFailOver() Obtain Primary/replica switch input. Selectable values: `OPEN` and `CLOSE`. Default value: `CLOSE`.
 * @method void setFailOver(string $FailOver) Set Primary/replica switch input. Selectable values: `OPEN` and `CLOSE`. Default value: `CLOSE`.
 * @method CreateInputRTMPPullSettings getRTMPPullSettings() Obtain Input RTMP_PULL configuration message.
 * @method void setRTMPPullSettings(CreateInputRTMPPullSettings $RTMPPullSettings) Set Input RTMP_PULL configuration message.
 * @method CreateInputRTSPPullSettings getRTSPPullSettings() Obtain Input RTSP_PULL configuration message.
 * @method void setRTSPPullSettings(CreateInputRTSPPullSettings $RTSPPullSettings) Set Input RTSP_PULL configuration message.
 * @method CreateInputHLSPullSettings getHLSPullSettings() Obtain Input HLS_PULL configuration message.
 * @method void setHLSPullSettings(CreateInputHLSPullSettings $HLSPullSettings) Set Input HLS_PULL configuration message.
 * @method ResilientStreamConf getResilientStream() Obtain Configuration message for smooth streaming during delayed broadcasting.
 * @method void setResilientStream(ResilientStreamConf $ResilientStream) Set Configuration message for smooth streaming during delayed broadcasting.
 * @method array getSecurityGroupIds() Obtain Bound input security group ID.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Bound input security group ID.
 * @method array getZones() Obtain Availability zone. This parameter is optional. If disaster recovery is enabled, two different availability zones must be input. Otherwise, only one availability zone can be input.
 * @method void setZones(array $Zones) Set Availability zone. This parameter is optional. If disaster recovery is enabled, two different availability zones must be input. Otherwise, only one availability zone can be input.
 * @method CreateInputRISTSettings getRISTSettings() Obtain Input RIST configuration message.
 * @method void setRISTSettings(CreateInputRISTSettings $RISTSettings) Set Input RIST configuration message.
 * @method string getInputRegion() Obtain Region of the input node
 * @method void setInputRegion(string $InputRegion) Set Region of the input node
 * @method FailOverOption getFailOverOption() Obtain Hot/cold backup
 * @method void setFailOverOption(FailOverOption $FailOverOption) Set Hot/cold backup
 */
class CreateInput extends AbstractModel
{
    /**
     * @var string Enter a name. It can contain uppercase letters, lowercase letters, digits, and underscores. Length: [1, 32].
     */
    public $InputName;

    /**
     * @var string Input protocol. Selectable: [SRT|RTP|RTMP|RTMP_PULL|RTSP_PULL|RIST].
     */
    public $Protocol;

    /**
     * @var string Enter description. Length: [0, 255].
     */
    public $Description;

    /**
     * @var array Input IP allowlist in CIDR format.
     */
    public $AllowIpList;

    /**
     * @var CreateInputSRTSettings SRT configuration information of the input.
     */
    public $SRTSettings;

    /**
     * @var CreateInputRTPSettings Input RTP configuration message.
     */
    public $RTPSettings;

    /**
     * @var string Primary/replica switch input. Selectable values: `OPEN` and `CLOSE`. Default value: `CLOSE`.
     */
    public $FailOver;

    /**
     * @var CreateInputRTMPPullSettings Input RTMP_PULL configuration message.
     */
    public $RTMPPullSettings;

    /**
     * @var CreateInputRTSPPullSettings Input RTSP_PULL configuration message.
     */
    public $RTSPPullSettings;

    /**
     * @var CreateInputHLSPullSettings Input HLS_PULL configuration message.
     */
    public $HLSPullSettings;

    /**
     * @var ResilientStreamConf Configuration message for smooth streaming during delayed broadcasting.
     */
    public $ResilientStream;

    /**
     * @var array Bound input security group ID.
     */
    public $SecurityGroupIds;

    /**
     * @var array Availability zone. This parameter is optional. If disaster recovery is enabled, two different availability zones must be input. Otherwise, only one availability zone can be input.
     */
    public $Zones;

    /**
     * @var CreateInputRISTSettings Input RIST configuration message.
     */
    public $RISTSettings;

    /**
     * @var string Region of the input node
     */
    public $InputRegion;

    /**
     * @var FailOverOption Hot/cold backup
     */
    public $FailOverOption;

    /**
     * @param string $InputName Enter a name. It can contain uppercase letters, lowercase letters, digits, and underscores. Length: [1, 32].
     * @param string $Protocol Input protocol. Selectable: [SRT|RTP|RTMP|RTMP_PULL|RTSP_PULL|RIST].
     * @param string $Description Enter description. Length: [0, 255].
     * @param array $AllowIpList Input IP allowlist in CIDR format.
     * @param CreateInputSRTSettings $SRTSettings SRT configuration information of the input.
     * @param CreateInputRTPSettings $RTPSettings Input RTP configuration message.
     * @param string $FailOver Primary/replica switch input. Selectable values: `OPEN` and `CLOSE`. Default value: `CLOSE`.
     * @param CreateInputRTMPPullSettings $RTMPPullSettings Input RTMP_PULL configuration message.
     * @param CreateInputRTSPPullSettings $RTSPPullSettings Input RTSP_PULL configuration message.
     * @param CreateInputHLSPullSettings $HLSPullSettings Input HLS_PULL configuration message.
     * @param ResilientStreamConf $ResilientStream Configuration message for smooth streaming during delayed broadcasting.
     * @param array $SecurityGroupIds Bound input security group ID.
     * @param array $Zones Availability zone. This parameter is optional. If disaster recovery is enabled, two different availability zones must be input. Otherwise, only one availability zone can be input.
     * @param CreateInputRISTSettings $RISTSettings Input RIST configuration message.
     * @param string $InputRegion Region of the input node
     * @param FailOverOption $FailOverOption Hot/cold backup
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
