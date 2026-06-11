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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Record of stored log size
 *
 * @method string getMonth() Obtain Year and month.
 * @method void setMonth(string $Month) Set Year and month.
 * @method integer getUsedSize() Obtain Storage amount, in bytes.
 * @method void setUsedSize(integer $UsedSize) Set Storage amount, in bytes.
 * @method integer getInquireSize() Obtain Total volume, in bytes.
 * @method void setInquireSize(integer $InquireSize) Set Total volume, in bytes.
 */
class LogStorageRecord extends AbstractModel
{
    /**
     * @var string Year and month.
     */
    public $Month;

    /**
     * @var integer Storage amount, in bytes.
     */
    public $UsedSize;

    /**
     * @var integer Total volume, in bytes.
     */
    public $InquireSize;

    /**
     * @param string $Month Year and month.
     * @param integer $UsedSize Storage amount, in bytes.
     * @param integer $InquireSize Total volume, in bytes.
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
        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("UsedSize",$param) and $param["UsedSize"] !== null) {
            $this->UsedSize = $param["UsedSize"];
        }

        if (array_key_exists("InquireSize",$param) and $param["InquireSize"] !== null) {
            $this->InquireSize = $param["InquireSize"];
        }
    }
}
