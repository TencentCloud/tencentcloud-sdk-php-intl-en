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
 * Intelligent landscape-to-portrait task input type.
 *
 * @method integer getDefinition() Obtain Intelligent landscape-to-portrait template ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefinition(integer $Definition) Set Intelligent landscape-to-portrait template ID.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AiAnalysisTaskHorizontalToVerticalInput extends AbstractModel
{
    /**
     * @var integer Intelligent landscape-to-portrait template ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Definition;

    /**
     * @param integer $Definition Intelligent landscape-to-portrait template ID.
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
