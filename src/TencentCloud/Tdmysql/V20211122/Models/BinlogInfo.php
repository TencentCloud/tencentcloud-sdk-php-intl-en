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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Show the Binlog information of the node.
 *
 * @method string getSid() Obtain Unique ID of the log service
 * @method void setSid(string $Sid) Set Unique ID of the log service
 * @method string getType() Obtain Log service type
 * @method void setType(string $Type) Set Log service type
 * @method string getInstanceId() Obtain Unique ID of the instance
 * @method void setInstanceId(string $InstanceId) Set Unique ID of the instance
 */
class BinlogInfo extends AbstractModel
{
    /**
     * @var string Unique ID of the log service
     */
    public $Sid;

    /**
     * @var string Log service type
     */
    public $Type;

    /**
     * @var string Unique ID of the instance
     */
    public $InstanceId;

    /**
     * @param string $Sid Unique ID of the log service
     * @param string $Type Log service type
     * @param string $InstanceId Unique ID of the instance
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
        if (array_key_exists("Sid",$param) and $param["Sid"] !== null) {
            $this->Sid = $param["Sid"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
