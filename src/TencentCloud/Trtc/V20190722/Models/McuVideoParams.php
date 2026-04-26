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
 * The video parameters for relaying.
 *
 * @method VideoEncode getVideoEncode() Obtain Video encoding parameter for the output stream.
 * @method void setVideoEncode(VideoEncode $VideoEncode) Set Video encoding parameter for the output stream.
 * @method McuLayoutParams getLayoutParams() Obtain Stream mixing layout parameter.
 * @method void setLayoutParams(McuLayoutParams $LayoutParams) Set Stream mixing layout parameter.
 * @method string getBackGroundColor() Obtain The entire canvas background color. commonly used colors:.
Red: 0xcc0033.
Yellow: 0xcc9900.
Green: 0xcccc33.
Blue: 0x99CCFF.
Black: 0x000000.
White: 0xFFFFFF.
Gray: 0x999999.
 * @method void setBackGroundColor(string $BackGroundColor) Set The entire canvas background color. commonly used colors:.
Red: 0xcc0033.
Yellow: 0xcc9900.
Green: 0xcccc33.
Blue: 0x99CCFF.
Black: 0x000000.
White: 0xFFFFFF.
Gray: 0x999999.
 * @method string getBackgroundImageUrl() Obtain The url of the background image for the entire canvas. priority is higher than BackGroundColor. supports png, jpg, and jpeg formats. image size limit is not more than 5MB.
Note:.
1. make sure the image link is accessible. the backend download timeout is 10 seconds with a maximum of 3 retries. if the image download fails eventually, the background image will not take effect.
2. url supported character sets: ['0-9','a-z','a-z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|']. make sure url characters are within the supported character sets. if any character outside the supported character sets exists, the background image will not take effect.
 * @method void setBackgroundImageUrl(string $BackgroundImageUrl) Set The url of the background image for the entire canvas. priority is higher than BackGroundColor. supports png, jpg, and jpeg formats. image size limit is not more than 5MB.
Note:.
1. make sure the image link is accessible. the backend download timeout is 10 seconds with a maximum of 3 retries. if the image download fails eventually, the background image will not take effect.
2. url supported character sets: ['0-9','a-z','a-z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|']. make sure url characters are within the supported character sets. if any character outside the supported character sets exists, the background image will not take effect.
 * @method array getWaterMarkList() Obtain Watermark parameters for the stream mixing layout.
 * @method void setWaterMarkList(array $WaterMarkList) Set Watermark parameters for the stream mixing layout.
 * @method integer getBackgroundRenderMode() Obtain The display mode of the background image in the output: 0 for crop, 1 for scale and display black background, 2 for variable-scale scaling. the backend defaults to variable-scale scaling.
 * @method void setBackgroundRenderMode(integer $BackgroundRenderMode) Set The display mode of the background image in the output: 0 for crop, 1 for scale and display black background, 2 for variable-scale scaling. the backend defaults to variable-scale scaling.
 */
class McuVideoParams extends AbstractModel
{
    /**
     * @var VideoEncode Video encoding parameter for the output stream.
     */
    public $VideoEncode;

    /**
     * @var McuLayoutParams Stream mixing layout parameter.
     */
    public $LayoutParams;

    /**
     * @var string The entire canvas background color. commonly used colors:.
Red: 0xcc0033.
Yellow: 0xcc9900.
Green: 0xcccc33.
Blue: 0x99CCFF.
Black: 0x000000.
White: 0xFFFFFF.
Gray: 0x999999.
     */
    public $BackGroundColor;

    /**
     * @var string The url of the background image for the entire canvas. priority is higher than BackGroundColor. supports png, jpg, and jpeg formats. image size limit is not more than 5MB.
Note:.
1. make sure the image link is accessible. the backend download timeout is 10 seconds with a maximum of 3 retries. if the image download fails eventually, the background image will not take effect.
2. url supported character sets: ['0-9','a-z','a-z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|']. make sure url characters are within the supported character sets. if any character outside the supported character sets exists, the background image will not take effect.
     */
    public $BackgroundImageUrl;

    /**
     * @var array Watermark parameters for the stream mixing layout.
     */
    public $WaterMarkList;

    /**
     * @var integer The display mode of the background image in the output: 0 for crop, 1 for scale and display black background, 2 for variable-scale scaling. the backend defaults to variable-scale scaling.
     */
    public $BackgroundRenderMode;

    /**
     * @param VideoEncode $VideoEncode Video encoding parameter for the output stream.
     * @param McuLayoutParams $LayoutParams Stream mixing layout parameter.
     * @param string $BackGroundColor The entire canvas background color. commonly used colors:.
Red: 0xcc0033.
Yellow: 0xcc9900.
Green: 0xcccc33.
Blue: 0x99CCFF.
Black: 0x000000.
White: 0xFFFFFF.
Gray: 0x999999.
     * @param string $BackgroundImageUrl The url of the background image for the entire canvas. priority is higher than BackGroundColor. supports png, jpg, and jpeg formats. image size limit is not more than 5MB.
Note:.
1. make sure the image link is accessible. the backend download timeout is 10 seconds with a maximum of 3 retries. if the image download fails eventually, the background image will not take effect.
2. url supported character sets: ['0-9','a-z','a-z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|']. make sure url characters are within the supported character sets. if any character outside the supported character sets exists, the background image will not take effect.
     * @param array $WaterMarkList Watermark parameters for the stream mixing layout.
     * @param integer $BackgroundRenderMode The display mode of the background image in the output: 0 for crop, 1 for scale and display black background, 2 for variable-scale scaling. the backend defaults to variable-scale scaling.
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
