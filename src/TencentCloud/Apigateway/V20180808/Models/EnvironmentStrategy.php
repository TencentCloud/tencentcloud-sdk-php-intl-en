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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Environment throttling
 *
 * @method string getEnvironmentName() Obtain Environment name
 * @method void setEnvironmentName(string $EnvironmentName) Set Environment name
 * @method integer getQuota() Obtain Throttling value
 * @method void setQuota(integer $Quota) Set Throttling value
 * @method integer getMaxQuota() Obtain Maximum quota value
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxQuota(integer $MaxQuota) Set Maximum quota value
Note: this field may return null, indicating that no valid values can be obtained.
 */
class EnvironmentStrategy extends AbstractModel
{
    /**
     * @var string Environment name
     */
    public $EnvironmentName;

    /**
     * @var integer Throttling value
     */
    public $Quota;

    /**
     * @var integer Maximum quota value
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxQuota;

    /**
     * @param string $EnvironmentName Environment name
     * @param integer $Quota Throttling value
     * @param integer $MaxQuota Maximum quota value
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("Quota",$param) and $param["Quota"] !== null) {
            $this->Quota = $param["Quota"];
        }

        if (array_key_exists("MaxQuota",$param) and $param["MaxQuota"] !== null) {
            $this->MaxQuota = $param["MaxQuota"];
        }
    }
}
