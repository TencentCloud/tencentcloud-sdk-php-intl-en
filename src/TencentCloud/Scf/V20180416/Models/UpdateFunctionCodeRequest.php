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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateFunctionCode request structure.
 *
 * @method string getFunctionName() Obtain Name of the function to be modified
 * @method void setFunctionName(string $FunctionName) Set Name of the function to be modified
 * @method string getHandler() Obtain Function handler name, which is in the `file name.function name` form. Use a period (.) to separate a file name and function name. The file name and function name must start and end with letters and contain 2-60 characters, including letters, digits, underscores (_), and hyphens (-).
 * @method void setHandler(string $Handler) Set Function handler name, which is in the `file name.function name` form. Use a period (.) to separate a file name and function name. The file name and function name must start and end with letters and contain 2-60 characters, including letters, digits, underscores (_), and hyphens (-).
 * @method string getCosBucketName() Obtain COS bucket name
 * @method void setCosBucketName(string $CosBucketName) Set COS bucket name
 * @method string getCosObjectName() Obtain COS object path
 * @method void setCosObjectName(string $CosObjectName) Set COS object path
 * @method string getZipFile() Obtain It contains a function code file and its dependencies in the ZIP format. When you use this API, the ZIP file needs to be encoded with Base64. Up to 20 MB is supported.
 * @method void setZipFile(string $ZipFile) Set It contains a function code file and its dependencies in the ZIP format. When you use this API, the ZIP file needs to be encoded with Base64. Up to 20 MB is supported.
 * @method string getNamespace() Obtain Function namespace
 * @method void setNamespace(string $Namespace) Set Function namespace
 * @method string getCosBucketRegion() Obtain COS region. Note: Beijing includes ap-beijing and ap-beijing-1.
 * @method void setCosBucketRegion(string $CosBucketRegion) Set COS region. Note: Beijing includes ap-beijing and ap-beijing-1.
 * @method string getInstallDependency() Obtain Whether to install dependencies automatically
 * @method void setInstallDependency(string $InstallDependency) Set Whether to install dependencies automatically
 * @method string getEnvId() Obtain Function environment
 * @method void setEnvId(string $EnvId) Set Function environment
 * @method string getPublish() Obtain It specifies whether to synchronously release a new version during the update. The default value is `FALSE`, indicating not to release a new version.
 * @method void setPublish(string $Publish) Set It specifies whether to synchronously release a new version during the update. The default value is `FALSE`, indicating not to release a new version.
 * @method Code getCode() Obtain Function code
 * @method void setCode(Code $Code) Set Function code
 * @method string getCodeSource() Obtain Code source. Valid values: ZipFile, Cos, Inline
 * @method void setCodeSource(string $CodeSource) Set Code source. Valid values: ZipFile, Cos, Inline
 */
class UpdateFunctionCodeRequest extends AbstractModel
{
    /**
     * @var string Name of the function to be modified
     */
    public $FunctionName;

    /**
     * @var string Function handler name, which is in the `file name.function name` form. Use a period (.) to separate a file name and function name. The file name and function name must start and end with letters and contain 2-60 characters, including letters, digits, underscores (_), and hyphens (-).
     */
    public $Handler;

    /**
     * @var string COS bucket name
     */
    public $CosBucketName;

    /**
     * @var string COS object path
     */
    public $CosObjectName;

    /**
     * @var string It contains a function code file and its dependencies in the ZIP format. When you use this API, the ZIP file needs to be encoded with Base64. Up to 20 MB is supported.
     */
    public $ZipFile;

    /**
     * @var string Function namespace
     */
    public $Namespace;

    /**
     * @var string COS region. Note: Beijing includes ap-beijing and ap-beijing-1.
     */
    public $CosBucketRegion;

    /**
     * @var string Whether to install dependencies automatically
     */
    public $InstallDependency;

    /**
     * @var string Function environment
     */
    public $EnvId;

    /**
     * @var string It specifies whether to synchronously release a new version during the update. The default value is `FALSE`, indicating not to release a new version.
     */
    public $Publish;

    /**
     * @var Code Function code
     */
    public $Code;

    /**
     * @var string Code source. Valid values: ZipFile, Cos, Inline
     */
    public $CodeSource;

    /**
     * @param string $FunctionName Name of the function to be modified
     * @param string $Handler Function handler name, which is in the `file name.function name` form. Use a period (.) to separate a file name and function name. The file name and function name must start and end with letters and contain 2-60 characters, including letters, digits, underscores (_), and hyphens (-).
     * @param string $CosBucketName COS bucket name
     * @param string $CosObjectName COS object path
     * @param string $ZipFile It contains a function code file and its dependencies in the ZIP format. When you use this API, the ZIP file needs to be encoded with Base64. Up to 20 MB is supported.
     * @param string $Namespace Function namespace
     * @param string $CosBucketRegion COS region. Note: Beijing includes ap-beijing and ap-beijing-1.
     * @param string $InstallDependency Whether to install dependencies automatically
     * @param string $EnvId Function environment
     * @param string $Publish It specifies whether to synchronously release a new version during the update. The default value is `FALSE`, indicating not to release a new version.
     * @param Code $Code Function code
     * @param string $CodeSource Code source. Valid values: ZipFile, Cos, Inline
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Handler",$param) and $param["Handler"] !== null) {
            $this->Handler = $param["Handler"];
        }

        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("CosObjectName",$param) and $param["CosObjectName"] !== null) {
            $this->CosObjectName = $param["CosObjectName"];
        }

        if (array_key_exists("ZipFile",$param) and $param["ZipFile"] !== null) {
            $this->ZipFile = $param["ZipFile"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("CosBucketRegion",$param) and $param["CosBucketRegion"] !== null) {
            $this->CosBucketRegion = $param["CosBucketRegion"];
        }

        if (array_key_exists("InstallDependency",$param) and $param["InstallDependency"] !== null) {
            $this->InstallDependency = $param["InstallDependency"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Publish",$param) and $param["Publish"] !== null) {
            $this->Publish = $param["Publish"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = new Code();
            $this->Code->deserialize($param["Code"]);
        }

        if (array_key_exists("CodeSource",$param) and $param["CodeSource"] !== null) {
            $this->CodeSource = $param["CodeSource"];
        }
    }
}
