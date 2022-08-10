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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Feature filtering information
 *
 * @method PacketFilterConfig getPacketFilterConfig() Obtain Feature filtering configuration
 * @method void setPacketFilterConfig(PacketFilterConfig $PacketFilterConfig) Set Feature filtering configuration
 * @method array getInstanceDetailList() Obtain Anti-DDoS instance configured
 * @method void setInstanceDetailList(array $InstanceDetailList) Set Anti-DDoS instance configured
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 */
class PacketFilterRelation extends AbstractModel
{
    /**
     * @var PacketFilterConfig Feature filtering configuration
     */
    public $PacketFilterConfig;

    /**
     * @var array Anti-DDoS instance configured
     */
    public $InstanceDetailList;

    /**
     * @var string Modification time
     */
    public $ModifyTime;

    /**
     * @param PacketFilterConfig $PacketFilterConfig Feature filtering configuration
     * @param array $InstanceDetailList Anti-DDoS instance configured
     * @param string $ModifyTime Modification time
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
        if (array_key_exists("PacketFilterConfig",$param) and $param["PacketFilterConfig"] !== null) {
            $this->PacketFilterConfig = new PacketFilterConfig();
            $this->PacketFilterConfig->deserialize($param["PacketFilterConfig"]);
        }

        if (array_key_exists("InstanceDetailList",$param) and $param["InstanceDetailList"] !== null) {
            $this->InstanceDetailList = [];
            foreach ($param["InstanceDetailList"] as $key => $value){
                $obj = new InstanceRelation();
                $obj->deserialize($value);
                array_push($this->InstanceDetailList, $obj);
            }
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
