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
 * Sampling screenshot information
 *
 * @method integer getDefinition() Obtain Sampled screenshot specification ID. Please refer to the sampling screenshot parameter template (https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.87.87.E6.A0.B7.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF).
 * @method void setDefinition(integer $Definition) Set Sampled screenshot specification ID. Please refer to the sampling screenshot parameter template (https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.87.87.E6.A0.B7.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF).
 * @method string getSampleType() Obtain Sampling method, Valid value:
<li>Percent: interval sampling based on percentage.</li>
<li>Time: sampling based on time interval.</li>
 * @method void setSampleType(string $SampleType) Set Sampling method, Valid value:
<li>Percent: interval sampling based on percentage.</li>
<li>Time: sampling based on time interval.</li>
 * @method integer getInterval() Obtain Sampling interval
<li>When SampleType is Percent, this value indicates how many percentage points per image.</li>
<li>When SampleType is Time, this value indicates how many time intervals per image, in seconds. The first image is the first video frame.</li>
 * @method void setInterval(integer $Interval) Set Sampling interval
<li>When SampleType is Percent, this value indicates how many percentage points per image.</li>
<li>When SampleType is Time, this value indicates how many time intervals per image, in seconds. The first image is the first video frame.</li>
 * @method TaskOutputStorage getStorage() Obtain Storage location of a file after screenshot.
 * @method void setStorage(TaskOutputStorage $Storage) Set Storage location of a file after screenshot.
 * @method array getImagePathSet() Obtain List of generated screenshot paths.
 * @method void setImagePathSet(array $ImagePathSet) Set List of generated screenshot paths.
 * @method array getWaterMarkDefinition() Obtain If a screenshot is watermarked, the watermark template ID list.
 * @method void setWaterMarkDefinition(array $WaterMarkDefinition) Set If a screenshot is watermarked, the watermark template ID list.
 */
class MediaSampleSnapshotItem extends AbstractModel
{
    /**
     * @var integer Sampled screenshot specification ID. Please refer to the sampling screenshot parameter template (https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.87.87.E6.A0.B7.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF).
     */
    public $Definition;

    /**
     * @var string Sampling method, Valid value:
<li>Percent: interval sampling based on percentage.</li>
<li>Time: sampling based on time interval.</li>
     */
    public $SampleType;

    /**
     * @var integer Sampling interval
<li>When SampleType is Percent, this value indicates how many percentage points per image.</li>
<li>When SampleType is Time, this value indicates how many time intervals per image, in seconds. The first image is the first video frame.</li>
     */
    public $Interval;

    /**
     * @var TaskOutputStorage Storage location of a file after screenshot.
     */
    public $Storage;

    /**
     * @var array List of generated screenshot paths.
     */
    public $ImagePathSet;

    /**
     * @var array If a screenshot is watermarked, the watermark template ID list.
     */
    public $WaterMarkDefinition;

    /**
     * @param integer $Definition Sampled screenshot specification ID. Please refer to the sampling screenshot parameter template (https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.87.87.E6.A0.B7.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF).
     * @param string $SampleType Sampling method, Valid value:
<li>Percent: interval sampling based on percentage.</li>
<li>Time: sampling based on time interval.</li>
     * @param integer $Interval Sampling interval
<li>When SampleType is Percent, this value indicates how many percentage points per image.</li>
<li>When SampleType is Time, this value indicates how many time intervals per image, in seconds. The first image is the first video frame.</li>
     * @param TaskOutputStorage $Storage Storage location of a file after screenshot.
     * @param array $ImagePathSet List of generated screenshot paths.
     * @param array $WaterMarkDefinition If a screenshot is watermarked, the watermark template ID list.
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

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = new TaskOutputStorage();
            $this->Storage->deserialize($param["Storage"]);
        }

        if (array_key_exists("ImagePathSet",$param) and $param["ImagePathSet"] !== null) {
            $this->ImagePathSet = $param["ImagePathSet"];
        }

        if (array_key_exists("WaterMarkDefinition",$param) and $param["WaterMarkDefinition"] !== null) {
            $this->WaterMarkDefinition = $param["WaterMarkDefinition"];
        }
    }
}
