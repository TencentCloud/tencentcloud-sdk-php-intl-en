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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Video motion graphic result information
 *
 * @method TaskOutputStorage getStorage() Obtain Storage location of the animated image file.
 * @method void setStorage(TaskOutputStorage $Storage) Set Storage location of the animated image file.
 * @method string getPath() Obtain File path of the animated image.
 * @method void setPath(string $Path) Set File path of the animated image.
 * @method integer getDefinition() Obtain Rotating image template ID. Please refer to the [Rotating Image Template](https://www.tencentcloud.com/document/product/862/77168?from_cn_redirect=1#.E8.BD.AC.E5.8A.A8.E5.9B.BE.E6.A8.A1.E6.9D.BF.5B.5D(id.3Amove)).
 * @method void setDefinition(integer $Definition) Set Rotating image template ID. Please refer to the [Rotating Image Template](https://www.tencentcloud.com/document/product/862/77168?from_cn_redirect=1#.E8.BD.AC.E5.8A.A8.E5.9B.BE.E6.A8.A1.E6.9D.BF.5B.5D(id.3Amove)).
 * @method string getContainer() Obtain Animated image file format, for example gif.
 * @method void setContainer(string $Container) Set Animated image file format, for example gif.
 * @method integer getHeight() Obtain Height of the animated image, measurement unit: px.
 * @method void setHeight(integer $Height) Set Height of the animated image, measurement unit: px.
 * @method integer getWidth() Obtain Width of the animated image, measurement unit: px.
 * @method void setWidth(integer $Width) Set Width of the animated image, measurement unit: px.
 * @method integer getBitrate() Obtain Animated image bitrate. Measurement unit: bps.
 * @method void setBitrate(integer $Bitrate) Set Animated image bitrate. Measurement unit: bps.
 * @method integer getSize() Obtain Animated image size, unit: byte.
 * @method void setSize(integer $Size) Set Animated image size, unit: byte.
 * @method string getMd5() Obtain md5 value of the animated image.
 * @method void setMd5(string $Md5) Set md5 value of the animated image.
 * @method float getStartTimeOffset() Obtain Start time offset of the GIF in the video, in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of the GIF in the video, in seconds.
 * @method float getEndTimeOffset() Obtain End time offset of the GIF in the video, in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of the GIF in the video, in seconds.
 */
class MediaAnimatedGraphicsItem extends AbstractModel
{
    /**
     * @var TaskOutputStorage Storage location of the animated image file.
     */
    public $Storage;

    /**
     * @var string File path of the animated image.
     */
    public $Path;

    /**
     * @var integer Rotating image template ID. Please refer to the [Rotating Image Template](https://www.tencentcloud.com/document/product/862/77168?from_cn_redirect=1#.E8.BD.AC.E5.8A.A8.E5.9B.BE.E6.A8.A1.E6.9D.BF.5B.5D(id.3Amove)).
     */
    public $Definition;

    /**
     * @var string Animated image file format, for example gif.
     */
    public $Container;

    /**
     * @var integer Height of the animated image, measurement unit: px.
     */
    public $Height;

    /**
     * @var integer Width of the animated image, measurement unit: px.
     */
    public $Width;

    /**
     * @var integer Animated image bitrate. Measurement unit: bps.
     */
    public $Bitrate;

    /**
     * @var integer Animated image size, unit: byte.
     */
    public $Size;

    /**
     * @var string md5 value of the animated image.
     */
    public $Md5;

    /**
     * @var float Start time offset of the GIF in the video, in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of the GIF in the video, in seconds.
     */
    public $EndTimeOffset;

    /**
     * @param TaskOutputStorage $Storage Storage location of the animated image file.
     * @param string $Path File path of the animated image.
     * @param integer $Definition Rotating image template ID. Please refer to the [Rotating Image Template](https://www.tencentcloud.com/document/product/862/77168?from_cn_redirect=1#.E8.BD.AC.E5.8A.A8.E5.9B.BE.E6.A8.A1.E6.9D.BF.5B.5D(id.3Amove)).
     * @param string $Container Animated image file format, for example gif.
     * @param integer $Height Height of the animated image, measurement unit: px.
     * @param integer $Width Width of the animated image, measurement unit: px.
     * @param integer $Bitrate Animated image bitrate. Measurement unit: bps.
     * @param integer $Size Animated image size, unit: byte.
     * @param string $Md5 md5 value of the animated image.
     * @param float $StartTimeOffset Start time offset of the GIF in the video, in seconds.
     * @param float $EndTimeOffset End time offset of the GIF in the video, in seconds.
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
        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = new TaskOutputStorage();
            $this->Storage->deserialize($param["Storage"]);
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}
