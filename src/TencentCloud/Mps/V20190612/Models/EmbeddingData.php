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
 * Embedding API input:
Type   Data type; currently only supports textData  Data content; currently only supports text strings
 *
 * @method string getType() Obtain <p>Data type</p><p>Enumeration values:</p><ul><li>text: Text</li></ul>
 * @method void setType(string $Type) Set <p>Data type</p><p>Enumeration values:</p><ul><li>text: Text</li></ul>
 * @method string getData() Obtain <p>Data content. When Type is text, it is a text string.</p>
 * @method void setData(string $Data) Set <p>Data content. When Type is text, it is a text string.</p>
 */
class EmbeddingData extends AbstractModel
{
    /**
     * @var string <p>Data type</p><p>Enumeration values:</p><ul><li>text: Text</li></ul>
     */
    public $Type;

    /**
     * @var string <p>Data content. When Type is text, it is a text string.</p>
     */
    public $Data;

    /**
     * @param string $Type <p>Data type</p><p>Enumeration values:</p><ul><li>text: Text</li></ul>
     * @param string $Data <p>Data content. When Type is text, it is a text string.</p>
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

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
