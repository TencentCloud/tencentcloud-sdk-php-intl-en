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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeletePrivateZoneRecord request structure.
 *
 * @method string getZoneId() Obtain Private domain ID
 * @method void setZoneId(string $ZoneId) Set Private domain ID
 * @method string getRecordId() Obtain Record ID
 * @method void setRecordId(string $RecordId) Set Record ID
 * @method array getRecordIdSet() Obtain Array of record IDs. `RecordId` takes precedence.
 * @method void setRecordIdSet(array $RecordIdSet) Set Array of record IDs. `RecordId` takes precedence.
 */
class DeletePrivateZoneRecordRequest extends AbstractModel
{
    /**
     * @var string Private domain ID
     */
    public $ZoneId;

    /**
     * @var string Record ID
     */
    public $RecordId;

    /**
     * @var array Array of record IDs. `RecordId` takes precedence.
     */
    public $RecordIdSet;

    /**
     * @param string $ZoneId Private domain ID
     * @param string $RecordId Record ID
     * @param array $RecordIdSet Array of record IDs. `RecordId` takes precedence.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("RecordIdSet",$param) and $param["RecordIdSet"] !== null) {
            $this->RecordIdSet = $param["RecordIdSet"];
        }
    }
}
