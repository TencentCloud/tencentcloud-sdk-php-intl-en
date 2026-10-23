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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the instance bound to the resource package
 *
 * @method string getInstanceId() Obtain Bound cluster ID.
 * @method void setInstanceId(string $InstanceId) Set Bound cluster ID.
 * @method string getInstanceRegion() Obtain Region of the bound instance
 * @method void setInstanceRegion(string $InstanceRegion) Set Region of the bound instance
 * @method string getInstanceType() Obtain Bound instance type
 * @method void setInstanceType(string $InstanceType) Set Bound instance type
 * @method array getExtendIds() Obtain Instance ID under the bound cluster
 * @method void setExtendIds(array $ExtendIds) Set Instance ID under the bound cluster
 */
class BindInstanceInfo extends AbstractModel
{
    /**
     * @var string Bound cluster ID.
     */
    public $InstanceId;

    /**
     * @var string Region of the bound instance
     */
    public $InstanceRegion;

    /**
     * @var string Bound instance type
     */
    public $InstanceType;

    /**
     * @var array Instance ID under the bound cluster
     */
    public $ExtendIds;

    /**
     * @param string $InstanceId Bound cluster ID.
     * @param string $InstanceRegion Region of the bound instance
     * @param string $InstanceType Bound instance type
     * @param array $ExtendIds Instance ID under the bound cluster
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

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ExtendIds",$param) and $param["ExtendIds"] !== null) {
            $this->ExtendIds = $param["ExtendIds"];
        }
    }
}
