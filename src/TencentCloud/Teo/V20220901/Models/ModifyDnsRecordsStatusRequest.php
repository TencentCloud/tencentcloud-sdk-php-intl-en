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
 * @method string getZoneId() Obtain Zone id.
 * @method void setZoneId(string $ZoneId) Set Zone id.
 * @method array getRecordsToEnable() Obtain List of dns record ids to be enabled, upper limit: 200. <br>note: the same dns record id cannot exist in both recordstoenable and recordstodisable.
 * @method void setRecordsToEnable(array $RecordsToEnable) Set List of dns record ids to be enabled, upper limit: 200. <br>note: the same dns record id cannot exist in both recordstoenable and recordstodisable.
 * @method array getRecordsToDisable() Obtain List of dns record ids to be disabled, upper limit: 200. <br>note: the same dns record id cannot exist in both recordstoenable and recordstodisable.
 * @method void setRecordsToDisable(array $RecordsToDisable) Set List of dns record ids to be disabled, upper limit: 200. <br>note: the same dns record id cannot exist in both recordstoenable and recordstodisable.
 */
class ModifyDnsRecordsStatusRequest extends AbstractModel
{
    /**
     * @var string Zone id.
     */
    public $ZoneId;

    /**
     * @var array List of dns record ids to be enabled, upper limit: 200. <br>note: the same dns record id cannot exist in both recordstoenable and recordstodisable.
     */
    public $RecordsToEnable;

    /**
     * @var array List of dns record ids to be disabled, upper limit: 200. <br>note: the same dns record id cannot exist in both recordstoenable and recordstodisable.
     */
    public $RecordsToDisable;

    /**
     * @param string $ZoneId Zone id.
     * @param array $RecordsToEnable List of dns record ids to be enabled, upper limit: 200. <br>note: the same dns record id cannot exist in both recordstoenable and recordstodisable.
     * @param array $RecordsToDisable List of dns record ids to be disabled, upper limit: 200. <br>note: the same dns record id cannot exist in both recordstoenable and recordstodisable.
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
