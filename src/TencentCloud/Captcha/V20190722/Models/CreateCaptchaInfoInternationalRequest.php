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
 * CreateCaptchaInfoInternational request structure.
 *
 * @method string getAppName() Obtain <p>Captcha name</p>
 * @method void setAppName(string $AppName) Set <p>Captcha name</p>
 * @method string getChannelInfo() Obtain <p>Client type</p><p>Enumeration values:</p><ul><li>web: For web scenario</li><li>android: For Android client</li><li>ios: For iOS client</li></ul><p>Default value: web</p>
 * @method void setChannelInfo(string $ChannelInfo) Set <p>Client type</p><p>Enumeration values:</p><ul><li>web: For web scenario</li><li>android: For Android client</li><li>ios: For iOS client</li></ul><p>Default value: web</p>
 * @method string getVerifyRank() Obtain <p>Verification level</p><p>Enumeration values:</p><ul><li>1: Experience-oriented</li><li>2: Balanced</li><li>3: Security-focused</li></ul><p>Default value: 1</p>
 * @method void setVerifyRank(string $VerifyRank) Set <p>Verification level</p><p>Enumeration values:</p><ul><li>1: Experience-oriented</li><li>2: Balanced</li><li>3: Security-focused</li></ul><p>Default value: 1</p>
 * @method string getUserSetCapType() Obtain <p>Validation type</p><p>Enumeration values:</p><ul><li>1: Invisible verification. UserSetCapType input 1, DisableInvisibleSwitch must be 2</li><li>2: Slide</li><li>8: Graphical</li><li>9: Voice</li></ul>
 * @method void setUserSetCapType(string $UserSetCapType) Set <p>Validation type</p><p>Enumeration values:</p><ul><li>1: Invisible verification. UserSetCapType input 1, DisableInvisibleSwitch must be 2</li><li>2: Slide</li><li>8: Graphical</li><li>9: Voice</li></ul>
 * @method string getDefendMode() Obtain <p>Interception mode</p><p>Enumeration values:</p><ul><li>block: interception mode</li><li>notify: perception mode</li></ul><p>Default value: notify</p>
 * @method void setDefendMode(string $DefendMode) Set <p>Interception mode</p><p>Enumeration values:</p><ul><li>block: interception mode</li><li>notify: perception mode</li></ul><p>Default value: notify</p>
 * @method array getTags() Obtain <p>Resource tag, key&amp;value format</p>
 * @method void setTags(array $Tags) Set <p>Resource tag, key&amp;value format</p>
 * @method string getDisableInvisibleSwitch() Obtain <p>Verification mechanism</p><p>Enumeration values:</p><ul><li>0: One-Click Verification</li><li>1: Always verify</li><li>2: Invisible verification. DisableInvisibleSwitch input 2, UserSetCapType must be 1</li></ul>
 * @method void setDisableInvisibleSwitch(string $DisableInvisibleSwitch) Set <p>Verification mechanism</p><p>Enumeration values:</p><ul><li>0: One-Click Verification</li><li>1: Always verify</li><li>2: Invisible verification. DisableInvisibleSwitch input 2, UserSetCapType must be 1</li></ul>
 * @method string getVerifyDomain() Obtain <p>web domain name</p><p>Only valid when ChannelInfo is web</p>
 * @method void setVerifyDomain(string $VerifyDomain) Set <p>web domain name</p><p>Only valid when ChannelInfo is web</p>
 * @method string getVerifyBundleId() Obtain <p>app BundleId</p><p>Only valid when ChannelInfo is ios</p>
 * @method void setVerifyBundleId(string $VerifyBundleId) Set <p>app BundleId</p><p>Only valid when ChannelInfo is ios</p>
 * @method string getVerifyPackage() Obtain <p>app package</p><p>Only valid when ChannelInfo is android</p>
 * @method void setVerifyPackage(string $VerifyPackage) Set <p>app package</p><p>Only valid when ChannelInfo is android</p>
 * @method integer getCheckAppidSwitch() Obtain <p>Whether to enable captcha encryption. 0: Off. 1: On</p>
 * @method void setCheckAppidSwitch(integer $CheckAppidSwitch) Set <p>Whether to enable captcha encryption. 0: Off. 1: On</p>
 * @method integer getCheckIvSwitch() Obtain <p>Whether to enable non-repeating IV</p><p>Enumeration values:</p><ul><li>0: Off</li><li>1: On</li></ul><p>Input 1 is allowed only when CheckAppidSwitch is 1</p>
 * @method void setCheckIvSwitch(integer $CheckIvSwitch) Set <p>Whether to enable non-repeating IV</p><p>Enumeration values:</p><ul><li>0: Off</li><li>1: On</li></ul><p>Input 1 is allowed only when CheckAppidSwitch is 1</p>
 * @method string getCheckBoxStyle() Obtain <p>Checkbox display method</p><p>Enumeration values:</p><ul><li>0: simplified version</li><li>1: basic version</li><li>2: invisible version</li></ul>
 * @method void setCheckBoxStyle(string $CheckBoxStyle) Set <p>Checkbox display method</p><p>Enumeration values:</p><ul><li>0: simplified version</li><li>1: basic version</li><li>2: invisible version</li></ul>
 */
class CreateCaptchaInfoInternationalRequest extends AbstractModel
{
    /**
     * @var string <p>Captcha name</p>
     */
    public $AppName;

    /**
     * @var string <p>Client type</p><p>Enumeration values:</p><ul><li>web: For web scenario</li><li>android: For Android client</li><li>ios: For iOS client</li></ul><p>Default value: web</p>
     */
    public $ChannelInfo;

    /**
     * @var string <p>Verification level</p><p>Enumeration values:</p><ul><li>1: Experience-oriented</li><li>2: Balanced</li><li>3: Security-focused</li></ul><p>Default value: 1</p>
     */
    public $VerifyRank;

    /**
     * @var string <p>Validation type</p><p>Enumeration values:</p><ul><li>1: Invisible verification. UserSetCapType input 1, DisableInvisibleSwitch must be 2</li><li>2: Slide</li><li>8: Graphical</li><li>9: Voice</li></ul>
     */
    public $UserSetCapType;

    /**
     * @var string <p>Interception mode</p><p>Enumeration values:</p><ul><li>block: interception mode</li><li>notify: perception mode</li></ul><p>Default value: notify</p>
     */
    public $DefendMode;

    /**
     * @var array <p>Resource tag, key&amp;value format</p>
     */
    public $Tags;

    /**
     * @var string <p>Verification mechanism</p><p>Enumeration values:</p><ul><li>0: One-Click Verification</li><li>1: Always verify</li><li>2: Invisible verification. DisableInvisibleSwitch input 2, UserSetCapType must be 1</li></ul>
     */
    public $DisableInvisibleSwitch;

    /**
     * @var string <p>web domain name</p><p>Only valid when ChannelInfo is web</p>
     */
    public $VerifyDomain;

    /**
     * @var string <p>app BundleId</p><p>Only valid when ChannelInfo is ios</p>
     */
    public $VerifyBundleId;

    /**
     * @var string <p>app package</p><p>Only valid when ChannelInfo is android</p>
     */
    public $VerifyPackage;

    /**
     * @var integer <p>Whether to enable captcha encryption. 0: Off. 1: On</p>
     */
    public $CheckAppidSwitch;

    /**
     * @var integer <p>Whether to enable non-repeating IV</p><p>Enumeration values:</p><ul><li>0: Off</li><li>1: On</li></ul><p>Input 1 is allowed only when CheckAppidSwitch is 1</p>
     */
    public $CheckIvSwitch;

    /**
     * @var string <p>Checkbox display method</p><p>Enumeration values:</p><ul><li>0: simplified version</li><li>1: basic version</li><li>2: invisible version</li></ul>
     */
    public $CheckBoxStyle;

    /**
     * @param string $AppName <p>Captcha name</p>
     * @param string $ChannelInfo <p>Client type</p><p>Enumeration values:</p><ul><li>web: For web scenario</li><li>android: For Android client</li><li>ios: For iOS client</li></ul><p>Default value: web</p>
     * @param string $VerifyRank <p>Verification level</p><p>Enumeration values:</p><ul><li>1: Experience-oriented</li><li>2: Balanced</li><li>3: Security-focused</li></ul><p>Default value: 1</p>
     * @param string $UserSetCapType <p>Validation type</p><p>Enumeration values:</p><ul><li>1: Invisible verification. UserSetCapType input 1, DisableInvisibleSwitch must be 2</li><li>2: Slide</li><li>8: Graphical</li><li>9: Voice</li></ul>
     * @param string $DefendMode <p>Interception mode</p><p>Enumeration values:</p><ul><li>block: interception mode</li><li>notify: perception mode</li></ul><p>Default value: notify</p>
     * @param array $Tags <p>Resource tag, key&amp;value format</p>
     * @param string $DisableInvisibleSwitch <p>Verification mechanism</p><p>Enumeration values:</p><ul><li>0: One-Click Verification</li><li>1: Always verify</li><li>2: Invisible verification. DisableInvisibleSwitch input 2, UserSetCapType must be 1</li></ul>
     * @param string $VerifyDomain <p>web domain name</p><p>Only valid when ChannelInfo is web</p>
     * @param string $VerifyBundleId <p>app BundleId</p><p>Only valid when ChannelInfo is ios</p>
     * @param string $VerifyPackage <p>app package</p><p>Only valid when ChannelInfo is android</p>
     * @param integer $CheckAppidSwitch <p>Whether to enable captcha encryption. 0: Off. 1: On</p>
     * @param integer $CheckIvSwitch <p>Whether to enable non-repeating IV</p><p>Enumeration values:</p><ul><li>0: Off</li><li>1: On</li></ul><p>Input 1 is allowed only when CheckAppidSwitch is 1</p>
     * @param string $CheckBoxStyle <p>Checkbox display method</p><p>Enumeration values:</p><ul><li>0: simplified version</li><li>1: basic version</li><li>2: invisible version</li></ul>
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("ChannelInfo",$param) and $param["ChannelInfo"] !== null) {
            $this->ChannelInfo = $param["ChannelInfo"];
        }

        if (array_key_exists("VerifyRank",$param) and $param["VerifyRank"] !== null) {
            $this->VerifyRank = $param["VerifyRank"];
        }

        if (array_key_exists("UserSetCapType",$param) and $param["UserSetCapType"] !== null) {
            $this->UserSetCapType = $param["UserSetCapType"];
        }

        if (array_key_exists("DefendMode",$param) and $param["DefendMode"] !== null) {
            $this->DefendMode = $param["DefendMode"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
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

        if (array_key_exists("CheckAppidSwitch",$param) and $param["CheckAppidSwitch"] !== null) {
            $this->CheckAppidSwitch = $param["CheckAppidSwitch"];
        }

        if (array_key_exists("CheckIvSwitch",$param) and $param["CheckIvSwitch"] !== null) {
            $this->CheckIvSwitch = $param["CheckIvSwitch"];
        }

        if (array_key_exists("CheckBoxStyle",$param) and $param["CheckBoxStyle"] !== null) {
            $this->CheckBoxStyle = $param["CheckBoxStyle"];
        }
    }
}
