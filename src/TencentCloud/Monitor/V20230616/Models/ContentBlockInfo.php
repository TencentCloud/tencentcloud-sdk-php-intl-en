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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Each ContentBlockInfo corresponds to an AGUI event converted from a downstream ContentBlock.
 *
 * @method string getType() Obtain <p>Type.</p>
 * @method void setType(string $Type) Set <p>Type.</p>
 * @method string getData() Obtain <p>Data content.</p>
 * @method void setData(string $Data) Set <p>Data content.</p>
 */
class ContentBlockInfo extends AbstractModel
{
    /**
     * @var string <p>Type.</p>
     */
    public $Type;

    /**
     * @var string <p>Data content.</p>
     */
    public $Data;

    /**
     * @param string $Type <p>Type.</p>
     * @param string $Data <p>Data content.</p>
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
