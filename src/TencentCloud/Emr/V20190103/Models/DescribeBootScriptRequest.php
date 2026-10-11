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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBootScript request structure.
 *
 * @method string getInstanceId() Obtain EMR instance SN.
 * @method void setInstanceId(string $InstanceId) Set EMR instance SN.
 * @method string getBootType() Obtain Bootstrap script type. Valid values: resourceAfter, clusterAfter, and clusterBefore. If this field is left empty, all timings are included.
 * @method void setBootType(string $BootType) Set Bootstrap script type. Valid values: resourceAfter, clusterAfter, and clusterBefore. If this field is left empty, all timings are included.
 */
class DescribeBootScriptRequest extends AbstractModel
{
    /**
     * @var string EMR instance SN.
     */
    public $InstanceId;

    /**
     * @var string Bootstrap script type. Valid values: resourceAfter, clusterAfter, and clusterBefore. If this field is left empty, all timings are included.
     */
    public $BootType;

    /**
     * @param string $InstanceId EMR instance SN.
     * @param string $BootType Bootstrap script type. Valid values: resourceAfter, clusterAfter, and clusterBefore. If this field is left empty, all timings are included.
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

        if (array_key_exists("BootType",$param) and $param["BootType"] !== null) {
            $this->BootType = $param["BootType"];
        }
    }
}
