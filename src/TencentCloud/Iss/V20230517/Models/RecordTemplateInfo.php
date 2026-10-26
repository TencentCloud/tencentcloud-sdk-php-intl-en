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
 * Real-time cloud template information data
 *
 * @method string getTemplateId() Obtain Template ID.
 * @method void setTemplateId(string $TemplateId) Set Template ID.
 * @method string getTemplateName() Obtain Template name
 * @method void setTemplateName(string $TemplateName) Set Template name
 * @method array getTimeSections() Obtain Cloud upload time period. Settings can be done by week. Multiple time periods can be set for each day, with each time period greater than or equal to 10 minutes.
 * @method void setTimeSections(array $TimeSections) Set Cloud upload time period. Settings can be done by week. Multiple time periods can be set for each day, with each time period greater than or equal to 10 minutes.
 */
class RecordTemplateInfo extends AbstractModel
{
    /**
     * @var string Template ID.
     */
    public $TemplateId;

    /**
     * @var string Template name
     */
    public $TemplateName;

    /**
     * @var array Cloud upload time period. Settings can be done by week. Multiple time periods can be set for each day, with each time period greater than or equal to 10 minutes.
     */
    public $TimeSections;

    /**
     * @param string $TemplateId Template ID.
     * @param string $TemplateName Template name
     * @param array $TimeSections Cloud upload time period. Settings can be done by week. Multiple time periods can be set for each day, with each time period greater than or equal to 10 minutes.
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

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TimeSections",$param) and $param["TimeSections"] !== null) {
            $this->TimeSections = [];
            foreach ($param["TimeSections"] as $key => $value){
                $obj = new RecordTemplateTimeSections();
                $obj->deserialize($value);
                array_push($this->TimeSections, $obj);
            }
        }
    }
}
