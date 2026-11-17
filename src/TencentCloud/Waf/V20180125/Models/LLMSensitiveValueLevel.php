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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sensitive information result structure
 *
 * @method string getLabel() Obtain Sensitive data labels, such as politics and pornography.
 * @method void setLabel(string $Label) Set Sensitive data labels, such as politics and pornography.
 * @method integer getLevel() Obtain Sensitive data level. 250, 300, and 400 represent ultra-strict, strict, and standard levels respectively.
 * @method void setLevel(integer $Level) Set Sensitive data level. 250, 300, and 400 represent ultra-strict, strict, and standard levels respectively.
 */
class LLMSensitiveValueLevel extends AbstractModel
{
    /**
     * @var string Sensitive data labels, such as politics and pornography.
     */
    public $Label;

    /**
     * @var integer Sensitive data level. 250, 300, and 400 represent ultra-strict, strict, and standard levels respectively.
     */
    public $Level;

    /**
     * @param string $Label Sensitive data labels, such as politics and pornography.
     * @param integer $Level Sensitive data level. 250, 300, and 400 represent ultra-strict, strict, and standard levels respectively.
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }
    }
}
