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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Verification code console query API v2 international
 *
 * @method integer getCaptchaAppId() Obtain <p>Verification code id</p>
 * @method void setCaptchaAppId(integer $CaptchaAppId) Set <p>Verification code id</p>
 * @method string getAppName() Obtain <p>Verification name</p>
 * @method void setAppName(string $AppName) Set <p>Verification name</p>
 * @method string getDomain() Obtain <p>Separate domain names with commas</p>
 * @method void setDomain(string $Domain) Set <p>Separate domain names with commas</p>
 * @method string getEncryptKey() Obtain <p>Random key</p>
 * @method void setEncryptKey(string $EncryptKey) Set <p>Random key</p>
 * @method string getSceneType() Obtain <p>Verification scenario</p><p>Enumeration values:</p><ul><li>1: Account</li><li>2: SMS</li><li>3: Promotion</li><li>4: Comment</li><li>5: Data protection</li><li>6: Other</li></ul>
 * @method void setSceneType(string $SceneType) Set <p>Verification scenario</p><p>Enumeration values:</p><ul><li>1: Account</li><li>2: SMS</li><li>3: Promotion</li><li>4: Comment</li><li>5: Data protection</li><li>6: Other</li></ul>
 * @method integer getUserSetCapType() Obtain <p>Validation type</p><p>Enumeration values:</p><ul><li>1: Invisible verification. UserSetCapType input 1, DisableInvisibleSwitch must be 2</li><li>2: Sliding puzzle</li><li>8: Graphical point selection</li><li>9: Voice verification</li></ul>
 * @method void setUserSetCapType(integer $UserSetCapType) Set <p>Validation type</p><p>Enumeration values:</p><ul><li>1: Invisible verification. UserSetCapType input 1, DisableInvisibleSwitch must be 2</li><li>2: Sliding puzzle</li><li>8: Graphical point selection</li><li>9: Voice verification</li></ul>
 * @method integer getNoVerifyRule() Obtain <p>Intelligent verification-free</p><p>Enumeration values:</p><ul><li>0: disable</li><li>1: enable</li></ul>
 * @method void setNoVerifyRule(integer $NoVerifyRule) Set <p>Intelligent verification-free</p><p>Enumeration values:</p><ul><li>0: disable</li><li>1: enable</li></ul>
 * @method string getCaptchaLanguage() Obtain <p>Language</p><p>Enumeration values:</p><ul><li>1: Self adaptive</li><li>2052: Simplified</li><li>1028: Traditional</li><li>1033: English</li></ul>
 * @method void setCaptchaLanguage(string $CaptchaLanguage) Set <p>Language</p><p>Enumeration values:</p><ul><li>1: Self adaptive</li><li>2052: Simplified</li><li>1028: Traditional</li><li>1033: English</li></ul>
 * @method integer getVerifyRank() Obtain <p>Verification level</p><p>Enumeration values:</p><ul><li>1: Experience-oriented</li><li>2: Balanced</li><li>3: Security-focused</li></ul><p>Default value: 1</p>
 * @method void setVerifyRank(integer $VerifyRank) Set <p>Verification level</p><p>Enumeration values:</p><ul><li>1: Experience-oriented</li><li>2: Balanced</li><li>3: Security-focused</li></ul><p>Default value: 1</p>
 * @method string getChannelInfo() Obtain <p>Client type</p><p>Enumeration values:</p><ul><li>web: For web scenario usage</li><li>android: For Android client usage</li><li>ios: For iOS client usage</li></ul>
 * @method void setChannelInfo(string $ChannelInfo) Set <p>Client type</p><p>Enumeration values:</p><ul><li>web: For web scenario usage</li><li>android: For Android client usage</li><li>ios: For iOS client usage</li></ul>
 * @method string getDefendMode() Obtain <p>Interception mode</p><p>Enumeration values:</p><ul><li>block: interception mode</li><li>notify: perception mode</li></ul><p>Default value: notify</p>
 * @method void setDefendMode(string $DefendMode) Set <p>Interception mode</p><p>Enumeration values:</p><ul><li>block: interception mode</li><li>notify: perception mode</li></ul><p>Default value: notify</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method integer getCheckAppidSwitch() Obtain <p>Whether to enable captchaAppid encryption</p><p>Enumeration values:</p><ul><li>0: Off</li><li>1: On</li></ul>
 * @method void setCheckAppidSwitch(integer $CheckAppidSwitch) Set <p>Whether to enable captchaAppid encryption</p><p>Enumeration values:</p><ul><li>0: Off</li><li>1: On</li></ul>
 * @method array getTags() Obtain <p>Resource tag.</p>
 * @method void setTags(array $Tags) Set <p>Resource tag.</p>
 * @method integer getCheckIvSwitch() Obtain <p>Whether to enable non-repeating IV</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
 * @method void setCheckIvSwitch(integer $CheckIvSwitch) Set <p>Whether to enable non-repeating IV</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
 * @method string getDisableInvisibleSwitch() Obtain <p>Verification mechanism</p><p>Enumeration values:</p><ul><li>0: One-Click Verification</li><li>1: Always verify</li><li>2: Invisible verification. DisableInvisibleSwitch input 2, UserSetCapType must be 1</li></ul>
 * @method void setDisableInvisibleSwitch(string $DisableInvisibleSwitch) Set <p>Verification mechanism</p><p>Enumeration values:</p><ul><li>0: One-Click Verification</li><li>1: Always verify</li><li>2: Invisible verification. DisableInvisibleSwitch input 2, UserSetCapType must be 1</li></ul>
 * @method string getVerifyDomain() Obtain <p>Web domain name</p><p>Valid only when ChannelInfo is web</p>
 * @method void setVerifyDomain(string $VerifyDomain) Set <p>Web domain name</p><p>Valid only when ChannelInfo is web</p>
 * @method string getVerifyBundleId() Obtain <p>app BundleId</p><p>Valid only when ChannelInfo is ios</p>
 * @method void setVerifyBundleId(string $VerifyBundleId) Set <p>app BundleId</p><p>Valid only when ChannelInfo is ios</p>
 * @method string getVerifyPackage() Obtain <p>app package</p><p>Only valid when ChannelInfo is android</p>
 * @method void setVerifyPackage(string $VerifyPackage) Set <p>app package</p><p>Only valid when ChannelInfo is android</p>
 * @method string getCheckBoxStyle() Obtain <p>Checkbox display method</p><p>Enumeration values:</p><ul><li>0: simplified version</li><li>1: basic version</li><li>2: invisible version</li></ul>
 * @method void setCheckBoxStyle(string $CheckBoxStyle) Set <p>Checkbox display method</p><p>Enumeration values:</p><ul><li>0: simplified version</li><li>1: basic version</li><li>2: invisible version</li></ul>
 * @method string getCustomerType() Obtain <p>Customer type</p><p>Enumeration values:</p><ul><li>0: General user</li><li>1: waf</li><li>2: EO</li></ul>
 * @method void setCustomerType(string $CustomerType) Set <p>Customer type</p><p>Enumeration values:</p><ul><li>0: General user</li><li>1: waf</li><li>2: EO</li></ul>
 */
class DescribeCaptchaConsoleSubDataInternational extends AbstractModel
{
    /**
     * @var integer <p>Verification code id</p>
     */
    public $CaptchaAppId;

    /**
     * @var string <p>Verification name</p>
     */
    public $AppName;

    /**
     * @var string <p>Separate domain names with commas</p>
     */
    public $Domain;

    /**
     * @var string <p>Random key</p>
     */
    public $EncryptKey;

    /**
     * @var string <p>Verification scenario</p><p>Enumeration values:</p><ul><li>1: Account</li><li>2: SMS</li><li>3: Promotion</li><li>4: Comment</li><li>5: Data protection</li><li>6: Other</li></ul>
     */
    public $SceneType;

    /**
     * @var integer <p>Validation type</p><p>Enumeration values:</p><ul><li>1: Invisible verification. UserSetCapType input 1, DisableInvisibleSwitch must be 2</li><li>2: Sliding puzzle</li><li>8: Graphical point selection</li><li>9: Voice verification</li></ul>
     */
    public $UserSetCapType;

    /**
     * @var integer <p>Intelligent verification-free</p><p>Enumeration values:</p><ul><li>0: disable</li><li>1: enable</li></ul>
     */
    public $NoVerifyRule;

    /**
     * @var string <p>Language</p><p>Enumeration values:</p><ul><li>1: Self adaptive</li><li>2052: Simplified</li><li>1028: Traditional</li><li>1033: English</li></ul>
     */
    public $CaptchaLanguage;

    /**
     * @var integer <p>Verification level</p><p>Enumeration values:</p><ul><li>1: Experience-oriented</li><li>2: Balanced</li><li>3: Security-focused</li></ul><p>Default value: 1</p>
     */
    public $VerifyRank;

    /**
     * @var string <p>Client type</p><p>Enumeration values:</p><ul><li>web: For web scenario usage</li><li>android: For Android client usage</li><li>ios: For iOS client usage</li></ul>
     */
    public $ChannelInfo;

    /**
     * @var string <p>Interception mode</p><p>Enumeration values:</p><ul><li>block: interception mode</li><li>notify: perception mode</li></ul><p>Default value: notify</p>
     */
    public $DefendMode;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>Whether to enable captchaAppid encryption</p><p>Enumeration values:</p><ul><li>0: Off</li><li>1: On</li></ul>
     */
    public $CheckAppidSwitch;

    /**
     * @var array <p>Resource tag.</p>
     */
    public $Tags;

    /**
     * @var integer <p>Whether to enable non-repeating IV</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
     */
    public $CheckIvSwitch;

    /**
     * @var string <p>Verification mechanism</p><p>Enumeration values:</p><ul><li>0: One-Click Verification</li><li>1: Always verify</li><li>2: Invisible verification. DisableInvisibleSwitch input 2, UserSetCapType must be 1</li></ul>
     */
    public $DisableInvisibleSwitch;

    /**
     * @var string <p>Web domain name</p><p>Valid only when ChannelInfo is web</p>
     */
    public $VerifyDomain;

    /**
     * @var string <p>app BundleId</p><p>Valid only when ChannelInfo is ios</p>
     */
    public $VerifyBundleId;

    /**
     * @var string <p>app package</p><p>Only valid when ChannelInfo is android</p>
     */
    public $VerifyPackage;

    /**
     * @var string <p>Checkbox display method</p><p>Enumeration values:</p><ul><li>0: simplified version</li><li>1: basic version</li><li>2: invisible version</li></ul>
     */
    public $CheckBoxStyle;

    /**
     * @var string <p>Customer type</p><p>Enumeration values:</p><ul><li>0: General user</li><li>1: waf</li><li>2: EO</li></ul>
     */
    public $CustomerType;

    /**
     * @param integer $CaptchaAppId <p>Verification code id</p>
     * @param string $AppName <p>Verification name</p>
     * @param string $Domain <p>Separate domain names with commas</p>
     * @param string $EncryptKey <p>Random key</p>
     * @param string $SceneType <p>Verification scenario</p><p>Enumeration values:</p><ul><li>1: Account</li><li>2: SMS</li><li>3: Promotion</li><li>4: Comment</li><li>5: Data protection</li><li>6: Other</li></ul>
     * @param integer $UserSetCapType <p>Validation type</p><p>Enumeration values:</p><ul><li>1: Invisible verification. UserSetCapType input 1, DisableInvisibleSwitch must be 2</li><li>2: Sliding puzzle</li><li>8: Graphical point selection</li><li>9: Voice verification</li></ul>
     * @param integer $NoVerifyRule <p>Intelligent verification-free</p><p>Enumeration values:</p><ul><li>0: disable</li><li>1: enable</li></ul>
     * @param string $CaptchaLanguage <p>Language</p><p>Enumeration values:</p><ul><li>1: Self adaptive</li><li>2052: Simplified</li><li>1028: Traditional</li><li>1033: English</li></ul>
     * @param integer $VerifyRank <p>Verification level</p><p>Enumeration values:</p><ul><li>1: Experience-oriented</li><li>2: Balanced</li><li>3: Security-focused</li></ul><p>Default value: 1</p>
     * @param string $ChannelInfo <p>Client type</p><p>Enumeration values:</p><ul><li>web: For web scenario usage</li><li>android: For Android client usage</li><li>ios: For iOS client usage</li></ul>
     * @param string $DefendMode <p>Interception mode</p><p>Enumeration values:</p><ul><li>block: interception mode</li><li>notify: perception mode</li></ul><p>Default value: notify</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $UpdateTime <p>Update time.</p>
     * @param integer $CheckAppidSwitch <p>Whether to enable captchaAppid encryption</p><p>Enumeration values:</p><ul><li>0: Off</li><li>1: On</li></ul>
     * @param array $Tags <p>Resource tag.</p>
     * @param integer $CheckIvSwitch <p>Whether to enable non-repeating IV</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
     * @param string $DisableInvisibleSwitch <p>Verification mechanism</p><p>Enumeration values:</p><ul><li>0: One-Click Verification</li><li>1: Always verify</li><li>2: Invisible verification. DisableInvisibleSwitch input 2, UserSetCapType must be 1</li></ul>
     * @param string $VerifyDomain <p>Web domain name</p><p>Valid only when ChannelInfo is web</p>
     * @param string $VerifyBundleId <p>app BundleId</p><p>Valid only when ChannelInfo is ios</p>
     * @param string $VerifyPackage <p>app package</p><p>Only valid when ChannelInfo is android</p>
     * @param string $CheckBoxStyle <p>Checkbox display method</p><p>Enumeration values:</p><ul><li>0: simplified version</li><li>1: basic version</li><li>2: invisible version</li></ul>
     * @param string $CustomerType <p>Customer type</p><p>Enumeration values:</p><ul><li>0: General user</li><li>1: waf</li><li>2: EO</li></ul>
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
        if (array_key_exists("CaptchaAppId",$param) and $param["CaptchaAppId"] !== null) {
            $this->CaptchaAppId = $param["CaptchaAppId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("EncryptKey",$param) and $param["EncryptKey"] !== null) {
            $this->EncryptKey = $param["EncryptKey"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("UserSetCapType",$param) and $param["UserSetCapType"] !== null) {
            $this->UserSetCapType = $param["UserSetCapType"];
        }

        if (array_key_exists("NoVerifyRule",$param) and $param["NoVerifyRule"] !== null) {
            $this->NoVerifyRule = $param["NoVerifyRule"];
        }

        if (array_key_exists("CaptchaLanguage",$param) and $param["CaptchaLanguage"] !== null) {
            $this->CaptchaLanguage = $param["CaptchaLanguage"];
        }

        if (array_key_exists("VerifyRank",$param) and $param["VerifyRank"] !== null) {
            $this->VerifyRank = $param["VerifyRank"];
        }

        if (array_key_exists("ChannelInfo",$param) and $param["ChannelInfo"] !== null) {
            $this->ChannelInfo = $param["ChannelInfo"];
        }

        if (array_key_exists("DefendMode",$param) and $param["DefendMode"] !== null) {
            $this->DefendMode = $param["DefendMode"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CheckAppidSwitch",$param) and $param["CheckAppidSwitch"] !== null) {
            $this->CheckAppidSwitch = $param["CheckAppidSwitch"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("CheckIvSwitch",$param) and $param["CheckIvSwitch"] !== null) {
            $this->CheckIvSwitch = $param["CheckIvSwitch"];
        }

        if (array_key_exists("DisableInvisibleSwitch",$param) and $param["DisableInvisibleSwitch"] !== null) {
            $this->DisableInvisibleSwitch = $param["DisableInvisibleSwitch"];
        }

        if (array_key_exists("VerifyDomain",$param) and $param["VerifyDomain"] !== null) {
            $this->VerifyDomain = $param["VerifyDomain"];
        }

        if (array_key_exists("VerifyBundleId",$param) and $param["VerifyBundleId"] !== null) {
            $this->VerifyBundleId = $param["VerifyBundleId"];
        }

        if (array_key_exists("VerifyPackage",$param) and $param["VerifyPackage"] !== null) {
            $this->VerifyPackage = $param["VerifyPackage"];
        }

        if (array_key_exists("CheckBoxStyle",$param) and $param["CheckBoxStyle"] !== null) {
            $this->CheckBoxStyle = $param["CheckBoxStyle"];
        }

        if (array_key_exists("CustomerType",$param) and $param["CustomerType"] !== null) {
            $this->CustomerType = $param["CustomerType"];
        }
    }
}
