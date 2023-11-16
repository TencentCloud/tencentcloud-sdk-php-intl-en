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
 * Configuration information of the queried input.
 *
 * @method string getInputId() Obtain Input ID.
 * @method void setInputId(string $InputId) Set Input ID.
 * @method string getInputName() Obtain Input name.
 * @method void setInputName(string $InputName) Set Input name.
 * @method string getDescription() Obtain Input description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Input description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Input protocol.
 * @method void setProtocol(string $Protocol) Set Input protocol.
 * @method array getInputAddressList() Obtain Input address list.
 * @method void setInputAddressList(array $InputAddressList) Set Input address list.
 * @method array getAllowIpList() Obtain Input IP allowlist.
 * @method void setAllowIpList(array $AllowIpList) Set Input IP allowlist.
 * @method DescribeInputSRTSettings getSRTSettings() Obtain SRT configuration information of input.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSRTSettings(DescribeInputSRTSettings $SRTSettings) Set SRT configuration information of input.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method DescribeInputRTPSettings getRTPSettings() Obtain RTP configuration information of input.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRTPSettings(DescribeInputRTPSettings $RTPSettings) Set RTP configuration information of input.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getInputRegion() Obtain Input region.
 * @method void setInputRegion(string $InputRegion) Set Input region.
 * @method DescribeInputRTMPSettings getRTMPSettings() Obtain RTMP configuration information of an input
 * @method void setRTMPSettings(DescribeInputRTMPSettings $RTMPSettings) Set RTMP configuration information of an input
 * @method string getFailOver() Obtain Input failover
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setFailOver(string $FailOver) Set Input failover
Note: this field may return `null`, indicating that no valid value was found.
 * @method DescribeInputRTMPPullSettings getRTMPPullSettings() Obtain 
 * @method void setRTMPPullSettings(DescribeInputRTMPPullSettings $RTMPPullSettings) Set 
 * @method DescribeInputRTSPPullSettings getRTSPPullSettings() Obtain 
 * @method void setRTSPPullSettings(DescribeInputRTSPPullSettings $RTSPPullSettings) Set 
 * @method DescribeInputHLSPullSettings getHLSPullSettings() Obtain 
 * @method void setHLSPullSettings(DescribeInputHLSPullSettings $HLSPullSettings) Set 
 * @method ResilientStreamConf getResilientStream() Obtain 
 * @method void setResilientStream(ResilientStreamConf $ResilientStream) Set 
 * @method array getSecurityGroupIds() Obtain The bound security group ID.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set The bound security group ID.
 */
class DescribeInput extends AbstractModel
{
    /**
     * @var string Input ID.
     */
    public $InputId;

    /**
     * @var string Input name.
     */
    public $InputName;

    /**
     * @var string Input description.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Input protocol.
     */
    public $Protocol;

    /**
     * @var array Input address list.
     */
    public $InputAddressList;

    /**
     * @var array Input IP allowlist.
     */
    public $AllowIpList;

    /**
     * @var DescribeInputSRTSettings SRT configuration information of input.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SRTSettings;

    /**
     * @var DescribeInputRTPSettings RTP configuration information of input.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RTPSettings;

    /**
     * @var string Input region.
     */
    public $InputRegion;

    /**
     * @var DescribeInputRTMPSettings RTMP configuration information of an input
     */
    public $RTMPSettings;

    /**
     * @var string Input failover
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $FailOver;

    /**
     * @var DescribeInputRTMPPullSettings 
     */
    public $RTMPPullSettings;

    /**
     * @var DescribeInputRTSPPullSettings 
     */
    public $RTSPPullSettings;

    /**
     * @var DescribeInputHLSPullSettings 
     */
    public $HLSPullSettings;

    /**
     * @var ResilientStreamConf 
     */
    public $ResilientStream;

    /**
     * @var array The bound security group ID.
     */
    public $SecurityGroupIds;

    /**
     * @param string $InputId Input ID.
     * @param string $InputName Input name.
     * @param string $Description Input description.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Input protocol.
     * @param array $InputAddressList Input address list.
     * @param array $AllowIpList Input IP allowlist.
     * @param DescribeInputSRTSettings $SRTSettings SRT configuration information of input.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param DescribeInputRTPSettings $RTPSettings RTP configuration information of input.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $InputRegion Input region.
     * @param DescribeInputRTMPSettings $RTMPSettings RTMP configuration information of an input
     * @param string $FailOver Input failover
Note: this field may return `null`, indicating that no valid value was found.
     * @param DescribeInputRTMPPullSettings $RTMPPullSettings 
     * @param DescribeInputRTSPPullSettings $RTSPPullSettings 
     * @param DescribeInputHLSPullSettings $HLSPullSettings 
     * @param ResilientStreamConf $ResilientStream 
     * @param array $SecurityGroupIds The bound security group ID.
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
    }
}
