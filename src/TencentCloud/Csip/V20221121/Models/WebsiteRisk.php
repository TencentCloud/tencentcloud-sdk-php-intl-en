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
 * Website Risk Objects
 *
 * @method string getAffectAsset() Obtain Affect assets
 * @method void setAffectAsset(string $AffectAsset) Set Affect assets
 * @method string getLevel() Obtain Risk level. low: low risk. high: high risk. middle: medium risk. info: notification. extreme: critical.
 * @method void setLevel(string $Level) Set Risk level. low: low risk. high: high risk. middle: medium risk. info: notification. extreme: critical.
 * @method string getRecentTime() Obtain Latest Recognition Time
 * @method void setRecentTime(string $RecentTime) Set Latest Recognition Time
 * @method string getFirstTime() Obtain First Recognition Time
 * @method void setFirstTime(string $FirstTime) Set First Recognition Time
 * @method integer getStatus() Obtain Status. 0-Unprocessed; 1-Disposed; 2-Ignored.
 * @method void setStatus(integer $Status) Set Status. 0-Unprocessed; 1-Disposed; 2-Ignored.
 * @method string getId() Obtain ID, handle risks
 * @method void setId(string $Id) Set ID, handle risks
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
 * @method string getURL() Obtain Risky link
 * @method void setURL(string $URL) Set Risky link
 * @method string getURLPath() Obtain Risk File Address
 * @method void setURLPath(string $URLPath) Set Risk File Address
 * @method string getInstanceType() Obtain Instance type
 * @method void setInstanceType(string $InstanceType) Set Instance type
 * @method string getDetectEngine() Obtain Type.
 * @method void setDetectEngine(string $DetectEngine) Set Type.
 * @method string getResultDescribe() Obtain Result Description
 * @method void setResultDescribe(string $ResultDescribe) Set Result Description
 * @method string getSourceURL() Obtain Source Address URL
 * @method void setSourceURL(string $SourceURL) Set Source Address URL
 * @method string getSourceURLPath() Obtain Source File Address
 * @method void setSourceURLPath(string $SourceURLPath) Set Source File Address
 */
class WebsiteRisk extends AbstractModel
{
    /**
     * @var string Affect assets
     */
    public $AffectAsset;

    /**
     * @var string Risk level. low: low risk. high: high risk. middle: medium risk. info: notification. extreme: critical.
     */
    public $Level;

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
     * @var string ID, handle risks
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
     * @var string Risky link
     */
    public $URL;

    /**
     * @var string Risk File Address
     */
    public $URLPath;

    /**
     * @var string Instance type
     */
    public $InstanceType;

    /**
     * @var string Type.
     */
    public $DetectEngine;

    /**
     * @var string Result Description
     */
    public $ResultDescribe;

    /**
     * @var string Source Address URL
     */
    public $SourceURL;

    /**
     * @var string Source File Address
     */
    public $SourceURLPath;

    /**
     * @param string $AffectAsset Affect assets
     * @param string $Level Risk level. low: low risk. high: high risk. middle: medium risk. info: notification. extreme: critical.
     * @param string $RecentTime Latest Recognition Time
     * @param string $FirstTime First Recognition Time
     * @param integer $Status Status. 0-Unprocessed; 1-Disposed; 2-Ignored.
     * @param string $Id ID, handle risks
     * @param string $Index Front-end Index
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName Instance name.
     * @param string $AppId User appid.
     * @param string $Nick User Nickname
     * @param string $Uin User UIN
     * @param string $URL Risky link
     * @param string $URLPath Risk File Address
     * @param string $InstanceType Instance type
     * @param string $DetectEngine Type.
     * @param string $ResultDescribe Result Description
     * @param string $SourceURL Source Address URL
     * @param string $SourceURLPath Source File Address
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

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("URLPath",$param) and $param["URLPath"] !== null) {
            $this->URLPath = $param["URLPath"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("DetectEngine",$param) and $param["DetectEngine"] !== null) {
            $this->DetectEngine = $param["DetectEngine"];
        }

        if (array_key_exists("ResultDescribe",$param) and $param["ResultDescribe"] !== null) {
            $this->ResultDescribe = $param["ResultDescribe"];
        }

        if (array_key_exists("SourceURL",$param) and $param["SourceURL"] !== null) {
            $this->SourceURL = $param["SourceURL"];
        }

        if (array_key_exists("SourceURLPath",$param) and $param["SourceURLPath"] !== null) {
            $this->SourceURLPath = $param["SourceURLPath"];
        }
    }
}
