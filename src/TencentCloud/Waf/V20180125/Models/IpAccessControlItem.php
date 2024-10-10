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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP Blocklist/Allowlist
 *
 * @method string getId() Obtain MongoDB Table Auto-increment ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(string $Id) Set MongoDB Table Auto-increment ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getActionType() Obtain Action
 * @method void setActionType(integer $ActionType) Set Action
 * @method string getIp() Obtain ip
 * @method void setIp(string $Ip) Set ip
 * @method string getNote() Obtain Remarks
 * @method void setNote(string $Note) Set Remarks
 * @method string getSource() Obtain Source.
 * @method void setSource(string $Source) Set Source.
 * @method integer getTsVersion() Obtain Update Timestamp

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTsVersion(integer $TsVersion) Set Update Timestamp

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getValidTs() Obtain Expiration Timestamp
 * @method void setValidTs(integer $ValidTs) Set Expiration Timestamp
 * @method integer getValidStatus() Obtain Effective status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValidStatus(integer $ValidStatus) Set Effective status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRuleId() Obtain 55000001
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleId(integer $RuleId) Set 55000001
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getIpList() Obtain IP list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpList(array $IpList) Set IP list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Rule creation time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set Rule creation time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJobType() Obtain Scheduled task type

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobType(string $JobType) Set Scheduled task type

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCronType() Obtain Periodic task type.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCronType(string $CronType) Set Periodic task type.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method JobDateTime getJobDateTime() Obtain Details of scheduled task configuration.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobDateTime(JobDateTime $JobDateTime) Set Details of scheduled task configuration.

Note: This field may return null, indicating that no valid values can be obtained.
 */
class IpAccessControlItem extends AbstractModel
{
    /**
     * @var string MongoDB Table Auto-increment ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var integer Action
     */
    public $ActionType;

    /**
     * @var string ip
     */
    public $Ip;

    /**
     * @var string Remarks
     */
    public $Note;

    /**
     * @var string Source.
     */
    public $Source;

    /**
     * @var integer Update Timestamp

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TsVersion;

    /**
     * @var integer Expiration Timestamp
     */
    public $ValidTs;

    /**
     * @var integer Effective status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ValidStatus;

    /**
     * @var integer 55000001
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleId;

    /**
     * @var array IP list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IpList;

    /**
     * @var integer Rule creation time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Scheduled task type

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobType;

    /**
     * @var string Periodic task type.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CronType;

    /**
     * @var JobDateTime Details of scheduled task configuration.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobDateTime;

    /**
     * @param string $Id MongoDB Table Auto-increment ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ActionType Action
     * @param string $Ip ip
     * @param string $Note Remarks
     * @param string $Source Source.
     * @param integer $TsVersion Update Timestamp

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ValidTs Expiration Timestamp
     * @param integer $ValidStatus Effective status.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleId 55000001
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $IpList IP list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Rule creation time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JobType Scheduled task type

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CronType Periodic task type.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param JobDateTime $JobDateTime Details of scheduled task configuration.

Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("TsVersion",$param) and $param["TsVersion"] !== null) {
            $this->TsVersion = $param["TsVersion"];
        }

        if (array_key_exists("ValidTs",$param) and $param["ValidTs"] !== null) {
            $this->ValidTs = $param["ValidTs"];
        }

        if (array_key_exists("ValidStatus",$param) and $param["ValidStatus"] !== null) {
            $this->ValidStatus = $param["ValidStatus"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("CronType",$param) and $param["CronType"] !== null) {
            $this->CronType = $param["CronType"];
        }

        if (array_key_exists("JobDateTime",$param) and $param["JobDateTime"] !== null) {
            $this->JobDateTime = new JobDateTime();
            $this->JobDateTime->deserialize($param["JobDateTime"]);
        }
    }
}
