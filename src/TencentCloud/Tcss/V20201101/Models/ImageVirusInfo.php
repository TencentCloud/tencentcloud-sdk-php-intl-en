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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a virus in the image
 *
 * @method string getPath() Obtain Path.
 * @method void setPath(string $Path) Set Path.
 * @method integer getRiskLevel() Obtain Risk level
 * @method void setRiskLevel(integer $RiskLevel) Set Risk level
 * @method string getVirusName() Obtain Virus name
 * @method void setVirusName(string $VirusName) Set Virus name
 * @method array getTags() Obtain Tag.
 * @method void setTags(array $Tags) Set Tag.
 * @method string getDesc() Obtain Description
 * @method void setDesc(string $Desc) Set Description
 * @method string getSolution() Obtain Remediation Suggestions
 * @method void setSolution(string $Solution) Set Remediation Suggestions
 * @method integer getSize() Obtain Size
 * @method void setSize(integer $Size) Set Size
 * @method string getFirstScanTime() Obtain First detection time
 * @method void setFirstScanTime(string $FirstScanTime) Set First detection time
 * @method string getLatestScanTime() Obtain Last scan time
 * @method void setLatestScanTime(string $LatestScanTime) Set Last scan time
 * @method string getMd5() Obtain File md5
 * @method void setMd5(string $Md5) Set File md5
 * @method string getFileName() Obtain File name
 * @method void setFileName(string $FileName) Set File name
 * @method array getCheckPlatform() Obtain Detection platform
1: Cloud Killing Engine
2: tav
3: binaryAi
4: Abnormal behavior
5: Threat Intelligence
 * @method void setCheckPlatform(array $CheckPlatform) Set Detection platform
1: Cloud Killing Engine
2: tav
3: binaryAi
4: Abnormal behavior
5: Threat Intelligence
 */
class ImageVirusInfo extends AbstractModel
{
    /**
     * @var string Path.
     */
    public $Path;

    /**
     * @var integer Risk level
     */
    public $RiskLevel;

    /**
     * @var string Virus name
     */
    public $VirusName;

    /**
     * @var array Tag.
     */
    public $Tags;

    /**
     * @var string Description
     */
    public $Desc;

    /**
     * @var string Remediation Suggestions
     */
    public $Solution;

    /**
     * @var integer Size
     */
    public $Size;

    /**
     * @var string First detection time
     */
    public $FirstScanTime;

    /**
     * @var string Last scan time
     */
    public $LatestScanTime;

    /**
     * @var string File md5
     */
    public $Md5;

    /**
     * @var string File name
     */
    public $FileName;

    /**
     * @var array Detection platform
1: Cloud Killing Engine
2: tav
3: binaryAi
4: Abnormal behavior
5: Threat Intelligence
     */
    public $CheckPlatform;

    /**
     * @param string $Path Path.
     * @param integer $RiskLevel Risk level
     * @param string $VirusName Virus name
     * @param array $Tags Tag.
     * @param string $Desc Description
     * @param string $Solution Remediation Suggestions
     * @param integer $Size Size
     * @param string $FirstScanTime First detection time
     * @param string $LatestScanTime Last scan time
     * @param string $Md5 File md5
     * @param string $FileName File name
     * @param array $CheckPlatform Detection platform
1: Cloud Killing Engine
2: tav
3: binaryAi
4: Abnormal behavior
5: Threat Intelligence
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("FirstScanTime",$param) and $param["FirstScanTime"] !== null) {
            $this->FirstScanTime = $param["FirstScanTime"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("CheckPlatform",$param) and $param["CheckPlatform"] !== null) {
            $this->CheckPlatform = $param["CheckPlatform"];
        }
    }
}
