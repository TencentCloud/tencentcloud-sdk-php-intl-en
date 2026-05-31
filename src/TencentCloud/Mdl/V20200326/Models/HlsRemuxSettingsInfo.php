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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HLS protocol configuration.
 *
 * @method integer getSegmentDuration() Obtain Segment duration in milliseconds. Input range is [1000, 30000], default 4000, can only be a multiple of 1000.
 * @method void setSegmentDuration(integer $SegmentDuration) Set Segment duration in milliseconds. Input range is [1000, 30000], default 4000, can only be a multiple of 1000.
 * @method integer getSegmentNumber() Obtain Number of shards. Input range [3, 30]. Default is 5.
 * @method void setSegmentNumber(integer $SegmentNumber) Set Number of shards. Input range [3, 30]. Default is 5.
 * @method string getPdtInsertion() Obtain Whether to enable Pdt insertion. CLOSE/OPEN. Default is CLOSE.
 * @method void setPdtInsertion(string $PdtInsertion) Set Whether to enable Pdt insertion. CLOSE/OPEN. Default is CLOSE.
 * @method integer getPdtDuration() Obtain Pdt duration in seconds. Input range (0, 3000]. Default 600.
 * @method void setPdtDuration(integer $PdtDuration) Set Pdt duration in seconds. Input range (0, 3000]. Default 600.
 * @method string getScheme() Obtain Video packaging type, selectable SEPARATE|MERGE.
 * @method void setScheme(string $Scheme) Set Video packaging type, selectable SEPARATE|MERGE.
 * @method string getSegmentType() Obtain Segment type, supports [ts|fmp4], default ts.
fmp4 does not currently support DRM and time shifting.
 * @method void setSegmentType(string $SegmentType) Set Segment type, supports [ts|fmp4], default ts.
fmp4 does not currently support DRM and time shifting.
 * @method string getH265PackageType() Obtain When the transcoding type is H265, the HLS H265 encapsulation type is selectable [hvc1|hev1], default is hev1.
 * @method void setH265PackageType(string $H265PackageType) Set When the transcoding type is H265, the HLS H265 encapsulation type is selectable [hvc1|hev1], default is hev1.
 * @method integer getLowLatency() Obtain Whether to enable low delay. 0:CLOSE. Default is 0. 1:OPEN.
 * @method void setLowLatency(integer $LowLatency) Set Whether to enable low delay. 0:CLOSE. Default is 0. 1:OPEN.
 * @method integer getPartialSegmentDuration() Obtain Small slice size in milliseconds. Value ranges from 200 to SegmentDuration (integer). Default value: 500 ms.
 * @method void setPartialSegmentDuration(integer $PartialSegmentDuration) Set Small slice size in milliseconds. Value ranges from 200 to SegmentDuration (integer). Default value: 500 ms.
 * @method integer getPartialSegmentPlaySite() Obtain Small slice playback position in milliseconds. Value ranges from 3*PartiSegmentDuration to 3*SegmentDuration (integer). Default value: 3*PartiSegmentDuration.
 * @method void setPartialSegmentPlaySite(integer $PartialSegmentPlaySite) Set Small slice playback position in milliseconds. Value ranges from 3*PartiSegmentDuration to 3*SegmentDuration (integer). Default value: 3*PartiSegmentDuration.
 * @method integer getStreamOrder() Obtain Hls master m3u8 file sorting rule by bitrate. Available values:
1: Video bitrate ascending 2: Video bitrate descending
Default value: 1
 * @method void setStreamOrder(integer $StreamOrder) Set Hls master m3u8 file sorting rule by bitrate. Available values:
1: Video bitrate ascending 2: Video bitrate descending
Default value: 1
 * @method integer getVideoResolution() Obtain Whether the Hls master m3u8 file contains resolution information. Available values:
1: INCLUDE includes video resolution 2: EXCLUDE excludes video resolution.
Default value: 1.
 * @method void setVideoResolution(integer $VideoResolution) Set Whether the Hls master m3u8 file contains resolution information. Available values:
1: INCLUDE includes video resolution 2: EXCLUDE excludes video resolution.
Default value: 1.
 * @method integer getEndListTag() Obtain Whether the content contains the `EXT-X-ENDLIST` tag. 1: contains; 2: does not contain. Default: 1.
 * @method void setEndListTag(integer $EndListTag) Set Whether the content contains the `EXT-X-ENDLIST` tag. 1: contains; 2: does not contain. Default: 1.
 * @method string getAdMarkupType() Obtain Option: `ENHANCED_SCTE35`, `DATERANGE`; default `ENHANCED_SCTE35`.
 * @method void setAdMarkupType(string $AdMarkupType) Set Option: `ENHANCED_SCTE35`, `DATERANGE`; default `ENHANCED_SCTE35`.
 */
class HlsRemuxSettingsInfo extends AbstractModel
{
    /**
     * @var integer Segment duration in milliseconds. Input range is [1000, 30000], default 4000, can only be a multiple of 1000.
     */
    public $SegmentDuration;

    /**
     * @var integer Number of shards. Input range [3, 30]. Default is 5.
     */
    public $SegmentNumber;

    /**
     * @var string Whether to enable Pdt insertion. CLOSE/OPEN. Default is CLOSE.
     */
    public $PdtInsertion;

    /**
     * @var integer Pdt duration in seconds. Input range (0, 3000]. Default 600.
     */
    public $PdtDuration;

    /**
     * @var string Video packaging type, selectable SEPARATE|MERGE.
     */
    public $Scheme;

    /**
     * @var string Segment type, supports [ts|fmp4], default ts.
fmp4 does not currently support DRM and time shifting.
     */
    public $SegmentType;

    /**
     * @var string When the transcoding type is H265, the HLS H265 encapsulation type is selectable [hvc1|hev1], default is hev1.
     */
    public $H265PackageType;

    /**
     * @var integer Whether to enable low delay. 0:CLOSE. Default is 0. 1:OPEN.
     */
    public $LowLatency;

    /**
     * @var integer Small slice size in milliseconds. Value ranges from 200 to SegmentDuration (integer). Default value: 500 ms.
     */
    public $PartialSegmentDuration;

    /**
     * @var integer Small slice playback position in milliseconds. Value ranges from 3*PartiSegmentDuration to 3*SegmentDuration (integer). Default value: 3*PartiSegmentDuration.
     */
    public $PartialSegmentPlaySite;

    /**
     * @var integer Hls master m3u8 file sorting rule by bitrate. Available values:
1: Video bitrate ascending 2: Video bitrate descending
Default value: 1
     */
    public $StreamOrder;

    /**
     * @var integer Whether the Hls master m3u8 file contains resolution information. Available values:
1: INCLUDE includes video resolution 2: EXCLUDE excludes video resolution.
Default value: 1.
     */
    public $VideoResolution;

    /**
     * @var integer Whether the content contains the `EXT-X-ENDLIST` tag. 1: contains; 2: does not contain. Default: 1.
     */
    public $EndListTag;

    /**
     * @var string Option: `ENHANCED_SCTE35`, `DATERANGE`; default `ENHANCED_SCTE35`.
     */
    public $AdMarkupType;

    /**
     * @param integer $SegmentDuration Segment duration in milliseconds. Input range is [1000, 30000], default 4000, can only be a multiple of 1000.
     * @param integer $SegmentNumber Number of shards. Input range [3, 30]. Default is 5.
     * @param string $PdtInsertion Whether to enable Pdt insertion. CLOSE/OPEN. Default is CLOSE.
     * @param integer $PdtDuration Pdt duration in seconds. Input range (0, 3000]. Default 600.
     * @param string $Scheme Video packaging type, selectable SEPARATE|MERGE.
     * @param string $SegmentType Segment type, supports [ts|fmp4], default ts.
fmp4 does not currently support DRM and time shifting.
     * @param string $H265PackageType When the transcoding type is H265, the HLS H265 encapsulation type is selectable [hvc1|hev1], default is hev1.
     * @param integer $LowLatency Whether to enable low delay. 0:CLOSE. Default is 0. 1:OPEN.
     * @param integer $PartialSegmentDuration Small slice size in milliseconds. Value ranges from 200 to SegmentDuration (integer). Default value: 500 ms.
     * @param integer $PartialSegmentPlaySite Small slice playback position in milliseconds. Value ranges from 3*PartiSegmentDuration to 3*SegmentDuration (integer). Default value: 3*PartiSegmentDuration.
     * @param integer $StreamOrder Hls master m3u8 file sorting rule by bitrate. Available values:
1: Video bitrate ascending 2: Video bitrate descending
Default value: 1
     * @param integer $VideoResolution Whether the Hls master m3u8 file contains resolution information. Available values:
1: INCLUDE includes video resolution 2: EXCLUDE excludes video resolution.
Default value: 1.
     * @param integer $EndListTag Whether the content contains the `EXT-X-ENDLIST` tag. 1: contains; 2: does not contain. Default: 1.
     * @param string $AdMarkupType Option: `ENHANCED_SCTE35`, `DATERANGE`; default `ENHANCED_SCTE35`.
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
        if (array_key_exists("SegmentDuration",$param) and $param["SegmentDuration"] !== null) {
            $this->SegmentDuration = $param["SegmentDuration"];
        }

        if (array_key_exists("SegmentNumber",$param) and $param["SegmentNumber"] !== null) {
            $this->SegmentNumber = $param["SegmentNumber"];
        }

        if (array_key_exists("PdtInsertion",$param) and $param["PdtInsertion"] !== null) {
            $this->PdtInsertion = $param["PdtInsertion"];
        }

        if (array_key_exists("PdtDuration",$param) and $param["PdtDuration"] !== null) {
            $this->PdtDuration = $param["PdtDuration"];
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }

        if (array_key_exists("H265PackageType",$param) and $param["H265PackageType"] !== null) {
            $this->H265PackageType = $param["H265PackageType"];
        }

        if (array_key_exists("LowLatency",$param) and $param["LowLatency"] !== null) {
            $this->LowLatency = $param["LowLatency"];
        }

        if (array_key_exists("PartialSegmentDuration",$param) and $param["PartialSegmentDuration"] !== null) {
            $this->PartialSegmentDuration = $param["PartialSegmentDuration"];
        }

        if (array_key_exists("PartialSegmentPlaySite",$param) and $param["PartialSegmentPlaySite"] !== null) {
            $this->PartialSegmentPlaySite = $param["PartialSegmentPlaySite"];
        }

        if (array_key_exists("StreamOrder",$param) and $param["StreamOrder"] !== null) {
            $this->StreamOrder = $param["StreamOrder"];
        }

        if (array_key_exists("VideoResolution",$param) and $param["VideoResolution"] !== null) {
            $this->VideoResolution = $param["VideoResolution"];
        }

        if (array_key_exists("EndListTag",$param) and $param["EndListTag"] !== null) {
            $this->EndListTag = $param["EndListTag"];
        }

        if (array_key_exists("AdMarkupType",$param) and $param["AdMarkupType"] !== null) {
            $this->AdMarkupType = $param["AdMarkupType"];
        }
    }
}
