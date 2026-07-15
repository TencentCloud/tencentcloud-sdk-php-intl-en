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
 * Custom description variable.
 *
 * @method string getType() Obtain <p>User-defined variable type.</p><p>Parameter format: PascalCase format.</p><p>This cannot be UserPrompt. The default platform template is not adapted for custom content. Submit a ticket if needed.</p>
 * @method void setType(string $Type) Set <p>User-defined variable type.</p><p>Parameter format: PascalCase format.</p><p>This cannot be UserPrompt. The default platform template is not adapted for custom content. Submit a ticket if needed.</p>
 * @method string getDescription() Obtain <p>Custom variable description.</p>
 * @method void setDescription(string $Description) Set <p>Custom variable description.</p>
 */
class CustomVariable extends AbstractModel
{
    /**
     * @var string <p>User-defined variable type.</p><p>Parameter format: PascalCase format.</p><p>This cannot be UserPrompt. The default platform template is not adapted for custom content. Submit a ticket if needed.</p>
     */
    public $Type;

    /**
     * @var string <p>Custom variable description.</p>
     */
    public $Description;

    /**
     * @param string $Type <p>User-defined variable type.</p><p>Parameter format: PascalCase format.</p><p>This cannot be UserPrompt. The default platform template is not adapted for custom content. Submit a ticket if needed.</p>
     * @param string $Description <p>Custom variable description.</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
