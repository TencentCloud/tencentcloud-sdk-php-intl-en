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
 * DescribeInstanceOplog request structure.
 *
 * @method string getInstanceId() Obtain EMR instance ID.
 * @method void setInstanceId(string $InstanceId) Set EMR instance ID.
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain Number of entries per page.
 * @method void setLimit(integer $Limit) Set Number of entries per page.
 * @method integer getStartTime() Obtain Start time timestamp.
 * @method void setStartTime(integer $StartTime) Set Start time timestamp.
 * @method integer getEndTime() Obtain End time timestamp.
 * @method void setEndTime(integer $EndTime) Set End time timestamp.
 * @method array getSearchFields() Obtain Search criteria array.
 * @method void setSearchFields(array $SearchFields) Set Search criteria array.
 * @method string getOperand() Obtain Cluster, node, and component.
 * @method void setOperand(string $Operand) Set Cluster, node, and component.
 * @method string getSecurityLevel() Obtain Low-risk, medium-risk, and high-risk.
 * @method void setSecurityLevel(string $SecurityLevel) Set Low-risk, medium-risk, and high-risk.
 */
class DescribeInstanceOplogRequest extends AbstractModel
{
    /**
     * @var string EMR instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer Number of entries per page.
     */
    public $Limit;

    /**
     * @var integer Start time timestamp.
     */
    public $StartTime;

    /**
     * @var integer End time timestamp.
     */
    public $EndTime;

    /**
     * @var array Search criteria array.
     */
    public $SearchFields;

    /**
     * @var string Cluster, node, and component.
     */
    public $Operand;

    /**
     * @var string Low-risk, medium-risk, and high-risk.
     */
    public $SecurityLevel;

    /**
     * @param string $InstanceId EMR instance ID.
     * @param integer $Offset Offset.
     * @param integer $Limit Number of entries per page.
     * @param integer $StartTime Start time timestamp.
     * @param integer $EndTime End time timestamp.
     * @param array $SearchFields Search criteria array.
     * @param string $Operand Cluster, node, and component.
     * @param string $SecurityLevel Low-risk, medium-risk, and high-risk.
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SearchFields",$param) and $param["SearchFields"] !== null) {
            $this->SearchFields = [];
            foreach ($param["SearchFields"] as $key => $value){
                $obj = new SearchItem();
                $obj->deserialize($value);
                array_push($this->SearchFields, $obj);
            }
        }

        if (array_key_exists("Operand",$param) and $param["Operand"] !== null) {
            $this->Operand = $param["Operand"];
        }

        if (array_key_exists("SecurityLevel",$param) and $param["SecurityLevel"] !== null) {
            $this->SecurityLevel = $param["SecurityLevel"];
        }
    }
}
