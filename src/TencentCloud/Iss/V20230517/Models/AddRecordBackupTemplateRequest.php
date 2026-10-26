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
 * AddRecordBackupTemplate request structure.
 *
 * @method string getTemplateName() Obtain <p>Template name (supports only Chinese, English, number, _, -, length not exceeding 32 characters. Template name must be globally unique, cannot be empty, and must be unique)</p>
 * @method void setTemplateName(string $TemplateName) Set <p>Template name (supports only Chinese, English, number, _, -, length not exceeding 32 characters. Template name must be globally unique, cannot be empty, and must be unique)</p>
 * @method array getTimeSections() Obtain <p>Cloud Upload Time Period (settings can be done by week, supports setting multiple time periods per day, each time period not less than 10 minutes)</p>
 * @method void setTimeSections(array $TimeSections) Set <p>Cloud Upload Time Period (settings can be done by week, supports setting multiple time periods per day, each time period not less than 10 minutes)</p>
 * @method array getDevTimeSections() Obtain <p>Recording time period (settings can be done by week, support setting multiple time periods per day, each time period not less than 10 minutes)</p>
 * @method void setDevTimeSections(array $DevTimeSections) Set <p>Recording time period (settings can be done by week, support setting multiple time periods per day, each time period not less than 10 minutes)</p>
 * @method integer getScale() Obtain <p>Speed multiplication for cloud migration (supports 1x, 2x, and 4x)</p>
 * @method void setScale(integer $Scale) Set <p>Speed multiplication for cloud migration (supports 1x, 2x, and 4x)</p>
 * @method integer getDayOffset() Obtain <p>Cycle offset. Default: 1. It means to pull yesterday's video recording to the device. 0 means to pull today's video recording to the device. 3 means to pull the video recording to the device from the day before yesterday.</p><p>Value range: [0, 90]</p><p>Default value: 1</p>
 * @method void setDayOffset(integer $DayOffset) Set <p>Cycle offset. Default: 1. It means to pull yesterday's video recording to the device. 0 means to pull today's video recording to the device. 3 means to pull the video recording to the device from the day before yesterday.</p><p>Value range: [0, 90]</p><p>Default value: 1</p>
 */
class AddRecordBackupTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>Template name (supports only Chinese, English, number, _, -, length not exceeding 32 characters. Template name must be globally unique, cannot be empty, and must be unique)</p>
     */
    public $TemplateName;

    /**
     * @var array <p>Cloud Upload Time Period (settings can be done by week, supports setting multiple time periods per day, each time period not less than 10 minutes)</p>
     */
    public $TimeSections;

    /**
     * @var array <p>Recording time period (settings can be done by week, support setting multiple time periods per day, each time period not less than 10 minutes)</p>
     */
    public $DevTimeSections;

    /**
     * @var integer <p>Speed multiplication for cloud migration (supports 1x, 2x, and 4x)</p>
     */
    public $Scale;

    /**
     * @var integer <p>Cycle offset. Default: 1. It means to pull yesterday's video recording to the device. 0 means to pull today's video recording to the device. 3 means to pull the video recording to the device from the day before yesterday.</p><p>Value range: [0, 90]</p><p>Default value: 1</p>
     */
    public $DayOffset;

    /**
     * @param string $TemplateName <p>Template name (supports only Chinese, English, number, _, -, length not exceeding 32 characters. Template name must be globally unique, cannot be empty, and must be unique)</p>
     * @param array $TimeSections <p>Cloud Upload Time Period (settings can be done by week, supports setting multiple time periods per day, each time period not less than 10 minutes)</p>
     * @param array $DevTimeSections <p>Recording time period (settings can be done by week, support setting multiple time periods per day, each time period not less than 10 minutes)</p>
     * @param integer $Scale <p>Speed multiplication for cloud migration (supports 1x, 2x, and 4x)</p>
     * @param integer $DayOffset <p>Cycle offset. Default: 1. It means to pull yesterday's video recording to the device. 0 means to pull today's video recording to the device. 3 means to pull the video recording to the device from the day before yesterday.</p><p>Value range: [0, 90]</p><p>Default value: 1</p>
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

        if (array_key_exists("DayOffset",$param) and $param["DayOffset"] !== null) {
            $this->DayOffset = $param["DayOffset"];
        }
    }
}
