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
 * Configuration message for querying an output.
 *
 * @method string getOutputId() Obtain <p>Output Id.</p>
 * @method void setOutputId(string $OutputId) Set <p>Output Id.</p>
 * @method string getOutputName() Obtain <p>Output name.</p>
 * @method void setOutputName(string $OutputName) Set <p>Output name.</p>
 * @method string getOutputType() Obtain <p>Output type.</p>
 * @method void setOutputType(string $OutputType) Set <p>Output type.</p>
 * @method string getDescription() Obtain <p>Output description.</p>
 * @method void setDescription(string $Description) Set <p>Output description.</p>
 * @method string getProtocol() Obtain <p>Output protocol.</p>
 * @method void setProtocol(string $Protocol) Set <p>Output protocol.</p>
 * @method array getOutputAddressList() Obtain <p>List of output egress address information.</p>
 * @method void setOutputAddressList(array $OutputAddressList) Set <p>List of output egress address information.</p>
 * @method string getOutputRegion() Obtain <p>Output region.</p>
 * @method void setOutputRegion(string $OutputRegion) Set <p>Output region.</p>
 * @method DescribeOutputSRTSettings getSRTSettings() Obtain <p>SRT configuration information of the output.</p>
 * @method void setSRTSettings(DescribeOutputSRTSettings $SRTSettings) Set <p>SRT configuration information of the output.</p>
 * @method DescribeOutputRTPSettings getRTPSettings() Obtain <p>Output RTP configuration message.</p>
 * @method void setRTPSettings(DescribeOutputRTPSettings $RTPSettings) Set <p>Output RTP configuration message.</p>
 * @method DescribeOutputRTMPSettings getRTMPSettings() Obtain <p>Output RTMP configuration message.</p>
 * @method void setRTMPSettings(DescribeOutputRTMPSettings $RTMPSettings) Set <p>Output RTMP configuration message.</p>
 * @method DescribeOutputRTMPPullSettings getRTMPPullSettings() Obtain <p>Output RTMP pull configuration message.</p>
 * @method void setRTMPPullSettings(DescribeOutputRTMPPullSettings $RTMPPullSettings) Set <p>Output RTMP pull configuration message.</p>
 * @method array getAllowIpList() Obtain <p>CIDR allowlist.<br>Valid when Protocol is RTMP_PULL. If empty, it represents no limit on client IP.</p>
 * @method void setAllowIpList(array $AllowIpList) Set <p>CIDR allowlist.<br>Valid when Protocol is RTMP_PULL. If empty, it represents no limit on client IP.</p>
 * @method DescribeOutputRTSPPullSettings getRTSPPullSettings() Obtain <p>Output RTSP pull stream configuration message.</p>
 * @method void setRTSPPullSettings(DescribeOutputRTSPPullSettings $RTSPPullSettings) Set <p>Output RTSP pull stream configuration message.</p>
 * @method DescribeOutputHLSPullSettings getHLSPullSettings() Obtain <p>Output HLS pull configuration message.</p>
 * @method void setHLSPullSettings(DescribeOutputHLSPullSettings $HLSPullSettings) Set <p>Output HLS pull configuration message.</p>
 * @method integer getMaxConcurrent() Obtain <p>Maximum number of concurrent stream pulls. Maximum value: 4. Default value: 4.</p>
 * @method void setMaxConcurrent(integer $MaxConcurrent) Set <p>Maximum number of concurrent stream pulls. Maximum value: 4. Default value: 4.</p>
 * @method array getSecurityGroupIds() Obtain <p>ID of the bound security group.</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set <p>ID of the bound security group.</p>
 * @method array getZones() Obtain <p>Availability zone. output currently supports a maximum of one.</p>
 * @method void setZones(array $Zones) Set <p>Availability zone. output currently supports a maximum of one.</p>
 * @method DescribeOutputRISTSettings getRISTSettings() Obtain <p>Output RIST configuration message.</p>
 * @method void setRISTSettings(DescribeOutputRISTSettings $RISTSettings) Set <p>Output RIST configuration message.</p>
 * @method PidSelector getPidSelector() Obtain <p>For streams with multiple audio/video tracks, you can specify the track to be used</p>
 * @method void setPidSelector(PidSelector $PidSelector) Set <p>For streams with multiple audio/video tracks, you can specify the track to be used</p>
 * @method string getOutputKind() Obtain <p>Output module type, including Pinpoint (single-point output, supports up to four concurrent outputs); MultiMesh (multiple streams output, supports more than four concurrent outputs, currently up to 200). The default type is Pinpoint output. For one Flow, only one MultiMesh output is allowed in one zone.</p>
 * @method void setOutputKind(string $OutputKind) Set <p>Output module type, including Pinpoint (single-point output, supports up to four concurrent outputs); MultiMesh (multiple streams output, supports more than four concurrent outputs, currently up to 200). The default type is Pinpoint output. For one Flow, only one MultiMesh output is allowed in one zone.</p>
 * @method array getStreamUrls() Obtain <p>Output module configuration, related URLs, including the provided pull stream address or the configured relay address for output to a third party</p>
 * @method void setStreamUrls(array $StreamUrls) Set <p>Output module configuration, related URLs, including the provided pull stream address or the configured relay address for output to a third party</p>
 * @method StreamSelector getStreamSelector() Obtain <p>For streams with multiple audio/video tracks, you can specify the track to be used</p>
 * @method void setStreamSelector(StreamSelector $StreamSelector) Set <p>For streams with multiple audio/video tracks, you can specify the track to be used</p>
 * @method string getState() Obtain <p>Output status.</p><p>Enumeration values:</p><ul><li>DISABLED</li><li>ENABLED</li></ul>
 * @method void setState(string $State) Set <p>Output status.</p><p>Enumeration values:</p><ul><li>DISABLED</li><li>ENABLED</li></ul>
 */
class DescribeOutput extends AbstractModel
{
    /**
     * @var string <p>Output Id.</p>
     */
    public $OutputId;

    /**
     * @var string <p>Output name.</p>
     */
    public $OutputName;

    /**
     * @var string <p>Output type.</p>
     */
    public $OutputType;

    /**
     * @var string <p>Output description.</p>
     */
    public $Description;

    /**
     * @var string <p>Output protocol.</p>
     */
    public $Protocol;

    /**
     * @var array <p>List of output egress address information.</p>
     */
    public $OutputAddressList;

    /**
     * @var string <p>Output region.</p>
     */
    public $OutputRegion;

    /**
     * @var DescribeOutputSRTSettings <p>SRT configuration information of the output.</p>
     */
    public $SRTSettings;

    /**
     * @var DescribeOutputRTPSettings <p>Output RTP configuration message.</p>
     */
    public $RTPSettings;

    /**
     * @var DescribeOutputRTMPSettings <p>Output RTMP configuration message.</p>
     */
    public $RTMPSettings;

    /**
     * @var DescribeOutputRTMPPullSettings <p>Output RTMP pull configuration message.</p>
     */
    public $RTMPPullSettings;

    /**
     * @var array <p>CIDR allowlist.<br>Valid when Protocol is RTMP_PULL. If empty, it represents no limit on client IP.</p>
     */
    public $AllowIpList;

    /**
     * @var DescribeOutputRTSPPullSettings <p>Output RTSP pull stream configuration message.</p>
     */
    public $RTSPPullSettings;

    /**
     * @var DescribeOutputHLSPullSettings <p>Output HLS pull configuration message.</p>
     */
    public $HLSPullSettings;

    /**
     * @var integer <p>Maximum number of concurrent stream pulls. Maximum value: 4. Default value: 4.</p>
     */
    public $MaxConcurrent;

    /**
     * @var array <p>ID of the bound security group.</p>
     */
    public $SecurityGroupIds;

    /**
     * @var array <p>Availability zone. output currently supports a maximum of one.</p>
     */
    public $Zones;

    /**
     * @var DescribeOutputRISTSettings <p>Output RIST configuration message.</p>
     */
    public $RISTSettings;

    /**
     * @var PidSelector <p>For streams with multiple audio/video tracks, you can specify the track to be used</p>
     * @deprecated
     */
    public $PidSelector;

    /**
     * @var string <p>Output module type, including Pinpoint (single-point output, supports up to four concurrent outputs); MultiMesh (multiple streams output, supports more than four concurrent outputs, currently up to 200). The default type is Pinpoint output. For one Flow, only one MultiMesh output is allowed in one zone.</p>
     */
    public $OutputKind;

    /**
     * @var array <p>Output module configuration, related URLs, including the provided pull stream address or the configured relay address for output to a third party</p>
     */
    public $StreamUrls;

    /**
     * @var StreamSelector <p>For streams with multiple audio/video tracks, you can specify the track to be used</p>
     */
    public $StreamSelector;

    /**
     * @var string <p>Output status.</p><p>Enumeration values:</p><ul><li>DISABLED</li><li>ENABLED</li></ul>
     */
    public $State;

    /**
     * @param string $OutputId <p>Output Id.</p>
     * @param string $OutputName <p>Output name.</p>
     * @param string $OutputType <p>Output type.</p>
     * @param string $Description <p>Output description.</p>
     * @param string $Protocol <p>Output protocol.</p>
     * @param array $OutputAddressList <p>List of output egress address information.</p>
     * @param string $OutputRegion <p>Output region.</p>
     * @param DescribeOutputSRTSettings $SRTSettings <p>SRT configuration information of the output.</p>
     * @param DescribeOutputRTPSettings $RTPSettings <p>Output RTP configuration message.</p>
     * @param DescribeOutputRTMPSettings $RTMPSettings <p>Output RTMP configuration message.</p>
     * @param DescribeOutputRTMPPullSettings $RTMPPullSettings <p>Output RTMP pull configuration message.</p>
     * @param array $AllowIpList <p>CIDR allowlist.<br>Valid when Protocol is RTMP_PULL. If empty, it represents no limit on client IP.</p>
     * @param DescribeOutputRTSPPullSettings $RTSPPullSettings <p>Output RTSP pull stream configuration message.</p>
     * @param DescribeOutputHLSPullSettings $HLSPullSettings <p>Output HLS pull configuration message.</p>
     * @param integer $MaxConcurrent <p>Maximum number of concurrent stream pulls. Maximum value: 4. Default value: 4.</p>
     * @param array $SecurityGroupIds <p>ID of the bound security group.</p>
     * @param array $Zones <p>Availability zone. output currently supports a maximum of one.</p>
     * @param DescribeOutputRISTSettings $RISTSettings <p>Output RIST configuration message.</p>
     * @param PidSelector $PidSelector <p>For streams with multiple audio/video tracks, you can specify the track to be used</p>
     * @param string $OutputKind <p>Output module type, including Pinpoint (single-point output, supports up to four concurrent outputs); MultiMesh (multiple streams output, supports more than four concurrent outputs, currently up to 200). The default type is Pinpoint output. For one Flow, only one MultiMesh output is allowed in one zone.</p>
     * @param array $StreamUrls <p>Output module configuration, related URLs, including the provided pull stream address or the configured relay address for output to a third party</p>
     * @param StreamSelector $StreamSelector <p>For streams with multiple audio/video tracks, you can specify the track to be used</p>
     * @param string $State <p>Output status.</p><p>Enumeration values:</p><ul><li>DISABLED</li><li>ENABLED</li></ul>
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

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
