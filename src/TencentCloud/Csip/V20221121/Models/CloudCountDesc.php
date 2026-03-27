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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Multi-cloud account statistics
 *
 * @method integer getCloudType() Obtain 0 represents Tencent Cloud
1 represents AWS
 * @method void setCloudType(integer $CloudType) Set 0 represents Tencent Cloud
1 represents AWS
 * @method integer getCloudCount() Obtain Account quantity
 * @method void setCloudCount(integer $CloudCount) Set Account quantity
 * @method string getCloudDesc() Obtain The cloud account type description
 * @method void setCloudDesc(string $CloudDesc) Set The cloud account type description
 */
class CloudCountDesc extends AbstractModel
{
    /**
     * @var integer 0 represents Tencent Cloud
1 represents AWS
     */
    public $CloudType;

    /**
     * @var integer Account quantity
     */
    public $CloudCount;

    /**
     * @var string The cloud account type description
     */
    public $CloudDesc;

    /**
     * @param integer $CloudType 0 represents Tencent Cloud
1 represents AWS
     * @param integer $CloudCount Account quantity
     * @param string $CloudDesc The cloud account type description
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
        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("CloudCount",$param) and $param["CloudCount"] !== null) {
            $this->CloudCount = $param["CloudCount"];
        }

        if (array_key_exists("CloudDesc",$param) and $param["CloudDesc"] !== null) {
            $this->CloudDesc = $param["CloudDesc"];
        }
    }
}
