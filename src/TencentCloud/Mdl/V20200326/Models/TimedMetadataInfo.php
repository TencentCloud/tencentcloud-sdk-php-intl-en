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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Transparent transmission of meta information plan configuration.
 *
 * @method string getID3() Obtain Base64-encoded id3 metadata information, with a maximum limit of 1024 characters.
 * @method void setID3(string $ID3) Set Base64-encoded id3 metadata information, with a maximum limit of 1024 characters.
 */
class TimedMetadataInfo extends AbstractModel
{
    /**
     * @var string Base64-encoded id3 metadata information, with a maximum limit of 1024 characters.
     */
    public $ID3;

    /**
     * @param string $ID3 Base64-encoded id3 metadata information, with a maximum limit of 1024 characters.
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
    }
}
