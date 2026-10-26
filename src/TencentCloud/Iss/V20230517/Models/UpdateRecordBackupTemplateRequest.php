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
 * UpdateRecordBackupTemplate request structure.
 *
 * @method string getTemplateId() Obtain Template ID (obtain from the ListRecordBackupTemplates API for querying the video recording cloud template list)
 * @method void setTemplateId(string $TemplateId) Set Template ID (obtain from the ListRecordBackupTemplates API for querying the video recording cloud template list)
 * @method UpdateRecordBackupTemplateModify getMod() Obtain Modify the template data for video recording upload to cloud
 * @method void setMod(UpdateRecordBackupTemplateModify $Mod) Set Modify the template data for video recording upload to cloud
 */
class UpdateRecordBackupTemplateRequest extends AbstractModel
{
    /**
     * @var string Template ID (obtain from the ListRecordBackupTemplates API for querying the video recording cloud template list)
     */
    public $TemplateId;

    /**
     * @var UpdateRecordBackupTemplateModify Modify the template data for video recording upload to cloud
     */
    public $Mod;

    /**
     * @param string $TemplateId Template ID (obtain from the ListRecordBackupTemplates API for querying the video recording cloud template list)
     * @param UpdateRecordBackupTemplateModify $Mod Modify the template data for video recording upload to cloud
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
            $this->Mod = new UpdateRecordBackupTemplateModify();
            $this->Mod->deserialize($param["Mod"]);
        }
    }
}
