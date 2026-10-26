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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateRecordTemplate request structure.
 *
 * @method string getTemplateId() Obtain Template ID.
 * @method void setTemplateId(string $TemplateId) Set Template ID.
 * @method UpdateRecordTemplateData getMod() Obtain Modify Content
 * @method void setMod(UpdateRecordTemplateData $Mod) Set Modify Content
 */
class UpdateRecordTemplateRequest extends AbstractModel
{
    /**
     * @var string Template ID.
     */
    public $TemplateId;

    /**
     * @var UpdateRecordTemplateData Modify Content
     */
    public $Mod;

    /**
     * @param string $TemplateId Template ID.
     * @param UpdateRecordTemplateData $Mod Modify Content
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Mod",$param) and $param["Mod"] !== null) {
            $this->Mod = new UpdateRecordTemplateData();
            $this->Mod->deserialize($param["Mod"]);
        }
    }
}
