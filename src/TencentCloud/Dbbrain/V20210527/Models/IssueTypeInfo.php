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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metric information.
 *
 * @method string getIssueType() Obtain Metric categories. Valid values: `AVAILABILITY`, `MAINTAINABILITY`, `PERFORMANCE`, and `RELIABILITY`.
 * @method void setIssueType(string $IssueType) Set Metric categories. Valid values: `AVAILABILITY`, `MAINTAINABILITY`, `PERFORMANCE`, and `RELIABILITY`.
 * @method array getEvents() Obtain Exception.
 * @method void setEvents(array $Events) Set Exception.
 * @method integer getTotalCount() Obtain Total number of exceptions.
 * @method void setTotalCount(integer $TotalCount) Set Total number of exceptions.
 */
class IssueTypeInfo extends AbstractModel
{
    /**
     * @var string Metric categories. Valid values: `AVAILABILITY`, `MAINTAINABILITY`, `PERFORMANCE`, and `RELIABILITY`.
     */
    public $IssueType;

    /**
     * @var array Exception.
     */
    public $Events;

    /**
     * @var integer Total number of exceptions.
     */
    public $TotalCount;

    /**
     * @param string $IssueType Metric categories. Valid values: `AVAILABILITY`, `MAINTAINABILITY`, `PERFORMANCE`, and `RELIABILITY`.
     * @param array $Events Exception.
     * @param integer $TotalCount Total number of exceptions.
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
        if (array_key_exists("IssueType",$param) and $param["IssueType"] !== null) {
            $this->IssueType = $param["IssueType"];
        }

        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = [];
            foreach ($param["Events"] as $key => $value){
                $obj = new EventInfo();
                $obj->deserialize($value);
                array_push($this->Events, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
