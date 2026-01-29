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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAbnormalCallRecord request structure.
 *
 * @method integer getAlarmRuleID() Obtain Alarm rule ID.
 * @method void setAlarmRuleID(integer $AlarmRuleID) Set Alarm rule ID.
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method string getAccessKey() Obtain Access key.
 * @method void setAccessKey(string $AccessKey) Set Access key.
 * @method string getSourceIP() Obtain Source IP of the call.
 * @method void setSourceIP(string $SourceIP) Set Source IP of the call.
 * @method Filter getFilter() Obtain Filter.
 * @method void setFilter(Filter $Filter) Set Filter.
 */
class DescribeAbnormalCallRecordRequest extends AbstractModel
{
    /**
     * @var integer Alarm rule ID.
     */
    public $AlarmRuleID;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var string Access key.
     */
    public $AccessKey;

    /**
     * @var string Source IP of the call.
     */
    public $SourceIP;

    /**
     * @var Filter Filter.
     */
    public $Filter;

    /**
     * @param integer $AlarmRuleID Alarm rule ID.
     * @param array $MemberId Group Account Member ID
     * @param string $AccessKey Access key.
     * @param string $SourceIP Source IP of the call.
     * @param Filter $Filter Filter.
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
        if (array_key_exists("AlarmRuleID",$param) and $param["AlarmRuleID"] !== null) {
            $this->AlarmRuleID = $param["AlarmRuleID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("SourceIP",$param) and $param["SourceIP"] !== null) {
            $this->SourceIP = $param["SourceIP"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
