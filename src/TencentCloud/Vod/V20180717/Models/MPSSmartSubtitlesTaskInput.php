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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Smart subtitle input struct.
 *
 * @method integer getDefinition() Obtain <p>Smart subtitle template ID.</p>
 * @method void setDefinition(integer $Definition) Set <p>Smart subtitle template ID.</p>
 * @method MPSRawSmartSubtitleParameter getRawParameter() Obtain <p>Custom smart subtitle parameter. It takes effect when Definition is set to 0. This parameter is used in high customization scenarios. It is recommended that you preferentially use Definition to specify smart subtitle parameters.</p>
 * @method void setRawParameter(MPSRawSmartSubtitleParameter $RawParameter) Set <p>Custom smart subtitle parameter. It takes effect when Definition is set to 0. This parameter is used in high customization scenarios. It is recommended that you preferentially use Definition to specify smart subtitle parameters.</p>
 */
class MPSSmartSubtitlesTaskInput extends AbstractModel
{
    /**
     * @var integer <p>Smart subtitle template ID.</p>
     */
    public $Definition;

    /**
     * @var MPSRawSmartSubtitleParameter <p>Custom smart subtitle parameter. It takes effect when Definition is set to 0. This parameter is used in high customization scenarios. It is recommended that you preferentially use Definition to specify smart subtitle parameters.</p>
     */
    public $RawParameter;

    /**
     * @param integer $Definition <p>Smart subtitle template ID.</p>
     * @param MPSRawSmartSubtitleParameter $RawParameter <p>Custom smart subtitle parameter. It takes effect when Definition is set to 0. This parameter is used in high customization scenarios. It is recommended that you preferentially use Definition to specify smart subtitle parameters.</p>
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

        if (array_key_exists("RawParameter",$param) and $param["RawParameter"] !== null) {
            $this->RawParameter = new MPSRawSmartSubtitleParameter();
            $this->RawParameter->deserialize($param["RawParameter"]);
        }
    }
}
