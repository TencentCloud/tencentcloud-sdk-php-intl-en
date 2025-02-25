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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTagValues request structure.
 *
 * @method string getTagKey() Obtain Dimension name.
 * @method void setTagKey(string $TagKey) Set Dimension name.
 * @method string getInstanceId() Obtain Business system id.
 * @method void setInstanceId(string $InstanceId) Set Business system id.
 * @method array getFilters() Obtain Filter criteria.
 * @method void setFilters(array $Filters) Set Filter criteria.
 * @method integer getStartTime() Obtain Start time (unit: sec).
 * @method void setStartTime(integer $StartTime) Set Start time (unit: sec).
 * @method integer getEndTime() Obtain End time (unit: seconds).
 * @method void setEndTime(integer $EndTime) Set End time (unit: seconds).
 * @method array getOrFilters() Obtain Or filter criteria.
 * @method void setOrFilters(array $OrFilters) Set Or filter criteria.
 * @method string getType() Obtain Usage type.
 * @method void setType(string $Type) Set Usage type.
 */
class DescribeTagValuesRequest extends AbstractModel
{
    /**
     * @var string Dimension name.
     */
    public $TagKey;

    /**
     * @var string Business system id.
     */
    public $InstanceId;

    /**
     * @var array Filter criteria.
     */
    public $Filters;

    /**
     * @var integer Start time (unit: sec).
     */
    public $StartTime;

    /**
     * @var integer End time (unit: seconds).
     */
    public $EndTime;

    /**
     * @var array Or filter criteria.
     */
    public $OrFilters;

    /**
     * @var string Usage type.
     */
    public $Type;

    /**
     * @param string $TagKey Dimension name.
     * @param string $InstanceId Business system id.
     * @param array $Filters Filter criteria.
     * @param integer $StartTime Start time (unit: sec).
     * @param integer $EndTime End time (unit: seconds).
     * @param array $OrFilters Or filter criteria.
     * @param string $Type Usage type.
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
        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("OrFilters",$param) and $param["OrFilters"] !== null) {
            $this->OrFilters = [];
            foreach ($param["OrFilters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->OrFilters, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
