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
 * UpdateFunctionConfiguration request structure.
 *
 * @method string getFunctionName() Obtain Name of the function to be modified
 * @method void setFunctionName(string $FunctionName) Set Name of the function to be modified
 * @method string getDescription() Obtain Function description. It can contain up to 1,000 characters, including letters, digits, spaces, commas (,), periods (.), and Chinese characters.
 * @method void setDescription(string $Description) Set Function description. It can contain up to 1,000 characters, including letters, digits, spaces, commas (,), periods (.), and Chinese characters.
 * @method integer getMemorySize() Obtain Memory size available for function during execution. Default value: 128 MB. Value range: 64 or 128-3,072 MB in increments of 128 MB.
 * @method void setMemorySize(integer $MemorySize) Set Memory size available for function during execution. Default value: 128 MB. Value range: 64 or 128-3,072 MB in increments of 128 MB.
 * @method integer getTimeout() Obtain Maximum execution duration of function in seconds. Value range: 1-900 seconds. Default value: 3 seconds
 * @method void setTimeout(integer $Timeout) Set Maximum execution duration of function in seconds. Value range: 1-900 seconds. Default value: 3 seconds
 * @method string getRuntime() Obtain Function runtime environment. Valid values: Python2.7, Python3.6, Nodejs6.10, Nodejs8.9, Nodejs10.15, Nodejs12.16, PHP5, PHP7, Go1, Java8, CustomRuntime
 * @method void setRuntime(string $Runtime) Set Function runtime environment. Valid values: Python2.7, Python3.6, Nodejs6.10, Nodejs8.9, Nodejs10.15, Nodejs12.16, PHP5, PHP7, Go1, Java8, CustomRuntime
 * @method Environment getEnvironment() Obtain Function environment variable
 * @method void setEnvironment(Environment $Environment) Set Function environment variable
 * @method string getNamespace() Obtain Function namespace
 * @method void setNamespace(string $Namespace) Set Function namespace
 * @method VpcConfig getVpcConfig() Obtain Function VPC configuration
 * @method void setVpcConfig(VpcConfig $VpcConfig) Set Function VPC configuration
 * @method string getRole() Obtain Role bound to the function
 * @method void setRole(string $Role) Set Role bound to the function
 * @method string getInstallDependency() Obtain Specifies whether to [install dependency online](https://intl.cloud.tencent.com/document/product/583/37920?from_cn_redirect=1). `TRUE`: yes. Default to `FALSE`. It is only available for Node.js functions.
 * @method void setInstallDependency(string $InstallDependency) Set Specifies whether to [install dependency online](https://intl.cloud.tencent.com/document/product/583/37920?from_cn_redirect=1). `TRUE`: yes. Default to `FALSE`. It is only available for Node.js functions.
 * @method string getClsLogsetId() Obtain CLS logset ID to which logs are shipped
 * @method void setClsLogsetId(string $ClsLogsetId) Set CLS logset ID to which logs are shipped
 * @method string getClsTopicId() Obtain CLS Topic ID to which logs are shipped
 * @method void setClsTopicId(string $ClsTopicId) Set CLS Topic ID to which logs are shipped
 * @method string getPublish() Obtain It specifies whether to synchronously publish a new version during the update. The default value is `FALSE`, indicating not to publish a new version
 * @method void setPublish(string $Publish) Set It specifies whether to synchronously publish a new version during the update. The default value is `FALSE`, indicating not to publish a new version
 * @method string getL5Enable() Obtain Whether to enable L5 access. TRUE: enable; FALSE: not enable
 * @method void setL5Enable(string $L5Enable) Set Whether to enable L5 access. TRUE: enable; FALSE: not enable
 * @method array getLayers() Obtain List of layer versions that bound with the function. Files with the same name will be overridden by the bound layer versions according to the ascending order in the list. 
 * @method void setLayers(array $Layers) Set List of layer versions that bound with the function. Files with the same name will be overridden by the bound layer versions according to the ascending order in the list. 
 * @method DeadLetterConfig getDeadLetterConfig() Obtain Information of a dead letter queue associated with a function
 * @method void setDeadLetterConfig(DeadLetterConfig $DeadLetterConfig) Set Information of a dead letter queue associated with a function
 * @method PublicNetConfigIn getPublicNetConfig() Obtain Public network access configuration
 * @method void setPublicNetConfig(PublicNetConfigIn $PublicNetConfig) Set Public network access configuration
 * @method CfsConfig getCfsConfig() Obtain File system configuration input parameter, which is used for the function to bind the CFS file system
 * @method void setCfsConfig(CfsConfig $CfsConfig) Set File system configuration input parameter, which is used for the function to bind the CFS file system
 * @method integer getInitTimeout() Obtain The function initialization timeout period
 * @method void setInitTimeout(integer $InitTimeout) Set The function initialization timeout period
 * @method ProtocolParams getProtocolParams() Obtain Parameters of the specified protocol
 * @method void setProtocolParams(ProtocolParams $ProtocolParams) Set Parameters of the specified protocol
 */
class UpdateFunctionConfigurationRequest extends AbstractModel
{
    /**
     * @var string Name of the function to be modified
     */
    public $FunctionName;

    /**
     * @var string Function description. It can contain up to 1,000 characters, including letters, digits, spaces, commas (,), periods (.), and Chinese characters.
     */
    public $Description;

    /**
     * @var integer Memory size available for function during execution. Default value: 128 MB. Value range: 64 or 128-3,072 MB in increments of 128 MB.
     */
    public $MemorySize;

    /**
     * @var integer Maximum execution duration of function in seconds. Value range: 1-900 seconds. Default value: 3 seconds
     */
    public $Timeout;

    /**
     * @var string Function runtime environment. Valid values: Python2.7, Python3.6, Nodejs6.10, Nodejs8.9, Nodejs10.15, Nodejs12.16, PHP5, PHP7, Go1, Java8, CustomRuntime
     */
    public $Runtime;

    /**
     * @var Environment Function environment variable
     */
    public $Environment;

    /**
     * @var string Function namespace
     */
    public $Namespace;

    /**
     * @var VpcConfig Function VPC configuration
     */
    public $VpcConfig;

    /**
     * @var string Role bound to the function
     */
    public $Role;

    /**
     * @var string Specifies whether to [install dependency online](https://intl.cloud.tencent.com/document/product/583/37920?from_cn_redirect=1). `TRUE`: yes. Default to `FALSE`. It is only available for Node.js functions.
     */
    public $InstallDependency;

    /**
     * @var string CLS logset ID to which logs are shipped
     */
    public $ClsLogsetId;

    /**
     * @var string CLS Topic ID to which logs are shipped
     */
    public $ClsTopicId;

    /**
     * @var string It specifies whether to synchronously publish a new version during the update. The default value is `FALSE`, indicating not to publish a new version
     */
    public $Publish;

    /**
     * @var string Whether to enable L5 access. TRUE: enable; FALSE: not enable
     */
    public $L5Enable;

    /**
     * @var array List of layer versions that bound with the function. Files with the same name will be overridden by the bound layer versions according to the ascending order in the list. 
     */
    public $Layers;

    /**
     * @var DeadLetterConfig Information of a dead letter queue associated with a function
     */
    public $DeadLetterConfig;

    /**
     * @var PublicNetConfigIn Public network access configuration
     */
    public $PublicNetConfig;

    /**
     * @var CfsConfig File system configuration input parameter, which is used for the function to bind the CFS file system
     */
    public $CfsConfig;

    /**
     * @var integer The function initialization timeout period
     */
    public $InitTimeout;

    /**
     * @var ProtocolParams Parameters of the specified protocol
     */
    public $ProtocolParams;

    /**
     * @param string $FunctionName Name of the function to be modified
     * @param string $Description Function description. It can contain up to 1,000 characters, including letters, digits, spaces, commas (,), periods (.), and Chinese characters.
     * @param integer $MemorySize Memory size available for function during execution. Default value: 128 MB. Value range: 64 or 128-3,072 MB in increments of 128 MB.
     * @param integer $Timeout Maximum execution duration of function in seconds. Value range: 1-900 seconds. Default value: 3 seconds
     * @param string $Runtime Function runtime environment. Valid values: Python2.7, Python3.6, Nodejs6.10, Nodejs8.9, Nodejs10.15, Nodejs12.16, PHP5, PHP7, Go1, Java8, CustomRuntime
     * @param Environment $Environment Function environment variable
     * @param string $Namespace Function namespace
     * @param VpcConfig $VpcConfig Function VPC configuration
     * @param string $Role Role bound to the function
     * @param string $InstallDependency Specifies whether to [install dependency online](https://intl.cloud.tencent.com/document/product/583/37920?from_cn_redirect=1). `TRUE`: yes. Default to `FALSE`. It is only available for Node.js functions.
     * @param string $ClsLogsetId CLS logset ID to which logs are shipped
     * @param string $ClsTopicId CLS Topic ID to which logs are shipped
     * @param string $Publish It specifies whether to synchronously publish a new version during the update. The default value is `FALSE`, indicating not to publish a new version
     * @param string $L5Enable Whether to enable L5 access. TRUE: enable; FALSE: not enable
     * @param array $Layers List of layer versions that bound with the function. Files with the same name will be overridden by the bound layer versions according to the ascending order in the list. 
     * @param DeadLetterConfig $DeadLetterConfig Information of a dead letter queue associated with a function
     * @param PublicNetConfigIn $PublicNetConfig Public network access configuration
     * @param CfsConfig $CfsConfig File system configuration input parameter, which is used for the function to bind the CFS file system
     * @param integer $InitTimeout The function initialization timeout period
     * @param ProtocolParams $ProtocolParams Parameters of the specified protocol
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MemorySize",$param) and $param["MemorySize"] !== null) {
            $this->MemorySize = $param["MemorySize"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = new Environment();
            $this->Environment->deserialize($param["Environment"]);
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("VpcConfig",$param) and $param["VpcConfig"] !== null) {
            $this->VpcConfig = new VpcConfig();
            $this->VpcConfig->deserialize($param["VpcConfig"]);
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("InstallDependency",$param) and $param["InstallDependency"] !== null) {
            $this->InstallDependency = $param["InstallDependency"];
        }

        if (array_key_exists("ClsLogsetId",$param) and $param["ClsLogsetId"] !== null) {
            $this->ClsLogsetId = $param["ClsLogsetId"];
        }

        if (array_key_exists("ClsTopicId",$param) and $param["ClsTopicId"] !== null) {
            $this->ClsTopicId = $param["ClsTopicId"];
        }

        if (array_key_exists("Publish",$param) and $param["Publish"] !== null) {
            $this->Publish = $param["Publish"];
        }

        if (array_key_exists("L5Enable",$param) and $param["L5Enable"] !== null) {
            $this->L5Enable = $param["L5Enable"];
        }

        if (array_key_exists("Layers",$param) and $param["Layers"] !== null) {
            $this->Layers = [];
            foreach ($param["Layers"] as $key => $value){
                $obj = new LayerVersionSimple();
                $obj->deserialize($value);
                array_push($this->Layers, $obj);
            }
        }

        if (array_key_exists("DeadLetterConfig",$param) and $param["DeadLetterConfig"] !== null) {
            $this->DeadLetterConfig = new DeadLetterConfig();
            $this->DeadLetterConfig->deserialize($param["DeadLetterConfig"]);
        }

        if (array_key_exists("PublicNetConfig",$param) and $param["PublicNetConfig"] !== null) {
            $this->PublicNetConfig = new PublicNetConfigIn();
            $this->PublicNetConfig->deserialize($param["PublicNetConfig"]);
        }

        if (array_key_exists("CfsConfig",$param) and $param["CfsConfig"] !== null) {
            $this->CfsConfig = new CfsConfig();
            $this->CfsConfig->deserialize($param["CfsConfig"]);
        }

        if (array_key_exists("InitTimeout",$param) and $param["InitTimeout"] !== null) {
            $this->InitTimeout = $param["InitTimeout"];
        }

        if (array_key_exists("ProtocolParams",$param) and $param["ProtocolParams"] !== null) {
            $this->ProtocolParams = new ProtocolParams();
            $this->ProtocolParams->deserialize($param["ProtocolParams"]);
        }
    }
}
