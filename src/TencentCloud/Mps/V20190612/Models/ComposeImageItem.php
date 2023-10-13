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
 * The image element information of a video editing/compositing task.
 *
 * @method ComposeSourceMedia getSourceMedia() Obtain The media information of the element.
 * @method void setSourceMedia(ComposeSourceMedia $SourceMedia) Set The media information of the element.
 * @method ComposeTrackTime getTrackTime() Obtain The time of the element in the timeline. If this is not specified, the element will follow the previous element.
 * @method void setTrackTime(ComposeTrackTime $TrackTime) Set The time of the element in the timeline. If this is not specified, the element will follow the previous element.
 * @method string getXPos() Obtain The horizontal distance of the element's center from the canvas origin. Two formats are supported:
<li>If the value ends with %, it specifies the distance as a percentage of the canvas width. For example, `10%` means that the distance is 10% of the canvas width. </li>
u200c<li>If the value ends with px, it specifies the distance in pixels. For example, `100px` means that the distance is 100 pixels. </li>
Default value: `50%`.
 * @method void setXPos(string $XPos) Set The horizontal distance of the element's center from the canvas origin. Two formats are supported:
<li>If the value ends with %, it specifies the distance as a percentage of the canvas width. For example, `10%` means that the distance is 10% of the canvas width. </li>
u200c<li>If the value ends with px, it specifies the distance in pixels. For example, `100px` means that the distance is 100 pixels. </li>
Default value: `50%`.
 * @method string getYPos() Obtain The vertical distance of the element's center from the canvas origin. Two formats are supported:
u200c<li>If the value ends with %, it specifies the distance as a percentage of the canvas height. For example, `10%` means that the distance is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the distance in pixels. For example, `100px` means that the distance is 100 pixels. </li>
Default value: `50%`.
 * @method void setYPos(string $YPos) Set The vertical distance of the element's center from the canvas origin. Two formats are supported:
u200c<li>If the value ends with %, it specifies the distance as a percentage of the canvas height. For example, `10%` means that the distance is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the distance in pixels. For example, `100px` means that the distance is 100 pixels. </li>
Default value: `50%`.
 * @method string getWidth() Obtain The width of the video segment. Two formats are supported:
u200c<li>If the value ends with %, it specifies the width as a percentage of the canvas width. For example, `10%` means that the video width is 10% of the canvas width. </li>
u200c<li>If the value ends with px, it specifies the width in pixels. For example, `100px` means that the video width is 100 pixels. </li>
If one or both parameters are empty or set to `0`:
<li>If both `Width` and `Height` are empty, the original width and height of the element will be kept. </li>
<li>If `Width` is empty and `Height` is not, the width will be auto scaled. </li>
<li>If `Width` is not empty and `Height` is, the height will be auto scaled. </li>
 * @method void setWidth(string $Width) Set The width of the video segment. Two formats are supported:
u200c<li>If the value ends with %, it specifies the width as a percentage of the canvas width. For example, `10%` means that the video width is 10% of the canvas width. </li>
u200c<li>If the value ends with px, it specifies the width in pixels. For example, `100px` means that the video width is 100 pixels. </li>
If one or both parameters are empty or set to `0`:
<li>If both `Width` and `Height` are empty, the original width and height of the element will be kept. </li>
<li>If `Width` is empty and `Height` is not, the width will be auto scaled. </li>
<li>If `Width` is not empty and `Height` is, the height will be auto scaled. </li>
 * @method string getHeight() Obtain The height of the element. Two formats are supported:
u200c<li>If the value ends with %, it specifies the height as a percentage of the canvas height. For example, `10%` means that the height is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the height in pixels. For example, `100px` means that the height is 100 pixels. </li>
If one or both parameters are empty or set to `0`:
<li>If both `Width` and `Height` are empty, the original width and height of the video will be kept. </li>
<li>If `Width` is empty and `Height` is not, the width will be auto scaled. </li>
<li>If `Width` is not empty and `Height` is, the height will be auto scaled. </li>
 * @method void setHeight(string $Height) Set The height of the element. Two formats are supported:
u200c<li>If the value ends with %, it specifies the height as a percentage of the canvas height. For example, `10%` means that the height is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the height in pixels. For example, `100px` means that the height is 100 pixels. </li>
If one or both parameters are empty or set to `0`:
<li>If both `Width` and `Height` are empty, the original width and height of the video will be kept. </li>
<li>If `Width` is empty and `Height` is not, the width will be auto scaled. </li>
<li>If `Width` is not empty and `Height` is, the height will be auto scaled. </li>
 * @method array getImageOperations() Obtain The image operations, such as image rotation.
 * @method void setImageOperations(array $ImageOperations) Set The image operations, such as image rotation.
 */
class ComposeImageItem extends AbstractModel
{
    /**
     * @var ComposeSourceMedia The media information of the element.
     */
    public $SourceMedia;

    /**
     * @var ComposeTrackTime The time of the element in the timeline. If this is not specified, the element will follow the previous element.
     */
    public $TrackTime;

    /**
     * @var string The horizontal distance of the element's center from the canvas origin. Two formats are supported:
<li>If the value ends with %, it specifies the distance as a percentage of the canvas width. For example, `10%` means that the distance is 10% of the canvas width. </li>
u200c<li>If the value ends with px, it specifies the distance in pixels. For example, `100px` means that the distance is 100 pixels. </li>
Default value: `50%`.
     */
    public $XPos;

    /**
     * @var string The vertical distance of the element's center from the canvas origin. Two formats are supported:
u200c<li>If the value ends with %, it specifies the distance as a percentage of the canvas height. For example, `10%` means that the distance is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the distance in pixels. For example, `100px` means that the distance is 100 pixels. </li>
Default value: `50%`.
     */
    public $YPos;

    /**
     * @var string The width of the video segment. Two formats are supported:
u200c<li>If the value ends with %, it specifies the width as a percentage of the canvas width. For example, `10%` means that the video width is 10% of the canvas width. </li>
u200c<li>If the value ends with px, it specifies the width in pixels. For example, `100px` means that the video width is 100 pixels. </li>
If one or both parameters are empty or set to `0`:
<li>If both `Width` and `Height` are empty, the original width and height of the element will be kept. </li>
<li>If `Width` is empty and `Height` is not, the width will be auto scaled. </li>
<li>If `Width` is not empty and `Height` is, the height will be auto scaled. </li>
     */
    public $Width;

    /**
     * @var string The height of the element. Two formats are supported:
u200c<li>If the value ends with %, it specifies the height as a percentage of the canvas height. For example, `10%` means that the height is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the height in pixels. For example, `100px` means that the height is 100 pixels. </li>
If one or both parameters are empty or set to `0`:
<li>If both `Width` and `Height` are empty, the original width and height of the video will be kept. </li>
<li>If `Width` is empty and `Height` is not, the width will be auto scaled. </li>
<li>If `Width` is not empty and `Height` is, the height will be auto scaled. </li>
     */
    public $Height;

    /**
     * @var array The image operations, such as image rotation.
     */
    public $ImageOperations;

    /**
     * @param ComposeSourceMedia $SourceMedia The media information of the element.
     * @param ComposeTrackTime $TrackTime The time of the element in the timeline. If this is not specified, the element will follow the previous element.
     * @param string $XPos The horizontal distance of the element's center from the canvas origin. Two formats are supported:
<li>If the value ends with %, it specifies the distance as a percentage of the canvas width. For example, `10%` means that the distance is 10% of the canvas width. </li>
u200c<li>If the value ends with px, it specifies the distance in pixels. For example, `100px` means that the distance is 100 pixels. </li>
Default value: `50%`.
     * @param string $YPos The vertical distance of the element's center from the canvas origin. Two formats are supported:
u200c<li>If the value ends with %, it specifies the distance as a percentage of the canvas height. For example, `10%` means that the distance is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the distance in pixels. For example, `100px` means that the distance is 100 pixels. </li>
Default value: `50%`.
     * @param string $Width The width of the video segment. Two formats are supported:
u200c<li>If the value ends with %, it specifies the width as a percentage of the canvas width. For example, `10%` means that the video width is 10% of the canvas width. </li>
u200c<li>If the value ends with px, it specifies the width in pixels. For example, `100px` means that the video width is 100 pixels. </li>
If one or both parameters are empty or set to `0`:
<li>If both `Width` and `Height` are empty, the original width and height of the element will be kept. </li>
<li>If `Width` is empty and `Height` is not, the width will be auto scaled. </li>
<li>If `Width` is not empty and `Height` is, the height will be auto scaled. </li>
     * @param string $Height The height of the element. Two formats are supported:
u200c<li>If the value ends with %, it specifies the height as a percentage of the canvas height. For example, `10%` means that the height is 10% of the canvas height. </li>
u200c<li>If the value ends with px, it specifies the height in pixels. For example, `100px` means that the height is 100 pixels. </li>
If one or both parameters are empty or set to `0`:
<li>If both `Width` and `Height` are empty, the original width and height of the video will be kept. </li>
<li>If `Width` is empty and `Height` is not, the width will be auto scaled. </li>
<li>If `Width` is not empty and `Height` is, the height will be auto scaled. </li>
     * @param array $ImageOperations The image operations, such as image rotation.
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
        if (array_key_exists("SourceMedia",$param) and $param["SourceMedia"] !== null) {
            $this->SourceMedia = new ComposeSourceMedia();
            $this->SourceMedia->deserialize($param["SourceMedia"]);
        }

        if (array_key_exists("TrackTime",$param) and $param["TrackTime"] !== null) {
            $this->TrackTime = new ComposeTrackTime();
            $this->TrackTime->deserialize($param["TrackTime"]);
        }

        if (array_key_exists("XPos",$param) and $param["XPos"] !== null) {
            $this->XPos = $param["XPos"];
        }

        if (array_key_exists("YPos",$param) and $param["YPos"] !== null) {
            $this->YPos = $param["YPos"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("ImageOperations",$param) and $param["ImageOperations"] !== null) {
            $this->ImageOperations = [];
            foreach ($param["ImageOperations"] as $key => $value){
                $obj = new ComposeImageOperation();
                $obj->deserialize($value);
                array_push($this->ImageOperations, $obj);
            }
        }
    }
}
