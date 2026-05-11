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
 * Input parameter type of an image sprite generating task
 *
 * @method integer getDefinition() Obtain <p>Sprite screenshot template ID.</p>
 * @method void setDefinition(integer $Definition) Set <p>Sprite screenshot template ID.</p>
 * @method TaskOutputStorage getOutputStorage() Obtain <p>Target storage for the file after the sprite screenshot is taken. If this is not specified, it inherits the value from the upper-level OutputStorage.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set <p>Target storage for the file after the sprite screenshot is taken. If this is not specified, it inherits the value from the upper-level OutputStorage.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOutputObjectPath() Obtain <p>Output path of the sprite screenshot image file after the sprite screenshot is taken, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">File Name Variable Description</a>.<br>Relative path example:</p><li>File name_{variable name}.{format}</li><li>File name.{format}</li>Absolute path example:<li>/custom path/file name_{variable name}.{format}</li>If this is not specified, the default relative path is <code>{inputName}_imageSprite_{definition}_{number}.{format}</code>.
 * @method void setOutputObjectPath(string $OutputObjectPath) Set <p>Output path of the sprite screenshot image file after the sprite screenshot is taken, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">File Name Variable Description</a>.<br>Relative path example:</p><li>File name_{variable name}.{format}</li><li>File name.{format}</li>Absolute path example:<li>/custom path/file name_{variable name}.{format}</li>If this is not specified, the default relative path is <code>{inputName}_imageSprite_{definition}_{number}.{format}</code>.
 * @method string getWebVttObjectName() Obtain <p>Output path of the Web VTT file after the sprite screenshot is taken, which can only be a relative path. If this is not specified, the default relative path is <code>{inputName}_imageSprite_{definition}.{format}</code>.</p>
 * @method void setWebVttObjectName(string $WebVttObjectName) Set <p>Output path of the Web VTT file after the sprite screenshot is taken, which can only be a relative path. If this is not specified, the default relative path is <code>{inputName}_imageSprite_{definition}.{format}</code>.</p>
 * @method NumberFormat getObjectNumberFormat() Obtain <p>Rule of the <code>{number}</code> variable in the output path after the sprite screenshot is taken.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setObjectNumberFormat(NumberFormat $ObjectNumberFormat) Set <p>Rule of the <code>{number}</code> variable in the output path after the sprite screenshot is taken.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExtInfo() Obtain <p>Extended parameter.</p>
 * @method void setExtInfo(string $ExtInfo) Set <p>Extended parameter.</p>
 */
class ImageSpriteTaskInput extends AbstractModel
{
    /**
     * @var integer <p>Sprite screenshot template ID.</p>
     */
    public $Definition;

    /**
     * @var TaskOutputStorage <p>Target storage for the file after the sprite screenshot is taken. If this is not specified, it inherits the value from the upper-level OutputStorage.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutputStorage;

    /**
     * @var string <p>Output path of the sprite screenshot image file after the sprite screenshot is taken, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">File Name Variable Description</a>.<br>Relative path example:</p><li>File name_{variable name}.{format}</li><li>File name.{format}</li>Absolute path example:<li>/custom path/file name_{variable name}.{format}</li>If this is not specified, the default relative path is <code>{inputName}_imageSprite_{definition}_{number}.{format}</code>.
     */
    public $OutputObjectPath;

    /**
     * @var string <p>Output path of the Web VTT file after the sprite screenshot is taken, which can only be a relative path. If this is not specified, the default relative path is <code>{inputName}_imageSprite_{definition}.{format}</code>.</p>
     */
    public $WebVttObjectName;

    /**
     * @var NumberFormat <p>Rule of the <code>{number}</code> variable in the output path after the sprite screenshot is taken.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ObjectNumberFormat;

    /**
     * @var string <p>Extended parameter.</p>
     */
    public $ExtInfo;

    /**
     * @param integer $Definition <p>Sprite screenshot template ID.</p>
     * @param TaskOutputStorage $OutputStorage <p>Target storage for the file after the sprite screenshot is taken. If this is not specified, it inherits the value from the upper-level OutputStorage.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OutputObjectPath <p>Output path of the sprite screenshot image file after the sprite screenshot is taken, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">File Name Variable Description</a>.<br>Relative path example:</p><li>File name_{variable name}.{format}</li><li>File name.{format}</li>Absolute path example:<li>/custom path/file name_{variable name}.{format}</li>If this is not specified, the default relative path is <code>{inputName}_imageSprite_{definition}_{number}.{format}</code>.
     * @param string $WebVttObjectName <p>Output path of the Web VTT file after the sprite screenshot is taken, which can only be a relative path. If this is not specified, the default relative path is <code>{inputName}_imageSprite_{definition}.{format}</code>.</p>
     * @param NumberFormat $ObjectNumberFormat <p>Rule of the <code>{number}</code> variable in the output path after the sprite screenshot is taken.</p>
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

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputObjectPath",$param) and $param["OutputObjectPath"] !== null) {
            $this->OutputObjectPath = $param["OutputObjectPath"];
        }

        if (array_key_exists("WebVttObjectName",$param) and $param["WebVttObjectName"] !== null) {
            $this->WebVttObjectName = $param["WebVttObjectName"];
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
