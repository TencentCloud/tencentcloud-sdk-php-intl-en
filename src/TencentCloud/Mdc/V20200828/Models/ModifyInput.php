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
 * The new input configuration.
 *
 * @method string getInputId() Obtain The input ID.
 * @method void setInputId(string $InputId) Set The input ID.
 * @method string getInputName() Obtain The input name.
 * @method void setInputName(string $InputName) Set The input name.
 * @method string getDescription() Obtain The description of the input.
 * @method void setDescription(string $Description) Set The description of the input.
 * @method array getAllowIpList() Obtain The IP addresses (CIDR) allowed to push streams.
 * @method void setAllowIpList(array $AllowIpList) Set The IP addresses (CIDR) allowed to push streams.
 * @method CreateInputSRTSettings getSRTSettings() Obtain The SRT configuration information.
 * @method void setSRTSettings(CreateInputSRTSettings $SRTSettings) Set The SRT configuration information.
 * @method CreateInputRTPSettings getRTPSettings() Obtain The RTP configuration information.
 * @method void setRTPSettings(CreateInputRTPSettings $RTPSettings) Set The RTP configuration information.
 * @method string getProtocol() Obtain The input protocol. Valid values: SRT, RTP, RTMP.
If there is an RTP input, the output must be RTP.
If there is an RTMP input, the output must be SRT or RTMP.
If there is an SRT input, the output must be SRT.
 * @method void setProtocol(string $Protocol) Set The input protocol. Valid values: SRT, RTP, RTMP.
If there is an RTP input, the output must be RTP.
If there is an RTMP input, the output must be SRT or RTMP.
If there is an SRT input, the output must be SRT.
 * @method string getFailOver() Obtain Whether to enable input failover. Valid values: OPEN, CLOSE.
 * @method void setFailOver(string $FailOver) Set Whether to enable input failover. Valid values: OPEN, CLOSE.
 */
class ModifyInput extends AbstractModel
{
    /**
     * @var string The input ID.
     */
    public $InputId;

    /**
     * @var string The input name.
     */
    public $InputName;

    /**
     * @var string The description of the input.
     */
    public $Description;

    /**
     * @var array The IP addresses (CIDR) allowed to push streams.
     */
    public $AllowIpList;

    /**
     * @var CreateInputSRTSettings The SRT configuration information.
     */
    public $SRTSettings;

    /**
     * @var CreateInputRTPSettings The RTP configuration information.
     */
    public $RTPSettings;

    /**
     * @var string The input protocol. Valid values: SRT, RTP, RTMP.
If there is an RTP input, the output must be RTP.
If there is an RTMP input, the output must be SRT or RTMP.
If there is an SRT input, the output must be SRT.
     */
    public $Protocol;

    /**
     * @var string Whether to enable input failover. Valid values: OPEN, CLOSE.
     */
    public $FailOver;

    /**
     * @param string $InputId The input ID.
     * @param string $InputName The input name.
     * @param string $Description The description of the input.
     * @param array $AllowIpList The IP addresses (CIDR) allowed to push streams.
     * @param CreateInputSRTSettings $SRTSettings The SRT configuration information.
     * @param CreateInputRTPSettings $RTPSettings The RTP configuration information.
     * @param string $Protocol The input protocol. Valid values: SRT, RTP, RTMP.
If there is an RTP input, the output must be RTP.
If there is an RTMP input, the output must be SRT or RTMP.
If there is an SRT input, the output must be SRT.
     * @param string $FailOver Whether to enable input failover. Valid values: OPEN, CLOSE.
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
    }
}
