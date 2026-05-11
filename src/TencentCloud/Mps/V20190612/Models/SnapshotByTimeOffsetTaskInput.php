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
 * Input parameter type of a time point screenshot task
 *
 * @method integer getDefinition() Obtain <p>Time point screenshot template ID.</p>
 * @method void setDefinition(integer $Definition) Set <p>Time point screenshot template ID.</p>
 * @method array getExtTimeOffsetSet() Obtain <p>List of screenshot time points. Time points support two formats: s and %.</p><li>The unit for a string that ends with s is second. For example, 3.5s means the time point is at 3.5 seconds.</li><li>The unit for a string that ends with % is a percentage of the video duration. For example, 10% means the time point is at 10% of the video's total duration.</li>
 * @method void setExtTimeOffsetSet(array $ExtTimeOffsetSet) Set <p>List of screenshot time points. Time points support two formats: s and %.</p><li>The unit for a string that ends with s is second. For example, 3.5s means the time point is at 3.5 seconds.</li><li>The unit for a string that ends with % is a percentage of the video duration. For example, 10% means the time point is at 10% of the video's total duration.</li>
 * @method array getTimeOffsetSet() Obtain <p>List of screenshot time points, in <font color="red">seconds</font>. This parameter is not recommended. We recommend that you use the ExtTimeOffsetSet parameter.</p>
 * @method void setTimeOffsetSet(array $TimeOffsetSet) Set <p>List of screenshot time points, in <font color="red">seconds</font>. This parameter is not recommended. We recommend that you use the ExtTimeOffsetSet parameter.</p>
 * @method array getWatermarkSet() Obtain <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
 * @method void setWatermarkSet(array $WatermarkSet) Set <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
 * @method TaskOutputStorage getOutputStorage() Obtain <p>Target storage for the file after the time point screenshot is taken. If this is not specified, it inherits the value from the upper-level OutputStorage.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set <p>Target storage for the file after the time point screenshot is taken. If this is not specified, it inherits the value from the upper-level OutputStorage.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOutputObjectPath() Obtain <p>Output path of the image file after the time point screenshot is taken, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">File Name Variable Description</a>.<br>Relative path example:</p><li>File name_{variable name}.{format}</li><li>File name.{format}</li>Absolute path example:<li>/custom path/file name_{variable name}.{format}</li>If this is not specified, the default relative path is <code>{inputName}_snapshotByTimeOffset_{definition}_{number}.{format}</code>.
 * @method void setOutputObjectPath(string $OutputObjectPath) Set <p>Output path of the image file after the time point screenshot is taken, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">File Name Variable Description</a>.<br>Relative path example:</p><li>File name_{variable name}.{format}</li><li>File name.{format}</li>Absolute path example:<li>/custom path/file name_{variable name}.{format}</li>If this is not specified, the default relative path is <code>{inputName}_snapshotByTimeOffset_{definition}_{number}.{format}</code>.
 * @method NumberFormat getObjectNumberFormat() Obtain <p>Rule of the <code>{number}</code> variable in the output path after the time point screenshot is taken.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setObjectNumberFormat(NumberFormat $ObjectNumberFormat) Set <p>Rule of the <code>{number}</code> variable in the output path after the time point screenshot is taken.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExtInfo() Obtain <p>Extended parameter.</p>
 * @method void setExtInfo(string $ExtInfo) Set <p>Extended parameter.</p>
 */
class SnapshotByTimeOffsetTaskInput extends AbstractModel
{
    /**
     * @var integer <p>Time point screenshot template ID.</p>
     */
    public $Definition;

    /**
     * @var array <p>List of screenshot time points. Time points support two formats: s and %.</p><li>The unit for a string that ends with s is second. For example, 3.5s means the time point is at 3.5 seconds.</li><li>The unit for a string that ends with % is a percentage of the video duration. For example, 10% means the time point is at 10% of the video's total duration.</li>
     */
    public $ExtTimeOffsetSet;

    /**
     * @var array <p>List of screenshot time points, in <font color="red">seconds</font>. This parameter is not recommended. We recommend that you use the ExtTimeOffsetSet parameter.</p>
     */
    public $TimeOffsetSet;

    /**
     * @var array <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
     */
    public $WatermarkSet;

    /**
     * @var TaskOutputStorage <p>Target storage for the file after the time point screenshot is taken. If this is not specified, it inherits the value from the upper-level OutputStorage.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutputStorage;

    /**
     * @var string <p>Output path of the image file after the time point screenshot is taken, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">File Name Variable Description</a>.<br>Relative path example:</p><li>File name_{variable name}.{format}</li><li>File name.{format}</li>Absolute path example:<li>/custom path/file name_{variable name}.{format}</li>If this is not specified, the default relative path is <code>{inputName}_snapshotByTimeOffset_{definition}_{number}.{format}</code>.
     */
    public $OutputObjectPath;

    /**
     * @var NumberFormat <p>Rule of the <code>{number}</code> variable in the output path after the time point screenshot is taken.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ObjectNumberFormat;

    /**
     * @var string <p>Extended parameter.</p>
     */
    public $ExtInfo;

    /**
     * @param integer $Definition <p>Time point screenshot template ID.</p>
     * @param array $ExtTimeOffsetSet <p>List of screenshot time points. Time points support two formats: s and %.</p><li>The unit for a string that ends with s is second. For example, 3.5s means the time point is at 3.5 seconds.</li><li>The unit for a string that ends with % is a percentage of the video duration. For example, 10% means the time point is at 10% of the video's total duration.</li>
     * @param array $TimeOffsetSet <p>List of screenshot time points, in <font color="red">seconds</font>. This parameter is not recommended. We recommend that you use the ExtTimeOffsetSet parameter.</p>
     * @param array $WatermarkSet <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
     * @param TaskOutputStorage $OutputStorage <p>Target storage for the file after the time point screenshot is taken. If this is not specified, it inherits the value from the upper-level OutputStorage.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OutputObjectPath <p>Output path of the image file after the time point screenshot is taken, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">File Name Variable Description</a>.<br>Relative path example:</p><li>File name_{variable name}.{format}</li><li>File name.{format}</li>Absolute path example:<li>/custom path/file name_{variable name}.{format}</li>If this is not specified, the default relative path is <code>{inputName}_snapshotByTimeOffset_{definition}_{number}.{format}</code>.
     * @param NumberFormat $ObjectNumberFormat <p>Rule of the <code>{number}</code> variable in the output path after the time point screenshot is taken.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExtInfo <p>Extended parameter.</p>
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

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
