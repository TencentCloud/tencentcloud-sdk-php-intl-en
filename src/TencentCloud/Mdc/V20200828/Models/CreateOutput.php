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
 * Configuration information of the created output.
 *
 * @method string getOutputName() Obtain Output name.
 * @method void setOutputName(string $OutputName) Set Output name.
 * @method string getDescription() Obtain Output description.
 * @method void setDescription(string $Description) Set Output description.
 * @method string getProtocol() Obtain Output protocol.
 * @method void setProtocol(string $Protocol) Set Output protocol.
 * @method string getOutputRegion() Obtain Output region.
 * @method void setOutputRegion(string $OutputRegion) Set Output region.
 * @method CreateOutputSrtSettings getSRTSettings() Obtain SRT configuration of output.
 * @method void setSRTSettings(CreateOutputSrtSettings $SRTSettings) Set SRT configuration of output.
 * @method CreateInputRTPSettings getRTPSettings() Obtain RTP configuration of output.
 * @method void setRTPSettings(CreateInputRTPSettings $RTPSettings) Set RTP configuration of output.
 * @method CreateOutputRTMPSettings getRTMPSettings() Obtain RTMP configuration of output.
 * @method void setRTMPSettings(CreateOutputRTMPSettings $RTMPSettings) Set RTMP configuration of output.
 */
class CreateOutput extends AbstractModel
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
     * @var string Output protocol.
     */
    public $Protocol;

    /**
     * @var string Output region.
     */
    public $OutputRegion;

    /**
     * @var CreateOutputSrtSettings SRT configuration of output.
     */
    public $SRTSettings;

    /**
     * @var CreateInputRTPSettings RTP configuration of output.
     */
    public $RTPSettings;

    /**
     * @var CreateOutputRTMPSettings RTMP configuration of output.
     */
    public $RTMPSettings;

    /**
     * @param string $OutputName Output name.
     * @param string $Description Output description.
     * @param string $Protocol Output protocol.
     * @param string $OutputRegion Output region.
     * @param CreateOutputSrtSettings $SRTSettings SRT configuration of output.
     * @param CreateInputRTPSettings $RTPSettings RTP configuration of output.
     * @param CreateOutputRTMPSettings $RTMPSettings RTMP configuration of output.
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

        if (array_key_exists("RTPSettings",$param) and $param["RTPSettings"] !== null) {
            $this->RTPSettings = new CreateInputRTPSettings();
            $this->RTPSettings->deserialize($param["RTPSettings"]);
        }

        if (array_key_exists("RTMPSettings",$param) and $param["RTMPSettings"] !== null) {
            $this->RTMPSettings = new CreateOutputRTMPSettings();
            $this->RTMPSettings->deserialize($param["RTMPSettings"]);
        }
    }
}
