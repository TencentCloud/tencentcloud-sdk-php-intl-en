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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWhiteBoxKey request structure.
 *
 * @method string getAlias() Obtain Unique alias that makes a key more recognizable and understandable. This parameter should be 1 to 60 letters, digits, `-`, and `_`; it must begin with a letter or digit and cannot be left empty.
 * @method void setAlias(string $Alias) Set Unique alias that makes a key more recognizable and understandable. This parameter should be 1 to 60 letters, digits, `-`, and `_`; it must begin with a letter or digit and cannot be left empty.
 * @method string getAlgorithm() Obtain All algorithm types for creating keys. Valid values: AES_256, SM4
 * @method void setAlgorithm(string $Algorithm) Set All algorithm types for creating keys. Valid values: AES_256, SM4
 * @method string getDescription() Obtain Key description of up to 1024 bytes
 * @method void setDescription(string $Description) Set Key description of up to 1024 bytes
 * @method array getTags() Obtain Tag list
 * @method void setTags(array $Tags) Set Tag list
 */
class CreateWhiteBoxKeyRequest extends AbstractModel
{
    /**
     * @var string Unique alias that makes a key more recognizable and understandable. This parameter should be 1 to 60 letters, digits, `-`, and `_`; it must begin with a letter or digit and cannot be left empty.
     */
    public $Alias;

    /**
     * @var string All algorithm types for creating keys. Valid values: AES_256, SM4
     */
    public $Algorithm;

    /**
     * @var string Key description of up to 1024 bytes
     */
    public $Description;

    /**
     * @var array Tag list
     */
    public $Tags;

    /**
     * @param string $Alias Unique alias that makes a key more recognizable and understandable. This parameter should be 1 to 60 letters, digits, `-`, and `_`; it must begin with a letter or digit and cannot be left empty.
     * @param string $Algorithm All algorithm types for creating keys. Valid values: AES_256, SM4
     * @param string $Description Key description of up to 1024 bytes
     * @param array $Tags Tag list
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
