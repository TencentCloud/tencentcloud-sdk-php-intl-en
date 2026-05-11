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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Intelligent landscape-to-portrait task input type.
 *
 * @method integer getDefinition() Obtain <p>ID of the horizontal-to-vertical video transformation template.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefinition(integer $Definition) Set <p>ID of the horizontal-to-vertical video transformation template.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExtendedParameter() Obtain <p>Extended parameter.</p>
 * @method void setExtendedParameter(string $ExtendedParameter) Set <p>Extended parameter.</p>
 */
class AiAnalysisTaskHorizontalToVerticalInput extends AbstractModel
{
    /**
     * @var integer <p>ID of the horizontal-to-vertical video transformation template.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Definition;

    /**
     * @var string <p>Extended parameter.</p>
     */
    public $ExtendedParameter;

    /**
     * @param integer $Definition <p>ID of the horizontal-to-vertical video transformation template.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExtendedParameter <p>Extended parameter.</p>
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

        if (array_key_exists("ExtendedParameter",$param) and $param["ExtendedParameter"] !== null) {
            $this->ExtendedParameter = $param["ExtendedParameter"];
        }
    }
}
