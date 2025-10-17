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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrometheusAlertGroups request structure.
 *
 * @method string getInstanceId() Obtain prometheus instance ID
 * @method void setInstanceId(string $InstanceId) Set prometheus instance ID
 * @method integer getLimit() Obtain Number of returned results. defaults to 20. maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. defaults to 20. maximum value is 100.
 * @method integer getOffset() Obtain Offset. default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. default value: 0.
 * @method string getGroupId() Obtain Alert group ID, such as alert-xxxx.
List the alert group with the given ID.
 * @method void setGroupId(string $GroupId) Set Alert group ID, such as alert-xxxx.
List the alert group with the given ID.
 * @method string getGroupName() Obtain Specifies the alert group name.
List alert groups which name contains the given string.
 * @method void setGroupName(string $GroupName) Set Specifies the alert group name.
List alert groups which name contains the given string.
 */
class DescribePrometheusAlertGroupsRequest extends AbstractModel
{
    /**
     * @var string prometheus instance ID
     */
    public $InstanceId;

    /**
     * @var integer Number of returned results. defaults to 20. maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Offset. default value: 0.
     */
    public $Offset;

    /**
     * @var string Alert group ID, such as alert-xxxx.
List the alert group with the given ID.
     */
    public $GroupId;

    /**
     * @var string Specifies the alert group name.
List alert groups which name contains the given string.
     */
    public $GroupName;

    /**
     * @param string $InstanceId prometheus instance ID
     * @param integer $Limit Number of returned results. defaults to 20. maximum value is 100.
     * @param integer $Offset Offset. default value: 0.
     * @param string $GroupId Alert group ID, such as alert-xxxx.
List the alert group with the given ID.
     * @param string $GroupName Specifies the alert group name.
List alert groups which name contains the given string.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }
    }
}
