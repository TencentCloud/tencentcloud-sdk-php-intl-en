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
 * Texture information on the texture track.
 *
 * @method string getSourceMedia() Obtain Media material source of the texture segment, which can be:
<li>Media file ID for VOD;</li>
<li>Download URL of other media files.</li>
Note: When using the download URL of another media file as the material source, and access control (such as anti-hotlinking) is enabled, the URL needs to carry access control parameters (such as a hotlink protection signature).
 * @method void setSourceMedia(string $SourceMedia) Set Media material source of the texture segment, which can be:
<li>Media file ID for VOD;</li>
<li>Download URL of other media files.</li>
Note: When using the download URL of another media file as the material source, and access control (such as anti-hotlinking) is enabled, the URL needs to carry access control parameters (such as a hotlink protection signature).
 * @method float getDuration() Obtain Duration of the sticker, in seconds.
 * @method void setDuration(float $Duration) Set Duration of the sticker, in seconds.
 * @method float getStartTime() Obtain Start time of the sticker on the track, in seconds.
 * @method void setStartTime(float $StartTime) Set Start time of the sticker on the track, in seconds.
 * @method string getCoordinateOrigin() Obtain Origin position. Valid values:
<li>Center: The coordinate origin is the central position, such as the center of canvas.</li>
Default: Center.
 * @method void setCoordinateOrigin(string $CoordinateOrigin) Set Origin position. Valid values:
<li>Center: The coordinate origin is the central position, such as the center of canvas.</li>
Default: Center.
 * @method string getXPos() Obtain Horizontal position of the texture origin relative to the canvas origin, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the texture XPos is at a specified percentage of the canvas width. For example, 10% means the XPos is at 10% of the canvas width.</li><li>If a string ends with px, it indicates that the texture XPos is in pixels. For example, 100px means the XPos is 100 pixels.</li>
Default value: 0px.
 * @method void setXPos(string $XPos) Set Horizontal position of the texture origin relative to the canvas origin, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the texture XPos is at a specified percentage of the canvas width. For example, 10% means the XPos is at 10% of the canvas width.</li><li>If a string ends with px, it indicates that the texture XPos is in pixels. For example, 100px means the XPos is 100 pixels.</li>
Default value: 0px.
 * @method string getYPos() Obtain Vertical position of the texture origin from the canvas origin. Supports two formats: % and px.
<li>When a string ends with %, it means the texture YPos is at the specified percentage of the canvas height. For example, 10% means the YPos is 10% of the canvas height.</li>
<li>If a string ends with px, it means the texture YPos unit is pixel. For example, 100px means YPos is 100 pixels.</li>
Default value: 0px.
 * @method void setYPos(string $YPos) Set Vertical position of the texture origin from the canvas origin. Supports two formats: % and px.
<li>When a string ends with %, it means the texture YPos is at the specified percentage of the canvas height. For example, 10% means the YPos is 10% of the canvas height.</li>
<li>If a string ends with px, it means the texture YPos unit is pixel. For example, 100px means YPos is 100 pixels.</li>
Default value: 0px.
 * @method string getWidth() Obtain Width of a sticker, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a sticker is a percentage of the canvas width. For example, `10%` means that `Width` is 10% of the canvas width.</li>
<li>If a string ends with px, it means the texture Width unit is pixel. For example, 100px means the Width is 100 pixels.</li>
<li>If both Width and Height are empty, the width and height of the texture material itself will be used.</li>
<li>If Width is 0 but Height is not, the width will be proportionally scaled.</li>
<li>If Width is not empty but Height is empty, the height will be proportionally scaled.</li>
 * @method void setWidth(string $Width) Set Width of a sticker, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a sticker is a percentage of the canvas width. For example, `10%` means that `Width` is 10% of the canvas width.</li>
<li>If a string ends with px, it means the texture Width unit is pixel. For example, 100px means the Width is 100 pixels.</li>
<li>If both Width and Height are empty, the width and height of the texture material itself will be used.</li>
<li>If Width is 0 but Height is not, the width will be proportionally scaled.</li>
<li>If Width is not empty but Height is empty, the height will be proportionally scaled.</li>
 * @method string getHeight() Obtain Height of a sticker, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a sticker is a percentage of the canvas height. For example, `10%` means that `Height` is 10% of the canvas height.</li>
<li>If a string ends with px, it means the texture Height unit is pixel. For example, 100px means the Height is 100 pixels.</li>
<li>If both Width and Height are empty, the width and height of the texture material itself will be used.</li>
<li>If Width is empty but Height is not empty, the width will be proportionally scaled.</li>
<li>If Width is not empty but Height is empty, the height will be proportionally scaled.</li>
 * @method void setHeight(string $Height) Set Height of a sticker, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a sticker is a percentage of the canvas height. For example, `10%` means that `Height` is 10% of the canvas height.</li>
<li>If a string ends with px, it means the texture Height unit is pixel. For example, 100px means the Height is 100 pixels.</li>
<li>If both Width and Height are empty, the width and height of the texture material itself will be used.</li>
<li>If Width is empty but Height is not empty, the width will be proportionally scaled.</li>
<li>If Width is not empty but Height is empty, the height will be proportionally scaled.</li>
 * @method array getImageOperations() Obtain Operation performed on the texture, such as image rotation.
 * @method void setImageOperations(array $ImageOperations) Set Operation performed on the texture, such as image rotation.
 */
class StickerTrackItem extends AbstractModel
{
    /**
     * @var string Media material source of the texture segment, which can be:
<li>Media file ID for VOD;</li>
<li>Download URL of other media files.</li>
Note: When using the download URL of another media file as the material source, and access control (such as anti-hotlinking) is enabled, the URL needs to carry access control parameters (such as a hotlink protection signature).
     */
    public $SourceMedia;

    /**
     * @var float Duration of the sticker, in seconds.
     */
    public $Duration;

    /**
     * @var float Start time of the sticker on the track, in seconds.
     */
    public $StartTime;

    /**
     * @var string Origin position. Valid values:
<li>Center: The coordinate origin is the central position, such as the center of canvas.</li>
Default: Center.
     */
    public $CoordinateOrigin;

    /**
     * @var string Horizontal position of the texture origin relative to the canvas origin, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the texture XPos is at a specified percentage of the canvas width. For example, 10% means the XPos is at 10% of the canvas width.</li><li>If a string ends with px, it indicates that the texture XPos is in pixels. For example, 100px means the XPos is 100 pixels.</li>
Default value: 0px.
     */
    public $XPos;

    /**
     * @var string Vertical position of the texture origin from the canvas origin. Supports two formats: % and px.
<li>When a string ends with %, it means the texture YPos is at the specified percentage of the canvas height. For example, 10% means the YPos is 10% of the canvas height.</li>
<li>If a string ends with px, it means the texture YPos unit is pixel. For example, 100px means YPos is 100 pixels.</li>
Default value: 0px.
     */
    public $YPos;

    /**
     * @var string Width of a sticker, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a sticker is a percentage of the canvas width. For example, `10%` means that `Width` is 10% of the canvas width.</li>
<li>If a string ends with px, it means the texture Width unit is pixel. For example, 100px means the Width is 100 pixels.</li>
<li>If both Width and Height are empty, the width and height of the texture material itself will be used.</li>
<li>If Width is 0 but Height is not, the width will be proportionally scaled.</li>
<li>If Width is not empty but Height is empty, the height will be proportionally scaled.</li>
     */
    public $Width;

    /**
     * @var string Height of a sticker, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a sticker is a percentage of the canvas height. For example, `10%` means that `Height` is 10% of the canvas height.</li>
<li>If a string ends with px, it means the texture Height unit is pixel. For example, 100px means the Height is 100 pixels.</li>
<li>If both Width and Height are empty, the width and height of the texture material itself will be used.</li>
<li>If Width is empty but Height is not empty, the width will be proportionally scaled.</li>
<li>If Width is not empty but Height is empty, the height will be proportionally scaled.</li>
     */
    public $Height;

    /**
     * @var array Operation performed on the texture, such as image rotation.
     */
    public $ImageOperations;

    /**
     * @param string $SourceMedia Media material source of the texture segment, which can be:
<li>Media file ID for VOD;</li>
<li>Download URL of other media files.</li>
Note: When using the download URL of another media file as the material source, and access control (such as anti-hotlinking) is enabled, the URL needs to carry access control parameters (such as a hotlink protection signature).
     * @param float $Duration Duration of the sticker, in seconds.
     * @param float $StartTime Start time of the sticker on the track, in seconds.
     * @param string $CoordinateOrigin Origin position. Valid values:
<li>Center: The coordinate origin is the central position, such as the center of canvas.</li>
Default: Center.
     * @param string $XPos Horizontal position of the texture origin relative to the canvas origin, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the texture XPos is at a specified percentage of the canvas width. For example, 10% means the XPos is at 10% of the canvas width.</li><li>If a string ends with px, it indicates that the texture XPos is in pixels. For example, 100px means the XPos is 100 pixels.</li>
Default value: 0px.
     * @param string $YPos Vertical position of the texture origin from the canvas origin. Supports two formats: % and px.
<li>When a string ends with %, it means the texture YPos is at the specified percentage of the canvas height. For example, 10% means the YPos is 10% of the canvas height.</li>
<li>If a string ends with px, it means the texture YPos unit is pixel. For example, 100px means YPos is 100 pixels.</li>
Default value: 0px.
     * @param string $Width Width of a sticker, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a sticker is a percentage of the canvas width. For example, `10%` means that `Width` is 10% of the canvas width.</li>
<li>If a string ends with px, it means the texture Width unit is pixel. For example, 100px means the Width is 100 pixels.</li>
<li>If both Width and Height are empty, the width and height of the texture material itself will be used.</li>
<li>If Width is 0 but Height is not, the width will be proportionally scaled.</li>
<li>If Width is not empty but Height is empty, the height will be proportionally scaled.</li>
     * @param string $Height Height of a sticker, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a sticker is a percentage of the canvas height. For example, `10%` means that `Height` is 10% of the canvas height.</li>
<li>If a string ends with px, it means the texture Height unit is pixel. For example, 100px means the Height is 100 pixels.</li>
<li>If both Width and Height are empty, the width and height of the texture material itself will be used.</li>
<li>If Width is empty but Height is not empty, the width will be proportionally scaled.</li>
<li>If Width is not empty but Height is empty, the height will be proportionally scaled.</li>
     * @param array $ImageOperations Operation performed on the texture, such as image rotation.
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
            $this->SourceMedia = $param["SourceMedia"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
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

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("ImageOperations",$param) and $param["ImageOperations"] !== null) {
            $this->ImageOperations = [];
            foreach ($param["ImageOperations"] as $key => $value){
                $obj = new ImageTransform();
                $obj->deserialize($value);
                array_push($this->ImageOperations, $obj);
            }
        }
    }
}
