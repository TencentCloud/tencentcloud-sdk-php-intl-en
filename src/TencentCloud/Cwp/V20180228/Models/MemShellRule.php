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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Java Webshell allowlist rule.
 *
 * @method integer getId() Obtain Rule ID
 * @method void setId(integer $Id) Set Rule ID
 * @method array getUuidHostips() Obtain Client ID
 * @method void setUuidHostips(array $UuidHostips) Set Client ID
 * @method integer getLogicalSymbol() Obtain Logical operator. 0: 5 valid regular expression logical ANDs; 1: logical OR.
 * @method void setLogicalSymbol(integer $LogicalSymbol) Set Logical operator. 0: 5 valid regular expression logical ANDs; 1: logical OR.
 * @method string getClassNameRegexp() Obtain Class name regular expression, which is not matched if empty.
 * @method void setClassNameRegexp(string $ClassNameRegexp) Set Class name regular expression, which is not matched if empty.
 * @method string getSuperClassNameRegexp() Obtain Parent class name regular expression, which is not matched if empty.
 * @method void setSuperClassNameRegexp(string $SuperClassNameRegexp) Set Parent class name regular expression, which is not matched if empty.
 * @method string getInterfacesRegexp() Obtain Inherited interface regular expression, which is not matched if empty.
 * @method void setInterfacesRegexp(string $InterfacesRegexp) Set Inherited interface regular expression, which is not matched if empty.
 * @method string getAnnotationsRegexp() Obtain Annotation regular expression, which is not matched if empty.
 * @method void setAnnotationsRegexp(string $AnnotationsRegexp) Set Annotation regular expression, which is not matched if empty.
 * @method string getLoaderClassNameRegexp() Obtain Associated class loader regular expression, which is not matched if empty.
 * @method void setLoaderClassNameRegexp(string $LoaderClassNameRegexp) Set Associated class loader regular expression, which is not matched if empty.
 * @method string getOperator() Obtain Operator
 * @method void setOperator(string $Operator) Set Operator
 * @method integer getIsGlobal() Obtain Whether it is a global rule. (Whether it is effective for all hosts under appid. 0: single UUID; 1: global. The default value is no.)
 * @method void setIsGlobal(integer $IsGlobal) Set Whether it is a global rule. (Whether it is effective for all hosts under appid. 0: single UUID; 1: global. The default value is no.)
 * @method integer getStatus() Obtain Status (0: valid, 1: deleted, 2: invalid (enabling switch off)).
 * @method void setStatus(integer $Status) Set Status (0: valid, 1: deleted, 2: invalid (enabling switch off)).
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 * @method integer getHandleHistory() Obtain Whether to process historical events. 0: no, 1: yes.
 * @method void setHandleHistory(integer $HandleHistory) Set Whether to process historical events. 0: no, 1: yes.
 * @method string getGroupID() Obtain Batch ID.
 * @method void setGroupID(string $GroupID) Set Batch ID.
 * @method string getMachinesNums() Obtain Number of servers covered by a rule. When IsGlobal is set to 1, all servers are displayed.
 * @method void setMachinesNums(string $MachinesNums) Set Number of servers covered by a rule. When IsGlobal is set to 1, all servers are displayed.
 * @method string getGroupName() Obtain Policy name
 * @method void setGroupName(string $GroupName) Set Policy name
 * @method string getCodeSourceRegexp() Obtain Source code regular expression, which is not matched if empty.
 * @method void setCodeSourceRegexp(string $CodeSourceRegexp) Set Source code regular expression, which is not matched if empty.
 * @method string getCallStackRegexp() Obtain Call stack regular expression, which is not matched if empty.
 * @method void setCallStackRegexp(string $CallStackRegexp) Set Call stack regular expression, which is not matched if empty.
 * @method integer getFileExist() Obtain Whether a file exists. 0: Default value when a user does not select a rule. 1: File exists. 2: File does not exist.
 * @method void setFileExist(integer $FileExist) Set Whether a file exists. 0: Default value when a user does not select a rule. 1: File exists. 2: File does not exist.
 */
class MemShellRule extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $Id;

    /**
     * @var array Client ID
     */
    public $UuidHostips;

    /**
     * @var integer Logical operator. 0: 5 valid regular expression logical ANDs; 1: logical OR.
     */
    public $LogicalSymbol;

    /**
     * @var string Class name regular expression, which is not matched if empty.
     */
    public $ClassNameRegexp;

    /**
     * @var string Parent class name regular expression, which is not matched if empty.
     */
    public $SuperClassNameRegexp;

    /**
     * @var string Inherited interface regular expression, which is not matched if empty.
     */
    public $InterfacesRegexp;

    /**
     * @var string Annotation regular expression, which is not matched if empty.
     */
    public $AnnotationsRegexp;

    /**
     * @var string Associated class loader regular expression, which is not matched if empty.
     */
    public $LoaderClassNameRegexp;

    /**
     * @var string Operator
     */
    public $Operator;

    /**
     * @var integer Whether it is a global rule. (Whether it is effective for all hosts under appid. 0: single UUID; 1: global. The default value is no.)
     */
    public $IsGlobal;

    /**
     * @var integer Status (0: valid, 1: deleted, 2: invalid (enabling switch off)).
     */
    public $Status;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Modification time
     */
    public $ModifyTime;

    /**
     * @var integer Whether to process historical events. 0: no, 1: yes.
     */
    public $HandleHistory;

    /**
     * @var string Batch ID.
     */
    public $GroupID;

    /**
     * @var string Number of servers covered by a rule. When IsGlobal is set to 1, all servers are displayed.
     */
    public $MachinesNums;

    /**
     * @var string Policy name
     */
    public $GroupName;

    /**
     * @var string Source code regular expression, which is not matched if empty.
     */
    public $CodeSourceRegexp;

    /**
     * @var string Call stack regular expression, which is not matched if empty.
     */
    public $CallStackRegexp;

    /**
     * @var integer Whether a file exists. 0: Default value when a user does not select a rule. 1: File exists. 2: File does not exist.
     */
    public $FileExist;

    /**
     * @param integer $Id Rule ID
     * @param array $UuidHostips Client ID
     * @param integer $LogicalSymbol Logical operator. 0: 5 valid regular expression logical ANDs; 1: logical OR.
     * @param string $ClassNameRegexp Class name regular expression, which is not matched if empty.
     * @param string $SuperClassNameRegexp Parent class name regular expression, which is not matched if empty.
     * @param string $InterfacesRegexp Inherited interface regular expression, which is not matched if empty.
     * @param string $AnnotationsRegexp Annotation regular expression, which is not matched if empty.
     * @param string $LoaderClassNameRegexp Associated class loader regular expression, which is not matched if empty.
     * @param string $Operator Operator
     * @param integer $IsGlobal Whether it is a global rule. (Whether it is effective for all hosts under appid. 0: single UUID; 1: global. The default value is no.)
     * @param integer $Status Status (0: valid, 1: deleted, 2: invalid (enabling switch off)).
     * @param string $CreateTime Creation time
     * @param string $ModifyTime Modification time
     * @param integer $HandleHistory Whether to process historical events. 0: no, 1: yes.
     * @param string $GroupID Batch ID.
     * @param string $MachinesNums Number of servers covered by a rule. When IsGlobal is set to 1, all servers are displayed.
     * @param string $GroupName Policy name
     * @param string $CodeSourceRegexp Source code regular expression, which is not matched if empty.
     * @param string $CallStackRegexp Call stack regular expression, which is not matched if empty.
     * @param integer $FileExist Whether a file exists. 0: Default value when a user does not select a rule. 1: File exists. 2: File does not exist.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("UuidHostips",$param) and $param["UuidHostips"] !== null) {
            $this->UuidHostips = [];
            foreach ($param["UuidHostips"] as $key => $value){
                $obj = new UuidHostip();
                $obj->deserialize($value);
                array_push($this->UuidHostips, $obj);
            }
        }

        if (array_key_exists("LogicalSymbol",$param) and $param["LogicalSymbol"] !== null) {
            $this->LogicalSymbol = $param["LogicalSymbol"];
        }

        if (array_key_exists("ClassNameRegexp",$param) and $param["ClassNameRegexp"] !== null) {
            $this->ClassNameRegexp = $param["ClassNameRegexp"];
        }

        if (array_key_exists("SuperClassNameRegexp",$param) and $param["SuperClassNameRegexp"] !== null) {
            $this->SuperClassNameRegexp = $param["SuperClassNameRegexp"];
        }

        if (array_key_exists("InterfacesRegexp",$param) and $param["InterfacesRegexp"] !== null) {
            $this->InterfacesRegexp = $param["InterfacesRegexp"];
        }

        if (array_key_exists("AnnotationsRegexp",$param) and $param["AnnotationsRegexp"] !== null) {
            $this->AnnotationsRegexp = $param["AnnotationsRegexp"];
        }

        if (array_key_exists("LoaderClassNameRegexp",$param) and $param["LoaderClassNameRegexp"] !== null) {
            $this->LoaderClassNameRegexp = $param["LoaderClassNameRegexp"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("HandleHistory",$param) and $param["HandleHistory"] !== null) {
            $this->HandleHistory = $param["HandleHistory"];
        }

        if (array_key_exists("GroupID",$param) and $param["GroupID"] !== null) {
            $this->GroupID = $param["GroupID"];
        }

        if (array_key_exists("MachinesNums",$param) and $param["MachinesNums"] !== null) {
            $this->MachinesNums = $param["MachinesNums"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("CodeSourceRegexp",$param) and $param["CodeSourceRegexp"] !== null) {
            $this->CodeSourceRegexp = $param["CodeSourceRegexp"];
        }

        if (array_key_exists("CallStackRegexp",$param) and $param["CallStackRegexp"] !== null) {
            $this->CallStackRegexp = $param["CallStackRegexp"];
        }

        if (array_key_exists("FileExist",$param) and $param["FileExist"] !== null) {
            $this->FileExist = $param["FileExist"];
        }
    }
}
