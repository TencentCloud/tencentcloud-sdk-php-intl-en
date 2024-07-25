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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportTableFile request structure.
 *
 * @method string getProjectId() Obtain Project ID associated with the table
 * @method void setProjectId(string $ProjectId) Set Project ID associated with the table
 * @method string getName() Obtain Table name: Up to 200 characters in length is supported.
 * @method void setName(string $Name) Set Table name: Up to 200 characters in length is supported.
 * @method string getCosUri() Obtain Table file COS object path
 * @method void setCosUri(string $CosUri) Set Table file COS object path
 * @method array getDataType() Obtain Data type of each column in the table file. Supported types include Int, Float, String, File, Boolean, Array[Int], Array[Float], Array[String], Array[File], and Array[Boolean].
 * @method void setDataType(array $DataType) Set Data type of each column in the table file. Supported types include Int, Float, String, File, Boolean, Array[Int], Array[Float], Array[String], Array[File], and Array[Boolean].
 * @method string getDescription() Obtain Table description: Up to 500 characters in length is supported.
 * @method void setDescription(string $Description) Set Table description: Up to 500 characters in length is supported.
 */
class ImportTableFileRequest extends AbstractModel
{
    /**
     * @var string Project ID associated with the table
     */
    public $ProjectId;

    /**
     * @var string Table name: Up to 200 characters in length is supported.
     */
    public $Name;

    /**
     * @var string Table file COS object path
     */
    public $CosUri;

    /**
     * @var array Data type of each column in the table file. Supported types include Int, Float, String, File, Boolean, Array[Int], Array[Float], Array[String], Array[File], and Array[Boolean].
     */
    public $DataType;

    /**
     * @var string Table description: Up to 500 characters in length is supported.
     */
    public $Description;

    /**
     * @param string $ProjectId Project ID associated with the table
     * @param string $Name Table name: Up to 200 characters in length is supported.
     * @param string $CosUri Table file COS object path
     * @param array $DataType Data type of each column in the table file. Supported types include Int, Float, String, File, Boolean, Array[Int], Array[Float], Array[String], Array[File], and Array[Boolean].
     * @param string $Description Table description: Up to 500 characters in length is supported.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CosUri",$param) and $param["CosUri"] !== null) {
            $this->CosUri = $param["CosUri"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
