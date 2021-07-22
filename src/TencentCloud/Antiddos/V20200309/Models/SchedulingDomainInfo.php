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
 * Scheduling domain name details
 *
 * @method string getDomain() Obtain Scheduling domain name
 * @method void setDomain(string $Domain) Set Scheduling domain name
 * @method array getLineIPList() Obtain List of line IPs
 * @method void setLineIPList(array $LineIPList) Set List of line IPs
 * @method string getMethod() Obtain Scheduling mode. Valid value: `priority` (priority scheduling).
 * @method void setMethod(string $Method) Set Scheduling mode. Valid value: `priority` (priority scheduling).
 * @method integer getTTL() Obtain TTL value recorded from the scheduling domain name resolution
 * @method void setTTL(integer $TTL) Set TTL value recorded from the scheduling domain name resolution
 * @method integer getStatus() Obtain Running status. Valid values:
`0`: not running
`1`: running
`2`: abnormal
]
 * @method void setStatus(integer $Status) Set Running status. Valid values:
`0`: not running
`1`: running
`2`: abnormal
]
 * @method string getCreatedTime() Obtain Creation time
 * @method void setCreatedTime(string $CreatedTime) Set Creation time
 * @method string getModifyTime() Obtain Last modification time
 * @method void setModifyTime(string $ModifyTime) Set Last modification time
 * @method string getUsrDomainName() Obtain Domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setUsrDomainName(string $UsrDomainName) Set Domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class SchedulingDomainInfo extends AbstractModel
{
    /**
     * @var string Scheduling domain name
     */
    public $Domain;

    /**
     * @var array List of line IPs
     */
    public $LineIPList;

    /**
     * @var string Scheduling mode. Valid value: `priority` (priority scheduling).
     */
    public $Method;

    /**
     * @var integer TTL value recorded from the scheduling domain name resolution
     */
    public $TTL;

    /**
     * @var integer Running status. Valid values:
`0`: not running
`1`: running
`2`: abnormal
]
     */
    public $Status;

    /**
     * @var string Creation time
     */
    public $CreatedTime;

    /**
     * @var string Last modification time
     */
    public $ModifyTime;

    /**
     * @var string Domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $UsrDomainName;

    /**
     * @param string $Domain Scheduling domain name
     * @param array $LineIPList List of line IPs
     * @param string $Method Scheduling mode. Valid value: `priority` (priority scheduling).
     * @param integer $TTL TTL value recorded from the scheduling domain name resolution
     * @param integer $Status Running status. Valid values:
`0`: not running
`1`: running
`2`: abnormal
]
     * @param string $CreatedTime Creation time
     * @param string $ModifyTime Last modification time
     * @param string $UsrDomainName Domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LineIPList",$param) and $param["LineIPList"] !== null) {
            $this->LineIPList = [];
            foreach ($param["LineIPList"] as $key => $value){
                $obj = new IPLineInfo();
                $obj->deserialize($value);
                array_push($this->LineIPList, $obj);
            }
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("UsrDomainName",$param) and $param["UsrDomainName"] !== null) {
            $this->UsrDomainName = $param["UsrDomainName"];
        }
    }
}
