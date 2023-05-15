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
 * The layout parameters.
 *
 * @method integer getMixLayoutMode() Obtain The layout mode. Valid values: 1 (floating), 2 (screen sharing), 3 (grid), 4 (custom). Floating, screen sharing, and grid are dynamic layouts. Custom layouts are static layouts.
 * @method void setMixLayoutMode(integer $MixLayoutMode) Set The layout mode. Valid values: 1 (floating), 2 (screen sharing), 3 (grid), 4 (custom). Floating, screen sharing, and grid are dynamic layouts. Custom layouts are static layouts.
 * @method integer getPureAudioHoldPlaceMode() Obtain Whether to display users who publish only audio. 0: No; 1: Yes. This parameter is valid only if a dynamic layout is used. If you do not pass this parameter, 0 will be used.
 * @method void setPureAudioHoldPlaceMode(integer $PureAudioHoldPlaceMode) Set Whether to display users who publish only audio. 0: No; 1: Yes. This parameter is valid only if a dynamic layout is used. If you do not pass this parameter, 0 will be used.
 * @method array getMixLayoutList() Obtain The details of a custom layout.
 * @method void setMixLayoutList(array $MixLayoutList) Set The details of a custom layout.
 * @method MaxVideoUser getMaxVideoUser() Obtain The information of the large video in screen sharing or floating layout mode.
 * @method void setMaxVideoUser(MaxVideoUser $MaxVideoUser) Set The information of the large video in screen sharing or floating layout mode.
 * @method integer getRenderMode() Obtain The image fill mode. This parameter is valid if the layout mode is screen sharing, floating, or grid. `0`: The image will be cropped. `1`: The image will be scaled. `2`: The image will be scaled and there may be black bars.
 * @method void setRenderMode(integer $RenderMode) Set The image fill mode. This parameter is valid if the layout mode is screen sharing, floating, or grid. `0`: The image will be cropped. `1`: The image will be scaled. `2`: The image will be scaled and there may be black bars.
 */
class McuLayoutParams extends AbstractModel
{
    /**
     * @var integer The layout mode. Valid values: 1 (floating), 2 (screen sharing), 3 (grid), 4 (custom). Floating, screen sharing, and grid are dynamic layouts. Custom layouts are static layouts.
     */
    public $MixLayoutMode;

    /**
     * @var integer Whether to display users who publish only audio. 0: No; 1: Yes. This parameter is valid only if a dynamic layout is used. If you do not pass this parameter, 0 will be used.
     */
    public $PureAudioHoldPlaceMode;

    /**
     * @var array The details of a custom layout.
     */
    public $MixLayoutList;

    /**
     * @var MaxVideoUser The information of the large video in screen sharing or floating layout mode.
     */
    public $MaxVideoUser;

    /**
     * @var integer The image fill mode. This parameter is valid if the layout mode is screen sharing, floating, or grid. `0`: The image will be cropped. `1`: The image will be scaled. `2`: The image will be scaled and there may be black bars.
     */
    public $RenderMode;

    /**
     * @param integer $MixLayoutMode The layout mode. Valid values: 1 (floating), 2 (screen sharing), 3 (grid), 4 (custom). Floating, screen sharing, and grid are dynamic layouts. Custom layouts are static layouts.
     * @param integer $PureAudioHoldPlaceMode Whether to display users who publish only audio. 0: No; 1: Yes. This parameter is valid only if a dynamic layout is used. If you do not pass this parameter, 0 will be used.
     * @param array $MixLayoutList The details of a custom layout.
     * @param MaxVideoUser $MaxVideoUser The information of the large video in screen sharing or floating layout mode.
     * @param integer $RenderMode The image fill mode. This parameter is valid if the layout mode is screen sharing, floating, or grid. `0`: The image will be cropped. `1`: The image will be scaled. `2`: The image will be scaled and there may be black bars.
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

        if (array_key_exists("PureAudioHoldPlaceMode",$param) and $param["PureAudioHoldPlaceMode"] !== null) {
            $this->PureAudioHoldPlaceMode = $param["PureAudioHoldPlaceMode"];
        }

        if (array_key_exists("MixLayoutList",$param) and $param["MixLayoutList"] !== null) {
            $this->MixLayoutList = [];
            foreach ($param["MixLayoutList"] as $key => $value){
                $obj = new McuLayout();
                $obj->deserialize($value);
                array_push($this->MixLayoutList, $obj);
            }
        }

        if (array_key_exists("MaxVideoUser",$param) and $param["MaxVideoUser"] !== null) {
            $this->MaxVideoUser = new MaxVideoUser();
            $this->MaxVideoUser->deserialize($param["MaxVideoUser"]);
        }

        if (array_key_exists("RenderMode",$param) and $param["RenderMode"] !== null) {
            $this->RenderMode = $param["RenderMode"];
        }
    }
}
