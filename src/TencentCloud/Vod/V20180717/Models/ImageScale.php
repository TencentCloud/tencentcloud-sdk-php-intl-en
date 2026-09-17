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
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method integer getHeight() Obtain 
 * @method void setHeight(integer $Height) Set 
 * @method integer getWidth() Obtain 
 * @method void setWidth(integer $Width) Set 
 * @method integer getLongEdge() Obtain 
 * @method void setLongEdge(integer $LongEdge) Set 
 * @method integer getShortEdge() Obtain 
 * @method void setShortEdge(integer $ShortEdge) Set 
 */
class ImageScale extends AbstractModel
{
    /**
     * @var string 
     */
    public $Type;

    /**
     * @var integer 
     */
    public $Height;

    /**
     * @var integer 
     */
    public $Width;

    /**
     * @var integer 
     */
    public $LongEdge;

    /**
     * @var integer 
     */
    public $ShortEdge;

    /**
     * @param string $Type 
     * @param integer $Height 
     * @param integer $Width 
     * @param integer $LongEdge 
     * @param integer $ShortEdge 
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

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("LongEdge",$param) and $param["LongEdge"] !== null) {
            $this->LongEdge = $param["LongEdge"];
        }

        if (array_key_exists("ShortEdge",$param) and $param["ShortEdge"] !== null) {
            $this->ShortEdge = $param["ShortEdge"];
        }
    }
}
