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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHiveQueries request structure.
 *
 * @method string getInstanceId() Obtain The cluster ID.
 * @method void setInstanceId(string $InstanceId) Set The cluster ID.
 * @method integer getStartTime() Obtain The start time in seconds.
 * @method void setStartTime(integer $StartTime) Set The start time in seconds.
 * @method integer getEndTime() Obtain The end time in seconds. EndTime-StartTime should not exceed one day's duration, which is 86400 seconds.
 * @method void setEndTime(integer $EndTime) Set The end time in seconds. EndTime-StartTime should not exceed one day's duration, which is 86400 seconds.
 * @method integer getOffset() Obtain Starting offset for pagination. Start value: 0
 * @method void setOffset(integer $Offset) Set Starting offset for pagination. Start value: 0
 * @method integer getLimit() Obtain Page size. Valid range: [1,100]
 * @method void setLimit(integer $Limit) Set Page size. Valid range: [1,100]
 */
class DescribeHiveQueriesRequest extends AbstractModel
{
    /**
     * @var string The cluster ID.
     */
    public $InstanceId;

    /**
     * @var integer The start time in seconds.
     */
    public $StartTime;

    /**
     * @var integer The end time in seconds. EndTime-StartTime should not exceed one day's duration, which is 86400 seconds.
     */
    public $EndTime;

    /**
     * @var integer Starting offset for pagination. Start value: 0
     */
    public $Offset;

    /**
     * @var integer Page size. Valid range: [1,100]
     */
    public $Limit;

    /**
     * @param string $InstanceId The cluster ID.
     * @param integer $StartTime The start time in seconds.
     * @param integer $EndTime The end time in seconds. EndTime-StartTime should not exceed one day's duration, which is 86400 seconds.
     * @param integer $Offset Starting offset for pagination. Start value: 0
     * @param integer $Limit Page size. Valid range: [1,100]
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
