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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInternalTable request structure.
 *
 * @method TableBaseInfo getTableBaseInfo() Obtain The basic table information.
 * @method void setTableBaseInfo(TableBaseInfo $TableBaseInfo) Set The basic table information.
 * @method array getColumns() Obtain The table fields.
 * @method void setColumns(array $Columns) Set The table fields.
 * @method array getPartitions() Obtain The table partitions.
 * @method void setPartitions(array $Partitions) Set The table partitions.
 * @method array getProperties() Obtain The table properties.
 * @method void setProperties(array $Properties) Set The table properties.
 */
class CreateInternalTableRequest extends AbstractModel
{
    /**
     * @var TableBaseInfo The basic table information.
     */
    public $TableBaseInfo;

    /**
     * @var array The table fields.
     */
    public $Columns;

    /**
     * @var array The table partitions.
     */
    public $Partitions;

    /**
     * @var array The table properties.
     */
    public $Properties;

    /**
     * @param TableBaseInfo $TableBaseInfo The basic table information.
     * @param array $Columns The table fields.
     * @param array $Partitions The table partitions.
     * @param array $Properties The table properties.
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
        if (array_key_exists("TableBaseInfo",$param) and $param["TableBaseInfo"] !== null) {
            $this->TableBaseInfo = new TableBaseInfo();
            $this->TableBaseInfo->deserialize($param["TableBaseInfo"]);
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new TColumn();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = [];
            foreach ($param["Partitions"] as $key => $value){
                $obj = new TPartition();
                $obj->deserialize($value);
                array_push($this->Partitions, $obj);
            }
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }
    }
}
