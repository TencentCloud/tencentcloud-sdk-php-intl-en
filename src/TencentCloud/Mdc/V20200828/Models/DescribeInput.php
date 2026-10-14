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
 * Query input configuration message.
 *
 * @method string getInputId() Obtain Input Id.
 * @method void setInputId(string $InputId) Set Input Id.
 * @method string getInputName() Obtain Input name.
 * @method void setInputName(string $InputName) Set Input name.
 * @method string getDescription() Obtain Input description.
 * @method void setDescription(string $Description) Set Input description.
 * @method string getProtocol() Obtain Input protocol.
 * @method void setProtocol(string $Protocol) Set Input protocol.
 * @method array getInputAddressList() Obtain Input the address list.
 * @method void setInputAddressList(array $InputAddressList) Set Input the address list.
 * @method array getAllowIpList() Obtain Input the IP whitelist list.
 * @method void setAllowIpList(array $AllowIpList) Set Input the IP whitelist list.
 * @method DescribeInputSRTSettings getSRTSettings() Obtain SRT configuration information of the input.
 * @method void setSRTSettings(DescribeInputSRTSettings $SRTSettings) Set SRT configuration information of the input.
 * @method DescribeInputRTPSettings getRTPSettings() Obtain Input RTP configuration message.
 * @method void setRTPSettings(DescribeInputRTPSettings $RTPSettings) Set Input RTP configuration message.
 * @method string getInputRegion() Obtain Input region.
 * @method void setInputRegion(string $InputRegion) Set Input region.
 * @method DescribeInputRTMPSettings getRTMPSettings() Obtain Input RTMP configuration message.
 * @method void setRTMPSettings(DescribeInputRTMPSettings $RTMPSettings) Set Input RTMP configuration message.
 * @method string getFailOver() Obtain Primary/replica switch input.
 * @method void setFailOver(string $FailOver) Set Primary/replica switch input.
 * @method array getZones() Obtain Availability zone configuration. In the current situation with disaster recovery enabled, there can be up to two, corresponding to pipeline 0 and 1 in sequence. Otherwise, there is only one availability zone.
 * @method void setZones(array $Zones) Set Availability zone configuration. In the current situation with disaster recovery enabled, there can be up to two, corresponding to pipeline 0 and 1 in sequence. Otherwise, there is only one availability zone.
 * @method DescribeInputRTMPPullSettings getRTMPPullSettings() Obtain Input RTMP_PULL configuration message.
 * @method void setRTMPPullSettings(DescribeInputRTMPPullSettings $RTMPPullSettings) Set Input RTMP_PULL configuration message.
 * @method DescribeInputRTSPPullSettings getRTSPPullSettings() Obtain Input RTSP_PULL configuration message.
 * @method void setRTSPPullSettings(DescribeInputRTSPPullSettings $RTSPPullSettings) Set Input RTSP_PULL configuration message.
 * @method DescribeInputHLSPullSettings getHLSPullSettings() Obtain Input HLS_PULL configuration message.
 * @method void setHLSPullSettings(DescribeInputHLSPullSettings $HLSPullSettings) Set Input HLS_PULL configuration message.
 * @method ResilientStreamConf getResilientStream() Obtain Configuration message for smooth streaming during delayed broadcasting.
 * @method void setResilientStream(ResilientStreamConf $ResilientStream) Set Configuration message for smooth streaming during delayed broadcasting.
 * @method array getSecurityGroupIds() Obtain Bound input security group ID.	
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Bound input security group ID.	
 * @method DescribeInputRISTSettings getRISTSettings() Obtain Input RIST configuration message.
 * @method void setRISTSettings(DescribeInputRISTSettings $RISTSettings) Set Input RIST configuration message.
 * @method array getStreamUrls() Obtain Input URL information related to module settings, including the provided streaming address or the configured third-party source stream URL.
 * @method void setStreamUrls(array $StreamUrls) Set Input URL information related to module settings, including the provided streaming address or the configured third-party source stream URL.
 * @method FailOverOption getFailOverOption() Obtain Disaster recovery configuration item
 * @method void setFailOverOption(FailOverOption $FailOverOption) Set Disaster recovery configuration item
 */
class DescribeInput extends AbstractModel
{
    /**
     * @var string Input Id.
     */
    public $InputId;

    /**
     * @var string Input name.
     */
    public $InputName;

    /**
     * @var string Input description.
     */
    public $Description;

    /**
     * @var string Input protocol.
     */
    public $Protocol;

    /**
     * @var array Input the address list.
     */
    public $InputAddressList;

    /**
     * @var array Input the IP whitelist list.
     */
    public $AllowIpList;

    /**
     * @var DescribeInputSRTSettings SRT configuration information of the input.
     */
    public $SRTSettings;

    /**
     * @var DescribeInputRTPSettings Input RTP configuration message.
     */
    public $RTPSettings;

    /**
     * @var string Input region.
     */
    public $InputRegion;

    /**
     * @var DescribeInputRTMPSettings Input RTMP configuration message.
     */
    public $RTMPSettings;

    /**
     * @var string Primary/replica switch input.
     */
    public $FailOver;

    /**
     * @var array Availability zone configuration. In the current situation with disaster recovery enabled, there can be up to two, corresponding to pipeline 0 and 1 in sequence. Otherwise, there is only one availability zone.
     */
    public $Zones;

    /**
     * @var DescribeInputRTMPPullSettings Input RTMP_PULL configuration message.
     */
    public $RTMPPullSettings;

    /**
     * @var DescribeInputRTSPPullSettings Input RTSP_PULL configuration message.
     */
    public $RTSPPullSettings;

    /**
     * @var DescribeInputHLSPullSettings Input HLS_PULL configuration message.
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
     * @var DescribeInputRISTSettings Input RIST configuration message.
     */
    public $RISTSettings;

    /**
     * @var array Input URL information related to module settings, including the provided streaming address or the configured third-party source stream URL.
     */
    public $StreamUrls;

    /**
     * @var FailOverOption Disaster recovery configuration item
     */
    public $FailOverOption;

    /**
     * @param string $InputId Input Id.
     * @param string $InputName Input name.
     * @param string $Description Input description.
     * @param string $Protocol Input protocol.
     * @param array $InputAddressList Input the address list.
     * @param array $AllowIpList Input the IP whitelist list.
     * @param DescribeInputSRTSettings $SRTSettings SRT configuration information of the input.
     * @param DescribeInputRTPSettings $RTPSettings Input RTP configuration message.
     * @param string $InputRegion Input region.
     * @param DescribeInputRTMPSettings $RTMPSettings Input RTMP configuration message.
     * @param string $FailOver Primary/replica switch input.
     * @param array $Zones Availability zone configuration. In the current situation with disaster recovery enabled, there can be up to two, corresponding to pipeline 0 and 1 in sequence. Otherwise, there is only one availability zone.
     * @param DescribeInputRTMPPullSettings $RTMPPullSettings Input RTMP_PULL configuration message.
     * @param DescribeInputRTSPPullSettings $RTSPPullSettings Input RTSP_PULL configuration message.
     * @param DescribeInputHLSPullSettings $HLSPullSettings Input HLS_PULL configuration message.
     * @param ResilientStreamConf $ResilientStream Configuration message for smooth streaming during delayed broadcasting.
     * @param array $SecurityGroupIds Bound input security group ID.	
     * @param DescribeInputRISTSettings $RISTSettings Input RIST configuration message.
     * @param array $StreamUrls Input URL information related to module settings, including the provided streaming address or the configured third-party source stream URL.
     * @param FailOverOption $FailOverOption Disaster recovery configuration item
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("InputAddressList",$param) and $param["InputAddressList"] !== null) {
            $this->InputAddressList = [];
            foreach ($param["InputAddressList"] as $key => $value){
                $obj = new InputAddress();
                $obj->deserialize($value);
                array_push($this->InputAddressList, $obj);
            }
        }

        if (array_key_exists("AllowIpList",$param) and $param["AllowIpList"] !== null) {
            $this->AllowIpList = $param["AllowIpList"];
        }

        if (array_key_exists("SRTSettings",$param) and $param["SRTSettings"] !== null) {
            $this->SRTSettings = new DescribeInputSRTSettings();
            $this->SRTSettings->deserialize($param["SRTSettings"]);
        }

        if (array_key_exists("RTPSettings",$param) and $param["RTPSettings"] !== null) {
            $this->RTPSettings = new DescribeInputRTPSettings();
            $this->RTPSettings->deserialize($param["RTPSettings"]);
        }

        if (array_key_exists("InputRegion",$param) and $param["InputRegion"] !== null) {
            $this->InputRegion = $param["InputRegion"];
        }

        if (array_key_exists("RTMPSettings",$param) and $param["RTMPSettings"] !== null) {
            $this->RTMPSettings = new DescribeInputRTMPSettings();
            $this->RTMPSettings->deserialize($param["RTMPSettings"]);
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("RTMPPullSettings",$param) and $param["RTMPPullSettings"] !== null) {
            $this->RTMPPullSettings = new DescribeInputRTMPPullSettings();
            $this->RTMPPullSettings->deserialize($param["RTMPPullSettings"]);
        }

        if (array_key_exists("RTSPPullSettings",$param) and $param["RTSPPullSettings"] !== null) {
            $this->RTSPPullSettings = new DescribeInputRTSPPullSettings();
            $this->RTSPPullSettings->deserialize($param["RTSPPullSettings"]);
        }

        if (array_key_exists("HLSPullSettings",$param) and $param["HLSPullSettings"] !== null) {
            $this->HLSPullSettings = new DescribeInputHLSPullSettings();
            $this->HLSPullSettings->deserialize($param["HLSPullSettings"]);
        }

        if (array_key_exists("ResilientStream",$param) and $param["ResilientStream"] !== null) {
            $this->ResilientStream = new ResilientStreamConf();
            $this->ResilientStream->deserialize($param["ResilientStream"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("RISTSettings",$param) and $param["RISTSettings"] !== null) {
            $this->RISTSettings = new DescribeInputRISTSettings();
            $this->RISTSettings->deserialize($param["RISTSettings"]);
        }

        if (array_key_exists("StreamUrls",$param) and $param["StreamUrls"] !== null) {
            $this->StreamUrls = [];
            foreach ($param["StreamUrls"] as $key => $value){
                $obj = new StreamUrlDetail();
                $obj->deserialize($value);
                array_push($this->StreamUrls, $obj);
            }
        }

        if (array_key_exists("FailOverOption",$param) and $param["FailOverOption"] !== null) {
            $this->FailOverOption = new FailOverOption();
            $this->FailOverOption->deserialize($param["FailOverOption"]);
        }
    }
}
