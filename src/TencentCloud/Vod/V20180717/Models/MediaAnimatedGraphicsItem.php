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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result information of animated image generating task
 *
 * @method string getUrl() Obtain Address of generated animated image.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set Address of generated animated image.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getDefinition() Obtain Animated image generating template ID. For more information, please see [Animated Image Generating Parameter Template](https://intl.cloud.tencent.com/document/product/266/33481?from_cn_redirect=1#.3Cspan-id-.3D-.22zdt.22.3E.3C.2Fspan.3E.E8.BD.AC.E5.8A.A8.E5.9B.BE.E6.A8.A1.E6.9D.BF).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDefinition(integer $Definition) Set Animated image generating template ID. For more information, please see [Animated Image Generating Parameter Template](https://intl.cloud.tencent.com/document/product/266/33481?from_cn_redirect=1#.3Cspan-id-.3D-.22zdt.22.3E.3C.2Fspan.3E.E8.BD.AC.E5.8A.A8.E5.9B.BE.E6.A8.A1.E6.9D.BF).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getContainer() Obtain Animated image format, such as gif.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setContainer(string $Container) Set Animated image format, such as gif.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getHeight() Obtain Height of animated image in px.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHeight(integer $Height) Set Height of animated image in px.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getWidth() Obtain Width of animated image in px.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWidth(integer $Width) Set Width of animated image in px.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getBitrate() Obtain Bitrate of animated image in bps.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBitrate(integer $Bitrate) Set Bitrate of animated image in bps.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSize() Obtain Size of animated image in bytes.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSize(integer $Size) Set Size of animated image in bytes.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMd5() Obtain MD5 value of an animated image.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMd5(string $Md5) Set MD5 value of an animated image.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getStartTimeOffset() Obtain Start time offset of animated image in video in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of animated image in video in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getEndTimeOffset() Obtain End time offset of animated image in video in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of animated image in video in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class MediaAnimatedGraphicsItem extends AbstractModel
{
    /**
     * @var string Address of generated animated image.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var integer Animated image generating template ID. For more information, please see [Animated Image Generating Parameter Template](https://intl.cloud.tencent.com/document/product/266/33481?from_cn_redirect=1#.3Cspan-id-.3D-.22zdt.22.3E.3C.2Fspan.3E.E8.BD.AC.E5.8A.A8.E5.9B.BE.E6.A8.A1.E6.9D.BF).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Definition;

    /**
     * @var string Animated image format, such as gif.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Container;

    /**
     * @var integer Height of animated image in px.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Height;

    /**
     * @var integer Width of animated image in px.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Width;

    /**
     * @var integer Bitrate of animated image in bps.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Bitrate;

    /**
     * @var integer Size of animated image in bytes.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Size;

    /**
     * @var string MD5 value of an animated image.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Md5;

    /**
     * @var float Start time offset of animated image in video in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of animated image in video in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EndTimeOffset;

    /**
     * @param string $Url Address of generated animated image.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Definition Animated image generating template ID. For more information, please see [Animated Image Generating Parameter Template](https://intl.cloud.tencent.com/document/product/266/33481?from_cn_redirect=1#.3Cspan-id-.3D-.22zdt.22.3E.3C.2Fspan.3E.E8.BD.AC.E5.8A.A8.E5.9B.BE.E6.A8.A1.E6.9D.BF).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Container Animated image format, such as gif.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Height Height of animated image in px.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Width Width of animated image in px.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Bitrate Bitrate of animated image in bps.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Size Size of animated image in bytes.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Md5 MD5 value of an animated image.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $StartTimeOffset Start time offset of animated image in video in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $EndTimeOffset End time offset of animated image in video in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
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
