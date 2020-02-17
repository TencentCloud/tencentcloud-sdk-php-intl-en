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
 * @method integer getDefinition() Obtain Unique ID of a content audit template.
 * @method void setDefinition(integer $Definition) Set Unique ID of a content audit template.
 * @method string getName() Obtain Name of a content audit template. Length limit: 64 characters.
 * @method void setName(string $Name) Set Name of a content audit template. Length limit: 64 characters.
 * @method string getComment() Obtain Description of a content audit template. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Description of a content audit template. Length limit: 256 characters.
 * @method PornConfigureInfoForUpdate getPornConfigure() Obtain Porn information detection control parameter.
 * @method void setPornConfigure(PornConfigureInfoForUpdate $PornConfigure) Set Porn information detection control parameter.
 * @method TerrorismConfigureInfoForUpdate getTerrorismConfigure() Obtain Terrorism information detection control parameter.
 * @method void setTerrorismConfigure(TerrorismConfigureInfoForUpdate $TerrorismConfigure) Set Terrorism information detection control parameter.
 * @method PoliticalConfigureInfoForUpdate getPoliticalConfigure() Obtain Politically sensitive information detection control parameter.
 * @method void setPoliticalConfigure(PoliticalConfigureInfoForUpdate $PoliticalConfigure) Set Politically sensitive information detection control parameter.
 * @method UserDefineConfigureInfoForUpdate getUserDefineConfigure() Obtain Custom content audit control parameter.
 * @method void setUserDefineConfigure(UserDefineConfigureInfoForUpdate $UserDefineConfigure) Set Custom content audit control parameter.
 */

/**
 *ModifyContentReviewTemplate request structure.
 */
class ModifyContentReviewTemplateRequest extends AbstractModel
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
     * @var PornConfigureInfoForUpdate Porn information detection control parameter.
     */
    public $PornConfigure;

    /**
     * @var TerrorismConfigureInfoForUpdate Terrorism information detection control parameter.
     */
    public $TerrorismConfigure;

    /**
     * @var PoliticalConfigureInfoForUpdate Politically sensitive information detection control parameter.
     */
    public $PoliticalConfigure;

    /**
     * @var UserDefineConfigureInfoForUpdate Custom content audit control parameter.
     */
    public $UserDefineConfigure;
    /**
     * @param integer $Definition Unique ID of a content audit template.
     * @param string $Name Name of a content audit template. Length limit: 64 characters.
     * @param string $Comment Description of a content audit template. Length limit: 256 characters.
     * @param PornConfigureInfoForUpdate $PornConfigure Porn information detection control parameter.
     * @param TerrorismConfigureInfoForUpdate $TerrorismConfigure Terrorism information detection control parameter.
     * @param PoliticalConfigureInfoForUpdate $PoliticalConfigure Politically sensitive information detection control parameter.
     * @param UserDefineConfigureInfoForUpdate $UserDefineConfigure Custom content audit control parameter.
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

        if (array_key_exists("UserDefineConfigure",$param) and $param["UserDefineConfigure"] !== null) {
            $this->UserDefineConfigure = new UserDefineConfigureInfoForUpdate();
            $this->UserDefineConfigure->deserialize($param["UserDefineConfigure"]);
        }
    }
}
