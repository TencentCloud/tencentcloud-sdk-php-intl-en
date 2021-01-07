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
 * CreateFunction request structure.
 *
 * @method string getFunctionName() Obtain Name of the new function. The name can contain 2 to 60 characters, including English letters, digits, hyphens (-), and underscores (_). The name must start with a letter and cannot end with a hyphen or underscore.
 * @method void setFunctionName(string $FunctionName) Set Name of the new function. The name can contain 2 to 60 characters, including English letters, digits, hyphens (-), and underscores (_). The name must start with a letter and cannot end with a hyphen or underscore.
 * @method Code getCode() Obtain Function code. Note: `COS`, `ZipFile`, and `DemoId` cannot be specified at the same time.
 * @method void setCode(Code $Code) Set Function code. Note: `COS`, `ZipFile`, and `DemoId` cannot be specified at the same time.
 * @method string getHandler() Obtain Function handler name. It supports the format of "file name.handler name" where the file name and handler name are separated with a "." (for Java, it is in the format of "package name.class name::handler name"). File and handler names can contain 2–60 letters, digits, underscores, and dashes and must start and end with letters
 * @method void setHandler(string $Handler) Set Function handler name. It supports the format of "file name.handler name" where the file name and handler name are separated with a "." (for Java, it is in the format of "package name.class name::handler name"). File and handler names can contain 2–60 letters, digits, underscores, and dashes and must start and end with letters
 * @method string getDescription() Obtain Function description. It can contain up to 1,000 characters including letters, digits, spaces, commas (,), periods (.), and Chinese characters.
 * @method void setDescription(string $Description) Set Function description. It can contain up to 1,000 characters including letters, digits, spaces, commas (,), periods (.), and Chinese characters.
 * @method integer getMemorySize() Obtain Memory size available for function during execution. Default value: 128 MB. Value range: 64 or 128-3072 MB in increments of 128 MB
 * @method void setMemorySize(integer $MemorySize) Set Memory size available for function during execution. Default value: 128 MB. Value range: 64 or 128-3072 MB in increments of 128 MB
 * @method integer getTimeout() Obtain Maximum execution duration of function in seconds. Value range: 1-900 seconds. Default value: 3 seconds
 * @method void setTimeout(integer $Timeout) Set Maximum execution duration of function in seconds. Value range: 1-900 seconds. Default value: 3 seconds
 * @method Environment getEnvironment() Obtain Function environment variable
 * @method void setEnvironment(Environment $Environment) Set Function environment variable
 * @method string getRuntime() Obtain Function runtime environment. Valid values: Python2.7, Python3.6, Nodejs6.10, Nodejs8.9, Nodejs10.15, Nodejs12.16, Php5, Php7, Go1, Java8, CustomRuntime. Default value: Python2.7
 * @method void setRuntime(string $Runtime) Set Function runtime environment. Valid values: Python2.7, Python3.6, Nodejs6.10, Nodejs8.9, Nodejs10.15, Nodejs12.16, Php5, Php7, Go1, Java8, CustomRuntime. Default value: Python2.7
 * @method VpcConfig getVpcConfig() Obtain Function VPC configuration
 * @method void setVpcConfig(VpcConfig $VpcConfig) Set Function VPC configuration
 * @method string getNamespace() Obtain Function namespace
 * @method void setNamespace(string $Namespace) Set Function namespace
 * @method string getRole() Obtain Role bound to the function
 * @method void setRole(string $Role) Set Role bound to the function
 * @method string getClsLogsetId() Obtain CLS Logset ID to which the function logs are shipped
 * @method void setClsLogsetId(string $ClsLogsetId) Set CLS Logset ID to which the function logs are shipped
 * @method string getClsTopicId() Obtain CLS Topic ID to which the function logs are shipped
 * @method void setClsTopicId(string $ClsTopicId) Set CLS Topic ID to which the function logs are shipped
 * @method string getType() Obtain Function type. The default value is `Event`. Enter `Event` if you need to create a trigger function. Enter `HTTP` if you need to create an HTTP function service.
 * @method void setType(string $Type) Set Function type. The default value is `Event`. Enter `Event` if you need to create a trigger function. Enter `HTTP` if you need to create an HTTP function service.
 * @method string getCodeSource() Obtain Code source. Valid values: ZipFile, Cos, Demo
 * @method void setCodeSource(string $CodeSource) Set Code source. Valid values: ZipFile, Cos, Demo
 * @method array getLayers() Obtain List of layer versions to be associate with the function. Layers will be overwritten sequentially in the order in the list.
 * @method void setLayers(array $Layers) Set List of layer versions to be associate with the function. Layers will be overwritten sequentially in the order in the list.
 * @method DeadLetterConfig getDeadLetterConfig() Obtain Dead letter queue parameter
 * @method void setDeadLetterConfig(DeadLetterConfig $DeadLetterConfig) Set Dead letter queue parameter
 * @method PublicNetConfigIn getPublicNetConfig() Obtain Public network access configuration
 * @method void setPublicNetConfig(PublicNetConfigIn $PublicNetConfig) Set Public network access configuration
 * @method CfsConfig getCfsConfig() Obtain File system configuration parameter, which is used for the function to mount the file system
 * @method void setCfsConfig(CfsConfig $CfsConfig) Set File system configuration parameter, which is used for the function to mount the file system
 * @method integer getInitTimeout() Obtain Timeout period for function initialization
 * @method void setInitTimeout(integer $InitTimeout) Set Timeout period for function initialization
 * @method array getTags() Obtain Tag parameter of the function. It is an array of key-value pairs.
 * @method void setTags(array $Tags) Set Tag parameter of the function. It is an array of key-value pairs.
 */
class CreateFunctionRequest extends AbstractModel
{
    /**
     * @var string Name of the new function. The name can contain 2 to 60 characters, including English letters, digits, hyphens (-), and underscores (_). The name must start with a letter and cannot end with a hyphen or underscore.
     */
    public $FunctionName;

    /**
     * @var Code Function code. Note: `COS`, `ZipFile`, and `DemoId` cannot be specified at the same time.
     */
    public $Code;

    /**
     * @var string Function handler name. It supports the format of "file name.handler name" where the file name and handler name are separated with a "." (for Java, it is in the format of "package name.class name::handler name"). File and handler names can contain 2–60 letters, digits, underscores, and dashes and must start and end with letters
     */
    public $Handler;

    /**
     * @var string Function description. It can contain up to 1,000 characters including letters, digits, spaces, commas (,), periods (.), and Chinese characters.
     */
    public $Description;

    /**
     * @var integer Memory size available for function during execution. Default value: 128 MB. Value range: 64 or 128-3072 MB in increments of 128 MB
     */
    public $MemorySize;

    /**
     * @var integer Maximum execution duration of function in seconds. Value range: 1-900 seconds. Default value: 3 seconds
     */
    public $Timeout;

    /**
     * @var Environment Function environment variable
     */
    public $Environment;

    /**
     * @var string Function runtime environment. Valid values: Python2.7, Python3.6, Nodejs6.10, Nodejs8.9, Nodejs10.15, Nodejs12.16, Php5, Php7, Go1, Java8, CustomRuntime. Default value: Python2.7
     */
    public $Runtime;

    /**
     * @var VpcConfig Function VPC configuration
     */
    public $VpcConfig;

    /**
     * @var string Function namespace
     */
    public $Namespace;

    /**
     * @var string Role bound to the function
     */
    public $Role;

    /**
     * @var string CLS Logset ID to which the function logs are shipped
     */
    public $ClsLogsetId;

    /**
     * @var string CLS Topic ID to which the function logs are shipped
     */
    public $ClsTopicId;

    /**
     * @var string Function type. The default value is `Event`. Enter `Event` if you need to create a trigger function. Enter `HTTP` if you need to create an HTTP function service.
     */
    public $Type;

    /**
     * @var string Code source. Valid values: ZipFile, Cos, Demo
     */
    public $CodeSource;

    /**
     * @var array List of layer versions to be associate with the function. Layers will be overwritten sequentially in the order in the list.
     */
    public $Layers;

    /**
     * @var DeadLetterConfig Dead letter queue parameter
     */
    public $DeadLetterConfig;

    /**
     * @var PublicNetConfigIn Public network access configuration
     */
    public $PublicNetConfig;

    /**
     * @var CfsConfig File system configuration parameter, which is used for the function to mount the file system
     */
    public $CfsConfig;

    /**
     * @var integer Timeout period for function initialization
     */
    public $InitTimeout;

    /**
     * @var array Tag parameter of the function. It is an array of key-value pairs.
     */
    public $Tags;

    /**
     * @param string $FunctionName Name of the new function. The name can contain 2 to 60 characters, including English letters, digits, hyphens (-), and underscores (_). The name must start with a letter and cannot end with a hyphen or underscore.
     * @param Code $Code Function code. Note: `COS`, `ZipFile`, and `DemoId` cannot be specified at the same time.
     * @param string $Handler Function handler name. It supports the format of "file name.handler name" where the file name and handler name are separated with a "." (for Java, it is in the format of "package name.class name::handler name"). File and handler names can contain 2–60 letters, digits, underscores, and dashes and must start and end with letters
     * @param string $Description Function description. It can contain up to 1,000 characters including letters, digits, spaces, commas (,), periods (.), and Chinese characters.
     * @param integer $MemorySize Memory size available for function during execution. Default value: 128 MB. Value range: 64 or 128-3072 MB in increments of 128 MB
     * @param integer $Timeout Maximum execution duration of function in seconds. Value range: 1-900 seconds. Default value: 3 seconds
     * @param Environment $Environment Function environment variable
     * @param string $Runtime Function runtime environment. Valid values: Python2.7, Python3.6, Nodejs6.10, Nodejs8.9, Nodejs10.15, Nodejs12.16, Php5, Php7, Go1, Java8, CustomRuntime. Default value: Python2.7
     * @param VpcConfig $VpcConfig Function VPC configuration
     * @param string $Namespace Function namespace
     * @param string $Role Role bound to the function
     * @param string $ClsLogsetId CLS Logset ID to which the function logs are shipped
     * @param string $ClsTopicId CLS Topic ID to which the function logs are shipped
     * @param string $Type Function type. The default value is `Event`. Enter `Event` if you need to create a trigger function. Enter `HTTP` if you need to create an HTTP function service.
     * @param string $CodeSource Code source. Valid values: ZipFile, Cos, Demo
     * @param array $Layers List of layer versions to be associate with the function. Layers will be overwritten sequentially in the order in the list.
     * @param DeadLetterConfig $DeadLetterConfig Dead letter queue parameter
     * @param PublicNetConfigIn $PublicNetConfig Public network access configuration
     * @param CfsConfig $CfsConfig File system configuration parameter, which is used for the function to mount the file system
     * @param integer $InitTimeout Timeout period for function initialization
     * @param array $Tags Tag parameter of the function. It is an array of key-value pairs.
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

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = new Code();
            $this->Code->deserialize($param["Code"]);
        }

        if (array_key_exists("Handler",$param) and $param["Handler"] !== null) {
            $this->Handler = $param["Handler"];
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

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = new Environment();
            $this->Environment->deserialize($param["Environment"]);
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("VpcConfig",$param) and $param["VpcConfig"] !== null) {
            $this->VpcConfig = new VpcConfig();
            $this->VpcConfig->deserialize($param["VpcConfig"]);
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("ClsLogsetId",$param) and $param["ClsLogsetId"] !== null) {
            $this->ClsLogsetId = $param["ClsLogsetId"];
        }

        if (array_key_exists("ClsTopicId",$param) and $param["ClsTopicId"] !== null) {
            $this->ClsTopicId = $param["ClsTopicId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CodeSource",$param) and $param["CodeSource"] !== null) {
            $this->CodeSource = $param["CodeSource"];
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
