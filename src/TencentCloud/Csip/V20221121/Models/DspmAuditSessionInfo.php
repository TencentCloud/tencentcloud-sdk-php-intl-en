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
 * Audit session list information.
 *
 * @method integer getSqlCount() Obtain <p>Audit log count.</p>
 * @method void setSqlCount(integer $SqlCount) Set <p>Audit log count.</p>
 * @method integer getLogoutTime() Obtain <p>Logout time.</p>
 * @method void setLogoutTime(integer $LogoutTime) Set <p>Logout time.</p>
 * @method string getClientIp() Obtain <p>Client IP</p>
 * @method void setClientIp(string $ClientIp) Set <p>Client IP</p>
 * @method integer getClientPort() Obtain <p>Client port</p>
 * @method void setClientPort(integer $ClientPort) Set <p>Client port</p>
 * @method string getDbIp() Obtain <p>Database IP</p>
 * @method void setDbIp(string $DbIp) Set <p>Database IP</p>
 * @method string getDbName() Obtain <p>Database name</p>
 * @method void setDbName(string $DbName) Set <p>Database name</p>
 * @method integer getDbPort() Obtain <p>Database port</p>
 * @method void setDbPort(integer $DbPort) Set <p>Database port</p>
 * @method string getDbUser() Obtain <p>Database users.</p>
 * @method void setDbUser(string $DbUser) Set <p>Database users.</p>
 * @method integer getInstanceId() Obtain <p>Audit unit ID</p>
 * @method void setInstanceId(integer $InstanceId) Set <p>Audit unit ID</p>
 * @method integer getOpTime() Obtain <p>Operation time.</p>
 * @method void setOpTime(integer $OpTime) Set <p>Operation time.</p>
 * @method integer getRetNo() Obtain <p>Status code</p>
 * @method void setRetNo(integer $RetNo) Set <p>Status code</p>
 * @method string getSessionId() Obtain <p>Session Id</p>
 * @method void setSessionId(string $SessionId) Set <p>Session Id</p>
 * @method integer getLoginTime() Obtain <p>Login time.</p>
 * @method void setLoginTime(integer $LoginTime) Set <p>Login time.</p>
 * @method string getInstanceName() Obtain <p>Data asset name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Data asset name.</p>
 * @method string getAssetName() Obtain <p>Data asset name.</p>
 * @method void setAssetName(string $AssetName) Set <p>Data asset name.</p>
 * @method string getSourceType() Obtain <p>Traffic source.</p>
 * @method void setSourceType(string $SourceType) Set <p>Traffic source.</p>
 * @method string getSourceTypeEn() Obtain <p>Traffic source in English</p>
 * @method void setSourceTypeEn(string $SourceTypeEn) Set <p>Traffic source in English</p>
 * @method integer getAppId() Obtain <p>app id of the account associated with the asset</p>
 * @method void setAppId(integer $AppId) Set <p>app id of the account associated with the asset</p>
 * @method string getSourceTypeEnDisplayName() Obtain <p>Traffic source.</p>
 * @method void setSourceTypeEnDisplayName(string $SourceTypeEnDisplayName) Set <p>Traffic source.</p>
 * @method string getNickName() Obtain <p>Nickname</p>
 * @method void setNickName(string $NickName) Set <p>Nickname</p>
 * @method string getUin() Obtain <p>uid</p>
 * @method void setUin(string $Uin) Set <p>uid</p>
 * @method string getDbType() Obtain <p>Database type</p><p>Enumeration values:</p><ul><li>MongoDB: mongodb</li></ul>
 * @method void setDbType(string $DbType) Set <p>Database type</p><p>Enumeration values:</p><ul><li>MongoDB: mongodb</li></ul>
 * @method string getAssetType() Obtain <p>Asset type</p><p>Enumeration values:</p><ul><li>cdb: mysql</li><li>mongodb: mongodb</li></ul>
 * @method void setAssetType(string $AssetType) Set <p>Asset type</p><p>Enumeration values:</p><ul><li>cdb: mysql</li><li>mongodb: mongodb</li></ul>
 */
class DspmAuditSessionInfo extends AbstractModel
{
    /**
     * @var integer <p>Audit log count.</p>
     */
    public $SqlCount;

    /**
     * @var integer <p>Logout time.</p>
     */
    public $LogoutTime;

    /**
     * @var string <p>Client IP</p>
     */
    public $ClientIp;

    /**
     * @var integer <p>Client port</p>
     */
    public $ClientPort;

    /**
     * @var string <p>Database IP</p>
     */
    public $DbIp;

    /**
     * @var string <p>Database name</p>
     */
    public $DbName;

    /**
     * @var integer <p>Database port</p>
     */
    public $DbPort;

    /**
     * @var string <p>Database users.</p>
     */
    public $DbUser;

    /**
     * @var integer <p>Audit unit ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Operation time.</p>
     */
    public $OpTime;

    /**
     * @var integer <p>Status code</p>
     */
    public $RetNo;

    /**
     * @var string <p>Session Id</p>
     */
    public $SessionId;

    /**
     * @var integer <p>Login time.</p>
     */
    public $LoginTime;

    /**
     * @var string <p>Data asset name.</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Data asset name.</p>
     */
    public $AssetName;

    /**
     * @var string <p>Traffic source.</p>
     */
    public $SourceType;

    /**
     * @var string <p>Traffic source in English</p>
     */
    public $SourceTypeEn;

    /**
     * @var integer <p>app id of the account associated with the asset</p>
     */
    public $AppId;

    /**
     * @var string <p>Traffic source.</p>
     */
    public $SourceTypeEnDisplayName;

    /**
     * @var string <p>Nickname</p>
     */
    public $NickName;

    /**
     * @var string <p>uid</p>
     */
    public $Uin;

    /**
     * @var string <p>Database type</p><p>Enumeration values:</p><ul><li>MongoDB: mongodb</li></ul>
     */
    public $DbType;

    /**
     * @var string <p>Asset type</p><p>Enumeration values:</p><ul><li>cdb: mysql</li><li>mongodb: mongodb</li></ul>
     */
    public $AssetType;

    /**
     * @param integer $SqlCount <p>Audit log count.</p>
     * @param integer $LogoutTime <p>Logout time.</p>
     * @param string $ClientIp <p>Client IP</p>
     * @param integer $ClientPort <p>Client port</p>
     * @param string $DbIp <p>Database IP</p>
     * @param string $DbName <p>Database name</p>
     * @param integer $DbPort <p>Database port</p>
     * @param string $DbUser <p>Database users.</p>
     * @param integer $InstanceId <p>Audit unit ID</p>
     * @param integer $OpTime <p>Operation time.</p>
     * @param integer $RetNo <p>Status code</p>
     * @param string $SessionId <p>Session Id</p>
     * @param integer $LoginTime <p>Login time.</p>
     * @param string $InstanceName <p>Data asset name.</p>
     * @param string $AssetName <p>Data asset name.</p>
     * @param string $SourceType <p>Traffic source.</p>
     * @param string $SourceTypeEn <p>Traffic source in English</p>
     * @param integer $AppId <p>app id of the account associated with the asset</p>
     * @param string $SourceTypeEnDisplayName <p>Traffic source.</p>
     * @param string $NickName <p>Nickname</p>
     * @param string $Uin <p>uid</p>
     * @param string $DbType <p>Database type</p><p>Enumeration values:</p><ul><li>MongoDB: mongodb</li></ul>
     * @param string $AssetType <p>Asset type</p><p>Enumeration values:</p><ul><li>cdb: mysql</li><li>mongodb: mongodb</li></ul>
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
        if (array_key_exists("SqlCount",$param) and $param["SqlCount"] !== null) {
            $this->SqlCount = $param["SqlCount"];
        }

        if (array_key_exists("LogoutTime",$param) and $param["LogoutTime"] !== null) {
            $this->LogoutTime = $param["LogoutTime"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("ClientPort",$param) and $param["ClientPort"] !== null) {
            $this->ClientPort = $param["ClientPort"];
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("OpTime",$param) and $param["OpTime"] !== null) {
            $this->OpTime = $param["OpTime"];
        }

        if (array_key_exists("RetNo",$param) and $param["RetNo"] !== null) {
            $this->RetNo = $param["RetNo"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("LoginTime",$param) and $param["LoginTime"] !== null) {
            $this->LoginTime = $param["LoginTime"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceTypeEn",$param) and $param["SourceTypeEn"] !== null) {
            $this->SourceTypeEn = $param["SourceTypeEn"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("SourceTypeEnDisplayName",$param) and $param["SourceTypeEnDisplayName"] !== null) {
            $this->SourceTypeEnDisplayName = $param["SourceTypeEnDisplayName"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }
    }
}
