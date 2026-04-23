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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Adaptive bitrate streaming information
 *
 * @method integer getDefinition() Obtain <p>Convert to adaptive bitrate streaming specification.</p>
 * @method void setDefinition(integer $Definition) Set <p>Convert to adaptive bitrate streaming specification.</p>
 * @method string getPackage() Obtain <p>Packaging format. Value ranges from:</p><li>HLS;</li><li>DASH.</li>
 * @method void setPackage(string $Package) Set <p>Packaging format. Value ranges from:</p><li>HLS;</li><li>DASH.</li>
 * @method string getDrmType() Obtain <p>Encryption type.</p>
 * @method void setDrmType(string $DrmType) Set <p>Encryption type.</p>
 * @method string getUrl() Obtain <p>Playback address.</p>
 * @method void setUrl(string $Url) Set <p>Playback address.</p>
 * @method integer getSize() Obtain <p>Media file size, unit: byte.</p><li>When the media file is HLS, the size is the sum of m3u8 and ts file sizes.</li><li>When the media file is DASH, the size is the sum of mpd and fragment file sizes.</li><li><font color="red">Note</font>: This field is 0 for adaptive bitrate stream files generated through pre-processing before 2022-01-10T16:00:00Z.</li>
 * @method void setSize(integer $Size) Set <p>Media file size, unit: byte.</p><li>When the media file is HLS, the size is the sum of m3u8 and ts file sizes.</li><li>When the media file is DASH, the size is the sum of mpd and fragment file sizes.</li><li><font color="red">Note</font>: This field is 0 for adaptive bitrate stream files generated through pre-processing before 2022-01-10T16:00:00Z.</li>
 * @method string getDigitalWatermarkType() Obtain <p>Watermark type. Available values:</p><li>Trace means transit watermark processing;</li><li>CopyRight means copyright watermark processing;</li><li>None means no watermark processing.</li>
 * @method void setDigitalWatermarkType(string $DigitalWatermarkType) Set <p>Watermark type. Available values:</p><li>Trace means transit watermark processing;</li><li>CopyRight means copyright watermark processing;</li><li>None means no watermark processing.</li>
 * @method array getSubStreamSet() Obtain <p>Substream info list.</p>
 * @method void setSubStreamSet(array $SubStreamSet) Set <p>Substream info list.</p>
 * @method string getCopyRightWatermarkText() Obtain <p>Copyright information.</p>
 * @method void setCopyRightWatermarkText(string $CopyRightWatermarkText) Set <p>Copyright information.</p>
 * @method integer getBlindWatermarkDefinition() Obtain <p>Digital watermark template id.</p>
 * @method void setBlindWatermarkDefinition(integer $BlindWatermarkDefinition) Set <p>Digital watermark template id.</p>
 * @method array getSubtitleSet() Obtain <p>Subtitle information list.</p>
 * @method void setSubtitleSet(array $SubtitleSet) Set <p>Subtitle information list.</p>
 * @method string getDefaultSubtitleId() Obtain <p>Unique identifier for default subtitle.</p>
 * @method void setDefaultSubtitleId(string $DefaultSubtitleId) Set <p>Unique identifier for default subtitle.</p>
 * @method string getDrmEncryptType() Obtain <p>DRM encryption method.</p>
 * @method void setDrmEncryptType(string $DrmEncryptType) Set <p>DRM encryption method.</p>
 */
class AdaptiveDynamicStreamingInfoItem extends AbstractModel
{
    /**
     * @var integer <p>Convert to adaptive bitrate streaming specification.</p>
     */
    public $Definition;

    /**
     * @var string <p>Packaging format. Value ranges from:</p><li>HLS;</li><li>DASH.</li>
     */
    public $Package;

    /**
     * @var string <p>Encryption type.</p>
     */
    public $DrmType;

    /**
     * @var string <p>Playback address.</p>
     */
    public $Url;

    /**
     * @var integer <p>Media file size, unit: byte.</p><li>When the media file is HLS, the size is the sum of m3u8 and ts file sizes.</li><li>When the media file is DASH, the size is the sum of mpd and fragment file sizes.</li><li><font color="red">Note</font>: This field is 0 for adaptive bitrate stream files generated through pre-processing before 2022-01-10T16:00:00Z.</li>
     */
    public $Size;

    /**
     * @var string <p>Watermark type. Available values:</p><li>Trace means transit watermark processing;</li><li>CopyRight means copyright watermark processing;</li><li>None means no watermark processing.</li>
     */
    public $DigitalWatermarkType;

    /**
     * @var array <p>Substream info list.</p>
     */
    public $SubStreamSet;

    /**
     * @var string <p>Copyright information.</p>
     */
    public $CopyRightWatermarkText;

    /**
     * @var integer <p>Digital watermark template id.</p>
     */
    public $BlindWatermarkDefinition;

    /**
     * @var array <p>Subtitle information list.</p>
     */
    public $SubtitleSet;

    /**
     * @var string <p>Unique identifier for default subtitle.</p>
     */
    public $DefaultSubtitleId;

    /**
     * @var string <p>DRM encryption method.</p>
     */
    public $DrmEncryptType;

    /**
     * @param integer $Definition <p>Convert to adaptive bitrate streaming specification.</p>
     * @param string $Package <p>Packaging format. Value ranges from:</p><li>HLS;</li><li>DASH.</li>
     * @param string $DrmType <p>Encryption type.</p>
     * @param string $Url <p>Playback address.</p>
     * @param integer $Size <p>Media file size, unit: byte.</p><li>When the media file is HLS, the size is the sum of m3u8 and ts file sizes.</li><li>When the media file is DASH, the size is the sum of mpd and fragment file sizes.</li><li><font color="red">Note</font>: This field is 0 for adaptive bitrate stream files generated through pre-processing before 2022-01-10T16:00:00Z.</li>
     * @param string $DigitalWatermarkType <p>Watermark type. Available values:</p><li>Trace means transit watermark processing;</li><li>CopyRight means copyright watermark processing;</li><li>None means no watermark processing.</li>
     * @param array $SubStreamSet <p>Substream info list.</p>
     * @param string $CopyRightWatermarkText <p>Copyright information.</p>
     * @param integer $BlindWatermarkDefinition <p>Digital watermark template id.</p>
     * @param array $SubtitleSet <p>Subtitle information list.</p>
     * @param string $DefaultSubtitleId <p>Unique identifier for default subtitle.</p>
     * @param string $DrmEncryptType <p>DRM encryption method.</p>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Package",$param) and $param["Package"] !== null) {
            $this->Package = $param["Package"];
        }

        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("DigitalWatermarkType",$param) and $param["DigitalWatermarkType"] !== null) {
            $this->DigitalWatermarkType = $param["DigitalWatermarkType"];
        }

        if (array_key_exists("SubStreamSet",$param) and $param["SubStreamSet"] !== null) {
            $this->SubStreamSet = [];
            foreach ($param["SubStreamSet"] as $key => $value){
                $obj = new MediaSubStreamInfoItem();
                $obj->deserialize($value);
                array_push($this->SubStreamSet, $obj);
            }
        }

        if (array_key_exists("CopyRightWatermarkText",$param) and $param["CopyRightWatermarkText"] !== null) {
            $this->CopyRightWatermarkText = $param["CopyRightWatermarkText"];
        }

        if (array_key_exists("BlindWatermarkDefinition",$param) and $param["BlindWatermarkDefinition"] !== null) {
            $this->BlindWatermarkDefinition = $param["BlindWatermarkDefinition"];
        }

        if (array_key_exists("SubtitleSet",$param) and $param["SubtitleSet"] !== null) {
            $this->SubtitleSet = [];
            foreach ($param["SubtitleSet"] as $key => $value){
                $obj = new MediaSubtitleItem();
                $obj->deserialize($value);
                array_push($this->SubtitleSet, $obj);
            }
        }

        if (array_key_exists("DefaultSubtitleId",$param) and $param["DefaultSubtitleId"] !== null) {
            $this->DefaultSubtitleId = $param["DefaultSubtitleId"];
        }

        if (array_key_exists("DrmEncryptType",$param) and $param["DrmEncryptType"] !== null) {
            $this->DrmEncryptType = $param["DrmEncryptType"];
        }
    }
}
