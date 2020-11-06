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
 * Configuration of the modified output.
 *
 * @method string getOutputId() Obtain ID of the output to be modified.
 * @method void setOutputId(string $OutputId) Set ID of the output to be modified.
 * @method string getOutputName() Obtain Output name.
 * @method void setOutputName(string $OutputName) Set Output name.
 * @method string getDescription() Obtain Output description.
 * @method void setDescription(string $Description) Set Output description.
 * @method string getProtocol() Obtain Output push protocol. Valid values: SRT|RTMP.
 * @method void setProtocol(string $Protocol) Set Output push protocol. Valid values: SRT|RTMP.
 * @method CreateOutputSrtSettings getSRTSettings() Obtain Configuration of SRT push.
 * @method void setSRTSettings(CreateOutputSrtSettings $SRTSettings) Set Configuration of SRT push.
 * @method CreateOutputRTPSettings getRTPSettings() Obtain Configuration of RTP push.
 * @method void setRTPSettings(CreateOutputRTPSettings $RTPSettings) Set Configuration of RTP push.
 * @method CreateOutputRTMPSettings getRTMPSettings() Obtain Configuration of RTMP push.
 * @method void setRTMPSettings(CreateOutputRTMPSettings $RTMPSettings) Set Configuration of RTMP push.
 */
class ModifyOutput extends AbstractModel
{
    /**
     * @var string ID of the output to be modified.
     */
    public $OutputId;

    /**
     * @var string Output name.
     */
    public $OutputName;

    /**
     * @var string Output description.
     */
    public $Description;

    /**
     * @var string Output push protocol. Valid values: SRT|RTMP.
     */
    public $Protocol;

    /**
     * @var CreateOutputSrtSettings Configuration of SRT push.
     */
    public $SRTSettings;

    /**
     * @var CreateOutputRTPSettings Configuration of RTP push.
     */
    public $RTPSettings;

    /**
     * @var CreateOutputRTMPSettings Configuration of RTMP push.
     */
    public $RTMPSettings;

    /**
     * @param string $OutputId ID of the output to be modified.
     * @param string $OutputName Output name.
     * @param string $Description Output description.
     * @param string $Protocol Output push protocol. Valid values: SRT|RTMP.
     * @param CreateOutputSrtSettings $SRTSettings Configuration of SRT push.
     * @param CreateOutputRTPSettings $RTPSettings Configuration of RTP push.
     * @param CreateOutputRTMPSettings $RTMPSettings Configuration of RTMP push.
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
            $this->RTPSettings = new CreateOutputRTPSettings();
            $this->RTPSettings->deserialize($param["RTPSettings"]);
        }

        if (array_key_exists("RTMPSettings",$param) and $param["RTMPSettings"] !== null) {
            $this->RTMPSettings = new CreateOutputRTMPSettings();
            $this->RTMPSettings->deserialize($param["RTMPSettings"]);
        }
    }
}
