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
 * @method integer getDefinition() Obtain <p>Sampled screenshot specification ID. Please refer to <a href="https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.87.87.E6.A0.B7.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF">sampling screenshot parameter template</a>.</p>
 * @method void setDefinition(integer $Definition) Set <p>Sampled screenshot specification ID. Please refer to <a href="https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.87.87.E6.A0.B7.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF">sampling screenshot parameter template</a>.</p>
 * @method string getSampleType() Obtain <p>Sampling method, valid value:</p><li>Percent: Sampling based on percentage interval.</li><li>Time: Sampling based on time interval.</li>
 * @method void setSampleType(string $SampleType) Set <p>Sampling method, valid value:</p><li>Percent: Sampling based on percentage interval.</li><li>Time: Sampling based on time interval.</li>
 * @method integer getInterval() Obtain <p>Sampling interval</p><li>When SampleType is Percent, this value indicates the percentage of images.</li><li>When SampleType is Time, this value indicates the time interval for each image, in seconds. The first image is always the first video frame.</li>
 * @method void setInterval(integer $Interval) Set <p>Sampling interval</p><li>When SampleType is Percent, this value indicates the percentage of images.</li><li>When SampleType is Time, this value indicates the time interval for each image, in seconds. The first image is always the first video frame.</li>
 * @method TaskOutputStorage getStorage() Obtain <p>Storage location of a file after screenshot.</p>
 * @method void setStorage(TaskOutputStorage $Storage) Set <p>Storage location of a file after screenshot.</p>
 * @method array getImagePathSet() Obtain <p>List of generated screenshot paths.</p>
 * @method void setImagePathSet(array $ImagePathSet) Set <p>List of generated screenshot paths.</p>
 * @method array getWaterMarkDefinition() Obtain <p>List of template IDs of watermarked screenshots.</p>
 * @method void setWaterMarkDefinition(array $WaterMarkDefinition) Set <p>List of template IDs of watermarked screenshots.</p>
 */
class MediaSampleSnapshotItem extends AbstractModel
{
    /**
     * @var integer <p>Sampled screenshot specification ID. Please refer to <a href="https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.87.87.E6.A0.B7.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF">sampling screenshot parameter template</a>.</p>
     */
    public $Definition;

    /**
     * @var string <p>Sampling method, valid value:</p><li>Percent: Sampling based on percentage interval.</li><li>Time: Sampling based on time interval.</li>
     */
    public $SampleType;

    /**
     * @var integer <p>Sampling interval</p><li>When SampleType is Percent, this value indicates the percentage of images.</li><li>When SampleType is Time, this value indicates the time interval for each image, in seconds. The first image is always the first video frame.</li>
     */
    public $Interval;

    /**
     * @var TaskOutputStorage <p>Storage location of a file after screenshot.</p>
     */
    public $Storage;

    /**
     * @var array <p>List of generated screenshot paths.</p>
     */
    public $ImagePathSet;

    /**
     * @var array <p>List of template IDs of watermarked screenshots.</p>
     */
    public $WaterMarkDefinition;

    /**
     * @param integer $Definition <p>Sampled screenshot specification ID. Please refer to <a href="https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.87.87.E6.A0.B7.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF">sampling screenshot parameter template</a>.</p>
     * @param string $SampleType <p>Sampling method, valid value:</p><li>Percent: Sampling based on percentage interval.</li><li>Time: Sampling based on time interval.</li>
     * @param integer $Interval <p>Sampling interval</p><li>When SampleType is Percent, this value indicates the percentage of images.</li><li>When SampleType is Time, this value indicates the time interval for each image, in seconds. The first image is always the first video frame.</li>
     * @param TaskOutputStorage $Storage <p>Storage location of a file after screenshot.</p>
     * @param array $ImagePathSet <p>List of generated screenshot paths.</p>
     * @param array $WaterMarkDefinition <p>List of template IDs of watermarked screenshots.</p>
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
