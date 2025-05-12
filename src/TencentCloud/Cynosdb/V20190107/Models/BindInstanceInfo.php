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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the instance bound to the resource pack
 *
 * @method string getInstanceId() Obtain ID of the bound cluster.
 * @method void setInstanceId(string $InstanceId) Set ID of the bound cluster.
 * @method string getInstanceRegion() Obtain The region where the bound instance is located.
 * @method void setInstanceRegion(string $InstanceRegion) Set The region where the bound instance is located.
 * @method string getInstanceType() Obtain Type of the bound instance.
 * @method void setInstanceType(string $InstanceType) Set Type of the bound instance.
 * @method array getExtendIds() Obtain The instance ID under the bound cluster.
 * @method void setExtendIds(array $ExtendIds) Set The instance ID under the bound cluster.
 */
class BindInstanceInfo extends AbstractModel
{
    /**
     * @var string ID of the bound cluster.
     */
    public $InstanceId;

    /**
     * @var string The region where the bound instance is located.
     */
    public $InstanceRegion;

    /**
     * @var string Type of the bound instance.
     */
    public $InstanceType;

    /**
     * @var array The instance ID under the bound cluster.
     */
    public $ExtendIds;

    /**
     * @param string $InstanceId ID of the bound cluster.
     * @param string $InstanceRegion The region where the bound instance is located.
     * @param string $InstanceType Type of the bound instance.
     * @param array $ExtendIds The instance ID under the bound cluster.
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
