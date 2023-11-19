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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Origin group information.
 *
 * @method string getGroupId() Obtain The ID of the origin group.
 * @method void setGroupId(string $GroupId) Set The ID of the origin group.
 * @method string getName() Obtain The name of the origin group.
 * @method void setName(string $Name) Set The name of the origin group.
 * @method string getType() Obtain The origin group type. Values:
<li>`GENERAL`: General origin group</li>
<li>`HTTP`: HTTP-specific origin group</li>
 * @method void setType(string $Type) Set The origin group type. Values:
<li>`GENERAL`: General origin group</li>
<li>`HTTP`: HTTP-specific origin group</li>
 * @method array getRecords() Obtain Details of the origin record.
 * @method void setRecords(array $Records) Set Details of the origin record.
 * @method array getReferences() Obtain List of instances referencing this origin group.	
 * @method void setReferences(array $References) Set List of instances referencing this origin group.	
 * @method string getCreateTime() Obtain Creation time of the origin group.
 * @method void setCreateTime(string $CreateTime) Set Creation time of the origin group.
 * @method string getUpdateTime() Obtain The update time of the origin group.
 * @method void setUpdateTime(string $UpdateTime) Set The update time of the origin group.
 * @method string getHostHeader() Obtain Origin-pull host header
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setHostHeader(string $HostHeader) Set Origin-pull host header
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class OriginGroup extends AbstractModel
{
    /**
     * @var string The ID of the origin group.
     */
    public $GroupId;

    /**
     * @var string The name of the origin group.
     */
    public $Name;

    /**
     * @var string The origin group type. Values:
<li>`GENERAL`: General origin group</li>
<li>`HTTP`: HTTP-specific origin group</li>
     */
    public $Type;

    /**
     * @var array Details of the origin record.
     */
    public $Records;

    /**
     * @var array List of instances referencing this origin group.	
     */
    public $References;

    /**
     * @var string Creation time of the origin group.
     */
    public $CreateTime;

    /**
     * @var string The update time of the origin group.
     */
    public $UpdateTime;

    /**
     * @var string Origin-pull host header
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $HostHeader;

    /**
     * @param string $GroupId The ID of the origin group.
     * @param string $Name The name of the origin group.
     * @param string $Type The origin group type. Values:
<li>`GENERAL`: General origin group</li>
<li>`HTTP`: HTTP-specific origin group</li>
     * @param array $Records Details of the origin record.
     * @param array $References List of instances referencing this origin group.	
     * @param string $CreateTime Creation time of the origin group.
     * @param string $UpdateTime The update time of the origin group.
     * @param string $HostHeader Origin-pull host header
Note: This field may return·null, indicating that no valid values can be obtained.
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
