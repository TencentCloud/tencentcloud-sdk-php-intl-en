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
 * Table
 *
 * @method string getTableId() Obtain Table ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableId(string $TableId) Set Table ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectId() Obtain Associated project ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Associated project ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Table description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Table description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getColumns() Obtain Table column
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColumns(array $Columns) Set Table column
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreator() Obtain Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreator(string $Creator) Set Creator
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Table extends AbstractModel
{
    /**
     * @var string Table ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableId;

    /**
     * @var string Associated project ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Table name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Table description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var array Table column
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Columns;

    /**
     * @var string Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Creator
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Creator;

    /**
     * @param string $TableId Table ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectId Associated project ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Table name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Table description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Columns Table column
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Creator Creator
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new TableColumn();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }
    }
}
