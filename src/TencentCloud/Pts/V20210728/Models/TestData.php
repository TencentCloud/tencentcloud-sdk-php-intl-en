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
 * Test dataset.
 *
 * @method string getName() Obtain File name of the test dataset.

Note: This field may return null, indicating that no valid value is found.
 * @method void setName(string $Name) Set File name of the test dataset.

Note: This field may return null, indicating that no valid value is found.
 * @method boolean getSplit() Obtain Whether the dataset is sharded.

Note: This field may return null, indicating that no valid value is found.
 * @method void setSplit(boolean $Split) Set Whether the dataset is sharded.

Note: This field may return null, indicating that no valid value is found.
 * @method boolean getHeaderInFile() Obtain Whether the first row is parameter name.

Note: This field may return null, indicating that no valid value is found.
 * @method void setHeaderInFile(boolean $HeaderInFile) Set Whether the first row is parameter name.

Note: This field may return null, indicating that no valid value is found.
 * @method array getHeaderColumns() Obtain Array of parameter name.

Note: This field may return null, indicating that no valid value is found.
 * @method void setHeaderColumns(array $HeaderColumns) Set Array of parameter name.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getLineCount() Obtain Number of file lines.

Note: This field may return null, indicating that no valid value is found.
 * @method void setLineCount(integer $LineCount) Set Number of file lines.

Note: This field may return null, indicating that no valid value is found.
 * @method string getUpdatedAt() Obtain Update time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setUpdatedAt(string $UpdatedAt) Set Update time.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getSize() Obtain File size.

Note: This field may return null, indicating that no valid value is found.
 * @method void setSize(integer $Size) Set File size.

Note: This field may return null, indicating that no valid value is found.
 * @method array getHeadLines() Obtain First few rows of dataset.

Note: This field may return null, indicating that no valid value is found.
 * @method void setHeadLines(array $HeadLines) Set First few rows of dataset.

Note: This field may return null, indicating that no valid value is found.
 * @method array getTailLines() Obtain Last few rows of dataset.

Note: This field may return null, indicating that no valid value is found.
 * @method void setTailLines(array $TailLines) Set Last few rows of dataset.

Note: This field may return null, indicating that no valid value is found.
 * @method string getType() Obtain File type.

Note: This field may return null, indicating that no valid value is found.
 * @method void setType(string $Type) Set File type.

Note: This field may return null, indicating that no valid value is found.
 * @method string getFileId() Obtain File ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setFileId(string $FileId) Set File ID.

Note: This field may return null, indicating that no valid value is found.
 */
class TestData extends AbstractModel
{
    /**
     * @var string File name of the test dataset.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Name;

    /**
     * @var boolean Whether the dataset is sharded.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Split;

    /**
     * @var boolean Whether the first row is parameter name.

Note: This field may return null, indicating that no valid value is found.
     */
    public $HeaderInFile;

    /**
     * @var array Array of parameter name.

Note: This field may return null, indicating that no valid value is found.
     */
    public $HeaderColumns;

    /**
     * @var integer Number of file lines.

Note: This field may return null, indicating that no valid value is found.
     */
    public $LineCount;

    /**
     * @var string Update time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $UpdatedAt;

    /**
     * @var integer File size.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Size;

    /**
     * @var array First few rows of dataset.

Note: This field may return null, indicating that no valid value is found.
     */
    public $HeadLines;

    /**
     * @var array Last few rows of dataset.

Note: This field may return null, indicating that no valid value is found.
     */
    public $TailLines;

    /**
     * @var string File type.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Type;

    /**
     * @var string File ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $FileId;

    /**
     * @param string $Name File name of the test dataset.

Note: This field may return null, indicating that no valid value is found.
     * @param boolean $Split Whether the dataset is sharded.

Note: This field may return null, indicating that no valid value is found.
     * @param boolean $HeaderInFile Whether the first row is parameter name.

Note: This field may return null, indicating that no valid value is found.
     * @param array $HeaderColumns Array of parameter name.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $LineCount Number of file lines.

Note: This field may return null, indicating that no valid value is found.
     * @param string $UpdatedAt Update time.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $Size File size.

Note: This field may return null, indicating that no valid value is found.
     * @param array $HeadLines First few rows of dataset.

Note: This field may return null, indicating that no valid value is found.
     * @param array $TailLines Last few rows of dataset.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Type File type.

Note: This field may return null, indicating that no valid value is found.
     * @param string $FileId File ID.

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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Split",$param) and $param["Split"] !== null) {
            $this->Split = $param["Split"];
        }

        if (array_key_exists("HeaderInFile",$param) and $param["HeaderInFile"] !== null) {
            $this->HeaderInFile = $param["HeaderInFile"];
        }

        if (array_key_exists("HeaderColumns",$param) and $param["HeaderColumns"] !== null) {
            $this->HeaderColumns = $param["HeaderColumns"];
        }

        if (array_key_exists("LineCount",$param) and $param["LineCount"] !== null) {
            $this->LineCount = $param["LineCount"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("HeadLines",$param) and $param["HeadLines"] !== null) {
            $this->HeadLines = $param["HeadLines"];
        }

        if (array_key_exists("TailLines",$param) and $param["TailLines"] !== null) {
            $this->TailLines = $param["TailLines"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
