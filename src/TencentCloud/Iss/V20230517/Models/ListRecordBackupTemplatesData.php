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
 * List returned for querying cloud templates for video recording
 *
 * @method string getTemplateId() Obtain <p>Template ID</p>
 * @method void setTemplateId(string $TemplateId) Set <p>Template ID</p>
 * @method string getTemplateName() Obtain <p>Template name</p>
 * @method void setTemplateName(string $TemplateName) Set <p>Template name</p>
 * @method array getTimeSections() Obtain <p>Cloud Upload Time Period (settings can be done by week, supports setting multiple time periods per day, each time period not less than 10 minutes)</p>
 * @method void setTimeSections(array $TimeSections) Set <p>Cloud Upload Time Period (settings can be done by week, supports setting multiple time periods per day, each time period not less than 10 minutes)</p>
 * @method array getDevTimeSections() Obtain <p>Recording time period (settings can be done by week, supports setting multiple time periods per day, each time period greater than or equal to 10 minutes)</p>
 * @method void setDevTimeSections(array $DevTimeSections) Set <p>Recording time period (settings can be done by week, supports setting multiple time periods per day, each time period greater than or equal to 10 minutes)</p>
 * @method integer getScale() Obtain <p>Speed multiplication for cloud migration (supports 1x, 2x, and 4x)</p>
 * @method void setScale(integer $Scale) Set <p>Speed multiplication for cloud migration (supports 1x, 2x, and 4x)</p>
 * @method string getCreateAt() Obtain <p>Creation time.</p>
 * @method void setCreateAt(string $CreateAt) Set <p>Creation time.</p>
 * @method string getUpdateAt() Obtain <p>Update time.</p>
 * @method void setUpdateAt(string $UpdateAt) Set <p>Update time.</p>
 * @method integer getDayOffset() Obtain <p>Cycle offset. Default: 1, which means pulling yesterday's data. 0 means pulling today's data. 3 means pulling the day before yesterday's data.</p>
 * @method void setDayOffset(integer $DayOffset) Set <p>Cycle offset. Default: 1, which means pulling yesterday's data. 0 means pulling today's data. 3 means pulling the day before yesterday's data.</p>
 */
class ListRecordBackupTemplatesData extends AbstractModel
{
    /**
     * @var string <p>Template ID</p>
     */
    public $TemplateId;

    /**
     * @var string <p>Template name</p>
     */
    public $TemplateName;

    /**
     * @var array <p>Cloud Upload Time Period (settings can be done by week, supports setting multiple time periods per day, each time period not less than 10 minutes)</p>
     */
    public $TimeSections;

    /**
     * @var array <p>Recording time period (settings can be done by week, supports setting multiple time periods per day, each time period greater than or equal to 10 minutes)</p>
     */
    public $DevTimeSections;

    /**
     * @var integer <p>Speed multiplication for cloud migration (supports 1x, 2x, and 4x)</p>
     */
    public $Scale;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateAt;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateAt;

    /**
     * @var integer <p>Cycle offset. Default: 1, which means pulling yesterday's data. 0 means pulling today's data. 3 means pulling the day before yesterday's data.</p>
     */
    public $DayOffset;

    /**
     * @param string $TemplateId <p>Template ID</p>
     * @param string $TemplateName <p>Template name</p>
     * @param array $TimeSections <p>Cloud Upload Time Period (settings can be done by week, supports setting multiple time periods per day, each time period not less than 10 minutes)</p>
     * @param array $DevTimeSections <p>Recording time period (settings can be done by week, supports setting multiple time periods per day, each time period greater than or equal to 10 minutes)</p>
     * @param integer $Scale <p>Speed multiplication for cloud migration (supports 1x, 2x, and 4x)</p>
     * @param string $CreateAt <p>Creation time.</p>
     * @param string $UpdateAt <p>Update time.</p>
     * @param integer $DayOffset <p>Cycle offset. Default: 1, which means pulling yesterday's data. 0 means pulling today's data. 3 means pulling the day before yesterday's data.</p>
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

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("UpdateAt",$param) and $param["UpdateAt"] !== null) {
            $this->UpdateAt = $param["UpdateAt"];
        }

        if (array_key_exists("DayOffset",$param) and $param["DayOffset"] !== null) {
            $this->DayOffset = $param["DayOffset"];
        }
    }
}
