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
 * Weak Password Risk from Asset's Perspective
 *
 * @method string getAffectAsset() Obtain Affect assets
 * @method void setAffectAsset(string $AffectAsset) Set Affect assets
 * @method string getLevel() Obtain Risk level. low: low risk, high: high risk, middle: medium risk, info: notification, extreme: critical.
 * @method void setLevel(string $Level) Set Risk level. low: low risk, high: high risk, middle: medium risk, info: notification, extreme: critical.
 * @method string getInstanceType() Obtain Asset type
 * @method void setInstanceType(string $InstanceType) Set Asset type
 * @method string getComponent() Obtain Component
 * @method void setComponent(string $Component) Set Component
 * @method string getService() Obtain Service.
 * @method void setService(string $Service) Set Service.
 * @method string getRecentTime() Obtain Latest Recognition Time
 * @method void setRecentTime(string $RecentTime) Set Latest Recognition Time
 * @method string getFirstTime() Obtain First Recognition Time
 * @method void setFirstTime(string $FirstTime) Set First Recognition Time
 * @method integer getStatus() Obtain Status. 0-Unprocessed; 1-Disposed; 2-Ignored.
 * @method void setStatus(integer $Status) Set Status. 0-Unprocessed; 1-Disposed; 2-Ignored.
 * @method string getId() Obtain ID, fix risks
 * @method void setId(string $Id) Set ID, fix risks
 * @method string getIndex() Obtain Front-end Index
 * @method void setIndex(string $Index) Set Front-end Index
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getAppId() Obtain User appid.
 * @method void setAppId(string $AppId) Set User appid.
 * @method string getNick() Obtain User Nickname
 * @method void setNick(string $Nick) Set User Nickname
 * @method string getUin() Obtain User UIN
 * @method void setUin(string $Uin) Set User UIN
 * @method string getPasswordType() Obtain Weak password type
 * @method void setPasswordType(string $PasswordType) Set Weak password type
 * @method string getFrom() Obtain Source.
 * @method void setFrom(string $From) Set Source.
 * @method string getVULType() Obtain Vulnerability type
 * @method void setVULType(string $VULType) Set Vulnerability type
 * @method string getVULURL() Obtain Vulnerability URL
 * @method void setVULURL(string $VULURL) Set Vulnerability URL
 * @method string getFix() Obtain Fixing suggestion
 * @method void setFix(string $Fix) Set Fixing suggestion
 * @method string getPayload() Obtain Proof
 * @method void setPayload(string $Payload) Set Proof
 * @method integer getPort() Obtain Port.
 * @method void setPort(integer $Port) Set Port.
 */
class AssetViewWeakPassRisk extends AbstractModel
{
    /**
     * @var string Affect assets
     */
    public $AffectAsset;

    /**
     * @var string Risk level. low: low risk, high: high risk, middle: medium risk, info: notification, extreme: critical.
     */
    public $Level;

    /**
     * @var string Asset type
     */
    public $InstanceType;

    /**
     * @var string Component
     */
    public $Component;

    /**
     * @var string Service.
     */
    public $Service;

    /**
     * @var string Latest Recognition Time
     */
    public $RecentTime;

    /**
     * @var string First Recognition Time
     */
    public $FirstTime;

    /**
     * @var integer Status. 0-Unprocessed; 1-Disposed; 2-Ignored.
     */
    public $Status;

    /**
     * @var string ID, fix risks
     */
    public $Id;

    /**
     * @var string Front-end Index
     */
    public $Index;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string User appid.
     */
    public $AppId;

    /**
     * @var string User Nickname
     */
    public $Nick;

    /**
     * @var string User UIN
     */
    public $Uin;

    /**
     * @var string Weak password type
     */
    public $PasswordType;

    /**
     * @var string Source.
     */
    public $From;

    /**
     * @var string Vulnerability type
     */
    public $VULType;

    /**
     * @var string Vulnerability URL
     */
    public $VULURL;

    /**
     * @var string Fixing suggestion
     */
    public $Fix;

    /**
     * @var string Proof
     */
    public $Payload;

    /**
     * @var integer Port.
     */
    public $Port;

    /**
     * @param string $AffectAsset Affect assets
     * @param string $Level Risk level. low: low risk, high: high risk, middle: medium risk, info: notification, extreme: critical.
     * @param string $InstanceType Asset type
     * @param string $Component Component
     * @param string $Service Service.
     * @param string $RecentTime Latest Recognition Time
     * @param string $FirstTime First Recognition Time
     * @param integer $Status Status. 0-Unprocessed; 1-Disposed; 2-Ignored.
     * @param string $Id ID, fix risks
     * @param string $Index Front-end Index
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName Instance name.
     * @param string $AppId User appid.
     * @param string $Nick User Nickname
     * @param string $Uin User UIN
     * @param string $PasswordType Weak password type
     * @param string $From Source.
     * @param string $VULType Vulnerability type
     * @param string $VULURL Vulnerability URL
     * @param string $Fix Fixing suggestion
     * @param string $Payload Proof
     * @param integer $Port Port.
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
        if (array_key_exists("AffectAsset",$param) and $param["AffectAsset"] !== null) {
            $this->AffectAsset = $param["AffectAsset"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("RecentTime",$param) and $param["RecentTime"] !== null) {
            $this->RecentTime = $param["RecentTime"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
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

        if (array_key_exists("PasswordType",$param) and $param["PasswordType"] !== null) {
            $this->PasswordType = $param["PasswordType"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("VULType",$param) and $param["VULType"] !== null) {
            $this->VULType = $param["VULType"];
        }

        if (array_key_exists("VULURL",$param) and $param["VULURL"] !== null) {
            $this->VULURL = $param["VULURL"];
        }

        if (array_key_exists("Fix",$param) and $param["Fix"] !== null) {
            $this->Fix = $param["Fix"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
