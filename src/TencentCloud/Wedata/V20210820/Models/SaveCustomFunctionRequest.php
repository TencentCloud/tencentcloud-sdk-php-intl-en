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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SaveCustomFunction request structure.
 *
 * @method string getFunctionId() Obtain Function Unique Identifier
 * @method void setFunctionId(string $FunctionId) Set Function Unique Identifier
 * @method string getKind() Obtain Classification: Window functions, Aggregation functions, Date functions...
 * @method void setKind(string $Kind) Set Classification: Window functions, Aggregation functions, Date functions...
 * @method string getClusterIdentifier() Obtain Cluster Engine Instance
 * @method void setClusterIdentifier(string $ClusterIdentifier) Set Cluster Engine Instance
 * @method string getClassName() Obtain Class
 * @method void setClassName(string $ClassName) Set Class
 * @method array getResourceList() Obtain Resource list
 * @method void setResourceList(array $ResourceList) Set Resource list
 * @method string getDescription() Obtain Function Description
 * @method void setDescription(string $Description) Set Function Description
 * @method string getUsage() Obtain Usage
 * @method void setUsage(string $Usage) Set Usage
 * @method string getParamDesc() Obtain Parameter description
 * @method void setParamDesc(string $ParamDesc) Set Parameter description
 * @method string getReturnDesc() Obtain Return value description
 * @method void setReturnDesc(string $ReturnDesc) Set Return value description
 * @method string getExample() Obtain Sample code
 * @method void setExample(string $Example) Set Sample code
 * @method string getProjectId() Obtain Project ID, cannot be modified, used by DLC when saving the function
 * @method void setProjectId(string $ProjectId) Set Project ID, cannot be modified, used by DLC when saving the function
 * @method string getDbName() Obtain Database Name, cannot be modified, used by DLC when saving the function
 * @method void setDbName(string $DbName) Set Database Name, cannot be modified, used by DLC when saving the function
 * @method string getName() Obtain Function Name, cannot be modified, used by DLC when saving the function
 * @method void setName(string $Name) Set Function Name, cannot be modified, used by DLC when saving the function
 */
class SaveCustomFunctionRequest extends AbstractModel
{
    /**
     * @var string Function Unique Identifier
     */
    public $FunctionId;

    /**
     * @var string Classification: Window functions, Aggregation functions, Date functions...
     */
    public $Kind;

    /**
     * @var string Cluster Engine Instance
     */
    public $ClusterIdentifier;

    /**
     * @var string Class
     */
    public $ClassName;

    /**
     * @var array Resource list
     */
    public $ResourceList;

    /**
     * @var string Function Description
     */
    public $Description;

    /**
     * @var string Usage
     */
    public $Usage;

    /**
     * @var string Parameter description
     */
    public $ParamDesc;

    /**
     * @var string Return value description
     */
    public $ReturnDesc;

    /**
     * @var string Sample code
     */
    public $Example;

    /**
     * @var string Project ID, cannot be modified, used by DLC when saving the function
     */
    public $ProjectId;

    /**
     * @var string Database Name, cannot be modified, used by DLC when saving the function
     */
    public $DbName;

    /**
     * @var string Function Name, cannot be modified, used by DLC when saving the function
     */
    public $Name;

    /**
     * @param string $FunctionId Function Unique Identifier
     * @param string $Kind Classification: Window functions, Aggregation functions, Date functions...
     * @param string $ClusterIdentifier Cluster Engine Instance
     * @param string $ClassName Class
     * @param array $ResourceList Resource list
     * @param string $Description Function Description
     * @param string $Usage Usage
     * @param string $ParamDesc Parameter description
     * @param string $ReturnDesc Return value description
     * @param string $Example Sample code
     * @param string $ProjectId Project ID, cannot be modified, used by DLC when saving the function
     * @param string $DbName Database Name, cannot be modified, used by DLC when saving the function
     * @param string $Name Function Name, cannot be modified, used by DLC when saving the function
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
        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("ClusterIdentifier",$param) and $param["ClusterIdentifier"] !== null) {
            $this->ClusterIdentifier = $param["ClusterIdentifier"];
        }

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
        }

        if (array_key_exists("ResourceList",$param) and $param["ResourceList"] !== null) {
            $this->ResourceList = [];
            foreach ($param["ResourceList"] as $key => $value){
                $obj = new FunctionResource();
                $obj->deserialize($value);
                array_push($this->ResourceList, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }

        if (array_key_exists("ParamDesc",$param) and $param["ParamDesc"] !== null) {
            $this->ParamDesc = $param["ParamDesc"];
        }

        if (array_key_exists("ReturnDesc",$param) and $param["ReturnDesc"] !== null) {
            $this->ReturnDesc = $param["ReturnDesc"];
        }

        if (array_key_exists("Example",$param) and $param["Example"] !== null) {
            $this->Example = $param["Example"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
