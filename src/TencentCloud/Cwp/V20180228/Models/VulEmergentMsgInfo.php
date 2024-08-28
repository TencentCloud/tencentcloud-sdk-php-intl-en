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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Emergency notification entity
 *
 * @method integer getVulId() Obtain Vulnerability ID
 * @method void setVulId(integer $VulId) Set Vulnerability ID
 * @method string getPublishTime() Obtain Vulnerability publish time
 * @method void setPublishTime(string $PublishTime) Set Vulnerability publish time
 * @method string getName() Obtain Vulnerability name
 * @method void setName(string $Name) Set Vulnerability name
 */
class VulEmergentMsgInfo extends AbstractModel
{
    /**
     * @var integer Vulnerability ID
     */
    public $VulId;

    /**
     * @var string Vulnerability publish time
     */
    public $PublishTime;

    /**
     * @var string Vulnerability name
     */
    public $Name;

    /**
     * @param integer $VulId Vulnerability ID
     * @param string $PublishTime Vulnerability publish time
     * @param string $Name Vulnerability name
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
