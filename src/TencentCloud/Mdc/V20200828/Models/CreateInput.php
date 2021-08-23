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
 * Configuration information of the created input.
 *
 * @method string getInputName() Obtain Input name, which can contain 1 to 32 letters, digits, and underscores.
 * @method void setInputName(string $InputName) Set Input name, which can contain 1 to 32 letters, digits, and underscores.
 * @method string getProtocol() Obtain Input protocol. Valid values: `SRT`, `RTP`, `RTMP`
 * @method void setProtocol(string $Protocol) Set Input protocol. Valid values: `SRT`, `RTP`, `RTMP`
 * @method string getDescription() Obtain Input description. Length: [0, 255].
 * @method void setDescription(string $Description) Set Input description. Length: [0, 255].
 * @method array getAllowIpList() Obtain Allowlist of input IPs in CIDR format.
 * @method void setAllowIpList(array $AllowIpList) Set Allowlist of input IPs in CIDR format.
 * @method CreateInputSRTSettings getSRTSettings() Obtain SRT configuration information of input.
 * @method void setSRTSettings(CreateInputSRTSettings $SRTSettings) Set SRT configuration information of input.
 * @method CreateInputRTPSettings getRTPSettings() Obtain RTP configuration information of input.
 * @method void setRTPSettings(CreateInputRTPSettings $RTPSettings) Set RTP configuration information of input.
 * @method string getFailOver() Obtain Input failover. Valid values: `OPEN`, `CLOSE` (default)
 * @method void setFailOver(string $FailOver) Set Input failover. Valid values: `OPEN`, `CLOSE` (default)
 */
class CreateInput extends AbstractModel
{
    /**
     * @var string Input name, which can contain 1 to 32 letters, digits, and underscores.
     */
    public $InputName;

    /**
     * @var string Input protocol. Valid values: `SRT`, `RTP`, `RTMP`
     */
    public $Protocol;

    /**
     * @var string Input description. Length: [0, 255].
     */
    public $Description;

    /**
     * @var array Allowlist of input IPs in CIDR format.
     */
    public $AllowIpList;

    /**
     * @var CreateInputSRTSettings SRT configuration information of input.
     */
    public $SRTSettings;

    /**
     * @var CreateInputRTPSettings RTP configuration information of input.
     */
    public $RTPSettings;

    /**
     * @var string Input failover. Valid values: `OPEN`, `CLOSE` (default)
     */
    public $FailOver;

    /**
     * @param string $InputName Input name, which can contain 1 to 32 letters, digits, and underscores.
     * @param string $Protocol Input protocol. Valid values: `SRT`, `RTP`, `RTMP`
     * @param string $Description Input description. Length: [0, 255].
     * @param array $AllowIpList Allowlist of input IPs in CIDR format.
     * @param CreateInputSRTSettings $SRTSettings SRT configuration information of input.
     * @param CreateInputRTPSettings $RTPSettings RTP configuration information of input.
     * @param string $FailOver Input failover. Valid values: `OPEN`, `CLOSE` (default)
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
        if (array_key_exists("InputName",$param) and $param["InputName"] !== null) {
            $this->InputName = $param["InputName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
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

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }
    }
}
