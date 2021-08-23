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
 * GetFunction response structure.
 *
 * @method string getModTime() Obtain Latest modification time of the function
 * @method void setModTime(string $ModTime) Set Latest modification time of the function
 * @method string getCodeInfo() Obtain Function code
 * @method void setCodeInfo(string $CodeInfo) Set Function code
 * @method string getDescription() Obtain Function description
 * @method void setDescription(string $Description) Set Function description
 * @method array getTriggers() Obtain Function trigger list
 * @method void setTriggers(array $Triggers) Set Function trigger list
 * @method string getHandler() Obtain Function entry
 * @method void setHandler(string $Handler) Set Function entry
 * @method integer getCodeSize() Obtain Function code size
 * @method void setCodeSize(integer $CodeSize) Set Function code size
 * @method integer getTimeout() Obtain Function timeout
 * @method void setTimeout(integer $Timeout) Set Function timeout
 * @method string getFunctionVersion() Obtain Function version
 * @method void setFunctionVersion(string $FunctionVersion) Set Function version
 * @method integer getMemorySize() Obtain Maximum available memory of the function
 * @method void setMemorySize(integer $MemorySize) Set Maximum available memory of the function
 * @method string getRuntime() Obtain Function running environment
 * @method void setRuntime(string $Runtime) Set Function running environment
 * @method string getFunctionName() Obtain Function name
 * @method void setFunctionName(string $FunctionName) Set Function name
 * @method VpcConfig getVpcConfig() Obtain Function VPC
 * @method void setVpcConfig(VpcConfig $VpcConfig) Set Function VPC
 * @method string getUseGpu() Obtain Whether to use GPU
 * @method void setUseGpu(string $UseGpu) Set Whether to use GPU
 * @method Environment getEnvironment() Obtain Function environment variable
 * @method void setEnvironment(Environment $Environment) Set Function environment variable
 * @method string getCodeResult() Obtain Whether the code is correct
 * @method void setCodeResult(string $CodeResult) Set Whether the code is correct
 * @method string getCodeError() Obtain Code error information
 * @method void setCodeError(string $CodeError) Set Code error information
 * @method integer getErrNo() Obtain Error code
 * @method void setErrNo(integer $ErrNo) Set Error code
 * @method string getNamespace() Obtain Function namespace
 * @method void setNamespace(string $Namespace) Set Function namespace
 * @method string getRole() Obtain Role bound to the function
 * @method void setRole(string $Role) Set Role bound to the function
 * @method string getInstallDependency() Obtain Whether to install dependencies automatically
 * @method void setInstallDependency(string $InstallDependency) Set Whether to install dependencies automatically
 * @method string getStatus() Obtain Function status. For valid values and status change process, please see [here](https://intl.cloud.tencent.com/document/product/583/47175?from_cn_redirect=1)
 * @method void setStatus(string $Status) Set Function status. For valid values and status change process, please see [here](https://intl.cloud.tencent.com/document/product/583/47175?from_cn_redirect=1)
 * @method string getStatusDesc() Obtain Status description
 * @method void setStatusDesc(string $StatusDesc) Set Status description
 * @method string getClsLogsetId() Obtain CLS logset to which logs are shipped
 * @method void setClsLogsetId(string $ClsLogsetId) Set CLS logset to which logs are shipped
 * @method string getClsTopicId() Obtain CLS Topic to which logs are shipped
 * @method void setClsTopicId(string $ClsTopicId) Set CLS Topic to which logs are shipped
 * @method string getFunctionId() Obtain Function ID
 * @method void setFunctionId(string $FunctionId) Set Function ID
 * @method array getTags() Obtain Function tag list
 * @method void setTags(array $Tags) Set Function tag list
 * @method EipOutConfig getEipConfig() Obtain EipConfig configuration
 * @method void setEipConfig(EipOutConfig $EipConfig) Set EipConfig configuration
 * @method AccessInfo getAccessInfo() Obtain Domain name information
 * @method void setAccessInfo(AccessInfo $AccessInfo) Set Domain name information
 * @method string getType() Obtain Function type. The value is `HTTP` or `Event`.
 * @method void setType(string $Type) Set Function type. The value is `HTTP` or `Event`.
 * @method string getL5Enable() Obtain Whether to enable L5
 * @method void setL5Enable(string $L5Enable) Set Whether to enable L5
 * @method array getLayers() Obtain Version information of a layer associated with a function
 * @method void setLayers(array $Layers) Set Version information of a layer associated with a function
 * @method DeadLetterConfig getDeadLetterConfig() Obtain Information of a dead letter queue associated with a function
 * @method void setDeadLetterConfig(DeadLetterConfig $DeadLetterConfig) Set Information of a dead letter queue associated with a function
 * @method string getAddTime() Obtain Function creation time
 * @method void setAddTime(string $AddTime) Set Function creation time
 * @method PublicNetConfigOut getPublicNetConfig() Obtain Public network access configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicNetConfig(PublicNetConfigOut $PublicNetConfig) Set Public network access configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOnsEnable() Obtain Whether Ons is enabled
Note: This field may return null, indicating that no valid value was found.
 * @method void setOnsEnable(string $OnsEnable) Set Whether Ons is enabled
Note: This field may return null, indicating that no valid value was found.
 * @method CfsConfig getCfsConfig() Obtain File system configuration parameter, which is used for the function to mount the file system
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCfsConfig(CfsConfig $CfsConfig) Set File system configuration parameter, which is used for the function to mount the file system
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAvailableStatus() Obtain Function billing status. For valid values, please see [here](https://intl.cloud.tencent.com/document/product/583/47175?from_cn_redirect=1#.E5.87.BD.E6.95.B0.E8.AE.A1.E8.B4.B9.E7.8A.B6.E6.80.81)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAvailableStatus(string $AvailableStatus) Set Function billing status. For valid values, please see [here](https://intl.cloud.tencent.com/document/product/583/47175?from_cn_redirect=1#.E5.87.BD.E6.95.B0.E8.AE.A1.E8.B4.B9.E7.8A.B6.E6.80.81)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getQualifier() Obtain Function version
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setQualifier(string $Qualifier) Set Function version
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getInitTimeout() Obtain Timeout period for function initialization
 * @method void setInitTimeout(integer $InitTimeout) Set Timeout period for function initialization
 * @method array getStatusReasons() Obtain Cause of function failure
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatusReasons(array $StatusReasons) Set Cause of function failure
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAsyncRunEnable() Obtain Specifies whether to enable asynchronization 
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAsyncRunEnable(string $AsyncRunEnable) Set Specifies whether to enable asynchronization 
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getTraceEnable() Obtain Specifies whether to enable event tracking
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTraceEnable(string $TraceEnable) Set Specifies whether to enable event tracking
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetFunctionResponse extends AbstractModel
{
    /**
     * @var string Latest modification time of the function
     */
    public $ModTime;

    /**
     * @var string Function code
     */
    public $CodeInfo;

    /**
     * @var string Function description
     */
    public $Description;

    /**
     * @var array Function trigger list
     */
    public $Triggers;

    /**
     * @var string Function entry
     */
    public $Handler;

    /**
     * @var integer Function code size
     */
    public $CodeSize;

    /**
     * @var integer Function timeout
     */
    public $Timeout;

    /**
     * @var string Function version
     */
    public $FunctionVersion;

    /**
     * @var integer Maximum available memory of the function
     */
    public $MemorySize;

    /**
     * @var string Function running environment
     */
    public $Runtime;

    /**
     * @var string Function name
     */
    public $FunctionName;

    /**
     * @var VpcConfig Function VPC
     */
    public $VpcConfig;

    /**
     * @var string Whether to use GPU
     */
    public $UseGpu;

    /**
     * @var Environment Function environment variable
     */
    public $Environment;

    /**
     * @var string Whether the code is correct
     */
    public $CodeResult;

    /**
     * @var string Code error information
     */
    public $CodeError;

    /**
     * @var integer Error code
     */
    public $ErrNo;

    /**
     * @var string Function namespace
     */
    public $Namespace;

    /**
     * @var string Role bound to the function
     */
    public $Role;

    /**
     * @var string Whether to install dependencies automatically
     */
    public $InstallDependency;

    /**
     * @var string Function status. For valid values and status change process, please see [here](https://intl.cloud.tencent.com/document/product/583/47175?from_cn_redirect=1)
     */
    public $Status;

    /**
     * @var string Status description
     */
    public $StatusDesc;

    /**
     * @var string CLS logset to which logs are shipped
     */
    public $ClsLogsetId;

    /**
     * @var string CLS Topic to which logs are shipped
     */
    public $ClsTopicId;

    /**
     * @var string Function ID
     */
    public $FunctionId;

    /**
     * @var array Function tag list
     */
    public $Tags;

    /**
     * @var EipOutConfig EipConfig configuration
     */
    public $EipConfig;

    /**
     * @var AccessInfo Domain name information
     */
    public $AccessInfo;

    /**
     * @var string Function type. The value is `HTTP` or `Event`.
     */
    public $Type;

    /**
     * @var string Whether to enable L5
     */
    public $L5Enable;

    /**
     * @var array Version information of a layer associated with a function
     */
    public $Layers;

    /**
     * @var DeadLetterConfig Information of a dead letter queue associated with a function
     */
    public $DeadLetterConfig;

    /**
     * @var string Function creation time
     */
    public $AddTime;

    /**
     * @var PublicNetConfigOut Public network access configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublicNetConfig;

    /**
     * @var string Whether Ons is enabled
Note: This field may return null, indicating that no valid value was found.
     */
    public $OnsEnable;

    /**
     * @var CfsConfig File system configuration parameter, which is used for the function to mount the file system
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CfsConfig;

    /**
     * @var string Function billing status. For valid values, please see [here](https://intl.cloud.tencent.com/document/product/583/47175?from_cn_redirect=1#.E5.87.BD.E6.95.B0.E8.AE.A1.E8.B4.B9.E7.8A.B6.E6.80.81)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AvailableStatus;

    /**
     * @var string Function version
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Qualifier;

    /**
     * @var integer Timeout period for function initialization
     */
    public $InitTimeout;

    /**
     * @var array Cause of function failure
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StatusReasons;

    /**
     * @var string Specifies whether to enable asynchronization 
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AsyncRunEnable;

    /**
     * @var string Specifies whether to enable event tracking
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TraceEnable;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ModTime Latest modification time of the function
     * @param string $CodeInfo Function code
     * @param string $Description Function description
     * @param array $Triggers Function trigger list
     * @param string $Handler Function entry
     * @param integer $CodeSize Function code size
     * @param integer $Timeout Function timeout
     * @param string $FunctionVersion Function version
     * @param integer $MemorySize Maximum available memory of the function
     * @param string $Runtime Function running environment
     * @param string $FunctionName Function name
     * @param VpcConfig $VpcConfig Function VPC
     * @param string $UseGpu Whether to use GPU
     * @param Environment $Environment Function environment variable
     * @param string $CodeResult Whether the code is correct
     * @param string $CodeError Code error information
     * @param integer $ErrNo Error code
     * @param string $Namespace Function namespace
     * @param string $Role Role bound to the function
     * @param string $InstallDependency Whether to install dependencies automatically
     * @param string $Status Function status. For valid values and status change process, please see [here](https://intl.cloud.tencent.com/document/product/583/47175?from_cn_redirect=1)
     * @param string $StatusDesc Status description
     * @param string $ClsLogsetId CLS logset to which logs are shipped
     * @param string $ClsTopicId CLS Topic to which logs are shipped
     * @param string $FunctionId Function ID
     * @param array $Tags Function tag list
     * @param EipOutConfig $EipConfig EipConfig configuration
     * @param AccessInfo $AccessInfo Domain name information
     * @param string $Type Function type. The value is `HTTP` or `Event`.
     * @param string $L5Enable Whether to enable L5
     * @param array $Layers Version information of a layer associated with a function
     * @param DeadLetterConfig $DeadLetterConfig Information of a dead letter queue associated with a function
     * @param string $AddTime Function creation time
     * @param PublicNetConfigOut $PublicNetConfig Public network access configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OnsEnable Whether Ons is enabled
Note: This field may return null, indicating that no valid value was found.
     * @param CfsConfig $CfsConfig File system configuration parameter, which is used for the function to mount the file system
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AvailableStatus Function billing status. For valid values, please see [here](https://intl.cloud.tencent.com/document/product/583/47175?from_cn_redirect=1#.E5.87.BD.E6.95.B0.E8.AE.A1.E8.B4.B9.E7.8A.B6.E6.80.81)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Qualifier Function version
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $InitTimeout Timeout period for function initialization
     * @param array $StatusReasons Cause of function failure
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AsyncRunEnable Specifies whether to enable asynchronization 
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $TraceEnable Specifies whether to enable event tracking
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("CodeInfo",$param) and $param["CodeInfo"] !== null) {
            $this->CodeInfo = $param["CodeInfo"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Triggers",$param) and $param["Triggers"] !== null) {
            $this->Triggers = [];
            foreach ($param["Triggers"] as $key => $value){
                $obj = new Trigger();
                $obj->deserialize($value);
                array_push($this->Triggers, $obj);
            }
        }

        if (array_key_exists("Handler",$param) and $param["Handler"] !== null) {
            $this->Handler = $param["Handler"];
        }

        if (array_key_exists("CodeSize",$param) and $param["CodeSize"] !== null) {
            $this->CodeSize = $param["CodeSize"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("FunctionVersion",$param) and $param["FunctionVersion"] !== null) {
            $this->FunctionVersion = $param["FunctionVersion"];
        }

        if (array_key_exists("MemorySize",$param) and $param["MemorySize"] !== null) {
            $this->MemorySize = $param["MemorySize"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("VpcConfig",$param) and $param["VpcConfig"] !== null) {
            $this->VpcConfig = new VpcConfig();
            $this->VpcConfig->deserialize($param["VpcConfig"]);
        }

        if (array_key_exists("UseGpu",$param) and $param["UseGpu"] !== null) {
            $this->UseGpu = $param["UseGpu"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = new Environment();
            $this->Environment->deserialize($param["Environment"]);
        }

        if (array_key_exists("CodeResult",$param) and $param["CodeResult"] !== null) {
            $this->CodeResult = $param["CodeResult"];
        }

        if (array_key_exists("CodeError",$param) and $param["CodeError"] !== null) {
            $this->CodeError = $param["CodeError"];
        }

        if (array_key_exists("ErrNo",$param) and $param["ErrNo"] !== null) {
            $this->ErrNo = $param["ErrNo"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("InstallDependency",$param) and $param["InstallDependency"] !== null) {
            $this->InstallDependency = $param["InstallDependency"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("ClsLogsetId",$param) and $param["ClsLogsetId"] !== null) {
            $this->ClsLogsetId = $param["ClsLogsetId"];
        }

        if (array_key_exists("ClsTopicId",$param) and $param["ClsTopicId"] !== null) {
            $this->ClsTopicId = $param["ClsTopicId"];
        }

        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("EipConfig",$param) and $param["EipConfig"] !== null) {
            $this->EipConfig = new EipOutConfig();
            $this->EipConfig->deserialize($param["EipConfig"]);
        }

        if (array_key_exists("AccessInfo",$param) and $param["AccessInfo"] !== null) {
            $this->AccessInfo = new AccessInfo();
            $this->AccessInfo->deserialize($param["AccessInfo"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("L5Enable",$param) and $param["L5Enable"] !== null) {
            $this->L5Enable = $param["L5Enable"];
        }

        if (array_key_exists("Layers",$param) and $param["Layers"] !== null) {
            $this->Layers = [];
            foreach ($param["Layers"] as $key => $value){
                $obj = new LayerVersionInfo();
                $obj->deserialize($value);
                array_push($this->Layers, $obj);
            }
        }

        if (array_key_exists("DeadLetterConfig",$param) and $param["DeadLetterConfig"] !== null) {
            $this->DeadLetterConfig = new DeadLetterConfig();
            $this->DeadLetterConfig->deserialize($param["DeadLetterConfig"]);
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("PublicNetConfig",$param) and $param["PublicNetConfig"] !== null) {
            $this->PublicNetConfig = new PublicNetConfigOut();
            $this->PublicNetConfig->deserialize($param["PublicNetConfig"]);
        }

        if (array_key_exists("OnsEnable",$param) and $param["OnsEnable"] !== null) {
            $this->OnsEnable = $param["OnsEnable"];
        }

        if (array_key_exists("CfsConfig",$param) and $param["CfsConfig"] !== null) {
            $this->CfsConfig = new CfsConfig();
            $this->CfsConfig->deserialize($param["CfsConfig"]);
        }

        if (array_key_exists("AvailableStatus",$param) and $param["AvailableStatus"] !== null) {
            $this->AvailableStatus = $param["AvailableStatus"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("InitTimeout",$param) and $param["InitTimeout"] !== null) {
            $this->InitTimeout = $param["InitTimeout"];
        }

        if (array_key_exists("StatusReasons",$param) and $param["StatusReasons"] !== null) {
            $this->StatusReasons = [];
            foreach ($param["StatusReasons"] as $key => $value){
                $obj = new StatusReason();
                $obj->deserialize($value);
                array_push($this->StatusReasons, $obj);
            }
        }

        if (array_key_exists("AsyncRunEnable",$param) and $param["AsyncRunEnable"] !== null) {
            $this->AsyncRunEnable = $param["AsyncRunEnable"];
        }

        if (array_key_exists("TraceEnable",$param) and $param["TraceEnable"] !== null) {
            $this->TraceEnable = $param["TraceEnable"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
