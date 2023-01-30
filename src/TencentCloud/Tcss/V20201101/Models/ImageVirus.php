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
 * @method string getRiskLevel() Obtain Risk level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskLevel(string $RiskLevel) Set Risk level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCategory() Obtain Category
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCategory(string $Category) Set Category
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
 * @method string getSolution() Obtain Solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSolution(string $Solution) Set Solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileType() Obtain File type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileType(string $FileType) Set File type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileName() Obtain File path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileName(string $FileName) Set File path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileMd5() Obtain MD5 checksum of the file
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileMd5(string $FileMd5) Set MD5 checksum of the file
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFileSize() Obtain Size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileSize(integer $FileSize) Set Size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstScanTime() Obtain First discovery time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstScanTime(string $FirstScanTime) Set First discovery time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLatestScanTime() Obtain Last scan time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLatestScanTime(string $LatestScanTime) Set Last scan time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ImageVirus extends AbstractModel
{
    /**
     * @var string Path
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @var string Risk level
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskLevel;

    /**
     * @var string Category
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Category;

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
     * @var string Solution
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Solution;

    /**
     * @var string File type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileType;

    /**
     * @var string File path
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileName;

    /**
     * @var string MD5 checksum of the file
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileMd5;

    /**
     * @var integer Size
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileSize;

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
     * @param string $Path Path
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RiskLevel Risk level
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Category Category
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VirusName Virus name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Desc Description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Solution Solution
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileType File type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileName File path
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileMd5 MD5 checksum of the file
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FileSize Size
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstScanTime First discovery time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LatestScanTime Last scan time
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

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
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

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FirstScanTime",$param) and $param["FirstScanTime"] !== null) {
            $this->FirstScanTime = $param["FirstScanTime"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }
    }
}
