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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom watermark specifications.
 *
 * @method string getType() Obtain Watermark type. Valid values:
<li>image: image watermark.</li>
 * @method void setType(string $Type) Set Watermark type. Valid values:
<li>image: image watermark.</li>
 * @method string getCoordinateOrigin() Obtain Origin position, which currently can only be:
<li>TopLeft: the origin of coordinates is in the top-left corner of the video, and the origin of the watermark is in the top-left corner of the image or text.</li>
Default value: TopLeft.
 * @method void setCoordinateOrigin(string $CoordinateOrigin) Set Origin position, which currently can only be:
<li>TopLeft: the origin of coordinates is in the top-left corner of the video, and the origin of the watermark is in the top-left corner of the image or text.</li>
Default value: TopLeft.
 * @method string getXPos() Obtain The horizontal position of the origin of the watermark relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `XPos` of the watermark will be the specified percentage of the video width; for example, `10%` means that `XPos` is 10% of the video width;</li>
<li>If the string ends in px, the `XPos` of the watermark will be the specified px; for example, `100px` means that `XPos` is 100 px.</li>
Default value: 0 px.
 * @method void setXPos(string $XPos) Set The horizontal position of the origin of the watermark relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `XPos` of the watermark will be the specified percentage of the video width; for example, `10%` means that `XPos` is 10% of the video width;</li>
<li>If the string ends in px, the `XPos` of the watermark will be the specified px; for example, `100px` means that `XPos` is 100 px.</li>
Default value: 0 px.
 * @method string getYPos() Obtain The vertical position of the origin of the watermark relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `YPos` of the watermark will be the specified percentage of the video height; for example, `10%` means that `YPos` is 10% of the video height;</li>
<li>If the string ends in px, the `YPos` of the watermark will be the specified px; for example, `100px` means that `YPos` is 100 px.</li>
Default value: 0 px.
 * @method void setYPos(string $YPos) Set The vertical position of the origin of the watermark relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `YPos` of the watermark will be the specified percentage of the video height; for example, `10%` means that `YPos` is 10% of the video height;</li>
<li>If the string ends in px, the `YPos` of the watermark will be the specified px; for example, `100px` means that `YPos` is 100 px.</li>
Default value: 0 px.
 * @method RawImageWatermarkInput getImageTemplate() Obtain Image watermark template. This field is required when `Type` is `image` and is invalid when `Type` is `text`.
 * @method void setImageTemplate(RawImageWatermarkInput $ImageTemplate) Set Image watermark template. This field is required when `Type` is `image` and is invalid when `Type` is `text`.
 */
class RawWatermarkParameter extends AbstractModel
{
    /**
     * @var string Watermark type. Valid values:
<li>image: image watermark.</li>
     */
    public $Type;

    /**
     * @var string Origin position, which currently can only be:
<li>TopLeft: the origin of coordinates is in the top-left corner of the video, and the origin of the watermark is in the top-left corner of the image or text.</li>
Default value: TopLeft.
     */
    public $CoordinateOrigin;

    /**
     * @var string The horizontal position of the origin of the watermark relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `XPos` of the watermark will be the specified percentage of the video width; for example, `10%` means that `XPos` is 10% of the video width;</li>
<li>If the string ends in px, the `XPos` of the watermark will be the specified px; for example, `100px` means that `XPos` is 100 px.</li>
Default value: 0 px.
     */
    public $XPos;

    /**
     * @var string The vertical position of the origin of the watermark relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `YPos` of the watermark will be the specified percentage of the video height; for example, `10%` means that `YPos` is 10% of the video height;</li>
<li>If the string ends in px, the `YPos` of the watermark will be the specified px; for example, `100px` means that `YPos` is 100 px.</li>
Default value: 0 px.
     */
    public $YPos;

    /**
     * @var RawImageWatermarkInput Image watermark template. This field is required when `Type` is `image` and is invalid when `Type` is `text`.
     */
    public $ImageTemplate;

    /**
     * @param string $Type Watermark type. Valid values:
<li>image: image watermark.</li>
     * @param string $CoordinateOrigin Origin position, which currently can only be:
<li>TopLeft: the origin of coordinates is in the top-left corner of the video, and the origin of the watermark is in the top-left corner of the image or text.</li>
Default value: TopLeft.
     * @param string $XPos The horizontal position of the origin of the watermark relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `XPos` of the watermark will be the specified percentage of the video width; for example, `10%` means that `XPos` is 10% of the video width;</li>
<li>If the string ends in px, the `XPos` of the watermark will be the specified px; for example, `100px` means that `XPos` is 100 px.</li>
Default value: 0 px.
     * @param string $YPos The vertical position of the origin of the watermark relative to the origin of coordinates of the video. % and px formats are supported:
<li>If the string ends in %, the `YPos` of the watermark will be the specified percentage of the video height; for example, `10%` means that `YPos` is 10% of the video height;</li>
<li>If the string ends in px, the `YPos` of the watermark will be the specified px; for example, `100px` means that `YPos` is 100 px.</li>
Default value: 0 px.
     * @param RawImageWatermarkInput $ImageTemplate Image watermark template. This field is required when `Type` is `image` and is invalid when `Type` is `text`.
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

        if (array_key_exists("CoordinateOrigin",$param) and $param["CoordinateOrigin"] !== null) {
            $this->CoordinateOrigin = $param["CoordinateOrigin"];
        }

        if (array_key_exists("XPos",$param) and $param["XPos"] !== null) {
            $this->XPos = $param["XPos"];
        }

        if (array_key_exists("YPos",$param) and $param["YPos"] !== null) {
            $this->YPos = $param["YPos"];
        }

        if (array_key_exists("ImageTemplate",$param) and $param["ImageTemplate"] !== null) {
            $this->ImageTemplate = new RawImageWatermarkInput();
            $this->ImageTemplate->deserialize($param["ImageTemplate"]);
        }
    }
}
