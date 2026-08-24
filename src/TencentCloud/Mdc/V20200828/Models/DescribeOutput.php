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
 * Configuration information of the queried output.
 *
 * @method string getOutputId() Obtain Output ID.
 * @method void setOutputId(string $OutputId) Set Output ID.
 * @method string getOutputName() Obtain Output name.
 * @method void setOutputName(string $OutputName) Set Output name.
 * @method string getOutputType() Obtain Output type.
 * @method void setOutputType(string $OutputType) Set Output type.
 * @method string getDescription() Obtain Output description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Output description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Output protocol.
 * @method void setProtocol(string $Protocol) Set Output protocol.
 * @method array getOutputAddressList() Obtain Output destination address information list.
 * @method void setOutputAddressList(array $OutputAddressList) Set Output destination address information list.
 * @method string getOutputRegion() Obtain Output region.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOutputRegion(string $OutputRegion) Set Output region.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method DescribeOutputSRTSettings getSRTSettings() Obtain SRT configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSRTSettings(DescribeOutputSRTSettings $SRTSettings) Set SRT configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method DescribeOutputRTPSettings getRTPSettings() Obtain RTP configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRTPSettings(DescribeOutputRTPSettings $RTPSettings) Set RTP configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method DescribeOutputRTMPSettings getRTMPSettings() Obtain RTMP configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRTMPSettings(DescribeOutputRTMPSettings $RTMPSettings) Set RTMP configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method DescribeOutputRTMPPullSettings getRTMPPullSettings() Obtain RTMP pull configuration of the output
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setRTMPPullSettings(DescribeOutputRTMPPullSettings $RTMPPullSettings) Set RTMP pull configuration of the output
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getAllowIpList() Obtain CIDR Whitelist List. Effective when Protocol is RTMP_PULL. Empty means no restriction on client IP.
 * @method void setAllowIpList(array $AllowIpList) Set CIDR Whitelist List. Effective when Protocol is RTMP_PULL. Empty means no restriction on client IP.
 * @method DescribeOutputRTSPPullSettings getRTSPPullSettings() Obtain The output RTSP streaming configuration information.
 * @method void setRTSPPullSettings(DescribeOutputRTSPPullSettings $RTSPPullSettings) Set The output RTSP streaming configuration information.
 * @method DescribeOutputHLSPullSettings getHLSPullSettings() Obtain Output the HLS streaming configuration information.
 * @method void setHLSPullSettings(DescribeOutputHLSPullSettings $HLSPullSettings) Set Output the HLS streaming configuration information.
 * @method integer getMaxConcurrent() Obtain The maximum number of concurrent streams is 4, with a default of 4.
 * @method void setMaxConcurrent(integer $MaxConcurrent) Set The maximum number of concurrent streams is 4, with a default of 4.
 * @method array getSecurityGroupIds() Obtain The bound security group IDs.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set The bound security group IDs.
 * @method array getZones() Obtain The available zone currently only supports a maximum of one output.
 * @method void setZones(array $Zones) Set The available zone currently only supports a maximum of one output.
 * @method DescribeOutputRISTSettings getRISTSettings() Obtain Output RIST configuration information.
 * @method void setRISTSettings(DescribeOutputRISTSettings $RISTSettings) Set Output RIST configuration information.
 * @method PidSelector getPidSelector() Obtain For streams containing multiple audio/video tracks, you can specify the tracks that need to be used
 * @method void setPidSelector(PidSelector $PidSelector) Set For streams containing multiple audio/video tracks, you can specify the tracks that need to be used
 * @method string getOutputKind() Obtain Output module types, including Pinpoint (single point output, supporting up to four concurrent outputs); MultiMesh (Multi output, supports concurrent outputs greater than four, currently up to 200). The default type is Pinpoint output. For a single Flow, a region can only have a maximum of one MultiMesh output.
 * @method void setOutputKind(string $OutputKind) Set Output module types, including Pinpoint (single point output, supporting up to four concurrent outputs); MultiMesh (Multi output, supports concurrent outputs greater than four, currently up to 200). The default type is Pinpoint output. For a single Flow, a region can only have a maximum of one MultiMesh output.
 * @method array getStreamUrls() Obtain Output module configuration, relevant URLs, including provided streaming addresses or configured output to third-party forwarding addresses
 * @method void setStreamUrls(array $StreamUrls) Set Output module configuration, relevant URLs, including provided streaming addresses or configured output to third-party forwarding addresses
 * @method StreamSelector getStreamSelector() Obtain For streams containing multiple audio/video tracks, you can specify the tracks that need to be used
 * @method void setStreamSelector(StreamSelector $StreamSelector) Set For streams containing multiple audio/video tracks, you can specify the tracks that need to be used
 */
class DescribeOutput extends AbstractModel
{
    /**
     * @var string Output ID.
     */
    public $OutputId;

    /**
     * @var string Output name.
     */
    public $OutputName;

    /**
     * @var string Output type.
     */
    public $OutputType;

    /**
     * @var string Output description.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Output protocol.
     */
    public $Protocol;

    /**
     * @var array Output destination address information list.
     */
    public $OutputAddressList;

    /**
     * @var string Output region.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OutputRegion;

    /**
     * @var DescribeOutputSRTSettings SRT configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SRTSettings;

    /**
     * @var DescribeOutputRTPSettings RTP configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RTPSettings;

    /**
     * @var DescribeOutputRTMPSettings RTMP configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RTMPSettings;

    /**
     * @var DescribeOutputRTMPPullSettings RTMP pull configuration of the output
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $RTMPPullSettings;

    /**
     * @var array CIDR Whitelist List. Effective when Protocol is RTMP_PULL. Empty means no restriction on client IP.
     */
    public $AllowIpList;

    /**
     * @var DescribeOutputRTSPPullSettings The output RTSP streaming configuration information.
     */
    public $RTSPPullSettings;

    /**
     * @var DescribeOutputHLSPullSettings Output the HLS streaming configuration information.
     */
    public $HLSPullSettings;

    /**
     * @var integer The maximum number of concurrent streams is 4, with a default of 4.
     */
    public $MaxConcurrent;

    /**
     * @var array The bound security group IDs.
     */
    public $SecurityGroupIds;

    /**
     * @var array The available zone currently only supports a maximum of one output.
     */
    public $Zones;

    /**
     * @var DescribeOutputRISTSettings Output RIST configuration information.
     */
    public $RISTSettings;

    /**
     * @var PidSelector For streams containing multiple audio/video tracks, you can specify the tracks that need to be used
     * @deprecated
     */
    public $PidSelector;

    /**
     * @var string Output module types, including Pinpoint (single point output, supporting up to four concurrent outputs); MultiMesh (Multi output, supports concurrent outputs greater than four, currently up to 200). The default type is Pinpoint output. For a single Flow, a region can only have a maximum of one MultiMesh output.
     */
    public $OutputKind;

    /**
     * @var array Output module configuration, relevant URLs, including provided streaming addresses or configured output to third-party forwarding addresses
     */
    public $StreamUrls;

    /**
     * @var StreamSelector For streams containing multiple audio/video tracks, you can specify the tracks that need to be used
     */
    public $StreamSelector;

    /**
     * @param string $OutputId Output ID.
     * @param string $OutputName Output name.
     * @param string $OutputType Output type.
     * @param string $Description Output description.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Output protocol.
     * @param array $OutputAddressList Output destination address information list.
     * @param string $OutputRegion Output region.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param DescribeOutputSRTSettings $SRTSettings SRT configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param DescribeOutputRTPSettings $RTPSettings RTP configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param DescribeOutputRTMPSettings $RTMPSettings RTMP configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param DescribeOutputRTMPPullSettings $RTMPPullSettings RTMP pull configuration of the output
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $AllowIpList CIDR Whitelist List. Effective when Protocol is RTMP_PULL. Empty means no restriction on client IP.
     * @param DescribeOutputRTSPPullSettings $RTSPPullSettings The output RTSP streaming configuration information.
     * @param DescribeOutputHLSPullSettings $HLSPullSettings Output the HLS streaming configuration information.
     * @param integer $MaxConcurrent The maximum number of concurrent streams is 4, with a default of 4.
     * @param array $SecurityGroupIds The bound security group IDs.
     * @param array $Zones The available zone currently only supports a maximum of one output.
     * @param DescribeOutputRISTSettings $RISTSettings Output RIST configuration information.
     * @param PidSelector $PidSelector For streams containing multiple audio/video tracks, you can specify the tracks that need to be used
     * @param string $OutputKind Output module types, including Pinpoint (single point output, supporting up to four concurrent outputs); MultiMesh (Multi output, supports concurrent outputs greater than four, currently up to 200). The default type is Pinpoint output. For a single Flow, a region can only have a maximum of one MultiMesh output.
     * @param array $StreamUrls Output module configuration, relevant URLs, including provided streaming addresses or configured output to third-party forwarding addresses
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

        if (array_key_exists("OutputType",$param) and $param["OutputType"] !== null) {
            $this->OutputType = $param["OutputType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("OutputAddressList",$param) and $param["OutputAddressList"] !== null) {
            $this->OutputAddressList = [];
            foreach ($param["OutputAddressList"] as $key => $value){
                $obj = new OutputAddress();
                $obj->deserialize($value);
                array_push($this->OutputAddressList, $obj);
            }
        }

        if (array_key_exists("OutputRegion",$param) and $param["OutputRegion"] !== null) {
            $this->OutputRegion = $param["OutputRegion"];
        }

        if (array_key_exists("SRTSettings",$param) and $param["SRTSettings"] !== null) {
            $this->SRTSettings = new DescribeOutputSRTSettings();
            $this->SRTSettings->deserialize($param["SRTSettings"]);
        }

        if (array_key_exists("RTPSettings",$param) and $param["RTPSettings"] !== null) {
            $this->RTPSettings = new DescribeOutputRTPSettings();
            $this->RTPSettings->deserialize($param["RTPSettings"]);
        }

        if (array_key_exists("RTMPSettings",$param) and $param["RTMPSettings"] !== null) {
            $this->RTMPSettings = new DescribeOutputRTMPSettings();
            $this->RTMPSettings->deserialize($param["RTMPSettings"]);
        }

        if (array_key_exists("RTMPPullSettings",$param) and $param["RTMPPullSettings"] !== null) {
            $this->RTMPPullSettings = new DescribeOutputRTMPPullSettings();
            $this->RTMPPullSettings->deserialize($param["RTMPPullSettings"]);
        }

        if (array_key_exists("AllowIpList",$param) and $param["AllowIpList"] !== null) {
            $this->AllowIpList = $param["AllowIpList"];
        }

        if (array_key_exists("RTSPPullSettings",$param) and $param["RTSPPullSettings"] !== null) {
            $this->RTSPPullSettings = new DescribeOutputRTSPPullSettings();
            $this->RTSPPullSettings->deserialize($param["RTSPPullSettings"]);
        }

        if (array_key_exists("HLSPullSettings",$param) and $param["HLSPullSettings"] !== null) {
            $this->HLSPullSettings = new DescribeOutputHLSPullSettings();
            $this->HLSPullSettings->deserialize($param["HLSPullSettings"]);
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
            $this->RISTSettings = new DescribeOutputRISTSettings();
            $this->RISTSettings->deserialize($param["RISTSettings"]);
        }

        if (array_key_exists("PidSelector",$param) and $param["PidSelector"] !== null) {
            $this->PidSelector = new PidSelector();
            $this->PidSelector->deserialize($param["PidSelector"]);
        }

        if (array_key_exists("OutputKind",$param) and $param["OutputKind"] !== null) {
            $this->OutputKind = $param["OutputKind"];
        }

        if (array_key_exists("StreamUrls",$param) and $param["StreamUrls"] !== null) {
            $this->StreamUrls = [];
            foreach ($param["StreamUrls"] as $key => $value){
                $obj = new StreamUrlDetail();
                $obj->deserialize($value);
                array_push($this->StreamUrls, $obj);
            }
        }

        if (array_key_exists("StreamSelector",$param) and $param["StreamSelector"] !== null) {
            $this->StreamSelector = new StreamSelector();
            $this->StreamSelector->deserialize($param["StreamSelector"]);
        }
    }
}
