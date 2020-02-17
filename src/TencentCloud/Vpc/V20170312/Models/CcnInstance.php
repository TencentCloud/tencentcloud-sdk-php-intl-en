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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() Obtain The ID of the associated instance.
 * @method void setInstanceId(string $InstanceId) Set The ID of the associated instance.
 * @method string getInstanceRegion() Obtain The region to which the associated instance ID belongs, such as `ap-guangzhou`.
 * @method void setInstanceRegion(string $InstanceRegion) Set The region to which the associated instance ID belongs, such as `ap-guangzhou`.
 * @method string getInstanceType() Obtain The type of the associated instance. Available values are:
<li>`VPC`: VPC</li>
<li>`DIRECTCONNECT`: Direct Connect</li>
<li>`BMVPC`: BM VPC</li>
 * @method void setInstanceType(string $InstanceType) Set The type of the associated instance. Available values are:
<li>`VPC`: VPC</li>
<li>`DIRECTCONNECT`: Direct Connect</li>
<li>`BMVPC`: BM VPC</li>
 */

/**
 *The instance object associated with a CCN.
 */
class CcnInstance extends AbstractModel
{
    /**
     * @var string The ID of the associated instance.
     */
    public $InstanceId;

    /**
     * @var string The region to which the associated instance ID belongs, such as `ap-guangzhou`.
     */
    public $InstanceRegion;

    /**
     * @var string The type of the associated instance. Available values are:
<li>`VPC`: VPC</li>
<li>`DIRECTCONNECT`: Direct Connect</li>
<li>`BMVPC`: BM VPC</li>
     */
    public $InstanceType;
    /**
     * @param string $InstanceId The ID of the associated instance.
     * @param string $InstanceRegion The region to which the associated instance ID belongs, such as `ap-guangzhou`.
     * @param string $InstanceType The type of the associated instance. Available values are:
<li>`VPC`: VPC</li>
<li>`DIRECTCONNECT`: Direct Connect</li>
<li>`BMVPC`: BM VPC</li>
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
    }
}
