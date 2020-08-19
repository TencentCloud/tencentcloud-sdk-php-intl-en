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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result information of an animated image generating task
 *
 * @method TaskOutputStorage getStorage() Obtain Storage location of a generated animated image file.
 * @method void setStorage(TaskOutputStorage $Storage) Set Storage location of a generated animated image file.
 * @method string getPath() Obtain Path to a generated animated image file.
 * @method void setPath(string $Path) Set Path to a generated animated image file.
 * @method integer getDefinition() Obtain ID of an animated image generating template. For more information, please see [Animated Image Generating Parameter Template](https://intl.cloud.tencent.com/document/product/266/33481?from_cn_redirect=1#.E8.BD.AC.E5.8A.A8.E5.9B.BE.E6.A8.A1.E6.9D.BF).
 * @method void setDefinition(integer $Definition) Set ID of an animated image generating template. For more information, please see [Animated Image Generating Parameter Template](https://intl.cloud.tencent.com/document/product/266/33481?from_cn_redirect=1#.E8.BD.AC.E5.8A.A8.E5.9B.BE.E6.A8.A1.E6.9D.BF).
 * @method string getContainer() Obtain Animated image format, such as gif.
 * @method void setContainer(string $Container) Set Animated image format, such as gif.
 * @method integer getHeight() Obtain Height of an animated image in px.
 * @method void setHeight(integer $Height) Set Height of an animated image in px.
 * @method integer getWidth() Obtain Width of an animated image in px.
 * @method void setWidth(integer $Width) Set Width of an animated image in px.
 * @method integer getBitrate() Obtain Bitrate of an animated image in bps.
 * @method void setBitrate(integer $Bitrate) Set Bitrate of an animated image in bps.
 * @method integer getSize() Obtain Size of an animated image in bytes.
 * @method void setSize(integer $Size) Set Size of an animated image in bytes.
 * @method string getMd5() Obtain MD5 value of an animated image.
 * @method void setMd5(string $Md5) Set MD5 value of an animated image.
 * @method float getStartTimeOffset() Obtain Start time offset of an animated image in the video in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of an animated image in the video in seconds.
 * @method float getEndTimeOffset() Obtain End time offset of an animated image in the video in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of an animated image in the video in seconds.
 */
class MediaAnimatedGraphicsItem extends AbstractModel
{
    /**
     * @var TaskOutputStorage Storage location of a generated animated image file.
     */
    public $Storage;

    /**
     * @var string Path to a generated animated image file.
     */
    public $Path;

    /**
     * @var integer ID of an animated image generating template. For more information, please see [Animated Image Generating Parameter Template](https://intl.cloud.tencent.com/document/product/266/33481?from_cn_redirect=1#.E8.BD.AC.E5.8A.A8.E5.9B.BE.E6.A8.A1.E6.9D.BF).
     */
    public $Definition;

    /**
     * @var string Animated image format, such as gif.
     */
    public $Container;

    /**
     * @var integer Height of an animated image in px.
     */
    public $Height;

    /**
     * @var integer Width of an animated image in px.
     */
    public $Width;

    /**
     * @var integer Bitrate of an animated image in bps.
     */
    public $Bitrate;

    /**
     * @var integer Size of an animated image in bytes.
     */
    public $Size;

    /**
     * @var string MD5 value of an animated image.
     */
    public $Md5;

    /**
     * @var float Start time offset of an animated image in the video in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of an animated image in the video in seconds.
     */
    public $EndTimeOffset;

    /**
     * @param TaskOutputStorage $Storage Storage location of a generated animated image file.
     * @param string $Path Path to a generated animated image file.
     * @param integer $Definition ID of an animated image generating template. For more information, please see [Animated Image Generating Parameter Template](https://intl.cloud.tencent.com/document/product/266/33481?from_cn_redirect=1#.E8.BD.AC.E5.8A.A8.E5.9B.BE.E6.A8.A1.E6.9D.BF).
     * @param string $Container Animated image format, such as gif.
     * @param integer $Height Height of an animated image in px.
     * @param integer $Width Width of an animated image in px.
     * @param integer $Bitrate Bitrate of an animated image in bps.
     * @param integer $Size Size of an animated image in bytes.
     * @param string $Md5 MD5 value of an animated image.
     * @param float $StartTimeOffset Start time offset of an animated image in the video in seconds.
     * @param float $EndTimeOffset End time offset of an animated image in the video in seconds.
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
