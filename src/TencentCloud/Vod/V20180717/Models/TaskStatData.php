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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getTaskType() Obtain 
 * @method void setTaskType(string $TaskType) Set 
 * @method array getSummary() Obtain 
 * @method void setSummary(array $Summary) Set 
 * @method array getDetails() Obtain 
 * @method void setDetails(array $Details) Set 
 */
class TaskStatData extends AbstractModel
{
    /**
     * @var string 
     */
    public $TaskType;

    /**
     * @var array 
     */
    public $Summary;

    /**
     * @var array 
     */
    public $Details;

    /**
     * @param string $TaskType 
     * @param array $Summary 
     * @param array $Details 
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = [];
            foreach ($param["Summary"] as $key => $value){
                $obj = new TaskStatDataItem();
                $obj->deserialize($value);
                array_push($this->Summary, $obj);
            }
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new SpecificationDataItem();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }
    }
}
