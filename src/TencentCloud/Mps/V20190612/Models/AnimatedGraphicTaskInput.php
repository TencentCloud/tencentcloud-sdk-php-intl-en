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
 * Type of an animated image generating task.
 *
 * @method integer getDefinition() Obtain <p>Video-to-GIF conversion template ID.</p>
 * @method void setDefinition(integer $Definition) Set <p>Video-to-GIF conversion template ID.</p>
 * @method float getStartTimeOffset() Obtain <p>Start time of the GIF in the video, in seconds.</p>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set <p>Start time of the GIF in the video, in seconds.</p>
 * @method float getEndTimeOffset() Obtain <p>End time of the GIF in the video, in seconds.</p>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set <p>End time of the GIF in the video, in seconds.</p>
 * @method TaskOutputStorage getOutputStorage() Obtain <p>Target storage for the file after GIF conversion. If this is not specified, it inherits the value from the upper-level OutputStorage.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set <p>Target storage for the file after GIF conversion. If this is not specified, it inherits the value from the upper-level OutputStorage.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOutputObjectPath() Obtain <p>Output path of the file after GIF conversion, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">File Name Variable Description</a>.<br>Relative path example:</p><li>File name_{variable name}.{format}</li><li>File name.{format}</li>Absolute path example:<li>/custom path/file name_{variable name}.{format}</li>If this is not specified, the default relative path is <code>{inputName}_animatedGraphic_{definition}.{format}</code>.
 * @method void setOutputObjectPath(string $OutputObjectPath) Set <p>Output path of the file after GIF conversion, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">File Name Variable Description</a>.<br>Relative path example:</p><li>File name_{variable name}.{format}</li><li>File name.{format}</li>Absolute path example:<li>/custom path/file name_{variable name}.{format}</li>If this is not specified, the default relative path is <code>{inputName}_animatedGraphic_{definition}.{format}</code>.
 * @method string getExtInfo() Obtain <p>Extended parameter.</p>
 * @method void setExtInfo(string $ExtInfo) Set <p>Extended parameter.</p>
 */
class AnimatedGraphicTaskInput extends AbstractModel
{
    /**
     * @var integer <p>Video-to-GIF conversion template ID.</p>
     */
    public $Definition;

    /**
     * @var float <p>Start time of the GIF in the video, in seconds.</p>
     */
    public $StartTimeOffset;

    /**
     * @var float <p>End time of the GIF in the video, in seconds.</p>
     */
    public $EndTimeOffset;

    /**
     * @var TaskOutputStorage <p>Target storage for the file after GIF conversion. If this is not specified, it inherits the value from the upper-level OutputStorage.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutputStorage;

    /**
     * @var string <p>Output path of the file after GIF conversion, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">File Name Variable Description</a>.<br>Relative path example:</p><li>File name_{variable name}.{format}</li><li>File name.{format}</li>Absolute path example:<li>/custom path/file name_{variable name}.{format}</li>If this is not specified, the default relative path is <code>{inputName}_animatedGraphic_{definition}.{format}</code>.
     */
    public $OutputObjectPath;

    /**
     * @var string <p>Extended parameter.</p>
     */
    public $ExtInfo;

    /**
     * @param integer $Definition <p>Video-to-GIF conversion template ID.</p>
     * @param float $StartTimeOffset <p>Start time of the GIF in the video, in seconds.</p>
     * @param float $EndTimeOffset <p>End time of the GIF in the video, in seconds.</p>
     * @param TaskOutputStorage $OutputStorage <p>Target storage for the file after GIF conversion. If this is not specified, it inherits the value from the upper-level OutputStorage.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OutputObjectPath <p>Output path of the file after GIF conversion, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">File Name Variable Description</a>.<br>Relative path example:</p><li>File name_{variable name}.{format}</li><li>File name.{format}</li>Absolute path example:<li>/custom path/file name_{variable name}.{format}</li>If this is not specified, the default relative path is <code>{inputName}_animatedGraphic_{definition}.{format}</code>.
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

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputObjectPath",$param) and $param["OutputObjectPath"] !== null) {
            $this->OutputObjectPath = $param["OutputObjectPath"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
