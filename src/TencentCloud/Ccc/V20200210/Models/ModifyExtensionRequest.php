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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyExtension request structure.
 *
 * @method integer getSdkAppId() Obtain Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method string getExtensionId() Obtain Extension.
 * @method void setExtensionId(string $ExtensionId) Set Extension.
 * @method string getExtensionName() Obtain Extension name.
 * @method void setExtensionName(string $ExtensionName) Set Extension name.
 * @method array getSkillGroupIds() Obtain Affiliated skill group list.
 * @method void setSkillGroupIds(array $SkillGroupIds) Set Affiliated skill group list.
 * @method string getRelation() Obtain Bind agent email account.
 * @method void setRelation(string $Relation) Set Bind agent email account.
 */
class ModifyExtensionRequest extends AbstractModel
{
    /**
     * @var integer Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var string Extension.
     */
    public $ExtensionId;

    /**
     * @var string Extension name.
     */
    public $ExtensionName;

    /**
     * @var array Affiliated skill group list.
     */
    public $SkillGroupIds;

    /**
     * @var string Bind agent email account.
     */
    public $Relation;

    /**
     * @param integer $SdkAppId Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param string $ExtensionId Extension.
     * @param string $ExtensionName Extension name.
     * @param array $SkillGroupIds Affiliated skill group list.
     * @param string $Relation Bind agent email account.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("ExtensionId",$param) and $param["ExtensionId"] !== null) {
            $this->ExtensionId = $param["ExtensionId"];
        }

        if (array_key_exists("ExtensionName",$param) and $param["ExtensionName"] !== null) {
            $this->ExtensionName = $param["ExtensionName"];
        }

        if (array_key_exists("SkillGroupIds",$param) and $param["SkillGroupIds"] !== null) {
            $this->SkillGroupIds = $param["SkillGroupIds"];
        }

        if (array_key_exists("Relation",$param) and $param["Relation"] !== null) {
            $this->Relation = $param["Relation"];
        }
    }
}
