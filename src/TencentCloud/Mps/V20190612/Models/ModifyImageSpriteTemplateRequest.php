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
 * ModifyImageSpriteTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique ID of an image sprite generating template.
 * @method void setDefinition(integer $Definition) Set Unique ID of an image sprite generating template.
 * @method string getName() Obtain Name of an image sprite generating template. Length limit: 64 characters.
 * @method void setName(string $Name) Set Name of an image sprite generating template. Length limit: 64 characters.
 * @method integer getWidth() Obtain Subimage width of an image sprite in px. Value range: [128, 4,096].
 * @method void setWidth(integer $Width) Set Subimage width of an image sprite in px. Value range: [128, 4,096].
 * @method integer getHeight() Obtain Subimage height of an image sprite in px. Value range: [128, 4,096].
 * @method void setHeight(integer $Height) Set Subimage height of an image sprite in px. Value range: [128, 4,096].
 * @method string getSampleType() Obtain Sampling type. Valid values:
<li>Percent: By percent.</li>
<li>Time: By time interval.</li>
 * @method void setSampleType(string $SampleType) Set Sampling type. Valid values:
<li>Percent: By percent.</li>
<li>Time: By time interval.</li>
 * @method integer getSampleInterval() Obtain Sampling interval.
<li>If `SampleType` is `Percent`, sampling will be performed at an interval of the specified percentage.</li>
<li>If `SampleType` is `Time`, sampling will be performed at the specified time interval in seconds.</li>
 * @method void setSampleInterval(integer $SampleInterval) Set Sampling interval.
<li>If `SampleType` is `Percent`, sampling will be performed at an interval of the specified percentage.</li>
<li>If `SampleType` is `Time`, sampling will be performed at the specified time interval in seconds.</li>
 * @method integer getRowCount() Obtain Subimage row count of an image sprite.
 * @method void setRowCount(integer $RowCount) Set Subimage row count of an image sprite.
 * @method integer getColumnCount() Obtain Subimage column count of an image sprite.
 * @method void setColumnCount(integer $ColumnCount) Set Subimage column count of an image sprite.
 */
class ModifyImageSpriteTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique ID of an image sprite generating template.
     */
    public $Definition;

    /**
     * @var string Name of an image sprite generating template. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var integer Subimage width of an image sprite in px. Value range: [128, 4,096].
     */
    public $Width;

    /**
     * @var integer Subimage height of an image sprite in px. Value range: [128, 4,096].
     */
    public $Height;

    /**
     * @var string Sampling type. Valid values:
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
     * @var integer Subimage row count of an image sprite.
     */
    public $RowCount;

    /**
     * @var integer Subimage column count of an image sprite.
     */
    public $ColumnCount;

    /**
     * @param integer $Definition Unique ID of an image sprite generating template.
     * @param string $Name Name of an image sprite generating template. Length limit: 64 characters.
     * @param integer $Width Subimage width of an image sprite in px. Value range: [128, 4,096].
     * @param integer $Height Subimage height of an image sprite in px. Value range: [128, 4,096].
     * @param string $SampleType Sampling type. Valid values:
<li>Percent: By percent.</li>
<li>Time: By time interval.</li>
     * @param integer $SampleInterval Sampling interval.
<li>If `SampleType` is `Percent`, sampling will be performed at an interval of the specified percentage.</li>
<li>If `SampleType` is `Time`, sampling will be performed at the specified time interval in seconds.</li>
     * @param integer $RowCount Subimage row count of an image sprite.
     * @param integer $ColumnCount Subimage column count of an image sprite.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("RowCount",$param) and $param["RowCount"] !== null) {
            $this->RowCount = $param["RowCount"];
        }

        if (array_key_exists("ColumnCount",$param) and $param["ColumnCount"] !== null) {
            $this->ColumnCount = $param["ColumnCount"];
        }
    }
}
