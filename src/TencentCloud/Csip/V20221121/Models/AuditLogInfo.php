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
 * Audit log list information.
 *
 * @method float getAiScore() Obtain AI score.
 * @method void setAiScore(float $AiScore) Set AI score.
 * @method string getAppUser() Obtain Application user.
 * @method void setAppUser(string $AppUser) Set Application user.
 * @method string getBackPacket() Obtain Backup data package.
 * @method void setBackPacket(string $BackPacket) Set Backup data package.
 * @method string getClientIp() Obtain Client IP
 * @method void setClientIp(string $ClientIp) Set Client IP
 * @method string getClientMac() Obtain Client Mac.
 * @method void setClientMac(string $ClientMac) Set Client Mac.
 * @method string getClientName() Obtain Terminal name. When the value is Proxy, it indicates CASB proxy traffic. Otherwise, it indicates agent traffic.
 * @method void setClientName(string $ClientName) Set Terminal name. When the value is Proxy, it indicates CASB proxy traffic. Otherwise, it indicates agent traffic.
 * @method string getClientUser() Obtain Client user.
 * @method void setClientUser(string $ClientUser) Set Client user.
 * @method integer getClientPort() Obtain Client port
 * @method void setClientPort(integer $ClientPort) Set Client port
 * @method integer getDangerLevel() Obtain Risk level
 * @method void setDangerLevel(integer $DangerLevel) Set Risk level
 * @method string getDbIp() Obtain Database IP.
 * @method void setDbIp(string $DbIp) Set Database IP.
 * @method string getDbName() Obtain Database name.
 * @method void setDbName(string $DbName) Set Database name.
 * @method integer getDbPort() Obtain Database port.
 * @method void setDbPort(integer $DbPort) Set Database port.
 * @method string getDbUser() Obtain Database user
 * @method void setDbUser(string $DbUser) Set Database user
 * @method integer getEffectRow() Obtain Number of affected rows
 * @method void setEffectRow(integer $EffectRow) Set Number of affected rows
 * @method integer getExecTime() Obtain Execution time, unit: ms
 * @method void setExecTime(integer $ExecTime) Set Execution time, unit: ms
 * @method string getHitRule() Obtain Matched rule
 * @method void setHitRule(string $HitRule) Set Matched rule
 * @method integer getId() Obtain Log ID
 * @method void setId(integer $Id) Set Log ID
 * @method integer getInstanceId() Obtain Data asset name
 * @method void setInstanceId(integer $InstanceId) Set Data asset name
 * @method string getInstanceName() Obtain Audit unit name.
 * @method void setInstanceName(string $InstanceName) Set Audit unit name.
 * @method string getOpSql() Obtain Operational statement (SQL statement).
 * @method void setOpSql(string $OpSql) Set Operational statement (SQL statement).
 * @method integer getOpTime() Obtain Operation time (time).
 * @method void setOpTime(integer $OpTime) Set Operation time (time).
 * @method string getRetMsg() Obtain message
 * @method void setRetMsg(string $RetMsg) Set message
 * @method integer getRetNo() Obtain code
 * @method void setRetNo(integer $RetNo) Set code
 * @method string getSessionId() Obtain Session ID
 * @method void setSessionId(string $SessionId) Set Session ID
 * @method string getSqlType() Obtain Operation type.
 * @method void setSqlType(string $SqlType) Set Operation type.
 * @method string getTableName() Obtain Table name
 * @method void setTableName(string $TableName) Set Table name
 * @method string getAssetName() Obtain Data asset name
 * @method void setAssetName(string $AssetName) Set Data asset name
 * @method array getHitRules() Obtain Rule set.
 * @method void setHitRules(array $HitRules) Set Rule set.
 * @method string getSourceType() Obtain Traffic source
 * @method void setSourceType(string $SourceType) Set Traffic source
 * @method string getReqId() Obtain Single audit log ID.
 * @method void setReqId(string $ReqId) Set Single audit log ID.
 * @method string getSqlMainType() Obtain Main SQL types: DML, DDL, DCL, and TCL.
 * @method void setSqlMainType(string $SqlMainType) Set Main SQL types: DML, DDL, DCL, and TCL.
 * @method array getTableNames() Obtain Table name collection.
 * @method void setTableNames(array $TableNames) Set Table name collection.
 * @method array getFieldNames() Obtain Field name collection
 * @method void setFieldNames(array $FieldNames) Set Field name collection
 * @method string getFieldName() Obtain Field name
 * @method void setFieldName(string $FieldName) Set Field name
 * @method string getDbType() Obtain Database type
 * @method void setDbType(string $DbType) Set Database type
 * @method string getClientDriverName() Obtain Client tool.
 * @method void setClientDriverName(string $ClientDriverName) Set Client tool.
 * @method Location getLocation() Obtain Location information
 * @method void setLocation(Location $Location) Set Location information
 * @method array getFieldDetails() Obtain Field information (contains sensitive information).
 * @method void setFieldDetails(array $FieldDetails) Set Field information (contains sensitive information).
 * @method integer getAppId() Obtain app id of the account that owns the asset
 * @method void setAppId(integer $AppId) Set app id of the account that owns the asset
 * @method string getNickName() Obtain Account nickname
 * @method void setNickName(string $NickName) Set Account nickname
 * @method string getUin() Obtain Account uin of the asset owner
 * @method void setUin(string $Uin) Set Account uin of the asset owner
 */
class AuditLogInfo extends AbstractModel
{
    /**
     * @var float AI score.
     */
    public $AiScore;

    /**
     * @var string Application user.
     */
    public $AppUser;

    /**
     * @var string Backup data package.
     */
    public $BackPacket;

    /**
     * @var string Client IP
     */
    public $ClientIp;

    /**
     * @var string Client Mac.
     */
    public $ClientMac;

    /**
     * @var string Terminal name. When the value is Proxy, it indicates CASB proxy traffic. Otherwise, it indicates agent traffic.
     */
    public $ClientName;

    /**
     * @var string Client user.
     */
    public $ClientUser;

    /**
     * @var integer Client port
     */
    public $ClientPort;

    /**
     * @var integer Risk level
     */
    public $DangerLevel;

    /**
     * @var string Database IP.
     */
    public $DbIp;

    /**
     * @var string Database name.
     */
    public $DbName;

    /**
     * @var integer Database port.
     */
    public $DbPort;

    /**
     * @var string Database user
     */
    public $DbUser;

    /**
     * @var integer Number of affected rows
     */
    public $EffectRow;

    /**
     * @var integer Execution time, unit: ms
     */
    public $ExecTime;

    /**
     * @var string Matched rule
     */
    public $HitRule;

    /**
     * @var integer Log ID
     */
    public $Id;

    /**
     * @var integer Data asset name
     */
    public $InstanceId;

    /**
     * @var string Audit unit name.
     */
    public $InstanceName;

    /**
     * @var string Operational statement (SQL statement).
     */
    public $OpSql;

    /**
     * @var integer Operation time (time).
     */
    public $OpTime;

    /**
     * @var string message
     */
    public $RetMsg;

    /**
     * @var integer code
     */
    public $RetNo;

    /**
     * @var string Session ID
     */
    public $SessionId;

    /**
     * @var string Operation type.
     */
    public $SqlType;

    /**
     * @var string Table name
     */
    public $TableName;

    /**
     * @var string Data asset name
     */
    public $AssetName;

    /**
     * @var array Rule set.
     */
    public $HitRules;

    /**
     * @var string Traffic source
     */
    public $SourceType;

    /**
     * @var string Single audit log ID.
     */
    public $ReqId;

    /**
     * @var string Main SQL types: DML, DDL, DCL, and TCL.
     */
    public $SqlMainType;

    /**
     * @var array Table name collection.
     */
    public $TableNames;

    /**
     * @var array Field name collection
     */
    public $FieldNames;

    /**
     * @var string Field name
     */
    public $FieldName;

    /**
     * @var string Database type
     */
    public $DbType;

    /**
     * @var string Client tool.
     */
    public $ClientDriverName;

    /**
     * @var Location Location information
     */
    public $Location;

    /**
     * @var array Field information (contains sensitive information).
     */
    public $FieldDetails;

    /**
     * @var integer app id of the account that owns the asset
     */
    public $AppId;

    /**
     * @var string Account nickname
     */
    public $NickName;

    /**
     * @var string Account uin of the asset owner
     */
    public $Uin;

    /**
     * @param float $AiScore AI score.
     * @param string $AppUser Application user.
     * @param string $BackPacket Backup data package.
     * @param string $ClientIp Client IP
     * @param string $ClientMac Client Mac.
     * @param string $ClientName Terminal name. When the value is Proxy, it indicates CASB proxy traffic. Otherwise, it indicates agent traffic.
     * @param string $ClientUser Client user.
     * @param integer $ClientPort Client port
     * @param integer $DangerLevel Risk level
     * @param string $DbIp Database IP.
     * @param string $DbName Database name.
     * @param integer $DbPort Database port.
     * @param string $DbUser Database user
     * @param integer $EffectRow Number of affected rows
     * @param integer $ExecTime Execution time, unit: ms
     * @param string $HitRule Matched rule
     * @param integer $Id Log ID
     * @param integer $InstanceId Data asset name
     * @param string $InstanceName Audit unit name.
     * @param string $OpSql Operational statement (SQL statement).
     * @param integer $OpTime Operation time (time).
     * @param string $RetMsg message
     * @param integer $RetNo code
     * @param string $SessionId Session ID
     * @param string $SqlType Operation type.
     * @param string $TableName Table name
     * @param string $AssetName Data asset name
     * @param array $HitRules Rule set.
     * @param string $SourceType Traffic source
     * @param string $ReqId Single audit log ID.
     * @param string $SqlMainType Main SQL types: DML, DDL, DCL, and TCL.
     * @param array $TableNames Table name collection.
     * @param array $FieldNames Field name collection
     * @param string $FieldName Field name
     * @param string $DbType Database type
     * @param string $ClientDriverName Client tool.
     * @param Location $Location Location information
     * @param array $FieldDetails Field information (contains sensitive information).
     * @param integer $AppId app id of the account that owns the asset
     * @param string $NickName Account nickname
     * @param string $Uin Account uin of the asset owner
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
        if (array_key_exists("AiScore",$param) and $param["AiScore"] !== null) {
            $this->AiScore = $param["AiScore"];
        }

        if (array_key_exists("AppUser",$param) and $param["AppUser"] !== null) {
            $this->AppUser = $param["AppUser"];
        }

        if (array_key_exists("BackPacket",$param) and $param["BackPacket"] !== null) {
            $this->BackPacket = $param["BackPacket"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("ClientMac",$param) and $param["ClientMac"] !== null) {
            $this->ClientMac = $param["ClientMac"];
        }

        if (array_key_exists("ClientName",$param) and $param["ClientName"] !== null) {
            $this->ClientName = $param["ClientName"];
        }

        if (array_key_exists("ClientUser",$param) and $param["ClientUser"] !== null) {
            $this->ClientUser = $param["ClientUser"];
        }

        if (array_key_exists("ClientPort",$param) and $param["ClientPort"] !== null) {
            $this->ClientPort = $param["ClientPort"];
        }

        if (array_key_exists("DangerLevel",$param) and $param["DangerLevel"] !== null) {
            $this->DangerLevel = $param["DangerLevel"];
        }

        if (array_key_exists("DbIp",$param) and $param["DbIp"] !== null) {
            $this->DbIp = $param["DbIp"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("DbPort",$param) and $param["DbPort"] !== null) {
            $this->DbPort = $param["DbPort"];
        }

        if (array_key_exists("DbUser",$param) and $param["DbUser"] !== null) {
            $this->DbUser = $param["DbUser"];
        }

        if (array_key_exists("EffectRow",$param) and $param["EffectRow"] !== null) {
            $this->EffectRow = $param["EffectRow"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("HitRule",$param) and $param["HitRule"] !== null) {
            $this->HitRule = $param["HitRule"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("OpSql",$param) and $param["OpSql"] !== null) {
            $this->OpSql = $param["OpSql"];
        }

        if (array_key_exists("OpTime",$param) and $param["OpTime"] !== null) {
            $this->OpTime = $param["OpTime"];
        }

        if (array_key_exists("RetMsg",$param) and $param["RetMsg"] !== null) {
            $this->RetMsg = $param["RetMsg"];
        }

        if (array_key_exists("RetNo",$param) and $param["RetNo"] !== null) {
            $this->RetNo = $param["RetNo"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("HitRules",$param) and $param["HitRules"] !== null) {
            $this->HitRules = [];
            foreach ($param["HitRules"] as $key => $value){
                $obj = new HitRules();
                $obj->deserialize($value);
                array_push($this->HitRules, $obj);
            }
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("ReqId",$param) and $param["ReqId"] !== null) {
            $this->ReqId = $param["ReqId"];
        }

        if (array_key_exists("SqlMainType",$param) and $param["SqlMainType"] !== null) {
            $this->SqlMainType = $param["SqlMainType"];
        }

        if (array_key_exists("TableNames",$param) and $param["TableNames"] !== null) {
            $this->TableNames = $param["TableNames"];
        }

        if (array_key_exists("FieldNames",$param) and $param["FieldNames"] !== null) {
            $this->FieldNames = $param["FieldNames"];
        }

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("ClientDriverName",$param) and $param["ClientDriverName"] !== null) {
            $this->ClientDriverName = $param["ClientDriverName"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new Location();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("FieldDetails",$param) and $param["FieldDetails"] !== null) {
            $this->FieldDetails = [];
            foreach ($param["FieldDetails"] as $key => $value){
                $obj = new TableField();
                $obj->deserialize($value);
                array_push($this->FieldDetails, $obj);
            }
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
