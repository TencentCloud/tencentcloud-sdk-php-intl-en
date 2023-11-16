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
 * The information of the output to create.
 *
 * @method string getOutputName() Obtain The output name.
 * @method void setOutputName(string $OutputName) Set The output name.
 * @method string getDescription() Obtain Description of the output.
 * @method void setDescription(string $Description) Set Description of the output.
 * @method string getProtocol() Obtain The output protocol. Valid values: SRT, RTP, RTMP, RTMP_PULL.
 * @method void setProtocol(string $Protocol) Set The output protocol. Valid values: SRT, RTP, RTMP, RTMP_PULL.
 * @method string getOutputRegion() Obtain The output region.
 * @method void setOutputRegion(string $OutputRegion) Set The output region.
 * @method CreateOutputSrtSettings getSRTSettings() Obtain The SRT configuration.
 * @method void setSRTSettings(CreateOutputSrtSettings $SRTSettings) Set The SRT configuration.
 * @method CreateOutputRTMPSettings getRTMPSettings() Obtain The RTMP configuration.
 * @method void setRTMPSettings(CreateOutputRTMPSettings $RTMPSettings) Set The RTMP configuration.
 * @method CreateOutputInfoRTPSettings getRTPSettings() Obtain The RTP configuration.
 * @method void setRTPSettings(CreateOutputInfoRTPSettings $RTPSettings) Set The RTP configuration.
 * @method array getAllowIpList() Obtain The IP allowlist. The address must be in CIDR format, such as `0.0.0.0/0`.
This parameter is valid if `Protocol` is set to `RTMP_PULL`. If it is left empty, there is no restriction on clients’ IP addresses.
 * @method void setAllowIpList(array $AllowIpList) Set The IP allowlist. The address must be in CIDR format, such as `0.0.0.0/0`.
This parameter is valid if `Protocol` is set to `RTMP_PULL`. If it is left empty, there is no restriction on clients’ IP addresses.
 * @method integer getMaxConcurrent() Obtain 
 * @method void setMaxConcurrent(integer $MaxConcurrent) Set 
 * @method array getSecurityGroupIds() Obtain The bound security group IDs.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set The bound security group IDs.
 */
class CreateOutputInfo extends AbstractModel
{
    /**
     * @var string The output name.
     */
    public $OutputName;

    /**
     * @var string Description of the output.
     */
    public $Description;

    /**
     * @var string The output protocol. Valid values: SRT, RTP, RTMP, RTMP_PULL.
     */
    public $Protocol;

    /**
     * @var string The output region.
     */
    public $OutputRegion;

    /**
     * @var CreateOutputSrtSettings The SRT configuration.
     */
    public $SRTSettings;

    /**
     * @var CreateOutputRTMPSettings The RTMP configuration.
     */
    public $RTMPSettings;

    /**
     * @var CreateOutputInfoRTPSettings The RTP configuration.
     */
    public $RTPSettings;

    /**
     * @var array The IP allowlist. The address must be in CIDR format, such as `0.0.0.0/0`.
This parameter is valid if `Protocol` is set to `RTMP_PULL`. If it is left empty, there is no restriction on clients’ IP addresses.
     */
    public $AllowIpList;

    /**
     * @var integer 
     */
    public $MaxConcurrent;

    /**
     * @var array The bound security group IDs.
     */
    public $SecurityGroupIds;

    /**
     * @param string $OutputName The output name.
     * @param string $Description Description of the output.
     * @param string $Protocol The output protocol. Valid values: SRT, RTP, RTMP, RTMP_PULL.
     * @param string $OutputRegion The output region.
     * @param CreateOutputSrtSettings $SRTSettings The SRT configuration.
     * @param CreateOutputRTMPSettings $RTMPSettings The RTMP configuration.
     * @param CreateOutputInfoRTPSettings $RTPSettings The RTP configuration.
     * @param array $AllowIpList The IP allowlist. The address must be in CIDR format, such as `0.0.0.0/0`.
This parameter is valid if `Protocol` is set to `RTMP_PULL`. If it is left empty, there is no restriction on clients’ IP addresses.
     * @param integer $MaxConcurrent 
     * @param array $SecurityGroupIds The bound security group IDs.
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
    }
}
