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
 * CreateSampleSnapshotTemplate request structure.
 *
 * @method integer getWidth() Obtain Image width in px. Value range: [128, 4,096].
 * @method void setWidth(integer $Width) Set Image width in px. Value range: [128, 4,096].
 * @method integer getHeight() Obtain Image height in px. Value range: [128, 4,096].
 * @method void setHeight(integer $Height) Set Image height in px. Value range: [128, 4,096].
 * @method string getSampleType() Obtain Sampled screencapturing type. Valid values:
<li>Percent: By percent.</li>
<li>Time: By time interval.</li>
 * @method void setSampleType(string $SampleType) Set Sampled screencapturing type. Valid values:
<li>Percent: By percent.</li>
<li>Time: By time interval.</li>
 * @method integer getSampleInterval() Obtain Sampling interval.
<li>If `SampleType` is `Percent`, sampling will be performed at an interval of the specified percentage.</li>
<li>If `SampleType` is `Time`, sampling will be performed at the specified time interval in seconds.</li>
 * @method void setSampleInterval(integer $SampleInterval) Set Sampling interval.
<li>If `SampleType` is `Percent`, sampling will be performed at an interval of the specified percentage.</li>
<li>If `SampleType` is `Time`, sampling will be performed at the specified time interval in seconds.</li>
 * @method string getName() Obtain Name of a sampled screencapturing template. Length limit: 64 characters.
 * @method void setName(string $Name) Set Name of a sampled screencapturing template. Length limit: 64 characters.
 * @method string getFormat() Obtain Image format. Valid values: jpg; png. Default value: jpg.
 * @method void setFormat(string $Format) Set Image format. Valid values: jpg; png. Default value: jpg.
 * @method string getComment() Obtain Template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Template description. Length limit: 256 characters.
 */
class CreateSampleSnapshotTemplateRequest extends AbstractModel
{
    /**
     * @var integer Image width in px. Value range: [128, 4,096].
     */
    public $Width;

    /**
     * @var integer Image height in px. Value range: [128, 4,096].
     */
    public $Height;

    /**
     * @var string Sampled screencapturing type. Valid values:
<li>Percent: By percent.</li>
<li>Time: By time interval.</li>
     */
    public $SampleType;

    /**
     * @var integer Sampling interval.
<li>If `SampleType` is `Percent`, sampling will be performed at an interval of the specified percentage.</li>
<li>If `SampleType` is `Time`, sampling will be performed at the specified time interval in seconds.</li>
     */
    public $SampleInterval;

    /**
     * @var string Name of a sampled screencapturing template. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Image format. Valid values: jpg; png. Default value: jpg.
     */
    public $Format;

    /**
     * @var string Template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @param integer $Width Image width in px. Value range: [128, 4,096].
     * @param integer $Height Image height in px. Value range: [128, 4,096].
     * @param string $SampleType Sampled screencapturing type. Valid values:
<li>Percent: By percent.</li>
<li>Time: By time interval.</li>
     * @param integer $SampleInterval Sampling interval.
<li>If `SampleType` is `Percent`, sampling will be performed at an interval of the specified percentage.</li>
<li>If `SampleType` is `Time`, sampling will be performed at the specified time interval in seconds.</li>
     * @param string $Name Name of a sampled screencapturing template. Length limit: 64 characters.
     * @param string $Format Image format. Valid values: jpg; png. Default value: jpg.
     * @param string $Comment Template description. Length limit: 256 characters.
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
        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("SampleType",$param) and $param["SampleType"] !== null) {
            $this->SampleType = $param["SampleType"];
        }

        if (array_key_exists("SampleInterval",$param) and $param["SampleInterval"] !== null) {
            $this->SampleInterval = $param["SampleInterval"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
