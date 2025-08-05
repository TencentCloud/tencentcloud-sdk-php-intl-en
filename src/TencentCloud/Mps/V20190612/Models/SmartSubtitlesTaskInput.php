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
 * Smart subtitle input struct.
 *
 * @method integer getDefinition() Obtain Smart subtitle template ID.	
 * @method void setDefinition(integer $Definition) Set Smart subtitle template ID.	
 * @method string getUserExtPara() Obtain User extension field, which does not need to be filled in for general scenarios.
 * @method void setUserExtPara(string $UserExtPara) Set User extension field, which does not need to be filled in for general scenarios.
 * @method RawSmartSubtitleParameter getRawParameter() Obtain Custom smart subtitle parameter. It takes effect when Definition is set to 0. This parameter is used in high customization scenarios. It is recommended that you preferentially use Definition to specify smart subtitle parameters.	
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRawParameter(RawSmartSubtitleParameter $RawParameter) Set Custom smart subtitle parameter. It takes effect when Definition is set to 0. This parameter is used in high customization scenarios. It is recommended that you preferentially use Definition to specify smart subtitle parameters.	
Note: This field may return null, indicating that no valid value can be obtained.
 * @method TaskOutputStorage getOutputStorage() Obtain Bucket that stores the output file. If it is left unspecified, the storage location in InputInfo will be inherited.
**Note**: This parameter is required when InputInfo.Type is set to URL.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Bucket that stores the output file. If it is left unspecified, the storage location in InputInfo will be inherited.
**Note**: This parameter is required when InputInfo.Type is set to URL.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOutputObjectPath() Obtain Output path of the generated subtitle file, which can be a relative or absolute path.
To define the output path, end the path with .{format}. For variable names, see the description of file name variables at https://www.tencentcloud.comom/document/product/862/37039.?from_cn_redirect=1

Relative path example:
 - File name_{variable name}.{format}.
 - File name.{format}.

Absolute path example:
 -/Custom path/File name_{variable name}.{format}.

If this field is left unspecified, the default value is the relative path in the following format: {inputName}_smartsubtitle_{definition}.{format}.
 * @method void setOutputObjectPath(string $OutputObjectPath) Set Output path of the generated subtitle file, which can be a relative or absolute path.
To define the output path, end the path with .{format}. For variable names, see the description of file name variables at https://www.tencentcloud.comom/document/product/862/37039.?from_cn_redirect=1

Relative path example:
 - File name_{variable name}.{format}.
 - File name.{format}.

Absolute path example:
 -/Custom path/File name_{variable name}.{format}.

If this field is left unspecified, the default value is the relative path in the following format: {inputName}_smartsubtitle_{definition}.{format}.
 */
class SmartSubtitlesTaskInput extends AbstractModel
{
    /**
     * @var integer Smart subtitle template ID.	
     */
    public $Definition;

    /**
     * @var string User extension field, which does not need to be filled in for general scenarios.
     */
    public $UserExtPara;

    /**
     * @var RawSmartSubtitleParameter Custom smart subtitle parameter. It takes effect when Definition is set to 0. This parameter is used in high customization scenarios. It is recommended that you preferentially use Definition to specify smart subtitle parameters.	
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RawParameter;

    /**
     * @var TaskOutputStorage Bucket that stores the output file. If it is left unspecified, the storage location in InputInfo will be inherited.
**Note**: This parameter is required when InputInfo.Type is set to URL.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OutputStorage;

    /**
     * @var string Output path of the generated subtitle file, which can be a relative or absolute path.
To define the output path, end the path with .{format}. For variable names, see the description of file name variables at https://www.tencentcloud.comom/document/product/862/37039.?from_cn_redirect=1

Relative path example:
 - File name_{variable name}.{format}.
 - File name.{format}.

Absolute path example:
 -/Custom path/File name_{variable name}.{format}.

If this field is left unspecified, the default value is the relative path in the following format: {inputName}_smartsubtitle_{definition}.{format}.
     */
    public $OutputObjectPath;

    /**
     * @param integer $Definition Smart subtitle template ID.	
     * @param string $UserExtPara User extension field, which does not need to be filled in for general scenarios.
     * @param RawSmartSubtitleParameter $RawParameter Custom smart subtitle parameter. It takes effect when Definition is set to 0. This parameter is used in high customization scenarios. It is recommended that you preferentially use Definition to specify smart subtitle parameters.	
Note: This field may return null, indicating that no valid value can be obtained.
     * @param TaskOutputStorage $OutputStorage Bucket that stores the output file. If it is left unspecified, the storage location in InputInfo will be inherited.
**Note**: This parameter is required when InputInfo.Type is set to URL.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OutputObjectPath Output path of the generated subtitle file, which can be a relative or absolute path.
To define the output path, end the path with .{format}. For variable names, see the description of file name variables at https://www.tencentcloud.comom/document/product/862/37039.?from_cn_redirect=1

Relative path example:
 - File name_{variable name}.{format}.
 - File name.{format}.

Absolute path example:
 -/Custom path/File name_{variable name}.{format}.

If this field is left unspecified, the default value is the relative path in the following format: {inputName}_smartsubtitle_{definition}.{format}.
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

        if (array_key_exists("UserExtPara",$param) and $param["UserExtPara"] !== null) {
            $this->UserExtPara = $param["UserExtPara"];
        }

        if (array_key_exists("RawParameter",$param) and $param["RawParameter"] !== null) {
            $this->RawParameter = new RawSmartSubtitleParameter();
            $this->RawParameter->deserialize($param["RawParameter"]);
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
