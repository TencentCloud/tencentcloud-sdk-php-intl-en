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
 * @method integer getDefinition() Obtain Unique ID of content audit template.
 * @method void setDefinition(integer $Definition) Set Unique ID of content audit template.
 * @method string getName() Obtain Content audit template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Content audit template name. Length limit: 64 characters.
 * @method string getComment() Obtain Content audit template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Content audit template description. Length limit: 256 characters.
 * @method PornConfigureInfo getPornConfigure() Obtain Porn information detection control parameter.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPornConfigure(PornConfigureInfo $PornConfigure) Set Porn information detection control parameter.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method TerrorismConfigureInfo getTerrorismConfigure() Obtain Terrorism information detection control parameter.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTerrorismConfigure(TerrorismConfigureInfo $TerrorismConfigure) Set Terrorism information detection control parameter.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method PoliticalConfigureInfo getPoliticalConfigure() Obtain Politically sensitive information detection control parameter.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPoliticalConfigure(PoliticalConfigureInfo $PoliticalConfigure) Set Politically sensitive information detection control parameter.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ProhibitedConfigureInfo getProhibitedConfigure() Obtain Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
Note: this parameter is not supported yet
 * @method void setProhibitedConfigure(ProhibitedConfigureInfo $ProhibitedConfigure) Set Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
Note: this parameter is not supported yet
 * @method UserDefineConfigureInfo getUserDefineConfigure() Obtain Custom content audit control parameter.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserDefineConfigure(UserDefineConfigureInfo $UserDefineConfigure) Set Custom content audit control parameter.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getReviewWallSwitch() Obtain Switch controlling whether to add audit result to review list (for human review).
<li>ON: yes;</li>
<li>OFF: no.</li>
 * @method void setReviewWallSwitch(string $ReviewWallSwitch) Set Switch controlling whether to add audit result to review list (for human review).
<li>ON: yes;</li>
<li>OFF: no.</li>
 * @method float getScreenshotInterval() Obtain Frame capturing interval in seconds. If this parameter is left empty, 1 second will be used by default. Minimum value: 0.5 seconds.
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set Frame capturing interval in seconds. If this parameter is left empty, 1 second will be used by default. Minimum value: 0.5 seconds.
 * @method string getCreateTime() Obtain Creation time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
 * @method void setCreateTime(string $CreateTime) Set Creation time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
 * @method string getUpdateTime() Obtain Last modified time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
 */

/**
 *Content audit template details
 */
class ContentReviewTemplateItem extends AbstractModel
{
    /**
     * @var integer Unique ID of content audit template.
     */
    public $Definition;

    /**
     * @var string Content audit template name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Content audit template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var PornConfigureInfo Porn information detection control parameter.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PornConfigure;

    /**
     * @var TerrorismConfigureInfo Terrorism information detection control parameter.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TerrorismConfigure;

    /**
     * @var PoliticalConfigureInfo Politically sensitive information detection control parameter.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PoliticalConfigure;

    /**
     * @var ProhibitedConfigureInfo Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
Note: this parameter is not supported yet
     */
    public $ProhibitedConfigure;

    /**
     * @var UserDefineConfigureInfo Custom content audit control parameter.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserDefineConfigure;

    /**
     * @var string Switch controlling whether to add audit result to review list (for human review).
<li>ON: yes;</li>
<li>OFF: no.</li>
     */
    public $ReviewWallSwitch;

    /**
     * @var float Frame capturing interval in seconds. If this parameter is left empty, 1 second will be used by default. Minimum value: 0.5 seconds.
     */
    public $ScreenshotInterval;

    /**
     * @var string Creation time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
     */
    public $CreateTime;

    /**
     * @var string Last modified time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
     */
    public $UpdateTime;
    /**
     * @param integer $Definition Unique ID of content audit template.
     * @param string $Name Content audit template name. Length limit: 64 characters.
     * @param string $Comment Content audit template description. Length limit: 256 characters.
     * @param PornConfigureInfo $PornConfigure Porn information detection control parameter.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param TerrorismConfigureInfo $TerrorismConfigure Terrorism information detection control parameter.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param PoliticalConfigureInfo $PoliticalConfigure Politically sensitive information detection control parameter.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ProhibitedConfigureInfo $ProhibitedConfigure Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
Note: this parameter is not supported yet
     * @param UserDefineConfigureInfo $UserDefineConfigure Custom content audit control parameter.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ReviewWallSwitch Switch controlling whether to add audit result to review list (for human review).
<li>ON: yes;</li>
<li>OFF: no.</li>
     * @param float $ScreenshotInterval Frame capturing interval in seconds. If this parameter is left empty, 1 second will be used by default. Minimum value: 0.5 seconds.
     * @param string $CreateTime Creation time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
     * @param string $UpdateTime Last modified time of template in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
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
