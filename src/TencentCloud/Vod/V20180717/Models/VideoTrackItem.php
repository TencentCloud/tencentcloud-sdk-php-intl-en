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
 * Video clip information of the video track.
 *
 * @method string getSourceMedia() Obtain Media material source of the video clip, which can be:
<li>Media file ID for VOD;</li>
<li>Download URL of other media files.</li>
Note: When using the download URL of another media file as the material source and access control (such as hotlink protection) is enabled, the URL needs to carry access control parameters (such as a hotlink protection signature).
 * @method void setSourceMedia(string $SourceMedia) Set Media material source of the video clip, which can be:
<li>Media file ID for VOD;</li>
<li>Download URL of other media files.</li>
Note: When using the download URL of another media file as the material source and access control (such as hotlink protection) is enabled, the URL needs to carry access control parameters (such as a hotlink protection signature).
 * @method float getSourceMediaStartTime() Obtain Start time of the video clip in the material file, in seconds. Default value: 0.
 * @method void setSourceMediaStartTime(float $SourceMediaStartTime) Set Start time of the video clip in the material file, in seconds. Default value: 0.
 * @method float getDuration() Obtain Video segment duration, in seconds. Default value: the length of the video material itself, which means the entire material is captured. If the source file is an image, Duration must be greater than 0.
 * @method void setDuration(float $Duration) Set Video segment duration, in seconds. Default value: the length of the video material itself, which means the entire material is captured. If the source file is an image, Duration must be greater than 0.
 * @method float getTargetDuration() Obtain Target duration of the video clip, in seconds.
<li>If TargetDuration is not specified or set to 0, it means the target duration is the same as Duration;</li>
<li>When TargetDuration is set to a value more than 0, the video clip will be fast-forwarded or slowed down to make the duration of the output segment equal to TargetDuration.</li>
 * @method void setTargetDuration(float $TargetDuration) Set Target duration of the video clip, in seconds.
<li>If TargetDuration is not specified or set to 0, it means the target duration is the same as Duration;</li>
<li>When TargetDuration is set to a value more than 0, the video clip will be fast-forwarded or slowed down to make the duration of the output segment equal to TargetDuration.</li>
 * @method string getCoordinateOrigin() Obtain Video origin position. Valid values:
<li>Center: The coordinate origin is the central position, such as the center of the canvas.</li>
Default value: Center.
 * @method void setCoordinateOrigin(string $CoordinateOrigin) Set Video origin position. Valid values:
<li>Center: The coordinate origin is the central position, such as the center of the canvas.</li>
Default value: Center.
 * @method string getXPos() Obtain Horizontal position of the video clip origin point relative to the origin of canvas. Supports % and px formats.
<li>When the string ends with %, it means the video clip XPos is at the specified percentage of the canvas width. For example, 10% means XPos is at 10% of the canvas width.</li>
<li>If a string ends with px, it means the unit of the video clip XPos is pixel. For example, 100px means XPos is 100 pixels.</li>
Default value: 0px.
 * @method void setXPos(string $XPos) Set Horizontal position of the video clip origin point relative to the origin of canvas. Supports % and px formats.
<li>When the string ends with %, it means the video clip XPos is at the specified percentage of the canvas width. For example, 10% means XPos is at 10% of the canvas width.</li>
<li>If a string ends with px, it means the unit of the video clip XPos is pixel. For example, 100px means XPos is 100 pixels.</li>
Default value: 0px.
 * @method string getYPos() Obtain Vertical position of the video clip origin point relative to the canvas origin point. Supports % and px formats.
<li>If a string ends with %, it indicates that the `YPos` of a video clip is at a specified percentage of the canvas height. For example, `10%` means that `YPos` is 10% of the canvas height.</li>
<li>If a string ends with px, it means the unit of the video clip YPos is pixel. For example, 100px means YPos is 100 pixels.</li>
Default value: 0px.
 * @method void setYPos(string $YPos) Set Vertical position of the video clip origin point relative to the canvas origin point. Supports % and px formats.
<li>If a string ends with %, it indicates that the `YPos` of a video clip is at a specified percentage of the canvas height. For example, `10%` means that `YPos` is 10% of the canvas height.</li>
<li>If a string ends with px, it means the unit of the video clip YPos is pixel. For example, 100px means YPos is 100 pixels.</li>
Default value: 0px.
 * @method string getWidth() Obtain Width of a video clip, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a video clip is a percentage of the canvas width. For example, `10%` means that `Width` is 10% of the canvas width.</li>
<li>If a string ends with px, it means the video clip Width unit is pixel. For example, 100px means the Width is 100 pixels.</li>
<li>If both Width and Height are empty, the width and height of the video footage itself will be used.</li>
<li>If Width is empty but Height is not empty, the width will be proportionally scaled.</li>
<li>If Width is not empty but Height is empty, the height will be proportionally scaled.</li>
 * @method void setWidth(string $Width) Set Width of a video clip, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a video clip is a percentage of the canvas width. For example, `10%` means that `Width` is 10% of the canvas width.</li>
<li>If a string ends with px, it means the video clip Width unit is pixel. For example, 100px means the Width is 100 pixels.</li>
<li>If both Width and Height are empty, the width and height of the video footage itself will be used.</li>
<li>If Width is empty but Height is not empty, the width will be proportionally scaled.</li>
<li>If Width is not empty but Height is empty, the height will be proportionally scaled.</li>
 * @method string getHeight() Obtain Height of a video clip, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a video clip is a percentage of the canvas height. For example, `10%` means that `Height` is 10% of the canvas height.</li>
</li><li>If a string ends with px, it means the video clip Height unit is pixel. For example, 100px means the Height is 100 pixels.</li>
<li>If both Width and Height are empty, the width and height of the video footage itself will be used.</li>
<li>If Width is empty but Height is not empty, the width will be proportionally scaled.</li>
<li>If Width is not empty but Height is empty, the height will be proportionally scaled.</li>
 * @method void setHeight(string $Height) Set Height of a video clip, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a video clip is a percentage of the canvas height. For example, `10%` means that `Height` is 10% of the canvas height.</li>
</li><li>If a string ends with px, it means the video clip Height unit is pixel. For example, 100px means the Height is 100 pixels.</li>
<li>If both Width and Height are empty, the width and height of the video footage itself will be used.</li>
<li>If Width is empty but Height is not empty, the width will be proportionally scaled.</li>
<li>If Width is not empty but Height is empty, the height will be proportionally scaled.</li>
 * @method array getAudioOperations() Obtain Perform operations on audio, such as muting.
 * @method void setAudioOperations(array $AudioOperations) Set Perform operations on audio, such as muting.
 * @method array getImageOperations() Obtain Operation performed on the image, for example, image rotation.
 * @method void setImageOperations(array $ImageOperations) Set Operation performed on the image, for example, image rotation.
 */
class VideoTrackItem extends AbstractModel
{
    /**
     * @var string Media material source of the video clip, which can be:
<li>Media file ID for VOD;</li>
<li>Download URL of other media files.</li>
Note: When using the download URL of another media file as the material source and access control (such as hotlink protection) is enabled, the URL needs to carry access control parameters (such as a hotlink protection signature).
     */
    public $SourceMedia;

    /**
     * @var float Start time of the video clip in the material file, in seconds. Default value: 0.
     */
    public $SourceMediaStartTime;

    /**
     * @var float Video segment duration, in seconds. Default value: the length of the video material itself, which means the entire material is captured. If the source file is an image, Duration must be greater than 0.
     */
    public $Duration;

    /**
     * @var float Target duration of the video clip, in seconds.
<li>If TargetDuration is not specified or set to 0, it means the target duration is the same as Duration;</li>
<li>When TargetDuration is set to a value more than 0, the video clip will be fast-forwarded or slowed down to make the duration of the output segment equal to TargetDuration.</li>
     */
    public $TargetDuration;

    /**
     * @var string Video origin position. Valid values:
<li>Center: The coordinate origin is the central position, such as the center of the canvas.</li>
Default value: Center.
     */
    public $CoordinateOrigin;

    /**
     * @var string Horizontal position of the video clip origin point relative to the origin of canvas. Supports % and px formats.
<li>When the string ends with %, it means the video clip XPos is at the specified percentage of the canvas width. For example, 10% means XPos is at 10% of the canvas width.</li>
<li>If a string ends with px, it means the unit of the video clip XPos is pixel. For example, 100px means XPos is 100 pixels.</li>
Default value: 0px.
     */
    public $XPos;

    /**
     * @var string Vertical position of the video clip origin point relative to the canvas origin point. Supports % and px formats.
<li>If a string ends with %, it indicates that the `YPos` of a video clip is at a specified percentage of the canvas height. For example, `10%` means that `YPos` is 10% of the canvas height.</li>
<li>If a string ends with px, it means the unit of the video clip YPos is pixel. For example, 100px means YPos is 100 pixels.</li>
Default value: 0px.
     */
    public $YPos;

    /**
     * @var string Width of a video clip, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a video clip is a percentage of the canvas width. For example, `10%` means that `Width` is 10% of the canvas width.</li>
<li>If a string ends with px, it means the video clip Width unit is pixel. For example, 100px means the Width is 100 pixels.</li>
<li>If both Width and Height are empty, the width and height of the video footage itself will be used.</li>
<li>If Width is empty but Height is not empty, the width will be proportionally scaled.</li>
<li>If Width is not empty but Height is empty, the height will be proportionally scaled.</li>
     */
    public $Width;

    /**
     * @var string Height of a video clip, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a video clip is a percentage of the canvas height. For example, `10%` means that `Height` is 10% of the canvas height.</li>
</li><li>If a string ends with px, it means the video clip Height unit is pixel. For example, 100px means the Height is 100 pixels.</li>
<li>If both Width and Height are empty, the width and height of the video footage itself will be used.</li>
<li>If Width is empty but Height is not empty, the width will be proportionally scaled.</li>
<li>If Width is not empty but Height is empty, the height will be proportionally scaled.</li>
     */
    public $Height;

    /**
     * @var array Perform operations on audio, such as muting.
     */
    public $AudioOperations;

    /**
     * @var array Operation performed on the image, for example, image rotation.
     */
    public $ImageOperations;

    /**
     * @param string $SourceMedia Media material source of the video clip, which can be:
<li>Media file ID for VOD;</li>
<li>Download URL of other media files.</li>
Note: When using the download URL of another media file as the material source and access control (such as hotlink protection) is enabled, the URL needs to carry access control parameters (such as a hotlink protection signature).
     * @param float $SourceMediaStartTime Start time of the video clip in the material file, in seconds. Default value: 0.
     * @param float $Duration Video segment duration, in seconds. Default value: the length of the video material itself, which means the entire material is captured. If the source file is an image, Duration must be greater than 0.
     * @param float $TargetDuration Target duration of the video clip, in seconds.
<li>If TargetDuration is not specified or set to 0, it means the target duration is the same as Duration;</li>
<li>When TargetDuration is set to a value more than 0, the video clip will be fast-forwarded or slowed down to make the duration of the output segment equal to TargetDuration.</li>
     * @param string $CoordinateOrigin Video origin position. Valid values:
<li>Center: The coordinate origin is the central position, such as the center of the canvas.</li>
Default value: Center.
     * @param string $XPos Horizontal position of the video clip origin point relative to the origin of canvas. Supports % and px formats.
<li>When the string ends with %, it means the video clip XPos is at the specified percentage of the canvas width. For example, 10% means XPos is at 10% of the canvas width.</li>
<li>If a string ends with px, it means the unit of the video clip XPos is pixel. For example, 100px means XPos is 100 pixels.</li>
Default value: 0px.
     * @param string $YPos Vertical position of the video clip origin point relative to the canvas origin point. Supports % and px formats.
<li>If a string ends with %, it indicates that the `YPos` of a video clip is at a specified percentage of the canvas height. For example, `10%` means that `YPos` is 10% of the canvas height.</li>
<li>If a string ends with px, it means the unit of the video clip YPos is pixel. For example, 100px means YPos is 100 pixels.</li>
Default value: 0px.
     * @param string $Width Width of a video clip, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Width` of a video clip is a percentage of the canvas width. For example, `10%` means that `Width` is 10% of the canvas width.</li>
<li>If a string ends with px, it means the video clip Width unit is pixel. For example, 100px means the Width is 100 pixels.</li>
<li>If both Width and Height are empty, the width and height of the video footage itself will be used.</li>
<li>If Width is empty but Height is not empty, the width will be proportionally scaled.</li>
<li>If Width is not empty but Height is empty, the height will be proportionally scaled.</li>
     * @param string $Height Height of a video clip, supporting two formats: % and px.
<li>If a string ends with %, it indicates that the `Height` of a video clip is a percentage of the canvas height. For example, `10%` means that `Height` is 10% of the canvas height.</li>
</li><li>If a string ends with px, it means the video clip Height unit is pixel. For example, 100px means the Height is 100 pixels.</li>
<li>If both Width and Height are empty, the width and height of the video footage itself will be used.</li>
<li>If Width is empty but Height is not empty, the width will be proportionally scaled.</li>
<li>If Width is not empty but Height is empty, the height will be proportionally scaled.</li>
     * @param array $AudioOperations Perform operations on audio, such as muting.
     * @param array $ImageOperations Operation performed on the image, for example, image rotation.
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

        if (array_key_exists("SourceMediaStartTime",$param) and $param["SourceMediaStartTime"] !== null) {
            $this->SourceMediaStartTime = $param["SourceMediaStartTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("TargetDuration",$param) and $param["TargetDuration"] !== null) {
            $this->TargetDuration = $param["TargetDuration"];
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

        if (array_key_exists("AudioOperations",$param) and $param["AudioOperations"] !== null) {
            $this->AudioOperations = [];
            foreach ($param["AudioOperations"] as $key => $value){
                $obj = new AudioTransform();
                $obj->deserialize($value);
                array_push($this->AudioOperations, $obj);
            }
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
