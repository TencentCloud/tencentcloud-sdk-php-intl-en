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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetWatermark request structure.
 *
 * @method integer getSdkAppId() Obtain The SDKAppID assigned by LCIC.
 * @method void setSdkAppId(integer $SdkAppId) Set The SDKAppID assigned by LCIC.
 * @method string getTeacherUrl() Obtain The URL of the watermark for the teacher’s video. If you pass in an empty string, the teacher’s video will not have a watermark.
 * @method void setTeacherUrl(string $TeacherUrl) Set The URL of the watermark for the teacher’s video. If you pass in an empty string, the teacher’s video will not have a watermark.
 * @method string getBoardUrl() Obtain The URL of the watermark for the whiteboard. If you pass in an empty string, the whiteboard video will not have a watermark.
 * @method void setBoardUrl(string $BoardUrl) Set The URL of the watermark for the whiteboard. If you pass in an empty string, the whiteboard video will not have a watermark.
 * @method string getVideoUrl() Obtain The image displayed when there is no video. If you pass in an empty string, no images will be displayed.
 * @method void setVideoUrl(string $VideoUrl) Set The image displayed when there is no video. If you pass in an empty string, no images will be displayed.
 * @method float getBoardW() Obtain The width of the whiteboard’s watermark, which is expressed as a percentage of the video width. The value range is 0-100, and the default value is 0.
 * @method void setBoardW(float $BoardW) Set The width of the whiteboard’s watermark, which is expressed as a percentage of the video width. The value range is 0-100, and the default value is 0.
 * @method float getBoardH() Obtain The height of the whiteboard’s watermark, which is expressed as a percentage of the video height. The value range is 0-100, and the default value is 0.
 * @method void setBoardH(float $BoardH) Set The height of the whiteboard’s watermark, which is expressed as a percentage of the video height. The value range is 0-100, and the default value is 0.
 * @method float getBoardX() Obtain The horizontal offset of the whiteboard’s watermark, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle horizontally. Value range: 0-100.
 * @method void setBoardX(float $BoardX) Set The horizontal offset of the whiteboard’s watermark, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle horizontally. Value range: 0-100.
 * @method float getBoardY() Obtain The vertical offset of the whiteboard’s watermark, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle vertically. Value range: 0-100.
 * @method void setBoardY(float $BoardY) Set The vertical offset of the whiteboard’s watermark, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle vertically. Value range: 0-100.
 * @method float getTeacherW() Obtain The width of the watermark for the teacher’s video, which is expressed as a percentage of the video width. The value range is 0-100, and the default value is 0.
 * @method void setTeacherW(float $TeacherW) Set The width of the watermark for the teacher’s video, which is expressed as a percentage of the video width. The value range is 0-100, and the default value is 0.
 * @method float getTeacherH() Obtain The height of the watermark for the teacher’s video, which is expressed as a percentage of the video height. The value range is 0-100, and the default value is 0.
 * @method void setTeacherH(float $TeacherH) Set The height of the watermark for the teacher’s video, which is expressed as a percentage of the video height. The value range is 0-100, and the default value is 0.
 * @method float getTeacherX() Obtain The horizontal offset of the watermark for the teacher’s video, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle horizontally. Value range: 0-100.
 * @method void setTeacherX(float $TeacherX) Set The horizontal offset of the watermark for the teacher’s video, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle horizontally. Value range: 0-100.
 * @method float getTeacherY() Obtain The vertical offset of the watermark for the teacher’s video, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle vertically. Value range: 0-100.
 * @method void setTeacherY(float $TeacherY) Set The vertical offset of the watermark for the teacher’s video, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle vertically. Value range: 0-100.
 * @method string getText() Obtain The watermark text. If you pass in an empty string, there will be no text.
 * @method void setText(string $Text) Set The watermark text. If you pass in an empty string, there will be no text.
 * @method string getTextColor() Obtain The watermark text color.
 * @method void setTextColor(string $TextColor) Set The watermark text color.
 */
class SetWatermarkRequest extends AbstractModel
{
    /**
     * @var integer The SDKAppID assigned by LCIC.
     */
    public $SdkAppId;

    /**
     * @var string The URL of the watermark for the teacher’s video. If you pass in an empty string, the teacher’s video will not have a watermark.
     */
    public $TeacherUrl;

    /**
     * @var string The URL of the watermark for the whiteboard. If you pass in an empty string, the whiteboard video will not have a watermark.
     */
    public $BoardUrl;

    /**
     * @var string The image displayed when there is no video. If you pass in an empty string, no images will be displayed.
     */
    public $VideoUrl;

    /**
     * @var float The width of the whiteboard’s watermark, which is expressed as a percentage of the video width. The value range is 0-100, and the default value is 0.
     */
    public $BoardW;

    /**
     * @var float The height of the whiteboard’s watermark, which is expressed as a percentage of the video height. The value range is 0-100, and the default value is 0.
     */
    public $BoardH;

    /**
     * @var float The horizontal offset of the whiteboard’s watermark, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle horizontally. Value range: 0-100.
     */
    public $BoardX;

    /**
     * @var float The vertical offset of the whiteboard’s watermark, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle vertically. Value range: 0-100.
     */
    public $BoardY;

    /**
     * @var float The width of the watermark for the teacher’s video, which is expressed as a percentage of the video width. The value range is 0-100, and the default value is 0.
     */
    public $TeacherW;

    /**
     * @var float The height of the watermark for the teacher’s video, which is expressed as a percentage of the video height. The value range is 0-100, and the default value is 0.
     */
    public $TeacherH;

    /**
     * @var float The horizontal offset of the watermark for the teacher’s video, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle horizontally. Value range: 0-100.
     */
    public $TeacherX;

    /**
     * @var float The vertical offset of the watermark for the teacher’s video, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle vertically. Value range: 0-100.
     */
    public $TeacherY;

    /**
     * @var string The watermark text. If you pass in an empty string, there will be no text.
     */
    public $Text;

    /**
     * @var string The watermark text color.
     */
    public $TextColor;

    /**
     * @param integer $SdkAppId The SDKAppID assigned by LCIC.
     * @param string $TeacherUrl The URL of the watermark for the teacher’s video. If you pass in an empty string, the teacher’s video will not have a watermark.
     * @param string $BoardUrl The URL of the watermark for the whiteboard. If you pass in an empty string, the whiteboard video will not have a watermark.
     * @param string $VideoUrl The image displayed when there is no video. If you pass in an empty string, no images will be displayed.
     * @param float $BoardW The width of the whiteboard’s watermark, which is expressed as a percentage of the video width. The value range is 0-100, and the default value is 0.
     * @param float $BoardH The height of the whiteboard’s watermark, which is expressed as a percentage of the video height. The value range is 0-100, and the default value is 0.
     * @param float $BoardX The horizontal offset of the whiteboard’s watermark, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle horizontally. Value range: 0-100.
     * @param float $BoardY The vertical offset of the whiteboard’s watermark, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle vertically. Value range: 0-100.
     * @param float $TeacherW The width of the watermark for the teacher’s video, which is expressed as a percentage of the video width. The value range is 0-100, and the default value is 0.
     * @param float $TeacherH The height of the watermark for the teacher’s video, which is expressed as a percentage of the video height. The value range is 0-100, and the default value is 0.
     * @param float $TeacherX The horizontal offset of the watermark for the teacher’s video, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle horizontally. Value range: 0-100.
     * @param float $TeacherY The vertical offset of the watermark for the teacher’s video, which is expressed as a percentage of the video width. For example, 50 indicates that the watermark will appear in the middle vertically. Value range: 0-100.
     * @param string $Text The watermark text. If you pass in an empty string, there will be no text.
     * @param string $TextColor The watermark text color.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("TeacherUrl",$param) and $param["TeacherUrl"] !== null) {
            $this->TeacherUrl = $param["TeacherUrl"];
        }

        if (array_key_exists("BoardUrl",$param) and $param["BoardUrl"] !== null) {
            $this->BoardUrl = $param["BoardUrl"];
        }

        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("BoardW",$param) and $param["BoardW"] !== null) {
            $this->BoardW = $param["BoardW"];
        }

        if (array_key_exists("BoardH",$param) and $param["BoardH"] !== null) {
            $this->BoardH = $param["BoardH"];
        }

        if (array_key_exists("BoardX",$param) and $param["BoardX"] !== null) {
            $this->BoardX = $param["BoardX"];
        }

        if (array_key_exists("BoardY",$param) and $param["BoardY"] !== null) {
            $this->BoardY = $param["BoardY"];
        }

        if (array_key_exists("TeacherW",$param) and $param["TeacherW"] !== null) {
            $this->TeacherW = $param["TeacherW"];
        }

        if (array_key_exists("TeacherH",$param) and $param["TeacherH"] !== null) {
            $this->TeacherH = $param["TeacherH"];
        }

        if (array_key_exists("TeacherX",$param) and $param["TeacherX"] !== null) {
            $this->TeacherX = $param["TeacherX"];
        }

        if (array_key_exists("TeacherY",$param) and $param["TeacherY"] !== null) {
            $this->TeacherY = $param["TeacherY"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("TextColor",$param) and $param["TextColor"] !== null) {
            $this->TextColor = $param["TextColor"];
        }
    }
}
