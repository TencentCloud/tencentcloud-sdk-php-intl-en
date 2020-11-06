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
 * Parameters of the modified input.
 *
 * @method string getInputId() Obtain Input ID.
 * @method void setInputId(string $InputId) Set Input ID.
 * @method string getInputName() Obtain Input name.
 * @method void setInputName(string $InputName) Set Input name.
 * @method string getDescription() Obtain Input description.
 * @method void setDescription(string $Description) Set Input description.
 * @method array getAllowIpList() Obtain Allowed push IP in CIDR format.
 * @method void setAllowIpList(array $AllowIpList) Set Allowed push IP in CIDR format.
 * @method CreateInputSRTSettings getSRTSettings() Obtain SRT configuration information.
 * @method void setSRTSettings(CreateInputSRTSettings $SRTSettings) Set SRT configuration information.
 * @method CreateInputRTPSettings getRTPSettings() Obtain RTP configuration information.
 * @method void setRTPSettings(CreateInputRTPSettings $RTPSettings) Set RTP configuration information.
 */
class ModifyInput extends AbstractModel
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
     */
    public $Description;

    /**
     * @var array Allowed push IP in CIDR format.
     */
    public $AllowIpList;

    /**
     * @var CreateInputSRTSettings SRT configuration information.
     */
    public $SRTSettings;

    /**
     * @var CreateInputRTPSettings RTP configuration information.
     */
    public $RTPSettings;

    /**
     * @param string $InputId Input ID.
     * @param string $InputName Input name.
     * @param string $Description Input description.
     * @param array $AllowIpList Allowed push IP in CIDR format.
     * @param CreateInputSRTSettings $SRTSettings SRT configuration information.
     * @param CreateInputRTPSettings $RTPSettings RTP configuration information.
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
    }
}
