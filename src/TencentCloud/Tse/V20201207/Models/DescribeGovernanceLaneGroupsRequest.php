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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGovernanceLaneGroups request structure.
 *
 * @method string getInstanceId() Obtain Engine Instance ID
 * @method void setInstanceId(string $InstanceId) Set Engine Instance ID
 * @method integer getOffset() Obtain Pagination query offset.
 * @method void setOffset(integer $Offset) Set Pagination query offset.
 * @method integer getLimit() Obtain Number of items per page.
 * @method void setLimit(integer $Limit) Set Number of items per page.
 * @method string getName() Obtain swimlane name
 * @method void setName(string $Name) Set swimlane name
 * @method string getGroupID() Obtain Lane ID
 * @method void setGroupID(string $GroupID) Set Lane ID
 * @method boolean getBrief() Obtain Whether to display the lane rule list
 * @method void setBrief(boolean $Brief) Set Whether to display the lane rule list
 */
class DescribeGovernanceLaneGroupsRequest extends AbstractModel
{
    /**
     * @var string Engine Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Pagination query offset.
     */
    public $Offset;

    /**
     * @var integer Number of items per page.
     */
    public $Limit;

    /**
     * @var string swimlane name
     */
    public $Name;

    /**
     * @var string Lane ID
     */
    public $GroupID;

    /**
     * @var boolean Whether to display the lane rule list
     */
    public $Brief;

    /**
     * @param string $InstanceId Engine Instance ID
     * @param integer $Offset Pagination query offset.
     * @param integer $Limit Number of items per page.
     * @param string $Name swimlane name
     * @param string $GroupID Lane ID
     * @param boolean $Brief Whether to display the lane rule list
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("GroupID",$param) and $param["GroupID"] !== null) {
            $this->GroupID = $param["GroupID"];
        }

        if (array_key_exists("Brief",$param) and $param["Brief"] !== null) {
            $this->Brief = $param["Brief"];
        }
    }
}
