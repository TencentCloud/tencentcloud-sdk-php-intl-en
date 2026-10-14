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
 * Output parameter setting for synchronous dubbing.
 *
 * @method string getType() Obtain <p>Output type of the synthesis result. </p><p>Enumeration values: </p><ul><li>data: Audio base64 encoding, </li><li>url: Audio URL, valid for 24 hours.</li></ul>
 * @method void setType(string $Type) Set <p>Output type of the synthesis result. </p><p>Enumeration values: </p><ul><li>data: Audio base64 encoding, </li><li>url: Audio URL, valid for 24 hours.</li></ul>
 */
class SyncDubbingOutputOption extends AbstractModel
{
    /**
     * @var string <p>Output type of the synthesis result. </p><p>Enumeration values: </p><ul><li>data: Audio base64 encoding, </li><li>url: Audio URL, valid for 24 hours.</li></ul>
     */
    public $Type;

    /**
     * @param string $Type <p>Output type of the synthesis result. </p><p>Enumeration values: </p><ul><li>data: Audio base64 encoding, </li><li>url: Audio URL, valid for 24 hours.</li></ul>
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
    }
}
