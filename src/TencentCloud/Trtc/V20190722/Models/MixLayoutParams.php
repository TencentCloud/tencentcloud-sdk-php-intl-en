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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The layout parameters for mixed-stream recording.
 *
 * @method integer getMixLayoutMode() Obtain Layout mode:
1: Floating
2: Screen sharing
3: Grid (default)
4: Custom

Floating: By default, the video of the first anchor (you can also specify an anchor) who enters the room is scaled to fill the screen. When other anchors enter the room, their videos appear smaller and are superimposed over the large video from left to right starting from the bottom of the canvas according to their room entry sequence. If the total number of videos is 17 or less, there will be four windows in each row (4 x 4); if it is greater than 17, there will be five windows in each row (5 x 5). Up to 25 videos can be displayed. A user who publishes only audio will still be displayed in one window.

Screen sharing: The video of a specified anchor occupies a larger part of the canvas on the left side (if you do not specify an anchor, the left window will display the canvas background). The videos of other anchors are smaller and are positioned on the right side. If the total number of videos is 17 or less, the small videos are positioned from top to bottom in up to two columns on the right side, with eight videos per column at most. If there are more than 17 videos, the additional videos are positioned at the bottom of the canvas from left to right. Up to 25 videos can be displayed. A user who publishes only audio will still be displayed in one window.

Grid: The videos of anchors are scaled and positioned automatically according to the total number of anchors in a room. Each video has the same size. Up to 25 videos can be displayed.

Custom: Specify the layout of videos by using the `MixLayoutList` parameter.
 * @method void setMixLayoutMode(integer $MixLayoutMode) Set Layout mode:
1: Floating
2: Screen sharing
3: Grid (default)
4: Custom

Floating: By default, the video of the first anchor (you can also specify an anchor) who enters the room is scaled to fill the screen. When other anchors enter the room, their videos appear smaller and are superimposed over the large video from left to right starting from the bottom of the canvas according to their room entry sequence. If the total number of videos is 17 or less, there will be four windows in each row (4 x 4); if it is greater than 17, there will be five windows in each row (5 x 5). Up to 25 videos can be displayed. A user who publishes only audio will still be displayed in one window.

Screen sharing: The video of a specified anchor occupies a larger part of the canvas on the left side (if you do not specify an anchor, the left window will display the canvas background). The videos of other anchors are smaller and are positioned on the right side. If the total number of videos is 17 or less, the small videos are positioned from top to bottom in up to two columns on the right side, with eight videos per column at most. If there are more than 17 videos, the additional videos are positioned at the bottom of the canvas from left to right. Up to 25 videos can be displayed. A user who publishes only audio will still be displayed in one window.

Grid: The videos of anchors are scaled and positioned automatically according to the total number of anchors in a room. Each video has the same size. Up to 25 videos can be displayed.

Custom: Specify the layout of videos by using the `MixLayoutList` parameter.
 * @method array getMixLayoutList() Obtain The custom layout details. This parameter is valid if `MixLayoutMode` is set to `4`. Up to 25 videos can be displayed.
 * @method void setMixLayoutList(array $MixLayoutList) Set The custom layout details. This parameter is valid if `MixLayoutMode` is set to `4`. Up to 25 videos can be displayed.
 * @method string getBackGroundColor() Obtain The background color, which is a hexadecimal value (starting with "#", followed by the color value) converted from an 8-bit RGB value. For example, the RGB value of orange is `R:255 G:165 B:0`, and its hexadecimal value is `#FFA500`. The default color is black.
 * @method void setBackGroundColor(string $BackGroundColor) Set The background color, which is a hexadecimal value (starting with "#", followed by the color value) converted from an 8-bit RGB value. For example, the RGB value of orange is `R:255 G:165 B:0`, and its hexadecimal value is `#FFA500`. The default color is black.
 * @method string getMaxResolutionUserId() Obtain The user whose video is displayed in the big window. This parameter is valid if `MixLayoutMode` is set to `1` (floating) or `2` (screen sharing). If it is left empty, the first anchor entering the room is displayed in the big window in the floating mode and the canvas background is displayed in the screen sharing mode.
 * @method void setMaxResolutionUserId(string $MaxResolutionUserId) Set The user whose video is displayed in the big window. This parameter is valid if `MixLayoutMode` is set to `1` (floating) or `2` (screen sharing). If it is left empty, the first anchor entering the room is displayed in the big window in the floating mode and the canvas background is displayed in the screen sharing mode.
 * @method integer getMediaId() Obtain The stream type.
0: Primary stream (default)
1: Substream (screen sharing stream)
This parameter specifies the type of the stream displayed in the big window. If it appears in `MixLayoutList`, it indicates the type of the stream of a specified user.
 * @method void setMediaId(integer $MediaId) Set The stream type.
0: Primary stream (default)
1: Substream (screen sharing stream)
This parameter specifies the type of the stream displayed in the big window. If it appears in `MixLayoutList`, it indicates the type of the stream of a specified user.
 * @method string getBackgroundImageUrl() Obtain The URL of the background image, which cannot contain Chinese characters. The image must be in JPG or PNG format and cannot be larger than 5 MB.
 * @method void setBackgroundImageUrl(string $BackgroundImageUrl) Set The URL of the background image, which cannot contain Chinese characters. The image must be in JPG or PNG format and cannot be larger than 5 MB.
 * @method integer getPlaceHolderMode() Obtain `1` means to use placeholders, and `0` (default) means to not use placeholders. If this parameter is set to `1`, when a user is not publishing video, a placeholder image will be displayed in the window reserved for the user.
 * @method void setPlaceHolderMode(integer $PlaceHolderMode) Set `1` means to use placeholders, and `0` (default) means to not use placeholders. If this parameter is set to `1`, when a user is not publishing video, a placeholder image will be displayed in the window reserved for the user.
 * @method integer getBackgroundImageRenderMode() Obtain The render mode to use when the aspect ratio of a video is different from that of the window. This parameter is defined the same as `RenderMode` in `MixLayoufList`.
 * @method void setBackgroundImageRenderMode(integer $BackgroundImageRenderMode) Set The render mode to use when the aspect ratio of a video is different from that of the window. This parameter is defined the same as `RenderMode` in `MixLayoufList`.
 * @method string getDefaultSubBackgroundImage() Obtain The URL of the background image for a window. The image must be in JPG or PNG format and cannot be larger than 5 MB. If the image’s aspect ratio is different from that of the window, the image will be rendered according to the value of `RenderMode`.
 * @method void setDefaultSubBackgroundImage(string $DefaultSubBackgroundImage) Set The URL of the background image for a window. The image must be in JPG or PNG format and cannot be larger than 5 MB. If the image’s aspect ratio is different from that of the window, the image will be rendered according to the value of `RenderMode`.
 * @method array getWaterMarkList() Obtain The watermark layout. Up to 25 watermarks are supported.
 * @method void setWaterMarkList(array $WaterMarkList) Set The watermark layout. Up to 25 watermarks are supported.
 * @method integer getRenderMode() Obtain The render mode to use when the aspect ratio of a video is different from that of the window. This parameter is invalid if a custom layout is used. It is defined the same as `RenderMode` in `MixLayoufList`.
 * @method void setRenderMode(integer $RenderMode) Set The render mode to use when the aspect ratio of a video is different from that of the window. This parameter is invalid if a custom layout is used. It is defined the same as `RenderMode` in `MixLayoufList`.
 * @method integer getMaxResolutionUserAlign() Obtain This parameter is valid only if the screen sharing layout is used. If you set it to `1`, the large video window will appear on the right and the small window on the left. The default value is `0`.
 * @method void setMaxResolutionUserAlign(integer $MaxResolutionUserAlign) Set This parameter is valid only if the screen sharing layout is used. If you set it to `1`, the large video window will appear on the right and the small window on the left. The default value is `0`.
 */
class MixLayoutParams extends AbstractModel
{
    /**
     * @var integer Layout mode:
1: Floating
2: Screen sharing
3: Grid (default)
4: Custom

Floating: By default, the video of the first anchor (you can also specify an anchor) who enters the room is scaled to fill the screen. When other anchors enter the room, their videos appear smaller and are superimposed over the large video from left to right starting from the bottom of the canvas according to their room entry sequence. If the total number of videos is 17 or less, there will be four windows in each row (4 x 4); if it is greater than 17, there will be five windows in each row (5 x 5). Up to 25 videos can be displayed. A user who publishes only audio will still be displayed in one window.

Screen sharing: The video of a specified anchor occupies a larger part of the canvas on the left side (if you do not specify an anchor, the left window will display the canvas background). The videos of other anchors are smaller and are positioned on the right side. If the total number of videos is 17 or less, the small videos are positioned from top to bottom in up to two columns on the right side, with eight videos per column at most. If there are more than 17 videos, the additional videos are positioned at the bottom of the canvas from left to right. Up to 25 videos can be displayed. A user who publishes only audio will still be displayed in one window.

Grid: The videos of anchors are scaled and positioned automatically according to the total number of anchors in a room. Each video has the same size. Up to 25 videos can be displayed.

Custom: Specify the layout of videos by using the `MixLayoutList` parameter.
     */
    public $MixLayoutMode;

    /**
     * @var array The custom layout details. This parameter is valid if `MixLayoutMode` is set to `4`. Up to 25 videos can be displayed.
     */
    public $MixLayoutList;

    /**
     * @var string The background color, which is a hexadecimal value (starting with "#", followed by the color value) converted from an 8-bit RGB value. For example, the RGB value of orange is `R:255 G:165 B:0`, and its hexadecimal value is `#FFA500`. The default color is black.
     */
    public $BackGroundColor;

    /**
     * @var string The user whose video is displayed in the big window. This parameter is valid if `MixLayoutMode` is set to `1` (floating) or `2` (screen sharing). If it is left empty, the first anchor entering the room is displayed in the big window in the floating mode and the canvas background is displayed in the screen sharing mode.
     */
    public $MaxResolutionUserId;

    /**
     * @var integer The stream type.
0: Primary stream (default)
1: Substream (screen sharing stream)
This parameter specifies the type of the stream displayed in the big window. If it appears in `MixLayoutList`, it indicates the type of the stream of a specified user.
     */
    public $MediaId;

    /**
     * @var string The URL of the background image, which cannot contain Chinese characters. The image must be in JPG or PNG format and cannot be larger than 5 MB.
     */
    public $BackgroundImageUrl;

    /**
     * @var integer `1` means to use placeholders, and `0` (default) means to not use placeholders. If this parameter is set to `1`, when a user is not publishing video, a placeholder image will be displayed in the window reserved for the user.
     */
    public $PlaceHolderMode;

    /**
     * @var integer The render mode to use when the aspect ratio of a video is different from that of the window. This parameter is defined the same as `RenderMode` in `MixLayoufList`.
     */
    public $BackgroundImageRenderMode;

    /**
     * @var string The URL of the background image for a window. The image must be in JPG or PNG format and cannot be larger than 5 MB. If the image’s aspect ratio is different from that of the window, the image will be rendered according to the value of `RenderMode`.
     */
    public $DefaultSubBackgroundImage;

    /**
     * @var array The watermark layout. Up to 25 watermarks are supported.
     */
    public $WaterMarkList;

    /**
     * @var integer The render mode to use when the aspect ratio of a video is different from that of the window. This parameter is invalid if a custom layout is used. It is defined the same as `RenderMode` in `MixLayoufList`.
     */
    public $RenderMode;

    /**
     * @var integer This parameter is valid only if the screen sharing layout is used. If you set it to `1`, the large video window will appear on the right and the small window on the left. The default value is `0`.
     */
    public $MaxResolutionUserAlign;

    /**
     * @param integer $MixLayoutMode Layout mode:
1: Floating
2: Screen sharing
3: Grid (default)
4: Custom

Floating: By default, the video of the first anchor (you can also specify an anchor) who enters the room is scaled to fill the screen. When other anchors enter the room, their videos appear smaller and are superimposed over the large video from left to right starting from the bottom of the canvas according to their room entry sequence. If the total number of videos is 17 or less, there will be four windows in each row (4 x 4); if it is greater than 17, there will be five windows in each row (5 x 5). Up to 25 videos can be displayed. A user who publishes only audio will still be displayed in one window.

Screen sharing: The video of a specified anchor occupies a larger part of the canvas on the left side (if you do not specify an anchor, the left window will display the canvas background). The videos of other anchors are smaller and are positioned on the right side. If the total number of videos is 17 or less, the small videos are positioned from top to bottom in up to two columns on the right side, with eight videos per column at most. If there are more than 17 videos, the additional videos are positioned at the bottom of the canvas from left to right. Up to 25 videos can be displayed. A user who publishes only audio will still be displayed in one window.

Grid: The videos of anchors are scaled and positioned automatically according to the total number of anchors in a room. Each video has the same size. Up to 25 videos can be displayed.

Custom: Specify the layout of videos by using the `MixLayoutList` parameter.
     * @param array $MixLayoutList The custom layout details. This parameter is valid if `MixLayoutMode` is set to `4`. Up to 25 videos can be displayed.
     * @param string $BackGroundColor The background color, which is a hexadecimal value (starting with "#", followed by the color value) converted from an 8-bit RGB value. For example, the RGB value of orange is `R:255 G:165 B:0`, and its hexadecimal value is `#FFA500`. The default color is black.
     * @param string $MaxResolutionUserId The user whose video is displayed in the big window. This parameter is valid if `MixLayoutMode` is set to `1` (floating) or `2` (screen sharing). If it is left empty, the first anchor entering the room is displayed in the big window in the floating mode and the canvas background is displayed in the screen sharing mode.
     * @param integer $MediaId The stream type.
0: Primary stream (default)
1: Substream (screen sharing stream)
This parameter specifies the type of the stream displayed in the big window. If it appears in `MixLayoutList`, it indicates the type of the stream of a specified user.
     * @param string $BackgroundImageUrl The URL of the background image, which cannot contain Chinese characters. The image must be in JPG or PNG format and cannot be larger than 5 MB.
     * @param integer $PlaceHolderMode `1` means to use placeholders, and `0` (default) means to not use placeholders. If this parameter is set to `1`, when a user is not publishing video, a placeholder image will be displayed in the window reserved for the user.
     * @param integer $BackgroundImageRenderMode The render mode to use when the aspect ratio of a video is different from that of the window. This parameter is defined the same as `RenderMode` in `MixLayoufList`.
     * @param string $DefaultSubBackgroundImage The URL of the background image for a window. The image must be in JPG or PNG format and cannot be larger than 5 MB. If the image’s aspect ratio is different from that of the window, the image will be rendered according to the value of `RenderMode`.
     * @param array $WaterMarkList The watermark layout. Up to 25 watermarks are supported.
     * @param integer $RenderMode The render mode to use when the aspect ratio of a video is different from that of the window. This parameter is invalid if a custom layout is used. It is defined the same as `RenderMode` in `MixLayoufList`.
     * @param integer $MaxResolutionUserAlign This parameter is valid only if the screen sharing layout is used. If you set it to `1`, the large video window will appear on the right and the small window on the left. The default value is `0`.
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
        if (array_key_exists("MixLayoutMode",$param) and $param["MixLayoutMode"] !== null) {
            $this->MixLayoutMode = $param["MixLayoutMode"];
        }

        if (array_key_exists("MixLayoutList",$param) and $param["MixLayoutList"] !== null) {
            $this->MixLayoutList = [];
            foreach ($param["MixLayoutList"] as $key => $value){
                $obj = new MixLayout();
                $obj->deserialize($value);
                array_push($this->MixLayoutList, $obj);
            }
        }

        if (array_key_exists("BackGroundColor",$param) and $param["BackGroundColor"] !== null) {
            $this->BackGroundColor = $param["BackGroundColor"];
        }

        if (array_key_exists("MaxResolutionUserId",$param) and $param["MaxResolutionUserId"] !== null) {
            $this->MaxResolutionUserId = $param["MaxResolutionUserId"];
        }

        if (array_key_exists("MediaId",$param) and $param["MediaId"] !== null) {
            $this->MediaId = $param["MediaId"];
        }

        if (array_key_exists("BackgroundImageUrl",$param) and $param["BackgroundImageUrl"] !== null) {
            $this->BackgroundImageUrl = $param["BackgroundImageUrl"];
        }

        if (array_key_exists("PlaceHolderMode",$param) and $param["PlaceHolderMode"] !== null) {
            $this->PlaceHolderMode = $param["PlaceHolderMode"];
        }

        if (array_key_exists("BackgroundImageRenderMode",$param) and $param["BackgroundImageRenderMode"] !== null) {
            $this->BackgroundImageRenderMode = $param["BackgroundImageRenderMode"];
        }

        if (array_key_exists("DefaultSubBackgroundImage",$param) and $param["DefaultSubBackgroundImage"] !== null) {
            $this->DefaultSubBackgroundImage = $param["DefaultSubBackgroundImage"];
        }

        if (array_key_exists("WaterMarkList",$param) and $param["WaterMarkList"] !== null) {
            $this->WaterMarkList = [];
            foreach ($param["WaterMarkList"] as $key => $value){
                $obj = new WaterMark();
                $obj->deserialize($value);
                array_push($this->WaterMarkList, $obj);
            }
        }

        if (array_key_exists("RenderMode",$param) and $param["RenderMode"] !== null) {
            $this->RenderMode = $param["RenderMode"];
        }

        if (array_key_exists("MaxResolutionUserAlign",$param) and $param["MaxResolutionUserAlign"] !== null) {
            $this->MaxResolutionUserAlign = $param["MaxResolutionUserAlign"];
        }
    }
}
