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
 * Host risk count
 *
 * @method string getHostId() Obtain Host ID
 * @method void setHostId(string $HostId) Set Host ID
 * @method string getHostName() Obtain Host name
 * @method void setHostName(string $HostName) Set Host name
 * @method integer getSeriousCount() Obtain Critical count
 * @method void setSeriousCount(integer $SeriousCount) Set Critical count
 * @method integer getHighCount() Obtain High-risk count
 * @method void setHighCount(integer $HighCount) Set High-risk count
 * @method integer getMediumCount() Obtain Number of medium-risk vulnerabilities
 * @method void setMediumCount(integer $MediumCount) Set Number of medium-risk vulnerabilities
 * @method integer getLowCount() Obtain Number of low-risk vulnerabilities
 * @method void setLowCount(integer $LowCount) Set Number of low-risk vulnerabilities
 */
class HostRiskLevelCount extends AbstractModel
{
    /**
     * @var string Host ID
     */
    public $HostId;

    /**
     * @var string Host name
     */
    public $HostName;

    /**
     * @var integer Critical count
     */
    public $SeriousCount;

    /**
     * @var integer High-risk count
     */
    public $HighCount;

    /**
     * @var integer Number of medium-risk vulnerabilities
     */
    public $MediumCount;

    /**
     * @var integer Number of low-risk vulnerabilities
     */
    public $LowCount;

    /**
     * @param string $HostId Host ID
     * @param string $HostName Host name
     * @param integer $SeriousCount Critical count
     * @param integer $HighCount High-risk count
     * @param integer $MediumCount Number of medium-risk vulnerabilities
     * @param integer $LowCount Number of low-risk vulnerabilities
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
        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("SeriousCount",$param) and $param["SeriousCount"] !== null) {
            $this->SeriousCount = $param["SeriousCount"];
        }

        if (array_key_exists("HighCount",$param) and $param["HighCount"] !== null) {
            $this->HighCount = $param["HighCount"];
        }

        if (array_key_exists("MediumCount",$param) and $param["MediumCount"] !== null) {
            $this->MediumCount = $param["MediumCount"];
        }

        if (array_key_exists("LowCount",$param) and $param["LowCount"] !== null) {
            $this->LowCount = $param["LowCount"];
        }
    }
}
