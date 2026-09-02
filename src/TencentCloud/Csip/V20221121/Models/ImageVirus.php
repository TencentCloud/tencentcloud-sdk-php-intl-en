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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Virus info of an image
 *
 * @method string getPath() Obtain <p>Trojan path</p>
 * @method void setPath(string $Path) Set <p>Trojan path</p>
 * @method string getRiskLevel() Obtain <p>Risk level</p>
 * @method void setRiskLevel(string $RiskLevel) Set <p>Risk level</p>
 * @method string getCategory() Obtain <p>Category</p>
 * @method void setCategory(string $Category) Set <p>Category</p>
 * @method string getVirusName() Obtain <p>Trojan name</p>
 * @method void setVirusName(string $VirusName) Set <p>Trojan name</p>
 * @method string getTags() Obtain <p>Trojan Tag</p>
 * @method void setTags(string $Tags) Set <p>Trojan Tag</p>
 * @method string getFileType() Obtain <p>File type</p>
 * @method void setFileType(string $FileType) Set <p>File type</p>
 * @method string getFileName() Obtain <p>File name.</p>
 * @method void setFileName(string $FileName) Set <p>File name.</p>
 * @method string getFileMd5() Obtain <p>File md5</p>
 * @method void setFileMd5(string $FileMd5) Set <p>File md5</p>
 * @method integer getFileSize() Obtain <p>File size</p>
 * @method void setFileSize(integer $FileSize) Set <p>File size</p>
 * @method string getFirstDetectedTime() Obtain <p>First detection time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setFirstDetectedTime(string $FirstDetectedTime) Set <p>First detection time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method string getLatestDetectedTime() Obtain <p>Last detection time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setLatestDetectedTime(string $LatestDetectedTime) Set <p>Last detection time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method string getImageId() Obtain <p>Image ID.</p>
 * @method void setImageId(string $ImageId) Set <p>Image ID.</p>
 * @method string getOwnerAccountName() Obtain <p>Associated account name</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) Set <p>Associated account name</p>
 * @method string getOwnerUin() Obtain <p>Associated account uin</p>
 * @method void setOwnerUin(string $OwnerUin) Set <p>Associated account uin</p>
 * @method integer getOwnerAppId() Obtain <p>appid of the associated account</p>
 * @method void setOwnerAppId(integer $OwnerAppId) Set <p>appid of the associated account</p>
 * @method string getCheckPlatform() Obtain <p>Detection platform</p>
 * @method void setCheckPlatform(string $CheckPlatform) Set <p>Detection platform</p>
 * @method integer getAffectImageCount() Obtain <p>Numbers of affected images</p>
 * @method void setAffectImageCount(integer $AffectImageCount) Set <p>Numbers of affected images</p>
 * @method string getLayerId() Obtain <p>Image layer id</p>
 * @method void setLayerId(string $LayerId) Set <p>Image layer id</p>
 * @method integer getId() Obtain <p>Trojan record id</p>
 * @method void setId(integer $Id) Set <p>Trojan record id</p>
 * @method string getSuggestion() Obtain <p>Trojan handling suggestions</p>
 * @method void setSuggestion(string $Suggestion) Set <p>Trojan handling suggestions</p>
 * @method string getDescription() Obtain <p>Trojan description</p>
 * @method void setDescription(string $Description) Set <p>Trojan description</p>
 * @method string getVirusType() Obtain <p>Trojan horse type</p>
 * @method void setVirusType(string $VirusType) Set <p>Trojan horse type</p>
 */
class ImageVirus extends AbstractModel
{
    /**
     * @var string <p>Trojan path</p>
     */
    public $Path;

    /**
     * @var string <p>Risk level</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>Category</p>
     */
    public $Category;

    /**
     * @var string <p>Trojan name</p>
     */
    public $VirusName;

    /**
     * @var string <p>Trojan Tag</p>
     */
    public $Tags;

    /**
     * @var string <p>File type</p>
     */
    public $FileType;

    /**
     * @var string <p>File name.</p>
     */
    public $FileName;

    /**
     * @var string <p>File md5</p>
     */
    public $FileMd5;

    /**
     * @var integer <p>File size</p>
     */
    public $FileSize;

    /**
     * @var string <p>First detection time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $FirstDetectedTime;

    /**
     * @var string <p>Last detection time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $LatestDetectedTime;

    /**
     * @var string <p>Image ID.</p>
     */
    public $ImageId;

    /**
     * @var string <p>Associated account name</p>
     */
    public $OwnerAccountName;

    /**
     * @var string <p>Associated account uin</p>
     */
    public $OwnerUin;

    /**
     * @var integer <p>appid of the associated account</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>Detection platform</p>
     */
    public $CheckPlatform;

    /**
     * @var integer <p>Numbers of affected images</p>
     */
    public $AffectImageCount;

    /**
     * @var string <p>Image layer id</p>
     */
    public $LayerId;

    /**
     * @var integer <p>Trojan record id</p>
     */
    public $Id;

    /**
     * @var string <p>Trojan handling suggestions</p>
     */
    public $Suggestion;

    /**
     * @var string <p>Trojan description</p>
     */
    public $Description;

    /**
     * @var string <p>Trojan horse type</p>
     */
    public $VirusType;

    /**
     * @param string $Path <p>Trojan path</p>
     * @param string $RiskLevel <p>Risk level</p>
     * @param string $Category <p>Category</p>
     * @param string $VirusName <p>Trojan name</p>
     * @param string $Tags <p>Trojan Tag</p>
     * @param string $FileType <p>File type</p>
     * @param string $FileName <p>File name.</p>
     * @param string $FileMd5 <p>File md5</p>
     * @param integer $FileSize <p>File size</p>
     * @param string $FirstDetectedTime <p>First detection time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param string $LatestDetectedTime <p>Last detection time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param string $ImageId <p>Image ID.</p>
     * @param string $OwnerAccountName <p>Associated account name</p>
     * @param string $OwnerUin <p>Associated account uin</p>
     * @param integer $OwnerAppId <p>appid of the associated account</p>
     * @param string $CheckPlatform <p>Detection platform</p>
     * @param integer $AffectImageCount <p>Numbers of affected images</p>
     * @param string $LayerId <p>Image layer id</p>
     * @param integer $Id <p>Trojan record id</p>
     * @param string $Suggestion <p>Trojan handling suggestions</p>
     * @param string $Description <p>Trojan description</p>
     * @param string $VirusType <p>Trojan horse type</p>
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

        if (array_key_exists("FirstDetectedTime",$param) and $param["FirstDetectedTime"] !== null) {
            $this->FirstDetectedTime = $param["FirstDetectedTime"];
        }

        if (array_key_exists("LatestDetectedTime",$param) and $param["LatestDetectedTime"] !== null) {
            $this->LatestDetectedTime = $param["LatestDetectedTime"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("CheckPlatform",$param) and $param["CheckPlatform"] !== null) {
            $this->CheckPlatform = $param["CheckPlatform"];
        }

        if (array_key_exists("AffectImageCount",$param) and $param["AffectImageCount"] !== null) {
            $this->AffectImageCount = $param["AffectImageCount"];
        }

        if (array_key_exists("LayerId",$param) and $param["LayerId"] !== null) {
            $this->LayerId = $param["LayerId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("VirusType",$param) and $param["VirusType"] !== null) {
            $this->VirusType = $param["VirusType"];
        }
    }
}
