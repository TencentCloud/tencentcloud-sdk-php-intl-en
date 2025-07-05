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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Retention policy of local binlog
 *
 * @method integer getSaveHours() Obtain Retention period of local binlog. Value range: [72,168].
 * @method void setSaveHours(integer $SaveHours) Set Retention period of local binlog. Value range: [72,168].
 * @method integer getMaxUsage() Obtain Space utilization of local binlog. Value range: [30,50].
 * @method void setMaxUsage(integer $MaxUsage) Set Space utilization of local binlog. Value range: [30,50].
 */
class LocalBinlogConfig extends AbstractModel
{
    /**
     * @var integer Retention period of local binlog. Value range: [72,168].
     */
    public $SaveHours;

    /**
     * @var integer Space utilization of local binlog. Value range: [30,50].
     */
    public $MaxUsage;

    /**
     * @param integer $SaveHours Retention period of local binlog. Value range: [72,168].
     * @param integer $MaxUsage Space utilization of local binlog. Value range: [30,50].
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
        if (array_key_exists("SaveHours",$param) and $param["SaveHours"] !== null) {
            $this->SaveHours = $param["SaveHours"];
        }

        if (array_key_exists("MaxUsage",$param) and $param["MaxUsage"] !== null) {
            $this->MaxUsage = $param["MaxUsage"];
        }
    }
}
