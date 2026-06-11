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
 * Application protection allowlist rule
 *
 * @method integer getId() Obtain Rule ID
 * @method void setId(integer $Id) Set Rule ID
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
 * @method string getSource() Obtain Allowlist type, rasp: vulnerability defense, memshell_scan: Java Webshell scan, memshell_inject: memory shell injection
 * @method void setSource(string $Source) Set Allowlist type, rasp: vulnerability defense, memshell_scan: Java Webshell scan, memshell_inject: memory shell injection
 * @method integer getStatus() Obtain Status (0: valid, 1: deleted, 2: invalid (enabling switch off)).
 * @method void setStatus(integer $Status) Set Status (0: valid, 1: deleted, 2: invalid (enabling switch off)).
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 * @method integer getHandleHistory() Obtain Java Webshell scan usage, process historical events, 0: do not process 1: process
 * @method void setHandleHistory(integer $HandleHistory) Set Java Webshell scan usage, process historical events, 0: do not process 1: process
 * @method string getContent() Obtain rasp and memory shell injection usage, match content, POC, can be a regular expression (MatchMode=5) or a string.
 * @method void setContent(string $Content) Set rasp and memory shell injection usage, match content, POC, can be a regular expression (MatchMode=5) or a string.
 * @method string getIP() Obtain rasp and memory shell injection usage, attack source ip, leave unset for all sources, multiple allowed, can have ip ranges, such as: 192.168.57.1/24;172.17.0.1
 * @method void setIP(string $IP) Set rasp and memory shell injection usage, attack source ip, leave unset for all sources, multiple allowed, can have ip ranges, such as: 192.168.57.1/24;172.17.0.1
 * @method string getPolicyName() Obtain Rule name
 * @method void setPolicyName(string $PolicyName) Set Rule name
 * @method integer getFilterType() Obtain rasp and memory shell injection usage, allowlisting method, 0: malicious feature allowlisting, 1: request URL allowlisting
 * @method void setFilterType(integer $FilterType) Set rasp and memory shell injection usage, allowlisting method, 0: malicious feature allowlisting, 1: request URL allowlisting
 * @method integer getAttackType() Obtain RASP and memory shell injection usage, attack type, vul.rasp_attacktype_mapping attack_type_id field
 * @method void setAttackType(integer $AttackType) Set RASP and memory shell injection usage, attack type, vul.rasp_attacktype_mapping attack_type_id field
 * @method integer getMatchMode() Obtain rasp and memory shell injection usage, match mode, 0: exact match, 1: prefix match, 2: suffix matching, 4: arbitrary matching, 5: partial matching, 6: regular expression matching.
 * @method void setMatchMode(integer $MatchMode) Set rasp and memory shell injection usage, match mode, 0: exact match, 1: prefix match, 2: suffix matching, 4: arbitrary matching, 5: partial matching, 6: regular expression matching.
 * @method integer getCWPEffective() Obtain Effective asset type. 0: Host disabled. 1: Host enabled.
 * @method void setCWPEffective(integer $CWPEffective) Set Effective asset type. 0: Host disabled. 1: Host enabled.
 * @method integer getCWPScope() Obtain 0: a set of quuid 1: ALL the Real Server with host authorization
 * @method void setCWPScope(integer $CWPScope) Set 0: a set of quuid 1: ALL the Real Server with host authorization
 * @method array getCWPQuuids() Obtain Designate the effective host machine
 * @method void setCWPQuuids(array $CWPQuuids) Set Designate the effective host machine
 * @method integer getTCSSEffective() Obtain Effective asset type. 0: Container disabled. 1: Container enabled.
 * @method void setTCSSEffective(integer $TCSSEffective) Set Effective asset type. 0: Container disabled. 1: Container enabled.
 * @method integer getTCSSScope() Obtain 0: a set of quuid 1: ALL the node with container authorization
 * @method void setTCSSScope(integer $TCSSScope) Set 0: a set of quuid 1: ALL the node with container authorization
 * @method array getTCSSQuuids() Obtain Designate the container node to take effect
 * @method void setTCSSQuuids(array $TCSSQuuids) Set Designate the container node to take effect
 * @method integer getEksEffective() Obtain Effective asset type. 0: Super node disabled. 1: Super node enabled.
 * @method void setEksEffective(integer $EksEffective) Set Effective asset type. 0: Super node disabled. 1: Super node enabled.
 * @method integer getEksScope() Obtain 0: a set of quuid 1: ALL the super node with container authorization
 * @method void setEksScope(integer $EksScope) Set 0: a set of quuid 1: ALL the super node with container authorization
 * @method array getEksNodeUniqueID() Obtain Designate the super node where the container takes effect
 * @method void setEksNodeUniqueID(array $EksNodeUniqueID) Set Designate the super node where the container takes effect
 * @method string getCWPMachinesNums() Obtain Application asset. If global, all hosts. Otherwise, the number of selected host servers.
 * @method void setCWPMachinesNums(string $CWPMachinesNums) Set Application asset. If global, all hosts. Otherwise, the number of selected host servers.
 * @method string getTCSSMachinesNums() Obtain Application asset. If global, all containers host nodes. Otherwise, select the number of host nodes.
 * @method void setTCSSMachinesNums(string $TCSSMachinesNums) Set Application asset. If global, all containers host nodes. Otherwise, select the number of host nodes.
 * @method string getEksMachinesNums() Obtain Application asset. If global, all super nodes. Otherwise, select the number of nodes.
 * @method void setEksMachinesNums(string $EksMachinesNums) Set Application asset. If global, all super nodes. Otherwise, select the number of nodes.
 */
class YDRaspBlackWhiteListItem extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $Id;

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
     * @var string Allowlist type, rasp: vulnerability defense, memshell_scan: Java Webshell scan, memshell_inject: memory shell injection
     */
    public $Source;

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
     * @var integer Java Webshell scan usage, process historical events, 0: do not process 1: process
     */
    public $HandleHistory;

    /**
     * @var string rasp and memory shell injection usage, match content, POC, can be a regular expression (MatchMode=5) or a string.
     */
    public $Content;

    /**
     * @var string rasp and memory shell injection usage, attack source ip, leave unset for all sources, multiple allowed, can have ip ranges, such as: 192.168.57.1/24;172.17.0.1
     */
    public $IP;

    /**
     * @var string Rule name
     */
    public $PolicyName;

    /**
     * @var integer rasp and memory shell injection usage, allowlisting method, 0: malicious feature allowlisting, 1: request URL allowlisting
     */
    public $FilterType;

    /**
     * @var integer RASP and memory shell injection usage, attack type, vul.rasp_attacktype_mapping attack_type_id field
     */
    public $AttackType;

    /**
     * @var integer rasp and memory shell injection usage, match mode, 0: exact match, 1: prefix match, 2: suffix matching, 4: arbitrary matching, 5: partial matching, 6: regular expression matching.
     */
    public $MatchMode;

    /**
     * @var integer Effective asset type. 0: Host disabled. 1: Host enabled.
     */
    public $CWPEffective;

    /**
     * @var integer 0: a set of quuid 1: ALL the Real Server with host authorization
     */
    public $CWPScope;

    /**
     * @var array Designate the effective host machine
     */
    public $CWPQuuids;

    /**
     * @var integer Effective asset type. 0: Container disabled. 1: Container enabled.
     */
    public $TCSSEffective;

    /**
     * @var integer 0: a set of quuid 1: ALL the node with container authorization
     */
    public $TCSSScope;

    /**
     * @var array Designate the container node to take effect
     */
    public $TCSSQuuids;

    /**
     * @var integer Effective asset type. 0: Super node disabled. 1: Super node enabled.
     */
    public $EksEffective;

    /**
     * @var integer 0: a set of quuid 1: ALL the super node with container authorization
     */
    public $EksScope;

    /**
     * @var array Designate the super node where the container takes effect
     */
    public $EksNodeUniqueID;

    /**
     * @var string Application asset. If global, all hosts. Otherwise, the number of selected host servers.
     */
    public $CWPMachinesNums;

    /**
     * @var string Application asset. If global, all containers host nodes. Otherwise, select the number of host nodes.
     */
    public $TCSSMachinesNums;

    /**
     * @var string Application asset. If global, all super nodes. Otherwise, select the number of nodes.
     */
    public $EksMachinesNums;

    /**
     * @param integer $Id Rule ID
     * @param integer $LogicalSymbol Logical operator. 0: 5 valid regular expression logical ANDs; 1: logical OR.
     * @param string $ClassNameRegexp Class name regular expression, which is not matched if empty.
     * @param string $SuperClassNameRegexp Parent class name regular expression, which is not matched if empty.
     * @param string $InterfacesRegexp Inherited interface regular expression, which is not matched if empty.
     * @param string $AnnotationsRegexp Annotation regular expression, which is not matched if empty.
     * @param string $LoaderClassNameRegexp Associated class loader regular expression, which is not matched if empty.
     * @param string $Source Allowlist type, rasp: vulnerability defense, memshell_scan: Java Webshell scan, memshell_inject: memory shell injection
     * @param integer $Status Status (0: valid, 1: deleted, 2: invalid (enabling switch off)).
     * @param string $CreateTime Creation time
     * @param string $ModifyTime Modification time
     * @param integer $HandleHistory Java Webshell scan usage, process historical events, 0: do not process 1: process
     * @param string $Content rasp and memory shell injection usage, match content, POC, can be a regular expression (MatchMode=5) or a string.
     * @param string $IP rasp and memory shell injection usage, attack source ip, leave unset for all sources, multiple allowed, can have ip ranges, such as: 192.168.57.1/24;172.17.0.1
     * @param string $PolicyName Rule name
     * @param integer $FilterType rasp and memory shell injection usage, allowlisting method, 0: malicious feature allowlisting, 1: request URL allowlisting
     * @param integer $AttackType RASP and memory shell injection usage, attack type, vul.rasp_attacktype_mapping attack_type_id field
     * @param integer $MatchMode rasp and memory shell injection usage, match mode, 0: exact match, 1: prefix match, 2: suffix matching, 4: arbitrary matching, 5: partial matching, 6: regular expression matching.
     * @param integer $CWPEffective Effective asset type. 0: Host disabled. 1: Host enabled.
     * @param integer $CWPScope 0: a set of quuid 1: ALL the Real Server with host authorization
     * @param array $CWPQuuids Designate the effective host machine
     * @param integer $TCSSEffective Effective asset type. 0: Container disabled. 1: Container enabled.
     * @param integer $TCSSScope 0: a set of quuid 1: ALL the node with container authorization
     * @param array $TCSSQuuids Designate the container node to take effect
     * @param integer $EksEffective Effective asset type. 0: Super node disabled. 1: Super node enabled.
     * @param integer $EksScope 0: a set of quuid 1: ALL the super node with container authorization
     * @param array $EksNodeUniqueID Designate the super node where the container takes effect
     * @param string $CWPMachinesNums Application asset. If global, all hosts. Otherwise, the number of selected host servers.
     * @param string $TCSSMachinesNums Application asset. If global, all containers host nodes. Otherwise, select the number of host nodes.
     * @param string $EksMachinesNums Application asset. If global, all super nodes. Otherwise, select the number of nodes.
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

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
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

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("MatchMode",$param) and $param["MatchMode"] !== null) {
            $this->MatchMode = $param["MatchMode"];
        }

        if (array_key_exists("CWPEffective",$param) and $param["CWPEffective"] !== null) {
            $this->CWPEffective = $param["CWPEffective"];
        }

        if (array_key_exists("CWPScope",$param) and $param["CWPScope"] !== null) {
            $this->CWPScope = $param["CWPScope"];
        }

        if (array_key_exists("CWPQuuids",$param) and $param["CWPQuuids"] !== null) {
            $this->CWPQuuids = $param["CWPQuuids"];
        }

        if (array_key_exists("TCSSEffective",$param) and $param["TCSSEffective"] !== null) {
            $this->TCSSEffective = $param["TCSSEffective"];
        }

        if (array_key_exists("TCSSScope",$param) and $param["TCSSScope"] !== null) {
            $this->TCSSScope = $param["TCSSScope"];
        }

        if (array_key_exists("TCSSQuuids",$param) and $param["TCSSQuuids"] !== null) {
            $this->TCSSQuuids = $param["TCSSQuuids"];
        }

        if (array_key_exists("EksEffective",$param) and $param["EksEffective"] !== null) {
            $this->EksEffective = $param["EksEffective"];
        }

        if (array_key_exists("EksScope",$param) and $param["EksScope"] !== null) {
            $this->EksScope = $param["EksScope"];
        }

        if (array_key_exists("EksNodeUniqueID",$param) and $param["EksNodeUniqueID"] !== null) {
            $this->EksNodeUniqueID = $param["EksNodeUniqueID"];
        }

        if (array_key_exists("CWPMachinesNums",$param) and $param["CWPMachinesNums"] !== null) {
            $this->CWPMachinesNums = $param["CWPMachinesNums"];
        }

        if (array_key_exists("TCSSMachinesNums",$param) and $param["TCSSMachinesNums"] !== null) {
            $this->TCSSMachinesNums = $param["TCSSMachinesNums"];
        }

        if (array_key_exists("EksMachinesNums",$param) and $param["EksMachinesNums"] !== null) {
            $this->EksMachinesNums = $param["EksMachinesNums"];
        }
    }
}
