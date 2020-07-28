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
 * Input parameter type of a time point screencapturing task
 *
 * @method integer getDefinition() Obtain ID of a time point screencapturing template.
 * @method void setDefinition(integer $Definition) Set ID of a time point screencapturing template.
 * @method array getExtTimeOffsetSet() Obtain 
 * @method void setExtTimeOffsetSet(array $ExtTimeOffsetSet) Set 
 * @method array getTimeOffsetSet() Obtain List of time points of screenshots in <font color=red>seconds</font>.
 * @method void setTimeOffsetSet(array $TimeOffsetSet) Set List of time points of screenshots in <font color=red>seconds</font>.
 * @method array getWatermarkSet() Obtain List of up to 10 image or text watermarks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWatermarkSet(array $WatermarkSet) Set List of up to 10 image or text watermarks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TaskOutputStorage getOutputStorage() Obtain Target bucket of a generated time point screenshot file. If this parameter is left empty, the `OutputStorage` value of the upper folder will be inherited.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Target bucket of a generated time point screenshot file. If this parameter is left empty, the `OutputStorage` value of the upper folder will be inherited.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOutputObjectPath() Obtain Output path to a generated time point screenshot, which can be a relative path or an absolute path. If this parameter is left empty, the following relative path will be used by default: `{inputName}_snapshotByTimeOffset_{definition}_{number}.{format}`.
 * @method void setOutputObjectPath(string $OutputObjectPath) Set Output path to a generated time point screenshot, which can be a relative path or an absolute path. If this parameter is left empty, the following relative path will be used by default: `{inputName}_snapshotByTimeOffset_{definition}_{number}.{format}`.
 * @method NumberFormat getObjectNumberFormat() Obtain Rule of the `{number}` variable in the time point screenshot output path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setObjectNumberFormat(NumberFormat $ObjectNumberFormat) Set Rule of the `{number}` variable in the time point screenshot output path.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SnapshotByTimeOffsetTaskInput extends AbstractModel
{
    /**
     * @var integer ID of a time point screencapturing template.
     */
    public $Definition;

    /**
     * @var array 
     */
    public $ExtTimeOffsetSet;

    /**
     * @var array List of time points of screenshots in <font color=red>seconds</font>.
     */
    public $TimeOffsetSet;

    /**
     * @var array List of up to 10 image or text watermarks.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WatermarkSet;

    /**
     * @var TaskOutputStorage Target bucket of a generated time point screenshot file. If this parameter is left empty, the `OutputStorage` value of the upper folder will be inherited.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutputStorage;

    /**
     * @var string Output path to a generated time point screenshot, which can be a relative path or an absolute path. If this parameter is left empty, the following relative path will be used by default: `{inputName}_snapshotByTimeOffset_{definition}_{number}.{format}`.
     */
    public $OutputObjectPath;

    /**
     * @var NumberFormat Rule of the `{number}` variable in the time point screenshot output path.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ObjectNumberFormat;

    /**
     * @param integer $Definition ID of a time point screencapturing template.
     * @param array $ExtTimeOffsetSet 
     * @param array $TimeOffsetSet List of time points of screenshots in <font color=red>seconds</font>.
     * @param array $WatermarkSet List of up to 10 image or text watermarks.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TaskOutputStorage $OutputStorage Target bucket of a generated time point screenshot file. If this parameter is left empty, the `OutputStorage` value of the upper folder will be inherited.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OutputObjectPath Output path to a generated time point screenshot, which can be a relative path or an absolute path. If this parameter is left empty, the following relative path will be used by default: `{inputName}_snapshotByTimeOffset_{definition}_{number}.{format}`.
     * @param NumberFormat $ObjectNumberFormat Rule of the `{number}` variable in the time point screenshot output path.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("ExtTimeOffsetSet",$param) and $param["ExtTimeOffsetSet"] !== null) {
            $this->ExtTimeOffsetSet = $param["ExtTimeOffsetSet"];
        }

        if (array_key_exists("TimeOffsetSet",$param) and $param["TimeOffsetSet"] !== null) {
            $this->TimeOffsetSet = $param["TimeOffsetSet"];
        }

        if (array_key_exists("WatermarkSet",$param) and $param["WatermarkSet"] !== null) {
            $this->WatermarkSet = [];
            foreach ($param["WatermarkSet"] as $key => $value){
                $obj = new WatermarkInput();
                $obj->deserialize($value);
                array_push($this->WatermarkSet, $obj);
            }
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputObjectPath",$param) and $param["OutputObjectPath"] !== null) {
            $this->OutputObjectPath = $param["OutputObjectPath"];
        }

        if (array_key_exists("ObjectNumberFormat",$param) and $param["ObjectNumberFormat"] !== null) {
            $this->ObjectNumberFormat = new NumberFormat();
            $this->ObjectNumberFormat->deserialize($param["ObjectNumberFormat"]);
        }
    }
}
