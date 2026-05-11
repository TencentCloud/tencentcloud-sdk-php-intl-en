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
 * Intelligent erasure task
 *
 * @method integer getDefinition() Obtain <p>id of the intelligent erasing template.</p>
 * @method void setDefinition(integer $Definition) Set <p>id of the intelligent erasing template.</p>
 * @method MPSRawSmartEraseParameter getRawParameter() Obtain <p>Custom parameters for intelligent erasure. Valid when Definition is set to 0. This parameter is used in highly customized scenarios. It is recommended to prioritize using Definition to specify intelligent erasure parameters.</p>
 * @method void setRawParameter(MPSRawSmartEraseParameter $RawParameter) Set <p>Custom parameters for intelligent erasure. Valid when Definition is set to 0. This parameter is used in highly customized scenarios. It is recommended to prioritize using Definition to specify intelligent erasure parameters.</p>
 * @method MPSOverrideEraseParameter getOverrideParameter() Obtain <p>Custom parameters for smart erasing. When the value of Definition is not 0, this parameter is valid. When certain erasing parameters in this structure are specified, the specified parameters will be used to overwrite those in the smart erasing template. This parameter is used in highly customized scenarios. It is recommended to use only Definition to specify smart erasing parameters.</p>
 * @method void setOverrideParameter(MPSOverrideEraseParameter $OverrideParameter) Set <p>Custom parameters for smart erasing. When the value of Definition is not 0, this parameter is valid. When certain erasing parameters in this structure are specified, the specified parameters will be used to overwrite those in the smart erasing template. This parameter is used in highly customized scenarios. It is recommended to use only Definition to specify smart erasing parameters.</p>
 */
class MPSSmartEraseTaskInput extends AbstractModel
{
    /**
     * @var integer <p>id of the intelligent erasing template.</p>
     */
    public $Definition;

    /**
     * @var MPSRawSmartEraseParameter <p>Custom parameters for intelligent erasure. Valid when Definition is set to 0. This parameter is used in highly customized scenarios. It is recommended to prioritize using Definition to specify intelligent erasure parameters.</p>
     */
    public $RawParameter;

    /**
     * @var MPSOverrideEraseParameter <p>Custom parameters for smart erasing. When the value of Definition is not 0, this parameter is valid. When certain erasing parameters in this structure are specified, the specified parameters will be used to overwrite those in the smart erasing template. This parameter is used in highly customized scenarios. It is recommended to use only Definition to specify smart erasing parameters.</p>
     */
    public $OverrideParameter;

    /**
     * @param integer $Definition <p>id of the intelligent erasing template.</p>
     * @param MPSRawSmartEraseParameter $RawParameter <p>Custom parameters for intelligent erasure. Valid when Definition is set to 0. This parameter is used in highly customized scenarios. It is recommended to prioritize using Definition to specify intelligent erasure parameters.</p>
     * @param MPSOverrideEraseParameter $OverrideParameter <p>Custom parameters for smart erasing. When the value of Definition is not 0, this parameter is valid. When certain erasing parameters in this structure are specified, the specified parameters will be used to overwrite those in the smart erasing template. This parameter is used in highly customized scenarios. It is recommended to use only Definition to specify smart erasing parameters.</p>
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
            $this->RawParameter = new MPSRawSmartEraseParameter();
            $this->RawParameter->deserialize($param["RawParameter"]);
        }

        if (array_key_exists("OverrideParameter",$param) and $param["OverrideParameter"] !== null) {
            $this->OverrideParameter = new MPSOverrideEraseParameter();
            $this->OverrideParameter->deserialize($param["OverrideParameter"]);
        }
    }
}
