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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Peak information
 *
 * @method integer getPeakCpuNum() Obtain Peak CPU
 * @method void setPeakCpuNum(integer $PeakCpuNum) Set Peak CPU
 * @method integer getPeakMemoryNum() Obtain Peak memory
 * @method void setPeakMemoryNum(integer $PeakMemoryNum) Set Peak memory
 * @method integer getPeakStorageNum() Obtain Peak disk
 * @method void setPeakStorageNum(integer $PeakStorageNum) Set Peak disk
 * @method string getRecordTime() Obtain Recording time
 * @method void setRecordTime(string $RecordTime) Set Recording time
 */
class PeakBase extends AbstractModel
{
    /**
     * @var integer Peak CPU
     */
    public $PeakCpuNum;

    /**
     * @var integer Peak memory
     */
    public $PeakMemoryNum;

    /**
     * @var integer Peak disk
     */
    public $PeakStorageNum;

    /**
     * @var string Recording time
     */
    public $RecordTime;

    /**
     * @param integer $PeakCpuNum Peak CPU
     * @param integer $PeakMemoryNum Peak memory
     * @param integer $PeakStorageNum Peak disk
     * @param string $RecordTime Recording time
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
        if (array_key_exists("PeakCpuNum",$param) and $param["PeakCpuNum"] !== null) {
            $this->PeakCpuNum = $param["PeakCpuNum"];
        }

        if (array_key_exists("PeakMemoryNum",$param) and $param["PeakMemoryNum"] !== null) {
            $this->PeakMemoryNum = $param["PeakMemoryNum"];
        }

        if (array_key_exists("PeakStorageNum",$param) and $param["PeakStorageNum"] !== null) {
            $this->PeakStorageNum = $param["PeakStorageNum"];
        }

        if (array_key_exists("RecordTime",$param) and $param["RecordTime"] !== null) {
            $this->RecordTime = $param["RecordTime"];
        }
    }
}
