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
 * DescribeSlaveZones request structure.
 *
 * @method string getZone() Obtain Availability zone
 * @method void setZone(string $Zone) Set Availability zone
 * @method integer getOssClusterId() Obtain Cloud frame cluster ID.
 * @method void setOssClusterId(integer $OssClusterId) Set Cloud frame cluster ID.
 */
class DescribeSlaveZonesRequest extends AbstractModel
{
    /**
     * @var string Availability zone
     */
    public $Zone;

    /**
     * @var integer Cloud frame cluster ID.
     */
    public $OssClusterId;

    /**
     * @param string $Zone Availability zone
     * @param integer $OssClusterId Cloud frame cluster ID.
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("OssClusterId",$param) and $param["OssClusterId"] !== null) {
            $this->OssClusterId = $param["OssClusterId"];
        }
    }
}
