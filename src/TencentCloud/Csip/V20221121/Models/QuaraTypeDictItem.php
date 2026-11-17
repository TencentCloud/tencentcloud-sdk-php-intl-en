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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getCode() Obtain 
 * @method void setCode(string $Code) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method boolean getRecommend() Obtain 
 * @method void setRecommend(boolean $Recommend) Set 
 * @method string getDesc() Obtain 
 * @method void setDesc(string $Desc) Set 
 */
class QuaraTypeDictItem extends AbstractModel
{
    /**
     * @var string 
     */
    public $Code;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var boolean 
     */
    public $Recommend;

    /**
     * @var string 
     */
    public $Desc;

    /**
     * @param string $Code 
     * @param string $Name 
     * @param boolean $Recommend 
     * @param string $Desc 
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Recommend",$param) and $param["Recommend"] !== null) {
            $this->Recommend = $param["Recommend"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
