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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of hosts affected by ignoring detection items
 *
 * @method string getHostName() Obtain Host name
 * @method void setHostName(string $HostName) Set Host name
 * @method integer getLevel() Obtain Severity level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
 * @method void setLevel(integer $Level) Set Severity level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
 * @method array getTagList() Obtain Host tag array
 * @method void setTagList(array $TagList) Set Host tag array
 * @method integer getStatus() Obtain Status: 0: failed; 1: ignore; 3: approved; 5: detecting
 * @method void setStatus(integer $Status) Set Status: 0: failed; 1: ignore; 3: approved; 5: detecting
 * @method string getLastScanTime() Obtain Last detection time
 * @method void setLastScanTime(string $LastScanTime) Set Last detection time
 * @method integer getEventId() Obtain Event ID
 * @method void setEventId(integer $EventId) Set Event ID
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 */
class IgnoreRuleEffectHostInfo extends AbstractModel
{
    /**
     * @var string Host name
     */
    public $HostName;

    /**
     * @var integer Severity level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
     */
    public $Level;

    /**
     * @var array Host tag array
     */
    public $TagList;

    /**
     * @var integer Status: 0: failed; 1: ignore; 3: approved; 5: detecting
     */
    public $Status;

    /**
     * @var string Last detection time
     */
    public $LastScanTime;

    /**
     * @var integer Event ID
     */
    public $EventId;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @param string $HostName Host name
     * @param integer $Level Severity level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
     * @param array $TagList Host tag array
     * @param integer $Status Status: 0: failed; 1: ignore; 3: approved; 5: detecting
     * @param string $LastScanTime Last detection time
     * @param integer $EventId Event ID
     * @param string $Quuid Host QUUID
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
