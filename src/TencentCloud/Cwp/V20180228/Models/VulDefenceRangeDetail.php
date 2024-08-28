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
 * Vulnerability defense scope details
 *
 * @method string getVulName() Obtain Vulnerability name
 * @method void setVulName(string $VulName) Set Vulnerability name
 * @method string getLabel() Obtain Tag
 * @method void setLabel(string $Label) Set Tag
 * @method integer getLevel() Obtain Vulnerability level. 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical.
 * @method void setLevel(integer $Level) Set Vulnerability level. 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical.
 * @method float getCvssScore() Obtain CVSS score
 * @method void setCvssScore(float $CvssScore) Set CVSS score
 * @method string getCveId() Obtain cve id
 * @method void setCveId(string $CveId) Set cve id
 * @method string getPublishTime() Obtain Release time
 * @method void setPublishTime(string $PublishTime) Set Release time
 * @method integer getVulId() Obtain Vulnerability ID
 * @method void setVulId(integer $VulId) Set Vulnerability ID
 */
class VulDefenceRangeDetail extends AbstractModel
{
    /**
     * @var string Vulnerability name
     */
    public $VulName;

    /**
     * @var string Tag
     */
    public $Label;

    /**
     * @var integer Vulnerability level. 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical.
     */
    public $Level;

    /**
     * @var float CVSS score
     */
    public $CvssScore;

    /**
     * @var string cve id
     */
    public $CveId;

    /**
     * @var string Release time
     */
    public $PublishTime;

    /**
     * @var integer Vulnerability ID
     */
    public $VulId;

    /**
     * @param string $VulName Vulnerability name
     * @param string $Label Tag
     * @param integer $Level Vulnerability level. 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical.
     * @param float $CvssScore CVSS score
     * @param string $CveId cve id
     * @param string $PublishTime Release time
     * @param integer $VulId Vulnerability ID
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

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("CvssScore",$param) and $param["CvssScore"] !== null) {
            $this->CvssScore = $param["CvssScore"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }
    }
}
