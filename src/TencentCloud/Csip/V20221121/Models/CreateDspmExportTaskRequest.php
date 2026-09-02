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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDspmExportTask request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method integer getDangerLevel() Obtain <p>Risk level (0-Safe, 1-Low risk, 2-Medium-risk, 3-High-risk, -1-All)</p>
 * @method void setDangerLevel(integer $DangerLevel) Set <p>Risk level (0-Safe, 1-Low risk, 2-Medium-risk, 3-High-risk, -1-All)</p>
 * @method string getDbName() Obtain <p>Database name</p>
 * @method void setDbName(string $DbName) Set <p>Database name</p>
 * @method integer getDbPort() Obtain <p>Database port</p>
 * @method void setDbPort(integer $DbPort) Set <p>Database port</p>
 * @method string getDbIp() Obtain <p>Database IP</p>
 * @method void setDbIp(string $DbIp) Set <p>Database IP</p>
 * @method integer getAssetsId() Obtain <p>Asset ID.</p>
 * @method void setAssetsId(integer $AssetsId) Set <p>Asset ID.</p>
 * @method string getSessionId() Obtain <p>Session ID</p>
 * @method void setSessionId(string $SessionId) Set <p>Session ID</p>
 * @method string getClientSideIp() Obtain <p>Client IP address</p>
 * @method void setClientSideIp(string $ClientSideIp) Set <p>Client IP address</p>
 * @method integer getEndTime() Obtain <p>End time.</p>
 * @method void setEndTime(integer $EndTime) Set <p>End time.</p>
 * @method integer getHitRule() Obtain <p>Hit rule.</p>
 * @method void setHitRule(integer $HitRule) Set <p>Hit rule.</p>
 * @method integer getStartTime() Obtain <p>Start time.</p>
 * @method void setStartTime(integer $StartTime) Set <p>Start time.</p>
 * @method string getFuzzySearch() Obtain <p>Fuzzy query</p>
 * @method void setFuzzySearch(string $FuzzySearch) Set <p>Fuzzy query</p>
 * @method string getUserName() Obtain <p>Username.</p>
 * @method void setUserName(string $UserName) Set <p>Username.</p>
 * @method string getClientName() Obtain <p>Client</p>
 * @method void setClientName(string $ClientName) Set <p>Client</p>
 * @method array getSourceTypes() Obtain <p>Traffic source. Parameter value: Agent/Proxy/empty. If Agent is passed, agent logs will be returned. If Proxy is passed, proxy logs will be returned. If both or neither are passed, return all.</p>
 * @method void setSourceTypes(array $SourceTypes) Set <p>Traffic source. Parameter value: Agent/Proxy/empty. If Agent is passed, agent logs will be returned. If Proxy is passed, proxy logs will be returned. If both or neither are passed, return all.</p>
 * @method string getTableName() Obtain <p>Table name, length limited to 64. For multiple table name queries, use space-separated.</p>
 * @method void setTableName(string $TableName) Set <p>Table name, length limited to 64. For multiple table name queries, use space-separated.</p>
 * @method string getFieldName() Obtain <p>Field name, length limited to 64. For multiple field name queries, use space-separated.</p>
 * @method void setFieldName(string $FieldName) Set <p>Field name, length limited to 64. For multiple field name queries, use space-separated.</p>
 * @method array getSqlMainTypes() Obtain <p>Main SQL types: DDL, DML, DCL, TCL</p>
 * @method void setSqlMainTypes(array $SqlMainTypes) Set <p>Main SQL types: DDL, DML, DCL, TCL</p>
 * @method string getSqlType() Obtain <p>Operation type</p>
 * @method void setSqlType(string $SqlType) Set <p>Operation type</p>
 * @method integer getRowNumMin() Obtain <p>Minimum number of affected rows</p>
 * @method void setRowNumMin(integer $RowNumMin) Set <p>Minimum number of affected rows</p>
 * @method integer getRowNumMax() Obtain <p>Maximum number of affected rows</p>
 * @method void setRowNumMax(integer $RowNumMax) Set <p>Maximum number of affected rows</p>
 * @method array getDbTypes() Obtain <p>Database type</p>
 * @method void setDbTypes(array $DbTypes) Set <p>Database type</p>
 * @method integer getRetNo() Obtain <p>Response code</p>
 * @method void setRetNo(integer $RetNo) Set <p>Response code</p>
 * @method string getClientDriverName() Obtain <p>Client tool</p>
 * @method void setClientDriverName(string $ClientDriverName) Set <p>Client tool</p>
 * @method integer getClientPort() Obtain <p>Client port</p>
 * @method void setClientPort(integer $ClientPort) Set <p>Client port</p>
 * @method string getLogId() Obtain <p>Audit log ID.</p>
 * @method void setLogId(string $LogId) Set <p>Audit log ID.</p>
 * @method array getDangerLevels() Obtain <p>Risk level array (0-secure, 1-low risk, 2-medium-risk, 3-high-risk). To select all, import all values. If empty, see the DangerLevel input parameter.</p>
 * @method void setDangerLevels(array $DangerLevels) Set <p>Risk level array (0-secure, 1-low risk, 2-medium-risk, 3-high-risk). To select all, import all values. If empty, see the DangerLevel input parameter.</p>
 * @method string getSensitiveCategoryRule() Obtain <p>Field classification</p>
 * @method void setSensitiveCategoryRule(string $SensitiveCategoryRule) Set <p>Field classification</p>
 * @method string getSensitiveLevelRisk() Obtain <p>Field classification</p>
 * @method void setSensitiveLevelRisk(string $SensitiveLevelRisk) Set <p>Field classification</p>
 * @method integer getTrxId() Obtain <p>Transaction Id.</p>
 * @method void setTrxId(integer $TrxId) Set <p>Transaction Id.</p>
 * @method string getClientMac() Obtain <p>clientMac</p>
 * @method void setClientMac(string $ClientMac) Set <p>clientMac</p>
 */
class CreateDspmExportTaskRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>Risk level (0-Safe, 1-Low risk, 2-Medium-risk, 3-High-risk, -1-All)</p>
     */
    public $DangerLevel;

    /**
     * @var string <p>Database name</p>
     */
    public $DbName;

    /**
     * @var integer <p>Database port</p>
     */
    public $DbPort;

    /**
     * @var string <p>Database IP</p>
     */
    public $DbIp;

    /**
     * @var integer <p>Asset ID.</p>
     */
    public $AssetsId;

    /**
     * @var string <p>Session ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>Client IP address</p>
     */
    public $ClientSideIp;

    /**
     * @var integer <p>End time.</p>
     */
    public $EndTime;

    /**
     * @var integer <p>Hit rule.</p>
     */
    public $HitRule;

    /**
     * @var integer <p>Start time.</p>
     */
    public $StartTime;

    /**
     * @var string <p>Fuzzy query</p>
     */
    public $FuzzySearch;

    /**
     * @var string <p>Username.</p>
     */
    public $UserName;

    /**
     * @var string <p>Client</p>
     */
    public $ClientName;

    /**
     * @var array <p>Traffic source. Parameter value: Agent/Proxy/empty. If Agent is passed, agent logs will be returned. If Proxy is passed, proxy logs will be returned. If both or neither are passed, return all.</p>
     */
    public $SourceTypes;

    /**
     * @var string <p>Table name, length limited to 64. For multiple table name queries, use space-separated.</p>
     */
    public $TableName;

    /**
     * @var string <p>Field name, length limited to 64. For multiple field name queries, use space-separated.</p>
     */
    public $FieldName;

    /**
     * @var array <p>Main SQL types: DDL, DML, DCL, TCL</p>
     */
    public $SqlMainTypes;

    /**
     * @var string <p>Operation type</p>
     */
    public $SqlType;

    /**
     * @var integer <p>Minimum number of affected rows</p>
     */
    public $RowNumMin;

    /**
     * @var integer <p>Maximum number of affected rows</p>
     */
    public $RowNumMax;

    /**
     * @var array <p>Database type</p>
     */
    public $DbTypes;

    /**
     * @var integer <p>Response code</p>
     */
    public $RetNo;

    /**
     * @var string <p>Client tool</p>
     */
    public $ClientDriverName;

    /**
     * @var integer <p>Client port</p>
     */
    public $ClientPort;

    /**
     * @var string <p>Audit log ID.</p>
     */
    public $LogId;

    /**
     * @var array <p>Risk level array (0-secure, 1-low risk, 2-medium-risk, 3-high-risk). To select all, import all values. If empty, see the DangerLevel input parameter.</p>
     */
    public $DangerLevels;

    /**
     * @var string <p>Field classification</p>
     */
    public $SensitiveCategoryRule;

    /**
     * @var string <p>Field classification</p>
     */
    public $SensitiveLevelRisk;

    /**
     * @var integer <p>Transaction Id.</p>
     */
    public $TrxId;

    /**
     * @var string <p>clientMac</p>
     */
    public $ClientMac;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param integer $DangerLevel <p>Risk level (0-Safe, 1-Low risk, 2-Medium-risk, 3-High-risk, -1-All)</p>
     * @param string $DbName <p>Database name</p>
     * @param integer $DbPort <p>Database port</p>
     * @param string $DbIp <p>Database IP</p>
     * @param integer $AssetsId <p>Asset ID.</p>
     * @param string $SessionId <p>Session ID</p>
     * @param string $ClientSideIp <p>Client IP address</p>
     * @param integer $EndTime <p>End time.</p>
     * @param integer $HitRule <p>Hit rule.</p>
     * @param integer $StartTime <p>Start time.</p>
     * @param string $FuzzySearch <p>Fuzzy query</p>
     * @param string $UserName <p>Username.</p>
     * @param string $ClientName <p>Client</p>
     * @param array $SourceTypes <p>Traffic source. Parameter value: Agent/Proxy/empty. If Agent is passed, agent logs will be returned. If Proxy is passed, proxy logs will be returned. If both or neither are passed, return all.</p>
     * @param string $TableName <p>Table name, length limited to 64. For multiple table name queries, use space-separated.</p>
     * @param string $FieldName <p>Field name, length limited to 64. For multiple field name queries, use space-separated.</p>
     * @param array $SqlMainTypes <p>Main SQL types: DDL, DML, DCL, TCL</p>
     * @param string $SqlType <p>Operation type</p>
     * @param integer $RowNumMin <p>Minimum number of affected rows</p>
     * @param integer $RowNumMax <p>Maximum number of affected rows</p>
     * @param array $DbTypes <p>Database type</p>
     * @param integer $RetNo <p>Response code</p>
     * @param string $ClientDriverName <p>Client tool</p>
     * @param integer $ClientPort <p>Client port</p>
     * @param string $LogId <p>Audit log ID.</p>
     * @param array $DangerLevels <p>Risk level array (0-secure, 1-low risk, 2-medium-risk, 3-high-risk). To select all, import all values. If empty, see the DangerLevel input parameter.</p>
     * @param string $SensitiveCategoryRule <p>Field classification</p>
     * @param string $SensitiveLevelRisk <p>Field classification</p>
     * @param integer $TrxId <p>Transaction Id.</p>
     * @param string $ClientMac <p>clientMac</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("DangerLevel",$param) and $param["DangerLevel"] !== null) {
            $this->DangerLevel = $param["DangerLevel"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("DbPort",$param) and $param["DbPort"] !== null) {
            $this->DbPort = $param["DbPort"];
        }

        if (array_key_exists("DbIp",$param) and $param["DbIp"] !== null) {
            $this->DbIp = $param["DbIp"];
        }

        if (array_key_exists("AssetsId",$param) and $param["AssetsId"] !== null) {
            $this->AssetsId = $param["AssetsId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ClientSideIp",$param) and $param["ClientSideIp"] !== null) {
            $this->ClientSideIp = $param["ClientSideIp"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("HitRule",$param) and $param["HitRule"] !== null) {
            $this->HitRule = $param["HitRule"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FuzzySearch",$param) and $param["FuzzySearch"] !== null) {
            $this->FuzzySearch = $param["FuzzySearch"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("ClientName",$param) and $param["ClientName"] !== null) {
            $this->ClientName = $param["ClientName"];
        }

        if (array_key_exists("SourceTypes",$param) and $param["SourceTypes"] !== null) {
            $this->SourceTypes = $param["SourceTypes"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("SqlMainTypes",$param) and $param["SqlMainTypes"] !== null) {
            $this->SqlMainTypes = $param["SqlMainTypes"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("RowNumMin",$param) and $param["RowNumMin"] !== null) {
            $this->RowNumMin = $param["RowNumMin"];
        }

        if (array_key_exists("RowNumMax",$param) and $param["RowNumMax"] !== null) {
            $this->RowNumMax = $param["RowNumMax"];
        }

        if (array_key_exists("DbTypes",$param) and $param["DbTypes"] !== null) {
            $this->DbTypes = $param["DbTypes"];
        }

        if (array_key_exists("RetNo",$param) and $param["RetNo"] !== null) {
            $this->RetNo = $param["RetNo"];
        }

        if (array_key_exists("ClientDriverName",$param) and $param["ClientDriverName"] !== null) {
            $this->ClientDriverName = $param["ClientDriverName"];
        }

        if (array_key_exists("ClientPort",$param) and $param["ClientPort"] !== null) {
            $this->ClientPort = $param["ClientPort"];
        }

        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("DangerLevels",$param) and $param["DangerLevels"] !== null) {
            $this->DangerLevels = $param["DangerLevels"];
        }

        if (array_key_exists("SensitiveCategoryRule",$param) and $param["SensitiveCategoryRule"] !== null) {
            $this->SensitiveCategoryRule = $param["SensitiveCategoryRule"];
        }

        if (array_key_exists("SensitiveLevelRisk",$param) and $param["SensitiveLevelRisk"] !== null) {
            $this->SensitiveLevelRisk = $param["SensitiveLevelRisk"];
        }

        if (array_key_exists("TrxId",$param) and $param["TrxId"] !== null) {
            $this->TrxId = $param["TrxId"];
        }

        if (array_key_exists("ClientMac",$param) and $param["ClientMac"] !== null) {
            $this->ClientMac = $param["ClientMac"];
        }
    }
}
