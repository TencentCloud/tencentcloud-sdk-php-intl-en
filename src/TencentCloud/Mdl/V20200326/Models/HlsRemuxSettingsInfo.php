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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HLS protocol configuration.
 *
 * @method integer getSegmentDuration() Obtain Segment duration in ms. Value range: [1000,30000]. Default value: 4000. The value can only be a multiple of 1,000.
 * @method void setSegmentDuration(integer $SegmentDuration) Set Segment duration in ms. Value range: [1000,30000]. Default value: 4000. The value can only be a multiple of 1,000.
 * @method integer getSegmentNumber() Obtain Number of segments. Value range: [1,30]. Default value: 5.
 * @method void setSegmentNumber(integer $SegmentNumber) Set Number of segments. Value range: [1,30]. Default value: 5.
 * @method string getPdtInsertion() Obtain Whether to enable PDT insertion. Valid values: CLOSE/OPEN. Default value: CLOSE.
 * @method void setPdtInsertion(string $PdtInsertion) Set Whether to enable PDT insertion. Valid values: CLOSE/OPEN. Default value: CLOSE.
 * @method integer getPdtDuration() Obtain PDT duration in seconds. Value range: (0,3000]. Default value: 600.
 * @method void setPdtDuration(integer $PdtDuration) Set PDT duration in seconds. Value range: (0,3000]. Default value: 600.
 * @method string getScheme() Obtain Audio/Video packaging scheme. Valid values: `SEPARATE`, `MERGE`. Default value is: SEPARATE.
 * @method void setScheme(string $Scheme) Set Audio/Video packaging scheme. Valid values: `SEPARATE`, `MERGE`. Default value is: SEPARATE.
 * @method string getSegmentType() Obtain The segment type. Valid values: `ts` (default), `fmp4`.
Currently, fMP4 segments do not support DRM or time shifting.
 * @method void setSegmentType(string $SegmentType) Set The segment type. Valid values: `ts` (default), `fmp4`.
Currently, fMP4 segments do not support DRM or time shifting.
 * @method string getH265PackageType() Obtain The HLS package type when the H.265 codec is used. Valid values: `hvc1`, `hev1` (default).
 * @method void setH265PackageType(string $H265PackageType) Set The HLS package type when the H.265 codec is used. Valid values: `hvc1`, `hev1` (default).
 * @method integer getLowLatency() Obtain 
 * @method void setLowLatency(integer $LowLatency) Set 
 * @method integer getPartialSegmentDuration() Obtain 
 * @method void setPartialSegmentDuration(integer $PartialSegmentDuration) Set 
 * @method integer getPartialSegmentPlaySite() Obtain 
 * @method void setPartialSegmentPlaySite(integer $PartialSegmentPlaySite) Set 
 */
class HlsRemuxSettingsInfo extends AbstractModel
{
    /**
     * @var integer Segment duration in ms. Value range: [1000,30000]. Default value: 4000. The value can only be a multiple of 1,000.
     */
    public $SegmentDuration;

    /**
     * @var integer Number of segments. Value range: [1,30]. Default value: 5.
     */
    public $SegmentNumber;

    /**
     * @var string Whether to enable PDT insertion. Valid values: CLOSE/OPEN. Default value: CLOSE.
     */
    public $PdtInsertion;

    /**
     * @var integer PDT duration in seconds. Value range: (0,3000]. Default value: 600.
     */
    public $PdtDuration;

    /**
     * @var string Audio/Video packaging scheme. Valid values: `SEPARATE`, `MERGE`. Default value is: SEPARATE.
     */
    public $Scheme;

    /**
     * @var string The segment type. Valid values: `ts` (default), `fmp4`.
Currently, fMP4 segments do not support DRM or time shifting.
     */
    public $SegmentType;

    /**
     * @var string The HLS package type when the H.265 codec is used. Valid values: `hvc1`, `hev1` (default).
     */
    public $H265PackageType;

    /**
     * @var integer 
     */
    public $LowLatency;

    /**
     * @var integer 
     */
    public $PartialSegmentDuration;

    /**
     * @var integer 
     */
    public $PartialSegmentPlaySite;

    /**
     * @param integer $SegmentDuration Segment duration in ms. Value range: [1000,30000]. Default value: 4000. The value can only be a multiple of 1,000.
     * @param integer $SegmentNumber Number of segments. Value range: [1,30]. Default value: 5.
     * @param string $PdtInsertion Whether to enable PDT insertion. Valid values: CLOSE/OPEN. Default value: CLOSE.
     * @param integer $PdtDuration PDT duration in seconds. Value range: (0,3000]. Default value: 600.
     * @param string $Scheme Audio/Video packaging scheme. Valid values: `SEPARATE`, `MERGE`. Default value is: SEPARATE.
     * @param string $SegmentType The segment type. Valid values: `ts` (default), `fmp4`.
Currently, fMP4 segments do not support DRM or time shifting.
     * @param string $H265PackageType The HLS package type when the H.265 codec is used. Valid values: `hvc1`, `hev1` (default).
     * @param integer $LowLatency 
     * @param integer $PartialSegmentDuration 
     * @param integer $PartialSegmentPlaySite 
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
    }
}
