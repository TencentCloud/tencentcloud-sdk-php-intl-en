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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input box configuration
 *
 * @method array getInputBoxButtons() Obtain Input box buttons: 1: Upload image, 2: Upload documents, 3: Tencent Docs, 4: Online search
 * @method void setInputBoxButtons(array $InputBoxButtons) Set Input box buttons: 1: Upload image, 2: Upload documents, 3: Tencent Docs, 4: Online search
 */
class InputBoxConfig extends AbstractModel
{
    /**
     * @var array Input box buttons: 1: Upload image, 2: Upload documents, 3: Tencent Docs, 4: Online search
     */
    public $InputBoxButtons;

    /**
     * @param array $InputBoxButtons Input box buttons: 1: Upload image, 2: Upload documents, 3: Tencent Docs, 4: Online search
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
        if (array_key_exists("InputBoxButtons",$param) and $param["InputBoxButtons"] !== null) {
            $this->InputBoxButtons = $param["InputBoxButtons"];
        }
    }
}
