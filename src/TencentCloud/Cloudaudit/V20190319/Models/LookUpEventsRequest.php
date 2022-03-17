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
 * LookUpEvents request structure.
 *
 * @method integer getStartTime() Obtain Start time
 * @method void setStartTime(integer $StartTime) Set Start time
 * @method integer getEndTime() Obtain End time
 * @method void setEndTime(integer $EndTime) Set End time
 * @method array getLookupAttributes() Obtain Search criteria
 * @method void setLookupAttributes(array $LookupAttributes) Set Search criteria
 * @method string getNextToken() Obtain Credential for viewing more logs
 * @method void setNextToken(string $NextToken) Set Credential for viewing more logs
 * @method integer getMaxResults() Obtain Maximum number of logs to be returned
 * @method void setMaxResults(integer $MaxResults) Set Maximum number of logs to be returned
 * @method string getMode() Obtain CloudAudit mode. Valid values: standard, quick. Default value: standard
 * @method void setMode(string $Mode) Set CloudAudit mode. Valid values: standard, quick. Default value: standard
 */
class LookUpEventsRequest extends AbstractModel
{
    /**
     * @var integer Start time
     */
    public $StartTime;

    /**
     * @var integer End time
     */
    public $EndTime;

    /**
     * @var array Search criteria
     */
    public $LookupAttributes;

    /**
     * @var string Credential for viewing more logs
     */
    public $NextToken;

    /**
     * @var integer Maximum number of logs to be returned
     */
    public $MaxResults;

    /**
     * @var string CloudAudit mode. Valid values: standard, quick. Default value: standard
     */
    public $Mode;

    /**
     * @param integer $StartTime Start time
     * @param integer $EndTime End time
     * @param array $LookupAttributes Search criteria
     * @param string $NextToken Credential for viewing more logs
     * @param integer $MaxResults Maximum number of logs to be returned
     * @param string $Mode CloudAudit mode. Valid values: standard, quick. Default value: standard
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

        if (array_key_exists("LookupAttributes",$param) and $param["LookupAttributes"] !== null) {
            $this->LookupAttributes = [];
            foreach ($param["LookupAttributes"] as $key => $value){
                $obj = new LookupAttribute();
                $obj->deserialize($value);
                array_push($this->LookupAttributes, $obj);
            }
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
