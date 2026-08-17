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
 * Intelligent erasure task
 *
 * @method integer getDefinition() Obtain Smart erasing template id.
 * @method void setDefinition(integer $Definition) Set Smart erasing template id.
 * @method RawSmartEraseParameter getRawParameter() Obtain 
 * @method void setRawParameter(RawSmartEraseParameter $RawParameter) Set 
 * @method OverrideEraseParameter getOverrideParameter() Obtain Custom parameters for smart erasing. When the value of Definition is not 0, this parameter is valid. When certain erasing parameters in this structure are specified, the specified parameters will be used to overwrite those in the smart erasing template. This parameter is used in highly customized scenarios. It is recommended to use only Definition to specify smart erasing parameters.
 * @method void setOverrideParameter(OverrideEraseParameter $OverrideParameter) Set Custom parameters for smart erasing. When the value of Definition is not 0, this parameter is valid. When certain erasing parameters in this structure are specified, the specified parameters will be used to overwrite those in the smart erasing template. This parameter is used in highly customized scenarios. It is recommended to use only Definition to specify smart erasing parameters.
 * @method TaskOutputStorage getOutputStorage() Obtain 
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set 
 * @method string getOutputObjectPath() Obtain Output path of the file, which can be a relative or absolute path.
To define the output path, the path must end with `.{format}`. For variable names, please refer to the Filename Variable Explanation (https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1).
Relative path example:
<li>Filename_{Variable name}.{format}</li>
<li>Filename.{format}</li>
Absolute path example:
<li>/Custom path/Filename_{Variable name}.{format}</li>

**Note**: Currently does not support the `BatchProcessMedia` API.
 * @method void setOutputObjectPath(string $OutputObjectPath) Set Output path of the file, which can be a relative or absolute path.
To define the output path, the path must end with `.{format}`. For variable names, please refer to the Filename Variable Explanation (https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1).
Relative path example:
<li>Filename_{Variable name}.{format}</li>
<li>Filename.{format}</li>
Absolute path example:
<li>/Custom path/Filename_{Variable name}.{format}</li>

**Note**: Currently does not support the `BatchProcessMedia` API.
 */
class SmartEraseTaskInput extends AbstractModel
{
    /**
     * @var integer Smart erasing template id.
     */
    public $Definition;

    /**
     * @var RawSmartEraseParameter 
     */
    public $RawParameter;

    /**
     * @var OverrideEraseParameter Custom parameters for smart erasing. When the value of Definition is not 0, this parameter is valid. When certain erasing parameters in this structure are specified, the specified parameters will be used to overwrite those in the smart erasing template. This parameter is used in highly customized scenarios. It is recommended to use only Definition to specify smart erasing parameters.
     */
    public $OverrideParameter;

    /**
     * @var TaskOutputStorage 
     */
    public $OutputStorage;

    /**
     * @var string Output path of the file, which can be a relative or absolute path.
To define the output path, the path must end with `.{format}`. For variable names, please refer to the Filename Variable Explanation (https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1).
Relative path example:
<li>Filename_{Variable name}.{format}</li>
<li>Filename.{format}</li>
Absolute path example:
<li>/Custom path/Filename_{Variable name}.{format}</li>

**Note**: Currently does not support the `BatchProcessMedia` API.
     */
    public $OutputObjectPath;

    /**
     * @param integer $Definition Smart erasing template id.
     * @param RawSmartEraseParameter $RawParameter 
     * @param OverrideEraseParameter $OverrideParameter Custom parameters for smart erasing. When the value of Definition is not 0, this parameter is valid. When certain erasing parameters in this structure are specified, the specified parameters will be used to overwrite those in the smart erasing template. This parameter is used in highly customized scenarios. It is recommended to use only Definition to specify smart erasing parameters.
     * @param TaskOutputStorage $OutputStorage 
     * @param string $OutputObjectPath Output path of the file, which can be a relative or absolute path.
To define the output path, the path must end with `.{format}`. For variable names, please refer to the Filename Variable Explanation (https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1).
Relative path example:
<li>Filename_{Variable name}.{format}</li>
<li>Filename.{format}</li>
Absolute path example:
<li>/Custom path/Filename_{Variable name}.{format}</li>

**Note**: Currently does not support the `BatchProcessMedia` API.
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

        if (array_key_exists("RawParameter",$param) and $param["RawParameter"] !== null) {
            $this->RawParameter = new RawSmartEraseParameter();
            $this->RawParameter->deserialize($param["RawParameter"]);
        }

        if (array_key_exists("OverrideParameter",$param) and $param["OverrideParameter"] !== null) {
            $this->OverrideParameter = new OverrideEraseParameter();
            $this->OverrideParameter->deserialize($param["OverrideParameter"]);
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
