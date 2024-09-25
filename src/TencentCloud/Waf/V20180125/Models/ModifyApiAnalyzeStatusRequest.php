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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApiAnalyzeStatus request structure.
 *
 * @method integer getStatus() Obtain Enabling status
 * @method void setStatus(integer $Status) Set Enabling status
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method array getTargetList() Obtain List of entities to be bulk enabled
 * @method void setTargetList(array $TargetList) Set List of entities to be bulk enabled
 */
class ModifyApiAnalyzeStatusRequest extends AbstractModel
{
    /**
     * @var integer Enabling status
     */
    public $Status;

    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var array List of entities to be bulk enabled
     */
    public $TargetList;

    /**
     * @param integer $Status Enabling status
     * @param string $Domain Domain name
     * @param string $InstanceId Instance ID
     * @param array $TargetList List of entities to be bulk enabled
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TargetList",$param) and $param["TargetList"] !== null) {
            $this->TargetList = [];
            foreach ($param["TargetList"] as $key => $value){
                $obj = new TargetEntity();
                $obj->deserialize($value);
                array_push($this->TargetList, $obj);
            }
        }
    }
}
