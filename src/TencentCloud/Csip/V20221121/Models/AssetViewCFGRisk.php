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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of a configuration risk
 *
 * @method string getId() Obtain The unique ID.
 * @method void setId(string $Id) Set The unique ID.
 * @method string getCFGName() Obtain Configuration name
 * @method void setCFGName(string $CFGName) Set Configuration name
 * @method string getCheckType() Obtain Check type
 * @method void setCheckType(string $CheckType) Set Check type
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getInstanceType() Obtain Instance type
 * @method void setInstanceType(string $InstanceType) Set Instance type
 * @method string getAffectAsset() Obtain Affected assets
 * @method void setAffectAsset(string $AffectAsset) Set Affected assets
 * @method string getLevel() Obtain Risk level
 * @method void setLevel(string $Level) Set Risk level
 * @method string getFirstTime() Obtain First detected
 * @method void setFirstTime(string $FirstTime) Set First detected
 * @method string getRecentTime() Obtain Last detected 
 * @method void setRecentTime(string $RecentTime) Set Last detected 
 * @method string getFrom() Obtain Source of the task
 * @method void setFrom(string $From) Set Source of the task
 * @method integer getStatus() Obtain Status
 * @method void setStatus(integer $Status) Set Status
 * @method string getCFGSTD() Obtain u200c-
 * @method void setCFGSTD(string $CFGSTD) Set u200c-
 * @method string getCFGDescribe() Obtain Configuration details.
 * @method void setCFGDescribe(string $CFGDescribe) Set Configuration details.
 * @method string getCFGFix() Obtain Fix suggestion
 * @method void setCFGFix(string $CFGFix) Set Fix suggestion
 * @method string getCFGHelpURL() Obtain URL of the help documentation
 * @method void setCFGHelpURL(string $CFGHelpURL) Set URL of the help documentation
 * @method string getIndex() Obtain Data entry key
 * @method void setIndex(string $Index) Set Data entry key
 * @method string getAppId() Obtain User AppId
 * @method void setAppId(string $AppId) Set User AppId
 * @method string getNick() Obtain User name.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setNick(string $Nick) Set User name.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getUin() Obtain User UIN
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set User UIN
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class AssetViewCFGRisk extends AbstractModel
{
    /**
     * @var string The unique ID.
     */
    public $Id;

    /**
     * @var string Configuration name
     */
    public $CFGName;

    /**
     * @var string Check type
     */
    public $CheckType;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Instance type
     */
    public $InstanceType;

    /**
     * @var string Affected assets
     */
    public $AffectAsset;

    /**
     * @var string Risk level
     */
    public $Level;

    /**
     * @var string First detected
     */
    public $FirstTime;

    /**
     * @var string Last detected 
     */
    public $RecentTime;

    /**
     * @var string Source of the task
     */
    public $From;

    /**
     * @var integer Status
     */
    public $Status;

    /**
     * @var string u200c-
     */
    public $CFGSTD;

    /**
     * @var string Configuration details.
     */
    public $CFGDescribe;

    /**
     * @var string Fix suggestion
     */
    public $CFGFix;

    /**
     * @var string URL of the help documentation
     */
    public $CFGHelpURL;

    /**
     * @var string Data entry key
     */
    public $Index;

    /**
     * @var string User AppId
     */
    public $AppId;

    /**
     * @var string User name.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Nick;

    /**
     * @var string User UIN
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @param string $Id The unique ID.
     * @param string $CFGName Configuration name
     * @param string $CheckType Check type
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $InstanceType Instance type
     * @param string $AffectAsset Affected assets
     * @param string $Level Risk level
     * @param string $FirstTime First detected
     * @param string $RecentTime Last detected 
     * @param string $From Source of the task
     * @param integer $Status Status
     * @param string $CFGSTD u200c-
     * @param string $CFGDescribe Configuration details.
     * @param string $CFGFix Fix suggestion
     * @param string $CFGHelpURL URL of the help documentation
     * @param string $Index Data entry key
     * @param string $AppId User AppId
     * @param string $Nick User name.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Uin User UIN
Note: This field may return·null, indicating that no valid values can be obtained.
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

        if (array_key_exists("CFGName",$param) and $param["CFGName"] !== null) {
            $this->CFGName = $param["CFGName"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("AffectAsset",$param) and $param["AffectAsset"] !== null) {
            $this->AffectAsset = $param["AffectAsset"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("RecentTime",$param) and $param["RecentTime"] !== null) {
            $this->RecentTime = $param["RecentTime"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CFGSTD",$param) and $param["CFGSTD"] !== null) {
            $this->CFGSTD = $param["CFGSTD"];
        }

        if (array_key_exists("CFGDescribe",$param) and $param["CFGDescribe"] !== null) {
            $this->CFGDescribe = $param["CFGDescribe"];
        }

        if (array_key_exists("CFGFix",$param) and $param["CFGFix"] !== null) {
            $this->CFGFix = $param["CFGFix"];
        }

        if (array_key_exists("CFGHelpURL",$param) and $param["CFGHelpURL"] !== null) {
            $this->CFGHelpURL = $param["CFGHelpURL"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
