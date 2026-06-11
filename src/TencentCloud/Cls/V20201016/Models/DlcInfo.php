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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data Lake Computing Service (Data Lake Compute, DLC) import configuration info
 *
 * @method DlcTableInfo getTableInfo() Obtain dlc table information
 * @method void setTableInfo(DlcTableInfo $TableInfo) Set dlc table information
 * @method array getFieldInfos() Obtain dlc data field information
 * @method void setFieldInfos(array $FieldInfos) Set dlc data field information
 * @method array getPartitionInfos() Obtain dlc partition information
 * @method void setPartitionInfos(array $PartitionInfos) Set dlc partition information
 * @method DlcPartitionExtra getPartitionExtra() Obtain dlc partition additional information
 * @method void setPartitionExtra(DlcPartitionExtra $PartitionExtra) Set dlc partition additional information
 */
class DlcInfo extends AbstractModel
{
    /**
     * @var DlcTableInfo dlc table information
     */
    public $TableInfo;

    /**
     * @var array dlc data field information
     */
    public $FieldInfos;

    /**
     * @var array dlc partition information
     */
    public $PartitionInfos;

    /**
     * @var DlcPartitionExtra dlc partition additional information
     */
    public $PartitionExtra;

    /**
     * @param DlcTableInfo $TableInfo dlc table information
     * @param array $FieldInfos dlc data field information
     * @param array $PartitionInfos dlc partition information
     * @param DlcPartitionExtra $PartitionExtra dlc partition additional information
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
        if (array_key_exists("TableInfo",$param) and $param["TableInfo"] !== null) {
            $this->TableInfo = new DlcTableInfo();
            $this->TableInfo->deserialize($param["TableInfo"]);
        }

        if (array_key_exists("FieldInfos",$param) and $param["FieldInfos"] !== null) {
            $this->FieldInfos = [];
            foreach ($param["FieldInfos"] as $key => $value){
                $obj = new DlcFiledInfo();
                $obj->deserialize($value);
                array_push($this->FieldInfos, $obj);
            }
        }

        if (array_key_exists("PartitionInfos",$param) and $param["PartitionInfos"] !== null) {
            $this->PartitionInfos = [];
            foreach ($param["PartitionInfos"] as $key => $value){
                $obj = new DlcPartitionInfo();
                $obj->deserialize($value);
                array_push($this->PartitionInfos, $obj);
            }
        }

        if (array_key_exists("PartitionExtra",$param) and $param["PartitionExtra"] !== null) {
            $this->PartitionExtra = new DlcPartitionExtra();
            $this->PartitionExtra->deserialize($param["PartitionExtra"]);
        }
    }
}
