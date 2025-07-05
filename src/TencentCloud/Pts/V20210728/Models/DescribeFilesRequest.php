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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFiles request structure.
 *
 * @method array getProjectIds() Obtain Array of Project ID.
 * @method void setProjectIds(array $ProjectIds) Set Array of Project ID.
 * @method array getFileIds() Obtain Array of File ID.
 * @method void setFileIds(array $FileIds) Set Array of File ID.
 * @method string getFileName() Obtain Filename
 * @method void setFileName(string $FileName) Set Filename
 * @method integer getOffset() Obtain Offset. Default value is 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value is 0.
 * @method integer getLimit() Obtain Number of returns. Default value is 20, maximum is 100
 * @method void setLimit(integer $Limit) Set Number of returns. Default value is 20, maximum is 100
 * @method integer getKind() Obtain File type. 1 represents parameter file, 2 represents protocol file, 3 represents request file.
 * @method void setKind(integer $Kind) Set File type. 1 represents parameter file, 2 represents protocol file, 3 represents request file.
 */
class DescribeFilesRequest extends AbstractModel
{
    /**
     * @var array Array of Project ID.
     */
    public $ProjectIds;

    /**
     * @var array Array of File ID.
     */
    public $FileIds;

    /**
     * @var string Filename
     */
    public $FileName;

    /**
     * @var integer Offset. Default value is 0.
     */
    public $Offset;

    /**
     * @var integer Number of returns. Default value is 20, maximum is 100
     */
    public $Limit;

    /**
     * @var integer File type. 1 represents parameter file, 2 represents protocol file, 3 represents request file.
     */
    public $Kind;

    /**
     * @param array $ProjectIds Array of Project ID.
     * @param array $FileIds Array of File ID.
     * @param string $FileName Filename
     * @param integer $Offset Offset. Default value is 0.
     * @param integer $Limit Number of returns. Default value is 20, maximum is 100
     * @param integer $Kind File type. 1 represents parameter file, 2 represents protocol file, 3 represents request file.
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
        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }
    }
}
