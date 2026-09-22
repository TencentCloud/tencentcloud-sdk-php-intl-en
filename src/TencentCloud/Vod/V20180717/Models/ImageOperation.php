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
 * One image processing operation.
 *
 * @method string getType() Obtain Image processing type. Optional types:
<li>Scale: Image thumbnail processing;</li>
<li>CenterCut: image cropping;</li>
<li>Blur: fuzzily process an image.</li>
 * @method void setType(string $Type) Set Image processing type. Optional types:
<li>Scale: Image thumbnail processing;</li>
<li>CenterCut: image cropping;</li>
<li>Blur: fuzzily process an image.</li>
 * @method ImageScale getScale() Obtain Image thumbnail processing. This parameter is valid only when Type is Scale.
 * @method void setScale(ImageScale $Scale) Set Image thumbnail processing. This parameter is valid only when Type is Scale.
 * @method ImageCenterCut getCenterCut() Obtain Image crop processing. Valid only when Type is CenterCut.
 * @method void setCenterCut(ImageCenterCut $CenterCut) Set Image crop processing. Valid only when Type is CenterCut.
 * @method ImageBlur getBlur() Obtain Blur the image. This parameter is valid only when Type is Blur.
 * @method void setBlur(ImageBlur $Blur) Set Blur the image. This parameter is valid only when Type is Blur.
 */
class ImageOperation extends AbstractModel
{
    /**
     * @var string Image processing type. Optional types:
<li>Scale: Image thumbnail processing;</li>
<li>CenterCut: image cropping;</li>
<li>Blur: fuzzily process an image.</li>
     */
    public $Type;

    /**
     * @var ImageScale Image thumbnail processing. This parameter is valid only when Type is Scale.
     */
    public $Scale;

    /**
     * @var ImageCenterCut Image crop processing. Valid only when Type is CenterCut.
     */
    public $CenterCut;

    /**
     * @var ImageBlur Blur the image. This parameter is valid only when Type is Blur.
     */
    public $Blur;

    /**
     * @param string $Type Image processing type. Optional types:
<li>Scale: Image thumbnail processing;</li>
<li>CenterCut: image cropping;</li>
<li>Blur: fuzzily process an image.</li>
     * @param ImageScale $Scale Image thumbnail processing. This parameter is valid only when Type is Scale.
     * @param ImageCenterCut $CenterCut Image crop processing. Valid only when Type is CenterCut.
     * @param ImageBlur $Blur Blur the image. This parameter is valid only when Type is Blur.
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
