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
 * Function containing hierarchical information
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getDisplayName() Obtain Display Name
 * @method void setDisplayName(string $DisplayName) Set Display Name
 * @method string getLayerPath() Obtain Hierarchical Path
 * @method void setLayerPath(string $LayerPath) Set Hierarchical Path
 * @method string getParentLayerPath() Obtain Parent Hierarchical Path
 * @method void setParentLayerPath(string $ParentLayerPath) Set Parent Hierarchical Path
 * @method string getType() Obtain Function Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set Function Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getKind() Obtain Function Classification: Window functions, Aggregation functions, Date functions...
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setKind(string $Kind) Set Function Classification: Window functions, Aggregation functions, Date functions...
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCategory() Obtain Function Category: System functions, Custom Definition functions
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCategory(string $Category) Set Function Category: System functions, Custom Definition functions
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStatus() Obtain Function Status
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatus(string $Status) Set Function Status
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain Function DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set Function DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getUsage() Obtain Function Usage
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUsage(string $Usage) Set Function Usage
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getParamDesc() Obtain Function Parameter Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setParamDesc(string $ParamDesc) Set Function Parameter Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getReturnDesc() Obtain Function Return Value Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setReturnDesc(string $ReturnDesc) Set Function Return Value Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExample() Obtain Function Example
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExample(string $Example) Set Function Example
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getClusterIdentifier() Obtain Cluster Instance Engine IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setClusterIdentifier(string $ClusterIdentifier) Set Cluster Instance Engine IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getFuncId() Obtain Function IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setFuncId(string $FuncId) Set Function IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getClassName() Obtain Function Class Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setClassName(string $ClassName) Set Function Class Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getResourceList() Obtain Function Resource List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setResourceList(array $ResourceList) Set Function Resource List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getOperatorUserIds() Obtain Operator ID List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOperatorUserIds(array $OperatorUserIds) Set Operator ID List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getOwnerUserIds() Obtain Public cloud Owner ID list
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerUserIds(array $OwnerUserIds) Set Public cloud Owner ID list
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDbName() Obtain Database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDbName(string $DbName) Set Database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getSubmitErrorMsg() Obtain Submission failed error message
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSubmitErrorMsg(string $SubmitErrorMsg) Set Submission failed error message
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSchemaName() Obtain Pattern nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setSchemaName(string $SchemaName) Set Pattern nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCommandFormat() Obtain Function Command FormatNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCommandFormat(string $CommandFormat) Set Function Command FormatNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerName() Obtain NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerName(string $OwnerName) Set NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getSubmitTimestamp() Obtain TimestampNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setSubmitTimestamp(string $SubmitTimestamp) Set TimestampNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTag() Obtain Function tag
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTag(string $Tag) Set Function tag
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getOperatorUserIdsStr() Obtain Operator ID List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOperatorUserIdsStr(array $OperatorUserIdsStr) Set Operator ID List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getOwnerUserIdsStr() Obtain Public Cloud Owner ID List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerUserIdsStr(array $OwnerUserIdsStr) Set Public Cloud Owner ID List
Note: This field may return null, indicating that no valid value can be obtained.
 */
class OrganizationalFunction extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Display Name
     */
    public $DisplayName;

    /**
     * @var string Hierarchical Path
     */
    public $LayerPath;

    /**
     * @var string Parent Hierarchical Path
     */
    public $ParentLayerPath;

    /**
     * @var string Function Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var string Function Classification: Window functions, Aggregation functions, Date functions...
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Kind;

    /**
     * @var string Function Category: System functions, Custom Definition functions
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Category;

    /**
     * @var string Function Status
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var string Function DescriptionNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var string Function Usage
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Usage;

    /**
     * @var string Function Parameter Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ParamDesc;

    /**
     * @var string Function Return Value Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ReturnDesc;

    /**
     * @var string Function Example
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Example;

    /**
     * @var string Cluster Instance Engine IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClusterIdentifier;

    /**
     * @var string Function IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $FuncId;

    /**
     * @var string Function Class Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClassName;

    /**
     * @var array Function Resource List
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ResourceList;

    /**
     * @var array Operator ID List
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OperatorUserIds;

    /**
     * @var array Public cloud Owner ID list
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerUserIds;

    /**
     * @var string Database nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DbName;

    /**
     * @var string Submission failed error message
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SubmitErrorMsg;

    /**
     * @var string Pattern nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $SchemaName;

    /**
     * @var string Function Command FormatNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CommandFormat;

    /**
     * @var string NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerName;

    /**
     * @var string TimestampNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $SubmitTimestamp;

    /**
     * @var string Function tag
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Tag;

    /**
     * @var array Operator ID List
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OperatorUserIdsStr;

    /**
     * @var array Public Cloud Owner ID List
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerUserIdsStr;

    /**
     * @param string $Name Name
     * @param string $DisplayName Display Name
     * @param string $LayerPath Hierarchical Path
     * @param string $ParentLayerPath Parent Hierarchical Path
     * @param string $Type Function Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Kind Function Classification: Window functions, Aggregation functions, Date functions...
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Category Function Category: System functions, Custom Definition functions
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Status Function Status
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description Function DescriptionNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Usage Function Usage
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ParamDesc Function Parameter Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ReturnDesc Function Return Value Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Example Function Example
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ClusterIdentifier Cluster Instance Engine IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $FuncId Function IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ClassName Function Class Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $ResourceList Function Resource List
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $OperatorUserIds Operator ID List
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $OwnerUserIds Public cloud Owner ID list
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DbName Database nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $SubmitErrorMsg Submission failed error message
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SchemaName Pattern nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $CommandFormat Function Command FormatNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerName NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $SubmitTimestamp TimestampNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Tag Function tag
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $OperatorUserIdsStr Operator ID List
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $OwnerUserIdsStr Public Cloud Owner ID List
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("LayerPath",$param) and $param["LayerPath"] !== null) {
            $this->LayerPath = $param["LayerPath"];
        }

        if (array_key_exists("ParentLayerPath",$param) and $param["ParentLayerPath"] !== null) {
            $this->ParentLayerPath = $param["ParentLayerPath"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("ClusterIdentifier",$param) and $param["ClusterIdentifier"] !== null) {
            $this->ClusterIdentifier = $param["ClusterIdentifier"];
        }

        if (array_key_exists("FuncId",$param) and $param["FuncId"] !== null) {
            $this->FuncId = $param["FuncId"];
        }

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
        }

        if (array_key_exists("ResourceList",$param) and $param["ResourceList"] !== null) {
            $this->ResourceList = [];
            foreach ($param["ResourceList"] as $key => $value){
                $obj = new FunctionVersion();
                $obj->deserialize($value);
                array_push($this->ResourceList, $obj);
            }
        }

        if (array_key_exists("OperatorUserIds",$param) and $param["OperatorUserIds"] !== null) {
            $this->OperatorUserIds = $param["OperatorUserIds"];
        }

        if (array_key_exists("OwnerUserIds",$param) and $param["OwnerUserIds"] !== null) {
            $this->OwnerUserIds = $param["OwnerUserIds"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("SubmitErrorMsg",$param) and $param["SubmitErrorMsg"] !== null) {
            $this->SubmitErrorMsg = $param["SubmitErrorMsg"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("CommandFormat",$param) and $param["CommandFormat"] !== null) {
            $this->CommandFormat = $param["CommandFormat"];
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }

        if (array_key_exists("SubmitTimestamp",$param) and $param["SubmitTimestamp"] !== null) {
            $this->SubmitTimestamp = $param["SubmitTimestamp"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("OperatorUserIdsStr",$param) and $param["OperatorUserIdsStr"] !== null) {
            $this->OperatorUserIdsStr = $param["OperatorUserIdsStr"];
        }

        if (array_key_exists("OwnerUserIdsStr",$param) and $param["OwnerUserIdsStr"] !== null) {
            $this->OwnerUserIdsStr = $param["OwnerUserIdsStr"];
        }
    }
}
