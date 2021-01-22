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
 * ModifyContentReviewTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique ID of an intelligent content recognition template
 * @method void setDefinition(integer $Definition) Set Unique ID of an intelligent content recognition template
 * @method string getName() Obtain Name of an intelligent content recognition template. Length limit: 64 characters.
 * @method void setName(string $Name) Set Name of an intelligent content recognition template. Length limit: 64 characters.
 * @method string getComment() Obtain Description of an intelligent content recognition template. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Description of an intelligent content recognition template. Length limit: 256 characters.
 * @method PornConfigureInfoForUpdate getPornConfigure() Obtain Control parameter for offensive content
 * @method void setPornConfigure(PornConfigureInfoForUpdate $PornConfigure) Set Control parameter for offensive content
 * @method TerrorismConfigureInfoForUpdate getTerrorismConfigure() Obtain Control parameter for insecure content
 * @method void setTerrorismConfigure(TerrorismConfigureInfoForUpdate $TerrorismConfigure) Set Control parameter for insecure content
 * @method PoliticalConfigureInfoForUpdate getPoliticalConfigure() Obtain Control parameter for inappropriate content
 * @method void setPoliticalConfigure(PoliticalConfigureInfoForUpdate $PoliticalConfigure) Set Control parameter for inappropriate content
 * @method ProhibitedConfigureInfoForUpdate getProhibitedConfigure() Obtain Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
Note: this parameter is not supported yet.
 * @method void setProhibitedConfigure(ProhibitedConfigureInfoForUpdate $ProhibitedConfigure) Set Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
Note: this parameter is not supported yet.
 * @method UserDefineConfigureInfoForUpdate getUserDefineConfigure() Obtain Control parameter for custom intelligent content recognition
 * @method void setUserDefineConfigure(UserDefineConfigureInfoForUpdate $UserDefineConfigure) Set Control parameter for custom intelligent content recognition
 */
class ModifyContentReviewTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique ID of an intelligent content recognition template
     */
    public $Definition;

    /**
     * @var string Name of an intelligent content recognition template. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Description of an intelligent content recognition template. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var PornConfigureInfoForUpdate Control parameter for offensive content
     */
    public $PornConfigure;

    /**
     * @var TerrorismConfigureInfoForUpdate Control parameter for insecure content
     */
    public $TerrorismConfigure;

    /**
     * @var PoliticalConfigureInfoForUpdate Control parameter for inappropriate content
     */
    public $PoliticalConfigure;

    /**
     * @var ProhibitedConfigureInfoForUpdate Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
Note: this parameter is not supported yet.
     */
    public $ProhibitedConfigure;

    /**
     * @var UserDefineConfigureInfoForUpdate Control parameter for custom intelligent content recognition
     */
    public $UserDefineConfigure;

    /**
     * @param integer $Definition Unique ID of an intelligent content recognition template
     * @param string $Name Name of an intelligent content recognition template. Length limit: 64 characters.
     * @param string $Comment Description of an intelligent content recognition template. Length limit: 256 characters.
     * @param PornConfigureInfoForUpdate $PornConfigure Control parameter for offensive content
     * @param TerrorismConfigureInfoForUpdate $TerrorismConfigure Control parameter for insecure content
     * @param PoliticalConfigureInfoForUpdate $PoliticalConfigure Control parameter for inappropriate content
     * @param ProhibitedConfigureInfoForUpdate $ProhibitedConfigure Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
Note: this parameter is not supported yet.
     * @param UserDefineConfigureInfoForUpdate $UserDefineConfigure Control parameter for custom intelligent content recognition
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
    }
}
