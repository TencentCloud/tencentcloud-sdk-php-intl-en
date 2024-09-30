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
 * Type of an animated image generating task.
 *
 * @method integer getDefinition() Obtain Animated image generating template ID.
 * @method void setDefinition(integer $Definition) Set Animated image generating template ID.
 * @method float getStartTimeOffset() Obtain Start time of an animated image in a video in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time of an animated image in a video in seconds.
 * @method float getEndTimeOffset() Obtain End time of an animated image in a video in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time of an animated image in a video in seconds.
 * @method TaskOutputStorage getOutputStorage() Obtain Target bucket of a generated animated image file. If this parameter is left empty, the `OutputStorage` value of the upper folder will be inherited.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Target bucket of a generated animated image file. If this parameter is left empty, the `OutputStorage` value of the upper folder will be inherited.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOutputObjectPath() Obtain Output path of a file after animated image generating, which can be a relative or absolute path.
If you need to define an output path, the path must end with `.{format}`. For variable names, refer to [Filename Variable](https://intl.cloud.tencent.com/document/product/862/37039?from_cn_redirect=1).
Relative path example:
<li>Filename_{Variable name}.{format}.</li>
<li>Filename.{format}.</li>
Absolute path example:
<li>/Custom path/Filename_{Variable name}.{format}.</li>
If left empty, a relative path is used by default: `{inputName}_animatedGraphic_{definition}.{format}`.
 * @method void setOutputObjectPath(string $OutputObjectPath) Set Output path of a file after animated image generating, which can be a relative or absolute path.
If you need to define an output path, the path must end with `.{format}`. For variable names, refer to [Filename Variable](https://intl.cloud.tencent.com/document/product/862/37039?from_cn_redirect=1).
Relative path example:
<li>Filename_{Variable name}.{format}.</li>
<li>Filename.{format}.</li>
Absolute path example:
<li>/Custom path/Filename_{Variable name}.{format}.</li>
If left empty, a relative path is used by default: `{inputName}_animatedGraphic_{definition}.{format}`.
 */
class AnimatedGraphicTaskInput extends AbstractModel
{
    /**
     * @var integer Animated image generating template ID.
     */
    public $Definition;

    /**
     * @var float Start time of an animated image in a video in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float End time of an animated image in a video in seconds.
     */
    public $EndTimeOffset;

    /**
     * @var TaskOutputStorage Target bucket of a generated animated image file. If this parameter is left empty, the `OutputStorage` value of the upper folder will be inherited.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutputStorage;

    /**
     * @var string Output path of a file after animated image generating, which can be a relative or absolute path.
If you need to define an output path, the path must end with `.{format}`. For variable names, refer to [Filename Variable](https://intl.cloud.tencent.com/document/product/862/37039?from_cn_redirect=1).
Relative path example:
<li>Filename_{Variable name}.{format}.</li>
<li>Filename.{format}.</li>
Absolute path example:
<li>/Custom path/Filename_{Variable name}.{format}.</li>
If left empty, a relative path is used by default: `{inputName}_animatedGraphic_{definition}.{format}`.
     */
    public $OutputObjectPath;

    /**
     * @param integer $Definition Animated image generating template ID.
     * @param float $StartTimeOffset Start time of an animated image in a video in seconds.
     * @param float $EndTimeOffset End time of an animated image in a video in seconds.
     * @param TaskOutputStorage $OutputStorage Target bucket of a generated animated image file. If this parameter is left empty, the `OutputStorage` value of the upper folder will be inherited.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OutputObjectPath Output path of a file after animated image generating, which can be a relative or absolute path.
If you need to define an output path, the path must end with `.{format}`. For variable names, refer to [Filename Variable](https://intl.cloud.tencent.com/document/product/862/37039?from_cn_redirect=1).
Relative path example:
<li>Filename_{Variable name}.{format}.</li>
<li>Filename.{format}.</li>
Absolute path example:
<li>/Custom path/Filename_{Variable name}.{format}.</li>
If left empty, a relative path is used by default: `{inputName}_animatedGraphic_{definition}.{format}`.
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
    }
}
