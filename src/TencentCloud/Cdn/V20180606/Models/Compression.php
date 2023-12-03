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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Smart compression configuration. By default, Gzip compression is performed for files with js, html, css, xml, json, shtml, and htm suffixes, and with sizes between 256 and 2097152 bytes.
 *
 * @method string getSwitch() Obtain Whether to enable smart compression. Values:
`on`: Enable
`off`: Disable
 * @method void setSwitch(string $Switch) Set Whether to enable smart compression. Values:
`on`: Enable
`off`: Disable
 * @method array getCompressionRules() Obtain Compression rules array
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCompressionRules(array $CompressionRules) Set Compression rules array
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class Compression extends AbstractModel
{
    /**
     * @var string Whether to enable smart compression. Values:
`on`: Enable
`off`: Disable
     */
    public $Switch;

    /**
     * @var array Compression rules array
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CompressionRules;

    /**
     * @param string $Switch Whether to enable smart compression. Values:
`on`: Enable
`off`: Disable
     * @param array $CompressionRules Compression rules array
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("CompressionRules",$param) and $param["CompressionRules"] !== null) {
            $this->CompressionRules = [];
            foreach ($param["CompressionRules"] as $key => $value){
                $obj = new CompressionRule();
                $obj->deserialize($value);
                array_push($this->CompressionRules, $obj);
            }
        }
    }
}
