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
 * Information of a virus in the image
 *
 * @method string getPath() Obtain Path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set Path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRiskLevel() Obtain Risk level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskLevel(integer $RiskLevel) Set Risk level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVirusName() Obtain Virus name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVirusName(string $VirusName) Set Virus name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDesc() Obtain Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDesc(string $Desc) Set Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSolution() Obtain Fix suggestion
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSolution(string $Solution) Set Fix suggestion
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSize() Obtain Size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSize(integer $Size) Set Size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstScanTime() Obtain First discovery time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstScanTime(string $FirstScanTime) Set First discovery time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLatestScanTime() Obtain Last scan time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLatestScanTime(string $LatestScanTime) Set Last scan time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMd5() Obtain MD5 checksum of the file
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMd5(string $Md5) Set MD5 checksum of the file
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileName() Obtain Filename
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileName(string $FileName) Set Filename
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCheckPlatform() Obtain Check platform
`1`: Tencent Cloud Security Engine.
`2`: tav.
`3`: binaryAi.
`4`: Unusual behavior.
`5`: Threat intelligence.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCheckPlatform(array $CheckPlatform) Set Check platform
`1`: Tencent Cloud Security Engine.
`2`: tav.
`3`: binaryAi.
`4`: Unusual behavior.
`5`: Threat intelligence.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ImageVirusInfo extends AbstractModel
{
    /**
     * @var string Path
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @var integer Risk level
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskLevel;

    /**
     * @var string Virus name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VirusName;

    /**
     * @var array Tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Desc;

    /**
     * @var string Fix suggestion
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Solution;

    /**
     * @var integer Size
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Size;

    /**
     * @var string First discovery time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstScanTime;

    /**
     * @var string Last scan time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LatestScanTime;

    /**
     * @var string MD5 checksum of the file
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Md5;

    /**
     * @var string Filename
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileName;

    /**
     * @var array Check platform
`1`: Tencent Cloud Security Engine.
`2`: tav.
`3`: binaryAi.
`4`: Unusual behavior.
`5`: Threat intelligence.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CheckPlatform;

    /**
     * @param string $Path Path
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RiskLevel Risk level
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VirusName Virus name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Desc Description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Solution Fix suggestion
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Size Size
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstScanTime First discovery time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LatestScanTime Last scan time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Md5 MD5 checksum of the file
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileName Filename
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CheckPlatform Check platform
`1`: Tencent Cloud Security Engine.
`2`: tav.
`3`: binaryAi.
`4`: Unusual behavior.
`5`: Threat intelligence.
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
