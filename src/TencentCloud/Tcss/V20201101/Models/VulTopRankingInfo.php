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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Ranking of top vulnerabilities
 *
 * @method string getVulName() Obtain Vulnerability name
 * @method void setVulName(string $VulName) Set Vulnerability name
 * @method string getLevel() Obtain Severity. Valid values: `CRITICAL` (critical); `HIGH` (high);`MIDDLE` (medium);`LOW` (low).
 * @method void setLevel(string $Level) Set Severity. Valid values: `CRITICAL` (critical); `HIGH` (high);`MIDDLE` (medium);`LOW` (low).
 * @method integer getAffectedImageCount() Obtain Number of affected images
 * @method void setAffectedImageCount(integer $AffectedImageCount) Set Number of affected images
 * @method integer getAffectedContainerCount() Obtain Number of affected containers
 * @method void setAffectedContainerCount(integer $AffectedContainerCount) Set Number of affected containers
 * @method integer getID() Obtain Vulnerability ID
 * @method void setID(integer $ID) Set Vulnerability ID
 * @method string getPocID() Obtain POC ID
 * @method void setPocID(string $PocID) Set POC ID
 */
class VulTopRankingInfo extends AbstractModel
{
    /**
     * @var string Vulnerability name
     */
    public $VulName;

    /**
     * @var string Severity. Valid values: `CRITICAL` (critical); `HIGH` (high);`MIDDLE` (medium);`LOW` (low).
     */
    public $Level;

    /**
     * @var integer Number of affected images
     */
    public $AffectedImageCount;

    /**
     * @var integer Number of affected containers
     */
    public $AffectedContainerCount;

    /**
     * @var integer Vulnerability ID
     */
    public $ID;

    /**
     * @var string POC ID
     */
    public $PocID;

    /**
     * @param string $VulName Vulnerability name
     * @param string $Level Severity. Valid values: `CRITICAL` (critical); `HIGH` (high);`MIDDLE` (medium);`LOW` (low).
     * @param integer $AffectedImageCount Number of affected images
     * @param integer $AffectedContainerCount Number of affected containers
     * @param integer $ID Vulnerability ID
     * @param string $PocID POC ID
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
        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("AffectedImageCount",$param) and $param["AffectedImageCount"] !== null) {
            $this->AffectedImageCount = $param["AffectedImageCount"];
        }

        if (array_key_exists("AffectedContainerCount",$param) and $param["AffectedContainerCount"] !== null) {
            $this->AffectedContainerCount = $param["AffectedContainerCount"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
        }
    }
}
