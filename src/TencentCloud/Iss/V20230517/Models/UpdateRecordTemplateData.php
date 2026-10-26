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
 * Request data structure for modifying a real-time cloud template
 *
 * @method string getTemplateName() Obtain Template name. If you do not modify the name, you do not need to include this field.
 * @method void setTemplateName(string $TemplateName) Set Template name. If you do not modify the name, you do not need to include this field.
 * @method array getTimeSections() Obtain Cloud upload time period. If you do not modify the name, you do not need to include this field.
 * @method void setTimeSections(array $TimeSections) Set Cloud upload time period. If you do not modify the name, you do not need to include this field.
 */
class UpdateRecordTemplateData extends AbstractModel
{
    /**
     * @var string Template name. If you do not modify the name, you do not need to include this field.
     */
    public $TemplateName;

    /**
     * @var array Cloud upload time period. If you do not modify the name, you do not need to include this field.
     */
    public $TimeSections;

    /**
     * @param string $TemplateName Template name. If you do not modify the name, you do not need to include this field.
     * @param array $TimeSections Cloud upload time period. If you do not modify the name, you do not need to include this field.
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
