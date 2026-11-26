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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteJustInTimeTranscodeTemplates request structure.
 *
 * @method string getZoneId() Obtain Site ID.
 * @method void setZoneId(string $ZoneId) Set Site ID.
 * @method array getTemplateIds() Obtain Array of unique identifiers of instant transcoding templates to be deleted. Length limit: 100.
 * @method void setTemplateIds(array $TemplateIds) Set Array of unique identifiers of instant transcoding templates to be deleted. Length limit: 100.
 */
class DeleteJustInTimeTranscodeTemplatesRequest extends AbstractModel
{
    /**
     * @var string Site ID.
     */
    public $ZoneId;

    /**
     * @var array Array of unique identifiers of instant transcoding templates to be deleted. Length limit: 100.
     */
    public $TemplateIds;

    /**
     * @param string $ZoneId Site ID.
     * @param array $TemplateIds Array of unique identifiers of instant transcoding templates to be deleted. Length limit: 100.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("TemplateIds",$param) and $param["TemplateIds"] !== null) {
            $this->TemplateIds = $param["TemplateIds"];
        }
    }
}
