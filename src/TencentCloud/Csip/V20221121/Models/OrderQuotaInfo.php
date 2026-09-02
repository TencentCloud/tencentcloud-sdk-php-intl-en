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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Order Quota Information
 *
 * @method string getQuotaKey() Obtain Quota Key
 * @method void setQuotaKey(string $QuotaKey) Set Quota Key
 * @method integer getQuotaNum() Obtain Total Quota
 * @method void setQuotaNum(integer $QuotaNum) Set Total Quota
 * @method integer getQuotaUsed() Obtain Quota Usage
 * @method void setQuotaUsed(integer $QuotaUsed) Set Quota Usage
 */
class OrderQuotaInfo extends AbstractModel
{
    /**
     * @var string Quota Key
     */
    public $QuotaKey;

    /**
     * @var integer Total Quota
     */
    public $QuotaNum;

    /**
     * @var integer Quota Usage
     */
    public $QuotaUsed;

    /**
     * @param string $QuotaKey Quota Key
     * @param integer $QuotaNum Total Quota
     * @param integer $QuotaUsed Quota Usage
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
        if (array_key_exists("QuotaKey",$param) and $param["QuotaKey"] !== null) {
            $this->QuotaKey = $param["QuotaKey"];
        }

        if (array_key_exists("QuotaNum",$param) and $param["QuotaNum"] !== null) {
            $this->QuotaNum = $param["QuotaNum"];
        }

        if (array_key_exists("QuotaUsed",$param) and $param["QuotaUsed"] !== null) {
            $this->QuotaUsed = $param["QuotaUsed"];
        }
    }
}
