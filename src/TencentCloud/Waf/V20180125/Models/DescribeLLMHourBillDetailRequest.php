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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLLMHourBillDetail request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
Parameter format: waf_xxxxxxxx
 * @method void setInstanceId(string $InstanceId) Set Instance ID
Parameter format: waf_xxxxxxxx
 * @method string getDate() Obtain Query date. Only a single day is supported.
Parameter format: YYYY-MM-DD or YYYYMMDD
 * @method void setDate(string $Date) Set Query date. Only a single day is supported.
Parameter format: YYYY-MM-DD or YYYYMMDD
 */
class DescribeLLMHourBillDetailRequest extends AbstractModel
{
    /**
     * @var string Instance ID
Parameter format: waf_xxxxxxxx
     */
    public $InstanceId;

    /**
     * @var string Query date. Only a single day is supported.
Parameter format: YYYY-MM-DD or YYYYMMDD
     */
    public $Date;

    /**
     * @param string $InstanceId Instance ID
Parameter format: waf_xxxxxxxx
     * @param string $Date Query date. Only a single day is supported.
Parameter format: YYYY-MM-DD or YYYYMMDD
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
