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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEvents request structure.
 *
 * @method integer getStartTime() Obtain Start timestamp in seconds (cannot be 90 days after the current time).
 * @method void setStartTime(integer $StartTime) Set Start timestamp in seconds (cannot be 90 days after the current time).
 * @method integer getEndTime() Obtain End timestamp in seconds (the time range for query is less than 30 days).
 * @method void setEndTime(integer $EndTime) Set End timestamp in seconds (the time range for query is less than 30 days).
 * @method integer getNextToken() Obtain Credential for viewing more logs.
 * @method void setNextToken(integer $NextToken) Set Credential for viewing more logs.
 * @method integer getMaxResults() Obtain Max number of returned logs (up to 50).
 * @method void setMaxResults(integer $MaxResults) Set Max number of returned logs (up to 50).
 * @method array getLookupAttributes() Obtain Search condition. Valid values: `RequestId`, `EventName`, `ActionType` (write/read), `PrincipalId` (sub-account), `ResourceType`, `ResourceName`, `AccessKeyId`, `SensitiveAction`, `ApiErrorCode`, `CamErrorCode`, and `Tags` (Format of AttributeValue: [{"key":"*","value":"*"}])
 * @method void setLookupAttributes(array $LookupAttributes) Set Search condition. Valid values: `RequestId`, `EventName`, `ActionType` (write/read), `PrincipalId` (sub-account), `ResourceType`, `ResourceName`, `AccessKeyId`, `SensitiveAction`, `ApiErrorCode`, `CamErrorCode`, and `Tags` (Format of AttributeValue: [{"key":"*","value":"*"}])
 * @method integer getIsReturnLocation() Obtain Whether to return the IP location. `1`: yes, `0`: no.
 * @method void setIsReturnLocation(integer $IsReturnLocation) Set Whether to return the IP location. `1`: yes, `0`: no.
 */
class DescribeEventsRequest extends AbstractModel
{
    /**
     * @var integer Start timestamp in seconds (cannot be 90 days after the current time).
     */
    public $StartTime;

    /**
     * @var integer End timestamp in seconds (the time range for query is less than 30 days).
     */
    public $EndTime;

    /**
     * @var integer Credential for viewing more logs.
     */
    public $NextToken;

    /**
     * @var integer Max number of returned logs (up to 50).
     */
    public $MaxResults;

    /**
     * @var array Search condition. Valid values: `RequestId`, `EventName`, `ActionType` (write/read), `PrincipalId` (sub-account), `ResourceType`, `ResourceName`, `AccessKeyId`, `SensitiveAction`, `ApiErrorCode`, `CamErrorCode`, and `Tags` (Format of AttributeValue: [{"key":"*","value":"*"}])
     */
    public $LookupAttributes;

    /**
     * @var integer Whether to return the IP location. `1`: yes, `0`: no.
     */
    public $IsReturnLocation;

    /**
     * @param integer $StartTime Start timestamp in seconds (cannot be 90 days after the current time).
     * @param integer $EndTime End timestamp in seconds (the time range for query is less than 30 days).
     * @param integer $NextToken Credential for viewing more logs.
     * @param integer $MaxResults Max number of returned logs (up to 50).
     * @param array $LookupAttributes Search condition. Valid values: `RequestId`, `EventName`, `ActionType` (write/read), `PrincipalId` (sub-account), `ResourceType`, `ResourceName`, `AccessKeyId`, `SensitiveAction`, `ApiErrorCode`, `CamErrorCode`, and `Tags` (Format of AttributeValue: [{"key":"*","value":"*"}])
     * @param integer $IsReturnLocation Whether to return the IP location. `1`: yes, `0`: no.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("LookupAttributes",$param) and $param["LookupAttributes"] !== null) {
            $this->LookupAttributes = [];
            foreach ($param["LookupAttributes"] as $key => $value){
                $obj = new LookupAttribute();
                $obj->deserialize($value);
                array_push($this->LookupAttributes, $obj);
            }
        }

        if (array_key_exists("IsReturnLocation",$param) and $param["IsReturnLocation"] !== null) {
            $this->IsReturnLocation = $param["IsReturnLocation"];
        }
    }
}
