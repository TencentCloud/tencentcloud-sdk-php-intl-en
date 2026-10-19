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
 * cos audit asset data identification details
 *
 * @method integer getStatus() Obtain <p>Recognition task status. 0: unrecognized; 1: in process; 2: terminated; 3: successful; 4: failed.</p>
 * @method void setStatus(integer $Status) Set <p>Recognition task status. 0: unrecognized; 1: in process; 2: terminated; 3: successful; 4: failed.</p>
 * @method float getProgress() Obtain <p>Recognition progress</p>
 * @method void setProgress(float $Progress) Set <p>Recognition progress</p>
 * @method integer getLatestScanTime() Obtain <p>Last scan time.</p>
 * @method void setLatestScanTime(integer $LatestScanTime) Set <p>Last scan time.</p>
 * @method string getErrorInfo() Obtain <p>Recognition failed information.</p>
 * @method void setErrorInfo(string $ErrorInfo) Set <p>Recognition failed information.</p>
 * @method array getCategoryDetails() Obtain <p>Recognition result category details</p>
 * @method void setCategoryDetails(array $CategoryDetails) Set <p>Recognition result category details</p>
 * @method array getRuleDetails() Obtain <p>None.</p>
 * @method void setRuleDetails(array $RuleDetails) Set <p>None.</p>
 * @method array getLevelDetails() Obtain <p>None.</p>
 * @method void setLevelDetails(array $LevelDetails) Set <p>None.</p>
 * @method boolean getIsFullScanned() Obtain <p>Whether a full scan has been initiated</p>
 * @method void setIsFullScanned(boolean $IsFullScanned) Set <p>Whether a full scan has been initiated</p>
 */
class CosAssetDataScanDetail extends AbstractModel
{
    /**
     * @var integer <p>Recognition task status. 0: unrecognized; 1: in process; 2: terminated; 3: successful; 4: failed.</p>
     */
    public $Status;

    /**
     * @var float <p>Recognition progress</p>
     */
    public $Progress;

    /**
     * @var integer <p>Last scan time.</p>
     */
    public $LatestScanTime;

    /**
     * @var string <p>Recognition failed information.</p>
     */
    public $ErrorInfo;

    /**
     * @var array <p>Recognition result category details</p>
     */
    public $CategoryDetails;

    /**
     * @var array <p>None.</p>
     */
    public $RuleDetails;

    /**
     * @var array <p>None.</p>
     */
    public $LevelDetails;

    /**
     * @var boolean <p>Whether a full scan has been initiated</p>
     */
    public $IsFullScanned;

    /**
     * @param integer $Status <p>Recognition task status. 0: unrecognized; 1: in process; 2: terminated; 3: successful; 4: failed.</p>
     * @param float $Progress <p>Recognition progress</p>
     * @param integer $LatestScanTime <p>Last scan time.</p>
     * @param string $ErrorInfo <p>Recognition failed information.</p>
     * @param array $CategoryDetails <p>Recognition result category details</p>
     * @param array $RuleDetails <p>None.</p>
     * @param array $LevelDetails <p>None.</p>
     * @param boolean $IsFullScanned <p>Whether a full scan has been initiated</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = $param["ErrorInfo"];
        }

        if (array_key_exists("CategoryDetails",$param) and $param["CategoryDetails"] !== null) {
            $this->CategoryDetails = [];
            foreach ($param["CategoryDetails"] as $key => $value){
                $obj = new CosIdentifyCategoryDetail();
                $obj->deserialize($value);
                array_push($this->CategoryDetails, $obj);
            }
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

        if (array_key_exists("IsFullScanned",$param) and $param["IsFullScanned"] !== null) {
            $this->IsFullScanned = $param["IsFullScanned"];
        }
    }
}
