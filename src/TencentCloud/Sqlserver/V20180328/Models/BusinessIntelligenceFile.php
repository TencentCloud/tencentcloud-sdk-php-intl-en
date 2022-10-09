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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Business intelligence service file type
 *
 * @method string getFileName() Obtain File name
 * @method void setFileName(string $FileName) Set File name
 * @method string getFileType() Obtain File type
 * @method void setFileType(string $FileType) Set File type
 * @method string getFileURL() Obtain File COS_URL
 * @method void setFileURL(string $FileURL) Set File COS_URL
 * @method string getFilePath() Obtain The file path on the server
 * @method void setFilePath(string $FilePath) Set The file path on the server
 * @method integer getFileSize() Obtain File size in bytes
 * @method void setFileSize(integer $FileSize) Set File size in bytes
 * @method string getFileMd5() Obtain File MD5 value
 * @method void setFileMd5(string $FileMd5) Set File MD5 value
 * @method integer getStatus() Obtain File deployment status. Valid values: `1`(Initialize to be deployed), `2` (Deploying), `3` (Deployment successful), `4` (Deployment failed).
 * @method void setStatus(integer $Status) Set File deployment status. Valid values: `1`(Initialize to be deployed), `2` (Deploying), `3` (Deployment successful), `4` (Deployment failed).
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getCreateTime() Obtain File creation time
 * @method void setCreateTime(string $CreateTime) Set File creation time
 * @method string getStartTime() Obtain Start time of file deployment
 * @method void setStartTime(string $StartTime) Set Start time of file deployment
 * @method string getEndTime() Obtain End time of file deployment
 * @method void setEndTime(string $EndTime) Set End time of file deployment
 * @method string getMessage() Obtain Returned error message
 * @method void setMessage(string $Message) Set Returned error message
 * @method string getInstanceId() Obtain Business intelligence instance ID
 * @method void setInstanceId(string $InstanceId) Set Business intelligence instance ID
 * @method FileAction getAction() Obtain Operation information
 * @method void setAction(FileAction $Action) Set Operation information
 */
class BusinessIntelligenceFile extends AbstractModel
{
    /**
     * @var string File name
     */
    public $FileName;

    /**
     * @var string File type
     */
    public $FileType;

    /**
     * @var string File COS_URL
     */
    public $FileURL;

    /**
     * @var string The file path on the server
     */
    public $FilePath;

    /**
     * @var integer File size in bytes
     */
    public $FileSize;

    /**
     * @var string File MD5 value
     */
    public $FileMd5;

    /**
     * @var integer File deployment status. Valid values: `1`(Initialize to be deployed), `2` (Deploying), `3` (Deployment successful), `4` (Deployment failed).
     */
    public $Status;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string File creation time
     */
    public $CreateTime;

    /**
     * @var string Start time of file deployment
     */
    public $StartTime;

    /**
     * @var string End time of file deployment
     */
    public $EndTime;

    /**
     * @var string Returned error message
     */
    public $Message;

    /**
     * @var string Business intelligence instance ID
     */
    public $InstanceId;

    /**
     * @var FileAction Operation information
     */
    public $Action;

    /**
     * @param string $FileName File name
     * @param string $FileType File type
     * @param string $FileURL File COS_URL
     * @param string $FilePath The file path on the server
     * @param integer $FileSize File size in bytes
     * @param string $FileMd5 File MD5 value
     * @param integer $Status File deployment status. Valid values: `1`(Initialize to be deployed), `2` (Deploying), `3` (Deployment successful), `4` (Deployment failed).
     * @param string $Remark Remarks
     * @param string $CreateTime File creation time
     * @param string $StartTime Start time of file deployment
     * @param string $EndTime End time of file deployment
     * @param string $Message Returned error message
     * @param string $InstanceId Business intelligence instance ID
     * @param FileAction $Action Operation information
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

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileURL",$param) and $param["FileURL"] !== null) {
            $this->FileURL = $param["FileURL"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new FileAction();
            $this->Action->deserialize($param["Action"]);
        }
    }
}
