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
 * Smart erasure task.
 *
 * @method integer getDefinition() Obtain Smart erasure template id.
 * @method void setDefinition(integer $Definition) Set Smart erasure template id.
 * @method RawSmartEraseParameter getRawParameter() Obtain Intelligent erasure custom parameter. valid when Definition is 0. this parameter is used for highly custom scenarios. we recommend you prioritize using Definition to specify intelligent erasure parameters.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRawParameter(RawSmartEraseParameter $RawParameter) Set Intelligent erasure custom parameter. valid when Definition is 0. this parameter is used for highly custom scenarios. we recommend you prioritize using Definition to specify intelligent erasure parameters.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method OverrideEraseParameter getOverrideParameter() Obtain Custom parameters for smart erasing. When the value of Definition is not 0, this parameter is valid. When certain erasing parameters in this structure are specified, the specified parameters will be used to overwrite those in the smart erasing template. This parameter is used in highly customized scenarios. It is recommended to use only Definition to specify smart erasing parameters.
 * @method void setOverrideParameter(OverrideEraseParameter $OverrideParameter) Set Custom parameters for smart erasing. When the value of Definition is not 0, this parameter is valid. When certain erasing parameters in this structure are specified, the specified parameters will be used to overwrite those in the smart erasing template. This parameter is used in highly customized scenarios. It is recommended to use only Definition to specify smart erasing parameters.
 * @method TaskOutputStorage getOutputStorage() Obtain Specifies the target storage for files. if left blank, it inherits the upper-level OutputStorage value.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Specifies the target storage for files. if left blank, it inherits the upper-level OutputStorage value.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOutputObjectPath() Obtain Output path of the file, which can be a relative or absolute path.
Specifies the output path must end with `.{format}`. variable names, please refer to [filename variable explanation](https://www.tencentcloud.com/document/product/1041/33495?has_map=1).
**Relative path example**:
<Li>Filename_{Variable name}.{format}</li>
<li>Filename.{format}</li>

**Absolute path example**:
<Li>/Custom path/filename_{variable name}.{format}</li>

**Note**: currently does not support the `BatchProcessMedia` api.
 * @method void setOutputObjectPath(string $OutputObjectPath) Set Output path of the file, which can be a relative or absolute path.
Specifies the output path must end with `.{format}`. variable names, please refer to [filename variable explanation](https://www.tencentcloud.com/document/product/1041/33495?has_map=1).
**Relative path example**:
<Li>Filename_{Variable name}.{format}</li>
<li>Filename.{format}</li>

**Absolute path example**:
<Li>/Custom path/filename_{variable name}.{format}</li>

**Note**: currently does not support the `BatchProcessMedia` api.
 */
class SmartEraseTaskInput extends AbstractModel
{
    /**
     * @var integer Smart erasure template id.
     */
    public $Definition;

    /**
     * @var RawSmartEraseParameter Intelligent erasure custom parameter. valid when Definition is 0. this parameter is used for highly custom scenarios. we recommend you prioritize using Definition to specify intelligent erasure parameters.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RawParameter;

    /**
     * @var OverrideEraseParameter Custom parameters for smart erasing. When the value of Definition is not 0, this parameter is valid. When certain erasing parameters in this structure are specified, the specified parameters will be used to overwrite those in the smart erasing template. This parameter is used in highly customized scenarios. It is recommended to use only Definition to specify smart erasing parameters.
     */
    public $OverrideParameter;

    /**
     * @var TaskOutputStorage Specifies the target storage for files. if left blank, it inherits the upper-level OutputStorage value.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OutputStorage;

    /**
     * @var string Output path of the file, which can be a relative or absolute path.
Specifies the output path must end with `.{format}`. variable names, please refer to [filename variable explanation](https://www.tencentcloud.com/document/product/1041/33495?has_map=1).
**Relative path example**:
<Li>Filename_{Variable name}.{format}</li>
<li>Filename.{format}</li>

**Absolute path example**:
<Li>/Custom path/filename_{variable name}.{format}</li>

**Note**: currently does not support the `BatchProcessMedia` api.
     */
    public $OutputObjectPath;

    /**
     * @param integer $Definition Smart erasure template id.
     * @param RawSmartEraseParameter $RawParameter Intelligent erasure custom parameter. valid when Definition is 0. this parameter is used for highly custom scenarios. we recommend you prioritize using Definition to specify intelligent erasure parameters.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param OverrideEraseParameter $OverrideParameter Custom parameters for smart erasing. When the value of Definition is not 0, this parameter is valid. When certain erasing parameters in this structure are specified, the specified parameters will be used to overwrite those in the smart erasing template. This parameter is used in highly customized scenarios. It is recommended to use only Definition to specify smart erasing parameters.
     * @param TaskOutputStorage $OutputStorage Specifies the target storage for files. if left blank, it inherits the upper-level OutputStorage value.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OutputObjectPath Output path of the file, which can be a relative or absolute path.
Specifies the output path must end with `.{format}`. variable names, please refer to [filename variable explanation](https://www.tencentcloud.com/document/product/1041/33495?has_map=1).
**Relative path example**:
<Li>Filename_{Variable name}.{format}</li>
<li>Filename.{format}</li>

**Absolute path example**:
<Li>/Custom path/filename_{variable name}.{format}</li>

**Note**: currently does not support the `BatchProcessMedia` api.
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
