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
 * @method ImageScale getScale() Obtain 
 * @method void setScale(ImageScale $Scale) Set 
 * @method ImageCenterCut getCenterCut() Obtain 
 * @method void setCenterCut(ImageCenterCut $CenterCut) Set 
 * @method ImageBlur getBlur() Obtain 
 * @method void setBlur(ImageBlur $Blur) Set 
 */
class ImageOperation extends AbstractModel
{
    /**
     * @var string 
     */
    public $Type;

    /**
     * @var ImageScale 
     */
    public $Scale;

    /**
     * @var ImageCenterCut 
     */
    public $CenterCut;

    /**
     * @var ImageBlur 
     */
    public $Blur;

    /**
     * @param string $Type 
     * @param ImageScale $Scale 
     * @param ImageCenterCut $CenterCut 
     * @param ImageBlur $Blur 
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

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = new ImageScale();
            $this->Scale->deserialize($param["Scale"]);
        }

        if (array_key_exists("CenterCut",$param) and $param["CenterCut"] !== null) {
            $this->CenterCut = new ImageCenterCut();
            $this->CenterCut->deserialize($param["CenterCut"]);
        }

        if (array_key_exists("Blur",$param) and $param["Blur"] !== null) {
            $this->Blur = new ImageBlur();
            $this->Blur->deserialize($param["Blur"]);
        }
    }
}
