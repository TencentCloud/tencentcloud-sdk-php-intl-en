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
 * Configuration message for creating an output.
 *
 * @method string getOutputName() Obtain Output name.
 * @method void setOutputName(string $OutputName) Set Output name.
 * @method string getDescription() Obtain Output description.
 * @method void setDescription(string $Description) Set Output description.
 * @method string getProtocol() Obtain Output relay protocol. Supports SRT, RTP, RTMP, RTMP_PULL, RTSP_PULL, and RIST.
 * @method void setProtocol(string $Protocol) Set Output relay protocol. Supports SRT, RTP, RTMP, RTMP_PULL, RTSP_PULL, and RIST.
 * @method string getOutputRegion() Obtain Output region.
 * @method void setOutputRegion(string $OutputRegion) Set Output region.
 * @method CreateOutputSrtSettings getSRTSettings() Obtain Configuration of the output SRT.
 * @method void setSRTSettings(CreateOutputSrtSettings $SRTSettings) Set Configuration of the output SRT.
 * @method CreateOutputRTMPSettings getRTMPSettings() Obtain Configuration of the output RTMP.
 * @method void setRTMPSettings(CreateOutputRTMPSettings $RTMPSettings) Set Configuration of the output RTMP.
 * @method CreateOutputInfoRTPSettings getRTPSettings() Obtain Configuration of the output RTP.
 * @method void setRTPSettings(CreateOutputInfoRTPSettings $RTPSettings) Set Configuration of the output RTP.
 * @method array getAllowIpList() Obtain IP whitelist list in CIDR format, for example, 0.0.0.0/0.
Valid when Protocol is RTMP_PULL. If empty, it represents no limit on client IP.
 * @method void setAllowIpList(array $AllowIpList) Set IP whitelist list in CIDR format, for example, 0.0.0.0/0.
Valid when Protocol is RTMP_PULL. If empty, it represents no limit on client IP.
 * @method integer getMaxConcurrent() Obtain Maximum number of concurrent stream pulls. Maximum value: 4. Default value: 4.
 * @method void setMaxConcurrent(integer $MaxConcurrent) Set Maximum number of concurrent stream pulls. Maximum value: 4. Default value: 4.
 * @method array getSecurityGroupIds() Obtain ID of the bound input security group.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set ID of the bound input security group.
 * @method array getZones() Obtain Availability zone. output supports a maximum of one user-submitted input availability zone.
 * @method void setZones(array $Zones) Set Availability zone. output supports a maximum of one user-submitted input availability zone.
 * @method string getOutputType() Obtain Output type: Internet/TencentCSS/StreamLive
 * @method void setOutputType(string $OutputType) Set Output type: Internet/TencentCSS/StreamLive
 * @method CreateOutputRistSettings getRISTSettings() Obtain Output RIST configuration.
 * @method void setRISTSettings(CreateOutputRistSettings $RISTSettings) Set Output RIST configuration.
 * @method PidSelector getPidSelector() Obtain For streams with multiple audio/video tracks, you can specify the track to be used
 * @method void setPidSelector(PidSelector $PidSelector) Set For streams with multiple audio/video tracks, you can specify the track to be used
 * @method string getOutputKind() Obtain Output module type, including Pinpoint (single-point output, supports up to four concurrent outputs); MultiMesh (multiple streams output, supports more than four concurrent outputs, currently up to 200). The default type is Pinpoint output. For a single Flow, only one MultiMesh output is allowed per zone.
 * @method void setOutputKind(string $OutputKind) Set Output module type, including Pinpoint (single-point output, supports up to four concurrent outputs); MultiMesh (multiple streams output, supports more than four concurrent outputs, currently up to 200). The default type is Pinpoint output. For a single Flow, only one MultiMesh output is allowed per zone.
 * @method StreamSelector getStreamSelector() Obtain For streams with multiple audio/video tracks, you can specify the track to be used
 * @method void setStreamSelector(StreamSelector $StreamSelector) Set For streams with multiple audio/video tracks, you can specify the track to be used
 */
class CreateOutputInfo extends AbstractModel
{
    /**
     * @var string Output name.
     */
    public $OutputName;

    /**
     * @var string Output description.
     */
    public $Description;

    /**
     * @var string Output relay protocol. Supports SRT, RTP, RTMP, RTMP_PULL, RTSP_PULL, and RIST.
     */
    public $Protocol;

    /**
     * @var string Output region.
     */
    public $OutputRegion;

    /**
     * @var CreateOutputSrtSettings Configuration of the output SRT.
     */
    public $SRTSettings;

    /**
     * @var CreateOutputRTMPSettings Configuration of the output RTMP.
     */
    public $RTMPSettings;

    /**
     * @var CreateOutputInfoRTPSettings Configuration of the output RTP.
     */
    public $RTPSettings;

    /**
     * @var array IP whitelist list in CIDR format, for example, 0.0.0.0/0.
Valid when Protocol is RTMP_PULL. If empty, it represents no limit on client IP.
     */
    public $AllowIpList;

    /**
     * @var integer Maximum number of concurrent stream pulls. Maximum value: 4. Default value: 4.
     */
    public $MaxConcurrent;

    /**
     * @var array ID of the bound input security group.
     */
    public $SecurityGroupIds;

    /**
     * @var array Availability zone. output supports a maximum of one user-submitted input availability zone.
     */
    public $Zones;

    /**
     * @var string Output type: Internet/TencentCSS/StreamLive
     */
    public $OutputType;

    /**
     * @var CreateOutputRistSettings Output RIST configuration.
     */
    public $RISTSettings;

    /**
     * @var PidSelector For streams with multiple audio/video tracks, you can specify the track to be used
     * @deprecated
     */
    public $PidSelector;

    /**
     * @var string Output module type, including Pinpoint (single-point output, supports up to four concurrent outputs); MultiMesh (multiple streams output, supports more than four concurrent outputs, currently up to 200). The default type is Pinpoint output. For a single Flow, only one MultiMesh output is allowed per zone.
     */
    public $OutputKind;

    /**
     * @var StreamSelector For streams with multiple audio/video tracks, you can specify the track to be used
     */
    public $StreamSelector;

    /**
     * @param string $OutputName Output name.
     * @param string $Description Output description.
     * @param string $Protocol Output relay protocol. Supports SRT, RTP, RTMP, RTMP_PULL, RTSP_PULL, and RIST.
     * @param string $OutputRegion Output region.
     * @param CreateOutputSrtSettings $SRTSettings Configuration of the output SRT.
     * @param CreateOutputRTMPSettings $RTMPSettings Configuration of the output RTMP.
     * @param CreateOutputInfoRTPSettings $RTPSettings Configuration of the output RTP.
     * @param array $AllowIpList IP whitelist list in CIDR format, for example, 0.0.0.0/0.
Valid when Protocol is RTMP_PULL. If empty, it represents no limit on client IP.
     * @param integer $MaxConcurrent Maximum number of concurrent stream pulls. Maximum value: 4. Default value: 4.
     * @param array $SecurityGroupIds ID of the bound input security group.
     * @param array $Zones Availability zone. output supports a maximum of one user-submitted input availability zone.
     * @param string $OutputType Output type: Internet/TencentCSS/StreamLive
     * @param CreateOutputRistSettings $RISTSettings Output RIST configuration.
     * @param PidSelector $PidSelector For streams with multiple audio/video tracks, you can specify the track to be used
     * @param string $OutputKind Output module type, including Pinpoint (single-point output, supports up to four concurrent outputs); MultiMesh (multiple streams output, supports more than four concurrent outputs, currently up to 200). The default type is Pinpoint output. For a single Flow, only one MultiMesh output is allowed per zone.
     * @param StreamSelector $StreamSelector For streams with multiple audio/video tracks, you can specify the track to be used
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
        if (array_key_exists("OutputName",$param) and $param["OutputName"] !== null) {
            $this->OutputName = $param["OutputName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("OutputRegion",$param) and $param["OutputRegion"] !== null) {
            $this->OutputRegion = $param["OutputRegion"];
        }

        if (array_key_exists("SRTSettings",$param) and $param["SRTSettings"] !== null) {
            $this->SRTSettings = new CreateOutputSrtSettings();
            $this->SRTSettings->deserialize($param["SRTSettings"]);
        }

        if (array_key_exists("RTMPSettings",$param) and $param["RTMPSettings"] !== null) {
            $this->RTMPSettings = new CreateOutputRTMPSettings();
            $this->RTMPSettings->deserialize($param["RTMPSettings"]);
        }

        if (array_key_exists("RTPSettings",$param) and $param["RTPSettings"] !== null) {
            $this->RTPSettings = new CreateOutputInfoRTPSettings();
            $this->RTPSettings->deserialize($param["RTPSettings"]);
        }

        if (array_key_exists("AllowIpList",$param) and $param["AllowIpList"] !== null) {
            $this->AllowIpList = $param["AllowIpList"];
        }

        if (array_key_exists("MaxConcurrent",$param) and $param["MaxConcurrent"] !== null) {
            $this->MaxConcurrent = $param["MaxConcurrent"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("OutputType",$param) and $param["OutputType"] !== null) {
            $this->OutputType = $param["OutputType"];
        }

        if (array_key_exists("RISTSettings",$param) and $param["RISTSettings"] !== null) {
            $this->RISTSettings = new CreateOutputRistSettings();
            $this->RISTSettings->deserialize($param["RISTSettings"]);
        }

        if (array_key_exists("PidSelector",$param) and $param["PidSelector"] !== null) {
            $this->PidSelector = new PidSelector();
            $this->PidSelector->deserialize($param["PidSelector"]);
        }

        if (array_key_exists("OutputKind",$param) and $param["OutputKind"] !== null) {
            $this->OutputKind = $param["OutputKind"];
        }

        if (array_key_exists("StreamSelector",$param) and $param["StreamSelector"] !== null) {
            $this->StreamSelector = new StreamSelector();
            $this->StreamSelector->deserialize($param["StreamSelector"]);
        }
    }
}
