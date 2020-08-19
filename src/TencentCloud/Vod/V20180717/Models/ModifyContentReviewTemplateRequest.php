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
 * ModifyContentReviewTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique ID of content audit template.
 * @method void setDefinition(integer $Definition) Set Unique ID of content audit template.
 * @method string getName() Obtain Content audit template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Content audit template name. Length limit: 64 characters.
 * @method string getComment() Obtain Description of content audit template. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Description of content audit template. Length limit: 256 characters.
 * @method PornConfigureInfoForUpdate getPornConfigure() Obtain Control parameter of porn detection.
 * @method void setPornConfigure(PornConfigureInfoForUpdate $PornConfigure) Set Control parameter of porn detection.
 * @method TerrorismConfigureInfoForUpdate getTerrorismConfigure() Obtain Control parameter of terrorism information detection.
 * @method void setTerrorismConfigure(TerrorismConfigureInfoForUpdate $TerrorismConfigure) Set Control parameter of terrorism information detection.
 * @method PoliticalConfigureInfoForUpdate getPoliticalConfigure() Obtain Control parameter of politically sensitive information detection.
 * @method void setPoliticalConfigure(PoliticalConfigureInfoForUpdate $PoliticalConfigure) Set Control parameter of politically sensitive information detection.
 * @method ProhibitedConfigureInfoForUpdate getProhibitedConfigure() Obtain Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
 * @method void setProhibitedConfigure(ProhibitedConfigureInfoForUpdate $ProhibitedConfigure) Set Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
 * @method UserDefineConfigureInfoForUpdate getUserDefineConfigure() Obtain Control parameter of custom content audit.
 * @method void setUserDefineConfigure(UserDefineConfigureInfoForUpdate $UserDefineConfigure) Set Control parameter of custom content audit.
 * @method float getScreenshotInterval() Obtain Frame capturing interval in seconds. Minimum value: 0.5 seconds.
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set Frame capturing interval in seconds. Minimum value: 0.5 seconds.
 * @method string getReviewWallSwitch() Obtain Switch controlling whether to add audit result to review list (for human review).
<li>ON: yes;</li>
<li>OFF: no.</li>
 * @method void setReviewWallSwitch(string $ReviewWallSwitch) Set Switch controlling whether to add audit result to review list (for human review).
<li>ON: yes;</li>
<li>OFF: no.</li>
 * @method integer getSubAppId() Obtain [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 * @method void setSubAppId(integer $SubAppId) Set [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 */
class ModifyContentReviewTemplateRequest extends AbstractModel
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
     * @var string Description of content audit template. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var PornConfigureInfoForUpdate Control parameter of porn detection.
     */
    public $PornConfigure;

    /**
     * @var TerrorismConfigureInfoForUpdate Control parameter of terrorism information detection.
     */
    public $TerrorismConfigure;

    /**
     * @var PoliticalConfigureInfoForUpdate Control parameter of politically sensitive information detection.
     */
    public $PoliticalConfigure;

    /**
     * @var ProhibitedConfigureInfoForUpdate Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
     */
    public $ProhibitedConfigure;

    /**
     * @var UserDefineConfigureInfoForUpdate Control parameter of custom content audit.
     */
    public $UserDefineConfigure;

    /**
     * @var float Frame capturing interval in seconds. Minimum value: 0.5 seconds.
     */
    public $ScreenshotInterval;

    /**
     * @var string Switch controlling whether to add audit result to review list (for human review).
<li>ON: yes;</li>
<li>OFF: no.</li>
     */
    public $ReviewWallSwitch;

    /**
     * @var integer [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
     */
    public $SubAppId;

    /**
     * @param integer $Definition Unique ID of content audit template.
     * @param string $Name Content audit template name. Length limit: 64 characters.
     * @param string $Comment Description of content audit template. Length limit: 256 characters.
     * @param PornConfigureInfoForUpdate $PornConfigure Control parameter of porn detection.
     * @param TerrorismConfigureInfoForUpdate $TerrorismConfigure Control parameter of terrorism information detection.
     * @param PoliticalConfigureInfoForUpdate $PoliticalConfigure Control parameter of politically sensitive information detection.
     * @param ProhibitedConfigureInfoForUpdate $ProhibitedConfigure Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
     * @param UserDefineConfigureInfoForUpdate $UserDefineConfigure Control parameter of custom content audit.
     * @param float $ScreenshotInterval Frame capturing interval in seconds. Minimum value: 0.5 seconds.
     * @param string $ReviewWallSwitch Switch controlling whether to add audit result to review list (for human review).
<li>ON: yes;</li>
<li>OFF: no.</li>
     * @param integer $SubAppId [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
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
            $this->PornConfigure = new PornConfigureInfoForUpdate();
            $this->PornConfigure->deserialize($param["PornConfigure"]);
        }

        if (array_key_exists("TerrorismConfigure",$param) and $param["TerrorismConfigure"] !== null) {
            $this->TerrorismConfigure = new TerrorismConfigureInfoForUpdate();
            $this->TerrorismConfigure->deserialize($param["TerrorismConfigure"]);
        }

        if (array_key_exists("PoliticalConfigure",$param) and $param["PoliticalConfigure"] !== null) {
            $this->PoliticalConfigure = new PoliticalConfigureInfoForUpdate();
            $this->PoliticalConfigure->deserialize($param["PoliticalConfigure"]);
        }

        if (array_key_exists("ProhibitedConfigure",$param) and $param["ProhibitedConfigure"] !== null) {
            $this->ProhibitedConfigure = new ProhibitedConfigureInfoForUpdate();
            $this->ProhibitedConfigure->deserialize($param["ProhibitedConfigure"]);
        }

        if (array_key_exists("UserDefineConfigure",$param) and $param["UserDefineConfigure"] !== null) {
            $this->UserDefineConfigure = new UserDefineConfigureInfoForUpdate();
            $this->UserDefineConfigure->deserialize($param["UserDefineConfigure"]);
        }

        if (array_key_exists("ScreenshotInterval",$param) and $param["ScreenshotInterval"] !== null) {
            $this->ScreenshotInterval = $param["ScreenshotInterval"];
        }

        if (array_key_exists("ReviewWallSwitch",$param) and $param["ReviewWallSwitch"] !== null) {
            $this->ReviewWallSwitch = $param["ReviewWallSwitch"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
