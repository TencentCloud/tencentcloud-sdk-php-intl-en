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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of a content audit template
 *
 * @method integer getDefinition() Obtain Unique ID of a content audit template.
 * @method void setDefinition(integer $Definition) Set Unique ID of a content audit template.
 * @method string getName() Obtain Name of a content audit template. Length limit: 64 characters.
 * @method void setName(string $Name) Set Name of a content audit template. Length limit: 64 characters.
 * @method string getComment() Obtain Description of a content audit template. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Description of a content audit template. Length limit: 256 characters.
 * @method PornConfigureInfo getPornConfigure() Obtain Porn information detection control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPornConfigure(PornConfigureInfo $PornConfigure) Set Porn information detection control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TerrorismConfigureInfo getTerrorismConfigure() Obtain The parameters for detecting sensitive information.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTerrorismConfigure(TerrorismConfigureInfo $TerrorismConfigure) Set The parameters for detecting sensitive information.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method PoliticalConfigureInfo getPoliticalConfigure() Obtain The parameters for detecting sensitive information.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPoliticalConfigure(PoliticalConfigureInfo $PoliticalConfigure) Set The parameters for detecting sensitive information.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method ProhibitedConfigureInfo getProhibitedConfigure() Obtain Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProhibitedConfigure(ProhibitedConfigureInfo $ProhibitedConfigure) Set Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method UserDefineConfigureInfo getUserDefineConfigure() Obtain Custom content audit control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserDefineConfigure(UserDefineConfigureInfo $UserDefineConfigure) Set Custom content audit control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setCreateTime(string $CreateTime) Set Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method string getUpdateTime() Obtain Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method string getType() Obtain The template type. Valid values:
* Preset
* Custom
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set The template type. Valid values:
* Preset
* Custom
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class ContentReviewTemplateItem extends AbstractModel
{
    /**
     * @var integer Unique ID of a content audit template.
     */
    public $Definition;

    /**
     * @var string Name of a content audit template. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Description of a content audit template. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var PornConfigureInfo Porn information detection control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PornConfigure;

    /**
     * @var TerrorismConfigureInfo The parameters for detecting sensitive information.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TerrorismConfigure;

    /**
     * @var PoliticalConfigureInfo The parameters for detecting sensitive information.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
     * @var UserDefineConfigureInfo Custom content audit control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserDefineConfigure;

    /**
     * @var string Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $CreateTime;

    /**
     * @var string Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $UpdateTime;

    /**
     * @var string The template type. Valid values:
* Preset
* Custom
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @param integer $Definition Unique ID of a content audit template.
     * @param string $Name Name of a content audit template. Length limit: 64 characters.
     * @param string $Comment Description of a content audit template. Length limit: 256 characters.
     * @param PornConfigureInfo $PornConfigure Porn information detection control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TerrorismConfigureInfo $TerrorismConfigure The parameters for detecting sensitive information.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param PoliticalConfigureInfo $PoliticalConfigure The parameters for detecting sensitive information.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param ProhibitedConfigureInfo $ProhibitedConfigure Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     * @param UserDefineConfigureInfo $UserDefineConfigure Custom content audit control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param string $UpdateTime Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param string $Type The template type. Valid values:
* Preset
* Custom
Note: This field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
