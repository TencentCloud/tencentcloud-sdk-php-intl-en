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
 * Modify the video cloud template data structure
 *
 * @method string getTemplateName() Obtain Template name (not required if you do not rename)
 * @method void setTemplateName(string $TemplateName) Set Template name (not required if you do not rename)
 * @method array getTimeSections() Obtain Cloud upload time period (settings can be done by week. Multiple time periods can be set for each day, with each time period not less than 10 minutes)
 * @method void setTimeSections(array $TimeSections) Set Cloud upload time period (settings can be done by week. Multiple time periods can be set for each day, with each time period not less than 10 minutes)
 * @method array getDevTimeSections() Obtain Recording time period (set by week. Multiple time periods can be set each day, each not less than 10 minutes)
 * @method void setDevTimeSections(array $DevTimeSections) Set Recording time period (set by week. Multiple time periods can be set each day, each not less than 10 minutes)
 * @method integer getScale() Obtain Cloud speed multiplication (supports 1x, 2x, and 4x).
 * @method void setScale(integer $Scale) Set Cloud speed multiplication (supports 1x, 2x, and 4x).
 */
class UpdateRecordBackupTemplateModify extends AbstractModel
{
    /**
     * @var string Template name (not required if you do not rename)
     */
    public $TemplateName;

    /**
     * @var array Cloud upload time period (settings can be done by week. Multiple time periods can be set for each day, with each time period not less than 10 minutes)
     */
    public $TimeSections;

    /**
     * @var array Recording time period (set by week. Multiple time periods can be set each day, each not less than 10 minutes)
     */
    public $DevTimeSections;

    /**
     * @var integer Cloud speed multiplication (supports 1x, 2x, and 4x).
     */
    public $Scale;

    /**
     * @param string $TemplateName Template name (not required if you do not rename)
     * @param array $TimeSections Cloud upload time period (settings can be done by week. Multiple time periods can be set for each day, with each time period not less than 10 minutes)
     * @param array $DevTimeSections Recording time period (set by week. Multiple time periods can be set each day, each not less than 10 minutes)
     * @param integer $Scale Cloud speed multiplication (supports 1x, 2x, and 4x).
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

        if (array_key_exists("DevTimeSections",$param) and $param["DevTimeSections"] !== null) {
            $this->DevTimeSections = [];
            foreach ($param["DevTimeSections"] as $key => $value){
                $obj = new RecordTemplateTimeSections();
                $obj->deserialize($value);
                array_push($this->DevTimeSections, $obj);
            }
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }
    }
}
