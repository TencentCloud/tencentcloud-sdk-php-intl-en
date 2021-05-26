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
 * Valid in custom template, used to specify the video image position of a user in mixed streams.
 *
 * @method string getUserId() Obtain Used to assign users to preset positions; if not assigned, users will occupy the positions set in `PresetLayoutConfig` in room entry sequence.
 * @method void setUserId(string $UserId) Set Used to assign users to preset positions; if not assigned, users will occupy the positions set in `PresetLayoutConfig` in room entry sequence.
 * @method integer getStreamType() Obtain Stream type of the user when a specified user is assigned to the image. 0: camera; 1: screen sharing. Set this parameter to 0 when the small image is occupied by a web user.
 * @method void setStreamType(integer $StreamType) Set Stream type of the user when a specified user is assigned to the image. 0: camera; 1: screen sharing. Set this parameter to 0 when the small image is occupied by a web user.
 * @method integer getImageWidth() Obtain Width of the output image in pixels. If this parameter is not set, 0 is used by default.
 * @method void setImageWidth(integer $ImageWidth) Set Width of the output image in pixels. If this parameter is not set, 0 is used by default.
 * @method integer getImageHeight() Obtain Height of the output image in pixels. If this parameter is not set, 0 is used by default.
 * @method void setImageHeight(integer $ImageHeight) Set Height of the output image in pixels. If this parameter is not set, 0 is used by default.
 * @method integer getLocationX() Obtain X offset of the output image in pixels. The sum of `LocationX` and `ImageWidth` cannot exceed the total width of the mixed stream. If this parameter is not set, 0 is used by default.
 * @method void setLocationX(integer $LocationX) Set X offset of the output image in pixels. The sum of `LocationX` and `ImageWidth` cannot exceed the total width of the mixed stream. If this parameter is not set, 0 is used by default.
 * @method integer getLocationY() Obtain Y offset of the output image in pixels. The sum of `LocationY` and `ImageHeight` cannot exceed the total height of the mixed stream. If this parameter is not set, 0 is used by default.
 * @method void setLocationY(integer $LocationY) Set Y offset of the output image in pixels. The sum of `LocationY` and `ImageHeight` cannot exceed the total height of the mixed stream. If this parameter is not set, 0 is used by default.
 * @method integer getZOrder() Obtain Output order of the image. `0` is used if it is left empty.
 * @method void setZOrder(integer $ZOrder) Set Output order of the image. `0` is used if it is left empty.
 * @method integer getRenderMode() Obtain Render mode of the output image. 0: cropping; 1: scaling; 2: scaling on a black background. If this parameter is not set, 0 is used by default.
 * @method void setRenderMode(integer $RenderMode) Set Render mode of the output image. 0: cropping; 1: scaling; 2: scaling on a black background. If this parameter is not set, 0 is used by default.
 * @method integer getMixInputType() Obtain Media type of the mixed stream of the user occupying the current position. 0 (default): audio and video; 1: audio; 2: video. You are advised to specify a user ID when using this parameter.
 * @method void setMixInputType(integer $MixInputType) Set Media type of the mixed stream of the user occupying the current position. 0 (default): audio and video; 1: audio; 2: video. You are advised to specify a user ID when using this parameter.
 * @method integer getPlaceImageId() Obtain ID of the placeholder image. If the placeholding feature is enabled, and a user for whom an image position is reserved is not sending video data, the position will show the placeholder image. The ID is generated after the placeholder image is uploaded in the TRTC console. https://intl.cloud.tencent.com/document/product/647/50769?from_cn_redirect=1
 * @method void setPlaceImageId(integer $PlaceImageId) Set ID of the placeholder image. If the placeholding feature is enabled, and a user for whom an image position is reserved is not sending video data, the position will show the placeholder image. The ID is generated after the placeholder image is uploaded in the TRTC console. https://intl.cloud.tencent.com/document/product/647/50769?from_cn_redirect=1
 */
class PresetLayoutConfig extends AbstractModel
{
    /**
     * @var string Used to assign users to preset positions; if not assigned, users will occupy the positions set in `PresetLayoutConfig` in room entry sequence.
     */
    public $UserId;

    /**
     * @var integer Stream type of the user when a specified user is assigned to the image. 0: camera; 1: screen sharing. Set this parameter to 0 when the small image is occupied by a web user.
     */
    public $StreamType;

    /**
     * @var integer Width of the output image in pixels. If this parameter is not set, 0 is used by default.
     */
    public $ImageWidth;

    /**
     * @var integer Height of the output image in pixels. If this parameter is not set, 0 is used by default.
     */
    public $ImageHeight;

    /**
     * @var integer X offset of the output image in pixels. The sum of `LocationX` and `ImageWidth` cannot exceed the total width of the mixed stream. If this parameter is not set, 0 is used by default.
     */
    public $LocationX;

    /**
     * @var integer Y offset of the output image in pixels. The sum of `LocationY` and `ImageHeight` cannot exceed the total height of the mixed stream. If this parameter is not set, 0 is used by default.
     */
    public $LocationY;

    /**
     * @var integer Output order of the image. `0` is used if it is left empty.
     */
    public $ZOrder;

    /**
     * @var integer Render mode of the output image. 0: cropping; 1: scaling; 2: scaling on a black background. If this parameter is not set, 0 is used by default.
     */
    public $RenderMode;

    /**
     * @var integer Media type of the mixed stream of the user occupying the current position. 0 (default): audio and video; 1: audio; 2: video. You are advised to specify a user ID when using this parameter.
     */
    public $MixInputType;

    /**
     * @var integer ID of the placeholder image. If the placeholding feature is enabled, and a user for whom an image position is reserved is not sending video data, the position will show the placeholder image. The ID is generated after the placeholder image is uploaded in the TRTC console. https://intl.cloud.tencent.com/document/product/647/50769?from_cn_redirect=1
     */
    public $PlaceImageId;

    /**
     * @param string $UserId Used to assign users to preset positions; if not assigned, users will occupy the positions set in `PresetLayoutConfig` in room entry sequence.
     * @param integer $StreamType Stream type of the user when a specified user is assigned to the image. 0: camera; 1: screen sharing. Set this parameter to 0 when the small image is occupied by a web user.
     * @param integer $ImageWidth Width of the output image in pixels. If this parameter is not set, 0 is used by default.
     * @param integer $ImageHeight Height of the output image in pixels. If this parameter is not set, 0 is used by default.
     * @param integer $LocationX X offset of the output image in pixels. The sum of `LocationX` and `ImageWidth` cannot exceed the total width of the mixed stream. If this parameter is not set, 0 is used by default.
     * @param integer $LocationY Y offset of the output image in pixels. The sum of `LocationY` and `ImageHeight` cannot exceed the total height of the mixed stream. If this parameter is not set, 0 is used by default.
     * @param integer $ZOrder Output order of the image. `0` is used if it is left empty.
     * @param integer $RenderMode Render mode of the output image. 0: cropping; 1: scaling; 2: scaling on a black background. If this parameter is not set, 0 is used by default.
     * @param integer $MixInputType Media type of the mixed stream of the user occupying the current position. 0 (default): audio and video; 1: audio; 2: video. You are advised to specify a user ID when using this parameter.
     * @param integer $PlaceImageId ID of the placeholder image. If the placeholding feature is enabled, and a user for whom an image position is reserved is not sending video data, the position will show the placeholder image. The ID is generated after the placeholder image is uploaded in the TRTC console. https://intl.cloud.tencent.com/document/product/647/50769?from_cn_redirect=1
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("ImageWidth",$param) and $param["ImageWidth"] !== null) {
            $this->ImageWidth = $param["ImageWidth"];
        }

        if (array_key_exists("ImageHeight",$param) and $param["ImageHeight"] !== null) {
            $this->ImageHeight = $param["ImageHeight"];
        }

        if (array_key_exists("LocationX",$param) and $param["LocationX"] !== null) {
            $this->LocationX = $param["LocationX"];
        }

        if (array_key_exists("LocationY",$param) and $param["LocationY"] !== null) {
            $this->LocationY = $param["LocationY"];
        }

        if (array_key_exists("ZOrder",$param) and $param["ZOrder"] !== null) {
            $this->ZOrder = $param["ZOrder"];
        }

        if (array_key_exists("RenderMode",$param) and $param["RenderMode"] !== null) {
            $this->RenderMode = $param["RenderMode"];
        }

        if (array_key_exists("MixInputType",$param) and $param["MixInputType"] !== null) {
            $this->MixInputType = $param["MixInputType"];
        }

        if (array_key_exists("PlaceImageId",$param) and $param["PlaceImageId"] !== null) {
            $this->PlaceImageId = $param["PlaceImageId"];
        }
    }
}
