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
 * Configuration Risk Objects from Configuration's Perspective
 *
 * @method integer getNoHandleCount() Obtain Affect assets
 * @method void setNoHandleCount(integer $NoHandleCount) Set Affect assets
 * @method string getLevel() Obtain Risk level. low: low risk. high: high risk. middle: medium risk. info: notification. extreme: critical.
 * @method void setLevel(string $Level) Set Risk level. low: low risk. high: high risk. middle: medium risk. info: notification. extreme: critical.
 * @method string getRecentTime() Obtain Latest Recognition Time
 * @method void setRecentTime(string $RecentTime) Set Latest Recognition Time
 * @method string getFirstTime() Obtain First Recognition Time
 * @method void setFirstTime(string $FirstTime) Set First Recognition Time
 * @method integer getAffectAssetCount() Obtain Status. 0-Unprocessed; 1-Disposed; 2-Ignored.
 * @method void setAffectAssetCount(integer $AffectAssetCount) Set Status. 0-Unprocessed; 1-Disposed; 2-Ignored.
 * @method string getId() Obtain Unique ID of Asset
 * @method void setId(string $Id) Set Unique ID of Asset
 * @method string getFrom() Obtain Asset Subtype
 * @method void setFrom(string $From) Set Asset Subtype
 * @method string getIndex() Obtain Front-end Index
 * @method void setIndex(string $Index) Set Front-end Index
 * @method string getAppId() Obtain User appid.
 * @method void setAppId(string $AppId) Set User appid.
 * @method string getNick() Obtain User Nickname
 * @method void setNick(string $Nick) Set User Nickname
 * @method string getUin() Obtain User UIN
 * @method void setUin(string $Uin) Set User UIN
 * @method string getCFGName() Obtain Configuration name
 * @method void setCFGName(string $CFGName) Set Configuration name
 * @method string getCheckType() Obtain Check type
 * @method void setCheckType(string $CheckType) Set Check type
 * @method string getCFGSTD() Obtain -
 * @method void setCFGSTD(string $CFGSTD) Set -
 * @method string getCFGDescribe() Obtain Description
 * @method void setCFGDescribe(string $CFGDescribe) Set Description
 * @method string getCFGFix() Obtain Fixing suggestion
 * @method void setCFGFix(string $CFGFix) Set Fixing suggestion
 * @method string getCFGHelpURL() Obtain Help documentation
 * @method void setCFGHelpURL(string $CFGHelpURL) Set Help documentation
 */
class CFGViewCFGRisk extends AbstractModel
{
    /**
     * @var integer Affect assets
     */
    public $NoHandleCount;

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
    public $AffectAssetCount;

    /**
     * @var string Unique ID of Asset
     */
    public $Id;

    /**
     * @var string Asset Subtype
     */
    public $From;

    /**
     * @var string Front-end Index
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
     * @var string Configuration name
     */
    public $CFGName;

    /**
     * @var string Check type
     */
    public $CheckType;

    /**
     * @var string -
     */
    public $CFGSTD;

    /**
     * @var string Description
     */
    public $CFGDescribe;

    /**
     * @var string Fixing suggestion
     */
    public $CFGFix;

    /**
     * @var string Help documentation
     */
    public $CFGHelpURL;

    /**
     * @param integer $NoHandleCount Affect assets
     * @param string $Level Risk level. low: low risk. high: high risk. middle: medium risk. info: notification. extreme: critical.
     * @param string $RecentTime Latest Recognition Time
     * @param string $FirstTime First Recognition Time
     * @param integer $AffectAssetCount Status. 0-Unprocessed; 1-Disposed; 2-Ignored.
     * @param string $Id Unique ID of Asset
     * @param string $From Asset Subtype
     * @param string $Index Front-end Index
     * @param string $AppId User appid.
     * @param string $Nick User Nickname
     * @param string $Uin User UIN
     * @param string $CFGName Configuration name
     * @param string $CheckType Check type
     * @param string $CFGSTD -
     * @param string $CFGDescribe Description
     * @param string $CFGFix Fixing suggestion
     * @param string $CFGHelpURL Help documentation
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
        if (array_key_exists("NoHandleCount",$param) and $param["NoHandleCount"] !== null) {
            $this->NoHandleCount = $param["NoHandleCount"];
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

        if (array_key_exists("AffectAssetCount",$param) and $param["AffectAssetCount"] !== null) {
            $this->AffectAssetCount = $param["AffectAssetCount"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
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

        if (array_key_exists("CFGName",$param) and $param["CFGName"] !== null) {
            $this->CFGName = $param["CFGName"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
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
    }
}
