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
 * Image asynchronous processing extension parameter.
 *
 * @method array getPrompts() Obtain Prompt for model input.
 * @method void setPrompts(array $Prompts) Set Prompt for model input.
 */
class ProcessImageAsyncInputExtendedParameter extends AbstractModel
{
    /**
     * @var array Prompt for model input.
     */
    public $Prompts;

    /**
     * @param array $Prompts Prompt for model input.
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
        if (array_key_exists("Prompts",$param) and $param["Prompts"] !== null) {
            $this->Prompts = $param["Prompts"];
        }
    }
}
