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
 * Sampling screenshot information
 *
 * @method integer getDefinition() Obtain Sampled screenshot specification ID. See sampling screenshot parameter template (https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.87.87.E6.A0.B7.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF).
 * @method void setDefinition(integer $Definition) Set Sampled screenshot specification ID. See sampling screenshot parameter template (https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.87.87.E6.A0.B7.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF).
 * @method string getSampleType() Obtain Sampling method. Valid value:
<li>Percent: interval sampling based on percentage.</li>
<li>Time: sampling based on time interval.</li>
 * @method void setSampleType(string $SampleType) Set Sampling method. Valid value:
<li>Percent: interval sampling based on percentage.</li>
<li>Time: sampling based on time interval.</li>
 * @method integer getInterval() Obtain Sampling interval
<li>When SampleType is Percent, this value indicates how many percentage one image.</li>
<li>When SampleType is Time, this value means the time interval between images, in seconds. The first image is always the first video frame.</li>
 * @method void setInterval(integer $Interval) Set Sampling interval
<li>When SampleType is Percent, this value indicates how many percentage one image.</li>
<li>When SampleType is Time, this value means the time interval between images, in seconds. The first image is always the first video frame.</li>
 * @method array getImageUrlSet() Obtain List of generated screenshot URLs.
 * @method void setImageUrlSet(array $ImageUrlSet) Set List of generated screenshot URLs.
 * @method array getWaterMarkDefinition() Obtain List of template IDs if the screenshot is watermarked.
 * @method void setWaterMarkDefinition(array $WaterMarkDefinition) Set List of template IDs if the screenshot is watermarked.
 */
class MediaSampleSnapshotItem extends AbstractModel
{
    /**
     * @var integer Sampled screenshot specification ID. See sampling screenshot parameter template (https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.87.87.E6.A0.B7.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF).
     */
    public $Definition;

    /**
     * @var string Sampling method. Valid value:
<li>Percent: interval sampling based on percentage.</li>
<li>Time: sampling based on time interval.</li>
     */
    public $SampleType;

    /**
     * @var integer Sampling interval
<li>When SampleType is Percent, this value indicates how many percentage one image.</li>
<li>When SampleType is Time, this value means the time interval between images, in seconds. The first image is always the first video frame.</li>
     */
    public $Interval;

    /**
     * @var array List of generated screenshot URLs.
     */
    public $ImageUrlSet;

    /**
     * @var array List of template IDs if the screenshot is watermarked.
     */
    public $WaterMarkDefinition;

    /**
     * @param integer $Definition Sampled screenshot specification ID. See sampling screenshot parameter template (https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.87.87.E6.A0.B7.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF).
     * @param string $SampleType Sampling method. Valid value:
<li>Percent: interval sampling based on percentage.</li>
<li>Time: sampling based on time interval.</li>
     * @param integer $Interval Sampling interval
<li>When SampleType is Percent, this value indicates how many percentage one image.</li>
<li>When SampleType is Time, this value means the time interval between images, in seconds. The first image is always the first video frame.</li>
     * @param array $ImageUrlSet List of generated screenshot URLs.
     * @param array $WaterMarkDefinition List of template IDs if the screenshot is watermarked.
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

        if (array_key_exists("SampleType",$param) and $param["SampleType"] !== null) {
            $this->SampleType = $param["SampleType"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("ImageUrlSet",$param) and $param["ImageUrlSet"] !== null) {
            $this->ImageUrlSet = $param["ImageUrlSet"];
        }

        if (array_key_exists("WaterMarkDefinition",$param) and $param["WaterMarkDefinition"] !== null) {
            $this->WaterMarkDefinition = $param["WaterMarkDefinition"];
        }
    }
}
