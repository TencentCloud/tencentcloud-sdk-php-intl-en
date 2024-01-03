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
 * @method integer getDefinition() Obtain Unique ID of an intelligent content recognition template.
 * @method void setDefinition(integer $Definition) Set Unique ID of an intelligent content recognition template.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getName() Obtain Name of an intelligent content recognition template. Length limit: 64 characters.
 * @method void setName(string $Name) Set Name of an intelligent content recognition template. Length limit: 64 characters.
 * @method string getComment() Obtain Description of an intelligent content recognition template. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Description of an intelligent content recognition template. Length limit: 256 characters.
 * @method TerrorismConfigureInfoForUpdate getTerrorismConfigure() Obtain Control parameter for terrorism information.
 * @method void setTerrorismConfigure(TerrorismConfigureInfoForUpdate $TerrorismConfigure) Set Control parameter for terrorism information.
 * @method PornConfigureInfoForUpdate getPornConfigure() Obtain Control parameter for porn information.
 * @method void setPornConfigure(PornConfigureInfoForUpdate $PornConfigure) Set Control parameter for porn information.
 * @method PoliticalConfigureInfoForUpdate getPoliticalConfigure() Obtain Control parameter for politically sensitive information.
 * @method void setPoliticalConfigure(PoliticalConfigureInfoForUpdate $PoliticalConfigure) Set Control parameter for politically sensitive information.
 * @method ProhibitedConfigureInfoForUpdate getProhibitedConfigure() Obtain Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
 * @method void setProhibitedConfigure(ProhibitedConfigureInfoForUpdate $ProhibitedConfigure) Set Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
 * @method UserDefineConfigureInfoForUpdate getUserDefineConfigure() Obtain Control parameter for custom intelligent content recognition tasks.
 * @method void setUserDefineConfigure(UserDefineConfigureInfoForUpdate $UserDefineConfigure) Set Control parameter for custom intelligent content recognition tasks.
 * @method float getScreenshotInterval() Obtain Frame capturing interval in seconds. Minimum value: 0.5 seconds.
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set Frame capturing interval in seconds. Minimum value: 0.5 seconds.
 * @method string getReviewWallSwitch() Obtain Whether to allow the recognition result to enter the intelligent recognition platform (for human recognition).
<li>ON: yes</li>
<li>OFF: no</li>
 * @method void setReviewWallSwitch(string $ReviewWallSwitch) Set Whether to allow the recognition result to enter the intelligent recognition platform (for human recognition).
<li>ON: yes</li>
<li>OFF: no</li>
 */
class ModifyContentReviewTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique ID of an intelligent content recognition template.
     */
    public $Definition;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Name of an intelligent content recognition template. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Description of an intelligent content recognition template. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var TerrorismConfigureInfoForUpdate Control parameter for terrorism information.
     */
    public $TerrorismConfigure;

    /**
     * @var PornConfigureInfoForUpdate Control parameter for porn information.
     */
    public $PornConfigure;

    /**
     * @var PoliticalConfigureInfoForUpdate Control parameter for politically sensitive information.
     */
    public $PoliticalConfigure;

    /**
     * @var ProhibitedConfigureInfoForUpdate Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
     */
    public $ProhibitedConfigure;

    /**
     * @var UserDefineConfigureInfoForUpdate Control parameter for custom intelligent content recognition tasks.
     */
    public $UserDefineConfigure;

    /**
     * @var float Frame capturing interval in seconds. Minimum value: 0.5 seconds.
     */
    public $ScreenshotInterval;

    /**
     * @var string Whether to allow the recognition result to enter the intelligent recognition platform (for human recognition).
<li>ON: yes</li>
<li>OFF: no</li>
     */
    public $ReviewWallSwitch;

    /**
     * @param integer $Definition Unique ID of an intelligent content recognition template.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $Name Name of an intelligent content recognition template. Length limit: 64 characters.
     * @param string $Comment Description of an intelligent content recognition template. Length limit: 256 characters.
     * @param TerrorismConfigureInfoForUpdate $TerrorismConfigure Control parameter for terrorism information.
     * @param PornConfigureInfoForUpdate $PornConfigure Control parameter for porn information.
     * @param PoliticalConfigureInfoForUpdate $PoliticalConfigure Control parameter for politically sensitive information.
     * @param ProhibitedConfigureInfoForUpdate $ProhibitedConfigure Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
     * @param UserDefineConfigureInfoForUpdate $UserDefineConfigure Control parameter for custom intelligent content recognition tasks.
     * @param float $ScreenshotInterval Frame capturing interval in seconds. Minimum value: 0.5 seconds.
     * @param string $ReviewWallSwitch Whether to allow the recognition result to enter the intelligent recognition platform (for human recognition).
<li>ON: yes</li>
<li>OFF: no</li>
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("TerrorismConfigure",$param) and $param["TerrorismConfigure"] !== null) {
            $this->TerrorismConfigure = new TerrorismConfigureInfoForUpdate();
            $this->TerrorismConfigure->deserialize($param["TerrorismConfigure"]);
        }

        if (array_key_exists("PornConfigure",$param) and $param["PornConfigure"] !== null) {
            $this->PornConfigure = new PornConfigureInfoForUpdate();
            $this->PornConfigure->deserialize($param["PornConfigure"]);
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
    }
}
