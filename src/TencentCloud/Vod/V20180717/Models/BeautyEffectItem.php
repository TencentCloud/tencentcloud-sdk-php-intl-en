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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getSwitch() Obtain 
 * @method void setSwitch(string $Switch) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method integer getValue() Obtain 
 * @method void setValue(integer $Value) Set 
 * @method string getResourcePath() Obtain 
 * @method void setResourcePath(string $ResourcePath) Set 
 * @method string getExtInfo() Obtain 
 * @method void setExtInfo(string $ExtInfo) Set 
 */
class BeautyEffectItem extends AbstractModel
{
    /**
     * @var string 
     */
    public $Switch;

    /**
     * @var string 
     */
    public $Type;

    /**
     * @var integer 
     */
    public $Value;

    /**
     * @var string 
     */
    public $ResourcePath;

    /**
     * @var string 
     */
    public $ExtInfo;

    /**
     * @param string $Switch 
     * @param string $Type 
     * @param integer $Value 
     * @param string $ResourcePath 
     * @param string $ExtInfo 
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ResourcePath",$param) and $param["ResourcePath"] !== null) {
            $this->ResourcePath = $param["ResourcePath"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
