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
 * Object storage audit file data recognition information
 *
 * @method string getFileName() Obtain <p>File name.</p>
 * @method void setFileName(string $FileName) Set <p>File name.</p>
 * @method string getDirName() Obtain <p>File path</p>
 * @method void setDirName(string $DirName) Set <p>File path</p>
 * @method array getCategoryDetails() Obtain <p>Details of categorical data items</p>
 * @method void setCategoryDetails(array $CategoryDetails) Set <p>Details of categorical data items</p>
 * @method CosBucketInfo getBucketInfo() Obtain <p>Bucket information</p>
 * @method void setBucketInfo(CosBucketInfo $BucketInfo) Set <p>Bucket information</p>
 * @method integer getLastScanTime() Obtain <p>Last scan time</p>
 * @method void setLastScanTime(integer $LastScanTime) Set <p>Last scan time</p>
 * @method integer getHandleStatus() Obtain <p>Handling status</p>
 * @method void setHandleStatus(integer $HandleStatus) Set <p>Handling status</p>
 * @method string getResultId() Obtain <p>Result unique ID</p>
 * @method void setResultId(string $ResultId) Set <p>Result unique ID</p>
 * @method array getRuleDetails() Obtain <p>Rule details</p>
 * @method void setRuleDetails(array $RuleDetails) Set <p>Rule details</p>
 * @method array getLevelDetails() Obtain <p>Level details</p>
 * @method void setLevelDetails(array $LevelDetails) Set <p>Level details</p>
 * @method integer getComplianceId() Obtain <p>Template ID.</p>
 * @method void setComplianceId(integer $ComplianceId) Set <p>Template ID.</p>
 */
class CosAssetFileIdentifyInfo extends AbstractModel
{
    /**
     * @var string <p>File name.</p>
     */
    public $FileName;

    /**
     * @var string <p>File path</p>
     */
    public $DirName;

    /**
     * @var array <p>Details of categorical data items</p>
     */
    public $CategoryDetails;

    /**
     * @var CosBucketInfo <p>Bucket information</p>
     */
    public $BucketInfo;

    /**
     * @var integer <p>Last scan time</p>
     */
    public $LastScanTime;

    /**
     * @var integer <p>Handling status</p>
     */
    public $HandleStatus;

    /**
     * @var string <p>Result unique ID</p>
     */
    public $ResultId;

    /**
     * @var array <p>Rule details</p>
     */
    public $RuleDetails;

    /**
     * @var array <p>Level details</p>
     */
    public $LevelDetails;

    /**
     * @var integer <p>Template ID.</p>
     */
    public $ComplianceId;

    /**
     * @param string $FileName <p>File name.</p>
     * @param string $DirName <p>File path</p>
     * @param array $CategoryDetails <p>Details of categorical data items</p>
     * @param CosBucketInfo $BucketInfo <p>Bucket information</p>
     * @param integer $LastScanTime <p>Last scan time</p>
     * @param integer $HandleStatus <p>Handling status</p>
     * @param string $ResultId <p>Result unique ID</p>
     * @param array $RuleDetails <p>Rule details</p>
     * @param array $LevelDetails <p>Level details</p>
     * @param integer $ComplianceId <p>Template ID.</p>
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("DirName",$param) and $param["DirName"] !== null) {
            $this->DirName = $param["DirName"];
        }

        if (array_key_exists("CategoryDetails",$param) and $param["CategoryDetails"] !== null) {
            $this->CategoryDetails = [];
            foreach ($param["CategoryDetails"] as $key => $value){
                $obj = new CosIdentifyCategoryDetail();
                $obj->deserialize($value);
                array_push($this->CategoryDetails, $obj);
            }
        }

        if (array_key_exists("BucketInfo",$param) and $param["BucketInfo"] !== null) {
            $this->BucketInfo = new CosBucketInfo();
            $this->BucketInfo->deserialize($param["BucketInfo"]);
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("HandleStatus",$param) and $param["HandleStatus"] !== null) {
            $this->HandleStatus = $param["HandleStatus"];
        }

        if (array_key_exists("ResultId",$param) and $param["ResultId"] !== null) {
            $this->ResultId = $param["ResultId"];
        }

        if (array_key_exists("RuleDetails",$param) and $param["RuleDetails"] !== null) {
            $this->RuleDetails = [];
            foreach ($param["RuleDetails"] as $key => $value){
                $obj = new CosIdentifyRuleDetail();
                $obj->deserialize($value);
                array_push($this->RuleDetails, $obj);
            }
        }

        if (array_key_exists("LevelDetails",$param) and $param["LevelDetails"] !== null) {
            $this->LevelDetails = [];
            foreach ($param["LevelDetails"] as $key => $value){
                $obj = new CosIdentifyLevelDetail();
                $obj->deserialize($value);
                array_push($this->LevelDetails, $obj);
            }
        }

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }
    }
}
