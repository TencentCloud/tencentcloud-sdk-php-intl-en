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
 * CreateContentReviewTemplate request structure.
 *
 * @method string getName() Obtain The name of the content moderation template. Length limit: 64 characters.
 * @method void setName(string $Name) Set The name of the content moderation template. Length limit: 64 characters.
 * @method string getComment() Obtain The template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set The template description. Length limit: 256 characters.
 * @method PornConfigureInfo getPornConfigure() Obtain Control parameter for a pornography detection task.
 * @method void setPornConfigure(PornConfigureInfo $PornConfigure) Set Control parameter for a pornography detection task.
 * @method TerrorismConfigureInfo getTerrorismConfigure() Obtain Control parameter for a violence detection task.
 * @method void setTerrorismConfigure(TerrorismConfigureInfo $TerrorismConfigure) Set Control parameter for a violence detection task.
 * @method PoliticalConfigureInfo getPoliticalConfigure() Obtain Control parameter for a sensitive content detection task.
 * @method void setPoliticalConfigure(PoliticalConfigureInfo $PoliticalConfigure) Set Control parameter for a sensitive content detection task.
 * @method ProhibitedConfigureInfo getProhibitedConfigure() Obtain Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
Note: this parameter is not supported yet.
 * @method void setProhibitedConfigure(ProhibitedConfigureInfo $ProhibitedConfigure) Set Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
Note: this parameter is not supported yet.
 * @method UserDefineConfigureInfo getUserDefineConfigure() Obtain Custom content moderation parameters.
 * @method void setUserDefineConfigure(UserDefineConfigureInfo $UserDefineConfigure) Set Custom content moderation parameters.
 */
class CreateContentReviewTemplateRequest extends AbstractModel
{
    /**
     * @var string The name of the content moderation template. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string The template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var PornConfigureInfo Control parameter for a pornography detection task.
     */
    public $PornConfigure;

    /**
     * @var TerrorismConfigureInfo Control parameter for a violence detection task.
     */
    public $TerrorismConfigure;

    /**
     * @var PoliticalConfigureInfo Control parameter for a sensitive content detection task.
     */
    public $PoliticalConfigure;

    /**
     * @var ProhibitedConfigureInfo Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
Note: this parameter is not supported yet.
     */
    public $ProhibitedConfigure;

    /**
     * @var UserDefineConfigureInfo Custom content moderation parameters.
     */
    public $UserDefineConfigure;

    /**
     * @param string $Name The name of the content moderation template. Length limit: 64 characters.
     * @param string $Comment The template description. Length limit: 256 characters.
     * @param PornConfigureInfo $PornConfigure Control parameter for a pornography detection task.
     * @param TerrorismConfigureInfo $TerrorismConfigure Control parameter for a violence detection task.
     * @param PoliticalConfigureInfo $PoliticalConfigure Control parameter for a sensitive content detection task.
     * @param ProhibitedConfigureInfo $ProhibitedConfigure Control parameter of prohibited information detection. Prohibited information includes:
<li>Abusive;</li>
<li>Drug-related.</li>
Note: this parameter is not supported yet.
     * @param UserDefineConfigureInfo $UserDefineConfigure Custom content moderation parameters.
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
    }
}
