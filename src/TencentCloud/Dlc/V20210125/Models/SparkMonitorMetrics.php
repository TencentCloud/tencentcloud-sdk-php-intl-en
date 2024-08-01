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
 * Spark monitoring metrics
 *
 * @method integer getShuffleWriteBytesCos() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShuffleWriteBytesCos(integer $ShuffleWriteBytesCos) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getShuffleWriteBytesTotal() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShuffleWriteBytesTotal(integer $ShuffleWriteBytesTotal) Set Note: This field may return null, indicating that no valid values can be obtained.
 */
class SparkMonitorMetrics extends AbstractModel
{
    /**
     * @var integer Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShuffleWriteBytesCos;

    /**
     * @var integer Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShuffleWriteBytesTotal;

    /**
     * @param integer $ShuffleWriteBytesCos Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ShuffleWriteBytesTotal Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ShuffleWriteBytesCos",$param) and $param["ShuffleWriteBytesCos"] !== null) {
            $this->ShuffleWriteBytesCos = $param["ShuffleWriteBytesCos"];
        }

        if (array_key_exists("ShuffleWriteBytesTotal",$param) and $param["ShuffleWriteBytesTotal"] !== null) {
            $this->ShuffleWriteBytesTotal = $param["ShuffleWriteBytesTotal"];
        }
    }
}
