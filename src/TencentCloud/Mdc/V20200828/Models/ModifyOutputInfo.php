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
     * @param string $OutputId The ID of the output to modify.
     * @param string $OutputName The output name.
     * @param string $Description The description of the output.
     * @param string $Protocol The output protocol. Valid values: SRT, RTP, RTMP.
     * @param CreateOutputSrtSettings $SRTSettings The SRT relay configuration.
     * @param CreateOutputInfoRTPSettings $RTPSettings The RTP relay configuration.
     * @param CreateOutputRTMPSettings $RTMPSettings The RTMP relay configuration.
     * @param array $AllowIpList IP whitelist, in CIDR format, such as 0.0.0.0/0. This is valid when Protocol is RTMP_PULL, and empty means no restriction on client IP.
     * @param integer $MaxConcurrent The maximum number of concurrent stream pulls is 4, and the default value is 4.
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
    }
}
