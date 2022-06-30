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
 * Information of the Anti-DDoS instance using layer-4/7 forwarding rules
 *
 * @method array getEipList() Obtain Instance IP
 * @method void setEipList(array $EipList) Set Instance IP
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getCname() Obtain Instance CNAME
 * @method void setCname(string $Cname) Set Instance CNAME
 */
class RuleInstanceRelation extends AbstractModel
{
    /**
     * @var array Instance IP
     */
    public $EipList;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance CNAME
     */
    public $Cname;

    /**
     * @param array $EipList Instance IP
     * @param string $InstanceId Instance ID
     * @param string $Cname Instance CNAME
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
        if (array_key_exists("EipList",$param) and $param["EipList"] !== null) {
            $this->EipList = $param["EipList"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }
    }
}
