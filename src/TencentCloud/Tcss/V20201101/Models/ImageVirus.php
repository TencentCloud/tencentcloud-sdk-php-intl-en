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
 * @method string getRiskLevel() Obtain Risk level
 * @method void setRiskLevel(string $RiskLevel) Set Risk level
 * @method string getCategory() Obtain category
 * @method void setCategory(string $Category) Set category
 * @method string getVirusName() Obtain Virus name
 * @method void setVirusName(string $VirusName) Set Virus name
 * @method array getTags() Obtain Tag.
 * @method void setTags(array $Tags) Set Tag.
 * @method string getDesc() Obtain Description
 * @method void setDesc(string $Desc) Set Description
 * @method string getSolution() Obtain Solution
 * @method void setSolution(string $Solution) Set Solution
 * @method string getFileType() Obtain File type
 * @method void setFileType(string $FileType) Set File type
 * @method string getFileName() Obtain File path
 * @method void setFileName(string $FileName) Set File path
 * @method string getFileMd5() Obtain File md5
 * @method void setFileMd5(string $FileMd5) Set File md5
 * @method integer getFileSize() Obtain Size
 * @method void setFileSize(integer $FileSize) Set Size
 * @method string getFirstScanTime() Obtain First detection time
 * @method void setFirstScanTime(string $FirstScanTime) Set First detection time
 * @method string getLatestScanTime() Obtain Last scan time
 * @method void setLatestScanTime(string $LatestScanTime) Set Last scan time
 */
class ImageVirus extends AbstractModel
{
    /**
     * @var string Path.
     */
    public $Path;

    /**
     * @var string Risk level
     */
    public $RiskLevel;

    /**
     * @var string category
     */
    public $Category;

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
     * @var string Solution
     */
    public $Solution;

    /**
     * @var string File type
     */
    public $FileType;

    /**
     * @var string File path
     */
    public $FileName;

    /**
     * @var string File md5
     */
    public $FileMd5;

    /**
     * @var integer Size
     */
    public $FileSize;

    /**
     * @var string First detection time
     */
    public $FirstScanTime;

    /**
     * @var string Last scan time
     */
    public $LatestScanTime;

    /**
     * @param string $Path Path.
     * @param string $RiskLevel Risk level
     * @param string $Category category
     * @param string $VirusName Virus name
     * @param array $Tags Tag.
     * @param string $Desc Description
     * @param string $Solution Solution
     * @param string $FileType File type
     * @param string $FileName File path
     * @param string $FileMd5 File md5
     * @param integer $FileSize Size
     * @param string $FirstScanTime First detection time
     * @param string $LatestScanTime Last scan time
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
