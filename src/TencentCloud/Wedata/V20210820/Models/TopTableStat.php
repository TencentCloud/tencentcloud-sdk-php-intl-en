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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Quality Overview Table Ranking Results
 *
 * @method array getAlarmTables() Obtain Alarm Table List
 * @method void setAlarmTables(array $AlarmTables) Set Alarm Table List
 * @method array getPipelineTables() Obtain Block Table List
 * @method void setPipelineTables(array $PipelineTables) Set Block Table List
 */
class TopTableStat extends AbstractModel
{
    /**
     * @var array Alarm Table List
     */
    public $AlarmTables;

    /**
     * @var array Block Table List
     */
    public $PipelineTables;

    /**
     * @param array $AlarmTables Alarm Table List
     * @param array $PipelineTables Block Table List
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
        if (array_key_exists("AlarmTables",$param) and $param["AlarmTables"] !== null) {
            $this->AlarmTables = [];
            foreach ($param["AlarmTables"] as $key => $value){
                $obj = new TopTableStatItem();
                $obj->deserialize($value);
                array_push($this->AlarmTables, $obj);
            }
        }

        if (array_key_exists("PipelineTables",$param) and $param["PipelineTables"] !== null) {
            $this->PipelineTables = [];
            foreach ($param["PipelineTables"] as $key => $value){
                $obj = new TopTableStatItem();
                $obj->deserialize($value);
                array_push($this->PipelineTables, $obj);
            }
        }
    }
}
