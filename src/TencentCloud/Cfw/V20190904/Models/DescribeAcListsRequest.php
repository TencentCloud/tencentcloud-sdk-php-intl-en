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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAcLists request structure.
 *
 * @method string getProtocol() Obtain Protocol
 * @method void setProtocol(string $Protocol) Set Protocol
 * @method string getStrategy() Obtain Policy
 * @method void setStrategy(string $Strategy) Set Policy
 * @method string getSearchValue() Obtain Search value
 * @method void setSearchValue(string $SearchValue) Set Search value
 * @method integer getLimit() Obtain Number of entries per page
 * @method void setLimit(integer $Limit) Set Number of entries per page
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getDirection() Obtain Indicates whether it is outbound or inbound. 1: inbound; 0: outbound
 * @method void setDirection(integer $Direction) Set Indicates whether it is outbound or inbound. 1: inbound; 0: outbound
 * @method string getEdgeId() Obtain EdgeId value
 * @method void setEdgeId(string $EdgeId) Set EdgeId value
 * @method string getStatus() Obtain Indicates whether the rule is enabled. '0': disabled; '1': enabled. '0' by default
 * @method void setStatus(string $Status) Set Indicates whether the rule is enabled. '0': disabled; '1': enabled. '0' by default
 * @method string getArea() Obtain Region
 * @method void setArea(string $Area) Set Region
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 */
class DescribeAcListsRequest extends AbstractModel
{
    /**
     * @var string Protocol
     */
    public $Protocol;

    /**
     * @var string Policy
     */
    public $Strategy;

    /**
     * @var string Search value
     */
    public $SearchValue;

    /**
     * @var integer Number of entries per page
     */
    public $Limit;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer Indicates whether it is outbound or inbound. 1: inbound; 0: outbound
     */
    public $Direction;

    /**
     * @var string EdgeId value
     */
    public $EdgeId;

    /**
     * @var string Indicates whether the rule is enabled. '0': disabled; '1': enabled. '0' by default
     */
    public $Status;

    /**
     * @var string Region
     */
    public $Area;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @param string $Protocol Protocol
     * @param string $Strategy Policy
     * @param string $SearchValue Search value
     * @param integer $Limit Number of entries per page
     * @param integer $Offset Offset
     * @param integer $Direction Indicates whether it is outbound or inbound. 1: inbound; 0: outbound
     * @param string $EdgeId EdgeId value
     * @param string $Status Indicates whether the rule is enabled. '0': disabled; '1': enabled. '0' by default
     * @param string $Area Region
     * @param string $InstanceId Instance ID
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
