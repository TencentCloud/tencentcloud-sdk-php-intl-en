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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Origin server group information
 *
 * @method string getGroupId() Obtain Origin server group ID.
 * @method void setGroupId(string $GroupId) Set Origin server group ID.
 * @method string getName() Obtain Origin server group name.
 * @method void setName(string $Name) Set Origin server group name.
 * @method string getType() Obtain Origin server group type. Valid values:
<li>GENERAL: general origin group;</li>
<li>HTTP: HTTP-specific origin group.</li>
 * @method void setType(string $Type) Set Origin server group type. Valid values:
<li>GENERAL: general origin group;</li>
<li>HTTP: HTTP-specific origin group.</li>
 * @method array getRecords() Obtain Origin server record information.
 * @method void setRecords(array $Records) Set Origin server record information.
 * @method array getReferences() Obtain List of instances that reference the origin group.	
 * @method void setReferences(array $References) Set List of instances that reference the origin group.	
 * @method string getCreateTime() Obtain Origin group creation time.
 * @method void setCreateTime(string $CreateTime) Set Origin group creation time.
 * @method string getUpdateTime() Obtain Origin-pull group update time.
 * @method void setUpdateTime(string $UpdateTime) Set Origin-pull group update time.
 * @method string getHostHeader() Obtain Origin-pull Host Header.
 * @method void setHostHeader(string $HostHeader) Set Origin-pull Host Header.
 */
class OriginGroup extends AbstractModel
{
    /**
     * @var string Origin server group ID.
     */
    public $GroupId;

    /**
     * @var string Origin server group name.
     */
    public $Name;

    /**
     * @var string Origin server group type. Valid values:
<li>GENERAL: general origin group;</li>
<li>HTTP: HTTP-specific origin group.</li>
     */
    public $Type;

    /**
     * @var array Origin server record information.
     */
    public $Records;

    /**
     * @var array List of instances that reference the origin group.	
     */
    public $References;

    /**
     * @var string Origin group creation time.
     */
    public $CreateTime;

    /**
     * @var string Origin-pull group update time.
     */
    public $UpdateTime;

    /**
     * @var string Origin-pull Host Header.
     */
    public $HostHeader;

    /**
     * @param string $GroupId Origin server group ID.
     * @param string $Name Origin server group name.
     * @param string $Type Origin server group type. Valid values:
<li>GENERAL: general origin group;</li>
<li>HTTP: HTTP-specific origin group.</li>
     * @param array $Records Origin server record information.
     * @param array $References List of instances that reference the origin group.	
     * @param string $CreateTime Origin group creation time.
     * @param string $UpdateTime Origin-pull group update time.
     * @param string $HostHeader Origin-pull Host Header.
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = [];
            foreach ($param["Records"] as $key => $value){
                $obj = new OriginRecord();
                $obj->deserialize($value);
                array_push($this->Records, $obj);
            }
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new OriginGroupReference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("HostHeader",$param) and $param["HostHeader"] !== null) {
            $this->HostHeader = $param["HostHeader"];
        }
    }
}
