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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Transparent transmission of meta information plan configuration.
 *
 * @method string getID3() Obtain Base64-encoded ID3 metadata information, with a maximum limit of 1024 characters. When both ID3 and Tag have values, the ID3 value takes precedence
 * @method void setID3(string $ID3) Set Base64-encoded ID3 metadata information, with a maximum limit of 1024 characters. When both ID3 and Tag have values, the ID3 value takes precedence
 * @method string getTag() Obtain Label, the maximum supported length is 1024 characters for the label, 
 * @method void setTag(string $Tag) Set Label, the maximum supported length is 1024 characters for the label, 
 */
class TimedMetadataInfo extends AbstractModel
{
    /**
     * @var string Base64-encoded ID3 metadata information, with a maximum limit of 1024 characters. When both ID3 and Tag have values, the ID3 value takes precedence
     */
    public $ID3;

    /**
     * @var string Label, the maximum supported length is 1024 characters for the label, 
     */
    public $Tag;

    /**
     * @param string $ID3 Base64-encoded ID3 metadata information, with a maximum limit of 1024 characters. When both ID3 and Tag have values, the ID3 value takes precedence
     * @param string $Tag Label, the maximum supported length is 1024 characters for the label, 
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
        if (array_key_exists("ID3",$param) and $param["ID3"] !== null) {
            $this->ID3 = $param["ID3"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
