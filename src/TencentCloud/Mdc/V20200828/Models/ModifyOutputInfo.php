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
 * The new output configuration.
 *
 * @method string getOutputId() Obtain The ID of the output to modify.
 * @method void setOutputId(string $OutputId) Set The ID of the output to modify.
 * @method string getOutputName() Obtain The output name.
 * @method void setOutputName(string $OutputName) Set The output name.
 * @method string getDescription() Obtain The description of the output.
 * @method void setDescription(string $Description) Set The description of the output.
 * @method string getProtocol() Obtain The output protocol. Valid values: SRT, RTP, RTMP.
 * @method void setProtocol(string $Protocol) Set The output protocol. Valid values: SRT, RTP, RTMP.
 * @method string getOutputType() Obtain Output Type: Internet/Tencent CSS/StreamLive
 * @method void setOutputType(string $OutputType) Set Output Type: Internet/Tencent CSS/StreamLive
 * @method string getOutputKind() Obtain Output module types include Pinpoint (single-point output, supporting up to four concurrent outputs) and MultiMesh (multi-output, supporting concurrent outputs exceeding four, currently capable of reaching 200 channels). The default type is Pinpoint output. For a single Flow, only one MultiMesh output can be assigned per region.
 * @method void setOutputKind(string $OutputKind) Set Output module types include Pinpoint (single-point output, supporting up to four concurrent outputs) and MultiMesh (multi-output, supporting concurrent outputs exceeding four, currently capable of reaching 200 channels). The default type is Pinpoint output. For a single Flow, only one MultiMesh output can be assigned per region.
 * @method CreateOutputSrtSettings getSRTSettings() Obtain The SRT relay configuration.
 * @method void setSRTSettings(CreateOutputSrtSettings $SRTSettings) Set The SRT relay configuration.
 * @method CreateOutputInfoRTPSettings getRTPSettings() Obtain The RTP relay configuration.
 * @method void setRTPSettings(CreateOutputInfoRTPSettings $RTPSettings) Set The RTP relay configuration.
 * @method CreateOutputRTMPSettings getRTMPSettings() Obtain The RTMP relay configuration.
 * @method void setRTMPSettings(CreateOutputRTMPSettings $RTMPSettings) Set The RTMP relay configuration.
 * @method array getAllowIpList() Obtain IP whitelist, in CIDR format, such as 0.0.0.0/0. This is valid when Protocol is RTMP_PULL, and empty means no restriction on client IP.
 * @method void setAllowIpList(array $AllowIpList) Set IP whitelist, in CIDR format, such as 0.0.0.0/0. This is valid when Protocol is RTMP_PULL, and empty means no restriction on client IP.
 * @method integer getMaxConcurrent() Obtain The maximum number of concurrent stream pulls is 4, and the default value is 4.
 * @method void setMaxConcurrent(integer $MaxConcurrent) Set The maximum number of concurrent stream pulls is 4, and the default value is 4.
 * @method array getSecurityGroupIds() Obtain The bound security group IDs.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set The bound security group IDs.
 * @method array getZones() Obtain Availability Zone
 * @method void setZones(array $Zones) Set Availability Zone
 * @method CreateOutputRistSettings getRISTSettings() Obtain Transfer the configuration of RIST.
 * @method void setRISTSettings(CreateOutputRistSettings $RISTSettings) Set Transfer the configuration of RIST.
 * @method PidSelector getPidSelector() Obtain For streams containing multiple audio/video tracks, you can specify the tracks that need to be used
 * @method void setPidSelector(PidSelector $PidSelector) Set For streams containing multiple audio/video tracks, you can specify the tracks that need to be used
 * @method StreamSelector getStreamSelector() Obtain For streams containing multiple audio/video tracks, you can specify the tracks that need to be used
 * @method void setStreamSelector(StreamSelector $StreamSelector) Set For streams containing multiple audio/video tracks, you can specify the tracks that need to be used
 */
class ModifyOutputInfo extends AbstractModel
{
    /**
     * @var string The ID of the output to modify.
     */
    public $OutputId;

    /**
     * @var string The output name.
     */
    public $OutputName;

    /**
     * @var string The description of the output.
     */
    public $Description;

    /**
     * @var string The output protocol. Valid values: SRT, RTP, RTMP.
     */
    public $Protocol;

    /**
     * @var string Output Type: Internet/Tencent CSS/StreamLive
     */
    public $OutputType;

    /**
     * @var string Output module types include Pinpoint (single-point output, supporting up to four concurrent outputs) and MultiMesh (multi-output, supporting concurrent outputs exceeding four, currently capable of reaching 200 channels). The default type is Pinpoint output. For a single Flow, only one MultiMesh output can be assigned per region.
     */
    public $OutputKind;

    /**
     * @var CreateOutputSrtSettings The SRT relay configuration.
     */
    public $SRTSettings;

    /**
     * @var CreateOutputInfoRTPSettings The RTP relay configuration.
     */
    public $RTPSettings;

    /**
     * @var CreateOutputRTMPSettings The RTMP relay configuration.
     */
    public $RTMPSettings;

    /**
     * @var array IP whitelist, in CIDR format, such as 0.0.0.0/0. This is valid when Protocol is RTMP_PULL, and empty means no restriction on client IP.
     */
    public $AllowIpList;

    /**
     * @var integer The maximum number of concurrent stream pulls is 4, and the default value is 4.
     */
    public $MaxConcurrent;

    /**
     * @var array The bound security group IDs.
     */
    public $SecurityGroupIds;

    /**
     * @var array Availability Zone
     */
    public $Zones;

    /**
     * @var CreateOutputRistSettings Transfer the configuration of RIST.
     */
    public $RISTSettings;

    /**
     * @var PidSelector For streams containing multiple audio/video tracks, you can specify the tracks that need to be used
     * @deprecated
     */
    public $PidSelector;

    /**
     * @var StreamSelector For streams containing multiple audio/video tracks, you can specify the tracks that need to be used
     */
    public $StreamSelector;

    /**
     * @param string $OutputId The ID of the output to modify.
     * @param string $OutputName The output name.
     * @param string $Description The description of the output.
     * @param string $Protocol The output protocol. Valid values: SRT, RTP, RTMP.
     * @param string $OutputType Output Type: Internet/Tencent CSS/StreamLive
     * @param string $OutputKind Output module types include Pinpoint (single-point output, supporting up to four concurrent outputs) and MultiMesh (multi-output, supporting concurrent outputs exceeding four, currently capable of reaching 200 channels). The default type is Pinpoint output. For a single Flow, only one MultiMesh output can be assigned per region.
     * @param CreateOutputSrtSettings $SRTSettings The SRT relay configuration.
     * @param CreateOutputInfoRTPSettings $RTPSettings The RTP relay configuration.
     * @param CreateOutputRTMPSettings $RTMPSettings The RTMP relay configuration.
     * @param array $AllowIpList IP whitelist, in CIDR format, such as 0.0.0.0/0. This is valid when Protocol is RTMP_PULL, and empty means no restriction on client IP.
     * @param integer $MaxConcurrent The maximum number of concurrent stream pulls is 4, and the default value is 4.
     * @param array $SecurityGroupIds The bound security group IDs.
     * @param array $Zones Availability Zone
     * @param CreateOutputRistSettings $RISTSettings Transfer the configuration of RIST.
     * @param PidSelector $PidSelector For streams containing multiple audio/video tracks, you can specify the tracks that need to be used
     * @param StreamSelector $StreamSelector For streams containing multiple audio/video tracks, you can specify the tracks that need to be used
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
        if (array_key_exists("OutputId",$param) and $param["OutputId"] !== null) {
            $this->OutputId = $param["OutputId"];
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

        if (array_key_exists("OutputType",$param) and $param["OutputType"] !== null) {
            $this->OutputType = $param["OutputType"];
        }

        if (array_key_exists("OutputKind",$param) and $param["OutputKind"] !== null) {
            $this->OutputKind = $param["OutputKind"];
        }

        if (array_key_exists("SRTSettings",$param) and $param["SRTSettings"] !== null) {
            $this->SRTSettings = new CreateOutputSrtSettings();
            $this->SRTSettings->deserialize($param["SRTSettings"]);
        }

        if (array_key_exists("RTPSettings",$param) and $param["RTPSettings"] !== null) {
            $this->RTPSettings = new CreateOutputInfoRTPSettings();
            $this->RTPSettings->deserialize($param["RTPSettings"]);
        }

        if (array_key_exists("RTMPSettings",$param) and $param["RTMPSettings"] !== null) {
            $this->RTMPSettings = new CreateOutputRTMPSettings();
            $this->RTMPSettings->deserialize($param["RTMPSettings"]);
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

        if (array_key_exists("RISTSettings",$param) and $param["RISTSettings"] !== null) {
            $this->RISTSettings = new CreateOutputRistSettings();
            $this->RISTSettings->deserialize($param["RISTSettings"]);
        }

        if (array_key_exists("PidSelector",$param) and $param["PidSelector"] !== null) {
            $this->PidSelector = new PidSelector();
            $this->PidSelector->deserialize($param["PidSelector"]);
        }

        if (array_key_exists("StreamSelector",$param) and $param["StreamSelector"] !== null) {
            $this->StreamSelector = new StreamSelector();
            $this->StreamSelector->deserialize($param["StreamSelector"]);
        }
    }
}
