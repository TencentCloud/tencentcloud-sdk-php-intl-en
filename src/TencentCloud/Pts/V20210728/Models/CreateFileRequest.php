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
 * CreateFile request structure.
 *
 * @method string getFileId() Obtain File ID. Its value should be the corresponding directory of the file in the COS bucket after it has been uploaded in the previous step.
 * @method void setFileId(string $FileId) Set File ID. Its value should be the corresponding directory of the file in the COS bucket after it has been uploaded in the previous step.
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method integer getKind() Obtain File type. 1 represents parameter file, 2 represents protocol file, 3 represents request file.
 * @method void setKind(integer $Kind) Set File type. 1 represents parameter file, 2 represents protocol file, 3 represents request file.
 * @method string getName() Obtain Filename.
 * @method void setName(string $Name) Set Filename.
 * @method integer getSize() Obtain File size.
 * @method void setSize(integer $Size) Set File size.
 * @method string getType() Obtain File type. The 'folder' represents a folder; if not specified, it represents a file.
 * @method void setType(string $Type) Set File type. The 'folder' represents a folder; if not specified, it represents a file.
 * @method integer getLineCount() Obtain Number of Rows.
 * @method void setLineCount(integer $LineCount) Set Number of Rows.
 * @method array getHeadLines() Obtain First few rows of file.
 * @method void setHeadLines(array $HeadLines) Set First few rows of file.
 * @method array getTailLines() Obtain Last few rows of file.
 * @method void setTailLines(array $TailLines) Set Last few rows of file.
 * @method boolean getHeaderInFile() Obtain Whether the header is in the file.
 * @method void setHeaderInFile(boolean $HeaderInFile) Set Whether the header is in the file.
 * @method array getHeaderColumns() Obtain Header.
 * @method void setHeaderColumns(array $HeaderColumns) Set Header.
 * @method array getFileInfos() Obtain Files in the folder.
 * @method void setFileInfos(array $FileInfos) Set Files in the folder.
 */
class CreateFileRequest extends AbstractModel
{
    /**
     * @var string File ID. Its value should be the corresponding directory of the file in the COS bucket after it has been uploaded in the previous step.
     */
    public $FileId;

    /**
     * @var string Project ID.
     */
    public $ProjectId;

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
     * @var string File type. The 'folder' represents a folder; if not specified, it represents a file.
     */
    public $Type;

    /**
     * @var integer Number of Rows.
     */
    public $LineCount;

    /**
     * @var array First few rows of file.
     */
    public $HeadLines;

    /**
     * @var array Last few rows of file.
     */
    public $TailLines;

    /**
     * @var boolean Whether the header is in the file.
     */
    public $HeaderInFile;

    /**
     * @var array Header.
     */
    public $HeaderColumns;

    /**
     * @var array Files in the folder.
     */
    public $FileInfos;

    /**
     * @param string $FileId File ID. Its value should be the corresponding directory of the file in the COS bucket after it has been uploaded in the previous step.
     * @param string $ProjectId Project ID.
     * @param integer $Kind File type. 1 represents parameter file, 2 represents protocol file, 3 represents request file.
     * @param string $Name Filename.
     * @param integer $Size File size.
     * @param string $Type File type. The 'folder' represents a folder; if not specified, it represents a file.
     * @param integer $LineCount Number of Rows.
     * @param array $HeadLines First few rows of file.
     * @param array $TailLines Last few rows of file.
     * @param boolean $HeaderInFile Whether the header is in the file.
     * @param array $HeaderColumns Header.
     * @param array $FileInfos Files in the folder.
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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
    }
}
