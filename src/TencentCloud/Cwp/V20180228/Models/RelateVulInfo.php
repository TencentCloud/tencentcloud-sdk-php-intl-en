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
 * Vulnerability information associated with Windows patches
 *
 * @method string getCveId() Obtain CVEid
 * @method void setCveId(string $CveId) Set CVEid
 * @method string getName() Obtain Vulnerability name
 * @method void setName(string $Name) Set Vulnerability name
 * @method string getLabel() Obtain Vulnerability tag
 * @method void setLabel(string $Label) Set Vulnerability tag
 * @method integer getLevel() Obtain Vulnerability level
 * @method void setLevel(integer $Level) Set Vulnerability level
 * @method float getCVSS() Obtain CVSS score
 * @method void setCVSS(float $CVSS) Set CVSS score
 * @method string getPublishTime() Obtain Vulnerability disclosure time
 * @method void setPublishTime(string $PublishTime) Set Vulnerability disclosure time
 * @method integer getId() Obtain Vulnerability ID
 * @method void setId(integer $Id) Set Vulnerability ID
 */
class RelateVulInfo extends AbstractModel
{
    /**
     * @var string CVEid
     */
    public $CveId;

    /**
     * @var string Vulnerability name
     */
    public $Name;

    /**
     * @var string Vulnerability tag
     */
    public $Label;

    /**
     * @var integer Vulnerability level
     */
    public $Level;

    /**
     * @var float CVSS score
     */
    public $CVSS;

    /**
     * @var string Vulnerability disclosure time
     */
    public $PublishTime;

    /**
     * @var integer Vulnerability ID
     */
    public $Id;

    /**
     * @param string $CveId CVEid
     * @param string $Name Vulnerability name
     * @param string $Label Vulnerability tag
     * @param integer $Level Vulnerability level
     * @param float $CVSS CVSS score
     * @param string $PublishTime Vulnerability disclosure time
     * @param integer $Id Vulnerability ID
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
        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("CVSS",$param) and $param["CVSS"] !== null) {
            $this->CVSS = $param["CVSS"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
