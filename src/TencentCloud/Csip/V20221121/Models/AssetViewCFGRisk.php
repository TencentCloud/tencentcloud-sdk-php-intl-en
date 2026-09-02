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
 * Configuration Risk from Asset's Perspective
 *
 * @method string getId() Obtain Unique ID
 * @method void setId(string $Id) Set Unique ID
 * @method string getCFGName() Obtain Configuration name
 * @method void setCFGName(string $CFGName) Set Configuration name
 * @method string getCheckType() Obtain Check type
 * @method void setCheckType(string $CheckType) Set Check type
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getInstanceType() Obtain Instance type
 * @method void setInstanceType(string $InstanceType) Set Instance type
 * @method string getAffectAsset() Obtain Affect assets
 * @method void setAffectAsset(string $AffectAsset) Set Affect assets
 * @method string getLevel() Obtain Risk level. low: low risk. high: high risk. middle: medium risk. info: notification. extreme: critical.
 * @method void setLevel(string $Level) Set Risk level. low: low risk. high: high risk. middle: medium risk. info: notification. extreme: critical.
 * @method string getFirstTime() Obtain First Recognition Time
 * @method void setFirstTime(string $FirstTime) Set First Recognition Time
 * @method string getRecentTime() Obtain Latest Recognition Time
 * @method void setRecentTime(string $RecentTime) Set Latest Recognition Time
 * @method string getFrom() Obtain Source.
 * @method void setFrom(string $From) Set Source.
 * @method integer getStatus() Obtain Status.
 * @method void setStatus(integer $Status) Set Status.
 * @method string getCFGSTD() Obtain Relevant standards
 * @method void setCFGSTD(string $CFGSTD) Set Relevant standards
 * @method string getCFGDescribe() Obtain Configuration detail
 * @method void setCFGDescribe(string $CFGDescribe) Set Configuration detail
 * @method string getCFGFix() Obtain Fixing suggestion
 * @method void setCFGFix(string $CFGFix) Set Fixing suggestion
 * @method string getCFGHelpURL() Obtain Help Document Link
 * @method void setCFGHelpURL(string $CFGHelpURL) Set Help Document Link
 * @method string getIndex() Obtain Front-end Usage Index
 * @method void setIndex(string $Index) Set Front-end Usage Index
 * @method string getAppId() Obtain User appid.
 * @method void setAppId(string $AppId) Set User appid.
 * @method string getNick() Obtain User Nickname
 * @method void setNick(string $Nick) Set User Nickname
 * @method string getUin() Obtain User UIN
 * @method void setUin(string $Uin) Set User UIN
 * @method string getClbId() Obtain This field is displayed when the asset type is LBL, to help locate the specific LB.
 * @method void setClbId(string $ClbId) Set This field is displayed when the asset type is LBL, to help locate the specific LB.
 */
class AssetViewCFGRisk extends AbstractModel
{
    /**
     * @var string Unique ID
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
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Instance type
     */
    public $InstanceType;

    /**
     * @var string Affect assets
     */
    public $AffectAsset;

    /**
     * @var string Risk level. low: low risk. high: high risk. middle: medium risk. info: notification. extreme: critical.
     */
    public $Level;

    /**
     * @var string First Recognition Time
     */
    public $FirstTime;

    /**
     * @var string Latest Recognition Time
     */
    public $RecentTime;

    /**
     * @var string Source.
     */
    public $From;

    /**
     * @var integer Status.
     */
    public $Status;

    /**
     * @var string Relevant standards
     */
    public $CFGSTD;

    /**
     * @var string Configuration detail
     */
    public $CFGDescribe;

    /**
     * @var string Fixing suggestion
     */
    public $CFGFix;

    /**
     * @var string Help Document Link
     */
    public $CFGHelpURL;

    /**
     * @var string Front-end Usage Index
     */
    public $Index;

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
     * @var string This field is displayed when the asset type is LBL, to help locate the specific LB.
     */
    public $ClbId;

    /**
     * @param string $Id Unique ID
     * @param string $CFGName Configuration name
     * @param string $CheckType Check type
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName Instance name.
     * @param string $InstanceType Instance type
     * @param string $AffectAsset Affect assets
     * @param string $Level Risk level. low: low risk. high: high risk. middle: medium risk. info: notification. extreme: critical.
     * @param string $FirstTime First Recognition Time
     * @param string $RecentTime Latest Recognition Time
     * @param string $From Source.
     * @param integer $Status Status.
     * @param string $CFGSTD Relevant standards
     * @param string $CFGDescribe Configuration detail
     * @param string $CFGFix Fixing suggestion
     * @param string $CFGHelpURL Help Document Link
     * @param string $Index Front-end Usage Index
     * @param string $AppId User appid.
     * @param string $Nick User Nickname
     * @param string $Uin User UIN
     * @param string $ClbId This field is displayed when the asset type is LBL, to help locate the specific LB.
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

        if (array_key_exists("ClbId",$param) and $param["ClbId"] !== null) {
            $this->ClbId = $param["ClbId"];
        }
    }
}
