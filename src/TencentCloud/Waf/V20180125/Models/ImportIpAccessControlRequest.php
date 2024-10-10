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
 * ImportIpAccessControl request structure.
 *
 * @method array getData() Obtain List of imported IP allowlists/blocklists.
 * @method void setData(array $Data) Set List of imported IP allowlists/blocklists.
 * @method string getDomain() Obtain Specific domain name, for example, test.qcloudwaf.com.
Global domain name, that is, global.
 * @method void setDomain(string $Domain) Set Specific domain name, for example, test.qcloudwaf.com.
Global domain name, that is, global.
 * @method string getSourceType() Obtain Batch protection IP blocklists/allowlists or not. If yes, the value is batch; otherwise, it is empty.
 * @method void setSourceType(string $SourceType) Set Batch protection IP blocklists/allowlists or not. If yes, the value is batch; otherwise, it is empty.
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 */
class ImportIpAccessControlRequest extends AbstractModel
{
    /**
     * @var array List of imported IP allowlists/blocklists.
     */
    public $Data;

    /**
     * @var string Specific domain name, for example, test.qcloudwaf.com.
Global domain name, that is, global.
     */
    public $Domain;

    /**
     * @var string Batch protection IP blocklists/allowlists or not. If yes, the value is batch; otherwise, it is empty.
     */
    public $SourceType;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @param array $Data List of imported IP allowlists/blocklists.
     * @param string $Domain Specific domain name, for example, test.qcloudwaf.com.
Global domain name, that is, global.
     * @param string $SourceType Batch protection IP blocklists/allowlists or not. If yes, the value is batch; otherwise, it is empty.
     * @param string $InstanceId Instance ID
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new IpAccessControlParam();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
