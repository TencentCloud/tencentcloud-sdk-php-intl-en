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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Smart subtitle input struct.
 *
 * @method integer getDefinition() Obtain Smart subtitle template ID.	
 * @method void setDefinition(integer $Definition) Set Smart subtitle template ID.	
 * @method string getUserExtPara() Obtain User extension field, which does not need to be filled in for general scenarios.
 * @method void setUserExtPara(string $UserExtPara) Set User extension field, which does not need to be filled in for general scenarios.
 * @method RawSmartSubtitleParameter getRawParameter() Obtain Custom smart subtitle parameter. It takes effect when Definition is set to 0. This parameter is used in high customization scenarios. It is recommended that you preferentially use Definition to specify smart subtitle parameters.	
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRawParameter(RawSmartSubtitleParameter $RawParameter) Set Custom smart subtitle parameter. It takes effect when Definition is set to 0. This parameter is used in high customization scenarios. It is recommended that you preferentially use Definition to specify smart subtitle parameters.	
Note: This field may return null, indicating that no valid value can be obtained.
 */
class SmartSubtitlesTaskInput extends AbstractModel
{
    /**
     * @var integer Smart subtitle template ID.	
     */
    public $Definition;

    /**
     * @var string User extension field, which does not need to be filled in for general scenarios.
     */
    public $UserExtPara;

    /**
     * @var RawSmartSubtitleParameter Custom smart subtitle parameter. It takes effect when Definition is set to 0. This parameter is used in high customization scenarios. It is recommended that you preferentially use Definition to specify smart subtitle parameters.	
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RawParameter;

    /**
     * @param integer $Definition Smart subtitle template ID.	
     * @param string $UserExtPara User extension field, which does not need to be filled in for general scenarios.
     * @param RawSmartSubtitleParameter $RawParameter Custom smart subtitle parameter. It takes effect when Definition is set to 0. This parameter is used in high customization scenarios. It is recommended that you preferentially use Definition to specify smart subtitle parameters.	
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("UserExtPara",$param) and $param["UserExtPara"] !== null) {
            $this->UserExtPara = $param["UserExtPara"];
        }

        if (array_key_exists("RawParameter",$param) and $param["RawParameter"] !== null) {
            $this->RawParameter = new RawSmartSubtitleParameter();
            $this->RawParameter->deserialize($param["RawParameter"]);
        }
    }
}
