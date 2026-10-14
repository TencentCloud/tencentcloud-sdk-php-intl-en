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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Optional issue
 *
 * @method string getLabel() Obtain <p>Tag of the option</p>
 * @method void setLabel(string $Label) Set <p>Tag of the option</p>
 * @method string getDescription() Obtain <p>Description of the option.</p>
 * @method void setDescription(string $Description) Set <p>Description of the option.</p>
 */
class QuestionOption extends AbstractModel
{
    /**
     * @var string <p>Tag of the option</p>
     */
    public $Label;

    /**
     * @var string <p>Description of the option.</p>
     */
    public $Description;

    /**
     * @param string $Label <p>Tag of the option</p>
     * @param string $Description <p>Description of the option.</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
