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
 * IaC detection file
 *
 * @method integer getId() Obtain <p>ID</p>
 * @method void setId(integer $Id) Set <p>ID</p>
 * @method integer getAppId() Obtain <p>appid</p>
 * @method void setAppId(integer $AppId) Set <p>appid</p>
 * @method string getFileId() Obtain <p>File ID</p>
 * @method void setFileId(string $FileId) Set <p>File ID</p>
 * @method string getFileName() Obtain <p>File name.</p>
 * @method void setFileName(string $FileName) Set <p>File name.</p>
 * @method string getCICDName() Obtain <p>CI/CD name</p>
 * @method void setCICDName(string $CICDName) Set <p>CI/CD name</p>
 * @method string getFilePath() Obtain <p>File path</p>
 * @method void setFilePath(string $FilePath) Set <p>File path</p>
 * @method integer getFileType() Obtain <p>File type (1: Dockerfile, 2: Terraform, 3: KubernetesYaml)</p>
 * @method void setFileType(integer $FileType) Set <p>File type (1: Dockerfile, 2: Terraform, 3: KubernetesYaml)</p>
 * @method integer getRiskTotalCnt() Obtain <p>Total number of risks</p>
 * @method void setRiskTotalCnt(integer $RiskTotalCnt) Set <p>Total number of risks</p>
 * @method array getRiskLevelCnt() Obtain <p>Risk level count (0: Low risk, 1: Medium risk, 2: High risk, 3: Critical)</p>
 * @method void setRiskLevelCnt(array $RiskLevelCnt) Set <p>Risk level count (0: Low risk, 1: Medium risk, 2: High risk, 3: Critical)</p>
 * @method string getScanTime() Obtain <p>Scan time</p>
 * @method void setScanTime(string $ScanTime) Set <p>Scan time</p>
 * @method integer getStatus() Obtain <p>Detection status (0: pending scan, 1: detecting, 2: completed, 3: detection exception)</p>
 * @method void setStatus(integer $Status) Set <p>Detection status (0: pending scan, 1: detecting, 2: completed, 3: detection exception)</p>
 * @method integer getFailType() Obtain <p>Scan failure type (0: No failure, 1: Detection timeout, 2: File format parsing failed, 3: Detection failed)</p>
 * @method void setFailType(integer $FailType) Set <p>Scan failure type (0: No failure, 1: Detection timeout, 2: File format parsing failed, 3: Detection failed)</p>
 */
class IaCFile extends AbstractModel
{
    /**
     * @var integer <p>ID</p>
     */
    public $Id;

    /**
     * @var integer <p>appid</p>
     */
    public $AppId;

    /**
     * @var string <p>File ID</p>
     */
    public $FileId;

    /**
     * @var string <p>File name.</p>
     */
    public $FileName;

    /**
     * @var string <p>CI/CD name</p>
     */
    public $CICDName;

    /**
     * @var string <p>File path</p>
     */
    public $FilePath;

    /**
     * @var integer <p>File type (1: Dockerfile, 2: Terraform, 3: KubernetesYaml)</p>
     */
    public $FileType;

    /**
     * @var integer <p>Total number of risks</p>
     */
    public $RiskTotalCnt;

    /**
     * @var array <p>Risk level count (0: Low risk, 1: Medium risk, 2: High risk, 3: Critical)</p>
     */
    public $RiskLevelCnt;

    /**
     * @var string <p>Scan time</p>
     */
    public $ScanTime;

    /**
     * @var integer <p>Detection status (0: pending scan, 1: detecting, 2: completed, 3: detection exception)</p>
     */
    public $Status;

    /**
     * @var integer <p>Scan failure type (0: No failure, 1: Detection timeout, 2: File format parsing failed, 3: Detection failed)</p>
     */
    public $FailType;

    /**
     * @param integer $Id <p>ID</p>
     * @param integer $AppId <p>appid</p>
     * @param string $FileId <p>File ID</p>
     * @param string $FileName <p>File name.</p>
     * @param string $CICDName <p>CI/CD name</p>
     * @param string $FilePath <p>File path</p>
     * @param integer $FileType <p>File type (1: Dockerfile, 2: Terraform, 3: KubernetesYaml)</p>
     * @param integer $RiskTotalCnt <p>Total number of risks</p>
     * @param array $RiskLevelCnt <p>Risk level count (0: Low risk, 1: Medium risk, 2: High risk, 3: Critical)</p>
     * @param string $ScanTime <p>Scan time</p>
     * @param integer $Status <p>Detection status (0: pending scan, 1: detecting, 2: completed, 3: detection exception)</p>
     * @param integer $FailType <p>Scan failure type (0: No failure, 1: Detection timeout, 2: File format parsing failed, 3: Detection failed)</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("CICDName",$param) and $param["CICDName"] !== null) {
            $this->CICDName = $param["CICDName"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("RiskTotalCnt",$param) and $param["RiskTotalCnt"] !== null) {
            $this->RiskTotalCnt = $param["RiskTotalCnt"];
        }

        if (array_key_exists("RiskLevelCnt",$param) and $param["RiskLevelCnt"] !== null) {
            $this->RiskLevelCnt = [];
            foreach ($param["RiskLevelCnt"] as $key => $value){
                $obj = new KeyValueInt();
                $obj->deserialize($value);
                array_push($this->RiskLevelCnt, $obj);
            }
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailType",$param) and $param["FailType"] !== null) {
            $this->FailType = $param["FailType"];
        }
    }
}
