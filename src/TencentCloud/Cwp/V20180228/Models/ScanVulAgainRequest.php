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
 * ScanVulAgain request structure.
 *
 * @method string getEventIds() Obtain Vulnerability event ID string (Multiple entries are separated by English commas.)
 * @method void setEventIds(string $EventIds) Set Vulnerability event ID string (Multiple entries are separated by English commas.)
 * @method string getUuids() Obtain Recheck machine UUID (Multiple entries are separated by commas.)
 * @method void setUuids(string $Uuids) Set Recheck machine UUID (Multiple entries are separated by commas.)
 * @method integer getEventType() Obtain 0 vulnerabilities, 1 windows patch
 * @method void setEventType(integer $EventType) Set 0 vulnerabilities, 1 windows patch
 */
class ScanVulAgainRequest extends AbstractModel
{
    /**
     * @var string Vulnerability event ID string (Multiple entries are separated by English commas.)
     */
    public $EventIds;

    /**
     * @var string Recheck machine UUID (Multiple entries are separated by commas.)
     */
    public $Uuids;

    /**
     * @var integer 0 vulnerabilities, 1 windows patch
     */
    public $EventType;

    /**
     * @param string $EventIds Vulnerability event ID string (Multiple entries are separated by English commas.)
     * @param string $Uuids Recheck machine UUID (Multiple entries are separated by commas.)
     * @param integer $EventType 0 vulnerabilities, 1 windows patch
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
        if (array_key_exists("EventIds",$param) and $param["EventIds"] !== null) {
            $this->EventIds = $param["EventIds"];
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }
    }
}
