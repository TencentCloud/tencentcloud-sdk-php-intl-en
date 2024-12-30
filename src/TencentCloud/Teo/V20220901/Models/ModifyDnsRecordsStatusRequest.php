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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDnsRecordsStatus request structure.
 *
 * @method string getZoneId() Obtain Site ID.
 * @method void setZoneId(string $ZoneId) Set Site ID.
 * @method array getRecordsToEnable() Obtain List of DNS record IDs to be enabled, with a limit of 200. Note: The same DNS record ID cannot exist in both RecordsToEnable and RecordsToDisable.
 * @method void setRecordsToEnable(array $RecordsToEnable) Set List of DNS record IDs to be enabled, with a limit of 200. Note: The same DNS record ID cannot exist in both RecordsToEnable and RecordsToDisable.
 * @method array getRecordsToDisable() Obtain List of DNS record IDs to be disabled, with a limit of 200. Note: The same DNS record ID cannot exist in both RecordsToEnable and RecordsToDisable.
 * @method void setRecordsToDisable(array $RecordsToDisable) Set List of DNS record IDs to be disabled, with a limit of 200. Note: The same DNS record ID cannot exist in both RecordsToEnable and RecordsToDisable.
 */
class ModifyDnsRecordsStatusRequest extends AbstractModel
{
    /**
     * @var string Site ID.
     */
    public $ZoneId;

    /**
     * @var array List of DNS record IDs to be enabled, with a limit of 200. Note: The same DNS record ID cannot exist in both RecordsToEnable and RecordsToDisable.
     */
    public $RecordsToEnable;

    /**
     * @var array List of DNS record IDs to be disabled, with a limit of 200. Note: The same DNS record ID cannot exist in both RecordsToEnable and RecordsToDisable.
     */
    public $RecordsToDisable;

    /**
     * @param string $ZoneId Site ID.
     * @param array $RecordsToEnable List of DNS record IDs to be enabled, with a limit of 200. Note: The same DNS record ID cannot exist in both RecordsToEnable and RecordsToDisable.
     * @param array $RecordsToDisable List of DNS record IDs to be disabled, with a limit of 200. Note: The same DNS record ID cannot exist in both RecordsToEnable and RecordsToDisable.
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

        if (array_key_exists("RecordsToEnable",$param) and $param["RecordsToEnable"] !== null) {
            $this->RecordsToEnable = $param["RecordsToEnable"];
        }

        if (array_key_exists("RecordsToDisable",$param) and $param["RecordsToDisable"] !== null) {
            $this->RecordsToDisable = $param["RecordsToDisable"];
        }
    }
}
