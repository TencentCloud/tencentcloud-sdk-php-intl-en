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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRecordBatch request structure.
 *
 * @method array getRecordIdList() Obtain Array of record IDs. You can view all DNS records and their IDs via the `DescribeRecordList` API.
 * @method void setRecordIdList(array $RecordIdList) Set Array of record IDs. You can view all DNS records and their IDs via the `DescribeRecordList` API.
 * @method string getChange() Obtain The field to be modified. Valid values: `sub_domain`, `record_type`, `area`, `value`, `mx`, `ttl`, `status`.
 * @method void setChange(string $Change) Set The field to be modified. Valid values: `sub_domain`, `record_type`, `area`, `value`, `mx`, `ttl`, `status`.
 * @method string getChangeTo() Obtain The value to be changed to, which is required and subject to the `change` field.
 * @method void setChangeTo(string $ChangeTo) Set The value to be changed to, which is required and subject to the `change` field.
 * @method string getValue() Obtain The record value to be changed to, which is required only if the `change` field is `record_type`.
 * @method void setValue(string $Value) Set The record value to be changed to, which is required only if the `change` field is `record_type`.
 * @method string getMX() Obtain MX record priority, which is required only if the `Change` field is `mx`.
 * @method void setMX(string $MX) Set MX record priority, which is required only if the `Change` field is `mx`.
 */
class ModifyRecordBatchRequest extends AbstractModel
{
    /**
     * @var array Array of record IDs. You can view all DNS records and their IDs via the `DescribeRecordList` API.
     */
    public $RecordIdList;

    /**
     * @var string The field to be modified. Valid values: `sub_domain`, `record_type`, `area`, `value`, `mx`, `ttl`, `status`.
     */
    public $Change;

    /**
     * @var string The value to be changed to, which is required and subject to the `change` field.
     */
    public $ChangeTo;

    /**
     * @var string The record value to be changed to, which is required only if the `change` field is `record_type`.
     */
    public $Value;

    /**
     * @var string MX record priority, which is required only if the `Change` field is `mx`.
     */
    public $MX;

    /**
     * @param array $RecordIdList Array of record IDs. You can view all DNS records and their IDs via the `DescribeRecordList` API.
     * @param string $Change The field to be modified. Valid values: `sub_domain`, `record_type`, `area`, `value`, `mx`, `ttl`, `status`.
     * @param string $ChangeTo The value to be changed to, which is required and subject to the `change` field.
     * @param string $Value The record value to be changed to, which is required only if the `change` field is `record_type`.
     * @param string $MX MX record priority, which is required only if the `Change` field is `mx`.
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
        if (array_key_exists("RecordIdList",$param) and $param["RecordIdList"] !== null) {
            $this->RecordIdList = $param["RecordIdList"];
        }

        if (array_key_exists("Change",$param) and $param["Change"] !== null) {
            $this->Change = $param["Change"];
        }

        if (array_key_exists("ChangeTo",$param) and $param["ChangeTo"] !== null) {
            $this->ChangeTo = $param["ChangeTo"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("MX",$param) and $param["MX"] !== null) {
            $this->MX = $param["MX"];
        }
    }
}
