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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Return of HBase TableMetric overview
 *
 * @method string getTable() Obtain Table name
 * @method void setTable(string $Table) Set Table name
 * @method float getReadRequestCount() Obtain Number of read requests
 * @method void setReadRequestCount(float $ReadRequestCount) Set Number of read requests
 * @method float getWriteRequestCount() Obtain Number of write requests
 * @method void setWriteRequestCount(float $WriteRequestCount) Set Number of write requests
 * @method float getMemstoreSize() Obtain Current memstore size
 * @method void setMemstoreSize(float $MemstoreSize) Set Current memstore size
 * @method float getStoreFileSize() Obtain Size of StoreFile in the current region
 * @method void setStoreFileSize(float $StoreFileSize) Set Size of StoreFile in the current region
 * @method string getOperation() Obtain Regions. Click to jump.
 * @method void setOperation(string $Operation) Set Regions. Click to jump.
 * @method float getStoreFileNum() Obtain StoreFile quantity. 
 * @method void setStoreFileNum(float $StoreFileNum) Set StoreFile quantity. 
 */
class OverviewRow extends AbstractModel
{
    /**
     * @var string Table name
     */
    public $Table;

    /**
     * @var float Number of read requests
     */
    public $ReadRequestCount;

    /**
     * @var float Number of write requests
     */
    public $WriteRequestCount;

    /**
     * @var float Current memstore size
     */
    public $MemstoreSize;

    /**
     * @var float Size of StoreFile in the current region
     */
    public $StoreFileSize;

    /**
     * @var string Regions. Click to jump.
     */
    public $Operation;

    /**
     * @var float StoreFile quantity. 
     */
    public $StoreFileNum;

    /**
     * @param string $Table Table name
     * @param float $ReadRequestCount Number of read requests
     * @param float $WriteRequestCount Number of write requests
     * @param float $MemstoreSize Current memstore size
     * @param float $StoreFileSize Size of StoreFile in the current region
     * @param string $Operation Regions. Click to jump.
     * @param float $StoreFileNum StoreFile quantity. 
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
        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("ReadRequestCount",$param) and $param["ReadRequestCount"] !== null) {
            $this->ReadRequestCount = $param["ReadRequestCount"];
        }

        if (array_key_exists("WriteRequestCount",$param) and $param["WriteRequestCount"] !== null) {
            $this->WriteRequestCount = $param["WriteRequestCount"];
        }

        if (array_key_exists("MemstoreSize",$param) and $param["MemstoreSize"] !== null) {
            $this->MemstoreSize = $param["MemstoreSize"];
        }

        if (array_key_exists("StoreFileSize",$param) and $param["StoreFileSize"] !== null) {
            $this->StoreFileSize = $param["StoreFileSize"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("StoreFileNum",$param) and $param["StoreFileNum"] !== null) {
            $this->StoreFileNum = $param["StoreFileNum"];
        }
    }
}
