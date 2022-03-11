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
 * The information of a set of correlated packing quotas
 *
 * @method string getInstanceType() Obtain Instance type
 * @method void setInstanceType(string $InstanceType) Set Instance type
 * @method integer getPackingQuota() Obtain Packing quota
 * @method void setPackingQuota(integer $PackingQuota) Set Packing quota
 */
class PackingQuotaInfo extends AbstractModel
{
    /**
     * @var string Instance type
     */
    public $InstanceType;

    /**
     * @var integer Packing quota
     */
    public $PackingQuota;

    /**
     * @param string $InstanceType Instance type
     * @param integer $PackingQuota Packing quota
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("PackingQuota",$param) and $param["PackingQuota"] !== null) {
            $this->PackingQuota = $param["PackingQuota"];
        }
    }
}
