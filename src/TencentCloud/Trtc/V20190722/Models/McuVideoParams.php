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
 * The video parameters for relaying.
 *
 * @method VideoEncode getVideoEncode() Obtain The video encoding parameters.
 * @method void setVideoEncode(VideoEncode $VideoEncode) Set The video encoding parameters.
 * @method McuLayoutParams getLayoutParams() Obtain The layout parameters.
 * @method void setLayoutParams(McuLayoutParams $LayoutParams) Set The layout parameters.
 * @method string getBackGroundColor() Obtain The canvas color. Below are the values for some common colors:
Red: 0xcc0033
Yellow: 0xcc9900
Green: 0xcccc33
Blue: 0x99CCFF
Black: 0x000000
White: 0xFFFFFF
Grey: 0x999999
 * @method void setBackGroundColor(string $BackGroundColor) Set The canvas color. Below are the values for some common colors:
Red: 0xcc0033
Yellow: 0xcc9900
Green: 0xcccc33
Blue: 0x99CCFF
Black: 0x000000
White: 0xFFFFFF
Grey: 0x999999
 * @method string getBackgroundImageUrl() Obtain The URL of the background image for the canvas. This parameter has a higher priority than `BackGroundColor`.
 * @method void setBackgroundImageUrl(string $BackgroundImageUrl) Set The URL of the background image for the canvas. This parameter has a higher priority than `BackGroundColor`.
 * @method array getWaterMarkList() Obtain The watermark information for the mixed stream.
 * @method void setWaterMarkList(array $WaterMarkList) Set The watermark information for the mixed stream.
 * @method integer getBackgroundRenderMode() Obtain Background image display mode during output: 0 for crop, 1 for scale and display with black background, 2 for proportional scaling. The backend default is proportional scaling.
 * @method void setBackgroundRenderMode(integer $BackgroundRenderMode) Set Background image display mode during output: 0 for crop, 1 for scale and display with black background, 2 for proportional scaling. The backend default is proportional scaling.
 */
class McuVideoParams extends AbstractModel
{
    /**
     * @var VideoEncode The video encoding parameters.
     */
    public $VideoEncode;

    /**
     * @var McuLayoutParams The layout parameters.
     */
    public $LayoutParams;

    /**
     * @var string The canvas color. Below are the values for some common colors:
Red: 0xcc0033
Yellow: 0xcc9900
Green: 0xcccc33
Blue: 0x99CCFF
Black: 0x000000
White: 0xFFFFFF
Grey: 0x999999
     */
    public $BackGroundColor;

    /**
     * @var string The URL of the background image for the canvas. This parameter has a higher priority than `BackGroundColor`.
     */
    public $BackgroundImageUrl;

    /**
     * @var array The watermark information for the mixed stream.
     */
    public $WaterMarkList;

    /**
     * @var integer Background image display mode during output: 0 for crop, 1 for scale and display with black background, 2 for proportional scaling. The backend default is proportional scaling.
     */
    public $BackgroundRenderMode;

    /**
     * @param VideoEncode $VideoEncode The video encoding parameters.
     * @param McuLayoutParams $LayoutParams The layout parameters.
     * @param string $BackGroundColor The canvas color. Below are the values for some common colors:
Red: 0xcc0033
Yellow: 0xcc9900
Green: 0xcccc33
Blue: 0x99CCFF
Black: 0x000000
White: 0xFFFFFF
Grey: 0x999999
     * @param string $BackgroundImageUrl The URL of the background image for the canvas. This parameter has a higher priority than `BackGroundColor`.
     * @param array $WaterMarkList The watermark information for the mixed stream.
     * @param integer $BackgroundRenderMode Background image display mode during output: 0 for crop, 1 for scale and display with black background, 2 for proportional scaling. The backend default is proportional scaling.
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
        if (array_key_exists("VideoEncode",$param) and $param["VideoEncode"] !== null) {
            $this->VideoEncode = new VideoEncode();
            $this->VideoEncode->deserialize($param["VideoEncode"]);
        }

        if (array_key_exists("LayoutParams",$param) and $param["LayoutParams"] !== null) {
            $this->LayoutParams = new McuLayoutParams();
            $this->LayoutParams->deserialize($param["LayoutParams"]);
        }

        if (array_key_exists("BackGroundColor",$param) and $param["BackGroundColor"] !== null) {
            $this->BackGroundColor = $param["BackGroundColor"];
        }

        if (array_key_exists("BackgroundImageUrl",$param) and $param["BackgroundImageUrl"] !== null) {
            $this->BackgroundImageUrl = $param["BackgroundImageUrl"];
        }

        if (array_key_exists("WaterMarkList",$param) and $param["WaterMarkList"] !== null) {
            $this->WaterMarkList = [];
            foreach ($param["WaterMarkList"] as $key => $value){
                $obj = new McuWaterMarkParams();
                $obj->deserialize($value);
                array_push($this->WaterMarkList, $obj);
            }
        }

        if (array_key_exists("BackgroundRenderMode",$param) and $param["BackgroundRenderMode"] !== null) {
            $this->BackgroundRenderMode = $param["BackgroundRenderMode"];
        }
    }
}
