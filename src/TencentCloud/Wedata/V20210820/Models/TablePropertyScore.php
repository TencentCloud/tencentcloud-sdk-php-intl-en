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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Asset Rating of the table updated by day
 *
 * @method string getTableId() Obtain Table ID
 * @method void setTableId(string $TableId) Set Table ID
 * @method string getDayTime() Obtain Statistics Date
 * @method void setDayTime(string $DayTime) Set Statistics Date
 * @method float getIntegrity() Obtain Table Integrity Score
 * @method void setIntegrity(float $Integrity) Set Table Integrity Score
 * @method float getSafety() Obtain Table Assurance Score
 * @method void setSafety(float $Safety) Set Table Assurance Score
 * @method float getTimeliness() Obtain Table Timeliness Score
 * @method void setTimeliness(float $Timeliness) Set Table Timeliness Score
 * @method float getStability() Obtain Table Stability Score
 * @method void setStability(float $Stability) Set Table Stability Score
 * @method float getNormative() Obtain Table Normalization Score
 * @method void setNormative(float $Normative) Set Table Normalization Score
 * @method float getAverage() Obtain Average Asset Score
 * @method void setAverage(float $Average) Set Average Asset Score
 */
class TablePropertyScore extends AbstractModel
{
    /**
     * @var string Table ID
     */
    public $TableId;

    /**
     * @var string Statistics Date
     */
    public $DayTime;

    /**
     * @var float Table Integrity Score
     */
    public $Integrity;

    /**
     * @var float Table Assurance Score
     */
    public $Safety;

    /**
     * @var float Table Timeliness Score
     */
    public $Timeliness;

    /**
     * @var float Table Stability Score
     */
    public $Stability;

    /**
     * @var float Table Normalization Score
     */
    public $Normative;

    /**
     * @var float Average Asset Score
     */
    public $Average;

    /**
     * @param string $TableId Table ID
     * @param string $DayTime Statistics Date
     * @param float $Integrity Table Integrity Score
     * @param float $Safety Table Assurance Score
     * @param float $Timeliness Table Timeliness Score
     * @param float $Stability Table Stability Score
     * @param float $Normative Table Normalization Score
     * @param float $Average Average Asset Score
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("DayTime",$param) and $param["DayTime"] !== null) {
            $this->DayTime = $param["DayTime"];
        }

        if (array_key_exists("Integrity",$param) and $param["Integrity"] !== null) {
            $this->Integrity = $param["Integrity"];
        }

        if (array_key_exists("Safety",$param) and $param["Safety"] !== null) {
            $this->Safety = $param["Safety"];
        }

        if (array_key_exists("Timeliness",$param) and $param["Timeliness"] !== null) {
            $this->Timeliness = $param["Timeliness"];
        }

        if (array_key_exists("Stability",$param) and $param["Stability"] !== null) {
            $this->Stability = $param["Stability"];
        }

        if (array_key_exists("Normative",$param) and $param["Normative"] !== null) {
            $this->Normative = $param["Normative"];
        }

        if (array_key_exists("Average",$param) and $param["Average"] !== null) {
            $this->Average = $param["Average"];
        }
    }
}
