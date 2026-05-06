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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Lane group
 *
 * @method string getName() Obtain lane name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set lane name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getID() Obtain Lane group ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setID(string $ID) Set Lane group ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTrafficEntries() Obtain Lane entry service list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTrafficEntries(array $TrafficEntries) Set Lane entry service list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDestinations() Obtain Lane service list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDestinations(array $Destinations) Set Lane service list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Lane group description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Lane group description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRevision() Obtain Rule content summary
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRevision(string $Revision) Set Rule content summary
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Modification time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Modification time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConsistency() Obtain Rule consistency status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsistency(string $Consistency) Set Rule consistency status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRules() Obtain Lane rule list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRules(array $Rules) Set Lane rule list
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DeleteGovernanceLaneGroup extends AbstractModel
{
    /**
     * @var string lane name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Lane group ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ID;

    /**
     * @var array Lane entry service list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TrafficEntries;

    /**
     * @var array Lane service list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Destinations;

    /**
     * @var string Lane group description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Rule content summary
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Revision;

    /**
     * @var string Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Modification time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyTime;

    /**
     * @var string Rule consistency status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Consistency;

    /**
     * @var array Lane rule list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Rules;

    /**
     * @param string $Name lane name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ID Lane group ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TrafficEntries Lane entry service list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Destinations Lane service list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Lane group description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Revision Rule content summary
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Modification time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Consistency Rule consistency status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Rules Lane rule list
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("TrafficEntries",$param) and $param["TrafficEntries"] !== null) {
            $this->TrafficEntries = [];
            foreach ($param["TrafficEntries"] as $key => $value){
                $obj = new LaneTrafficEntry();
                $obj->deserialize($value);
                array_push($this->TrafficEntries, $obj);
            }
        }

        if (array_key_exists("Destinations",$param) and $param["Destinations"] !== null) {
            $this->Destinations = [];
            foreach ($param["Destinations"] as $key => $value){
                $obj = new GovernanceServiceDestination();
                $obj->deserialize($value);
                array_push($this->Destinations, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Revision",$param) and $param["Revision"] !== null) {
            $this->Revision = $param["Revision"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Consistency",$param) and $param["Consistency"] !== null) {
            $this->Consistency = $param["Consistency"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new GovernanceLaneRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
