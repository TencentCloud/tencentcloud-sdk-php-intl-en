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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEMREventList request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID.
 * @method integer getStartTime() Obtain Start time for event query.
 * @method void setStartTime(integer $StartTime) Set Start time for event query.
 * @method integer getEndTime() Obtain End time for event query.
 * @method void setEndTime(integer $EndTime) Set End time for event query.
 * @method string getHost() Obtain Event-triggered IP address.
 * @method void setHost(string $Host) Set Event-triggered IP address.
 * @method string getRole() Obtain Service role of the affected event.
 * @method void setRole(string $Role) Set Service role of the affected event.
 * @method string getName() Obtain Event name.
 * @method void setName(string $Name) Set Event name.
 * @method integer getOffset() Obtain Offset of the event list.
 * @method void setOffset(integer $Offset) Set Offset of the event list.
 * @method integer getLimit() Obtain Limit of the event list.
 * @method void setLimit(integer $Limit) Set Limit of the event list.
 */
class DescribeEMREventListRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $InstanceId;

    /**
     * @var integer Start time for event query.
     */
    public $StartTime;

    /**
     * @var integer End time for event query.
     */
    public $EndTime;

    /**
     * @var string Event-triggered IP address.
     */
    public $Host;

    /**
     * @var string Service role of the affected event.
     */
    public $Role;

    /**
     * @var string Event name.
     */
    public $Name;

    /**
     * @var integer Offset of the event list.
     */
    public $Offset;

    /**
     * @var integer Limit of the event list.
     */
    public $Limit;

    /**
     * @param string $InstanceId Cluster ID.
     * @param integer $StartTime Start time for event query.
     * @param integer $EndTime End time for event query.
     * @param string $Host Event-triggered IP address.
     * @param string $Role Service role of the affected event.
     * @param string $Name Event name.
     * @param integer $Offset Offset of the event list.
     * @param integer $Limit Limit of the event list.
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

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
