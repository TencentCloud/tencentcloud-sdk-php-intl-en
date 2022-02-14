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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Intelligent recognition template details
 *
 * @method integer getDefinition() Obtain Unique ID of an intelligent recognition template
 * @method void setDefinition(integer $Definition) Set Unique ID of an intelligent recognition template
 * @method string getName() Obtain Name of an intelligent recognition template. Max 64 characters
 * @method void setName(string $Name) Set Name of an intelligent recognition template. Max 64 characters
 * @method string getComment() Obtain Description of an intelligent recognition template. Max 256 characters
 * @method void setComment(string $Comment) Set Description of an intelligent recognition template. Max 256 characters
 * @method PornConfigureInfo getPornConfigure() Obtain Parameters for recognition of pornographic content
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setPornConfigure(PornConfigureInfo $PornConfigure) Set Parameters for recognition of pornographic content
Note: This field may return `null`, indicating that no valid value can be found.
 * @method TerrorismConfigureInfo getTerrorismConfigure() Obtain Parameters for recognition of terrorism content
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setTerrorismConfigure(TerrorismConfigureInfo $TerrorismConfigure) Set Parameters for recognition of terrorism content
Note: This field may return `null`, indicating that no valid value can be found.
 * @method PoliticalConfigureInfo getPoliticalConfigure() Obtain Parameters for recognition of politically sensitive content
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setPoliticalConfigure(PoliticalConfigureInfo $PoliticalConfigure) Set Parameters for recognition of politically sensitive content
Note: This field may return `null`, indicating that no valid value can be found.
 * @method ProhibitedConfigureInfo getProhibitedConfigure() Obtain Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProhibitedConfigure(ProhibitedConfigureInfo $ProhibitedConfigure) Set Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method UserDefineConfigureInfo getUserDefineConfigure() Obtain Custom recognition parameters
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setUserDefineConfigure(UserDefineConfigureInfo $UserDefineConfigure) Set Custom recognition parameters
Note: This field may return `null`, indicating that no valid value can be found.
 * @method string getReviewWallSwitch() Obtain Whether to subject the recognition result to human review
<li>ON</li>
<li>OFF</li>
 * @method void setReviewWallSwitch(string $ReviewWallSwitch) Set Whether to subject the recognition result to human review
<li>ON</li>
<li>OFF</li>
 * @method float getScreenshotInterval() Obtain Frame capturing interval in seconds. If this parameter is left empty, 1 second will be used by default. Minimum value: 0.5 seconds.
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set Frame capturing interval in seconds. If this parameter is left empty, 1 second will be used by default. Minimum value: 0.5 seconds.
 * @method string getCreateTime() Obtain Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class ContentReviewTemplateItem extends AbstractModel
{
    /**
     * @var integer Unique ID of an intelligent recognition template
     */
    public $Definition;

    /**
     * @var string Name of an intelligent recognition template. Max 64 characters
     */
    public $Name;

    /**
     * @var string Description of an intelligent recognition template. Max 256 characters
     */
    public $Comment;

    /**
     * @var PornConfigureInfo Parameters for recognition of pornographic content
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $PornConfigure;

    /**
     * @var TerrorismConfigureInfo Parameters for recognition of terrorism content
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $TerrorismConfigure;

    /**
     * @var PoliticalConfigureInfo Parameters for recognition of politically sensitive content
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $PoliticalConfigure;

    /**
     * @var ProhibitedConfigureInfo Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProhibitedConfigure;

    /**
     * @var UserDefineConfigureInfo Custom recognition parameters
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $UserDefineConfigure;

    /**
     * @var string Whether to subject the recognition result to human review
<li>ON</li>
<li>OFF</li>
     */
    public $ReviewWallSwitch;

    /**
     * @var float Frame capturing interval in seconds. If this parameter is left empty, 1 second will be used by default. Minimum value: 0.5 seconds.
     */
    public $ScreenshotInterval;

    /**
     * @var string Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @param integer $Definition Unique ID of an intelligent recognition template
     * @param string $Name Name of an intelligent recognition template. Max 64 characters
     * @param string $Comment Description of an intelligent recognition template. Max 256 characters
     * @param PornConfigureInfo $PornConfigure Parameters for recognition of pornographic content
Note: This field may return `null`, indicating that no valid value can be found.
     * @param TerrorismConfigureInfo $TerrorismConfigure Parameters for recognition of terrorism content
Note: This field may return `null`, indicating that no valid value can be found.
     * @param PoliticalConfigureInfo $PoliticalConfigure Parameters for recognition of politically sensitive content
Note: This field may return `null`, indicating that no valid value can be found.
     * @param ProhibitedConfigureInfo $ProhibitedConfigure Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     * @param UserDefineConfigureInfo $UserDefineConfigure Custom recognition parameters
Note: This field may return `null`, indicating that no valid value can be found.
     * @param string $ReviewWallSwitch Whether to subject the recognition result to human review
<li>ON</li>
<li>OFF</li>
     * @param float $ScreenshotInterval Frame capturing interval in seconds. If this parameter is left empty, 1 second will be used by default. Minimum value: 0.5 seconds.
     * @param string $CreateTime Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("PornConfigure",$param) and $param["PornConfigure"] !== null) {
            $this->PornConfigure = new PornConfigureInfo();
            $this->PornConfigure->deserialize($param["PornConfigure"]);
        }

        if (array_key_exists("TerrorismConfigure",$param) and $param["TerrorismConfigure"] !== null) {
            $this->TerrorismConfigure = new TerrorismConfigureInfo();
            $this->TerrorismConfigure->deserialize($param["TerrorismConfigure"]);
        }

        if (array_key_exists("PoliticalConfigure",$param) and $param["PoliticalConfigure"] !== null) {
            $this->PoliticalConfigure = new PoliticalConfigureInfo();
            $this->PoliticalConfigure->deserialize($param["PoliticalConfigure"]);
        }

        if (array_key_exists("ProhibitedConfigure",$param) and $param["ProhibitedConfigure"] !== null) {
            $this->ProhibitedConfigure = new ProhibitedConfigureInfo();
            $this->ProhibitedConfigure->deserialize($param["ProhibitedConfigure"]);
        }

        if (array_key_exists("UserDefineConfigure",$param) and $param["UserDefineConfigure"] !== null) {
            $this->UserDefineConfigure = new UserDefineConfigureInfo();
            $this->UserDefineConfigure->deserialize($param["UserDefineConfigure"]);
        }

        if (array_key_exists("ReviewWallSwitch",$param) and $param["ReviewWallSwitch"] !== null) {
            $this->ReviewWallSwitch = $param["ReviewWallSwitch"];
        }

        if (array_key_exists("ScreenshotInterval",$param) and $param["ScreenshotInterval"] !== null) {
            $this->ScreenshotInterval = $param["ScreenshotInterval"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
