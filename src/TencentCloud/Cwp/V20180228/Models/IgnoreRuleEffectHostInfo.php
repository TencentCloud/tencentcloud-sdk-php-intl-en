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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of hosts affected by ignoring detection items
 *
 * @method string getHostName() Obtain Host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostName(string $HostName) Set Host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLevel() Obtain Severity level: 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLevel(integer $Level) Set Severity level: 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTagList() Obtain Host tag array
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagList(array $TagList) Set Host tag array
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status: 0: failed; 1: ignore; 3: passed; 5: detecting
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Status: 0: failed; 1: ignore; 3: passed; 5: detecting
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastScanTime() Obtain Last check time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastScanTime(string $LastScanTime) Set Last check time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEventId() Obtain Event ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventId(integer $EventId) Set Event ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQuuid() Obtain Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuuid(string $Quuid) Set Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class IgnoreRuleEffectHostInfo extends AbstractModel
{
    /**
     * @var string Host name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostName;

    /**
     * @var integer Severity level: 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Level;

    /**
     * @var array Host tag array
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagList;

    /**
     * @var integer Status: 0: failed; 1: ignore; 3: passed; 5: detecting
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Last check time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastScanTime;

    /**
     * @var integer Event ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventId;

    /**
     * @var string Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Quuid;

    /**
     * @param string $HostName Host name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Level Severity level: 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TagList Host tag array
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Status: 0: failed; 1: ignore; 3: passed; 5: detecting
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastScanTime Last check time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EventId Event ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Quuid Host QUUID
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = $param["TagList"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }
    }
}
