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
 * MCU On-Cloud MixTranscoding layout parameters
 *
 * @method integer getTemplate() Obtain On-cloud stream mix layout template ID. 0: floating template (default value); 1: grid template; 2: screen sharing template; 3: picture-in-picture template; 4: custom template.
 * @method void setTemplate(integer $Template) Set On-cloud stream mix layout template ID. 0: floating template (default value); 1: grid template; 2: screen sharing template; 3: picture-in-picture template; 4: custom template.
 * @method string getMainVideoUserId() Obtain ID of the user in the big image, which takes effect in a screen sharing, floating, or picture-in-picture template.
 * @method void setMainVideoUserId(string $MainVideoUserId) Set ID of the user in the big image, which takes effect in a screen sharing, floating, or picture-in-picture template.
 * @method integer getMainVideoStreamType() Obtain Stream type of the big image, which takes effect in a screen sharing, floating, or picture-in-picture template. 0: camera; 1: screen sharing. If a web user's stream is displayed in the big image on the left, enter 0 for this parameter.
 * @method void setMainVideoStreamType(integer $MainVideoStreamType) Set Stream type of the big image, which takes effect in a screen sharing, floating, or picture-in-picture template. 0: camera; 1: screen sharing. If a web user's stream is displayed in the big image on the left, enter 0 for this parameter.
 * @method SmallVideoLayoutParams getSmallVideoLayoutParams() Obtain Layout parameter of the small image, which takes effect in a picture-in-picture template.
 * @method void setSmallVideoLayoutParams(SmallVideoLayoutParams $SmallVideoLayoutParams) Set Layout parameter of the small image, which takes effect in a picture-in-picture template.
 * @method integer getMainVideoRightAlign() Obtain You can set the layout parameter as 1 or 0 in the screen sharing template. 1: big image on the right and small images on the left, 0: big image on the left and small images on the right. The default value is 0. 
 * @method void setMainVideoRightAlign(integer $MainVideoRightAlign) Set You can set the layout parameter as 1 or 0 in the screen sharing template. 1: big image on the right and small images on the left, 0: big image on the left and small images on the right. The default value is 0. 
 * @method array getMixVideoUids() Obtain A user list, which takes effect for floating, grid, or screen sharing templates. When the user list has been set, the stream mix output for users in this user list will include both audio and video; the stream mix output for users not in the list will only include audio. Up to 16 users can be set.
 * @method void setMixVideoUids(array $MixVideoUids) Set A user list, which takes effect for floating, grid, or screen sharing templates. When the user list has been set, the stream mix output for users in this user list will include both audio and video; the stream mix output for users not in the list will only include audio. Up to 16 users can be set.
 * @method array getPresetLayoutConfig() Obtain Valid in custom template, used to specify the video image position of a user in mixed streams.
 * @method void setPresetLayoutConfig(array $PresetLayoutConfig) Set Valid in custom template, used to specify the video image position of a user in mixed streams.
 * @method integer getPlaceHolderMode() Obtain Valid in custom templates. 1: the placeholding feature is enabled; 0 (default): the feature is disabled. When the feature is enabled, but a user for whom a position is reserved is not sending video data, the position will show the corresponding placeholder image.
 * @method void setPlaceHolderMode(integer $PlaceHolderMode) Set Valid in custom templates. 1: the placeholding feature is enabled; 0 (default): the feature is disabled. When the feature is enabled, but a user for whom a position is reserved is not sending video data, the position will show the corresponding placeholder image.
 * @method integer getPureAudioHoldPlaceMode() Obtain Whether an audio-only stream occupies an image spot, which takes effect in a floating, grid, or screen sharing template. Valid values: 0 (default): when a floating or grid template is used, users sending audio only occupy image spots; when a screen sharing template is used, users (except the user whose screen is shared) sending audio only do not occupy image spots; 1: users sending audio only occupy image spots; 2: users sending audio only do not occupy image spots.
 * @method void setPureAudioHoldPlaceMode(integer $PureAudioHoldPlaceMode) Set Whether an audio-only stream occupies an image spot, which takes effect in a floating, grid, or screen sharing template. Valid values: 0 (default): when a floating or grid template is used, users sending audio only occupy image spots; when a screen sharing template is used, users (except the user whose screen is shared) sending audio only do not occupy image spots; 1: users sending audio only occupy image spots; 2: users sending audio only do not occupy image spots.
 * @method WaterMarkParams getWaterMarkParams() Obtain Watermark parameters
 * @method void setWaterMarkParams(WaterMarkParams $WaterMarkParams) Set Watermark parameters
 */
class LayoutParams extends AbstractModel
{
    /**
     * @var integer On-cloud stream mix layout template ID. 0: floating template (default value); 1: grid template; 2: screen sharing template; 3: picture-in-picture template; 4: custom template.
     */
    public $Template;

    /**
     * @var string ID of the user in the big image, which takes effect in a screen sharing, floating, or picture-in-picture template.
     */
    public $MainVideoUserId;

    /**
     * @var integer Stream type of the big image, which takes effect in a screen sharing, floating, or picture-in-picture template. 0: camera; 1: screen sharing. If a web user's stream is displayed in the big image on the left, enter 0 for this parameter.
     */
    public $MainVideoStreamType;

    /**
     * @var SmallVideoLayoutParams Layout parameter of the small image, which takes effect in a picture-in-picture template.
     */
    public $SmallVideoLayoutParams;

    /**
     * @var integer You can set the layout parameter as 1 or 0 in the screen sharing template. 1: big image on the right and small images on the left, 0: big image on the left and small images on the right. The default value is 0. 
     */
    public $MainVideoRightAlign;

    /**
     * @var array A user list, which takes effect for floating, grid, or screen sharing templates. When the user list has been set, the stream mix output for users in this user list will include both audio and video; the stream mix output for users not in the list will only include audio. Up to 16 users can be set.
     */
    public $MixVideoUids;

    /**
     * @var array Valid in custom template, used to specify the video image position of a user in mixed streams.
     */
    public $PresetLayoutConfig;

    /**
     * @var integer Valid in custom templates. 1: the placeholding feature is enabled; 0 (default): the feature is disabled. When the feature is enabled, but a user for whom a position is reserved is not sending video data, the position will show the corresponding placeholder image.
     */
    public $PlaceHolderMode;

    /**
     * @var integer Whether an audio-only stream occupies an image spot, which takes effect in a floating, grid, or screen sharing template. Valid values: 0 (default): when a floating or grid template is used, users sending audio only occupy image spots; when a screen sharing template is used, users (except the user whose screen is shared) sending audio only do not occupy image spots; 1: users sending audio only occupy image spots; 2: users sending audio only do not occupy image spots.
     */
    public $PureAudioHoldPlaceMode;

    /**
     * @var WaterMarkParams Watermark parameters
     */
    public $WaterMarkParams;

    /**
     * @param integer $Template On-cloud stream mix layout template ID. 0: floating template (default value); 1: grid template; 2: screen sharing template; 3: picture-in-picture template; 4: custom template.
     * @param string $MainVideoUserId ID of the user in the big image, which takes effect in a screen sharing, floating, or picture-in-picture template.
     * @param integer $MainVideoStreamType Stream type of the big image, which takes effect in a screen sharing, floating, or picture-in-picture template. 0: camera; 1: screen sharing. If a web user's stream is displayed in the big image on the left, enter 0 for this parameter.
     * @param SmallVideoLayoutParams $SmallVideoLayoutParams Layout parameter of the small image, which takes effect in a picture-in-picture template.
     * @param integer $MainVideoRightAlign You can set the layout parameter as 1 or 0 in the screen sharing template. 1: big image on the right and small images on the left, 0: big image on the left and small images on the right. The default value is 0. 
     * @param array $MixVideoUids A user list, which takes effect for floating, grid, or screen sharing templates. When the user list has been set, the stream mix output for users in this user list will include both audio and video; the stream mix output for users not in the list will only include audio. Up to 16 users can be set.
     * @param array $PresetLayoutConfig Valid in custom template, used to specify the video image position of a user in mixed streams.
     * @param integer $PlaceHolderMode Valid in custom templates. 1: the placeholding feature is enabled; 0 (default): the feature is disabled. When the feature is enabled, but a user for whom a position is reserved is not sending video data, the position will show the corresponding placeholder image.
     * @param integer $PureAudioHoldPlaceMode Whether an audio-only stream occupies an image spot, which takes effect in a floating, grid, or screen sharing template. Valid values: 0 (default): when a floating or grid template is used, users sending audio only occupy image spots; when a screen sharing template is used, users (except the user whose screen is shared) sending audio only do not occupy image spots; 1: users sending audio only occupy image spots; 2: users sending audio only do not occupy image spots.
     * @param WaterMarkParams $WaterMarkParams Watermark parameters
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
        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = $param["Template"];
        }

        if (array_key_exists("MainVideoUserId",$param) and $param["MainVideoUserId"] !== null) {
            $this->MainVideoUserId = $param["MainVideoUserId"];
        }

        if (array_key_exists("MainVideoStreamType",$param) and $param["MainVideoStreamType"] !== null) {
            $this->MainVideoStreamType = $param["MainVideoStreamType"];
        }

        if (array_key_exists("SmallVideoLayoutParams",$param) and $param["SmallVideoLayoutParams"] !== null) {
            $this->SmallVideoLayoutParams = new SmallVideoLayoutParams();
            $this->SmallVideoLayoutParams->deserialize($param["SmallVideoLayoutParams"]);
        }

        if (array_key_exists("MainVideoRightAlign",$param) and $param["MainVideoRightAlign"] !== null) {
            $this->MainVideoRightAlign = $param["MainVideoRightAlign"];
        }

        if (array_key_exists("MixVideoUids",$param) and $param["MixVideoUids"] !== null) {
            $this->MixVideoUids = $param["MixVideoUids"];
        }

        if (array_key_exists("PresetLayoutConfig",$param) and $param["PresetLayoutConfig"] !== null) {
            $this->PresetLayoutConfig = [];
            foreach ($param["PresetLayoutConfig"] as $key => $value){
                $obj = new PresetLayoutConfig();
                $obj->deserialize($value);
                array_push($this->PresetLayoutConfig, $obj);
            }
        }

        if (array_key_exists("PlaceHolderMode",$param) and $param["PlaceHolderMode"] !== null) {
            $this->PlaceHolderMode = $param["PlaceHolderMode"];
        }

        if (array_key_exists("PureAudioHoldPlaceMode",$param) and $param["PureAudioHoldPlaceMode"] !== null) {
            $this->PureAudioHoldPlaceMode = $param["PureAudioHoldPlaceMode"];
        }

        if (array_key_exists("WaterMarkParams",$param) and $param["WaterMarkParams"] !== null) {
            $this->WaterMarkParams = new WaterMarkParams();
            $this->WaterMarkParams->deserialize($param["WaterMarkParams"]);
        }
    }
}
