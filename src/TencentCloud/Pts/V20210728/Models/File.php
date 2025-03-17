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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * File.
 *
 * @method string getFileId() Obtain File ID.
 * @method void setFileId(string $FileId) Set File ID.
 * @method integer getKind() Obtain File type. 1 represents parameter file, 2 represents protocol file, 3 represents request file.
 * @method void setKind(integer $Kind) Set File type. 1 represents parameter file, 2 represents protocol file, 3 represents request file.
 * @method string getName() Obtain Filename.
 * @method void setName(string $Name) Set Filename.
 * @method integer getSize() Obtain File size.
 * @method void setSize(integer $Size) Set File size.
 * @method string getType() Obtain File type. The 'folder' represents a folder; if not specified, it represents a normal file.
 * @method void setType(string $Type) Set File type. The 'folder' represents a folder; if not specified, it represents a normal file.
 * @method string getUpdatedAt() Obtain Update time.
 * @method void setUpdatedAt(string $UpdatedAt) Set Update time.
 * @method integer getLineCount() Obtain Number of file lines.

Note: This field may return null, indicating that no valid value is found.
 * @method void setLineCount(integer $LineCount) Set Number of file lines.

Note: This field may return null, indicating that no valid value is found.
 * @method array getHeadLines() Obtain First few rows of file.

Note: This field may return null, indicating that no valid value is found.
 * @method void setHeadLines(array $HeadLines) Set First few rows of file.

Note: This field may return null, indicating that no valid value is found.
 * @method array getTailLines() Obtain Last few rows of file.

Note: This field may return null, indicating that no valid value is found.
 * @method void setTailLines(array $TailLines) Set Last few rows of file.

Note: This field may return null, indicating that no valid value is found.
 * @method boolean getHeaderInFile() Obtain Whether the header is in the file.

Note: This field may return null, indicating that no valid value is found.
 * @method void setHeaderInFile(boolean $HeaderInFile) Set Whether the header is in the file.

Note: This field may return null, indicating that no valid value is found.
 * @method array getHeaderColumns() Obtain Parameter name.

Note: This field may return null, indicating that no valid value is found.
 * @method void setHeaderColumns(array $HeaderColumns) Set Parameter name.

Note: This field may return null, indicating that no valid value is found.
 * @method array getFileInfos() Obtain Files in the folder.

Note: This field may return null, indicating that no valid value is found.
 * @method void setFileInfos(array $FileInfos) Set Files in the folder.

Note: This field may return null, indicating that no valid value is found.
 * @method array getScenarioSet() Obtain Associated scenario.

Note: This field may return null, indicating that no valid value is found.
 * @method void setScenarioSet(array $ScenarioSet) Set Associated scenario.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getStatus() Obtain File status.

Note: This field may return null, indicating that no valid value is found.
 * @method void setStatus(integer $Status) Set File status.

Note: This field may return null, indicating that no valid value is found.
 * @method string getCreatedAt() Obtain Create time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setCreatedAt(string $CreatedAt) Set Create time.

Note: This field may return null, indicating that no valid value is found.
 * @method string getProjectId() Obtain Project ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setProjectId(string $ProjectId) Set Project ID.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getAppID() Obtain Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method void setAppID(integer $AppID) Set Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method string getUin() Obtain Uin.

Note: This field may return null, indicating that no valid value is found.
 * @method void setUin(string $Uin) Set Uin.

Note: This field may return null, indicating that no valid value is found.
 * @method string getSubAccountUin() Obtain Sub account uin.

Note: This field may return null, indicating that no valid value is found.
 * @method void setSubAccountUin(string $SubAccountUin) Set Sub account uin.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getAppId() Obtain App ID of user account.

Note: This field may return null, indicating that no valid value is found.
 * @method void setAppId(integer $AppId) Set App ID of user account.

Note: This field may return null, indicating that no valid value is found.
 */
class File extends AbstractModel
{
    /**
     * @var string File ID.
     */
    public $FileId;

    /**
     * @var integer File type. 1 represents parameter file, 2 represents protocol file, 3 represents request file.
     */
    public $Kind;

    /**
     * @var string Filename.
     */
    public $Name;

    /**
     * @var integer File size.
     */
    public $Size;

    /**
     * @var string File type. The 'folder' represents a folder; if not specified, it represents a normal file.
     */
    public $Type;

    /**
     * @var string Update time.
     */
    public $UpdatedAt;

    /**
     * @var integer Number of file lines.

Note: This field may return null, indicating that no valid value is found.
     */
    public $LineCount;

    /**
     * @var array First few rows of file.

Note: This field may return null, indicating that no valid value is found.
     */
    public $HeadLines;

    /**
     * @var array Last few rows of file.

Note: This field may return null, indicating that no valid value is found.
     */
    public $TailLines;

    /**
     * @var boolean Whether the header is in the file.

Note: This field may return null, indicating that no valid value is found.
     */
    public $HeaderInFile;

    /**
     * @var array Parameter name.

Note: This field may return null, indicating that no valid value is found.
     */
    public $HeaderColumns;

    /**
     * @var array Files in the folder.

Note: This field may return null, indicating that no valid value is found.
     */
    public $FileInfos;

    /**
     * @var array Associated scenario.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ScenarioSet;

    /**
     * @var integer File status.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Status;

    /**
     * @var string Create time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $CreatedAt;

    /**
     * @var string Project ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ProjectId;

    /**
     * @var integer Deprecated.

Note: This field may return null, indicating that no valid value is found.
     */
    public $AppID;

    /**
     * @var string Uin.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Uin;

    /**
     * @var string Sub account uin.

Note: This field may return null, indicating that no valid value is found.
     */
    public $SubAccountUin;

    /**
     * @var integer App ID of user account.

Note: This field may return null, indicating that no valid value is found.
     */
    public $AppId;

    /**
     * @param string $FileId File ID.
     * @param integer $Kind File type. 1 represents parameter file, 2 represents protocol file, 3 represents request file.
     * @param string $Name Filename.
     * @param integer $Size File size.
     * @param string $Type File type. The 'folder' represents a folder; if not specified, it represents a normal file.
     * @param string $UpdatedAt Update time.
     * @param integer $LineCount Number of file lines.

Note: This field may return null, indicating that no valid value is found.
     * @param array $HeadLines First few rows of file.

Note: This field may return null, indicating that no valid value is found.
     * @param array $TailLines Last few rows of file.

Note: This field may return null, indicating that no valid value is found.
     * @param boolean $HeaderInFile Whether the header is in the file.

Note: This field may return null, indicating that no valid value is found.
     * @param array $HeaderColumns Parameter name.

Note: This field may return null, indicating that no valid value is found.
     * @param array $FileInfos Files in the folder.

Note: This field may return null, indicating that no valid value is found.
     * @param array $ScenarioSet Associated scenario.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $Status File status.

Note: This field may return null, indicating that no valid value is found.
     * @param string $CreatedAt Create time.

Note: This field may return null, indicating that no valid value is found.
     * @param string $ProjectId Project ID.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $AppID Deprecated.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Uin Uin.

Note: This field may return null, indicating that no valid value is found.
     * @param string $SubAccountUin Sub account uin.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $AppId App ID of user account.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("LineCount",$param) and $param["LineCount"] !== null) {
            $this->LineCount = $param["LineCount"];
        }

        if (array_key_exists("HeadLines",$param) and $param["HeadLines"] !== null) {
            $this->HeadLines = $param["HeadLines"];
        }

        if (array_key_exists("TailLines",$param) and $param["TailLines"] !== null) {
            $this->TailLines = $param["TailLines"];
        }

        if (array_key_exists("HeaderInFile",$param) and $param["HeaderInFile"] !== null) {
            $this->HeaderInFile = $param["HeaderInFile"];
        }

        if (array_key_exists("HeaderColumns",$param) and $param["HeaderColumns"] !== null) {
            $this->HeaderColumns = $param["HeaderColumns"];
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new FileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("ScenarioSet",$param) and $param["ScenarioSet"] !== null) {
            $this->ScenarioSet = [];
            foreach ($param["ScenarioSet"] as $key => $value){
                $obj = new Scenario();
                $obj->deserialize($value);
                array_push($this->ScenarioSet, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
