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
 * DescribeVulFixStatus request structure.
 *
 * @method integer getFixId() Obtain Task ID. This parameter can be left blank if VulId is specified.
 * @method void setFixId(integer $FixId) Set Task ID. This parameter can be left blank if VulId is specified.
 * @method integer getVulId() Obtain Vulnerability ID. This parameter can be left blank if FixId is specified.
 * @method void setVulId(integer $VulId) Set Vulnerability ID. This parameter can be left blank if FixId is specified.
 * @method string getQuuid() Obtain Host QUUID. This parameter can be used together with VulId to query the details of the last fixing task on a specific host.
 * @method void setQuuid(string $Quuid) Set Host QUUID. This parameter can be used together with VulId to query the details of the last fixing task on a specific host.
 */
class DescribeVulFixStatusRequest extends AbstractModel
{
    /**
     * @var integer Task ID. This parameter can be left blank if VulId is specified.
     */
    public $FixId;

    /**
     * @var integer Vulnerability ID. This parameter can be left blank if FixId is specified.
     */
    public $VulId;

    /**
     * @var string Host QUUID. This parameter can be used together with VulId to query the details of the last fixing task on a specific host.
     */
    public $Quuid;

    /**
     * @param integer $FixId Task ID. This parameter can be left blank if VulId is specified.
     * @param integer $VulId Vulnerability ID. This parameter can be left blank if FixId is specified.
     * @param string $Quuid Host QUUID. This parameter can be used together with VulId to query the details of the last fixing task on a specific host.
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
        if (array_key_exists("FixId",$param) and $param["FixId"] !== null) {
            $this->FixId = $param["FixId"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }
    }
}
