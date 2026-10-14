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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateFunctionConfiguration request structure.
 *
 * @method string getFunctionName() Obtain The function name to be modified
 * @method void setFunctionName(string $FunctionName) Set The function name to be modified
 * @method string getDescription() Obtain Function description. Supports up to 1,000 English letters, digits, spaces, commas, and periods. Chinese is supported.
 * @method void setDescription(string $Description) Set Function description. Supports up to 1,000 English letters, digits, spaces, commas, and periods. Chinese is supported.
 * @method integer getMemorySize() Obtain Memory size of the function runtime. Default value: 128 MB. Selectable range: 64 MB, or 128 MB to 3072 MB in 128 MB increments.
 * @method void setMemorySize(integer $MemorySize) Set Memory size of the function runtime. Default value: 128 MB. Selectable range: 64 MB, or 128 MB to 3072 MB in 128 MB increments.
 * @method integer getTimeout() Obtain Maximum execution time of the function, in seconds. Value range: 1-900 seconds. Default value: 3 seconds.
 * @method void setTimeout(integer $Timeout) Set Maximum execution time of the function, in seconds. Value range: 1-900 seconds. Default value: 3 seconds.
 * @method string getRuntime() Obtain Runtime environment. It is specified upon creation and currently does not support modification.
 * @method void setRuntime(string $Runtime) Set Runtime environment. It is specified upon creation and currently does not support modification.
 * @method Environment getEnvironment() Obtain Environment variable of the function
 * @method void setEnvironment(Environment $Environment) Set Environment variable of the function
 * @method string getNamespace() Obtain Namespace of the function
Default value: default
 * @method void setNamespace(string $Namespace) Set Namespace of the function
Default value: default
 * @method VpcConfig getVpcConfig() Obtain VPC configuration of the function
 * @method void setVpcConfig(VpcConfig $VpcConfig) Set VPC configuration of the function
 * @method string getRole() Obtain Role bound to a function
 * @method void setRole(string $Role) Set Role bound to a function
 * @method string getInstallDependency() Obtain [Install dependency online](https://www.tencentcloud.com/document/product/583/37920?from_cn_redirect=1). TRUE indicates installation. Default value: FALSE. Only supported for Node.js functions.
 * @method void setInstallDependency(string $InstallDependency) Set [Install dependency online](https://www.tencentcloud.com/document/product/583/37920?from_cn_redirect=1). TRUE indicates installation. Default value: FALSE. Only supported for Node.js functions.
 * @method string getClsLogsetId() Obtain ID of the cls Log Set for log delivery
 * @method void setClsLogsetId(string $ClsLogsetId) Set ID of the cls Log Set for log delivery
 * @method string getClsTopicId() Obtain cls Topic ID for log delivery
 * @method void setClsTopicId(string $ClsTopicId) Set cls Topic ID for log delivery
 * @method string getPublish() Obtain Whether to release a new version synchronously when updating. Default value: FALSE, which means no new version is released.
 * @method void setPublish(string $Publish) Set Whether to release a new version synchronously when updating. Default value: FALSE, which means no new version is released.
 * @method string getL5Enable() Obtain Whether L5 access capability is enabled. TRUE to enable, FALSE to shutdown.
 * @method void setL5Enable(string $L5Enable) Set Whether L5 access capability is enabled. TRUE to enable, FALSE to shutdown.
 * @method array getLayers() Obtain List of layer versions to associate with the function. The layer versions overwrite each other sequentially in the order in the list.
 * @method void setLayers(array $Layers) Set List of layer versions to associate with the function. The layer versions overwrite each other sequentially in the order in the list.
 * @method DeadLetterConfig getDeadLetterConfig() Obtain Dead letter queue information associated with the function
 * @method void setDeadLetterConfig(DeadLetterConfig $DeadLetterConfig) Set Dead letter queue information associated with the function
 * @method PublicNetConfigIn getPublicNetConfig() Obtain Public network access configuration
 * @method void setPublicNetConfig(PublicNetConfigIn $PublicNetConfig) Set Public network access configuration
 * @method CfsConfig getCfsConfig() Obtain File system configuration parameters for binding a CFS file system in SCF
 * @method void setCfsConfig(CfsConfig $CfsConfig) Set File system configuration parameters for binding a CFS file system in SCF
 * @method integer getInitTimeout() Obtain Function initialization timeout period
 * @method void setInitTimeout(integer $InitTimeout) Set Function initialization timeout period
 * @method ProtocolParams getProtocolParams() Obtain Configure ProtocolType access protocol for an HTTP function. Parameters configurable for the current protocol.
 * @method void setProtocolParams(ProtocolParams $ProtocolParams) Set Configure ProtocolType access protocol for an HTTP function. Parameters configurable for the current protocol.
 * @method InstanceConcurrencyConfig getInstanceConcurrencyConfig() Obtain Single-instance multi-concurrency configuration. Supports only Web functions.
 * @method void setInstanceConcurrencyConfig(InstanceConcurrencyConfig $InstanceConcurrencyConfig) Set Single-instance multi-concurrency configuration. Supports only Web functions.
 * @method string getDnsCache() Obtain Whether the Dns caching capability is enabled. Supports only the EVENT function. Defaults to FALSE. TRUE to enable, FALSE to shutdown.
 * @method void setDnsCache(string $DnsCache) Set Whether the Dns caching capability is enabled. Supports only the EVENT function. Defaults to FALSE. TRUE to enable, FALSE to shutdown.
 * @method IntranetConfigIn getIntranetConfig() Obtain Private network access configuration
 * @method void setIntranetConfig(IntranetConfigIn $IntranetConfig) Set Private network access configuration
 * @method boolean getIgnoreSysLog() Obtain Ignorable system log reporting
 * @method void setIgnoreSysLog(boolean $IgnoreSysLog) Set Ignorable system log reporting
 */
class UpdateFunctionConfigurationRequest extends AbstractModel
{
    /**
     * @var string The function name to be modified
     */
    public $FunctionName;

    /**
     * @var string Function description. Supports up to 1,000 English letters, digits, spaces, commas, and periods. Chinese is supported.
     */
    public $Description;

    /**
     * @var integer Memory size of the function runtime. Default value: 128 MB. Selectable range: 64 MB, or 128 MB to 3072 MB in 128 MB increments.
     */
    public $MemorySize;

    /**
     * @var integer Maximum execution time of the function, in seconds. Value range: 1-900 seconds. Default value: 3 seconds.
     */
    public $Timeout;

    /**
     * @var string Runtime environment. It is specified upon creation and currently does not support modification.
     */
    public $Runtime;

    /**
     * @var Environment Environment variable of the function
     */
    public $Environment;

    /**
     * @var string Namespace of the function
Default value: default
     */
    public $Namespace;

    /**
     * @var VpcConfig VPC configuration of the function
     */
    public $VpcConfig;

    /**
     * @var string Role bound to a function
     */
    public $Role;

    /**
     * @var string [Install dependency online](https://www.tencentcloud.com/document/product/583/37920?from_cn_redirect=1). TRUE indicates installation. Default value: FALSE. Only supported for Node.js functions.
     */
    public $InstallDependency;

    /**
     * @var string ID of the cls Log Set for log delivery
     */
    public $ClsLogsetId;

    /**
     * @var string cls Topic ID for log delivery
     */
    public $ClsTopicId;

    /**
     * @var string Whether to release a new version synchronously when updating. Default value: FALSE, which means no new version is released.
     */
    public $Publish;

    /**
     * @var string Whether L5 access capability is enabled. TRUE to enable, FALSE to shutdown.
     */
    public $L5Enable;

    /**
     * @var array List of layer versions to associate with the function. The layer versions overwrite each other sequentially in the order in the list.
     */
    public $Layers;

    /**
     * @var DeadLetterConfig Dead letter queue information associated with the function
     */
    public $DeadLetterConfig;

    /**
     * @var PublicNetConfigIn Public network access configuration
     */
    public $PublicNetConfig;

    /**
     * @var CfsConfig File system configuration parameters for binding a CFS file system in SCF
     */
    public $CfsConfig;

    /**
     * @var integer Function initialization timeout period
     */
    public $InitTimeout;

    /**
     * @var ProtocolParams Configure ProtocolType access protocol for an HTTP function. Parameters configurable for the current protocol.
     */
    public $ProtocolParams;

    /**
     * @var InstanceConcurrencyConfig Single-instance multi-concurrency configuration. Supports only Web functions.
     */
    public $InstanceConcurrencyConfig;

    /**
     * @var string Whether the Dns caching capability is enabled. Supports only the EVENT function. Defaults to FALSE. TRUE to enable, FALSE to shutdown.
     */
    public $DnsCache;

    /**
     * @var IntranetConfigIn Private network access configuration
     */
    public $IntranetConfig;

    /**
     * @var boolean Ignorable system log reporting
     */
    public $IgnoreSysLog;

    /**
     * @param string $FunctionName The function name to be modified
     * @param string $Description Function description. Supports up to 1,000 English letters, digits, spaces, commas, and periods. Chinese is supported.
     * @param integer $MemorySize Memory size of the function runtime. Default value: 128 MB. Selectable range: 64 MB, or 128 MB to 3072 MB in 128 MB increments.
     * @param integer $Timeout Maximum execution time of the function, in seconds. Value range: 1-900 seconds. Default value: 3 seconds.
     * @param string $Runtime Runtime environment. It is specified upon creation and currently does not support modification.
     * @param Environment $Environment Environment variable of the function
     * @param string $Namespace Namespace of the function
Default value: default
     * @param VpcConfig $VpcConfig VPC configuration of the function
     * @param string $Role Role bound to a function
     * @param string $InstallDependency [Install dependency online](https://www.tencentcloud.com/document/product/583/37920?from_cn_redirect=1). TRUE indicates installation. Default value: FALSE. Only supported for Node.js functions.
     * @param string $ClsLogsetId ID of the cls Log Set for log delivery
     * @param string $ClsTopicId cls Topic ID for log delivery
     * @param string $Publish Whether to release a new version synchronously when updating. Default value: FALSE, which means no new version is released.
     * @param string $L5Enable Whether L5 access capability is enabled. TRUE to enable, FALSE to shutdown.
     * @param array $Layers List of layer versions to associate with the function. The layer versions overwrite each other sequentially in the order in the list.
     * @param DeadLetterConfig $DeadLetterConfig Dead letter queue information associated with the function
     * @param PublicNetConfigIn $PublicNetConfig Public network access configuration
     * @param CfsConfig $CfsConfig File system configuration parameters for binding a CFS file system in SCF
     * @param integer $InitTimeout Function initialization timeout period
     * @param ProtocolParams $ProtocolParams Configure ProtocolType access protocol for an HTTP function. Parameters configurable for the current protocol.
     * @param InstanceConcurrencyConfig $InstanceConcurrencyConfig Single-instance multi-concurrency configuration. Supports only Web functions.
     * @param string $DnsCache Whether the Dns caching capability is enabled. Supports only the EVENT function. Defaults to FALSE. TRUE to enable, FALSE to shutdown.
     * @param IntranetConfigIn $IntranetConfig Private network access configuration
     * @param boolean $IgnoreSysLog Ignorable system log reporting
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

        if (array_key_exists("InstanceConcurrencyConfig",$param) and $param["InstanceConcurrencyConfig"] !== null) {
            $this->InstanceConcurrencyConfig = new InstanceConcurrencyConfig();
            $this->InstanceConcurrencyConfig->deserialize($param["InstanceConcurrencyConfig"]);
        }

        if (array_key_exists("DnsCache",$param) and $param["DnsCache"] !== null) {
            $this->DnsCache = $param["DnsCache"];
        }

        if (array_key_exists("IntranetConfig",$param) and $param["IntranetConfig"] !== null) {
            $this->IntranetConfig = new IntranetConfigIn();
            $this->IntranetConfig->deserialize($param["IntranetConfig"]);
        }

        if (array_key_exists("IgnoreSysLog",$param) and $param["IgnoreSysLog"] !== null) {
            $this->IgnoreSysLog = $param["IgnoreSysLog"];
        }
    }
}
