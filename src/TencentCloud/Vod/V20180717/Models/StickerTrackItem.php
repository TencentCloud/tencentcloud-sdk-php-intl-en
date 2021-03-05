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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of sticker on sticker track.
 *
 * @method string getSourceMedia() Obtain Source of media material for sticker segment, which can be:
<li>ID of VOD media files</li>
<li>Download URL of other media files</li>
Note: when a download URL of other media files is used as the material source and access control (such as hotlink protection) is enabled, the URL needs to carry access control parameters (such as hotlink protection signature).
 * @method void setSourceMedia(string $SourceMedia) Set Source of media material for sticker segment, which can be:
<li>ID of VOD media files</li>
<li>Download URL of other media files</li>
Note: when a download URL of other media files is used as the material source and access control (such as hotlink protection) is enabled, the URL needs to carry access control parameters (such as hotlink protection signature).
 * @method float getDuration() Obtain Sticker duration in seconds.
 * @method void setDuration(float $Duration) Set Sticker duration in seconds.
 * @method float getStartTime() Obtain Start time of sticker on track in seconds.
 * @method void setStartTime(float $StartTime) Set Start time of sticker on track in seconds.
 * @method string getCoordinateOrigin() Obtain Origin position. Valid values:
<li> Center: the origin of coordinates is the center position, such as the center of canvas.</li>
Default value: Center.
 * @method void setCoordinateOrigin(string $CoordinateOrigin) Set Origin position. Valid values:
<li> Center: the origin of coordinates is the center position, such as the center of canvas.</li>
Default value: Center.
 * @method string getXPos() Obtain The horizontal position of the origin of the sticker relative to the origin of the canvas. % and px formats are supported:
<li>If the string ends in %, the `XPos` of the sticker will be at the position of the specified percentage of the canvas width; for example, `10%` means that `XPos` is 10% of the canvas width.</li><li>If the string ends in px, the `XPos` of the sticker will be in px; for example, `100px` means that `XPos` is 100 px.</li>
Default value: 0 px.
 * @method void setXPos(string $XPos) Set The horizontal position of the origin of the sticker relative to the origin of the canvas. % and px formats are supported:
<li>If the string ends in %, the `XPos` of the sticker will be at the position of the specified percentage of the canvas width; for example, `10%` means that `XPos` is 10% of the canvas width.</li><li>If the string ends in px, the `XPos` of the sticker will be in px; for example, `100px` means that `XPos` is 100 px.</li>
Default value: 0 px.
 * @method string getYPos() Obtain The vertical position of the origin of the sticker relative to the origin of the canvas. % and px formats are supported:
<li>If the string ends in %, the `YPos` of the sticker will be at the position of the specified percentage of the canvas height; for example, `10%` means that `YPos` is 10% of the canvas height.</li>
<li>If the string ends in px, the `YPos` of the sticker will be in px; for example, `100px` means that `YPos` is 100 px.</li>
Default value: 0 px.
 * @method void setYPos(string $YPos) Set The vertical position of the origin of the sticker relative to the origin of the canvas. % and px formats are supported:
<li>If the string ends in %, the `YPos` of the sticker will be at the position of the specified percentage of the canvas height; for example, `10%` means that `YPos` is 10% of the canvas height.</li>
<li>If the string ends in px, the `YPos` of the sticker will be in px; for example, `100px` means that `YPos` is 100 px.</li>
Default value: 0 px.
 * @method string getWidth() Obtain Sticker width. % and px formats are supported:
<li>If the string ends in %, the `Width` of the sticker will be the specified percentage of the canvas width; for example, `10%` means that `Width` is 10% of the canvas width.</li>
<li>If the string ends in px, the `Width` of the sticker will be in px; for example, `100px` means that `Width` is 100 px.</li>
<li>If both `Width` and `Height` are empty, then they will be the `Width` and `Height` of the sticker material, respectively.</li>
<li>If `Width` is empty (0), but `Height` is not empty, `Width` will be proportionally scaled.</li>
<li>If `Width` is not empty, but `Height` is empty, `Height` will be proportionally scaled.</li>
 * @method void setWidth(string $Width) Set Sticker width. % and px formats are supported:
<li>If the string ends in %, the `Width` of the sticker will be the specified percentage of the canvas width; for example, `10%` means that `Width` is 10% of the canvas width.</li>
<li>If the string ends in px, the `Width` of the sticker will be in px; for example, `100px` means that `Width` is 100 px.</li>
<li>If both `Width` and `Height` are empty, then they will be the `Width` and `Height` of the sticker material, respectively.</li>
<li>If `Width` is empty (0), but `Height` is not empty, `Width` will be proportionally scaled.</li>
<li>If `Width` is not empty, but `Height` is empty, `Height` will be proportionally scaled.</li>
 * @method string getHeight() Obtain Sticker height. % and px formats are supported:
<li>If the string ends in %, the `Height` of the sticker will be the specified percentage of the canvas height; for example, `10%` means that `Height` is 10% of the canvas height.</li>
<li>If the string ends in px, the `Height` of the sticker will be in px; for example, `100px` means that `Height` is 100 px.</li>
<li>If both `Width` and `Height` are empty, then they will be the `Width` and `Height` of the sticker material, respectively.</li>
<li>If `Width` is empty, but `Height` is not empty, `Width` will be proportionally scaled.</li>
<li>If `Width` is not empty, but `Height` is empty, `Height` will be proportionally scaled.</li>
 * @method void setHeight(string $Height) Set Sticker height. % and px formats are supported:
<li>If the string ends in %, the `Height` of the sticker will be the specified percentage of the canvas height; for example, `10%` means that `Height` is 10% of the canvas height.</li>
<li>If the string ends in px, the `Height` of the sticker will be in px; for example, `100px` means that `Height` is 100 px.</li>
<li>If both `Width` and `Height` are empty, then they will be the `Width` and `Height` of the sticker material, respectively.</li>
<li>If `Width` is empty, but `Height` is not empty, `Width` will be proportionally scaled.</li>
<li>If `Width` is not empty, but `Height` is empty, `Height` will be proportionally scaled.</li>
 * @method array getImageOperations() Obtain Operation on sticker such as image rotation.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setImageOperations(array $ImageOperations) Set Operation on sticker such as image rotation.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class StickerTrackItem extends AbstractModel
{
    /**
     * @var string Source of media material for sticker segment, which can be:
<li>ID of VOD media files</li>
<li>Download URL of other media files</li>
Note: when a download URL of other media files is used as the material source and access control (such as hotlink protection) is enabled, the URL needs to carry access control parameters (such as hotlink protection signature).
     */
    public $SourceMedia;

    /**
     * @var float Sticker duration in seconds.
     */
    public $Duration;

    /**
     * @var float Start time of sticker on track in seconds.
     */
    public $StartTime;

    /**
     * @var string Origin position. Valid values:
<li> Center: the origin of coordinates is the center position, such as the center of canvas.</li>
Default value: Center.
     */
    public $CoordinateOrigin;

    /**
     * @var string The horizontal position of the origin of the sticker relative to the origin of the canvas. % and px formats are supported:
<li>If the string ends in %, the `XPos` of the sticker will be at the position of the specified percentage of the canvas width; for example, `10%` means that `XPos` is 10% of the canvas width.</li><li>If the string ends in px, the `XPos` of the sticker will be in px; for example, `100px` means that `XPos` is 100 px.</li>
Default value: 0 px.
     */
    public $XPos;

    /**
     * @var string The vertical position of the origin of the sticker relative to the origin of the canvas. % and px formats are supported:
<li>If the string ends in %, the `YPos` of the sticker will be at the position of the specified percentage of the canvas height; for example, `10%` means that `YPos` is 10% of the canvas height.</li>
<li>If the string ends in px, the `YPos` of the sticker will be in px; for example, `100px` means that `YPos` is 100 px.</li>
Default value: 0 px.
     */
    public $YPos;

    /**
     * @var string Sticker width. % and px formats are supported:
<li>If the string ends in %, the `Width` of the sticker will be the specified percentage of the canvas width; for example, `10%` means that `Width` is 10% of the canvas width.</li>
<li>If the string ends in px, the `Width` of the sticker will be in px; for example, `100px` means that `Width` is 100 px.</li>
<li>If both `Width` and `Height` are empty, then they will be the `Width` and `Height` of the sticker material, respectively.</li>
<li>If `Width` is empty (0), but `Height` is not empty, `Width` will be proportionally scaled.</li>
<li>If `Width` is not empty, but `Height` is empty, `Height` will be proportionally scaled.</li>
     */
    public $Width;

    /**
     * @var string Sticker height. % and px formats are supported:
<li>If the string ends in %, the `Height` of the sticker will be the specified percentage of the canvas height; for example, `10%` means that `Height` is 10% of the canvas height.</li>
<li>If the string ends in px, the `Height` of the sticker will be in px; for example, `100px` means that `Height` is 100 px.</li>
<li>If both `Width` and `Height` are empty, then they will be the `Width` and `Height` of the sticker material, respectively.</li>
<li>If `Width` is empty, but `Height` is not empty, `Width` will be proportionally scaled.</li>
<li>If `Width` is not empty, but `Height` is empty, `Height` will be proportionally scaled.</li>
     */
    public $Height;

    /**
     * @var array Operation on sticker such as image rotation.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ImageOperations;

    /**
     * @param string $SourceMedia Source of media material for sticker segment, which can be:
<li>ID of VOD media files</li>
<li>Download URL of other media files</li>
Note: when a download URL of other media files is used as the material source and access control (such as hotlink protection) is enabled, the URL needs to carry access control parameters (such as hotlink protection signature).
     * @param float $Duration Sticker duration in seconds.
     * @param float $StartTime Start time of sticker on track in seconds.
     * @param string $CoordinateOrigin Origin position. Valid values:
<li> Center: the origin of coordinates is the center position, such as the center of canvas.</li>
Default value: Center.
     * @param string $XPos The horizontal position of the origin of the sticker relative to the origin of the canvas. % and px formats are supported:
<li>If the string ends in %, the `XPos` of the sticker will be at the position of the specified percentage of the canvas width; for example, `10%` means that `XPos` is 10% of the canvas width.</li><li>If the string ends in px, the `XPos` of the sticker will be in px; for example, `100px` means that `XPos` is 100 px.</li>
Default value: 0 px.
     * @param string $YPos The vertical position of the origin of the sticker relative to the origin of the canvas. % and px formats are supported:
<li>If the string ends in %, the `YPos` of the sticker will be at the position of the specified percentage of the canvas height; for example, `10%` means that `YPos` is 10% of the canvas height.</li>
<li>If the string ends in px, the `YPos` of the sticker will be in px; for example, `100px` means that `YPos` is 100 px.</li>
Default value: 0 px.
     * @param string $Width Sticker width. % and px formats are supported:
<li>If the string ends in %, the `Width` of the sticker will be the specified percentage of the canvas width; for example, `10%` means that `Width` is 10% of the canvas width.</li>
<li>If the string ends in px, the `Width` of the sticker will be in px; for example, `100px` means that `Width` is 100 px.</li>
<li>If both `Width` and `Height` are empty, then they will be the `Width` and `Height` of the sticker material, respectively.</li>
<li>If `Width` is empty (0), but `Height` is not empty, `Width` will be proportionally scaled.</li>
<li>If `Width` is not empty, but `Height` is empty, `Height` will be proportionally scaled.</li>
     * @param string $Height Sticker height. % and px formats are supported:
<li>If the string ends in %, the `Height` of the sticker will be the specified percentage of the canvas height; for example, `10%` means that `Height` is 10% of the canvas height.</li>
<li>If the string ends in px, the `Height` of the sticker will be in px; for example, `100px` means that `Height` is 100 px.</li>
<li>If both `Width` and `Height` are empty, then they will be the `Width` and `Height` of the sticker material, respectively.</li>
<li>If `Width` is empty, but `Height` is not empty, `Width` will be proportionally scaled.</li>
<li>If `Width` is not empty, but `Height` is empty, `Height` will be proportionally scaled.</li>
     * @param array $ImageOperations Operation on sticker such as image rotation.
Note: this field may return null, indicating that no valid values can be obtained.
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
