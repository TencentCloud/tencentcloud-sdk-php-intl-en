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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Binlog description
 *
 * @method string getFileName() Obtain Binlog filename
 * @method void setFileName(string $FileName) Set Binlog filename
 * @method integer getFileSize() Obtain File size in bytes
 * @method void setFileSize(integer $FileSize) Set File size in bytes
 * @method string getStartTime() Obtain Transaction start time
 * @method void setStartTime(string $StartTime) Set Transaction start time
 * @method string getFinishTime() Obtain Transaction end time
 * @method void setFinishTime(string $FinishTime) Set Transaction end time
 * @method integer getBinlogId() Obtain Binlog file ID
 * @method void setBinlogId(integer $BinlogId) Set Binlog file ID
 */
class BinlogItem extends AbstractModel
{
    /**
     * @var string Binlog filename
     */
    public $FileName;

    /**
     * @var integer File size in bytes
     */
    public $FileSize;

    /**
     * @var string Transaction start time
     */
    public $StartTime;

    /**
     * @var string Transaction end time
     */
    public $FinishTime;

    /**
     * @var integer Binlog file ID
     */
    public $BinlogId;

    /**
     * @param string $FileName Binlog filename
     * @param integer $FileSize File size in bytes
     * @param string $StartTime Transaction start time
     * @param string $FinishTime Transaction end time
     * @param integer $BinlogId Binlog file ID
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

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("BinlogId",$param) and $param["BinlogId"] !== null) {
            $this->BinlogId = $param["BinlogId"];
        }
    }
}
