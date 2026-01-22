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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The layout parameters for mixed-stream recording.
 *
 * @method integer getMixLayoutMode() Obtain Layout mode.
1: floating layout.
2: screen sharing layout.
3: nine-grid layout.
4: custom layout.

Floating layout: by default, the video footage of the first host who enters the room (or a specified host) fills the entire screen. other hosts' video images are arranged horizontally from the bottom-left corner in the room entry sequence, displayed as small pictures floating above the large screen. when the number of screens is less than or equal to 17, each line has 4 (4 x 4 arrangement). when the number of screens exceeds 17, the small pictures are rearranged with 5 per line (5 x 5 arrangement). a maximum of 25 screens are supported. if the user only sends audio, it still occupies a screen position.

Screen sharing layout: specifies a large screen position on the left side for one host (if not specified, the large screen position uses the background color). other hosts are arranged vertically on the right side from top to bottom. when the number of screens is less than 17, each column on the right supports up to 8 hosts, occupying a maximum of two columns. when the number of screens exceeds 17, hosts beyond the 17th are arranged horizontally starting from the bottom-left corner. a maximum of 25 screens is supported. if a host only sends audio, it still occupies a screen position.

Nine-Grid layout: automatically adjust the size of each frame based on the number of hosts. each host's frame size is the same, supporting up to 25 frames.

Custom layout: customize the layout of each host's video as needed in MixLayoutList.
 * @method void setMixLayoutMode(integer $MixLayoutMode) Set Layout mode.
1: floating layout.
2: screen sharing layout.
3: nine-grid layout.
4: custom layout.

Floating layout: by default, the video footage of the first host who enters the room (or a specified host) fills the entire screen. other hosts' video images are arranged horizontally from the bottom-left corner in the room entry sequence, displayed as small pictures floating above the large screen. when the number of screens is less than or equal to 17, each line has 4 (4 x 4 arrangement). when the number of screens exceeds 17, the small pictures are rearranged with 5 per line (5 x 5 arrangement). a maximum of 25 screens are supported. if the user only sends audio, it still occupies a screen position.

Screen sharing layout: specifies a large screen position on the left side for one host (if not specified, the large screen position uses the background color). other hosts are arranged vertically on the right side from top to bottom. when the number of screens is less than 17, each column on the right supports up to 8 hosts, occupying a maximum of two columns. when the number of screens exceeds 17, hosts beyond the 17th are arranged horizontally starting from the bottom-left corner. a maximum of 25 screens is supported. if a host only sends audio, it still occupies a screen position.

Nine-Grid layout: automatically adjust the size of each frame based on the number of hosts. each host's frame size is the same, supporting up to 25 frames.

Custom layout: customize the layout of each host's video as needed in MixLayoutList.
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
 * @method string getBackgroundImageUrl() Obtain The image url supports only jpg, png, and jpeg. the image resolution is limited to no more than 2K, and the image size limit is no more than 5MB. note that the url must carry the format extension, and only specific strings are supported in the url, including a-z, a-z, 0-9, '-', '.', '_', '~', ':', '/', '?', '#', '[', ']', '@', '!', '&', '(', ')', '*', '+', ',', '%', and '='.
 * @method void setBackgroundImageUrl(string $BackgroundImageUrl) Set The image url supports only jpg, png, and jpeg. the image resolution is limited to no more than 2K, and the image size limit is no more than 5MB. note that the url must carry the format extension, and only specific strings are supported in the url, including a-z, a-z, 0-9, '-', '.', '_', '~', ':', '/', '?', '#', '[', ']', '@', '!', '&', '(', ')', '*', '+', ',', '%', and '='.
 * @method integer getPlaceHolderMode() Obtain Set to 1 to enable the placeholder image function, and 0 to disable it. default is 0. when enabled, the corresponding placeholder image can be displayed in the preset position if the user has no upload audio and video.
 * @method void setPlaceHolderMode(integer $PlaceHolderMode) Set Set to 1 to enable the placeholder image function, and 0 to disable it. default is 0. when enabled, the corresponding placeholder image can be displayed in the preset position if the user has no upload audio and video.
 * @method integer getBackgroundImageRenderMode() Obtain Handling solution when the background image aspect ratio is not the same, consistent with the RenderMode defined in MixLayoutList.
 * @method void setBackgroundImageRenderMode(integer $BackgroundImageRenderMode) Set Handling solution when the background image aspect ratio is not the same, consistent with the RenderMode defined in MixLayoutList.
 * @method string getDefaultSubBackgroundImage() Obtain Sub-Picture placeholder image url supports only jpg, png, jpeg. resolution limitation is no more than 2K. image size limit is no more than 5MB. note that the url must carry format extension and supports only specific string literals within the range of a-z a-z 0-9 '-', '.', '_', '~', ':', '/', '?', '#', '[', ']' '@', '!', '&', '(', ')', '*', '+', ',', '%', '='.
 * @method void setDefaultSubBackgroundImage(string $DefaultSubBackgroundImage) Set Sub-Picture placeholder image url supports only jpg, png, jpeg. resolution limitation is no more than 2K. image size limit is no more than 5MB. note that the url must carry format extension and supports only specific string literals within the range of a-z a-z 0-9 '-', '.', '_', '~', ':', '/', '?', '#', '[', ']' '@', '!', '&', '(', ')', '*', '+', ',', '%', '='.
 * @method array getWaterMarkList() Obtain The watermark layout. Up to 25 watermarks are supported.
 * @method void setWaterMarkList(array $WaterMarkList) Set The watermark layout. Up to 25 watermarks are supported.
 * @method integer getRenderMode() Obtain When the aspect ratio of the background image does not match in the template layout, the handling solution is applied. the custom layout is disabled and aligns with the RenderMode defined in MixLayoutList.
 * @method void setRenderMode(integer $RenderMode) Set When the aspect ratio of the background image does not match in the template layout, the handling solution is applied. the custom layout is disabled and aligns with the RenderMode defined in MixLayoutList.
 * @method integer getMaxResolutionUserAlign() Obtain This parameter is valid only if the screen sharing layout is used. If you set it to `1`, the large video window will appear on the right and the small window on the left. The default value is `0`.
 * @method void setMaxResolutionUserAlign(integer $MaxResolutionUserAlign) Set This parameter is valid only if the screen sharing layout is used. If you set it to `1`, the large video window will appear on the right and the small window on the left. The default value is `0`.
 * @method boolean getPureAudioDisableLayout() Obtain Controls whether audio users inside the room occupy the stream mixing layout. this takes effect only in mixed stream recording and template layout. true: represents that audio users do not occupy placeholders. false: represents that audio users occupy placeholders (false by default).
 * @method void setPureAudioDisableLayout(boolean $PureAudioDisableLayout) Set Controls whether audio users inside the room occupy the stream mixing layout. this takes effect only in mixed stream recording and template layout. true: represents that audio users do not occupy placeholders. false: represents that audio users occupy placeholders (false by default).
 */
class MixLayoutParams extends AbstractModel
{
    /**
     * @var integer Layout mode.
1: floating layout.
2: screen sharing layout.
3: nine-grid layout.
4: custom layout.

Floating layout: by default, the video footage of the first host who enters the room (or a specified host) fills the entire screen. other hosts' video images are arranged horizontally from the bottom-left corner in the room entry sequence, displayed as small pictures floating above the large screen. when the number of screens is less than or equal to 17, each line has 4 (4 x 4 arrangement). when the number of screens exceeds 17, the small pictures are rearranged with 5 per line (5 x 5 arrangement). a maximum of 25 screens are supported. if the user only sends audio, it still occupies a screen position.

Screen sharing layout: specifies a large screen position on the left side for one host (if not specified, the large screen position uses the background color). other hosts are arranged vertically on the right side from top to bottom. when the number of screens is less than 17, each column on the right supports up to 8 hosts, occupying a maximum of two columns. when the number of screens exceeds 17, hosts beyond the 17th are arranged horizontally starting from the bottom-left corner. a maximum of 25 screens is supported. if a host only sends audio, it still occupies a screen position.

Nine-Grid layout: automatically adjust the size of each frame based on the number of hosts. each host's frame size is the same, supporting up to 25 frames.

Custom layout: customize the layout of each host's video as needed in MixLayoutList.
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
     * @var string The image url supports only jpg, png, and jpeg. the image resolution is limited to no more than 2K, and the image size limit is no more than 5MB. note that the url must carry the format extension, and only specific strings are supported in the url, including a-z, a-z, 0-9, '-', '.', '_', '~', ':', '/', '?', '#', '[', ']', '@', '!', '&', '(', ')', '*', '+', ',', '%', and '='.
     */
    public $BackgroundImageUrl;

    /**
     * @var integer Set to 1 to enable the placeholder image function, and 0 to disable it. default is 0. when enabled, the corresponding placeholder image can be displayed in the preset position if the user has no upload audio and video.
     */
    public $PlaceHolderMode;

    /**
     * @var integer Handling solution when the background image aspect ratio is not the same, consistent with the RenderMode defined in MixLayoutList.
     */
    public $BackgroundImageRenderMode;

    /**
     * @var string Sub-Picture placeholder image url supports only jpg, png, jpeg. resolution limitation is no more than 2K. image size limit is no more than 5MB. note that the url must carry format extension and supports only specific string literals within the range of a-z a-z 0-9 '-', '.', '_', '~', ':', '/', '?', '#', '[', ']' '@', '!', '&', '(', ')', '*', '+', ',', '%', '='.
     */
    public $DefaultSubBackgroundImage;

    /**
     * @var array The watermark layout. Up to 25 watermarks are supported.
     */
    public $WaterMarkList;

    /**
     * @var integer When the aspect ratio of the background image does not match in the template layout, the handling solution is applied. the custom layout is disabled and aligns with the RenderMode defined in MixLayoutList.
     */
    public $RenderMode;

    /**
     * @var integer This parameter is valid only if the screen sharing layout is used. If you set it to `1`, the large video window will appear on the right and the small window on the left. The default value is `0`.
     */
    public $MaxResolutionUserAlign;

    /**
     * @var boolean Controls whether audio users inside the room occupy the stream mixing layout. this takes effect only in mixed stream recording and template layout. true: represents that audio users do not occupy placeholders. false: represents that audio users occupy placeholders (false by default).
     */
    public $PureAudioDisableLayout;

    /**
     * @param integer $MixLayoutMode Layout mode.
1: floating layout.
2: screen sharing layout.
3: nine-grid layout.
4: custom layout.

Floating layout: by default, the video footage of the first host who enters the room (or a specified host) fills the entire screen. other hosts' video images are arranged horizontally from the bottom-left corner in the room entry sequence, displayed as small pictures floating above the large screen. when the number of screens is less than or equal to 17, each line has 4 (4 x 4 arrangement). when the number of screens exceeds 17, the small pictures are rearranged with 5 per line (5 x 5 arrangement). a maximum of 25 screens are supported. if the user only sends audio, it still occupies a screen position.

Screen sharing layout: specifies a large screen position on the left side for one host (if not specified, the large screen position uses the background color). other hosts are arranged vertically on the right side from top to bottom. when the number of screens is less than 17, each column on the right supports up to 8 hosts, occupying a maximum of two columns. when the number of screens exceeds 17, hosts beyond the 17th are arranged horizontally starting from the bottom-left corner. a maximum of 25 screens is supported. if a host only sends audio, it still occupies a screen position.

Nine-Grid layout: automatically adjust the size of each frame based on the number of hosts. each host's frame size is the same, supporting up to 25 frames.

Custom layout: customize the layout of each host's video as needed in MixLayoutList.
     * @param array $MixLayoutList The custom layout details. This parameter is valid if `MixLayoutMode` is set to `4`. Up to 25 videos can be displayed.
     * @param string $BackGroundColor The background color, which is a hexadecimal value (starting with "#", followed by the color value) converted from an 8-bit RGB value. For example, the RGB value of orange is `R:255 G:165 B:0`, and its hexadecimal value is `#FFA500`. The default color is black.
     * @param string $MaxResolutionUserId The user whose video is displayed in the big window. This parameter is valid if `MixLayoutMode` is set to `1` (floating) or `2` (screen sharing). If it is left empty, the first anchor entering the room is displayed in the big window in the floating mode and the canvas background is displayed in the screen sharing mode.
     * @param integer $MediaId The stream type.
0: Primary stream (default)
1: Substream (screen sharing stream)
This parameter specifies the type of the stream displayed in the big window. If it appears in `MixLayoutList`, it indicates the type of the stream of a specified user.
     * @param string $BackgroundImageUrl The image url supports only jpg, png, and jpeg. the image resolution is limited to no more than 2K, and the image size limit is no more than 5MB. note that the url must carry the format extension, and only specific strings are supported in the url, including a-z, a-z, 0-9, '-', '.', '_', '~', ':', '/', '?', '#', '[', ']', '@', '!', '&', '(', ')', '*', '+', ',', '%', and '='.
     * @param integer $PlaceHolderMode Set to 1 to enable the placeholder image function, and 0 to disable it. default is 0. when enabled, the corresponding placeholder image can be displayed in the preset position if the user has no upload audio and video.
     * @param integer $BackgroundImageRenderMode Handling solution when the background image aspect ratio is not the same, consistent with the RenderMode defined in MixLayoutList.
     * @param string $DefaultSubBackgroundImage Sub-Picture placeholder image url supports only jpg, png, jpeg. resolution limitation is no more than 2K. image size limit is no more than 5MB. note that the url must carry format extension and supports only specific string literals within the range of a-z a-z 0-9 '-', '.', '_', '~', ':', '/', '?', '#', '[', ']' '@', '!', '&', '(', ')', '*', '+', ',', '%', '='.
     * @param array $WaterMarkList The watermark layout. Up to 25 watermarks are supported.
     * @param integer $RenderMode When the aspect ratio of the background image does not match in the template layout, the handling solution is applied. the custom layout is disabled and aligns with the RenderMode defined in MixLayoutList.
     * @param integer $MaxResolutionUserAlign This parameter is valid only if the screen sharing layout is used. If you set it to `1`, the large video window will appear on the right and the small window on the left. The default value is `0`.
     * @param boolean $PureAudioDisableLayout Controls whether audio users inside the room occupy the stream mixing layout. this takes effect only in mixed stream recording and template layout. true: represents that audio users do not occupy placeholders. false: represents that audio users occupy placeholders (false by default).
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

        if (array_key_exists("PureAudioDisableLayout",$param) and $param["PureAudioDisableLayout"] !== null) {
            $this->PureAudioDisableLayout = $param["PureAudioDisableLayout"];
        }
    }
}
