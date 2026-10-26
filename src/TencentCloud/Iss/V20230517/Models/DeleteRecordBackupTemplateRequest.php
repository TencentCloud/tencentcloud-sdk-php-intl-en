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
 * DeleteRecordBackupTemplate request structure.
 *
 * @method string getTemplateId() Obtain Template ID (obtain from the ListRecordBackupTemplates API for querying the video recording cloud template list)
 * @method void setTemplateId(string $TemplateId) Set Template ID (obtain from the ListRecordBackupTemplates API for querying the video recording cloud template list)
 */
class DeleteRecordBackupTemplateRequest extends AbstractModel
{
    /**
     * @var string Template ID (obtain from the ListRecordBackupTemplates API for querying the video recording cloud template list)
     */
    public $TemplateId;

    /**
     * @param string $TemplateId Template ID (obtain from the ListRecordBackupTemplates API for querying the video recording cloud template list)
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
    }
}
